<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;
use DB;
use Session;
class UserTrackController extends Controller
{
   public function TrackParcel()
    {
    	//$comdata=InsuranceCompany::All();
       // $schooldata=TrainingSchools::All();
    	return view('Users.Track.track');
    }
    public function track(Request $request)
    {
    	$id = $request->txtorderid;
        $uid = Session::get("id");
    	//echo $id;
    	$trackdata = DB::table("tbl_order")
    	->select("*")
        ->leftjoin("cities","tbl_order.city_id","=","cities.city_id")
        ->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")
        ->where("tbl_order.user_id","=",$uid)
        ->where("tbl_order.order_id","=",$id)
        ->get();
        $count = $trackdata->count();
        if($count==" ")
        {
        	return redirect('Users/Track/track')->with("success","Invalid OrderID");
        	// echo "null";
        }
        else
        {
        	return view('Users.Track.tracktimeline',compact('trackdata'));
        	// echo "has value";
        }
    }
    public function Tracktimeline()
    {
    	return view('Users.Track.tracktimeline');
    }
}
