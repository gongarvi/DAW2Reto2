/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// Introducción de bootstrap al proyecto
require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('mujeres-component', require('./components/mujeres.vue').default);
Vue.component('match-component', require('./components/Match.vue').default);
<<<<<<< HEAD
Vue.component('millonario', require('./components/Millonario').default);
Vue.component('pregunta', require('./components/Pregunta').default);
Vue.component('respuesta', require('./components/Respuesta').default);
=======
Vue.component('example2-component', require('./components/ExampleComponent2.vue').default);

>>>>>>> b3dfe378147a1cc786aa03b6d51582edc585c9e2
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
