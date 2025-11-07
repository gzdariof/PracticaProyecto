<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css
" rel="stylesheet">@yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <a href="{{url('/')}}">Inicio</a>
        <a href="{{url('categorias')}}">Categorías</a>
        @yield('content')
    </div>
    <script src="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js
"></script>@yield('js')
</body>
</html>
