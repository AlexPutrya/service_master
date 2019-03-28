@extends('layouts.app')

@section('title', 'Ремонт')

@section('content')
    <div class="container main">
        <h2>{{ isset($repair->id) ? 'Ремонт №'.$repair->id : 'Новый ремонт' }}</h2>
        <form method="POST" action="{{ isset($repair->id) ? route('edit_repair_form', ['id' => $repair->id]) : route('new_repair') }}" autocomplete="off">
        @csrf
            <p> Дата регистрации: {{ isset($repair->register_date) ? $repair->register_date : date('d.m.Y') }} </p>
            <p> Дата окончания: {{ isset($repair->end_date) ? $repair->end_date : '*дата окончания будет установлена при выборе статуса "Завершен"' }} </p>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Статус</label>
                <select name="status" class="form-control" id="exampleFormControlSelect1">
                    @if(isset($repair->status))
                        <option value="В обработке" {{ $repair->status == 'В обработке' ? 'selected' : ''}}>В обработке</option>
                        <option value="Завершенные" {{ $repair->status == 'Завершенные' ? 'selected' : ''}}>Завершенные</option>
                        <option value="Не завершенные" {{ $repair->status == 'Не завершенные' ? 'selected' : ''}}>Не завершенные</option>
                        <option value="Принят" {{ $repair->status == 'Принят' ? 'selected' : ''}}>Принят</option>
                        <option value="Все" {{ $repair->status == 'Все' ? 'selected' : ''}}>Все</option>
                    @else
                        <option value="В обработке" selected>В обработке</option>
                        <option value="Завершенные">Завершенные</option>
                        <option value="Не завершенные">Не завершенные</option>
                        <option value="Принят">Принят</option>
                        <option value="Все">Все</option>

                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Клиент</label>
                <input name="client" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ф.И.О." value="{{ isset($repair->client) ? $repair->client : '' }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Номер телефона</label>
                <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="телефон" value="{{ isset($repair->phone) ? $repair->phone : '' }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Устройство</label>
                <input name="device" type="text" class="form-control" id="exampleFormControlInput1" placeholder="название и модель" value="{{ isset($repair->device) ? $repair->device : '' }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput4">Серийный номер*</label>
                <input name="serial" type="text" class="form-control" id="exampleFormControlInput1" placeholder="S/N" value="{{ isset($repair->serial) ? $repair->serial : '' }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Комплектация</label>
                <textarea name="complect" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ isset($repair->complect) ? $repair->complect : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Неисправность</label>
                <textarea name="defect" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ isset($repair->defect) ? $repair->defect : '' }}</textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-outline-success">Сохранить</button>
                <button type="button" onclick="window.location='{{ route('repairs') }}'" class="btn btn-outline-secondary">Отмена</button>
            </div>
        </form>
    </div>
    
@endsection