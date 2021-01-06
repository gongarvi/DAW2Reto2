const vue=new Vue({
    el:"#game-cards-controller",
    methods: {
        checkImages(event) {
            console.log(event);
            event.target.src = "image/placeholder.png"
        },
        pulsarcarta(){
            var Especialidad = document.getElementById("selectEspecialidad").value;
            window.location.href = '/juegos/puzzle/'+Especialidad;
        },      
    },
});
