<template>
    <div class="widget-box">

        <p class="widget-box-title">Trabalhos<span class="highlighted" style="float: right">[ {{works.length}} ]</span></p>

        <div class="widget-box-content">
            <div class="post-peek-list">
                <div class="post-peek" v-for="work in works.slice(0,3)">
                    <a class="post-peek-image" href="#">
                        <figure class="picture small round liquid" style="background: url('images/about-books.png') center center / cover no-repeat;">
                        </figure>
                    </a>

                    <div style="display: flex; flex-direction: row; justify-content: space-between;">
                    <p class="post-peek-title" style="padding-bottom: 5px"><a href="#">{{ work.class}}</a></p>
                    </div>
                    <p class="information-line-text">{{work.name}}</p>

                    <p class="post-peek-text">{{'Adicionado a ' + work.created_at.slice(5,7)  + ' do ' + work.created_at.slice(8,10) + ' de ' + work.created_at.slice(0, 4) }}</p>
                </div>
            </div>
            <a class="widget-box-button button small secondary" href="#" v-if="works == 0">Adicionar</a>
            <a class="widget-box-button button small secondary" href="/works" v-if="works != 0">Ver todos</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "SchoolWorkWidget",

    props:{
        user:{
            type: Object,
            required: true,
        },

        works:{
            type: [],
            required: false,
        }
    },

    mounted() {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    }

}
</script>

<style scoped>

</style>
