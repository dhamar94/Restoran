-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 05:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` varchar(35) NOT NULL,
  `id_referensi` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(45) DEFAULT NULL,
  `status_detail_order` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id_detail_order`, `id_order`, `id_referensi`, `jumlah`, `keterangan`, `status_detail_order`) VALUES
(137, '5c91fa4129b45', 6, 2, NULL, NULL),
(138, '5c91fa4129b45', 5, 2, NULL, NULL),
(139, '5c9224f086651', 5, 2, NULL, NULL),
(140, '5c93097a7423c', 5, 2, NULL, NULL),
(141, '5c930c65ef607', 6, 2, NULL, NULL),
(142, '5c9311356ffb2', 5, 2, NULL, NULL),
(143, '5c9311356ffb2', 6, 2, NULL, NULL),
(144, '5c9318528c9b2', 5, 2, NULL, NULL),
(158, '5c9310ea2d221', 5, 2, NULL, NULL),
(159, '5c9310ea2d221', 6, 2, NULL, NULL),
(160, '5c936f8399141', 5, 2, NULL, NULL),
(161, '5c936f8399141', 6, 4, NULL, NULL),
(162, '5c936fa1dc43d', 6, 2, NULL, NULL),
(163, '5c98d9f46c08e', 6, 2, NULL, NULL),
(164, '5c98daa6067ee', 6, 4, NULL, NULL),
(165, '5c9d3d9aa10b3', 5, 2, NULL, NULL),
(166, '5c9d3d9aa10b3', 5, 2, NULL, NULL),
(167, '5c9d63ececfbb', 5, 1, NULL, NULL),
(168, '5c9d90be1fb65', 6, 5, NULL, NULL),
(169, '5c9d90be1fb65', 5, 2, NULL, NULL),
(175, '5c9ecd5113063', 6, 2, NULL, NULL),
(176, '5c9ecdd7a752d', 8, 4, NULL, NULL),
(177, '5c9ecdd7a752d', 5, 3, NULL, NULL),
(178, '5c9f0c4a53368', 5, 1, NULL, NULL),
(179, '5c9f0d7dccf1e', 6, 2, NULL, NULL),
(180, '5ca038f3916d3', 6, 2, NULL, NULL),
(181, '5ca04d41967c9', 6, 2, NULL, NULL),
(182, '5ca04d41967c9', 5, 1, NULL, NULL),
(183, '5ca1678bdf77f', 6, 2, NULL, NULL),
(186, '5ca19e7c8055f', 5, 2, NULL, NULL),
(187, '5ca1ae9e8e320', 6, 2, NULL, NULL),
(191, '5ca6caccb0f0b', 5, 1, NULL, NULL),
(192, '5ca6caccb0f0b', 6, 1, NULL, NULL),
(193, '5ca6caccb0f0b', 8, 1, NULL, NULL),
(194, '5ca6ccd6196ca', 6, 1, NULL, NULL),
(195, '5ca6d1e04ddc4', 8, 4, NULL, NULL),
(196, '5ca6d262e7f14', 6, 1, NULL, NULL),
(204, '5ca70b261aa5b', 8, 2, NULL, NULL),
(205, '5ca71775ec328', 6, 4, NULL, NULL),
(206, '5ca71a2771333', 6, 3, NULL, NULL),
(207, '5ca71aa3beecf', 8, 1, NULL, NULL),
(212, '5ca71d148b683', 6, 4, NULL, NULL),
(213, '5ca73e8f63e55', 6, 2, NULL, NULL),
(214, '5ca73e8f63e55', 8, 2, NULL, NULL),
(215, '5ca77f2d9a26c', 6, 2, NULL, NULL),
(218, '5ca77f2d9a26c', 8, 2, NULL, NULL),
(229, '5ca827ae495d6', 6, 3, NULL, NULL),
(230, '5ca827ae495d6', 8, 2, NULL, NULL),
(231, '5ca828a3df6c5', 5, 2, NULL, NULL),
(232, '5ca828a3df6c5', 8, 2, NULL, NULL),
(233, '5ca85bbed8dcd', 5, 1, NULL, NULL),
(234, '5ca85bbed8dcd', 6, 1, NULL, NULL),
(235, '5ca958ea7278c', 6, 2, NULL, NULL),
(236, '5ca958ea7278c', 5, 3, NULL, NULL),
(237, '5ca958ea7278c', 8, 3, NULL, NULL),
(238, '5ca9d1afbde23', 5, 4, NULL, NULL),
(239, '5cad5ce52f6c8', 6, 3, NULL, NULL),
(240, '5cad5ce52f6c8', 8, 2, NULL, NULL),
(241, '5cad83d053472', 5, 2, NULL, NULL),
(242, '5cad83d053472', 9, 1, NULL, NULL),
(243, '5cad841664273', 5, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`id_level`, `nama_level`) VALUES
(1, 'Administrator'),
(2, 'Owner'),
(3, 'Kasir'),
(4, 'Waiter'),
(5, 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` varchar(35) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `keterangan` varchar(15) DEFAULT NULL,
  `status_order` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `no_meja`, `tanggal`, `id_user`, `keterangan`, `status_order`) VALUES
('5c91fa4129b45', 1, '2019-03-20', 12, 'lorem', 'sudah di proses'),
('5c9224f086651', 2, '2019-03-20', 12, 'lorlem', 'sudah di proses'),
('5c93097a7423c', 1, '2019-12-21', 12, 'lorem', 'selesai'),
('5c930c65ef607', 2, '2019-12-21', 12, 'lroem', 'selesai'),
('5c9310ea2d221', 2, '2019-03-21', 12, 'kjkj', 'selesai'),
('5c9311356ffb2', 8, '2019-03-21', 12, 'lorem', 'selesai'),
('5c9318528c9b2', 4, '2018-12-11', 12, 'lorem', 'selesai'),
('5c936f8399141', 12, '2019-03-21', 12, 'lroem', 'sudah di proses'),
('5c936fa1dc43d', 1, '2019-03-21', 12, 'lorm', 'sudah di proses'),
('5c98d9f46c08e', 1, '2019-03-25', 12, 'lroem', 'selesai'),
('5c98daa6067ee', 2, '2019-03-25', 12, 'lre', 'selesai'),
('5c9d3d9aa10b3', 2, '2019-03-28', 12, 'martabak', 'selesai'),
('5c9d63ececfbb', 2, '2019-03-29', 21, 'asda', 'selesai'),
('5c9d90be1fb65', 9, '2019-03-29', 12, 'bjh', 'selesai'),
('5c9ecd5113063', 1, '2019-03-30', 12, 'lorem', 'selesai'),
('5c9ecdd7a752d', 12, '2019-03-30', 12, 'banyak', 'selesai'),
('5c9f0c4a53368', 2, '2019-03-30', 12, 'langsung', 'selesai'),
('5c9f0d7dccf1e', 2, '2019-03-30', 12, 'langsung', 'selesai'),
('5ca038f3916d3', 1, '2019-03-31', 12, 'lorem', 'selesai'),
('5ca04d41967c9', 1, '2019-03-31', 12, 'laosd', 'selesai'),
('5ca1678bdf77f', 1, '2019-04-01', 12, 'lorem', 'selesai'),
('5ca19e7c8055f', 1, '2019-04-01', 21, 'asdkn', 'selesai'),
('5ca1ae9e8e320', 1, '2019-04-01', 12, 'dsfb', 'selesai'),
('5ca6caccb0f0b', 1, '2019-04-05', 5, 'ket', 'belum di proses'),
('5ca6ccd6196ca', 3924, '2019-04-05', 5, 'ket', 'belum di proses'),
('5ca6cd271b46d', 3924, '2019-04-05', 5, 'ket', 'belum di proses'),
('5ca6d1e04ddc4', 234, '2019-04-05', 5, 'ket', 'belum di proses'),
('5ca6d262e7f14', 230, '2019-04-05', 5, 'skdf', 'belum di proses'),
('5ca70b261aa5b', 19, '2019-04-05', 5, 'sjfsdbfdsf', 'selesai'),
('5ca71775ec328', 203, '2019-04-05', 5, 'sdnfs', 'sudah di proses'),
('5ca71a2771333', 23, '2019-04-05', 5, 'mnsdf', 'sudah di proses'),
('5ca71aa3beecf', 23, '2019-04-05', 5, 'sfjsd', 'sudah di proses'),
('5ca71d148b683', 2034, '2019-04-05', 5, 'SLDFN', 'sudah di proses'),
('5ca73e8f63e55', 1, '2019-04-05', 12, 'loerm', 'selesai'),
('5ca77f2d9a26c', 10, '2019-04-05', 5, 'ket', 'belum di proses'),
('5ca827ae495d6', 1, '2019-04-06', 5, 'dasjd', 'selesai'),
('5ca828a3df6c5', 2, '2019-04-06', 21, 'lerem', 'selesai'),
('5ca85bbed8dcd', 10, '2019-04-06', 5, 'ksad', 'belum di proses'),
('5ca958ea7278c', 12, '2019-04-07', 5, 'andasdasd', 'belum di proses'),
('5ca9d1afbde23', 24, '2019-04-07', 5, 'kndf', 'selesai'),
('5cad5ce52f6c8', 1, '2019-04-10', 5, 'kafsdf', 'belum di proses'),
('5cad83d053472', 1, '2019-04-10', 12, 'di bungkus', 'selesai'),
('5cad841664273', 2, '2019-04-10', 21, 'lorem', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_order` varchar(35) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `id_order`, `nama`, `no_hp`, `alamat`) VALUES
(1, '5', 'harithya', 98923923, 'bandung'),
(2, '5', 'hari', 302, 'asl'),
(3, '5ca6c652325a9', 'harithya wisesa', 1328328, 'bandung'),
(4, '5ca6c68d031ad', 'sdf', 32, 'sdkf'),
(5, '5ca6c717abedb', 'asd', 334, 'slf'),
(6, '5ca6c7a8e4c34', 'ha', 2139, 'kdsf'),
(7, '5ca6ca3c41f98', 'har', 923, 'Banfun'),
(8, '5ca6caccb0f0b', 'har', 923, 'Banfun'),
(9, '5ca6ccd6196ca', 'jsa', 9234, 'ksdfn'),
(10, '5ca6cd271b46d', 'jsa', 9234, 'ksdfn'),
(11, '5ca6d1e04ddc4', 'asj', 34324, '34dsfn'),
(12, '5ca6d262e7f14', 'hsfd', 3, 'kksdf'),
(13, '5ca6d9724845d', 'jhasd', 3975, 'owe'),
(14, '5ca70628c5208', 'sjdf', 2034, 'sdmfn'),
(15, '5ca70b261aa5b', 'harithya', 293, 'asjd'),
(16, '5ca71775ec328', 'harit', 239, 'wkfd'),
(17, '5ca71a2771333', '2jasb', 230, 'sdm'),
(18, '5ca71aa3beecf', 'jsdg', 23, 'jdbf'),
(19, '5ca71b10a59b3', 'dfb', 39, 'smdvn'),
(20, '5ca71c09427c4', 'asdl', 23, 'nds'),
(21, '5ca71d148b683', 'HASDL', 3, 'JDF'),
(22, '5ca71d437ac9b', 'ASD,N', 2034, 'KSDNF'),
(23, '5ca71db728584', 'ads', 230, 'knsd'),
(24, '5ca72d8de59c5', 's', 8, 'C'),
(25, '5ca77f2d9a26c', 'harithya', 192, 'bandung'),
(26, '5ca7f77a20ac8', 'harithya', 1293218, 'bandung'),
(27, '5ca811acae787', 'harithya', 2349238, 'bandung'),
(28, '5ca81234b42a3', 'ajs', 3045, 'kndg'),
(29, '5ca8128cc10a7', 'harithya', 293, 'LOREM'),
(30, '5ca812d3f048b', 'AS', 932, 'KASF'),
(31, '5ca816bb72d3c', 'harit', 324, 'abnfa'),
(32, '5ca816e3cf8a0', 'asd', 329, 'ksfn'),
(33, '5ca827ae495d6', 'harit', 497577, 'badnugn'),
(34, '5ca85bbed8dcd', 'harithya', 21, 'afn'),
(35, '5ca958ea7278c', 'hairhya', 432748, 'lorem'),
(36, '5ca9d1afbde23', 'aaskk', 203, 'nf'),
(37, '5cad5ce52f6c8', 'harit', 20348239, 'lorme');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_referensi`
--

CREATE TABLE `tbl_referensi` (
  `id_referensi` int(11) NOT NULL,
  `nama_referensi` varchar(45) NOT NULL,
  `harga` bigint(11) NOT NULL,
  `status_referensi` varchar(45) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_referensi`
