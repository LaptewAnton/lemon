<?php

use Illuminate\Support\Facades\Route;

//Главная
Route::get('/', function () {
    return view('home');
})->name('home');

//Рецепты
Route::get('/recipes', 'App\Http\Controllers\RecipeController@allRecipes')->name('recipes');


//Админка
Route::get('/admin', function () {
    return view('admin.main');
})->name('admin');

//Новый рецепт с админки
Route::get('/admin-new-recipe', function () {
    return view('admin/new-recipe');
})->name('new-recipe');
Route::post('/new-recipe/add', 'App\Http\Controllers\RecipeController@submit');

//Новый пользователь с админки
Route::get('/admin-new-recipe-category', function () {
    return view('admin/new-recipe-category');
})->name('new-recipe-category');

//Новый пользователь с админки
Route::get('/admin-new-user', function () {
    return view('admin/new-user');
})->name('new-user');

//Новый статус пользователя с админки
Route::get('/admin-new-user-status', function () {
    return view('admin/new-user-status');
})->name('new-user-status');

//Новый тег с админки
Route::get('/admin-new-tag', function () {
    return view('admin/new-tag');
})->name('new-tag');

//Новый файл с админки
Route::get('/admin-new-file', function () {
    return view('admin/new-file');
})->name('new-file');
