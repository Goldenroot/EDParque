<template>
    <div class="slider-line small">

        <div class="tns-outer" id="user-stats-slider-ow"><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">1 to 7</span>  of 8</div><div id="user-stats-slider-mw" class="tns-ovh"><div class="tns-inner" id="user-stats-slider-iw"><div id="user-stats-slider" class="slider-slides with-separator  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" style="transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
            <div class="slider-slide tns-item tns-slide-active" id="user-stats-slider-item0">
                <div class="user-stat big">
                    <p class="user-stat-title">-</p>
                    <p class="user-stat-text">Publicações</p>
                </div>
            </div>

            <div class="slider-slide tns-item tns-slide-active" id="user-stats-slider-item1">
                <div class="user-stat big">
                    <p class="user-stat-title">{{ contacts.length }}</p>
                    <p class="user-stat-text">Amigos</p>
                </div>
            </div>

            <div class="slider-slide tns-item tns-slide-active" id="user-stats-slider-item2">
                <div class="user-stat big">
                    <p class="user-stat-title">-</p>
                    <p class="user-stat-text">Visitas</p>
                </div>
            </div>

            <div class="slider-slide tns-item tns-slide-active" id="user-stats-slider-item3">
                <div class="user-stat big">
                    <p class="user-stat-title">-</p>
                    <p class="user-stat-text">Notas</p>
                </div>
            </div>

            <div class="slider-slide tns-item tns-slide-active" id="user-stats-slider-item4">
                <div class="user-stat big">
                    <p class="user-stat-title">-</p>
                    <p class="user-stat-text">Fotos</p>
                </div>
            </div>

            <div class="slider-slide tns-item tns-slide-active" id="user-stats-slider-item5">
                <div class="user-stat big">
                    <p class="user-stat-title">-</p>
                    <p class="user-stat-text">Reações</p>
                </div>
            </div>

            <div class="slider-slide tns-item tns-slide-active" id="user-stats-slider-item6">
                <div class="user-stat big">
                    <p class="user-stat-title">-</p>
                    <p class="user-stat-text">Comentários</p>
                </div>
            </div>

        </div>
        </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SlideStatsWidget",

    props:{
        user:{
            type: Object,
            required : true,
        }
    },

    data(){
        return{
            contacts: [],
        }
    },

    mounted() {
        window.axios.get('/contacts').then((response) =>{
            this.contact = response.data;
        })
    }
}
</script>

<style scoped>

</style>
