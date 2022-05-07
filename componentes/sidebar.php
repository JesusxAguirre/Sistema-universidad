<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">
  <title>Sidebar</title>
</head>
<body>

  <div class="flex flex-col  space-y-5 justify-between min-h-screen
   w-52 px-2 py-4 bg-gray-200">
         <div class=" flex items-center justify-between text-gray-600 text-3xl px-5">
           Usuarios
         </div>
        <div class="flex flex-col flex-auto">
          <!-- DASHBOARD ITEM -->
        <?php
          require_once 'sidebar item list/dashboard.php';
          ?>
          <!--  FIN DASHBOARD ITEM -->


          <!-- SERVICIOS ITEM -->
          <?php
          require_once 'sidebar item list/servicios.php';
          ?>
          <!--  FIN SERVICIOS ITEM -->

           <!-- DROPDOWN SERVICIOS ITEM -->
           <?php
          require_once 'dropdown item list/servicios.php';
          ?>


          <!-- Atencion ITEM -->
          <?php
          require_once 'sidebar item list/atencion.php';
          ?>
          <!--  FIN ATENCION ITEM -->

           <!-- DROPDOWN ATENCION ITEM -->
           <?php
          require_once 'dropdown item list/atencion.php';
          ?>
          <!--  FIN DROPDOWN ATENCION ITEM -->



          <!-- GRAFICAS ITEM -->
          <?php
          require_once 'sidebar item list/graficas.php';
          ?>
          <!--  FIN GRAFICAS ITEM -->


           <!-- DROPDOWN SERVICIOS ITEM -->
           <?php
          require_once 'dropdown item list/graficas.php';
          ?>
          <!--  FIN DROPDOWN SERVICIOS ITEM -->
          
        </div>
        <div class="flex flex-col">
      <button class="rounded-full bg-blue-500 py-2 text-white text-lg">Logout</button>
  </div>
      </div>

</body>
</html>