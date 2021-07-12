@extends('layouts.app')

@section('title')Politica de datos @endsection

@section('MyStyles')@endsection

@section('MainScripts')
   
@endsection

@section('content')

    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100" style="background: url('{{ asset('assets/images/dobleyo-index.jpg') }}') center center;">
        <div class="bg-overlay bg-overlay-dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h1 class="heading text-white font-weight-bold mb-4 text-center">Politica de Protección de Datos Personales de Clientes</h1>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="/">Inicio</a>
                                    </li>
                                    {{-- <li class="breadcrumb-item">
                                        <a href="#">Nosotros</a>
                                    </li> --}}
                                    <li class="breadcrumb-item active">Politica de Datos</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
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

    <!-- Start Privacy -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card shadow rounded border-0">
                        <a href="{{asset('assets/pdf/AUTORIZACION.pdf')}}" target="_blank" class="btn btn-primary"><i class="mdi mdi-download"></i> DESCARGAR FORMATO AQUÍ</a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">POLÍTICA DE TRATAMIENTO PROTECCIÓN DE DATOS PERSONALES DE CLIENTES DE <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></h5>
                            <p class="text-muted">En cumplimiento a lo dispuesto en la Ley estatutaria 1581 de 2012 y a su Decreto Reglamentario 1377 de 2013,<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, informa la política aplicable a la entidad para el tratamiento protección de datos personales.</p>
                            
                            <h6 class="card-title text-primary font-weight-bold">1. IDENTIFICACIÓN</h6>
                            {{-- <span class="text-primary font-weight-bold"> servicio de carga </span> --}}
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">NOMBRE DE LA INSTITUCIÓN:</span> <span class="font-weight-bold"><span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span> sometida a la inspección y vigilancia de la Superintendencia de Puertos y Transportes, el Ministerio de Transporte; con el fin de prestar los servicios relacionados en su objeto social, tales como: servicios de Transportes terrestre de pasajeros y carga en su modalidades de urbano, municipal, intermunicipal, escolar, empresarial y de turismo, entre otros, por medio del presente documento, desarrolla la política para el tratamiento de datos personales que será adoptada por la misma, así como la manera y las características del tratamiento que se le debe dar a los datos.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">DIRECIÓN:</span> Neiva (Huila) Av. 26 N. 4-82
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">CORREO ELECTRÓNICO:</span> clientes@cootranshuila.com
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">RESPONSABLE:</span> Jhon Freddy Ardila
                            </p>
                            
                            <!-- marco legal-->
                            <h6 class="card-title text-primary font-weight-bold">2. MARCO LEGAL</h6>
                            <p class="text-muted">
                                Constitución Política, artículo 15. <br>
                                Ley 1266 de 2008 <br>
                                Ley 1581 de 2012 <br>
                                Decretos Reglamentarios 1727 de 2009 y 2952 de 2010, <br>
                                Decreto Reglamentario parcial 1377 de 2013 <br>
                            </p>

                            <!-- generalidades-->
                            <h6 class="card-title text-primary font-weight-bold">3. GENERALIDADES</h6>
                            <p class="text-muted">
                                Mediante la ley 1581 de 2012 y el Decreto 1377 de 2013 se expidió el Régimen General de Protección de Datos Personales. Por medio de dicha regulación se desarrolla el derecho constitucional que tienen las personas a conocer, actualizar y rectificar las informaciones que se hayan recogido sobre ellas en bases de datos o archivos, y los demás derechos, libertades y garantías constitucionales a que se refiere el artículo 15 de la Constitución Política; así como el derecho a la información consagrado en el artículo 20 de la misma.
                            </p>
                            

                            <h6 class="card-title text-primary font-weight-bold">4. OBJETIVO</h6>
                            <ul class="text-muted">
                                <li>
                                    Cumplir el derecho constitucional que tienen todas las personas a conocer, actualizar y rectificar la información que se haya recogido sobre ellas en bases de datos o archivos, según se establece en el Art.15 de la Constitución Política de Colombia.
                                </li>
                                <li>
                                    Definir al interior de<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, una serie de políticas, prácticas y procedimiento que den cumplimiento efectivo a las exigencias y disposiciones legales establecidas en el sistema jurídico Colombiano en relación con la protección de datos de carácter personal.
                                </li>
                            </ul>

                            <!-- alcance-->
                            <h6 class="card-title text-primary font-weight-bold">5. ALCANCE</h6>
                            <p class="text-muted">
                                Todos los funcionarios de<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, deben observar y acatar el cumplimiento de la presente política.
                                Las áreas que tienen mayor interacción con la administración y/o manejo de datos personales, deben observar con mayor rigor el cumplimiento y aplicación a la Ley, asegurar el cumplimiento de la misma y de cualquier norma o disposición que la complemente adicione o modifique.
                                De igual manera, la presente política tendrá plena aplicación frente a las personas naturales o jurídicas (incluidos proveedores y contratistas) con las que<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, tenga un vínculo contractual y que tengan o pudieran tener acceso a datos personales de los cuales<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span> es Responsable, siempre que la divulgación de datos personales sea necesaria para el cumplimiento de dichas obligaciones contractuales.
                                Todas las disposiciones que la regulación colombiana establezca en relación con el manejo de información, bases de datos y habeas data se entenderán incorporadas a la presente política.
                            </p>

                            <!-- 6. ÁMBITO DE APLICACIÓN-->
                            <h6 class="card-title text-primary font-weight-bold">6. ÁMBITO DE APLICACIÓN</h6>
                            <p class="text-muted">
                                La presente política será aplicable a las bases de datos que se encuentren bajo la administración de<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, y que contengan información personal, que hayan sido conocidas por la compañía en virtud de las relaciones comerciales que sostenga con sus clientes, colaboradores y las demás entidades que forman parte del grupo empresarial al cual pertenece.
                                Asimismo, estas políticas serán aplicables cuando el responsable o el encargado del tratamiento de los datos personales, se encuentre o no físicamente en Colombia, realice dicho tratamiento en el marco de un acuerdo firmado con<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>.
                            </p>

                            <h6 class="card-title text-primary font-weight-bold">7. DEFINICIONES</h6>
                            <ul class="text-muted">
                                <li>
                                    Autorización: Consentimiento previo, expreso e informado del Titular para llevar a cabo el Tratamiento de datos personales.
                                </li>
                                <li>
                                    Aviso de Privacidad: Comunicación verbal o escrita generada por el responsable dirigido al titular para el tratamiento de sus datos personales, mediante la cual se le informa acerca de la existencia de las políticas de tratamiento de información que le serán aplicables, la forma de acceder a las mismas y las finalidades del tratamiento que se pretende dar a los datos personales.
                                </li>
                                <li>
                                    Base de Datos: Conjunto organizado de datos personales que sea objeto de Tratamiento.
                                </li>
                                <li>
                                    Causahabiente: persona que ha sucedido a otra por causa del fallecimiento de ésta (heredero).
                                </li>
                                <li>
                                    Dato personal: Cualquier información vinculada o que pueda asociarse a una o varias personas naturales determinadas o determinables; este puede ser.
                                </li>
                                <li>
                                    Dato personal sensible: Información que afecta la intimidad de la persona o cuyo uso indebido puede generar su discriminación, tales como aquellos que revelen el origen racial o étnico, la orientación política, las convicciones religiosas o filosóficas, la pertenencia a sindicatos, organizaciones sociales, de derechos humanos o que promueva intereses de cualquier partido político o que garanticen los derechos y garantías de partidos políticos de oposición, así como los datos relativos a la salud, a la vida sexual y los datos biométricos (huellas dactilares, entre otros).
                                </li>
                                <li>
                                    Dato personal público: Es el dato calificado como tal según los mandatos de la ley o de la Constitución Política y todos aquellos que no sean semiprivados o privados. Son públicos, entre otros, los datos contenidos en documentos públicos, sentencias judiciales debidamente ejecutoriadas que no estén sometidos a reserva y los relativos al estado civil de las personas. Asimismo, los datos personales existentes en el registro mercantil de las Cámaras de Comercio (Artículo 26 del C.Co), los cuales pueden ser obtenidos y ofrecidos sin reserva alguna y sin importar si hacen alusión a información general, privada o personal.
                                </li>
                                <li>
                                    Dato personal privado: Es el dato que por su naturaleza íntima o reservada sólo es relevante para la persona titular del dato. Ejemplos: documentos privados, información extraída a partir de la inspección del domicilio.
                                </li>
                                <li>
                                    Dato personal semiprivado: Es semiprivado el dato que no tiene naturaleza íntima, reservada, ni pública y cuyo conocimiento o divulgación puede interesar no sólo a su titular sino a cierto sector o grupo de personas o a la sociedad en general. Dentro de dicha categoría es posible encontrar el dato referente al cumplimiento e incumplimiento de las obligaciones financieras o los datos relativos a las relaciones con las entidades de la seguridad social, entre otros.
                                </li>
                                <li>
                                    Encargado del Tratamiento: Persona natural o jurídica, pública o privada, que por sí misma o en asocio con otros, realice el Tratamiento de datos personales por cuenta del Responsable del Tratamiento.
                                </li>
                                <li>
                                    Ley de Protección de datos: es la Ley 1581 de 2012 y sus Decretos reglamentarios o las normas que los modifiquen, complementen o sustituyan.
                                </li>
                                <li>
                                    Grupo empresarial: Hace referencia a la situación mediante la cual las actividades de distintas compañías se encuentran encaminadas a cumplir un objetivo común y determinado por la sociedad matriz o controlante, cumpliendo con los requisitos establecidos en el artículo 28 y s.s. de la ley 222 de 1995. En relación con la presente política, se entiende por Grupo empresarial, el conformado<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, y Grupo Sepulvedana.
                                </li>
                                <li>
                                    Habeas Data: De conformidad con lo dispuesto en la ley 1266 de 2008, es el Derecho Constitucional que tienen las personas a conocer, actualizar y rectificar las informaciones que se hayan recogido sobre ellas en bancos de datos, y los demás derechos, libertades y garantías constitucionales relacionadas con la recolección, tratamiento y circulación de datos personales.
                                </li>
                                <li>
                                    Responsable del Tratamiento: Persona natural o jurídica, pública o privada, que por sí misma o en asocio con otros, decida sobre la base de datos y/o el Tratamiento de los datos.
                                </li>
                                <li>
                                    Terceros: Cualquier persona natural o jurídica distinta de<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, sus proveedores, clientes y contrapartes. Asimismo, para efectos de la presente política, se entenderá como tercero cualquier persona natural o jurídica que no se encuentre facultada bajo un vínculo contractual, para conocer información confidencial y/o datos personales contenidos en las bases de datos de la Compañía.
                                </li>
                                <li>
                                    Titular del dato: Persona natural cuyos datos personales sean objeto de Tratamiento.
                                </li>
                                <li>
                                    Tratamiento: Cualquier operación o conjunto de operaciones sobre datos personales, tales como la recolección, almacenamiento, uso, circulación o supresión.
                                </li>
                                <li>
                                    Transferencia: la transferencia de datos tiene lugar cuando el responsable y/o encargado del tratamiento de datos personales, ubicado en Colombia, envía la información o los datos personales a un receptor, que a su vez es responsable del tratamiento y se encuentra dentro o fuera del país.
                                </li>
                                <li>
                                    Transmisión: tratamiento de datos personales que implica la comunicación de los mismos dentro o fuera del territorio de la República de Colombia cuando tenga por objeto la realización de un tratamiento por el encargado por cuenta del responsable.
                                </li>
                            </ul>

                            <!-- 8. PRINCIPIOS PARA EL TRATAMIENTO DE DATOS PERSONALES-->
                            <h6 class="card-title text-primary font-weight-bold">8. PRINCIPIOS PARA EL TRATAMIENTO DE DATOS PERSONALES</h6>
                            <p class="text-muted">
                                <span class="font-weight-bold"><span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, dará estricto cumplimiento a los principios rectores que se exponen en el Artículo 4 del Título II de la ley 1581 del 2012, establecidos para la protección de datos personales, los que se aplicarán de manera integral y que a continuación se citan:
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">8.1. Principio de finalidad:</span> El Tratamiento debe obedecer a una finalidad legítima de acuerdo con la Constitución y la Ley, la cual debe ser informada al Titular.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">8.2. Principio de libertad:</span> El Tratamiento sólo puede ejercerse con el consentimiento, previo, expreso e informado del Titular. Los datos personales no podrán ser obtenidos o divulgados sin previa autorización, o en ausencia de mandato legal o judicial que releve el consentimiento.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">8.3. Principio de veracidad o calidad:</span> La información sujeta a Tratamiento debe ser veraz, completa, exacta, actualizada, comprobable y comprensible. Se prohíbe el Tratamiento de datos parciales, incompletos, fraccionados o que induzcan a error.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">8.4. Principio de transparencia:</span> En el Tratamiento debe garantizarse el derecho del Titular a obtener del Responsable del Tratamiento o del Encargado del Tratamiento, en cualquier momento y sin restricciones, información acerca de la existencia de datos que le correspondan.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">8.5. Principio de acceso restringido:</span> El Tratamiento se sujeta a los límites que se derivan de la naturaleza de los datos personales, de las disposiciones de la ley y la Constitución. En este sentido, el Tratamiento sólo podrá hacerse por personas autorizadas por el Titular y/o por las personas previstas en la ley.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">8.6. Principio de circulación restringida:</span> Los datos personales, salvo la información pública, no podrán estar disponibles en Internet u otros medios de divulgación o comunicación masiva, salvo que el acceso sea técnicamente controlable para brindar un conocimiento restringido sólo a los Titulares o terceros autorizados según las disposiciones de ley.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">8.7. Principio de seguridad:</span> La información sujeta a Tratamiento por el Responsable del Tratamiento o Encargado del Tratamiento, se deberá manejar con las medidas técnicas, humanas y administrativas que sean necesarias para otorgar seguridad a los registros evitando su adulteración, pérdida, consulta, uso o acceso no autorizado o fraudulento.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">8.8. Principio de confidencialidad:</span> Todas las personas que intervengan en el tratamiento de datos personales que no tengan la naturaleza de públicos están obligadas a guardar reserva de la información, inclusive después de finalizada su relación con las labores que comprende el tratamiento, pudiendo sólo realizar suministro o comunicación de datos personales cuando ello corresponda al desarrollo de las actividades autorizadas por ley.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">8.9. Principio de legalidad:</span> El tratamiento a que se refiere la presente política es una actividad reglada que debe sujetarse a lo establecido en las disposiciones contenidas en la ley que la desarrollen.
                            </p>

                
                            <!-- 9. TRATAMIENTO AL QUE SERÁN SOMETIDOS LOS DATOS PERSONALES Y LA FINALIDAD DEL MISMO-->
                            <h6 class="card-title text-primary font-weight-bold">9. TRATAMIENTO AL QUE SERÁN SOMETIDOS LOS DATOS PERSONALES Y LA FINALIDAD DEL MISMO</h6>
                            <p class="text-muted">
                                <span class="font-weight-bold"><span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, velará porque los datos personales sean tratados de manera adecuada, ajustada a la ley y de conformidad con las siguientes finalidades:
                            </p>
                            <ul class="text-muted">
                                <li>
                                    Efectuar las gestiones pertinentes para el desarrollo de la etapa precontractual, contractual y post contractual en relación con cualquiera de los productos o servicios ofrecidos o requeridos, o respecto de cualquier negociación que se tenga o inicie con<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>.
                                </li>
                                <li>
                                    Prestar los servicios relacionados en su objeto social, tales como: servicios de Transportes terrestre de pasajeros y carga en sus modalidades de urbano, municipal, intermunicipal, escolar, empresarial y de turismo, entre otros.
                                </li>
                                <li>
                                    Gestionar trámites (solicitudes, quejas, reclamos), realizar análisis de todo tipo de riesgo al que se encuentre expuesto<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, y efectuar encuestas de satisfacción respecto de los bienes y servicios ofrecidos..
                                </li>
                                <li>
                                    Verificar el cumplimiento de requerimientos regulatorios, posibles conflictos de interés, viabilidad financiera, jurídica y comercial devengada de las relaciones comerciales con sus clientes y proveedores.
                                </li>
                                <li>
                                    Proporcionar información de contacto y documentos necesarios a la fuerza comercial y/o red de distribución, mercadeo para llevar a cabo las funciones encomendadas por<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, realizar labores relacionadas al objeto social de<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, o por encargo de<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>.
                                </li>
                                <li>
                                    Dar a conocer, transferir y/o trasmitir los datos personales dentro y fuera del país a terceros a consecuencia de un contrato, ley o vínculo lícito que así lo requiera, para realizar labores relacionadas al objeto social de<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, y/o por encargo de<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>.
                                </li>
                                <li>
                                    Facilitar la prestación de servicios de impuestos (presentación de declaraciones y medios magnéticos ante la DIAN) prestaciones sociales y servicios migratorios, tanto en Colombia como en el exterior.
                                </li>
                                <li>
                                    Suministrar a las asociaciones gremiales (como Acoltes, entre otras) la información estadística que se genere con el procesamiento de datos personales, necesaria para la realización de estudios y en general, la administración de sistemas de información del sector correspondiente.
                                </li>
                                <li>
                                    Crear bases de datos para los fines descritos en la presente política.
                                </li>
                            </ul>
                            <p class="text-muted">
                                El Tratamiento de datos personales de niños, niñas y adolescentes asegurará el respeto a los derechos prevalentes de los niños, niñas y adolescentes.
                                El Tratamiento de datos personales de niños, niñas y adolescentes está prohibido, excepto cuando se trate de datos de naturaleza pública, y en la medida que se cumpla con los siguientes parámetros y requisitos:
                            </p>
                            <ul class="text-muted">
                                <li>
                                    Que responda y respete el interés superior de los niños, niñas y adolescentes.
                                </li>
                                <li>
                                    Que se asegure el respeto de sus derechos fundamentales.
                                </li>                               
                            </ul>
                            <p class="text-muted">
                                Cumplidos los anteriores requisitos, el representante legal del niño, niña o adolescente otorgará la autorización correspondiente.
                                Todo Responsable y Encargado involucrado en el Tratamiento de los datos personales de niños, niñas y adolescentes, deberá velar por el uso adecuado de los mismos.
                            </p>
                            <p class="text-muted">
                                Es tarea del Estado y las entidades educativas de todo tipo proveer información y capacitar a los representantes legales y tutores sobre los eventuales riesgos a los que se enfrentan los niños, niñas y adolescentes respecto del Tratamiento indebido de sus datos personales, y proveer de conocimiento acerca del uso responsable y seguro por parte de niños, niñas y adolescentes de sus datos personales, su derecho a la privacidad y protección de su información personal y la de los demás.
                            </p>

                            <!-- 10. DERECHOS DE LOS TITULARES DE LOS DATOS-->
                            <h6 class="card-title text-primary font-weight-bold">10. DERECHOS DE LOS TITULARES DE LOS DATOS</h6>
                            <p class="text-muted">
                                El titular de los datos personales tendrá los siguientes derechos:
                            </p>
                            <ul class="text-muted">
                                <li>
                                    Conocer, actualizar, rectificar y/o suprimir los datos personales a través del correo electrónico clientes@cootranshuila.com o la línea nacional 01 8000 933 737 incluyendo empleados. Este derecho se podrá ejercer, entre otros frente a datos parciales, inexactos, incompletos, fraccionados, que induzcan a error, o aquellos cuyo tratamiento esté expresamente prohibido o no haya sido autorizado.
                                </li>
                                <li>
                                    Solicitar prueba de la autorización otorgada a<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, salvo cuando, de acuerdo con la Ley, el tratamiento de los datos que se está realizando no lo requiera.
                                </li>
                                <li>
                                    Ser informado por<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, previa solicitud efectuada a través de los canales arriba mencionados, respecto del uso que ésta les ha dado a sus datos personales.
                                </li>
                                <li>
                                    Dar trámite a las quejas por infracciones a la ley que regula el tratamiento de datos personales, sus decretos reglamentarios y la presente política.
                                    Que se acepte la revocatoria de la autorización y/o supresión del dato personal cuando la Superintendencia de Industria y Comercio haya determinado que en el tratamiento por parte de<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span>, ha incurrido en conductas contrarias a la ley que regula el tratamiento de datos personales o la Constitución.
                                </li>
                                <li>
                                    Acceder en forma gratuita, a través de los canales arriba mencionados a los datos personales que hayan sido objeto de tratamiento y se encuentren en las bases de datos de la compañía.
                                </li>                               
                            </ul>
                            <p class="text-muted">
                                Los derechos de los Titulares, podrán ejercerse por las siguientes personas:
                            </p>
                            <ul class="text-muted">
                                <li>
                                    Por el Titular, quien deberá acreditar su identidad en forma suficiente por los distintos medios que le ponga a disposición<span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>.</span>
                                </li>
                                <li>
                                    Por el representante y/o apoderado del Titular, previa acreditación de la representación o apoderamiento.
                                </li>
                                <li>
                                    Los derechos de los niños, niñas o adolescentes se ejercerán por las personas que estén facultadas para representarlos, conforme a la ley.
                                </li>
                                <li>
                                    Los causahabientes quienes deberán acreditar el parentesco adjuntando documento que soporte dicho parentesco y copia de su documento de identidad.
                                </li>                           
                            </ul>
                            <p class="text-muted">
                                <span class="font-weight-bold"><span class="font-weight-bold"> <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></span></span>, a través del enlace en su página institucional, “Aviso de Privacidad de Datos” informará acerca de los canales y procedimientos previstos para que el titular pueda ejercer sus derechos de manera efectiva.
                            </p>


                            <!-- 11. TIPOS DE BASES DE DATOS EN <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>-->
                            <h6 class="card-title text-primary font-weight-bold">11. TIPOS DE BASES DE DATOS EN <span class="font-weight-bold"> COOTRANSHUILA LTDA</span></h6>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">11.1. Base de datos de clientes</span> <br>
                                Tienen como finalidad utilizar los datos para la debida prestación del servicio o del producto adquirido por el titular con <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, así como cumplir con los requerimientos legales en desarrollo de la relación comercial y toda la información pertinente dentro del desarrollo de los productos y servicios ofrecidos por <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>. <br>
                                Ésta también tiene como finalidad tener un contacto con potenciales clientes con el fin de presentarle los productos y servicios ofrecidos por la empresa.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">11.2. Base de datos de Proveedores</span> <br>
                                La base de datos de Proveedores tiene como objeto contar con información actualizada y suficiente acerca de las personas que tienen la calidad de Proveedores o quisieran tenerla.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">11.3. Base de datos de Empleados</span> <br>
                                La base de datos de empleados, busca tener actualizada la información de los empleados de la compañía. Dicha información permite que la relación laboral se desarrolle de manera adecuada y logra una mejor comunicación entre la compañía y sus colaboradores.
                            </p>


                            <!-- 12. DEBERES EN CALIDAD DE RESPONSABLE DEL TRATAMIENTO DE INFORMACIÓN Y CUANDO EL TRATAMIENTO SE REALICE A TRAVÉS DE UN ENCARGADO-->
                            <h6 class="card-title text-primary font-weight-bold">12. DEBERES EN CALIDAD DE RESPONSABLE DEL TRATAMIENTO DE INFORMACIÓN Y CUANDO EL TRATAMIENTO SE REALICE A TRAVÉS DE UN ENCARGADO</h6>
                            <p class="text-muted">
                                Se define como RESPONSABLE a la persona natural o jurídica, pública o privada, que por sí misma o en asocio con otros, decide sobre la base de datos y/o el tratamiento de los datos. Son sus deberes:
                            </p>
                            <ul class="text-muted">
                                <li>
                                    Garantizar a través de los canales establecidos, para los Titulares de datos, el pleno y efectivo ejercicio del derecho de hábeas data, es decir, conocer, actualizar o rectificar sus datos personales.
                                </li>
                                <li>
                                    Solicitar y conservar, en las condiciones previstas en esta política, copia de la respectiva autorización otorgada por el titular de datos personales.
                                </li>
                                <li>
                                    Informar acerca de la finalidad de la recolección y los derechos que le asisten por virtud de la autorización otorgada. Esta comunicación se hará a través de la autorización que suscriba el cliente o el Aviso de Privacidad de Datos.
                                </li>
                                <li>
                                    Atender las solicitudes del titular sobre el uso dado a sus datos personales y dar trámite a las consultas y reclamos formulados en los términos señalados en la presente política.
                                </li>
                                <li>
                                    Dar trámite a las solicitudes de actualización, rectificación de datos personales cuando sea procedente.
                                </li>
                                <li>
                                    Contar con las medidas de seguridad para impedir la adulteración, pérdida, consulta o uso no autorizado de datos personales, los cuales deben quedar de manifiesto en los manuales y demás documentos internos.
                                </li>
                                <li>
                                    Observar los principios de veracidad, calidad, seguridad y confidencialidad en los términos establecidos en la presente política.
                                </li>
                                <li>
                                    Garantizar que la información suministrada al encargado del tratamiento sea veraz, completa, exacta, actualizada y comprensible.
                                </li>
                                <li>
                                    Informar a la autoridad de protección de datos cuando se hayan vulnerado los mecanismos de seguridad y existan riesgos en la administración de los datos personales de los titulares.
                                </li>
                                <li>
                                    Informar al Encargado del tratamiento cuando determinada información se encuentra en discusión por parte del titular una vez presentado el reclamo y mientras su resolución se encuentre en trámite.
                                </li>                       
                            </ul>
                            <p class="text-muted">
                                Cuando se realiza el tratamiento a través de un ENCARGADO, son deberes de <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>:
                            </p>
                            <ul class="text-muted">
                                <li>
                                    Suministrar al encargado del tratamiento sólo los datos personales cuyo tratamiento esté previamente autorizado. Cuando se trate de transmisiones nacionales e internacionales se deberá suscribir un contrato de transmisión de datos personales o pactar cláusulas contractuales que contengan lo dispuesto en el artículo 25 del decreto 1377 de 2013.
                                </li>
                                <li>
                                    Exigir al encargado del tratamiento en todo momento, el respeto a las condiciones de seguridad y privacidad de la información del Titular.
                                </li>                     
                            </ul>


                            <!-- 13. AUTORIZACIÓN-->
                            <h6 class="card-title text-primary font-weight-bold">13. AUTORIZACIÓN</h6>
                            <p class="text-muted">
                                <span class="font-weight-bold"> COOTRANSHUILA LTDA</span> deberá obtener de parte del titular su autorización previa, expresa e informada para recolectar y tratar sus datos personales. Para lo cual, se dejará expresa constancia de ello, según sea el caso de clientes, proveedores o terceros. <br>
                                Esta obligación no es necesaria cuando se trate de datos de naturaleza pública, tratamiento de información para fines históricos, estadísticos o científicos en los cuales no se vincule la información a una persona específica y datos relacionados con el Registro Civil de las Personas.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">EVENTOS EN LOS CUALES NO ES NECESARIA LA AUTORIZACIÓN DEL TÍTULAR DE LOS DATOS PERSONALES.</span> <br>
                                La autorización del titular de la información no será necesaria en los siguientes casos:
                            </p>
                            <ul class="text-muted">
                                <li>
                                    Información requerida por una entidad pública o administrativa en ejercicio de sus funciones legales o por orden judicial.
                                </li>
                                <li>
                                    Datos de naturaleza pública.
                                </li>
                                <li>
                                    Casos de urgencia médica o sanitaria.
                                </li>
                                <li>
                                    Tratamiento de información autorizado por la ley para fines históricos, estadísticos o científicos. Datos relacionados con el Registro Civil de las personas.
                                </li>                    
                            </ul>


                            <!-- 14 PROCEDIMIENTOS ESTABLECIDOS PARA GARANTIZAR EL EJERCICIO DE LOS DERECHOS DE LOS TITULARES-->
                            <h6 class="card-title text-primary font-weight-bold">14. PROCEDIMIENTOS ESTABLECIDOS PARA GARANTIZAR EL EJERCICIO DE LOS DERECHOS DE LOS TITULARES</h6>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">14.1. Consultas</span> <br>
                                Los Titulares de la información podrán realizar sus consultas de las siguientes formas:
                            </p>
                            <ul class="text-muted">
                                <li>
                                    Solicitudes presentadas a través de documento escrito o vía correo electrónico, serán tramitadas y las respuestas sólo serán remitidas a la dirección electrónica autorizada por el cliente.
                                </li>
                                <li>
                                    Solicitudes presentadas telefónicamente a Servicio al Cliente serán tramitadas, luego del resultado positivo en la validación de identidad a través de un cuestionario.
                                </li>
                                <li>
                                    Para el caso de causahabientes, se solicitará carta autenticada en la que los beneficiarios de ley den autorización a la persona a realizar consultas sobre los productos de un cliente fallecido, copia de la cédula del autorizado a solicitar información, copia del acta de defunción, documento que soporte el parentesco, en caso se trate de hijos o esposas. Finalmente, la información se remite a la dirección autorizada en la carta.
                                </li>                   
                            </ul>
                            <p class="text-muted">
                                Una vez que <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, reciba la solicitud de información por cualquiera de los medios anteriormente señalados, procederá a revisar la información individual que corresponda al nombre del Titular y en caso exista algún aspecto que deba ser aclarado antes de dar respuesta a la consulta, ésta situación se informará dentro de los cinco (05) días hábiles siguientes a su recibo, con el fin de que el solicitante la aclare.
                                Si no existen aspectos que deban ser aclarados y que impidan proporcionar respuesta a la consulta, se procederá a dar respuesta en un término de diez (10) días hábiles.
                                <br>
                                En el evento que <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, necesite de un mayor tiempo para dar respuesta a la consulta, informará al titular de tal situación y dará respuesta en un término que no excederá de cinco (5) días hábiles siguientes al vencimiento del término.
                            </p>
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">14.2. Reclamos</span> <br>
                                El titular o sus causahabientes que consideren que la información contenida en una base de datos administrada por <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, debe ser sujeta de corrección, actualización o supresión, o si advierten un incumplimiento de la entidad o de alguno de sus encargados, podrán presentar un reclamo en los siguientes términos:
                            </p>
                            <ul class="text-muted">
                                <li>
                                    El reclamo se formulará con la descripción clara de los hechos que dan lugar al reclamo, la dirección donde desea recibir notificaciones, pudiendo ser esta física o electrónica y adjuntando los documentos que pretenda hacer valer.
                                </li>
                                <li>
                                    Si el reclamo resulta incompleto se requerirá al interesado dentro de los cinco (05) días siguientes a la recepción del reclamo para que subsane las fallas.
                                </li>
                                <li>
                                    Transcurridos dos (2) meses desde la fecha del requerimiento, sin que el solicitante presente la información requerida, se entenderá que ha desistido del reclamo.
                                </li>
                                <li>
                                    En caso que <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, no sea competente para resolverlo, dará traslado a quien corresponda en un término máximo de dos (2) días hábiles e informará de la situación al Interesado. <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, utilizará la dirección electrónica clientes@cootranshuila.com para estos efectos de tal manera que se pueda identificar en qué momento se da traslado y la respuesta o confirmación de recibido correspondiente. Si no se conoce la persona a quien deba trasladarlo, informará de inmediato al Titular con copia a la Superintendencia de Industria y Comercio.
                                </li>
                                <li>
                                    Una vez recibido el reclamo completo, se debe incluir en la base de datos correspondiente la leyenda “reclamo en trámite” y el motivo del mismo, esto debe ocurrir en un término máximo de dos (2) días hábiles.
                                </li>
                                <li>
                                    El término máximo para responder el reclamo es de quince (15) días hábiles, si no es posible hacerlo en este término se informará al interesado los motivos de la demora y la fecha en que éste se atenderá, la cual no podrá exceder de ocho (08) días hábiles siguientes al vencimiento del primer término.
                                </li>                   
                            </ul>


                            <!-- 15. PERSONA O DEPENDENCIA RESPONSABLE DE LA ATENCIÓN DE PETICIONES, CONSULTAS Y RECLAMOS-->
                            <h6 class="card-title text-primary font-weight-bold">15. PERSONA O DEPENDENCIA RESPONSABLE DE LA ATENCIÓN DE PETICIONES, CONSULTAS Y RECLAMOS</h6>
                            <p class="text-muted">
                                El decreto 1377 de 2013 establece lo siguiente: <br>
                                El artículo 13 de la citada norma establece que: “Los responsables del tratamiento deberán desarrollar sus políticas para el Tratamiento de los datos personales y velar porque los Encargados del Tratamiento den cabal cumplimiento a las mismas” <br>
                                El numeral 4 del citado artículo ordena que en las políticas se debe incluir, por lo menos, esta información: “Persona o área responsable de la atención de peticiones, consultas y reclamos….);
                            </p>
                            <p class="text-muted">
                                El artículo 23 ordena a todo Responsable o Encargado “designar una persona o área que asuma la función de protección de datos personales, que dará trámite a las solicitudes de los titulares, para el ejercicio de los derechos a que se refiere la Ley 1581 de 2012 y el presente Decreto”;
                                El artículo 27 establece lo siguiente: “las políticas deberán garantizar: 1. La existencia de una estructura administrativa proporcional a la estructura y tamaño empresarial del Responsable para la adopción e implementación de políticas consistentes con la Ley 1581 de 2012 y este Decreto”
                            </p>
                            <p class="text-muted">
                                Por lo anterior, en <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, el área de Servicio al Cliente será responsable de velar por el cumplimiento de estas disposiciones. Esta área tendrá una comunicación directa con los responsables de las áreas identificadas a lo largo del presente instructivo: Dirección Jurídica, Mercadeo, Seguridad de la Información, Área de Gestión de Clientes, Gerencia de Operaciones, y cualquier otra área requerida con el fin de garantizar que todos los aspectos señalados queden debidamente atendidos y que los deberes que estipula la ley se cumplan.
                            </p>


                            <!-- 16.- TRANFERENCIA Y TRANSMISIÓN INTERNACIONAL DE DATOSPERSONALES-->
                            <h6 class="card-title text-primary font-weight-bold">16. TRANFERENCIA Y TRANSMISIÓN INTERNACIONAL DE DATOSPERSONALES</h6>
                            <p class="text-muted">
                                <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, en consideración de sus vínculos permanentes u ocasionales de carácter administrativos con entidades internacionales, podrá efectuar transferencia y transmisión de datos personales de los titulares.
                            </p>
                            <p class="text-muted">
                                Para la transferencia internacionales de datos personales de los titulares, la <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, tomará las medidas necesarias para que los terceros conozcan y se comprometan a observar esta Política, bajo el entendió que la información personal que reciban, únicamente podrán ser utilizada para asuntos directamente relacionados con <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, y solamente mientras ésta dure y no podrá ser usada o destinada para propósito o fin diferente. Para la transferencia internacional de datos personales se observará lo previsto en el artículo 26 de la Ley 1581 de 2012.
                            </p>
                            <p class="text-muted">
                                Las transmisiones internacionales de datos personales que efectúe <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, no requerirán ser informadas al Titular ni contar con su consentimiento cuando medie un contrato de transmisión de datos personales de conformidad al artículo 25 del Decreto 1377 de 2013.
                                Con la aceptación de la presente política, el Titular autoriza expresamente para transferir y transmitida Información Personal. La información será transferida y transmitida, para todas las relaciones que puedan establecerse con <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>.
                            </p>


                            <!-- 17. LEGISLACIÓN NACIONAL VIGENTE-->
                            <h6 class="card-title text-primary font-weight-bold">17. LEGISLACIÓN NACIONAL VIGENTE</h6>
                            <p class="text-muted">
                                La presente política se regirá de conformidad con lo previsto en la ley 1581 de 2012 y disposiciones concordantes. En lo referente a la calificación de <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, como usuario y fuente de información personal, calificaciones definidas en el artículo tercero (3°) de la ley 1266 de 2008, se aplicarán las disposiciones que sobre la materia se encuentran reguladas por dicha ley.
                            </p>


                            <!-- 18. FECHA DE ENTRADA EN VIGENCIA DE LA POLÍTICA DETRATAMIENTO-->
                            <h6 class="card-title text-primary font-weight-bold">18. FECHA DE ENTRADA EN VIGENCIA DE LA POLÍTICA DETRATAMIENTO</h6>
                            <p class="text-muted">
                                Una vez aprobada por el consejo de administración de <span class="font-weight-bold"> COOTRANSHUILA LTDA</span>, la presente política entra en vigencia.
                                La vigencia de la base de datos será el tiempo razonable y necesario para cumplir las finalidades del tratamiento teniendo en cuenta lo dispuesto en el artículo 11 del decreto 1377 de 2013.
                            </p>


                            <!-- 19. COOKIES-->
                            <h6 class="card-title text-primary font-weight-bold">19. COOKIES</h6>
                            <p class="text-muted">
                                <span class="font-weight-bold"> COOTRANSHUILA LTDA</span> usa cookies para adquirir datos que se pueden usar con el fin de determinar su ubicación física a través de su dirección de Protocolo de Internet («Dirección IP») y técnicas de geolocalización automáticas, o para adquirir información básica sobre el ordenador, la tableta o el teléfono móvil que usted utilice para visitarnos. Consulte la descripción incluida a continuación. Al utilizar nuestros sitios web, usted autoriza la recopilación y el uso de datos mediante cookies de acuerdo con las condiciones de esta política de privacidad.
                            </p>
                            <p class="text-muted">
                                <span class="font-weight-bold"> COOTRANSHUILA LTDA</span> usa herramientas comunes de recopilación de información, como cookies, etiquetas de píxeles y balizas web, para recoger información acerca del uso general de Internet. Cuando visite nuestros sitios web, se almacena un archivo de cookies en su navegador o en el disco duro de su dispositivo. Nosotros y nuestros socios de mercadotecnia, empresas vinculadas o proveedores de análisis o de servicios (por ejemplo, procesadores de pagos, etc.) utilizamos tecnologías tales como cookies, balizas, etiquetas y scripts. Estas tecnologías sirven para analizar tendencias, administrar el sitio, realizar un seguimiento de sus movimientos por todo el sitio y recopilar información demográfica sobre nuestra base de usuarios en general. Nosotros podremos recibir informes fundamentados en el uso por parte de estas empresas de estas tecnologías tanto de forma pormenorizada como agregada. Usted nos autoriza a colocar cookies o tecnologías de seguimiento en su dispositivo.
                            </p>
                            <p class="text-muted">
                                Nosotros podremos asociarnos con cualquier tercero para mostrar publicidad en nuestro sitio o para administrar nuestra publicidad en este sitio y en otros sitios. Nuestro socio tercero podrá usar tecnologías tales como cookies para recoger información sobre sus actividades en este sitio en y otros sitios a fin de proporcionarle publicidad en función de sus actividades de navegación e intereses. Al continuar navegando en nuestros sitios web, usted es consciente del uso de cookies, tal y como se describe en esta Política de privacidad. Si no desea permitir el uso de cookies, puede desactivarlas a través de la configuración de su navegador. Sin embargo, hemos de señalar que posiblemente no todos los navegadores de todas las plataformas admitan esta funcionalidad. Asimismo, si desactiva las cookies, puede que nuestros sitios web no funcionen correctamente o que el acceso y sus funciones se vean afectados o limitados.
                            </p>
                            
                            <a href="{{asset('assets/pdf/AUTORIZACION.pdf')}}" download="autorizacion" class="btn btn-primary"><i class="mdi mdi-download"></i> DESCARGAR FORMATO AQUÍ</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Privacy -->

@endsection