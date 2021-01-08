<template>
    <div class="container-fluid">

        <div class="row">

            <aside class="col-sm-4 col-md-4 col-lg-2 text-white text-center">

                <form class="form-inline active-purple-4 mt-3 mb-3 ml-2">
                    <input class="form-control form-control-sm mr-2 w-75" type="search" v-model="busqueda" placeholder="Buscar..">
                    <i class="fa fa-search"></i>
                </form>

                <div v-for="especialidad in arrayespecialidades" :key="especialidad.id">
                    <button v-bind:style="{ backgroundColor: especialidad.color }" class="btn w-100 m-1" @click="filtrarMujeres(especialdidad.nombre)"> {{  especialidad.nombre }}</button>
                </div>
            
        
            </aside>
            <main class="col-sm-8 col-md-8 col-lg-10 d-flex flex-wrap text-center">
                <div class="card m-2" style="width: 18rem;" v-for="mujer in buscarMujer" :key="mujer.id" v-bind:style="{ backgroundColor: mujer.especialidad.color }">
                    <img class="card-img-top" style="height: 18rem;" alt="Card image cap" v-bind:src="'assets/Fotos_mujeres/' + mujer.foto" />
                    <div class="card-body">
                        <h5 class="card-title">{{mujer.nombre}}</h5>
                        <p class="card-text">{{mujer.apellidos}}</p>
                        <button @click="MostrarMujer(mujer.id)" class="btn btn-primary">Saber mas</button>
                    </div>
                </div>
                <div id="contenedor-mensaje-victoria" class="ocultar-mensaje">
                <div id="mensaje-victoria">
                    <h3>Felicidades!!!</h3>
                    <h4>Has completado el nivel</h4>
                    <img src="img/felicitar.gif">
                    <a href="#">Seguir Jugando</a>
                </div>   
            </div>
            </main>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                busqueda: '',
                nombre: '',
                arraymujeres:[],
                arrayespecialidades:[],
                especialidadSeleccionada:""
            };
        },
        methods:{
            cargarMujeres() {
                let me = this;
                let url = "mujeres/info";
                window.axios
                    .get(url)
                    .then(function (response) {
                    me.arraymujeres = response.data;
                    })
                    .catch(function (error) {
                    console.log(error);
                    });
            },
            cargarEspecialidades() {
                let me = this;
                let url = "especialidades/info";
                window.axios
                    .get(url)
                    .then(function (response) {
                    me.arrayespecialidades = response.data;
                    })
                    .catch(function (error) {
                    console.log(error);
                    });
            },
            filtrarMujeres(especialdidad) {
                // this, hace referencia a la instancia Vue
                especialidadSeleccionada=especialdidad;
            },
            MostrarMujer(idMujer){
                // alert(idMujer);
                var mensaje = document.querySelector("#contenedor-mensaje-victoria");
                if(mensaje.classList.contains("ocultar-mensaje")){
                    mensaje.classList.remove("ocultar-mensaje");
                }
            }
        },
        computed: {
            buscarMujer(especialdidad) {
                // if(this.especialdidad!=""){
                //     return this.arraymujeres.filter((mujer) => mujer.nombre.toUpperCase().includes(this.busqueda.toUpperCase() && mujer.especialdidad.nombre==this.especialdidad));
                // }
                // else{
                    return this.arraymujeres.filter((mujer) => mujer.nombre.toUpperCase().includes(this.busqueda.toUpperCase()));
                // }
            }
        },
        mounted() {
           this.cargarMujeres();
           this.cargarEspecialidades();
        }
    }
</script>
<style>
    #mensaje-victoria{
        min-height: 400px; 
        background: white;
        top: 20%; 
        position: relative; 
        max-width: 600px; 
        margin: 0 auto;
        display: flex; 
        flex-direction: column; 
        justify-content: center; 
        align-items: center; 
        border-radius: 20px; 
        border: 1px solid purple;
        background-color: darkgrey; 
    }
    .ocultar-mensaje{
        display: none;
    }
    #contenedor-mensaje-victoria{
        position: fixed; 
        top: 0; 
        bottom: 0;
        left: 0;
        right: 0; 
        background: #000000ad;} 
</style>