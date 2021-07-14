<!-- modal compra -->
<div class="modal fade" id="compra" tabindex="-1" role="dialog" aria-labelledby="ModalCompra" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-body">
                <div class="bg-white p-0 p-sm-3 rounded box-shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4 h3">¡Compra ya tu tiquete!</h5>

                        <form class="login-form" action="/GetDisponiblesIda" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Ciudad Origen</label>
                                        <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                        <select class="form-control custom-select pl-5 custom-select-2" name="optOrigen" id="optOrigen" required>
                                            <option selected="">Seleccione origen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Ciudad Destino</label>
                                        <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                        <select class="form-control custom-select pl-5 custom-select-2" name="optDestino" id="optDestino" required>
                                            <option selected="">Seleccione destino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Fecha Ida: </label>
                                        <input type="text" class="flatpickr flatpickr-input form-control" id="checkin-date" name="txtFecSalida" required>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Fecha Regreso: </label>
                                        <input type="text" class="flatpickr flatpickr-input form-control" id="checkout-date" name="txtFecRegreso">
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


<!-- modal agregar acompañante -->
<div class="modal fade" id="familiar" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-body">
                <div class="bg-white p-0 p-sm-3 rounded box-shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4 h3">Añadir Familiar</h5>
                        <!-- buscar por documento -->
                        <form>
                            <div class="row mt-4">                             
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Identificación</label>
                                        <i data-feather="info" class="fea icon-sm icons"></i>
                                        <input name="identificacion" id="identificacion" type="number" class="form-control pl-5" placeholder="Identificacion" autocomplete="off">
                                    </div>
                                </div><!--end col-->                             
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary" value="Agregar">
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->


                        <!-- mostrar datos-->
                        <form class="d-none">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Tipo</label>
                                        <i data-feather="list" class="fea icon-sm icons"></i>
                                        {{-- <input name="identificacion" id="identificacion" type="number" class="form-control pl-5" placeholder="Identificacion"> --}}
                                        <select class="form-control pl-5" name="tipo" id="tipo" required>
                                            <option value="">Tipo documento</option>
                                            <option value="CC">Cedula</option>
                                            <option value="CE">Cedula extranjeria</option>
                                            <option value="PS">Pasaporte</option>
                                            <option value="TI">Tarjeta identidad</option>
                                            <option value="RC">Registro civil</option>
                                        </select>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Identificación</label>
                                        <i data-feather="info" class="fea icon-sm icons"></i>
                                        <input name="identificacion" id="identificacion" type="number" class="form-control pl-5" placeholder="Identificacion">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Nombre</label>
                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                        <input name="name" id="first" type="text" class="form-control pl-5" placeholder="Nombre">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Apellido</label>
                                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                                        <input name="name" id="last" type="text" class="form-control pl-5" placeholder="Apellido">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Correo</label>
                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                        <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Correo">
                                    </div> 
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Telefono</label>
                                        <i data-feather="phone" class="fea icon-sm icons"></i>
                                        <input name="number" id="number" type="number" class="form-control pl-5" placeholder="Telefono">
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary" value="Agregar">
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal cambiar foto -->
<div class="modal fade" id="change_foto" tabindex="-1" role="dialog" aria-labelledby="ModalCompra" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-body">
                <div class="bg-white p-0 p-sm-3 rounded box-shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4 h3">Cambiar Foto Perfil</h5>

                        <form action="/dashboard/opciones/cambiar-imagen" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="avatar" class="btn btn-outline-primary mt-2 ml-2" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-outline-primary mt-2 ml-2">Cambiar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>