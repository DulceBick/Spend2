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
-- Table structure for table `usuariosgeneral`
--

DROP TABLE IF EXISTS `usuariosgeneral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuariosgeneral` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_U` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_P` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_M` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_u` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_u` float NOT NULL,
  `tipo_usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Activo',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuariosgeneral`
--

LOCK TABLES `usuariosgeneral` WRITE;
/*!40000 ALTER TABLE `usuariosgeneral` DISABLE KEYS */;
INSERT INTO `usuariosgeneral` VALUES (1,'Manuel ','Galvan','Pérez','Las misiones',2147480000,'1','Inactivo'),(2,'Adrian','Aguila','Peña','Carrillo Puerto',2147480000,'1','Inactivo'),(3,'Omar','Ugalde','Peña','Carrillo Puerto',2147480000,'1','Inactivo'),(4,'Lucia','Rangel','Lopez','Menchaca',2147480000,'2','Inactivo'),(6,'Lucia','Rangel','Lopez','Menchaca',2147480000,'2','Inactivo'),(7,'Veronica','Vazquez','Sanchez','Marques',445577000,'3','Inactivo'),(8,'Javier','Zuñiga','Lima','Corregidora',2147480000,'3','Activo'),(9,'Francisco','Feregrino','Perez','Carrillo Puerto',2147480000,'3','Activo'),(10,'Daniela','Rodrigez','Quntanilla','Jalpan de Serra',2147480000,'2','Activo'),(12,'adas','dasd','dasdaldasñldkl','asd887sada',7731430000,'3','Activo'),(15,'Hola Munco','es una pruebaa','para ver','si inserta',7777780000,'1','Activo'),(16,'Luis','Gallegos','Salgado','Zibata',1442170000,'2','Activo'),(17,'Luis','Gallegos','Salgado','Zibata',1442170000,'2','Activo'),(20,'as','as','asooo','ooooo',2888890000,'3','Activo'),(21,'as','as','asooo','ooooo',2888890000,'3','Activo'),(22,'Esta','es una sgunda','prueva','escribi prueba con v',7731430000,'2','Activo'),(23,'hola','hola2','hola4','hola777',5233130000,'1','Activo'),(24,'d','asd','asd','ad',1234570000,'3','Activo'),(25,'asd','asdhghjp','pppk','ikjjud',1234570000,'2','Activo'),(26,'ola','ola','ola','ola',8131220000,'2','Activo'),(27,'ola','ola','olaaaaaaaaaaaa','oasdasdad',7731430000,'2','Activo'),(28,'asdas','asdas','sdkdj','awdihd',987654000,'1','Activo'),(29,'fbjk','uvghbijnokp','tvuybinjok','t7vuboipno',1234570000,'3','Activo'),(30,'pruvea12w','jwqoeqjw','3 am','tengo sueño',1234570000,'1','Activo'),(33,'Carlos','Rojas','Rojas','Benito Juare',8888890000,'1','Activo'),(34,'Dulce','dulce','dulce','dulce',2222220000,'1','Activo'),(37,'Maleny','Vazquez','Sandovall','dasjdpaoj',7731430000,'1','Activo'),(38,'Manuel','Feregrino','Lima','Santa Rosa',2421430000,'2','Activo'),(39,'Dulc','dasd','fasfa','adasd',7731430000,'1','Activo'),(40,'Maleny','Vazquez','Sandoval','Michoacan Merida',7731430000,'2','Activo'),(41,'Luis','Gallegos','Salgado','ZIBATA',4423250000,'3','Activo'),(42,'Adrian','Aguila','Peña','San Miguel Allende',7731430000,'2','Activo'),(43,'ivan','g','l','edsds',1234570000,'1','Activo');
/*!40000 ALTER TABLE `usuariosgeneral` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-24 21:10:04
