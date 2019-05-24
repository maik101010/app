-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.1.30-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para politica
CREATE DATABASE IF NOT EXISTS `politica` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `politica`;

-- Volcando estructura para tabla politica.ciudad
CREATE TABLE IF NOT EXISTS `ciudad` (
  `id_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla politica.ciudad: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` (`id_ciudad`, `nombre`) VALUES
	(1, 'Ibague'),
	(2, 'Bogota'),
	(3, 'Medellin'),
	(4, 'test');
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;

-- Volcando estructura para tabla politica.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `direccion_oficina` varchar(45) DEFAULT NULL,
  `ciudad_id` int(11) NOT NULL,
  `codigo_postal` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_persona`),
  KEY `fk_persona_ciudad_idx` (`ciudad_id`),
  CONSTRAINT `fk_persona_ciudad` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla politica.persona: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` (`id_persona`, `nombre`, `cargo`, `direccion_oficina`, `ciudad_id`, `codigo_postal`) VALUES
	(1, 'michael', 'alcalde', 'carrera 3 #123', 1, '7002'),
	(2, 'oscar', 'diputado', 'avenida siempre viva', 2, '7002'),
	(3, 'mauricio', 'diputato', 'carrera 5ta #333', 1, '7002'),
	(9, 'as', 'asas', 'asa', 1, '7001'),
	(10, 'test', 'test', 'test', 1, '7003'),
	(11, 'test', 'test', 'ete', 4, '7003');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
