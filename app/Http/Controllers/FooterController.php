<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function about_us()
    {
        return view('about-us-view');
    }
    public function career()
    {
        return view('career-view');
    }
}
