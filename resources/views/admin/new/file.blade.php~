@extends('admin.admin-layout')
@section('title')
    Добавление файла
@endsection
@section('main')
    <form method="post" enctype="multipart/form-data" action="/new-file/add">
        @csrf
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea maxlength="740" required type="text" rows="10" cols="45" class="form-control"
                      name="description" id="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Файл</label>
            <input maxlength="60" required type="file" class="form-control" name="file" id="file">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
