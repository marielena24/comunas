<?php

/** @var mysqli */
$db = require_once __DIR__ . '/../conexion/cone.php';
$queries = file_get_contents(__DIR__ . '/backups/backup.mysql.sql');

echo $queries;
