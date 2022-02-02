<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\State;
use DB;

class AdminCityController extends Controller
{
    public function AddCity()
    {
    	$statedata=State::all();
        return view('admin.City.AddCity',compact('statedata'));
    }
    public function ViewCity()
    {
        //$citydata=City::all();
        $citydata=DB::table("cities")
        ->leftjoin("states","cities.state_id","=","states.state_id")
        ->select("cities.*","states.state_name")
        ->get();
    	return view('admin.City.ViewCity',compact('citydata'));
    }
    public function updatecity($id)
    {
        $statedata=State::all();
        $citydata =City::where("city_id","=",$id)->get();
        return view('admin.City.updatecity',compact('statedata','citydata'));
    }
    public function savecity(Request $request)
    {
        $cityname = $request->txtcityname;
        $citycode = $request->txtcitycode;
        $stateid = $request->txtstate;

        //Update
        $obj = City::where("city_id","=",$request->cityid)->first();
        $obj->city_name = $cityname;
        $obj->city_code = $citycode;
        $obj->state_id = $stateid;
        $obj->save();
        //Update

        return redirect('admin/City/ViewCity')->with("success","Data Updated Successfully!");   
    }
    public function insertcity(Request $request)
    {
    	$cityname = $request->txtcityname;
    	$citycode = $request->txtcitycode;
        $stateid = $request->txtstate;
        
        $data = City::where("city_name","=",$cityname)->where("city_code","=",$citycode)->where("state_id","=",$stateid)->get();
        $count = $data->count();
        if($count<=0)
        {   
            //insert
            $obj = new City;
            $obj->city_name = $cityname;
            $obj->city_code = $citycode;
            $obj->state_id = $stateid;
            $obj->save();
            //insert

            return redirect('admin/City/AddCity')->with("success","Data Inserted Successfully!");
        }
        else
        {
             return redirect('admin/City/AddCity')->with("message","Data Already Exist!");   
        }
    }
    public function deletecity(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from cities where city_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/City/ViewCity')->with("success","Data Deleted Successfully!");
    }
}
