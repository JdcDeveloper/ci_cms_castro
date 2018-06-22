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
                                        <i class="fas fa-chalkboard fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        
                                        <div>Profesores
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

                </div>

                          <!--  fin profesores -->

                          <div class="col-lg-3 col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-graduation-cap fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">                                        
                                        <div>Estudiantes
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

                   <!--  fin estudiantes -->


            </div> <!--First Row-->

           <div class="col-lg-3 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-fas fa-smile fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                      
                                        <div>Estudiantes Aprobados
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




<!-- 
<div class="container">
	

<div class="row col-md-4 col-md-offset-6 ">
 <div id="grafico" style="width: 900px; height: 500px;"></div>

	
</div>

</div> -->


<br>
<br>
