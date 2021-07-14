@extends('layouts.app')

@section('title')Compra tu pasaje @endsection

@section('PluginStyles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('MyStyles')
    <link rel="stylesheet" href="{{asset('assets/css/mystyles/buscar_bus.css')}}">
@endsection

@section('MainScripts')
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>
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
    <section class="section bg-light">
        <div class="container">
            
            {{-- Cambiar fechas --}}
            <div class="row justify-content-center mb-3" >
                <div class="col-lg-12">
                    <form class="p-4 shadow bg-white rounded" action="/GetDisponiblesIda" method="POST">
                        @csrf
                        <div class="row text-left">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group position-relative">
                                    <label> Ciudad Origen: </label>
                                    <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                    <select class="form-control custom-select custom-select-2" name="optOrigen" id="optOrigen" required>
                                        <option selected="">Seleccione origen</option>
                                    </select>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-6">
                                <div class="form-group position-relative">
                                    <label> Ciudad Destino: </label>
                                    <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                    <select class="form-control custom-select custom-select-2" name="optDestino" id="optDestino" required>
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
                            <b>No se encontraron viajes.
                        </p>
                    </div>
                    <!-- listado de buses -->
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

                    <div class="col-lg-12 my-3" style="padding: 0 !important;">
                        <div class=" " id="viajes_disp" style="padding: 0 !important;">     
                            <img src="{{asset('assets/images/Lo sentimos.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <!-- horarios buses-end -->

            </div>
        </div>
    </section>

@endsection
