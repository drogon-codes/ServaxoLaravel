<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package;
use App\company;
use App\model1;
use App\ServicesOrder;
use App\servicedetail;
use App\services;
use DB;
use Session;
class UserPackagesController extends Controller
{
    public function Package()
    {
    	$packagedata=package::where("isactive","=","yes")->get();
    	// return view('Users.Service.servicelist');
    	return view ('Users.Packages.Package',compact('packagedata'));
    }
    public function vehicleInfopage()
    {
    	$brand = company::all();

    	return view('Users.Packages.vehicleInfo',compact('brand'));
    }
    public function getmodelsPackage(Request $request)
    {
      $cid = $request->cid;
      $modeldata =model1::where("company_id","=",$cid)->get();
      echo json_encode($modeldata);
    }
    public function getVehicleInfo(Request $request)
    {
    	$modelid = $request->txtmodel;
    	$vehicleNumber = $request->txtvehiclenumber;
    	$company_id = $request->cid;

    	Session::put('modelID',$modelid);
    	Session::put('vehicleNumber',$vehicleNumber);
    	Session::put('companyID',$company_id);

    	return redirect('/Users/Service/');
    }
    public function SelectPackage($id)
    {
       $uid = Session::get("id");
        $modelID = Session::get("modelID");
        $modeldata = DB::table("model")->where("model_id","=",$modelID)->get();
        $cartdata=DB::table("tbl_pkg_service")
        ->leftjoin("tbl_pkg","tbl_pkg_service.pkg_id","=","tbl_pkg.pkg_id")
        ->leftjoin("services","tbl_pkg_service.service_id","=","services.service_id")
        ->select("tbl_pkg_service.*","tbl_pkg.*","services.*")
        ->where("tbl_pkg.pkg_id","=",$id)
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
            return view('Users.Packages.package_cart',compact('cartdata','userdata','citydata','modeldata'));
        } 
    }
    public function placePackageOrder(Request $request)
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

        $cartdata=DB::table("tbl_pkg_service")
        ->leftjoin("tbl_pkg","tbl_pkg_service.pkg_id","=","tbl_pkg.pkg_id")
        ->leftjoin("services","tbl_pkg_service.service_id","=","services.service_id")
        ->select("tbl_pkg_service.*","tbl_pkg.*","services.*")
        ->where("tbl_pkg.pkg_id","=",$pkg_id)
        ->get();


        $tot=0;
        foreach($cartdata as $item)
        {
            $obj1 = new servicedetail;
            $obj1->user_vehicle_id = $lastId;
            $obj1->service_id = $item->service_id;
            $obj1->pkg_id = $pkg_id;
            $tot = $tot + $item->service_price;
            $discount = $item->discount;
            $obj1->save();
        }
        $obj = ServicesOrder::where("user_vehicle_id","=",$lastId)->first();
        $obj->total_payment = $tot-(($tot*$discount)/100);
        $obj->save();

        DB::delete('delete from tbl_servicecart where user_id = ?',[$uid]);
        
        return redirect('/Users/Service/serviceHistory')->with("success","Your service has been placed successfully.");
    }
    public function packageInformation($id)
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
        $packagedata = DB::table("service_detail")
        ->leftjoin("tbl_vehicle_service","service_detail.user_vehicle_id","=","tbl_vehicle_service.user_vehicle_id")
        ->leftjoin("tbl_pkg","service_detail.pkg_id","=","tbl_pkg.pkg_id")
        ->select("tbl_pkg.*")
        ->where("tbl_vehicle_service.user_id","=",$uid)
        ->where("tbl_vehicle_service.user_vehicle_id","=",$id)
        ->get();
        $serviceinfodata = DB::table("service_detail")
        ->select("*")
        ->leftjoin("tbl_vehicle_service","service_detail.user_vehicle_id","=","tbl_vehicle_service.user_vehicle_id")
        ->leftjoin("services","service_detail.service_id","=","services.service_id")
        ->leftjoin("model","tbl_vehicle_service.model_id","=","model.model_id")
        ->leftjoin("tbl_pkg","service_detail.pkg_id","=","tbl_pkg.pkg_id")
        ->where("tbl_vehicle_service.user_id","=",$uid)
        ->where("tbl_vehicle_service.user_vehicle_id","=",$id)
        ->get();
        return view('Users.Packages.packageInformation',compact('servicehistorydata','serviceinfodata','servicedata','modeldata','cartdata','packagedata'));
    }
    
}
