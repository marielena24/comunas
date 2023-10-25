
 <?php

   include('conexion/cone.php');

   $usuario = $_POST['usuario'];
   $email = $_POST['correo'];
   $contra = $_POST['clave'];
   $contra_c = $_POST['clave_c'];
   $cedula = $_POST['cedula'];
   $apellido = $_POST['apellido'];
   $rol = '2';
   
   $cadena_clave =  strlen($contra);
   $cadena_clave_c =  strlen($contra_c);

   if($cadena_clave == 10 OR $cadena_clave_c == 10) 
   {

     if($contra == $contra_c)
     {
        $cifrada = md5($contra);
        $sql = "INSERT INTO usuarios (nombre,apellido,ci,correo,clave,id_rol) VALUES('$usuario','$apellido','$cedula','$email','$cifrada','$rol')";
        $result = $conexion->query($sql);
    
        if($result == TRUE)
        {
          
          echo '<script>alert("DATOS INSERTADOS CORRECTAMENTE")</script> ';

          echo "<script>location.href='index.php'</script>";


            // echo "datos insertados correctamente : ";
            // echo "<a href='index.php'>Acceder a Login</a>";
        }
        else
        {
          
          echo '<script>alert("OCURRIO UN ERROR")</script> ';

          echo "<script>location.href='index.php'</script>";
      
      


          // echo "ocurrio un error";
        }
      }
   }

   if($cadena_clave < 10 OR $cadena_clave_c < 10)
   {


    echo '<script>alert("LA CLAVE BEDE SER DE 10 CARACTERES")</script> ';

    echo "<script>location.href='index.php'</script>";

    
    //  echo "La clave debe ser de 10 caracteres : ";
    //  echo "<a href='index.php'>Acceder a Registro</a>";
   }
   elseif($contra != $contra_c)
   {

    echo '<script>alert("LA CLAVE NO SON IGUALES INENE DE NUEVO")</script> ';

    echo "<script>location.href='index.php'</script>";

    

    // echo "las contraseña no son inguales intente de nuevo : ";
    // echo "<a href='index.php'>Acceder a Registro</a>";
   }

   
    // echo $sql;
  
    
?>