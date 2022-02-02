<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\AdminModel;

class AdminLoginController extends Controller
{
   	public function LoginPage()
    {
    	return view('admin.login.login');
    }
    public function logout()
    {
    	Session::flush();
    	return redirect('/admin/login')->with("success","Successfully Logout");
    }
    public function checklogin(Request $request)
    {
    	$username=$request->username;
    	$password=$request->userpassword;
    	$data = AdminModel::where("username","=",$username)->where("password","=",$password)->get();
    	$count = $data->count();
    	if($count<=0)
    	{
    		
    		return redirect('/admin/login')->with("message","Username or password does not match");
    	}
    	else
    	{
    		foreach($data as $row)
    		{
    			Session::put('id', $row->admin_id);
    			Session::put('name', $row->name);
    			Session::put('profile', $row->profilepic);
    			//echo $row->admin_id;
    		}
    		return redirect('/admin/Dashboard');
    	}
    }
}
