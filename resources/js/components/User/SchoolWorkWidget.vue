<template>
    <div class="widget-box">
        <div class="widget-box-settings">
            <div class="post-settings-wrap" style="position: relative;">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                    <svg class="post-settings-icon icon-more-dots">
                        <use xlink:href="#svg-more-dots"></use>
                    </svg>
                </div>

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

        <p class="widget-box-title">Trabalhos<span class="highlighted">[]</span></p>

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
</template>

<script>
export default {
    name: "SchoolWorkWidget"
}
</script>

<style scoped>

</style>
