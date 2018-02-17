<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {
    	$cats = Category::all();
    	$customers = Customer::all();
    	return view('admin.dashboard', compact('cats', 'customers'));
    }
}
