<?php

include_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/../conexion/cone.php';
require_once __DIR__ . '/../app/StrUtils.php';
  $id = $_GET['id'];

  $sql = "SELECT * FROM carga_familiar WHERE id = '".$id."'";
  $result = $conexion->query($sql);
  $row = mysqli_fetch_assoc($result);
  
   @$boton = $_POST['btn'];
   if(isset($boton))
   {
     $id = $_POST['id'];
     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     $cedula = $_POST['ci'];
     $tlf = $_POST['tlf'];
     $edad = $_POST['edad'];
     $cne = $_POST['cne'];
     $sexo = $_POST['sexo'];
     $direccion = $_POST['direccion'];
     $embarazada= $_POST['embarazada'];
     $instrucción = $_POST['instrucción'];
     $profesion= $_POST['profesion'];
     $parentesco= $_POST['parentesco'];


     $sql = "UPDATE carga_familiar SET nombre='$nombre', apellido = '$apellido', ci = '$cedula', tlf = '$tlf', edad='$edad', cne = '$cne', sexo = '$sexo', direccion= '$direccion', embarazada = '$embarazada', instrucción = '$instrucción', profesion = '$profesion', parentesco = '$parentesco' WHERE id = $id";
      $result = $conexion->query($sql);
    
      if($result == TRUE)
      {
 
       echo '<script>alert("DATOS INSERTADOS CORRECTAMENTE")</script> ';
 
     echo "<script>location.href='consulta_carga_familiar.php'</script>";
 
 
 
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
    <h3 align="center">Actualizar Carga Familia</h3>
    <form method="POST">
          Nombre: <br />
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
          <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required size="50" />
          Apellido: <br />
          <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>"required size="50" />
          <p>
          Cedula: <br />
          <input type="text" name="ci" value="<?php echo $row['ci']; ?>" required size="50" />  
          Telefono: <br />
          <input type="text" name="tlf"  value="<?php echo $row['tlf']; ?>" required size="50" />
          Edad: <br />
          <input type="text" name="edad" value="<?php echo $row['edad']; ?>" required size="3" />
          Cne: <br />
          <input type="text" name="cne" value="<?php echo $row['cne']; ?>" required size="50" />
          <br />
          Sexo: <br />
          <input type="text" name="sexo" value="<?php echo $row['sexo']; ?>" required size="50" /> 
          <br />
          <br />
          Dirección: <br />
          <input type="text" name="direccion"value="<?php echo $row['direccion']; ?>" required rows="5" cols="40"/>
          <p>
          <br />
          Embarazada: <br />
          <input type="text" name="embarazada" value="<?php echo $row['embarazada']; ?>"size="50" /> 
          <br />
          <br />
          instrucción: <br />
          <input type="text" name="instrucción" value="<?php echo $row['instrucción']; ?>"  required size="50" />
          <p>  
          Profesión: <br />
          <input type="text" name="profesion" value="<?php echo $row['profesion']; ?>"  required size="50" />
          <p>
          Parentesco : <br />
          <input type="text" name="parentesco" value="<?php echo $row['parentesco']; ?>"  required size="50" />
          <p>  
          <p>
          <input type="submit" name="btn" value="Enviar" />
    </form>
 </div>


 </body>