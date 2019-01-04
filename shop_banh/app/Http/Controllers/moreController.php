<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class moreController extends Controller
{
	public function vectormap()
    {
    	# code...
    	return view('admin.vectormap');
    }
    //
    public function googlemmap()
    {
    	# code...
    	return view('admin.google');
    }
    public function calendar()
    {
    	# code...
    	return view('admin.calendar');
    }
}
