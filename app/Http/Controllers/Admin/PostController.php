<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('categories')->get();
        return view("admin.posts.index", compact('posts'));
    }

    public function create() {
        $categories = Category::all();
        return view("admin.posts.create", compact('categories'));
    }

    public function edit(Post $post) {
        return view("admin.posts.edit", compact('post'));
    }

    public function store(Request $request) {

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->description = Str::slug($request->description);

        if($request->file("image")) {
            $fileName = time().'_'.$request->file("image")->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $post->image = time().'_'.$request->file('image')->getClientOriginalName();
            $post->image_path = '/storage/' . $filePath;
        }

        $post->save();

        $post->categories()->sync($request->categories);

        return redirect()->back()->with('type', "success")->with('message', "Post created successfully!!!");
    }

    public function update(Request $request, Post $post) {
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->description = Str::slug($request->description);

        if($request->file("image")) {
            $fileName = time().'_'.$request->file("image")->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $post->image = time().'_'.$request->file('image')->getClientOriginalName();
            $post->image_path = '/storage/' . $filePath;
        }

        $post->save();

        return redirect()->back()->with('type', "success")->with('message', "Post updated successfully!!!");
    }

    public function delete(Post $post) {
        if ($post->image_path && file_exists(public_path($post->image_path))) {
            unlink(public_path($post->image_path));
        }
        $post->delete();

        return redirect()->back()->with('type', "success")->with('message', "Post deleted successfully!!!");
    }
}
