<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mechanic;
use DB;

class UserMechanicsController extends Controller
{
    public function mechanicslist()
    {
    	$mechanicdata=DB::table("tbl_mechanic")
        ->leftjoin("cities","tbl_mechanic.city_id","=","cities.city_id")
        ->select("tbl_mechanic.*","cities.city_name")
        ->where("tbl_mechanic.isactive","=","yes")
        ->get();
   		return view('Users.Mechanic.mechanicslist',compact('mechanicdata'));
    }
     public function mechanicsmap()
    {
    	$mechanicdata=DB::table("tbl_mechanic")
        ->leftjoin("cities","tbl_mechanic.city_id","=","cities.city_id")
        ->select("tbl_mechanic.*","cities.city_name")
        ->where("tbl_mechanic.isactive","=","yes")
        ->get();
   		return view('Users.Mechanic.mechanicmap',compact('mechanicdata'));
    }
}
