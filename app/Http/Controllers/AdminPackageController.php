<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package;
use DB;

class AdminPackageController extends Controller
{
    public function addpackage()
    {
    	return view('admin.Package.addpackage');
    }
    public function changepackagestatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = package::where("pkg_id","=",$id)->first();
         if($status=="yes")
         {
            $obj->isactive = "no";
         }
         else
         {
            $obj->isactive = "yes";
         }
         $obj->save();
        return redirect('admin/Package/viewpackage')->with("success","Status Updated Successfully!");
    }
    public function viewpackage()
    {
        $packagedata=package::all();
        return view('admin.Package.viewpackage',compact('packagedata'));
    }
    public function updatepackage($id)
    {
        $packagedata =package::where("pkg_id","=",$id)->get();
    	return view('admin.Package.updatepackage',compact('packagedata'));
    }
    public function insertpackage(Request $request)
    {
        $title = $request->txtpackagetitle;
        $description = $request->txtpackagedes;
        $discount = $request->txtdiscount;
        $price = $request->txtprice;
        $isactive = $request->optradio;
        
        $data = package::where("pkg_title","=",$title)->get();
        $count = $data->count();
        if($count<=0)
        {   
            
            //insert
            $obj = new package;
            $obj->pkg_title = $title;
            $obj->pkg_desc = $description;
            $imgname = $request->txtimage;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/pkg_img'), $newname);
            $obj->pkg_image = $newname;
            $obj->price = $price;
            $obj->discount = $discount;
            $obj->isactive = $isactive;
            $obj->save();
            //insert

            return redirect('admin/Package/addpackage')->with("success","Package Inserted Successfully!");
        }   
        else
        {
            return redirect('admin/Package/addpackage')->with("message","This Package Already Exist!");
        }
    }
    public function savepackage(Request $request)
    {
        if($request->hasFile('txtimage'))
        {
            $imgname = $request->txtimage;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/pkg_img'), $newname);
        }
        else
        {
            $newname = $request->oldimg;
        }
        $title = $request->txtpackagetitle;
        $description = $request->txtpackagedes;
        $price = $request->txtprice;
        $discount = $request->txtdiscount;
        $isactive = $request->optradio;

        //update
        $obj = package::where("pkg_id","=",$request->pkgid)->first();
        $obj->pkg_title = $title;
        $obj->pkg_desc = $description;
        $obj->price = $price;
        $obj->discount = $discount;
        $obj->pkg_image = $newname;
        $obj->isactive = $isactive;
        $obj->save();
        //insert

        return redirect('admin/Package/viewpackage')->with("success","Data Updated Successfully!");   
    }
    public function deletepackage(Request $request)
    {
         $id = $request->deleteid;
        DB::delete('delete from tbl_pkg where pkg_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Package/viewpackage')->with("success","Data Deleted Successfully!");
    }
}
