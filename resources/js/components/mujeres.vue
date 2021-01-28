<template>
    <div class="container-fluid">

        <div class="row">

            <aside class="col-sm-4 col-md-4 col-lg-2 text-white text-center">

                <form class="form-inline active-purple-4 mt-3 mb-3 ml-2">
                    <input class="form-control form-control-sm mr-2 w-75" type="search" v-model="busqueda" placeholder="Buscar..">
                    <i class="fa fa-search"></i>
                </form>
                <div v-bind:style="{ color: activeColor}">es una prueba de color</div>

                <div v-for="especialidad in arrayespecialidades" :key="especialidad.id">
                    <button  v-bind:style="{ color: especialidad.color }" class="w-100 m-1" @click="filtrarMujeres"> {{  especialidad.Nombre }}</button>
                </div>
            
        
            </aside>
            <!-- <input type="search" v-model="busqueda" placeholder="Buscar">
            <p v-for="mujer in buscarMujer">
                {{ mujer.nombre }}
            </p> -->

            <main class="col-sm-8 col-md-8 col-lg-10 d-flex flex-row flex-wrap text-center">
                <div v-for="mujer in buscarMujer" class="m-2 bg-dark">
                    <img v-bind:src="'assets/Fotos_mujeres/' + mujer.foto" />
                    <p class="m-2 text-light"> {{  mujer.foto }}</p>
                    <p class="m-2 text-light"> {{mujer.nombre}} </p>
                    <p class="m-2 text-light">{{mujer.Nombre}}</p>
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
                activeColor: 'red'
            };
        },
        methods:{
            cargarMujeres() {
                let me = this;
                let url = "mujeres/info";
                axios
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
                axios
                    .get(url)
                    .then(function (response) {
                    me.arrayespecialidades = response.data;
                    })
                    .catch(function (error) {
                    console.log(error);
                    });
            },
            filtrarMujeres() {
                // this, hace referencia a la instancia Vue
                alert("arrayespecialidades.Nombre");
            }
        },
        computed: {
            buscarMujer() {
                return this.arraymujeres.filter((mujer) => mujer.nombre.toUpperCase().includes(this.busqueda.toUpperCase()));
            }
        },
        mounted() {
           this.cargarMujeres();
           this.cargarEspecialidades();
        }
    }
</script>