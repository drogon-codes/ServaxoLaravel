<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagory;
use DB;

class AdminCategoryController extends Controller
{
    public function AddCategory()
    {
    	return view('admin.Category.AddCategory');
    }
    public function ViewCategory()
    {
        $categorydata=catagory::all();
    	return view('admin.Category.ViewCategory',compact('categorydata'));
    }
    public function updatecategory($id)
    {
        $categorydata =catagory::where("catagory_id","=",$id)->get();
        return view('admin.Category.updatecategory',compact('categorydata'));
    }
    public function insertcategory(Request $request)
    {
        // //upload
        // $imgname = $request->txtcatagoryimage;//abc.jpg
        // $ext = $imgname->getClientOriginalExtension(); //jpg
        // $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
        // $imgname->move(public_path('/category_img'), $newname);

    	$catagoryname = $request->txtcatagoryname;
    	$catagoryimage = $request->txtcatagoryimage;
    	$catagorydescription = $request->txtcatagorydescription;
        $type = $request->optradio;
        
        $data = catagory::where("catagory_name","=",$catagoryname)->get();
        $count = $data->count();
        if($count<=0)
        {   
            //upload
            $imgname = $request->txtcatagoryimage;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/category_img'), $newname);
            
        	//insert
        	$obj = new catagory;
        	$obj->catagory_name = $catagoryname;
        	$obj->catagory_img = $newname;
        	$obj->catagory_description = $catagorydescription;
            $obj->type = $type;
        	$obj->save();
        	//insert

        	return redirect('admin/Category/AddCategory')->with("success","Data Inserted Successfully!");
        }   
        else
        {
            return redirect('admin/Category/AddCategory')->with("message","Data Already Exist!");
        }
    }
    public function savecategory(Request $request)
    {
        if($request->hasFile('txtcatagoryimage'))
        {
             //upload
            $imgname = $request->txtcatagoryimage;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/category_img'), $newname);
        }
        else
        {
            $newname = $request->oldimg;
        }
       

        $catagoryname = $request->txtcatagoryname;
        $catagoryimage = $request->txtcatagoryimage;
        $catagorydescription = $request->txtcatagorydescription;
        $type = $request->optradio;

        //update
        $obj = catagory::where("catagory_id","=",$request->catid)->first();
        $obj->catagory_name = $catagoryname;
        $obj->catagory_img = $newname;
        $obj->catagory_description = $catagorydescription;
        $obj->type = $type;
        $obj->save();
        //insert

        return redirect('admin/Category/ViewCategory')->with("success","Data Updated Successfully!");
    }
    public function deletecatagory(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from catagories where catagory_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Category/ViewCategory')->with("success","Data Deleted Successfully!");
    }
}
