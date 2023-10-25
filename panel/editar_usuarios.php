<?php

include('menu.php');
include('../conexion/cone.php');

  $id = $_GET['id'];

  $sql = "SELECT * FROM usuarios WHERE id_usuario = '".$id."'";
  $result = $conexion->query($sql);
  $row = mysqli_fetch_assoc($result);

   @$boton = $_POST['btn'];
   if(isset($boton))
   {
     $id = $_POST['id'];
     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     $cedula = $_POST['ci'];
     $email = $_POST['email'];

     $sql = "UPDATE usuarios SET nombre='$nombre', apellido = '$apellido', ci = '$cedula', correo = '$email' WHERE id_usuario= $id";
      $result = $conexion->query($sql);
      if($result == TRUE)
     {

      echo '<script>alert("DATOS INSERTADOS CORRECTAMENTE")</script> ';

      echo "<script>location.href='index.php'</script>";



      //  echo "datos insertados correctamente : ";
      //  echo "<a href='index.php'>Volver al inicio</a>";
     }
     else
     {

      echo '<script>alert("OCURRIO UN ERROR")</script> ';

      echo "<script>location.href='index.php'</script>";


      // echo "ocurrio un error";
     }

   }

?>


<link rel="stylesheet" href="css/estilos.css">
 <body>
 <h2>Bienvenidos</h2>

 <div class="contenedor">
    <h3 align="center">Actualizar Usuarios</h3>
    <form method="POST" action="#">
          Nombre: <br />
          <input type="hidden" name="id" value="<?php echo $row['id_usuario'] ?>">
          <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required size="50" />
          Apellido: <br />
          <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>"required size="50" />
          <p>
          Cedula: <br />
          <input type="text" name="ci" value="<?php echo $row['ci']; ?>" required size="50" />  
          Email: <br />
          <input type="email" name="email" value="<?php echo $row['correo']; ?>" required size="50" />
          <p>
          <input type="submit" name="btn" value="Enviar" />
    </form>
 </div>


 </body>