 google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMultSeries);

function drawMultSeries() {
      var data = google.visualization.arrayToDataTable([
        ['Estadistica', 'Comunidad activa'],
        ['Usuarios', <?php echo $tUsuarios->totalusuarios?>],
        ['Profesores', <?php echo $tProfesores->totalprofesores?>],
        ['Estudiantes', <?php echo $tEstudiantes->totalestudiantes?>],        
      ]);

      var options = {
        title: 'Gráfico Estadistico',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Estadisticas fecha: <?php echo date("d-m-y");?>',
          minValue: 0
        },
        // vAxis: {
        //   title: 'Estadistica'
        // }
      };

      var chart = new google.visualization.BarChart(document.getElementById('grafico'));
      chart.draw(data, options);
    }