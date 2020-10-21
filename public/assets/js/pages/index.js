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
                `;
            }
            $('#optOrigen').html(content);
            $('.preloader').addClass('d-none').delay(350);
        }
    })

    // Funcion para listar los destinos
    $('#optOrigen').on('change', function () {
        $('.preloader').removeClass('d-none').delay(350).css({
            'background-image': 'linear-gradient(45deg, #89939f73, #ffffff69)'
        });
        $.ajax({
            url: 'https://wscootranshuila.teletiquete.com/WebService/pag_web.php?get_ciudad_destino='+this.value,
            type: 'GET',
            success: function (data) {
                ciudades_destino = JSON.parse(data)
                var content = '<option value="">Seleccione el destino</option>'

                for (let item in ciudades_destino) {
                    content += `
                        <option value="${ciudades_destino[item].cod_ciudad}">${ciudades_destino[item].nom_ciudad}</option>
                    `;
                }
                $('#optDestino').html(content);
                $('.preloader').addClass('d-none').delay(350);
            }
        })
    });

    $(window).on('load', function () {
       $('#video_protocolos').attr('href',"assets/videos/protocolos.mp4");
    });
});
