<template>

    <div>
        <div class="content-header">
            <div class="content-header-intro">
                <h2>Os Meus Detalhes</h2>
                <p>Edita os detalhes da tua conta.</p>
            </div>
            <div class="content-header-actions">

            </div>
        </div>
        <div class="content">
            <div class="content-panel">
                <div class="vertical-tabs">
                    <a href="#" class="active">Ver todos</a>
                    <a href="#">Geral</a>
                    <a href="#">Privacidade</a>
                </div>
            </div>

            <div class="content-main">

                <div class="widget-box">
                    <p class="widget-box-title">Geral</p>

                    <div class="widget-box-content">
                        <form class="form">
                            <div class="form-row split">
                                <div class="form-item">
                                    <div class="form-input small active">
                                        <label for="account-full-name">Nome</label>
                                        <input type="text" id="account-full-name" name="account_full_name" v-bind:value="user_name">
                                    </div>
                                </div>
                                <div class="form-item">
                                    <div class="form-input small active">
                                        <div class="form-select">
                                            <label>Instituição</label>
                                            <select id="account-language" name="account_language">
                                                <option value="1" selected="">Escola</option>
                                            </select>
                                            <svg class="form-select-icon icon-small-arrow">
                                                <use xlink:href="#svg-small-arrow"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row split">
                                <div class="form-item">
                                    <div class="form-input small active">
                                        <label for="account-url-username">Slug</label>
                                        <input type="text" id="account-url-username" name="account_url_username" v-bind:value="user_slug">
                                    </div>
                                </div>

                                <div class="form-item">
                                    <div class="form-input small">
                                        <label for="account-phone">Phone Number</label>
                                        <input type="text" id="account-phone" name="account_phone">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row split">
                                <div class="form-item">
                                    <div class="form-select">
                                        <label>País</label>
                                        <select id="account-country" name="account_country">
                                            <option value="0">Escolhe o teu País</option>
                                            <option value="1" selected="">United States</option>
                                        </select>
                                        <svg class="form-select-icon icon-small-arrow">
                                            <use xlink:href="#svg-small-arrow"></use>
                                        </svg>
                                    </div>
                                </div>

                                <div class="form-item">
                                    <div class="form-select">
                                        <label>Linguagem</label>
                                        <select id="account-language" name="account_language">
                                            <option value="pt" selected="">Português</option>
                                        </select>
                                        <svg class="form-select-icon icon-small-arrow">
                                            <use xlink:href="#svg-small-arrow"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Settings_Detalhes",

    props: ["user_slug", "user_name"],
}

</script>

<style scoped>


</style>
