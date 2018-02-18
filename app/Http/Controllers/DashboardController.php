<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\Item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->search) {
    		$items = Item::where('code', 'LIKE', "%$request->search%")->orWhere('name', 'LIKE', "%$request->search%")->get();
    	}
    	$cats = Category::all();
    	$customers = Customer::all();
    	return view('admin.dashboard', compact('cats', 'customers', 'items'));
    }
}
