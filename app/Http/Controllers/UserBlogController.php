<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserBlogController extends Controller
{
    public function Blog()
    {
    	return view('Users.Blog.Blog');
    }
    public function BlogSingle()
    {
    	return view('Users.Blog.BlogSingle');
    }
}
