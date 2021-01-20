require('./bootstrap');
window.onload = function () {
    var intervaloTiempo = 10;
    var ejecutandose =1;
    var mujerSeleccionada;
    var procesoID = window.setInterval(funcionRuleta, intervaloTiempo);
    function funcionRuleta(){
        arraySoloIds = Object.keys(Mujer);
        mujerSeleccionada =  arraySoloIds[Math.floor(Math.random()*(arraySoloIds.length))];
        document.getElementById("fotoRuleta").src= "../../../assets/Fotos_mujeres/"+Mujer[mujerSeleccionada].foto;
        if(intervaloTiempo >500){
            clearInterval(procesoID);
            ejecutandose=0;
        }else{
            clearInterval(procesoID);
            intervaloTiempo =intervaloTiempo+30;
            procesoID = window.setInterval(funcionRuleta, intervaloTiempo);
        }
        if(ejecutandose ==0){
            $("#fotoRuleta").animate({left: "-=30%"}, 1000);
            const divDatos = document.createElement('div');
            divDatos.className="float-right w-50 bg-secondary text-white rounded";
            divDatos.innerHTML = '<h4>Nombre --> '+Mujer[mujerSeleccionada].nombre+' <br>'+
                               '<h4>Apellidos --> '+Mujer[mujerSeleccionada].apellidos+'</h4> <br>'+
                               '<h4>Nacionalidad-->'+Mujer[mujerSeleccionada].nacionalidad+'</h4> <br>'+
                               '<h4>Nacimiento --> '+Mujer[mujerSeleccionada].nacimiento+'</h4><br>'+
                               '<h4>Fallecimieto --> '+Mujer[mujerSeleccionada].fallecimiento+'</h4><br>'+
                               '<h4>Descripcion --> '+Mujer[mujerSeleccionada].descripcion+'</h4><br>';

                               numeroVueltas = parseInt(localStorage.getItem("vueltas"));
                               if((juego == "Puzzle" && isNaN(numeroVueltas)) || (juego=="Buscaminas" && numeroVueltas<=1) || (juego== "Matching" && numeroVueltas==5) ||
                                    (juego == "3 en raya" && numeroVueltas==2) || (juego=="Millonario" && numeroVueltas<=9)){
                                divDatos.innerHTML += '<button id="boton" class="bg-danger text-white">JUGAR</button>';
                               }else{
                                divDatos.innerHTML +='<button id="boton" class="bg-danger text-white"> SIGUIENTE </button>';
                               }

            document.body.appendChild(divDatos);
            function irAjuego(){
                var accion = document.getElementById("boton").innerHTML;
                if (accion != "JUGAR"){
                    var mujeresSeleccionadasJuego = JSON.parse(localStorage.getItem('mujeres')) ;
                    if(mujeresSeleccionadasJuego ==null){
                        mujeresSeleccionadasJuego = new Array();
                        mujeresSeleccionadasJuego.push(Mujer[mujerSeleccionada]);
                        localStorage.setItem("mujeres", JSON.stringify(mujeresSeleccionadasJuego));
                        localStorage.setItem("vueltas", 1);
                    }else {
                        mujeresSeleccionadasJuego.push(Mujer[mujerSeleccionada]);
                        localStorage.setItem("mujeres", JSON.stringify(mujeresSeleccionadasJuego));
                        numeroVueltas = parseInt(localStorage.getItem("vueltas"));
                        numeroVueltas += 1;
                        localStorage.setItem("vueltas",numeroVueltas);
                    }
                    location.reload();
                }else{
                    var mujeresSeleccionadasJuego = JSON.parse(localStorage.getItem('mujeres')) ;
                    if(mujeresSeleccionadasJuego ==null){
                        mujeresSeleccionadasJuego = new Array();
                    }
                    mujeresSeleccionadasJuego.push(Mujer[mujerSeleccionada]);
                    localStorage.setItem("mujeres", JSON.stringify(mujeresSeleccionadasJuego));
                    alert(mujeresSeleccionadasJuego[0]);
                    localStorage.removeItem("vueltas");
                }
            }
            document.getElementById("boton").addEventListener("click",irAjuego,true);
            //http://localhost/DAW2Reto2/public/juegos/ruleta/8
        }
    }
    function irAjuego(){
        aviso = document.getElementById("boton").value;
        alert(aviso);
    }
    document.getElementById("boton").addEventListener("click",irAjuego,true);

}
