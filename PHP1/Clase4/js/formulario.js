function validar(){
	error= false;
	mensaje= '';
	//Recupera,os el valor del campo
	nombre = document.getElementById('c1').value

	//Comprobamos si tiene contenido
	if(nombre==''){
		error=true
		mensaje='Debe agregar su nombre'
	}else{
		mensaje=''
	}

	document.getElementById('e1').innerHTML=mensaje

	app = document.getElementById('c2').value
	if(app==''){
		error= true
		mensaje='Debe agregar su apellido paterno'
	}else{
		mensaje=''
	}

	document.getElementById('e2').innerHTML=mensaje

	apm = document.getElementById('c3').value
	if(apm==''){
		error= true
		mensaje='Debe agregar su apellido materno'
	}else{
		mensaje=''
	}

	document.getElementById('e3').innerHTML=mensaje

	correo = document.getElementById('c4').value
	if(correo==''){
		error= true
		mensaje='Debe agregar su correo'
	}else{
		mensaje=''
	}

	document.getElementById('e4').innerHTML=mensaje

	if(!error){
		return true;
	}else{
		return false;
	}
}