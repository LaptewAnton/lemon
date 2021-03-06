<?php

namespace App\Http\Controllers;

use App\Models\recipeCategory;
use Illuminate\Http\Request;

class RecipeCategoryController extends Controller
{
    public function create(Request $request)
    {
        $RecipeCategory = new recipeCategory();
        $RecipeCategory->name = $request->input('name');

        $RecipeCategory->save();
        return redirect()->route('admin');
    }
    public function allAdminRecipeCategories()
    {
        return view('admin.table.recipe-categories', ['data' => recipeCategory::all()]);
    }
    public function delete($id){
        recipeCategory::find($id)->delete();
        return view('admin.table.recipe-categories', ['data' => recipeCategory::all()]);
    }
}
