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
          <div class="p-2 hover:bg-pink-100">
              <div class="flex flex-row space-x-3">
                <div class="h-6 w-6 text-pink-700">
                <i class="text-2xl fa-solid fa-house"></i>
                </div>
                <h4 class="font-bold text-gray-500 
                hover:text-pink-500">Dashboard</h4>
            </div>
          </div>
          <div class="p-2 hover:bg-pink-100">
              <div class="flex flex-row space-x-3">
                <div class="h-6 w-6 text-pink-700">
                <i class="ml-1 text-2xl fa-solid fa-prescription-bottle-medical"></i>
                
                </div>
                <div class="dropdown relative">
                <h4 id="mostrar" class="font-bold text-gray-500 
                hover:text-pink-500">Servicios</h4>
                <ul id="submenu"  class="dropdown-menu
          min-w-max
          absolute
          hidden
          text-base
          z-10
          float-left
          py-2
          text-left 
          mt-1
          m-0
          bg-clip-padding
          border-none
          
          "> 
          <li><a class=" dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              text-gray-700
              hover:bg-gray-100" href="#">
              <i class="text-sm fa-solid fa-arrow-right"></i>Opcion1
            </a></li>
                <li ><a class=" dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              text-gray-700
              hover:bg-gray-100" href="#">
              <i class="text-sm fa-solid fa-arrow-right"></i> Opcion2
            </a></li>
                <li><a  class="dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              text-gray-700
              " href="#">
              <i class="text-sm fa-solid fa-arrow-right"></i> Opcion 3
            </a>
          </li>
              </ul>
              </div>
            </div>
          </div>
          <div class="p-2 hover:bg-pink-100">
              <div class="flex flex-row space-x-3">
                <div class="h-6 w-6 text-pink-700">
                <i class="text-2xl fa-solid fa-chart-pie"></i> 
                </div>
                <h4 class="font-bold text-gray-500 
                hover:text-pink-500">Gráficas</h4>
            </div>
          </div>
          
        </div>
        <div class="flex flex-col">
      <button class="rounded-full bg-blue-500 py-2 text-white text-lg">Logout</button>
  </div>
      </div>

</body>
</html>