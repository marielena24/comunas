<?php
include('menu.php');
include('../conexion/cone.php');

 @$boton = $_POST['btn'];
 if(isset($boton))
 {
   $cedula = $_POST['ci'];

   $sql = "SELECT * FROM jefe_de_familia WHERE ci = $cedula " ;
   $result = $conexion->query($sql);


   if($result == TRUE)
     {

      echo '<script>alert("DATOS INSERTADOS CORRECTAMENTE")</script> ';

    echo "<script>location.href='constula_individual.php'</script>";


      //  echo "datos insertados correctamente : ";
      //  echo "<a href='index.php'>Volver al inicio</a>";
     }
     else
     {

      echo '<script>alert("OCURRIO UN ERROR")</script> ';

      echo "<script>location.href='constula_individual.php'</script>";


      // echo "ocurrio un error";
     }

  }
?>
<link rel="stylesheet" href="css/estilos.css">
 <body>
 <h2>Bienvenidos</h2>

 <div class="contenedor">
    <h3 align="center">consulta individual</h3>
    <form method="POST" action="consulta_individual.php">

          Cedula: <br />
          <input type="text" name="ci" required size="50" />  

          <input type="submit" name="btn" value="Enviar"  />
          
    </form>
 </div>

 </body>







