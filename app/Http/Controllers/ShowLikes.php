<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\My_like;

class ShowLikes extends Controller
{
    function showLikes()
    {
        $likes= My_like::all();
        return view('layouts.Page.index', ['my_likes'=> $likes]);
    }

}
