<?php
	session_start();

	if (!isset($_SESSION['usuario'])) {
		header('Location: ../');
	}
?>

<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inicio - Consejo Comunal "Las Casitas"</title>
		<link rel="stylesheet" href="../css/estilos.css" />
		<link rel="icon" href="../img/favicon.png" />
	</head>

	<body>
		<img src="../img/Consejo Comunal_4 (1).png" />
		<?php include __DIR__ . '/menu.php' ?>
