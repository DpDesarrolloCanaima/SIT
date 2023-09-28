-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2023 a las 18:13:25
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
  `fecha_de_entrega` date NOT NULL,
  `responsable` int(60) NOT NULL,
  `observaciones` varchar(150) NOT NULL,
  `comprobaciones` varchar(60) NOT NULL,
  `equipo_reincidio` varchar(150) NOT NULL,
  `motivo_reincidencia` varchar(60) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_roles` int(11) NOT NULL,
  `id_origen` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  `id_motivo` int(11) NOT NULL,
  `id_datos_del_beneficiario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_del_dispotivo`
--

INSERT INTO `datos_del_dispotivo` (`id_datos_del_dispositivo`, `id_tipo_de_dispositivo`, `serial_equipo`, `serial_de_migracion`, `serial_de_cargador`, `serial_de_cargador_salida`, `pertenencia_del_equipo`, `institucion_educativa`, `institucion_donde_estudia`, `fecha_de_recepcion`, `estado_recepcion_equipo`, `fecha_de_entrega`, `responsable`, `observaciones`, `comprobaciones`, `equipo_reincidio`, `motivo_reincidencia`, `registro`, `id_roles`, `id_origen`, `id_grado`, `id_estatus`, `id_motivo`, `id_datos_del_beneficiario`) VALUES
(3, 6, '806JV2012H50409754', '', '806JV2012H50409754', '', '', 'LUA', 'LUA', '0000-00-00', 3, '0000-00-00', 7, 'No lee la memoria ram del equipo                                    ', '', '2', 'No posee', '2023-08-16 00:24:35', 4, 3, 11, 2, 16, 1),
(4, 6, '806JV2012H50409754', '', '806JV2012H50409754', '', '', 'Universidad Politecnica Territorial Mariscal Sucre', 'Universidad Politecnica Territorial Mariscal Sucre', '0000-00-00', 3, '0000-00-00', 7, 'No lee el slop                                    ', '', 'no', 'No posee', '2023-08-16 00:26:34', 4, 1, 10, 2, 16, 1),
(5, 6, '806JV2012H50409754', '', '806JV2012H50409754', '', '', 'Jose Avalos', 'Jose Avalos', '0000-00-00', 3, '0000-00-00', 6, 'No posee', '', 'no', 'No posee', '2023-08-16 00:35:05', 5, 2, 12, 4, 17, 1),
(6, 6, '806JV2012H50409754', '', '806JV2012H50409754', '', '', 'LUA', 'LUA', '2023-08-08', 3, '2023-09-21', 6, 'No posee', '', 'no', 'No posee', '2023-08-16 00:35:09', 5, 2, 12, 4, 16, 1),
(7, 7, '806JV2012H50405055', '', '806JV2012H50405055', '', '', 'Key Ayala', 'Key Ayala', '2023-08-08', 3, '2023-09-27', 6, 'No posee', '', 'no', 'No posee', '2023-08-16 00:35:12', 5, 2, 12, 4, 2, 1),
(8, 1, '806JV2012H50409754', '', '806JV2012H50409754', '', '', 'Universidad Politecnica Territorial Mariscal Sucre', 'Universidad Politecnica Territorial Mariscal Sucre', '2023-08-08', 1, '2023-09-20', 6, 'No posee', '', 'si', 'No posee', '2023-08-16 00:35:16', 5, 1, 1, 4, 1, 1),
(9, 6, '806JV2012H50409754', '', '806JV2012H50409754', '', '', 'La Coromoto', 'La Coromoto', '2023-08-15', 2, '2023-10-02', 7, 'No funciona el boton. No posee el debido funcionamiento', '', 'no', 'No tuvo reincidencia', '2023-08-16 01:32:48', 4, 2, 10, 2, 5, 5),
(10, 4, '806JV2012H50409754', '', '806JV2012H50409754', '', '', 'La gran colombia', 'La gran colombia', '2023-08-15', 3, '2023-10-24', 3, 'El equipo se verifico completamente', 'pantalla,Teclado,Almohadilla Tactil,Cargador,Bateria', 'no', 'No tuvo reincidencia', '2023-08-16 03:30:47', 3, 2, 9, 7, 3, 4),
(11, 5, '806JV2012H50409754', '', '806JV2012H50409754', '', '', 'Key Ayala', 'Key Ayala', '2023-08-16', 4, '2023-08-16', 3, 'El equipo fue totalmente verificado', 'pantalla,Teclado,Almohadilla Tactil,Cargador,Bateria', 'no', 'Equipo no tuvo reincidencia', '2023-08-16 16:11:59', 3, 2, 10, 7, 19, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_del_entregante`
--

