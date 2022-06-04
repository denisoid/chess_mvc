-- MySQL dump 10.13  Distrib 8.0.28, for macos12.2 (arm64)
--
-- Host: localhost    Database: chess
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `position` (
  `id` int NOT NULL,
  `data` json DEFAULT NULL,
  `board` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `match_id` int DEFAULT NULL,
  `order` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `position`
--

LOCK TABLES `position` WRITE;
/*!40000 ALTER TABLE `position` DISABLE KEYS */;
INSERT INTO `position` VALUES (1,NULL,'|  |rd|  |  |kd|  |rd|  \n|pd|bd|pd|pd|nd|pd|  |pd\n|  |bd|nd|  |  |pl|  |  \n|  |  |  |  |  |  |  |qd\n|ql|  |  |  |  |  |  |  \n|bl|  |pl|bl|  |nl|  |  \n|pl|  |  |  |  |pl|pl|pl\n|rl|  |  |  |rl|  |kl|',1,1),(2,NULL,'|rd|nd|bd|  |kd|bd|nd|rd\n|pd|  |pd|pd|  |pd|pd|pd\n|  |  |  |  |  |  |  |  \n|  |pd|  |  |  |  |  |  \n|  |  |bl|  |pl|pd|  |qd\n|  |  |  |  |  |  |  |  \n|pl|pl|pl|pl|  |  |pl|pl\n|rl|nl|bl|ql|  |kl|nl|rl',1,1),(3,NULL,'|rd|nd|bd|qd|kd|bd|nd|rd\n|pd|pd|pd|pd|pd|pd|pd|pd\n|  |  |  |  |  |  |  |  \n|  |  |  |  |  |  |pd|pd\n|  |  |pl|  |  |  |  |  \n|  |  |  |pl|  |  |  |  \n|pl|pl|  |pl|pl|pl|pl|pl\n|rl|nl|bl|ql|kl|bl|nl|rl',1,1),(4,NULL,'|rd|  |bd|kd|  |  |  |rd\n|pd|  |  |pd|bl|pd|nl|pd\n|nd|  |  |  |  |nd|  |  \n|  |pd|  |nl|pl|  |  |pl\n|  |  |  |  |  |  |pl|  \n|  |  |  |pl|  |  |  |  \n|pl|  |pl|  |kl|  |  |  \n|qd|  |  |  |  |  |bd|',1,1);
/*!40000 ALTER TABLE `position` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-04 16:25:05
