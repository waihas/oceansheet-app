/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('welcome-navbar', require('./components/home/Navbar.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });


import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import i18n from '~/plugins/i18n'
import App from '~/components/App'
// import GoogleAPIs  from 'vue-googleapis'

import '~/plugins'
import '~/components'

Vue.config.productionTip = false

// Vue.use(GoogleAPIs, {
//   apiKey: 'AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw',
//   clientId: '727914357338-l3hhcebf48cfesv4r2733vpjia40l8ft.apps.googleusercontent.com',
//   discoveryDocs: ['https://content.googleapis.com/discovery/v1/apis/drive/v3/rest', 'https://sheets.googleapis.com/$discovery/rest?version=v4'],
//   scope: 'https://www.googleapis.com/auth/drive',
// })

/* eslint-disable no-new */
new Vue({
  i18n,
  store,
  router,
  ...App
})