CREATE TABLE `datos_del_entregante` (
  `id_datos_del_entregante` int(11) NOT NULL,
  `ic` int(60) NOT NULL,
  `nombre_del_beneficiario` varchar(60) NOT NULL,
  `cedula` int(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `Id_genero` int(11) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
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
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_tipo_de_equipo` int(11) NOT NULL,
  `id_origen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_del_entregante`
--

INSERT INTO `datos_del_entregante` (`id_datos_del_entregante`, `ic`, `nombre_del_beneficiario`, `cedula`, `edad`, `Id_genero`, `fecha_de_nacimiento`, `id_area`, `id_cargo`, `nombre_del_representante`, `correo`, `telefono`, `estado`, `municipio`, `direccion`, `posee_discapacidad_o_condicion`, `descripcion_discapacidad_condicion`, `registro`, `id_tipo_de_equipo`, `id_origen`) VALUES
(1, 235478936, 'Maria', 23487561, 26, 2, '1997-07-02', 2, 1, 'Yasmin', 'yasmin@gmail.com', '04126296504', 1, 'Libertador', 'El valle', 'no', 'No posee', '2023-08-09 15:29:59', 6, 1),
(2, 2022260123, 'Melvin Añez', 30745812, 20, 1, '2003-08-01', 1, 2, 'Barbara Aguilar', 'barbara@gmail.com', '0412-6296504', 1, 'Libertador', 'La carlota', 'no', 'No posee discapacidad', '2023-08-09 04:11:00', 7, 3),
(3, 908202304, 'Jesus', 30123321, 32, 1, '2001-08-03', 2, 1, 'Maikol', 'jesus@gmail.com', '04124455678', 1, 'Libertador', 'Av Baralt', 'no', 'No', '2023-08-09 13:11:53', 7, 2),
(4, 20234531, 'Yamaiberlyn Brito', 19234567, 33, 1, '1990-06-13', 2, 2, 'Telesur', 'ybrito@gmail.com', '02124563421', 1, 'Libertador', 'La california', 'no', 'No posee', '2023-08-09 13:16:08', 4, 2),
(5, 202378456, 'Yasmin Esperanza Brito Vasquez', 12916231, 46, 2, '1971-07-21', 2, 2, 'Paula Antonia Vasquez Rangel', 'pau@gmail.com', '04126296504', 1, 'libertador', 'El cementerio', 'no', 'No posee', '2023-08-16 00:53:10', 6, 2);

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
(3, 'Reparado'),
(4, 'Por verificar'),
(5, 'Verificado'),
(6, 'Por entregar'),
(7, 'Entregado');

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
(1, 'Placa madre '),
(2, 'Disco duro'),
(3, 'Pantalla'),
(4, 'Batería'),
(5, 'Botón de encendido'),
(6, 'Teclado'),
(7, 'Cara Laptop A'),
(8, 'Cara Laptop B'),
(9, 'Cara Laptop C'),
(10, 'Cara Laptop D'),
(11, 'Caras Laptop A, B, C, D'),
(12, 'Cara Tablet A'),
(13, 'Cara Tablet B'),
(14, 'Cara Tablet A,B'),
(15, 'Periféricos'),
(16, 'Memoria RAM'),
(17, 'Cargador'),
(18, 'Altavoces'),
(19, 'Pila CMOS'),
(20, 'Visagras'),
(21, 'Conector SATA'),
(22, 'Mango'),
(23, 'Actualización de software'),
(24, 'Web Cam'),
(25, 'Microfono'),
(26, 'Tarjeta de Red'),
(27, 'Estuche'),
(28, 'Tactil'),
(29, 'Pin de carga');

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
(3, 'Analista'),
(4, 'Tecnico'),
(5, 'Verificador');

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
  `nombre` varchar(60) NOT NULL,
  `cedula` int(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `id_roles` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `usuario`, `nombre`, `cedula`, `password`, `correo`, `id_roles`, `registro`) VALUES
(1, 'admin', 'Admin', 30512676, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'daniel30512676@gmail.com', 1, '2023-07-17 16:54:15'),
(2, 'presidencia', 'Presidencia', 12345678, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'presidencia@gmail.com', 2, '2023-07-17 17:58:50'),
(3, 'analista', 'analista', 78912345, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'analista@gmail.com', 3, '2023-07-20 13:50:05'),
(4, 'Prueba', 'Prueba', 23456789, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'prueba@gmail.com', 1, '2023-07-20 16:39:40'),
(5, 'lruza', 'Lismar Ruza', 27704776, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'lruza@cnti.gob.ve', 1, '2023-07-20 16:59:08'),
(6, 'verificador', 'verificador', 78915624, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'verificador@gmail.com', 5, '2023-07-20 17:39:09'),
(7, 'tecnico', 'tecnico', 85274348, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'tecnico@gmail.com', 4, '2023-07-20 18:41:46');

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
  ADD KEY `estado_recepcion_equipo` (`estado_recepcion_equipo`),
  ADD KEY `id_datos_del_beneficiario` (`id_datos_del_beneficiario`),
  ADD KEY `responsable` (`responsable`);

--
-- Indices de la tabla `datos_del_entregante`
--
ALTER TABLE `datos_del_entregante`
  ADD PRIMARY KEY (`id_datos_del_entregante`),
  ADD KEY `Id_genero` (`Id_genero`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_carga` (`id_cargo`),
  ADD KEY `id_datos_del_dispositivo` (`id_tipo_de_equipo`),
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
  MODIFY `id_datos_del_dispositivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `datos_del_entregante`
--
ALTER TABLE `datos_del_entregante`
  MODIFY `id_datos_del_entregante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estados_venezuela`
--
ALTER TABLE `estados_venezuela`
  MODIFY `id_estados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id_motivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `origen`
--
ALTER TABLE `origen`
  MODIFY `id_origen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  MODIFY `id_reparacion` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_del_dispotivo`
--
ALTER TABLE `datos_del_dispotivo`
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_10` FOREIGN KEY (`estado_recepcion_equipo`) REFERENCES `tipo_estado` (`id`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_11` FOREIGN KEY (`id_datos_del_beneficiario`) REFERENCES `datos_del_entregante` (`id_datos_del_entregante`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_12` FOREIGN KEY (`responsable`) REFERENCES `usuarios` (`id_usuarios`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_13` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_2` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_4` FOREIGN KEY (`id_origen`) REFERENCES `origen` (`id_origen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_5` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_7` FOREIGN KEY (`id_tipo_de_dispositivo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`) ON DELETE CASCADE ON UPDATE CASCADE,
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
  ADD CONSTRAINT `datos_del_entregante_ibfk_7` FOREIGN KEY (`id_tipo_de_equipo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`);

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
