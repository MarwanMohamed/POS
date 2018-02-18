<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function frontStoreOrder(Request $request)
    {
    	$this->validate($request, [
    		'name_supplier' => 'required',
    		'num_per_unit' => 'required',
    		'cost_per_unit' => 'required',
    		't_cost_per_one' => 'required',
            'paied_bill' => 'required',
            'id_un' => 'required',
    	]);

        foreach ($request->num_per_unit as $key => $value) {
            $total = 0;
            $order = new Order();
            $order->order_number = rand(1,999999999);
            $order->customer_id = $request->name_supplier;
            $order->num_per_unit = $request->num_per_unit[$key];
            $order->cost_per_unit = $request->cost_per_unit[$key];
            $order->t_cost_per_one = $request->t_cost_per_one[$key];
            $order->item_id = $request->id_un[$key];

            foreach ($request->t_cost_per_one as $tCost) {
                $total += $tCost;
            }

            $order->paied_bill = $request->paied_bill;
            $order->need_bill = $request->paied_bill - $total;
            $order->save();
        }

        return redirect()->back()->with('message', 'تم تسجيل الفاتورة بنجاح');
    }
}
