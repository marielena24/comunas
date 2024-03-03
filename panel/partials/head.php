<?php
	require_once __DIR__ . '/../../app/SessionMiddleware.php';

	SessionMiddleware::aseguraQueElUsuarioEstaAutenticado();
?>

<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inicio - Consejo Comunal "Las Casitas"</title>
    <link rel="stylesheet" href="../css/w3.css" />
		<link rel="stylesheet" href="../css/estilos.css" />
		<link rel="icon" href="../img/favicon.png" />
	</head>

	<body class="w3-container">
		<img src="../img/Consejo Comunal_4 (1).png" />
		<?php include __DIR__ . '/menu.php' ?>
