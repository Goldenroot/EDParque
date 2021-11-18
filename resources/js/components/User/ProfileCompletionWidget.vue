<template>
    <div class="widget-box">
        <div class="progress-arc-summary">
            <div class="progress-arc-wrap">

                <div class="progress-arc"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="profile-completion-chart" style="display: block; height: 140px; width: 140px;" width="280" height="280" class="chartjs-render-monitor"></canvas>
                </div>

                <div class="progress-arc-info">
                    <p class="progress-arc-title">{{this.user_completion}}%</p>
                </div>
            </div>

            <div class="progress-arc-summary-info">
                <p class="progress-arc-summary-title">Finaliza o teu Perfil</p>
                <p class="progress-arc-summary-subtitle">Nome</p>
                <p class="progress-arc-summary-text">Completa e Atualiza o teu Perfil ao Atualizar Todas as Tuas Informações</p>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "ProfileCompletionWidget",


    props: ["user_id"],

    data(){
        return{
            user_completion : '',
        }
    },

    mounted() {
        window.axios.get('/api/cl_user/' + this.user_id).then(res => {
            this.user = res.data;
            this.user_completion = this.user['0']['profile']['completion'];
        });
    }
}
</script>

<style scoped>

</style>
