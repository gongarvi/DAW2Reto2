<template>
    <div id="millonario">
      <div id="juego">
        <Pregunta :pregunta="preguntas[respondidas].pregunta" :respuestas="preguntas[respondidas].respuestas" v-ref:preguntas/>
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
      preguntas:[{}],
      respondidas:0,
      ayudaMitad:false,
      publico:false,
      acertadas:0,
      fin:false
    }
  },
  methods:{
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
  .final{
    display: none;
    margin: auto;
  }
</style>

