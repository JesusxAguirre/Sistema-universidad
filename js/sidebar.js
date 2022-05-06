$(document).ready(function(){
    
    //aqui va el codigo javascript

        $("#submenu").hide();
        $("#submenu2").hide();
        $("#empleadossub").hide();
        $("#serviciossub").hide();
        
        $("#mostrar").click(mostrar);
        $("#mostrar2").click(mostrar2);
 });
 
 
function mostrar(){
 $("#submenu").toggle();


}
function mostrar2(){
    $("#submenu2").toggle();
   
   
   }