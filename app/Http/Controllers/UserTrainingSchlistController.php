<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainingSchools;
use DB;

class UserTrainingSchlistController extends Controller
{
    public function Trainingshcl()
    {
    	$trainingsch=DB::table("tbl_training_schools")
        ->leftjoin("cities","tbl_training_schools.city_id","=","cities.city_id")
        ->select("tbl_training_schools.*","cities.city_name")
        ->where("tbl_training_schools.isactive","=","yes")
        ->get();
        
       // $schooldata=TrainingSchools::All();
    return view('Users.TrainingSchool.Trainingscl',compact('trainingsch'));
    }
     public function Trainingshclmap()
    {
    	$trainingsch=DB::table("tbl_training_schools")
        ->leftjoin("cities","tbl_training_schools.city_id","=","cities.city_id")
        ->select("tbl_training_schools.*","cities.city_name")
        ->where("tbl_training_schools.isactive","=","yes")
        ->get();
        
       // $schooldata=TrainingSchools::All();
    return view('Users.TrainingSchool.Trainingsclmap',compact('trainingsch'));
    }
}
