<?php

include_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/../conexion/cone.php';

$sql = "SELECT c.id, j.nombre AS jefe, c.nombre AS nombrecarga
  FROM jefe_de_familia j
  INNER JOIN carga_familiar c
  ON j.ci = c.ci_j
";

$result = $conexion->query($sql);

?>

<main class="w3-responsive">
  <table class="w3-table-all w3-hoverable">
    <tr>
      <th>Jefe de familia</th>
      <th>Carga familiar</th>
      <?php if (SessionMiddleware::esAdministrador()) : ?>
        <th>Acciones</th>
      <?php endif ?>

    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?= $row['jefe']; ?></td>
        <td><?= $row['nombrecarga']; ?></td>

        <?php if (SessionMiddleware::esAdministrador()) : ?>
          <td>
            <a class="w3-button w3-red w3-block" href="eliminar_habitantes.php?id=<?= $row['id'] ?>">Borrar</a>
            <a class="w3-button w3-grey w3-block" href="editar_habitantes.php?id=<?= $row['id'] ?>">Editar</a>
          </td>
        <?php endif ?>
      </tr>

    <?php } ?>
  </table>
</main>
