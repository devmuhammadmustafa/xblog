<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view("admin.users.index", compact('users'));
    }

    public function create() {
        return view("admin.users.create");
    }

    public function edit($id) {
        $user = User::find($id);
        return view("admin.users.edit", compact('user'));
    }

    public function store(Request $request) {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_active = $request->is_active;
        $user->is_admin = $request->is_admin;

        if($request->file("image")) {
            $fileName = time().'_'.$request->file("image")->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $user->image = time().'_'.$request->file('image')->getClientOriginalName();
            $user->image_path = '/storage/' . $filePath;
        }

        $user->save();

        return redirect()->back();
    }

    public function delete(User $user) {
        if ($user->image_path && file_exists(public_path($user->image_path))) {
            unlink(public_path($user->image_path));
        }
       $user->delete();

        return redirect()->back();
    }
}
