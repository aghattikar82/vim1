-- MySQL dump 10.13  Distrib 5.5.28, for Win64 (x86)
--
-- Host: localhost    Database: vim
-- ------------------------------------------------------
-- Server version	5.5.28

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
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admission` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `s_image` varchar(45) DEFAULT NULL,
  `course` varchar(45) DEFAULT NULL,
  `aplno` varchar(45) DEFAULT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `bloodgroup` varchar(45) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `pincode` varchar(45) DEFAULT NULL,
  `p_mobile_no` varchar(45) DEFAULT NULL,
  `paddress` varchar(500) DEFAULT NULL,
  `s_mobile_no` varchar(45) DEFAULT NULL,
  `semail` varchar(100) DEFAULT NULL,
  `language` varchar(45) DEFAULT NULL,
  `sslc_reg_no` varchar(45) DEFAULT NULL,
  `income_caste_no` varchar(45) DEFAULT NULL,
  `three_seven_one_j` varchar(45) DEFAULT NULL,
  `adhar_no` varchar(45) DEFAULT NULL,
  `acno` varchar(45) DEFAULT NULL,
  `ifsc_code` varchar(45) DEFAULT NULL,
  `branch` varchar(45) DEFAULT NULL,
  `pu_image` varchar(45) DEFAULT NULL,
  `tc_image` varchar(45) DEFAULT NULL,
  `stamp_size_image` varchar(45) DEFAULT NULL,
  `regno` varchar(45) DEFAULT NULL,
  `sem` varchar(45) DEFAULT NULL,
  `present` varchar(45) DEFAULT NULL,
  `absent` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admission`
--

