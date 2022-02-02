<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agent;

class UserRTOAgentController extends Controller
{
	public function RTOAgentlist()
	{
		$rto=agent::where("isactive","=","yes")->get();
		return view('Users.RTOAgent.rtoagent',compact('rto'));
	}    
	public function RTOAgentmap()
	{
		$rto=agent::where("isactive","=","yes")->get();
		return view('Users.RTOAgent.rtoagentmap',compact('rto'));
	}    
}
