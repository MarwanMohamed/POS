<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Customer;
use App\Engineer;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(Request $request)
    {

        if($request->number){
            $bills = Bill::where('order_number', $request->number)->get();
        } elseif ($request->from && $request->to) {
            $from = \DateTime::createFromFormat('m-d-Y',$request->from);
            $to = \DateTime::createFromFormat('m-d-Y',$request->to);

            $bills = Bill::whereBetween('created_at', [$from->format('Y-m-d')." 00:00:00", $to->format('Y-m-d')." 23:59:59"])->get();
        } else{
            $bills = Bill::where('end', '!=', 1)->get();
        }


        return view('admin.bills.index', compact('bills'))->withTitle('Bills');
    }

    public function create()
    {
    	$customers = Customer::all();
    	$engineers = Engineer::all();
        return view('admin.bills.create', compact('customers', 'engineers'))->withTitle('Create Bill');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'engineer_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'type' => 'required',
            'error' => 'required',
            'in' => 'required',
            'out' => 'required',
            'cost' => 'numeric',
        ]);
    
        Bill::create($request->all());
        return redirect()->route('bill.index')->with('message', 'تم اضافة الفاتورة بنجاح');
    }

    public function edit($id)
    {
        $bill = Bill::findOrFail($id);
    	$customers = Customer::all();
    	$engineers = Engineer::all();

        return view('admin.bills.edit', compact('bill', 'customers', 'engineers'))->withTitle('Edit Bill');
    }

    public function update(Request $request, $id)
    {
       $this->validate($request, [
            'engineer_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'type' => 'required',
            'error' => 'required',
            'in' => 'required',
            'out' => 'required',
            'cost' => 'numeric',
        ]);

        Bill::findOrFail($id)->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل الفاتورة بنجاح');
    }

    public function destroy($id)
    {
        Bill::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'تم حذف الفاتورة بنجاح');
    }
}
