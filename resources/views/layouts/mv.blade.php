@extends('layouts.app')
@section('title') Nuestra Empresa @endsection

@section('content')

<section class="bg-half bg-light d-table w-100" id="counter" style="background: url('{{ asset('assets/images/dobleyo-index.jpg') }}') center center;background-size:cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title text-white">Nuestra empresa</h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item">
                                    <a href="/inicio">Inicio</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Nosotros</a>
                                </li>
                                <li class="breadcrumb-item active">Nuestra empresa</li>
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
 
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 col-lg-6 mt-4 pt-2">
                        <div class="card blog explore-feature rounded border-0 shadow overflow-hidden">
                            <div class="position-relative">
                                <img src="assets/images/personal.jpg" class="card-img-top" alt="...">
                                <div class="overlay bg-dark"></div>
                                <div class="teacher d-flex align-items-center">
                                    <img src="assets/images/loog.png" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                    <div class="ml-2">
                                        <h6 class="mb-0"><a href="javascript:void(0)" class="text-light user">Cootranshuila</a></h6>
                                        <p class="text-light small my-0">Llegamos lejos...!</p>
                                    </div>
                                </div>
                                <div class="course-fee bg-white text-center shadow-lg rounded-circle">
                                    <h6 class="text-primary font-weight-bold fee">LTDA</h6>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="shape overflow-hidden text-white">
                                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="card-body content">
                                <h5 class="mt-2"><a href="javascript:void(0)" class="title  text-primary">MISIÓN</a></h5>
                                <p class="text-muted">Somos una empresa del sector cooperativo líder en el servicio del transporte masivo terrestre nacional, 
                                    trabajamos con mística y en equipo para satisfacer las necesidades y expectativas de los clientes, prestando servicios con 
                                    seguridad, cumplimiento y calidad para beneficio de los asociados, funcionarios, proveedores y sociedad en general, teniendo 
                                    en cuenta la responsabilidad social que tenemos con cada uno de ellos para hacer que nuestra organización esté acorde a los 
                                    requerimientos mínimos exigidos para una sana convivencia...
                                </p>
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 col-lg-6 mt-4 pt-2">
                        <div class="card blog explore-feature rounded border-0 shadow overflow-hidden">
                            <div class="position-relative">
                                <img src="assets/images/LTDA.jpg" class="card-img-top" alt="...">
                                <div class="overlay bg-dark"></div>
                                <div class="teacher d-flex align-items-center">
                                    <img src="assets/images/loog.png" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                    <div class="ml-2">
                                        <h6 class="mb-0"><a href="javascript:void(0)" class="text-light user">Cootranshuila</a></h6>
                                        <p class="text-light small my-0">Llegamos lejos...!</p>
                                    </div>
                                </div>
                                <div class="course-fee bg-white text-center shadow-lg rounded-circle">
                                    <h6 class="text-primary font-weight-bold fee">LTDA</h6>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="shape overflow-hidden text-white">
                                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="card-body content">
                                <h5 class="mt-2"><a href="javascript:void(0)" class="title  text-primary">VISIÓN</a></h5>
                                <p class="text-muted">Proyectar internacionalmente al área andina nuestros servicios, sin descuidar 
                                    nuestro liderazgo nacional en el sector transportador, destacándonos por la excelencia en el servicio 
                                    y a la vez entregando resultados positivos a nuestros asociados y grupos de interes definidos en el programa 
                                    de responsabilidad social. De esta manera conseguiremos esta meta con la mejor gestion humana, siendo modelo de 
                                    eficiencia y solidez...
                                </p>   
                            </div>
                        </div> 
                    </div>

                    <!--//--//-->

                    <!--<div class="col-lg-4 col-md-6 col-lg-12 mt-4 pt-2">
                        <div class="card explore-feature blog border-0 rounded text-center bg-white shadow">
                            <div class="card-body">
                                <div class="icon rounded-circle shadow-lg d-inline-block">
                                    <i data-feather="pen-tool" class="fea"></i>
                                </div>
                                <h5 class="mt-3 title ">POLÍTICA INTEGRAL</h5>
                                <p class="text-muted mb-0 text-left">La COOPERATIVA DE TRANSPORTADORES DEL HUILA “COOTRANSHUILA LTDA” dedicada a la prestación de Servicio 
                                    de Transporte Publico Terrestre, encomiendas, carga y suministro de combustible, consciente de la importancia del bienestar 
                                    del talento humano, como eje para el desarrollo de su misión, considera como uno de sus propósitos fundamentales la calidad en 
                                    el servicio, el cuidado de la salud, el bienestar y la seguridad de sus trabajadores, mediante la continua identificación y evaluación 
                                    de los riesgos que puedan generar accidentes, enfermedades laborales, daños a la propiedad y al medio ambiente, por ello se compromete 
                                    a garantizar condiciones seguras de trabajo, ambientalmente aceptables, fomentar el uso de prácticas saludables, brindar formación 
                                    y entrenamiento, fortalecer las competencias, generar compromiso social con los asociados, trabajadores, contratistas y demás grupos 
                                    de interés, actuando con transparencia y ética, enmarcados bajo la premisa del amor a la familia, el autocuidado, la protección del 
                                    medio ambiente y el compromiso con la vida; asegurando el cumplimiento de los requisitos legales, acuerdos cooperativos, especificaciones 
                                    de los clientes y otros requisitos que suscriba la organización en pro de obtener los mejores beneficios de productividad y eficiencia, a través del mejoramiento continuo del sistema de Gestión...</p>
                            </div>
                        </div>
                    </div>-->

                    <div class="col-lg-6 col-12 col-lg-12 mt-4 pt-2">
                        <div class="card blog explore-feature rounded border-0 shadow overflow-hidden">
                            <div class="row align-items-center no-gutters">
                                <div class="col-md-6 order-2 order-md-1">
                                    <div class="card-body content">
                                        <h5><a href="javascript:void(0)" class="card-title title text-primary">POLÍTICA INTEGRAL</a></h5>
                                        <p class="text-muted mb-0">La COOPERATIVA DE TRANSPORTADORES DEL HUILA “COOTRANSHUILA LTDA” dedicada a la prestación de Servicio 
                                            de Transporte Publico Terrestre, encomiendas, carga y suministro de combustible, consciente de la importancia del bienestar 
                                            del talento humano, como eje para el desarrollo de su misión, considera como uno de sus propósitos fundamentales la calidad en 
                                            el servicio, el cuidado de la salud, el bienestar y la seguridad de sus trabajadores, mediante la continua identificación y evaluación 
                                            de los riesgos que puedan generar accidentes, enfermedades laborales, daños a la propiedad y al medio ambiente, por ello se compromete 
                                            a garantizar condiciones seguras de trabajo, ambientalmente aceptables, fomentar el uso de prácticas saludables, brindar formación 
                                            y entrenamiento, fortalecer las competencias, generar compromiso social con los asociados, trabajadores, contratistas y demás grupos 
                                            de interés, actuando con transparencia y ética, enmarcados bajo la premisa del amor a la familia, el autocuidado, la protección del 
                                            medio ambiente y el compromiso con la vida; asegurando el cumplimiento de los requisitos legales, acuerdos cooperativos, especificaciones 
                                            de los clientes y otros requisitos que suscriba la organización en pro de obtener los mejores beneficios de productividad y eficiencia.</p>
                                        <!--<div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                            </ul>
                                            <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                        </div>-->
                                    </div>
                                </div><!--end col-->
                                
                                <div class="col-md-6 order-1 order-md-2">
                                    <img src="assets/images/integrojpg.jpg" class="card-img-top" alt="...">
                                    <div class="overlay bg-dark"></div>
                                    <div class="author">
                                        <!--<small class="text-light user d-block"><i class="mdi mdi-account"></i> CootransHuila LTDA</small>-->
                                        <!--<small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>-->
                                    </div>
                                </div>
                            </div> <!--end row-->
                        </div><!--end blog post-->
                    </div>

                    <!--//--//-->

                    <div class="col-lg-6 col-12 col-lg-12 mt-4 pt-2">
                        <div class="card blog explore-feature rounded border-0 shadow overflow-hidden">
                            <div class="row align-items-center no-gutters">
                                <div class="col-md-6 order-2 order-md-1">
                                    <div class="card-body content">
                                        <h5><a href="javascript:void(0)" class="card-title title text-primary">VALORES CORPORATIVOS</a></h5>
                                        <p class="text-muted mb-0">Nuestra más alta prioridad es el cliente para quien tenemos nuestra mejor actitud de servicio, 
                                            el cliente es la razón de ser de nuestro trabajo; le servimos con gusto en forma amable y eficiente; nuestro potencial mas valioso 
                                            es nuestra gente y la capacidad de trabajar en equipo. Consideramos, atendemos y valoramos a los demás, hacemos un esfuerzo colectivo 
                                            permanente para el logro de los objetivos comunes. Desarrollamos la capacidad de escuchar, reconocer y optimizar nuestras fortalezas y 
                                            limitaciones para generar un proceso de aprendizaje continuo. </p>
                                        <!--<div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                            </ul>
                                            <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                        </div>-->
                                    </div>
                                </div><!--end col-->
                                
                                <div class="col-md-6 order-1 order-md-2">
                                    <img src="assets/images/corporativos.png" class="card-img-top" alt="...">
                                    <div class="overlay bg-dark"></div>
                                    <div class="author">
                                        <!--<small class="text-light user d-block"><i class="mdi mdi-account"></i> CootransHuila LTDA</small>-->
                                        <!--<small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>-->
                                    </div>
                                </div>
                            </div> <!--end row-->
                        </div><!--end blog post-->
                    </div>

                    <!--<div class="col-lg-4 col-md-6 col-lg-6 mt-4 pt-2">
                        <div class="card explore-feature blog border-0 rounded text-center bg-white shadow">
                            <div class="card-body">
                                <div class="icon rounded-circle shadow-lg d-inline-block" >
                                    <i data-feather="pen-tool" class="fea"></i>
                                </div>
                                <h5 class="mt-3 title ">VALORES CORPORATIVOS</h5>
                                <p class="text-muted mb-0 text-left">Nuestra más alta prioridad es el cliente para quien tenemos nuestra mejor actitud de servicio, 
                                    el cliente es la razón de ser de nuestro trabajo; le servimos con gusto en forma amable y eficiente; nuestro potencial mas valioso 
                                    es nuestra gente y la capacidad de trabajar en equipo. Consideramos, atendemos y valoramos a los demás, hacemos un esfuerzo colectivo 
                                    permanente para el logro de los objetivos comunes. Desarrollamos la capacidad de escuchar, reconocer y optimizar nuestras fortalezas y 
                                    limitaciones para generar un proceso de aprendizaje continuo. Nuestra mente esta abierta al cambio y la innovación permanente. Estamos en 
                                    capacidad de adaptarnos a nuevas condiciones y retos. Tenemos la habilidad para implementar, estipular y generar nuevas ideas a fin de obtener 
                                    más y mejores servicios. Nuestro compromiso es irreprochable y transparente, actuamos con claridad dentro de los principio morales y éticos. Somos 
                                    coherentes dentro de lo que decimos, pensamos y hacemos, manejamos con responsabilidad la información y recursos que nos han sido confiados. Construimos 
                                    relaciones de confianza entre nosotros y nuestros clientes.</p>
                            </div>
                        </div>
                    </div>-->
            </div>
            </div>  
        </div>
    </div>
</section>
@endsection