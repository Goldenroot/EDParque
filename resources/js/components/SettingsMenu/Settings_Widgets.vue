<template>
    <div>
        <div class="content-header">
            <div class="content-header-intro">
                <h2>Os Meus Widgets</h2>
                <p>Edita os teus Widgets.</p>
            </div>
            <div class="content-header-actions">

            </div>
        </div>
        <div class="content">
            <div class="content-main">
                <div class="card-grid col-6">
                    <article class="card">
                        <div class="card-header" style="align-items: center !important;">
                            <div>
                                <span><img src=""/></span>
                                <h3>Weather</h3>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <p>Consulta a temperatura da tua região.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#">Ver Informações</a>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Settings_Widgets"
}
</script>

<style scoped>

</style>
