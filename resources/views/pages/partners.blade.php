@extends('layouts.app')

@section('title', 'Партнеры')

@section('content')
    <div class="container main">
        <a href="{{ route('partner_form') }}" class="btn btn-outline-success">Новый партнер</a>
        <div class="info-message">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Список партнеров</h1>
                    <p class="lead">На даный момент у Вас нет созданых партнеров, здесь будет отображатся список</p>
                </div>
            </div>
        </div>
    </div>
@endsection