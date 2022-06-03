
  <!-- Icono de hide y show -->
  <span  id="1" class="absolute text-white text-4xl top-5  left-4 cursor-pointer">
    <i class="fa-solid fa-bars px-2 bg-gray-900  rounded-md "></i>
  </span>

  <!-- Div de SIDEBAR -->
  <div id="2" class="sidebar fixed top-0 bottom-0 left-[-300px]  p-2 w-[200px] 
  overflow-y-auto
  text-center bg-gray-900">
    <div class="text-gray-100 text-xl">
      <div class="p-2.5 mt-1 flex items-center">
        <i class="bg-blue-500 p-3 rounded lg:hidden fa-solid fa-align-justify"></i>
      </div>
    </div>
    <div class="text-gray-100 text-xl">
      <div class="p-2.5 mt-1 flex items-center">
        <i class="bg-blue-600 px-2 py-1 rounded-md fa-regular fa-hospital"></i>
        <h1 class="font-bold text-gray-200 text-[20px] ml-5 ">Menu</h1>
        <i id="3" class=" ml-12 cursor-pointer fa-solid fa-x hover:bg-blue-600"></i>
      </div>
    </div>
    <hr class="my-2 text-gray-600">

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


    <!-- Boton de cerrar sesion ITEM -->
    <?php
    require_once 'sidebar item list/logout.php';
    ?>
    <!--  FIN Boton de cerrar sesion ITEM -->
  </div>