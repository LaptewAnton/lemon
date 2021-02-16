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

//рецепты
Route::get('/admin/table/recipes', 'App\Http\Controllers\RecipeController@allAdminRecipes')->name('admin-recipes');
Route::get(
    '/admin/table/recipes/{id}',
    'App\Http\Controllers\RecipeController@showAdminRecipe'
)->name('show-admin-recipe');
Route::post(
    '/admin/table/recipes/{id}/update',
    'App\Http\Controllers\RecipeController@update'
)->name('update-admin-recipe');
Route::get('/admin/table/recipes/{id}/delete', 'App\Http\Controllers\RecipeController@delete')->name('delete-admin-recipe');
Route::get('/admin/table/recipe-categories', 'App\Http\Controllers\RecipeCategoryController@allAdminRecipeCategories')->name('admin-recipe-categories');
Route::get('/admin/table/users', 'App\Http\Controllers\UserController@allAdminUsers')->name('admin-users');
Route::get('/admin/table/user-statuses', 'App\Http\Controllers\UserStatusController@allAdminUserStatuses')->name('admin-user-statuses');
Route::get('/admin/table/tags', 'App\Http\Controllers\TagController@allAdminTags')->name('admin-tags');
Route::get('/admin/table/files', 'App\Http\Controllers\FileController@allAdminFiles')->name('admin-files');


//Новые данные
//Новый рецепт с админки
Route::get('/admin/new-recipe', function () {
    return view('admin/new/recipe');
})->name('admin-new-recipe');
Route::post('admin/new/recipe/add', 'App\Http\Controllers\RecipeController@submit');

//Новая категория рецептов с админки
Route::get('/admin/new/recipe-category', function () {
    return view('admin/new/recipe-category');
})->name('admin-new-recipe-category');
Route::post('admin/new/recipe-category/add', 'App\Http\Controllers\RecipeCategoryController@submit');

//Новый пользователь с админки
Route::get('/admin/new/user', function () {
    return view('admin/new/user');
})->name('admin-new-user');
Route::post('/admin/new/user/add', 'App\Http\Controllers\UserController@submit');

//Новый статус пользователя с админки
Route::get('/admin/new/user-status', function () {
    return view('admin/new/user-status');
})->name('admin-new-user-status');
Route::post('/admin/new/user-status/add', 'App\Http\Controllers\UserStatusController@submit');

//Новый тег с админки
Route::get('/admin/new/tag', function () {
    return view('admin/new/tag');
})->name('admin-new-tag');
Route::post('/admin/new/tag/add', 'App\Http\Controllers\TagController@submit');

//Новый файл с админки
Route::get('/admin/new/file', function () {
    return view('admin/new/file');
})->name('admin-new-file');
Route::post('/admin/new/file/add', 'App\Http\Controllers\FileController@submit');