LOCK TABLES `admission` WRITE;
/*!40000 ALTER TABLE `admission` DISABLE KEYS */;
INSERT INTO `admission` VALUES (17,'WIN_20210603_05_27_36_Pro.jpg','bca','211','Ajay','hgfhfhgf','hgfhgfh','2222-11-22','nvnv','bvbnvb','vbnvb','hfhfhf','2121','132133','cvbcbcb','122','Sdkajdh@gmail.com','course','sdsd','fds','wda','jghghjgg','hjgjghgf','fjhfjj','jgfjfjf','WIN_20210728_14_40_06_Pro.jpg','WIN_20211215_18_38_54_Pro.jpg','WIN_20210603_05_27_36_Pro.jpg','1234',NULL,NULL,NULL),(18,'101afe00-6cc4-4032-951c-9ff9caaa34cc.jfif','bca','341344','sachin','sgsg','fgsgf','1111-11-11','b','rgg','fgdfg','dgdfgdf','3213123','63111111111','httytry','75564345454','gsfgsfg@gmail.com','course','235352352','25234524523','235252352','252352452523523','235252525','245245245','hgdfshd','222.jpg','database.png','PayPal.svg.png','1234',NULL,NULL,NULL),(19,'101afe00-6cc4-4032-951c-9ff9caaa34cc.jfif','bbm','1','shivu ','jh','hjh','1111-11-11','c','www','hhh','hhh','54','5454545','jkjkjk','887','jjjjjljl@gmail.com','course','dfs','455445',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1234',NULL,NULL,NULL);
/*!40000 ALTER TABLE `admission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbladdbook`
--

DROP TABLE IF EXISTS `tbladdbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbladdbook` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `booktype` varchar(45) DEFAULT NULL,
  `bookname` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `isbn_no` varchar(45) DEFAULT NULL,
  `publisher` varchar(45) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `published_yr` varchar(45) DEFAULT NULL,
  `edition` varchar(45) DEFAULT NULL,
  `publication_cost` varchar(45) DEFAULT NULL,
  `publication_type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbladdbook`
--

LOCK TABLES `tbladdbook` WRITE;
/*!40000 ALTER TABLE `tbladdbook` DISABLE KEYS */;
INSERT INTO `tbladdbook` VALUES (1,'book','cvxzc','cbxc','34234','xcvbxcvb','xbxvc','2131','fgfg','343','monthly'),(2,'book','test','test','7878778','test','test','12345','test','test','monthly'),(3,'book','C programming Book','program','7894','shiva','Anup','2022','4th ','12000',NULL);
/*!40000 ALTER TABLE `tbladdbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblbookissue`
--

DROP TABLE IF EXISTS `tblbookissue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblbookissue` (
  `issueid` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(45) DEFAULT NULL,
  `bookisbn` varchar(45) DEFAULT NULL,
  `issuedate` varchar(45) DEFAULT NULL,
  `returndate` varchar(45) DEFAULT NULL,
  `issuedby` varchar(45) DEFAULT NULL,
  `returnfine` int(11) DEFAULT '0',
  `returnstatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`issueid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblbookissue`
--

LOCK TABLES `tblbookissue` WRITE;
/*!40000 ALTER TABLE `tblbookissue` DISABLE KEYS */;
INSERT INTO `tblbookissue` VALUES (1,'17','1478','19-08-2022','22-08-2022','1',0,'Returned '),(2,'17','1233','20-08-2022','22-08-2022','1',0,'Damaged'),(3,'1','1234','11-11-1111','-','123',0,NULL),(4,'1234','123456','23-08-2022','-','1',0,NULL),(5,'1234','123456','23-08-2022','-','1',0,NULL),(6,'1','123451','23-08-2022','-','1',0,NULL),(7,'1234','123451','23-08-2022','-','1',0,NULL);
/*!40000 ALTER TABLE `tblbookissue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblenquiryform`
--

DROP TABLE IF EXISTS `tblenquiryform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblenquiryform` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(45) NOT NULL,
  `fullname` varchar(45) DEFAULT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `native` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `snumber` varchar(45) DEFAULT NULL,
  `pnumber` varchar(45) DEFAULT NULL,
  `stream` varchar(45) DEFAULT NULL,
  `moinstruction` varchar(45) NOT NULL,
  `puc` varchar(45) DEFAULT NULL,
  `marksscored` varchar(45) DEFAULT NULL,
  `sslc` varchar(45) DEFAULT NULL,
  `presiding` varchar(45) DEFAULT NULL,
  `aboutcollege` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `fatherage` varchar(45) DEFAULT NULL,
  `fqualification` varchar(45) DEFAULT NULL,
  `foccupation` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `motherage` varchar(45) DEFAULT NULL,
  `mqualification` varchar(45) DEFAULT NULL,
  `moccupation` varchar(45) DEFAULT NULL,
  `afincome` varchar(45) DEFAULT NULL,
  `edate` varchar(45) DEFAULT NULL,
  `Register` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblenquiryform`
--

LOCK TABLES `tblenquiryform` WRITE;
/*!40000 ALTER TABLE `tblenquiryform` DISABLE KEYS */;
INSERT INTO `tblenquiryform` VALUES (2,'course','sachin','1999-05-21','dfadjgfyj','kukjgku','khgkjgkj','6361500141','6361500142','fsdfsd','hjgukgg','kjgjkhkg','55','59','hgd','tdkuguyfu','jkhghillj','55','khvhkvk','hjfhjfj','hjvhkfkjnm','44','khjkkjjk','jkhhkk','200000','2021-02-22','Register'),(3,'course','ano','2022-12-08','a','an','a','6300000000','6300000000','bca','enlhl','puc','90','90','kal','bnan','fja','40','bjbm','mca','s','52','abjm','mca','-1','2002-12-08','Register');
/*!40000 ALTER TABLE `tblenquiryform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblfeeshead`
--

DROP TABLE IF EXISTS `tblfeeshead`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblfeeshead` (
  `fheadid` int(11) NOT NULL AUTO_INCREMENT,
  `feeshead` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fheadid`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblfeeshead`
--

LOCK TABLES `tblfeeshead` WRITE;
/*!40000 ALTER TABLE `tblfeeshead` DISABLE KEYS */;
INSERT INTO `tblfeeshead` VALUES (1,'BBM Sem Fees'),(2,'BCA Sem Fees'),(3,'B.Com Sem Fees'),(4,'Library Fees'),(5,'Prospectus Fees'),(6,'Exam Fees'),(7,'Entrance Exams Fees'),(8,'Sports & Games Fees'),(9,'Literary & Cultural Activities Fees'),(10,'Student\'s Welfare Fund'),(11,'Teacher\'s Welfare Fund'),(12,'Application Fees'),(13,'Sports Fees'),(14,'Bag'),(15,'Books'),(16,'Course Materials'),(17,'Printed Notes'),(18,'Transport'),(19,'Canteen'),(20,'Study Tour'),(21,'Stationery'),(22,'Uniforms'),(23,'STF'),(24,'Others');
/*!40000 ALTER TABLE `tblfeeshead` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblfeesmaster`
--

DROP TABLE IF EXISTS `tblfeesmaster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblfeesmaster` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(45) DEFAULT NULL,
  `year` varchar(45) DEFAULT NULL,
  `feeshead` varchar(45) DEFAULT NULL,
  `payingamount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblfeesmaster`
--

LOCK TABLES `tblfeesmaster` WRITE;
/*!40000 ALTER TABLE `tblfeesmaster` DISABLE KEYS */;
INSERT INTO `tblfeesmaster` VALUES (2,'bcom','2ndyear','3','100000'),(3,'bba','2ndyear','4','52'),(4,'bca','2ndyear','13','55'),(5,'bca','3rdyear','2','4556');
/*!40000 ALTER TABLE `tblfeesmaster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblpayfees`
--

DROP TABLE IF EXISTS `tblpayfees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblpayfees` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `course` varchar(45) DEFAULT NULL,
  `year` varchar(45) DEFAULT NULL,
  `amountpaid` float DEFAULT NULL,
  `createdate` varchar(45) DEFAULT NULL,
  `paidto` varchar(45) DEFAULT NULL,
  `softdelete` int(11) DEFAULT NULL,
  `softdeletedate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblpayfees`
--

LOCK TABLES `tblpayfees` WRITE;
/*!40000 ALTER TABLE `tblpayfees` DISABLE KEYS */;
INSERT INTO `tblpayfees` VALUES (1,'bca',NULL,'10000',NULL,NULL,NULL,NULL,NULL),(2,'bca',NULL,'10000',NULL,NULL,NULL,NULL,NULL),(3,'bca',NULL,'10000',NULL,NULL,NULL,NULL,NULL),(4,'bca',NULL,'90000',NULL,NULL,NULL,NULL,NULL),(5,'bca','3rdyear','80000',NULL,NULL,NULL,NULL,NULL),(6,'bca','3rdyear','8000',NULL,NULL,NULL,NULL,NULL),(7,'bca','3rdyear','40000',NULL,NULL,NULL,NULL,NULL),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'bca','1styear','10000',NULL,NULL,NULL,NULL,NULL),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'bca','2ndyear','',NULL,NULL,NULL,NULL,NULL),(12,'bba','2ndyear','',NULL,NULL,NULL,NULL,NULL),(13,'b.com','3rdyear','20000',NULL,NULL,NULL,NULL,NULL),(14,'bca',NULL,'',NULL,NULL,NULL,NULL,NULL),(15,'b.com',NULL,'12222',NULL,NULL,NULL,NULL,NULL),(16,'bba',NULL,'',NULL,NULL,NULL,NULL,NULL),(17,'bba',NULL,'54521',NULL,NULL,NULL,NULL,NULL),(18,'b.com',NULL,'21121',NULL,NULL,NULL,NULL,NULL),(19,'bba',NULL,'174175',NULL,NULL,NULL,NULL,NULL),(20,'b.com',NULL,'21221',NULL,NULL,NULL,NULL,NULL),(21,'b.com',NULL,'245245',NULL,NULL,NULL,NULL,NULL),(22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,'bba',NULL,'',NULL,NULL,NULL,NULL,NULL),(25,'b.com','3rdyear','',NULL,NULL,NULL,NULL,NULL),(26,'bca','2ndyear','21000',NULL,NULL,NULL,NULL,NULL),(27,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,'shiva','bca','1styear',1234,'22-08-2022','Mutya',0,'-'),(29,'sachin','b.com','3rdyear',10000,'23-08-2022','Mutya',0,'-'),(30,'zc','bba','1styear',10000,'28-08-2022','accountant',0,'-'),(31,'gyugjhbyuhj','bca','1styear',100,'29-08-2022','accountant',0,'-');
/*!40000 ALTER TABLE `tblpayfees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstaffattendence`
--

DROP TABLE IF EXISTS `tblstaffattendence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstaffattendence` (
  `staffattid` int(11) NOT NULL AUTO_INCREMENT,
  `staffid` int(11) DEFAULT NULL,
  `attendencedate` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `entrydate` varchar(45) DEFAULT NULL,
  `enteredby` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`staffattid`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstaffattendence`
--

LOCK TABLES `tblstaffattendence` WRITE;
/*!40000 ALTER TABLE `tblstaffattendence` DISABLE KEYS */;
INSERT INTO `tblstaffattendence` VALUES (32,1,'26-08-2022','1','now()','4'),(33,2,'26-08-2022','0.5','now()','4'),(34,3,'26-08-2022','0','now()','4'),(35,4,'26-08-2022','0.5','now()','4'),(36,5,'26-08-2022','0.5','now()','4'),(37,6,'26-08-2022','1','now()','4'),(38,17,'26-08-2022','1','now()','4'),(39,18,'26-08-2022','1','now()','4'),(40,19,'26-08-2022','1','now()','4'),(41,20,'26-08-2022','2','now()','4'),(42,1,'28-08-2022','0.5','now()','4'),(43,2,'28-08-2022','0','now()','4'),(44,3,'28-08-2022','0.5','now()','4'),(45,4,'28-08-2022','0','now()','4'),(46,5,'28-08-2022','0','now()','4'),(47,6,'28-08-2022','0.5','now()','4'),(48,1,'01-09-2022','0.5','now()','4'),(49,2,'01-09-2022','0','now()','4'),(50,3,'01-09-2022','0.5','now()','4'),(51,4,'01-09-2022','1','now()','4'),(52,5,'01-09-2022','0.5','now()','4'),(53,6,'01-09-2022','0.5','now()','4');
/*!40000 ALTER TABLE `tblstaffattendence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstaffleave`
--

DROP TABLE IF EXISTS `tblstaffleave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstaffleave` (
  `staffleaveid` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(45) DEFAULT NULL,
  `matter` varchar(500) DEFAULT NULL,
  `leavedate` date DEFAULT NULL,
  `noofleavedays` varchar(45) DEFAULT NULL,
  `createddate` varchar(45) DEFAULT NULL,
  `updateddate` varchar(45) DEFAULT NULL,
  `softdelete` int(11) DEFAULT NULL,
  `softdeletedate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`staffleaveid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstaffleave`
--

LOCK TABLES `tblstaffleave` WRITE;
/*!40000 ALTER TABLE `tblstaffleave` DISABLE KEYS */;
INSERT INTO `tblstaffleave` VALUES (1,'english','sickleave','2022-08-28','1','26-08-2022','26-08-2022',0,'26-08-2022'),(2,'english','sickleave','2022-08-28','1','26-08-2022','26-08-2022',0,'26-08-2022'),(3,'english','sickleave','2022-08-28','1','26-08-2022','26-08-2022',0,'26-08-2022'),(4,'123','sunday       \r\n    ','2022-09-01','1','0','0',0,'0'),(5,'english','kanad       \r\n    ','2022-09-01','1','0','0',0,'0'),(6,'1234yu','adfn       \r\n    ','2022-09-01','sdmd','01-09-2022 09:31 PM','0',0,'0'),(7,'1234yu','adfn       \r\n    ','2022-09-01','sdmd','01-09-2022 09:31 PM','0',0,'0'),(8,'21345','       wefrd\r\n    ','2022-12-12','adf','01-09-2022 09:32 PM','01-09-2022 09:32 PM',0,'0'),(9,'sag','afde       \r\n    ','2022-12-12','2','01-09-2022 09:32 PM','01-09-2022 09:32 PM',0,'01-09-2022 09:32 PM'),(10,'anup','asdf       \r\n    ','2022-12-08','fgfd','01-09-2022 11:04 PM','01-09-2022 11:04 PM',0,'01-09-2022 11:04 PM'),(11,NULL,NULL,NULL,NULL,'0','0',0,'0');
/*!40000 ALTER TABLE `tblstaffleave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstaffsubmaping`
--

DROP TABLE IF EXISTS `tblstaffsubmaping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstaffsubmaping` (
  `staffsubmapid` int(11) NOT NULL AUTO_INCREMENT,
  `staffid` varchar(45) NOT NULL,
  `subid` varchar(45) NOT NULL,
  PRIMARY KEY (`staffsubmapid`,`subid`,`staffid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstaffsubmaping`
--

LOCK TABLES `tblstaffsubmaping` WRITE;
/*!40000 ALTER TABLE `tblstaffsubmaping` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblstaffsubmaping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstudentattendence`
--

DROP TABLE IF EXISTS `tblstudentattendence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstudentattendence` (
  `studentattid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) DEFAULT NULL,
  `attendencedate` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `entrydate` varchar(45) DEFAULT NULL,
  `enteredby` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`studentattid`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstudentattendence`
--

LOCK TABLES `tblstudentattendence` WRITE;
/*!40000 ALTER TABLE `tblstudentattendence` DISABLE KEYS */;
INSERT INTO `tblstudentattendence` VALUES (38,17,'01-09-2022','2','now()','2'),(39,18,'01-09-2022','1','now()','2'),(40,19,'01-09-2022','2','now()','2'),(41,17,'02-09-2022','2','now()','2'),(42,18,'02-09-2022','1','now()','2'),(43,19,'02-09-2022','1','now()','2');
/*!40000 ALTER TABLE `tblstudentattendence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblsubjectmaster`
--

DROP TABLE IF EXISTS `tblsubjectmaster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblsubjectmaster` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `subname` varchar(45) DEFAULT NULL,
  `semister` varchar(45) DEFAULT NULL,
  `course` varchar(45) DEFAULT NULL,
  `softdelete` int(11) DEFAULT NULL,
  PRIMARY KEY (`subid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsubjectmaster`
--

LOCK TABLES `tblsubjectmaster` WRITE;
/*!40000 ALTER TABLE `tblsubjectmaster` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblsubjectmaster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userstaffregister`
--

DROP TABLE IF EXISTS `userstaffregister`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userstaffregister` (
  `staffid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `designation` varchar(45) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `workexperience` varchar(45) DEFAULT NULL,
  `mobilenumber` varchar(15) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `emailid` varchar(45) DEFAULT NULL,
  `halfdaysalary` varchar(45) DEFAULT NULL,
  `fulldaysalary` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`staffid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userstaffregister`
--

LOCK TABLES `userstaffregister` WRITE;
/*!40000 ALTER TABLE `userstaffregister` DISABLE KEYS */;
INSERT INTO `userstaffregister` VALUES (1,'SHIVU','5','puc','2','8722202312','123','ag@gmail,com',NULL,NULL),(2,'Anup','4','MCA','10YRS','9845356246','123','anup@gmail.com',NULL,NULL),(3,'shiva','1','MCA','10YRS','9845356246','123','anup@gmail.com',NULL,NULL),(4,'ajay','2','MCA','10YRS','9845356246','123','anup@gmail.com',NULL,NULL),(5,'sachin','3','MCA','10YRS','9845356246','123','anup@gmail.com',NULL,NULL),(6,'somu','6','MCA','10YRS','9845356246','123','anup@gmail.com',NULL,NULL),(7,'shivukumar','7','bca','a','9845356246','123','anup@gmail.com',NULL,NULL);
/*!40000 ALTER TABLE `userstaffregister` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-13 18:57:43
