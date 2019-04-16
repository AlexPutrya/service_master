@extends('layouts.app')

@section('title', 'Ремонты')

@section('content')
    <div class="container main">
        <a href="{{ route('new_repair') }}" class="btn btn-outline-success btn-block btn-lg"> <i class="fas fa-plus"></i> НОВЫЙ РЕМОНТ</a>
        <form id="filter" action="{{ route('repairs_filter') }}" method="POST" autocomplete="off" onSubmit="return false;">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1"><i class="fas fa-filter"></i> Фильтр</label>
                    <select name="status" class="form-control" id="exampleFormControlSelect1" 
                        onchange="event.preventDefault();
                            document.getElementById('filter').submit();">
                        @foreach($status_list as $filter_status => $status_name)
                            <option value="{{ $filter_status }}" {{ $status ==  $filter_status  ? 'selected' : ''}}>{{ $status_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input name="search" type="text" class="form-control" placeholder="Что искать?"
                    onkeypress="
                        if(event.witch == 13 || event.keyCode == 13){
                            var btn = document.getElementById('btn_search');
                            btn.click();
                        }
                    ">
                    <div class="input-group-append">
                        <select name="search_filter" class="form-control" id="exampleFormControlSelect1">
                            @foreach($search as $search_val => $serach_name)
                                <option value="{{ $search_val }}">{{$serach_name}}</option>
                            @endforeach
                        </select>
                        <button id="btn_search" class="btn btn-outline-success" type="button" 
                        onclick="
                            event.preventDefault();
                            var form = document.getElementById('filter');
                            form.action = '{{ route('repairs_search') }}';
                            form.submit();"
                        ><i class="fas fa-search"></i></button>
                    </div>
                </div>
        </form>
        @if(isset($request_word))
            <div>
                <p>  Результаты поиска по запросу "{{ $search_filter}}: {{ $request_word }}"</p>
            </div>
        @endif
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
                            <i class="fas fa-tools"></i> {{ $repair->id }}
                        </div>
                        <div>
                            {{ $repair->register_date }}
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="content-container">
                            <h5>{{ $repair->device }} </h5>
                            <h6><span style="background-color: {{ $status_color[$repair->status] }};" class="badge badge-pill badge-success">{{ $status_list[$repair->status] }}</span></h6>
                        </div>
                        Описание неисправности: {{ $repair->defect }}
                        <div class="content-container">
                            <div>
                            <i class="far fa-user"></i> {{ $repair->client }}  <i class="fas fa-mobile-alt"></i> {{ $repair->phone }}
                            </div>
                            
                        </div>
                        <div>
                        <a id="repair_edit" href="/act_of_repair/{{ $repair->id }}" ><i class="fas fa-print"></i> Акт приема-передачи</a>
                            <a id="repair_edit" href="/repair/{{ $repair->id }}" ><i class="far fa-edit"></i> Редактировать</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection