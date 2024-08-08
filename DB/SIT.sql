-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-08-2024 a las 16:45:32
-- Versión del servidor: 8.4.0
-- Versión de PHP: 8.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int NOT NULL,
  `nombre_del_area` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nombre_del_area`) VALUES
(1, 'Presidencia\r\n'),
(2, 'Proyecto'),
(3, 'Consultoria Juridica'),
(4, 'Planificación y Presupuesto'),
(5, 'Gestion Humana\r\n'),
(6, 'Procura\r\n'),
(7, 'Administración y Finanzas'),
(8, 'Tic'),
(9, 'Atencion al ciudadno'),
(10, '\r\nComercializacion\r\n'),
(11, 'Seguridad\r\n'),
(12, 'Seguridad Integral\r\n'),
(13, 'Producción\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int NOT NULL,
  `tipo_de_cargo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id_dispositivo` int NOT NULL,
  `ic_dispositivo` varchar(20) NOT NULL,
  `id_tipo_de_dispositivo` int NOT NULL,
  `serial_equipo` varchar(60) NOT NULL,
  `serial_de_cargador` varchar(60) NOT NULL,
  `fecha_de_recepcion` date NOT NULL,
  `estado_recepcion_equipo` int NOT NULL,
  `fecha_de_entrega` varchar(11) NOT NULL,
  `responsable` int NOT NULL,
  `responsable_analista_recibido` varchar(30) NOT NULL,
  `responsable_tecnico` varchar(30) NOT NULL,
  `responsable_verificador` varchar(30) NOT NULL,
  `responsable_analista_entrega` varchar(30) NOT NULL,
  `observaciones_analista` varchar(150) NOT NULL,
  `observaciones_tecnico` varchar(150) NOT NULL,
  `observaciones_verificador` varchar(150) NOT NULL,
  `observaciones_analista_entrega` varchar(60) NOT NULL,
  `comprobaciones` varchar(60) NOT NULL,
  `motivo_de_ingreso` int NOT NULL,
  `coordinador` int NOT NULL,
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_roles` int NOT NULL,
  `id_origen` int NOT NULL,
  `id_estatus` int NOT NULL,
  `id_motivo` int NOT NULL,
  `id_datos_del_beneficiario` int NOT NULL,
  `descontinuado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_del_entregante`
--

