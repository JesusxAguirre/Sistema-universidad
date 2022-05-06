<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.6">
	<!-- Imagen universidad -->
	<link rel="Shortcut Icon" href="img/favicon.png">

	<link rel="stylesheet" href="css/output.css">
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
            <div class="flex flex-col bg-white">
                <div class="flex flex-row space-x-3">
                    <h4 class="font-bold text-gray-500 p-3">Plantilla</h4>
                    
                </div>
                <p class="text-gray-400 p-1">4 de Abril del 2022 </p>
            </div>
            <div class="min-h-screen bg-blue-100">
                 <!-- Aqui Se acomdan todas las grid -->
                <div class="mt-8  grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10">
                    <!-- Aqui Comienzan las GRID -->
            <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                
            </div>
            <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
             
            </div>

            <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
             
            </div>
                    <!--Aqui terminan las Grid -->
                </div>

                <div class=" mt-5 grid  lg:grid-cols-1  md:grid-cols-2 p-4 gap-3">

<div class="col-span-2 flex flex-col   p-8 bg-white rounded shadow-sm">
 
</div>

</div>
</div>
</div>
</div>
	
</div>
</body>
