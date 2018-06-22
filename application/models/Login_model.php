<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
		public function loginAdmin($usuario ,$contrasena )
	{

		$sql = "SELECT usuario,contrasena from usuarios where usuario='$usuario' and
		contrasena='$contrasena' and role='admin'	
		";

		$query = $this->db->query($sql);

		return $query->row();
		
	}

		public function loginUsuarios($usuario ,$contrasena )
	{

		$sql = "SELECT usuario,contrasena from usuarios where usuario='$usuario' and
		contrasena='$contrasena' and role='usuario'	
		";

		$query = $this->db->query($sql);

		return $query->row();
		
	}
	

		public function mostrarImagen()
	{		
		
		$sql = "SELECT ruta from usuarios limit 1";

		$query = $this->db->query($sql);

		return $query->row();
	}

		public function cambiarPassAdmin($contrasenav ,$contrasenan )
	{

		$sql = "UPDATE usuarios SET contrasena = '$contrasenan'
		       WHERE contrasena = '$contrasenav' and usuario='admin' and role='admin' ";

		$query = $this->db->query($sql);

		return $query;
		
	}

	public function subirImagen($imagen)
	{		
		
		$sql = "UPDATE usuarios SET ruta = '$imagen'
		       WHERE usuario='admin' and role='admin'";

		$query = $this->db->query($sql);

		return $query;
	}



}
	
