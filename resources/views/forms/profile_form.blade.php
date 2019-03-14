@extends('layouts.app')

@section('title', 'Профиль пользователя')

@section('content')
    <div class="container main">
        <h2>Профиль пользователя</h2>
        <form method="POST" action="{{ route('profile') }}">
        @csrf
            <h3>Общие данные</h3>
            <p>*будут использованы для формирования печатной формы "Акт приема передачи в ремонт"</p>
            <div class="form-group">
                <label for="exampleFormControlInput1">Название организации</label>
                <input name="org_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Адрес</label>
                <input name="adress" type="text" class="form-control" id="exampleFormControlInput1" placeholder="полный адрес">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Телефон</label>
                <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput4">Електронная почта</label>
                <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="email">
            </div>
            <h3>Банковские реквизиты и реквизиты предпринимателя</h3>
            <p>*будут использованы для формирования печатной формы "Акт выполненых работ"</p>
            <div class="form-group">
                <label for="exampleFormControlInput5">Код ДРФО</label>
                <input name="drfo_code" type="text" class="form-control" id="exampleFormControlInput1" placeholder="десятизначный номер из государственного реестра физ. лиц">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput6">Наименование банка</label>
                <input name="bank_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="полное наименование банка">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput7">МФО</label>
                <input name="mfo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput8">Расчетный счет</label>
                <input name="bank_account_number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="р/с">
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-outline-success">Сохранить</button>
                <button type="button" onclick="window.location='{{ route('repairs') }}'" class="btn btn-outline-secondary">Отмена</button>
            </div>
        </form>
    </div>
    
@endsection