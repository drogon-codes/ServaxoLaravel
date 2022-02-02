<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;

class AdminOrderController extends Controller
{
    public function ChangeOrderStatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = Order::where("order_id","=",$id)->first();
         if($status=="processing")
         {
            $obj->status = "shipped";
         }
         elseif($status=="shipped")
         {
            $obj->status = "completed";
         }
         else
         {
            $obj->status="processing";
         }
         $obj->save();
        return redirect('admin/Order/ViewNewOrder')->with("success","Status Updated Successfully!");
    }
    public function CancelOrder(Request $request)
    {
        //$cancel="cancel";
        $id=$request->stid1;
        $status=$request->txtstatus1;
        $obj = Order::where("order_id","=",$id)->first();
        $obj->status = "cancelled";
        $obj->save();
        return redirect('/admin/Order/ViewCancelOrder')->with("success","Status Cancelled Successfully!");
     }
    public function ViewNewOrder()
    {
        $orderdata=DB::table("tbl_order")
        ->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")
        ->leftjoin("cities","tbl_order.city_id","=","cities.city_id")
        ->select("tbl_order.*","tbl_user.*","cities.*")
        ->where("status","=","pending")
        ->get();
        return view('admin.Order.ViewNewOrder',compact('orderdata'));
    }
    public function ViewProcessOrder()
    {
        $orderdata=DB::table("tbl_order")
        ->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")
        ->leftjoin("cities","tbl_order.city_id","=","cities.city_id")
        ->select("tbl_order.*","tbl_user.*","cities.*")
        ->where("status","=","processing")
        ->get();
        return view('admin.Order.ViewProcessOrder',compact('orderdata'));
    }
     public function ViewShippedOrder()
    {
        $orderdata=DB::table("tbl_order")
        ->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")
        ->leftjoin("cities","tbl_order.city_id","=","cities.city_id")
        ->select("tbl_order.*","tbl_user.*","cities.*")
        ->where("status","=","shipped")
        ->get();
        return view('admin.Order.ViewProcessOrder',compact('orderdata'));
    }
    public function ViewCompleteOrder()
    {
        $orderdata=DB::table("tbl_order")
        ->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")
        ->leftjoin("cities","tbl_order.city_id","=","cities.city_id")
        ->select("tbl_order.*","tbl_user.*","cities.*")
        ->where("status","=","completed")
        ->get();
        return view('admin.Order.ViewCompleteOrder',compact('orderdata'));
    }
    public function ViewCancelOrder()
    {
        $orderdata=DB::table("tbl_order")
        ->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")
        ->leftjoin("cities","tbl_order.city_id","=","cities.city_id")
        ->select("tbl_order.*","tbl_user.*","cities.*")
        ->where("status","=","cancelled")
        ->get();
        return view('admin.Order.ViewCancelOrder',compact('orderdata'));
    }
    public function deleteneworder(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_order where order_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Order/ViewNewOrder')->with("success","Data Deleted Successfully!");
    }
    public function deleteprocessorder(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_order where order_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Order/ViewProcessOrder')->with("success","Data Deleted Successfully!");
    }
    public function deletecompleteorder(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_order where order_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Order/ViewCompleteOrder')->with("success","Data Deleted Successfully!");
    }
    public function deletecancelorder(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_order where order_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Order/ViewCancelOrder')->with("success","Data Deleted Successfully!");
    }
}
