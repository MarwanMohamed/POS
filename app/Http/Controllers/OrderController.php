<?php

namespace App\Http\Controllers;

use App\Back;
use App\EndDay;
use App\Item;
use App\Order;
use App\Remainder;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if($request->number){
            $orders = Order::where('order_number', $request->number)->get();
        }else{

        $orders = Order::select('order_number', 'customer_id')->groupBy('order_number', 'customer_id')->where('end', '!=', 1)->get();
        }

        return view('admin.orders.index', compact('orders'))->withTitle('Bills');
    }

    public function show($number)
    {
        $orders = Order::where('order_number', $number)->get();
        $total = 0;
        foreach ($orders as $order) {
            $total += $order->t_cost_per_one;
        }
        return view('admin.orders.show', compact('orders', 'total'))->withTitle('Show Bill');

    }

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


            $order->order_number = $request->rand_pa;
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

            $this->decrementAmout($request->id_un[$key], $request->num_per_unit[$key]);
            $order->save();
        }

        return redirect()->back()->with('message', 'تم تسجيل الفاتورة بنجاح');
    }

    private function decrementAmout($item, $amount)
    {
        $item = Item::find($item);
        $item->amount = $item->amount - $amount;
        $item->save();
    }

    public function deleteItem($bill, $id)
    {
        $order = Order::where('order_number', $bill)->where('item_id', $id)->first();
        $this->incrementItem($order->item_id, $order->num_per_unit);
        $this->storeBackItem($order);
        $order->delete();
        return redirect()->back()->with('message', 'تم حذف الصنف من الفاتورة');
    }

    public function storeBackItem($item)
    {
        $back = new Back;
        $back->order_id = $item->id;
        $back->order_number = $item->order_number;
        $back->item_id = $item->item_id;
        $back->save();
    }

    private function incrementItem($id, $amount)
    {
        $item = Item::find($id);
        $item->amount = $item->amount + $amount;
        $item->save();
    }

    public function EditPaid(Request $request, $bill)
    {
        if ($request->paied_bill < 0) {
            \Session::flash('error', 'يجب ان يكون المبلغ اكبر من 0');
            return redirect()->back();
        }

        $bills = Order::where('order_number', $bill)->get();

        if ($request->paied_bill > $request->total) {
            \Session::flash('error', 'يجب ان يكون المبلغ اقل من او يساوى الاجمالى');
            return redirect()->back();
        }
        foreach ($bills as $bill) {
            $newRemainder = $request->paied_bill - $bill->paied_bill;
            $bill->paied_bill = $request->paied_bill;
            $bill->need_bill = ($request->total - $request->paied_bill);
            $bill->save();
            $remainder = new Remainder;
            $remainder->remainder =  $newRemainder;
            $remainder->order_id = $bill->id;
            $remainder->order_number = $bill->order_number;
            $remainder->save();
        }

        return redirect()->back()->with('message', 'تم تعديل المبلغ المدفوع');
    }

    public function endDay()
    {
        $orders = Order::where('end', '!=', 1)->get();

        foreach ($orders as $order) {
            if ($order->end == 0) {
                $order->update(['end' => 1]);
                $endDay = new EndDay();
                $endDay->order_id = $order->id;
                $endDay->order_number = $order->order_number;
                $endDay->endDay = $order->created_at;
                $endDay->save();
            }
        }
        return redirect()->back()->with('message', 'تم انهاء اليوم');
    }

    public function days()
    {
        $days = EndDay::select('created_at')->groupBy('created_at')->get();
        return view('admin.days.index', compact('days'))->withTitle('Days');
    }

    public function showDay($day)
    {
        $orders = EndDay::whereRaw('date(created_at) = ?', [$day])->select('order_number')->groupBy('order_number')->get();
        return view('admin.days.orders', compact('orders'))->withTitle('Bills');
    }
}
