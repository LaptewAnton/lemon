<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function submit(Request $request){

        $recipe = new Recipe();
        $recipe->title = $request->input('title');
        $recipe->description = $request->input('description');
        $recipe->ingridients = $request->input('ingridients');
        $recipe->time = $request->input('time');
        $recipe->difficulty = $request->input('difficulty');
        $recipe->healthy_check = $request->input('healthyCheck');

//        dd($request);

        $recipe->save();

        return redirect()->route('recipes');

    }
}
