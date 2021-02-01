
require("./bootstrap.js");


window.Vue = require('vue');


const vue = new Vue({
    el: '#formulario',
    data:{
        email_regex:/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
        password_regex: "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"
    },
    methods: {
        actualizarDatosPerfil(event){
            let name=$(event.target).find("input[name=name]").val();
            let email=$(event.target).find("input[name=email]").val();
            let password=$(event.target).find("input[name=password]").val();
            if(password==="" && !(password_regex.match(password)) && email==="" && this.email_regex.test(email) && name===""){
                event.preventDefault();
            }
        },
        actualizarPassword(event){
            let password_actual=$(event.target).find("input[name=password]").val();
            let password_nueva=$(event.target).find("input[name=password]").val();
            let repassword=$(event.target).find("input[name=password]").val();

            if(this.password_regex.match(password_nueva) && password_nueva===repassword && password_nueva!=="" && password_actual!==""){
                event.preventDefault();
            }
        }
    },
    computed:{

    }
});
