@extends("layouts.page")

@section("head-extras")

@endsection

@section("content")
    <div id="ruleta">
        <Ruleta/>
    </div>
    <script src="{{asset("js/ruleta.js")}}" defer>
    </script>
@endsection
