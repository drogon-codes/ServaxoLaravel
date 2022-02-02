<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;
use DB;

class AdminFeedbackController extends Controller
{
    public function viewfeedback()
    {
    	$viewfeedbackdata=feedback::all();
        return view('admin.feedback.viewfeedback',compact('viewfeedbackdata'));
    }
    public function deleteviewfeedback(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        DB::delete('delete from tbl_feedback where feed_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/feedback/viewfeedback')->with("success","Data Deleted Successfully!");
    }
}
