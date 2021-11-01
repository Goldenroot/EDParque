<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        EDParque - Estudantes
    </title>

    <!-- JQuery  -->
    <script src="{{ URL::asset('js/jquery-3.6.0.js') }}" defer></script>

    <script src="{{ URL::asset('js/app.js') }}" defer></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ URL::asset('js/popper.min.js') }}" defer></script>

    <link href="{{ URL::asset('css/teste.css') }} " rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

</head>

@include("layouts.loader")

<div id="app">

    <left-side-menu></left-side-menu>
    <header-menu></header-menu>
    <right-side-menu></right-side-menu>

<div class="content-grid" style="transform: translate(10%, 0px); transition: transform 0.4s ease-in-out 0s;">
    <div class="section-banner" style="background-image: -webkit-linear-gradient(0deg, #03a9f4 0%, #4fc3f7 100%);">
        <!-- SECTION BANNER ICON -->
        <img class="section-banner-icon" src="img/banner/members-icon.png" alt="members-icon">
        <!-- /SECTION BANNER ICON -->

        <!-- SECTION BANNER TITLE -->
        <p class="section-banner-title">Estudantes [{{count($students)}}]</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">Procura todos os estudantes!</p>
        <!-- /SECTION BANNER TEXT -->
    </div>

    <div class="grid grid-3-3-3 centered" id="app">

        @foreach($students as $student)
            <student-card :student_id="{{$student->id}}"></student-card>
        @endforeach

    </div>

</div>
</div>
