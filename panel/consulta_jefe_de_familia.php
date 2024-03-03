<?php

require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/../conexion/cone.php';

$result = $conexion->query("SELECT * FROM jefe_de_familia");

?>


<main class="w3-responsive">
  <table class="w3-table-all w3-hoverable">
    <tr>
      <th>Nombre completo</th>
      <th>Cédula</th>
      <th>Teléfono</th>
      <th>Edad</th>
      <th>Tiene CNE</th>
      <th>Sexo</th>
      <th>Dirección</th>
      <th>Está embarazada</th>
      <th>Nivel de instrucción</th>
      <th>Profesión</th>
      <th>Parentesco</th>
      <th>Acciones</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
      <tr>
        <td><?= $row['nombre'] . ' ' . $row['apellido'] ?></td>
        <td><?= $row['ci'] ?></td>
        <td><?= $row['tlf'] ?></td>
        <td><?= $row['edad'] ?></td>
        <td><?= strtoupper(substr($row['cne'], 0, 2)) ?></td>
        <td><?= strtoupper($row['sexo']) ?></td>
        <td><?= mb_convert_case($row['direccion'], MB_CASE_TITLE) ?></td>
        <td><?= strtoupper($row['embarazada']) ?></td>
        <td><?= mb_convert_case($row['instrucción'], MB_CASE_TITLE) ?></td>
        <td><?= mb_convert_case($row['profesion'], MB_CASE_TITLE) ?></td>
        <td><?= mb_convert_case($row['parentesco'], MB_CASE_TITLE) ?></td>
        <td>
          <a class="w3-button w3-red w3-block" href="eliminar_jefe_de_familia.php?id=<?= $row['id'] ?>">
            Borrar
          </a>
          <a class="w3-button w3-gray w3-block" href="editar_jefe_de_familia.php?id=<?= $row['id'] ?>">
            Editar
          </a>
        </td>
      </tr>
    <?php endwhile ?>
  </table>
</main>
