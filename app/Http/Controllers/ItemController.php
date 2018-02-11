<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('admin.items.index', compact('items'))->withTitle('Items');
    }

    public function create()
    {
    	$categories = Category::all();
        return view('admin.items.create', compact('categories'))->withTitle('Create Item');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|integer',
            'name' => 'required|min:3',
            'category_id' => 'required|integer',
            'amount' => 'required|integer',
            'buy_price' => 'integer',
            'sell_price' => 'integer',
        ]);
        $allData = $request->all();
        Item::create($allData);
        return redirect()->route('item.index')->with('message', 'تم اضافة الصنف بنجاح');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
    	$categories = Category::all();

        return view('admin.items.edit', compact('item', 'categories'))->withTitle('Edit Item');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'code' => 'required|integer',
            'name' => 'required|min:3',
            'category_id' => 'required|integer',
            'amount' => 'required|integer',
            'buy_price' => 'integer',
            'sell_price' => 'integer',
        ]);

        Item::findOrFail($id)->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل الصنف بنجاح');
    }

    public function destroy($id)
    {
        Item::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'تم حذف الصنف بنجاح');
    }
}
