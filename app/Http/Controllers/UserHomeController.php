<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part;
use App\Catagory;
use DB;


class UserHomeController extends Controller
{
    //
    public function Home()
    {
    	$packagedata=package::all();
    	return view('Users.Home.Home',compact('packagedata'));
    }
    


}
