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
    <section class="home-slider position-relative" style="max-height: 70vh">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item align-items-center active" style="max-height: 70vh; background-image:url('{{asset('assets/images/destinos_destacados/dobleyo-index.jpg')}}');">
                    <div class="bg-overlay"></div>
                    
                </div><!--end carousel item-->

                <div class="carousel-item align-items-center" style="max-height: 70vh; background-image:url('{{asset('assets/images/destinos_destacados/dobleyo-index.jpg')}}');">
                    <div class="bg-overlay"></div>
                    
                </div><!--end carousel item-->

                <div class="carousel-item align-items-center" style="max-height: 70vh; background-image:url('{{asset('assets/images/destinos_destacados/dobleyo-index.jpg')}}');">
                    <div class="bg-overlay"></div>
                    
                </div><!--end carousel item-->
            </div><!--end carousel inner-->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!--end carousel-->
    </section><!--end section-->

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
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="section-title">
                        {{-- <h4 class="title mb-4">Have Question ? Get in touch!</h4> --}}
                        <p class="text-muted para-desc" style="max-width: 700px !important;">Contamos con un servicio especial de pasajeros a nivel nacional por convenios o contratos turísticos, empresariales e institucionales.
                            <br>
                            <br>
                            Te invitamos a que conozcas nuestro
                            <span class="text-primary font-weight-bold"> “PARQUE AUTOMOTOR”</span> 
                        </p>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-3 col-sm-12">
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
                    <img src="{{ asset('assets/images/servicio_especial/1.jpg') }}" class="img-fluid rounded" alt="" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2">
                    <div class="section-title ml-lg-5">
                        <h4 class="title mb-4">Capacidad 42 pasajeros</h4>
                        {{-- <p class="text-muted">
                            Cootranshuila LTDA, líder en el sector transportador de Colombia, ofrece el servicio
                            <span class="text-primary font-weight-bold"> DOBLE YO</span>, que cuenta con los siguientes
                            servicios:
                        </p> --}}
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Cómodas sillas reclinables</li>
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
                    <img src="{{ asset('assets/images/servicio_especial/2.jpg') }}" class="img-fluid rounded" alt="" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 order-2 order-md-1">
                    <div class="section-title mr-lg-5">
                        <h4 class="title mb-4">Capacidad 38 pasajeros</h4>
                        {{-- <p class="text-muted">
                            Cootranshuila LTDA, líder en el sector transportador de Colombia, ofrece un servicio de Lujo
                            <span class="text-primary font-weight-bold"> VIP</span>, que cuenta con los siguientes
                            servicios:
                        </p> --}}
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Cómodas sillas reclinables</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Aire acondicionado</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Sistema de control de velocidad</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                class="uim uim-check-circle"></i></span>Centro de entretenimiento VLC</li>
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
                    <img src="{{ asset('assets/images/servicio_especial/3.jpg') }}" alt="" class="img-fluid rouded" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2">
                    <div class="section-title ml-lg-5">
                        <h4 class="title mb-4">Capacidad 32 pasajeros</h4>
                        {{-- <p class="text-muted">
                            Cootranshuila LTDA, líder en el sector transportador de Colombia, ofrece el servicio
                            mini-preferencial
                            <span class="text-primary font-weight-bold"> Platino Expres</span>, que cuenta con los
                            siguientes servicios:
                        </p> --}}
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
                    <img src="{{ asset('assets/images/servicio_especial/4.jpg') }}" alt="" class="img-fluid rouded" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 order-2 order-md-1">
                    <div class="section-title mr-lg-5">
                        <h4 class="title mb-4">Capacidad 25 pasajeros</h4>
                        {{-- <p class="text-muted">
                            Cootranshuila LTDA, líder en el sector transportador de Colombia, ofrece un servicio de Lujo
                            <span class="text-primary font-weight-bold"> Platino Jet</span>, que cuenta con los siguientes
                            servicios:
                        </p> --}}
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Cómodas sillas reclinables</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Centro de entretenimiento VLC</li>
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
                    <img src="{{ asset('assets/images/servicio_especial/5.jpg') }}" alt="" class="img-fluid rouded" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2">
                    <div class="section-title ml-lg-5">
                        <h4 class="title mb-4">Capacidad 18 pasajeros</h4>
                        {{-- <p class="text-muted">
                            Cootranshuila LTDA, líder en el sector transportador de Colombia, ofrece un servicio de Lujo
                            <span class="text-primary font-weight-bold"> Platino Especial</span>, que cuenta con los
                            siguientes servicios:
                        </p> --}}
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Cómodas sillas</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Aire acondicionado</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                        class="uim uim-check-circle"></i></span>Sistema de control de velocidad</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i
                                class="uim uim-check-circle"></i></span>Toma Corriente</li>
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
    </section>
    <!--end section-->

@endsection
