  <template>  
  <div>
    <h2>Escogiendo mujer aleatoriamente</h2>
    <img id="fotoRuleta" class="rounded mx-auto d-block border border-dark " width="500px" height="500px" src="">
  </div>
</template>
<script>
    export default {
        mounted() {
            let scriptMujeres = document.createElement('script');
            console.log(window.location.protocol);
            scriptMujeres.setAttribute('src',window.location.protocol + '/js/ruletaMujeres.js');
            document.head.appendChild(scriptMujeres);
        }
    }
</script>