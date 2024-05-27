<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FurniController extends Controller
{
    function about() {
        return view('about');
    }
    
    function contact() {
        return view('contact');
    }

    function services() {
        return view('services');
    }
}
