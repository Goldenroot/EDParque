<template>
    <div>
        <div class="popup-box mid popup-manage-group" style="position: absolute; left: 50%; z-index: 100001; opacity: 1; visibility: visible; transform: translate(0px, 0px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s; top: 150px; margin-left: -392px;">
            <div class="popup-close-button popup-manage-group-trigger">
                <i class="fas fa-times" style="color: white"></i>
            </div>

            <div class="popup-box-body">
                <div class="popup-box-sidebar">
                    <div class="user-preview small">
                        <figure class="user-preview-cover liquid" style="background: url(&quot;img/cover/29.jpg&quot;) center center / cover no-repeat;">
                            <svg xmlns='http://www.w3.org/2000/svg' width='100%' height="100%" style="border-top-left-radius: 15%;"><defs><linearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='100%' gradientTransform='rotate(240)'><stop offset='0'  stop-color='#ffffff'/><stop offset='1'  stop-color='#4FE'/></linearGradient><pattern patternUnits='userSpaceOnUse' id='b'  width='540' height='450' x='0' y='0' viewBox='0 0 1080 900'><g fill-opacity='0.1'><polygon fill='#444' points='90 150 0 300 180 300'/><polygon points='90 150 180 0 0 0'/><polygon fill='#AAA' points='270 150 360 0 180 0'/><polygon fill='#DDD' points='450 150 360 300 540 300'/><polygon fill='#999' points='450 150 540 0 360 0'/><polygon points='630 150 540 300 720 300'/><polygon fill='#DDD' points='630 150 720 0 540 0'/><polygon fill='#444' points='810 150 720 300 900 300'/><polygon fill='#FFF' points='810 150 900 0 720 0'/><polygon fill='#DDD' points='990 150 900 300 1080 300'/><polygon fill='#444' points='990 150 1080 0 900 0'/><polygon fill='#DDD' points='90 450 0 600 180 600'/><polygon points='90 450 180 300 0 300'/><polygon fill='#666' points='270 450 180 600 360 600'/><polygon fill='#AAA' points='270 450 360 300 180 300'/><polygon fill='#DDD' points='450 450 360 600 540 600'/><polygon fill='#999' points='450 450 540 300 360 300'/><polygon fill='#999' points='630 450 540 600 720 600'/><polygon fill='#FFF' points='630 450 720 300 540 300'/><polygon points='810 450 720 600 900 600'/><polygon fill='#DDD' points='810 450 900 300 720 300'/><polygon fill='#AAA' points='990 450 900 600 1080 600'/><polygon fill='#444' points='990 450 1080 300 900 300'/><polygon fill='#222' points='90 750 0 900 180 900'/><polygon points='270 750 180 900 360 900'/><polygon fill='#DDD' points='270 750 360 600 180 600'/><polygon points='450 750 540 600 360 600'/><polygon points='630 750 540 900 720 900'/><polygon fill='#444' points='630 750 720 600 540 600'/><polygon fill='#AAA' points='810 750 720 900 900 900'/><polygon fill='#666' points='810 750 900 600 720 600'/><polygon fill='#999' points='990 750 900 900 1080 900'/><polygon fill='#999' points='180 0 90 150 270 150'/><polygon fill='#444' points='360 0 270 150 450 150'/><polygon fill='#FFF' points='540 0 450 150 630 150'/><polygon points='900 0 810 150 990 150'/><polygon fill='#222' points='0 300 -90 450 90 450'/><polygon fill='#FFF' points='0 300 90 150 -90 150'/><polygon fill='#FFF' points='180 300 90 450 270 450'/><polygon fill='#666' points='180 300 270 150 90 150'/><polygon fill='#222' points='360 300 270 450 450 450'/><polygon fill='#FFF' points='360 300 450 150 270 150'/><polygon fill='#444' points='540 300 450 450 630 450'/><polygon fill='#222' points='540 300 630 150 450 150'/><polygon fill='#AAA' points='720 300 630 450 810 450'/><polygon fill='#666' points='720 300 810 150 630 150'/><polygon fill='#FFF' points='900 300 810 450 990 450'/><polygon fill='#999' points='900 300 990 150 810 150'/><polygon points='0 600 -90 750 90 750'/><polygon fill='#666' points='0 600 90 450 -90 450'/><polygon fill='#AAA' points='180 600 90 750 270 750'/><polygon fill='#444' points='180 600 270 450 90 450'/><polygon fill='#444' points='360 600 270 750 450 750'/><polygon fill='#999' points='360 600 450 450 270 450'/><polygon fill='#666' points='540 600 630 450 450 450'/><polygon fill='#222' points='720 600 630 750 810 750'/><polygon fill='#FFF' points='900 600 810 750 990 750'/><polygon fill='#222' points='900 600 990 450 810 450'/><polygon fill='#DDD' points='0 900 90 750 -90 750'/><polygon fill='#444' points='180 900 270 750 90 750'/><polygon fill='#FFF' points='360 900 450 750 270 750'/><polygon fill='#AAA' points='540 900 630 750 450 750'/><polygon fill='#FFF' points='720 900 810 750 630 750'/><polygon fill='#222' points='900 900 990 750 810 750'/><polygon fill='#222' points='1080 300 990 450 1170 450'/><polygon fill='#FFF' points='1080 300 1170 150 990 150'/><polygon points='1080 600 990 750 1170 750'/><polygon fill='#666' points='1080 600 1170 450 990 450'/><polygon fill='#DDD' points='1080 900 1170 750 990 750'/></g></pattern></defs><rect x='0' y='0' fill='url(#a)' width='100%' height='100%'/><rect x='0' y='0' fill='url(#b)' width='100%' height='100%'/></svg>
                        </figure>

                        <div class="user-preview-info">
                            <div class="user-short-description small">
                                <a class="user-short-description-avatar user-avatar no-stats" href="#">
                                    <div class="user-avatar-border">
                                        <div class="hexagon-100-108" style="width: 100px; height: 108px; position: relative;"><canvas width="100" height="108" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    </div>

                                    <div class="user-avatar-content">
                                        <div class="hexagon-image-84-92" data-src="img/avatar/24.jpg" style="width: 84px; height: 92px; position: relative;"><canvas width="84" height="92" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    </div>
                                </a>

                                <p class="user-short-description-title small">Nome da Disciplina: {{this.NomeDisciplina}}</p>
                                <p class="user-short-description-text regular">Nome do Trabalho: {{this.NomeTrabalho}}</p>
                                <p class="user-short-description-text regular">Data de Entrega: {{this.EntregaTrabalho}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="popup-box-sidebar-footer" style="margin-top: 63%;">
                        <p class="button secondary full popup-manage-group-trigger" @click="CreateWork">Criar!</p>
                        <p class="button white full popup-manage-group-trigger">Limpar</p>
                    </div>
                </div>

                <div class="popup-box-content">
                    <div class="widget-box">
                        <p class="widget-box-title">Criar Trabalho</p>

                        <div class="widget-box-content">
                            <form class="form">
                                <div class="form-row">
                                    <div class="form-item">
                                        <div class="form-input small active">
                                            <label for="work-name">Nome da Disciplina</label>
                                            <input type="text" id="work-name" name="work_name" value="" v-model="NomeDisciplina" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-item">
                                        <div class="form-input small active">
                                            <label for="work-tagline">Nome do Trabalho</label>
                                            <input type="text" id="work-tagline" name="work-tagline" value="" v-model="NomeTrabalho" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-item">
                                        <div class="form-input small mid-textarea">
                                            <textarea id="work-description" name="work-description" placeholder="Descrição do trabalho..." v-model="DescricaoTrabalho"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-item">
                                            <file-pond
                                                name="test"
                                                ref="pond"
                                                label-idle="Larga aqui o teu ficheiro ou <span class='filepond--label-action'>Procura</span>"
                                                allow-multiple="true"
                                                accepted-file-types="image/jpeg, image/png"
                                                v-bind:files="myFiles"
                                            />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-item">
                                        <div class="form-input small">
                                            <label for="group-public-website" style="background-color: #fff; padding: 0 6px; font-size: .75rem; top: -6px; left: 12px;">Data de Entrega</label>
                                            <input type="date" v-model="EntregaTrabalho" id="group-public-website" name="group_public_website" style="border-radius: 10px; padding: 20px; background-color: #fff; border: 1px solid #dedeea; color: #3e3f5e; transition: border-color .2s ease-in-out;">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="width: 100%; height: 100%; background-color: rgba(21, 21, 31, 0.96); position: fixed; top: 0px; left: 0px; z-index: 100000; opacity: 1; visibility: visible; transition: opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;"></div>

    </div>
</template>

<script>

import vueFilePond from 'vue-filepond'
import 'filepond/dist/filepond.min.css'

const FilePond = vueFilePond(

)

export default {
    name: "Create",

    props:{
        user:{
            type: Object,
            required: true,
        }
    },

    data(){
        return{
            NomeDisciplina: "",
            NomeTrabalho: "",
            EntregaTrabalho: "",
            DescricaoTrabalho: "",
            file: "",
            user_id : "",
            myFiles: [],
        }
    },

    methods: {
        CreateWork() {
            axios.get('/work/create', {
                params: {
                    NomeDisciplina: this.NomeDisciplina,
                    NomeTrabalho: this.NomeTrabalho,
                    EntregaTrabalho: this.EntregaTrabalho,
                    DescricaoTrabalho: this.DescricaoTrabalho,
                    file: this.file,
                    user_id: this.user.id
                }
            })
        },
    },

    components: {
        FilePond
    }

}
</script>

<style scoped>

</style>
