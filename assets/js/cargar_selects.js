
  $(document).ready(function() {

// Buena forma si no tuviera ya mi base_url configurada
 // var base_url = <?php echo base_url();?> 
 

// Ya tengo la base url en config, osea htpp:localhost/sistema_escuela

// Nota estar pendiente al obtener la url escribirla bien,
// chequear por consola al obtener GET



// importante cuando aiga problemas al leer el ajax
// limpiar el historial del navegador y reiniciar apache
// cargando select con getjson, cargo los estados
// estado es parametro y "estado" el valor   estado:"estado"

$.getJSON('cargarEstados',{estado:"estado"}, function(resp) {
	
	 $.each(resp, function(index, val) {
	 	 $('#estado').append('<option value="'+val.estado+'">'+val.estado+'</option>')
	 });
})


// cargando select con getjson, cargo las capitales
$.getJSON('cargarCapitales',{capital:"capital"}, function(resp) {
	
	 $.each(resp, function(index, val) {
	 	 $('#capital').append('<option value="'+val.capital+'">'+val.capital+'</option>')
	 });
})


// cargando select con getjson, cargo las parroquias
$.getJSON('cargarParroquias',{parroquia:"parroquia"}, function(resp) {
	 
	 $.each(resp, function(index, val) {
	 	 $('#parroquia').append('<option value="'+val.parroquia+'">'+val.parroquia+'</option>')
	 });
})

// cargando select con getjson, cargo los roles
$.getJSON('cargarRoles',{role:"role"}, function(resp) {
	 
	 $.each(resp, function(index, val) {
	 	 $('#role').append('<option value="'+val.role+'">'+val.role+'</option>')
	 });
})


});



