<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {
    	$cats = Category::all();
    	return view('admin.dashboard', compact('cats'));
    }
}
