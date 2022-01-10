<template>
    <div class="account-hub-content">
        <div class="section-header">
            <div class="section-header-info">
                <p class="section-pretitle">Trabalhos</p>
                <h2 class="section-title">Lista de Trabalhos <span class="highlighted">[]</span></h2>
            </div>

            <div class="section-header-info">
                <div class="form-input small with-button">
                    <input type="text" id="work_search" name="work_search" placeholder="Procurar Trabalhos">
                    <button class="button primary">
                        <i class="far fa-search"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-3-3-3 centered-on-mobile">
            <div class="create-entity-box" style="height: 320px !important; width: 284px !important;">
                <div class="create-entity-box-cover"></div>

                <div class="create-entity-box-avatar">
                    <i class="fas fa-briefcase" style="color: rgb(173, 175, 202);"></i>
                </div>

                <div class="create-entity-box-info">
                    <p class="create-entity-box-title">Criar Novo Trabalho</p>
                    <p class="create-entity-box-text">Organiza os teus trabalhos e Recebe Notificações!</p>
                    <p class="button secondary full popup-manage-group-trigger">Começar a Criar!</p>
                </div>
            </div>

            <div class="create-entity-box" style="height: 320px !important; width: 284px !important;" v-for="work in works">
                <div class="create-entity-box-cover"></div>

                <div class="create-entity-box-avatar">
                    <i class="fas fa-briefcase" style="color: rgb(173, 175, 202);"></i>
                </div>

                <div class="create-entity-box-info">
                    <p class="create-entity-box-title">{{ work.class }}</p>
                    <p class="create-entity-box-text">{{ work.name }}</p>
                    <p class="create-entity-box-text">Data de Entrega : {{ work.delivery_at }}</p>
                    <p class="create-entity-box-text">Tempo Restante : {{ work.name }}</p>

                    <div style="display: flex">
                        <p class="button full white popup-manage-group-trigger">Editar</p>
                        <p class="button full secondary" style="margin-left: 10px">Entregar</p>
                    </div>
                </div>
            </div>
        </div>

        <work-create :user="this.user"></work-create>
    </div>
</template>

<script>

import './Create';

export default {
    name: "WorkListWidget",

    props:{
        user:{
            type: Object,
            required: true,
        },

        works:{
            type: Array,
            required: false,
        }
    },

}
</script>

<style scoped>

</style>
