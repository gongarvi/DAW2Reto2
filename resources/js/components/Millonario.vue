<template>
    <div id="millonario">
        <div id="principal" class="text-center p-5">
            <button id="aleatorio" class="btn btn-info" @click="preguntasAleatorias()">
                <span>Juego Aleatorio</span>
            </button>
            <select v-model="especializacion">
                <option
                    v-for="(especialidad,index) in especialidades"
                    :value="especialidad.id">
                    {{especialidad.nombre}}
                </option>
            </select>
            <button id="especializacion" class="btn btn-info" @click="preguntasEspecializacionAleatorias()">
                <span>Juego por especialización</span>
            </button>
        </div>
        <div id="juego" v-if="!hidden">
            <Pregunta :pregunta="preguntas[respondidas].pregunta" :respuestas="preguntas[respondidas].respuestas"/>
            <div id="ayudas" class="text-center m-5">
                <button id="50" class="btn btn-info mx-4" @click="botonAyuda50" :disabled="ayudaMitad">
                    <span>50/50</span>
                </button>
                <button id="publico" class="btn btn-info mx-4" @click="botonAyudaPublico" :disabled="publico">
                    <span>Publico</span>
                </button>
            </div>
        </div>
      <div class="final w-100" :class="{'fin':fin}">
        <p class="w-100 text-justify m-2">
          Has conseguido responder correctamente un total de {{acertadas}} de {{preguntas.length}} preguntas.
        </p>
      </div>
    </div>
</template>

<script>
import Pregunta from './Pregunta.vue'

export default {
  name: 'Millonario',
  components:{
    Pregunta
  },
  data(){
    return{
      hidden:true,
        preguntas:[{}],
      especializacion:1,
      especialidades:[{}],
      ayudaMitad:false,
      publico:false,
      acertadas:0,
      fin:false
    }
  },
   beforeMount() {
      window.axios.get(window.location.protocol+"//"+window.location.host+"/api/especialidades").then((response)=> {
        this.especialidades=response.data;
      }).catch((error)=>{
          console.log(error);
      });
   },

  methods:{
    preguntasAleatorias(){
        window.axios.get(window.location.protocol+"//"+window.location.host+"/api/preguntas").then((response)=> {
            this.data.preguntas=JSON.parse(response.data);
            console.log("entra");
        }).catch((error)=>{
            console.log(error);
        });
    },
    preguntasEspecializacionAleatorias(){
        window.axios.get(window.location.protocol+"//"+window.location.host+"/api/preguntas/"+this.especializacion)
        .then((response)=> {
            this.data.preguntas=JSON.parse(response.data);
            console.log("entra");
        }).catch((error)=>{
            console.log(error);
        });
    },
    siguientePregunta(acertada){
      this.respondidas++;
      if(acertada){
        this.acertadas++;
      }
      if(this.respondidas==this.preguntas.length){
        this.finalizar();
      }
    },
    reiniciar(){
      this.respondidas==0;
    },
    finalizar(){

    },
    botonAyudaPublico(){
      if(!this.ayudaPublico)
      {
        this.publico=true;
        this.$refs.preguntas.ayudaPublico();
      }
    },
    botonAyuda50(){
      if(!this.ayudaMitad){
        this.ayudaMitad=true;
        this$refs.preguntas.ayuda50();
      }
    }
  }
}
</script>
<style scoped>
#millonario{
    background-color: rgb(0, 2, 99);
}
  .final{
    display: none;
    margin: auto;
  }
</style>

