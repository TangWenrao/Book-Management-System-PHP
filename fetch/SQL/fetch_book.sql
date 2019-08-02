-- MySQL dump 10.13  Distrib 8.0.14, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: fetch
-- ------------------------------------------------------
-- Server version	8.0.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `book` (
  `name` varchar(25) NOT NULL,
  `writer` varchar(35) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `ims` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES ('橘子不是唯一的水果','[英]珍妮特.温特森','新星出版社','9787802259812',8,'jz.jpg'),('未来简史','[以色列]尤瓦尔•赫拉利','中信出版集团','9787508672069',9,'wl.jpg'),('徐迪的脱发日记','汤猫','水泥厂出版集团','912314083321',10,'xd.jpg'),('C++Primer Plus','Stephen Prata / 孙建春 / 韦强 ','人民邮电出版社','9787115134165',11,'c.jpg'),('PHP从入门到脱发','ict','KFZ出版社','980076624112',12,'xd.jpg'),('资本论','【德】卡尔·海因里希·马克思','商务印书馆','9787200069716',13,'zb.jpg'),('东方快车谋杀案','[英]阿加莎·克里斯蒂 ','人民文学出版社','9787020056309',14,'df.jpg'),('你看起来好像很好吃','[日]宫西达也','北京少年儿童出版社','9787530112038',22,'nk.jpg'),('手冢治虫的佛陀','[日]手冢治虫','時報文化','9789571308760',23,'tz.jpg'),('那些古怪又让人忧心的问题','[美]兰道尔 门罗','北京联合出版公司',' 9787550248083',24,'s28051567.jpg'),('我要快乐，不必正常','[英]珍妮特·温特森 ','北京联合出版公司','9787559614988',25,'');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-01 21:18:24
