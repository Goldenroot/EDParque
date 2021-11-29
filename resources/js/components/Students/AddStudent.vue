<template>
    <div>

        <div class="profile-header-info-actions" v-if="loading">
            <p class="profile-header-info-action button primary"><span class="hide-text-mobile"></span>A carregar ...</p>
        </div>

        <div class="profile-header-info-actions" v-if="!loading">
            <p class="profile-header-info-action button secondary" @click="add_friend" v-if="status == 0">
                <span class="hide-text-mobile"></span>Adicionar Amigo
            </p>

            <p class="profile-header-info-action button secondary" @click="accept_friend" v-if="status == 'pending'">
                <span class="hide-text-mobile"></span>Aceitar Amigo
            </p>

            <p class="profile-header-info-action button secondary" v-if="status == 'waiting'">
                <span class="hide-text-mobile"></span>Pedido Enviado
            </p>

            <p class="profile-header-info-action button secondary" v-if="status == 'friends'">
                <span class="hide-text-mobile"></span>Amigos
            </p>

            <p class="profile-header-info-action button primary" v-if="status == 'friends'">
                <span class="hide-text-mobile"></span>Enviar Mensagem
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "AddStudent",

    props:["student_id"],

    data(){
        return{
            status: '',
            loading: true,
        }
    },

    methods: {

        add_friend() {
            this.loading = true
            axios.get('/add_friend/' + this.student_id )
                .then( (resp) => {
                    if(resp.status == 200)
                        this.status = 'waiting'
                    this.loading = false
                })
        },

        accept_friend() {
            this.loading = true
            axios.get('/accept_friend/' + this.student_id )
                .then( (resp) => {
                    if(resp.status == 200)
                        this.status = 'friends'
                    this.loading = false
                })
        },
    },

    mounted() {
        window.axios.get("/check/" + this.student_id)
            .then((resp) =>{
                this.status = resp.data.status
                this.loading = false
            })
        },
    }

</script>

<style scoped>

</style>
