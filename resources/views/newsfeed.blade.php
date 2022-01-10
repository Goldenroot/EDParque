<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        EDParque - NewsFeed
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

                <profile-completion-widget :user="{{Auth::User()}}"></profile-completion-widget>

                <friends-widget></friends-widget>

                <group-widget :user_id="{{Auth::User()->id}}"></group-widget>

            </div>

            <div class="grid-column">

            </div>

            <div class="grid-column">

                <div class="widget-box no-padding">

                    <div class="widget-box-controls">
                        <div class="slider-controls">
                            <div class="slider-control left">
                                <svg class="slider-control-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                            </div>

                            <div class="slider-control right">
                                <svg class="slider-control-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <p class="widget-box-title">Novembro 2021</p>

                    <div class="widget-box-content">
                        <div class="calendar small">
                            <div class="calendar-week">
                                <p class="calendar-week-day"><span class="week-day-short">Dom</span><span class="week-day-long">Sunday</span></p>

                                <p class="calendar-week-day"><span class="week-day-short">Seg</span><span class="week-day-long">Monday</span></p>

                                <p class="calendar-week-day"><span class="week-day-short">Ter</span><span class="week-day-long">Tuesday</span></p>

                                <p class="calendar-week-day"><span class="week-day-short">Qua</span><span class="week-day-long">Wednesday</span></p>

                                <p class="calendar-week-day"><span class="week-day-short">Qui</span><span class="week-day-long">Thursday</span></p>

                                <p class="calendar-week-day"><span class="week-day-short">Sex</span><span class="week-day-long">Friday</span></p>

                                <p class="calendar-week-day"><span class="week-day-short">Sab</span><span class="week-day-long">Saturday</span></p>
                            </div>

                            <div class="calendar-days">
                                <div class="calendar-day-row">
                                    <div class="calendar-day inactive">
                                        <p class="calendar-day-number">29</p>
                                    </div>

                                    <div class="calendar-day inactive">
                                        <p class="calendar-day-number">30</p>
                                    </div>

                                    <div class="calendar-day inactive">
                                        <p class="calendar-day-number">31</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">1</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">2</p>
                                        <div class="calendar-day-events">
                                            <p class="calendar-day-event primary"><span class="calendar-day-event-text">Dex's Birthday</span></p>

                                            <p class="calendar-day-event secondary"><span class="calendar-day-event-text">Sara's Big Stream</span></p>

                                            <p class="calendar-day-event secondary"><span class="calendar-day-event-text">Striker GO Release</span></p>
                                        </div>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">3</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">4</p>
                                    </div>
                                </div>

                                <div class="calendar-day-row">
                                    <div class="calendar-day">
                                        <p class="calendar-day-number">5</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">6</p>
                                    </div>

                                    <div class="calendar-day current">
                                        <p class="calendar-day-number">7</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">8</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">9</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">10</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">11</p>
                                    </div>
                                </div>

                                <div class="calendar-day-row">
                                    <div class="calendar-day">
                                        <p class="calendar-day-number">12</p>
                                    </div>

                                    <div class="calendar-day active">
                                        <p class="calendar-day-number">13</p>
                                        <div class="calendar-day-events">
                                            <p class="calendar-day-event secondary"><span class="calendar-day-event-text">Breakfast with Neko</span></p>
                                            <p class="calendar-day-event primary"><span class="calendar-day-event-text">Streaming Party</span></p>
                                        </div>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">14</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">15</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">16</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">17</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">18</p>
                                    </div>
                                </div>

                                <div class="calendar-day-row">
                                    <div class="calendar-day">
                                        <p class="calendar-day-number">19</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">20</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">21</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">22</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">23</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">24</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">25</p>
                                    </div>
                                </div>

                                <div class="calendar-day-row">
                                    <div class="calendar-day">
                                        <p class="calendar-day-number">26</p>

                                        <div class="calendar-day-events">
                                            <p class="calendar-day-event primary"><span class="calendar-day-event-text">CosWorld 2019 After...</span></p>
                                        </div>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">27</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">28</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">29</p>
                                    </div>

                                    <div class="calendar-day">
                                        <p class="calendar-day-number">30</p>
                                    </div>

                                    <div class="calendar-day inactive">
                                        <p class="calendar-day-number">1</p>
                                    </div>

                                    <div class="calendar-day inactive">
                                        <p class="calendar-day-number">2</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="calendar-events-preview small">
                            <p class="calendar-events-preview-title">Monday 13th</p>

                            <div class="calendar-event-preview-list">
                                <div class="calendar-event-preview small secondary">
                                    <div class="calendar-event-preview-start-time">
                                        <p class="calendar-event-preview-start-time-title">8:30</p>
                                        <p class="calendar-event-preview-start-time-text">AM</p>
                                    </div>

                                    <div class="calendar-event-preview-info">
                                        <p class="calendar-event-preview-title">Breakfast with Neko</p>
                                        <p class="calendar-event-preview-text">Hi Neko! I'm creating this event to invite you to have breakfast before work. Meet me at Coffebucks.</p>
                                    </div>
                                </div>

                                <div class="calendar-event-preview small primary">
                                    <div class="calendar-event-preview-start-time">
                                        <p class="calendar-event-preview-start-time-title">10:00</p>
                                        <p class="calendar-event-preview-start-time-text">PM</p>
                                    </div>

                                    <div class="calendar-event-preview-info">
                                        <p class="calendar-event-preview-title">Streaming Party</p>
                                        <p class="calendar-event-preview-text">The biggest party for Twitch streamers! Come and join us at Shenron Arena.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
