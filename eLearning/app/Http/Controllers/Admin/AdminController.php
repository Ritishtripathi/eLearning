<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        // Your logic for the admin dashboard
        return view('admin.dashboard');
    }
}
