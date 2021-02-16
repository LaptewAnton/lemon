<?php

namespace App\Http\Controllers;

use App\Models\user_status;
use App\Models\userStatus;
use Illuminate\Http\Request;

class UserStatusController extends Controller
{
    public function create(Request $request){
        $UserStatus = new userStatus();
        $UserStatus->name = $request->input('name');

        $UserStatus->save();
        return redirect()->route('admin');
    }
    public function allAdminUserStatuses()
    {
        return view('admin.table.user-statuses', ['data' => userStatus::all()]);
    }
    public function delete($id){
        user_status::find($id)->delete();
        return view('admin.table.user-statuses', ['data' => userStatus::all()]);
    }
}
