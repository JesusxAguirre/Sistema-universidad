<?php
//destruye la sesion si se tenia una abierta
session_start();
session_destroy();

require_once 'modelo/clase_usuario.php';
if (is_file('vista/Read/'.$pagina.'.php')) {

  
    require_once 'vista/Read/'.$pagina.'.php';
}else {
    echo "Pagina en contruccion";
}
?>