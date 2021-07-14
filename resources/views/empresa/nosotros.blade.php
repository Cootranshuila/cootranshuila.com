@extends('layouts.app')

@section('title')Nuestra Empresa @endsection

@section('MyStyles')@endsection

@section('MainScripts')
    <script src="{{asset('assets/js/pages/flota.init.js')}}"></script>
@endsection

@section('content')

    <section class="bg-half bg-light d-table w-100" id="counter" style="background: url('{{ asset('assets/images/dobleyo-index.jpg') }}') center center;background-size:cover;">
        <div class="bg-overlay bg-overlay-dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h1 class="heading title-dark text-white mb-3">Nuestra Empresa</h1>
                        <p class="para-desc mx-auto text-white">Cootranshuila, líder en el sector transportador de
                            Colombia.</p>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="/">Inicio</a>
                                    </li>
                                    {{-- <li class="breadcrumb-item">
                                        <a href="#">Nosotros</a>
                                    </li> --}}
                                    <li class="breadcrumb-item active">Nuestra Empresa</li>
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
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">
        
        <!-- Mision -->
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2">
                    {{-- <img src="images/illustrator/services.svg" alt=""> --}}
                    <img src="{{ asset('assets/images/personal.jpg') }}" class="img-fluid rounded" alt="" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2">
                    <div class="section-title ml-lg-5">
                        <h4 class="title mb-4">MISIÓN</h4>
                        <p class="text-muted">
                            Somos una empresa del sector cooperativo líder en el servicio del transporte masivo terrestre nacional, 
                            trabajamos con mística y en equipo para satisfacer las necesidades y expectativas de los clientes, prestando servicios con 
                            seguridad, cumplimiento y calidad para beneficio de los asociados, funcionarios, proveedores y sociedad en general, teniendo 
                            en cuenta la responsabilidad social que tenemos con cada uno de ellos para hacer que nuestra organización esté acorde a los 
                            requerimientos mínimos exigidos para una sana convivencia.
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- Vision -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2 order-1 order-md-2">
                    {{-- <img src="images/illustrator/Marketing_strategy_SVG.svg" alt=""> --}}
                    <img src="{{ asset('assets/images/LTDA.jpg') }}" class="img-fluid rounded" alt="" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 order-2 order-md-1">
                    <div class="section-title mr-lg-5">
                        <h4 class="title mb-4">VISIÓN</h4>
                        <p class="text-muted">
                            Proyectar internacionalmente al área andina nuestros servicios, sin descuidar nuestro liderazgo nacional en el sector transportador, destacándonos por la excelencia en el servicio y a la vez entregando resultados positivos a nuestros asociados y grupos de interes definidos en el programa de responsabilidad social. De esta manera conseguiremos esta meta con la mejor gestion humana, siendo modelo de eficiencia y solidez.
                        </p>                   
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- Politica Integral -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2">
                    <img src="{{ asset('assets/images/flota/p_expres.jpeg') }}" alt="" class="img-fluid rounded" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2">
                    <div class="section-title ml-lg-5">
                        <h4 class="title mb-4">POLITICA INTEGRAL</h4>
                        <p class="text-muted">
                            La COOPERATIVA DE TRANSPORTADORES DEL HUILA “<span class="text-primary font-weight-bold">COOTRANSHUILA LTDA</span>” dedicada a la prestación de Servicio de Transporte Publico Terrestre, encomiendas, carga y suministro de combustible, consciente de la importancia del bienestar del talento humano, como eje para el desarrollo de su misión, considera como uno de sus propósitos fundamentales la calidad en el servicio, el cuidado de la salud, el bienestar y la seguridad de sus trabajadores, mediante la continua identificación y evaluación de los riesgos que puedan generar accidentes, enfermedades laborales, daños a la propiedad y al medio ambiente, por ello se compromete a garantizar condiciones seguras de trabajo, ambientalmente aceptables, fomentar el uso de prácticas saludables, brindar formación y entrenamiento, fortalecer las competencias, generar compromiso social con los asociados, trabajadores, contratistas y demás grupos de interés, actuando con transparencia y ética, enmarcados bajo la premisa del amor a la familia, el autocuidado, la protección del medio ambiente y el compromiso con la vida; asegurando el cumplimiento de los requisitos legales, acuerdos cooperativos, especificaciones de los clientes y otros requisitos que suscriba la organización en pro de obtener los mejores beneficios de productividad y eficiencia, a través del mejoramiento continuo del sistema de Gestión.
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- Valores Corporativos -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2 order-1 order-md-2">
                    <img src="{{ asset('assets/images/flota/p_jet.jpeg') }}" alt="" class="img-fluid rounded" width="445">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 order-2 order-md-1">
                    <div class="section-title mr-lg-5">
                        <h4 class="title mb-4">VALORES CORPORATIVOS</h4>
                        <p class="text-muted">
                            Nuestra más alta prioridad es el cliente para quien tenemos nuestra mejor actitud de servicio, el cliente es la razón de ser de nuestro trabajo; le servimos con gusto en forma amable y eficiente; nuestro potencial mas valioso es nuestra gente y la capacidad de trabajar en equipo. Consideramos, atendemos y valoramos a los demás, hacemos un esfuerzo colectivo permanente para el logro de los objetivos comunes. Desarrollamos la capacidad de escuchar, reconocer y optimizar nuestras fortalezas y limitaciones para generar un proceso de aprendizaje continuo. Nuestra mente esta abierta al cambio y la innovación permanente. Estamos en capacidad de adaptarnos a nuevas condiciones y retos. Tenemos la habilidad para implementar, estipular y generar nuevas ideas a fin de obtener más y mejores servicios. Nuestro compromiso es irreprochable y transparente, actuamos con claridad dentro de los principio morales y éticos. Somos coherentes dentro de lo que decimos, pensamos y hacemos, manejamos con responsabilidad la información y recursos que nos han sido confiados. Construimos relaciones de confianza entre nosotros y nuestros clientes.
                        </p>                    
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->
@endsection
