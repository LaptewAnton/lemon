@extends('layout')
@section('title')
    @yield('title')
@endsection()
@section('content')
<div class="row">
    <div class="col-xl-3">
        <div class="btn-group-vertical" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="recipesBtn" id="recipesBtn" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="recipesBtn">Рецепты</label>

            <input type="radio" class="btn-check" name="recipeCategoresBtn" id="recipeCategoresBtn"
                   autocomplete="off">
            <label class="btn btn-outline-primary" for="recipeCategoresBtn">Категории рецептов</label>

            <input type="radio" class="btn-check" name="usersBtn" id="usersBtn" autocomplete="off">
            <label class="btn btn-outline-primary" for="usersBtn">Пользователи</label>

            <input type="radio" class="btn-check" name="userStatusesBtn" id="userStatusesBtn" autocomplete="off">
            <label class="btn btn-outline-primary" for="userStatusesBtn">Статусы пользователей</label>

            <input type="radio" class="btn-check" name="tagsBtn" id="tagsBtn" autocomplete="off">
            <label class="btn btn-outline-primary" for="tagsBtn">Теги</label>

            <input type="radio" class="btn-check" name="filesBtn" id="filesBtn" autocomplete="off">
            <label class="btn btn-outline-primary" for="filesBtn">Файлы</label>

            <div class="btn-group" role="group">
                <button id="createBtn" type="button" class="btn btn-primary dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    Добавить
                </button>
                <ul class="dropdown-menu" aria-labelledby="create" id="createUl">
                    <li><a class="dropdown-item" href="{{route('new-recipe')}}">Добавить рецепт</a></li>
                    <li><a class="dropdown-item" href="{{route('new-recipe-category')}}">Добавить категорию рецепта</a></li>
                    <li><a class="dropdown-item" href="{{route('new-user')}}">Добавить пользователя</a></li>
                    <li><a class="dropdown-item" href="{{route('new-user-status')}}">Добавить статус пользователя</a></li>
                    <li><a class="dropdown-item" href="{{route('new-tag')}}">Добавить тег</a></li>
                    <li><a class="dropdown-item" href="{{route('new-file')}}">Добавить файл</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-9">
@yield('main')
    </div>
</div>
@endsection
