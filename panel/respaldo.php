<?php

$env = require_once __DIR__ . '/../.env.php';

if ($env['DB_CONNECTION'] === 'mysql') {
  $backupPath = __DIR__ . '/backups/dump.mysql.sql';

  if (!file_exists($env['MYSQLDUMP_PATH'])) {
    throw new Error("Ruta inválida {$env['MYSQLDUMP_PATH']}");
  }

  `{$env['MYSQLDUMP_PATH']} -u {$env['DB_USER']} {$env['DB_DATABASE']} > "$backupPath"`;
}

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
        title: 'Base de datos respaldada exitósamente',
      }).then(() => location.href = './')
    </script>
  </body>
</html>
HTML);
