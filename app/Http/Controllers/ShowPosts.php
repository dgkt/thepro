<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\My_post;

class ShowPosts extends Controller
{
    function showPosts()
    {
        $posts= My_post::all();
        return view('layouts.Post.index', ['my_posts'=> $posts]);
    }
}
