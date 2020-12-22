<template>
    <div id="millonario">
        <Pregunta :pregunta="preguntas[respondidas].pregunta" :respuestas="preguntas[respondidas].respuestas"/>
        <div id="ayudas">
          <button id="50" class="btn btn-info m-auto">
            <span>50/50</span>
          </button>
          <button id="publico" class="btn btn-info m-5">
            <span>Publico</span>
          </button>
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
      preguntas:[
        {
          pregunta:"¿Que novel ha conseguidio?",
          respuestas:
            [
              {
                respuesta:"matemicas",
                correcta:true
              },
              {
                respuesta:"paz",
                correcta:false
              },
              {
                respuesta:"guerra",
                correcta:false
              },
              {
                respuesta:"literaturas",
                correcta:false
              }
            ]
        },
        {
          pregunta:"¿Cuantos años tiene?",
          respuestas:
            [
              {
                respuesta:"25",
                correcta:true
              },
              {
                respuesta:"48",
                correcta:false
              },
              {
                respuesta:"55",
                correcta:false
              },
              {
                respuesta:"62",
                correcta:false
              }
            ]
        }
      ],
      respondidas:0,
      5050:false,
      public:false
    }
  },
  methods:{
    siguientePregunta(acertada){
      if(acertada){
        this.respondidas++;
        if(this.respondidas==this.preguntas.length){
          this.finalizar();
        }
      }else{
        this.reiniciar()
      }
    },
    reiniciar(){
      this.respondidas==0;
    },
    finalizar(){
      //TODO Hacer la finalizacion del Millonario
    }
  }
}
</script>

