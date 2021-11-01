<template>

    <div>
        <div class="main-header">
            <h1>Definições</h1>
            <div class="search">
                <input type="text" placeholder="Procurar" />
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div class="horizontal-tabs">
            <a href="#" @click="activeTab = 'Settings_Detalhes'" v-bind:class="{'active': activeTab === 'Settings_Detalhes'}">Os Meus Detalhes</a>
            <a href="#" @click="activeTab = 'Settings_Perfil'" v-bind:class="{'active': activeTab === 'Settings_Perfil'}">Perfil</a>
            <a href="#" @click="activeTab = 'Settings_Notificacoes'" v-bind:class="{'active': activeTab === 'Settings_Notificacoes'}">Notificações</a>
            <a href="#" @click="activeTab = 'Settings_Widgets'" v-bind:class="{'active': activeTab === 'Settings_Widgets'}">Widgets</a>
            <a href="#" @click="activeTab = 'Settings_Seguranca'" v-bind:class="{'active': activeTab === 'Settings_Seguranca'}">Dispositivos</a>
        </div>

        <settings-detalhes v-if="activeTab === 'Settings_Detalhes'" :user_slug="user_slug" :user_name="user_name"></settings-detalhes>

        <settings-perfil v-if="activeTab === 'Settings_Perfil'"></settings-perfil>

        <settings-notificacoes v-if="activeTab === 'Settings_Notificacoes'"></settings-notificacoes>

        <settings-widgets v-if="activeTab === 'Settings_Widgets'"></settings-widgets>

       <settings-seguranca v-if="activeTab === 'Settings_Seguranca'"></settings-seguranca>


    </div>

</template>

<script>

import Settings_Detalhes from './Settings_Detalhes.vue';
import Settings_Perfil from './Settings_Perfil.vue';
import Settings_Notificacoes from './Settings_Notificacoes.vue';
import Settings_Widgets from './Settings_Widgets.vue';
import Settings_Seguranca from './Settings_Dispositivos.vue';

export default {
    name: "Settings_Options",

    components: {
        Settings_Detalhes,
        Settings_Perfil,
        Settings_Notificacoes,
        Settings_Widgets,
        Settings_Seguranca
    },

    props: ["user_id"],

    data(){
        return{
            activeTab: 'Settings_Detalhes',
            user_name : '',
            user_slug : '',

            profile_location : '',
        }
    },

    mounted() {
        window.axios.get('/api/cl_user/' + this.user_id).then(res => {
            this.user = res.data;
            this.user_name = this.user['name'];
            this.user_slug = this.user['slug'];
        })

        window.axios.get('/api/cl_user_profile/' + this.user_id).then(res => {
            this.profile = res.data;
            console.log(this.profile)
            this.profile_country = this.profile['location'];
            this.profile_language = this.profile['language'];
        })
    }

}

</script>

<style scoped>

.fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
}
.fade-enter, .fade-leave-to  {
    opacity: 0;
}

</style>
