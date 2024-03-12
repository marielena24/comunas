<?php

require __DIR__ . '/conexion/cone.php';
$db = $conexion;

$user = $_POST['usuario'];
$password = md5($_POST['clave']);

$sql = <<<SQL
SELECT correo, clave, id_rol
FROM usuarios WHERE correo = '$user' AND clave = '$password'
SQL;

$result = $db->query($sql);

$numRows = $result->num_rows;
$userInfo = $result->fetch_assoc();

if ($numRows === 0) {
	exit(<<<HTML
	<html>
		<head>
			<link rel="stylesheet" href="assets/libs/sweetalert2/default.min.css">
		</head>
		<body>
			<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
			<script src="assets/js/swal.js"></script>
			<script>
				CenterNotyError.fire({
					title: 'Datos incorrectos',
				}).then(() => location.href = './')
			</script>
		</body>
	</html>
	HTML);
}

session_start();
$_SESSION = [
	'usuario' => $user,
	'id_rol' => $userInfo['id_rol']
];

header('Location: panel/');
