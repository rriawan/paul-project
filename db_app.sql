-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 02:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
-- Table structure for table `saran_komentar`
--

CREATE TABLE `saran_komentar` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `IsRead` tinyint(1) NOT NULL,
  `ReadBy` varchar(255) DEFAULT NULL,
  `CreateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran_komentar`
--

INSERT INTO `saran_komentar` (`id`, `Username`, `Subject`, `Message`, `IsRead`, `ReadBy`, `CreateDate`) VALUES
(1, 'user', 'TES SUBJECT 6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, laudantium? Dolor tempora numquam sint, aperiam itaque deserunt ratione totam saepe ab aliquid dolore perferendis blanditiis error veniam vero cupiditate eveniet voluptate sit, distinctio, illum laudantium magnam et similique. Voluptate sunt ipsam esse doloribus harum, in quos voluptas cum, eaque numquam corporis odio sequi optio asperiores, error aliquam autem fugit eum. Blanditiis vel corporis repellendus ab officia minima hic quisquam delectus! Excepturi culpa veniam veritatis consequatur quo. Error beatae tempora perspiciatis et quisquam, corporis, cupiditate recusandae corrupti deserunt sunt quos libero quis sint qui nemo! Eveniet doloremque, deserunt maiores rem magnam sapiente ex iste nihil quibusdam officiis, quas, repudiandae similique nisi labore. Molestias ullam voluptatem voluptas vero illo? Rem, doloribus debitis. Adipisci aperiam quod ipsa sit, maxime obcaecati autem quam distinctio nulla placeat exercitationem sapiente nostrum enim delectus aut assumenda eveniet dolor qui sed laborum sunt vel saepe rem impedit. Asperiores ratione corrupti quis, natus ad repellendus eaque dignissimos tenetur est eius sequi officiis magni quam! Veniam sunt saepe autem soluta facilis eius corrupti doloremque voluptatibus itaque, necessitatibus nam ex temporibus, quod quam harum accusantium totam nisi at? Sequi amet provident reiciendis incidunt, debitis itaque! Vitae mollitia vel eum quod molestias!', 1, 'admin', '2022-03-19 17:28:28'),
(2, 'user', 'TES SUBJECT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, nostrum in pariatur beatae modi repellendus suscipit dolorum explicabo! Est dignissimos temporibus odit quaerat officia suscipit reprehenderit quae blanditiis hic similique.', 1, 'admin', '2022-03-19 17:43:06'),
(7, 'kakak', 'INI SUBJECT DARI APAU', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, nostrum in pariatur beatae modi repellendus suscipit dolorum explicabo! Est dignissimos temporibus odit quaerat officia suscipit reprehenderit quae blanditiis hic similique.', 0, '', '2022-03-19 17:52:22');

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
(2, 'Rahmat Riawan Tes 123', 'user', 'user@admin.com', '081234567890', '$2y$12$/io2WodEcwaoFmNFvLEg3Oc9LAXtVMR5qYWY8SK8EnQTldT4DR4sS', 0, 1, '2022-03-08 17:57:18'),
(9, 'Asyong', 'user01', 'asyong@user.com', '081234567890', '$2y$12$2AQO5NeAqPNynXSXZ/UlNu4LBrCWse03Wd/YPEHaFMen1Tmf.dY9W', 0, 1, '2022-03-11 16:41:47'),
(10, 'Ayong', 'user92', 'ayong@gmail.com', '081234567890', '$2y$12$UH.xv3qjyvyPKHhirhS3Zu6jjsqsB4TYBa2gklyxjULPwdjVL3LaO', 0, 1, '2022-03-11 16:42:41'),
(11, 'Apui', 'opop', 'apui@user.com', '081234567890', '$2y$12$7wjDPkKMFeAhDomW9bIrlO7pQiEU.PYscXfN9NSMT4O7.VRPWlbQK', 0, 1, '2022-03-11 16:48:23'),
(12, 'Apau', 'kakak', 'apau@user.com', '081234567890', '$2y$12$LBuj/L8j4B.5L6HcbLowM.z9mvjPU813sSI6zA2LRtNaA1ejALDOa', 0, 1, '2022-03-11 16:48:53'),
(13, 'Atek', 'kokok', 'atek@user.com', '081234567890', '$2y$12$eRpJnwV7XF5e.lXFoJeJJu77/aYlI/.4frxuoxq8mk62sauhGcuRa', 0, 0, '2022-03-11 16:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `warta_terkini`
--

CREATE TABLE `warta_terkini` (
  `id` int(11) NOT NULL,
  `PesanWartaTerkini` text NOT NULL,
  `UpdateBy` varchar(255) NOT NULL,
  `UpdateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warta_terkini`
--

INSERT INTO `warta_terkini` (`id`, `PesanWartaTerkini`, `UpdateBy`, `UpdateDate`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\n\r\nConsequatur rem consequuntur eum ullam sequi cum nobis debitis accusantium sapiente velit autem similique maiores, consectetur quis ratione voluptas tempora molestiae. \r\n', 'admin', '2022-03-20 01:03:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak_pengurus`
--
ALTER TABLE `kontak_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran_komentar`
--
ALTER TABLE `saran_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warta_terkini`
--
ALTER TABLE `warta_terkini`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak_pengurus`
--
ALTER TABLE `kontak_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `saran_komentar`
--
ALTER TABLE `saran_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `warta_terkini`
--
ALTER TABLE `warta_terkini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;