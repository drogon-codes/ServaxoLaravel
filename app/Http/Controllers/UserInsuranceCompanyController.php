<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsuranceCompany;
use DB;


class UserInsuranceCompanyController extends Controller
{
	public function InsuranceCompany()
	{
		$inscompanydata=DB::table("tbl_ins_company")
        ->leftjoin("cities","tbl_ins_company.city_id","=","cities.city_id")
        ->select("tbl_ins_company.*","cities.city_name")
        ->where("tbl_ins_company.isactive","=","yes")
        ->get();
		return view('Users.InsuranceCompany.insucompany',compact('inscompanydata'));
	} 
	public function InsuranceCompanyDetails($id)
	{
		$plandata=DB::table("tbl_plan")
        ->leftjoin("tbl_ins_company","tbl_plan.ins_id","=","tbl_plan.plan_id")
        ->select("tbl_plan.*","tbl_ins_company.*")
        ->where("tbl_ins_company.ins_id","=",$id)
        ->get();
		return view('Users.InsuranceCompany.insucompanydetail',compact('plandata'));
	} 
	public function download($file)
	{
	    $file_path = public_path('\plan_pdf\\'.$file);
	    return response()->download( $file_path);
	}    
}
