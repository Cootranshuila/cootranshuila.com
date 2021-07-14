$(document).ready(function () {
    let viaje = getCookie('viaje');

    // Si no existe la cookie
    if(!viaje) {
        $('#detalle_compra').hide();
        $('#detalles_viaje').hide();
        $('#cambiar_destino').show();
        $('#mas_buscados').show();
        $('#text_sin_viaje').show();
    } else {
        viaje = JSON.parse(atob(viaje));

        $('#content_detalle_viaje').html(`
            <h5 class="title text-dark">VIAJE DE SALIDA</h5>

            <h5>${viaje.origen}
                <i class="fas fa-long-arrow-alt-right" style="color: #00a039;"></i> ${viaje.destino}
                <i class="fas fa-long-arrow-alt-right" style="color: #00a039; vertical-align: middle;"></i> ${viaje.fecha}
            </h5>
        `);
    }
});

const getCookie = (name) => {
    return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + name.replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
}
