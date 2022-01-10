<template>
    <div class="widget-box">

        <p class="widget-box-title">Fotos <span class="highlighted" style="float: right">[ {{school.photos.length}} ]</span></p>

        <div class="widget-box-content">
            <div class="picture-item-list small">

                <div class="picture-item popup-picture-trigger" v-for="photos in school.photos.slice(0,11)">
                    <figure class="picture round liquid" v-bind:style="{ background: 'url(' + photos.image + ') center center / cover no-repeat' }"></figure>
                </div>

                <a class="picture-item" href="#">
                    <figure class="picture round liquid" style="background: url(https://odindesignthemes.com/vikinger/img/cover/37.jpg) center center / cover no-repeat;">
                    </figure>

                    <div class="picture-item-overlay round">
                        <p class="picture-item-overlay-text">+6</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Photos",

    props:{
        school:{
            type: Object,
            required: true,
        }
    },

    mounted() {

    }
}
</script>

<style scoped>

</style>
