<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargar_model extends CI_Model {
	
	public function cargarEstados()
	{

		$sql = "SELECT estado from estados";

		$query = $this->db->query($sql);

		return $query->result();
		
	}

	public function cargarCapitales()
	{

		$sql = "SELECT capital from capitales";

		$query = $this->db->query($sql);

		return $query->result();
		
	}

	public function cargarParroquias()
	{

		$sql = "SELECT parroquia from parroquias";

		$query = $this->db->query($sql);

		return $query->result();
		
	}

	public function cargarRoles()
	{

		$sql = "SELECT role from roles";

		$query = $this->db->query($sql);

		return $query->result();
		
	}


}	