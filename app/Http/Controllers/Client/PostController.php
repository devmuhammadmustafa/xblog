<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($slug) {
        $post = Post::with(['user', 'categories'])->where("slug", $slug)->first();
        if(!$post) {
            abort(404);
        }
        return view("post", compact('post'));
    }
}
