-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para sistema_produccion
DROP DATABASE IF EXISTS `sistema_produccion`;
CREATE DATABASE IF NOT EXISTS `sistema_produccion` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `sistema_produccion`;

-- Volcando estructura para tabla sistema_produccion.caracteristicas
DROP TABLE IF EXISTS `caracteristicas`;
CREATE TABLE IF NOT EXISTS `caracteristicas` (
  `modelo` int(11) NOT NULL,
  `procesador` varchar(30) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `hdd` varchar(10) NOT NULL,
  `t_red` varchar(30) NOT NULL,
  `pantalla` varchar(20) NOT NULL,
  `camara` varchar(20) NOT NULL,
  `p_usb` varchar(15) NOT NULL,
  `p_hdmi` varchar(15) NOT NULL,
  `lector_sd` varchar(20) NOT NULL,
  `e_microfono` varchar(20) NOT NULL,
  `bateria` varchar(30) NOT NULL,
  `s_operativo` varchar(20) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`modelo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.caracteristicas: ~0 rows (aproximadamente)
DELETE FROM `caracteristicas`;

-- Volcando estructura para tabla sistema_produccion.comprobacion
DROP TABLE IF EXISTS `comprobacion`;
CREATE TABLE IF NOT EXISTS `comprobacion` (
  `id_comprobacion` int(11) NOT NULL AUTO_INCREMENT,
  `valido` varchar(10) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_comprobacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.comprobacion: ~0 rows (aproximadamente)
DELETE FROM `comprobacion`;

-- Volcando estructura para tabla sistema_produccion.contador
DROP TABLE IF EXISTS `contador`;
CREATE TABLE IF NOT EXISTS `contador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `persona` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `persona` (`persona`),
  CONSTRAINT `contador_ibfk_1` FOREIGN KEY (`persona`) REFERENCES `persona` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.contador: ~0 rows (aproximadamente)
DELETE FROM `contador`;

-- Volcando estructura para tabla sistema_produccion.equipo_diario
DROP TABLE IF EXISTS `equipo_diario`;
CREATE TABLE IF NOT EXISTS `equipo_diario` (
  `id_equipo_diario` int(11) NOT NULL AUTO_INCREMENT,
  `equipo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_equipo_diario`),
  KEY `equipo` (`equipo`),
  CONSTRAINT `equipo_diario_ibfk_1` FOREIGN KEY (`equipo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.equipo_diario: ~0 rows (aproximadamente)
DELETE FROM `equipo_diario`;
INSERT INTO `equipo_diario` (`id_equipo_diario`, `equipo`, `fecha`, `registro`) VALUES
	(1, 1, '2024-06-17', '2024-06-17 13:32:17');

-- Volcando estructura para tabla sistema_produccion.equipo_laptop
DROP TABLE IF EXISTS `equipo_laptop`;
CREATE TABLE IF NOT EXISTS `equipo_laptop` (
  `serial_id_c` varchar(20) NOT NULL,
  `serial_cara_b` varchar(20) NOT NULL,
  `serial_m_r` varchar(20) NOT NULL,
  `serial_cargador` varchar(20) NOT NULL,
  `serial_t_m` varchar(30) NOT NULL,
  `serial_pantalla` varchar(30) NOT NULL,
  `serial_hdd` varchar(20) NOT NULL,
  `serial_bateria` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `estatus` int(11) NOT NULL,
  `tipo_de_equipo` int(11) NOT NULL,
  `responsable` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`serial_id_c`),
  KEY `estatus` (`estatus`),
  KEY `tipo_de_equipo` (`tipo_de_equipo`),
  KEY `responsable` (`responsable`),
  CONSTRAINT `equipo_laptop_ibfk_2` FOREIGN KEY (`estatus`) REFERENCES `estatus` (`id_estatus`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `equipo_laptop_ibfk_3` FOREIGN KEY (`tipo_de_equipo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`),
  CONSTRAINT `equipo_laptop_ibfk_4` FOREIGN KEY (`responsable`) REFERENCES `persona` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.equipo_laptop: ~0 rows (aproximadamente)
DELETE FROM `equipo_laptop`;
INSERT INTO `equipo_laptop` (`serial_id_c`, `serial_cara_b`, `serial_m_r`, `serial_cargador`, `serial_t_m`, `serial_pantalla`, `serial_hdd`, `serial_bateria`, `fecha`, `estatus`, `tipo_de_equipo`, `responsable`, `registro`) VALUES
	('qw', 'qw', '123', 'as', '124', '4asd', '1sa', 'asa', '2024-06-17', 2, 1, 1234567, '2024-06-17 13:49:25');

-- Volcando estructura para tabla sistema_produccion.equipo_tablet
DROP TABLE IF EXISTS `equipo_tablet`;
CREATE TABLE IF NOT EXISTS `equipo_tablet` (
  `serial_id_l` varchar(20) NOT NULL,
  `serial_cara_b` varchar(20) NOT NULL,
  `serial_cargador` varchar(25) NOT NULL,
  `serial_bateria` varchar(30) NOT NULL,
  `serial_pantalla` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `estatus` int(11) NOT NULL,
  `tipo_de_equipo` int(11) NOT NULL,
  `responsable` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`serial_id_l`),
  KEY `estatus` (`estatus`),
  KEY `tipo_de_equipo` (`tipo_de_equipo`),
  KEY `responsable` (`responsable`),
  CONSTRAINT `equipo_tablet_ibfk_2` FOREIGN KEY (`estatus`) REFERENCES `estatus` (`id_estatus`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `equipo_tablet_ibfk_3` FOREIGN KEY (`tipo_de_equipo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`),
  CONSTRAINT `equipo_tablet_ibfk_4` FOREIGN KEY (`responsable`) REFERENCES `persona` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.equipo_tablet: ~2 rows (aproximadamente)
DELETE FROM `equipo_tablet`;
INSERT INTO `equipo_tablet` (`serial_id_l`, `serial_cara_b`, `serial_cargador`, `serial_bateria`, `serial_pantalla`, `fecha`, `estatus`, `tipo_de_equipo`, `responsable`, `registro`) VALUES
	('asd', 'asd', '11', '31sa', 'fq11', '2024-06-17', 2, 1, 1234567, '2024-06-17 13:54:12'),
	('sad', 'sad', 'qwqw', '213', '43', '2024-06-17', 2, 1, 1234567, '2024-06-17 13:53:48');

-- Volcando estructura para tabla sistema_produccion.estatus
DROP TABLE IF EXISTS `estatus`;
CREATE TABLE IF NOT EXISTS `estatus` (
  `id_estatus` int(11) NOT NULL AUTO_INCREMENT,
  `estatus` varchar(25) NOT NULL,
  PRIMARY KEY (`id_estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.estatus: ~7 rows (aproximadamente)
DELETE FROM `estatus`;
INSERT INTO `estatus` (`id_estatus`, `estatus`) VALUES
	(1, 'Aduana'),
	(2, 'Armado'),
	(3, 'Ensamblado'),
	(4, 'Prueba inicial'),
	(5, 'Prueba final'),
	(6, 'Empaquetado'),
	(7, 'Verificacion');

-- Volcando estructura para tabla sistema_produccion.perfiles
DROP TABLE IF EXISTS `perfiles`;
CREATE TABLE IF NOT EXISTS `perfiles` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.perfiles: ~7 rows (aproximadamente)
DELETE FROM `perfiles`;
INSERT INTO `perfiles` (`id_perfil`, `tipo`, `registro`) VALUES
	(1, 'Administrador', '2024-06-03 17:13:51'),
	(2, 'Aduana', '2024-06-03 17:13:51'),
	(3, 'Armador', '2024-06-03 17:13:51'),
	(4, 'Ensamblador', '2024-06-03 17:13:51'),
	(5, 'Prueba Inicial', '2024-06-03 17:13:51'),
	(6, 'Prueba Final', '2024-06-03 17:13:51'),
	(7, 'Empaquetador', '2024-06-03 17:13:51');

-- Volcando estructura para tabla sistema_produccion.persona
DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `cedula` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo_inst` varchar(40) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.persona: ~4 rows (aproximadamente)
DELETE FROM `persona`;
INSERT INTO `persona` (`cedula`, `nombre`, `telefono`, `correo_inst`, `registro`) VALUES
	(1234567, 'armador', '04122345678', 'armador@industriacanaima.gob.ve', '2024-06-04 14:52:42'),
	(12916293, 'Yasmin Brito', '04269004314', 'ybrito@industriacanaima.gob.ve', '2024-06-04 13:24:30'),
	(27047631, 'Danyerbert Rangel', '04126296504', 'drangel@gmail.com', '2024-05-29 18:32:48'),
	(27845643, 'pruebaInicial', '04126296504', 'pruebainicial@industriacanaima.gob.ve', '2024-06-17 14:50:25'),
	(87654321, 'ensamblador', '04126296504', 'ensamblador@industriacanaima.gob.ve', '2024-06-17 14:42:23');

-- Volcando estructura para tabla sistema_produccion.tipo_de_comprobacion
DROP TABLE IF EXISTS `tipo_de_comprobacion`;
CREATE TABLE IF NOT EXISTS `tipo_de_comprobacion` (
  `id_tipo_comprobacion` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(11) NOT NULL,
  `registro` int(11) NOT NULL,
  PRIMARY KEY (`id_tipo_comprobacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.tipo_de_comprobacion: ~0 rows (aproximadamente)
DELETE FROM `tipo_de_comprobacion`;

-- Volcando estructura para tabla sistema_produccion.tipo_de_equipo
DROP TABLE IF EXISTS `tipo_de_equipo`;
CREATE TABLE IF NOT EXISTS `tipo_de_equipo` (
  `id_tipo_de_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_tipo_de_equipo`),
  KEY `modelo` (`modelo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.tipo_de_equipo: ~10 rows (aproximadamente)
DELETE FROM `tipo_de_equipo`;
INSERT INTO `tipo_de_equipo` (`id_tipo_de_equipo`, `nombre`, `modelo`, `registro`) VALUES
	(1, 'tabla 1', 'TR10CS1', '2024-06-17 03:47:23'),
	(2, 'tabla 2', 'TR10RS1', '2024-06-17 03:47:23'),
	(3, 'Canaima 1', 'MGEDVZ01C', '2024-06-17 03:47:23'),
	(4, 'Canaima 2', 'MGEDMM10TVZH01A', '2024-06-17 03:47:23'),
	(5, 'Canaima 3', 'MGEDMG3VZ01A', '2024-06-17 03:47:23'),
	(6, 'Canaima 4', 'ES01II1', '2024-06-17 03:47:23'),
	(7, 'Canaima 5', 'EF10MI2', '2024-06-17 03:47:23'),
	(8, 'Canaima Docente', 'MGEDMG3XLVZO3B', '2024-06-17 03:47:23'),
	(9, 'tablet 3', 'CNM6762', '2024-06-17 03:47:23'),
	(10, 'Canaima 6', 'SF20BA', '2024-06-17 03:47:23');

-- Volcando estructura para tabla sistema_produccion.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `rol` int(11) NOT NULL,
  `cedula_usuario` int(10) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_usuario`),
  KEY `cedula_usuario` (`cedula_usuario`),
  KEY `rol` (`rol`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cedula_usuario`) REFERENCES `persona` (`cedula`),
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`rol`) REFERENCES `perfiles` (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.usuarios: ~0 rows (aproximadamente)
DELETE FROM `usuarios`;
INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `rol`, `cedula_usuario`, `registro`) VALUES
	(1, 'danyerbert', '7c4a8d09ca3762af61e59520943dc2', 1, 27047631, '2024-05-29 18:34:04'),
	(2, 'yasmin', '7c4a8d09ca3762af61e59520943dc2', 2, 12916293, '2024-06-04 13:25:05'),
	(3, 'armador', '7c4a8d09ca3762af61e59520943dc2', 4, 1234567, '2024-06-17 15:38:12');

-- Volcando estructura para tabla sistema_produccion.validacion
DROP TABLE IF EXISTS `validacion`;
CREATE TABLE IF NOT EXISTS `validacion` (
  `id_validacion` int(11) NOT NULL AUTO_INCREMENT,
  `serial_id_c` int(11) NOT NULL,
  `serial_id_l` int(11) NOT NULL,
  `tipo_de_comprobacion` int(11) NOT NULL,
  `tipo_de_equipo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_validacion`),
  KEY `serial_id_c` (`serial_id_c`,`tipo_de_equipo`),
  KEY `serial_id_l` (`serial_id_l`),
  KEY `tipo_de_comprobacion` (`tipo_de_comprobacion`),
  KEY `tipo_de_equipo` (`tipo_de_equipo`),
  CONSTRAINT `validacion_ibfk_2` FOREIGN KEY (`tipo_de_comprobacion`) REFERENCES `tipo_de_comprobacion` (`id_tipo_comprobacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `validacion_ibfk_4` FOREIGN KEY (`tipo_de_equipo`) REFERENCES `tipo_de_equipo` (`id_tipo_de_equipo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla sistema_produccion.validacion: ~0 rows (aproximadamente)
DELETE FROM `validacion`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
