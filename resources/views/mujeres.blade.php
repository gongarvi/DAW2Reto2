@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{asset("css/mujeres.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section("content")

<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
  <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
  </span>
</a>

<div id="app">
    <mujeres-component></mujeres-component>
</div>

    <script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
    <script src="../public/js/mujeres.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.min.js"></script>
    <script>
        $(document).ready(function(){ //Hacia arriba
            irArriba();
        });
        
        function irArriba(){
            $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
            $(window).scroll(function(){
            if($(this).scrollTop() > 0){ $('.ir-arriba').slideDown(600); }else{ $('.ir-arriba').slideUp(600); }
            });
            $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
        }
    </script>

@endsection