<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Evento App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        @yield('content')
        <!--Todas as views que extenderem desta colocaram seu conteudo nesta area-->
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
