const vue=new Vue({
    el:"#game-cards-controller",
    methods: {
        checkImages(event) {
            console.log(event);
            event.target.src = "image/placeholder.png"
        },
        pulsarcarta(){
            var Especialidad = document.getElementById("selectEspecialidad").value;
            var nombreJuego=document.getElementById("nombreJuego").innerHTML;
            window.location.href = '/DAW2Reto2/public/juegos/ruleta/'+Especialidad+"/"+nombreJuego;
        },      
    },
});
