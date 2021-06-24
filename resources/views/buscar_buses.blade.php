@extends('layouts.app')

@section('title')Compra tu pasaje @endsection

@section('MyStyles')
    <link rel="stylesheet" href="{{asset('assets/css/mystyles/buscar_bus.css')}}">
@endsection

@section('MainScripts') <script src="{{ asset('assets/js/pages/index.js') }}"></script>
    <script>
        // agregar propiedad de header estatico
        $(".sticky").addClass("nav-sticky");

        // modificar columnas segun tamaño
        if($(window).width() < 771){
            $('#show_buses').removeClass('col-md-10');
            $('#show_buses').addClass('col-md-12');
        }else{
            $('#show_buses').removeClass('col-md-12');
            $('#show_buses').addClass('col-md-10');
        }
    </script>
@endsection

@section('content')
    <section class="section bg-light">
        <div class="container">
            <div class="col-lg-12 card mb-3 rounded border" id="detalles_viaje">
                <div class="p-4 shadow row">
                    <div class="col-lg-8">
                        <div class="page-next-level">
                            <h5 class="title text-dark">VIAJE DE SALIDA</h5>

                            <h5>{{$viajes->ida->viaje['TerminalOrigenNombre']}} <i class="fas fa-long-arrow-alt-right" style="color: #00a039; vertical-align: middle;"></i> {{$viajes->ida->viaje['TerminalDestinoNombre']}} <i class="fas fa-long-arrow-alt-right" style="color: #00a039; vertical-align: middle;"></i> {{$fechaViaje}}</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="col-md-12" style="padding-top: 15px;">
                            <button type="button" class="btn btn-primary" style="float: right;">Seleccionar Regreso</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Cambiar fechas --}}
            <div class="row justify-content-center mb-3 d-none">
                <div class="col-lg-12">
                    <form class="p-4 shadow bg-white rounded">
                        <div class="row text-left">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label> Check in : </label>
                                    <input name="date" type="text" class="flatpickr flatpickr-input form-control" id="checkin-date">
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label> Check out : </label>
                                    <input name="date" type="text" class="flatpickr flatpickr-input form-control" id="checkout-date">
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Adults : </label>
                                            <input type="number" min="0" autocomplete="off" id="adult" required="" class="form-control" placeholder="Adults :">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Children : </label>
                                            <input type="number" min="0" autocomplete="off" id="children" class="form-control" placeholder="Children :">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-4 mt-2">
                                        <input type="submit" id="search" name="search" class="searchbtn btn btn-primary btn-block p" value="Search">
                                    </div><!--end col-->
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!--end col-->
            </div><!--end row-->

            {{-- @php

                dd($viajes->ida->viaje);

            @endphp --}}
            <!-- buses disponibles -->
            <div class="row row-5">
                <!-- filtros -->
                <div class="col-md-2 hidden-xs hidden-sm card event-schedule rounded border pr-0 pl-0" id="filtros" style="height: 250px; margin-top:2.5rem;">
                    <div class="rounded bg-primary" style="padding: 8px !important;">
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
                    <div class="col-md-12 bg-primary" style="padding-top: 15px; padding-bottom: 15px; color: #fff;">
                        <div class="row">
                            <div class="col-md-2 text-center">Servicio</div>
                            <div class="col-md-2 text-center">Hora Salida</div>
                            <div class="col-md-2 text-center">Categoria</div>
                            <div class="col-md-2 text-center">Salida</div>
                            <div class="col-md-2 text-center">Destino</div>
                            <div class="col-md-2 text-center">Precio</div>
                        </div>
                    </div>
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

                        <div class="col-lg-12 mt-4 pt-4" style="padding-left: 0 !important; padding-right:0 !important;">
                            <div class="card event-schedule rounded border" id="viajes_disp">
                                <div class="row" style="align-items: center;">
                                    <div class=" col-sm-12 col-md-2 text-center">
                                        {{-- <img src="{{asset('assets/images/logo-dark.png')}}" alt="" width="150"> --}}
                                        @if ($viaje['CategoriaID'] == 7)
                                            <img src="{{asset('assets/images/servicios/doble_yo.png')}}" alt="" width="120">
                                        @else
                                            @if ($viaje['CategoriaID'] == 4)
                                                <img src="{{asset('assets/images/servicios/vip.png')}}" alt="" width="120">
                                            @else
                                                @if ($viaje['CategoriaID'] == 2)
                                                    <img src="{{asset('assets/images/servicios/platino_Expres.png')}}" alt="" width="120">
                                                @else
                                                    @if ($viaje['CategoriaID'] == 3)
                                                        <img src="{{asset('assets/images/servicios/platino_jet.png')}}" alt="" width="120">
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
                                    <div class="col-md-2 text-center">{{$precio}}</div>
                                </div>



                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" style="float: right" onclick="GetMapaButacas({{$viaje['Id']}}, {{$viaje['TerminalOrigenID']}}, {{$viaje['TerminalDestinoID']}}, this)">Ver sillas</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--<div class="col-lg-12 mt-4 pt-4" style="padding-left: 0 !important; padding-right:0 !important;">
                        <div class="card event-schedule rounded border" style="padding-top: 15px; padding-bottom: 5px;">
                            <div class="row" style="align-items: center;">
                                <div class=" col-sm-12 col-md-2 text-center">
                                    {{-- <img src="{{asset('assets/images/logo-dark.png')}}" alt="" width="150"> --}}
                                    <img src="{{asset('assets/images/servicios/doble_yo.png')}}" alt="" width="120">
                                </div>
                                <div class="col-md-2 text-center">10:30</div>
                                <div class="col-md-2 text-center">Doble yo</div>
                                <div class="col-md-2 text-center">Terminal Neiva</div>
                                <div class="col-md-2 text-center">Bogotá</div>
                                <div class="col-md-2 text-center">80.000</div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary" style="float: right">Ver sillas</button>
                            </div>
                        </div>
                    </div>-->

                    <!--<div class="col-lg-12 mt-4 pt-4" style="padding-left: 0 !important; padding-right:0 !important;">
                        <div class="card event-schedule rounded border" style="padding-top: 15px; padding-bottom: 5px;">
                            <div class="row" style="align-items: center;">
                                <div class=" col-sm-12 col-md-2 text-center">
                                    <img src="{{asset('assets/images/servicios/vip.png')}}" alt="" width="120">
                                    {{-- <img src="{{asset('assets/images/logo-dark.png')}}" alt="" width="120"> --}}
                                </div>
                                <div class="col-md-2 text-center">11:30</div>
                                <div class="col-md-2 text-center">Preferencial Vip</div>
                                <div class="col-md-2 text-center">Terminal Neiva</div>
                                <div class="col-md-2 text-center">Bogotá</div>
                                <div class="col-md-2 text-center">80.000</div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary" style="float: right">Ver sillas</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4 pt-4" style="padding-left: 0 !important; padding-right:0 !important;">
                        <div class="card event-schedule rounded border" style="padding-top: 15px; padding-bottom: 5px;">
                            <div class="row" style="align-items: center;">
                                <div class=" col-sm-12 col-md-2 text-center">
                                    {{-- <img src="{{asset('assets/images/logo-dark.png')}}" alt="" width="170"> --}}
                                    <img src="{{asset('assets/images/servicios/platino_Expres.png')}}" alt="" width="120">
                                </div>
                                <div class="col-md-2 text-center">12:30</div>
                                <div class="col-md-2 text-center">PLatino Expres</div>
                                <div class="col-md-2 text-center">Terminal Neiva</div>
                                <div class="col-md-2 text-center">Bogotá</div>
                                <div class="col-md-2 text-center">80.000</div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary" style="float: right">Ver sillas</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4 pt-4" style="padding-left: 0 !important; padding-right:0 !important;">
                        <div class="card event-schedule rounded border" style="padding-top: 15px; padding-bottom: 5px;">
                            <div class="row" style="align-items: center;">
                                <div class=" col-sm-12 col-md-2 text-center">
                                    <img src="{{asset('assets/images/servicios/platino_jet.png')}}" alt="" width="120">
                                    {{-- <img src="{{asset('assets/images/logo-dark.png')}}" alt="" width="120"> --}}
                                </div>
                                <div class="col-md-2 text-center">13:30</div>
                                <div class="col-md-2 text-center">Platino Jet</div>
                                <div class="col-md-2 text-center">Terminal Neiva</div>
                                <div class="col-md-2 text-center">Bogotá</div>
                                <div class="col-md-2 text-center">80.000</div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary" style="float: right">Ver sillas</button>
                            </div>
                        </div>
                    </div>-->
                </div>
                <!-- horarios buses-end -->

            </div>
        </div>
    </section>

@endsection
