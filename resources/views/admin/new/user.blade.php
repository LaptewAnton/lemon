@extends('admin.admin-layout')
@section('title')
    Добавление пользователя
@endsection
@section('main')
    <form method="post" action="/admin/new/user/add">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Имя</label>
            <input maxlength="60" required type="text" class="form-control" name="name" id="title">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Почта</label>
            <input maxlength="60" required type="email" class="form-control" name="email" id="title">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input maxlength="60" required type="password" class="form-control" name="password" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea maxlength="740" required type="text" rows="10" cols="45" class="form-control"
                      name="description" id="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
