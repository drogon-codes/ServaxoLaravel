<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model1;
use App\company;
use DB;

class AdminModelController extends Controller
{
    public function AddModel()
    {   
        $companydata=company::all();
    	return view('admin.Model.AddModel',compact('companydata'));
    }
    public function ViewModel()
    {
       // $modeldata=Model1::all();
        $modeldata=DB::table("model")
        ->leftjoin("companies","model.company_id","=","companies.company_id")
        ->select("model.*","companies.company_name")
        ->get();
    	return view('admin.Model.ViewModel',compact('modeldata'));
    }
    public function updatemodel($id)
    {   
        $modeldata =model1::where("model_id","=",$id)->get();
        $companydata=company::all();
        return view('admin.Model.updatemodel',compact('companydata','modeldata'));
    }
    public function savemodel(Request $request)
    {
        if($request->hasFile('txtmodelimg'))
        {
            $imgname = $request->txtmodelimg;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/model_img'), $newname);
        }   
        else
        {
            $newname = $request->oldimg;
        }

        $modelname = $request->txtmodelname;
        $companyid = $request->txtcompany;
        $modelimg = $request->txtmodelimg;

        //Update
        $obj = model1::where("model_id","=",$request->modelid)->first();
        $obj->model_name = $modelname;
        $obj->company_id = $companyid;
        $obj->model_img = $newname;
        $obj->save();
        //Update

        return redirect('admin/Model/ViewModel')->with("success","Data Update Successfully!");
    }
    public function insertmodel(Request $request)
    {
        //  //upload
        // $imgname = $request->txtmodelimg;//abc.jpg
        // $ext = $imgname->getClientOriginalExtension(); //jpg
        // $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
        // $imgname->move(public_path('/model_img'), $newname);

    	$modelname = $request->txtmodelname;
        $companyid = $request->txtcompany;
    	$modelimg = $request->txtmodelimg;
        $data = model1::where("model_name","=",$modelname)
        ->where("company_id","=",$companyid)
        ->get();
        $count = $data->count();
        if($count<=0)
        { 
            //upload
            $imgname = $request->txtmodelimg;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/model_img'), $newname);

        	//insert
        	$obj = new model1;
        	$obj->model_name = $modelname;
            $obj->company_id = $companyid;
        	$obj->model_img = $newname;
        	$obj->save();
        	//insert

        	return redirect('admin/Model/AddModel')->with("success","Data Inserted Successfully!");
        }
        else
        {
            return redirect('admin/Model/AddModel')->with("message","Data Already Exist!");   
        }
    }
    public function deletemodel(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from model where model_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Model/ViewModel')->with("success","Data Deleted Successfully!");
    }
}
