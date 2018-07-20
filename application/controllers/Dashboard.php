<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		// le paso el titulo al header segun la vista
		$data['title'] = "dashboard"; 
  // valido que el usuario registrado se encuentre logeado, y evitar que gente (hackers) entren atraves de una url por ejemplo http://localhost/cms_castro/dashboard		
		if ($this->session->userdata('usuario')) {
			$data['usuario'] = $this->session->userdata('usuario');		

		    // traemos la data para mostrar la imagen de perfil
	        $data['datos']=$this->login_model->mostrarImagen(); 
            // muestro el total de usuarios 
			$data['tUsuarios'] = $this->usuarios_model->totalUsuarios();

			$data['tFotografos'] = $this->usuarios_model->totalFotografos();

			$data['tModelos'] = $this->usuarios_model->totalModelos();
			
			//data chart fotografos
			$data['tFotografias'] = $this->usuarios_model->totalFotografias();

			$data['tVentas'] = $this->usuarios_model->totalVentas();

			// data chart modelos
			$data['tContratos'] = $this->usuarios_model->totalContratos();

			$data['tOfertas'] = $this->usuarios_model->totalOfertas();

			$this->load->view('layouts/header',$data);
			$this->load->view('admin/navbar',$data);
			$this->load->view('admin/navigation');		
			$this->load->view('admin/dashboard');
			$this->load->view('layouts/footer',$data);
		}else{

			redirect(base_url());
		}
		
		
	}

}	




