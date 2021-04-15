<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\My_comment;

class ShowComments extends Controller
{
    function showComments()
    {
        $comments= My_comment::all();
        return view('layouts.Comment.index', ['my_comments'=> $comments]);
    }
}
