<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part;
use App\Model1;
use App\catagory;
use DB;

class AdminPartController extends Controller
{
    public function AddParts()
    {
        $modeldata=Model1::all();
        $categorydata=catagory::all();
    	return view('admin.Parts.AddParts',compact('modeldata','categorydata'));
    }
    public function ViewParts()
    {
        
        //$partdata=Part::all();
        $partdata=DB::table("parts")
        ->leftjoin("model","parts.model_id","=","model.model_id")
        ->leftjoin("catagories","parts.cat_id","=","catagories.catagory_id")
        ->select("parts.*","model.model_name","catagories.catagory_name")
        ->get();
    	return view('admin.Parts.ViewParts',compact('partdata'));
    }
    public function updateparts($id)
    {
        $partsdata =Part::where("part_id","=",$id)->get();// select * from tbl_part where part_id=$id
        // $partdata=DB::table("parts")
        // ->leftjoin("model","parts.model_id","=","model.model_id")
        // ->select("parts.*","model.model_name")
        // ->where("part_id","=",$id)
        // ->get();
        $modeldata=Model1::all();
        $categorydata=catagory::all();
        // ->where("part_id","=",$id)
        return view('admin.Parts.updateparts',compact('modeldata','categorydata','partsdata'));
    }
    public function changepartstatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = Part::where("part_id","=",$id)->first();
         if($status=="yes")
         {
            $obj->isactive = "no"; 
         }
         else
         {
            $obj->isactive = "yes";
         }
         $obj->save();
        return redirect('admin/Parts/ViewParts')->with("success","Status Updated Successfully!");
    }
    public function saveparts(Request $request)
    {
        if($request->hasFile('txtpartimg1'))
        {
            $imgname = $request->txtpartimg1;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/part_img'), $newname);
        }
        else
        {
            $newname = $request->oldimg;
        }
        if($request->hasFile('txtpartimg2'))
        {
            $imgname1 = $request->txtpartimg2;//abc.jpg
            $ext1 = $imgname1->getClientOriginalExtension(); //jpg
            $newname1 = time().rand(1111,9999).".".$ext1;//43245564578.jpg
            $imgname1->move(public_path('/part_img'), $newname1);
        }
        else
        {
            $newname1 = $request->oldimg1;
        }
        if($request->hasFile('txtpartimg3'))
        {
            $imgname2 = $request->txtpartimg3;//abc.jpg
            $ext2 = $imgname2->getClientOriginalExtension(); //jpg
            $newname2 = time().rand(1111,9999).".".$ext2;//43245564578.jpg
            $imgname2->move(public_path('/part_img'), $newname2);
        }
        else
        {
            $newname2 = $request->oldimg2;
        }
        if($request->hasFile('txtpartmanualpdf'))
        {
            $imgname3 = $request->txtpartmanualpdf;//abc.jpg
            $ext3 = $imgname3->getClientOriginalExtension(); //jpg
            $newname3 = time().rand(1111,9999).".".$ext3;//43245564578.jpg
            $imgname3->move(public_path('/part_img'), $newname3);
        }
        else
        {
            $newname3 = $request->oldimg3;
        }

        $modelname = $request->txtmodel;
        $partname = $request->txtpartname;
        $partprice = $request->txtpartprice;
        $partdescription = $request->txtpartdescription;
        $partimg1 = $request->txtpartimg1;
        $partimg2 = $request->txtpartimg2;
        $partimg3 = $request->txtpartimg3;
        $partmanualpdf = $request->txtpartmanualpdf;
        $partvideourl = $request->txtpartvideourl;
        $catid= $request->txtcatagory;
        $partisactive = $request->radradio;

        //Update
        $obj = Part::where("part_id","=",$request->partid)->first();
        $obj->model_id = $modelname;
        $obj->part_name = $partname;
        $obj->price = $partprice;
        $obj->part_description = $partdescription;
        $obj->img1 = $newname;  
        $obj->img2 = $newname1; 
        $obj->img3 = $newname2;
        $obj->part_manual_pdf = $newname3  ;
        $obj->video_url = $partvideourl;
        $obj->cat_id=$catid;
        $obj->isactive = $partisactive;             
        $obj->save();
        //Update

        return redirect('admin/Parts/ViewParts')->with("success","Data Update Successfully!");;
    }
    public function insertparts(Request $request)
    {

        // //upload
        // $imgname = $request->txtpartimg1;//abc.jpg
        // $ext = $imgname->getClientOriginalExtension(); //jpg
        // $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
        // $imgname->move(public_path('/part_img'), $newname);

        // $imgname1 = $request->txtpartimg2;//abc.jpg
        // $ext1 = $imgname1->getClientOriginalExtension(); //jpg
        // $newname1 = time().rand(1111,9999).".".$ext1;//43245564578.jpg
        // $imgname1->move(public_path('/part_img'), $newname1);

        // $imgname2 = $request->txtpartimg3;//abc.jpg
        // $ext2 = $imgname2->getClientOriginalExtension(); //jpg
        // $newname2 = time().rand(1111,9999).".".$ext2;//43245564578.jpg
        // $imgname2->move(public_path('/part_img'), $newname2);


        // $imgname3 = $request->txtpartmanualpdf;//abc.jpg
        // $ext3 = $imgname3->getClientOriginalExtension(); //jpg
        // $newname3 = time().rand(1111,9999).".".$ext3;//43245564578.jpg
        // $imgname3->move(public_path('/part_img'), $newname3);


        $modelname = $request->txtmodel;
    	$partname = $request->txtpartname;
    	$partprice = $request->txtpartprice;
    	$partdescription = $request->txtpartdescription;
    	$partimg1 = $request->txtpartimg1;
    	$partimg2 = $request->txtpartimg2;
    	$partimg3 = $request->txtpartimg3;
    	$partmanualpdf = $request->txtpartmanualpdf;
    	$partvideourl = $request->txtpartvideourl;
        $catid= $request->txtcatagory;
    	$partisactive = $request->radradio;

        $data = Part::where("model_id","=",$modelname)->where("part_name","=",$partname)->where("price","=",$partprice)->where("part_description","=",$partdescription)->where("img1","=",$partimg1)->where("img2","=",$partimg2)->where("img3","=",$partimg3)->where("part_manual_pdf","=",$partmanualpdf)->where("video_url","=",$partvideourl)->where("cat_id","=",$catid)->where("isactive","=",$partisactive)->get();
        $count = $data->count();
        
        if($count<=0)
        {   
            //upload
            $imgname = $request->txtpartimg1;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/part_img'), $newname);

            $imgname1 = $request->txtpartimg2;//abc.jpg
            $ext1 = $imgname1->getClientOriginalExtension(); //jpg
            $newname1 = time().rand(1111,9999).".".$ext1;//43245564578.jpg
            $imgname1->move(public_path('/part_img'), $newname1);

            $imgname2 = $request->txtpartimg3;//abc.jpg
            $ext2 = $imgname2->getClientOriginalExtension(); //jpg
            $newname2 = time().rand(1111,9999).".".$ext2;//43245564578.jpg
            $imgname2->move(public_path('/part_img'), $newname2);


            $imgname3 = $request->txtpartmanualpdf;//abc.jpg
            $ext3 = $imgname3->getClientOriginalExtension(); //jpg
            $newname3 = time().rand(1111,9999).".".$ext3;//43245564578.jpg
            $imgname3->move(public_path('/part_img'), $newname3);

        	//insert
        	$obj = new Part;
            $obj->model_id = $modelname;
        	$obj->part_name = $partname;
        	$obj->price = $partprice;
        	$obj->part_description = $partdescription;
        	$obj->img1 = $newname;	
        	$obj->img2 = $newname1;	
        	$obj->img3 = $newname2;
        	$obj->part_manual_pdf = $newname3  ;
        	$obj->video_url = $partvideourl;
            $obj->cat_id=$catid;
        	$obj->isactive = $partisactive;				
        	$obj->save();
        	//insert

    	    return redirect('admin/Parts/AddParts')->with("success","Data Inserted Successfully!");
        }
        else
        {
            return redirect('admin/Parts/AddParts')->with("message","Data Already Exist!");
        }
    }
    public function deleteparts(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from parts where part_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/Parts/ViewParts')->with("success","Data Deleted Successfully!");
    }
}