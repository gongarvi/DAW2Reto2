@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{asset("css/mujeres.css")}}">
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
=======
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
>>>>>>> 2041ed01e7620fa8958077b361f1927d8ffc3ebd
@endsection

@section("content")

<a class="ir-arriba" title="Volver arriba">
  <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
  </span>
</a>

<div id="app">
    <mujeres-component></mujeres-component>
</div>
@endsection
