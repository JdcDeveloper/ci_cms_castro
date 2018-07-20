<p class="bg-success">
<?php if($this->session->userdata('usuario')): ?>

<?php echo "Bienvenido Usuario: " . $this->session->userdata('usuario'); ?>

<?php endif; ?>
</p>
  
  <div class="container">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Admin
                            <small>Dashboard</small>
                        </h1>


            <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">                             
                                        <div>Usuarios
                                        	<div><?php echo $tUsuarios->totalusuarios?>                  		
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="#">
                                <div class="panel-footer">
            
                                  <span class="pull-left">View Details</span> 
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
                                    <div class="clearfix"></div>
                                </div>
                            </a> -->
                        </div>
                    </div>

                 <!--    fin usuarios -->
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-camera fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        
                                        <div>Fotografos
                                            <div><?php echo $tFotografos->totalfotografos?>                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="#">
                                <div class="panel-footer">
            
                                  <span class="pull-left">View Details</span> 
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
                                    <div class="clearfix"></div>
                                </div>
                            </a> -->
                        </div>
                    </div>

              

                          <!--  fin profesores -->

                          <div class="col-lg-3 col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-male fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">                                        
                                        <div>Modelos
                                        	<div><?php echo $tModelos->totalmodelos?>                  		
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="#">
                                <div class="panel-footer">
            
                                  <span class="pull-left">View Details</span> 
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
                                    <div class="clearfix"></div>
                                </div>
                            </a> -->
                        </div>
                    </div>

                   <!--  fin estudiantes -->


           

           <div class="col-lg-3 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                      
                                        <div>Comentarios
                                            <div>                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="#">
                                <div class="panel-footer">
            
                                  <span class="pull-left">View Details</span> 
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
                                    <div class="clearfix"></div>
                                </div>
                            </a> -->
                        </div>
                    </div>

                    <!--  fin estudiantes aprobados -->

                </div>

            </div>                 


            </div> <!--First row !-->
</div>
<br>
<br>


<div class="container">
	

<div class="col-md-4 ">
 <button class="btn-info btn-lg fas fa-chart-bar" id="usuariosEsconder">Usuarios</button>
 <br>
 <br>
 <div id="graficoUsuarios" ></div>	
</div>


<div class="col-md-4 ">
 <button class="btn-info btn-lg fas fa-chart-bar" id="fotografosEsconder">Fotografos</button>
 <br>
 <br>  
 <div id="graficoFotografos"></div>    
</div>

<div class="col-md-4 ">
 <button class="btn-info btn-lg fas fa-chart-bar" id="modelosEsconder">Modelos</button>
 <br>
 <br>  
 <div id="graficoModelos" ></div>    
</div>

</div>


<br>
<br>
<br>
<br>

