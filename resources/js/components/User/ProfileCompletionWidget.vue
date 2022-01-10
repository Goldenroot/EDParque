<template>
    <div class="widget-box">
        <div class="progress-arc-summary">
            <vc-donut :sections="sections" :size="200" :thickness="20"><p style="font-size: 35px; font-weight: 700;">{{this.user.profile.completion}}%</p></vc-donut>

            <div class="progress-arc-summary-info" v-if="this.user.profile.completion < 100">
                <p class="progress-arc-summary-title">Finaliza o teu Perfil</p>
                <p class="progress-arc-summary-text">Completa e Atualiza o teu Perfil ao Atualizares as tuas informações!</p>
            </div>

            <div class="progress-arc-summary-info" v-if="this.user.profile.completion >= 100">
                <p class="progress-arc-summary-title">Finalizaste o teu Perfil</p>
                <p class="progress-arc-summary-text">Parabéns por atualizares e completares o teu perfil!</p>
            </div>
    </div>
    </div>
</template>

<script>

import Donut from "vue-css-donut-chart";

Vue.use(Donut);

export default {
    name: "ProfileCompletionWidget",

    props: {
        user: {
            type: Object,
            required: true
        },
    },

    data(){
        return{
            sections: [
                {
                    label: 'Red section',
                    value:  0,
                    color: '#40aaff'
                },
            ],
        }
    },

    mounted() {
        this.sections['0']['value'] = this.user.profile.completion;
    }


}
</script>


