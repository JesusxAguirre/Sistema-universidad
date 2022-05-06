$(document).ready(function(){
    
    //aqui va el codigo javascript

        $("#submenu").hide();
        $("#submenu2").hide();
        $("#empleadossub").hide();
        $("#serviciossub").hide();
        
        $("#mostrar").click(mostrar);
        $("#mostrar2").click(mostrar2);
        $("#mostrar_empleados").click(mostrar_empleados);
        $("#mostrar_servicios").click(mostrar_servicios);

 });
 
 
function mostrar(){
 $("#submenu").toggle();


}
function mostrar2(){
    $("#submenu2").toggle();
   
   
   }
function mostrar_empleados(){
    $("#empleadossub").toggle();
   
   
   }
function mostrar_servicios(){
    $("#serviciossub").toggle();
   
   
   }