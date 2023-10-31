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
	</head>

	<body>
		<img src="../img/Consejo Comunal_4 (1).png" />
		<header>
			<input type="checkbox" id="btn-menu" />
			<label for="btn-menu">
				<img src="menu.png" />
			</label>
			<nav class="menu">
				<menu>
					<li>
						<a href="#">Habitantes</a>
						<ul class="submenu">
							<li>
								<a href="#">Jefes de familia</a>
								<ul class="sub submenu">
									<li>
										<a href="registro_jefe_de_familia.php">Registrar</a>
									</li>
									<li>
										<a href="consulta_jefe_de_familia.php">Listado</a>
									</li>
								</ul>
							<li>
								<a href="#">Cargas familiares</a>
								<ul class="sub submenu">
									<li>
										<a href="registro_carga_familiar.php">Registrar</a>
									</li>
									<li>
										<a href="consulta_carga_familiar.php">Listado</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Consultar</a>
								<ul class="sub submenu">
									<li>
										<a href="consulta_individual_formulario.php">
											Habitante
										</a>
									</li>
									<li>
										<a href="consulta_habitantes.php">
											Jefes y cargas familiares
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Comités</a>
					</li>
					<li>
						<a href="#">Consejos comunales</a>
						<ul class="submenu">
							<li>
								<a href="registro_consejo_comunales.php">Registrar</a>
							</li>
							<li>
								<a href="consulta_concejos_comunales.php">Consultar</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Viviendas</a>
						<ul class="submenu">
							<li>
								<a href="#">Registrar</a>
							</li>
							<li>
								<a href="#">Consultar</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Órganos del Consejo Comunal</a>
						<ul class="submenu">
							<li>
								<a href="#">Financiero</a>
							</li>
							<li>
								<a href="#">Contraloría</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Censos</a>
						<ul class="submenu">
							<li>
								<a href="#">Gas</a>
							</li>
							<li>
								<a href="#">CLAP</a>
							</li>
							<li>
								<a href="#">Habitantes</a>
							</li>
							<li>
								<a href="#">Consejo Comunal</a>
							</li>
							<li>
								<a href="#">Comunas</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Reportes</a>
						<ul class="submenu">
							<li>
								<a href="#">Avales</a>
								<ul class="sub submenu">
									<li>
										<a href="#">Carta de renuncia</a>
									</li>
									<li>
										<a href="#">Carta de residencia</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<?php if ($_SESSION['id_rol'] == '1') { ?>
						<li>
							<a href="#">Control de usuarios</a>
							<ul class="submenu">
								<li>
									<a href="lista_usuarios.php">Listado</a>
								</li>
							</ul>
						</li>
					<?php } ?>
					<li>
						<a href="#">Servicios</a>
						<ul class="submenu">
							<li>
								<a href="#">Ayuda</a>
							</li>
							<li>
								<a href="salir.php">Cerrar sesión</a>
							</li>
						</ul>
					</li>
				</menu>
			</nav>
		</header>
