  <template>  
  <div>
    <h2>Escogiendo mujer aleatoriamente</h2>
    <img id="fotoRuleta" class="rounded mx-auto d-block border border-dark " width="500px" height="500px" src="">
  </div>
</template>
<script>
    import ruletaActivar from  '../ruletaMujeres.js';
    export default {
        beforeMount(){
            window.axios.get(window.location.protocol+"//"+window.location.host+"/api/Mujeres/{id}/{juego}",)
          .then((response)=>{
            this.preguntas.push(response.data);
          })
          .catch((error)=>{

          });
        },
        mounted() {
            ruletaActivar();
      /*       let scriptMujeres = document.createElement('script');
            console.log(window.location.protocol);
            scriptMujeres.setAttribute('src',window.location.protocol + '/js/ruletaMujeres.js');
            document.head.appendChild(scriptMujeres); */
        }
    }
</script>