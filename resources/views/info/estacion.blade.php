@extends('layouts.app')

@section('title')Estación de servicio @endsection

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
    <section class="bg-half bg-light d-table w-100" style="background: url('{{ asset('assets/images/dobleyo-index.jpg') }}') center center;">
        <div class="bg-overlay bg-overlay-dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h1 class="heading text-white font-weight-bold mb-4 text-center">Estación de Servicos</h1>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="/">Inicio</a>
                                    </li>
                                    {{-- <li class="breadcrumb-item">
                                        <a href="#">Nosotros</a>
                                    </li> --}}
                                    <li class="breadcrumb-item active">Estación de Servicos</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
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

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title">
                        {{-- <h4 class="title font-weight-bold mb-4 text-center">Carga y Encomiendas</h4> --}}
                        <p class="text-muted para-desc mb-0 mx-auto" style="max-width: 800px !important;">Contamos con 65 años de experiencia en el mercado. Ofrecemos una Excelente ubicación frente a la glorieta de la cruz roja Neiva.
                            {{-- <span class="text-primary font-weight-bold"> servicio de carga </span>
                            se ha logrado extender a los departamentos de: Antioquia, Valle del Cauca, Risaralda y Tolima logrando un cubrimiento del 50% del territorio nacional. --}}
                        </p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <img src="{{asset('assets/images/estacion/estacion.jpg')}}" class="img-fluid rounded shadow-md" alt="" width="445">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-4">
                        <h4 class="title mb-4">Estacion de Servicios</h4>
                        <p class="text-muted">Nuestro portafolio de servicios consta de:</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Venta de gasolina (Súper, Corriente y ACPM) las 24 horas.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>(GNV) Gas Natural Vehicular las 24 horas.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Lavado de autos.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Cambio de aceite.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Engrase.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Montaje de llantas.</li>
                        </ul>
                        <p class="text-muted">Vendemos todo lo relacionado al mantenimiento de su automóvil:</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Lubricantes.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Refrigerantes.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Grasas.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Líquido de frenos.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Agua de batería.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Filtros.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Ambientadores.</li>
                        </ul>
                        {{-- <a href="javascript:void(0)" class="mt-3 h6 text-primary">Ver contrato de trasnporte terrestre de encomiendas. <i class="mdi mdi-chevron-right"></i></a> --}}
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            {{-- <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Telefonos</h4>
                        <!-- <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p> -->
                    </div>
                </div><!--end col-->
            </div><!--end row--> --}}

            {{-- <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <i data-feather="phone" class="fea icon-ex-md text-primary"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0"><span class="font-weight-bold">Encomiendas Neiva</span> <br> (8)8701505 | 8708255</h4>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <i data-feather="phone" class="fea icon-ex-md text-primary"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0"><span class="font-weight-bold">Encomiendas Bogota</span> <br> 5616868 | 5818889</h4>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <i data-feather="phone" class="fea icon-ex-md text-primary"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0"><span class="font-weight-bold">Encomiendas Florencia</span> <br> 4354848</h4>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row--> --}}
        </div><!--end container-->

        {{-- <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Whats Our Clients Said About <span class="text-primary">Landrick</span> Project</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
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
        </div><!--end container--> --}}
    </section><!--end section-->
@endsection