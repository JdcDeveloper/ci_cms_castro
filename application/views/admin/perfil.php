 <div class="row col-md-6 col-md-offset-3 ">
               <h1 class="page-header">
                Admin
                   <small>Perfil</small>
                </h1>

 </div>


<form action="<?php echo base_url();?>login/subirimagen" method="post" enctype="multipart/form-data">		

	<div class="form-group col-md-6 col-md-offset-3">		
	
		<label>Imagen:</label>
		<input type="file" class="form-control" name="imagen" >

		<div class="text-center ">
			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Cargar</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>	

			<br>
			<br>
		</div>			
	</div>

 </form>


<form action="<?php echo base_url();?>login/cambiarpassadmin" method="post">
			
		<div class="form-group col-md-6 col-md-offset-3">	

			
			<input type="password" class="form-control" name="contrasenan" placeholder="Nueva Contraseña">

			<input type="password" class="form-control" name="contrasenav" placeholder="Vieja Contraseña">					
			
		<div class="text-center">
			<button type="submit"  name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Cambiar</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>	
		</div>

		<br>
		<br>

		</div>



</form>

