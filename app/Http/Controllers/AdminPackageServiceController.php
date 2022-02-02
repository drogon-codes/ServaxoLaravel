<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\packageservice;
use App\services;
use App\package;
use DB;

class AdminPackageServiceController extends Controller
{
    public function addpackageservice()
    {
    	$servicedata=services::all();
    	$packagedata=package::all();
    	return view('admin.PackageService.addpackageservice',compact('servicedata','packagedata'));
    }
    public function viewpackageservice()
    {
        $packageservicedata=DB::table("tbl_pkg_service")
        ->leftjoin("services","tbl_pkg_service.service_id","=","services.service_id")
        ->leftjoin("tbl_pkg","tbl_pkg_service.pkg_id","=","tbl_pkg.pkg_id")
        ->select("tbl_pkg_service.*","services.service_name","tbl_pkg.pkg_title")
        ->get();
        return view('admin.PackageService.viewpackageservice',compact('packageservicedata'));
    }
    public function updatepackageservice($id)
    {
    	$servicedata=services::all();
    	$packagedata=package::all();
        $packageservicedata =packageservice::where("p_id","=",$id)->get();
    	return view('admin.PackageService.updatepackageservice',compact('packageservicedata','packagedata','servicedata'));
    }
    public function insertpackageservice(Request $request)
    {
        $service = $request->txtserviceid;
        $package = $request->txtpackageid;
        
        $data = packageservice::where("service_id","=",$service)->get();
        $count = $data->count();
        if($count<=0)
        {   
            
            //insert
            $obj = new packageservice;
            $obj->service_id = $service;
	        $obj->pkg_id = $package;
	        $obj->save();
            //insert

            return redirect('admin/PackageService/addpackageservice')->with("success","Data Inserted Successfully!");
        }   
        else
        {
            return redirect('admin/PackageService/addpackageservice')->with("message","Service Already Exist In This Package!");
        }
    }
    public function savepackageservice(Request $request)
    {
        $service = $request->txtserviceid;
        $package = $request->txtpackageid;
        
        //update
        $obj = packageservice::where("p_id","=",$request->pkgsid)->first();
        $obj->service_id = $service;
        $obj->pkg_id = $package;
        $obj->save();
        //insert

        return redirect('admin/PackageService/viewpackageservice')->with("success","Data Updated Successfully!");   
    }
    public function deletepackageservice(Request $request)
    {
         $id = $request->deleteid;
        DB::delete('delete from tbl_pkg_service where p_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/PackageService/viewpackageservice')->with("success","Data Deleted Successfully!");
    }
}
