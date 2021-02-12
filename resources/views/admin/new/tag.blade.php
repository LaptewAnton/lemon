@extends('admin.admin-layout')
@section('title')
    Добавление тега
@endsection
@section('main')
    <form method="post" action="/admin/new/tag/add">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input maxlength="60" required type="text" class="form-control" name="name" id="name">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
