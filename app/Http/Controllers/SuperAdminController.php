<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function admin_login()
    {
        return view('admin-login');
    }
    public function super_admin()
    {
        return view('super-admin');
    }
    public function booking_services()
    {
        return view('booking-services-admin');
    }
    public function our_customers()
    {
        return view('customers-admin');
    }
    public function our_applicant()
    {
        return view('applicant-admin');
    }
    public function service_category()
    {
        return view('service-category-view');
    }
    public function pro_worker()
    {
        return view('pro-worker-admin');
    }
    public function house_keeping()
    {
        return view('house-keeping-admin');
    }
    public function water_wash()
    {
        return view('water-wash-admin');
    }
    public function construction_work()
    {
        return view('construction-work-admin');
    }
    public function other_services()
    {
        return view('other-services-admin');
    }
}
