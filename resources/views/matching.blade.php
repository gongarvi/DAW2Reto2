@extends("layouts.page")

@section("head-extras")
   
    <link rel="stylesheet" href="{{asset("css/mujeres.css")}}">
    <link rel="stylesheet" href="{{asset("css/matching.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   
    @endsection

@section("content")

<h1>DESAYUNOS FEMINISTAS </h1>
<h2>Juego del Matching</h2>


    <div class="puntos">
        <img src="..\image/logo.png" height="30">
        <img src="..\image\logo.png" height="30">
        <img src="..\image\logo.png" height="30">
        <img src="..\image\logo.png" height="30">
                    
    </div>
    <div class="contenedor">
                
    </div>
    <div id="contenedor-mensaje-victoria" class="ocultar-mensaje">
        <div id="mensaje-victoria">
            <h3>Felicidades!!!</h3>
            <h4>Has completado el nivel</h4>
            <img src="..\image\felicitar.gif">
            <a href="#">Seguir Jugando</a>
        </div>   
    </div>

    <div id="contenedor-mensaje-derrota" class="ocultar-mensaje">
        <div id="mensaje-derrota">
            <h3>Lo sentimos!!!</h3>
            <h4>No has podido completar el nivel, pero Ánimo</h4>
            <button class="btn">Otra partida</button>
        </div>   
    </div>

@endsection
<script>
    var mujercitas;
    mujercitas = <?php echo(json_encode($mujeres))?>

    var nombres = [];
    var fotos = [];
    for(i=0; i<mujercitas.length; i++){
        //document.write(mujercitas[i].nombre);
        nombres.push(mujercitas[i].nombre);
        fotos.push(mujercitas[i].foto);
    } 
    
    //Parte del Juego
 var juego = (function(){
    
   
    //Array completo de animales
       // animales = ['gato.jpg','oveja.jpg','pato.jpg','perro.png','vaca.jpg','caballo.jpg'];
    //Array completo de los nombres de los animales
        //nombres = ['gato','oveja','pato','perro','vaca','caballo'];
    //Numero de elementos del array de animales
    numElementosAnimales = nombres.length-1;
    
    //Declaro nuevos array vacios con los que voy a trabajar
    imagenes = new Array();
    arraydescripcion = new Array();
    arraynombres = new Array();
    do{
        index = Math.floor(Math.random() * (numElementosAnimales-0+1)) + 0;
        //Lleno los array pero antes compruebo si todavia no tienen elementos
        if(imagenes.indexOf(fotos[index])==-1){
            
            imagenes.push(fotos[index]);
            arraynombres.push(nombres[index]);
            arraydescripcion.push(nombres[index]);
        }
    }
    while(imagenes.length<3)
    
    var vidas = 4,
    lista1,lista2;
        
    //Funcion para crear las cartas
    crearCartas = function(){
        try{

            var contenedor = document.querySelector(".contenedor");
            var item_html = '<div class="item" onclick="juego.clic(this)" data-baraja="{baraja}" data-indice="{indice}"></div>';
          
            lista1 = distribuirCartas(arraynombres);
            lista2 = (imagenes);

            var cartas_html = "";
            for(var i = 0; i<arraynombres.length; i++){
                //aqui creamos las cartas ocultas y sustituimos sus indices con los nombres de los animales
                cartas_html += item_html.replace("{baraja}", 1).replace("{indice}",lista1[i]);
            }
            for(x = 0; x < imagenes.length; x++){
                //aqui creamos las cartas con fotos de los animales e indices sus nombres
                var item_html = '<img class="item" onclick="juego.clic(this)" data-baraja="{baraja}" data-indice="{indice}" src="../image/'+imagenes[x]+'" >';
                cartas_html += item_html.replace("{baraja}", 2).replace("{indice}",arraydescripcion[x]);
            }
            contenedor.innerHTML = cartas_html;
             
        }catch(error){
            console.log(error);
        }
    },
    //Funcion para ejecutar la accion por cada click que hacemos
    clic = function(element){
        try{

            var cartas_activas = document.querySelectorAll(".sin-fondo-item");
           
            if(cartas_activas.length == 2){
                for(var i = 0; i < cartas_activas.length; i++){
                    cartas_activas[i].classList.remove("sin-fondo-item");
                    cartas_activas[i].innerHTML = "";
                }
                restarVidas();
            }

            if(cartas_activas.length == 1){
               if(cartas_activas[0].dataset.indice == element.dataset.indice 
                && cartas_activas[0].dataset.baraja != element.dataset.baraja ){
                
                    element.innerHTML = "<span class='numero-carta'></span>"; 
                cartas_activas[0].classList.remove("sin-fondo-item");
                cartas_activas[0].classList.add("checked-item");
                element.classList.add("checked-item");
               }
               else{
                    element.classList.add("sin-fondo-item");
                    element.innerHTML = "<span class='numero-carta'>" + element.dataset.indice + "</span>";
               }
            }else{
                element.classList.add("sin-fondo-item");
                element.innerHTML = "<span class='numero-carta'>" + element.dataset.indice  + "</span>";
                   
            }
                //Si todas cartas estan verificadas, nos saca el mensaje de victoria
            if( document.querySelectorAll(".checked-item").length == (arraynombres.length)*2 ){
                    var mensaje = document.querySelector("#contenedor-mensaje-victoria");
                if(mensaje.classList.contains("ocultar-mensaje")){
                    mensaje.classList.remove("ocultar-mensaje");
                }
            
            }


        }catch(error){
            console.log(error);
        }
    },
    //funcion para restar las vidas por cada fallo que cometemos
    restarVidas = function(){
        try{
            if(vidas == 1){
                alert("Has sido eliminado");
                var mensaje = document.querySelector("#contenedor-mensaje-derrota");
               if(mensaje.classList.contains("ocultar-mensaje")){
                    mensaje.classList.remove("ocultar-mensaje");
               }
            }
            document.querySelector(".puntos").querySelectorAll("img")[0].remove();
            --vidas;

        }catch(error){
            console.log(error);
        }
    }
    //Funcion para repartir las cartas aleatoriamente
    distribuirCartas = function(arr) {
        try{
             var i,j, temp;
             for(i = arr.length - 1; i > 0; i--){
                 j = Math.floor(Math.random() * (i + 1));
                 temp = arr[i];
                 arr[i] = arr[j];
                 arr[j] = temp;
             }
             return new Array().concat(arr);
        }catch(error){
             console.log(error);
        }
     },
    
    init = function(){
        try{
            
            crearCartas();
            var botones = document.querySelectorAll(".btn");
            for(var i = 0; i<botones.length; i++){
                botones[i].addEventListener('click', function(){
                    location.reload(true);
                },false)
            }
        }
        catch(error){
            console.log(error);
        }
    };

    return{
        init: init,
        clic: clic
    }
})();
window.onload = juego.init(); 
</script>
<script src="{{ asset('js/match.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>

