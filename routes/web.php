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

//Таблицы
Route::get('/admin/tables/recipes', 'App\Http\Controllers\RecipeController@allAdminRecipes')->name('admin-recipes');
Route::get('/admin/tables/recipe-categories', 'App\Http\Controllers\RecipeCategoryController@allAdminRecipeCategories')->name('admin-recipe-categories');
Route::get('/admin/tables/users', 'App\Http\Controllers\UserController@allAdminUsers')->name('admin-users');
Route::get('/admin/tables/user-statuses', 'App\Http\Controllers\UserStatusController@allAdminUserStatuses')->name('admin-user-statuses');
Route::get('/admin/tables/tags', 'App\Http\Controllers\TagController@allAdminTags')->name('admin-tags');
Route::get('/admin/tables/files', 'App\Http\Controllers\FileController@allAdminFiles')->name('admin-files');


//Новые данные
//Новый рецепт с админки
Route::get('/admin-new-recipe', function () {
    return view('admin/new/recipe');
})->name('new-recipe');
Route::post('/new-recipe/add', 'App\Http\Controllers\RecipeController@submit');

//Новая категория рецептов с админки
Route::get('/admin-new-recipe-category', function () {
    return view('admin/new/recipe-category');
})->name('new-recipe-category');
Route::post('/new-recipe-category/add', 'App\Http\Controllers\RecipeCategoryController@submit');

//Новый пользователь с админки
Route::get('/admin-new-user', function () {
    return view('admin/new/user');
})->name('new-user');
Route::post('/new-user/add', 'App\Http\Controllers\UserController@submit');

//Новый статус пользователя с админки
Route::get('/admin-new-user-status', function () {
    return view('admin/new/user-status');
})->name('new-user-status');
Route::post('/new-user-status/add', 'App\Http\Controllers\UserStatusController@submit');

//Новый тег с админки
Route::get('/admin-new-tag', function () {
    return view('admin/new/tag');
})->name('new-tag');
Route::post('/new-tag/add', 'App\Http\Controllers\TagController@submit');

//Новый файл с админки
Route::get('/admin-new-file', function () {
    return view('admin/new/file');
})->name('new-file');
Route::post('/new-file/add', 'App\Http\Controllers\FileController@submit');
