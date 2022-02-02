<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services;
use App\servicecart;
use App\ServicesOrder;
use DB;
use App\city;
use Session;
use App\company;
use App\model1;
use App\servicedetail;
class UserServiceController extends Controller
{
	public function servicelist()
    {
    	$servicedata=services::all();
    	return view('Users.Service.servicelist',compact('servicedata'));
    }
    public function servicedetail($id)
    {
        $partdata2=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
         ->where("isactive","=","yes")
         ->limit(5)
        ->get();
    	$servicedata =services::where("service_id","=",$id)->get();
        return view('Users.Service.servicedetail',compact('servicedata','partdata2'));
    }
    public function servicedis()
    {
        $servicedis =services::where("isactive","=","yes")->get();
        return view('Users.Service.servicedisplay',compact('servicedis'));
    }
    public function servicesortcar()
    {
        $servicedis =services::where("type","=","car")->get();
        return view('Users.Service.servicedisplay',compact('servicedis'));
    }
    public function servicesortbike()
    {
        $servicedis =services::where("type","=","bike")->get();
        return view('Users.Service.servicedisplay',compact('servicedis'));
    }
    public function getVehicleInfo(Request $request)
    {
        $modelid = $request->txtmodel;
        $vehicleNumber = $request->txtvehiclenumber;
        $company_id = $request->cid;

        Session::put('modelID',$modelid);
        Session::put('vehicleNumber',$vehicleNumber);
        Session::put('companyID',$company_id);

        return redirect('/Users/Service/serviceCart');
    }
    public function vehicleInfopage()
    {
        $brand = company::all();

        return view('Users.Service.vehicleInfo',compact('brand'));
    }
    public function getmodelsService(Request $request)
    {
      $cid = $request->cid;
      $modeldata =model1::where("company_id","=",$cid)->get();
      echo json_encode($modeldata);
    }
    public function serviceCart()
    {
        $uid = Session::get("id");
        $modelID = Session::get("modelID");
        $modeldata = DB::table("model")->where("model_id","=",$modelID)->get();
        $cartdata=DB::table("tbl_servicecart")
        ->select("*")
        ->leftjoin("services","tbl_servicecart.service_id","=","services.service_id")
        ->leftjoin("tbl_user","tbl_servicecart.user_id","=","tbl_user.user_id")
        ->where("tbl_servicecart.user_id","=",$uid)
        ->get();
        $city = Session::get('city');

        $citydata = DB::table("cities")
        ->select('city_name')
        ->where("city_name","=",$city)
        ->get();

        $userdata = DB::table("tbl_user")
        ->select("*")
        ->where("tbl_user.user_id","=",$uid)
        ->get();

        if(!Session::has('address1'))
        {
            return redirect('/Users/Service/getInfopage');     
        }
        elseif(!Session::has('modelID'))
        {
            return redirect('/Users/Service/vehicleInfo');
        }
        else
        {
            return view('Users.Service.serviceCart',compact('cartdata','userdata','citydata','modeldata'));
        }
    }
    public function getInfopage()
    {
        $citydata = city::all();
        return view('Users.Service.getInfopage',compact('citydata'));
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

        return redirect('/Users/Service/serviceCart');
    }
    public function deleteservice($id)
    {
        // $id = $request->deleteid;
        //echo $id;
        DB::delete('delete from tbl_servicecart where servicecart_id = ?',[$id]);
        return redirect('/Users/Service/serviceCart')->with("success","Service Removed Successfully!");
    }
    public function checkedServices(Request $request)
    {
        $services = $request->input('services');
        $uid = Session::get('id');
        foreach ($services as $value) 
        {
            $obj = new servicecart;
            $obj->user_id = $uid;
            $obj->service_id = $value;
            $obj->save();
        }
        return redirect('/Users/Service/serviceCart');
    }
    public function placeServiceOrder(Request $request)
    {
        $type = $request->txttype;
        $pkg_id = $request->txtpkgid;
        $uid = Session::get("id");
        $modelid = Session::get("modelID");
        $vehicleno = Session::get("vehicleNumber");
        $remark = $request->txtremark;
        $address1 = $request->txtaddress1;
        $address2 = $request->txtaddress2;
        $landmark = $request->txtlandmark;
        $pincode = $request->txtpincode;
        $status = "pending";

        $obj = new ServicesOrder;
        $obj->user_id = $uid;
        $obj->model_id = $modelid;
        $obj->vehicale_no = $vehicleno;
        $obj->remark = $remark;
        $obj->total_payment = "";
        $obj->Addressline1 = $address1;
        $obj->Addressline2 = $address2;
        $obj->landmark = $landmark;
        $obj->pincode = $pincode;
        $obj->status = $status;
        $obj->type = $type;
        $obj->save();
        $lastId = $obj->user_vehicle_id ;

        $cartdata=DB::table("tbl_servicecart")
        ->select("*")
        ->leftjoin("services","tbl_servicecart.service_id","=","services.service_id")
        ->leftjoin("tbl_user","tbl_servicecart.user_id","=","tbl_user.user_id")
        ->where("tbl_servicecart.user_id","=",$uid)
        ->get();

        $tot=0;
        foreach($cartdata as $item)
        {
            $obj1 = new servicedetail;
            $obj1->user_vehicle_id = $lastId;
            $obj1->service_id  = $item->service_id;
            $obj1->pkg_id = $pkg_id;
            $obj1->price = $item->service_price;
            $tot = $tot + $obj1->price;
            $obj1->save();
        }
        $obj = ServicesOrder::where("user_vehicle_id","=",$lastId)->first();
        $obj->total_payment = $tot;
        $obj->save();

        DB::delete('delete from tbl_servicecart where user_id = ?',[$uid]);
        
        return redirect('/Users/Service/serviceHistory')->with("success","Your service has been placed successfully.");
    }
    public function serviceHistory()
    {
        $uid = Session::get("id");
        $servicehistorydata = DB::table("tbl_vehicle_service")
        ->select("*")
        ->leftjoin("model","tbl_vehicle_service.model_id","=","model.model_id")
        ->leftjoin("tbl_user","tbl_vehicle_service.user_id","=","tbl_user.user_id")
        ->where("tbl_vehicle_service.user_id","=",$uid)
        ->orderBydesc("tbl_vehicle_service.order_datetime")
        ->get();
        return view('Users.Service.serviceHistory',compact('servicehistorydata'));
    }
    public function serviceInformation($id)
    {
        $uid = Session::get("id");
        $servicehistorydata = DB::table("tbl_vehicle_service")
        ->select("*")
        ->leftjoin("model","tbl_vehicle_service.model_id","=","model.model_id")
        ->leftjoin("tbl_user","tbl_vehicle_service.user_id","=","tbl_user.user_id")
        ->where("tbl_vehicle_service.user_id","=",$uid)
        ->where("tbl_vehicle_service.user_vehicle_id","=",$id)
        ->orderBydesc("tbl_vehicle_service.order_datetime")
        ->get();
        $servicedata = services::all();
        $modeldata = model1::all();
        $serviceinfodata = DB::table("service_detail")
        ->select("*")
        ->leftjoin("tbl_vehicle_service","service_detail.user_vehicle_id","=","tbl_vehicle_service.user_vehicle_id")
        ->leftjoin("services","service_detail.service_id","=","services.service_id")
         ->leftjoin("model","tbl_vehicle_service.model_id","=","model.model_id")
        ->where("tbl_vehicle_service.user_id","=",$uid)
        ->where("tbl_vehicle_service.user_vehicle_id","=",$id)
        ->get();
        return view('Users.Service.serviceInformation',compact('servicehistorydata','serviceinfodata','servicedata','modeldata'));
    }
}
