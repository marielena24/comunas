<?php
  $correo = $_SESSION['usuario'];
  $idRol = $_SESSION['id_rol'];

  const ADMIN = '1';
  const INVITADO = '2';
?>

<header>
  <nav class="menu">
    <ul>
      <li>
        <a href="#">Habitantes</a>
        <ul class="submenu">
          <li>
            <a href="#">Jefes de familia</a>
            <ul class="sub submenu">
              <?php if ($idRol === ADMIN): ?>
                <li>
                  <a href="registro_jefe_de_familia.php">Registrar</a>
                </li>
              <?php endif ?>
              <li>
                <a href="consulta_jefe_de_familia.php">Listado</a>
              </li>
            </ul>
          <li>
            <a href="#">Cargas familiares</a>
            <ul class="sub submenu">
              <?php if ($idRol === ADMIN): ?>
                <li>
                  <a href="registro_carga_familiar.php">Registrar</a>
                </li>
              <?php endif ?>
              <li>
                <a href="consulta_carga_familiar.php">Listado</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Consultar</a>
            <ul class="sub submenu">
              <li>
                <a href="consulta_individual_formulario.php">
                  Habitante
                </a>
              </li>
              <li>
                <a href="consulta_habitantes.php">
                  Jefes y cargas familiares
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">Comités</a>
      </li>
      <li>
        <a href="#">Consejos comunales</a>
        <ul class="submenu">
          <?php if ($idRol === ADMIN): ?>
            <li>
              <a href="registro_consejo_comunales.php">Registrar</a>
            </li>
          <?php endif ?>
          <li>
            <a href="consulta_concejos_comunales.php">Consultar</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">Viviendas</a>
        <ul class="submenu">
          <?php if ($idRol === ADMIN): ?>
            <li>
              <a href="#">Registrar</a>
            </li>
          <?php endif ?>
          <li>
            <a href="#">Consultar</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">Órganos del Consejo Comunal</a>
        <ul class="submenu">
          <li>
            <a href="#">Financiero</a>
          </li>
          <li>
            <a href="#">Contraloría</a>
          </li>
        </ul>
      </li>
      <?php if ($idRol === ADMIN): ?>
        <li>
          <a href="#">Censos</a>
          <ul class="submenu">
            <li>
              <a href="#">Gas</a>
            </li>
            <li>
              <a href="#">CLAP</a>
            </li>
            <li>
              <a href="#">Habitantes</a>
            </li>
            <li>
              <a href="#">Consejo Comunal</a>
            </li>
            <li>
              <a href="#">Comunas</a>
            </li>
          </ul>
        </li>
      <?php endif ?>
      <li>
        <a href="#">Reportes</a>
        <ul class="submenu">
          <li>
            <a href="#">Avales</a>
            <ul class="sub submenu">
              <li>
                <a href="#">Carta de renuncia</a>
              </li>
              <li>
                <a href="#">Carta de residencia</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <?php if ($idRol === ADMIN) { ?>
        <li>
          <a href="#">Control de usuarios</a>
          <ul class="submenu">
            <li>
              <a href="lista_usuarios.php">Listado</a>
            </li>
          </ul>
        </li>
      <?php } ?>
      <li>
        <a href="#">Servicios</a>
        <ul class="submenu">
          <?php if ($idRol === ADMIN): ?>
            <li>
              <a href="./respaldo.php">Respaldar</a>
            </li>
            <li>
              <a href="./restauracion.php">Restaurar</a>
            </li>
          <?php endif ?>
          <li>
            <a href="#">Ayuda</a>
          </li>
          <li>
            <a href="salir.php">Cerrar sesión</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</header>
