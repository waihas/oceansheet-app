/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue').default;

import store from '~/store-basic'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('welcome-navbar', require('./components/welcome/Navbar.vue').default);
Vue.component('basic-navbar', require('./components/welcome/SimpleNavbar.vue').default);
Vue.component('welcome-cookies', require('./components/welcome/Cookies.vue').default);
Vue.component('newsletter', require('./components/welcome/Newsletter.vue').default);
Vue.component('pricing', require('./components/welcome/Pricing.vue').default);
Vue.component('need-help-faq', require('./components/welcome/NeedHelpFAQ.vue').default);
Vue.component('excel-gsheet-steps', require('./components/welcome/ExcelGSheetSteps.vue').default);
Vue.component('filter-data-steps', require('./components/welcome/FilterDataSteps.vue').default);
Vue.component('many-to-one-steps', require('./components/welcome/ManyToOneSteps.vue').default);
Vue.component('one-to-many-steps', require('./components/welcome/OneToManySteps.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#main',
    store
});

