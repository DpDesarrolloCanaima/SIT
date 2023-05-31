-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para oac_prueba
CREATE DATABASE IF NOT EXISTS `oac_prueba` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `oac_prueba`;

-- Volcando estructura para tabla oac_prueba.area
CREATE TABLE IF NOT EXISTS `area` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_del_area` varchar(150) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.area: ~2 rows (aproximadamente)
DELETE FROM `area`;
INSERT INTO `area` (`id_area`, `nombre_del_area`) VALUES
	(1, 'Tecnologia'),
	(2, 'Producción');

-- Volcando estructura para tabla oac_prueba.año
CREATE TABLE IF NOT EXISTS `año` (
  `id_year_o_grado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  PRIMARY KEY (`id_year_o_grado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.año: ~0 rows (aproximadamente)
DELETE FROM `año`;

-- Volcando estructura para tabla oac_prueba.cargo
CREATE TABLE IF NOT EXISTS `cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_de_cargo` varchar(60) NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.cargo: ~2 rows (aproximadamente)
DELETE FROM `cargo`;
INSERT INTO `cargo` (`id_cargo`, `tipo_de_cargo`) VALUES
	(1, 'Director de Area'),
	(2, 'Gerente');

-- Volcando estructura para tabla oac_prueba.datos_del_dispotivo
CREATE TABLE IF NOT EXISTS `datos_del_dispotivo` (
  `id_datos_del_dispositivo` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_motivo` int(11) NOT NULL,
  `id_datos_del_beneficiario` int(11) NOT NULL,
  PRIMARY KEY (`id_datos_del_dispositivo`),
  KEY `id_origen` (`id_origen`),
  KEY `id_grado` (`id_grado`),
  KEY `id_roles` (`id_roles`),
  KEY `id_tipo_de_dispositivo` (`id_tipo_de_dispositivo`),
  KEY `id_estatus` (`id_estatus`),
  KEY `id_motivo` (`id_motivo`),
  KEY `estado_recepcion_equipo` (`estado_recepcion_equipo`),
  CONSTRAINT `datos_del_dispotivo_ibfk_10` FOREIGN KEY (`estado_recepcion_equipo`) REFERENCES `tipo_estado` (`id`),
  CONSTRAINT `datos_del_dispotivo_ibfk_2` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`),
  CONSTRAINT `datos_del_dispotivo_ibfk_4` FOREIGN KEY (`id_origen`) REFERENCES `origen` (`id_origen`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `datos_del_dispotivo_ibfk_5` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `datos_del_dispotivo_ibfk_7` FOREIGN KEY (`id_tipo_de_dispositivo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `datos_del_dispotivo_ibfk_8` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`),
  CONSTRAINT `datos_del_dispotivo_ibfk_9` FOREIGN KEY (`id_motivo`) REFERENCES `motivo` (`id_motivo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.datos_del_dispotivo: ~3 rows (aproximadamente)
DELETE FROM `datos_del_dispotivo`;
INSERT INTO `datos_del_dispotivo` (`id_datos_del_dispositivo`, `id_tipo_de_dispositivo`, `serial_equipo`, `serial_de_migracion`, `serial_de_cargador`, `serial_de_cargador_salida`, `pertenencia_del_equipo`, `institucion_educativa`, `institucion_donde_estudia`, `fecha_de_recepcion`, `estado_recepcion_equipo`, `fecha_de_entrega`, `responsable`, `observaciones`, `equipo_reincidio`, `id_roles`, `id_origen`, `id_grado`, `id_estatus`, `id_motivo`, `id_datos_del_beneficiario`) VALUES
	(1, 7, 'JV2100176H44406276', '', '', '', '', 'Dr. Manuel Diaz Rodriguez', 'Dr. Manuel Diaz Rodriguez', '0000-00-00', 1, 0, '', '', '', 2, 3, 11, 1, 1, 1),
	(2, 7, 'JV2100176H44406276', '', '', '', '', 'Dr. Manuel Diaz Rodriguez', 'Dr. Manuel Diaz Rodriguez', '2023-01-09', 1, 0, '', '', '', 1, 3, 5, 1, 1, 1),
	(5, 1, '806JV2012H50409754', '', '', '', '', 'Universidad Politecnica Territorial Mariscal Sucre', 'Universidad Politecnica Territorial Mariscal Sucre', '0000-00-00', 3, 0, '', '', '', 6, 2, 11, 1, 2, 2);

-- Volcando estructura para tabla oac_prueba.datos_del_entregante
CREATE TABLE IF NOT EXISTS `datos_del_entregante` (
  `id_datos_del_entregante` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_tipo_de_equipo` int(11) NOT NULL,
  `id_origen` int(11) NOT NULL,
  PRIMARY KEY (`id_datos_del_entregante`),
  KEY `Id_genero` (`Id_genero`),
  KEY `id_area` (`id_area`),
  KEY `id_carga` (`id_cargo`),
  KEY `id_datos_del_dispositivo` (`id_tipo_de_equipo`),
  KEY `id_origen` (`id_origen`),
  KEY `estado` (`estado`),
  CONSTRAINT `datos_del_entregante_ibfk_1` FOREIGN KEY (`Id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `datos_del_entregante_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `datos_del_entregante_ibfk_3` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `datos_del_entregante_ibfk_5` FOREIGN KEY (`id_origen`) REFERENCES `origen` (`id_origen`),
  CONSTRAINT `datos_del_entregante_ibfk_6` FOREIGN KEY (`estado`) REFERENCES `estados_venezuela` (`id_estados`),
  CONSTRAINT `datos_del_entregante_ibfk_7` FOREIGN KEY (`id_tipo_de_equipo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.datos_del_entregante: ~1 rows (aproximadamente)
DELETE FROM `datos_del_entregante`;
INSERT INTO `datos_del_entregante` (`id_datos_del_entregante`, `ic`, `nombre_del_beneficiario`, `cedula`, `edad`, `Id_genero`, `fecha_de_nacimiento`, `unidad_de_adscripcion`, `id_area`, `id_cargo`, `nombre_del_representante`, `correo`, `telefono`, `estado`, `municipio`, `direccion`, `posee_discapacidad_o_condicion`, `descripcion_discapacidad_condicion`, `id_tipo_de_equipo`, `id_origen`) VALUES
	(2, 2022260123, 'danyerbert', 27047631, 22, 1, '2000-04-10', '', 1, 1, 'Danyerbert', 'danyerbert@gamil.com', '0412-6296504', 1, 'libertador', 'av principal del cementerio', 'si', '', 7, 3),
	(3, 2022260123, 'danyerbert', 27047631, 22, 1, '2000-04-11', '', 1, 2, 'Danyerbert', 'danyerbert@gmail.com', '0412-6296504', 1, 'libertador', 'av. principal', 'no', '', 6, 3);

-- Volcando estructura para tabla oac_prueba.estados_venezuela
CREATE TABLE IF NOT EXISTS `estados_venezuela` (
  `id_estados` int(11) NOT NULL AUTO_INCREMENT,
  `estado_nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id_estados`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla oac_prueba.estados_venezuela: ~24 rows (aproximadamente)
DELETE FROM `estados_venezuela`;
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

-- Volcando estructura para tabla oac_prueba.estatus
CREATE TABLE IF NOT EXISTS `estatus` (
  `id_estatus` int(11) NOT NULL AUTO_INCREMENT,
  `estatus` varchar(20) NOT NULL,
  PRIMARY KEY (`id_estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla oac_prueba.estatus: ~4 rows (aproximadamente)
DELETE FROM `estatus`;
INSERT INTO `estatus` (`id_estatus`, `estatus`) VALUES
	(1, 'Recibidos'),
	(2, 'En la linea'),
	(3, 'Verificado'),
	(4, 'Entregado');

-- Volcando estructura para tabla oac_prueba.genero
CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(10) NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.genero: ~2 rows (aproximadamente)
DELETE FROM `genero`;
INSERT INTO `genero` (`id_genero`, `genero`) VALUES
	(1, 'Masculino'),
	(2, 'Femenino');

-- Volcando estructura para tabla oac_prueba.grado
CREATE TABLE IF NOT EXISTS `grado` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `grado` varchar(60) NOT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.grado: ~14 rows (aproximadamente)
DELETE FROM `grado`;
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

-- Volcando estructura para tabla oac_prueba.motivo
CREATE TABLE IF NOT EXISTS `motivo` (
  `id_motivo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_de_motivo` varchar(30) NOT NULL,
  PRIMARY KEY (`id_motivo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.motivo: ~2 rows (aproximadamente)
DELETE FROM `motivo`;
INSERT INTO `motivo` (`id_motivo`, `tipo_de_motivo`) VALUES
	(1, 'Bateria Mala'),
	(2, 'Pantalla No enciende');

-- Volcando estructura para tabla oac_prueba.origen
CREATE TABLE IF NOT EXISTS `origen` (
  `id_origen` int(11) NOT NULL AUTO_INCREMENT,
  `origen` varchar(60) NOT NULL,
  PRIMARY KEY (`id_origen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.origen: ~3 rows (aproximadamente)
DELETE FROM `origen`;
INSERT INTO `origen` (`id_origen`, `origen`) VALUES
	(1, 'Apoyo Institucional'),
	(2, 'Beneficiario'),
	(3, 'Trabajadores');

-- Volcando estructura para tabla oac_prueba.reparacion
CREATE TABLE IF NOT EXISTS `reparacion` (
  `id_reparacion` int(11) NOT NULL AUTO_INCREMENT,
  `equipo` varchar(20) NOT NULL,
  `propietario` int(10) NOT NULL,
  `migracion` varchar(20) NOT NULL,
  `id_tipo_de_equipo` int(11) NOT NULL,
  `id_origen` int(11) NOT NULL,
  PRIMARY KEY (`id_reparacion`),
  KEY `id_origen` (`id_origen`),
  KEY `id_tipo_de_equipo` (`id_tipo_de_equipo`),
  CONSTRAINT `reparacion_ibfk_1` FOREIGN KEY (`id_origen`) REFERENCES `origen` (`id_origen`),
  CONSTRAINT `reparacion_ibfk_2` FOREIGN KEY (`id_tipo_de_equipo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla oac_prueba.reparacion: ~3 rows (aproximadamente)
DELETE FROM `reparacion`;
INSERT INTO `reparacion` (`id_reparacion`, `equipo`, `propietario`, `migracion`, `id_tipo_de_equipo`, `id_origen`) VALUES
	(1, '806JV2012H50402983', 2022262, 'JV2100176H44406276', 1, 2),
	(2, 'SZLES10II133135852', 2022522, 'SZLES10II133232707', 6, 1),
	(3, 'SZLEF10MI244302164', 2022509, '', 7, 3);

-- Volcando estructura para tabla oac_prueba.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id_roles` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(60) NOT NULL,
  PRIMARY KEY (`id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.roles: ~8 rows (aproximadamente)
DELETE FROM `roles`;
INSERT INTO `roles` (`id_roles`, `roles`) VALUES
	(1, 'Administrador'),
	(2, 'Presidencia'),
	(3, 'Director De Area'),
	(4, 'Gerente'),
	(5, 'Supervisor de Linea'),
	(6, 'Analista'),
	(7, 'Tecnico'),
	(8, 'Verificador');

-- Volcando estructura para tabla oac_prueba.tipo_de_equipo
CREATE TABLE IF NOT EXISTS `tipo_de_equipo` (
  `id_tipo_de_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `cant_act` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id_tipo_de_equipo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.tipo_de_equipo: ~8 rows (aproximadamente)
DELETE FROM `tipo_de_equipo`;
INSERT INTO `tipo_de_equipo` (`id_tipo_de_equipo`, `nombre`, `modelo`, `estado`, `cant_act`, `stock`) VALUES
	(1, 'tabla 1', 'TR10CS1', '', 100, 150),
	(2, 'tabla 2', 'TR10RS1', '', 50, 200),
	(3, 'Canaima 1', 'MGEDVZ01C', '', 20, 56),
	(4, 'Canaima 2', 'MGEDMM10TVZH01A', '', 85, 400),
	(5, 'Canaima 3', 'MGEDMG3VZ01A', '', 60, 80),
	(6, 'Canaima 4', 'ES01II1', '', 78, 700),
	(7, 'Canaima 5', 'EF10MI2', '', 20, 100),
	(8, 'Canaima Docente', 'MGEDMG3XLVZO3B', '', 30, 40);

-- Volcando estructura para tabla oac_prueba.tipo_estado
CREATE TABLE IF NOT EXISTS `tipo_estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.tipo_estado: ~5 rows (aproximadamente)
DELETE FROM `tipo_estado`;
INSERT INTO `tipo_estado` (`id`, `estado`) VALUES
	(1, 'Excelente'),
	(2, 'Bueno'),
	(3, 'Regular'),
	(4, 'Malo'),
	(5, 'Muy Malo');

-- Volcando estructura para tabla oac_prueba.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `cedula` int(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `id_roles` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_usuarios`),
  KEY `id_roles` (`id_roles`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla oac_prueba.usuarios: ~24 rows (aproximadamente)
DELETE FROM `usuarios`;
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
	(47, 'yamaibe', 'Brito', 15789632, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ybrito@gmail.com', 2, '2023-01-26 09:32:35'),
	(48, 'paoly', 'brito', 15789423, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'bpaoly@gmail.com', 6, '2023-01-26 09:33:25'),
	(49, 'paola', 'brito', 30745123, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'pao@gmail.com', 7, '2023-01-26 09:34:38'),
	(50, 'david', 'brito', 16742563, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'david@gmail.com', 8, '2023-01-26 09:36:10');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
