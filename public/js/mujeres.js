// Vue 2
const vm = new Vue({
    el: '#app',
    methods: {
        agregarFruta() {
            // this, hace referencia a la instancia Vue
            this.frutas.push({nombre:this.nuevaFruta, stock:0});
            this.nuevaFruta = null;
        },
        eliminarMujer(){
            var valor=document.getElementById("especialidad").value;
           alert(valor);
        }
    }
});
