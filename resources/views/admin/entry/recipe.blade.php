@extends('admin.admin-layout')
@section('title')
    Редактирование "{{$data->title}}"
@endsection
@section('main')
    <form method="post" action="{{route('update-admin-recipe', $data->id)}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input maxlength="60" value="{{$data->title}}" required type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea maxlength="740" required type="text" rows="10" cols="45" class="form-control"
                      name="description" id="description">{{$data->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="ingridients" class="form-label">Ингридиенты</label>
            <textarea maxlength="350" required type="text" rows="5" cols="45" class="form-control"
                      name="ingridients" id="ingridients">{{$data->ingridients}}</textarea>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Время на приготовление</label>
            <input maxlength="60" value="{{$data->time}}" required type="text" class="form-control" name="time" id="time">
        </div>
        <div class="mb-3">
            <label for="difficulty" class="form-label">Сложность</label>
            <input maxlength="60" value="{{$data->difficulty}}" required type="text" class="form-control" name="difficulty" id="difficulty">
        </div>
        <div class="mb-3 form-check">
            <input type="hidden" value="0" name="healthyCheck">
            <input type="checkbox" value="1" class="form-check-input" @if($data->healthy_check === 1) checked="checked" @endif name="healthyCheck" id="healthyCheck" >
            <label class="form-check-label" for="healthyCheck">Полезная еда</label>
        </div>
        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>
@endsection
