<?php

namespace App\Http\Controllers;
use App\Part;
use App\Catagory;
use DB;
use App\Cart;
use Session;
use Illuminate\Http\Request;

class UserCatagoryController extends Controller
{
    //
    public function Catagories()
    {
    	$partdata1=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
        ->where("isactive","=","yes")
        ->get();
        $partdata2=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
        ->where("isactive","=","yes")
        ->limit(5)
        ->get();
    	return view('Users.Catagories.Catagories',compact('partdata1','partdata2'));
    }
    public function listcatagories($id)
    {
     
        $partdata1=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
        ->where("catagory_id","=",$id)
        ->get();
        $partdata2=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
        ->where("isactive","=","yes")
        ->limit(5)
        ->get();
        return view('Users.Catagories.Catagories',compact('partdata1','partdata2'));
    }    
    public function Products($id)
    {
        $catdata=Catagory::all();
        $partdata1=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
         ->where("isactive","=","yes")
         ->limit(6)
        ->get();
    	 $partdata=DB::table("parts")
         ->leftjoin("model","parts.model_id","=","model.model_id")
         ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
         ->select("parts.*","model.model_name","catagories.catagory_name")
         ->where("part_id","=",$id)
         ->get();

    	 return view('Users.Catagories.Products',compact('partdata','catdata','partdata1'));
    }
    public function popup()
    {
        return view('Users.Catagories.index');
    }
    public function searchdata(Request $request)
    {
        $key = $request->txtsearch;
        $partdata1=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
        ->where("isactive","=","yes")
        ->where("part_name","like",'%'.$key.'%')
        ->get();
        $partdata2=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
        ->where("isactive","=","yes")
        ->limit(5)
        ->get();
        return view('Users.Catagories.Catagories',compact('partdata1','partdata2'));
    }
    public function downloadpart($file)
    {
        $file_path = public_path('\part_img\\'.$file);
        return response()->download( $file_path);
    }
}
