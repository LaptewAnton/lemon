<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function submit(Request $request)
    {

        $recipe = new Recipe();
        $recipe->title = $request->input('title');
        $recipe->description = $request->input('description');
        $recipe->ingridients = $request->input('ingridients');
        $recipe->time = $request->input('time');
        $recipe->difficulty = $request->input('difficulty');
        $recipe->healthy_check = $request->input('healthyCheck');

        $recipe->save();
        return redirect()->route('admin.tables.recipes');
    }

    public function allRecipes()
    {
        return view('recipes', ['data' => Recipe::all()]);
    }
    public function allAdminRecipes()
    {
        return view('admin.tables.recipes', ['data' => Recipe::all()]);
    }
}
