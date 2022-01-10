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



        <div class="section-banner">
            <img class="section-banner-icon" src="../images/works.png" alt="overview-icon">
            <p class="section-banner-title">Os Meus Trabalhos</p>
            <p class="section-banner-text">Texto</p>
        </div>


        <div class="grid grid-3-9 medium-space">

            <div class="account-hub-sidebar">
                <!-- SIDEBAR BOX -->
                <div class="sidebar-box no-padding">
                    <!-- SIDEBAR MENU -->
                    <div class="sidebar-menu round-borders">
                        <!-- SIDEBAR MENU ITEM -->
                        <div class="sidebar-menu-item">
                            <!-- SIDEBAR MENU HEADER -->
                            <div class="sidebar-menu-header accordion-trigger-linked">
                                <!-- SIDEBAR MENU HEADER ICON -->
                                <svg class="sidebar-menu-header-icon icon-profile">
                                    <use xlink:href="#svg-profile"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER ICON -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                                <div class="sidebar-menu-header-control-icon">
                                    <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                    <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                        <use xlink:href="#svg-minus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                    <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                    <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                        <use xlink:href="#svg-plus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                </div>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                                <!-- SIDEBAR MENU HEADER TITLE -->
                                <p class="sidebar-menu-header-title">My Profile</p>
                                <!-- /SIDEBAR MENU HEADER TITLE -->

                                <!-- SIDEBAR MENU HEADER TEXT -->
                                <p class="sidebar-menu-header-text">Change your avatar &amp; cover, accept friends, read messages and more!</p>
                                <!-- /SIDEBAR MENU HEADER TEXT -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER -->

                            <!-- SIDEBAR MENU BODY -->

                            <!-- /SIDEBAR MENU BODY -->
                            <div style="overflow: hidden; height: 0px; transition: all 0.3s ease-in-out 0s;"><div class="sidebar-menu-body accordion-content-linked">
                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-profile-info.html">Profile Info</a>
                                    <!-- /SIDEBAR MENU LINK -->

                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-profile-social.html">Social &amp; Stream</a>
                                    <!-- /SIDEBAR MENU LINK -->

                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-profile-notifications.html">Notifications</a>
                                    <!-- /SIDEBAR MENU LINK -->

                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-profile-messages.html">Messages</a>
                                    <!-- /SIDEBAR MENU LINK -->

                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-profile-requests.html">Friend Requests</a>
                                    <!-- /SIDEBAR MENU LINK -->
                                </div></div></div>
                        <!-- /SIDEBAR MENU ITEM -->

                        <!-- SIDEBAR MENU ITEM -->
                        <div class="sidebar-menu-item">
                            <!-- SIDEBAR MENU HEADER -->
                            <div class="sidebar-menu-header accordion-trigger-linked">
                                <!-- SIDEBAR MENU HEADER ICON -->
                                <svg class="sidebar-menu-header-icon icon-settings">
                                    <use xlink:href="#svg-settings"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER ICON -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                                <div class="sidebar-menu-header-control-icon">
                                    <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                    <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                        <use xlink:href="#svg-minus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                    <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                    <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                        <use xlink:href="#svg-plus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                </div>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                                <!-- SIDEBAR MENU HEADER TITLE -->
                                <p class="sidebar-menu-header-title">Account</p>
                                <!-- /SIDEBAR MENU HEADER TITLE -->

                                <!-- SIDEBAR MENU HEADER TEXT -->
                                <p class="sidebar-menu-header-text">Change settings, configure notifications, and review your privacy</p>
                                <!-- /SIDEBAR MENU HEADER TEXT -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER -->

                            <!-- SIDEBAR MENU BODY -->

                            <!-- /SIDEBAR MENU BODY -->
                            <div style="overflow: hidden; height: 0px; transition: all 0.3s ease-in-out 0s;"><div class="sidebar-menu-body accordion-content-linked">
                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-account-info.html">Account Info</a>
                                    <!-- /SIDEBAR MENU LINK -->

                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-account-password.html">Change Password</a>
                                    <!-- /SIDEBAR MENU LINK -->

                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-account-settings.html">General Settings</a>
                                    <!-- /SIDEBAR MENU LINK -->
                                </div></div></div>
                        <!-- /SIDEBAR MENU ITEM -->

                        <!-- SIDEBAR MENU ITEM -->
                        <div class="sidebar-menu-item selected">
                            <!-- SIDEBAR MENU HEADER -->
                            <div class="sidebar-menu-header accordion-trigger-linked">
                                <!-- SIDEBAR MENU HEADER ICON -->
                                <svg class="sidebar-menu-header-icon icon-group">
                                    <use xlink:href="#svg-group"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER ICON -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                                <div class="sidebar-menu-header-control-icon">
                                    <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                    <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                        <use xlink:href="#svg-minus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                    <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                    <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                        <use xlink:href="#svg-plus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                </div>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                                <!-- SIDEBAR MENU HEADER TITLE -->
                                <p class="sidebar-menu-header-title">Groups</p>
                                <!-- /SIDEBAR MENU HEADER TITLE -->

                                <!-- SIDEBAR MENU HEADER TEXT -->
                                <p class="sidebar-menu-header-text">Create new groups, manage the ones you created or accept invites!</p>
                                <!-- /SIDEBAR MENU HEADER TEXT -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER -->

                            <!-- SIDEBAR MENU BODY -->

                            <!-- /SIDEBAR MENU BODY -->
                            <div style="overflow: hidden; height: 93px; transition: all 0.3s ease-in-out 0s;"><div class="sidebar-menu-body accordion-content-linked accordion-open">
                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link active" href="hub-group-management.html">Manage Groups</a>
                                    <!-- /SIDEBAR MENU LINK -->

                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-group-invitations.html">Invitations</a>
                                    <!-- /SIDEBAR MENU LINK -->
                                </div></div></div>
                        <!-- /SIDEBAR MENU ITEM -->

                        <!-- SIDEBAR MENU ITEM -->
                        <div class="sidebar-menu-item">
                            <!-- SIDEBAR MENU HEADER -->
                            <div class="sidebar-menu-header accordion-trigger-linked">
                                <!-- SIDEBAR MENU HEADER ICON -->
                                <svg class="sidebar-menu-header-icon icon-store">
                                    <use xlink:href="#svg-store"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER ICON -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                                <div class="sidebar-menu-header-control-icon">
                                    <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                    <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                        <use xlink:href="#svg-minus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                    <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                    <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                        <use xlink:href="#svg-plus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                </div>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                                <!-- SIDEBAR MENU HEADER TITLE -->
                                <p class="sidebar-menu-header-title">My Store</p>
                                <!-- /SIDEBAR MENU HEADER TITLE -->

                                <!-- SIDEBAR MENU HEADER TEXT -->
                                <p class="sidebar-menu-header-text">Review your account, manage products check stats and much more!</p>
                                <!-- /SIDEBAR MENU HEADER TEXT -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER -->

                            <!-- SIDEBAR MENU BODY -->

                            <!-- /SIDEBAR MENU BODY -->
                            <div style="overflow: hidden; height: 0px; transition: all 0.3s ease-in-out 0s;"><div class="sidebar-menu-body accordion-content-linked">
                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-store-account.html">My Account</a>
                                    <!-- /SIDEBAR MENU LINK -->

                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-store-statement.html">Sales Statement</a>
                                    <!-- /SIDEBAR MENU LINK -->

                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-store-items.html">Manage Items</a>
                                    <!-- /SIDEBAR MENU LINK -->

                                    <!-- SIDEBAR MENU LINK -->
                                    <a class="sidebar-menu-link" href="hub-store-downloads.html">Downloads</a>
                                    <!-- /SIDEBAR MENU LINK -->
                                </div></div></div>
                        <!-- /SIDEBAR MENU ITEM -->
                    </div>
                    <!-- /SIDEBAR MENU -->
                </div>
                <!-- /SIDEBAR BOX -->
            </div>

            <school-work-list-widget :user="{{Auth::User()}}" :works="{{Auth::User()->work}}"></school-work-list-widget>

        </div>

    </div>

</div>
</body>
