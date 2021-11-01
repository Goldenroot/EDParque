<template>

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
        <!-- /WIDGET BOX SETTINGS -->

        <!-- WIDGET BOX TITLE -->
        <p class="widget-box-title">Sobre Mim</p>
        <!-- /WIDGET BOX TITLE -->

        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
            <!-- PARAGRAPH -->
            <p class="paragraph"></p>
            <!-- /PARAGRAPH -->

            <!-- INFORMATION LINE LIST -->
            <div class="information-line-list">

                <div class="information-line">
                    <p class="information-line-title">Nome: </p>
                    <p class="information-line-text"></p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">País: </p>
                    <p class="information-line-text"></p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Linguagem: </p>
                    <p class="information-line-text"></p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Agrupamento: </p>
                    <p class="information-line-text"></p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Entrou em: </p>
                    <p class="information-line-text"> </p>
                </div>

            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "AboutMe",

    props: ["user_id"],

    data(){
        return{
            user_name : '',
            user_country : '',
            user_language : '',
            user_school : '',
            user_registration : ''
        }
    },

    mounted() {
        window.axios.get('/api/cl_user/' + this.user_id).then(res => {
            console.log(res.data)
        });
    }
}
</script>

<style scoped>

</style>
