@extends('admin.admin-layout')
@section('title')
    Админ панель
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
                <tr>
                    <th scope="row">1</th>
                    <td>Название рецепта</td>
                    <td>Время приготовления</td>
                    <td>Сложность</td>
                    <td>Полезность продукта</td>
                    <td><a href="#">Редактировать</a></td>
                    <td><a href="#">Удалить</a></td>
                </tr>
                </tbody>
            </table>
            <table class="table" id="recipeCategores">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Название</th>
                    <th scope="col">Редактировать</th>
                    <th scope="col">Удалить</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Название рецепта</td>
                    <td><a href="#">Редактировать</a></td>
                    <td><a href="#">Удалить</a></td>
                </tr>
                </tbody>
            </table>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Пример имени</td>
                    <td>admin@admin.ru</td>
                    <td><a href="#">Редактировать</a></td>
                    <td><a href="#">Удалить</a></td>
                </tr>
                </tbody>
            </table>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Пример статуса</td>
                    <td><a href="#">Редактировать</a></td>
                    <td><a href="#">Удалить</a></td>
                </tr>
                </tbody>
            </table>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Пример тега</td>
                    <td><a href="#">Редактировать</a></td>
                    <td><a href="#">Удалить</a></td>
                </tr>
                </tbody>
            </table>
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
                    <th scope="row">1</th>
                    <td>example</td>
                    <td>.png</td>
                    <td>рецепт/2.ru</td>
                    <td><a href="#">Редактировать</a></td>
                    <td><a href="#">Удалить</a></td>
                </tr>
                </tbody>
            </table>
@endsection
