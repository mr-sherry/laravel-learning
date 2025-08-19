<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Protect all routes in this controller
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Admin dashboard
    public function index()
    {
        $user = auth()->user();
        return view('pages.dashboards.admin.index', compact('user'));
    }
}
