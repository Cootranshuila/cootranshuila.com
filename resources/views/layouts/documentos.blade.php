@extends('layouts.app')
@section('title') Dian @endsection

@section('content')

<section class="bg-half bg-light d-table w-100" id="counter" style="background: url('{{ asset('assets/images/dobleyo-index.jpg') }}') center center;background-size:cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title text-white">Información Dian</h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item">
                                    <a href="/inicio">Inicio</a>
                                </li>
                                <!--<li class="breadcrumb-item">
                                    <a href="#">Nosotros</a>
                                </li>-->
                                <li class="breadcrumb-item active">Esal - 2019</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<!--<style type="text/css">
    html, body, div, iframe { margin:0; padding:0; height:100%; }
    iframe { display:block; width:100%; border:none; }
</style>-->

<section class="section container explore-feature blog">
   <!--Acordion-->
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0 text-center">
                <button class="btn btn-link text-primary collapsed " data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Antecedentes Judiciales
                </button>
                </h5>
            </div>
        
            <div id="collapseOne" class="collapse hidden" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body text-center">
                    <iframe src="doc/ANTECEDENTES JUDICIALES.pdf" width="700" height="500" ></iframe>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0 text-center">
                <button class="btn btn-link text-primary collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Certificado Artículo 364-5
                </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body text-center">
                    <iframe src="doc/CERTIFICADO ARTICULO 364-5.pdf" width="700" height="500" ></iframe>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0 text-center">
                <button class="btn btn-link text-primary collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Certificado de Existencia y Representación Legal
                </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body text-center">
                    <iframe src="doc/CERTIFICADO DE EXISTENCIA Y REPRESENTACION LEGAL.pdf" width="700" height="500" ></iframe>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0 text-center">
                <button class="btn btn-link text-primary collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Certificado de Reinversión
                </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body text-center">
                    <iframe src="doc/CERTIFICADO DE REINVERSION.pdf" width="700" height="500" ></iframe>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFive">
                <h5 class="mb-0 text-center">
                <button class="btn btn-link text-primary collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Certificado de Pagos a Directivos
                </button>
                </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body text-center">
                    <iframe src="doc/CERTIFICADO PAGOS A DIRECTIVOS.pdf" width="700" height="500" ></iframe>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingSix">
                <h5 class="mb-0 text-center">
                <button class="btn btn-link text-primary collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Estados Fancieros 2018
                </button>
                </h5>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body text-center">
                    <iframe src="doc/ESTADOS FINANCIEROS 2018.pdf" width="700" height="500" ></iframe>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingSeven">
                <h5 class="mb-0 text-center">
                <button class="btn btn-link text-primary collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Informe de Gestión
                </button>
                </h5>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body text-center">
                    <iframe src="doc/INFORME GESTION.pdf" width="700" height="500" ></iframe>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingOcho">
                <h5 class="mb-0 text-center">
                <button class="btn btn-link text-primary collapsed" data-toggle="collapse" data-target="#collapseOcho" aria-expanded="false" aria-controls="collapseOcho">
                    Memoria Económica
                </button>
                </h5>
            </div>
            <div id="collapseOcho" class="collapse" aria-labelledby="headingOcho" data-parent="#accordion">
                <div class="card-body text-center">
                    <iframe src="doc/MEMORIA ECONOMICA.pdf" width="700" height="500" ></iframe>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingNine">
                <h5 class="mb-0 text-center">
                <button class="btn btn-link text-primary collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    Misión
                </button>
                </h5>
            </div>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                <div class="card-body text-center">
                    <iframe src="doc/MISION.pdf" width="700" height="500" ></iframe>
                </div>
            </div>
        </div>
  </div>
<!--Fin acordion-->
</section>

@endsection