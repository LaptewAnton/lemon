@extends('admin.admin-layout')
@section('title')
    Таблица рецептов
@endsection
@section('main')
    <table class="table" id="recipes">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Название</th>
            <th scope="col">Время приготовления</th>
            <th scope="col">Сложность</th>
            <th scope="col">Полезность продукта</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $recipe)
            <tr>
                <th scope="row">1</th>
                <td>{{ $recipe->title }}</td>
                <td>{{ $recipe->time }}</td>
                <td>{{ $recipe->difficulty }}</td>
                <td>{{ $recipe->healthy_check }}</td>
                <td><a href="#">Редактировать</a></td>
                <td><a href="#">Удалить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
