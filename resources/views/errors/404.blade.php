@extends('layouts.error_layout')

@section('title', 'Профиль пользователя')

@section('content')
<div class="container">
    <div class="server-error">
        <div class='error-title'>
            <p><i class="fas fa-frown"></i></p>
            <p>Ошибка</p>
        </div>
        <div class="error-message">
            <h3>К сожалению такая страница не найдена</h3>
            <a id="error_back_home" href="{{ route('root') }}" class="btn btn-danger"> Вернутся на главную страницу</a>
        </div>
    </div>
</div>
@endsection