@extends('layouts.app')

@section('title')Compra tu pasaje @endsection

@section('MainScripts') <script src="{{ asset('assets/js/pages/index.jss') }}"></script> 
    <script>
        $(".sticky").addClass("nav-sticky");
    </script>
@endsection

@section('content')
    <section class="section bg-light">
        <div class="container">
            <div class="col-lg-12 event-schedule rounded border" style="margin-bottom: 15px;">
                <div class="row">
                    <div class="col-lg-8 card">
                        <div class="page-next-level">
                            <h5>VIAJE DE SALIDA</h5>
                            <h5>Terminal Neiva -> Bogotá -> jun-21-2021</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 card">
                        <div class="col-md-12" style="padding-top: 15px;">
                            <button type="button" class="btn btn-primary" style="float: right;">Seleccionar Regreso</button>
                        </div> 
                    </div>
                </div>          
            </div>

            <!-- buses disponibles -->
            <div class="row row-5">
                <!-- filtros -->
                <div class="col-5 col-md-2 hidden-sm hidden-xs card event-schedule rounded border pr-0 pl-0" style="height: 300px;">
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
                <div class="col-5 col-md-10 col-sm-12">
                    <div class="col-md-12">
                        <p>
                            <b>17 buses</b> encontrados desde <b> Terminal Neiva</b> hacia <b> Bogotá</b>
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
                    <div class="col-lg-12 mt-4 pt-4" style="padding-left: 0 !important; padding-right:0 !important;">
                        <div class="card event-schedule rounded border" style="padding-top: 15px; padding-bottom: 15px;">
                            <div class="row">
                                <div class=" col-sm-12 col-md-2">
                                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" width="170">
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
                    </div>
                    <div class="col-lg-12 mt-4 pt-4" style="padding-left: 0 !important; padding-right:0 !important;">
                        <div class="card event-schedule rounded border" style="padding-top: 15px; padding-bottom: 15px;">
                            <div class="row">
                                <div class=" col-sm-12 col-md-2">
                                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" width="170">
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
                        <div class="card event-schedule rounded border" style="padding-top: 15px; padding-bottom: 15px;">
                            <div class="row">
                                <div class=" col-sm-12 col-md-2">
                                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" width="170">
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
                        <div class="card event-schedule rounded border" style="padding-top: 15px; padding-bottom: 15px;">
                            <div class="row">
                                <div class=" col-sm-12 col-md-2">
                                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" width="170">
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
                    </div>
                </div>
                <!-- horarios buses-end -->
                
            </div>
        </div>
    </section>
    
@endsection