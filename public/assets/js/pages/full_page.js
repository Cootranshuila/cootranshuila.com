function compra_rapida(nomOrigen, codOrigen, nomDestino, codDestino) {
    let contentOrg = `<option value="${codOrigen}">${nomOrigen}</option>`
	let contentDes = `<option value="${codDestino}">${nomDestino}</option>`

	jQuery('#optOrigen_fast').html(contentOrg)
    jQuery('#optDestino_fast').html(contentDes)

    $('#compra_rapida').modal('show');
}

function cambiar_ciudades() {
	let contentOrg = jQuery('#optDestino_fast').html()
	let contentDes = jQuery('#optOrigen_fast').html()

	jQuery('#optOrigen_fast').html(contentOrg)
	jQuery('#optDestino_fast').html(contentDes)
}
