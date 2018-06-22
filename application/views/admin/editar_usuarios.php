	<div class="row page-header col-md-6 col-md-offset-3 ">	
		<h2 class="fas fa-users">Editar Usuarios</h2>
	</div>

	<div class="row col-md-6 col-md-offset-3" >

		<form action="" method="post">
			<div class="form-group">
				<label>Registrado:</label>
				<input type="text" class="form-control" id="datepicker" name="fecha" value="<?php echo $datoss->fecha?>">
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input type="text" class="form-control"  name="email" value="<?php echo $datoss->email?>">
			</div>

			<div class="form-group">
				<label>Usuario:</label>
				<input type="text" class="form-control"  name="usuario" value="<?php echo $datoss->usuario?>" >	
			</div>

			<div class="form-group">
				<label>Role:</label>
				<select class="form-control" name="role">
					<option><?php echo $datoss->role?></option>
					<option value="conductor">conductor</option>
					<option value="administracion">administracion</option>				
				</select>	
			</div>

			<div class="form-group">
				<button type="submit" name="submit" value="submit" class="btn-success btn-sm glyphicon glyphicon-ok">Actualizar</button>
				<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
			</div>

			<div class="form-group">
				<a href="<?php echo base_url();?>usuarios"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Regresar</span></a>
			</div>									
		</form>
<br>
<br>
<br>
		
	</div>