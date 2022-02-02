<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMyAccountController extends Controller
{
    public function MyAccount()
    {
    	return view('Users.MyAccount.MyAccount');
    }
}
