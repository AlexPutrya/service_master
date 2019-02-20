@extends('layouts.app')

@section('title', 'Ремонт')

@section('content')
    <p>Ремонт</p>
    <form method="POST" action="{{ route('repair_form') }}">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Статус</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option selected>В обработке</option>
                <option>Завершеные</option>
                <option>Не завершенные</option>
                <option>Принят</option>
                <option>Все</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Клиент</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ф.И.О.">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Номер телефона</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="телефон">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput3">Устройство</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="название и модель">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput4">Серийный номер*</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="S/N">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Комплектация</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea2">Неисправность</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-success">Сохранить</button>
        <button type="button" onclick="window.location='{{ route('repairs') }}'" class="btn btn-outline-secondary">Отмена</button>
    </form>
    
@endsection