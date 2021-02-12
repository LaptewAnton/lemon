@extends('admin.admin-layout')
@section('title')
    Таблица категорий рецептов
@endsection
@section('main')
    <table class="table" id="userStatuses">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Название</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $userStatus)
            <tr>
                <th scope="row">{{ $userStatus->id }}</th>
                <td>{{ $userStatus->name }}</td>
                <td><a href="#">Редактировать</a></td>
                <td><a href="#">Удалить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
