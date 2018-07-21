 <nav class="menuColor navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right"> 

                    <li><img src="<?=base_url()?>subidas/miniaturas/<?php echo $datos->ruta;?>" class="img-responsive img-circle" />                          
                    </li>

                    <li><a class="navbar-brand"><?php echo $usuario; ?></a></li>

                    <li>
                         <a class="navbar-brand fas fa-user-tie" href="<?php echo base_url();?>login/perfiladmin">Perfil</a>          
                    </li>  

                    <li>
                         <a class="navbar-brand fas fa-times-circle" href="<?php echo base_url();?>login/cerrarsession">Cerrar Session</a>          
                    </li>                                    
                
                </ul>           

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>