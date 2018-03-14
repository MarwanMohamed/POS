<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\Item;
use App\Setting;
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
        $showPrice = Setting::where('key', 'togglePrice')->first();
    	return view('admin.dashboard', compact('cats', 'customers', 'items', 'showPrice'));
    }

    public function searchName(Request $request)
    {
        return Item::Where('name', 'LIKE', "%$request->data%")->get();
    }

    public function searchCode(Request $request)
    {
        return Item::where('code', 'LIKE', "%$request->data%")->get();
    }
}
