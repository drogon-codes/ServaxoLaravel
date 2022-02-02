<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;

class UserNewsController extends Controller
{
    public function newslist()
    {
        $news=news::where("isactive","=","yes")->get();
    	return view('Users.News.Newslist',compact('news'));
    }
     public function newsdetails($id)
    {        
        $newsdata=news::where("news_id","=",$id)->get();
    	return view('Users.News.Newsdetails',compact('newsdata'));
    }
}
