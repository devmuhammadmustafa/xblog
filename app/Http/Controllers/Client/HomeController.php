<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

    $posts = Post::with(["user", "categories", "comments"])->paginate(1);


        return view("home", compact('posts'));
    }
}
