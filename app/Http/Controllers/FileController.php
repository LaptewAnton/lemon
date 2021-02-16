<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function create(Request $request){
        $file = new File();

        $file_input = $request->file('file');
        $file_name = $file_input->getClientOriginalName();
        $file_extension = $file_input->getClientOriginalExtension();
        $path = public_path('/img');
        $file_input->move($path, $file_name);

        $file->extension=$file_extension;
        $file->name=$file_name;
        $file->description=$request->input('description');

        $file->save();
        return redirect()->route('admin');
    }
    public function allAdminFiles()
    {
        return view('admin.table.files', ['data' => File::all()]);
    }
    public function delete($id){
        File::find($id)->delete();
        return view('admin.table.files', ['data' => File::all()]);
    }
}
