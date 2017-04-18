$(document).ready(function(){
	$("#formulario").submit(function(){
		error= false
		mensaje=''

		nombre=$("#c1").val()
		if(nombre==''){
			error=true
			mensaje="Debe agregar su nombre"
		}else{
			mensaje=''
		}
		$("#e1").html(mensaje)

		nombre=$("#c2").val()
		if(nombre==''){
			error=true
			mensaje="Debe agregar su apellido paterno"
		}else{
			mensaje=''
		}
		$("#e2").html(mensaje)

		nombre=$("#c3").val()
		if(nombre==''){
			error=true
			mensaje="Debe agregar su apellido materno"
		}else{
			mensaje=''
		}
		$("#e3").html(mensaje)

		nombre=$("#c4").val()
		if(nombre==''){
			error=true
			mensaje="Debe agregar su correo"
		}else{
			mensaje=''
		}
		$("#e4").html(mensaje)

		if (!error){
			return true
		}else{
			return false
		}
	})
})
