@extends('admin.admin-layout')
@section('title')
    Таблица тегов
@endsection
@section('main')
<table class="table" id="tags">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Название</th>
        <th scope="col">Редактировать</th>
        <th scope="col">Удалить</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $tag)
    <tr>
        <th scope="row">{{ $tag->id }}</th>
        <td>{{ $tag->name }}</td>
        <td><a href="#">Редактировать</a></td>
        <td><a href="{{route('delete-admin-tag', $recipe->id)}}">Удалить</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