--

INSERT INTO `tbl_referensi` (`id_referensi`, `nama_referensi`, `harga`, `status_referensi`, `gambar`, `kategori`) VALUES
(5, 'Mie Ayam Speisal', 12000, 'Tersedia', 'a5e476ad465d6e3ea400b6bc23b14346.jpg', 'Makanan'),
(6, 'Bakso bola dunia', 30000, 'Tersedia', 'd3f662df57b1492a442a362b7e3819a6.jpeg', 'Makanan'),
(8, 'Teh Manis', 20000, 'Tersedia', '623d996ee3a88cd84e4b11be12b089f0.jpg', 'Minuman'),
(9, 'kopi', 1777, 'Tersedia', '966f8d75ee5b328de82a51df52314292.jpg', 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` varchar(35) NOT NULL,
  `tanggal` date NOT NULL,
  `total_bayar` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_user`, `id_order`, `tanggal`, `total_bayar`) VALUES
(1, 12, '5c9224f086651', '2019-03-20', 24000),
(2, 12, '5c93097a7423c', '2019-12-21', 24000),
(3, 12, '5c930c65ef607', '2018-12-21', 40000),
(4, 12, '5c9311356ffb2', '2019-12-21', 64000),
(5, 12, '5c9318528c9b2', '2019-01-21', 24000),
(6, 12, '5c9310ea2d221', '2019-02-21', 64000),
(7, 12, '5c98d9f46c08e', '2019-03-25', 40000),
(8, 12, '5c98daa6067ee', '2018-12-25', 80000),
(9, 12, '5c9d3d9aa10b3', '2019-01-28', 48000),
(10, 20, '5c9d63ececfbb', '2019-03-29', 12000),
(11, 12, '5c9d90be1fb65', '2019-03-29', 124000),
(12, 12, '5c9ecd5113063', '2019-03-30', 40000),
(13, 12, '5c9ecdd7a752d', '2019-03-30', 76000),
(14, 12, '5c9f0c4a53368', '2019-03-30', 52000),
(15, 12, '5c9f0d7dccf1e', '2019-03-30', 40000),
(19, 12, '5ca04d41967c9', '2019-03-31', 52000),
(30, 12, '5ca1678bdf77f', '2019-04-01', 60000),
(31, 12, '5ca1ae9e8e320', '2019-04-01', 60000),
(32, 12, '5ca1ae9e8e320', '2019-04-01', 60000),
(33, 12, '5ca19e7c8055f', '2019-04-01', 24000),
(34, 12, '5ca70b261aa5b', '2019-04-05', 40000),
(35, 12, '5ca73e8f63e55', '2019-04-05', 100000),
(36, 12, '5ca827ae495d6', '2019-04-06', 130000),
(37, 20, '5ca828a3df6c5', '2019-04-06', 64000),
(38, 12, '5ca9d1afbde23', '2019-04-07', 48000),
(39, 12, '5cad83d053472', '2019-04-10', 25777),
(40, 20, '5cad841664273', '2019-04-10', 24000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(65) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_user`, `id_level`) VALUES
(5, 'user', 'alsd', 'kasd', 5),
(12, 'admin', '$2y$10$FkVuNUqjLMajr8j.JBfhC.Tff/Z/tDrmo07t2xHn3Byia/EKxGyw.', 'admin', 1),
(20, 'kasir', '$2y$10$shZSB82iKBZ530GWm/EyrO3BxwzT7np7rBS7lFZuUClfVsgXvAkfy', 'kasir', 3),
(21, 'waiter', '$2y$10$PWqVfdEq68OVf7kOcvoCXus2cE4qLFh7D8dsypv5Q2byUMKoA48jS', 'waiter', 4),
(22, 'owner', '$2y$10$xAF1qRS3fJC7piguBBLly.GfdWBtaqiH.BzKKrDKlvUEE2G02a1FG', 'owner', 2),
(23, 'a', '$2y$10$gn9Hp3EnWxqlzZ8LkpUk/.Fs53nQxNPP9DQJ2l9SAsEbwKay3ZN2.', '3485y', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_detail_order`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_referensi` (`id_referensi`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `tbl_referensi`
--
ALTER TABLE `tbl_referensi`
  ADD PRIMARY KEY (`id_referensi`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_referensi`
--
ALTER TABLE `tbl_referensi`
  MODIFY `id_referensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD CONSTRAINT `tbl_detail_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`),
  ADD CONSTRAINT `tbl_detail_order_ibfk_2` FOREIGN KEY (`id_referensi`) REFERENCES `tbl_referensi` (`id_referensi`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tbl_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
