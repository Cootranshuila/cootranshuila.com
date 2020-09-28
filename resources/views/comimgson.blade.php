
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Cootranshuila LTDA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cootranshuila LTDA" />
    <meta name="keywords" content="Cootranshuila, Huila, Neiva, Pitalito, Bogotá, Transporte, Pasajeros, Viajar, Turismo" />
    <meta name="author" content="Cootranshuila Devs Team" />
    <meta name="email" content="sistemas@cootranshuila.com" />
    <meta name="website" content="https://www.cootranshuila.com/" />
    <meta name="Version" content="v1" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
    <!-- Main Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt">
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    {{-- <div class="back-to-home rounded d-none d-sm-block">
        <a href="index.html" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
    </div> --}}

    <!-- ERROR PAGE -->
    <section class="bg-home d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 text-center">
                    <img src="{{ asset('assets/images/mantenimiento.png') }}" class="img-fluid" alt="">
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="title-heading text-center mt-4 mt-md-5 pt-md-5">
                        <h1 class="heading mb-3">Cootranshuila LTDA<span class="element text-primary"></span></h1>
                        <p class="para-desc mx-auto text-muted h3">¡Comprá tu tiquete!</p>
                        <form class="rounded p-4 mt-4 bg-white" action="https://cootranshuila.teletiquete.com/" method="POST">
                            <div class="row text-left">

                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Origen: </label>
                                                <select class="form-control custom-select" name="optOrigen" id="optOrigen" required>
                                                    <option selected="">Seleccione origen</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Destino: </label>
                                                <select class="form-control custom-select" name="optDestino" id="optDestino" required>
                                                    <option selected="">Seleccione destino</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Fecha ida: </label>
                                                <input name="date" type="text" class="flatpickr flatpickr-input form-control" id="checkin-date" name="txtFecSalida" required>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Fecha regreso: </label>
                                                <input name="date" type="text" class="flatpickr flatpickr-input form-control" placeholder="yyyy-mm-dd" id="checkout-date" name="txtFecRegreso">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <button type="submit" id="search" name="search" class="searchbtn btn btn-primary btn-block p">Buscar</button>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div> <!---end col-->
                            </div><!--end row-->
                        </form>
                        <p class="text-muted mb-0 mt-4"><span class="text-dark"></span>Habilitada solo para compras online, pronto volveremos con toda la información</p>
                    </div>
                </div><!--end col-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- ERROR PAGE -->

    <!-- javascript -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollspy.min.js') }}"></script>
    <!-- Datepicker -->
    <script src="{{ asset('assets/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.init.js') }}"></script>
    <!-- Icons -->
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        $(document).ready(function () {

            // Peticion par listar las ciudades de Origen
            $.ajax({
                url: 'https://wscootranshuila.teletiquete.com/WebService/pag_web.php?get_ciudad',
                type: 'GET',
                headers: {},
                success: function (data) {
                    ciudades = JSON.parse(data)
                    var content = '<option value="">Seleccione el origen</option>'

                    for (let item in ciudades) {
                        content += `
                            <option value="${ciudades[item].cod_ciudad}">${ciudades[item].nom_ciudad}</option>
                        `
                    }
                    $('#optOrigen').html(content)
                }
            })

            // Funcion para listar los destinos
            $('#optOrigen').on('change', function () {
                $.ajax({
                    url: 'https://wscootranshuila.teletiquete.com/WebService/pag_web.php?get_ciudad_destino='+this.value,
                    type: 'GET',
                    success: function (data) {
                        ciudades_destino = JSON.parse(data)
                        var content = '<option value="">Seleccione el destino</option>'

                        for (let item in ciudades_destino) {
                            content += `
                                <option value="${ciudades_destino[item].cod_ciudad}">${ciudades_destino[item].nom_ciudad}</option>
                            `
                        }
                        $('#optDestino').html(content)
                    }
                })
            });

        });
    </script>

</body>
</html>
