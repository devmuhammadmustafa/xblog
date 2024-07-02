<?php

namespace App\Http\Controllers;

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
