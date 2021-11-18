/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
window.moment = require('vue-moment');
window.axios = require('axios');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


//Definições
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('settings-options', require('./components/SettingsMenu/Settings_Options.vue').default);
Vue.component('settings-detalhes', require('./components/SettingsMenu/Settings_Detalhes.vue').default);
Vue.component('settings-perfil', require('./components/SettingsMenu/Settings_Perfil.vue').default);
Vue.component('settings-notificacoes', require('./components/SettingsMenu/Settings_Notificacoes.vue').default);
Vue.component('settings-widgets', require('./components/SettingsMenu/Settings_Widgets.vue').default);
Vue.component('settings-seguranca', require('./components/SettingsMenu/Settings_Dispositivos.vue').default);


Vue.component('student-card', require('./components/Students/StudentCard.vue').default);

//Menus
Vue.component('left-side-menu', require('./components/Menu/LeftSideMenu.vue').default);
Vue.component('left-expanded-side-menu', require('./components/Menu/Expanded/LeftExpandedSideMenu.vue').default);
Vue.component('right-side-menu', require('./components/Menu/RightSideMenu.vue').default);
Vue.component('right-expanded-side-menu', require('./components/Menu/Expanded/RightExpandedSideMenu.vue').default);
Vue.component('header-menu', require('./components/Menu/Header.vue').default);

Vue.component('calendar-widget', require('./components/User/CalendarWidget.vue').default);
Vue.component('about-me-widget', require('./components/User/AboutMeWidget.vue').default);
Vue.component('friends-widget', require('./components/User/FriendsWidget.vue').default);
Vue.component('profile-completion-widget', require('./components/User/ProfileCompletionWidget.vue').default);
Vue.component('school-widget', require('./components/User/SchoolWorkWidget.vue').default);

//Weather
Vue.component('weather-app', require('./components/Weather/WeatherApp.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
