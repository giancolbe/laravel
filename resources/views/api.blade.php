<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo API & DataTable</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header" align="center"><a href="home"> HOME </a></div>
            <div class="card">
                <div class="card-header">Ejemplos de API & DataTable</div>
                <div class="card-body" align="center">
                    <a href="posts"> Posts </a>
                </div>
                <div class="card-body" align="center">
                    <a href="users"> Users </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

