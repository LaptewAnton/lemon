<?php

namespace App\Http\Controllers;

use App\Models\userStatus;
use Illuminate\Http\Request;

class UserStatusController extends Controller
{
    public function submit(Request $request){
        $UserStatus = new userStatus();
        $UserStatus->name = $request->input('name');

        $UserStatus->save();
        return redirect()->route('admin');
    }
    public function allAdminUserStatuses()
    {
        return view('admin.tables.user-statuses', ['data' => userStatus::all()]);
    }
}
