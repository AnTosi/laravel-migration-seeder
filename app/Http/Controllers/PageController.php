<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function other()
    {
        
        return view('other');
    }

    public function blog()
    {
        
        return view('blog');
    }
}
