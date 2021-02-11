# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.31)
# Base de datos: vehiculos-crud
# Tiempo de Generación: 2021-02-11 12:21:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla vehiculos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vehiculos`;

CREATE TABLE `vehiculos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `marca` varchar(150) NOT NULL DEFAULT '',
  `modelo` varchar(150) NOT NULL DEFAULT '',
  `color` varchar(100) NOT NULL DEFAULT '',
  `fecha` int(5) NOT NULL,
  `placa` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;

INSERT INTO `vehiculos` (`id`, `marca`, `modelo`, `color`, `fecha`, `placa`)
VALUES
	(1,'Honda','Accord','Rojo',2019,'AL872LK90'),
	(2,'Toyota','Vitz','Negro',2020,'LA3H0444'),
	(3,'Suzuki','Baleno','Azul',2020,'LR202067'),
	(20,'Missan','March','Rojo',2021,'LMNJ665');

/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
