<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
    <title>@yield('title')</title>
</head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{ route('main') }}">Service-master</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ request()->is('/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('main') }}"> Главная <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ request()->is('repairs*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('repairs') }}">Ремонты</a>
                        </li>
                        <li class="nav-item {{ request()->is('sending*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('sending') }}">Отправки поставщикам</a>
                        </li>
                        <li class="nav-item {{ request()->is('partners*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('partners') }}">Партнеры</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            @yield('content')
        </div>
    </body>
</html>