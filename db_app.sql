-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2022 at 11:16 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak_pengurus`
--

CREATE TABLE `kontak_pengurus` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `UpdateBy` varchar(255) NOT NULL,
  `UpdateDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak_pengurus`
--

INSERT INTO `kontak_pengurus` (`id`, `Username`, `Name`, `UpdateBy`, `UpdateDate`) VALUES
(8, 'admin', 'Administrator Name', 'admin', '2022-03-17 17:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `CreateAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Username`, `Email`, `PhoneNumber`, `Password`, `IsAdmin`, `IsActive`, `CreateAt`) VALUES
(1, 'Administrator Name', 'admin', 'admin@admin.com', '081234567890', '$2y$12$oxEdpBlMUBVDma1BZzG4zeo9xcRJmS7dNC2tFh7v.mZtuXfYUHbK6', 1, 1, '2022-03-08 12:06:05'),
(2, 'Rahmat', 'user', 'user@admin.com', '081234567890', '$2y$12$/io2WodEcwaoFmNFvLEg3Oc9LAXtVMR5qYWY8SK8EnQTldT4DR4sS', 0, 1, '2022-03-08 17:57:18'),
(9, 'Asyong', 'user01', 'asyong@user.com', '081234567890', '$2y$12$2AQO5NeAqPNynXSXZ/UlNu4LBrCWse03Wd/YPEHaFMen1Tmf.dY9W', 0, 1, '2022-03-11 16:41:47'),
(10, 'Ayong', 'user92', 'ayong@gmail.com', '081234567890', '$2y$12$UH.xv3qjyvyPKHhirhS3Zu6jjsqsB4TYBa2gklyxjULPwdjVL3LaO', 0, 1, '2022-03-11 16:42:41'),
(11, 'Apui', 'opop', 'apui@user.com', '081234567890', '$2y$12$7wjDPkKMFeAhDomW9bIrlO7pQiEU.PYscXfN9NSMT4O7.VRPWlbQK', 0, 1, '2022-03-11 16:48:23'),
(12, 'Apau', 'kakak', 'apau@user.com', '081234567890', '$2y$12$LBuj/L8j4B.5L6HcbLowM.z9mvjPU813sSI6zA2LRtNaA1ejALDOa', 0, 1, '2022-03-11 16:48:53'),
(13, 'Atek', 'kokok', 'atek@user.com', '081234567890', '$2y$12$eRpJnwV7XF5e.lXFoJeJJu77/aYlI/.4frxuoxq8mk62sauhGcuRa', 0, 0, '2022-03-11 16:50:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak_pengurus`
--
ALTER TABLE `kontak_pengurus`
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
-- AUTO_INCREMENT for table `kontak_pengurus`
--
ALTER TABLE `kontak_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
