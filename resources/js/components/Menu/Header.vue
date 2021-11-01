<template>
    <header style="z-index: 3" class="header">

        <div class="header-actions">
            <div class="header-brand">
                <h1 class="header-brand-text">EDParque</h1>
            </div>
        </div>

        <div class="header-actions">
            <div class="sidemenu-trigger navigation-widget-trigger">
                <svg class="icon-grid">
                    <use xlink:href="#svg-grid"></use>
                </svg>
            </div>

            <div class="mobilemenu-trigger navigation-widget-mobile-trigger">
                <!-- BURGER ICON -->
                <div class="burger-icon inverted">
                    <!-- BURGER ICON BAR -->
                    <div class="burger-icon-bar"></div>
                    <!-- /BURGER ICON BAR -->

                    <!-- BURGER ICON BAR -->
                    <div class="burger-icon-bar"></div>
                    <!-- /BURGER ICON BAR -->

                    <!-- BURGER ICON BAR -->
                    <div class="burger-icon-bar"></div>
                    <!-- /BURGER ICON BAR -->
                </div>
            </div>

            <nav class="navigation">
                <ul class="menu-main">
                    <li class="menu-main-item">
                        <a class="menu-main-item-link" href="#">Home</a>
                    </li>

                    <li class="menu-main-item">
                        <a class="menu-main-item-link" href="#">Convites</a>
                    </li>

                    <li class="menu-main-item">
                        <a class="menu-main-item-link" href="#">Grupos</a>
                    </li>

                </ul>
            </nav>
        </div>

        <div class="header-actions search-bar" style="position: relative;">
            <div class="interactive-input dark">
                <input type="text" id="search-main" name="search_main" placeholder="Procura os teus amigos ou as tuas disciplinas">
                <div class="interactive-input-icon-wrap">
                    <svg class="interactive-input-icon icon-magnifying-glass">
                        <use xlink:href="#svg-magnifying-glass"></use>
                    </svg>
                </div>

                <div class="interactive-input-action">
                    <svg class="interactive-input-action-icon icon-cross-thin">
                        <use xlink:href="#svg-cross-thin"></use>
                    </svg>
                </div>
            </div>
        </div>

        <div class="header-actions">

        </div>

        <div class="header-actions">

            <div class="action-list dark">
                <div class="action-list-item-wrap" style="position: relative;">
                    <div class="action-list-item header-dropdown-trigger">
                        <svg class="action-list-item-icon icon-shopping-bag">
                        </svg>

                    </div>
                </div>

                <div class="action-list-item-wrap" style="position: relative;">
                    <div class="action-list-item header-dropdown-trigger">
                        <svg class="action-list-item-icon icon-friend">
                            <use xlink:href="#svg-friend"></use>
                        </svg>
                    </div>
                </div>

                <div class="action-list-item-wrap" style="position: relative;">
                    <div class="action-list-item header-dropdown-trigger">
                        <svg class="action-list-item-icon icon-messages">
                            <use xlink:href="#svg-messages"></use>
                        </svg>
                    </div>
                </div>

                <div class="action-list-item-wrap" style="position: relative;">

                    <div class="action-list-item unread header-dropdown-trigger active">
                        <svg class="action-list-item-icon icon-notification">
                            <use xlink:href="#svg-notification"></use>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="action-item-wrap" style="position: relative;">

                <div class="action-item dark header-settings-dropdown-trigger">
                    <svg class="action-item-icon icon-settings">
                        <use xlink:href="#svg-settings"></use>
                    </svg>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped>

</style>
