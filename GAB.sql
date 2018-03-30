-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: gab
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appointment` (
  `apptID` int(11) NOT NULL AUTO_INCREMENT,
  `services` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `invUsed` varchar(45) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `bill` int(11) DEFAULT NULL,
  `patID` int(10) unsigned NOT NULL,
  `dentID` int(11) NOT NULL,
  PRIMARY KEY (`apptID`),
  UNIQUE KEY `apptID_UNIQUE` (`apptID`),
  UNIQUE KEY `services_UNIQUE` (`services`),
  KEY `patID` (`patID`),
  KEY `dentID` (`dentID`),
  CONSTRAINT `apptDentID` FOREIGN KEY (`dentID`) REFERENCES `dentist` (`dentID`) ON UPDATE CASCADE,
  CONSTRAINT `apptPatID` FOREIGN KEY (`patID`) REFERENCES `patients` (`patID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment`
--

LOCK TABLES `appointment` WRITE;
/*!40000 ALTER TABLE `appointment` DISABLE KEYS */;
/*!40000 ALTER TABLE `appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dental_clinic_assistant`
--

DROP TABLE IF EXISTS `dental_clinic_assistant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dental_clinic_assistant` (
  `asstID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `asstTelNO` varchar(45) NOT NULL,
  PRIMARY KEY (`asstID`),
  UNIQUE KEY `asstID_UNIQUE` (`asstID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dental_clinic_assistant`
--

LOCK TABLES `dental_clinic_assistant` WRITE;
/*!40000 ALTER TABLE `dental_clinic_assistant` DISABLE KEYS */;
/*!40000 ALTER TABLE `dental_clinic_assistant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dentist`
--

DROP TABLE IF EXISTS `dentist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dentist` (
  `dentID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `dentTelNo` varchar(45) NOT NULL,
  `patID` int(10) unsigned NOT NULL,
  `servID` int(11) NOT NULL,
  PRIMARY KEY (`dentID`),
  UNIQUE KEY `dentID_UNIQUE` (`dentID`),
  KEY `patID` (`patID`),
  KEY `servID` (`servID`),
  CONSTRAINT `dentPatID` FOREIGN KEY (`patID`) REFERENCES `patients` (`patID`) ON UPDATE CASCADE,
  CONSTRAINT `dentServID` FOREIGN KEY (`servID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dentist`
--

LOCK TABLES `dentist` WRITE;
/*!40000 ALTER TABLE `dentist` DISABLE KEYS */;
/*!40000 ALTER TABLE `dentist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dentistservices`
--

DROP TABLE IF EXISTS `dentistservices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dentistservices` (
  `serPerformed` int(11) NOT NULL,
  `dentAssigned` varchar(45) NOT NULL,
  `timePerformed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `servDate` date NOT NULL,
  `servID` int(11) NOT NULL,
  `dentID` int(11) NOT NULL,
  KEY `servID` (`servID`),
  KEY `dentID` (`dentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dentistservices`
--

LOCK TABLES `dentistservices` WRITE;
/*!40000 ALTER TABLE `dentistservices` DISABLE KEYS */;
/*!40000 ALTER TABLE `dentistservices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `histID` int(11) NOT NULL AUTO_INCREMENT,
  `supplier` varchar(45) NOT NULL,
  `receiver` varchar(45) NOT NULL,
  `dateAdded` date NOT NULL,
  `timeAdded` varchar(45) NOT NULL,
  `invAdded` int(11) NOT NULL,
  `qtyUnused` int(11) NOT NULL,
  `invID` int(11) NOT NULL,
  PRIMARY KEY (`histID`),
  KEY `invID` (`invID`),
  CONSTRAINT `invID` FOREIGN KEY (`invID`) REFERENCES `inventory` (`invID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventory` (
  `invID` int(11) NOT NULL,
  `invName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `low_stock_quantity` int(11) NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invStatus` enum('Out of Stock','Low in Stock','Good') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`invID`),
  UNIQUE KEY `invID_UNIQUE` (`invID`),
  KEY `inventory_invid_index` (`invID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventory`
--

LOCK TABLES `inventory` WRITE;
/*!40000 ALTER TABLE `inventory` DISABLE KEYS */;
INSERT INTO `inventory` VALUES (1,'2 To 4 HOLES ADAPTER',5,50,'pcs','Low in Stock','Active'),(2,'4 TO TO',1,50,'pcs','Low in Stock','Active'),(3,'Alginate/Kromopan',11,50,'kilos','Low in Stock','Active'),(4,'Anesthesia',10,50,'pcs','Low in Stock','Active'),(5,'Applicator tips',4,50,'pcs','Good','Active'),(6,'Articulating Paper',21,50,'pcs','Low in Stock','Active'),(7,'Barbed Roach',8,50,'pcs','Good','Active'),(8,'BEAUTI-CEMENT',1,50,'pcs','Low in Stock','Active'),(9,'big diamonds finishing burr',1,50,'pcs','Low in Stock','Active'),(10,'Bite Block',8,50,'pcs','Low in Stock','Active'),(11,'Bite Wax',37,50,'pcs','Low in Stock','Active'),(12,'Bone Burrs',6,50,'pcs','Low in Stock','Active'),(13,'BONDING agent',1,50,'pcs','Low in Stock','Active'),(14,'Brackets',26,50,'set','Low in Stock','Active'),(15,'Buccal Tubes',0,50,'set','Out of Stock','Inactive'),(16,'Burr -40 round',2,50,'pcs','Low in Stock','Active'),(17,'Burrs # 368016',3,50,'pcs','Low in Stock','Active'),(18,'Burrs diamond point (FG)',5,50,'pcs','Low in Stock','Active'),(19,'Calibra esthetic Resin Cement',3,50,'pcs','Low in Stock','Active'),(20,'Castone',12,50,'pcs','Low in Stock','Active'),(21,'Cavitron',1,50,'pcs','Low in Stock','Active'),(22,'Celluloid Strip',4,50,'pcs','Low in Stock','Active'),(23,'Ceramic Brackets',4,50,'set','Low in Stock','Active'),(24,'CLOSED COIL SPRING',6,50,'pcs','Low in Stock','Active'),(25,'Coax',1,50,'packs','Low in Stock','Active'),(26,'Composite A1',1,50,'pcs','Out of Stock','Active'),(27,'Composite A2',3,50,'pcs','Low in Stock','Active'),(28,'Composite A3',3,50,'pcs','Low in Stock','Active'),(29,'Composite A3.5',4,50,'pcs','Low in Stock','Active'),(30,'Composite A30',1,50,'pcs','Good','Active'),(31,'Composite B2',2,50,'pcs','Low in Stock','Active'),(32,'Composite Bonding Agent',1,50,'pcs','Low in Stock','Active'),(33,'Composite instruments code-05703',1,50,'pcs','Low in Stock','Active'),(34,'Composite instruments code-05707',1,50,'pcs','Low in Stock','Active'),(35,'composite Inc.',11,50,'pcs','Low in Stock','Active'),(36,'CuNiTi .016 Lower',1,50,'pcs','Low in Stock','Active'),(37,'CuNiTi .12 Upper',1,50,'pcs','Low in Stock','Active'),(38,'Defoger',4,50,'pcs','Low in Stock','Active'),(39,'Dental Impression material tray',85,50,'pcs','Low in Stock','Active'),(40,'Diestone',0,50,'pcs','Out of Stock','Active'),(41,'Disposable Syringes 10cc',50,50,'pcs','Low in Stock','Active'),(42,'Dowel Posts Large',4,50,'pcs','Low in Stock','Active'),(43,'Dowel Posts Medium',4,50,'pcs','Low in Stock','Active'),(44,'Dowel Posts Short',4,50,'pcs','Low in Stock','Active'),(45,'DRIVER',1,50,'pcs','Low in Stock','Active'),(46,'Dycal',2,50,'Pair','Good','Active'),(47,'Elastic Chain',20,50,'pcs','Low in Stock','Active'),(48,'Endo Block',1,50,'pcs','Low in Stock','Active'),(49,'Etchant',1,50,'pcs','Low in Stock','Active'),(50,'EX 12',7,50,'pcs','Good','Active'),(51,'Expander Keys',13,50,'pcs','Good','Active'),(52,'Face Masks',14,50,'Boxes','Good','Active'),(53,'Fermine',1,50,'Bottles','Low in Stock','Active'),(54,'Fishbone Trrays',2,50,'pcs','Low in Stock','Active'),(55,'Fissure Burs',37,50,'pcs','Good','Active'),(56,'Flouride Gel',38,50,'pcs','Good','Active'),(57,'Flowable Composite A2',1,50,'pcs','Low in Stock','Active'),(58,'Flowable Composite A3',0,50,'pcs','Out of Stock','Active'),(59,'Flowable Composite A3.5',0,50,'pcs','Out of Stock','Active'),(60,'Forestadent wire LOWER .012',4,50,'pcs','Low in Stock','Active'),(61,'Forestadent wire UPER .012',5,50,'pcs','Low in Stock','Active'),(62,'Formocresol',1,50,'pcs','Low in Stock','Active'),(63,'gauze',0,50,'pcs','Out of Stock','Active'),(64,'Gingi Master',1,50,'pcs','Low in Stock','Active'),(65,'Gingi Master Refill',6,50,'pcs','Low in Stock','Active'),(66,'Glass Ionomer Cement GIC',0,50,'Boxes','Out of Stock','Active'),(67,'GLOVES LARGE',22,50,'Boxes','Good','Active'),(68,'GLOVES SMALL',8,50,'Boxes','Good','Active'),(69,'Goring',10,50,'Boxes','Good','Active'),(70,'GS II FIXTURE',1,50,'pcs','Low in Stock','Active'),(71,'Gun type w/ temp crown',1,50,'Set','Low in Stock','Active'),(72,'Gutta Percha 15-40',0,50,'pcs','Out of Stock','Active'),(73,'Gutta Percha 45-80',6,50,'Packs','Low in Stock','Active'),(74,'HANDPIECE HIGHSPEED / yabangbang',0,50,'pcs','Out of Stock','Active'),(75,'HANDPIECE NSK DYNALED/SURGERY',0,50,'Packs','Out of Stock','Active'),(76,'HANDPIECE NSK PANAMAX',0,50,'pcs','Out of Stock','Active'),(77,'HANDPIECE SET serial # 100300503',2,50,'set','Low in Stock','Active'),(78,'HANDPIECE SET serial # 1100300503',0,50,'set','Out of Stock','Active'),(79,'HANDPIECE SINGLE SET # 0074693',0,50,'pcs','Out of Stock','Active'),(80,'HANDPIECE SINGLE SET # 0074694',0,50,'pcs','Out of Stock','Active'),(81,'HANDPIECE SINGLE SET # 0074695',0,50,'pcs','Out of Stock','Active'),(82,'HANDPIECE SINGLE SET # 0074696',0,50,'pcs','Out of Stock','Active'),(83,'HANPIECE LUBRICANT',0,50,'pcs','Out of Stock','Active'),(84,'HANDPIECE SINGLE SET # 0866090',0,50,'pcs','Out of Stock','Active'),(85,'Hemodent',1,50,'Bottles','Low in Stock','Active'),(86,'H-FILE 015-040',3,50,'pcs','Low in Stock','Active'),(87,'IRM',0,50,'pcs','Out of Stock','Active'),(88,'K-Files #10 21mm',11,50,'pcs','Good','Active'),(89,'Ligatice',167,50,'pcs','Good','Active'),(90,'Ligature wire',0,50,'pcs','Out of Stock','Active'),(91,'LIIDOCAINE hcl',0,50,'pcs','Out of Stock','Active'),(92,'Luminous Dappen Dish',12,50,'pcs','Good','Active'),(93,'Matrix band universal',18,50,'pcs','Good','Active'),(94,'METAPEX',1,50,'pcs','Low in Stock','Active'),(95,'Mixing Pad Big',3,50,'pcs','Low in Stock','Active'),(96,'Mixing Pad Small',0,50,'pcs','Out of Stock','Active'),(97,'Modeling compound',0,50,'pcs','Out of Stock','Active'),(98,'Molar bands',72,50,'pcs','Good','Active'),(99,'NiTi .012 lower',8,50,'pcs','Good','Active'),(100,'NiTi .012 upper',9,50,'pcs','Good','Active');
/*!40000 ALTER TABLE `inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (32,'2014_10_12_000000_create_users_table',1),(33,'2014_10_12_100000_create_password_resets_table',1),(34,'2018_03_14_074254_create_patients_table',1),(35,'2018_03_15_130305_create_inventories_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patients` (
  `patID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patientTelNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthDate` date NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medconditions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'None',
  `allergies` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'None',
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `patStatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dentID` int(11) NOT NULL,
  PRIMARY KEY (`patID`),
  UNIQUE KEY `patID_UNIQUE` (`patID`),
  KEY `dentID` (`dentID`),
  CONSTRAINT `dentID` FOREIGN KEY (`dentID`) REFERENCES `dentist` (`dentID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES (1,'Gandeza Rachel E','Marville Subdivision Irisan Baguio City','Student','9260717250','Single','0000-00-00','24','F','','','0','active','2018-03-30 06:23:40','2018-03-30 06:23:40',0),(2,'Maria Olivia Margaris','Marville Subdivision Baguio City','Security Guard','9193279345','Married','0000-00-00','35','F','','','0','active','2018-03-30 06:23:40','2018-03-30 06:23:40',0),(3,'Di Anne P Monreal','Bakakeng Sur Baguio City','Cabin Crew','9173024102','Single','1988-12-28','26','F','None','None','0','Active','2018-03-30 06:23:40','2018-03-18 03:25:19',0),(4,'Jesssie G. Bautista','Honeymonon RD Baguio City','Maintenance','9302184788','Married','0000-00-00','27','M','','','0','active','2018-03-30 06:23:40','2018-03-30 06:23:40',0),(5,'Joan Polomen','5 Assumption Corner Session road','Student','9282817870','Married','1987-09-06','34','F','None','None','0','active','2018-03-30 06:23:40','2018-03-18 04:00:14',0),(6,'Jhoairha Manaiang','68 Mabini corner Gen. Luna','Civil Engineer','9653265299','Single','0000-00-00','17','M','None','None','0','active','2018-03-30 06:23:40','2018-03-18 04:01:02',0),(7,'Magilyn Lim','7 Laubach Road Baguio City','Flight Attendant','9277948873','Married','0000-00-00','40','F','','','0','active','2018-03-30 06:23:40','2018-03-30 06:23:40',0),(8,'Kailey Robyn C. Bernal','129E Leonila Mill','Student','9778560101','Single','0000-00-00','8','F','','','0','active','2018-03-30 06:23:40','2018-03-30 06:23:40',0),(9,'Rexelle Jun R. Bersamin','North Cambridge Condominium Bakakeng Baguio City','Security Guard','9269350953','Single','0000-00-00','23','M','','','0','active','2018-03-30 06:23:40','2018-03-30 06:23:40',0),(11,'Jay Testado','55 Simisimi Compound Ambuclao Rd. Pacdal Baguio City','Dentist','09586056545','Single','1997-07-05','20','M','None','None','0','Active','2018-03-17 22:24:09','2018-03-18 03:58:52',0);
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `payID` int(11) NOT NULL AUTO_INCREMENT,
  `datePaid` date NOT NULL,
  `amount` int(11) NOT NULL,
  `receive` varchar(45) NOT NULL,
  `apptID` int(11) NOT NULL,
  PRIMARY KEY (`payID`),
  UNIQUE KEY `payID_UNIQUE` (`payID`),
  KEY `apptID` (`apptID`),
  CONSTRAINT `apptID` FOREIGN KEY (`apptID`) REFERENCES `appointment` (`apptID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `record` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `dentist` varchar(45) NOT NULL,
  `servPeformed` varchar(45) NOT NULL,
  `patient` varchar(45) NOT NULL,
  `payment` int(11) NOT NULL,
  `patID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`recordID`),
  UNIQUE KEY `recordID_UNIQUE` (`recordID`),
  KEY `patID` (`patID`),
  CONSTRAINT `patID` FOREIGN KEY (`patID`) REFERENCES `patients` (`patID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `record`
--

LOCK TABLES `record` WRITE;
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
/*!40000 ALTER TABLE `record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule` (
  `schedID` int(11) NOT NULL AUTO_INCREMENT,
  `scheduledDate` date NOT NULL,
  `timeFrom` time NOT NULL,
  `timeTo` time NOT NULL,
  `patID` int(11) unsigned NOT NULL,
  `invID` int(11) NOT NULL,
  PRIMARY KEY (`schedID`),
  UNIQUE KEY `schedID` (`schedID`),
  KEY `patID` (`patID`),
  KEY `invID` (`invID`),
  CONSTRAINT `schedForeignKetInv` FOREIGN KEY (`invID`) REFERENCES `inventory` (`invID`) ON UPDATE CASCADE,
  CONSTRAINT `schedForeignKeyPat` FOREIGN KEY (`patID`) REFERENCES `patients` (`patID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serperinventory`
--

DROP TABLE IF EXISTS `serperinventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serperinventory` (
  `invQty` int(11) NOT NULL,
  `service` varchar(45) NOT NULL,
  `invID` int(11) NOT NULL,
  `servID` int(11) NOT NULL,
  KEY `invID_idx` (`invID`),
  KEY `servID_idx` (`servID`),
  CONSTRAINT `SIForeignkeyInv` FOREIGN KEY (`invID`) REFERENCES `inventory` (`invID`) ON UPDATE CASCADE,
  CONSTRAINT `SIForeignkeyServ` FOREIGN KEY (`servID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serperinventory`
--

LOCK TABLES `serperinventory` WRITE;
/*!40000 ALTER TABLE `serperinventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `serperinventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `servID` int(11) NOT NULL AUTO_INCREMENT,
  `servname` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `invID` int(11) NOT NULL,
  PRIMARY KEY (`servID`),
  UNIQUE KEY `servID_UNIQUE` (`servID`),
  KEY `invID_idx` (`invID`),
  CONSTRAINT `servForeignKey` FOREIGN KEY (`servID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Consultation',450,0),(2,'Per-Apical Xray',450,0),(3,'Panoramic Xray',1350,0),(4,'Cephalometric Xray',1350,0),(5,'Oral Prohylaxis/Cleaning(MILD)',650,0),(6,'Oral Prohylaxis/Cleaning(MODERATE)',1000,0),(7,'Oral Prohylaxis/Cleaning(SEVERE)',2000,0),(8,'Composite Fillings (per surface)',750,0),(9,'Pit and fissure sealant',2000,0),(10,'Recementation of crowns',1000,0),(11,'Flouride treatment(Child/Adult)',5000,0),(12,'Temporary filling',750,0),(13,'Flouride varnish',1500,0),(14,'Porcelain Veneers(Zirconia)',25000,0),(15,'Porcelain Veneers(IPS-Emax)',25000,0),(16,'Porcelain Veneers(Adoro)',25000,0),(17,'Teeth whitening',15000,0),(18,'Root Canal(Simple Extraction)',550,0),(19,'Root Canal(Difficult Extraction)',1500,0),(20,'Root Canal(Odontectomy/Impaction)',6500,0),(21,'Implants',60000,0),(22,'Porcelain fused to TI-LITE',9500,0),(23,'Porcelain fused to GOLD',7500,0),(24,'All porcelain crowns (Zirconia)',25000,0),(25,'All porcelain crowns (IPS-emax)',25000,0),(26,'All porcelain crowns (Adoro)',25000,0),(27,'All plastic Biotone (Flexite)',15000,0),(28,'Stayplate-Unilateral-Trubyte(Porcelain)',25000,0),(29,'Stayplate-Unilateral-Naturadent(Porcelain)',20000,0),(30,'CompleteDenture-Ivocap-Injectable(Porcelain)',25000,0),(31,'CompleteDenture-Trubyte-Bioform(Porcelain)',25000,0),(32,'CompleteDenture-Vitanorm(Porcelain)',25000,0),(33,'CompleteDenture-Natura Dent(Porcelain)',25000,0),(34,'CompleteDenture-Vertex-High Impact(Porcelain)',750,0),(35,'CompleteDenture-Biotone(Porcelain)',750,0),(36,'CompleteDenture-Ivoclar(Porcelain)',750,0),(37,'CompleteDenture-Naturatone(Porcelain)',750,0),(38,'CompleteDenture-Denture repair(Porcelain)',750,0),(39,'CompleteDenture-Denture repair w/ impression ',1000,0),(40,'CompleteDenture-Denture reline(Porcelain)',750,0),(41,'Retainers-Ordinary',5000,0),(42,'Retainers-Ordinary w/ design',7000,0),(43,'Retainers-Invisible',7000,0),(44,'Retainers-Lingual Retainer',5000,0),(45,'Orthodontic Treatment-Simple',40000,0),(46,'Orthodontic Treatment-Moderate',50000,0),(47,'Orthodontic Treatment-Difficult',60000,0),(48,'Orthodontic Treatment-Ceramic',125000,0),(49,'Orthodontic Treatment-Daemon/Self-ligating',80000,0),(50,'Orthodontic Treatment-Lingual Braces',80000,0),(51,'Orthodontic Treatment-Invisalign',80000,0),(52,'Recementation of fallen brackets, molar bands',550,0),(53,'Replacement of fallen brackets, molar bands, ',1100,0);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serviceschedule`
--

DROP TABLE IF EXISTS `serviceschedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serviceschedule` (
  `serPref` int(11) NOT NULL,
  `schedDate` date NOT NULL,
  `schedID` int(11) NOT NULL,
  `servID` int(11) NOT NULL,
  KEY `schedID_idx` (`schedID`),
  KEY `servID_idx` (`servID`),
  CONSTRAINT `schedID` FOREIGN KEY (`schedID`) REFERENCES `schedule` (`schedID`) ON UPDATE CASCADE,
  CONSTRAINT `servID` FOREIGN KEY (`servID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serviceschedule`
--

LOCK TABLES `serviceschedule` WRITE;
/*!40000 ALTER TABLE `serviceschedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `serviceschedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Jay','jay@test.com','$2y$10$E1hb98SLMaLidfZZ3bl0D.FtTqTWvuaeTLVaoMDNi2aoPeDOdaUUG',NULL,'2018-03-18 02:08:28','2018-03-18 02:08:28');
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

-- Dump completed on 2018-03-30 16:08:01
