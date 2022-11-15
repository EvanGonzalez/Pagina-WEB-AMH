-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_amh
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `imagenes_noticia`
--

DROP TABLE IF EXISTS `imagenes_noticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes_noticia` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(40) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  PRIMARY KEY (`id_imagen`),
  KEY `titulo` (`titulo`),
  CONSTRAINT `imagenes_noticia_ibfk_1` FOREIGN KEY (`titulo`) REFERENCES `noticia` (`titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes_noticia`
--

LOCK TABLES `imagenes_noticia` WRITE;
/*!40000 ALTER TABLE `imagenes_noticia` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagenes_noticia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iniciar_sesion`
--

DROP TABLE IF EXISTS `iniciar_sesion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iniciar_sesion` (
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iniciar_sesion`
--

LOCK TABLES `iniciar_sesion` WRITE;
/*!40000 ALTER TABLE `iniciar_sesion` DISABLE KEYS */;
/*!40000 ALTER TABLE `iniciar_sesion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticia`
--

DROP TABLE IF EXISTS `noticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticia` (
  `titulo` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`titulo`),
  KEY `usuario` (`usuario`),
  CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `iniciar_sesion` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticia`
--

LOCK TABLES `noticia` WRITE;
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-14 22:05:45
