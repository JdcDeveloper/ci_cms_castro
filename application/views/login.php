<br>
<br>
<br>

<div class="row page-header col-md-6 col-md-offset-3 ">	
	<h2 class="fas fa-briefcase">Login Cms Castro</h2>
</div>

<div class="row col-md-6 col-md-offset-3 ">

	<form action="<?php echo base_url();?>login/iniciarsession" method="post">
		<div class="form-group">
			<label type="hidden" id="usuarioM"></label>
			<input type="text" name="usuario" placeholder="Usuario" class="form-control" id="usuario">
		</div>	
		
		<div class="form-group">
			<label type="hidden" id="contrasenaM"></label>
			<input type="password" name="contrasena" placeholder="Contraseña" class="form-control" id="contrasena">
		</div>

		<div class="form-group">
			<label type="hidden" id="confirmarCM"></label>
			<input type="password" name="confirmarContrasena" placeholder="Confirmar Contraseña" class="form-control" id="confirmarContrasena">
		</div>

		<div class="form-group">
			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok" onclick="validar(event)">Login</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
		</div>

		<div class="form-group">
			<a href="" >Olvido su Contraseña?</a>
		</div>		

	</form>	

<br>
<br>
<br>
<br>	
</div>
