<?php
include('menu.php');
include('../conexion/cone.php');

 @$boton = $_POST['btn'];
 if(isset($boton))
 {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['ci'];
    $telefono = $_POST['tlf'];
    $edad = $_POST['edad'];
    $cne = $_POST['cne'];
    $sexo = $_POST['sexo'];
    $direccion = $_POST['direccion'];
    @$embarazada = $_POST['embarazada'];
    $instrucción = $_POST['instrucción'];
    $pro = $_POST['profesion'];
    $parentesco = $_POST['parentesco'];
    $ci_j = $_POST['ci_j'];

        

    $sql = "INSERT INTO carga_familiar(nombre,apellido,ci,tlf,edad,cne,sexo,direccion,embarazada,instrucción,profesion,parentesco,ci_j) VALUES('$nombre','$apellido','$cedula','$telefono','$edad','$cne','$sexo','$direccion','$embarazada','$instrucción','$pro','$parentesco','$ci_j')";
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
    <h3 align="center">Registro de Carga Familiar</h3>
    <form method="POST" action="#">
          Nombre: <br />
          <input type="text" name="nombre" required size="50" />
          Apellido: <br />
          <input type="text" name="apellido" required size="50" />
          Cedula: <br />
          <input type="text" name="ci" required size="50" />  
          Telefono: <br />
          <input type="text" name="tlf" required size="50" />
          Edad: <br />
          <input type="text" name="edad" required size="3" />
          Cne: <br />
          <input type="text" name="cne" required size="50" />
          <br />
          Sexo: <br />
          <input type="radio" name="sexo" value="m" size="50" />M
          <input type="radio" name="sexo" value="f" size="50" />F 
          <br />
          <br />
          Dirección: <br />
          <textarea name="direccion" required rows="5" cols="40"></textarea>
          <p>
          <br />
          Embarazada: <br />
          <input type="radio" name="embarazada" value="si" size="50" />SI 
          <input type="radio" name="embarazada" value="no" size="50" />NO 
          <br />
          <br />
          instrucción: <br />
          <input type="text" name="instrucción" required size="50" />
          <p>  
          Profesión: <br />
          <input type="text" name="profesion" required size="50" />
          <p>
          Parentesco : <br />
          <input type="text" name="parentesco" required size="50" />
          <p>  
          Jefe de Famiia :  <br />
          <select name="ci_j" type="text" required>
              <?php
                   $sql = "SELECT * FROM jefe_de_familia";
                   $result = $conexion->query($sql);
                   echo '<option></option>';
                   while ($row = $result->fetch_assoc())
                   {
                     echo '<option value="'.$row['ci'].'">'.$row['nombre'].'</option>';
                   }

              ?>
          </select>
          <input type="submit" name="btn" value="Enviar" />
    </form>
</div>


 </body>
