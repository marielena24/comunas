<?php
    session_start(); // este por si no la has iniciado en la pagina que planeas destruirla, de lo contrario no te destruirá nada
    session_destroy();
    session_unset();
    header("location:../index.php");
?>