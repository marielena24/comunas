<?php

require_once __DIR__ . '/../app/SessionMiddleware.php';

SessionMiddleware::aseguraQueElUsuarioEstaAutorizado();

include('../conexion/cone.php');


$id = $_GET['id'];


$sqlborrar = "DELETE FROM jefe_de_familia WHERE id = $id";

$resborrar = mysqli_query($conexion, $sqlborrar);

echo '<script>alert("ELIMINADO")</script> ';

echo "<script>location.href='consulta_jefe_de_familia.php'</script>";
