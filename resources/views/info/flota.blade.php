@extends('layouts.app')

@section('title')Nuestra flota @endsection

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
    <section class="bg-half-170 bg-primary d-table w-100" style="background: url('images/insurance/bg.png') center center;">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12">
                    <div class="title-heading text-center">
                        <h1 class="heading title-dark text-white mb-3">Nuestra Flota</h1>
                        <p class="para-desc mx-auto text-white-50">Cootranshuila LTDA, líder en el sector transportador de
                            Colombia.</p>

                        <div class="row mt-4 pt-2">
                            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                                <div class="card explore-feature border-0 rounded text-center bg-white">
                                    <div class="card-body">
                                        <div class="icon rounded-circle shadow-lg d-inline-block">
                                            <img src="images/insurance/health.svg" class="avatar avatar-md-sm" alt="">
                                        </div>
                                        <div class="content mt-3">
                                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Doble
                                                    Yo</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                                <div class="card explore-feature border-0 rounded text-center bg-white">
                                    <div class="card-body">
                                        <div class="icon rounded-circle shadow-lg d-inline-block">
                                            <img src="images/insurance/term-life.svg" class="avatar avatar-md-sm" alt="">
                                        </div>
                                        <div class="content mt-3">
                                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Platino
                                                    Jet</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                                <div class="card explore-feature border-0 rounded text-center bg-white">
                                    <div class="card-body">
                                        <div class="icon rounded-circle shadow-lg d-inline-block">
                                            <img src="images/insurance/family-health.svg" class="avatar avatar-md-sm"
                                                alt="">
                                        </div>
                                        <div class="content mt-3">
                                            <h6 class="mb-0"><a href="javascript:void(0)"
                                                    class="title text-dark">Preferencial Vip</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                                <div class="card explore-feature border-0 rounded text-center bg-white">
                                    <div class="card-body">
                                        <div class="icon rounded-circle shadow-lg d-inline-block">
                                            <img src="images/insurance/investment.svg" class="avatar avatar-md-sm" alt="">
                                        </div>
                                        <div class="content mt-3">
                                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Platino
                                                    Especial</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                                <div class="card explore-feature border-0 rounded text-center bg-white">
                                    <div class="card-body">
                                        <div class="icon rounded-circle shadow-lg d-inline-block">
                                            <img src="images/insurance/car.svg" class="avatar avatar-md-sm" alt="">
                                        </div>
                                        <div class="content mt-3">
                                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Platino
                                                    Expres</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                                <div class="card explore-feature border-0 rounded text-center bg-white">
                                    <div class="card-body">
                                        <div class="icon rounded-circle shadow-lg d-inline-block">
                                            <img src="images/insurance/bike.svg" class="avatar avatar-md-sm" alt="">
                                        </div>
                                        <div class="content mt-3">
                                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Mixto</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9">
                    <div class="section-title">
                        {{-- <h4 class="title mb-4">Have Question ? Get in touch!</h4> --}}
                        <p class="text-muted para-desc" style="max-width: 700px !important;">La COOPERATIVA DE
                            TRANSPORTADORES DEL HUILA
                            <span class="text-primary font-weight-bold"> “COOTRANSHUILA LTDA”</span> dedicada a la
                            prestación de Servicio de Transporte Publico Terrestre, se complace en presentarle su flota y
                            cada uno de sus servicios.
                            <br>
                            <br>
                            Conozca los terminos y condiciones de transporte de pasajeros dando<a href="#"
                                class="text-dark font-weight-bold"> Click Aqui.</a>
                        </p>
                    </div>
                </div>
                <!--end col-->
                <div class="col-3">
                    <a href="/" class="btn btn-primary mt-4">Comprar Tiquete</a>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- doble yo -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2">
                    {{-- <img src="images/illustrator/services.svg" alt=""> --}}
                    <img src="{{ asset('assets/images/flota/doble_yo.jpg') }}" class="rounded" alt="" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2">
                    <div class="section-title ml-lg-5">
                        <h4 class="title mb-4">Doble Yo</h4>
                        <p class="text-muted">
                            Cootranshuila LTDA, líder en el sector transportador de Colombia, ofrece el servicio
                            <span class="text-primary font-weight-bold"> DOBLE YO</span>, que cuenta con los siguientes
                            servicios:
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Cómodas sillas tipo cama en cuero</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Aire acondicionado regulado</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Toma corrientes electricos para dispositivos
                                moviles</li>
                        </ul>
                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip" title="WiFi"><i
                                        data-feather="wifi" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip"
                                    title="Seguimiento satelital"><i data-feather="navigation"
                                        class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip"
                                    title="Cámaras de seguridad"><i data-feather="video"
                                        class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip"
                                    title="Centro de entretenimineto individual"><i data-feather="tablet"
                                        class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip" title="Multiples TV"><i
                                        data-feather="tv" class="fea icon-sm fea-social"></i></a></li>
                        </ul>
                        <!--end icon-->
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#buses">Ver mas <i data-feather="arrow-right"
                                class="fea icon-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- vip -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2 order-1 order-md-2">
                    {{-- <img src="images/illustrator/Marketing_strategy_SVG.svg" alt=""> --}}
                    <img src="{{ asset('assets/images/flota/vip.jpg') }}" class="rounded" alt="" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 order-2 order-md-1">
                    <div class="section-title mr-lg-5">
                        <h4 class="title mb-4">Preferencial VIP</h4>
                        <p class="text-muted">
                            Cootranshuila LTDA, líder en el sector transportador de Colombia, ofrece un servicio de Lujo
                            <span class="text-primary font-weight-bold"> VIP</span>, que cuenta con los siguientes
                            servicios:
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Cómodas sillas reclinables</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Aire acondicionado</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Sistema de control de velocidad</li>
                        </ul>
                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip" title="WiFi"><i
                                        data-feather="wifi" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip"
                                    title="Seguimiento satelital"><i data-feather="navigation"
                                        class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip"
                                    title="Cámaras de seguridad"><i data-feather="video"
                                        class="fea icon-sm fea-social"></i></a></li>
                            {{-- <li class="list-inline-item"><a  class="rounded" data-toggle="tooltip" title="Centro de entretenimineto individual"><i data-feather="tablet" class="fea icon-sm fea-social"></i></a></li> --}}
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip" title="Multiples TV"><i
                                        data-feather="tv" class="fea icon-sm fea-social"></i></a></li>
                        </ul>
                        <!--end icon-->
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#buses">Ver mas <i data-feather="arrow-right"
                                class="fea icon-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- platino expres -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2">
                    <img src="{{ asset('assets/images/flota/p_expres.jpg') }}" alt="" class="rouded" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2">
                    <div class="section-title ml-lg-5">
                        <h4 class="title mb-4">Platino Expres</h4>
                        <p class="text-muted">
                            Cootranshuila LTDA, líder en el sector transportador de Colombia, ofrece el servicio
                            mini-preferencial
                            <span class="text-primary font-weight-bold"> Platino Expres</span>, que cuenta con los
                            siguientes servicios:
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Cómodas sillas reclinables</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Baño a bordo</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Sistema de control de velocidad</li>
                        </ul>
                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                            {{-- <li class="list-inline-item"><a  class="rounded" data-toggle="tooltip" title="WiFi"><i data-feather="wifi" class="fea icon-sm fea-social"></i></a></li> --}}
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip"
                                    title="Seguimiento satelital"><i data-feather="navigation"
                                        class="fea icon-sm fea-social"></i></a></li>
                            {{-- <li class="list-inline-item"><a  class="rounded" data-toggle="tooltip" title="Cámaras de seguridad"><i data-feather="video" class="fea icon-sm fea-social"></i></a></li> --}}
                            {{-- <li class="list-inline-item"><a  class="rounded" data-toggle="tooltip" title="Centro de entretenimineto individual"><i data-feather="tablet" class="fea icon-sm fea-social"></i></a></li> --}}
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip" title="TV"><i
                                        data-feather="tv" class="fea icon-sm fea-social"></i></a></li>
                        </ul>
                        <!--end icon-->
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#buses">Ver mas <i data-feather="arrow-right"
                                class="fea icon-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- platino jet -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2 order-1 order-md-2">
                    <img src="{{ asset('assets/images/flota/p_jet.jpeg') }}" alt="" class="rouded" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 order-2 order-md-1">
                    <div class="section-title mr-lg-5">
                        <h4 class="title mb-4">Platino JET</h4>
                        <p class="text-muted">
                            Cootranshuila LTDA, líder en el sector transportador de Colombia, ofrece un servicio de Lujo
                            <span class="text-primary font-weight-bold"> Platino Jet</span>, que cuenta con los siguientes
                            servicios:
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Cómodas sillas reclinables</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>TV</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Sistema de control de velocidad</li>
                        </ul>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#buses">Ver mas <i data-feather="arrow-right"
                                class="fea icon-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- especial -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2">
                    <img src="{{ asset('assets/images/flota/especial.jpeg') }}" alt="" class="rouded" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2">
                    <div class="section-title ml-lg-5">
                        <h4 class="title mb-4">Platino Especial</h4>
                        <p class="text-muted">
                            Cootranshuila LTDA, líder en el sector transportador de Colombia, ofrece un servicio de Lujo
                            <span class="text-primary font-weight-bold"> Platino Especial</span>, que cuenta con los
                            siguientes servicios:
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Cómodas sillas reclinables</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Aire acondicionado</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Sistema de control de velocidad</li>
                        </ul>
                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip" title="WiFi"><i
                                        data-feather="wifi" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip"
                                    title="Seguimiento satelital"><i data-feather="navigation"
                                        class="fea icon-sm fea-social"></i></a></li>
                            {{-- <li class="list-inline-item"><a  class="rounded" data-toggle="tooltip" title="Cámaras de seguridad"><i data-feather="video" class="fea icon-sm fea-social"></i></a></li> --}}
                            {{-- <li class="list-inline-item"><a  class="rounded" data-toggle="tooltip" title="Centro de entretenimineto individual"><i data-feather="tablet" class="fea icon-sm fea-social"></i></a></li> --}}
                            <li class="list-inline-item"><a class="rounded" data-toggle="tooltip" title="Multiples TV"><i
                                        data-feather="tv" class="fea icon-sm fea-social"></i></a></li>
                        </ul>
                        <!--end icon-->
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#buses">Ver mas <i data-feather="arrow-right"
                                class="fea icon-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- mixto -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2 order-1 order-md-2">
                    <img src="{{ asset('assets/images/flota/mixto.jpg') }}" class="rounded" alt="" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 order-2 order-md-1">
                    <div class="section-title mr-lg-5">
                        <h4 class="title mb-4">MIXTO</h4>
                        <p class="text-muted">
                            Cootranshuila LTDA, líder en el sector transportador de Colombia, ofrece el servicio
                            <span class="text-primary font-weight-bold"> Mixto</span>, corriente.
                        </p>
                        {{-- <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                        </ul> --}}
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#buses">Ver mas <i data-feather="arrow-right"
                                class="fea icon-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->


        <!-- modal tipos de servicio -->
        <div class="modal fade" id="buses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- galeria de imagenes -->
                        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="10000">
                                    <img src="{{ asset('assets/images/dobleyo-index.jpg') }}" class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="2000">
                                    <img src="{{ asset('assets/images/flota/doble_yo/doble_yo_1.jpg') }}" class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/images/dobleyo-index.jpg') }}" class="d-block w-100 rounded" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleInterval" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- galeria end -->

                    </div>
                </div>
            </div>
        </div>






        {{-- <div class="container-fluid mt-100 mt-60">
            <div class="rounded py-5" style="background: url('images/insurance/cta.jpg') center center;">
                <div class="container py-md-5 py-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-12 offset-lg-6 offset-md-5">
                            <div class="card border-0">
                                <div class="card-body p-md-5 p-4 bg-white rounded">
                                    <div class="section-title">
                                        <h4 class="title mb-4">Advantages</h4>
                                        <p class="text-muted para-desc mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-12 mt-4">
                                            <div class="media align-items-center">
                                                <div class="icon text-center rounded-circle h4 text-primary mr-2 mb-0">
                                                    <i class="uil uil-umbrella"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="title text-dark mb-0">Protection</h6>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="col-md-6 col-12 mt-4">
                                            <div class="media align-items-center">
                                                <div class="icon text-center rounded-circle h4 text-primary mr-2 mb-0">
                                                    <i class="uil uil-user"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="title text-dark mb-0">Customers</h6>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="col-md-6 col-12 mt-4">
                                            <div class="media align-items-center">
                                                <div class="icon text-center rounded-circle h4 text-primary mr-2 mb-0">
                                                    <i class="uil uil-money-bill"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="title text-dark mb-0">Save on rates</h6>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="col-md-6 col-12 mt-4">
                                            <div class="media align-items-center">
                                                <div class="icon text-center rounded-circle h4 text-primary mr-2 mb-0">
                                                    <i class="uil uil-bolt-alt"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="title text-dark mb-0">Fast Process</h6>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div class="mt-4">
                                        <a href="javascript:void(0)" class="btn btn-primary">Protect your life <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                    </div>
                                </div><!--end div-->
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div><!--end div-->
        </div><!--end container fluid-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Other Insurance Plans</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <a href="javascript:void(0)" class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle h4 text-primary mr-3 mb-0">
                            <i class="uil uil-home-alt"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title text-dark mb-0">Home Insurance</h4>
                        </div>
                    </div>
                </a><!--end col-->
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)" class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle h4 text-primary mr-3 mb-0">
                            <i class="uil uil-user-arrows"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title text-dark mb-0">Group Mediclaim</h4>
                        </div>
                    </a>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)" class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle h4 text-primary mr-3 mb-0">
                            <i class="uil uil-user-circle"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title text-dark mb-0">Retirement Plans</h4>
                        </div>
                    </a>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)" class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle h4 text-primary mr-3 mb-0">
                            <i class="uil uil-car"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title text-dark mb-0">Travel Insurance</h4>
                        </div>
                    </a>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)" class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle h4 text-primary mr-3 mb-0">
                            <i class="uil uil-truck"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title text-dark mb-0">Taxi Insurance</h4>
                        </div>
                    </a>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)" class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle h4 text-primary mr-3 mb-0">
                            <i class="uil uil-chart-pie-alt"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title text-dark mb-0">Corporate Insurance</h4>
                        </div>
                    </a>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)" class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle h4 text-primary mr-3 mb-0">
                            <i class="uil uil-heartbeat"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title text-dark mb-0">Cancer Insurance</h4>
                        </div>
                    </a>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)" class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle h4 text-primary mr-3 mb-0">
                            <i class="uil uil-chart-line"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title text-dark mb-0">Tex Saving Investment</h4>
                        </div>
                    </a>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)" class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle h4 text-primary mr-3 mb-0">
                            <i class="uil uil-book-reader"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title text-dark mb-0">Child Saving Plans</h4>
                        </div>
                    </a>
                </div><!--end col-->
                
                <div class="col-12 mt-4 pt-2 text-center">
                    <a href="javascript:void(0)" class="btn btn-primary">See More <i class="mdi mdi-arrow-right"></i></a>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Our Customers</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div id="customer-testi" class="owl-carousel owl-theme">
                        <div class="media customer-testi m-2">
                            <img src="images/client/01.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                            <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                            </div>
                        </div>
                        
                        <div class="media customer-testi m-2">
                            <img src="images/client/02.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                            <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                            </div>
                        </div>

                        <div class="media customer-testi m-2">
                            <img src="images/client/03.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                            <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                            </div>
                        </div>

                        <div class="media customer-testi m-2">
                            <img src="images/client/04.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                            <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                            </div>
                        </div>

                        <div class="media customer-testi m-2">
                            <img src="images/client/05.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                            <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                            </div>
                        </div>

                        <div class="media customer-testi m-2">
                            <img src="images/client/06.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                            <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6 col-12">
                    <div class="section-title">
                        <h4 class="title mb-4">We're here to help you</h4>
                        <p class="text-muted para-desc">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <ul class="list-unstyled text-muted mt-4">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card rounded border-0 shadow-lg ml-lg-5">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="images/client/01.jpg" class="avatar avatar-md-md rounded-circle shadow" alt="">
                                <div class="section-title">
                                    <h6 class="my-3">Calvin Carlo</h6>
                                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need.</p>
                                </div>
                            </div>

                            <div class="content mt-4 pt-2">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Name : <span class="text-danger">*</span></label>
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5" placeholder="Name" name="name" required="">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Email : <span class="text-danger">*</span></label>
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12 mt-2">
                                            <button class="btn btn-soft-primary">Request call <i data-feather="arrow-right" class="fea icon-sm"></i></button>
                                        </div><!--end col-->
                                    </div>
                                </form>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="media">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                        <div class="media-body">
                            <h5 class="mt-0">How our <span class="text-primary">Landrick</span> work ?</h5>
                            <p class="answer text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="media">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                        <div class="media-body">
                            <h5 class="mt-0"> What is the main process open account ?</h5>
                            <p class="answer text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact</p>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="media">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                        <div class="media-body">
                            <h5 class="mt-0"> How to make unlimited data entry ?</h5>
                            <p class="answer text-muted mb-0">Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="media">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary mr-2 mt-1"></i>
                        <div class="media-body">
                            <h5 class="mt-0"> Is <span class="text-primary">Landrick</span> safer to use with my account ?</h5>
                            <p class="answer text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row mt-5 pt-md-4 justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Have Question ? Get in touch!</h4>
                        <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <a href="page-contact-two.html" class="btn btn-primary mt-4"><i class="mdi mdi-phone"></i> Contact us</a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container--> --}}
    </section>
    <!--end section-->
    <!-- End -->
@endsection
