<?php

require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/../conexion/cone.php';
require_once __DIR__ . '/../app/StrUtils.php';

$result = $conexion->query("SELECT * FROM carga_familiar");

?>

<main class="w3-responsive">
  <table class="w3-table-all w3-hoverable">
    <tr>
      <th>Nombre completo</th>
      <th>Cédula</th>
      <th>Teléfono</th>
      <th>Edad</th>
      <th>Tiene CNE</th>
      <th>sexo</th>
      <th>Dirección</th>
      <th>Está embarazada</th>
      <th>Nivel de instrucción</th>
      <th>Profesión</th>
      <th>Parentesco</th>
      <?php if (SessionMiddleware::esAdministrador()) : ?>
        <th>Acciones</th>
      <?php endif ?>
    </tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
      <tr>
        <td><?= StrUtils::iniciales($row['nombre'] . ' ' . $row['apellido']) ?></td>
        <td><?= $row['ci'] ?></td>
        <td><?= $row['tlf'] ?></td>
        <td><?= $row['edad'] ?></td>
        <td><?= StrUtils::mayusculas($row['cne']) ?></td>
        <td><?= StrUtils::mayusculas($row['sexo'] )?></td>
        <td><?= StrUtils::iniciales($row['direccion']) ?></td>
        <td><?= StrUtils::mayusculas($row['embarazada']) ?></td>
        <td><?= StrUtils::iniciales($row['instrucción']) ?></td>
        <td><?= StrUtils::iniciales($row['profesion'] )?></td>
        <td><?= StrUtils::iniciales($row['parentesco']) ?></td>
        <?php if (SessionMiddleware::esAdministrador()) : ?>
          <td><a href="eliminar_carga_familiar.php?id=<?= $row['id'] ?>">Borrar</a>
            <a href="editar_carga_familiar.php?id=<?= $row['id'] ?>">Editar</a>
          </td>
        <?php endif ?>
      </tr>
    <?php endwhile ?>
  </table>
</main>
