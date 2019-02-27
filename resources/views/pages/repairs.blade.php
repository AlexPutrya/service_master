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

        <a href="{{ route('new_repair') }}" class="btn btn-outline-success btn-block btn-lg"> <i class="fas fa-plus"></i> НОВЫЙ РЕМОНТ</a>
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
        @foreach ($repairs as $repair)

        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne1">
                    {{ $repair->register_date }}
                    <h6><span class="badge badge-pill badge-success">{{ $repair->status }}</span></h6>
                    <h4 class="card-text"> <i class="fas fa-tools"></i> {{ $repair->device }} </h4>
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{ $repair->id }}" aria-expanded="true" aria-controls="collapseOne{{ $repair->id }}">
                        <h5 class="mb-0">
                            Заявка на ремонт № {{ $repair->id }} <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                    <a href="#" class="bl-left btn btn-outline-secondary"><i class="far fa-edit"></i></a>
                </div>
                <div id="collapseOne{{ $repair->id }}" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                    <div class="card-body">
                        <p class="card-text"> <i class="far fa-user"></i> {{ $repair->client }}  <i class="fas fa-mobile-alt"></i> {{ $repair->phone }}</p>
                        <p class="card-text"> Описание неисправности: {{ $repair->defect }}</p>
                    </div>
                </div>
            </div>
        </div>



    
            <!-- <div class="card w-100">
                <div class="card-header">
                    <h5><span class="badge badge-pill badge-success">{{ $repair->status }}</span></h5>
                    <h3 class="card-title">Заявка на ремонт № {{ $repair->id }} </h5>
                </div>
                {{ $repair->register_date }}
                <div class="card-body">
                    <div class="text-left">
                        <a href="#" class="bl-left btn btn-outline-secondary"><i class="far fa-edit"></i></a>
                    </div>
                    
                    <p class="card-text"> <i class="far fa-user"></i> {{ $repair->client }}  <i class="fas fa-mobile-alt"></i> {{ $repair->phone }}</p>
                    <h4 class="card-text"> <i class="fas fa-tools"></i> {{ $repair->device }} </h2>
                    <p class="card-text"> Описание неисправности: {{ $repair->defect }}</p>
                </div>
            </div> -->
        @endforeach
    </div>
@endsection