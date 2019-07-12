@extends('layouts.app')

@section('title', 'Обратная связь')

@section('content')
    <div class="container main">
        <div class="feedback">
            <form action="">
                @csrf
                <h2>Форма обратной связи</h2>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Ваше имя</label>
                    <input name="user_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ф.И.О." value="{{ Auth::user() != null ? Auth::user()->name : ''}}" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">E-mail</label>
                    <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Адрес електронной почты" value="{{ Auth::user() != null ? Auth::user()->email : ''}}" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Текст сообщения:</label>
                    <textarea name="complect" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-outline-success">Отправить</button>
                    <button type="button" onclick="window.location='{{ route('repairs') }}'" class="btn btn-outline-secondary">Отмена</button>
                </div>
            </form>
        </div>
    </div>
@endsection