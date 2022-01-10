/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
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


//User
Vue.component('profile-header', require('./components/User/ProfileHeaderWidget.vue').default);



Vue.component('student-card', require('./components/Students/StudentCard.vue').default);
Vue.component('add-student', require('./components/Students/AddStudent.vue').default);

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
Vue.component('school-work-widget', require('./components/User/SchoolWorkWidget.vue').default);
Vue.component('group-widget', require('./components/Groups/GroupWidget.vue').default);

//Work
Vue.component('school-work-list-widget', require('./components/Work/WorkList.vue').default);
Vue.component('work-menu-widget', require('./components/Work/WorkMenu.vue').default);
Vue.component('work-create', require('./components/Work/Create.vue').default);


//OverView
Vue.component('profilestats-widget', require('./components/User/ProfileStatsWidget.vue').default);
Vue.component('slidestats-widget', require('./components/User/SlideStatsWidget.vue').default);
Vue.component('friendsmade-widget', require('./components/StatsBox/FriendsMadeWidget.vue').default);
Vue.component('postscreated-widget', require('./components/StatsBox/PostsCreatedWidget.vue').default);
Vue.component('profileviews-widget', require('./components/StatsBox/ProfileViewsWidget.vue').default);
Vue.component('gradesadded-widget', require('./components/StatsBox/GradesAddedWidget.vue').default);

//School
Vue.component('school-list', require('./components/School/SchoolList.vue').default);
Vue.component('school-info', require('./components/School/SchoolInfo.vue').default);
Vue.component('school-members', require('./components/School/Members.vue').default);
Vue.component('school-photos', require('./components/School/Photos.vue').default);


//Weather
Vue.component('weather-app', require('./components/Weather/WeatherApp.vue').default);

//Messenger
Vue.component('chat-app', require('./components/Chat/ChatApp.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
