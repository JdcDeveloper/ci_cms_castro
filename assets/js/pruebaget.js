

// cargando select con getjson
$.getJSON('calificaciones_controller/prueba',{nombre:"nombre"}, function(resp) {

	 // $('#prueba').html(resp); 
	 $.each(resp, function(index, val) {
	 	 $('#prueba').append('<option value="'+index+'">'+val.nombre+'</option>')
	 });
})

