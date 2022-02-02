<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services;
use DB;

class AdminServicesController extends Controller
{
    public function ViewServices()
    {
        $servicedata=services::all();
        return view('admin.Services.ViewServices',compact('servicedata'));
    }
    public function changeservicestatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = services::where("service_id","=",$id)->first();
         if($status=="yes")
         {
            $obj->isactive = "no";
         }
         else
         {
            $obj->isactive = "yes";
         }
         $obj->save();
        return redirect('admin/Services/ViewServices')->with("success","Status Updated Successfully!");
    }
    public function AddServices()
    {
        return view('admin.Services.AddServices');
    }
    public function updateservices($id)
    {
        $servicedata =services::where("service_id","=",$id)->get();
        return view('admin.Services.updateservices',compact('servicedata'));
    }
    public function saveservice(Request $request)
    {
        if($request->hasFile('serviceimg'))
        {
            //upload
            $imgname = $request->serviceimg;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/serv_img'), $newname);
        }
        else
        {
            $newname=$request->oldimg;
        }

        $servicename = $request->txtservicename;
        $img = $request->serviceimg;
        $servicedes = $request->txtservicedes;
        $serviceprice = $request->txtserviceprice;
        $isactive = $request->radradio;
        $servicetype = $request->optradio;
        
        //update
        $obj = services::where("service_id","=",$request->serviceid)->first();
        $obj->service_name = $servicename;
        $obj->service_img = $newname;
        $obj->service_description = $servicedes;
        $obj->service_price = $serviceprice;
        $obj->isactive = $isactive;
        $obj->type = $servicetype;
        $obj->save();
        //update

        return redirect('admin/Services/ViewServices')->with("success","Data Updated Successfully!");
    }
    public function insertservice(Request $request)
    {
        $servicename = $request->txtservicename;
        $img = $request->serviceimg;
        $servicedes = $request->txtservicedes;
        $serviceprice = $request->txtserviceprice;
        $isactive = $request->radradio;
        $servicetype = $request->optradio;

        $data = services::where("service_name","=",$servicename)->get();
        $count = $data->count();

        if($count<=0)
        {   

            $imgname = $request->serviceimg;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/serv_img'), $newname);
        
            //insert
            $obj = new services;
            $obj->service_name = $servicename;
            $obj->service_img = $newname;
            $obj->service_description = $servicedes;
            $obj->service_price = $serviceprice;
            $obj->isactive = $isactive;
            $obj->type = $servicetype;
            $obj->save();
            //insert

            return redirect('admin/Services/AddServices')->with("success","Data Inserted Successfully!");
        }
        else
        {
            return redirect('admin/Services/AddServices')->with("message","Data Already Exist!");   
        }
    }
    public function deleteservice(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from services where service_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Services/ViewServices')->with("success","Data Deleted Successfully!");
    }
}
