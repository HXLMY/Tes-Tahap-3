-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 08:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tahap_tiga`
--

-- --------------------------------------------------------

--
-- Table structure for table `tes_magang`
--

CREATE TABLE `tes_magang` (
  `id` int(11) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `client` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pembuatan` date NOT NULL,
  `selesai` date NOT NULL,
  `progres` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tes_magang`
--

INSERT INTO `tes_magang` (`id`, `project_name`, `client`, `email`, `pembuatan`, `selesai`, `progres`) VALUES
(4, 'Pembuatan SI Keuangan', 'Bakeuda Prov. Kalsel', 'indra.setiawan@gmail.com', '2022-01-14', '2022-12-14', '30%'),
(7, 'Learning Management System', 'Ruang Guru', 'hilman.syah@gmail.com', '2022-01-30', '2022-03-10', '80%'),
(8, 'SI Pendataan Daerah', 'Dispora Jawa Timur', 'febri.gunawan@gmail.com', '2022-02-02', '2022-03-30', '40%'),
(9, 'Employee Monitoring', 'PT. Bina Sarana Sukses', 'handoko.aji@gmail.com', '2022-01-02', '2022-01-15', '80%');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tes_magang`
--
ALTER TABLE `tes_magang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tes_magang`
--
ALTER TABLE `tes_magang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
