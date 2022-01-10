<template>

    <nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar="init" style="height: 889px;"><div class="simplebar-wrapper" style="margin: 0px 0px -40px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: scroll;"><div class="simplebar-content" style="padding: 0px 0px 40px;">
        <figure class="navigation-widget-cover liquid" id="navigation-widget-banner" style="height: 100px;" v-bind:style="{ background: 'url(' + this.profile.banner + ') center center / cover no-repeat' }"></figure>

        <div style="text-align: center !important;">
            <img id="navigation-widget-user-image" class="user-avatar-settings" v-bind:src="this.user.avatar" style="height: 100px; width: 100px; margin-top: -25%">
        </div>

        <div class="user-short-description" style="padding-top: 25px;">
            <p class="user-short-description-title">{{this.user.name}}</p>

            <p class="user-short-description-text"><span>@</span>{{this.user.slug}}</p>
        </div>

        <div class="user-stats">
            <div class="user-stat">
                <p class="user-stat-title">0</p>
                <p class="user-stat-text">Publicações</p>
            </div>

            <div class="user-stat">
                <p class="user-stat-title">0</p>
                <p class="user-stat-text">Amigos</p>
            </div>

            <div class="user-stat">
                <p class="user-stat-title">-</p>
                <p class="user-stat-text">Visitas</p>
            </div>
        </div>

        <ul class="menu">
            <li class="menu-item">
                <a class="menu-item-link" href="/home">
                    <i class="fas fa-home" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 500; transition: all .2s ease-in-out; color: #adafca;"></i>
                    Home
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link" href="/overview">
                    <i class="fal fa-signal-alt-3" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                    Overview
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link" href="/students">
                    <i class="fas fa-user-plus" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                    Ver Estudantes
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link" href="/friends">
                    <i class="fas fa-users" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                    Os meus amigos
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="/pending">
                    <i class="fas fa-user-clock" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                    Amigos Pendentes
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link" href="/messenger">
                    <i class="far fa-comment-alt" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                    Mensagens
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link" href="/notifications">
                    <i class="fal fa-bell" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                    Notificações
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link" href="/settings">
                    <i class="fas fa-cog" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                    Definições
                </a>
            </li>
        </ul>
    </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1019px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 775px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div>
    </nav>

</template>

<script>

export default {
    name: "LeftExpandedSideMenu",

    props: {
        user: {
            type: Object,
            required: true
        },

        profile:{
            type: Object,
            required: true,
        }
    },
}
</script>

<style scoped>

.user-avatar-settings{
    cursor: pointer !important;
    height: 100px;
    width: 100px;
    margin-top: -25%;
    margin-top: -7% !important;
    border-bottom-right-radius: 20px !important;
    border-bottom-left-radius: 20px !important;
    border: 5px solid white !important;
    border-top-right-radius: 5px !important;
    border-top-left-radius: 5px !important;
    border: 5px solid white !important;
    margin-top: -25% !important;
}

</style>
