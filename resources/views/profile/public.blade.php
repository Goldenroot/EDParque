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
    <header-menu></header-menu>
    <left-side-menu></left-side-menu>
    <right-side-menu></right-side-menu>

    <div class="content-grid">

        <div class="profile-header">
            <!-- PROFILE HEADER COVER -->
            <figure class="profile-header-cover liquid" style="background: url(&quot;img/cover/01.jpg&quot;) center center / cover no-repeat;">
                <img src="img/cover/01.jpg" alt="cover-01" style="display: none;">
            </figure>
            <!-- /PROFILE HEADER COVER -->

            <!-- PROFILE HEADER INFO -->
            <div class="profile-header-info">
                <!-- USER SHORT DESCRIPTION -->
                <div class="user-short-description big">
                    <!-- USER SHORT DESCRIPTION AVATAR -->
                    <a class="user-short-description-avatar user-avatar big" href="profile-timeline.html">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-148-164" style="width: 148px; height: 164px; position: relative;"><canvas width="148" height="164" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-100-110" data-src="img/avatar/01.jpg" style="width: 100px; height: 110px; position: relative;"><canvas width="100" height="110" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->

                        <!-- USER AVATAR PROGRESS -->
                        <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-124-136" style="width: 124px; height: 136px; position: relative;"><canvas width="124" height="136" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS -->

                        <!-- USER AVATAR PROGRESS BORDER -->
                        <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-124-136" style="width: 124px; height: 136px; position: relative;"><canvas width="124" height="136" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS BORDER -->

                        <div class="user-avatar-badge">
                            <div class="user-avatar-badge-border">
                                <div class="hexagon-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            </div>

                            <div class="user-avatar-badge-content">
                                <div class="hexagon-dark-32-34" style="width: 32px; height: 34px; position: relative;"><canvas width="32" height="34" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            </div>

                            <p class="user-avatar-badge-text">24</p>
                        </div>
                    </a>

                    <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium" href="profile-timeline.html">
                        <div class="user-avatar-border">
                            <div class="hexagon-120-132" style="width: 120px; height: 132px; position: relative;"><canvas width="120" height="132" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        </div>

                        <div class="user-avatar-content">
                            <div class="hexagon-image-82-90" data-src="img/avatar/01.jpg" style="width: 82px; height: 90px; position: relative;"><canvas width="82" height="90" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        </div>

                        <div class="user-avatar-progress">
                            <div class="hexagon-progress-100-110" style="width: 100px; height: 110px; position: relative;"><canvas width="100" height="110" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        </div>

                        <div class="user-avatar-progress-border">
                            <div class="hexagon-border-100-110" style="width: 100px; height: 110px; position: relative;"><canvas width="100" height="110" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        </div>

                        <div class="user-avatar-badge">
                            <div class="user-avatar-badge-border">
                                <div class="hexagon-32-36" style="width: 32px; height: 36px; position: relative;"><canvas width="32" height="36" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            </div>

                            <div class="user-avatar-badge-content">
                                <div class="hexagon-dark-26-28" style="width: 26px; height: 28px; position: relative;"><canvas width="26" height="28" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            </div>

                            <p class="user-avatar-badge-text">24</p>
                        </div>
                    </a>

                    <p class="user-short-description-title"><a href="profile-timeline.html">{{Auth::User()->name}}</a></p>

                    <p class="user-short-description-text"><a href="#"><span>@</span>{{Auth::User()->slug}}</a></p>
                </div>

                <div class="user-stats">
                    <div class="user-stat big">
                        <p class="user-stat-title">19.2</p>

                        <p class="user-stat-text">Média</p>
                    </div>

                    <div class="user-stat big">
                        <p class="user-stat-title">82</p>

                        <p class="user-stat-text">Amigos</p>
                    </div>

                    <div class="user-stat big">
                        <p class="user-stat-title">1.7k</p>

                        <p class="user-stat-text">Visitas</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-3-6-3 mobile-prefer-content">

            <div class="grid-column">

                <about-me-widget user_id="{{Auth::User()->id}}"></about-me-widget>

                <friends-widget user_id="{{Auth::User()->id}}"></friends-widget>

            </div>

        </div>

    </div>
</div>

</body>
