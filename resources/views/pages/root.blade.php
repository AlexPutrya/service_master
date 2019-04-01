@extends('layouts.app')

@section('title', 'Сервисный мастер')

@section('content')
    <div class="banner">
        <div class="banner-content">
            <h2>В помощь сервисным мастерам !</h2>
            <p>SM - это онлайн система управления сервисными ремонтами</p>
            <a class="btn btn-outline-light btn-lg btn-block" href="{{ route('register') }}">Начать работу бесплатно</a>
        </div>
        <div class="image">
            <img src="{{ asset('img/banner.png') }}" alt="">
        </div>
    </div>
    <div class="main-info">
        <h2>Управлять ремонтами - это <span class="bold-color">легко</span></h2>
        <p>Понимание программы займет всего несколько минут</p>
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
            <div class="cont">
                <img src="{{ asset('img/interface.svg') }}" alt="">
                <h4>Простота интерфейса</h4>
                <div class="text">
                    <p>Программа максимально проста, легкий и удобный интерфейс  </p>
                </div>
            </div>
        </div>
        <a id="btn-start" class="btn btn-outline-success btn-lg" href="{{ route('register') }}">Зарегистрироватся</a>
    </div>
    <footer>
        <div class="container both-navbar">
                <div class="nav-item"> 
                    <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Обратная связь</a>
                </div>
                <div class="nav-item"> 
                    <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> О проекте</a>
                </div>
        </div>
    </footer>

@endsection