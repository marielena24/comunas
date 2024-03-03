<?php

    require_once __DIR__ . '/../app/SessionMiddleware.php';

    SessionMiddleware::aseguraQueElUsuarioEstaAutorizado();

    include('menu.php');
    include('../conexion/cone.php');

    $sql = "SELECT * FROM usuarios";
    $result = $conexion->query($sql);
?>

<table border="1" width="100%">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cedula</th>
        <th>Correo</th>
        <th>Clave</th>
        <th>Accion</th>
    </tr>
    <?php while ($row = $result->fetch_assoc())  { $data[] = $row; ?>
            <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['ci']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['clave']; ?></td>
                <td><a href="eliminar_usuarios.php?id=<?php echo $row['id_usuario']?>">Borrar</a>
                    | <a href="editar_usuarios.php?id=<?php echo $row['id_usuario']?>">Editar</a>
                </td>
            </tr>
              
    <?php } ?>
</table>
