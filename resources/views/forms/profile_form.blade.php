@extends('layouts.app')

@section('title', 'Профиль пользователя')

@section('content')
    <div class="container main profile">
        <h2 class="profile-title">Профиль пользователя</h2>
        <form method="POST" action="{{ route('profile') }}" autocomplete="off">
        @csrf
            <h4>Общие данные</h4>
            <p><span class="profile-info">*будут использованы для формирования печатной формы "Акт приема передачи в ремонт"</span></p>
            <div class="form-group">
                <label for="exampleFormControlInput1">Название организации</label>
                <input name="org_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{ isset($profile->org_name) ? $profile->org_name : '' }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Адрес</label>
                <input name="adress" type="text" class="form-control" id="exampleFormControlInput1" placeholder="полный адрес" value="{{ isset($profile->adress) ? $profile->adress : '' }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Телефон</label>
                <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{ isset($profile->phone) ? $profile->phone : '' }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput4">Електронная почта</label>
                <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="email" value="{{ isset($profile->email) ? $profile->email : '' }}" required autofocus>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-outline-success">Сохранить</button>
                <button type="button" onclick="window.location='{{ route('repairs') }}'" class="btn btn-outline-secondary">Отмена</button>
            </div>
        </form>
    </div>
    
@endsection