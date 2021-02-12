<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function submit(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->description = $request->input('description');

        $user->save();
        return redirect()->route('admin');
    }
    public function allAdminUsers()
    {
        return view('admin.tables.users', ['data' => User::all()]);
    }
}
