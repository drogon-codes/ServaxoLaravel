<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use DB;

class AdminNewsController extends Controller
{
    public function addnews()
    {
    	return view('admin.news.addnews');
    }
    public function changenewsstatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = news::where("news_id","=",$id)->first();
         if($status=="yes")
         {
            $obj->isactive = "no";
         }
         else
         {
            $obj->isactive = "yes";
         }
         $obj->save();
        return redirect('admin/news/viewnews')->with("success","Status Updated Successfully!");
    }
    public function viewnews()
    {
    	$newsdata=news::All();
    	return view('admin.news.viewnews',compact('newsdata'));
    }
    public function updatenews($id)
    {
        $newsdata =news::where("news_id","=",$id)->get();
        return view('admin.news.updatenews',compact('newsdata'));
    }
    public function savenews(Request $request)
    {
        if($request->hasFile('txtimage'))
        {
            //upload
            $imgname = $request->txtimage;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/news_img'), $newname);
        }
        else
        {
            $newname=$request->oldimg;
        }

        $newstitle = $request->txttitle;
        $des = $request->txtdesc;
        $img = $request->txtimage;
        $isactive = $request->radradio;

        //Update
        $obj = news::where("news_id","=",$request->newsid)->first();
        $obj->news_title = $newstitle;
        $obj->description = $des;
        $obj->news_image = $newname;
        $obj->isactive = $isactive;
        $obj->save();
        //Update

        return redirect('/admin/news/viewnews')->with("success","Data Updated Successfully!");
    }
    public function insertnews(Request $request)
    {
		//upload
        // $imgname = $request->txtimage;//abc.jpg
        // $ext = $imgname->getClientOriginalExtension(); //jpg
        // $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
        // $imgname->move(public_path('/news_img'), $newname);

    	$newstitle = $request->txttitle;
    	$des = $request->txtdesc;
    	$img = $request->txtimage;
    	$isactive = $request->radradio;
        $data = news::where("news_title","=",$newstitle)->where("description","=",$des)->get();
        $count = $data->count();
        if($count<=0)
        {  
            $imgname = $request->txtimage;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/news_img'), $newname);
            
        	//insert
        	$obj = new news;
            $obj->news_title = $newstitle;
            $obj->description = $des;
            $obj->news_image = $newname;
            $obj->isactive = $isactive;
            $obj->save();
            //insert

    	   return redirect('/admin/news/addnews')->with("success","Data Inserted Successfully!");
        }
        else
        {
            return redirect('/admin/news/addnews')->with("message","Data Already Exist!")
            ;
        }
    }
    public function deletenews(Request $request)
    {
    	//echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from news where news_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/news/viewnews')->with("success","Data Deleted Successfully!");
    }
}
