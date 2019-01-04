<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function dashboard()
    {
    	# code...
    	return view('admin.dashboard');
    }
}
