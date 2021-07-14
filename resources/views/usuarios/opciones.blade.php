@extends('layouts.app')

@section('title')Perfil @endsection

@section('MyStyles')@endsection

@section('MainScripts')
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
@endsection

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
                        
                        <!-- cambiar imagen de perfil -->
                        <div class="mt-3 text-md-left text-center d-sm-flex">
                            @if (auth()->user()->avatar)
                                <img src="{{asset(auth()->user()->avatar)}}" class="avatar float-md-left avatar-medium rounded-circle shadow mr-md-4" alt="">
                            @else   
                                <img src="{{asset('assets/images/user/usuario.svg')}}" class="avatar float-md-left avatar-medium rounded-circle shadow mr-md-4" alt="">
                            @endif  
                            {{-- <img src="{{asset('assets/images/user/usuario.svg')}}" class="avatar float-md-left avatar-medium rounded-circle shadow mr-md-4" alt=""> --}}
                            
                            <div class="mt-md-4 mt-3 mt-sm-0">
                                <a href="javascript:void(0)" class="btn btn-primary mt-2" data-toggle="modal" data-target="#change_foto">Cambiar Foto</a>
                                
                                {{-- <a href="javascript:void(0)" class="btn btn-outline-primary mt-2 ml-2"></a> --}}
                            </div>
                        </div>

                        <!-- formulario actualizar datos-->
                        <form action="/dashboard/opciones/actualizar" method="POST">
                            @csrf
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Tipo</label>
                                        <i data-feather="list" class="fea icon-sm icons"></i>
                                        {{-- <input name="identificacion" id="identificacion" type="number" class="form-control pl-5" placeholder="Identificacion"> --}}
                                        <select class="form-control pl-5" name="tipo" id="tipo" required>
                                            <option value="">Tipo documento</option>
                                            <option value="CC" {{auth()->user()->tipo_documento == 'CC' ? 'selected' : ''}}>Cedula de Ciudadania</option>
                                            <option value="CE" {{auth()->user()->tipo_documento == 'CE' ? 'selected' : ''}}>Cedula extranjeria</option>
                                            <option value="PS" {{auth()->user()->tipo_documento == 'PS' ? 'selected' : ''}}>Pasaporte</option>
                                            <option value="TI" {{auth()->user()->tipo_documento == 'TI' ? 'selected' : ''}}>Tarjeta identidad</option>
                                            <option value="RC" {{auth()->user()->tipo_documento == 'RC' ? 'selected' : ''}}>Registro civil</option>
                                        </select>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Identificación</label>
                                        <i data-feather="info" class="fea icon-sm icons"></i>
                                        <input name="identificacion" id="identificacion" type="number" class="form-control pl-5" placeholder="Identificacion" value="{{auth()->user()->identificacion}}" autocomplete="off" required>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Nombre</label>
                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                        <input name="nombre" id="first" type="text" class="form-control pl-5" placeholder="Nombre" value="{{auth()->user()->name}}" autocomplete="off" required>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Apellido</label>
                                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                                        <input name="apellido" id="last" type="text" class="form-control pl-5" placeholder="Apellido" value="{{auth()->user()->apellido}}" autocomplete="off" required>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Correo</label>
                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                        <input name="correo" id="email" type="email" class="form-control pl-5" placeholder="Correo" value="{{auth()->user()->email}}" autocomplete="off" required>
                                    </div> 
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Telefono</label>
                                        <i data-feather="phone" class="fea icon-sm icons"></i>
                                        <input name="telefono" id="number" type="number" class="form-control pl-5" placeholder="Telefono" value="{{auth()->user()->telefono}}" autocomplete="off" required>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Dirección</label>
                                        {{-- <i data-feather="user-check" class="fea icon-sm icons"></i> --}}
                                        <input type="text" class="form-control"  name="direccion" value="{{auth()->user()->direccion}}" autocomplete="off">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Fecha Nacimiento</label>
                                        {{-- <i data-feather="user-check" class="fea icon-sm icons"></i> --}}
                                        <input type="date" class="flatpickr flatpickr-input form-control" id="checkin-date" name="fecha_nacimiento" value="{{auth()->user()->fecha_nacimiento}}">
                                    </div>
                                </div><!--end col-->
                                
                                {{-- <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Description</label>
                                        <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                        <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Description :"></textarea>
                                    </div>
                                </div> --}}
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-primary" value="Guardar Cambios">
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->

                        <!-- formulario cambiar contraseña -->
                        <div class="row">
                            <div class="col-md-6 mt-4 pt-2"> 
                                <h5>Cambiar Contraseña :</h5>
                                <form action="/dashboard/opciones/update-password" method="POST">
                                    @csrf
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Contraseña actual :</label>
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" name="pass_actual" class="form-control pl-5" placeholder="Contraseña actual" required>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Contraseña nueva :</label>
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" name="pass_new" class="form-control pl-5" placeholder="Contraseña nueva" required>
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
                                            <button type="submit" class="btn btn-primary">Cambiar</button>
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