<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user1;
use App\model1;
use App\Tow;
use DB;

class AdminTowController extends Controller
{
    public function changetowstatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = Tow::where("tow_id","=",$id)->first();
         if($status=="pending")
         {
            $obj->status = "process";
         }
         else
         {
            $obj->status = "pending";
         }
         if($status=="process")
         {
            $obj->status = "complete";
         }
         else
         {
            $obj->status = "process";
         }
         $obj->save();
        return redirect('admin/Tow/ViewNewRequest')->with("success","Status Updated Successfully!");
    } 
    public function cancelrequest(Request $request)
    {
        //$cancel="cancel";
        $id=$request->stid1;
        $status=$request->txtstatus1;
        $obj = Tow::where("tow_id","=",$id)->first();
        $obj->status = "cancel";
        $obj->save();
        return redirect('/admin/Tow/ViewCancelRequest')->with("success","Status Cancelled Successfully!");
     }
    public function ViewNewRequest()
    {
        //$olddata=Oldvehicle::All();
        $towdata=DB::table("tbl_tow")
        ->leftjoin("tbl_user","tbl_tow.user_id","=","tbl_user.user_id")
        ->leftjoin("model","tbl_tow.model_id","=","model.model_id")
        ->select("tbl_tow.*","tbl_user.name","model.*")
        ->where("tbl_tow.status","=","pending")->get();
        return view('admin.Tow.ViewNewRequest',compact('towdata'));
    }
    public function ViewCompleteRequest()
    {
       $towdata=DB::table("tbl_tow")
        ->leftjoin("tbl_user","tbl_tow.user_id","=","tbl_user.user_id")
        ->leftjoin("model","tbl_tow.model_id","=","model.model_id")
        ->select("tbl_tow.*","tbl_user.name","model.*")
        ->where("tbl_tow.status","=","complete")->get();
        return view('admin.Tow.ViewCompleteRequest',compact('towdata'));
    }
     public function ViewprocessRequest()
    {
       $towdata=DB::table("tbl_tow")
        ->leftjoin("tbl_user","tbl_tow.user_id","=","tbl_user.user_id")
        ->leftjoin("model","tbl_tow.model_id","=","model.model_id")
        ->select("tbl_tow.*","tbl_user.name","model.*")
        ->where("tbl_tow.status","=","process")->get();
        return view('admin.Tow.ViewprocessRequest',compact('towdata'));
    }
    public function ViewCancelRequest()
    {
       $towdata=DB::table("tbl_tow")
        ->leftjoin("tbl_user","tbl_tow.user_id","=","tbl_user.user_id")
        ->leftjoin("model","tbl_tow.model_id","=","model.model_id")
        ->select("tbl_tow.*","tbl_user.name","model.*")
        ->where("tbl_tow.status","=","cancel")->get();
        return view('admin.Tow.ViewCancelRequest',compact('towdata'));
    }
    public function deletenewrequest(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_tow where tow_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Tow/ViewNewRequest')->with("success","Data Deleted Successfully!");
    }
    public function deletecompleterequest(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_tow where tow_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Tow/ViewCompleteRequest')->with("success","Data Deleted Successfully!");
    }
    public function deleteprocessrequest(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_tow where tow_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Tow/ViewprocessRequest')->with("success","Data Deleted Successfully!");
    }
    public function deletecancelrequest(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_tow where tow_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Tow/ViewCancelRequest')->with("success","Data Deleted Successfully!");
    }
}
