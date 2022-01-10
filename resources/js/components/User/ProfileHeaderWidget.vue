<template>

    <div>
        <div class="profile-header">

            <figure class="profile-header-cover liquid" id="profile-banner" style="cursor: pointer; margin: 0px;" v-bind:style="{ background: 'url(' + user.profile.banner + ') center center / cover no-repeat' }"></figure>

            <div class="text-center" id="profile-avatar">
                <img id="user-image" class="user-avatar-settings" src="" style="">
            </div>

            <div class="profile-header-info">

                <div class="user-short-description big">
                    <a class="user-short-description-avatar user-avatar big" href="#"></a>
                    <p class="user-short-description-title"><a href="#"></a>{{user.name}}</p>
                    <p class="user-short-description-text"><a href="#"><span>@</span></a>{{user.slug}}</p>
                </div>

                <div class="user-stats">
                    <div class="user-stat big">
                        <p class="user-stat-title">{{user_friends.length}}</p>
                        <p class="user-stat-text">Amigos</p>
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

        <nav class="section-navigation">
            <div class="tns-outer" id="section-navigation-slider-ow"><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">1 to 7</span>  of 11</div><div id="section-navigation-slider-mw" class="tns-ovh"><div class="tns-inner" id="section-navigation-slider-iw"><div id="section-navigation-slider" class="section-menu  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" style="transform: translate3d(0px, 0px, 0px);">
                <a class="section-menu-item tns-item tns-slide-active" href="/home" id="section-navigation-slider-item0">
                        <i class="section-menu-item-icon icon-profile fas fa-home"></i>
                    <p class="section-menu-item-text">Home</p>
                </a>

                <a class="section-menu-item tns-item tns-slide-active" href="/overview" id="section-navigation-slider-item1">
                    <i class="section-menu-item-icon icon-profile fas fa-signal-alt"></i>
                    <p class="section-menu-item-text">Overview</p>
                </a>

                <a class="section-menu-item tns-item tns-slide-active" href="/friends" id="section-navigation-slider-item2">
                    <i class="section-menu-item-icon icon-profile fas fa-users"></i>
                    <p class="section-menu-item-text">Amigos</p>
                </a>

                <a class="section-menu-item tns-item tns-slide-active" href="/schools" id="section-navigation-slider-item3">
                    <i class="section-menu-item-icon icon-profile fas fa-school"></i>
                    <p class="section-menu-item-text">Escolas</p>
                </a>

                <a class="section-menu-item tns-item tns-slide-active" href="/works" id="section-navigation-slider-item4">
                    <i class="section-menu-item-icon icon-profile fas fa-suitcase"></i>
                    <p class="section-menu-item-text">Trabalhos</p>
                </a>

                <a class="section-menu-item tns-item tns-slide-active" href="/photos" id="section-navigation-slider-item5">
                    <i class="section-menu-item-icon icon-profile fas fa-images"></i>
                    <p class="section-menu-item-text">Fotos</p>
                </a>

                <a class="section-menu-item tns-item tns-slide-active" href="/videos" id="section-navigation-slider-item6">
                    <i class="section-menu-item-icon icon-profile fas fa-video"></i>
                    <p class="section-menu-item-text">Videos</p>
                </a>

                <a class="section-menu-item tns-item" href="/messenger" id="section-navigation-slider-item9" aria-hidden="true" tabindex="-1">
                    <i class="section-menu-item-icon icon-profile fas fa-comment-alt"></i>
                    <p class="section-menu-item-text">Mensagens</p>
                </a>

                <a class="section-menu-item tns-item" href="/notifications" id="section-navigation-slider-item10" aria-hidden="true" tabindex="-1">
                    <i class="section-menu-item-icon icon-profile fas fa-bell"></i>
                    <p class="section-menu-item-text">Notificações</p>
                </a>
            </div>
            </div>
            </div>
            </div>

            <div id="section-navigation-slider-controls" class="slider-controls" aria-label="Carousel Navigation" tabindex="0">
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "ProfileHeaderWidget",

    props:{
        user:{
            type: Object,
            required: true,
        }
    },

    data(){
        return{
            user_friends: [],
        }
    },

    mounted() {
        axios.get('/contacts')
            .then((response) => {
                this.user_friends = response.data;
            });
    }

}
</script>

<style scoped>

</style>
