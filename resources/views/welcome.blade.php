@extends('layouts.app')

@section('title')Inicio @endsection

@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('{{ asset('assets/images/dobleyo-index.jpg') }}') center center;background-size:cover;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="title-heading">
                    <h4 class="text-white-50">We are creative</h4>
                    <h4 class="heading text-white title-dark"> Best IT Solution <br> Company </h4>
                    <p class="para-desc text-white-50">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                    <div class="mt-4 pt-2">
                        <a href="javascript:void(0)" class="btn btn-light">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 float-right">
                <div class="card login_page shadow rounded border-0 ml-lg-5">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4 h3">¡Compra ya tu tiquete!</h5>

                        <form class="login-form" action="https://cootranshuila.teletiquete.com/" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Ciudad Origen</label>
                                        <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                        <select class="form-control custom-select pl-5" name="optOrigen" id="optOrigen" required>
                                            <option selected="">Seleccione origen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Ciudad Destino</label>
                                        <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                        <select class="form-control custom-select pl-5" name="optDestino" id="optDestino" required>
                                            <option selected="">Seleccione destino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Fecha Ida: </label>
                                        <input name="date" type="text" class="flatpickr flatpickr-input form-control" id="checkin-date" name="txtFecSalida" required>
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
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
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

<!-- Partners start -->
<section class="py-4 border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{ asset('assets/images/client/amazon.svg') }}" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{ asset('assets/images/client/google.svg') }}" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{ asset('assets/images/client/lenovo.svg') }}" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{ asset('assets/images/client/paypal.svg') }}" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{ asset('assets/images/client/shopify.svg') }}" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{ asset('assets/images/client/spotify.svg') }}" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Partners End -->

<!-- Feature Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Beautiful & Creative Interfaces</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('assets/images/icon/pen.svg') }}" class="avatar avatar-small" alt="">
                    </div>

                    <div class="content mt-4">
                        <h4 class="title-2">Design & Development</h4>
                        <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a eleifend Aliquam aenean elementum semper.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('assets/images/icon/video.svg') }}" class="avatar avatar-small" alt="">
                    </div>

                    <div class="content mt-4">
                        <h4 class="title-2">Management & Marketing</h4>
                        <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the text established by compiling unusual word.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('assets/images/icon/intellectual.svg') }}" class="avatar avatar-small" alt="">
                    </div>

                    <div class="content mt-4">
                        <h4 class="title-2">Stratagy & Research</h4>
                        <p class="text-muted mb-0">It seems that only fragments of the original text remain in the Lorem the original Ipsum texts used today.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('assets/images/company/about.jpg') }}" class="rounded img-fluid mx-auto d-block" alt="">
                    <div class="play-icon">
                        <a href="http://vimeo.com/287684225" class="play-btn video-play-icon">
                            <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                        </a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="section-title ml-lg-4">
                    <h4 class="title mb-4">Startup Business Solution</h4>
                    <p class="text-muted">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                    </ul>
                    <a href="javascript:void(0)" class="btn btn-primary mt-3">Buy Now <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <i data-feather="monitor" class="fea icon-ex-md text-primary"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Fully Responsive</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <i data-feather="heart" class="fea icon-ex-md text-primary"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Browser Compatibility</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <i data-feather="eye" class="fea icon-ex-md text-primary"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Retina Ready</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <i data-feather="bold" class="fea icon-ex-md text-primary"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Based On Bootstrap 4</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <i data-feather="feather" class="fea icon-ex-md text-primary"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Feather Icons</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <i data-feather="code" class="fea icon-ex-md text-primary"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Built With SASS</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <i data-feather="user-check" class="fea icon-ex-md text-primary"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">W3c Valid Code</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <i data-feather="git-merge" class="fea icon-ex-md text-primary"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Flaticon Icons</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <i data-feather="settings" class="fea icon-ex-md text-primary"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Easy to customize</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-12 text-center">
                <a href="javascript:void(0)" class="btn btn-primary">See More <i class="mdi mdi-arrow-right"></i></a>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">See everything about your <span class="text-primary">Landrick</span></h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row" id="counter">
            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center">
                    <img src="{{ asset('assets/images/illustrator/Asset190.svg') }}" class="avatar avatar-small" alt="">
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-count="45000">11000</span>$</h2>
                    <h6 class="counter-head text-muted">Investment</h6>
                </div><!--end counter box-->
            </div>

            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center">
                    <img src="{{ asset('assets/images/illustrator/Asset189.svg') }}" class="avatar avatar-small" alt="">
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-count="9">1</span>+</h2>
                    <h6 class="counter-head text-muted">Awards</h6>
                </div><!--end counter box-->
            </div>

            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center">
                    <img src="{{ asset('assets/images/illustrator/Asset186.svg') }}" class="avatar avatar-small" alt="">
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-count="48002">12050</span>$</h2>
                    <h6 class="counter-head text-muted">Profitability</h6>
                </div><!--end counter box-->
            </div>

            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center">
                    <img src="{{ asset('assets/images/illustrator/Asset187.svg') }}" class="avatar avatar-small" alt="">
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-count="11">3</span>%</h2>
                    <h6 class="counter-head text-muted">Growth</h6>
                </div><!--end counter box-->
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- About End -->

