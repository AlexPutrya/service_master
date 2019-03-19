@extends('layouts.app')

@section('title', 'Акт приема-передачи устройства в ремонт')

@section('content')
    <div class="container print">
        <div class="org-info">
            <p>Организация(ФОП/ЧП): {{ $profile->org_name }}</p>
            <p>Адрес: {{ $profile->adress }}</p>
            <p>Номер телефона: {{ $profile->phone }}</p>
            <p>Ел.почта: {{ $profile->email }}</p>
        </div>
        <h1>Акт приема передачи устройства в ремонт</h1>
        
        <p>Клиент</p>
        <a href="#"  class="btn btn-outline-secondary btn-block btn-lg" onclick="event.preventDefault(); window.print()">Печать</a>
    </div>
@endsection