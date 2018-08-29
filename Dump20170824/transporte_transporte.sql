-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: transporte
-- ------------------------------------------------------
-- Server version	5.7.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `transporte`
--

DROP TABLE IF EXISTS `transporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transporte` (
  `folio` int(11) NOT NULL AUTO_INCREMENT,
  `Linea_transporte` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_transporte` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Placas_Camion` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `No_Caja` int(11) NOT NULL,
  `Nombre_Responsable` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_entrada` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_salida` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`folio`),
  UNIQUE KEY `folio_UNIQUE` (`folio`)
) ENGINE=InnoDB AUTO_INCREMENT=1234584 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transporte`
--

LOCK TABLES `transporte` WRITE;
/*!40000 ALTER TABLE `transporte` DISABLE KEYS */;
INSERT INTO `transporte` VALUES (1234574,'hola','local','Sa2rks3',2,'dulce','hola','2017-08-01T05:00:00.000Z','2017-02-21'),(1234575,'hola','local','Sa2rks3',2,'dulce','hola','2017-08-09T05:00:00.000Z','2017-08-26T05:00:00.000Z'),(1234576,'hola','local','Sa2rks3',2,'dulce','hola','2017-08-09T05:00:00.000Z','2017-08-02T05:00:00.000Z'),(1234577,'UGALDE','local','ddd3432',2,'oMAR','Lleva pañales','2017-08-17T05:00:00.000Z','2017-08-31T05:00:00.000Z'),(1234578,'UGALDE','local','ddd3432',2,'oMAR','Lleva pañales','2017-08-03T05:00:00.000Z','2017-08-08T05:00:00.000Z'),(1234579,'Los chavez','Local','2',765242,'dad','ASDA','2017-08-07T05:00:00.000Z',NULL),(1234580,'vero','Local','HYD238D',1,'VERO','VERITO',NULL,NULL),(1234581,'da','Exportación','dddewq2',2,'dad','pruebaaa',NULL,NULL),(1234582,'Juanito','Local','JUDGE21',2,'JUANA','xxx',NULL,NULL),(1234583,'Castores','Local','gtr4532',2341,'yo','urge no manches con u minus','2017-08-16T05:00:00.000Z','2017-08-18T05:00:00.000Z');
/*!40000 ALTER TABLE `transporte` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-24 21:10:03
