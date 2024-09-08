<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home_page()
    {
        return view('home');
    }
    public function pro_worker()
    {
        return view('pro-worker-view');
    }
    public function house_keeping()
    {
        return view('house-keeping-view');
    }
    public function water_wash()
    {
        return view('water-wash-view');
    }
    public function construction_work()
    {
        return view('construction-work-view');
    }
    public function other_services()
    {
        return view('other-services-view');
    }
}
