function compra_rapida(codOrigen, codDestino) {
	var nombre;
	if(codOrigen == 8){
		nombre = 'NEIVA, TERMINAL NEIVA';
	}else{
		if(codOrigen == 9){
			nombre = 'BOGOTÁ, BOGOTÁ';
		}else{
			if(codOrigen == 11){
				nombre = 'PITALITO, TERMINAL PITALITO';
			}else{
				if(codOrigen == 24){
					nombre = 'LA PLATA, TERMINAL LA PLATA';
				}else{
					if(codOrigen == 29){
						nombre = 'FLORENCIA, TERMINAL FLORENCIA';
					}
				}
			}
		}
	}

	if(codDestino == 8){
		nombreDes = 'NEIVA, TERMINAL NEIVA';
	}else{
		if(codDestino == 9){
			nombreDes = 'BOGOTÁ, BOGOTÁ';
		}else{
			if(codDestino == 11){
				nombreDes = 'PITALITO, TERMINAL PITALITO';
			}else{
				if(codDestino == 24){
					nombreDes = 'LA PLATA, TERMINAL LA PLATA';
				}else{
					if(codDestino == 29){
						nombreDes = 'FLORENCIA, TERMINAL FLORENCIA';
					}
				}
			}
		}
	}
    let contentOrg = `<option value="${codOrigen}">${nombre}</option>`
	let contentDes = `<option value="${codDestino}">${nombreDes}</option>`

	// let contentOrg = `<option value="9">Bogota</option>`
	// let contentDes = `<option value="8">Neiva</option>`

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
