<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view("admin.category.index", compact("categories"));
    }

    public function create() {
        $categories = Category::all();
        return view("admin.category.create", compact('categories'));
    }


    public function store(Request $request) {
        $category = new Category();
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->parent_id = $request->parent_id;
        $category->save();

        return redirect()->back()->with("type", "success")->with("message", "Category saved successfully!!!");
    }

    public function edit(Category $category) {
        $categories = Category::all();
        return view("admin.category.edit", compact('category', 'categories'));
    }

    public function  update(Request $request,Category $category) {
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->parent_id = $request->parent_id;
        $category->save();

        return redirect()->back()->with("type", "success")->with("message", "Category updated successfully!!!");
    }

    public function delete($id) {
        $category = Category::with('childs')->find($id);
        if($category->childs()->count() > 0) {
            return redirect()->back()->with("type", "success")->with("message", "Firstly delete child category!!!");
        }
        $category->delete();
        return redirect()->back()->with("type", "success")->with("message", "Category deleted successfully!!!");
    }
}
