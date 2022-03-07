-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 04:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zunngraf`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idpesan` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `date`, `idpesan`, `cost`) VALUES
(5, '2022-01-18 09:54:14', 3, 50),
(6, '2022-01-18 09:54:37', 4, 25);

-- --------------------------------------------------------

--
-- Table structure for table `listzun`
--

CREATE TABLE `listzun` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT 'default.png',
  `kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listzun`
--

INSERT INTO `listzun` (`id`, `type`, `template`, `kode`) VALUES
(5, 'cv', '06.PNG', 'C2'),
(6, 'cv', '03.PNG', 'C3'),
(7, 'poster', 'p1.png', 'P1'),
(9, 'feed', 'f1.jpg', 'F1'),
(10, 'feed', 'f4.jpg', 'F2'),
(12, 'cv', 'cv1.jpg', 'C4'),
(13, 'cv', 'cv3.jpg', 'C5'),
(14, 'cv', 'cv4.jpg', 'C6'),
(15, 'poster', 'p6.png', 'P2'),
(16, 'poster', 'p5.jpeg', 'P3'),
(17, 'poster', 'a.jpg', 'P4'),
(18, 'poster', 'p3.jpg', 'P5'),
(19, 'poster', 'p7.jpg', 'P6'),
(20, 'poster', 'p8.png', 'P7'),
(21, 'feed', 'f5.jpeg', 'F3'),
(22, 'feed', 'f2.jpeg', 'F4'),
(23, 'feed', 'f8.jpeg', 'F5'),
(24, 'feed', 'f7.jpeg', 'F6'),
(25, 'feed', 'f6.jpg', 'F7'),
(26, 'feed', 'f3.jpeg', 'F8'),
(27, 'banner', 'b1.jpg', 'B1'),
(28, 'banner', 'b3.jpeg', 'B2'),
(29, 'banner', 'b7.png', 'B3'),
(30, 'banner', 'b6.png', 'B4'),
(31, 'banner', 'b23.jpeg', 'B5'),
(32, 'banner', 'b4.jpg', 'B6'),
(33, 'banner', 'b5.png', 'B7');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idpesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `ukuran_banner` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idpesan`, `nama`, `mail`, `tipe`, `kode`, `ukuran_banner`, `jumlah`) VALUES
(3, 'asep', 'asep@mail.com', 'cv', 'C2', '-', 2),
(4, 'Ujang', 'ujang@mail.com', 'cv', 'C3', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `poto` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `tipe`, `poto`) VALUES
(13, 'faizul', '$2y$10$dOgLSGO8DHo9bbDoEdg/3OmnRIZWgMwfb0iGdaBqMqm/cO1meEyCO', 'faizulzun', 'Admin', 'default.png'),
(14, 'zul', '$2y$10$r3POPrfCsuxJs5tllWvB5uEpzxMdB7ivjWQP0m0mEKh1yM9sG/RSi', 'zulzunn', 'Guest', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpesan` (`idpesan`);

--
-- Indexes for table `listzun`
--
ALTER TABLE `listzun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idpesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `listzun`
--
ALTER TABLE `listzun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idpesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`idpesan`) REFERENCES `pesan` (`idpesan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
