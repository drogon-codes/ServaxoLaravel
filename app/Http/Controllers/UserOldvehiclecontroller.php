<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oldvehicle;
use App\model1;
use App\Company;
use App\user1;
use App\State;
use App\city;
use Session;
use DB;

class UserOldvehiclecontroller extends Controller
{
	public function Oldvehicle()
	{		
    $uid=Session::get('id');
		 $oldvehicle=DB::table("old_vehicle")
         ->leftjoin("model","old_vehicle.model_id","=","model.model_id")
         ->leftjoin("tbl_user","old_vehicle.user_id","=","tbl_user.user_id")
         ->leftjoin("companies","model.company_id","=","companies.company_id")
         ->leftjoin("states","old_vehicle.state_id","=","states.state_id")
        ->leftjoin("cities","old_vehicle.city_id","=","cities.city_id")
       

         ->select("old_vehicle.*","tbl_user.*","companies.*","states.*","cities.*","model.*")
         ->where("isactive","=","yes")
         ->where("old_vehicle.user_id","!=",$uid)
         ->get();
      // $old=DB::table("model")
      
     
   		return view('Users.OldVehicle.oldvehicle',compact('oldvehicle'));
   	}
    public function getmodels(Request $request)
    {
      $cid = $request->cid;
      $modeldata =model1::where("company_id","=",$cid)->get();
      echo json_encode($modeldata);
    }
     public function getstate(Request $request)
    {
      $sid = $request->sid;
      $city =city::where("state_id","=",$sid)->get();
      echo json_encode($city);
    }
   	public function oldvehicleform()
   	{ 
        $brand=Company::get();
        $state=State::all();
        $modeldata=model1::all();
        $olddata=DB::table("old_vehicle")
         ->leftjoin("model","old_vehicle.model_id","=","model.model_id")
         ->leftjoin("tbl_user","old_vehicle.user_id","=","tbl_user.user_id")
         ->select("old_vehicle.*","model.model_name","tbl_user.name")
        
         ->get();
         

   		return view('Users.OldVehicle.oldvehicleform',compact('brand','olddata','state','modeldata'));
   	}
      public function updatevehicle($id)
    { 
        $uid=Session::get('id');
        $brand=Company::get();
        $state=State::all();
        $citydata=city::all();
        $modeldata=model1::all();
        $olddata=DB::table("old_vehicle")
         ->leftjoin("model","old_vehicle.model_id","=","model.model_id")
         ->leftjoin("tbl_user","old_vehicle.user_id","=","tbl_user.user_id")
         ->select("old_vehicle.*","model.model_name","tbl_user.name")
        ->where("old_vehicle.user_id","=",$uid)
        ->where("o_id","=",$id)
         ->get();
         

      return view('Users.OldVehicle.updvehicle',compact('brand','olddata','state','modeldata','citydata'));
    }
   	public function OldVehicleDetail($id)
   	{
   		 $olddata=DB::table("old_vehicle")
         ->leftjoin("model","old_vehicle.model_id","=","model.model_id")
         ->leftjoin("tbl_user","old_vehicle.user_id","=","tbl_user.user_id")
         ->leftjoin("companies","model.company_id","=","companies.company_id")
         ->leftjoin("states","old_vehicle.state_id","=","states.state_id")
        ->leftjoin("cities","old_vehicle.city_id","=","cities.city_id")
         ->select("old_vehicle.*","tbl_user.*","companies.*","states.*","cities.*","model.*")

         ->where("o_id","=",$id)
         ->get();
         
   		return view('Users.OldVehicle.oldvehicledetail',compact('olddata'));
   	}
   	 public function insertvehicle(Request $request)
   	 {
      $user_id = Session("id");
      $company=$request->cid;
   	 	$year = $request->txtyear;
      $model=$request->txtmodel;
    	$vehicleno = $request->txtvehiclenumber;
		$vkm = $request->txtkm;
    $price=$request->txtprice;
    	$img1 = $request->txtimg1;
    	$img2 = $request->txtimg2;
    	$img3 = $request->txtimg3;
    	$aboutvehicle = $request->txtaboutvehicle;
      $state=$request->sid;
      $city=$request->txtcity;
    	$addr1 = $request->txtaddrsline1;
        $addr2= $request->txtaddrsline2;
    	$landmark = $request->txtlandmark;
    	$pincode = $request->txtpincode;
      $contact = $request->txtcontact;



			      $imgname = $request->txtimg1;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/oldvehicle_img'), $newname);

            $imgname1 = $request->txtimg2;//abc.jpg
            $ext1 = $imgname1->getClientOriginalExtension(); //jpg
            $newname1 = time().rand(1111,9999).".".$ext1;//43245564578.jpg
            $imgname1->move(public_path('/oldvehicle_img'), $newname1);

            $imgname2 = $request->txtimg3;//abc.jpg
            $ext2 = $imgname2->getClientOriginalExtension(); //jpg
            $newname2 = time().rand(1111,9999).".".$ext2;//43245564578.jpg
            $imgname2->move(public_path('/oldvehicle_img'), $newname2);


            

        	//insert
        	$obj = new Oldvehicle;
          $obj->user_id = $user_id;
          $obj->company_id=$company;
          $obj->year = $year;
          $obj->model_id = $model;
        	$obj->vehicle_numbers = $vehicleno;
        	$obj->km = $vkm;
          $obj->price=$price;
        	$obj->About_vehicle = $aboutvehicle;
          $obj->state_id=$state;
          $obj->city_id=$city;
        	$obj->img1 = $newname;	
        	$obj->img2 = $newname1;	
        	$obj->img3 = $newname2;
        	$obj->addressline1 = $addr1;
            $obj->addressline2=$addr2;
        	$obj->landmark = $landmark;
        	$obj->pincode = $pincode;	
          $obj->contactno = $contact;       


        	$obj->save();
        	return redirect('Users/Home');
   	 }
     public function myads()
     {
      $uid=Session::get('id');
      $oldvehicle=DB::table("old_vehicle")
         ->leftjoin("model","old_vehicle.model_id","=","model.model_id")
         ->leftjoin("tbl_user","old_vehicle.user_id","=","tbl_user.user_id")
         ->leftjoin("companies","model.company_id","=","companies.company_id")
         ->leftjoin("states","old_vehicle.state_id","=","states.state_id")
        ->leftjoin("cities","old_vehicle.city_id","=","cities.city_id")
       

         ->select("old_vehicle.*","tbl_user.*","companies.*","states.*","cities.*","model.*")
         ->where("isactive","=","yes")
         ->where("old_vehicle.user_id","=",$uid)
         ->get();

        return view('Users.OldVehicle.myads',compact('oldvehicle'));
     }
     public function updateoldvehicle($id)
    {
        $olddata =Oldvehicle::where("o_id","=",$id)->get();
        $citydata=city::All();
        return view('Home.OldVehicle.myads',compact('citydata','olddata'));
    }
     public function saveads(Request $request)
     {
       if($request->hasFile('txtimg1'))
        {
            $imgname = $request->txtimg1;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/oldvehicle_img'), $newname);
        }
        else
        {
            $newname = $request->oldimg;
        }
        if($request->hasFile('txtimg2'))
        {
            $imgname1 = $request->txtimg2;//abc.jpg
            $ext1 = $imgname1->getClientOriginalExtension(); //jpg
            $newname1 = time().rand(1111,9999).".".$ext1;//43245564578.jpg
            $imgname1->move(public_path('/oldvehicle_img'), $newname1);
        }
        else
        {
            $newname1 = $request->oldimg1;
        }
        if($request->hasFile('txtimg3'))
        {
            $imgname2 = $request->txtimg3;//abc.jpg
            $ext2 = $imgname2->getClientOriginalExtension(); //jpg
            $newname2 = time().rand(1111,9999).".".$ext2;//43245564578.jpg
            $imgname2->move(public_path('/oldvehicle_img'), $newname2);
        }
        else
        {
            $newname2 = $request->oldimg2;
        }

        $cityid = $request->txtcity;
        $img1 = $request->newname;
        $img2 = $request->newname1;
        $img3 = $request->newname2;
        $add1 = $request->txtaddrsline1;
        $add2 = $request->txtaddrsline2;
        $landmark = $request->txtlandmark;
        $pincode = $request->txtpincode;
        $com=$request->cid;
        $model=$request->txtmodel;
        $km=$request->txtkm;
        $vno=$request->txtvehiclenumber;
        $des=$request->txtaboutvehicle;
        $price=$request->txtprice;
        $state=$request->sid;
        $cont=$request->txtcontact;
        $year=$request->txtyear;

        //Update
        $obj = Oldvehicle::where("o_id","=",$request->oldid)->first();
        $obj->city_id = $cityid;
        $obj->img1 = $newname;
        $obj->img2 = $newname1;
        $obj->img3 = $newname2;
        $obj->addressline1 = $add1;
        $obj->addressline2 = $add2;
        $obj->landmark = $landmark;
        $obj->pincode = $pincode;
        $obj->contactno = $cont;
        $obj->state_id = $state;
        $obj->km = $km;
        $obj->vehicle_numbers = $vno;
        $obj->About_vehicle = $des;
        $obj->price = $price;
        $obj->model_id = $model;
        $obj->company_id = $com;
        $obj->year = $year;
        $obj->save();
        //Update
        return redirect('/Users/Home')->with("success","Data Updated Successfully!");

       }
        public function deleteoldvehicle(Request $request)
    {
         // echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from old_vehicle where o_id = ?',[$id]);
        return redirect('/Users/OldVehicle/myads')->with("success","Your Ad is Removed...!");
    }
      public function popup()
    {
        return view('Users.OldVehicle.index');
    }
}
