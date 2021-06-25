function compra_rapida(id, codOrigen, nomDestino, codDestino) {
    // let contentOrg = `<option value="${codOrigen}">${nomOrigen}</option>`
	// let contentDes = `<option value="${codDestino}">${nomDestino}</option>`

	let contentOrg = `<option value="9">Bogota</option>`
	let contentDes = `<option value="8">Neiva</option>`

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
