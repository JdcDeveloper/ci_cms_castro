
	<div class="footer  col-md-12  text-center">
		<footer>@Jonathan Castro All right reserved</footer>
	</div>

  <!-- en el calendario es importante cargar primero jquery y moment, si no hay problemas -->
   <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

   <script src="<?php echo base_url();?>assets/js/moment.js"></script>

   <!-- <script src="assets/js/sidebar.js"></script> -->
    
   <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  

<!--    <script src="<?php echo base_url();?>assets/js/sidebar.js"></script> -->

  <!--  <script src="<?php echo base_url();?>assets/js/tooltip.js"></script> -->

   <!-- <script src="<?php echo base_url();?>assets/js/efectos.js"></script>  -->


  <!-- probando el get -->
   <!--   <script src="<?php echo base_url();?>assets/js/pruebaget.js"></script> -->

  <!--    Datepicker js -->

   <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>

  <!-- Datatable js -->
   <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>

   <script src="<?php echo base_url();?>assets/js/tabla.js"></script>

   <script src="<?php echo base_url();?>assets/js/validaciones.js"></script>

   <script src="<?php echo base_url();?>assets/js/datepicker.js"></script>
   
  
  <!--   highcharts -->
   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/series-label.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/modules/export-data.js"></script>

   <script src="<?php echo base_url();?>assets/js/efectos_charts.js"></script>

   <script src="<?php echo base_url();?>assets/js/cargar_selects.js"></script> 

   <script src="<?php echo base_url();?>assets/js/combo.js"></script> 

<!-- probando el dropzone -->
<!--    <script src="<?php echo base_url();?>assets/js/drop.js"></script> 

   <script src="<?php echo base_url();?>assets/js/dropzone.js"></script>  -->

  <!--   calendario script -->

   <!-- <script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script> -->

   <!-- <script src="<?php echo base_url();?>assets/js/fullcalendar.js"></script> -->

   <!-- <script src="<?php echo base_url();?>assets/js/moment.js"></script> -->

<!--    <script src="<?php echo base_url();?>assets/js/calendario.js"></script> -->



  <!--  <script src="assets/js/scripts.js"></script> -->

 <!--   <script src="assets/js/validar.js"></script> -->

 <!--   <script src="assets/js/tabla.js"></script> -->

    <!--  date picker libreria -->
  <!--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

    <!-- tabla script -->
  <!--  <script src="assets/js/jquery.dataTables.min.js"></script> -->



  <!--Load the AJAX API-->
   <!--  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->

<script type="text/javascript">
       // grafico usuarios
      $(function($){
         $('#graficoUsuarios').highcharts({
     credits: {
        enabled: false
    },
             title:{text:'Grafica Usuarios'},
             
             yAxis:{title:'Porcentaje %',plotLines:[{value:0,width:1,color:'#808080'}]},
             tooltip:{valueSuffix:'%'},
             legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
             series:[{type: 'column',name: 'Usuarios',data: [<?php echo $tUsuarios->totalusuarios?>]},              
             {type: 'column',name: 'Fotografos',data: [<?php echo $tFotografos->totalfotografos?> ]}, 
             {type: 'column',name: 'Modelos',data: [<?php echo $tModelos->totalmodelos?>]}, 
     
           ],
             plotOptions:{line:{dataLabels:{enabled:true}}}
         });
     });

      // grafico fotografos
      $(function($){
         $('#graficoFotografos').highcharts({
     credits: {
        enabled: false
    },
             title:{text:'Grafica Fotografos'},
             
             yAxis:{title:'Porcentaje %',plotLines:[{value:0,width:1,color:'#808080'}]},
             tooltip:{valueSuffix:'%'},
             legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
             series:[{type: 'column',name: 'Fotografias',data: [<?php echo $tFotografias->totalfotografias?>]},               
             {type: 'column',name: 'Ventas',data: [<?php echo $tVentas->totalventas?>]},            
        
           ],
             plotOptions:{line:{dataLabels:{enabled:true}}}
         });
     });

       // grafico modelos
      $(function($){
         $('#graficoModelos').highcharts({
     credits: {
        enabled: false
    },
             title:{text:'Grafica Modelos'},
             
             yAxis:{title:'Porcentaje %',plotLines:[{value:0,width:1,color:'#808080'}]},
             tooltip:{valueSuffix:'%'},
             legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
             series:[{type: 'column',name: 'Contratos',data: [<?php echo $tContratos->totalcontratos?>]}, 
              
             {type: 'column',name: 'Ofertas',data: [<?php echo $tOfertas->totalofertas?>]},            
     
        
           ],
             plotOptions:{line:{dataLabels:{enabled:true}}}
         });
     });

      // grafico comentarios
    //   $(function($){
    //      $('#graficoComentarios').highcharts({
    //  credits: {
    //     enabled: false
    // },
    //          title:{text:'Grafica Comentarios'},
             
    //          yAxis:{title:'Porcentaje %',plotLines:[{value:0,width:1,color:'#808080'}]},
    //          tooltip:{valueSuffix:'%'},
    //          legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
    //          series:[{type: 'column',name: 'Html5',data: [80]},               
    //          {type: 'column',name: 'CSS3',data: [70]}, 
    //          {type: 'column',name: 'Bootstrap',data: [70]},     
        
    //        ],
    //          plotOptions:{line:{dataLabels:{enabled:true}}}
    //      });
    //  });
    
    


</script>

</body>
</html>