// Globales
var destino = null;

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

            let TerminalOrigen = $("#TerminalOrigen").val();

            if(TerminalOrigen)
                $("#optOrigen").val(TerminalOrigen).trigger('change');

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

                let TerminalDestino = $("#TerminalDestino").val();

                if(TerminalDestino)
                    $("#optDestino").val(TerminalDestino).trigger('change');

                $('.preloader').addClass('d-none').delay(350);
            }, error(e) {
                console.log(e);
            }
        });

    });

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

            let butacas = "";

            for (let index = 0; index <= 1; index++) {
                let html = "";
                let columna = 0;
                let crear_tr = true;
                let count_td = 0;

                if(Array.isArray(data.sector)) {
                    butacas = data.sector[index].cell;
                } else {
                    butacas = data.sector.cell;
                }

                butacas.forEach(element => {
                    if(columna == 0 && !crear_tr) {
                        count_td = count_td + 1;
                    }

                    if(columna != element['@attributes'].Columna && !crear_tr) {
                        html += "</tr>";
                        crear_tr = true;

                        columna = columna + 1;
                    }

                    if(crear_tr) {
                        html += "<tr>";
                        crear_tr = false;
                    }

                    //Cuando la butaca esta libre
                    if(element['@attributes'].Type == "1" && (element['@attributes'].Estado == "-1" || element['@attributes'].Estado == 3)) {
                        let num_butaca = 'SeleccionarButaca("' + btoa(element['@attributes'].Label) + '", this)';
                        html += "<td class='butaca libre' onclick='"+num_butaca+"' data-num='"+ btoa(element['@attributes'].Label) +"'></td>";
                    }

                    // Cuando la butaca esta vendida o reservada
                    if(element['@attributes'].Type == "1" && (element['@attributes'].Estado != "-1" && element['@attributes'].Estado != 3)) {
                        html += "<td class='butaca ocupada'></td>";
                    }

                    // Cuando es pasillo
                    if((element['@attributes'].Type == "0" || element['@attributes'].Type == "5" || element['@attributes'].Type == "6") && columna == element['@attributes'].Columna) {
                        html += "<td></td>";
                    }

                    // Cuando baño
                    if(element['@attributes'].Type == "2" && columna == element['@attributes'].Columna) {
                        html += "<td class='butaca wc'></td>";
                    }
                });

                let espacio = "<tr>";
                for (let i = 0; i < count_td; i++) {
                    espacio += "<td></td>";
                }
                espacio += "</tr>";

                html = espacio + html;

                if(Array.isArray(data.sector)) {
                    if(index == 1)
                        $('#butacas_primer_piso_plano_'+ViajeID).html(html);
                    else
                        $('#butacas_segundo_piso_plano_'+ViajeID).html(html);
                } else {
                    $('#butacas_primer_piso_plano_'+ViajeID).html(html);

                    index = 2;
                }
            }

            $("#plane_"+ViajeID).removeClass('d-none');
        }, error(e) {
            console.log(e);
        }
    });
}

function ocultarMapa(ViajeID, TerminalOrigenID, TerminalDestinoID, el) {
    $(el).attr("onclick", "GetMapaButacas("+ViajeID+", "+TerminalOrigenID+", "+TerminalDestinoID+", this)");
    $("#plane_"+ViajeID).addClass('d-none');
    $(el).text('Ver Sillas');
}

function CanbiarDestino() {
    $('#cambiar_destino').show(800);
}

function SeleccionarButaca(butaca, el) {
    butaca = atob(butaca);

    console.log(butaca);

    if($(el).hasClass( "seleccionada" )) {
        $(el).addClass('libre').removeClass('seleccionada');
    } else {
        $(el).addClass('seleccionada').removeClass('libre');
    }
}
