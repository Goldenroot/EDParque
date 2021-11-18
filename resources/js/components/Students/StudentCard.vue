<template>

    <div class="user-preview">

        <figure class="user-preview-cover liquid">
            <img v-bind:src="student_banner" alt="cover-04" style="display: block; border-top-right-radius: 20px ; border-top-left-radius: 20px ;">
        </figure>

        <div class="user-preview-info">
            <div class="user-short-description">
                <a class="user-short-description-avatar user-avatar medium" href="profile-timeline.html">
                    <div class="user-avatar-content">
                        <img v-bind:src="student_avatar" style="border: 5px solid white; width: 82px; height: 90px; position: relative; border-radius: 50%">
                    </div>
                </a>

                <p class="user-short-description-title"><a href="">{{student_name}}</a></p>
                <p class="user-short-description-text"><a href="#"><span>@</span>{{student_slug}}</a></p>
            </div>

            <div class="tns-outer" id="user-preview-stats-slides-01-ow"><div id="user-preview-stats-slides-01-mw" class="tns-ovh"><div class="tns-inner" id="user-preview-stats-slides-01-iw"><div id="user-preview-stats-slides-01" class="user-preview-stats-slides  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" style="transform: translate3d(0%, 0px, 0px);">
                <div class="user-preview-stats-slide tns-item tns-slide-active" id="user-preview-stats-slides-01-item0">
                    <div class="user-stats">
                        <div class="user-stat">
                            <p class="user-stat-title">12.5</p>
                            <p class="user-stat-text">Média</p>
                        </div>

                        <div class="user-stat">
                            <p class="user-stat-title">5</p>
                            <p class="user-stat-text">Amigos</p>
                        </div>

                        <div class="user-stat">
                            <p class="user-stat-title">AEL</p>
                            <p class="user-stat-text">Escola</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>

            <div class="user-preview-actions">
                <p class="button secondary">Adicionar Amigo</p>
                <p class="button primary">Enviar Mensagem</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "StudentCard",

    data(){
        return{
            student_name : '',
            student_slug : '',
            student_avatar : '',
            student_banner : '',
        }
    },

    props: ["student_id"],

    mounted(){
        window.axios.get('/api/cl_user/' + this.student_id).then(res => {
            this.student = res.data;
            this.student_name = this.student['name'];
            this.student_slug = this.student['slug'];
            this.student_avatar = this.student['avatar'];
            this.student_banner = this.student['banner'];
        });

        window.axios.get('/check_relationship_status/' + this.student_id).then(res => {
            console.log(res.data);
        });

    }
}
</script>

<style scoped>

</style>
