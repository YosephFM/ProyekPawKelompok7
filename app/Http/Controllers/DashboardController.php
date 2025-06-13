<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $barangs = \App\Models\Barang::all();
        return view('Dashboard.index', compact('barangs'));
    }
}
