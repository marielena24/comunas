<?php

$conexion = new mysqli("localhost", "root", "", "comunas");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $mysqli->connect_error;
}
// echo $conexion->host_info . "\n";

?>