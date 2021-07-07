@extends('layouts.app')

@section('title')Perfil @endsection

@section('MyStyles')@endsection

@section('MainScripts')@endsection

@section('content')
    @include('usuarios.layouts.header')

    <!-- Profile Start -->
    <section class="section mt-60">
        <div class="container mt-lg-3">
            <div class="row">

               @include('usuarios.layouts.menu')

            <div class="col-lg-8 col-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5 class="text-md-left text-center">Datos Personales :</h5>

                        <div class="mt-3 text-md-left text-center d-sm-flex">
                            <img src="{{asset('assets/images/user/usuario.svg')}}" class="avatar float-md-left avatar-medium rounded-circle shadow mr-md-4" alt="">
                            
                            <div class="mt-md-4 mt-3 mt-sm-0">
                                <a href="javascript:void(0)" class="btn btn-primary mt-2">Cambiar Foto</a>
                                {{-- <a href="javascript:void(0)" class="btn btn-outline-primary mt-2 ml-2"></a> --}}
                            </div>
                        </div>

                        <form>
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
                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Description</label>
                                        <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                        <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Description :"></textarea>
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary" value="Guardar Cambios">
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->

                        
                        <div class="row">
                            {{-- <div class="col-md-6 mt-4 pt-2">
                                <h5>Contact Info :</h5>

                                <form>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Phone No. :</label>
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input name="number" id="number" type="number" class="form-control pl-5" placeholder="Phone :">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Website :</label>
                                                <i data-feather="globe" class="fea icon-sm icons"></i>
                                                <input name="url" id="url" type="url" class="form-control pl-5" placeholder="Url :">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12 mt-2 mb-0">
                                            <button class="btn btn-primary">Add</button>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end col--> --}}
                            
                            <div class="col-md-6 mt-4 pt-2"> 
                                <h5>Cambiar Contraseña :</h5>
                                <form>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Contraseña actual :</label>
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control pl-5" placeholder="Contraseña actual" required="">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Contraseña nueva :</label>
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control pl-5" placeholder="Contraseña nueva" required="">
                                            </div>
                                        </div><!--end col-->
    
                                        {{-- <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Confirmar contraseña :</label>
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control pl-5" placeholder="Confirmar contraseña" required="">
                                            </div>
                                        </div><!--end col--> --}}
    
                                        <div class="col-lg-12 mt-2 mb-0">
                                            <button class="btn btn-primary">Cambiar</button>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Profile End -->
@endsection