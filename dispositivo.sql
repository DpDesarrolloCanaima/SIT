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
DROP DATABASE IF EXISTS `oac_prueba`;
CREATE DATABASE IF NOT EXISTS `oac_prueba` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `oac_prueba`;

-- Volcando estructura para tabla oac_prueba.datos_del_dispotivo
DROP TABLE IF EXISTS `datos_del_dispotivo`;
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

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
