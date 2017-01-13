CREATE DATABASE  IF NOT EXISTS `rspa` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `rspa`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: rspa
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
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exams` (
  `examID` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(6) NOT NULL,
  `site` varchar(12) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `exam_name` varchar(40) NOT NULL,
  `institution` varchar(30) NOT NULL,
  `institution_email` varchar(40) DEFAULT NULL,
  `date_received` date NOT NULL,
  `date_due` date DEFAULT NULL,
  `fee` enum('yes','no') NOT NULL,
  `fee_specify` text,
  `timed` enum('yes','no') NOT NULL,
  `timed_specify` text,
  `books` enum('yes','no') NOT NULL,
  `books_specify` text,
  `notes` enum('yes','no') NOT NULL,
  `notes_specify` text,
  `calculator` enum('yes','no') NOT NULL,
  `calculator_specify` text,
  `dictionary` enum('yes','no') NOT NULL,
  `dictionary_specify` text,
  `return` varchar(100) DEFAULT NULL,
  `special` text,
  PRIMARY KEY (`examID`),
  FULLTEXT KEY `first_name` (`first_name`),
  FULLTEXT KEY `first_name_2` (`first_name`),
  FULLTEXT KEY `last_name` (`last_name`),
  FULLTEXT KEY `first_name_3` (`first_name`,`last_name`),
  FULLTEXT KEY `institution` (`institution`),
  FULLTEXT KEY `exam_name` (`exam_name`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exams`
--

LOCK TABLES `exams` WRITE;
/*!40000 ALTER TABLE `exams` DISABLE KEYS */;
INSERT INTO `exams` VALUES (1,'open','surprise','Timothy','Fisher','MAT142 Final','Rio Salado College','proctor.testing@riosalado.edu','2016-05-30','2016-06-30','yes','','yes','120 min','no','','no','','no','','no','','online, email, usps','special instructions'),(2,'closed','avondale','Kaylee','Simpson','CHM151 Midterm','Yavapai Community College','proctor.testing@yavapai.edu','2016-05-30','2016-06-30','yes','','yes','120 min','no','','no','','no','','no','','online','special instructions'),(3,'closed','queen creek','John','Doe','CHM130 MIDT','GCC','test@test.com','2015-05-30','2015-05-03','no','','no','','no','','no','','no','','no','','online',''),(4,'open','Tempe','Dwoadw','Wa;kldjw;','AWD','AWDAWDW','WADWAD','2016-07-03','2016-07-10','yes','','no','','no','','no','','no','','no','','USPS',''),(5,'open','Surprise','Lawdmkaw','Awlkdjaw','wd;akdw','Lwkadj;aw','aw;kdj','2016-07-04','2016-07-30','no','','no','','no','','no','','no','','no','','other','awdawdwadawd'),(6,'open','Surprise','Lawdmkaw','Awlkdjaw','wd;akdw','Lwkadj;aw','aw;kdj','2016-07-04','2016-07-30','no','','no','','no','','no','','no','','no','','other','awdawdwadawd'),(7,'open','Site','Awd','Awd','','','','2016-07-04','2016-07-25','no','','no','','no','','no','','no','','no','','online',''),(8,'open','Surprise','Dawdawd','Wadawdw','wadawd','Wadwa','wadwa','2016-07-04','2016-07-04','no','','no','','no','','no','','no','','no','','online',''),(9,'open','Surprise','Dawdawd','Wadawdw','wadawd','Wadwa','wadwa','2016-07-04','2016-07-04','no','','no','','no','','no','','no','','no','','online',''),(10,'open','Surprise','E;fk','A;lkf','e;afe','A;lkfe;',';aaef','2016-07-04','2016-07-04','no','','no','','no','','no','','no','','no','','',''),(11,'open','Tempe','Awdaw','Awdw','wadw','Wdaw','wadw','2016-07-04','2016-07-04','no','','no','','no','','no','','no','','no','','',''),(12,'open','Tempe','Awdaw','Awdw','wadw','Wdaw','wadw','2016-07-04','2016-07-04','no','','no','','no','','no','','no','','no','','',''),(13,'open','Southern','Jklawd','O;ifje','wa;dijw','Waoi;dj','a;idw;j','2016-07-04','2016-07-04','no','','no','','no','','no','','no','','no','','USPS',''),(14,'Open','Surprise','Timothy','Fisher','MAT142','Rio Salado College','timothy.fisher@riosalado.edu','1995-02-04','1995-02-04','yes','because','yes','because2','no','','no','','no','','no','','',''),(15,'Open','Surprise','Timothy','Fisher','MAT142','Rio Salado College','timothy.fisher@riosalado.edu','1995-02-04','1995-02-04','yes','because','yes','because2','no','','no','','no','','no','','',''),(16,'Open','Surprise','Timothy','Fisher','MAT142','Rio Salado College','timothy.fisher@riosalado.edu','1995-02-04','1995-02-04','yes','because','yes','because2','no','','no','','no','','no','','',''),(17,'Open','Surprise','Timothy','Fisher','MAT142','Rio Salado College','timothy.fisher@riosalado.edu','1995-02-04','1995-02-04','yes','because','yes','because2','no','','no','','no','','no','','',''),(18,'Open','Surprise','Timothy','Fisher','MAT142','Rio Salado College','timothy.fisher@riosalado.edu','1995-02-04','1995-02-04','yes','because','yes','because2','no','','no','','no','','no','','','');
/*!40000 ALTER TABLE `exams` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-13 15:34:59
