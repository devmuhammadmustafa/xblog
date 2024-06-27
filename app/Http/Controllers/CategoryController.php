<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug) {
        $category = Category::where("slug",$slug)->with("posts")->first();
        dd($category->posts);
    }
}