CREATE TABLE `datos_del_entregante` (
  `id_datos_del_entregante` int NOT NULL,
  `nombre_del_beneficiario` varchar(60) NOT NULL,
  `tipo_documento` int NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `edad` int NOT NULL,
  `Id_genero` int NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `id_area` int NOT NULL,
  `id_cargo` varchar(30) NOT NULL,
  `nombre_del_representante` varchar(60) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `estado` int NOT NULL,
  `municipio` varchar(60) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `posee_discapacidad_o_condicion` varchar(20) NOT NULL,
  `descripcion_discapacidad_condicion` varchar(60) NOT NULL,
  `consejo_comunal` varchar(30) NOT NULL,
  `mesa_telecom` varchar(30) NOT NULL,
  `intitucion_entrega` varchar(30) NOT NULL,
  `institucion_estudia` varchar(30) NOT NULL,
  `responsable` varchar(20) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_origen` int NOT NULL,
  `descontinuado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descontinuado`
--

CREATE TABLE `descontinuado` (
  `id_descontinuado` int NOT NULL,
  `descontinuado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `descontinuado`
--

INSERT INTO `descontinuado` (`id_descontinuado`, `descontinuado`) VALUES
(1, 'Si'),
(2, 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_venezuela`
--

CREATE TABLE `estados_venezuela` (
  `id_estados` int NOT NULL,
  `estado_nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `id_estatus` int NOT NULL,
  `estatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `id_genero` int NOT NULL,
  `genero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id_grado` int NOT NULL,
  `grado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(14, '11 Decimo Primero'),
(15, 'Egresado'),
(16, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo`
--

CREATE TABLE `motivo` (
  `id_motivo` int NOT NULL,
  `tipo_de_motivo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id_origen` int NOT NULL,
  `origen` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `origen`
--

INSERT INTO `origen` (`id_origen`, `origen`) VALUES
(1, 'Apoyo Institucional'),
(2, 'Beneficiario'),
(3, 'Trabajador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparacion`
--

CREATE TABLE `reparacion` (
  `id_reparacion` int NOT NULL,
  `ic_dispositivo` varchar(20) NOT NULL,
  `serial_entrada_tm` varchar(60) NOT NULL,
  `serial_salida_tm` varchar(60) NOT NULL,
  `cambio_pila_bios` varchar(60) NOT NULL,
  `serial_entrada_bat` varchar(60) NOT NULL,
  `serial_salida_bat` varchar(60) NOT NULL,
  `serial_entreda_tarj_ios` varchar(60) NOT NULL,
  `serial_salida_tarj_ios` varchar(60) NOT NULL,
  `serial_entreda_disco` varchar(60) NOT NULL,
  `serial_salida_disco` varchar(60) NOT NULL,
  `serial_entrada_cara_a` varchar(60) NOT NULL,
  `serial_entreda_cara_b` varchar(60) NOT NULL,
  `serial_entreda_cara_c` varchar(60) NOT NULL,
  `serial_entreda_cara_d` varchar(60) NOT NULL,
  `serial_salida_cara_a` varchar(60) NOT NULL,
  `serial_entrada_memoria_ram` varchar(60) NOT NULL,
  `serial_salida_memoria_ram` varchar(60) NOT NULL,
  `serial_entrada_teclado` varchar(60) NOT NULL,
  `serial_salida_teclado` varchar(60) NOT NULL,
  `serial_entrada_cargador` varchar(60) NOT NULL,
  `serial_salida_cargador` varchar(60) NOT NULL,
  `serial_entrada_pantalla` varchar(60) NOT NULL,
  `serial_salida_pantalla` varchar(60) NOT NULL,
  `serial_entrada_tarj_red` varchar(60) NOT NULL,
  `serial_salida_tarj_red` varchar(60) NOT NULL,
  `cambio_fan_cooler` varchar(60) NOT NULL,
  `id_status` int NOT NULL,
  `id_dispositivo` int NOT NULL,
  `id_tipo_de_dispositivo` int NOT NULL,
  `responsable` int NOT NULL,
  `pin_carga` varchar(20) NOT NULL,
  `boton_encendido` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_roles` int NOT NULL,
  `roles` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_roles`, `roles`) VALUES
(1, 'Administrador'),
(2, 'Presidencia'),
(3, 'Analista'),
(4, 'Tecnico'),
(5, 'Verificador'),
(6, 'Coordinador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_equipo`
--

CREATE TABLE `tipo_de_equipo` (
  `id_tipo_de_equipo` int NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `modelo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tipo_de_equipo`
--

INSERT INTO `tipo_de_equipo` (`id_tipo_de_equipo`, `nombre`, `modelo`) VALUES
(1, 'tabla 1', 'TR10CS1'),
(2, 'tabla 2', 'TR10RS1'),
(3, 'Canaima 1', 'MGEDVZ01C'),
(4, 'Canaima 2', 'MGEDMM10TVZH01A'),
(5, 'Canaima 3', 'MGEDMG3VZ01A'),
(6, 'Canaima 4', 'ES01II1'),
(7, 'Canaima 5', 'EF10MI2'),
(8, 'Canaima Docente', 'MGEDMG3XLVZO3B'),
(9, 'tablet 3', 'CNM6762'),
(10, 'Canaima 6', 'SF20BA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_motivo`
--

CREATE TABLE `tipo_de_motivo` (
  `id` int NOT NULL,
  `motivo` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tipo_de_motivo`
--

INSERT INTO `tipo_de_motivo` (`id`, `motivo`) VALUES
(1, 'Donación'),
(2, 'Fortalecimiento Tecnologico'),
(3, 'Reparación'),
(4, 'Diagnostico'),
(5, 'Sustitución');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_documento` int NOT NULL,
  `tipo_documento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_documento`, `tipo_documento`) VALUES
(1, 'C.I'),
(2, 'RIF'),
(3, 'C.E'),
(4, 'J.E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_estado`
--

CREATE TABLE `tipo_estado` (
  `id` int NOT NULL,
  `estado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id_usuarios` int NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `cedula` int NOT NULL,
  `password` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `id_roles` int NOT NULL,
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descontinuado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `usuario`, `nombre`, `cedula`, `password`, `correo`, `id_roles`, `registro`, `descontinuado`) VALUES
(1, 'Dtecnologia', 'Direccion de tecnologia', 12345678, '2bb0e9874da27591636e2fb43491a6a9f5271494', 'direccionTecnologia@industriacanaima.gob.ve', 1, '2024-08-08 16:43:25', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `datos_del_dispotivo`
--
ALTER TABLE `datos_del_dispotivo`
  ADD PRIMARY KEY (`id_dispositivo`),
  ADD KEY `id_origen` (`id_origen`),
  ADD KEY `id_roles` (`id_roles`),
  ADD KEY `id_tipo_de_dispositivo` (`id_tipo_de_dispositivo`),
  ADD KEY `id_estatus` (`id_estatus`),
  ADD KEY `id_motivo` (`id_motivo`),
  ADD KEY `estado_recepcion_equipo` (`estado_recepcion_equipo`),
  ADD KEY `id_datos_del_beneficiario` (`id_datos_del_beneficiario`),
  ADD KEY `responsable` (`responsable`),
  ADD KEY `coordinador` (`coordinador`),
  ADD KEY `motivo_de_ingreso` (`motivo_de_ingreso`),
  ADD KEY `descontinuado` (`descontinuado`);

--
-- Indices de la tabla `datos_del_entregante`
--
ALTER TABLE `datos_del_entregante`
  ADD PRIMARY KEY (`id_datos_del_entregante`),
  ADD KEY `Id_genero` (`Id_genero`),
  ADD KEY `id_carga` (`id_cargo`),
  ADD KEY `id_origen` (`id_origen`),
  ADD KEY `estado` (`estado`),
  ADD KEY `tipo_documento` (`tipo_documento`),
  ADD KEY `descontinuado` (`descontinuado`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `descontinuado`
--
ALTER TABLE `descontinuado`
  ADD PRIMARY KEY (`id_descontinuado`);

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
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_dispositivo` (`id_dispositivo`),
  ADD KEY `responsable` (`responsable`),
  ADD KEY `id_tipo_de_dispositivo` (`id_tipo_de_dispositivo`);

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
-- Indices de la tabla `tipo_de_motivo`
--
ALTER TABLE `tipo_de_motivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_documento`);

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
  ADD KEY `id_roles` (`id_roles`),
  ADD KEY `descontinuado` (`descontinuado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datos_del_dispotivo`
--
ALTER TABLE `datos_del_dispotivo`
  MODIFY `id_dispositivo` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_del_entregante`
--
ALTER TABLE `datos_del_entregante`
  MODIFY `id_datos_del_entregante` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descontinuado`
--
ALTER TABLE `descontinuado`
  MODIFY `id_descontinuado` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estados_venezuela`
--
ALTER TABLE `estados_venezuela`
  MODIFY `id_estados` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id_estatus` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id_grado` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `motivo`
--
ALTER TABLE `motivo`
  MODIFY `id_motivo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `origen`
--
ALTER TABLE `origen`
  MODIFY `id_origen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  MODIFY `id_reparacion` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo_de_equipo`
--
ALTER TABLE `tipo_de_equipo`
  MODIFY `id_tipo_de_equipo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo_de_motivo`
--
ALTER TABLE `tipo_de_motivo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_documento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_estado`
--
ALTER TABLE `tipo_estado`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_del_dispotivo`
--
ALTER TABLE `datos_del_dispotivo`
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_10` FOREIGN KEY (`estado_recepcion_equipo`) REFERENCES `tipo_estado` (`id`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_11` FOREIGN KEY (`id_datos_del_beneficiario`) REFERENCES `datos_del_entregante` (`id_datos_del_entregante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_12` FOREIGN KEY (`responsable`) REFERENCES `usuarios` (`id_usuarios`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_13` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_14` FOREIGN KEY (`coordinador`) REFERENCES `roles` (`id_roles`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_15` FOREIGN KEY (`motivo_de_ingreso`) REFERENCES `tipo_de_motivo` (`id`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_16` FOREIGN KEY (`descontinuado`) REFERENCES `descontinuado` (`id_descontinuado`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_2` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`),
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_4` FOREIGN KEY (`id_origen`) REFERENCES `origen` (`id_origen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_7` FOREIGN KEY (`id_tipo_de_dispositivo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_dispotivo_ibfk_9` FOREIGN KEY (`id_motivo`) REFERENCES `motivo` (`id_motivo`);

--
-- Filtros para la tabla `datos_del_entregante`
--
ALTER TABLE `datos_del_entregante`
  ADD CONSTRAINT `datos_del_entregante_ibfk_1` FOREIGN KEY (`Id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_del_entregante_ibfk_10` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`),
  ADD CONSTRAINT `datos_del_entregante_ibfk_5` FOREIGN KEY (`id_origen`) REFERENCES `origen` (`id_origen`),
  ADD CONSTRAINT `datos_del_entregante_ibfk_6` FOREIGN KEY (`estado`) REFERENCES `estados_venezuela` (`id_estados`),
  ADD CONSTRAINT `datos_del_entregante_ibfk_8` FOREIGN KEY (`tipo_documento`) REFERENCES `tipo_documento` (`id_documento`),
  ADD CONSTRAINT `datos_del_entregante_ibfk_9` FOREIGN KEY (`descontinuado`) REFERENCES `descontinuado` (`id_descontinuado`);

--
-- Filtros para la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD CONSTRAINT `reparacion_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `estatus` (`id_estatus`),
  ADD CONSTRAINT `reparacion_ibfk_3` FOREIGN KEY (`id_dispositivo`) REFERENCES `datos_del_dispotivo` (`id_dispositivo`),
  ADD CONSTRAINT `reparacion_ibfk_4` FOREIGN KEY (`id_dispositivo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`),
  ADD CONSTRAINT `reparacion_ibfk_5` FOREIGN KEY (`responsable`) REFERENCES `usuarios` (`id_usuarios`),
  ADD CONSTRAINT `reparacion_ibfk_6` FOREIGN KEY (`id_tipo_de_dispositivo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`descontinuado`) REFERENCES `descontinuado` (`id_descontinuado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
