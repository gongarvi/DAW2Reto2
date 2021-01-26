
window.Vue = require('vue');


const vue = new Vue({
    el: '#formulario',
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
    computed:{
        hola(){
            console.log("hola")
        }
    }
});
