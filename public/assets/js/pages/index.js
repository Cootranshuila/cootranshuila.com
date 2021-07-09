// Globales
var destino = null;
let butacas = [];

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

            setTimeout(() => {
                $('.preloader').addClass('d-none').delay(350);
            }, 350);

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

                $('#optDestino').select2('open');

                $('.preloader').addClass('d-none').delay(350);
            }, error(e) {
                console.log(e);
            }
        });

    });

    // Inicializacion de Select2
    $('.custom-select-2').select2({
        selectionCssClass: "form-control custom-select",
        minimumInputLength: 1,
        language: { inputTooShort: function () { return 'Ingrese al menos 1 caracter'; } },
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
                        let num_butaca = 'SeleccionarButaca("' + btoa(element['@attributes'].Label) + '", '+ViajeID+', this)';
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

function SeleccionarButaca(butaca, ViajeID, el) {
    // Validar que exista el viaje y/o que sea el mismo
    if(!butacas[0] || butacas[0] != ViajeID) {
        if(butacas[0] != ViajeID) {
            //Eliminar las clases seleccionada y agregar libre
            $('.seleccionada').each(function(index, element) {
                $(element).addClass('libre').removeClass('seleccionada');
            });
            //Reiniciamos el arreglo de butacas
            butacas[0] = ViajeID;
            butacas[1] = [];
            butacas[2] = 0;
        } else {
            butacas.push(ViajeID);
            butacas.push([]);
            butacas.push(0);
        }
    }

    //Si supero el maximo de butacas, devolver
    if(butacas[1] && butacas[1].length >= 5 && !$(el).hasClass("seleccionada")) return;

    butaca = atob(butaca);
    let precio = $('#plane_'+ViajeID).data('price');
    let total = 0;

    if($(el).hasClass("seleccionada")) {
        //Si esta seleccionada, se libera
        $(el).addClass('libre').removeClass('seleccionada');

        $('.info_'+ViajeID).addClass('d-none');
        $('#enviar_'+ViajeID).attr('disabled', true);

        removeItemFromArr(butacas[1], butaca);

        if (butacas[1].length > 0) {
            total = butacas[1].length * parseInt(precio);
        }
    } else {
        // Si esta libre se selecciona
        $(el).addClass('seleccionada').removeClass('libre');

        $('.info_'+ViajeID).removeClass('d-none');
        $('#enviar_'+ViajeID).attr('disabled', false);

        butacas[1].push(butaca);

        total = butacas[1].length * parseInt(precio);
    }

    butacas[2] = total;

    $('#seleccionadas_'+ViajeID).text(butacas[1].join(', '));
    $('#total_'+ViajeID).text('$'+format(total));

    console.log(butacas);
}

function Validar(viaje) {
    if(viaje !== butacas[0] || butacas[1].length === 0) {
        swal("Error!", "Error validando sillas seleccionadas, intentelo de nuevo.", "error", {
            button: "Aceptar",
            dangerMode: true,
        });

        return;
    }

    swal("Confirmar", "Error validando sillas seleccionadas, intentelo de nuevo.", "", {
        buttons: {
            cancel: {
              text: "Cancelar",
              value: false,
              visible: true,
              className: "",
              closeModal: true,
            },
            confirm: {
              text: "Aceptar",
              value: true,
              visible: true,
              className: "bg-success",
              closeModal: false
            }
        },
        closeOnClickOutside: false,
    })
    .then(value => {
        if(value) {
            console.log(butacas);
        } else {
            swal.close();
        }
    });
}

function removeItemFromArr (arr, item) {
    var i = arr.indexOf(item);

    if (i !== -1) {
        arr.splice(i, 1);
    }
}

const format = num => String(num).replace(/(?<!\..*)(\d)(?=(?:\d{3})+(?:\.|$))/g, '$1,');
