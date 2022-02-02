<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tow;
use Session;
use App\model1;
use DB;

class Usertowcontroller extends Controller
{
    public function towservice()
    {
        $model=model1::all();
    	return view('Users.Tow.Tow',compact('model'));
    }
     public function towinfo($id)
    {
        $towinfodata = DB::table("tbl_tow")
        ->leftjoin("tbl_user","tbl_tow.user_id","=","tbl_user.user_id")
        ->leftjoin("model","tbl_tow.model_id","=","model.model_id")
        ->select("tbl_tow.*","tbl_user.*","model.*")
        ->where("tbl_tow.tow_id","=",$id)
        ->get();
        return view('Users.Tow.towInformation',compact('towinfodata'));
    }
    public function inserttow(Request $request)
    {

         $uid = Session::get("id");
    	$address_line1 = $request->address_1;
    	$address_line2 = $request->address_2;
    	$landmark = $request->landmark;
    	$pincode = $request->pincode;
        $lat=$request->latitude;
        $log=$request->longitude;
    	$desaddr_line1 = $request->desaddress_1;
    	$desaddr_line2 = $request->desaddress_2;
    	$des_landmark = $request->deslandmark;
    	$des_pincode = $request->despincode;
        $deslat=$request->deslatitude;
        $deslog=$request->deslongitude;
        $model=$request->txtmodel;

        $lat1 =$request->latitude;
        $lon1 =$request->longitude;
        $lat2 =$request->deslatitude;
        $lon2 =$request->deslongitude;
        $unit= "k";
        $theta = $lon1 - $lon2; 
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
        $dist = acos($dist); 
        $dist = rad2deg($dist); 
        $miles = $dist * 60 * 1.1515;
        $distance = 0;
        $unit = strtoupper($unit);

        if ($unit == "K") 
        {
            $distance = $miles * 1.609344; 
        } 
        else if ($unit == "N") 
        {
            $distance  = $miles * 0.8684;
        } 
        else 
        {
            $distance  = $miles;
        }

        if($lat1-$lat2==0 && $lon1-$lon2==0)
        {
            return redirect('/Users/Tow')->with("message","Both locations can not be same...");
        }
        else
        {
        $obj = new Tow;
        $obj->user_id=$uid;
	    $obj->addressline1 = $address_line1;
	    $obj->addressline2 = $address_line2;
	    $obj->landmark = $landmark;
	    $obj->pincode = $pincode;
        $obj->lattitude=$lat;
        $obj->longtitude=$log;
        $obj->desaddrline1 = $desaddr_line1;
	   	$obj->desaddrline2 = $desaddr_line2;
       	$obj->desaddrline1 = $des_landmark;
       	$obj->despincode = $des_pincode;
        $obj->deslatitude=$deslat;
        $obj->deslongitude=$deslog;
        $obj->model_id=$model;
        $obj->status="pending";
      	$obj->save();
        $lastId = $obj->tow_id;

        

        $obj = Tow::where("tow_id","=",$lastId)->first();
        $obj->km = $distance;
        $obj->price = $distance*250;
        $obj->save();

      	return redirect('/Users/Tow')->with("success","Request Sent Successfully!");
      }
    }
    public function towstatus(Request $request)
    {
        $id = $request->txttrackid;
        $uid = Session::get("id");
        //echo $id;
        $trackdata = DB::table("tbl_tow")
        ->select("*")
        ->leftjoin("tbl_user","tbl_tow.user_id","=","tbl_user.user_id")
        ->where("tbl_tow.user_id","=",$uid)
        ->where("tbl_tow.tow_id","=",$id)
        ->get();
        $count = $trackdata->count();
        if($count==" ")
        {
            return redirect('Users/Tow/track')->with("success","Invalid Tow-ID");
            // echo "null";
        }
        else
        {
            return view('Users.Tow.tracktow',compact('trackdata'));
            // echo "has value";
        }
    }
    public function towtimeline()
    {
        return view('Users.Tow.track');
    }
    public function towHistory()
    {
        $uid = Session::get("id");
        $towHistorydata = DB::table("tbl_tow")
        ->select("*")
        ->leftjoin("model","tbl_tow.model_id","=","model.model_id")
        ->leftjoin("tbl_user","tbl_tow.user_id","=","tbl_user.user_id")
        ->where("tbl_tow.user_id","=",$uid)
        ->orderBydesc("tbl_tow.request_datetime")
        ->get();
        return view('Users.Tow.towHistory',compact('towHistorydata'));
    }
  

 
}
