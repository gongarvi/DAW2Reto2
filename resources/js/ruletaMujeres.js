window.onload = function () {
    var intervaloTiempo = 10;
    var ejecutandose =1;
    var mujerSeleccionada;
    var procesoID = window.setInterval(funcionRuleta, intervaloTiempo);


    function funcionRuleta(){
        arraySoloIds = Object.keys(pepe);
        foto =  arraySoloIds[Math.floor(Math.random()*(arraySoloIds.length))];
        document.getElementById("fotoRuleta").src= "../../assets/Fotos_mujeres/"+pepe[foto].foto;
        if(intervaloTiempo >500){
            clearInterval(procesoID);
            ejecutandose=0;
        }else{
            clearInterval(procesoID);
            intervaloTiempo =intervaloTiempo+10;
            procesoID = window.setInterval(funcionRuleta, intervaloTiempo);
        }
        if(ejecutandose ==0){
            $("#fotoRuleta").animate({left: "-=30%"}, 1000);
            const divDatos = document.createElement('div');
            divDatos.className="float-right w-50 bg-secondary text-white rounded";
            divDatos.innerHTML = '<h4>Nombre --> '+pepe[foto].nombre+' <br>'+
                               '<h4>Apellidos --> '+pepe[foto].apellidos+'</h4> <br>'+
                               '<h4>Nacionalidad-->'+pepe[foto].nacionalidad+'</h4> <br>'+
                               '<h4>Nacimiento --> '+pepe[foto].nacimiento+'</h4><br>'+
                               '<h4>Fallecimieto --> '+pepe[foto].fallecimiento+'</h4><br>'+
                               '<h4>Descripcion --> '+pepe[foto].descripcion+'</h4><br>'+
                               '<button class="bg-danger text-white"> JUGAR</button>';
            document.body.appendChild(divDatos);
            //http://localhost/DAW2Reto2/public/juegos/ruleta/8
        }
    }
}
