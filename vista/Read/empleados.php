<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.6" />
    <!-- Imagen universidad -->
    <link rel="Shortcut Icon" href="img/favicon.png" />

    <link rel="stylesheet" href="css/output.css" />
    <!-- libreria Jquery -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sidebar.js"></script>
  </head>

  <body>
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
              <h4 class="text-2xl mt-2 font-bold text-gray-500 p-3">
                Listar Empleados
              </h4>
            </div>
          </div>
          <div class="min-h-screen bg-blue-100">
            <!-- Aqui Se acomdan todas las grid -->
            <div class="mt-8 grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10">
              <!-- Aqui Comienzan las GRID -->
              <div
                class="flex items-center justify-between p-5 bg-white rounded shadow-sm"
              ></div>
              <div
                class="flex items-center justify-between p-5 bg-white rounded shadow-sm"
              ></div>

              <div
                class="flex items-center justify-between p-5 bg-white rounded shadow-sm"
              ></div>
              <!--Aqui terminan las Grid -->
            </div>

            <div class="mt-5 grid lg:grid-cols-1 md:grid-cols-2 p-4 gap-3">
              <div
                class="col-span-2 flex flex-col p-8 bg-white rounded shadow-sm"
              >
                <div class="overflow-auto rounded-lg hidden md:block">
                  <table class="table-auto w-full">
                    <thead class="bg-black border-b-2 border-gray-200">
                      <tr>
                        <th
                          class="w-12 border border-gray-500 px-4 py-2 text-white p-3 text-sm font-semibold tracking-wide"
                        >
                          Cédula de empleado
                        </th>

                        <th
                          class="bg border border-gray-500 px-4 py-2 text-white p-3 text-sm font-semibold tracking-wide"
                        >
                          Nombres
                        </th>
                        <th
                          class="bg border border-gray-500 px-4 py-2 text-white p-3 text-sm font-semibold tracking-wide"
                        >
                          Apellidos
                        </th>
                        <th
                          class="bg border border-gray-500 px-4 py-2 text-white p-3 text-sm font-semibold tracking-wide"
                        >
                          Teléfono
                        </th>
                        <th
                          class="bg border border-gray-500 px-4 py-2 text-white p-3 text-sm font-semibold tracking-wide"
                        >
                          Dirección
                        </th>
                        <th
                          class="bg border border-gray-500 px-4 py-2 text-white p-3 text-sm font-semibold tracking-wide"
                        >
                          Fecha de nacimiento
                        </th>
                        <th
                          class="w-20 border border-gray-500 px-4 py-2 text-white p-3 text-sm font-semibold tracking-wide"
                        >
                          Cargo
                        </th>
                        <th
                          class="w-20 border border-gray-500 px-4 py-2 text-white p-3 text-sm font-semibold tracking-wide"
                        >
                          Rol de usuario
                        </th>
                        <th
                          class="w-20 border border-gray-500 px-4 py-2 text-white p-3 text-sm font-semibold tracking-wide"
                        >
                          Acciones
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        class="bg-blue-200"
                        v-for="h in hematologia.data"
                        :key="h.id"
                      >
                        <td
                          class="border border-gray-500 px-4 py-2 p-3 text-sm text-gray-700 whitespace-nowrap"
                        >
                          27666555
                        </td>

                        <td
                          class="border border-gray-500 px-4 py-2 p-3 text-sm text-gray-700 whitespace-nowrap"
                        >
                          Jesus David
                        </td>

                        <td
                          class="border border-gray-500 px-4 py-2 p-3 text-sm text-gray-700 whitespace-nowrap"
                        >
                          Aguirre Bastidas
                        </td>
                        <td
                          class="border border-gray-500 px-4 py-2 p-3 text-sm text-gray-700 whitespace-nowrap"
                        >
                          0412-1234567
                        </td>
                        <td
                          class="border border-gray-500 px-4 py-2 p-3 text-sm text-gray-700 whitespace-nowrap"
                        >
                          Cabudare
                        </td>
                        <td
                          class="border border-gray-500 px-4 py-2 p-3 text-sm text-gray-700 whitespace-nowrap"
                        >
                          04/06/1999
                        </td>
                        <td
                          class="border border-gray-500 px-4 py-2 p-3 text-sm text-gray-700 whitespace-nowrap"
                        >
                          Programador
                        </td>
                        <td
                          class="border border-gray-500 px-4 py-2 p-3 text-sm text-gray-700 whitespace-nowrap"
                        >
                          Administrador
                        </td>
                        <td
                          class="border border-gray-500 px-4 py-2 p-3 text-sm text-gray-700 whitespace-nowrap"
                        ></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
