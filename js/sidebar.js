$(document).ready(function(){
    
    //aqui va el codigo javascript
        //OCULTAMIENTO
        $("#submenu").hide();
        $("#submenu2").hide();
        $("#empleadossub").hide();
        $("#serviciossub").hide();
        
        $("#atencionsub").hide();
          //FIN OCULTAMIENTO
        //SERVICIOS
        $("#mostrar").click(mostrar);
          
        $("#mostrar_empleados").click(mostrar_empleados);
        $("#mostrar_servicios").click(mostrar_servicios);
        //FIN SERVICIOS

        //ATENCION
        $("#mostrar_atencion").click(mostrar_atencion);
  



          //FIN ATENCION

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
function mostrar_atencion(){
    $("#atencionsub").toggle();
}  