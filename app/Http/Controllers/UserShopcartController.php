<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Part;
use Session;
use DB;

class UserShopcartController extends Controller
{
    public function Shopcart()
    {
        //$cartdata=Cart::all();
        $uid = Session::get("id");
        $cartdata=DB::table("tbl_cart")
        ->select("*")
        ->leftjoin("parts","tbl_cart.part_id","=","parts.part_id")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("tbl_user","tbl_cart.user_id","=","tbl_user.user_id")
        ->where("tbl_cart.user_id","=",$uid)
        ->get();
        
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

        if(Session::has('address1'))
        {
            return view('Users.Cart.ShopCart',compact('cartdata','userdata','orderhistorydata','citydata'));    
        }
        else
        {
            return redirect('/Users/Order/getInfopage');
        }
        
    }
    public function AddToCart2(Request $request)
    {
       $qty=$request->txtqty;
       $partid=$request->txtpartid;
       $uid = Session::get("id"); 
       // echo $qty;
       // echo $partid;
       // $obj = new Cart;
       // $obj->user_id = $uid;
       // $obj->part_id = $partid;
       // $obj->qty = $qty;
       // $obj->save();

       $data = DB::table("tbl_cart")
        ->select("*")
        ->where("user_id","=",$uid)
        ->where("part_id","=",$partid)
        ->get();
        $count = $data->count();
        if($count<=0)
        {
            //insert
            $obj = new Cart;
            $obj->user_id  = $uid;
            $obj->part_id  = $partid;
            $obj->qty = $qty;
            $obj->save();
        }
        else
        {
            $qtydata = DB::table("tbl_cart")
                ->select("qty")
                ->where("user_id","=",$uid)
                ->where("part_id","=",$partid)
                ->get();
                foreach ($qtydata as $item) 
                {
                    $qty = $item->qty + $qty;
                }
                //echo $qty;
                //$count = $qty->count();
                // $qty = $qty + 1;
                //echo $count;
            //update
            $obj = Cart::where("part_id","=",$partid)
            ->where("user_id","=",$uid)
            ->first();
            $obj->qty = $qty;
            $obj->save();
        }
        return redirect('/Users/Catagories');
    }
    public function AddToCart($id)
    {
        $uid = Session::get("id");

         $data = DB::table("tbl_cart")
        ->select("*")
        ->where("user_id","=",$uid)
        ->where("part_id","=",$id)
        ->get();
        $count = $data->count();
        if($count<=0)
        {
            //insert
            $obj = new Cart;
            $obj->user_id  = $uid;
            $obj->part_id  = $id;
            $obj->qty = 1;
            $obj->save();
        }
        else
        {
            $qtydata = DB::table("tbl_cart")
                ->select("qty")
                ->where("user_id","=",$uid)
                ->where("part_id","=",$id)
                ->get();
                foreach ($qtydata as $item) 
                {
                    $qty = $item->qty + 1;
                }
                //echo $qty;
                //$count = $qty->count();
                // $qty = $qty + 1;
                //echo $count;
            //update
            $obj = Cart::where("part_id","=",$id)
            ->where("user_id","=",$uid)
            ->first();
            $obj->qty = $qty;
            $obj->save();
        }
       return redirect('/Users/Catagories');
        //return view('Users.Catagories.Catagories');
        //return view('Users.Catagories.Catagories',compact('partdata1'));    
    }
    public function deletepart($id)
    {
        // $id = $request->deleteid;
        //echo $id;
        DB::delete('delete from tbl_cart where cart_id = ?',[$id]);
        return redirect('/Users/Cart')->with("success","Part Deleted Successfully!");
    }
    public function increaseQty(Request $request)
    {
        $id = $request->incpartid;
        $qtydata = DB::table("tbl_cart")
                ->select("qty")
                ->where("cart_id","=",$id)
                ->get();
                foreach ($qtydata as $item) 
                {
                    $qty = $item->qty + 1;
                }
        $obj = Cart::where("cart_id","=",$id)
            ->first();
            $obj->qty = $qty;
            $obj->save();
        //echo $qtydata;
        return redirect('/Users/Cart');
    }
    public function decreaseQty(Request $request)
    {
        $id = $request->decpartid;
        $qtydata = DB::table("tbl_cart")
                ->select("qty")
                ->where("cart_id","=",$id)
                ->get();
                foreach ($qtydata as $item) 
                {
                    $qty = $item->qty - 1;
                }
        $obj = Cart::where("cart_id","=",$id)
            ->first();
            $obj->qty = $qty;
            $obj->save();
        //echo $qtydata;
        return redirect('/Users/Cart');
    }
}
