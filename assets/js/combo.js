
// combo dependiente
$(document).ready(function(){
   $("#estado").change(function () {
           $("#estado option:selected").each(function () {
            miestado=$('#estado').val();
            $.post("obtener",
             {miestado: miestado}, function(data){
            $("#capital").html(data);
            });            
        });
   })
});