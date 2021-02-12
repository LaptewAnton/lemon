<?php

namespace App\Http\Controllers;

use App\Models\recipeCategory;
use Illuminate\Http\Request;

class RecipeCategoryController extends Controller
{
    public function submit(Request $request)
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
}
