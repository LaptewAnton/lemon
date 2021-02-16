<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create(Request $request){
        $tag = new Tag();
        $tag->name=$request->input('name');

        $tag->save();
        return redirect()->route('admin');
    }
    public function allAdminTags()
    {
        return view('admin.table.tags', ['data' => Tag::all()]);
    }
    public function delete($id){
        Tag::find($id)->delete();
        return view('admin.table.tags', ['data' => Tag::all()]);
    }
}
