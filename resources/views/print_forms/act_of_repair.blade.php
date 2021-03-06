@extends('layouts.app')

@section('title', 'Акт приема-передачи устройства в ремонт')

@section('content')
    @if($profile->org_name != NULL)
    <div class="print">
        <div class="blank">
            <div class="org-info">
                <p>Организация: {{ $profile->org_name }}</p>
                <p>Адрес: {{ $profile->adress }}</p>
                <p>Номер телефона: {{ $profile->phone }}</p>
                <p>Ел.почта: {{ $profile->email }}</p>
            </div>
            <h5>Акт приема передачи устройства в ремонт # {{ $repair->id }}</h5>
            <div class="repair-info">
                <p>Устройство: {{ $repair->device }}</p>
                <p>Серийный номер(если есть): {{ $repair->serial }}</p>
                <p>Комплектация:  {{ $repair->complect }}</p>
                <p>Описание неисправности: {{ $repair->defect }}</p>
            </div>
            <div class="client-info">
                <p>Контактное лицо: {{ $repair->client }}</p>
                <p>Телефон: {{ $repair->phone }}</p>
                <p>Дата регистрации: {{ $repair->register_date }}</p>
                <p>Подпись ________</p>
            </div>
        </div>
        <div class="blank">
            <div class="org-info">
                <p>Организация: {{ $profile->org_name }}</p>
                <p>Адрес: {{ $profile->adress }}</p>
                <p>Номер телефона: {{ $profile->phone }}</p>
                <p>Ел.почта: {{ $profile->email }}</p>
            </div>
            <h5>Акт приема передачи устройства в ремонт # {{ $repair->id }}</h5>
            <div class="repair-info">
                <p>Устройство: {{ $repair->device }}</p>
                <p>Серийный номер(если есть): {{ $repair->serial }}</p>
                <p>Комплектация:  {{ $repair->complect }}</p>
                <p>Описание неисправности: {{ $repair->defect }}</p>
            </div>
            <div class="client-info">
                <p>Контактное лицо: {{ $repair->client }}</p>
                <p>Телефон: {{ $repair->phone }}</p>
                <p>Дата регистрации: {{ $repair->register_date }}</p>
                <p>Подпись ________</p>
            </div>
        </div>
    </div>
    <a href="#"  class="btn btn-outline-secondary btn-block btn-lg" onclick="event.preventDefault(); window.print()">Печать</a>
    @else
    <div class="container">
        <div id="info_block" class="alert alert-primary" role="alert">
            <div class="info-icon">
                <h1><i class="fas fa-info-circle"></i></h1>
            </div>
            <div class="info-content">
                <h1> Профиль пользователя не заполнен!</h1>
                <p>Для отображения печатной формы пожалуйста заполните данные профиля</p>
            </div>
        </div>
    </div>
    @endif
@endsection