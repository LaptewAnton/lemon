<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function create(Request $request)
    {

        $recipe = new Recipe();
        $recipe->title = $request->input('title');
        $recipe->description = $request->input('description');
        $recipe->ingridients = $request->input('ingridients');
//        $recipe->category_id = $request->input('category');
        $recipe->time = $request->input('time');
        $recipe->difficulty = $request->input('difficulty');
        $recipe->healthy_check = $request->input('healthyCheck');

        $recipe->save();
        return redirect()->route('admin-recipes');
    }

    public function allRecipes()
    {
        return view('recipes', ['data' => Recipe::all()]);
    }
    public function allAdminRecipes()
    {
        return view('admin.table.recipes', ['data' => Recipe::all()]);
    }
    public function showAdminRecipe($id){
        $recipe = new Recipe();
        return view('admin.entry.recipe', ['data' => $recipe->find($id)]);
    }
    public function update($id, Request $request){
        $recipe = Recipe::find($id);
        $recipe->title = $request->input('title');
        $recipe->description = $request->input('description');
        $recipe->ingridients = $request->input('ingridients');
//        $recipe->category_id = $request->input('category');
        $recipe->time = $request->input('time');
        $recipe->difficulty = $request->input('difficulty');
        $recipe->healthy_check = $request->input('healthyCheck');

        $recipe->save();
        return redirect()->route('show-admin-recipe', $id);
    }
    public function delete($id){
        Recipe::find($id)->delete();
        return redirect()->route('admin-recipes');
    }
}
