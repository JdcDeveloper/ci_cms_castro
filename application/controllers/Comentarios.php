<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends CI_Controller {
	
	public function index()
	{
		// le paso el titulo al header segun la vista
		$data['title'] = "comentarios";

  // valido que el usuario registrado se encuentre logeado, y evitar que gente (hackers) entren atraves de una url por ejemplo http://localhost/cms_castro/dashboard
		if ($this->session->userdata('usuario')) {
		

			$data['usuario'] = $this->session->userdata('usuario');		

		    // traemos la data para mostrar la imagen de perfil
	        $data['datos'] = $this->login_model->mostrarImagen();

	        $data['comentarios'] = $this->comentarios_model->seleccionarComentarios();  
           

			$this->load->view('layouts/header',$data);
			$this->load->view('admin/navbar',$data);
			$this->load->view('admin/navigation');		
			$this->load->view('admin/comentarios',$data);
			$this->load->view('layouts/footer');
		}else{

			redirect(base_url());
		}
		
		
	}

	    public function agregar()
    {   

        if ($this->session->userdata('usuario')) {

            $data['usuario'] = $this->session->userdata('usuario');        

            // traemos la data para mostrar la imagen de perfil
            $data['datos']=$this->login_model->mostrarImagen();     

            $this->load->view('layouts/header');
            $this->load->view('admin/navbar',$data);
            $this->load->view('admin/navigation');
            $this->load->view('admin/comentarios');
            $this->load->view('layouts/footer');    
                           
            if (isset($_POST['submit'])) {  

              
              $nombre = $this->input->post('nombre');      
              $comentario = $this->input->post('comentario');
             
                // nota el orden de los parametros, altera las posiciones en la base de datos
              $this->comentarios_model->agregarComentarios($nombre ,$comentario);

              redirect(base_url("comentarios"));     
                          
        }     

    }else{

        redirect(base_url());
    }          
            
 }


		public function usuariosComentarios()
	{
		// le paso el titulo al header segun la vista
		$data['title'] = "comentarios";

  // valido que el usuario registrado se encuentre logeado, y evitar que gente (hackers) entren atraves de una url por ejemplo http://localhost/cms_castro/dashboard
		if ($this->session->userdata('usuario')) {
		

			$data['usuario'] = $this->session->userdata('usuario');		

		    // traemos la data para mostrar la imagen de perfil
	        $data['datos'] = $this->login_model->mostrarImagen();

	        // $data['comentarios'] = $this->comentarios_model->seleccionarComentarios();  
           

			$this->load->view('layouts/header',$data);
			$this->load->view('usuarios/navbar',$data);
			$this->load->view('usuarios/navigation');		
			$this->load->view('usuarios/comentarios');
			$this->load->view('layouts/footer');
		}else{

			redirect(base_url());
		}
		
		
	}

	// comentarios del usuario
	    public function usercomentario()
    {   

        if ($this->session->userdata('usuario')) {

            $data['usuario'] = $this->session->userdata('usuario');        

            // traemos la data para mostrar la imagen de perfil
            $data['datos']=$this->login_model->mostrarImagen();     

            $this->load->view('layouts/header');
            $this->load->view('usuarios/navbar',$data);
            $this->load->view('usuarios/navigation');
            $this->load->view('usuarios/comentarios');
            $this->load->view('layouts/footer');    
                           
            if (isset($_POST['submit'])) {  

              
              $nombre = $this->input->post('nombre');      
              $comentario = $this->input->post('comentario');
             
                // nota el orden de los parametros, altera las posiciones en la base de datos
              $this->comentarios_model->agregarComentarios($nombre ,$comentario);

              redirect(base_url("comentarios/usuarioscomentarios"));     
                          
        }     

    }else{

        redirect(base_url());
    }          
            
 }
 

}	


