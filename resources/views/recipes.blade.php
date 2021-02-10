@extends('layout')
@section('title')
    Все рецепты
@endsection
@section('main')
    <div class="row">
        @foreach($data as $recipe)
            <div class="col-xl-4">
                <div class="card" style="width: 18rem;">
                    <img src="http://placehold.it/280x180" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recipe->title }}</h5>
                        <p class="card-text">
                            <span>{{ $recipe->time }}</span> |
                            <span>{{ $recipe->difficulty }}</span>
                        </p>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
