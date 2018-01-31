<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function index()
    {

        return view('gallery');
    }
    public function home()
    {

        return view('home');
    }
    public function theLegend()
    {
        return view('easteregg');
    }
}
