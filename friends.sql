CREATE DATABASE  IF NOT EXISTS `friends` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `friends`;
-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: friends
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_friends_users1_idx` (`users_id`),
  KEY `fk_friends_users2_idx` (`friend_id`),
  CONSTRAINT `fk_friends_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_friends_users2` FOREIGN KEY (`friend_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friends`
--

LOCK TABLES `friends` WRITE;
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;
INSERT INTO `friends` VALUES (1,1,2,'2015-08-12 09:13:40','2015-08-12 09:13:40'),(2,1,3,'2015-08-12 09:13:40','2015-08-12 09:13:40'),(3,1,4,'2015-08-12 09:13:40','2015-08-12 09:13:40'),(4,2,3,'2015-08-12 09:13:40','2015-08-12 09:13:40'),(5,2,4,'2015-08-12 09:13:40','2015-08-12 09:13:40'),(6,2,5,'2015-08-12 09:13:40','2015-08-12 09:13:40');
/*!40000 ALTER TABLE `friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Paul Paulino','Paul','paul@paulino.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-07-02 00:00:00','2015-08-12 09:13:40','2015-08-12 09:13:40'),(2,'Nate Paulino','Nate','nate@paulino.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-07-09 00:00:00','2015-08-12 09:28:02','2015-08-12 09:28:02'),(3,'Karessa Paulino','Karessa','karessa@paulino.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-05-13 00:00:00','2015-08-12 09:28:27','2015-08-12 09:28:27'),(4,'Miko Paulino','Miko','miko@paulino.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-02-17 00:00:00','2015-08-12 09:28:51','2015-08-12 09:28:51'),(5,'Taralyn Paulino','Tara','tara@paulino.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-10-08 00:00:00','2015-08-12 09:29:19','2015-08-12 09:29:19'),(6,'Mary Paulino','Mary','mary@paulino.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-07-19 00:00:00','2015-08-12 09:29:46',NULL),(7,'Testing Tester','Tester','test@testing.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-01-01 00:00:00','2015-08-12 09:03:57','2015-08-12 09:03:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-12 20:02:48
