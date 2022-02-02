<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;

class UserFeedentryController extends Controller
{
    public function Feedbackentry()
    {
    	return view('Users.Feedback.feedback');
    }
     public function enterfeedback(Request $request)
    {
        
    	//insert
    	$obj = new feedback;
    	$obj->name = $request->txtname;
    	$obj->email = $request->txtemail;
    	$obj->contact = $request->txtcontactno;
    	$obj->feed_text = $request->txtyourfb;
    	$obj->save();
    	//insert
    	return redirect('/Users/Feedback');
    }
    
}
