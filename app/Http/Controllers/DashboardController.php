<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // cara 1: sql qery
        
        // Render the dashboard view
        return view('Dashboard.index');
    }
}
