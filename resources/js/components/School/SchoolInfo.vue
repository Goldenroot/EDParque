<template>
    <div class="widget-box">
        <p class="widget-box-title">Info</p>

        <div class="widget-box-content">

            <div class="information-line-list">

                <div class="information-line">
                    <p class="information-line-title">Agrupamento</p>
                    <p class="information-line-text">{{ school.AgrupamentoEscolas }}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Nome</p>
                    <p class="information-line-text">{{ school.NomeEstabelecimento }}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Tipologia</p>
                    <p class="information-line-text">{{ school.Tipologia }}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Morada</p>
                    <p class="information-line-text">{{ school.Morada }}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Contacto</p>
                    <p class="information-line-text">{{ school.Contacto }}</p>
                </div>

                <div class="information-line">
                    <p class="information-line-title">Web</p>
                    <p class="information-line-text"><a :href="school.Site">{{school.Site}}</a></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SchoolInfo",

    props:{
        school:{
            type: Object,
            required: true,
        }
    }
}
</script>

<style scoped>

</style>
