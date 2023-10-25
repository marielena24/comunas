<?php
    include('menu.php');
    include('../conexion/cone.php');
    

    $sql = "SELECT * FROM jefe_de_familia";
    $result = $conexion->query($sql)
?>

<table border="1" width="100%">
    <tr>
        <th>nombre</th>
        <th>apellido</th>
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
        <th>Accion</th>

    </tr>
    <?php while ($row = $result->fetch_assoc())  { $data[] = $row; ?>
            <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['ci']; ?></td>
                <td><?php echo $row['tlf']; ?></td>
                <td><?php echo $row['edad']; ?></td>
                <td><?php echo $row['cne']; ?></td>
                <td><?php echo $row['sexo']; ?></td>
                <td><?php echo $row['direccion']; ?></td>
                <td><?php echo $row['embarazada']; ?></td>
                <td><?php echo $row['instrucción']; ?></td>
                <td><?php echo $row['profesion']; ?></td>
                <td><?php echo $row['parentesco']; ?></td>
                <td><a href="eliminar_jefe_de_familia.php?id=<?php echo $row['id']?>">Borrar</a>
                    <a href="editar_jefe_de_familia.php?id=<?php echo $row['id']?>">Editar</a>
                </td>
            </tr>
              
    <?php } ?>
</table>