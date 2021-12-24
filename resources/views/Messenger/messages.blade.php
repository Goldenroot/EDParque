<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        EDParque - Mensagens
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

<div class="content-grid">

    <div class="account-hub-content">
        <div class="section-header">
            <div class="section-header-info">
                <h2 class="section-title">As Minhas Mensagens</h2>
            </div>
        </div>

        <div>
            <chat-app :user="{{Auth::User()}}" class="chat-widget-wrap"></chat-app>
        </div>

    </div>
</div>
</div>
</body>
</html>

<style>
    [data-simplebar] {
        position: relative;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-content: flex-start;
        align-items: flex-start;
    }

    .simplebar-wrapper {
        overflow: hidden;
        width: inherit;
        height: inherit;
        max-width: inherit;
        max-height: inherit;
    }

    .simplebar-mask {
        direction: inherit;
        position: absolute;
        overflow: hidden;
        padding: 0;
        margin: 0;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        width: auto !important;
        height: auto !important;
        z-index: 0;
    }

    .simplebar-offset {
        direction: inherit !important;
        box-sizing: inherit !important;
        resize: none !important;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        padding: 0;
        margin: 0;
        -webkit-overflow-scrolling: touch;
    }

    .simplebar-content-wrapper {
        direction: inherit;
        box-sizing: border-box !important;
        position: relative;
        display: block;
        height: 100%; /* Required for horizontal native scrollbar to not appear if parent is taller than natural height */
        width: auto;
        /* visibility: visible; */
        max-width: 100%; /* Not required for horizontal scroll to trigger */
        max-height: 100%; /* Needed for vertical scroll to trigger */
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .simplebar-content-wrapper::-webkit-scrollbar,
    .simplebar-hide-scrollbar::-webkit-scrollbar {
        width: 0;
        height: 0;
    }

    .simplebar-content:before,
    .simplebar-content:after {
        content: ' ';
        display: table;
    }

    .simplebar-placeholder {
        max-height: 100%;
        max-width: 100%;
        width: 100%;
        pointer-events: none;
    }

    .simplebar-height-auto-observer-wrapper {
        box-sizing: inherit !important;
        height: 100%;
        width: 100%;
        max-width: 1px;
        position: relative;
        float: left;
        max-height: 1px;
        overflow: hidden;
        z-index: -1;
        padding: 0;
        margin: 0;
        pointer-events: none;
        flex-grow: inherit;
        flex-shrink: 0;
        flex-basis: 0;
    }

    .simplebar-height-auto-observer {
        box-sizing: inherit;
        display: block;
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        height: 1000%;
        width: 1000%;
        min-height: 1px;
        min-width: 1px;
        overflow: hidden;
        pointer-events: none;
        z-index: -1;
    }

    .simplebar-track {
        z-index: 1;
        position: absolute;
        right: 0;
        bottom: 0;
        pointer-events: none;
        overflow: hidden;
    }

    [data-simplebar].simplebar-dragging .simplebar-content {
        pointer-events: none;
        user-select: none;
        -webkit-user-select: none;
    }

    [data-simplebar].simplebar-dragging .simplebar-track {
        pointer-events: all;
    }

    .simplebar-scrollbar {
        position: absolute;
        right: 2px;
        width: 4px;
        min-height: 10px;
    }

    .simplebar-scrollbar:before {
        position: absolute;
        content: '';
        background: #adafca;
        border-radius: 7px;
        left: 0;
        right: 0;
        opacity: 0;
        transition: opacity 0.2s linear;
    }

    .simplebar-scrollbar.simplebar-visible:before {
        /* When hovered, remove all transitions from drag handle */
        opacity: .4;
        transition: opacity 0s linear;
    }

    .simplebar-track.simplebar-vertical {
        top: 0;
        width: 11px;
    }

    .simplebar-track.simplebar-vertical .simplebar-scrollbar:before {
        top: 2px;
        bottom: 2px;
    }

    .simplebar-track.simplebar-horizontal {
        left: 0;
        height: 11px;
    }

    .simplebar-track.simplebar-horizontal .simplebar-scrollbar:before {
        height: 100%;
        left: 2px;
        right: 2px;
    }

    .simplebar-track.simplebar-horizontal .simplebar-scrollbar {
        right: auto;
        left: 0;
        top: 2px;
        height: 7px;
        min-height: 0;
        min-width: 10px;
        width: auto;
    }

    /* Rtl support */
    [data-simplebar-direction='rtl'] .simplebar-track.simplebar-vertical {
        right: auto;
        left: 0;
    }

    .hs-dummy-scrollbar-size {
        direction: rtl;
        position: fixed;
        opacity: 0;
        visibility: hidden;
        height: 500px;
        width: 500px;
        overflow-y: hidden;
        overflow-x: scroll;
    }

    .simplebar-hide-scrollbar {
        position: fixed;
        left: 0;
        visibility: hidden;
        overflow-y: scroll;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    /*--------------------
        CUSTOM STYLES
    --------------------*/
    [data-simplebar].navigation-widget {
        position: fixed;
    }

    [data-simplebar].navigation-widget .simplebar-scrollbar {
        right: 4px;
    }


</style>

