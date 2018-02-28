<?php

namespace App\Http\Controllers;

use App\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index()
    {
        $sellers = Seller::all();
        return view('admin.sellers.index', compact('sellers'))->withTitle('Sellers');
    }

    public function create()
    {
        return view('admin.sellers.create', compact('categories'))->withTitle('Create Seller');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'cost' => 'required',
        ]);
        Seller::create($request->all());
        return redirect()->route('seller.index')->with('message', 'تم اضافة المورد بنجاح');
    }


    public function edit($id)
    {
        $seller = Seller::findOrFail($id);

        return view('admin.sellers.edit', compact('seller', 'categories'))->withTitle('Edit Seller');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'cost' => 'required',
        ]);

        Seller::findOrFail($id)->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل المورد بنجاح');
    }

    public function destroy($id)
    {
        Seller::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'تم حذف المورد بنجاح');
    }
}
