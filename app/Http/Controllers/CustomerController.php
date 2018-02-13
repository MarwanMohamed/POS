<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index', compact('customers'))->withTitle('Customers');
    }

    public function create()
    {
        return view('admin.customers.create', compact('categories'))->withTitle('Create Customer');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'phone' => 'required',
            'address' => 'required',
        ]);
        Customer::create($request->all());
        return redirect()->route('customer.index')->with('message', 'تم اضافة العميل بنجاح');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        return view('admin.customers.edit', compact('customer', 'categories'))->withTitle('Edit Customer');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Customer::findOrFail($id)->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل العميل بنجاح');
    }

    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'تم حذف العميل بنجاح');
    }
}
