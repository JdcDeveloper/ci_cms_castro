
   $(document).ready(function() {
     $('#calendario').fullCalendar({
      locale: 'es',
      monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
	  dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
	 //  dayClick: function() {
  //   alert('a day has been clicked!');
  // },
 defaultView: 'agendaWeek',
// views: {
//     agendaFourDay: {
//       type: 'agenda',
//       duration: { days: 3 },
//       buttonText: '4 day'
//     }
//   }

// views: {
//           timeline7Days: {
//           type: 'timelineWeek',
//           slotDuration: '24:00',
//           duration: { days: 7 },
//            buttonText: 'resource week'
//         }

//     }


	});


    
   });

