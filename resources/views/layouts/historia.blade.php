@extends('layouts.app')
@section('title') Historia @endsection

@section('content')

    <section class="bg-half bg-light d-table w-100" id="counter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title">Nuestra historia</h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="#">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Nosotros</a>
                                    </li>
                                    <li class="breadcrumb-item active">Historia</li>
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

    <section class="section" id="fechas" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="main-icon aounded-pill text-primary text-center  pt-3" style="width: 70px; height: 70px; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%;">
                        <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-
                            linejoin="round" class="feather feather-star fea icon-md-sm">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>-->
                        <img src="assets/images/loog.png" Height="40px" Width="40px" class="ml-3 mr-3 mx-3" alt="logo" >
                    </div>
                    <div class="timeline-page pt-2 position-relative">
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        1937
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Gestión de creación de COOTRANSHUILA por parte de Urbano Cabrera
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                Escritura de constitución (Marzo 17 en Notaría 1 de Neiva).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        1938
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        1939
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Liquidación de empresa por falta de asistencia de socios a Asamblea y Consejo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-muted">
                                            <li class="text-justify">En Bus Escalera, Costo por pasaje Neiva - San Mateo(hoy Rivera) 10 centavos. </li>
                                            <!--<a title="Mostrar menos" onclick="historia()" ><strong>°°°</strong></a>-->
                                            <div id="1942">
                                                <li class="text-justify">Por Res. N° 287 (Min. Economía Nacional), nace COOTRANSHUILA LTDA con 22 socios con aporte a capital cada uno de $200 y cuota de admisión de $5. Asume como primer Gerente el Sr. Misael Dussan.</li>
                                                <li class="text-justify">Entra el Servicio Mixto o Chiva a zonas rurales de Neiva y Municipios de Teruel, Iquira y La Plata.</li>
                                                <li class="text-justify">Ampliación de Servicios a Campoalegre, Hobo, Gigante y Pitalito. <a type="button" id="menos" title="Mostrar menos" onclick="menoshistoria()" ><strong class="text-justify">...</strong></a></li>
                                            </div>
                                            <a type="button" id="mas" title="Mostrar más" onclick="mashistoria()" ><strong class="text-justify">...</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        1942
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        1957
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Se presta el Servicio al Departamento del Caquetá (Florencia - San Vicente) y posteriormente al Departamento del Cauca (Popayán).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                Se nombra al Señor Víctor Manuel Beltrán Molina (Q.E.P.D) como Gerente.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        1972
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        1973
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Amplianción de la capacidad transportadora que solo era de Mixtos a Buses y Busetas por carretera.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                Presentación de Servico con Buses y Busetas Interdepartamentales los mismo de Taxis y Camperos Intermunicipales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        1974
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        1978
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Funcionamiento de Servicio Urbano con Buses y Busetas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                Amplianción de capacidad transportadora de Servicio urbano: Buses y Busetas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        1980
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        1982
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Prestanción de Servico de Transporte de Carga a Todo el País con Tractomulas, Doble Troque y Camiones. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                Aumento de variedad de servicios con Taxis de Servicio Urbano.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        1983
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        1988
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Prestanción de Servico de Lujo a ciudades: Bogotá, Neiva, Mocoa, Popayán y Cali.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-muted">
                                            
                                                <li class="text-justify">Presentación de Servicio Especial en Buses, Busetas y Colectivos contratados por Empresas Petroleras radicadas en el Huila.</li>
                                                <li class="text-justify">Inauguración de nueva Sede Administrativa y remodelación total de la Estación de Servicio (Costo de $250.000.000), para ofrecer a clientes y asociados una moderna sede para las ventas de combutible y lubricantes (convenio con Terpel del Sur S.A)</li>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        1990
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        1992
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Celebración de Bodas de Oro de COOTRANSHUILA LTDA.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                Presentación de Servicio de Encomiendas en Camiones y Furgones.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        1994
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        1995
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Presentación de Servicio con Buses de Lujo a Ibagué, Armenia, Pereira, Manizales y Mocoa.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                Presentación de Servicio en Buses Aero Suite de Lujo. Por Res. N° 03256 (min. Transporte) se adjudica a COOTRANSHUILA la Licencia Internacional de Servicios de Pasajeros.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        1998
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        1999
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Se nombra al Señor Salomón Serrato Suárez, como Gerente General de la Cooperativa. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                Fallece el Señor Víctor Manuel Beltrán Molina (26 años como Gerente General).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        2000
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        2001
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Por Res. N° 8742 (Min. Transporte) se adjudica a COOTRANSHUILA LTDA, la licencia de Servicio Aero Suite Preferencial de Súper Lujo a Bogotá, Neiva, Cali, Pitalito, San Agustín y La Plata. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                COOTRANSHUILA LTDA, cumple 60 años en actividad transportadora cubriendo: Huila, Tolima, Caquetá, Cauca, Putumayo, Cundinamarca, Valle, Quindío, Risaralda y Caldas. (45 oficinas en los 10 Departamentos generando 218 empleos directos y 2.500 indirectos). Hacen parte de la empresa 420 asociados.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        2002
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        2003
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                A mediados de Mayo se inicia el proceso de certificación en la norma ISO 9001 - 2000 Gestión de la Calidad en la modalidad de Servicio Especial de Pasajeros. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                Se inicia el proceso de certificación en la norma BASC (Coalición Empresarial Anticontrabando) para la modalidad de Carga.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        2004
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----><div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        2005
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-muted">
                                            
                                                <li class="text-justify">En Febrero se inician las labores de construcción de la estación de servicio de INVERSIONES COOTRANSHUILA S.A, la cual se encuentra ubicada en el kilómetro 2 de la vía a Bogotá.</li>
                                                <li class="text-justify">Durante el mes de Noviembre (01) se inaugura oficialmente la estación de servicio de INVERSIONES COOTRANSHUILA S.A</li>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        2006
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        2007
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-muted">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            
                                                <li class="text-justify">En Mayo se obtiene la recertificación en la norma BASC.</li>
                                                <li class="text-justify">Se inicia en Agosto la construcción de los surtidores de gas vehicular. Octubre 02 se recibe la auditoría por parte del Icontec y somos nuevamente certificados en la ISO 9001 - 2000 por un año más.</li>
                                                <li class="text-justify">En Diciembre se inagura la estación de gas vehicular y se da al servicio del público.</li>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-muted">
                                            
                                            <li class="text-justify">En Marzo 25 se inician los trabajos de remodelación del primer piso del área administrativa, el 27 se realizó la 74 asamblea general ordinaria informativa, en las instalaciones del club campestre Neiva.</li>
                                            <li class="text-justify">En Junio 16 se trasladan a las nuevas instalaciones del primer piso. Julio 14 se inician los trabajos de remodelación del segundo piso, los cuales se terminaron al 04 de Noviembre, trasladándose el personal el 08 de Noviembre.</li>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        2008
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        2009
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            <p class="mt-3 mb-0 text-muted">
                                                Se inicia en enero la remodelación de la Estación de Servicio la cual fue terminada en Mayo. En Julio FENALCO exaltó los méritos a Don Salomón Serrato Suárez y le hace merecedor del galardón como buen ciudadano.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                Lanzamiento de una moderna flota de buses de súper lujo Preferencial VIP, con un equipamiento tecnológico, servicio a bordo, dos conductores, dos baños, música y películas seleccionadas, servicio de WIFI.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        2010
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        2011
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-muted">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            
                                                <li class="text-justify">Se realizó una remodelación total a la Sala VIP ubicada en el Terminal de Transporte de la ciudad de Bogotá.</li>
                                                <li class="text-justify">La empresa fue certificada en OSHAS 18001 - 2008, otorgada por el instituto de normas técnicas Incontec; esta norma enmarca salud ocupacional, seguridad insdustrial y HSE.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-muted">
                                            
                                                <li class="text-justify">En Octubre fue adjudicado el contrato de prestación de servicio de transporte de personas y cosas con la Electrificadora del Huila por tres años, adquiriendo la empresa 35 camionetas Chevrolet Dimax y tres camionetas Captiva Chevrolet, todos últimos modelos, para cumplir con el contrato.</li>
                                                <li class="text-justify">Mediante convenio con seguros QBE la empresa empezó a ofrecer directamente en sus instalaciones la venta del seguro obligatorio SOAT.</li>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        2012
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        2013
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-muted">
                                            <!--<h5 class="mb-0 text-capitalize"></h5>-->
                                            
                                                <li class="text-justify">Se adquirió lote de terreno de 4.900 M², ubicados al frente del Terminal de Transporte de Neiva, para futuros proyectos de la empresa.</li>
                                                <li class="text-justify">Fue adjudicado de nuevo el contrato de Servicio Especial de pasajeros con Ecopetrol por un término de tres años.</li>
                                                <li class="text-justify">El primero de Octubre se inició el contrato con Emgesa Concesión el Quimbo del Servicio Especial Empresarial de pasajeros por el término de tres años, inicialmente con diez buses de Servicio Especial.</li>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            <p class="mt-3 mb-0 text-muted text-left">
                                                Inicio de obras de construcción en la denominada Inversiones Cootranshuila del Sur S.A.S, en la ciudad de Pitalito, en la cual se contará con un hotel cómodo, satisfaciendo las necesidades de los huéspedes con zonas ambientales, cafetería y habitaciones confortables.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">
                                        2014
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                        2015
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="" class="img-fluid" alt>
                                        <div class="card-body text-justify">
                                            
                                            <p class="mt-3 mb-0 text-muted">
                                                Inicio de obras de construcción en la denominada Inversiones Cootranshuila del Sur S.A.S, en la ciudad de Pitalito, en la cual se contará con un hotel cómodo, satisfaciendo las necesidades de los huéspedes con zonas ambientales, cafetería y habitaciones confortables.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div>
        
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!--<section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="duration date-label-left  rounded p-2 px-4 position-relative ">
                                    1937
                                </div>
                                <div class="card-body">
                                    <p class="mt-3 mb-0 text-muted">
                                        Gestión de creación de COOTRANSHUILA por parte de Urbano Cabrera
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                    <img src="https://th.bing.com/th/id/OIP.m-KdsihljdYy5ZzgfzCwrAHaFr?pid=Api&rs=1" class="img-fluid" alt>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <script src="assets/js/historia.js"></script>
@endsection

  