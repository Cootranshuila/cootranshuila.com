@extends('layouts.app')

@section('title')Servicio Especial @endsection

@section('MyStyles')@endsection

@section('MainScripts')
    {{-- <script>
        // agregar propiedad de header estatico
        $(".sticky").addClass("nav-sticky");

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            $(".sticky").addClass("nav-sticky");


            if (scroll >= 50) {
                $(".sticky").addClass("nav-sticky");
            } 
        });

    </script> --}}
@endsection

@section('content')

    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100" id="counter" style="background: url('{{ asset('assets/images/dobleyo-index.jpg') }}') center center;background-size:cover;">
        <div class="bg-overlay bg-overlay-dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h1 class="heading text-white">Servicio Especial</h1>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="/">Inicio</a>
                                    </li>
                                    {{-- <li class="breadcrumb-item">
                                        <a href="#">Nosotros</a>
                                    </li> --}}
                                    <li class="breadcrumb-item active">Servicio Especial</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

@endsection