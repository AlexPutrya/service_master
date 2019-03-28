@extends('layouts.app')

@section('title', 'Профиль пользователя')

@section('content')
    <div class="container main profile">
        <h2 class="profile-title">Профиль пользователя</h2>
        <form method="POST" action="{{ route('profile') }}">
        @csrf
            <h4>Общие данные</h4>
            <p><span class="profile-info">*будут использованы для формирования печатной формы "Акт приема передачи в ремонт"</span></p>
            <div class="form-group">
                <label for="exampleFormControlInput1">Название организации</label>
                <input name="org_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{ isset($profile->org_name) ? $profile->org_name : '' }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Адрес</label>
                <input name="adress" type="text" class="form-control" id="exampleFormControlInput1" placeholder="полный адрес" value="{{ isset($profile->adress) ? $profile->adress : '' }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Телефон</label>
                <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{ isset($profile->phone) ? $profile->phone : '' }}" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput4">Електронная почта</label>
                <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="email" value="{{ isset($profile->email) ? $profile->email : '' }}">
            </div>
            <!-- <h4>Банковские реквизиты и реквизиты предпринимателя</h4>
            <p><span class="profile-info">*будут использованы для формирования печатной формы "Акт выполненых работ"</span></p>
            <div class="form-group">
                <label for="exampleFormControlInput5">Код ДРФО</label>
                <input name="drfo_code" type="text" class="form-control" id="exampleFormControlInput1" placeholder="десятизначный номер из государственного реестра физ. лиц" value="{{ isset($profile->drfo_code) ? $profile->drfo_code : '' }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput6">Наименование банка</label>
                <input name="bank_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="полное наименование банка" value="{{ isset($profile->bank_name) ? $profile->bank_name : '' }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput7">МФО</label>
                <input name="mfo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{ isset($profile->mfo) ? $profile->mfo : '' }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput8">Расчетный счет</label>
                <input name="bank_account_number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="р/с" value="{{ isset($profile->bank_account_number) ? $profile->bank_account_number : '' }}">
            </div> -->
            <div class="text-right">
                <button type="submit" class="btn btn-outline-success">Сохранить</button>
                <button type="button" onclick="window.location='{{ route('repairs') }}'" class="btn btn-outline-secondary">Отмена</button>
            </div>
        </form>
    </div>
    
@endsection