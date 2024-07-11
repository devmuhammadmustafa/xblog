<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request) {
        $data = $request->all();
        unset($data['_token']);

        Comment::create($data);

        return redirect()->back()->with("type", "success")->with("message", "Comment sended!!!");
    }
}
