<template>
    <div class="container-fluid">

        <div class="row">

            <aside class="col-sm-4 col-md-4 col-lg-2 text-white text-center">

                <div class="make-me-sticky mt-2">
                    
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 amber-border" type="search" v-model="busqueda"  placeholder="Buscar.." aria-label="Buscar">
                        <div class="input-group-append">
                            <span class="input-group-text amber lighten-3" id="basic-text1"><i class="fa fa-search text-grey"
                                aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div v-for="especialidad in arrayespecialidades" :key="especialidad.id" >
                        <button v-bind:style="{ backgroundColor: especialidad.color }" class="btn w-100 mt-2" @click="filtrarMujeres(especialidad.nombre)"> {{  especialidad.nombre }}</button>
                    </div>

                </div>
               
            </aside>
            <main class="col-sm-8 col-md-8 col-lg-10 d-flex flex-wrap">

                <div class="card m-2" style="width: 18rem;" v-for="mujer in buscarMujer" :key="mujer.id" v-bind:style="{ backgroundColor: mujer.especialidad.color }" @click="MostrarMujer(mujer.nombre, mujer.apellidos,mujer.nacimiento, mujer.fallecido, mujer.nacionalidad, mujer.especialidad.nombre, mujer.descripcion)" data-toggle="modal" data-target="#myModal" title="Saber mas.">
                    <img class="card-img-top img-mujeres" style="height: 18rem;" alt="foto" v-bind:src="'assets/Fotos_mujeres/' + mujer.foto" />
                    <div class="card-body">
                        <h3 class="card-title">{{mujer.nombre}}</h3>
                        <p class="card-text">{{mujer.apellidos}}</p>
                    </div>
                </div>

                 <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content text-dark">
                            <div class="modal-header">
                            <h4 class="modal-title"></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p id="vida-mujer"></p>
                                <p id="nacionalidad-mujer"></p>
                                <p id="especialidad-mujer"></p>
                                <p id="descripcion-mujer"></p>
                            </div>
                        </div>
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
                alert(especialdidad);
                buscarMujer(especialdidad);
            },
            MostrarMujer(nombre, apellidos, nacimiento, fallecido, nacionalidad, especialidad, descripcion){
                document.getElementsByClassName("modal-title")[0].innerHTML=nombre+" "+apellidos;
                document.getElementById("vida-mujer").innerHTML=nacimiento+" - "+fallecido;
                document.getElementById("nacionalidad-mujer").innerHTML="<b>Nacionalidad:</b> "+nacionalidad;
                document.getElementById("especialidad-mujer").innerHTML="<b>Especialidad:</b> "+especialidad;
                document.getElementById("descripcion-mujer").innerHTML="<b>Descripcion:</b> "+descripcion;
            }
        },
        computed: {
            buscarMujer(especialdidad) {
                // alert(especialdidad);
                // if(this.especialdidad==""){
                // return this.arraymujeres.filter((mujer) => mujer.nombre.toUpperCase().includes(this.busqueda.toUpperCase() && mujer.especialdidad.nombre==this.especialdidad));
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
    .make-me-sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0; 
        padding: 0 0px;
    }
    .card{
        transition: all 1s;
    }
    .card:hover{
        box-shadow: 2px 2px 5px 5px #808080;
    }
    .img-mujeres{
        -webkit-box-shadow: 0 8px 6px -6px black;
	    -moz-box-shadow: 0 8px 6px -6px black;
	    box-shadow: 0 8px 6px -6px black;

    }
</style>