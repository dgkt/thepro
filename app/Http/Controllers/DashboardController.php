<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
      return view('layouts.Dashboard.index');
    }
    public function pages()
    {
      return view('layouts.Page.index');
    }

}
