<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index'); // Home page view
    }

    public function courses()
    {
        return view('website.course'); // Courses page view
    }
}
