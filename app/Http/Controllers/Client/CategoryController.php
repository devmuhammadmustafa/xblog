<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index($slug) {
        $category = Category::where("slug",$slug)->with("posts")->first();
        dd($category->posts);
    }
}
