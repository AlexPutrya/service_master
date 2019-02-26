@extends('layouts.app')

@section('title', 'Ремонт')

@section('content')
    <div class="container">
        <h2>Ремонт №</h2>
        <form method="POST" action="{{ route('new_repair') }}">
        @csrf
            <div class="form-group">
                <label for="disabledTextInput">Дата регистрации</label>
                <input type="date" id="start" name="register_date" value="{{ date('d.m.Y') }}">
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Дата Окончания</label>
                <input type="date" id="start" name="end_date" value="{{ date('d.m.Y') }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Статус</label>
                <select name="status" class="form-control" id="exampleFormControlSelect1">
                    <option value="В обработке" selected>В обработке</option>
                    <option value="Завершеные" >Завершеные</option>
                    <option value="Не завершенные" >Не завершенные</option>
                    <option value="Принят" >Принят</option>
                    <option value="Все" >Все</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Клиент</label>
                <input name="client" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ф.И.О.">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Номер телефона</label>
                <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="телефон">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Устройство</label>
                <input name="device" type="text" class="form-control" id="exampleFormControlInput1" placeholder="название и модель">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput4">Серийный номер*</label>
                <input name="serial" type="text" class="form-control" id="exampleFormControlInput1" placeholder="S/N">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Комплектация</label>
                <textarea name="complect" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Неисправность</label>
                <textarea name="defect" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-outline-success">Сохранить</button>
                <button type="button" onclick="window.location='{{ route('repairs') }}'" class="btn btn-outline-secondary">Отмена</button>
            </div>
        </form>
    </div>
    
@endsection