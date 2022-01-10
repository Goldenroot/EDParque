<template>
    <div class="profile-stats fixed-height">
        <div class="profile-stats-cover">
            <p class="profile-stats-cover-title">Bem Vindo!</p>

            <p class="profile-stats-cover-text">{{ user.name }}</p>
        </div>

        <div class="profile-stats-info">
            <div class="user-avatar medium">
                <div class="user-avatar-border">
                    <div class="hexagon-120-132" style="width: 120px; height: 132px; position: relative;"><canvas width="120" height="132" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                </div>

                <div class="user-avatar-content">
                    <div class="hexagon-image-82-90" data-src="img/avatar/01.jpg" style="width: 82px; height: 90px; position: relative;"><canvas width="82" height="90" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                </div>

                <div class="user-avatar-progress">
                    <div class="hexagon-progress-100-110" style="width: 100px; height: 110px; position: relative;"><canvas width="100" height="110" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                </div>

                <div class="user-avatar-progress-border">
                    <div class="hexagon-border-100-110" style="width: 100px; height: 110px; position: relative;"><canvas width="100" height="110" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                </div>

                <div class="user-avatar-badge">
                    <div class="user-avatar-badge-border">
                        <div class="hexagon-32-36" style="width: 32px; height: 36px; position: relative;"><canvas width="32" height="36" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                    </div>

                    <div class="user-avatar-badge-content">
                        <div class="hexagon-dark-26-28" style="width: 26px; height: 28px; position: relative;"><canvas width="26" height="28" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                    </div>

                    <p class="user-avatar-badge-text">24</p>
                </div>
            </div>

            <div class="featured-stat-list">
                <div class="featured-stat">
                    <i class="fal fa-mailbox" style="font-weight: 500; font-size: 30px;"></i>

                    <p class="featured-stat-title">28.4</p>

                    <p class="featured-stat-subtitle">Publicações</p>

                    <p class="featured-stat-text">Média Més</p>
                </div>

                <div class="featured-stat">
                    <i class="far fa-comment-lines" style="font-weight: 500; font-size: 30px;"></i>

                    <p class="featured-stat-title">69.7</p>
                    <p class="featured-stat-subtitle">Amizades</p>
                    <p class="featured-stat-text">Média Més</p>
                </div>
            </div>

            <div class="featured-stat-list">
                <div class="featured-stat">
                    <div class="progress-arc-wrap small">
                        <div class="progress-arc-info">
                            <vc-donut :sections="friendsAdded" :size="65" :thickness="15"><p class="progress-arc-title">42%</p></vc-donut>
                        </div>
                    </div>

                    <p class="featured-stat-subtitle">Amizades</p>
                    <p class="featured-stat-text">Por Mês</p>
                </div>

                <div class="featured-stat">
                    <div class="progress-arc-wrap small">
                        <div class="progress-arc-info">
                            <vc-donut :sections="workDone" :size="65" :thickness="15"><p class="progress-arc-title">42%</p></vc-donut>
                        </div>
                    </div>

                    <p class="featured-stat-subtitle">Publicações</p>
                    <p class="featured-stat-text">Por Mês</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Donut from "vue-css-donut-chart";

Vue.use(Donut);

export default {
    name: "ProfileStatsWidget",

    props:{
        user:{
            type: Object,
            required : true,
        }
    },

    data(){
        return{
            workDone: [
                {
                    label: 'Red section',
                    value:  0,
                    color: 'rgb(87 136 254)'
                },
            ],

            friendsAdded: [
                {
                    label: 'Red section',
                    value:  0,
                    color: 'rgb(87 136 254)'
                },
            ],
        }
    },


}
</script>

<style scoped>

</style>
