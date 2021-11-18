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
        <p class="widget-box-title">Amigos <span class="highlighted">[]</span></p>
        <!-- /WIDGET BOX TITLE -->

        <div class="widget-box-content">

            <div class="user-status-list">
                <div v-for="f of friends" class="user-status request-small">
                    <a class="user-status-avatar" href="">
                        <div class="user-avatar small no-outline">
                            <div class="user-avatar-content">
                                <div class="hexagon-image-30-32" data-src="" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            </div>

                            <div class="user-avatar-progress">
                                <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            </div>

                            <div class="user-avatar-progress-border">
                                <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            </div>

                            <div class="user-avatar-badge">
                                <div class="user-avatar-badge-border">
                                    <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">16</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                        </div>
                    </a>

                    <p class="user-status-title"><a class="bold" href="">{{friend_name}}</a></p>

                    <p class="user-status-text small"><span>@</span>{{friend_slug}}</p>
                    <div class="action-request-list">
                        <div class="action-request accept">
                            <svg class="action-request-icon icon-add-friend">
                                <use xlink:href="#svg-add-friend"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a class="widget-box-button button small secondary" href="/friends">Ver Todos</a>
    </div>
</template>

<script>
export default {
    name: "FriendsWidget",

    data(){
        return{
            friends : "",
            friend_name: "",
            friend_image : "",
        }
    },

    mounted() {
        window.axios.get("/get_friends").then(res => {
            this.friend = res.data[0];
            this.friends = res.data.length;
            this.friend_name = this.friend["name"];
            this.friend_slug = this.friend["slug"];
            this.friend_image = this.friend["avatar"];
            console.log(res.data)
        })
    }
}
</script>

<style scoped>

</style>
