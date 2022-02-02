<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agent;
use DB;

class AdminAgentController extends Controller
{
    public function addagent()
    {
    	return view('admin.rtoagent.addagent');
    }
    public function changeagentstatus(Request $request)
    {
         $id=$request->stid;
         $status=$request->txtstatus;
         $obj = agent::where("rtoagn_id","=",$id)->first();
         if($status=="yes")
         {
            $obj->isactive = "no";
         }
         else
         {
            $obj->isactive = "yes";
         }
         $obj->save();
        return redirect('admin/rtoagent/viewagent')->with("success","Status Updated Successfully!");
    }
    public function viewagent()
    {
        $agentdata=agent::All();
        return view('admin.rtoagent.viewagent',compact('agentdata'));
    }
    public function updateagent($id)
    {
        $agentdata =agent::where("rtoagn_id","=",$id)->get();
        return view('admin.rtoagent.updateagent',compact('agentdata'));
    }
    public function saveagent(Request $request)
    {
        if($request->hasFile('txtphoto'))
        {
            //upload
            $imgname = $request->txtphoto;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/agent_img'), $newname);
        }
        else
        {
            $newname=$request->oldimg;
        }

        $name = $request->txtname;
        $contact = $request->txtcontact;
        $email = $request->txtemail;
        $photo = $request->txtphoto;
        $work = $request->txtwork;
        $isactive = $request->radradio;

        //Updated
        $obj = agent::where("rtoagn_id","=",$request->agnid)->first();
        $obj->name = $name;
        $obj->contact = $contact;
        $obj->email = $email;
        $obj->photo = $newname;
        $obj->agent_work = $work;
        $obj->isactive = $isactive;
        $obj->save();
        //Updated

        return redirect('/admin/rtoagent/viewagent')->with("success","Data Updated Successfully!");
    }
    public function insertagent(Request $request)
    {

       
        //upload
        $imgname = $request->txtphoto;//abc.jpg
        $ext = $imgname->getClientOriginalExtension(); //jpg
        $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
        $imgname->move(public_path('/agent_img'), $newname);

        $name = $request->txtname;
        $contact = $request->txtcontact;
        $email = $request->txtemail;
        $photo = $request->txtphoto;
        $work = $request->txtwork;
        $isactive = $request->radradio;

        $data = agent::where("name","=",$name)->where("contact","=",$contact)->where("email","=",$email)->where("agent_work","=",$work)->get();
        $count = $data->count();

        if($count<=0)
        { 
            //upload
            $imgname = $request->txtphoto;//abc.jpg
            $ext = $imgname->getClientOriginalExtension(); //jpg
            $newname = time().rand(1111,9999).".".$ext;//43245564578.jpg
            $imgname->move(public_path('/agent_img'), $newname);

            //insert
            $obj = new agent;
            $obj->name = $name;
            $obj->contact = $contact;
            $obj->email = $email;
            $obj->photo = $newname;
            $obj->agent_work = $work;
            $obj->isactive = $isactive;
            $obj->save();
            return redirect('/admin/rtoagent/addagent')->with("success","Data Inserted Successfully!");
        }
        else
        {
            return redirect('/admin/rtoagent/addagent')->with("message","Data Already Exist!");
        }
    }
    public function deleteagent(Request $request)
    {
         //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_rto_agent where rtoagn_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/rtoagent/viewagent')->with("success","Data Deleted Successfully!");
    }
}
