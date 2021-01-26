<template>
    <div @mousedown.right="bandera" @mousedown.left="activar" @contextmenu.prevent
    class="cuadro" :class="info.inicial ? 'cuadro-inicial':'cuadro-vacio'">
        <span :class="clase">{{ valor }}</span>
    </div>
</template>
<script>
export default {
    props:['info'],
    computed:{
        valor(){
            if(this.info.inicial){
                if(this.info.bandera){
                    return '🚩';
                }
                else{
                    return '';
                }
            }
            else{
                return this.info.valor;
            }
        },
        clase(){
            if(this.info.inicial){
                if(this.info.bandera){
                    return 'bandera';
                }
                else{
                    return '';
                }
            }
            else if(this.info.valor=='❌'){
                return 'bandera-falsa';
            }
            else{
                return this.info.claseValor;
            }
        }
    },
    methods:{
        bandera(){
            if(this.info.inicial){
                this.$emit('onCambiarMinasRestantes',this.info)
            }
        },
        activar(){
            this.$emit('onActivar', this.info)
        }
    }
}
</script>
<style >
.bandera{
    font-size: 12px;
}
.bandera-falsa{
    font-size: 18px;
}
.cuadro{
    display: grid;
    justify-items: center;
    align-items: center;
   
}
.cuadro-inicial{
    width: 25px;
    height: 25px;
    /*background-color: #bdbdbd;*/
    background-color: #595454;
   
    /*border-top: 3px solid #fff ;
    border-left: 3px solid #fff ;
    border-right: 3px solid #9b9b9b;
    border-bottom: 3px solid #9b9b9b;*/
    border: 1px solid gray;
    cursor: pointer;
}
.cuadro-vacio{
    width: 25px;
    height: 25px;
   /* background-color: #bdbdbd;*/
   /*border-right-color:  #7b7b7b;
    border-bottom-color:  #7b7b7b;
    border-top-width: 0;
    border-left-width: 0;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-style: solid;*/
    /*width: 20px;
    height: 20px;*/
    border: 1px solid gray;
    cursor: default;

}
</style>