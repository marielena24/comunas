<?php
    include('menu.php');
    include('../conexion/cone.php');

    $sql = "SELECT c.id, j.nombre AS jefe, c.nombre AS nombrecarga FROM jefe_de_familia j
            INNER JOIN carga_familiar c
            ON j.ci = c.ci_j";
    $result = $conexion->query($sql);

?>

<table border="1" width="100%">
    <tr>
        <th>Jefe de familia</th>
        <th>Carga familiar</th>
        <th>Accion</th>

    </tr>
    <?php while ($row = $result->fetch_assoc())  { $data[] = $row; ?>
            <tr>
                <td><?php echo $row['jefe']; ?></td>
                <td><?php echo $row['nombrecarga']; ?></td>
                <td><a href="eliminar_habitantes.php?id=<?php echo $row['id']?>">Borrar</a>
                    <a href="editar_habitantes.php?id=<?php echo $row['id']?>">Editar</a>
                </td> 
            </tr>
              
    <?php } ?>
</table>