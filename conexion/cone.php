<?php

ini_set('error_log', __DIR__ . '/../logs/php_errors.log');

try {
	$env = require __DIR__ . '/../.env.php';

	$conexion = new mysqli(
		$env['DB_HOST'],
		$env['DB_USER'],
		$env['DB_PASSWORD'],
		$env['DB_DATABASE']
	);

	$conexion->set_charset($env['DB_CHARSET']);

	return $conexion;
} catch (Throwable $error) {
	error_log($error);
	http_response_code(500);
	exit;
}
