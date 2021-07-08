@extends('layouts.app')

@section('title')Turismo @endsection

@section('MyStyles')@endsection

@section('MainScripts')
    <script>
        // agregar propiedad de header estatico
        $(".sticky").addClass("nav-sticky");

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            $(".sticky").addClass("nav-sticky");


            if (scroll >= 50) {
                $(".sticky").addClass("nav-sticky");
            } 
        });

    </script>
@endsection

@section('content')

@endsection