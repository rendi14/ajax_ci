-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for user
CREATE DATABASE IF NOT EXISTS `user` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `user`;

-- Dumping structure for table user.kewarganegaraan
CREATE TABLE IF NOT EXISTS `kewarganegaraan` (
  `id_kewarganegaraan` int(11) NOT NULL AUTO_INCREMENT,
  `code_negara` varchar(255) NOT NULL,
  `nama_negara` varchar(255) NOT NULL,
  `ibu_kota` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kewarganegaraan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table user.kewarganegaraan: ~1 rows (approximately)
DELETE FROM `kewarganegaraan`;
/*!40000 ALTER TABLE `kewarganegaraan` DISABLE KEYS */;
INSERT INTO `kewarganegaraan` (`id_kewarganegaraan`, `code_negara`, `nama_negara`, `ibu_kota`, `status`) VALUES
	(1, '32', 'dsd', 'vcxc', '1');
/*!40000 ALTER TABLE `kewarganegaraan` ENABLE KEYS */;

-- Dumping structure for table user.master_user
CREATE TABLE IF NOT EXISTS `master_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table user.master_user: ~1 rows (approximately)
DELETE FROM `master_user`;
/*!40000 ALTER TABLE `master_user` DISABLE KEYS */;
INSERT INTO `master_user` (`id`, `nama`, `nik`, `alamat`, `status`, `kewarganegaraan`) VALUES
	(1, 're', '123', 'weew', '1', '1');
/*!40000 ALTER TABLE `master_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
