<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\plan;
use App\InsuranceCompany;
use DB;

class AdminPlanController extends Controller
{
    public function addplan()
	{
		$inscompanydata=InsuranceCompany::all();
		return view('admin.plan.addplan',compact('inscompanydata'));
	}
    public function changeplanstatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = plan::where("plan_id","=",$id)->first();
         if($status=="yes")
         {
            $obj->isactive = "no";
         }
         else
         {
            $obj->isactive = "yes";
         }
         $obj->save();
        return redirect('admin/plan/viewplan')->with("success","Status Updated Successfully!");
    }
	public function viewplan()
	{
		//$plandata=plan::all();
		$plandata=DB::table("tbl_plan")
        ->leftjoin("tbl_ins_company","tbl_plan.ins_id","=","tbl_ins_company.ins_id")
        ->select("tbl_plan.*","tbl_ins_company.com_name")
        ->get();
    	return view('admin.plan.viewplan',compact('plandata'));
	}
    public function updateplan($id)
    {
        $plandata=plan::where("plan_id","=",$id)->get();
        $inscompanydata=InsuranceCompany::all();
        return view('admin.plan.updateplan',compact('inscompanydata','plandata'));
    }
    public function saveplan(Request $request)
    {
        if($request->hasFile('txtpdf'))
        {
            //upload
            $imgname = $request->txtpdf;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/plan_pdf'),$newname);
        }
        else
        {
            $newname=$request->oldimg;
        }

        $insid = $request->txtins;
        $plantitle = $request->txtplantitle;
        $plandesc = $request->txtplandesc;
        $pdffile = $request->txtpdf;
        $price = $request->txtprice;
        $validity = $request->txtvalidity;
        $isactive = $request->radradio;
        $vehicletype = $request->optradio;

        //Update
        $obj = plan::where("plan_id","=",$request->planid)->first(); 
        $obj->ins_id = $insid;
        $obj->plan_title = $plantitle;
        $obj->plan_desc = $plandesc;
        $obj->pdf_file = $newname;
        $obj->price = $price;
        $obj->validity = $validity;
        $obj->isactive = $isactive;
        $obj->vehicle_type = $vehicletype;
        $obj->save();
        //Update
        return redirect('admin/plan/viewplan')->with("success","Data Updated Successfully!");
    }
	public function insertplan(Request $request)
    {
        //upload
        $imgname = $request->txtpdf;//abc.jpg
        $ext = $imgname->getClientOriginalExtension(); //jpg
        $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
        $imgname->move(public_path('/plan_pdf'),$newname);

    	$insid = $request->txtins;
    	$plantitle = $request->txtplantitle;
    	$plandesc = $request->txtplandesc;
    	$pdffile = $request->txtpdf;
    	$price = $request->txtprice;
    	$validity = $request->txtvalidity;
    	$isactive = $request->radradio;
    	$vehicletype = $request->optradio;

        $data = plan::where("ins_id","=",$insid)->where("plan_title","=",$plantitle)->where("validity","=",$validity)->where("vehicle_type","=",$vehicletype)->get();
        $count = $data->count();
        if($count<=0)
        { 

        	//insert
        	$obj = new plan; 
        	$obj->ins_id = $insid;
        	$obj->plan_title = $plantitle;
        	$obj->plan_desc = $plandesc;
        	$obj->pdf_file = $newname;
        	$obj->price = $price;
        	$obj->validity = $validity;
        	$obj->isactive = $isactive;
        	$obj->vehicle_type = $vehicletype;
        	$obj->save();
        	//insert
        	return redirect('admin/plan/addplan')->with("success","Data Inserted Successfully!");
        }
        else
        {
            return redirect('admin/plan/addplan')->with("message","Data Already Exist!");
        }
    }
	public function deleteplan(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_plan where plan_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/plan/viewplan')->with("success","Data Deleted Successfully!");
    }
    
}
