<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use DB;

class AdminCompanyController extends Controller
{
    public function AddCompany()
    {
    	return view('admin.Company.AddCompany');
    }
    public function updatecompany($id)
    {
        $companydata =Company::where("company_id","=",$id)->get();
        return view('admin.Company.updatecompany',compact('companydata'));
    }
    public function ViewCompany()
    {
        $companydata=Company::all();
    	return view('admin.Company.ViewCompany',compact('companydata'));
    }
    public function savecompany(Request $request)
    {
        if($request->hasFile('txtcompanylogo'))
        {
            $imgname = $request->txtcompanylogo;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/company_img'), $newname);
        }   
        else
        {
            $newname= $request->oldimg;
        }

        $companyname = $request->txtcompanyname;
        $companylogo = $request->txtcompanylogo;
        $companytype = $request->radradio;

        //Update
        $obj = Company::where("company_id","=",$request->comid)->first();
        $obj->company_name = $companyname;
        $obj->company_logo = $newname;
        $obj->company_type = $companytype;
        $obj->save();
        //Update

        return redirect('admin/Company/ViewCompany')->with("success","Data Update Successfully!");
    }
    public function insertcompany(Request $request)
    {

        // //upload
        // $imgname = $request->txtcompanylogo;//abc.jpg
        // $ext = $imgname->getClientOriginalExtension(); //jpg
        // $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
        // $imgname->move(public_path('/company_img'), $newname);

    	$companyname = $request->txtcompanyname;
    	$companylogo = $request->txtcompanylogo;
    	$companytype = $request->radradio;

        $data = Company::where("company_name","=",$companyname)->where("company_type","=",$companytype)->get();
        $count = $data->count();

        if($count<=0)
        {   
            //upload
            $imgname = $request->txtcompanylogo;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/company_img'), $newname);

        	//insert
        	$obj = new Company;
        	$obj->company_name = $companyname;
        	$obj->company_logo = $newname;
        	$obj->company_type = $companytype;
        	$obj->save();
        	//insert

        	return redirect('admin/Company/AddCompany')->with("success","Data Inserted Successfully!");
        }
        else
        {
            return redirect('admin/Company/AddCompany')->with("message","Data Already Exist!");   
        }
    }
    public function deletecompany(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from companies where company_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Company/ViewCompany')->with("success","Data Deleted Successfully!");
    }
}
