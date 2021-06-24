$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// $('.preloader').removeClass('d-none').delay(350).css({
//     'background-image': 'linear-gradient(45deg, #89939f73, #ffffff69)'
// });

$(document).ready(function () {

    // Peticion par listar las ciudades de Origen
    // $.ajax({
    //     url: 'https://wscootranshuila.teletiquete.com/WebService/pag_web.php?get_ciudad',
    //     type: 'GET',
    //     headers: {},
    //     success: function (data) {
    //         ciudades = JSON.parse(data)
    //         var content = '<option value="">Seleccione el origen</option>'

    //         for (let item in ciudades) {
    //             content += `
    //                 <option value="${ciudades[item].cod_ciudad}">${ciudades[item].nom_ciudad}</option>
    //             `;
    //         }
    //         $('#optOrigen').html(content);
    //         $('.preloader').addClass('d-none').delay(350);
    //     }
    // });



    // Funcion para listar los destinos
    // $('#optOrigen').on('change', function () {
    //     $('.preloader').removeClass('d-none').delay(350).css({
    //         'background-image': 'linear-gradient(45deg, #89939f73, #ffffff69)'
    //     });
    //     $.ajax({
    //         url: 'https://wscootranshuila.teletiquete.com/WebService/pag_web.php?get_ciudad_destino='+this.value,
    //         type: 'GET',
    //         success: function (data) {
    //             ciudades_destino = JSON.parse(data)
    //             var content = '<option value="">Seleccione el destino</option>'

    //             for (let item in ciudades_destino) {
    //                 content += `
    //                     <option value="${ciudades_destino[item].cod_ciudad}">${ciudades_destino[item].nom_ciudad}</option>
    //                 `;
    //             }
    //             $('#optDestino').html(content);
    //             $('.preloader').addClass('d-none').delay(350);
    //         }
    //     })
    // });

    $(window).on('load', function () {
       $('#video_protocolos').attr('href',"assets/videos/protocolos.mp4");
    });


    // Peticion par listar las ciudades de Origen
    $.ajax({
        url: '/GetHabilitadas',
        type: 'POST',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            // console.log(data.terminal[0]['@attributes']);
            ciudades = data.terminal;
            // console.log(ciudades);
            var content = '<option value="">Seleccione el origen</option>';

            let sucursales = [];
            ciudades.forEach(terminalOrigen => {
                sucursales.push([terminalOrigen['@attributes']['LocalidadNombre']+', '+terminalOrigen['@attributes'].Nombre, terminalOrigen['@attributes'].ID]);
            });
            sucursales = sucursales.sort();

            sucursales.forEach(ter => {
                content += `
                   <option value="${ter[1]}">${ter[0]} </option>
                `;
            });
            // console.log(data.terminal);
            $('#optOrigen').html(content);
            $('.preloader').addClass('d-none').delay(350);
        }, error(e) {
            console.log(e);
        }
    });

    // petecion para listar las ciudades de destino
    $('#optOrigen').on('change', function () {

        $('.preloader').removeClass('d-none').delay(350).css({
            'background-image': 'linear-gradient(45deg, #89939f73, #ffffff69)'
        });

        $.ajax({
            url: '/GetHabilitadasDestino',
            type: 'POST',
            data: {id:this.value},
            dataType: "json",
            success: function (data) {
                console.log(data);
                // console.log(data.terminal[0]['@attributes']);
                ciudadesDestino = data.terminal;
                // console.log(ciudades);
                var content = '<option value="">Seleccione el destino</option>';

                let sucursales = [];
                ciudadesDestino.forEach(terminalDestino => {
                    sucursales.push([terminalDestino['@attributes']['LocalidadNombre']+', '+terminalDestino['@attributes'].Nombre, terminalDestino['@attributes'].ID]);
                });
                sucursales = sucursales.sort();

                sucursales.forEach(ter => {
                    content += `
                       <option value="${ter[1]}">${ter[0]} </option>
                    `;
                });
                // console.log(data.terminal);
                $('#optDestino').html(content);
                $('.preloader').addClass('d-none').delay(350);
            }, error(e) {
                console.log(e);
            }
        });

    });

    // $.ajax({
    //     url: '/GetDisponiblesIda',
    //     type: 'POST',
    //     data: {viajes:this.value},
    //     dataType: "json",
    //     success: function (data) {
    //         console.log(data);

    //     }, error(e) {
    //         console.log(e);
    //     }
    // });
});

function GetMapaButacas(ViajeID, TerminalOrigenID, TerminalDestinoID, el) {
    $(el).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');

    $.ajax({
        url: '/GetMapaButacas',
        type: 'POST',
        data: {ViajeID:ViajeID, TerminalOrigenID:TerminalOrigenID, TerminalDestinoID:TerminalDestinoID},
        dataType: "json",
        success: function (data) {
            $(el).attr("onclick", "ocultarMapa("+ViajeID+", "+TerminalOrigenID+", "+TerminalDestinoID+", this)");
            $(el).text('Ocultar');
            console.log(data);
        }, error(e) {
            console.log(e);
        }
    });
}

function ocultarMapa(ViajeID, TerminalOrigenID, TerminalDestinoID, el) {
    $(el).attr("onclick", "GetMapaButacas("+ViajeID+", "+TerminalOrigenID+", "+TerminalDestinoID+", this)");
    $(el).text('Ver Sillas');
}
