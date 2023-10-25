<?php

    include('conexion/cone.php');
    $usuario = $_POST['usuario'];
    $clave = md5($_POST['clave']);

    $sql = "SELECT u.correo, u.clave, u.id_rol FROM usuarios u WHERE correo = '$usuario' AND clave = '$clave'";

    if ($result = $conexion->query($sql)) 
    {
        $fila = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
        @$rol = $row['id_rol'];
        if($fila > 0)
        {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['id_rol'] = $rol;
            header('location:panel/index.php');
        }
        else
        {

            echo '<script>alert("OCURRIO UN ERROR")</script> ';

            echo "<script>location.href='index.php'</script>";


            // echo "datos incorrectos";
        }
        // while ( $row = $result->fetch_assoc()) 
        //  {
        //      $data[] = $row;
        //  }
        
    
    }    
        
?>