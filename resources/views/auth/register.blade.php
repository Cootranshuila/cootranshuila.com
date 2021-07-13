@extends('layouts.app')

@section('title')Registro - clientes preferenciales @endsection

@section('MyStyles')@endsection

@section('MainScripts')
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

    </script>
@endsection

@section('content')
    <!-- Hero Start -->
    <section class="bg-home d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="mr-lg-5">   
                        <img src="{{asset('assets/images/user/signup.svg')}}" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="login_page rounded" style="margin-top: 6rem;">
                        <div class="card-body">
                            {{-- <h4 class="card-title text-center">Registrate</h4>   --}}
                            <form class="login-form mt-4"  action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Identificación <span class="text-danger">*</span></label>
                                            <i data-feather="info" class="fea icon-sm icons"></i>
                                            <input type="number" class="form-control pl-5" placeholder="Identificación" name="identificacion" id="identificacion" required>
                                        </div>
                                        {{-- @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">                                               
                                            <label>Nombre <span class="text-danger">*</span></label>
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="text" class="form-control pl-5" placeholder="Nombre" name="name" id="name" required>
                                        </div>
                                        {{-- @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">                                                
                                            <label>Apellido <span class="text-danger">*</span></label>
                                            <i data-feather="user-check" class="fea icon-sm icons"></i>
                                            <input type="text" class="form-control pl-5" placeholder="Apellido" name="apellido" id="apellido" required>
                                        </div>                                   
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Correo Electronico <span class="text-danger">*</span></label>
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" class="form-control pl-5" placeholder="Correo" name="email" id="email" required>
                                        </div>
                                        {{-- @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Contraseña <span class="text-danger">*</span></label>
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5" placeholder="Contraseña" name="password" id="password" required>
                                        </div>
                                        {{-- @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                                <label class="custom-control-label" for="customCheck1">Acepto <a href="#" class="text-primary">Terminos y Condiciones</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                                    </div>
                                    <div class="col-lg-12 mt-4 text-center">
                                        <h6>Puedes registrarte con</h6>
                                        <ul class="list-unstyled social-icon mb-0 mt-3">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="fab fa-facebook-f"></i></a></li>
                                            {{-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li> --}}
                                            {{-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li> --}}
                                            {{-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li> --}}
                                            {{-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li> --}}
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="fab fa-google"></i></a></li>
                                            
                                        </ul><!--end icon-->
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Ya tienes una cuenta?</small> <a href="{{route('login')}}" class="text-dark font-weight-bold">Inicia Sesión</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
@endsection