<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/new-recipe', function () {
    return view('new-recipe');
})->name('new-recipe');

Route::post('/new-recipe/add', 'App\Http\Controllers\RecipeController@submit');
Route::get('/recipes', 'App\Http\Controllers\RecipeController@allRecipes')->name('recipes');
