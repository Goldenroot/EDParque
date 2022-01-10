<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        EDParque - Home
    </title>


    <script src="{{ URL::asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="{{ URL::asset('css/teste.css') }} " rel="stylesheet" />
</head>

@include("layouts.loader")

<body>

<div id="app">
    <header-menu :user="{{Auth::User()}}" :profile="{{Auth::User()->profile}}"></header-menu>

    <div class="content-grid">

        <div class="profile-header v2">

            <figure class="profile-header-cover liquid" style="background: url(&quot;img/cover/29.jpg&quot;) center center / cover no-repeat;">
                <img src="img/cover/29.jpg" alt="cover-29" style="display: none;">
            </figure>

            <div class="profile-header-info">
                <div class="user-short-description big">
                    <a class="user-short-description-avatar user-avatar big no-stats" href="group-timeline.html">
                        <div class="user-avatar-border">
                            <div class="hexagon-148-164" style="width: 148px; height: 164px; position: relative;"><canvas width="148" height="164" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        </div>

                        <div class="user-avatar-content">
                            <div class="hexagon-image-124-136" data-src="img/avatar/24.jpg" style="width: 124px; height: 136px; position: relative;"><canvas width="124" height="136" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        </div>
                    </a>

                    <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium no-stats" href="group-timeline.html">
                        <div class="user-avatar-border">
                            <div class="hexagon-120-130" style="width: 120px; height: 130px; position: relative;"><canvas width="120" height="130" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        </div>

                        <div class="user-avatar-content">
                            <div class="hexagon-image-100-110" data-src="img/avatar/24.jpg" style="width: 100px; height: 110px; position: relative;"><canvas width="100" height="110" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        </div>
                    </a>
                    <p class="user-short-description-title">{{$school->NomeEstabelecimento}}</p>
                    <p class="user-short-description-text">{{$school->AgrupamentoEscolas}}</p>
                </div>

                <div class="user-stats">

                    <div class="user-stat big">
                        <p class="user-stat-title">{{count($students)}}</p>
                        <p class="user-stat-text">Membros</p>
                    </div>

                    <div class="user-stat big">
                        <p class="user-stat-title">-</p>
                        <p class="user-stat-text">Publicações</p>
                    </div>

                    <div class="user-stat big">
                        <p class="user-stat-title">-</p>
                        <p class="user-stat-text">Visitas</p>
                    </div>

                </div>

            </div>
        </div>

        <div class="grid grid-3-6-3 mobile-prefer-content">
            <div class="grid-column">
                <school-info :school="{{$school}}"></school-info>
                <school-members :students="{{$students}}"></school-members>
            </div>

            <div class="grid-column">

            </div>

            <div class="grid-column">
                <school-photos :school="{{$school}}"></school-photos>
            </div>
        </div>

    </div>
</div>


</body>
