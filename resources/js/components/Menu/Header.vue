<template>
    <header style="z-index: 3" class="header">

        <div class="header-actions">
            <div class="header-brand">
                <h1 class="header-brand-text">EDParque</h1>
            </div>
        </div>

        <div class="header-actions">
            <div class="sidemenu-trigger navigation-widget-trigger" id="menu-button">
                <svg class="icon-grid">
                    <svg id="svg-grid" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
                        <path d="M7,0H2C0.896,0,0,0.895,0,2v5c0,1.104,0.896,2,2,2h5c1.104,0,2-0.896,2-2V2C9,0.895,8.104,0,7,0z M7,7H2V2h5V7z M7,11H2c-1.104,0-2,0.896-2,1.999v5C0,19.104,0.896,20,2,20h5c1.104,0,2-0.896,2-2.001v-5C9,11.896,8.104,11,7,11z M7,17.999H2v-5h5V17.999z M18,0h-5c-1.104,0-2,0.895-2,2v5c0,1.104,0.896,2,2,2h5c1.104,0,2-0.896,2-2V2C20,0.895,19.104,0,18,0z M18,7h-5V2h5V7z M18,11h-5c-1.104,0-2,0.896-2,1.999v5C11,19.104,11.896,20,13,20h5c1.104,0,2-0.896,2-2.001v-5C20,11.896,19.104,11,18,11z M18,17.999h-5v-5h5V17.999z"></path>
                    </svg>
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
                            <svg id="svg-messages" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
                                <path d="M12,2c1.103,0,2,0.897,2,2v5c0,1.103-0.897,2-2,2H8H7.754l-0.239,0.06L2,12.438V9V4c0-1.103,0.897-2,2-2H12M12,0H4C1.791,0,0,1.791,0,4v5v6l8-2h4c2.209,0,4-1.791,4-4V4C16,1.791,14.209,0,12,0L12,0z"></path>
                                <path d="M12,5.012C12,5.558,11.558,6,11.013,6H4.987C4.442,6,4,5.558,4,5.012V4.988C4,4.442,4.442,4,4.987,4h6.025C11.558,4,12,4.442,12,4.988V5.012z"></path>
                                <path d="M10,8.047C10,8.574,9.573,9,9.047,9H4.953C4.427,9,4,8.574,4,8.047V7.953C4,7.426,4.427,7,4.953,7h4.094C9.573,7,10,7.426,10,7.953V8.047z"></path>
                                <path d="M17,5.142v2.136C17.595,7.625,18,8.263,18,9v5v3.438l-5.516-1.379L12.246,16H12H8c-0.737,0-1.375-0.405-1.722-1H4.142C4.588,16.722,6.139,18,8,18h4l8,2v-6V9C20,7.139,18.722,5.588,17,5.142z"></path>
                            </svg>
                        </svg>
                    </div>
                </div>

                <div class="action-list-item-wrap" style="position: relative;">

                    <div class="action-list-item unread header-dropdown-trigger active">
                        <svg class="action-list-item-icon icon-notification" id="svg-notification" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
                            <path d="M18.583,14.127c-0.023-0.018-2.241-1.758-2.241-7.52C16.342,2.964,13.497,0,10.004,0C6.511,0,3.668,2.964,3.668,6.607c0,5.762-2.22,7.502-2.228,7.508c-0.365,0.254-0.525,0.725-0.397,1.158c0.129,0.434,0.517,0.73,0.957,0.73h16.007c0.433,0,0.81-0.293,0.943-0.719C19.086,14.861,18.932,14.389,18.583,14.127zM4.086,13.939C4.873,12.527,5.67,10.21,5.67,6.607c0-2.505,1.945-4.542,4.334-4.542c2.391,0,4.335,2.038,4.335,4.542c0,3.603,0.796,5.92,1.583,7.333H4.086z M12.418,17.146c-0.57-0.283-1.293-0.115-1.619,0.381c-0.126,0.191-0.327,0.326-0.567,0.383c-0.234,0.051-0.478,0.023-0.688-0.084c-0.138-0.07-0.255-0.174-0.336-0.297c-0.325-0.496-1.05-0.668-1.618-0.385c-0.568,0.283-0.766,0.914-0.44,1.408c0.286,0.438,0.7,0.803,1.194,1.055C8.854,19.867,9.421,20,9.997,20c0.281,0,0.564-0.031,0.843-0.096c0.856-0.197,1.573-0.676,2.016-1.348C13.182,18.061,12.984,17.432,12.418,17.146z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="action-item-wrap" style="position: relative;">

                <div class="action-item dark active" style="width: 80px; height: 80px;" id="Settings">
                    <svg class="action-item-icon icon-settings" id="svg-settings" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
                        <path d="M10,7c-1.657,0-3,1.343-3,3c0,1.655,1.343,2.999,3,2.999c1.656,0,3-1.344,3-2.999C13,8.343,11.656,7,10,7zM10,11c-0.552,0-1-0.449-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1C11,10.551,10.552,11,10,11z M17.363,12.638C18.817,12.638,20,11.453,20,10s-1.183-2.637-2.637-2.637h-0.135c-0.106,0-0.205-0.049-0.27-0.129 c-0.014-0.054-0.032-0.106-0.055-0.158c-0.059-0.132-0.031-0.283,0.111-0.429c0.498-0.499,0.772-1.161,0.772-1.865c0-0.704-0.274-1.367-0.773-1.865c-0.997-0.997-2.693-1.035-3.769,0.042c-0.102,0.1-0.24,0.135-0.397,0.066c-0.129-0.055-0.212-0.18-0.212-0.391C12.637,1.182,11.454,0,10,0S7.363,1.182,7.363,2.636v0.135c0,0.106-0.049,0.206-0.129,0.271C7.181,3.056,7.128,3.073,7.077,3.096c-0.128,0.058-0.264,0.052-0.43-0.113c-0.996-0.994-2.731-0.995-3.73,0.003c-1.026,1.028-1.025,2.701,0.044,3.77C3.062,6.858,3.089,7.01,3.007,7.2c-0.05,0.136-0.176,0.227-0.371,0.229C1.183,7.429,0,8.612,0,10.065c0,1.454,1.183,2.637,2.636,2.637h0.138c0.138,0,0.263,0.083,0.322,0.222c0.058,0.132,0.03,0.284-0.113,0.429c-0.497,0.498-0.771,1.161-0.771,1.865c0.001,0.705,0.276,1.367,0.773,1.863c0.996,0.996,2.689,1.038,3.771-0.042c0.101-0.099,0.142-0.173,0.443-0.046c0.136,0.049,0.226,0.176,0.229,0.37
                  c0,1.454,1.183,2.637,2.637,2.637s2.637-1.183,2.637-2.637v-0.137c0-0.139,0.083-0.263,0.222-0.322c0.129-0.058,0.263-0.051,0.428,0.112c0.999,0.995,2.735,0.996,3.73-0.002c0.498-0.499,0.771-1.162,0.771-1.866c-0.001-0.704-0.275-1.366-0.813-1.903c-0.101-0.104-0.129-0.256-0.064-0.398C17.029,12.72,17.154,12.638,17.363,12.638zM15.666,14.7c0.121,0.12,0.188,0.279,0.188,0.449s-0.067,0.33-0.188,0.453c-0.239,0.241-0.605,0.295-0.956-0.058c-0.677-0.662-1.742-0.845-2.582-0.475c-0.864,0.369-1.423,1.214-1.425,2.153v0.14c0,0.352-0.286,0.636-0.637,0.636s-0.637-0.284-0.637-0.733c-0.023-0.97-0.627-1.815-1.479-2.125C7.649,15.007,7.329,14.939,7,14.939c-0.618,0-1.202,0.238-1.7,0.728c-0.24,0.24-0.66,0.241-0.901-0.002c-0.248-0.246-0.248-0.65,0.058-0.957c0.675-0.69,0.859-1.709,0.474-2.58c-0.368-0.864-1.214-1.424-2.154-1.426h-0.14C2.285,10.702,2,10.416,2,10.065
                  s0.285-0.637,0.733-0.637c0.971-0.023,1.815-0.626,2.127-1.48c0.39-0.884,0.205-1.9-0.527-2.648C4.085,5.052,4.085,4.647,4.334,4.398c0.24-0.24,0.603-0.298,0.957,0.058C5.92,5.07,6.871,5.282,7.694,5c0.084-0.013,0.167-0.036,0.245-0.07c0.861-0.37,1.42-1.214,1.424-2.155v-0.14C9.363,2.285,9.649,2,10,2s0.637,0.285,0.637,0.712c0.002,0.937,0.561,1.782,1.414,2.148c0.865,0.38,1.884,0.222,2.649-0.527c0.241-0.24,0.656-0.243,0.901,0.001c0.12,0.12,0.187,0.279,0.187,0.449c0,0.169-0.066,0.331-0.242,0.507c-0.629,0.642-0.834,1.566-0.545,2.405
                  c0.013,0.083,0.035,0.165,0.069,0.244c0.369,0.862,1.213,1.421,2.154,1.425h0.139C17.715,9.364,18,9.649,18,10c0,0.351-0.285,0.637-0.712,0.637c-0.938,0.002-1.783,0.561-2.146,1.411C14.749,12.933,14.933,13.951,15.666,14.7z"></path>
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
