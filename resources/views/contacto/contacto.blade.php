@extends('layouts.app')

@section('title')Contáctanos @endsection

@section('MyStyles')@endsection

@section('MainScripts')
    {{-- <script>
        // agregar propiedad de header estatico
        $(".sticky").addClass("nav-sticky");

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            $(".sticky").addClass("nav-sticky");


            if (scroll >= 50) {
                $(".sticky").addClass("nav-sticky");
            } 
        });

    </script> --}}
@endsection

@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100" id="counter" style="background: url('{{ asset('assets/images/dobleyo-index.jpg') }}') center center;background-size:cover;">
        <div class="bg-overlay bg-overlay-dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h1 class="heading text-white">Contáctenos</h1>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="/">Inicio</a>
                                    </li>
                                    {{-- <li class="breadcrumb-item">
                                        <a href="#">Nosotros</a>
                                    </li> --}}
                                    <li class="breadcrumb-item active">Contácto</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Start Contact -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6  mt-4 pt-2">
                    <div class="card shadow rounded border-0">
                        <div class="card-body py-5">
                            <h4 class="card-title">Contáctanos</h4>
                            <div class="custom-form mt-4">
                                <div id="message"></div>
                                <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Nombre <span class="text-danger">*</span></label>
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="nombre" id="nombre" type="text" class="form-control pl-5" placeholder="Nombre">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Correo <span class="text-danger">*</span></label>
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="correo" id="correo" type="email" class="form-control pl-5" placeholder="Correo">
                                            </div> 
                                        </div><!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Asunto</label>
                                                <i data-feather="book" class="fea icon-sm icons"></i>
                                                <input name="asunto" id="asunto" type="text" class="form-control pl-5" placeholder="Asunto">
                                            </div>                                                                               
                                        </div><!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Mensaje</label>
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="mensaje" id="mensaje" rows="4" class="form-control pl-5" placeholder="Mensaje"></textarea>
                                            </div>
                                        </div>
                                    </div><!--end row-->
                                    
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Enviar Mensaje">
                                            <div id="simple-msg"></div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form--> 
                            </div><!--end custom-form-->
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-md-6 pl-md-3 pr-md-3 mt-4 pt-2">
                    <div class="card map map-height-two rounded map-gray border-0">
                        <div class="card-body p-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37907.620238776086!2d-75.29801640022318!3d2.9453564031904595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b74f6fc3007c3%3A0x28255ac69ce31947!2sCootranshuila!5e0!3m2!1sen!2sco!4v1625848424298!5m2!1sen!2sco" style="border:0" class="rounded" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        
        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-md-4">
                    <div class="card contact-detail text-center border-0">
                        <div class="card-body p-0">
                            <div class="icon">
                                <img src="{{asset('assets/images/icon/call.svg')}}" class="avatar avatar-small" alt="">
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Telefono</h4>
                                {{-- <p class="text-muted">Start working with Landrick that can provide everything</p> --}}
                                <a href="tel:8756368" class="text-primary">(8)875 6365 | 8756368</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card contact-detail text-center border-0">
                        <div class="card-body p-0">
                            <div class="icon">
                                <img src="{{asset('assets/images/icon/Email.svg')}}" class="avatar avatar-small" alt="">
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Correo</h4>
                                {{-- <p class="text-muted">Start working with Landrick that can provide everything</p> --}}
                                <a href="mailto:clientes@cootranshuila.com" class="text-primary">clientes@cootranshuila.com</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card contact-detail text-center border-0">
                        <div class="card-body p-0">
                            <div class="icon">
                                <img src="{{asset('assets/images/icon/location.svg')}}" class="avatar avatar-small" alt="">
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Dirección</h4>
                                {{-- <p class="text-muted">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p> --}}
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37907.620238776086!2d-75.29801640022318!3d2.9453564031904595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b74f6fc3007c3%3A0x28255ac69ce31947!2sCootranshuila!5e0!3m2!1sen!2sco!4v1625848424298!5m2!1sen!2sco" class="video-play-icon h6 text-primary">Av. 26 No. 4-82, Neiva - Huila</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End contact -->
@endsection