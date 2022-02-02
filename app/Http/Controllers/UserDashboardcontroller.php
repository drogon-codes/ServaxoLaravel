<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package;
use App\Catagory;
use App\services;
use App\Company;
use App\news;
use DB;

class UserDashboardcontroller extends Controller
{
    
	public function Homepage()
	{
		$news=news::limit(3)->get();
		$catdata=Catagory::limit(6)->get();
		$packagedata=package::all();
	    $servicedis =services::limit(6)->get();
	    $partdata=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
        ->limit(6)
        ->get();
        $brand=Company::all();
		return view('Users.Home.Home',compact('packagedata','servicedis','partdata','brand','catdata','news'));
	}	

	 public function homecatagory()
    {
        $hpartdata=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
        ->where("isactive","=","yes" )
        ->where( "catagory_name","=","Tyres")
        ->get();
        $pdata=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
        ->where("isactive","=","yes")
        ->skip(2)
        ->limit(3)
        ->get();
        

         $catdata=Catagory::all();


         return view('Users.Catagories.homecata',compact('hpartdata','catdata','pdata'));
    }
     public function homeProducts($id)
    {
         $catdata=Catagory::all();
         $hpartdata=DB::table("parts")
         ->leftjoin("model","parts.model_id","=","model.model_id")
         ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
         ->select("parts.*","model.model_name","catagories.catagory_name")
         ->where("isactive","=","yes")
         ->where("part_id","=",$id)
         ->get();

         return view('Users.Catagories.Products',compact('hpartdata','catdata'));
    }
    
   
}
