-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `ID_Barang` int NOT NULL AUTO_INCREMENT,
  `ID_Kategori` int DEFAULT NULL,
  `Nama_Barang` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Harga` decimal(15,2) DEFAULT NULL,
  `Stok` int DEFAULT NULL,
  `Satuan` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID_Barang`),
  KEY `ID_Kategori` (`ID_Kategori`),
  CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`ID_Kategori`) REFERENCES `kategori_barang` (`ID_Kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `barang` (`ID_Barang`, `ID_Kategori`, `Nama_Barang`, `Harga`, `Stok`, `Satuan`) VALUES
(1,	1,	'Rembulan Tenggelam di Wajahmu',	150000.00,	20,	'pcs'),
(2,	2,	'Kaos Polos',	75000.00,	50,	'pcs'),
(3,	3,	'Cokelat',	25000.00,	100,	'pak'),
(4,	4,	'Air Putih',	15000.00,	200,	'botol'),
(5,	5,	'Kotak Makan',	45000.00,	20,	'set'),
(6,	6,	'Pensil 2B',	2000.00,	300,	'pcs'),
(7,	7,	'Lipstik Matte',	85000.00,	40,	'pcs'),
(8,	1,	'Buku Informatika',	60000.00,	25,	'pcs'),
(9,	2,	'Jaket',	120000.00,	15,	'pcs'),
(10,	3,	'Keripik Singkong',	18000.00,	50,	'pak'),
(11,	4,	'Teh Botol',	5000.00,	300,	'botol'),
(12,	5,	'Set Piring',	90000.00,	40,	'set'),
(13,	6,	'Pulpen Gel',	3000.00,	200,	'pcs'),
(14,	7,	'Foundation Cream',	125000.00,	10,	'pcs'),
(15,	1,	'Ensiklopedia',	150000.00,	12,	'pcs'),
(16,	3,	'Roti Tawar',	20000.00,	60,	'pak'),
(17,	4,	'Kopi Susu',	15000.00,	100,	'botol'),
(18,	5,	'Wajan Anti Lengket',	200000.00,	8,	'pcs'),
(19,	2,	'Celana Jeans',	180000.00,	20,	'pcs'),
(20,	7,	'Masker Wajah',	50000.00,	50,	'pcs'),
(21,	2,	'Sapu',	17000.00,	60,	'pcs'),
(200,	1,	'Kopi',	20000.00,	10,	'boks');

-- 2024-11-25 04:02:49
