<?php
     include('../conexion/cone.php');


    $id = $_GET['id'];
 

    $sqlborrar = "DELETE FROM usuarios WHERE id = $id";

    $resborrar=mysqli_query($conexion,$sqlborrar);

    echo '<script>alert("ELIMINADO")</script> ';

    echo "<script>location.href='lista_usuarios.php'</script>";



?>