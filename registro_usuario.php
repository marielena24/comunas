<?php

require __DIR__ . '/conexion/cone.php';

function showError(string $message): never {
	exit(<<<HTML
	<script>
		alert(`$message`)
		location.href = './'
	</script>
	HTML);
}

$usuario = $_POST['usuario'];
$email = $_POST['correo'];
$contra = $_POST['clave'];
$contra_c = $_POST['clave_c'];
$cedula = $_POST['cedula'];
$apellido = $_POST['apellido'];
$rol = 2;

$cadena_clave = strlen($contra);
$cadena_clave_c = strlen($contra_c);

if ($cadena_clave < 10 || $cadena_clave_c < 10) {
	showError('La clave debe tener mínimo 10 caracteres');
}

if ($contra !== $contra_c) {
	showError('La claves no coinciden, intente de nuevo');
}

$hashedPassword = md5($contra);

$sql = <<<SQL
INSERT INTO usuarios (nombre, apellido, ci, correo, clave, id_rol)
VALUES ('$usuario', '$apellido', '$cedula', '$email', '$hashedPassword', $rol)
SQL;

$result = $conexion->query($sql);

if (!$result) {
	showError('Ocurrió un error');
}

exit(<<<HTML
<html>
  <head>
    <link rel="stylesheet" href="assets/libs/sweetalert2/default.min.css">
  </head>
  <body>
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="assets/js/swal.js"></script>
    <script>
      CenterNotySuccess.fire({
        title: 'Usuario registrado exitósamente',
      }).then(() => location.href = './')
    </script>
  </body>
</html>
HTML);
