<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $q = $request->get('q');
        $posts = Post::where('title','LIKE',"%{$q}%")->orWhere('description','LIKE',"%{$q}%")->paginate(1);
        return view("search", compact('posts'));
    }
}
