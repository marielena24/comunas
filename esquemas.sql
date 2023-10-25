-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2022 a las 16:57:57
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comunas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_familiar`
--

CREATE TABLE `carga_familiar` (
  `id` bigint(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `ci` varchar(8) NOT NULL,
  `tlf` varchar(15) NOT NULL,
  `edad` int(4) NOT NULL,
  `cne` varchar(4) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `embarazada` varchar(10) NOT NULL,
  `instrucción` varchar(200) NOT NULL,
  `profesion` varchar(200) NOT NULL,
  `parentesco` varchar(200) NOT NULL,
  `ci_j` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carga_familiar`
--

INSERT INTO `carga_familiar` (`id`, `nombre`, `apellido`, `ci`, `tlf`, `edad`, `cne`, `sexo`, `direccion`, `embarazada`, `instrucción`, `profesion`, `parentesco`, `ci_j`) VALUES
(9, 'clerixa ', 'alarcon', '33019305', '04142955041', 16, 'no', 'F', 'casa numero 1 calle numero 1', 'NO', 'esudiando', 'ama de casa', 'madre', 27778233);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_familiar_has_habitantes`
--

CREATE TABLE `carga_familiar_has_habitantes` (
  `carga_familiar_id` bigint(20) NOT NULL,
  `habitantes_idhabitantes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `censos`
--

