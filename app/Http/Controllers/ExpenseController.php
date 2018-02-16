<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return view('admin.expenses.index', compact('expenses'))->withTitle('Expenses');
    }

    public function create()
    {
        return view('admin.expenses.create')->withTitle('Create Expense');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'phone' => 'required',
            'percentage' => 'required',
        ]);
        Expense::create($request->all());
        return redirect()->route('expense.index')->with('message', 'تم اضافة المصروف بنجاح');
    }

    public function edit($id)
    {
        $expense = Expense::findOrFail($id);

        return view('admin.expenses.edit', compact('expense', 'categories'))->withTitle('Edit Expense');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'phone' => 'required',
            'percentage' => 'required',
        ]);

        Expense::findOrFail($id)->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل المصروف بنجاح');
    }

    public function destroy($id)
    {
        Expense::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'تم حذف المصروف بنجاح');
    }
}
