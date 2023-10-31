<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<title>Ingreso - Consejo Comunal "Las Casitas"</title>
		<link rel="stylesheet" href="css/estilos.css" />
		<link rel="icon" href="img/favicon.png" />
	</head>

	<body>
		<div class="container">
			<div class="form-box">
				<div class="button-box">
					<div id="elegir"></div>
					<button class="toggle-btn" onclick="login()">Iniciar Sesion</button>
					<button class="toggle-btn" onclick="registrar()">Registrar</button>
				</div>
				<form id="login" class="input-group" method="post" action="validar.php">
					<input class="input-field" name="usuario" placeholder="Correo" required />
					<input type="password" class="input-field" name="clave" placeholder="Contraseña" required />
					<button type="submit" class="submit-btn">Acceder</button>
				</form>
				<form id="registrar" class="input-group" method="post" action="registro_usuario.php">
					<input class="input-field" name="usuario" placeholder="Nombre de Usuario" required />
					<input class="input-field" name="apellido" placeholder="Apellido de Usuario" required />
					<input type="number" class="input-field" name="cedula" placeholder="cedula de Usuario" required />
					<input type="email" class="input-field" name="correo" placeholder="correo" required />
					<input type="password" class="input-field" name="clave" maxlength="10" placeholder="Contraseña" required />
					<input type="password" class="input-field" name="clave_c" maxlength="10" placeholder="Contraseña" required />
					<button class="submit-btn">Registrar</button>
				</form>
			</div>
		</div>
		<script>
			const $loginForm = document.getElementById('login')
			const $registerForm = document.getElementById('registrar')
			const $formSwitchButton = document.getElementById('elegir')

			function login() {
				$loginForm.style.left = '50px'
				$registerForm.style.left = '450px'
				$formSwitchButton.style.left = '0px'
			}

			function registrar() {
				$loginForm.style.left = '-400px'
				$registerForm.style.left = '50px'
				$formSwitchButton.style.left = '120px'
			}
		</script>
	</body>

</html>
