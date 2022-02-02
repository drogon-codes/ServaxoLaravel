<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsuranceCompany;
use App\city;
use DB;

class AdminInsuranceCompanyController extends Controller
{
    public function addinscompany()
    {
        $citydata=city::all();
    	return view('admin.insuranceCompany.addinscompany',compact('citydata'));
    }
    public function changeinscompanystatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = InsuranceCompany::where("ins_id","=",$id)->first();
         if($status=="yes")
         {
            $obj->isactive = "no";
         }
         else
         {
            $obj->isactive = "yes";
         }
         $obj->save();
        return redirect('admin/insuranceCompany/viewinscompany')->with("success","Status Updated Successfully!");
    }
    public function viewinscompany()
    {
    	$inscompanydata=DB::table("tbl_ins_company")
        ->leftjoin("cities","tbl_ins_company.city_id","=","cities.city_id")
        ->select("tbl_ins_company.*","cities.city_name")
        ->get();
        return view('admin.insuranceCompany.viewinscompany',compact('inscompanydata'));
    }
    public function updateinscompany($id)
    {
        $inscompanydata =InsuranceCompany::where("ins_id","=",$id)->get();
        $citydata=city::all();
        return view('admin.insuranceCompany.updateinscompany',compact('citydata','inscompanydata'));
    }
    public function saveinscompany(Request $request)
    {
        if($request->hasFile('txtlogo'))
        {
            //upload
            $imgname = $request->txtlogo;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/inscomp_img'), $newname);//insert
        }   
        else
        {
            $newname=$request->oldimg;
        }

        $obj = InsuranceCompany::where("ins_id","=",$request->insid)->first();
        $obj->com_name=$request->txtcompanyname;
        $obj->p_name=$request->txtpolicyname;
        $obj->contact=$request->txtcontact;
        $obj->email=$request->txtemailid;
        $obj->website=$request->txtwebsiteurl;
        $obj->isactive=$request->rdisactive;
        $obj->addressline1=$request->txtaddressline1;
        $obj->addressline2=$request->txtaddressline2;
        $obj->landmark=$request->txtlandmark;
        $obj->pincode=$request->txtpincode;
        $obj->city_id =$request->txtcity;
        $obj->about=$request->txtabout;
        $obj->logo=$newname;
        $obj->save();

        return redirect('/admin/insuranceCompany/viewinscompany')->with("success","Data Updated Successfully!");
    }
    public function insertinscompany(Request $request)
    {
    	//upload
    	// $imgname = $request->txtlogo;//abc.jpg
        //$ext = $imgname->getClientOriginalExtension(); //jpg
        //$newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
        //$imgname->move(public_path('/inscomp_img'), $newname);//insert

        $companyname = $request->txtcompanyname;
        $policyname = $request->txtpolicyname;
        $contact = $request->txtcontact;
        $email = $request->txtemailid;
        $website = $request->txtwebsiteurl;
        $isactive = $request->rdisactive;
        $add1 = $request->txtaddressline1;
        $add2 = $request->txtaddressline2;
        $landmark = $request->txtlandmark;
        $pincode = $request->txtpincode;
        $cityid = $request->txtcity;
        $about = $request->txtabout;
        $logo = $request->txtlogo;

        $data = InsuranceCompany::where("com_name","=",$companyname)->where("p_name","=",$policyname)->where("contact","=",$contact)->where("email","=",$email)->where("website","=",$website)->where("city_id","=",$cityid)->get();
        $count = $data->count();
        if($count<=0)
        { 
            //upload
            $imgname = $request->txtlogo;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/inscomp_img'), $newname);//insert

        	$obj = new InsuranceCompany;
        	$obj->com_name = $companyname;
        	$obj->p_name = $policyname;
        	$obj->contact = $contact;
        	$obj->email = $email;
        	$obj->website = $website;
        	$obj->isactive = $isactive;
        	$obj->addressline1 = $add1;
        	$obj->addressline2 = $add2;
        	$obj->landmark = $landmark;
        	$obj->pincode = $pincode;
        	$obj->city_id = $cityid;
        	$obj->about = $about;
        	$obj->logo =  $newname;
        	$obj->save();

        	return redirect('/admin/insuranceCompany/addinscompany')->with("success","Data Inserted Successfully!");
        }
        else
        {
            return redirect('/admin/insuranceCompany/addinscompany')->with("message","Data Already Exist!");
        }
    }
    public function deleteinscompany(Request $request)
    {
         //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_ins_company where ins_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/insuranceCompany/viewinscompany')->with("success","Data Deleted Successfully!");
    }
}
