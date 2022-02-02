<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mechanic;
use App\city;
use DB;

class AdminMechanicController extends Controller
{
    public function View_Mechanic()
    {
        $mechanicdata=DB::table("tbl_mechanic")
        ->leftjoin("cities","tbl_mechanic.city_id","=","cities.city_id")
        ->select("tbl_mechanic.*","cities.city_name")
        ->get();
        return view('admin.Mechanic.ViewMechanic',compact('mechanicdata'));
    }
    public function changemechanicstatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = Mechanic::where("mach_id","=",$id)->first();
         if($status=="yes")
         {
            $obj->isactive = "no";
         }
         else
         {
            $obj->isactive = "yes";
         }
         $obj->save();
        return redirect('admin/Mechanic/ViewMechanic')->with("success","Status Updated Successfully!");
    }
    //mechanic view
    public function Add_Mechanic()
    {
        $citydata=city::All();
        return view('admin.Mechanic.AddMechanic',compact('citydata'));
    }
    //mechanic update
    public function updatemechanic($id)
    {
        $mechanicdata =Mechanic::where("mach_id","=",$id)->get();
        $citydata=city::All();
        return view('admin.Mechanic.updatemechanic',compact('citydata','mechanicdata'));
    }
    public function savemechanic(Request $request)
    {
        if($request->hasFile('txtmechanicimage'))
        {
            //upload
            $imgname = $request->txtmechanicimage;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/mach_img'),$newname);
        }
        else
        {
            $newname=$request->oldimg;
        }

        $cityid = $request->txtcityid;
        $name = $request->txtmechanicname;
        $photo = $request->newname;
        $car = $request->rdiscar;
        $bike = $request->rdisbike;
        $add1 = $request->txtaddrline1;
        $add2 = $request->txtaddrline2;
        $landmark = $request->txtlandmark;
        $pincode = $request->txtpincode;
        $latitude = $request->txtlatitude;
        $longtitude = $request->txtlongtitude;
        $isactive = $request->rdisactive;

        //Update
        $obj = Mechanic::where("mach_id","=",$request->machid)->first();
        $obj->city_id = $cityid;
        $obj->name = $name;
        $obj->mach_image = $newname;
        $obj->iscar = $car;
        $obj->isbike = $bike;
        $obj->addressline1 = $add1;
        $obj->addressline2 = $add2;
        $obj->landmark = $landmark;
        $obj->pincode = $pincode;
        $obj->lattitude = $latitude;
        $obj->longtitude = $longtitude;
        $obj->isactive = $isactive;
        $obj->save();
        //Update
        return redirect('/admin/Mechanic/ViewMechanic')->with("success","Data Updated Successfully!");

    }
    //mechanic insert
    public function insertmechanic(Request $request)
    {
        
        //upload
        // $imgname = $request->txtmechanicimage;//abc.jpg
        // $ext = $imgname->getClientOriginalExtension(); //jpg
        // $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
        // $imgname->move(public_path('/mach_img'),$newname);

        $cityid = $request->txtcityid;
        $name = $request->txtmechanicname;
        $photo = $request->newname;
        $car = $request->rdiscar;
        $bike = $request->rdisbike;
        $add1 = $request->txtaddrline1;
        $add2 = $request->txtaddrline2;
        $landmark = $request->txtlandmark;
        $pincode = $request->txtpincode;
        $latitude = $request->txtlatitude;
        $longtitude = $request->txtlongtitude;
        $isactive = $request->rdisactive;

        $data = Mechanic::where("city_id","=",$cityid)->where("name","=",$name)->get();
        $count = $data->count();
        if($count<=0)
        {   

            $imgname = $request->txtmechanicimage;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/mach_img'),$newname);
            
            //insert
            $obj = new Mechanic;
            $obj->city_id = $cityid;
            $obj->name = $name;
            $obj->mach_image = $newname;
            $obj->iscar = $car;
            $obj->isbike = $bike;
            $obj->addressline1 = $add1;
            $obj->addressline2 = $add2;
            $obj->landmark = $landmark;
            $obj->pincode = $pincode;
            $obj->lattitude = $latitude;
            $obj->longtitude = $longtitude;
            $obj->isactive = $isactive;
            $obj->save();
            //insert
        return redirect('/admin/Mechanic/AddMechanic')->with("success","Data Inserted Successfully!");
    }
    else
    {
        return redirect('/admin/Mechanic/AddMechanic')->with("message","Data Already Exist!");   
    }

    }
    public function deletemechanic(Request $request)
    {
         //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_mechanic where mach_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Mechanic/ViewMechanic')->with("success","Data Deleted Successfully!");
    }


}
