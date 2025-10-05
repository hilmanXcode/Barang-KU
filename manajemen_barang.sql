-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table manajemen_barang.laporan_penjualan: ~53 rows (approximately)
INSERT INTO `laporan_penjualan` (`id`, `nama_barang`, `jumlah`, `harga`, `tanggal`, `bulan`, `tahun`) VALUES
	(1, 'testing', 5, 40000, 23, 9, 2025),
	(2, 'testing2', 5, 1000, 23, 9, 2025),
	(25, 'testing2', 5, 10000, 24, 9, 2025),
	(26, 'testing2', 5, 1000, 23, 9, 2025),
	(27, 'testing2', 5, 1000, 23, 9, 2025),
	(28, 'testing2', 5, 1000, 23, 9, 2025),
	(29, 'testing2', 5, 1000, 23, 9, 2025),
	(30, 'testing2', 5, 1000, 23, 9, 2025),
	(31, 'testing2', 5, 1000, 23, 9, 2025),
	(32, 'testing2', 5, 10000, 24, 9, 2025),
	(33, 'testing2', 5, 10000, 24, 9, 2025),
	(34, 'testing2', 5, 10000, 24, 9, 2025),
	(35, 'testing2', 5, 10000, 24, 9, 2025),
	(36, 'testing2', 5, 10000, 24, 9, 2025),
	(37, 'testing2', 5, 10000, 24, 9, 2025),
	(38, 'testing', 5, 40000, 23, 9, 2025),
	(39, 'testing2', 5, 10000, 25, 9, 2025),
	(40, 'testing2', 5, 10000, 25, 9, 2025),
	(41, 'testing2', 5, 10000, 25, 9, 2025),
	(42, 'testing2', 5, 10000, 25, 9, 2025),
	(43, 'testing2', 5, 10000, 26, 9, 2025),
	(44, 'testing2', 5, 10000, 26, 9, 2025),
	(45, 'testing2', 5, 10000, 26, 9, 2025),
	(46, 'testing2', 5, 10000, 26, 9, 2025),
	(47, 'testing2', 5, 10000, 26, 9, 2025),
	(48, 'testing2', 5, 10000, 26, 9, 2025),
	(49, 'testing2', 5, 10000, 26, 9, 2025),
	(50, 'testing2', 5, 10000, 26, 9, 2025),
	(51, 'testing2', 5, 10000, 26, 9, 2025),
	(52, 'testing2', 5, 10000, 26, 9, 2025),
	(53, 'testing2', 5, 10000, 26, 9, 2025),
	(54, 'testing2', 5, 10000, 26, 9, 2025),
	(55, 'testing2', 5, 10000, 26, 9, 2025),
	(56, 'testing2', 5, 10000, 26, 9, 2025),
	(57, 'testing2', 5, 10000, 26, 9, 2025),
	(58, 'testing2', 5, 10000, 26, 9, 2025),
	(59, 'testing2', 5, 10000, 26, 9, 2025),
	(60, 'testing2', 5, 10000, 26, 9, 2025),
	(61, 'testing2', 5, 10000, 26, 9, 2025),
	(62, 'testing2', 5, 10000, 26, 9, 2025),
	(63, 'testing2', 5, 10000, 26, 9, 2025),
	(64, 'testing2', 5, 10000, 26, 9, 2025),
	(65, 'testing2', 5, 10000, 26, 9, 2025),
	(66, 'testing2', 5, 10000, 26, 9, 2025),
	(67, 'testing2', 5, 10000, 26, 9, 2025),
	(68, 'testing2', 5, 10000, 26, 9, 2025),
	(69, 'testing2', 5, 10000, 26, 9, 2025),
	(70, 'testing2', 5, 10000, 26, 9, 2025),
	(71, 'testing2', 5, 10000, 26, 9, 2025),
	(72, 'testing2', 5, 10000, 26, 9, 2025),
	(73, 'testing2', 5, 10000, 26, 9, 2025),
	(74, 'testing2', 5, 10000, 26, 9, 2025),
	(75, 'testing2', 5, 10000, 26, 9, 2025);

-- Dumping data for table manajemen_barang.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
	(1, 'admin', '$2y$10$gQTuGqtF9K44hV6DPzDgcup79q9CUzAg8DbYW2erVPgDr/9JCxppy', 'admin'),
	(2, 'user', '$2y$10$gQTuGqtF9K44hV6DPzDgcup79q9CUzAg8DbYW2erVPgDr/9JCxppy', 'user');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
