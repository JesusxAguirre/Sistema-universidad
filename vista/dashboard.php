<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.6">
	<link rel="Shortcut Icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/output.css">
	<script src="https://unpkg.com/vue@3"></script>
</head>
<body>
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
