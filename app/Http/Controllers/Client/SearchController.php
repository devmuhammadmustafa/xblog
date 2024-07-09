<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        $q = $request->get("q");
        $posts = Post::where("title","like","%$q%")->orWhere("description","like","%$q%")->paginate(1);
        return view("search", compact('posts'));
    }
}
