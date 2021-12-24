<template>
    <div class="widget-box">
        <div class="progress-arc-summary">
            <vc-donut :sections="sections" :size="200" :thickness="20"><p style="font-size: 35px; font-weight: 700;">{{user_completion}}%</p></vc-donut>
            <div class="progress-arc-summary-info">
                <p class="progress-arc-summary-title">Finaliza o teu Perfil</p>
                <p class="progress-arc-summary-text">Completa e Atualiza o teu Perfil ao Atualizares as tuas informações!</p>
            </div>
    </div>
    </div>
</template>

<script>

import Donut from "vue-css-donut-chart";

Vue.use(Donut);


export default {
    name: "ProfileCompletionWidget",

    props: ["user_id"],

    data(){
        return{
            user_completion : '',
            user_name : "",
            sections: [
                { label: 'Red section', value: 20, color: '#40aaff' },
            ],
        }
    },

    mounted() {
        window.axios.get('/api/cl_user/' + this.user_id).then(res => {
            this.user = res.data;
            this.user_completion = this.user['0']['profile']['completion'];
            this.user_name = this.user['0']['name'];
        });
    },
}
</script>


