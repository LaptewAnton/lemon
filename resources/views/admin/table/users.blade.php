@extends('admin.admin-layout')
@section('title')
    Таблица пользователей
@endsection
@section('main')
    <table class="table" id="users">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Имя</th>
            <th scope="col">Почта</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="#">Редактировать</a></td>
                <td><a href="{{route('delete-admin-user', $recipe->id)}}">Удалить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
