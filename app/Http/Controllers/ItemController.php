<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\Setting;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $code = '';
        if ($request->code) {
            $items = Item::where('code', $request->code)->get();
        } else {
            $items = Item::all();
        }
        $showPrice = Setting::where('key', 'togglePrice')->first();
        return view('admin.items.index', compact('items', 'showPrice'))->withTitle('Items');
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
            'buy_price' => 'required',
        ];
        $validator = \Validator::make($request->all(), $rules);

        if ($request->amount < 1) {
            \Session::flash('errorr', 'يجب ان يكون الكمية اكبر من 1');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if ($request->buy_price < 1) {
            \Session::flash('buyerror', 'يجب ان يكون السعر اكبر من 1');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if ($request->sell_price < 1) {
            \Session::flash('sellerror', 'يجب ان يكون السعر اكبر من 1');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if ($request->sell_price < $request->buy_price) {
            \Session::flash('errorSell', 'يجب ان يكون سعر البيع اكثر من سعر الشراء');
            return redirect()->back()->withInput()->withErrors($validator);
        }
        Item::create($request->all());
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
            'buy_price' => 'required',
        ];

        $validator = \Validator::make($request->all(), $rules);

        if ($request->amount < 1) {
            \Session::flash('errorr', 'يجب ان يكون الكمية اكبر من 1');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if ($request->buy_price < 1) {
            \Session::flash('buyerror', 'يجب ان يكون السعر اكبر من 1');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if ($request->sell_price < 1) {
            \Session::flash('sellerror', 'يجب ان يكون السعر اكبر من 1');
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

    public function toggelInFront()
    {
        $showPrice = Setting::where('key', 'togglePrice')->first();
        if ($showPrice) {
            $showPrice->value = ! $showPrice->value;
            $showPrice->save();

        } else{
            $showPrice = new Setting;
            $showPrice->key = 'togglePrice';
            $showPrice->value = 1;
            $showPrice->save();
        }
        return redirect()->back()->with('message', 'تم التعديل بنجاح');
    }
}
