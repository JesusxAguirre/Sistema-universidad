<!DOCTYPE html>
<html>
  <head>
    <title>Registrar empleados</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.6" />
    <!-- Imagen universidad -->
    <link rel="Shortcut Icon" href="img/favicon.png" />
     <!-- Estilos css -->
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="dist/output.css" />
    <!-- libreria Jquery -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sidebar.js"></script>
    
  </head>

  <body class="bg-white font-[Poppins]">
    <div class="flex flex-row">
      <!-- SIDEBAR -->
      <?php
        require_once 'componentes/sidebar.php';
        ?>
      <!-- FIN SIDEBAR -->

      <div class="flex-auto">
        <div class="flex flex-col">
          <div class="flex flex-col bg-white items-center">
            <div class="flex flex-row space-x-3">
              <h2 class="mt-2 font-bold text-gray-500 p-3 text-2xl">
                Registrar Empleados
              </h2>
            </div>
          </div>
          <div class="min-h-screen bg-blue-100 ">
            <!-- Aqui Se acomdan todas las grid -->
            <div class="mt-5 p-4">
              <div class="p-8  bg-white rounded shadow-sm">
                <form
                  class="grid  lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 justify-items-center"
                  action=""
                  id="formulario"
                >
                  <div id="grupo__cedula" >
                    <label
                      class="block text-gray-700 text-sm font-bold mb-2"
                      for=""
                      >Cedula</label
                    >
                    <i class="absolute ml-56 mt-[5px] text-2xl fa-solid"></i>
                    <input
                      type="text"
                      id="cedula"
                      placeholder="Ej: V12345678"
                      class="block pr-10 shadow appearance-none border-2 border-blue-100 rounded py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 transition duration-500 ease-in-out"
                    />
                   
                  </div>
                  <div id="grupo__nombre">
                    <label
                      class="block text-gray-700 text-sm font-bold mb-2"
                      for=""
                      >Nombres</label
                    >
                    <i class="absolute ml-56 mt-[5px] text-2xl fa-solid"></i>
                    <input
                      class="block pr-10 shadow appearance-none border-2 border-blue-100 rounded py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 transition duration-500 ease-in-out"
                      type="text"
                      id="nombre"
                      placeholder="Ej: Juan David"
                    />
                  </div>
                  <div id="grupo__apellido">
                    <label
                      class="block text-gray-700 text-sm font-bold mb-2"
                      for=""
                      >Apellidos</label
                    >
                    <i class="absolute ml-56 mt-[5px] text-2xl fa-solid"></i>
                    <input
                      class="block pr-10 shadow appearance-none border-2 border-blue-100 rounded py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 transition duration-500 ease-in-out"
                      type="text"
                      id="apellido"
                      placeholder="Ej: Perez Jimenez"
                    />
                  </div>
                  <div class="space-y-2" id="grupo__telefono">
                    <label
                      class="block text-gray-700 text-sm font-bold mb-2"
                      for=""
                      >Telefono</label
                    >
                    <i class="absolute ml-56 mt-[5px] text-2xl fa-solid"></i>
                    <input
                      class="block pr-10 shadow appearance-none border-2 border-blue-100 rounded py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 transition duration-500 ease-in-out"
                      type="text"
                      id="telefono"
                      placeholder="Ej:  04161234567"
                    />
                  </div>
                  <div class="space-y-2" id="grupo__direccion">
                    <label
                      class="block text-gray-700 text-sm font-bold mb-2"
                      for=""
                      >Direccion</label
                    >
                    <i class="absolute ml-56 mt-[5px] text-2xl fa-solid"></i>
                    <input
                      class="block pr-10 shadow appearance-none border-2 border-blue-100 rounded py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 transition duration-500 ease-in-out"
                      type="text"
                      id="direccion"
                      placeholder="Zona este"
                    />
                  </div>
                  <div class="space-y-2" id="grupo__fecha">
                    <label
                      class="block text-gray-700 text-sm font-bold mb-2"
                      for=""
                      >Fecha de nacimiento</label
                    >
                    <i class="absolute ml-56 mt-[5px] text-2xl fa-solid"></i>
                    <input
                      class="block w-60 pr-10 shadow appearance-none border-2 border-blue-100 rounded py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 transition duration-500 ease-in-out"
                      type="date"
                      id="fecha"
                    />
                  </div>
                  <div class="space-y-2" id="grupo__cargo">
                    <label
                      class="block text-gray-700 text-sm font-bold mb-2"
                      for=""
                      >Cargo</label
                     
                    >
                    <i class="absolute ml-56 mt-[5px] text-2xl fa-solid"></i>
                    <input
                      class="block pr-10 shadow appearance-none border-2 border-blue-100 rounded py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 transition duration-500 ease-in-out"
                      type="text"
                      id="cargo"
                      placeholder="Medico"
                    />
                  </div>
                  <!-- Rellenando Casillas de grid -->
                  <div class=""></div>
                  <!-- Rellenando Casillas de grid -->
                  <div class=""></div>
                  <!-- Rellenando Casillas de grid -->
                  <div class=""></div>
                  <!-- Rellenando Casillas de grid -->
                  <div class="mt-10">
                    <button
                      class="bg-blue-500 text-white rounded-md p-2"
                      type="submit "
                    >
                      Enviar
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Llamada de validacion de formulario no se hizo en el head porque no renderizaba bien el DOM -->
    <script src="js/empleados/validacion.js"></script>
  </body>
</html>
