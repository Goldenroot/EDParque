<template>
    <div>
        <div class="popup-box mid popup-manage-group" style="position: absolute; left: 50%; z-index: 100001; opacity: 1; visibility: visible; transform: translate(0px, 0px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s; top: 100px; margin-left: -392px;">
        <div class="popup-close-button popup-manage-group-trigger">
            <i class="fas fa-times" style="color: white"></i>
        </div>

        <div class="popup-box-body">
            <div class="popup-box-sidebar">
                <div class="user-preview small">
                    <figure class="user-preview-cover liquid" style="background: url(&quot;img/cover/29.jpg&quot;) center center / cover no-repeat;">
                        <img src="img/cover/29.jpg" alt="cover-29" style="display: none;">
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

                            <p class="user-short-description-title small">{{ work.class }}</p>

                            <p class="user-short-description-text regular">{{ work.name }}</p>
                        </div>
                    </div>
                </div>

                <div class="sidebar-menu-item">
                    <div class="sidebar-menu-body secondary">
                        <p class="sidebar-menu-link active">Informações do Trabalho</p>
                        <p class="sidebar-menu-link">Imagem e Banner</p>
                        <p class="sidebar-menu-link">Apagar Trabalho</p>
                    </div>
                </div>

                <div class="popup-box-sidebar-footer">
                    <p class="button secondary full popup-manage-group-trigger">Salvar!</p>
                    <p class="button white full popup-manage-group-trigger">Limpar Tudo</p>
                </div>
            </div>

            <div class="popup-box-content">
                <div class="widget-box">
                    <p class="widget-box-title">Geral</p>

                    <div class="widget-box-content">
                        <form class="form">
                            <div class="form-row">
                                <div class="form-item">
                                    <div class="form-input small active">
                                        <label for="class_name">Nome da Disciplina</label>
                                        <input type="text" id="class_name" name="class_name" :value="work.class">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-item">
                                    <div class="form-input small active">
                                        <label for="work_name">Nome do Trabalho</label>
                                        <input type="text" id="work_name" name="work_name" :value="work.name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-item">
                                    <div class="form-input small active">
                                        <label for="file">Ficheiro</label>
                                        <input type="file" id="file" name="file" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-item">
                                    <div class="form-input small mid-textarea">
                                        <textarea id="work-description" name="work_description" placeholder="Write a little description about the group..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-item">
                                    <div class="form-input small active">
                                        <label for="group-delivery_date">Data de Entrega</label>
                                        <input type="date" id="group-delivery_date" name="group-delivery_date" >
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
export default {
    name: "WorkMenu",

    props:{
        work:{
          type: Object,
          required: false,
        },
    }
}
</script>

<style scoped>

</style>
