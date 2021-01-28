@extends("layouts.page")

@section("head-extras")
   
    <link rel="stylesheet" href="{{asset("css/mujeres.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    @endsection

@section("content")

<h1>DESAYUNOS FEMINISTAS </h1>
<h2>MATCHING </h2>

<div id="app">
    <example-component></example-component>
    <example2-component></example2-component>
</div>
<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>

<script src="{{asset("js/app.js")}}"></script>

@endsection
