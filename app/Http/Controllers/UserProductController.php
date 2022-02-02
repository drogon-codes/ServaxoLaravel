<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserProductController extends Controller
{
    //
    public function Products()
    {
    	 $partdata=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
        ->limit(6)
        ->get();
    	return view('Users.Products.Products',compact('partdata'));
    }
}
