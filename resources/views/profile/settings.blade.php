<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        EDParque - Definições
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
                    <img src=""/>
                </div>
                <img src=""/>
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
            <h1>Definições</h1>
            <div class="search">
                <input type="text" placeholder="Procurar" />
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <div class="horizontal-tabs">
            <a href="#" class="active">Os Meus Detalhes</a>
            <a href="#">Perfil</a>
            <a href="#">Notificações</a>
            <a href="#">Widgets</a>
            <a href="#">Segurança e Início de Sessão</a>
        </div>
        <div class="content-header">
            <div class="content-header-intro">
                <h2>Os Meus Detalhes</h2>
                <p>Edita os detalhes da tua conta.</p>
            </div>
            <div class="content-header-actions">

            </div>
        </div>
        <div class="content">
            <div class="content-panel">
                <div class="vertical-tabs">
                    <a href="#" class="active">Ver todos</a>
                    <a href="#">Geral</a>
                    <a href="#">Privacidade</a>
                </div>
            </div>
            <div class="content-main">
                <div class="card-grid">
                    <article class="card">
                        <div class="card-header" style="align-items: center !important;">
                            <div>
                                <span><img src="{{ URL::asset('images/weather_icon.png') }}"/></span>
                                <h3>Weather</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Consulta a temperatura da tua região.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">Ver Informações</a>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>
</main>
