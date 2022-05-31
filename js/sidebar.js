$(document).ready(function(){
    
    //aqui va el codigo javascript
        //OCULTAMIENTO
                $("#submenu").hide();
                $("#submenu2").hide();
            
            
                $("#empleadossub").hide();
                $("#serviciossub").hide();
                
            
            
                //ATENCION
                $("#atencionsub").hide();
                $("#afiliacionsub").hide();
            
                $("#plansub").hide();
                $("#contratossub").hide();
                $("#pagossub").hide();
            
       
                //GRAFICAS
                $("#graficassub").hide();
                $("#afiliacionsub").hide();





        //FIN OCULTAMIENTO
       
       //LLAMADA DE FUNCIONES TOOGLE


        //SERVICIOS
        $("#mostrar").click(mostrar);
          
        $("#mostrar_empleados").click(mostrar_empleados);

        $("#mostrar_servicios").click(mostrar_servicios);
        //FIN SERVICIOS


        //ATENCION
        $("#mostrar_atencion").click(mostrar_atencion);
            
        $("#mostrar_afiliacion").click(mostrar_afiliacion);

        $("#mostrar_plan").click(mostrar_plan);

        $("#mostrar_contratos").click(mostrar_contratos);

        $("#mostrar_pagos").click(mostrar_pagos);




          //FIN ATENCION

          
        //GRAFICAS
       
        $("#mostrar_graficas").click(mostrar_graficas);


          //FIN GRAFICAS
        //sidebar
       

 
 });
 
  //Funciones
 
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
function mostrar_afiliacion(){
    $("#afiliacionsub").toggle();
}  
function mostrar_plan(){
    $("#plansub").toggle();
}  
function mostrar_contratos(){
    $("#contratossub").toggle();
}  
function mostrar_pagos(){
    $("#pagossub").toggle();
}  
function mostrar_graficas(){
    $("#graficassub").toggle();
}  

