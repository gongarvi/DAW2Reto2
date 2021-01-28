<template>
    <div id="millonario">
        <div id="juego" v-if="!fin">
            <Pregunta ref="pregunta" v-if="preguntas!=null && preguntas.length>0" :pregunta="preguntas[respondidas].pregunta" :respuestas="preguntas[respondidas].respuestas"/>
            <div id="ayudas" class="text-center m-5">
                <button id="50" class="btn btn-info mx-4" @click="botonAyuda50" :disabled="ayudaMitad">
                    <span>50/50</span>
                </button>
                <button id="publico" class="btn btn-info mx-4" @click="botonAyudaPublico" :disabled="publico">
                    <span>Publico</span>
                </button>
            </div>
        </div>
      <div class="final w-100" v-if="fin">
        <h2 class="w-100 text-center m-2 p-5">
          Has conseguido responder correctamente un total de {{acertadas}} de {{preguntas.length}} preguntas.
        </h2>
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
      mujeres:[],
      preguntas:[],
      especializacion:1,
      ayudaMitad:false,
      publico:false,
      fin:false,
      acertadas:0,
      respondidas:0
    }
  },
   beforeMount() {
      this.mujeres = JSON.parse(localStorage.getItem("mujeres"));
      if(this.mujeres!=null){
          this.mujeres.forEach(mujer=>{
              window.axios.get(window.location.protocol+"//"+window.location.host+"/api/preguntas/"+mujer.id)
                  .then((response)=>{
                      this.preguntas.push(response.data);
                  })
                  .catch((error)=>{

                  });
          });
      }

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
      if(this.respondidas>=this.preguntas.length){
          console.log("entra");
        this.finalizar();
      }
    },
    reiniciar(){
      this.respondidas==0;
    },
    finalizar(){
        this.fin=true;
    },
    botonAyudaPublico(){
      if(!this.ayudaPublico){
        this.publico=true;
        this.$children[0].ayudaPublico();
      }
    },
    botonAyuda50(){
      if(!this.ayudaMitad){
        this.ayudaMitad=true;
        this.$children[0].ayuda50();
      }
    }
  }
}
</script>
<style scoped>
#millonario {
    background-color: rgb(0, 2, 99);
}
  .final{
      color:white;
      margin: auto;
  }
</style>

