@extends('layouts.app')

@section('title')Gestionar compra @endsection

@section('PluginStyles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('MyStyles')
    {{-- <link rel="stylesheet" href="{{asset('assets/css/mystyles/buscar_bus.css')}}"> --}}
@endsection

@section('MainScripts')
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>
    <script src="{{ asset('assets/js/pages/checkout.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

        // modificar columnas segun tamaño
        if($(window).width() < 771){
            $('#show_buses').removeClass('col-md-10');
            $('#show_buses').addClass('col-md-12');
        }else{
            $('#show_buses').removeClass('col-md-12');
            $('#show_buses').addClass('col-md-10');
        }

        // obtener fecha seleccionada
        var fecha = $('#Fecha').val();
        $('#checkin-date').val(fecha);
    </script>
@endsection

@section('content')
    <section class="bg-half pb-3">
        <div class="container">
            <div class="col-lg-12 card mb-3 rounded border" id="detalles_viaje">
                <div class="p-4 shadow row">
                    <div class="col-lg-8">
                        <div class="page-next-level" id="content_detalle_viaje">

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="col-md-12" style="padding-top: 15px;">
                            <button type="button" class="btn btn-primary" id="btn_cambio" onclick="CanbiarDestino()" style="float: right;">Cambiar Destino</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Cambiar fechas --}}
            <div class="row justify-content-center mb-3" id="cambiar_destino" style="display: none">
                <div class="col-lg-12">
                    <div class="row justify-content-center" id="text_sin_viaje" style="display: none">
                        <div class="col-12 text-center">
                            <div class="section-title mb-4 pb-2">
                                <h4 class="title mb-4">No se encontró ningún viaje seleccionado</h4>
                                <p class="text-muted para-desc mx-auto mb-0">Por favor seleccione el origen, destino y fecha de viaje deseada para que conozca nuestros horarios disponibles</p>
                            </div>
                        </div><!--end col-->
                    </div>
                    <form class="p-4 shadow bg-white rounded" action="/GetDisponiblesIda" method="POST">
                        @csrf
                        <div class="row text-left">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group position-relative">
                                    <label> Ciudad Origen: </label>
                                    <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                    <select class="form-control custom-select custom-select-2 w-100" name="optOrigen" id="optOrigen" required>
                                        <option selected="">Seleccione origen</option>
                                    </select>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6">
                                <div class="form-group position-relative">
                                    <label> Ciudad Destino: </label>
                                    <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                    <select class="form-control custom-select custom-select-2 w-100" name="optDestino" id="optDestino" required>
                                        <option selected="">Seleccione el destino</option>
                                    </select>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fecha Ida: </label>
                                            <input type="text" class="flatpickr flatpickr-input form-control" id="checkin-date" name="txtFecSalida" required>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fecha Regreso: </label>
                                            <input type="text" class="flatpickr flatpickr-input form-control" id="checkout-date" name="txtFecRegreso">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-4 mt-2">
                                        <input type="submit" id="search" name="search" class="searchbtn btn btn-primary btn-block p" value="Buscar">
                                    </div><!--end col-->
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!--end col-->
            </div><!--end row-->

        </div>
    </section>

    <!-- Start -->
    <section class="section p-2 mb-5" id="detalle_compra">
        @guest
            <div class="container my-3">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="media align-items-center shadow rounded p-4 features">
                            <div class="icons m-0 rounded h2 text-primary text-center px-3">
                                <i class="uil uil-envelope-check"></i>
                            </div>
                            <div class="content ml-4">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Get in Touch !</a></h5>
                                <p class="text-muted mb-0">This is required when, for text is not yet available.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Submit a Request</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="media align-items-center shadow rounded p-4 features">
                            <div class="icons m-0 rounded h2 text-primary text-center px-3">
                                <i class="uil uil-webcam"></i>
                            </div>
                            <div class="content ml-4">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Start a Meeting</a></h5>
                                <p class="text-muted mb-0">This is required when, for text is not yet available.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Start Video Chat</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        @endguest

        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="rounded shadow-lg p-4">
                        <h5 class="mb-0">Billing Details :</h5>

                        <form class="mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <label>Your Name <span class="text-danger">*</span></label>
                                        <input name="name" id="firstname" type="text" class="form-control" placeholder="First Name :">
                                    </div>
                                </div><!--end col-->
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input name="name" id="lastname" type="text" class="form-control" placeholder="Last Name :">
                                    </div>
                                </div><!--end col-->
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <label>Company Name <span class="text-muted">(Optional)</span></label>
                                        <input name="name" id="companyname" type="text" class="form-control" placeholder="Company Name :">
                                    </div>
                                </div><!--end col-->
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <label>Street address <span class="text-danger">*</span></label>
                                        <input type="text" name="address1" id="address1" class="form-control" placeholder="House number and street name :">
                                    </div>
                                </div><!--end col-->
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <label>Apartment, suite, unit etc. <span class="text-muted">(Optional)</span></label>
                                        <input type="text" name="address2" id="address2" class="form-control" placeholder="Apartment, suite, unit etc. :">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Town / City <span class="text-danger">*</span></label>
                                        <input type="text" name="city" id="city" class="form-control" placeholder="City Name :">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Postal Code <span class="text-danger">*</span></label>
                                        <input type="text" name="postcode" id="postcode" class="form-control" placeholder="Zip :">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>State <span class="text-danger">*</span></label>
                                        <input type="text" name="state" id="state" class="form-control" placeholder="State Name :">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Country <span class="text-danger">*</span></label>
                                        <select class="form-control custom-select">
                                            <option selected="">India</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">&Aring;land Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                        </select>
                                    </div>
                                </div><!--end col-->
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="State Name :">
                                    </div>
                                </div><!--end col-->
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <label>Your Email <span class="text-danger">*</span></label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>

                    <div class="form-check form-check-inline my-4">
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Create an account ?</label>
                            </div>
                        </div>
                    </div>

                    <div class="rounded shadow-lg p-4">
                        <div class="form-check form-check-inline">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="addnewaddress">
                                    <label class="custom-control-label" for="addnewaddress">Ship to a different address ?</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group position-relative">
                            <label>Comments</label>
                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Notes about your order :"></textarea>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="rounded shadow-lg p-4">
                        <div class="d-flex mb-4 justify-content-between">
                            <h5>4 Items</h5>
                            <a href="shop-cart.html" class="text-muted h6">Show Details</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-center table-padding mb-0">
                                <tbody>
                                    <tr>
                                        <td class="h6 border-0">Subtotal</td>
                                        <td class="text-center font-weight-bold border-0">$ 2409</td>
                                    </tr>
                                    <tr>
                                        <td class="h6">Shipping Charge</td>
                                        <td class="text-center font-weight-bold">$ 0.00</td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="h5 font-weight-bold">Total</td>
                                        <td class="text-center text-primary h4 font-weight-bold">$ 2409</td>
                                    </tr>
                                </tbody>
                            </table>

                            <ul class="list-unstyled mt-4 mb-0">
                                <li>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <div class="form-group mb-0">
                                            <input type="radio" id="banktransfer" checked="checked" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                                        </div>
                                    </div>
                                </li>

                                <li class="mt-3">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <div class="form-group mb-0">
                                            <input type="radio" id="chaquepayment" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="chaquepayment">Cheque Payment</label>
                                        </div>
                                    </div>
                                </li>

                                <li class="mt-3">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <div class="form-group mb-0">
                                            <input type="radio" id="cashpayment" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="cashpayment">Cash on Delivery</label>
                                        </div>
                                    </div>
                                </li>

                                <li class="mt-3">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <div class="form-group mb-0">
                                            <input type="radio" id="paypal" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="paypal">Paypal <a href="https://www.paypal.com/uk/webapps/mpp/paypal-popup" target="_blank" class="ml-2 text-primary">What is paypal?</a></label>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="mt-4 pt-2">
                                <a href="shop-checkouts.html" class="btn btn-block btn-primary">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    {{-- Destinos mas buscados --}}
    <section class="section bg-white scrollspy pt-2" id="mas_buscados" style="display: none">
        <div class="container mt-2">
            <div class="row align-items-end">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-left">
                        <h6 class="text-primary">Destinos</h6>
                        <h4 class="title mb-4">Nuestros destinos más buscados</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>

        @php
            $neiva = [8, 'NEIVA, TERMINAL NEIVA'];
            $pitalito = [11, 'PITALITO, TERMINAL PITALITO'];
            $bogota = [9, 'BOGOTÁ, BOGOTÁ'];
            $florencia = [29, 'FLORENCIA, TERMINAL FLORENCIA'];
            $la_plata = [24, 'LA PLATA, TERMINAL LA PLATA'];

            $codOrigen = [8, 9, 11, 24, 29];

            $codDestino = [8, 9, 11, 24, 29];
        @endphp
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-4 pt-2">
                    <div id="six-slide" class="owl-carousel owl-theme">
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                            <div class="card-body p-0">
                                <a class="mfp-image d-inline-block" href="javascript:compra_rapida({{$codOrigen[0]}}, {{$codDestino[1]}})" title="">
                                    <img src="{{ asset('assets/images/rutas_fast/BOGOTÁ NEIVA.png') }}" class="img-fluid shadow rounded" alt="work-image">
                                </a>
                                <div class="content bg-white p-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Neiva - Bogotá</a></h5>
                                    {{-- <h6 class="text-muted tag mb-0">$ 16</h6> --}}
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                            <div class="card-body p-0">
                                <a class="mfp-image d-inline-block" href="javascript:compra_rapida({{$codOrigen[0]}}, {{$codDestino[2]}})" title="">
                                    <img src="{{ asset('assets/images/rutas_fast/NEIVA - PITALITO.png') }}" class="img-fluid shadow rounded" alt="work-image">
                                </a>
                                <div class="content bg-white p-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Neiva - Pitalito</a></h5>
                                    {{-- <h6 class="text-muted tag mb-0">$ 16</h6> --}}
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                            <div class="card-body p-0">
                                <a class="mfp-image d-inline-block" href="javascript:compra_rapida({{$codOrigen[3]}}, {{$codDestino[1]}})" title="">
                                    <img src="{{ asset('assets/images/rutas_fast/LA PLATA BOGOTÁ.png') }}" class="img-fluid shadow rounded" alt="work-image">
                                </a>
                                <div class="content bg-white p-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">La plata - Bogotá</a></h5>
                                    {{-- <h6 class="text-muted tag mb-0">$ 16</h6> --}}
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                            <div class="card-body p-0">
                                <a class="mfp-image d-inline-block" href="javascript:compra_rapida({{$codOrigen[0]}}, {{$codDestino[4]}})" title="">
                                    <img src="{{ asset('assets/images/rutas_fast/NEIVA - FLORENCIA.png') }}" class="img-fluid shadow rounded" alt="work-image">
                                </a>
                                <div class="content bg-white p-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Neiva - Florencia</a></h5>
                                    {{-- <h6 class="text-muted tag mb-0">$ 16</h6> --}}
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                            <div class="card-body p-0">
                                <a class="mfp-image d-inline-block" href="javascript:compra_rapida({{$codOrigen[1]}}, {{$codDestino[4]}})" title="">
                                    <img src="{{ asset('assets/images/rutas_fast/BOGOTÁ FLORENCIA.png') }}" class="img-fluid shadow rounded" alt="work-image">
                                </a>
                                <div class="content bg-white p-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Bogotá - Florencia</a></h5>
                                    {{-- <h6 class="text-muted tag mb-0">$ 16</h6> --}}
                                </div>
                            </div>
                        </div>

                        {{-- <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                            <div class="card-body p-0">
                                <a class="mfp-image d-inline-block" href="javascript:compra_rapida()" title="">
                                    <img src="{{ asset('assets/images/rutas_fast/6.jpg') }}" class="img-fluid shadow rounded" alt="work-image">
                                </a>
                                <div class="content bg-white p-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted tag mb-0">$ 16</h6>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                            <div class="card-body p-0">
                                <a class="mfp-image d-inline-block" href="javascript:compra_rapida()" title="">
                                    <img src="{{ asset('assets/images/rutas_fast/7.jpg') }}" class="img-fluid shadow rounded" alt="work-image">
                                </a>
                                <div class="content bg-white p-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                    <h6 class="text-muted tag mb-0">$ 16</h6>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section>

@endsection
