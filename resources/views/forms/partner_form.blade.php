@extends('layouts.app')

@section('title', 'Партнер(организация)')

@section('content')
    <div class="content">
        <p>Партнер</p>
        <form method="POST" action="{{ route('partner_form') }}">
        @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Название организации(фирма)</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Название">
            </div>
            <button type="submit" class="btn btn-outline-success">Сохранить</button>
            <button type="button" onclick="window.location='{{ route('partners') }}'" class="btn btn-outline-secondary">Отмена</button>
        </form>
    </div>
@endsection