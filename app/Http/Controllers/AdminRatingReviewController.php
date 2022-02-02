<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RatingReview;
use DB;

class AdminRatingReviewController extends Controller
{
    //
    public function viewRatingReview()
    {
    	//$reviewdata=RatingReview::all(); 
        //select * from cities
        $reviewdata=DB::table("tbl_rating_review")
        ->leftjoin("tbl_user","tbl_rating_review.user_id","=","tbl_user.user_id")
        ->select("tbl_rating_review.*","tbl_user.name")
        ->get();
        return view('admin.ratingReview.ratingReview',compact('reviewdata'));
    }
    public function deletereview(Request $request)
    {
        //echo "adf";
        $id = $request->deleteid;
        //echo $id;
        DB::delete('delete from tbl_rating_review where r_id = ?',[$id]);
        //$result = State::where('state_id', $id)->firstorfail()->delete();
        return redirect('/admin/ratingReview/ratingReview')->with("success","Data Deleted Successfully!");
    }
}
