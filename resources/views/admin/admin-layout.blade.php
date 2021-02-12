@extends('layout')
@section('title')
    @yield('title')
@endsection()
@section('content')
    <div class="row">
        <div class="col-xl-3">
            <div class="btn-group-vertical" role="group">
                <a href="{{route('admin-recipes')}}" id="recipesBtn" class="btn btn-outline-primary">Рецепты</a>
                <a href="{{route('admin-recipe-categories')}}" id="recipeCategoresBtn" class="btn btn-outline-primary">Категории
                    рецептов</a>
                <a href="{{route('admin-users')}}" id="usersBtn" class="btn btn-outline-primary">Пользователи</a>
                <a href="{{route('admin-user-statuses')}}" id="userStatusesBtn" class="btn btn-outline-primary">Статусы
                    пользователей</a>
                <a href="{{route('admin-tags')}}" id="tagsBtn" class="btn btn-outline-primary">Теги</a>
                <a href="{{route('admin-files')}}" id="filesBtn" class="btn btn-outline-primary">Файлы</a>
                <div class="btn-group" role="group">
                    <button id="createBtn" type="button" class="btn btn-outline-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        Добавить
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="create" id="createUl">
                        <li><a class="dropdown-item" href="{{route('new-recipe')}}">Добавить рецепт</a></li>
                        <li><a class="dropdown-item" href="{{route('new-recipe-category')}}">Добавить категорию
                                рецепта</a></li>
                        <li><a class="dropdown-item" href="{{route('new-user')}}">Добавить пользователя</a></li>
                        <li><a class="dropdown-item" href="{{route('new-user-status')}}">Добавить статус
                                пользователя</a></li>
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
