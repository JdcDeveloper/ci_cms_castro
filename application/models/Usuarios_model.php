<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	
	public function seleccionarUsuarios()
	{

		$sql = "SELECT id,ruta,nombre,apellido,fecha,email,estado,capital,parroquia,usuario,role
		 from usuarios";

		$query = $this->db->query($sql);

		return $query->result();
		
	}

		public function mostrarUsuariosExcel()
	{

		$sql = "SELECT fecha,email,usuario,role
		 from usuarios";

		$query = $this->db->query($sql);

		return $query->result_array();
		
	}


		public function agregarUsuarios($ruta ,$nombre ,$apellido ,$fecha ,$email ,$estado ,$capital ,$parroquia ,$usuario ,$contrasena ,$role )
	{		
		
		$sql = "INSERT INTO usuarios VALUES
		       (null,
		       	'$ruta',
		       	'$nombre',
		        '$apellido',		    
		        '$fecha',
		        '$email',
		       	'$estado',
		        '$capital',
		        'parroquia',		        		        		        
		        '$usuario',
		        '$contrasena',
		        '$role'     
		         )";

		$query = $this->db->query($sql);

		return $query;
	}


		public function editarUsuarios($fecha,$email ,$usuario ,$role ,$id)
	{			
				
		$sql = "UPDATE usuarios SET fecha = '$fecha',
				email = '$email',
				usuario = '$usuario',
				role = '$role'				
		       WHERE id = $id";

		$query = $this->db->query($sql);    	
		
		 return $query;
	}


		public function verUsuarios($id)
	{		
		
		$sql = "SELECT fecha,email,ruta,usuario,role from usuarios where id='$id' ";

		$query = $this->db->query($sql);

		return $query->row();
	}



	public function usuariosPorId($id)
	{
		
		$sql = "SELECT fecha,email,usuario,role from usuarios where id= $id";

		$query = $this->db->query($sql);

		return $query->row();
	}


	public function eliminarUsuarios($id)
	{			
				
		$sql = "DELETE from usuarios where id='$id'";

		$query = $this->db->query($sql);    	
		
		 return $query;
	}



		public function totalUsuarios()
	{		
		
		$sql = "SELECT COUNT(usuario) AS totalusuarios FROM usuarios";
		

		$query = $this->db->query($sql);

		return $query->row();
	}


	


}