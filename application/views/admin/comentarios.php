
<div class="row page-header col-md-6 col-md-offset-3 ">	
	<h2 class="fas fa-comments">Comentarios</h2>
</div>

<div class="col-md-6 col-md-offset-3 ">

	<form action="<?php echo base_url();?>comentarios/agregar" method="post">		
		
		<div class="form-group">
			
			<!-- <img src="<?=base_url()?>subidas/miniaturas/<?php echo $datos->ruta;?>" class="img-responsive img-circle" /> -->
			
			<input type="text" name="nombre"  placeholder="nombre" class="form-control">

			<textarea name="comentario" class="form-control" placeholder="escribe tu comentario"></textarea>

			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Comentar</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
		</div>	

	</form>

	<br>
	<br>	

		<div class="form-group ">			
			<?php
				// abro llave del foreach
				foreach ($comentarios as $mComentarios) {	

			

			?>
			<h5 class="form-control"><?php echo $mComentarios->nombre?></h5>
			<h5 class="form-control"><?php echo $mComentarios->comentario?></h5>
			<br>

			<?php
				// cierro llave del foreach
				}

			?>
		</div>
			
	<!-- <nav aria-label="Page navigation">
	  <ul class="pagination">
	    <li>
	      <a href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <li><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	    <li>
	      <a href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>
	  </ul>
	</nav> -->
<br>
	
</div>