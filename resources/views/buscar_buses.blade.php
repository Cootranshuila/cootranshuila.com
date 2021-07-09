@extends('layouts.app')

@section('title')Compra tu pasaje @endsection

@section('MyStyles')
    <link rel="stylesheet" href="{{asset('assets/css/mystyles/buscar_bus.css')}}">
@endsection

@section('MainScripts') <script src="{{ asset('assets/js/pages/index.js') }}"></script>
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
    <section class="section bg-light">
        <div class="container">
            <div class="col-lg-12 card mb-3 rounded border" id="detalles_viaje">
                <div class="p-4 shadow row">
                    <div class="col-lg-8">
                        <div class="page-next-level">
                            {{-- Informacion de Viaje --}}
                            <input type="hidden" id="TerminalOrigen" value="{{$viajes->ida['TerminalOrigen']}}">
                            <input type="hidden" id="TerminalDestino" value="{{$viajes->ida['TerminalDestino']}}">
                            <input type="hidden" id="Fecha" value="{{$date}}">


                            <h5 class="title text-dark">VIAJE DE SALIDA</h5>

                            <h5 class="{{$viajes->ida->viaje ? '' : 'd-none'}}">{{$viajes->ida->viaje['TerminalOrigenNombre']}} <i class="fas fa-long-arrow-alt-right" style="color: #00a039;"></i> {{$viajes->ida->viaje['TerminalDestinoNombre']}} <i class="fas fa-long-arrow-alt-right" style="color: #00a039; vertical-align: middle;"></i> {{$fechaDeViaje}}</h5>
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
            <div class="row justify-content-center mb-3" id="cambiar_destino">
                <div class="col-lg-12">
                    <form class="p-4 shadow bg-white rounded" action="/GetDisponiblesIda" method="POST">
                        @csrf
                        <div class="row text-left">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group position-relative">
                                    <label> Ciudad Origen: </label>
                                    <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                    <select class="form-control custom-select pl-5" name="optOrigen" id="optOrigen" required>
                                        <option selected="">Seleccione origen</option>
                                    </select>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6">
                                <div class="form-group position-relative">
                                    <label> Ciudad Destino: </label>
                                    <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                    <select class="form-control custom-select pl-5" name="optDestino" id="optDestino" required>
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

            @php

                // dd($viajes);

            @endphp
            <!-- buses disponibles -->
            <div class="row row-5">
                <!-- filtros -->
                <div class="col-md-2 hidden-xs hidden-sm card rounded border pr-0 pl-0 sidebar sticky-bar" id="filtros" style="height: 250px; margin-top:2.5rem;">
                    <div class="rounded-top bg-primary" style="padding: 11px !important;">
                        <h5 class="widget-title" style="vertical-align: inherit; margin-bottom: 0 !important; color: #fff;">Modalidad</h5>
                    </div>
                    {{-- <h4 class="widget-title bg-primary">Filtros</h4> --}}
                    <ul class="list-unstyled mt-4 mb-0 blog-catagories" style="padding: 15px !important; margin-top: 0 !important;">
                        <li>
                            <div class="checkbox">
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    Doble yo
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    Vip
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    Platino Expres
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    Platino Jet
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- filtros-end -->

                <!-- horarios buses -->
                <div class="col-md-10 col-sm-12 col-xs-12" id="show_buses">
                    <div class="col-md-12">
                        <p>
                            <b>{{count($viajes->ida->viaje)}} buses</b> encontrados.
                        </p>
                    </div>
                    <!-- listado de buses -->
                    <div class="col-md-12 bg-primary rounded" style="padding-top: 15px; padding-bottom: 15px; color: #fff;">
                        <div class="row">
                            <div class="col-md-2 text-center font-weight-bold">Servicio</div>
                            <div class="col-md-2 text-center font-weight-bold">Hora Salida</div>
                            <div class="col-md-2 text-center font-weight-bold">Categoria</div>
                            <div class="col-md-2 text-center font-weight-bold">Salida</div>
                            <div class="col-md-2 text-center font-weight-bold">Destino</div>
                            <div class="col-md-2 text-center font-weight-bold">Precio</div>
                        </div>
                    </div>

                    @php
                        // dd($viajes);
                    @endphp
                    <!-- buses -->
                    @foreach ($viajes->ida->viaje as $viaje)

                        @php

                            foreach($viaje->tarifa AS $tarifa) {
                                if((int)$viaje['CategoriaID'] == (int)$tarifa['CategoriaID']) {
                                    $CategoriaNombre = $tarifa['CategoriaNombre'];
                                    $PrecioOneWay = $tarifa['PrecioOneWay'];
                                    $precio = number_format((int)$PrecioOneWay);
                                }
                            }

                            // dd($CategoriaNombre.' - '.$precio);
                        @endphp

                        <div class="col-lg-12 my-3" style="padding-left: 0 !important; padding-right:0 !important;">
                            <div class="card event-schedule rounded border" id="viajes_disp">
                                <div class="row" style="align-items: center;">
                                    <div class=" col-sm-12 col-md-2 text-center">
                                        {{-- <img src="{{asset('assets/images/logo-dark.png')}}" alt="" width="150"> --}}
                                        @if ($viaje['CategoriaID'] == 7)
                                            {{-- <img src="{{asset('assets/images/servicios/doble_yo.png')}}" alt="" width="120"> --}}
                                            <img src="{{asset('assets/images/servicios/doble_yo.jpeg')}}" alt="" width="120" class="rounded">
                                        @else
                                            @if ($viaje['CategoriaID'] == 4)
                                                {{-- <img src="{{asset('assets/images/servicios/vip.png')}}" alt="" width="120"> --}}
                                                <img src="{{asset('assets/images/servicios/vip.jpeg')}}" alt="" width="120" class="rounded">
                                            @else
                                                @if ($viaje['CategoriaID'] == 2)
                                                    {{-- <img src="{{asset('assets/images/servicios/platino_Expres.png')}}" alt="" width="120"> --}}
                                                    <img src="{{asset('assets/images/servicios/platino_Expres.jpeg')}}" alt="" width="120" class="rounded">
                                                @else
                                                    @if ($viaje['CategoriaID'] == 3)
                                                        {{-- <img src="{{asset('assets/images/servicios/platino_jet.png')}}" alt="" width="120"> --}}
                                                        <img src="{{asset('assets/images/servicios/platino_jet.jpeg')}}" alt="" width="120" class="rounded">
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
                                        {{-- <img src="{{asset('assets/images/servicios/doble_yo.png')}}" alt="" width="120"> --}}
                                    </div>
                                    <div class="col-md-2 text-center">{{$viaje['FechaPartida']}}</div>
                                    <div class="col-md-2 text-center">{{$CategoriaNombre}}</div>
                                    <div class="col-md-2 text-center">{{$viaje['TerminalOrigenNombre']}}</div>
                                    <div class="col-md-2 text-center">{{$viaje['TerminalDestinoNombre']}}</div>
                                    <div class="col-md-2 text-center">${{$precio}}</div>
                                </div>

                                <div class="row py-5 px-3 d-none" id="plane_{{$viaje['Id']}}">
                                    <div class="container">
                                        <div class="row align-items-center px-3 px-sm-0">
                                            <div class="col-lg-8 col-md-12 col-12">
                                                <div class="section-title">

                                                    <div class="plano_primer_piso">
                                                        <div class="content_plane">
                                                            <table class="table table-borderless">
                                                                <tbody id="butacas_primer_piso_plano_{{$viaje['Id']}}">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    @if ($viaje['CategoriaNombre'] == "DBY")
                                                        <div class="plano_segundo_piso">
                                                            <div class="content_plane">
                                                                <table class="table m-5 w-100 table-borderless">
                                                                    <tbody id="butacas_segundo_piso_plano_{{$viaje['Id']}}">
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-4 col-md-12 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                                                <div class="card login_page shadow rounded border-0">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Resumen reservación</h5>

                                                        <form class="login-form">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group position-relative">
                                                                        <label>Puede seleccionar máximo 5 sillas</label>
                                                                    </div>
                                                                </div><!--end col-->
                                                                <div class="col-md-12">
                                                                    <div class="form-group position-relative d-none info_{{$viaje['Id']}}">
                                                                        <label>Sillas seleccionadas: </label><br>
                                                                        <label class="text-success" id="seleccionadas_{{$viaje['Id']}}"></label>
                                                                    </div>
                                                                </div><!--end col-->
                                                                <div class="col-md-12">
                                                                    <div class="form-group position-relative d-none info_{{$viaje['Id']}}">
                                                                        <label>Total pasajes: </label><br>
                                                                        <label class="text-success" id="total_{{$viaje['Id']}}"></label>
                                                                    </div>
                                                                </div><!--end col-->
                                                                <div class="col-md-12 d-none">
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                            <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <button class="btn btn-primary w-100" disabled id="enviar_{{$viaje['Id']}}">Reservar</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                    </div><!--end container-->
                                </div><!---end row-->

                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" style="float: right" onclick="GetMapaButacas({{$viaje['Id']}}, {{$viaje['TerminalOrigenID']}}, {{$viaje['TerminalDestinoID']}}, this)">Ver sillas</button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- horarios buses-end -->

            </div>
        </div>
    </section>

@endsection
