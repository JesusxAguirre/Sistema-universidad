<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">
  <link rel="stylesheet" href="./dist/output.css">
  <title>Sidebar</title>
</head>

<body>

  <div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto
  text-center bg-gray-900">
      <div class="text-gray-100 text-xl">
          <div class="p-2.5 mt-1 flex items-center">
          <i class="bg-blue-500 p-3 rounded lg:hidden fa-solid fa-align-justify"></i>
          </div>
          <hr class="my-2 text-gray-600">
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

  </div>

</body>

</html>