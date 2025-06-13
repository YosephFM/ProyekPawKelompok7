<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AboutUs;

class AboutusController extends Controller
{
    public function index()
    {
        
        return view('Aboutus.index');
    }
    
}