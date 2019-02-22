@extends('layouts.app')

@section('title', 'Ремонты')

@section('content')

    <!-- <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Список ремонтов</h1>
            <p class="lead">На даный момент у Вас нет созданых ремонтов, здесь будет отображатся список</p>
        </div>
    </div> -->
    <div class="container">

        <a href="{{ route('repair_form') }}" class="btn btn-outline-success btn-block btn-lg"> <i class="fas fa-plus"></i> НОВЫЙ РЕМОНТ</a>
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
        </form>  

        <div class="card w-100">
            <div class="card-body">
                <div class="">
                    <a href="#" class="bl-left btn btn-outline-secondary"><i class="far fa-edit"></i></a>
                    <span class="bl-right badge badge-pill badge-success">Статус</span>
                </div>
                <div class="text-left">
                    <span class="badge badge-pill badge-success">Статус</span>
                </div>
                <h3 class="card-title">Заявка на ремонт №</h5>
                <p class="card-text"> <i class="far fa-user"></i> Имя клиента  <i class="fas fa-mobile-alt"></i> Номер телефона</p>
                <h4 class="card-text"> <i class="fas fa-tools"></i> Устройство</h2>
                <p class="card-text"> Описание неисправности: не работает</p>
            </div>
        </div>

        <div class="card w-100">
            <div class="card-body">
                <div class="text-right">
                    <a href="#" class="btn btn-outline-secondary"><i class="far fa-edit"></i></a>
                </div>
                <div class="text-left">
                    <span class="badge badge-pill badge-success">Статус</span>
                </div>
                <h3 class="card-title">Заявка на ремонт №</h5>
                <p class="card-text"> <i class="far fa-user"></i> Имя клиента  <i class="fas fa-mobile-alt"></i> Номер телефона</p>
                <h4 class="card-text"> <i class="fas fa-tools"></i> Устройство</h2>
                <p class="card-text"> Описание неисправности: не работает</p>
            </div>
        </div>
        
    </div>
    
@endsection