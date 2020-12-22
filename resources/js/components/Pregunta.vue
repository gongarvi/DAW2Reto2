<template>
    <div class="container pregunta p-5">
        <div class="row">
            <h3 class="w-100 text-center ">{{pregunta}}</h3>
        </div>
        <div class="row">
            <span class="w-100"></span>
        </div>
        <div class="row mt-5">
            <Respuesta v-for="(respuesta,index) in respuestas"
                :correcta="respuesta.correcta" :respuesta="respuesta.respuesta"
                v-bind:key="index"/>
        </div>
    </div>

</template>
<script>
import Respuesta from './Respuesta.vue'
export default {
  components: { Respuesta },
    name: 'Pregunta',
    props:{
        pregunta:String,
        respuestas:Array
    },
    data(){
        return{
            respondido:false,
            acertado:false
        }
    },
    watch:{
        respondido:function(){
            if(this.respondido){
                this.$children.forEach((respuesta)=>{
                    respuesta.bloquear();
                    setTimeout(()=>{respuesta.corregir()},4000);
                });
                setTimeout(()=>{
                    this.respondido=false;
                    this.$children.forEach((respuesta)=>{
                        respuesta.reiniciar();
                    });
                    this.$parent.siguientePregunta(this.acertado);
                },6500);
            }
        }
    }
}
</script>
<style scoped>
.pregunta{
    background-color: rgb(0, 2, 99);
}
h3{
    color: white;
}
.row>span{
    height: 2px;
    background-color: white;
}
</style>
