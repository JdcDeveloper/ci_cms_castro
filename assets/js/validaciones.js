	// estas variables si estan por fuera de la funcion, no funcionan en la funcion
	// var usuario    			= document.getElementById("usuario").value;
	// var contrasena 			=  document.getElementById("contrasena").value;
	// var confirmarContrasena = document.getElementById("confirmarContrasena").value;


//validacion del login
function validar(evt){

	var usuario    			= document.getElementById("usuario").value;
	var contrasena 			=  document.getElementById("contrasena").value;
	var confirmarContrasena = document.getElementById("confirmarContrasena").value;

	if (usuario ==="" || contrasena ==="" || confirmarContrasena ==="") {
	alert("Los campos no pueden estar vacios");

	}else if (usuario.length < 4 || usuario.length >20) {
	
	 evt.preventDefault();
	// la variable mensaje es local, asi que la puedo usar en varias condiciones	
	 var mensaje = document.getElementById("usuarioM");

	 mensaje.style.color = "red";
	 mensaje.innerHTML="Minimo 4 valores y Maximo 20 valores";

	}else if (contrasena.length < 4 || contrasena.length >10) {
		
	 evt.preventDefault();

	 var mensaje = document.getElementById("contrasenaM");

	 mensaje.style.color = "red";
	 mensaje.innerHTML="Minimo 4 valores y Maximo 10 valores";
	
	}else if (confirmarContrasena.length < 4 || confirmarContrasena.length >10) {
		
	 evt.preventDefault();

	 var mensaje = document.getElementById("confirmarCM");

	 mensaje.style.color = "red";
	 mensaje.innerHTML="Minimo 4 valores y Maximo 10 valores";
	
	}else if (contrasena !== confirmarContrasena) {
		
	 evt.preventDefault();

	 var mensaje = document.getElementById("confirmarCM");

	 mensaje.style.color = "red";
	 mensaje.innerHTML="Las contraseñas no coinciden";
	
	}


}

