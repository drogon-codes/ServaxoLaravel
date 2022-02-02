<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Part;
use App\user1;
use Session;
use DB;

class UserCheckoutController extends Controller
{
    //
    public function Checkout()
    {
    	$uid = Session::get("id");
    	$userdata = DB::table("tbl_user")
    	->select("*")
    	->where("tbl_user.user_id","=",$uid)
        ->get();

        $orderhistorydata = DB::table("tbl_order")
    	->select("*")
        ->leftjoin("cities","tbl_order.city_id","=","cities.city_id")
        ->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")
        ->where("tbl_order.user_id","=",$uid)
        ->first();

        $citydata = DB::table("cities")
    	->select("*")
        ->get();

    	$cartdata=DB::table("tbl_cart")
    	->select("*")
        ->leftjoin("parts","tbl_cart.part_id","=","parts.part_id")
        ->leftjoin("tbl_user","tbl_cart.user_id","=","tbl_user.user_id")
        ->where("tbl_cart.user_id","=",$uid)
        ->get();
    	return view('Users.Checkout.Checkout',compact('cartdata','userdata','orderhistorydata','citydata'));
    }

}
