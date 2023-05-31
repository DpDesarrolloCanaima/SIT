-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2023 a las 10:18:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oac_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `nombre_del_area` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nombre_del_area`) VALUES
(1, 'Tecnologia'),
(2, 'Producción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `año`
--

CREATE TABLE `año` (
  `id_year_o_grado` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `tipo_de_cargo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `tipo_de_cargo`) VALUES
(1, 'Director de Area'),
(2, 'Gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_del_dispotivo`
--

CREATE TABLE `datos_del_dispotivo` (
  `id_datos_del_dispositivo` int(11) NOT NULL,
  `id_tipo_de_dispositivo` int(11) NOT NULL,
  `serial_equipo` varchar(60) NOT NULL,
  `serial_de_migracion` varchar(60) NOT NULL,
  `serial_de_cargador` varchar(60) NOT NULL,
  `serial_de_cargador_salida` varchar(60) NOT NULL,
  `pertenencia_del_equipo` varchar(60) NOT NULL,
  `institucion_educativa` varchar(60) NOT NULL,
  `institucion_donde_estudia` varchar(60) NOT NULL,
  `fecha_de_recepcion` date NOT NULL,
  `estado_recepcion_equipo` int(11) NOT NULL,
  `fecha_de_entrega` int(10) NOT NULL,
  `responsable` varchar(60) NOT NULL,
  `observaciones` varchar(150) NOT NULL,
  `equipo_reincidio` varchar(150) NOT NULL,
  `id_roles` int(11) NOT NULL,
  `id_origen` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  `id_motivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_del_dispotivo`
--

INSERT INTO `datos_del_dispotivo` (`id_datos_del_dispositivo`, `id_tipo_de_dispositivo`, `serial_equipo`, `serial_de_migracion`, `serial_de_cargador`, `serial_de_cargador_salida`, `pertenencia_del_equipo`, `institucion_educativa`, `institucion_donde_estudia`, `fecha_de_recepcion`, `estado_recepcion_equipo`, `fecha_de_entrega`, `responsable`, `observaciones`, `equipo_reincidio`, `id_roles`, `id_origen`, `id_grado`, `id_estatus`, `id_motivo`) VALUES
(1, 7, 'JV2100176H44406276', '', '', '', '', 'Dr. Manuel Diaz Rodriguez', 'Dr. Manuel Diaz Rodriguez', '0000-00-00', 1, 0, '', '', '', 2, 3, 11, 1, 1),
(2, 7, 'JV2100176H44406276', '', '', '', '', 'Dr. Manuel Diaz Rodriguez', 'Dr. Manuel Diaz Rodriguez', '2023-01-09', 1, 0, '', '', '', 1, 3, 5, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_del_entregante`
--

CREATE TABLE `datos_del_entregante` (
  `id__datos_del_entregante` int(11) NOT NULL,
  `ic` int(60) NOT NULL,
  `nombre_del_beneficiario` varchar(60) NOT NULL,
  `cedula` int(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `Id_genero` int(11) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `unidad_de_adscripcion` varchar(60) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `nombre_del_representante` varchar(60) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL,
  `municipio` varchar(60) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `posee_discapacidad_o_condicion` varchar(20) NOT NULL,
  `descripcion_discapacidad_condicion` varchar(60) NOT NULL,
  `id_datos_del_dispositivo` int(11) NOT NULL,
  `id_origen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_venezuela`
--

CREATE TABLE `estados_venezuela` (
  `id_estados` int(11) NOT NULL,
  `estado_nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados_venezuela`
--

INSERT INTO `estados_venezuela` (`id_estados`, `estado_nombre`) VALUES
(1, 'Distrito Capital'),
(2, 'Amazonas'),
(3, 'Anzoàtegui'),
(4, 'Apure'),
(5, 'Aragua'),
(6, 'Barinas'),
(7, 'Bolívar'),
(8, 'Carabobo'),
(9, 'Cojedes'),
(10, 'Delta Amacuro'),
(11, 'Falcón'),
(12, 'Guárico'),
(13, 'Lara'),
(14, 'Mérida'),
(15, 'Miranda'),
(16, 'Monagas'),
(17, 'Nueva Esparta'),
(18, 'Portuguesa'),
(19, 'Sucre'),
(20, 'Táchira'),
(21, 'Trujillo'),
(22, 'Vargas'),
(23, 'Yaracuy'),
(24, 'Zulia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `id_estatus` int(11) NOT NULL,
  `estatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id_estatus`, `estatus`) VALUES
(1, 'Recibidos'),
(2, 'En la linea'),
(3, 'Verificado'),
(4, 'Entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id_grado` int(11) NOT NULL,
  `grado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id_grado`, `grado`) VALUES
(1, '1 Nivel'),
(2, '2 Nivel'),
(3, '3 Nivel'),
(4, '1 Grado'),
(5, '2 Grado'),
(6, '3 Grado'),
(7, '4 Grado'),
(8, '5 Grado'),
(9, '6 Grado'),
(10, '7 Septimo'),
(11, '8 octavo'),
(12, '9 Noveno'),
(13, '10 Decimo'),
(14, '11 Decimo Primero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo`
--

CREATE TABLE `motivo` (
  `id_motivo` int(11) NOT NULL,
  `tipo_de_motivo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `motivo`
--

INSERT INTO `motivo` (`id_motivo`, `tipo_de_motivo`) VALUES
(1, 'Bateria Mala'),
(2, 'Pantalla No enciende');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen`
--

CREATE TABLE `origen` (
  `id_origen` int(11) NOT NULL,
  `origen` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `origen`
--

INSERT INTO `origen` (`id_origen`, `origen`) VALUES
(1, 'Apoyo Institucional'),
(2, 'Beneficiario'),
(3, 'Trabajadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparacion`
--

CREATE TABLE `reparacion` (
  `id_reparacion` int(11) NOT NULL,
  `equipo` varchar(20) NOT NULL,
  `propietario` int(10) NOT NULL,
  `migracion` varchar(20) NOT NULL,
  `id_tipo_de_equipo` int(11) NOT NULL,
  `id_origen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reparacion`
--

INSERT INTO `reparacion` (`id_reparacion`, `equipo`, `propietario`, `migracion`, `id_tipo_de_equipo`, `id_origen`) VALUES
(1, '806JV2012H50402983', 2022262, 'JV2100176H44406276', 1, 2),
(2, 'SZLES10II133135852', 2022522, 'SZLES10II133232707', 6, 1),
(3, 'SZLEF10MI244302164', 2022509, '', 7, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `roles` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_roles`, `roles`) VALUES
(1, 'Administrador'),
(2, 'Presidencia'),
(3, 'Director De Area'),
(4, 'Gerente'),
(5, 'Supervisor de Linea'),
(6, 'Analista'),
(7, 'Tecnico'),
(8, 'Verificador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_equipo`
--

CREATE TABLE `tipo_de_equipo` (
  `id_tipo_de_equipo` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `cant_act` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_de_equipo`
--

INSERT INTO `tipo_de_equipo` (`id_tipo_de_equipo`, `nombre`, `modelo`, `estado`, `cant_act`, `stock`) VALUES
(1, 'tabla 1', 'TR10CS1', '', 100, 150),
(2, 'tabla 2', 'TR10RS1', '', 50, 200),
(3, 'Canaima 1', 'MGEDVZ01C', '', 20, 56),
(4, 'Canaima 2', 'MGEDMM10TVZH01A', '', 85, 400),
(5, 'Canaima 3', 'MGEDMG3VZ01A', '', 60, 80),
(6, 'Canaima 4', 'ES01II1', '', 78, 700),
(7, 'Canaima 5', 'EF10MI2', '', 20, 100),
(8, 'Canaima Docente', 'MGEDMG3XLVZO3B', '', 30, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_estado`
--

CREATE TABLE `tipo_estado` (
  `id` int(11) NOT NULL,
  `estado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_estado`
--

INSERT INTO `tipo_estado` (`id`, `estado`) VALUES
(1, 'Excelente'),
(2, 'Bueno'),
(3, 'Regular'),
(4, 'Malo'),
(5, 'Muy Malo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `apellido` varchar(60) CHARACTER SET utf8 NOT NULL,
  `cedula` int(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `id_roles` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `usuario`, `apellido`, `cedula`, `password`, `correo`, `id_roles`, `registro`) VALUES
(1, 'Abraham', 'Quizhpi', 30825631, '123456789', '', 1, '2022-11-09 13:00:12'),
(2, 'Melvin', 'Añez', 30145631, '123456789', '', 1, '2022-11-09 13:00:12'),
(3, 'Danyerbert', 'Rangel', 27047631, '123456789', '', 1, '2022-11-09 13:00:12'),
(4, 'luis', 'navarro', 25585528, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'luisnavarro@gmail.com', 6, '2022-11-09 13:00:12'),
(5, 'javier', 'guia', 30569872, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'javierguia@gmail.com', 4, '2022-11-09 13:00:12'),
(6, 'Danyerbert', 'Rangel', 27047631, '5b636adac1d67aa8fd1745a0f5ad63616138dcca', 'danyerbert@gmail.com', 8, '2022-11-09 13:00:12'),
(7, 'Melvin ', 'Añez', 30485631, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'melvinaez@gmail.com', 3, '2022-11-09 13:00:12'),
(10, 'Danyerbert', 'rangel', 27047631, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'danyerbert@gamil.com', 7, '2022-11-09 13:00:12'),
(11, 'Danyerbert', 'rangel', 27047631, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'danyerbert@gamil.com', 7, '2022-11-09 13:00:12'),
(35, 'yasmin', 'brito', 12916293, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'yasmin@gmail.com', 1, '2022-11-09 13:00:12'),
(36, 'yasmin', 'brito', 12916293, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'yasmin@gmail.com', 1, '2022-11-09 13:00:12'),
(37, 'Melvin', 'AÃ±ez', 30512676, '5976b8d8af5e988e4866ea073d4e4ec09a9ddf1c', 'daniel30512676@gmail.com', 1, '2022-11-09 13:00:12'),
(38, 'Melvin', 'AÃ±ez', 30512676, '5976b8d8af5e988e4866ea073d4e4ec09a9ddf1c', 'daniel30512676@gmail.com', 1, '2022-11-09 13:00:12'),
(39, 'Melvin', 'AÃ±ez', 30512676, '5976b8d8af5e988e4866ea073d4e4ec09a9ddf1c', 'daniel30512676@gmail.com', 1, '2022-11-09 13:00:12'),
(40, 'Melvin', 'AÃ±ez', 30512676, '5976b8d8af5e988e4866ea073d4e4ec09a9ddf1c', 'daniel30512676@gmail.com', 1, '2022-11-09 13:00:12'),
(41, 'Melvin', 'AÃ±ez', 30512676, '5976b8d8af5e988e4866ea073d4e4ec09a9ddf1c', 'daniel30512676@gmail.com', 1, '2022-11-09 13:00:12'),
(42, 'Melvin', 'AÃ±ez', 30512676, '5976b8d8af5e988e4866ea073d4e4ec09a9ddf1c', 'daniel30512676@gmail.com', 1, '2022-11-09 13:00:12'),
(43, 'Paula', 'Rangel', 58741236, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'paula@gmail.com', 1, '2022-11-09 13:13:53'),
(44, 'usuario', 'usuario', 123456789, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'usuario@gmail.com', 1, '2022-11-09 13:14:18'),
(46, 'luis', 'navarro', 12963785, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'danyerbert@gmail.com', 2, '2022-12-14 16:41:55'),
(47, 'danyerbert', 'rangelk', 27047631, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'danyerbert@gamil.com', 2, '2023-01-26 03:34:00'),
(48, 'yamaibe', 'brito', 15916293, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ybrito@gmai.com', 2, '2023-01-26 03:35:20'),
(49, 'paoly', 'brito', 15916293, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'bpaoly@gmail.com', 6, '2023-01-26 04:10:35'),
(50, 'paola', 'brito', 30587963, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'pao@gmail.com', 8, '2023-01-26 04:24:18'),
(51, 'david', 'rangel', 15789654, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'david@gmail.com', 7, '2023-01-26 04:44:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `año`
--
ALTER TABLE `año`
  ADD PRIMARY KEY (`id_year_o_grado`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `datos_del_dispotivo`
--
ALTER TABLE `datos_del_dispotivo`
  ADD PRIMARY KEY (`id_datos_del_dispositivo`),
  ADD KEY `id_origen` (`id_origen`),
  ADD KEY `id_grado` (`id_grado`),
  ADD KEY `id_roles` (`id_roles`),
  ADD KEY `id_tipo_de_dispositivo` (`id_tipo_de_dispositivo`),
  ADD KEY `id_estatus` (`id_estatus`),
  ADD KEY `id_motivo` (`id_motivo`),
  ADD KEY `estado_recepcion_equipo` (`estado_recepcion_equipo`);

--
-- Indices de la tabla `datos_del_entregante`
--
ALTER TABLE `datos_del_entregante`
  ADD PRIMARY KEY (`id__datos_del_entregante`),
  ADD KEY `Id_genero` (`Id_genero`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_carga` (`id_cargo`),
  ADD KEY `id_origen` (`id_origen`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `estados_venezuela`
--
ALTER TABLE `estados_venezuela`
  ADD PRIMARY KEY (`id_estados`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id_grado`);

--
-- Indices de la tabla `motivo`
--
ALTER TABLE `motivo`
  ADD PRIMARY KEY (`id_motivo`);

--
-- Indices de la tabla `origen`
--
ALTER TABLE `origen`
  ADD PRIMARY KEY (`id_origen`);

--
-- Indices de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD PRIMARY KEY (`id_reparacion`),
  ADD KEY `id_origen` (`id_origen`),
  ADD KEY `id_tipo_de_equipo` (`id_tipo_de_equipo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indices de la tabla `tipo_de_equipo`
--
ALTER TABLE `tipo_de_equipo`
  ADD PRIMARY KEY (`id_tipo_de_equipo`);

--
-- Indices de la tabla `tipo_estado`
--
ALTER TABLE `tipo_estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD KEY `id_roles` (`id_roles`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `año`
--
ALTER TABLE `año`
  MODIFY `id_year_o_grado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datos_del_dispotivo`
--
ALTER TABLE `datos_del_dispotivo`
  MODIFY `id_datos_del_dispositivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datos_del_entregante`
--
ALTER TABLE `datos_del_entregante`
  MODIFY `id__datos_del_entregante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados_venezuela`
--
ALTER TABLE `estados_venezuela`
  MODIFY `id_estados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `motivo`
--
ALTER TABLE `motivo`
  MODIFY `id_motivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `origen`
--
ALTER TABLE `origen`
  MODIFY `id_origen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  MODIFY `id_reparacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo_de_equipo`
--
ALTER TABLE `tipo_de_equipo`
  MODIFY `id_tipo_de_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo_estado`
--
ALTER TABLE `tipo_estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_del_dispotivo`
--
ALTER TABLE `datos_del_dispotivo`
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_10` FOREIGN KEY (`estado_recepcion_equipo`) REFERENCES `tipo_estado` (`id`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_2` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_4` FOREIGN KEY (`id_origen`) REFERENCES `origen` (`id_origen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_5` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_7` FOREIGN KEY (`id_tipo_de_dispositivo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_8` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_9` FOREIGN KEY (`id_motivo`) REFERENCES `motivo` (`id_motivo`);

--
-- Filtros para la tabla `datos_del_entregante`
--
ALTER TABLE `datos_del_entregante`
  ADD CONSTRAINT `datos_del_entregante_ibfk_1` FOREIGN KEY (`Id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_entregante_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_entregante_ibfk_3` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_entregante_ibfk_5` FOREIGN KEY (`id_origen`) REFERENCES `origen` (`id_origen`),
  ADD CONSTRAINT `datos_del_entregante_ibfk_6` FOREIGN KEY (`estado`) REFERENCES `estados_venezuela` (`id_estados`),

--
-- Filtros para la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD CONSTRAINT `reparacion_ibfk_1` FOREIGN KEY (`id_origen`) REFERENCES `origen` (`id_origen`),
  ADD CONSTRAINT `reparacion_ibfk_2` FOREIGN KEY (`id_tipo_de_equipo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
