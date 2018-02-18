<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function frontStoreOrder(Request $request)
    {
    	dd($request->all());
    	$this->validate($request, [
    		'name_supplier' => 'required',
    		'num_per_unit' => 'required',
    		'cost_per_unit' => 'required',
    		't_cost_per_one' => 'required',
    	]);


    	foreach ($variable as $key => $value) {
    		# code...
    	}
    }
}
