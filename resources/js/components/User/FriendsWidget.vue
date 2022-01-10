<template>
    <div class="widget-box">
        <p class="widget-box-title">Amigos <span class="highlighted">[ {{contacts.length}} ]</span></p>

        <div class="widget-box-content">
            <div class="user-status-list" v-for="contact in contacts.slice(0,3)">
                <div class="user-status request-small">
                    <a class="user-status-avatar" :href="'/profile/'+ contact.slug">
                        <div class="user-avatar small no-outline">
                            <div class="user-avatar-content">
                                <div class="hexagon-image-30-32" data-src="" style="width: 30px; height: 32px; position: relative;">
                                    <img data-v-fdbe9c1c="" id="navigation-widget-small-user-image" :src="contact.avatar" style="width: 30px; height: 32px; position: relative; top: 0px; left: 0px; border-radius: 20px;">
                                </div>
                            </div>
                        </div>
                    </a>
                    <p class="user-status-title"><a class="bold" :href="'/profile/'+ contact.slug">{{contact.name}}</a></p>
                    <p class="user-status-text small"><span>@</span>{{contact.slug}}</p>
                </div>
            </div>
        </div>
        <a class="widget-box-button button small secondary" href="/friends" v-if="contacts > 0">Ver Todos</a>
        <a class="widget-box-button button small secondary" href="/friends">Adiciona Amigos</a>
    </div>
</template>

<script>
export default {
    name: "FriendsWidget",

    data(){
        return{
            contacts: [],
        }
    },

    mounted() {
        axios.get('/contacts')
            .then((response) => {
                this.contacts = response.data;
            });
    }
}
</script>

<style scoped>

.user-status.request-small {
    padding-right: 48px;
}

.user-status-list .user-status {
    margin-bottom: 22px;
}
.user-status {
    min-height: 44px;
    padding: 2px 0 0 52px;
    position: relative;
}

</style>