CREATE TABLE `censos` (
  `id` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `tipo` enum('GAS','CLAP','HABITANTES','CONCEJO_COMUNAL','COMUNA') NOT NULL,
  `concejos_comunales_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `censos_datos`
--

CREATE TABLE `censos_datos` (
  `id` bigint(20) NOT NULL,
  `pregunta` varchar(50) NOT NULL,
  `respuesta` text NOT NULL,
  `censo_vivienda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `censos_viviendas`
--

CREATE TABLE `censos_viviendas` (
  `id` bigint(20) NOT NULL,
  `censo_id` bigint(20) NOT NULL,
  `vivienda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comites`
--

CREATE TABLE `comites` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comites_de_concejos_comunales`
--

CREATE TABLE `comites_de_concejos_comunales` (
  `id` bigint(20) NOT NULL,
  `concejo_comunal_id` bigint(20) NOT NULL,
  `comite_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunas`
--

CREATE TABLE `comunas` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `rif` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concejos_comunales`
--

CREATE TABLE `concejos_comunales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `rif` varchar(15) NOT NULL,
  `tlf` varchar(15) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitantes`
--

CREATE TABLE `habitantes` (
  `idhabitantes` int(11) NOT NULL,
  `miembros_de_comites_id` bigint(20) NOT NULL,
  `viviendas_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_de_familia`
--

CREATE TABLE `jefe_de_familia` (
  `id` bigint(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `ci` varchar(8) NOT NULL,
  `tlf` varchar(15) NOT NULL,
  `edad` int(4) NOT NULL,
  `cne` varchar(100) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `embarazada` varchar(10) NOT NULL,
  `instrucción` varchar(200) NOT NULL,
  `profesion` varchar(200) NOT NULL,
  `parentesco` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jefe_de_familia`
--

INSERT INTO `jefe_de_familia` (`id`, `nombre`, `apellido`, `ci`, `tlf`, `edad`, `cne`, `sexo`, `direccion`, `embarazada`, `instrucción`, `profesion`, `parentesco`) VALUES
(33, 'Johana', 'Pallares suarez', '14957722', '04149753073', 41, 'Si voto ', 'F', 'calle numero 1 casa numero 1', 'NO', 'Ingeniera en informatica', 'Profesora', 'Madre'),
(34, 'Reinaldo Jose', 'Leiva Pallares', '27778233', '3124047765', 21, 'si', 'M', 'calle numero 1 casa numero 1', 'NO', 'Bachiller', 'Agricultor', 'Padre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_de_familia_has_habitantes`
--

CREATE TABLE `jefe_de_familia_has_habitantes` (
  `jefe_de_familia_id` bigint(20) NOT NULL,
  `habitantes_idhabitantes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) NOT NULL,
  `accion` varchar(100) NOT NULL,
  `data` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `usuario_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros_de_comites`
--

CREATE TABLE `miembros_de_comites` (
  `id` bigint(20) NOT NULL,
  `comite_de_concejo_comunal_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organos_de_concejos_comunales`
--

CREATE TABLE `organos_de_concejos_comunales` (
  `id` bigint(20) NOT NULL,
  `tipo` enum('FINANCIERO','CONTRALOR','JEFE') NOT NULL,
  `concejo_comunal_id` bigint(20) NOT NULL,
  `habitantes_idhabitantes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id` bigint(20) NOT NULL,
  `tipo` enum('CR') NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `concejo_comunal_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` bigint(10) NOT NULL,
  `nombre_rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'Admin'),
(2, 'Invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` bigint(10) NOT NULL,
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `apellido` varchar(100) NOT NULL DEFAULT '',
  `ci` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `id_rol` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `ci`, `correo`, `clave`, `id_rol`) VALUES
(1, 'Las casitas', 'Las casitas', '00000000', 'Lascasitasdelpinar@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 1),
(2, 'brenda', 'toro', '18615818', 'bren.dat5889@gmail.com', 'f006f892b1a5022607a80c02de9176cc', 2),
(3, 'maria', 'perez', '18615819', 'mariaperez@gmail.com', '99928843408e55ce8672a35b13c5ec41', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viviendas`
--

CREATE TABLE `viviendas` (
  `id` bigint(20) NOT NULL,
  `concejo_comunal_id` bigint(20) NOT NULL,
  `tipo` enum('casa','apartamento','finca') NOT NULL DEFAULT 'casa',
  `condicion` enum('propio','alquilado','prestado') NOT NULL,
  `terreno` varchar(200) DEFAULT NULL,
  `enseres` varchar(200) DEFAULT NULL,
  `mejoras` tinyint(4) NOT NULL DEFAULT 0,
  `mascotas` enum('PERRO','GATO','OTROS') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carga_familiar`
--
ALTER TABLE `carga_familiar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci_UNIQUE` (`ci`);

--
-- Indices de la tabla `carga_familiar_has_habitantes`
--
ALTER TABLE `carga_familiar_has_habitantes`
  ADD PRIMARY KEY (`carga_familiar_id`,`habitantes_idhabitantes`),
  ADD KEY `fk_carga_familiar_has_habitantes_habitantes1` (`habitantes_idhabitantes`);

--
-- Indices de la tabla `censos`
--
ALTER TABLE `censos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_censos_concejos_comunales1_idx` (`concejos_comunales_id`);

--
-- Indices de la tabla `censos_datos`
--
ALTER TABLE `censos_datos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_censos_datos_censos_viviendas1_idx` (`censo_vivienda_id`);

--
-- Indices de la tabla `censos_viviendas`
--
ALTER TABLE `censos_viviendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_censos_datos_censos1_idx` (`censo_id`),
  ADD KEY `fk_censos_datos_viviendas1_idx` (`vivienda_id`);

--
-- Indices de la tabla `comites`
--
ALTER TABLE `comites`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comites_de_concejos_comunales`
--
ALTER TABLE `comites_de_concejos_comunales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comites_de_concejos_comunales_concejos_comunales1_idx` (`concejo_comunal_id`),
  ADD KEY `fk_comites_de_concejos_comunales_comites1_idx` (`comite_id`);

--
-- Indices de la tabla `comunas`
--
ALTER TABLE `comunas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `concejos_comunales`
--
ALTER TABLE `concejos_comunales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `habitantes`
--
ALTER TABLE `habitantes`
  ADD PRIMARY KEY (`idhabitantes`),
  ADD KEY `fk_habitantes_miembros_de_comites1_idx` (`miembros_de_comites_id`),
  ADD KEY `fk_habitantes_viviendas1_idx` (`viviendas_id`);

--
-- Indices de la tabla `jefe_de_familia`
--
ALTER TABLE `jefe_de_familia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci_UNIQUE` (`ci`);

--
-- Indices de la tabla `jefe_de_familia_has_habitantes`
--
ALTER TABLE `jefe_de_familia_has_habitantes`
  ADD PRIMARY KEY (`jefe_de_familia_id`,`habitantes_idhabitantes`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `miembros_de_comites`
--
ALTER TABLE `miembros_de_comites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_miembros_de_comites_comites_de_concejos_comunales1_idx` (`comite_de_concejo_comunal_id`);

--
-- Indices de la tabla `organos_de_concejos_comunales`
--
ALTER TABLE `organos_de_concejos_comunales`
  ADD PRIMARY KEY (`id`,`habitantes_idhabitantes`),
  ADD KEY `fk_organos_de_concejos_comunales_concejos_comunales1_idx` (`concejo_comunal_id`),
  ADD KEY `fk_organos_de_concejos_comunales_habitantes1_idx` (`habitantes_idhabitantes`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reportes_concejos_comunales1_idx` (`concejo_comunal_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`),
  ADD UNIQUE KEY `ci_UNIQUE` (`ci`),
  ADD KEY `correo` (`correo`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `viviendas`
--
ALTER TABLE `viviendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_viviendas_concejos_comunales1_idx` (`concejo_comunal_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carga_familiar`
--
ALTER TABLE `carga_familiar`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `concejos_comunales`
--
ALTER TABLE `concejos_comunales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitantes`
--
ALTER TABLE `habitantes`
  MODIFY `idhabitantes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jefe_de_familia`
--
ALTER TABLE `jefe_de_familia`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carga_familiar_has_habitantes`
--
ALTER TABLE `carga_familiar_has_habitantes`
  ADD CONSTRAINT `fk_carga_familiar_has_habitantes_habitantes1` FOREIGN KEY (`habitantes_idhabitantes`) REFERENCES `habitantes` (`idhabitantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `censos`
--
ALTER TABLE `censos`
  ADD CONSTRAINT `fk_censos_concejos_comunales1` FOREIGN KEY (`concejos_comunales_id`) REFERENCES `concejos_comunales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `censos_datos`
--
ALTER TABLE `censos_datos`
  ADD CONSTRAINT `fk_censos_datos_censos_viviendas1` FOREIGN KEY (`censo_vivienda_id`) REFERENCES `censos_viviendas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `censos_viviendas`
--
ALTER TABLE `censos_viviendas`
  ADD CONSTRAINT `fk_censos_datos_censos1` FOREIGN KEY (`censo_id`) REFERENCES `censos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_censos_datos_viviendas1` FOREIGN KEY (`vivienda_id`) REFERENCES `viviendas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comites_de_concejos_comunales`
--
ALTER TABLE `comites_de_concejos_comunales`
  ADD CONSTRAINT `fk_comites_de_concejos_comunales_comites1` FOREIGN KEY (`comite_id`) REFERENCES `comites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comites_de_concejos_comunales_concejos_comunales1` FOREIGN KEY (`concejo_comunal_id`) REFERENCES `concejos_comunales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `habitantes`
--
ALTER TABLE `habitantes`
  ADD CONSTRAINT `fk_habitantes_miembros_de_comites1` FOREIGN KEY (`miembros_de_comites_id`) REFERENCES `miembros_de_comites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_habitantes_viviendas1` FOREIGN KEY (`viviendas_id`) REFERENCES `viviendas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `miembros_de_comites`
--
ALTER TABLE `miembros_de_comites`
  ADD CONSTRAINT `fk_miembros_de_comites_comites_de_concejos_comunales1` FOREIGN KEY (`comite_de_concejo_comunal_id`) REFERENCES `comites_de_concejos_comunales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `organos_de_concejos_comunales`
--
ALTER TABLE `organos_de_concejos_comunales`
  ADD CONSTRAINT `fk_organos_de_concejos_comunales_concejos_comunales1` FOREIGN KEY (`concejo_comunal_id`) REFERENCES `concejos_comunales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_organos_de_concejos_comunales_habitantes1` FOREIGN KEY (`habitantes_idhabitantes`) REFERENCES `habitantes` (`idhabitantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `fk_reportes_concejos_comunales1` FOREIGN KEY (`concejo_comunal_id`) REFERENCES `concejos_comunales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `viviendas`
--
ALTER TABLE `viviendas`
  ADD CONSTRAINT `fk_viviendas_concejos_comunales1` FOREIGN KEY (`concejo_comunal_id`) REFERENCES `concejos_comunales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
