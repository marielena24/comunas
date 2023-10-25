<?php
    include('menu.php');
    include('../conexion/cone.php');


    $cedula = $_POST['ci'];
   
    $sql = "SELECT * FROM jefe_de_familia WHERE ci = $cedula " ;
    $result = $conexion->query($sql);
     
    
    
?>

<table border="1" width="100%">
    <tr>
        <h2>JEFE DE FAMILIA</h2> 

    </tr>
    <?php while ($row = $result->fetch_assoc())  { $data[] = $row; ?>
            <tr>
               <td><?php echo $row['nombre']; ?></td>
               <td><?php echo $row['apellido']; ?></td> 
               <td><?php echo $row['ci']; ?></td> 
               <td><?php echo $row['edad']; ?></td> 
               <td><?php echo $row['cne']; ?></td>
               <td><?php echo $row['sexo']; ?></td>
               <td><?php echo $row['direccion']; ?></td> 
               <td><?php echo $row['embarazada']; ?></td>
               <td><?php echo $row['instrucción']; ?></td>
               <td><?php echo $row['profesion']; ?></td>
               <td><?php echo $row['parentesco']; ?></td>
                
            </tr>
              
    <?php } ?>
</table>

<?php


$cedula1 = $_POST['ci'];
   
$sql1 = "SELECT * FROM carga_familiar WHERE ci_j = $cedula1 " ;
$result = $conexion->query($sql1);
    
   
   
?>

<table border="1" width="100%">
    <tr>
        <h2>CARGA FAMILIAR</h2> 

    </tr>



   <tr>
       <th>nombre</th>
       <th>apallido</th>
       <th>cedula</th>
       <th>telefono</th>
       <th>edad</th>
       <th>cne</th>
       <th>sexo</th>
       <th>direccion</th>
       <th>embarazada</th>
       <th>instrucción</th>
       <th>profesion</th>
       <th>parentesco</th>

   </tr>
   <?php while ($row1 = $result->fetch_assoc())  { $data[] = $row1; ?>
           <tr>
               <td><?php echo $row1['nombre']; ?></td>
               <td><?php echo $row1['apellido']; ?></td>
               <td><?php echo $row1['ci']; ?></td>
               <td><?php echo $row1['tlf']; ?></td>
               <td><?php echo $row1['edad']; ?></td>
               <td><?php echo $row1['cne']; ?></td>
               <td><?php echo $row1['sexo']; ?></td>
               <td><?php echo $row1['direccion']; ?></td>
               <td><?php echo $row1['embarazada']; ?></td>
               <td><?php echo $row1['instrucción']; ?></td>
               <td><?php echo $row1['profesion']; ?></td>
               <td><?php echo $row1['parentesco']; ?></td>
                 
           </tr>
             
   <?php } ?>
</table>