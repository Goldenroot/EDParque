<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        EDParque - Home
    </title>


    <script src="{{ URL::asset('js/app.js') }}" defer></script>

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

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

    <div class="content-grid" style="transform: translate(10%, 0px); transition: transform 0.4s ease-in-out 0s;">
        <div class="grid grid-3-6-3 mobile-prefer-content">

            <div class="grid-column">

                <about-me-widget user_id="{{Auth::User()->id}}"></about-me-widget>

                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap" style="position: relative;">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown" style="position: absolute; z-index: 9999; top: 30px; right: 9px; opacity: 0; visibility: hidden; transform: translate(0px, -20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>

                    <p class="widget-box-title">Trabalhos em Falta <span class="highlighted">[]</span></p>

                    <div class="widget-box-content">
                        <div class="post-peek-list">
                            <div class="post-peek">
                                <a class="post-peek-image" href="profile-post.html">
                                    <figure class="picture small round liquid" style="background: url(&quot;img/cover/19.jpg&quot;) center center / cover no-repeat;">
                                        <img src="img/cover/19.jpg" alt="cover-19" style="display: none;">
                                    </figure>
                                </a>

                                <p class="post-peek-title"><a href="">Redes </a></p>

                                <p class="post-peek-text">Adicionado há 6 dias</p>
                            </div>
                        </div>
                        <a class="widget-box-button button small secondary" href="">Ver Todos</a>
                    </div>
                </div>

                <friends-widget></friends-widget>

            </div>

            <div class="grid-column">

            </div>

            <div class="grid-column">

                <calendar-widget></calendar-widget>
                <weather-app></weather-app>

                <profile-completion-widget></profile-completion-widget>

            </div>

        </div>
    </div>
</div>

</body>
