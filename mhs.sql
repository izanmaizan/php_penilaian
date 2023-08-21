-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 08:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_dbnilai`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nim` varchar(8) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `nama_matkul` varchar(30) DEFAULT NULL,
  `quiz` double DEFAULT NULL,
  `uts` double DEFAULT NULL,
  `uas` double DEFAULT NULL,
  `rata` double DEFAULT NULL,
  `ket` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `nama_matkul`, `quiz`, `uts`, `uas`, `rata`, `ket`) VALUES
('210203', 'Izan', 'Bahasa C++', 92, 95, 98, 95, 'LULUS'),
('210204', 'Rani', 'Matematika', 85, 89, 78, 84, 'LULUS'),
('210205', 'Algo', 'Algoritma', 76, 67, 81, 74.67, 'LULUS'),
('210206', 'Budi', 'Fisika', 60, 70, 65, 65, 'LULUS'),
('210207', 'Citra', 'Kimia', 75, 78, 80, 77.67, 'LULUS'),
('210208', 'David', 'Biologi', 85, 90, 88, 87.67, 'LULUS'),
('210209', 'Eka', 'Sejarah', 70, 75, 72, 72.33, 'LULUS'),
('210210', 'Fandi', 'Ekonomi', 55, 60, 58, 57.67, 'TIDAK LULUS'),
('210211', 'Gita', 'Geografi', 78, 82, 80, 80, 'LULUS'),
('210212', 'Hadi', 'Sosiologi', 63, 70, 65, 66, 'LULUS'),
('210213', 'Tia', 'Penkar', 56, 76, 30, 54, 'TIDAK LULUS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
