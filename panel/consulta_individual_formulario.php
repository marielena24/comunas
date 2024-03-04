<?php

include_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/../conexion/cone.php';
require_once __DIR__ . '/../app/StrUtils.php';

@$boton = $_POST['btn'];
$jefe = [];

if (isset($boton)) {
  $cedula = $_POST['ci'];

  $result = $conexion->query("SELECT * FROM jefe_de_familia WHERE ci = $cedula");

  if ($result->num_rows === 1) {
    $jefe = $result->fetch_assoc();
  } else {
    $result = $conexion->query("SELECT * FROM carga_familiar WHERE ci = $cedula");

    if ($result->num_rows === 1) {
      $jefe = $result->fetch_assoc();
    } else {
      $jefe = null;
    }
  }
}

?>

<main class="contenedor">
  <h3 class="w3-center">Consulta Individual</h3>
  <form method="POST">
    <label for="ci" class="w3-block">Cedula:</label>
    <input type="number" id="ci" name="ci" required min="0" />
    <input type="submit" name="btn" value="Enviar" />
  </form>

  <?php if (count($jefe) > 0) : ?>
    <dl>
      <dt>Nombre completo:</dt>
      <dd><?= StrUtils::iniciales($jefe['nombre'] . ' ' . $jefe['apellido']) ?></dd>
      <dt>Cédula:</dt>
      <dd><?= $jefe['ci'] ?></dd>
      <dt>Teléfono:</dt>
      <dd><?= $jefe['tlf'] ?></dd>
      <dt>Parentesco:</dt>
      <dd><?= StrUtils::iniciales($jefe['parentesco']) ?></dd>
    </dl>
  <?php elseif ($jefe === null) : ?>
    <p class="w3-panel w3-round-large w3-padding-large">Habitante de cédula <?= $cedula ?> no encontrado.</p>
  <?php endif ?>
</main>
