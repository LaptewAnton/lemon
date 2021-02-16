<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
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
        return view('admin.table.users', ['data' => User::all()]);
    }
    public function delete($id){
        User::find($id)->delete();
        return view('admin.table.users', ['data' => User::all()]);
    }
}
