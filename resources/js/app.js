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


Vue.component('mujeres-component', require('./components/Mujeres.vue').default);
Vue.component('millonario', require('./components/Millonario').default);
Vue.component('pregunta', require('./components/Pregunta').default);
Vue.component('respuesta', require('./components/Respuesta').default);
Vue.component('ruleta', require('./components/Ruleta').default);
Vue.component('buscaminas', require('./components/App').default);
Vue.component('tablero', require('./components/Tablero').default);
Vue.component('cuadro', require('./components/Cuadro').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    methods: {
        checkImages(event) {
            console.log(event);
            event.target.src = "image/placeholder.png"
        },
        pulsarboton: function(nombreJuego){
            var Especialidad = document.getElementById("selectEspecialidad").value;
            window.location.href = '/juegos/ruleta/'+Especialidad+"/"+nombreJuego;
        },
    },
});
