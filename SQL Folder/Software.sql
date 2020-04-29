-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.62 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for software
CREATE DATABASE IF NOT EXISTS `software` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `software`;

-- Dumping structure for table software.emailscam
CREATE TABLE IF NOT EXISTS `emailscam` (
  `EmailScamID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL DEFAULT '',
  `Name` varchar(50) NOT NULL DEFAULT '',
  `ScamCompany` varchar(50) DEFAULT NULL,
  `Information` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EmailScamID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table software.emailscam: ~0 rows (approximately)
/*!40000 ALTER TABLE `emailscam` DISABLE KEYS */;
/*!40000 ALTER TABLE `emailscam` ENABLE KEYS */;

-- Dumping structure for table software.scamtable
CREATE TABLE IF NOT EXISTS `scamtable` (
  `ScamID` bigint(20) NOT NULL AUTO_INCREMENT,
  `NameofScammer` varchar(25555) NOT NULL DEFAULT 'No Name Given',
  `ScamCompany` varchar(25555) NOT NULL DEFAULT 'No Company Given',
  `DateofScam` varchar(50) NOT NULL DEFAULT 'No Date Given',
  `PhoneNumber` varchar(50) NOT NULL DEFAULT 'No Number',
  PRIMARY KEY (`ScamID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table software.scamtable: ~4 rows (approximately)
/*!40000 ALTER TABLE `scamtable` DISABLE KEYS */;
/*!40000 ALTER TABLE `scamtable` ENABLE KEYS */;

-- Dumping structure for table software.scamwebsite
CREATE TABLE IF NOT EXISTS `scamwebsite` (
  `WebsiteScamID` int(11) NOT NULL,
  `WebsiteURL` varchar(255) NOT NULL DEFAULT '',
  `PhoneNumber` varchar(255) DEFAULT '',
  PRIMARY KEY (`WebsiteScamID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table software.scamwebsite: ~0 rows (approximately)
/*!40000 ALTER TABLE `scamwebsite` DISABLE KEYS */;
/*!40000 ALTER TABLE `scamwebsite` ENABLE KEYS */;

-- Dumping structure for table software.textmessagetable
CREATE TABLE IF NOT EXISTS `textmessagetable` (
  `ScamTextID` int(255) NOT NULL AUTO_INCREMENT,
  `ScamCompany` varchar(255) NOT NULL,
  `DateofScam` varchar(255) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `textmessage` varchar(255) NOT NULL,
  PRIMARY KEY (`ScamTextID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table software.textmessagetable: ~2 rows (approximately)
/*!40000 ALTER TABLE `textmessagetable` DISABLE KEYS */;
/*!40000 ALTER TABLE `textmessagetable` ENABLE KEYS */;

-- Dumping structure for table software.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table software.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
