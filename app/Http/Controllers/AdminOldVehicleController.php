<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oldvehicle;
use App\user1;
use App\model1;
use App\State;
use App\city;
use DB;

class AdminOldVehicleController extends Controller
{
    public function viewoldvehicle()
    {
    	//$olddata=Oldvehicle::All();
    	$olddata=DB::table("old_vehicle")
        ->leftjoin("tbl_user","old_vehicle.user_id","=","tbl_user.user_id")
        ->leftjoin("model","old_vehicle.model_id","=","model.model_id")
        ->leftjoin("states","old_vehicle.state_id","=","states.state_id")
        ->leftjoin("cities","old_vehicle.city_id","=","cities.city_id")
         ->select("old_vehicle.*","tbl_user.*","states.*","cities.*","model.*")
        
        ->get();
    	return view('admin.oldvehicle.viewoldvehicle',compact('olddata'));
    }
    public function changevehiclestatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = Oldvehicle::where("o_id","=",$id)->first();
         if($status=="yes")
         {
            $obj->isactive = "no";
         }
         else
         {
            $obj->isactive = "yes";
         }
         $obj->save();
        return redirect('admin/oldvehicle/viewoldvehicle')->with("success","Status Updated Successfully!");
    }
    public function deleteoldvehicle(Request $request)
    {
    	//echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from old_vehicle where o_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/oldvehicle/viewoldvehicle')->with("success","Data Deleted Successfully!");
    }
}
