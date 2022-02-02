<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\State;
use DB;

class AdminStateController extends Controller
{
 	public function AddState()
    {
    	return view('admin.State.AddState');
    }
    public function ViewState()
    {
        $statedata=State::all();
    	return view('admin.State.ViewState',compact('statedata'));
    }
    public function updatestate($id)
    {
        $statedata =State::where("state_id","=",$id)->get();
        return view('admin.State.updatestate',compact('statedata'));
    }
    public function savestate(Request $request)
    {
        $statename = $request->txtstatename;
        $statecode = $request->txtstatecode;

        //Update
        $obj = State::where("state_id","=",$request->stateid)->first();
        $obj->state_name = $statename;
        $obj->state_code = $statecode;
        $obj->save();
        //Update

        return redirect('/admin/State/ViewState')->with("success","Data Updated Successfully!");
    }
    public function insertstate(Request $request)
    {
    	// $statename = $request->txtstatename;
    	// $statecode = $request->txtstatecode;

    	// //insert
    	// $obj = new State;
    	// $obj->state_name = $statename;
    	// $obj->state_code = $statecode;
    	// $obj->save();
    	// //insert

    	// return redirect('/admin/State/AddState')->with("success","Data Inserted Successfully!");


        // $username=$request->username;
        // $password=$request->userpassword;

        $statename = $request->txtstatename;
        $statecode = $request->txtstatecode;
        $data = State::where("state_name","=",$statename)->get();
        $count = $data->count();
        if($count<=0)
        {
            
           //insert
            $obj = new State;
            $obj->state_name = $statename;
            $obj->state_code = $statecode;
            $obj->save();
            //insert

            return redirect('/admin/State/AddState')->with("success","Data Inserted Successfully!");
        }
        else
        {
            // foreach($data as $row)
            // {
            //     Session::put('id', $row->admin_id);
            //     Session::put('name', $row->name);
            //     Session::put('profile', $row->profilepick);
            //     //echo $row->admin_id;
            // }
            return redirect('/admin/State/AddState')->with("message","Data Already Exist!");
        }
    }
    public function deletestate(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from states where state_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/State/ViewState')->with("success","Data Deleted Successfully!");
    }
}

