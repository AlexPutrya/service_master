@extends('pages/layout')

@section('title', 'Ремонты')

@section('content')
    <a href="#" class="btn btn-outline-success">Новая заявка на ремонт</a>
    <form>
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
        <button type="submit" class="btn btn-primary">Показать</button>
    </form>  
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Список ремонтов</h1>
            <p class="lead">На даный момент у Вас нет созданых ремонтов, здесь будет отображатся список</p>
        </div>
    </div>
@endsection