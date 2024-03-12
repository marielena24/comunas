<?php

/** @var mysqli */
$db = require_once __DIR__ . '/../conexion/cone.php';
$queries = file_get_contents(__DIR__ . '/backups/dump.mysql.sql');

$db->multi_query($queries);

exit(<<<HTML
<html>
  <head>
    <link rel="stylesheet" href="../assets/libs/sweetalert2/default.min.css">
  </head>
  <body>
    <script src="../assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="../assets/js/swal.js"></script>
    <script>
      CenterNotySuccess.fire({
        title: 'Base de datos restaurada exitósamente',
      }).then(() => location.href = './salir.php')
    </script>
  </body>
</html>
HTML);
