<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use App\Part;
use App\model1;
use App\city;
use Session;
use PaytmWallet;
use DB;


class UserOrderController extends Controller
{
    public function OrderHistory()
    {
        $uid = Session::get("id");
    	$orderhistorydata = DB::table("tbl_order")
    	->select("*")
        ->leftjoin("cities","tbl_order.city_id","=","cities.city_id")
        ->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")
        ->where("tbl_order.user_id","=",$uid)
        ->orderBydesc("tbl_order.order_datetime")
        ->get();
    	return view('Users.Order.OrderHistory',compact('orderhistorydata'));
    }
    public function OrderInformation($id)
    {
        $uid = Session::get("id");
    	$orderhistorydata = DB::table("tbl_order")
        ->select("*")
        ->leftjoin("cities","tbl_order.city_id","=","cities.city_id")
        ->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")
        ->where("tbl_order.user_id","=",$uid)
        ->where("tbl_order.order_id","=",$id)
        ->get();
        $partdata = Part::all();
        $modeldata = model1::all();
    	$orderinfodata = DB::table("tbl_detail")
    	->select("*")
        ->leftjoin("tbl_order","tbl_detail.order_id","=","tbl_order.order_id")
        ->leftjoin("parts","tbl_detail.part_id","=","parts.part_id")
         ->leftjoin("model","parts.model_id","=","model.model_id")
        ->where("tbl_order.user_id","=",$uid)
        ->where("tbl_order.order_id","=",$id)
        ->get();
		return view('Users.Order.OrderInformation',compact('orderhistorydata','orderinfodata','partdata','modeldata'));
    }
    public function cancelorder(Request $request)
    {
        $uid = Session::get("id");
        $id = $request->deleteid;
        $obj = Order::where("order_id","=",$id)->first();
        $obj->status = "cancelled";
        $obj->save();
        return redirect('/Users/Order/OrderHistory')->with("success","Your order has been cancelled successfully!! If you've paid, your amount will be credited to your bank account within 7 working days.");
    }
    public function payment(Request $request)
    {
        
    }
    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');
        
        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        
        if($transaction->isSuccessful()){
          return redirect('/Users/Order/OrderHistory')->with("success","Your order has been placed successfully. Kindly check your mail for invoice and keep tracking your order with given OrderID...");
        }else if($transaction->isFailed()){
          //Transaction Failed
        }else if($transaction->isOpen()){
          //Transaction Open/Processing
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
    }    
    public function placeOrder(Request $request)
    {
        $uid = Session::get("id");
        $name = Session::get("name");
        $email = Session::get("email");
        $contactno = Session::get("contact");
        $address1 = $request->txtaddress1;
        $address2 = $request->txtaddress2;
        $landmark = $request->txtlandmark;
        $city = $request->city;
        $pincode = $request->txtpincode;
        $status = "pending";
        $paymode = "Online";
        $ispaid = "N";

        $obj = new Order;
        $obj->user_id = $uid;
        $obj->total_payment = "";
        $obj->ispay = $ispaid;
        $obj->paymode = $paymode;
        $obj->addressline1 = $address1;
        $obj->addressline2 = $address2;
        $obj->landmark = $landmark;
        $obj->pincode = $pincode;
        $obj->city_id = $city;
        $obj->status = $status;
        $obj->save();
        $lastId = $obj->order_id;
        Session::put('orderId',$obj->order_id);

        $cartdata=DB::table("tbl_cart")
        ->select("*")
        ->leftjoin("parts","tbl_cart.part_id","=","parts.part_id")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("tbl_user","tbl_cart.user_id","=","tbl_user.user_id")
        ->where("tbl_cart.user_id","=",$uid)
        ->get();

        $tot=0;
        foreach($cartdata as $item)
        {
            $obj1 = new OrderDetail;
            $obj1->order_id = $lastId;
            $obj1->part_id = $item->part_id;
            $obj1->qty = $item->qty;
            $obj1->amount = $item->price*$item->qty;
            $tot = $tot + $obj1->amount;
            $obj1->save();
        }
        $obj = Order::where("order_id","=",$lastId)->first();
        $obj->total_payment = $tot;
        $obj->save();
        Session::put('totalPayment',$obj->total_payment);

        DB::delete('delete from tbl_cart where user_id = ?',[$uid]);

        $orderID = Session::get('orderId');
        $userID = Session::get('id');
        $mobileNumber = Session::get('contact');
        $emailID = Session::get('email');
        $totalPayment = Session::get('totalPayment');
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => $orderID,
          'user' => $userID,
          'mobile_number' => $mobileNumber,
          'email' => $emailID,
          'amount' => $totalPayment,
          'callback_url' => url('payment/status')
        ]);
        $obj = Order::where("order_id","=",$lastId)->first();
        $obj->ispay = "Y";
        $obj->save();
        return $payment->receive();
    }
    public function getInfopage()
    {
        $citydata = city::all();
        return view('Users.Order.userInfo',compact('citydata'));
    }
    public function getInfo(Request $request)
    {
        $address1 = $request->txtaddress1;
        $address2 = $request->txtaddress2;
        $landmark = $request->txtlandmark;
        $city = $request->txtcity;
        $pincode = $request->txtpincode;

        Session::put('address1',$address1);
        Session::put('address2',$address2);
        Session::put('landmark',$landmark);
        Session::put('city',$city);
        Session::put('pincode',$pincode);

        return redirect('/Users/Cart');
    }
}
