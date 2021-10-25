<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        EDParque - Home
    </title>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="{{ URL::asset('css/home.css') }} " rel="stylesheet" />
</head>

@include("layouts.loader")

<header class="header">
    <div class="header-content responsive-wrapper">
        <div class="header-logo">
            <a href="#">
                <div>
                    <img src="" />
                </div>
                <img src="" />
            </a>
        </div>
        <div class="header-navigation">
            <nav class="header-navigation-links">
                <a href="{{url("home")}}"> Home </a>
                <a href="#"> Turma </a>
                <a href="#"> Grupos </a>
                <a href="#"> Estudantes </a>
            </nav>
            <div class="header-navigation-actions">
                <a href="{{url("settings")}}" class="icon-button">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </a>
                <a href="#" class="icon-button">
                    <i class="fa fa-bell"></i>
                </a>
                <a href="#" class="avatar">
                    <img src="{{Auth::User()->avatar}}" alt="avatar" />

                </a>
            </div>
        </div>
        <a href="#" class="button">
            <i class="ph-list-bold"></i>
            <span>Menu</span>
        </a>
    </div>
</header>
<main class="main">
    <div class="responsive-wrapper">

        <div class="main-header">

        </div>
    </div>
</main>
