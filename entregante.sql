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

-- Volcando estructura para tabla oac_prueba.datos_del_entregante
DROP TABLE IF EXISTS `datos_del_entregante`;
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

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
