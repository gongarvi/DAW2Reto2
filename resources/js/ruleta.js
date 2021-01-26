window.Vue = require('vue');

Vue.component('ruleta', require('./components/Ruleta').default);

const app = new Vue({
    el: '#ruleta',
    methods: {
    },
});
