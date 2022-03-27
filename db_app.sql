-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2022 at 04:41 PM
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
-- Table structure for table `dewan`
--

CREATE TABLE `dewan` (
  `id_dewan` int(11) NOT NULL,
  `nama_dewan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dewan`
--

INSERT INTO `dewan` (`id_dewan`, `nama_dewan`) VALUES
(1, 'Koinonia'),
(2, 'Marturia'),
(3, 'Diakonia');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Pendeta Resort'),
(2, 'Pendeta'),
(3, 'Ketua'),
(4, 'Parartaon'),
(5, 'Sekretaris'),
(6, 'Bendahara'),
(7, 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_ibadah`
--

CREATE TABLE `jadwal_ibadah` (
  `id` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nama_jadwal` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `UpdateBy` varchar(255) NOT NULL,
  `UpdateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_ibadah`
--

INSERT INTO `jadwal_ibadah` (`id`, `id_jenis`, `nama_jadwal`, `hari`, `keterangan`, `UpdateBy`, `UpdateDate`) VALUES
(1, 2, 'Jadwal Ibdah mingguan', 'Senin', 'Pukul 07.00 WIB Bahasa Indonesia\r\n', 'admin', '2022-03-25 18:01:20'),
(2, 1, 'Ibadah Lingkungan 2', 'Minggu', 'sip sip', 'admin', '2022-03-25 18:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_jadwalibadah`
--

CREATE TABLE `jenis_jadwalibadah` (
  `id_jenis` int(11) NOT NULL,
  `keterangan_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_jadwalibadah`
--

INSERT INTO `jenis_jadwalibadah` (`id_jenis`, `keterangan_jenis`) VALUES
(1, 'Ibadah Mingguan'),
(2, 'Ibadah Lingkungan'),
(3, 'Ibadah Perkumpulan');

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
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `nama_organisasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `nama_organisasi`) VALUES
(1, 'Pendeta'),
(2, 'Fungsionaris'),
(3, 'Dewan');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `pdf_doc` varchar(255) NOT NULL,
  `Uraian` varchar(255) NOT NULL,
  `Penerimaan` float NOT NULL,
  `Pengeluaran` float NOT NULL,
  `Saldo` float NOT NULL,
  `UpdateBy` varchar(255) NOT NULL,
  `UpdateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `Tanggal`, `pdf_doc`, `Uraian`, `Penerimaan`, `Pengeluaran`, `Saldo`, `UpdateBy`, `UpdateDate`) VALUES
(1, '2022-03-24', 'TES.pdf', 'tes1', 1200000, 0, 1200000, 'admin', '2022-03-24 15:12:03'),
(2, '2022-03-24', 'tes.pdf', 'tes2', 0, 100000, 1100000, 'admin', '2022-03-24 15:12:03'),
(3, '2022-03-24', 'TES.pdf', 'tes1', 200000, 0, 1300000, 'admin', '2022-03-24 15:12:03'),
(7, '2022-03-24', 'SAMPLE_PDF1.pdf', 'asas', 1145660, 0, 2445660, 'admin', '2022-03-24 22:02:04'),
(8, '2022-03-24', 'SAMPLE_PDF3.pdf', 'tessssssss', 0, 3489760, -1044100, 'admin', '2022-03-24 22:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `profile_gereja`
--

CREATE TABLE `profile_gereja` (
  `id` int(11) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `Judul` varchar(255) NOT NULL,
  `Rincian` text NOT NULL,
  `UpdateBy` varchar(255) NOT NULL,
  `UpdateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_gereja`
--

INSERT INTO `profile_gereja` (`id`, `img_url`, `Judul`, `Rincian`, `UpdateBy`, `UpdateDate`) VALUES
(1, 'blog-inside-post.jpg', 'Dolorum optio tempore voluptas dignissimos ', 'Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta. Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.\r\n\r\nSit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate\r\n\r\nSed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat. Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque. Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora', 'admin', '2022-03-25 11:53:56'),
(2, 'blog-recent-4.jpg', 'Et quae iure vel ut odit alias.', 'Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui. Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea. Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.', 'admin', '2022-03-25 11:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `renungan_harian`
--

CREATE TABLE `renungan_harian` (
  `id` int(11) NOT NULL,
  `Renungan` text NOT NULL,
  `UpdateBy` varchar(255) NOT NULL,
  `UpdateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renungan_harian`
--

INSERT INTO `renungan_harian` (`id`, `Renungan`, `UpdateBy`, `UpdateDate`) VALUES
(1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat, sit architecto officiis, mollitia ex incidunt nemo sint expedita dolor fugiat neque, provident voluptatibus repudiandae optio! \r\n\r\nIllum dignissimos, hic nihil veniam distinctio reprehenderit, possimus ut tempore eveniet nam facere nesciunt laudantium quidem, suscipit harum nobis dicta quasi delectus! ', 'admin', '2022-03-23 20:01:51');

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
(7, 'kakak', 'INI SUBJECT DARI APAU', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, nostrum in pariatur beatae modi repellendus suscipit dolorum explicabo! Est dignissimos temporibus odit quaerat officia suscipit reprehenderit quae blanditiis hic similique.', 1, 'admin', '2022-03-19 17:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `seksi`
--

CREATE TABLE `seksi` (
  `id_seksi` int(11) NOT NULL,
  `id_dewan` int(11) NOT NULL,
  `nama_seksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seksi`
--

INSERT INTO `seksi` (`id_seksi`, `id_dewan`, `nama_seksi`) VALUES
(1, 1, 'Seksi Sekolah Minggu'),
(2, 1, 'Pendamping Pra-Remaja'),
(3, 1, 'Seksi Remaja'),
(4, 1, 'Pendamping Remaja'),
(5, 1, 'Seksi Naposobulung'),
(6, 1, 'Seksi Perempuan'),
(7, 1, 'Seksi Ama'),
(8, 1, 'Seksi Lansia'),
(9, 2, 'Seksi Sending'),
(10, 2, 'Seksi Musik'),
(11, 3, 'Seksi Diakoni Sosial'),
(12, 3, 'Seksi Pendidikan'),
(13, 3, 'Seksi Kemasyarakatan'),
(14, 3, 'Seksi Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `is_seksi` tinyint(1) DEFAULT NULL,
  `id_organisasi` int(11) NOT NULL,
  `id_dewan` int(11) DEFAULT NULL,
  `id_seksi` int(11) DEFAULT NULL,
  `id_jabatan` int(11) NOT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `Nama`, `is_seksi`, `id_organisasi`, `id_dewan`, `id_seksi`, `id_jabatan`, `no_telp`, `img_url`) VALUES
(1, 'Tirta Wapasha Wibowo', 0, 1, NULL, NULL, 1, '08123123123', 'avatar.png'),
(2, 'Andew Aditya Gultom', 0, 1, NULL, NULL, 2, '08123123123', 'avatar3.png'),
(3, 'Kevin Sinurat', 0, 2, NULL, NULL, 4, '0181231231231', 'avatar4.png'),
(4, 'Bistok Hutauruk', 0, 2, NULL, NULL, 5, '081432123123', 'avatar5.png'),
(5, 'Manggala Pasaribu', 0, 3, NULL, NULL, 3, '08123123123', 'avatar6.png'),
(6, 'Iwan Monang Sihite', 0, 3, NULL, NULL, 5, '0222222123', 'avatar51.png'),
(7, 'Ehecatl Shenandoah Aucaman', 1, 3, 2, 9, 3, '0819876554331', 'avatar1.png'),
(8, 'Cahya Bagus Goyathlay', 1, 3, 3, 12, 7, '08123123123', 'avatar21.png'),
(9, 'aswe aswwer asdf', 0, 2, 0, 0, 6, '0121231213', 'avatar2.png'),
(10, 'Bonar Sihotang', 1, 3, 2, 10, 6, '080989999', 'avatar41.png');

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
-- Table structure for table `warta_jemaat`
--

CREATE TABLE `warta_jemaat` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `pdf_doc` varchar(255) NOT NULL,
  `UpdateBy` varchar(255) NOT NULL,
  `UpdateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warta_jemaat`
--

INSERT INTO `warta_jemaat` (`id`, `Judul`, `pdf_doc`, `UpdateBy`, `UpdateDate`) VALUES
(5, 'sample0', 'SAMPLE_PDF2.pdf', 'admin', '2022-03-24 01:13:42'),
(6, 'Sampel 23', 'SAMPLE_PDF.pdf', 'admin', '2022-03-24 01:14:18');

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
-- Indexes for table `dewan`
--
ALTER TABLE `dewan`
  ADD PRIMARY KEY (`id_dewan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jadwal_ibadah`
--
ALTER TABLE `jadwal_ibadah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_jadwalibadah`
--
ALTER TABLE `jenis_jadwalibadah`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kontak_pengurus`
--
ALTER TABLE `kontak_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_gereja`
--
ALTER TABLE `profile_gereja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renungan_harian`
--
ALTER TABLE `renungan_harian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran_komentar`
--
ALTER TABLE `saran_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seksi`
--
ALTER TABLE `seksi`
  ADD PRIMARY KEY (`id_seksi`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warta_jemaat`
--
ALTER TABLE `warta_jemaat`
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
-- AUTO_INCREMENT for table `dewan`
--
ALTER TABLE `dewan`
  MODIFY `id_dewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal_ibadah`
--
ALTER TABLE `jadwal_ibadah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_jadwalibadah`
--
ALTER TABLE `jenis_jadwalibadah`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontak_pengurus`
--
ALTER TABLE `kontak_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile_gereja`
--
ALTER TABLE `profile_gereja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `renungan_harian`
--
ALTER TABLE `renungan_harian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saran_komentar`
--
ALTER TABLE `saran_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seksi`
--
ALTER TABLE `seksi`
  MODIFY `id_seksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `warta_jemaat`
--
ALTER TABLE `warta_jemaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warta_terkini`
--
ALTER TABLE `warta_terkini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
