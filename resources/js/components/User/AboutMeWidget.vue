<template>

    <div class="widget-box">


        <p class="widget-box-title">Sobre Mim</p>

        <div class="widget-box-content">
            <p class="paragraph"></p>

            <div class="information-line-list">

                <div class="information-line">
                    <p class="information-line-title">Nome: </p>
                    <p class="information-line-text" style="text-transform:capitalize;">{{this.user.name}}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">País: </p>
                    <p class="information-line-text" style="text-transform:capitalize;">{{this.user.profile.country}}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Linguagem: </p>
                    <p class="information-line-text" style="text-transform:capitalize;">{{this.user.profile.language}}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Escola: </p>
                    <p class="information-line-text" style="text-transform:capitalize;">{{user_school}}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Entrou em: </p>
                    <p class="information-line-text">{{this.user_registrationday + ' do ' + this.user_registrationmonth + ' de ' + this.user_registrationyear}}</p>
                </div>

            </div>
        </div>
    </div>

</template>

<script>

export default {
    name: "AboutMe",

    props:{
        user:{
            type: Object,
            required: true,
        },
    },

    data(){
        return{
            user_registrationyear : "",
            user_registrationmonth : "",
            user_registrationday : "",
            user_school : '-',
        }
    },

    mounted() {
        this.user_registrationyear = this.user.created_at.slice(0,4);
        this.user_registrationmonth = this.user.created_at.slice(5,7);
        this.user_registrationday = this.user.created_at.slice(8,10);

        if(this.user.school_id != null){

            axios.get('/get_school/' + this.user.school_id).then(data =>{
                this.user_school = data.data.NomeEstabelecimento;
            });
        }
    }
}
</script>

<style scoped>

</style>
