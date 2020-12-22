<template>
    <div @click="responder" class="col-12 col-lg-6 w-100 mb-2 p-1" :class="{'disabled': isDisabled}">
        <button class="btn w-100">
            {{respuesta}}
        </button>
    </div>
</template>
<script>
export default {
    name: 'Respuesta',
    data(){
        return{
            isDisabled:false,
            interval:null   
        }        
    },
    props: {
        respuesta:String,
        correcta:Boolean
    },
    methods:{
        responder(){
            this.$parent.$data.respondido=true;
            this.$parent.$data.acertado=this.correcta;
            if(!this.isDisabled){
                //Obtener el elemento seleccionado
                var element=this.$el;
                this.isDisabled = true;
                var colorBase = getComputedStyle(element).backgroundColor;
                this.interval=setInterval(()=>{
                    if(element.style.backgroundColor==colorBase){
                        element.style.backgroundColor="#ffc800";
                    }else{
                        element.style.backgroundColor=colorBase;
                    }
                },500);
            }
        },
        corregir(){
            var element=this.$el;
            var classes=element.className;
            if(this.interval!=null){
                clearInterval(this.interval);
            }
            element.style.backgroundColor=null;
            if(this.correcta){
                element.className=classes+" correcto";
            }else{
                element.className=classes+" incorrecto";
            }
        },
        reiniciar(){
            this.isDisabled=false;
        },
        bloquear(){
            this.isDisabled=true;
        }
    }
}
</script>
<style scoped>

button{
    background-color: rgb(31, 54, 185);
    color:white;
    font-size: 1.5em;
}
.correcto{
    background-color: greenyellow;
}
.incorrecto{
    background-color: rgb(255, 59, 59);
}
.publico{
    border: 2px solid yellow;
}
</style>