<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Customer;
use App\Engineer;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        $bills = Bill::all();
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
