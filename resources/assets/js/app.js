
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('prop-component', require('./components/PropComponent.vue'));
Vue.component('ajax-component', require('./components/AjaxComponent.vue'));
Vue.component('chartline-component', require('./components/ChartlineComponent.vue'));
Vue.component('chartpie-component', require('./components/ChartpieComponent.vue'));
Vue.component('chartrandom-component', require('./components/ChartrandomComponent.vue'));
Vue.component('testtable-component', require('./components/TesttableComponent.vue'));
Vue.component('search-component', require('./components/SearchComponent.vue'));
Vue.component('socket-component', require('./components/SocketComponent.vue'));
Vue.component('generalchat-component', require('./components/GeneralchatComponent.vue'));
Vue.component('privatechat-component', require('./components/PrivatechatComponent.vue'));

const app = new Vue({
    el: '#app'
});
