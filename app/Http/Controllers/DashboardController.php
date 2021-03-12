<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auth;
use App\Models\Order;

class DashboardController extends Controller
{
    //
    public function index()
    {
        # code...
    	return view('dashboard.index');
    }
}
