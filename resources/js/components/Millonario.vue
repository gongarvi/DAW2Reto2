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
                <button id="50" class="btn btn-info mx-4">
                    <span>50/50</span>
                </button>
                <button id="publico" class="btn btn-info mx-4">
                    <span>Publico</span>
                </button>
            </div>
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
      public:false,
      hidden:true,
      especializacion:1,
      especialidades:[{}]
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
        window.axios.get(window.location.protocol+"//"+window.location.host+"/api/preguntas",{
            params:{
                especializacion:this.especializacion
            }
        }
        ).then((response)=> {
            this.data.preguntas=JSON.parse(response.data);
            console.log("entra");
        }).catch((error)=>{
            console.log(error);
        });
    },
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
<style scoped>
#millonario{
    background-color: rgb(0, 2, 99);
}
</style>

