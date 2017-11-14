<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Css & JS -->
        <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" >
        <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
        @yield('css')

        <script src="{!! asset('js/jquery-1.10.2.js') !!}"></script>
        <script src="{!! asset('js/popper.js') !!}"></script>
        <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
        @yield('js')
        <script src="{!! asset('js/script.js') !!}"></script>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
