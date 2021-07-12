@extends('layouts.app')

@section('title')Turismo @endsection

@section('MyStyles')@endsection

@section('MainScripts')
  
@endsection

@section('content')

    <section class="bg-half bg-light d-table w-100" id="counter" style="background: url('{{ asset('assets/images/dobleyo-index.jpg') }}') center center;background-size:cover;">
        <div class="bg-overlay bg-overlay-dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h1 class="heading title-dark text-white mb-3">Agencia de viajes</h1>
                        {{-- <p class="para-desc mx-auto text-white">Cootranshuila LTDA, líder en el sector transportador de
                            Colombia.</p> --}}
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="/">Inicio</a>
                                    </li>
                                    {{-- <li class="breadcrumb-item">
                                        <a href="#">Nosotros</a>
                                    </li> --}}
                                    <li class="breadcrumb-item active">Agencia de viajes</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

     <!-- Services Start -->
     <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Transportando tus sueños</h4>
                        <p class="text-muted para-desc mx-auto mb-0"><span class="text-primary font-weight-bold">RNT.72472</span></p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{asset('assets/images/icon/beach.svg')}}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Los mejores destinos</h4>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{asset('assets/images/icon/wallet.svg')}}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Al mejor precio</h4>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{asset('assets/images/icon/suitcase.svg')}}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Todo incluido</h4>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Services End -->

    <!-- Partners start -->
    <section class="section-two" id="bookroom" style="background: url('{{ asset('assets/images/turismo/intro.png') }}') center center;background-size:cover; background-color: rgba(0, 162, 81, 0.7);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <form class="p-4 shadow rounded" style="background: rgba(255, 255, 255, 0.26)">
                        <h3 class="mb-3 text-center" style="color: #fff; font-wight: bold;">¿Te contáctamos?</h3>
                        <div class="row text-left">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    {{-- <label> Check in : </label> --}}
                                    <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3">
                                <div class="form-group">
                                    {{-- <label> Check out : </label> --}}
                                    <input name="correo" type="email" class="form-control" placeholder="Correo">
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    {{-- <label>Adults : </label> --}}
                                    <input type="number" min="0" autocomplete="off" id="telefono" required="" class="form-control" placeholder="Telefono">
                                </div>
                            </div><!--end col-->
                        
                            <div class="col-lg-3 text-center">
                                <input type="submit" id="search" name="search" class="btn btn-primary  text-center" value="Enviar" style="width: 50%;">
                            </div><!--end col-->
                            
                        </div>
                    </form>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Partners End -->

    <!-- paquetes turisticos -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Paquetes Turísticos</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">LLEGAMOS LEJOS.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row align-items-center">
                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates business-rate shadow bg-light rounded  border-0">
                        <div class="card-body py-5">
                            <h2 class="title text-uppercase mb-4 text-center">Piscilago</h2>
                            <div class="d-flex justify-content-center mb-4 text-center">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">99.000</span>
                                <span class="h4 align-self-end mb-1">/persona</span>
                            </div>
                            <h2 class="title text-uppercase mb-4 text-center">Salida desde Neiva</h2>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Transporte ida y regreso (Salida desde Neiva)</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Pasaporte Ingreso (Piscina, zoológico y toboganes)</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Refrigerio</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Gorro de Baño</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Almuerzo Piscitour</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Tarjeta de Asistencia Médica</li>
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Comprar</a>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates business-rate shadow bg-light rounded  border-0">
                        <div class="card-body py-5">
                            <h2 class="title text-uppercase mb-4 text-center">Cafe Extremo</h2>
                            <div class="d-flex justify-content-center mb-4 text-center">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">299.000</span>
                                <span class="h4 align-self-end mb-1">/persona</span>
                            </div>
                            <h2 class="title text-uppercase mb-4 text-center">Salida desde Neiva</h2>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Transporte ida y regreso (Salida desde Neiva)</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Acomodación Múltiple</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Alimentacion</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Seguros</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Guia Turistica</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Acceso completo al parque</li>
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Comprar</a>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates business-rate shadow bg-light rounded  border-0">
                        <div class="card-body py-5">
                            <h2 class="title text-uppercase mb-4 text-center">Piscilago</h2>
                            <div class="d-flex justify-content-center mb-4 text-center">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">140.000</span>
                                <span class="h4 align-self-end mb-1">/persona</span>
                            </div>
                            <h2 class="title text-uppercase mb-4 text-center">Salida desde La Plata</h2>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Transporte ida y regreso (Salida desde Neiva)</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Pasaporte Ingreso (Piscina, zoológico y toboganes)</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Refrigerio</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Gorro de Baño</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Almuerzo Piscitour</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Tarjeta de Asistencia Médica</li>
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Comprar</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->



    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+573208482712", // WhatsApp number
                call_to_action: "Hola ¿en que te podemos ayudar?", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->
@endsection
