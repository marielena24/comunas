<?php

class SessionMiddleware {
  static function aseguraQueElUsuarioEstaAutenticado(): void {
    @session_start();

    if (!isset($_SESSION['usuario'])) {
      header('Location: ../');
      exit;
    }
  }

  static function aseguraQueElUsuarioEstaAutorizado(): void {
    @session_start();

    if ($_SESSION['id_rol'] !== '1') {
      header('Location: ./');
      exit;
    }
  }
}
