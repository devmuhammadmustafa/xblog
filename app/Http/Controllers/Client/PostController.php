<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($slug) {

        $post = Post::with(['user', 'categories','comments'])->where("slug", $slug)->firstOrFail();
//        if(!$post) {
//            abort(403);
//        }
        $categories = Category::all();

        $latestPosts = Post::orderBy("id", "desc")->limit(3)->get();

//        if(!$post) {
//            abort(501);
//        }

        return view("post", compact('post', 'categories', 'latestPosts'));
    }
}
