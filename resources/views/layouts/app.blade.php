
<!DOCTYPE html>
<html lang="es">

@include('layouts.head')

<!--<style type="text/css"> 
    html, body, div, iframe { 
    margin:0; 
    padding:0; 
    height:100%; 
    } 
    iframe { 
    display:block; 
    width:100%; 
    border:none; } 
</style>-->
<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navbar STart -->
    @include('layouts.header')
    <!-- Navbar End -->

    {{-- CONTENT PAGE --}}
    @yield('content')

    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->

    {{-- Modal compra rapida --}}
    <div class="modal fade" id="compra_rapida" tabindex="-1" role="dialog" aria-labelledby="ModalCompraRapida" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded shadow border-0">
                <div class="modal-body">
                    <div class="bg-white p-0 p-sm-3 rounded box-shadow">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-4 h3">¡Compra ya tu tiquete!</h5>

                            <form class="login-form" action="/GetDisponiblesIda" method="POST">
                                @csrf
                                <div class="row">
                                    {{-- <div id="preloader" class="preloader position-absolute d-none">
                                        <div id="status" class="text-center">
                                            <div class="spinner spinner-border text-success">
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-12">
                                        <div class="form-group position-relative mb-0">
                                            <label>Ciudad Origen</label>
                                            <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                            <select class="form-control custom-select pl-5" name="optOrigen" id="optOrigen_fast" required>
                                                <option selected="" disabled>Seleccione origen</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center p-0 mt-1">
                                        <h4 class="p-0 m-0" onclick="cambiar_ciudades()"><i class="uil uil-exchange"></i></h4>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Ciudad Destino</label>
                                            <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                            <select class="form-control custom-select pl-5" name="optDestino" id="optDestino_fast" required>
                                                <option selected="" disabled>Seleccione destino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Fecha Ida: </label>
                                            <input name="date" type="text" class="flatpickr flatpickr-input form-control" id="checkin-date-modal" name="txtFecSalida" required>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Fecha Regreso: </label>
                                            <input name="date" type="text" class="flatpickr flatpickr-input form-control" id="checkout-date" name="txtFecRegreso">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success w-100">Buscar</button>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <img src="{{ asset('assets/images/pagos.png') }}" alt="Metodos de Pago" class="img-fluid">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal sucursales -->
    <div class="modal fade" id="ver_oficinas">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
        
                <!-- Modal Header -->
                {{-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> --}}
        
                <!-- Modal body -->
                <div class="modal-body">
                    <img src="{{asset('assets/images/sucursales.png')}}" class="img-fluid" alt="" width="766">
                </div>
            </div>
        </div>
    </div>

    <!-- modal viaja con tu mascota -->
    <div class="modal fade" id="mascota">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
        
                <!-- Modal Header -->
                {{-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> --}}
        
                <!-- Modal body -->
                <div class="modal-body">
                    <img src="{{asset('assets/images/mascota.png')}}" class="img-fluid" alt="" width="766">
                </div>

                <!-- modal footer -->
                <div class="modal-footer">
                    <a href="{{asset('assets/pdf/mascotas.pdf')}}" download="mascotas" class="btn btn-primary"><i class="mdi mdi-download"></i> Descargar PDF</a>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->
    @include('layouts.scripts')
</body>
</html>
