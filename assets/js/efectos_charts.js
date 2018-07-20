$(document).ready(function() {
    // escondo los graficos
	$("#graficoUsuarios").hide();
	$("#graficoFotografos").hide();
	$("#graficoModelos").hide();
	
	// al hacer click en el boton muestro cada grafico
	$("#usuariosEsconder").click(function() {
		// cada vez que hago click muestra y oculta
		$("#graficoUsuarios").toggle();
	});

	$("#fotografosEsconder").click(function() {
		
		$("#graficoFotografos").toggle();
	});

	$("#modelosEsconder").click(function() {
		
		$("#graficoModelos").toggle();
	});
	
});