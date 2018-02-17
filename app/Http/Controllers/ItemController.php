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


    public function getItems(Request $request)
    {
        return Item::where('category_id', $request->catId)->get();
    }

    public function create()
    {
    	$categories = Category::all();
        return view('admin.items.create', compact('categories'))->withTitle('Create Item');
    }

    public function store(Request $request)
    {
        $rules = [
            'code' => 'required|integer|unique:items',
            'name' => 'required|min:3',
            'category_id' => 'required|integer',
            'amount' => 'integer',
            'buy_price' => 'integer',
            'sell_price' => 'integer',
        ];
        $validator = \Validator::make($request->all(), $rules);

        if ($request->amount < 1) {
            \Session::flash('error', 'يجب ان يكون الكمية اكبر من 1');
            return redirect()->back()->withInput()->withErrors($validator);
        }


        if ($request->sell_price < $request->buy_price) {
            \Session::flash('errorSell', 'يجب ان يكون سعر البيع اكثر من سعر الشراء');
            return redirect()->back()->withInput()->withErrors($validator);
        }


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
        $rules = [
            'code' => 'required|integer|unique:items,code,'.$id,
            'name' => 'required|min:3',
            'category_id' => 'required|integer',
            'amount' => 'integer',
            'buy_price' => 'integer',
            'sell_price' => 'integer',
        ];

        $validator = \Validator::make($request->all(), $rules);

        if ($request->amount < 1) {
            \Session::flash('error', 'يجب ان يكون الكمية اكبر من 1');
            return redirect()->back()->withInput()->withErrors($validator);
        }


        if ($request->sell_price < $request->buy_price) {
            \Session::flash('errorSell', 'يجب ان يكون سعر البيع اكثر من سعر الشراء');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        Item::findOrFail($id)->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل الصنف بنجاح');
    }

    public function destroy($id)
    {
        Item::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'تم حذف الصنف بنجاح');
    }
}
