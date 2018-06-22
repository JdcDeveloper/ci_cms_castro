<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	
	public function index()
	{
        // valido que el usuario registrado se encuentre logeado, y evitar que gente (hackers) entren atraves de una url por ejemplo http://localhost/cms_castro/dashboard
        if ($this->session->userdata('usuario')) {

            // tenemos la data del usuario para mostrarla en la navbar    
            $data['usuario'] = $this->session->userdata('usuario');            

            // traemos la data para mostrar la imagen de perfil
            $data['datos']=$this->login_model->mostrarImagen();

            $data['datoss'] = $this->usuarios_model->seleccionarUsuarios();

            $this->load->view('layouts/header');
            $this->load->view('admin/navbar',$data);
            $this->load->view('admin/navigation');
            $this->load->view('admin/usuarios',$data);
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
            $this->load->view('admin/agregar_usuarios');
            $this->load->view('layouts/footer');    
                           
            if (isset($_POST['submit'])) {  

              $ruta = $this->input->post('ruta'); 
              $nombre = $this->input->post('nombre');      
              $apellido = $this->input->post('apellido');
              $ruta = $this->input->post('ruta');  
              $fecha = $this->input->post('fecha');      
              $email = $this->input->post('email');
              $estado = $this->input->post('estado');  
              $capital = $this->input->post('capital');      
              $parroquia = $this->input->post('parroquia');         
              $usuario = $this->input->post('usuario');
              $contrasena = $this->input->post('contrasena');
              $role = $this->input->post('role');
                // nota el orden de los parametros, altera las posiciones en la base de datos
              $this->usuarios_model->agregarUsuarios($ruta ,$nombre ,$apellido ,$fecha,$email ,$estado ,$capital ,$parroquia ,$usuario , $contrasena ,$role);

              redirect(base_url("usuarios"));     
                          
        }     

    }else{

        redirect(base_url());
    }          
            
 }
       
    

    // importante colocar el metodo de cargar en el mismo controlador
    // para evitar problemas en la url con el ajax
        public function cargarEstados()
    {
        
        $data = $this->cargar_model->cargarEstados();

        print_r(json_encode($data));      
       
    }

        public function cargarCapitales()
    {
        
        $data = $this->cargar_model->cargarCapitales();

        print_r(json_encode($data));      
       
    }

       public function cargarParroquias()
    {
        
        $data = $this->cargar_model->cargarParroquias();

        print_r(json_encode($data));      
       
    }

        public function cargarRoles()
    {
        
        $data = $this->cargar_model->cargarRoles();

        print_r(json_encode($data));      
       
    }




        // obtengo el parametro id
        public function editar($id) {       
                
            // mantego abierta los datos de la session
            $data['usuario'] = $this->session->userdata('usuario');
            // $data['contrasena'] = $this->session->userdata('contrasena');   
            
            $data['datoss'] = $this->usuarios_model->usuariosPorId($id);

             // traemos la data para mostrar la imagen de perfil
            $data['datos']=$this->login_model->mostrarImagen(); 

                if (isset($_POST['submit'])) {
                            $fecha = $this->input->post('fecha');
                            $email = $this->input->post('email');
                            $usuario = $this->input->post('usuario');
                            $role = $this->input->post('role');                        

                $data['datos']= $this->usuarios_model->editarUsuarios($fecha,$email ,$usuario ,$role ,$id);
                $this->load->view('admin/editar_usuarios',$data);

                redirect(base_url("usuarios"));
                            
                
                } 
                
                $this->load->view('layouts/header');
                $this->load->view('admin/navbar',$data);
                $this->load->view('admin/navigation');           
                $this->load->view('admin/editar_usuarios',$data);
                $this->load->view('layouts/footer');                     

    }


      public function eliminar($id)   {
       

            $this->usuarios_model->eliminarUsuarios($id);

            redirect(base_url("usuarios"));   
                

    } 


     public function ver($id)   {
       

        $data['usuario'] = $this->session->userdata('usuario');
        $data['contrasena'] = $this->session->userdata('contrasena');       

        $data['datoss']=$this->usuarios_model->verUsuarios($id);

        // traemos la data para mostrar la imagen de perfil
        $data['datos']=$this->login_model->mostrarImagen(); 

        $this->load->view('layouts/header');
        $this->load->view('admin/navbar',$data);
        $this->load->view('admin/navigation');       
        $this->load->view('admin/ver_usuarios',$data);
        $this->load->view('layouts/footer');  
                

    }


		public function totalUsuarios()
	{
		
		$data['datos'] = $this->usuarios_model->totalUsuarios();
		
		$this->load->view('admin/dashboard',$data);
		
	}

	   public function reporteUPdf()	{       	
	
	 $data = $this->usuarios_model->seleccionarUsuarios();
	

	 $totalE = $this->usuarios_model->totalUsuarios();  

	 // Creacion del PDF
 
    /*
     * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
     * heredó todos las variables y métodos de fpdf
     */

	 $this->pdf = new fpdf();
    // Agregamos una página
    $this->pdf->AddPage();
    // Define el alias para el número de página que se imprimirá en el pie
    $this->pdf->AliasNbPages();
 
    /* Se define el titulo, márgenes izquierdo, derecho y
     * el color de relleno predeterminado
     */
    $this->pdf->SetTitle("Reporte Usuarios");
    $this->pdf->SetLeftMargin(15);
    $this->pdf->SetRightMargin(15);
    $this->pdf->SetFillColor(200,200,200);
 
    // Se define el formato de fuente: Arial, negritas, tamaño 9
    $this->pdf->SetFont('Arial', 'B', 9);
    /*
     * TITULOS DE COLUMNAS
     *
     * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
     */
 
    $this->pdf->Cell(40,5,'Registrado','TBL',0,'L','1');
    $this->pdf->Cell(40,5,'Email','TB',0,'L','1');
    $this->pdf->Cell(40,5,'Usuario','TB',0,'L','1');
    $this->pdf->Cell(40,5,'Role','TB',0,'L','1');         
    $this->pdf->Ln(7);
    // La variable $x se utiliza para mostrar un número consecutivo
    // $x = 1;
    foreach ($data as $datos) {
      // se imprime el numero actual y despues se incrementa el valor de $x en uno
      // $this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
      // Se imprimen los datos de cada alumno
      $this->pdf->Cell(40,5,$datos->fecha,'B',0,'L',0);
      $this->pdf->Cell(40,5,$datos->email,'B',0,'L',0);
      $this->pdf->Cell(40,5,$datos->usuario,'B',0,'L',0);
      $this->pdf->Cell(40,5,$datos->role,'B',0,'L',0);
     
     
      //Se agrega un salto de linea
      $this->pdf->Ln(5);
    }

    $this->pdf->Cell(40,5,'Total Fecha:','TB',0,'L','1');
 	$this->pdf->Cell(40,5, date("d-m-y"),'B',0,'L',0);
 	$this->pdf->Ln(5);
 	$this->pdf->Cell(40,5,'Total Usuarios:','TB',0,'L','1');
 	$this->pdf->Cell(40,5, $totalE->totalusuarios,'B',0,'L',0);
  
    /*
     * Se manda el pdf al navegador
     *
     * $this->pdf->Output(nombredelarchivo, destino);
     *
     * I = Muestra el pdf en el navegador
     * D = Envia el pdf para descarga
     *
     */
    $this->pdf->Output("Reporte usuarios.pdf", 'D');
		
	}


        public function reporteUExcel()
    {

        $data = $this->usuarios_model->mostrarUsuariosExcel();
       
       //load our new PHPExcel library
        $this->load->library('phpexcel');
        //activate worksheet number 1
        $this->phpexcel->setActiveSheetIndex(0);

        //name the worksheet
        $this->phpexcel->getActiveSheet()->setTitle('Reporte Usuarios');

          // mostramos la data del modelo biene en forma de array, con result_array

         $this->phpexcel->getActiveSheet()->fromArray($data);

 
    $filename='Reporte usuarios.xls'; //save our workbook as this file name
    header('Content-Type: application/vnd.ms-excel'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache
                
    //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
    //if you want to save it as .XLSX Excel 2007 format
    $objWriter = PHPExcel_IOFactory::createWriter($this->phpexcel, 'Excel5');  
    //force user to download the Excel file without writing it to server's HD
    $objWriter->save('php://output');
       
        
    }




}
