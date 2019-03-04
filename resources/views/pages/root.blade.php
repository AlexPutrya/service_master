@extends('layouts.app')

@section('title', 'Сервисный мастер')

@section('content')
    <div class="banner">
        <div class="banner-content">
            <h1>В помощь сервисным мастерам !</h1>
            <a class="btn btn-outline-light btn-lg btn-block" href="">Начать работу</a>
        </div>
        <div class="image">
            <img src="{{ asset('img/banner.png') }}" alt="">
        </div>
    </div>
    <div class="root-content">
        <div class="cont">
            <img src="{{ asset('img/browser.svg') }}" alt="">
            <h4>Доступ с любого места</h4>
            <div class="text">
                <p>Приложение работает в браузере и поетому вы можете получить доступ с любого места</p>
            </div>
        </div>
        <div class="cont">
            <img src="{{ asset('img/Smartphone Tablet.svg') }}" alt="">
            <h4>Адаптировано под разные устройства</h4>
            <div class="text">
                <p>Приложение адаптировано под разные устройства: персональный компьютер, планшет или смартфон </p>
            </div>
        </div>
        <div class="cont">
            <img src="{{ asset('img/Briefcase.svg') }}" alt="">
            <h4>Организуйте свою работу</h4>
            <div class="text">
                <p> Приложение дает возможность организовать свою работу правильно и секономить время</p>
            </div>
        </div>
    </div>
    <footer>
        <ul>
            <li>О проекте</li>
            <li>Помощь проекту</li>
            <li>Рекламодателям</li>
            <li>Обратная связь</li>
        </ul>
    </footer>

@endsection