@extends('layouts.app')

@section('title')Login - clientes preferenciales @endsection

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
                        <img src="{{asset('assets/images/user/login.svg')}}" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="login-page bg-white rounded ">
                        <div class="card-body">
                            <h4 class="card-title text-center">Bienvenido</h4>  
                            <form class="login-form mt-4" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row">                                
                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <label>Correo Electronico <span class="text-danger">*</span></label>
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="email" class="form-control pl-5" placeholder="Correo" name="email" required>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <label>Contraseña <span class="text-danger">*</span></label>
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5" placeholder="Contraseña" name="password" required>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" {{ old('customCheck1') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="customCheck1">Recuerdame</label>
                                                </div>
                                            </div>
                                            <p class="forgot-pass mb-0"><a href="{{ route('password.request') }}" class="text-dark font-weight-bold">Olvidaste tu contraseña?</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-0">
                                        <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                                    </div>
                                    <div class="col-lg-12 mt-4 text-center">
                                        <h6>Puedes iniciar con</h6>
                                        <ul class="list-unstyled social-icon mb-0 mt-3">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="fab fa-facebook-f"></i></a></li>
                                            {{-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li> --}}
                                            {{-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li> --}}
                                            {{-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li> --}}
                                            {{-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="google" class="fea icon-sm fea-social"></i></a></li> --}}
                                            <li class="list-inline-item"><a href="/auth/redirect/google" class="rounded"><i class="fab fa-google"></i></a></li>
                                        </ul><!--end icon-->
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">No tienes una cuenta?</small> <a href="{{route('register')}}" class="text-dark font-weight-bold">Registrate</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!---->
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
@endsection