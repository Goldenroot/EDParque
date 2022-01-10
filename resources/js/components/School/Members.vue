<template>
    <div class="widget-box">
        <p class="widget-box-title">Estudantes <span class="highlighted" style="float: right">[ {{students.length}} ]</span></p>

        <div class="widget-box-content">
            <div class="user-status-list" style="margin-bottom: 22px !important;" v-for="student in students.slice(0,3)">
                <div class="user-status request-small">
                    <a class="user-status-avatar" :href="'/profile/'+ student.slug">
                        <div class="user-avatar small no-outline">
                            <div class="user-avatar-content">
                                <div class="hexagon-image-30-32" data-src="" style="width: 30px; height: 32px; position: relative;">
                                    <img data-v-fdbe9c1c="" id="navigation-widget-small-user-image" :src="student.avatar" style="width: 30px; height: 32px; position: relative; top: 0px; left: 0px; border-radius: 20px;">
                                </div>
                            </div>
                        </div>
                    </a>
                    <p class="user-status-title"><a class="bold" :href="'/profile/'+ student.slug">{{student.name}}</a></p>
                    <p class="user-status-text small"><span>@</span>{{student.slug}}</p>
                </div>
            </div>
        </div>
        <a class="widget-box-button button small secondary" href="#">Ver Todos</a>
    </div>
</template>

<script>
export default {
    name: "Members",

    props:{
        students:{
            type: [],
            required: false,
        }
    }
}
</script>

<style scoped>

</style>
