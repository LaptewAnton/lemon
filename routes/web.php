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

//Рецепты
Route::get('/admin/table/recipes',
    'App\Http\Controllers\RecipeController@allAdminRecipes'
)->name('admin-recipes');//Отображение рецептов в админке
Route::get(
    '/admin/table/recipes/{id}',
    'App\Http\Controllers\RecipeController@showAdminRecipe'
)->name('show-admin-recipe');//Редактирование рецепта
Route::post(
    '/admin/table/recipes/{id}/update',
    'App\Http\Controllers\RecipeController@update'
)->name('update-admin-recipe');//POST запрос на редактирование рецепта
Route::get('/admin/table/recipes/{id}/delete',
    'App\Http\Controllers\RecipeController@delete'
)->name('delete-admin-recipe');//Удаление рецепта
Route::get('/admin/new-recipe', function () {
    return view('admin/new/recipe');
})->name('admin-new-recipe');//Создание рецепта
Route::post('admin/new/recipe/add',
    'App\Http\Controllers\RecipeController@create');//POST запрос на создание рецепта

//Категории рецептов
Route::get('/admin/table/recipe-categories',
    'App\Http\Controllers\RecipeCategoryController@allAdminRecipeCategories'
)->name('admin-recipe-categories');//Отображение категорий в админке
Route::get('/admin/new/recipe-category', function () {
    return view('admin/new/recipe-category');
})->name('admin-new-recipe-category');//Создание категории
Route::post('admin/new/recipe-category/add',
    'App\Http\Controllers\RecipeCategoryController@create');//POST запрос на создание категории

//Пользователи
Route::get('/admin/table/users',
    'App\Http\Controllers\UserController@allAdminUsers'
)->name('admin-users');//Отображение ползователей в админке
Route::get('/admin/new/user', function () {
    return view('admin/new/user');
})->name('admin-new-user');//Создание пользователя
Route::post('/admin/new/user/add',
    'App\Http\Controllers\UserController@create');//POST запрос на создание пользователя

//Статусы пользователей
Route::get('/admin/table/user-statuses',
    'App\Http\Controllers\UserStatusController@allAdminUserStatuses'
)->name('admin-user-statuses');//Отображение статусов в админке
Route::get('/admin/table/user-statuses/{id}/delete',
    'App\Http\Controllers\UserStatusController@delete'
)->name('delete-status');//Удаление статуса
Route::get('/admin/new/user-status', function () {
    return view('admin/new/user-status');
})->name('admin-new-user-status');//Создание статусы
Route::post('/admin/new/user-status/add',
    'App\Http\Controllers\UserStatusController@create');//POST запрос на создание статуса

//Теги
Route::get('/admin/table/tags',
    'App\Http\Controllers\TagController@allAdminTags'
)->name('admin-tags');//Отображение тегов в админке
Route::get('/admin/new/tag', function () {
    return view('admin/new/tag');
})->name('admin-new-tag');//Создание тега
Route::post('/admin/new/tag/add',
    'App\Http\Controllers\TagController@create');//POST запрос на создание тега

//Файлы
Route::get('/admin/table/files',
    'App\Http\Controllers\FileController@allAdminFiles'
)->name('admin-files');//Отображение файлов в админке
Route::get('/admin/new/file', function () {
    return view('admin/new/file');
})->name('admin-new-file');//Добавление файла
Route::post('/admin/new/file/add',
    'App\Http\Controllers\FileController@create');//POST запрос на добавление файла
