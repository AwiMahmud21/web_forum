<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {

        return view('all_pages.admin.admin_dashboard');
    }
}