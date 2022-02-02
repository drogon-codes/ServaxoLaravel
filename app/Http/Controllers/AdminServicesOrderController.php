<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicesOrder;
use App\user1;
use App\Model1;
use DB;

class AdminServicesOrderController extends Controller
{
    public function AddNewOrder()
    {
        $modeldata=Model1::All();
        $userdata=user1::All();
        return view('admin.ServicesOrder.AddNewOrder',compact('modeldata','userdata'));
    }
    public function updateserviceorder($id)
    {
        $servicedata =ServicesOrder::where("user_vehicle_id","=",$id)->get();
        $modeldata=Model1::All();
        $userdata=user1::All();
        return view('admin.ServicesOrder.updateserviceorder',compact('modeldata','userdata','servicedata'));
    }
    public function saveserviceorder(Request $request)
    {
        $uid = $request->txtuserid;
        $mid = $request->txtmodelid;
        $vno = $request->txtvehicleno;
        $remark = $request->txtremark;
        $totalpayment = $request->txttotal;
        $picupdate = $request->txtpicupdate;
        $add1 = $request->txtadd1;
        $add2 = $request->txtadd2;
        $pincode = $request->txtpincode;
        $landmark = $request->txtlandmark;
        $status = $request->optorder;
        $order = $request->txtorderdate;

        //Update
        $obj = ServicesOrder::where("user_vehicle_id","=",$request->sorderid)->first();
        $obj->user_id  = $uid;
        $obj->model_id  = $mid;
        $obj->vehicale_no = $vno;
        $obj->remark = $remark;
        $obj->total_payment = $totalpayment;
        $obj->pic_up_date = $picupdate;
        $obj->Addressline1 = $add1;
        $obj->Addressline2 = $add2;
        $obj->pincode = $pincode;
        $obj->landmark = $landmark;
        $obj->status = $status;
        $obj->order_datetime = $order;
        $obj->save();
        //Update

        return redirect('/admin/ServicesOrder/ViewNewOrder')->with("success","Data Updated Successfully!");
    }
    public function ViewNewOrder()
    {
        //$servicedata=ServicesOrder::All();
        $servicedata=DB::table("tbl_vehicle_service")
        ->leftjoin("tbl_user","tbl_vehicle_service.user_id","=","tbl_user.user_id")
        ->leftjoin("model","tbl_vehicle_service.model_id","=","model.model_id")
        ->select("tbl_vehicle_service.*","tbl_user.name","model.model_name")
        ->where("status","=","pending")
        ->get();
    	return view('admin.ServicesOrder.ViewNewOrder',compact('servicedata'));
    }
    public function ViewProcessOrder()
    {
        //$servicedata=ServicesOrder::All();
       $servicedata=DB::table("tbl_vehicle_service")
        ->leftjoin("tbl_user","tbl_vehicle_service.user_id","=","tbl_user.user_id")
        ->leftjoin("model","tbl_vehicle_service.model_id","=","model.model_id")
        ->select("tbl_vehicle_service.*","tbl_user.name","model.model_name")
        ->where("status","=","processing")
        ->get();
    	return view('admin.ServicesOrder.ViewProcessOrder',compact('servicedata'));
    }
    public function ViewCompleteOrder()
    {
        //$servicedata=ServicesOrder::All();
        $servicedata=DB::table("tbl_vehicle_service")
        ->leftjoin("tbl_user","tbl_vehicle_service.user_id","=","tbl_user.user_id")
        ->leftjoin("model","tbl_vehicle_service.model_id","=","model.model_id")
        ->select("tbl_vehicle_service.*","tbl_user.name","model.model_name")
        ->where("status","=","complete")
        ->get();
    	return view('admin.ServicesOrder.ViewCompleteOrder',compact('servicedata'));
    }
    public function ViewCancelOrder()
    {
        //$servicedata=ServicesOrder::All();
       $servicedata=DB::table("tbl_vehicle_service")
        ->leftjoin("tbl_user","tbl_vehicle_service.user_id","=","tbl_user.user_id")
        ->leftjoin("model","tbl_vehicle_service.model_id","=","model.model_id")
        ->select("tbl_vehicle_service.*","tbl_user.name","model.model_name")
        ->where("status","=","cancelled")
        ->get();
        return view('admin.ServicesOrder.ViewCancelOrder',compact('servicedata'));
    }
    public function changeorderstatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = ServicesOrder::where("user_vehicle_id","=",$id)->first();
         if($status=="processing")
         {
            $obj->status = "complete";
         }
         else
         {
            $obj->status = "processing";
         }
         $obj->save();
        return redirect('/admin/ServicesOrder/ViewNewOrder')->with("success","Status Updated Successfully!");
    }
    public function cancelorder(Request $request)
    {
        //$cancel="cancel";
        $id=$request->stid;
        $status=$request->txtstatus;
        $obj = ServicesOrder::where("user_vehicle_id","=",$id)->first();
        $obj->status = "cancelled";
        $obj->save();
        return redirect('/admin/ServicesOrder/ViewNewOrder')->with("success","Order Cancelled Successfully!");
     }
    public function deletenewserviceorder(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_vehicle_service where user_vehicle_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/ServicesOrder/ViewNewOrder')->with("success","Data Deleted Successfully!");
    }
    public function deleteprocessserviceorder(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_vehicle_service where user_vehicle_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/ServicesOrder/ViewProcessOrder')->with("success","Data Deleted Successfully!");
    }
    public function deletecompleteserviceorder(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_vehicle_service where user_vehicle_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/ServicesOrder/ViewCompleteOrder')->with("success","Data Deleted Successfully!");
    }
    public function insertserviceorder(Request $request)
    {
        $uid = $request->txtuserid;
        $mid = $request->txtmodelid;
        $vno = $request->txtvehicleno;
        $remark = $request->txtremark;
        $totalpayment = $request->txttotal;
        $picupdate = $request->txtpicupdate;
        $add1 = $request->txtadd1;
        $add2 = $request->txtadd2;
        $pincode = $request->txtpincode;
        $landmark = $request->txtlandmark;
        $status = $request->optorder;
        $order = $request->txtorderdate;

        $data = ServicesOrder::where("user_id","=",$uid)->where("model_id","=",$mid)->where("vehicale_no","=",$vno)->get();
        $count = $data->count();
        if($count<=0)
        {   

            //insert
            $obj = new ServicesOrder;
            $obj->user_id  = $uid;
            $obj->model_id  = $mid;
            $obj->vehicale_no = $vno;
            $obj->remark = $remark;
            $obj->total_payment = $totalpayment;
            $obj->pic_up_date = $picupdate;
            $obj->Addressline1 = $add1;
            $obj->Addressline2 = $add2;
            $obj->pincode = $pincode;
            $obj->landmark = $landmark;
            $obj->status = $status;
            $obj->order_datetime = $order;
            $obj->save();
            //insert

            return redirect('/admin/ServicesOrder/AddNewOrder')->with("success","Data Inserted Successfully!");
        }
        else
        {
            return redirect('/admin/ServicesOrder/AddNewOrder')->with("message","Data Already Inserted!");
        }
    }
}