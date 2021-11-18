<template>

    <div class="widget-box">


        <p class="widget-box-title">Sobre Mim</p>

        <div class="widget-box-content">
            <p class="paragraph"></p>

            <div class="information-line-list">

                <div class="information-line">
                    <p class="information-line-title">Nome: </p>
                    <p class="information-line-text" style="text-transform:capitalize;">{{this.user_name}}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">País: </p>
                    <p class="information-line-text" style="text-transform:capitalize;">{{this.user_country}}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Linguagem: </p>
                    <p class="information-line-text" style="text-transform:capitalize;">{{this.user_language}}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Agrupamento: </p>
                    <p class="information-line-text" style="text-transform:capitalize;">{{this.user_school}}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Entrou em: </p>
                    <p class="information-line-text" style="text-transform:capitalize;"></p>
                </div>

            </div>
        </div>
    </div>

</template>

<script>

import moment from 'moment'

export default {
    name: "AboutMe",

    props: ["user_id"],

    data(){
        return{
            user_name : '',
            user_country : '',
            user_language : '',
            user_school : '',
            user_registrationmonth : '',
            user_registrationday : '',
            user_registrationyear : '',
        }
    },

    mounted() {
        window.axios.get('/api/cl_user/' + this.user_id).then(res => {
            this.user = res.data;
            this.user_name = this.user['0']['name'];
            this.user_registration = this.user['0']['created_at'];
            this.user_country = this.user['0']['profile']['country'];
            this.user_language = this.user['0']['profile']['language'];

            this.user_registrationyear = new Date(this.user_registration).getFullYear();
            console.log(new Date(this.user_registration).getMonth())

            console.log(this.user['0']['created_at'])
        });
    }
}
</script>

<style scoped>

</style>
