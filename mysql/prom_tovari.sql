CREATE DATABASE  IF NOT EXISTS `prom_tovari` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `prom_tovari`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: prom_tovari
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `check_list`
--

DROP TABLE IF EXISTS `check_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `check_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `prodano` varchar(45) DEFAULT NULL,
  `viruchka` varchar(45) DEFAULT NULL,
  `id_otdel` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `otdel_idx` (`id_otdel`),
  CONSTRAINT `otdel` FOREIGN KEY (`id_otdel`) REFERENCES `otdel` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `check_list`
--

LOCK TABLES `check_list` WRITE;
/*!40000 ALTER TABLE `check_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `check_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otdel`
--

DROP TABLE IF EXISTS `otdel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `otdel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otdel`
--

LOCK TABLES `otdel` WRITE;
/*!40000 ALTER TABLE `otdel` DISABLE KEYS */;
INSERT INTO `otdel` VALUES (1,'Корзины для белья'),(2,'Товары для хранения'),(3,'личная гигиена'),(5,'Бытовая химия'),(6,'Товары для уборки'),(17,'Сушилки для белья');
/*!40000 ALTER TABLE `otdel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xoz_tovari`
--

DROP TABLE IF EXISTS `xoz_tovari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `xoz_tovari` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `edizm` varchar(45) DEFAULT NULL,
  `kolichestvo` varchar(45) DEFAULT NULL,
  `cena` varchar(45) DEFAULT NULL,
  `otdel_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `otdel_idx` (`otdel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xoz_tovari`
--

LOCK TABLES `xoz_tovari` WRITE;
/*!40000 ALTER TABLE `xoz_tovari` DISABLE KEYS */;
INSERT INTO `xoz_tovari` VALUES (2,'Набор вешалок для одежды','https://hoff.ru/upload/iblock/9f1/9f1442a2eb35c7e2de3b48bf0a63746f.jpg','ш','10','200',2),(3,'Гель для душа','https://hoff.ru/upload/iblock/0b4/0b48df9e568e3f3b7ee51af928581019.jpg','шт','24','299',3),(4,'Сушилка для белья','https://hoff.ru/upload/iblock/f05/f05e9026eaa95b61f537cc2121e4c65a.jpg','шт','12','1399',17),(5,'Средство для мытья посуды','https://hoff.ru/upload/iblock/868/868788941f6439d07371f3a48d535826.jpg','шт','34','259',1),(12,'Ведро с крышкой ','https://hoff.ru/upload/iblock/7cc/7cc3e2bb16ea43f9c9926c08413ba6ee.jpg','шт','5','699',6),(21,'Набор тряпок универсальных GP-017','https://hoff.ru/upload/iblock/46f/46fa7642184f70e890e6309c956e580a.jpg','шт','15','229',6),(22,'Таз складной MITTE Folding','https://hoff.ru/upload/iblock/483/48377c439871be8bbb051012bd3d9bdd.jpg','шт','12','1399',6);
/*!40000 ALTER TABLE `xoz_tovari` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'prom_tovari'
--

--
-- Dumping routines for database 'prom_tovari'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-16 22:33:45
