-- MySQL dump 10.13  Distrib 5.5.24, for Win32 (x86)
--
-- Host: localhost    Database: bancario
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `conta_comum`
--

DROP TABLE IF EXISTS `conta_comum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conta_comum` (
  `numero` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `abertura` date NOT NULL,
  `encerramento` date DEFAULT NULL,
  `situacao` int(3) NOT NULL,
  `senha` int(10) NOT NULL,
  `saldo` double NOT NULL,
  `id_pessoa` int(10) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conta_comum`
--

LOCK TABLES `conta_comum` WRITE;
/*!40000 ALTER TABLE `conta_comum` DISABLE KEYS */;
INSERT INTO `conta_comum` VALUES (1,'2013-02-20',NULL,1,123,625.61,3),(2,'2013-02-20',NULL,1,123,-104.5,3),(3,'2013-02-20',NULL,1,123,145.13,3),(4,'2013-02-20',NULL,1,123,45.5,3),(5,'2013-02-20',NULL,1,123,69655.64,3);
/*!40000 ALTER TABLE `conta_comum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movimento`
--

DROP TABLE IF EXISTS `movimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `valor` double NOT NULL,
  `id_conta` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimento`
--

LOCK TABLES `movimento` WRITE;
/*!40000 ALTER TABLE `movimento` DISABLE KEYS */;
INSERT INTO `movimento` VALUES (1,'2013-02-22 14:04:09',0,1),(2,'2013-02-22 14:04:21',2,1),(3,'2013-02-22 14:04:26',4.56,1),(4,'2013-02-22 14:04:31',9.87,1),(5,'2013-02-22 14:10:52',99.45,5),(6,'2013-02-22 14:11:02',23.56,5),(7,'2013-02-22 14:17:34',0,1),(8,'2013-02-22 14:17:39',0,3),(9,'2013-02-22 14:19:48',2,1),(10,'2013-02-22 14:20:09',2,1),(11,'2013-02-22 14:21:15',-2,1),(12,'2013-02-22 14:21:20',-2,1),(13,'2013-02-22 14:24:20',0,1),(14,'2013-02-22 15:04:09',0,1),(15,'2013-02-22 17:15:13',0,1),(16,'2013-02-22 17:15:18',230.5,1),(17,'2013-02-22 17:20:50',0,1),(18,'2013-02-22 17:20:54',-60,1),(19,'2013-02-22 17:20:58',-903,1),(20,'2013-02-22 17:34:50',1233.98,1),(21,'2013-02-25 09:06:06',0,1),(22,'2013-02-25 09:06:32',-65,2),(23,'2013-02-25 09:56:50',0,1),(24,'2013-02-25 10:23:30',99.63,3),(25,'2013-02-25 10:26:37',54.2,1),(26,'2013-02-25 10:26:50',69532.63,5),(27,'2013-02-25 10:28:14',-85,2);
/*!40000 ALTER TABLE `movimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pessoa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cep` int(10) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `renda` double NOT NULL,
  `situacao` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (1,'Samuel','R Antonio Marcos',14080130,'2121-1991',1900,1),(2,'Delma','R Antonio Cesar',14080130,'2121-1991',23407,1),(3,'Carol','Av Domingos Cazzotti',14080130,'2121-1991',999.9,1);
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-02-25 10:31:10
