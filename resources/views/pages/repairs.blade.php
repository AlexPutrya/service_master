@extends('layouts.app')

@section('title', 'Ремонты')

@section('content')
    <div class="container main">
        <a href="{{ route('new_repair') }}" class="btn btn-outline-success btn-block btn-lg"> <i class="fas fa-plus"></i> НОВЫЙ РЕМОНТ</a>
        <form id="filter" action="{{ route('repairs') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Статус</label>
                    <select name="status" class="form-control" id="exampleFormControlSelect1" 
                        onchange="event.preventDefault();
                            document.getElementById('filter').submit();">
                        <option value="В обработке" {{ $status == 'В обработке' ? 'selected' : ''}}>В обработке</option>
                        <option value="Завершеные" {{ $status == 'Завершенные' ? 'selected' : ''}}>Завершеные</option>
                        <option value="Не завершенные" {{ $status == 'Не завершенные' ? 'selected' : ''}}>Не завершенные</option>
                        <option value="Принят" {{ $status == 'Принят' ? 'selected' : ''}}>Принят</option>
                        <option value="Все" {{ $status == 'Все' ? 'selected' : ''}}>Все</option>
                    </select>
                </div>
            </form>
        @if(count($repairs) == 0)
            <div class="info-message">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Список ремонтов</h1>
                        <p class="lead">На даный момент в этой категории у вас нет ремонтов</p>
                    </div>
                </div>
            </div>
        @else
            @foreach ($repairs as $repair)
                <div class="repair-block">
                    <div class="date-block">
                        <div>
                            <i class="fas fa-tools"></i> #{{ $repair->id }}
                        </div>
                        <div>
                            {{ $repair->register_date }}
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="content-container">
                            <h5>{{ $repair->device }} </h5>
                            <h6><span class="badge badge-pill badge-success">{{ $repair->status }}</span></h6>
                        </div>
                        Описание неисправности: {{ $repair->defect }}
                        <div class="content-container">
                            <div>
                            <i class="far fa-user"></i> {{ $repair->client }}  <i class="fas fa-mobile-alt"></i> {{ $repair->phone }}
                            </div>
                            <a id="repair_edit" href="/repair/{{ $repair->id }}" ><i class="far fa-edit"></i> Редактировать</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection