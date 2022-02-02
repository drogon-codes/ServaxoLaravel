<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function ViewUser()
    {
    	return view('admin.User.ViewUser');
    }
}
