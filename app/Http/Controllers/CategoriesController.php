<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'))->withTitle('Categories');
    }

    public function create()
    {
        return view('admin.categories.create')->withTitle('Create Category');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cat_image' => 'required|mimes:jpg,jpeg,png',
            'cat_name' => 'required|min:3',
            'min_price' => 'required|integer',
            'max_price' => 'required|integer',
            'cat_desc' => 'required|min:5',
        ]);
        $allData = $request->all();
        Category::create($allData);
        return redirect()->route('category.index')->with('message', 'تم اضافة الفئة بنجاح');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'))->withTitle('Edit Category');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cat_image' => 'mimes:jpg,jpeg,png',
            'cat_name' => 'required|min:3',
            'min_price' => 'required|integer',
            'max_price' => 'required|integer',
            'cat_desc' => 'required|min:5',
        ]);

        Category::findOrFail($id)->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل الفئة بنجاح');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if (file_exists(public_path("/uploads/".$category->cat_image)))
            unlink("uploads/".$category->cat_image);
        
        $category->delete();
        return redirect()->back()->with('message', 'تم حذف الفئة بنجاح');
    }
    
}
