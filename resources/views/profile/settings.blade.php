<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        EDParque - Definições
    </title>

    <!-- JQuery  -->
    <script src="{{ URL::asset('js/jquery-3.6.0.js') }}" defer></script>

    <script src="{{ URL::asset('js/app.js') }}" defer></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ URL::asset('js/popper.min.js') }}" defer></script>

    <link href="{{ URL::asset('css/teste.css') }} " rel="stylesheet" />
</head>

@include("layouts.loader")

<body>

<div id="app">

    <header-menu :user="{{Auth::User()}}" :profile="{{Auth::User()->profile}}"></header-menu>


    <main class="main">
        <div class="responsive-wrapper">
            <settings-options user_id="{{Auth::User()->id}}"></settings-options>
        </div>
    </main>

</div>

</body>
</html>
