<?php
    session_start();
    if(!isset($_SESSION['usuario']))
    {
        header("location:../index.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<img src="../img/Consejo Comunal_4 (1).png" alai alt="">
    <header>
        <!-- <?php
        
            if($_SESSION['id_rol'] == '1')
            {
                echo "<p>hola</p>";
            }
        ?> -->
        
        <!-- <input type="checkbox"  id="btn-menu">
        <label for="btn-menu"><img src="menu.png" alt=""></label> -->
        <nav class="menu">
            <ul>
                <li><a href="">habitantes</a>
                    <ul class="submenu">
                        <li><a href="">jefe de familia</a>
                            <ul class="sub submenu">
                                <li><a href="registro_jefe_de_familia.php">registro</a></li>
                                <li><a href="consulta_jefe_de_familia.php">Listado</a></li>
                            </ul>

                            <li><a href="">carga familiar</a>
                              <ul class="sub submenu">
                                <li><a href="registro_carga_familiar.php">registro</a></li>
                                <li><a href="consulta_carga_familiar.php">Listado</a></li>
                              </ul>
                            </li>

                            <li><a href="">consulta todos los habitantes</a>
                              <ul class="sub submenu">
                                <li><a href="consulta_individual_formulario.php">consula individual</a></li>
                                <li><a href="consulta_habitantes.php">Listado de jefe y carga</a></li>
                              </ul>
                            </li>

                        </li>
                    </ul> 

                </li>
                <li><a href="">Comite</a>
                </li>
                <li><a href="">Consejo comunal</a>
                    <ul class="submenu">
                        <li><a href="registro_consejo_comunales.php">regisro</a></li>
                        <li><a href="consulta_concejos_comunales.php">consulta</a></li>
                    </ul>
                    
                </li>   
                <li><a href="">Vivienda</a>
                    <ul class="submenu">
                        <li><a href="">regisro</a></li>
                        <li><a href="">consulta</a></li>
                    </ul>                
                </li>
                <li><a href="">Organos del consejo comunal</a>
                    <ul class="submenu">
                        <li><a href="">financiero</a></li>
                        <li><a href="">contralor</a></li>
                    </ul>  
                </li>
                <li><a href="">Censo</a>
                    <ul class="submenu">
                        <li><a href="">gas</a></li>
                        <li><a href="">clap</a></li>
                        <li><a href="">habitanes</a></li>
                        <li><a href="">consejo comunal</a></li>
                        <li><a href="">comuna</a></li>
                    </ul>  
                </li>
                <li><a href="">Reportes</a>
                    <ul class="submenu">
                        <li><a href="">avales</a>
                            <ul class="sub submenu">
                                <li><a href="">carta de renuncia</a></li>
                                <li><a href="">carta de recidencia</a></li>
                            </ul>
                        </li>
                    </ul>                  
                </li>
                <?php if($_SESSION['id_rol'] == '1') { ?>
                    <li><a href="">Control de Usuarios</a>
                        <ul class="submenu">
                            <li><a href="lista_usuarios.php">Listado</a></li>
                        </ul>
                    </li>
                <?php } ?>

                <li><a href="">Servicios</a>
                    <ul class="submenu">
                        <li><a href="">ayuda</a></li>
                        <li><a href="salir.php">salir</a></li>
                    </ul>
                </li>  
                
            </ul>
        </nav>
    </header>
    
</body>
</html>