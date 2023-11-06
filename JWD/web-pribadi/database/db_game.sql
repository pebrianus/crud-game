-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 03:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_game`
--

CREATE TABLE `tb_daftar_game` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `platform` varchar(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_daftar_game`
--

INSERT INTO `tb_daftar_game` (`id`, `judul`, `platform`, `status`, `deskripsi`) VALUES
(2, 'The Elder Scrolls V : Skyrim', 'PC', 'Tidak Tamat', 'Game masih ada, kemungkinan akan lanjut jika ada waktu'),
(3, 'Dishonored', 'PC', 'Tamat', 'Bagus sekali untuk low spec device'),
(5, 'Assassins Creed Rogue', 'PC', 'Tamat', 'Game AC terbaik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daftar_game`
--
ALTER TABLE `tb_daftar_game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftar_game`
--
ALTER TABLE `tb_daftar_game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
