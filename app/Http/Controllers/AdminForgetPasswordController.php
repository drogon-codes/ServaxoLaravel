<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminForgetPasswordController extends Controller
{
    public function ForgetPassword()
    {
    	return view('admin.ForgetPassword.ForgetPassword');
    }
}
