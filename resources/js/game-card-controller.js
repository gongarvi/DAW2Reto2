const vue=new Vue({
    el:"#game-cards-controller",
    methods: {
        checkImages(event) {
            console.log(event);
            event.target.src = "image/placeholder.png"
        },
        pulsarboton: function(nombreJuego){
            var Especialidad = document.getElementById("selectEspecialidad").value;
            window.location.href = '/DAW2Reto2/public/juegos/ruleta/'+Especialidad+"/"+nombreJuego;
        },      
    },
});