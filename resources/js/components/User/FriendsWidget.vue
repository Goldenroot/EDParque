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
        <p class="widget-box-title">Amigos <span class="highlighted">[{{friends}}]</span></p>
        <!-- /WIDGET BOX TITLE -->

        <div class="widget-box-content">

            <div class="user-status-list">
                <div v-for="friend in friends" class="user-status request-small">
                    <a class="user-status-avatar" :href="friend_slug">
                        <div class="user-avatar small no-outline">
                            <div class="user-avatar-content">
                                <div class="hexagon-image-30-32" data-src="" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            </div>
                        </div>
                    </a>

                    <p class="user-status-title"><a class="bold" :href="friend_slug">{{friend_name}}</a></p>

                    <p class="user-status-text small"><span>@</span>{{friend_slug}}</p>
                </div>
            </div>

        </div>
        <a class="widget-box-button button small secondary" href="/friends">Ver Todos</a>
    </div>
</template>

<script>
export default {
    name: "FriendsWidget",

    props:["user_id"],

    data(){
        return{
            friends : "",
            friend_name: "",
            friend_image : "",
        }
    },

    mounted() {
        window.axios.get("/get_friends/" + this.user_id).then(res => {
            this.friend = res.data[0];
            this.friends = res.data.length;
            this.friend_name = this.friend["name"];
            this.friend_slug = this.friend["slug"];
            this.friend_image = this.friend["avatar"];
            console.log(this.friend);
        })
    }
}
</script>

<style scoped>

</style>
