<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function imports()
    {
      return view('layouts.Import.index');
    }
    public function importFile(Request $request)
    {
      $request->file('file')->store('public');
      return "File Imported Successfully!";
    }

    public function importJSON(Request $request)
    {
      
    }
}


