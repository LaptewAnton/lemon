<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function submit(Request $request){
        $tag = new Tag();
        $tag->name=$request->input('name');

        $tag->save();
        return redirect()->route('admin');
    }
    public function allAdminTags()
    {
        return view('admin.tables.tags', ['data' => Tag::all()]);
    }
}
