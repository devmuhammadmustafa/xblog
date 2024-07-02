<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view("contact");
    }

    public function store(Request $request) {

        $data = $request->all();
        unset($data['_token']);
//
        Contact::create($data);
//
        return redirect()->back()->with("type", "success")->with("message", "Message sended!!!");
    }
}
