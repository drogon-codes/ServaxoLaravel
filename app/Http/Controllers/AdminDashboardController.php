<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Order;
use App\part;
use DB;

class AdminDashboardController extends Controller
{
    public function Dashboard()
    {
      $order=DB::table("tbl_order")
      ->leftjoin("tbl_user","tbl_order.user_id","tbl_user.user_id")
      ->leftjoin("tbl_detail","tbl_detail.order_id","tbl_order.order_id","tbl_detail.part_id")
      ->select("tbl_order.*","tbl_user.*","tbl_detail.*")
      ->latest('order_datetime')
      ->limit(6)
      ->get();
      // $id=$request->deleteid;
      $orderdetail=DB::table("tbl_detail")
      ->leftjoin("tbl_order","tbl_detail.order_id","tbl_order.order_id")
      ->leftjoin("parts","tbl_detail.part_id","parts.part_id")
      ->select("tbl_detail.*","tbl_order.*","parts.*")
      // ->where("user_id","=",$id)
      ->get();

      


      $order1=Order::all();
      return view('admin.Dashboard.Dashboard',compact('order','order1','orderdetail'));
      
    }
     public function showmodel(Request $request)
    {
      echo "Hey";
    }
     
}
