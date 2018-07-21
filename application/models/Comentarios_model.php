<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios_model extends CI_Model {
	
	public function seleccionarComentarios()
	{

		$sql = "SELECT nombre,comentario
		 from comentarios  ORDER BY id DESC LIMIT 3";

		$query = $this->db->query($sql);

		return $query->result();
		
	}


		public function agregarComentarios($nombre ,$comentario )
	{		
		
		$sql = "INSERT INTO comentarios VALUES
		       (null,		       
		       	'$nombre',
		        '$comentario'	             
		         )";

		$query = $this->db->query($sql);

		return $query;
	}

		public function totalComentarios()
	{		
		
		$sql = "SELECT COUNT(comentario) AS totalcomentarios FROM comentarios";
		

		$query = $this->db->query($sql);

		return $query->row();
	}



	// 	public function editarUsuarios($fecha,$email ,$usuario ,$role ,$id)
	// {			
				
	// 	$sql = "UPDATE usuarios SET fecha = '$fecha',
	// 			email = '$email',
	// 			usuario = '$usuario',
	// 			role = '$role'				
	// 	       WHERE id = $id";

	// 	$query = $this->db->query($sql);    	
		
	// 	 return $query;
	// }


	// 	public function verUsuarios($id)
	// {		
		
	// 	$sql = "SELECT fecha,email,ruta,usuario,role from usuarios where id='$id' ";

	// 	$query = $this->db->query($sql);

	// 	return $query->row();
	// }



	// public function usuariosPorId($id)
	// {
		
	// 	$sql = "SELECT fecha,email,usuario,role from usuarios where id= $id";

	// 	$query = $this->db->query($sql);

	// 	return $query->row();
	// }


	// public function eliminarUsuarios($id)
	// {			
				
	// 	$sql = "DELETE from usuarios where id='$id'";

	// 	$query = $this->db->query($sql);    	
		
	// 	 return $query;
	// }



	// public function totalUsuarios()
	// {		
		
	// 	$sql = "SELECT COUNT(usuario) AS totalusuarios FROM usuarios";
		

	// 	$query = $this->db->query($sql);

	// 	return $query->row();
	// }

	// public function totalFotografos()
	// {		
		
	// 	$sql = "SELECT COUNT(nombre) AS totalfotografos FROM fotografos";
		

	// 	$query = $this->db->query($sql);

	// 	return $query->row();
	// }

	// 	public function totalModelos()
	// {		
		
	// 	$sql = "SELECT COUNT(nombre) AS totalmodelos FROM modelos";
		

	// 	$query = $this->db->query($sql);

	// 	return $query->row();
	// }

	// 	public function totalFotografias()
	// {		
		
	// 	$sql = "SELECT COUNT(fotografias) AS totalfotografias FROM fotografos";
		

	// 	$query = $this->db->query($sql);

	// 	return $query->row();
	// }

	// 	public function totalVentas()
	// {		
		
	// 	$sql = "SELECT SUM(ventas) AS totalventas from fotografos;";
		

	// 	$query = $this->db->query($sql);

	// 	return $query->row();
	// }

	// 	public function totalContratos()
	// {		
		
	// 	$sql = "SELECT SUM(contratos) AS totalcontratos from modelos;";
		

	// 	$query = $this->db->query($sql);

	// 	return $query->row();
	// }

	// 	public function totalOfertas()
	// {		
		
	// 	$sql = "SELECT SUM(ofertas) AS totalofertas from modelos;";
		

	// 	$query = $this->db->query($sql);

	// 	return $query->row();
	// }







	// public function obtenerCapitales($estado)
	// {
	// 	$sql = "SELECT estados.estado,
	// 			capitales.capital			
	// 			from estados  INNER JOIN capitales on estados.id= capitales.id			
	// 			where estados.estado = '$estado'";

	// 	$query = $this->db->query($sql);

	// 	return $query->row();
	// }
	


}