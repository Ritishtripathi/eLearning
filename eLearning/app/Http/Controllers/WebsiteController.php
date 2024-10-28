<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.index'); // Home page view
    }

    public function courses(){
        return view('website.courses'); // Courses page view
    }
    public function course_details(){
        return view('website.course_details');
    }
    public function userDashboard(){
    return view('user.dashboard'); // Create this view
    }
    
   
}
