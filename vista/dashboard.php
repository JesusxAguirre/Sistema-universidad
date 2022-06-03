<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.6">
	<!-- Imagen universidad -->
	<link rel="Shortcut Icon" href="img/favicon.png">
	<link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css">
	<link rel="stylesheet" href="dist/output.css">
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
	
		<!-- DASHBOARD -->
		<?php
	require_once 'componentes/dashboard.php';
	?>
	<!-- FIN DASHBOARD -->
	
</div>
</body>
