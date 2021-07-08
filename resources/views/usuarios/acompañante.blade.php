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
                <div class="rounded shadow p-4">
                    <h5>Members:</h5>

                    <div class="row">
                        <div class="col-lg-6 col-md-4 mt-4 pt-2">
                            <div class="text-center">
                                <img src="images/client/01.jpg" class="avatar avatar-medium shadow-lg rounded-pill" alt="">
                                <div class="content mt-3">
                                    <a href="javascript:void(0)" class="h5 text-dark">Calvin Carlo</a>
                                    <ul class="list-unstyled social-icon social mb-0 mt-2">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                    <a href="javascript:void(0)" class="btn btn-primary"><i data-feather="mail" class="fea icon-sm"></i> Send Message</a>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-lg-6 col-md-4 mt-4 pt-2">
                            <div class="text-center">
                                <img src="images/client/02.jpg" class="avatar avatar-medium shadow-lg rounded-pill" alt="">
                                <div class="content mt-3">
                                    <a href="javascript:void(0)" class="h5 text-dark">Calvin Carlo</a>
                                    <ul class="list-unstyled social-icon social mb-0 mt-2">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                    <a href="javascript:void(0)" class="btn btn-primary"><i data-feather="mail" class="fea icon-sm"></i> Send Message</a>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-lg-6 col-md-4 mt-4 pt-2">
                            <div class="text-center">
                                <img src="images/client/03.jpg" class="avatar avatar-medium shadow-lg rounded-pill" alt="">
                                <div class="content mt-3">
                                    <a href="javascript:void(0)" class="h5 text-dark">Calvin Carlo</a>
                                    <ul class="list-unstyled social-icon social mb-0 mt-2">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                    <a href="javascript:void(0)" class="btn btn-primary"><i data-feather="mail" class="fea icon-sm"></i> Send Message</a>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-lg-6 col-md-4 mt-4 pt-2">
                            <div class="text-center">
                                <img src="images/client/04.jpg" class="avatar avatar-medium shadow-lg rounded-pill" alt="">
                                <div class="content mt-3">
                                    <a href="javascript:void(0)" class="h5 text-dark">Calvin Carlo</a>
                                    <ul class="list-unstyled social-icon social mb-0 mt-2">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                    <a href="javascript:void(0)" class="btn btn-primary"><i data-feather="mail" class="fea icon-sm"></i> Send Message</a>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-lg-6 col-md-4 mt-4 pt-2">
                            <div class="text-center">
                                <img src="images/client/05.jpg" class="avatar avatar-medium shadow-lg rounded-pill" alt="">
                                <div class="content mt-3">
                                    <a href="javascript:void(0)" class="h5 text-dark">Calvin Carlo</a>
                                    <ul class="list-unstyled social-icon social mb-0 mt-2">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                    <a href="javascript:void(0)" class="btn btn-primary"><i data-feather="mail" class="fea icon-sm"></i> Send Message</a>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-lg-6 col-md-4 mt-4 pt-2">
                            <div class="text-center">
                                <img src="images/client/06.jpg" class="avatar avatar-medium shadow-lg rounded-pill" alt="">
                                <div class="content mt-3">
                                    <a href="javascript:void(0)" class="h5 text-dark">Calvin Carlo</a>
                                    <ul class="list-unstyled social-icon social mb-0 mt-2">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                    <a href="javascript:void(0)" class="btn btn-primary"><i data-feather="mail" class="fea icon-sm"></i> Send Message</a>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-lg-6 col-md-4 mt-4 pt-2">
                            <div class="text-center">
                                <img src="images/client/07.jpg" class="avatar avatar-medium shadow-lg rounded-pill" alt="">
                                <div class="content mt-3">
                                    <a href="javascript:void(0)" class="h5 text-dark">Calvin Carlo</a>
                                    <ul class="list-unstyled social-icon social mb-0 mt-2">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                    <a href="javascript:void(0)" class="btn btn-primary"><i data-feather="mail" class="fea icon-sm"></i> Send Message</a>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-lg-6 col-md-4 mt-4 pt-2">
                            <div class="text-center">
                                <img src="images/client/08.jpg" class="avatar avatar-medium shadow-lg rounded-pill" alt="">
                                <div class="content mt-3">
                                    <a href="javascript:void(0)" class="h5 text-dark">Calvin Carlo</a>
                                    <ul class="list-unstyled social-icon social mb-0 mt-2">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                    <a href="javascript:void(0)" class="btn btn-primary"><i data-feather="mail" class="fea icon-sm"></i> Send Message</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Profile End -->
@endsection