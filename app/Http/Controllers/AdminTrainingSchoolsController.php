<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainingSchools;
use App\city;
use DB; 

class AdminTrainingSchoolsController extends Controller
{
    
    public function addtrainingschool()
    {
        $citydata=city::all();
    	return view('admin.trainingSchool.addtrainingschool',compact('citydata'));
    }
    public function changetrainingstatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = TrainingSchools::where("school_id","=",$id)->first();
         if($status=="yes")
         {
            $obj->isactive = "no";
         }
         else
         {
            $obj->isactive = "yes";
         }
         $obj->save();
        return redirect('admin/trainingSchool/viewtrainingschool')->with("success","Status Updated Successfully!");
    }
    public function viewtrainingschool()
    {
        $schooldata=DB::table("tbl_training_schools")
        ->leftjoin("cities","tbl_training_schools.city_id","=","cities.city_id")
        ->select("tbl_training_schools.*","cities.*")
        ->get();
        return view('admin.trainingSchool.viewtrainingschool',compact('schooldata'));
    }
    public function updatetrainingschool($id)
    {
        $schooldata =TrainingSchools::where("school_id","=",$id)->get();
        $citydata=city::all();
        return view('admin.trainingSchool.updatetrainingschool',compact('citydata','schooldata'));
    }
    public function savetrainingschool(Request $request)
    {
        if($request->hasFile('txtlogo'))
        {
            //upload
            $imgname = $request->txtlogo;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/school_img'), $newname);
        }
        else
        {
            $newname=$request->oldimg;
        }

        $name = $request->txtschoolname;
        $logo = $request->txtlogo;
        $contact = $request->txtcontact;
        $email = $request->txtemail;
        $add1 = $request->txtaddressline1;
        $add2 = $request->txtaddressline2;
        $landmark = $request->txtlandmark;
        $pincode = $request->txtpincode;
        $cityid = $request->txtcity;
        $latitude = $request->txtlatitude;
        $longitude = $request->txtlongitude;
        $isactive = $request->rdisactive;
        $price = $request->txtprice;

        //Update
        $obj = TrainingSchools::where("school_id","=",$request->schoolid)->first();
        $obj->school_name = $name;
        $obj->logo = $newname;
        $obj->school_contact = $contact;
        $obj->emailid = $email;
        $obj->addressline1 = $add1;
        $obj->addressline2 = $add2;
        $obj->landmark = $landmark;
        $obj->pincode = $pincode;
        $obj->city_id = $cityid;
        $obj->latitude = $latitude;
        $obj->longitude = $longitude;
        $obj->isactive = $isactive;
        $obj->price = $price;
        $obj->save();

        return redirect('/admin/trainingSchool/viewtrainingschool')->with("success","Data Inserted Successfully!");
    }
    public function inserttrainingschool(Request $request)
    {
        //upload
        $imgname = $request->txtlogo;//abc.jpg
        $ext = $imgname->getClientOriginalExtension(); //jpg
        $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
        $imgname->move(public_path('/school_img'), $newname);

        $name = $request->txtschoolname;
        $logo = $request->txtlogo;
        $contact = $request->txtcontact;
        $email = $request->txtemail;
        $add1 = $request->txtaddressline1;
        $add2 = $request->txtaddressline2;
        $landmark = $request->txtlandmark;
        $pincode = $request->txtpincode;
        $cityid = $request->txtcity;
        $latitude = $request->txtlatitude;
        $longitude = $request->txtlongitude;
        $isactive = $request->rdisactive;
        $price = $request->txtprice;

        $data = TrainingSchools::where("school_name","=",$name)->where("school_contact","=",$contact)->where("emailid","=",$email)->get();
        $count = $data->count();
        if($count<=0)
        {   

        	//insert
        	$obj = new TrainingSchools;
            $obj->school_name = $name;
            $obj->logo = $newname;
            $obj->school_contact = $contact;
            $obj->emailid = $email;
            $obj->addressline1 = $add1;
            $obj->addressline2 = $add2;
            $obj->landmark = $landmark;
            $obj->pincode = $pincode;
            $obj->city_id = $cityid;
            $obj->latitude = $latitude;
            $obj->longitude = $longitude;
            $obj->isactive = $isactive;
            $obj->price = $price;
        	$obj->save();

        	return redirect('/admin/trainingSchool/addtrainingschool')->with("success","Data Updated Successfully!");
        }
        else
        {
            return redirect('/admin/trainingSchool/addtrainingschool')->with("message","Data Already Exist!");
        }
    }
    public function deletetrainingschool(Request $request)
    {
         //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_training_schools where school_id  = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/trainingSchool/viewtrainingschool')->with("success","Data Deleted Successfully!");
    }
}
