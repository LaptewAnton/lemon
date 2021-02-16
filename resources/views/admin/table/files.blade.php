@extends('admin.admin-layout')
@section('title')
    Таблица файлов
@endsection
@section('main')
    <table class="table" id="files">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Название</th>
            <th scope="col">Расширение</th>
            <th scope="col">Используется</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($data as $file)
                <th scope="row">{{ $file->id }}</th>
                <td>{{ $file->name }}</td>
                <td>{{ $file->extension }}</td>
                <td>рецепт/2.ru</td>
                <td><a href="#">Редактировать</a></td>
                <td><a href="{{route('delete-admin-files', $recipe->id)}}">Удалить</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
