<?php
     include('../conexion/cone.php');


    $id = $_GET['id'];
 

    $sqlborrar = "DELETE FROM carga_familiar WHERE id = $id";

    $resborrar=mysqli_query($conexion,$sqlborrar);

    echo '<script>alert("ELIMINADO")</script> ';

    echo "<script>location.href='consulta_carga_familiar.php'</script>";



?>