@extends("layouts.page")

@section("head-extras")
    <link rel="stylesheet" href="{{asset("css/mujeres.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section("content")

<h1>JUEGO DEL MATCHING</h1>
<div class="app">
    <match-component></match-component>
</div>
<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
@endsection