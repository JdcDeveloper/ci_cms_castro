
<div class="row page-header col-md-6 col-md-offset-3 ">	
	<h2 class="fas fa-users">Agregar Usuarios</h2>
</div>

<div class="row col-md-6 col-md-offset-3 ">

	<form action="<?php echo base_url();?>usuarios/agregar" method="post">
		
		<input type="hidden" name="ruta" value="user.png">

		<div class="form-group">
			
			<input type="text" name="nombre" placeholder="Nombre" class="form-control" id="nombre">
		</div>

		<div class="form-group">
			
			<input type="text" name="apellido" placeholder="Apellido" class="form-control" id="apellido">
		</div>	
	

		<div class="form-group">
			
			<input type="text" id="datepicker" name="fecha" placeholder="Fecha de Registro" class="form-control" >
		</div>

		<div class="form-group">
			
			<input type="text" name="email" placeholder="Email" class="form-control" id="email">
		</div>

		<div class="form-group">			
			
			<select class="form-control" name="estado" id="estado">
				<option value="">Seleccione Estado</option>
			</select>			
		</div>

		<div class="form-group">			
			
			<select class="form-control" name="capital" id="capital">
				<option value="">Seleccione Capital</option>
			</select>			
		</div>

		<div class="form-group">			
			
			<select class="form-control" name="parroquia" id="parroquia">
				<option value="">Seleccione Parroquia</option>
			</select>			
		</div>	
		

		<div class="form-group">
			
			<input type="text" name="usuario" placeholder="Usuario" class="form-control">
		</div>			
		
		<div class="form-group">
			
			<input type="password" name="contrasena" placeholder="Contraseña" class="form-control">
		</div>

		<div class="form-group">
			
			<input type="password" name="confirmarContrasena" placeholder="Confirmar Contraseña" class="form-control">
		</div>

		<div class="form-group">
			
			<select class="form-control" name="role" id="role">
				<option value="">Seleccione Role</option>
			</select>					
		</div>




		<div class="form-group">
			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Agregar</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
		</div>

		<div class="form-group">
			<a href="<?php echo base_url();?>usuarios"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Regresar</span></a>
		</div>		

	</form>	

<br>
<br>
<br>
<br>	
</div>
