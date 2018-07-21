
<div class="row page-header col-md-6 col-md-offset-3 ">	
	<h2 class="fas fa-comments">Comentarios acerca de la plataforma</h2>
</div>

<div class="col-md-6 col-md-offset-3 ">

	<form action="<?php echo base_url();?>comentarios/usercomentario" method="post">		
		
		<div class="form-group">
			
			
			<input type="text" name="nombre"  placeholder="nombre" class="form-control">

			<textarea name="comentario" class="form-control" placeholder="escribe tu comentario"></textarea>

			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Comentar</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
		</div>	

	</form>

<br>
<br>	
<br>
<br>	
<br>
	
</div>