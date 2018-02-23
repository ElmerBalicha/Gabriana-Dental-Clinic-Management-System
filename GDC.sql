-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: gabrianadentalclinic
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
  PRIMARY KEY (`apptID`),
  UNIQUE KEY `apptID_UNIQUE` (`apptID`),
  UNIQUE KEY `services_UNIQUE` (`services`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
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
  PRIMARY KEY (`dentID`),
  UNIQUE KEY `dentID_UNIQUE` (`dentID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
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
  `timePerformed` timestamp NOT NULL,
  `servDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
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
  `dateAdded` date DEFAULT NULL,
  `timeAdded` varchar(45) DEFAULT NULL,
  `invAdded` int(11) DEFAULT NULL,
  `qtyUnused` int(11) DEFAULT NULL,
  PRIMARY KEY (`histID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
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
  `invID` int(11) NOT NULL AUTO_INCREMENT,
  `invName` varchar(45) NOT NULL,
  `quantity` varchar(45) NOT NULL,
  `invStatus` enum('high in stock','low in stock','pending') NOT NULL,
  `unit` varchar(45) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`invID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventory`
--

LOCK TABLES `inventory` WRITE;
/*!40000 ALTER TABLE `inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patients` (
  `patID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `occupation` varchar(45) NOT NULL,
  `patientTelNo` varchar(45) NOT NULL,
  `status` enum('married','single','divorce','widowed') NOT NULL,
  `birthDate` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` enum('M','F') NOT NULL,
  `medConditions` varchar(45) DEFAULT NULL,
  `allergies` varchar(45) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `patStatus` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`patID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
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
  PRIMARY KEY (`payID`),
  UNIQUE KEY `payID_UNIQUE` (`payID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
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
  PRIMARY KEY (`recordID`),
  UNIQUE KEY `recordID_UNIQUE` (`recordID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
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
  PRIMARY KEY (`schedID`),
  UNIQUE KEY `schedID_UNIQUE` (`schedID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
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
  `service` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
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
  PRIMARY KEY (`servID`),
  UNIQUE KEY `servID_UNIQUE` (`servID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
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
  `schedDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serviceschedule`
--

LOCK TABLES `serviceschedule` WRITE;
/*!40000 ALTER TABLE `serviceschedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `serviceschedule` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-23 11:05:33
