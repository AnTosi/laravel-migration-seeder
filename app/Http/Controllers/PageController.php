<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class PageController extends Controller
{
    public function index()
    {
        $flights = (Flight::all());
        return view('home', compact('flights'));
    }//
}
