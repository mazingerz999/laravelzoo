<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/assets/css/estilo.css')}}">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->

    
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js')}}"  crossorigin="anonymous"></script>
    
    
    <title>@yield('titulo')</title>
</head>
<body>
@include('layouts.partials.navbar')
<div class="container-fluid">
    @yield('contenido')
</div>
</body>

</html>
