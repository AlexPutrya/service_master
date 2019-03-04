@extends('layouts.app')

@section('title', 'Отправки поставщикам')

@section('content')
    <div class="container main">
        <a href="#" class="btn btn-outline-success">Новая отправка поставщику</a>
        <div class="info-message">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Список отправок поставщикам</h1>
                    <p class="lead">На даный момент у Вас нет отправок на ремонт, здесь будет отображатся список</p>
                </div>
            </div>
        </div>
    </div>
@endsection