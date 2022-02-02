<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRegistrationController extends Controller
{
    public function adminReg()
    {
    	return view('admin.Register.adminReg');
    }
}
