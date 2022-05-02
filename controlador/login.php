<?php
//destruye la sesion si se tenia una abierta
session_start();
session_destroy();

require_once 'modelo/clase_usuario.php';
if (is_file('vista/'.$pagina.'.php')) {

    if (!empty($_POST)) {

        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $objLogin = new Usuario();

        $busqueda = $objLogin->buscar($correo, $clave);

        if ($busqueda['estado'] && count($busqueda) == 2) {
            session_start();
            $_SESSION['id_usuario'] = $busqueda[0]['id_usuario'];
            $_SESSION['correo'] = $busqueda[0]['correo'];
            $_SESSION['nombre'] = $busqueda[0]['nombre'];
            $_SESSION['apellido'] = $busqueda[0]['apellido'];
            $_SESSION['usuario'] = $busqueda[0]['tipo_usuario'];

            if ($_SESSION['usuario'] == "administrador") {
                header('location:index.php?pagina=usuarios');
            } elseif ($_SESSION['usuario'] == "usuario") {
                header('location:index.php?pagina=integrantes');
            }
		} else {
            $msjOperacion = "<script>setTimeout(function(){alert('Los datos ingresados son incorrectos.')}, 100)</script>";
        }
    }
    require_once 'vista/'.$pagina.'.php';
}else {
    echo "Pagina en contruccion";
}
?>