<!-- DROPDOWN SERVICIOS ITEM -->

<div
  id="submenu"
  class="text-left text-sm font-thin mt-2 w-4/5 mx-auto text-gray-200"
>
  <div class="flex flex-row space-x-3">
    <ul class="relative">
      <li class="relative" id="mostrar_empleados">
        <a
          class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-ellipsis whitespace-nowrap rounded hover:text-white hover:bg-gray-700 transition duration-300 ease-in-out cursor-pointer"
        >
          <i class="fa-solid fa-user-doctor"></i>
          <span>Empleados</span>
          <i class="ml-2 fa-solid fa-angle-down w-3 h-3"></i>
        </a>
        <ul class="relative accordion-collapse collapse" id="empleadossub">
          <li class="relative">
            <a
              href="?pagina=empleados"
              class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-ellipsis whitespace-nowrap rounded hover:text-white hover:bg-gray-700 transition duration-300 ease-in-out"
              >Listar Empleados</a
            >
          </li>
          <li class="relative">
            <a
              href="?pagina=empleados-registrar"
              class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-ellipsis whitespace-nowrap rounded hover:text-white hover:bg-gray-700 transition duration-300 ease-in-out"
              >Registrar Empleados</a
            >
          </li>
          <li class="relative">
            <a
              href="#!"
              class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-ellipsis whitespace-nowrap rounded hover:text-white hover:bg-gray-700 transition duration-300 ease-in-out"
              >Reporte de Empleados</a
            >
          </li>
        </ul>
      </li>
      <li class="relative" id="mostrar_servicios">
        <a
          class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-ellipsis whitespace-nowrap rounded hover:text-white hover:bg-gray-700 transition duration-300 ease-in-out cursor-pointer"
          data-bs-target="#collapseSidenavEx2"
          aria-expanded="false"
          aria-controls="collapseSidenavEx2"
        >
          <i class="fa-solid fa-file-medical"></i>

          <span>Servicios</span>
          <i class="ml-2 fa-solid fa-angle-down w-3 h-3"></i>
        </a>
        <ul class="relative accordion-collapse collapse" id="serviciossub">
          <li class="relative">
            <a
              href="?pagina=servicios"
              class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-ellipsis whitespace-nowrap rounded hover:text-white hover:bg-gray-700 transition duration-300 ease-in-out"
              >Listar servicios</a
            >
          </li>
          <li class="relative">
            <a
              href="?pagina=servicios-registrar"
              class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-ellipsis whitespace-nowrap rounded hover:text-white hover:bg-gray-700 transition duration-300 ease-in-out"
              >Registro de servicios</a
            >
          </li>
          <li class="relative">
            <a
              href="#!"
              class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-ellipsis whitespace-nowrap rounded hover:text-white hover:bg-gray-700 transition duration-300 ease-in-out"
              >Reporte de servicios</a
            >
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
