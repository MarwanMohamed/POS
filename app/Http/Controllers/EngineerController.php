<?php

namespace App\Http\Controllers;

use App\Engineer;
use Illuminate\Http\Request;

class EngineerController extends Controller
{
     public function index()
    {
        $engineers = Engineer::all();
        return view('admin.engineers.index', compact('engineers'))->withTitle('Engineers');
    }

    public function create()
    {
        return view('admin.engineers.create', compact('categories'))->withTitle('Create Engineer');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'phone' => 'required',
            'percentage' => 'required',
        ]);
        Engineer::create($request->all());
        return redirect()->route('engineer.index')->with('message', 'تم اضافة المهندس بنجاح');
    }

    public function edit($id)
    {
        $engineer = Engineer::findOrFail($id);

        return view('admin.engineers.edit', compact('engineer', 'categories'))->withTitle('Edit Engineer');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'phone' => 'required',
            'percentage' => 'required',
        ]);

        Engineer::findOrFail($id)->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل المهندس بنجاح');
    }

    public function destroy($id)
    {
        Engineer::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'تم حذف المهندس بنجاح');
    }
}
