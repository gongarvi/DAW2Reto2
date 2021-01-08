<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
  
    <div class="contenedor">
        
    </div>
</template>

<script>
    export default {
       data(){
           return {
               mujeres:[]
           }
       },
       methods:{
           carga(){
               let me = this;
               let url = "mujeres.info";
               axios
                    .get(url)
                    .then(function(response){
                        me.mujeres = response.data;
                    })
                    .catch(function (error){
                        console.log(error);
                    });
           }
       },
       mounted(){
           this.carga();
       }
    }
</script>
