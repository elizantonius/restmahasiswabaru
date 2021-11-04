-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2021 at 05:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webci`
--

-- --------------------------------------------------------

--
-- Table structure for table `databaru`
--

CREATE TABLE `databaru` (
  `id` int(11) NOT NULL,
  `npm` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jurusan` varchar(250) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `databaru`
--

INSERT INTO `databaru` (`id`, `npm`, `nama`, `jurusan`, `alamat`) VALUES
(2, 201911001, 'Abraham Victor', 'Teknik Informatika', 'ABE'),
(3, 201911007, 'Indriana Sere', 'Teknik Informatika', 'Hamadi'),
(4, 201911013, 'Radika', 'Teknik Informatika', 'APO'),
(5, 201911010, 'Nnanng Febrianto', 'Teknik Informatika', 'Aryoko'),
(6, 201915006, 'Viona Rombot', 'Sistem Informasi', 'Apo'),
(7, 201911012, 'Vanry', 'Teknik Informatika', 'Padang Bulan'),
(8, 202011018, 'Dimas', 'Teknik Informatika', 'APO Kali'),
(9, 202111009, 'Sandrak Yikwa', 'Teknik Informatika', 'Dok 5 atas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databaru`
--
ALTER TABLE `databaru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databaru`
--
ALTER TABLE `databaru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