<!-- CTA Start -->
<section class="section bg-cta" style="background: url('{{ asset('assets/images/2.jpg') }}') center center;" id="cta">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title title-dark text-white mb-4">We Are Creative Dreamers and Innovators</h4>
                    <p class="text-light para-dark para-desc mx-auto">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    <a href="http://vimeo.com/287684225" class="play-btn border border-light mt-4 video-play-icon">
                        <i data-feather="play" class="fea icon-ex-md text-white title-dark"></i>
                    </a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- CTA End -->

<!-- Price Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Charge your creative inspiration</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card pricing-rates business-rate shadow bg-light border-0 rounded">
                    <div class="card-body">
                        <h2 class="title text-uppercase mb-4">Free</h2>
                        <div class="d-flex mb-4">
                            <span class="h4 mb-0 mt-2">$</span>
                            <span class="price h1 mb-0">0</span>
                            <span class="h4 align-self-end mb-1">/mo</span>
                        </div>

                        <ul class="list-unstyled mb-0 pl-0">
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                        </ul>
                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card pricing-rates business-rate shadow bg-white border-0 rounded">
                    <div class="card-body">
                        <h2 class="title text-uppercase text-primary mb-4">Starter</h2>
                        <div class="d-flex mb-4">
                            <span class="h4 mb-0 mt-2">$</span>
                            <span class="price h1 mb-0">39</span>
                            <span class="h4 align-self-end mb-1">/mo</span>
                        </div>

                        <ul class="list-unstyled mb-0 pl-0">
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Free Appointments</li>
                        </ul>
                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card pricing-rates business-rate shadow bg-light border-0 rounded">
                    <div class="card-body">
                        <h2 class="title text-uppercase mb-4">Professional</h2>
                        <div class="d-flex mb-4">
                            <span class="h4 mb-0 mt-2">$</span>
                            <span class="price h1 mb-0">59</span>
                            <span class="h4 align-self-end mb-1">/mo</span>
                        </div>

                        <ul class="list-unstyled mb-0 pl-0">
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>1 Domain Free</li>
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                        </ul>
                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card pricing-rates business-rate shadow bg-light border-0 rounded">
                    <div class="card-body">
                        <h2 class="title text-uppercase mb-4">Ultimate</h2>
                        <div class="d-flex mb-4">
                            <span class="h4 mb-0 mt-2">$</span>
                            <span class="price h1 mb-0">79</span>
                            <span class="h4 align-self-end mb-1">/mo</span>
                        </div>

                        <ul class="list-unstyled mb-0 pl-0">
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>1 Domain Free</li>
                            <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Free Installment</li>
                        </ul>
                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Started Now</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- Price End -->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <img src="{{ asset('assets/images/illustrator/Startup_SVG.svg') }}" class="img-fluid" alt="">
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ml-lg-5">
                    <h4 class="title mb-4">A better compose with landrick marketing</h4>
                    <p class="text-muted">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                    <ul class="list-unstyled mb-0 text-muted">
                        <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                    </ul>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Important Clients Review</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-9 mt-4 pt-2 text-center">
                <div id="owl-fade" class="owl-carousel owl-theme">
                    <div class="customer-testi text-center">
                        <p class="text-muted h6 font-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                        <img src="{{ asset('assets/images/client/01.jpg') }}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        <ul class="list-unstyled mb-0 mt-3">
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        </ul>
                        <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                    </div><!--end customer testi-->

                    <div class="customer-testi text-center">
                        <p class="text-muted h6 font-italic">" The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout. "</p>
                        <img src="{{ asset('assets/images/client/02.jpg') }}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        <ul class="list-unstyled mb-0 mt-3">
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        </ul>
                        <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                    </div><!--end customer testi-->

                    <div class="customer-testi text-center">
                        <p class="text-muted h6 font-italic">" There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories. "</p>
                        <img src="{{ asset('assets/images/client/03.jpg') }}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        <ul class="list-unstyled mb-0 mt-3">
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        </ul>
                        <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                    </div><!--end customer testi-->

                    <div class="customer-testi text-center">
                        <p class="text-muted h6 font-italic">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero in 45 BC. Allegedly, a Latin scholar established the origin of the text by compiling all the instances of the unusual word 'consectetur' he could find "</p>
                        <img src="{{ asset('assets/images/client/04.jpg') }}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        <ul class="list-unstyled mb-0 mt-3">
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        </ul>
                        <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                    </div><!--end customer testi-->

                    <div class="customer-testi text-center">
                        <p class="text-muted h6 font-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                        <img src="{{ asset('assets/images/client/05.jpg') }}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        <ul class="list-unstyled mb-0 mt-3">
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        </ul>
                        <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                    </div><!--end customer testi-->

                    <div class="customer-testi text-center">
                        <p class="text-muted h6 font-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. "</p>
                        <img src="{{ asset('assets/images/client/06.jpg') }}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                        <ul class="list-unstyled mb-0 mt-3">
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        </ul>
                        <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                    </div><!--end customer testi-->
                </div><!--end owl carousel-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!--end Price-->
@endsection
