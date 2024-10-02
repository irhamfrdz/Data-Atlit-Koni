-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 05:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` char(10) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `kategori_barang` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `nomor_kelas_pertandingan` varchar(255) NOT NULL,
  `asal_daerah` varchar(255) NOT NULL,
  `tinggi_badan` varchar(255) NOT NULL,
  `berat_badan` varchar(255) NOT NULL,
  `gol_darah` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto_barang` varchar(200) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `kategori_barang`, `jenis_kelamin`, `no_hp`, `nomor_kelas_pertandingan`, `asal_daerah`, `tinggi_badan`, `berat_badan`, `gol_darah`, `pekerjaan`, `pendidikan`, `email`, `foto_barang`, `tahun`) VALUES
(2236, 'BA001', 'Kikiwwww', '9', 'Laki Laki', '0812222', 'Poliwwww', 'Serangwww', '175 cmwww', '78 kgwww', 'Bwww', 'Nganggurwww', 'S3ww', 'kikiw@gmail.comwww', 'images.jpg', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barang_keluar` int(11) NOT NULL,
  `kode_transaksi` char(12) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kode_pengguna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barang_keluar`, `kode_transaksi`, `tanggal`, `kode_pengguna`) VALUES
(25, '12110001', '2021-10-17 09:45:50', 'dimas'),
(26, '12110026', '2021-10-22 09:39:12', 'admin'),
(27, '12110027', '2021-07-16 05:29:13', 'admin'),
(28, '12110028', '2021-06-18 05:29:21', 'admin'),
(29, '12110029', '2021-05-14 05:29:30', 'admin'),
(30, '12110030', '2021-04-16 05:29:37', 'admin'),
(31, '12110031', '2021-03-18 05:29:44', 'admin'),
(32, '12110032', '2021-02-17 05:29:51', 'admin'),
(33, '12110033', '2021-01-14 05:29:58', 'admin'),
(34, '12110034', '2021-10-21 05:32:00', 'admin'),
(35, '12110035', '2021-09-17 05:32:22', 'admin'),
(36, '12110036', '2021-04-14 05:32:28', 'admin'),
(37, '12110037', '2021-08-19 05:32:33', 'admin'),
(38, '12110038', '2021-10-25 01:57:15', 'admin'),
(39, '12110039', '2021-10-27 10:57:36', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barang_masuk` int(11) NOT NULL,
  `kode_transaksi` char(12) NOT NULL,
  `tanggal` datetime NOT NULL,
  `supplier` int(11) NOT NULL,
  `kode_pengguna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barang_masuk`, `kode_transaksi`, `tanggal`, `supplier`, `kode_pengguna`) VALUES
(39, '12110001', '2021-01-02 08:14:28', 0, 'admin'),
(42, '12110042', '2021-09-24 09:45:19', 0, 'dimas'),
(43, '12110043', '2021-04-23 05:23:27', 0, 'admin'),
(44, '12110044', '2021-05-21 05:23:35', 0, 'admin'),
(45, '12110045', '2021-10-23 05:23:41', 0, 'admin'),
(46, '12110046', '2021-06-16 05:23:56', 0, 'admin'),
(47, '12110047', '2021-08-20 05:24:13', 0, 'admin'),
(48, '12110048', '2021-01-14 05:26:58', 0, 'admin'),
(50, '12110050', '2021-10-23 05:27:17', 0, 'admin'),
(51, '12110051', '2021-09-10 05:27:25', 0, 'admin'),
(52, '12110052', '2021-07-16 05:27:32', 0, 'admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_barang_keluar`
-- (See below for the actual view)
--
CREATE TABLE `data_barang_keluar` (
`kode_transaksi` char(12)
,`tanggal` date
,`kode_barang` char(10)
,`qty` decimal(32,0)
,`harga` decimal(51,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_barang_masuk`
-- (See below for the actual view)
--
CREATE TABLE `data_barang_masuk` (
`kode_transaksi` char(12)
,`tanggal` date
,`kode_barang` char(10)
,`qty` decimal(32,0)
,`harga` decimal(51,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `detail_barang_keluar`
--

CREATE TABLE `detail_barang_keluar` (
  `id_detail_barang_keluar` int(11) NOT NULL,
  `kode_transaksi` char(10) NOT NULL,
  `kode_barang` char(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_barang_keluar`
--

INSERT INTO `detail_barang_keluar` (`id_detail_barang_keluar`, `kode_transaksi`, `kode_barang`, `qty`, `harga`) VALUES
(37, '12110001', 'B343434343', 1, 200000),
(38, '12110001', 'BSONYMDRZX', 2, 230000),
(39, '12110001', 'BLAC001', 2, 15000000),
(40, '12110026', 'B343434343', 3, 200000),
(41, '12110026', 'BSONYMDRZX', 9, 230000),
(42, '12110026', 'BLAC001', 7, 15000000),
(43, '12110027', 'B343434343', 6, 200000),
(44, '12110027', 'BSONYMDRZX', 13, 230000),
(45, '12110027', 'BLAC001', 4, 15000000),
(46, '12110028', 'B343434343', 6, 200000),
(47, '12110028', 'BSONYMDRZX', 4, 230000),
(48, '12110028', 'BLAC001', 10, 15000000),
(49, '12110029', 'B343434343', 12, 200000),
(50, '12110029', 'BSONYMDRZX', 8, 230000),
(51, '12110029', 'BLAC001', 3, 15000000),
(52, '12110030', 'B343434343', 5, 200000),
(53, '12110030', 'BSONYMDRZX', 3, 230000),
(54, '12110030', 'BLAC001', 2, 15000000),
(55, '12110031', 'B343434343', 7, 200000),
(56, '12110031', 'BSONYMDRZX', 4, 230000),
(57, '12110031', 'BLAC001', 5, 15000000),
(58, '12110032', 'B343434343', 5, 200000),
(59, '12110032', 'BSONYMDRZX', 4, 230000),
(60, '12110032', 'BLAC001', 7, 15000000),
(61, '12110033', 'B343434343', 8, 200000),
(62, '12110033', 'BSONYMDRZX', 5, 230000),
(63, '12110033', 'BLAC001', 6, 15000000),
(64, '12110034', 'B343434343', 8, 200000),
(65, '12110034', 'BSONYMDRZX', 7, 230000),
(66, '12110034', 'BLAC001', 6, 15000000),
(67, '12110035', 'B343434343', 9, 200000),
(68, '12110035', 'BSONYMDRZX', 6, 230000),
(69, '12110035', 'BLAC001', 7, 15000000),
(70, '12110036', 'B343434343', 7, 200000),
(71, '12110036', 'BSONYMDRZX', 3, 230000),
(72, '12110036', 'BLAC001', 3, 15000000),
(73, '12110037', 'B343434343', 6, 200000),
(74, '12110037', 'BSONYMDRZX', 3, 230000),
(75, '12110037', 'BLAC001', 4, 15000000),
(76, '12110038', 'B343434343', 41, 200000),
(77, '12110039', 'BSONYMDRZX', 2, 230000),
(78, '12110039', 'BLAC001', 17, 15000000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_barang_masuk`
--

CREATE TABLE `detail_barang_masuk` (
  `id_detail_barang_masuk` int(11) NOT NULL,
  `kode_transaksi` char(10) NOT NULL,
  `kode_barang` char(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_barang_masuk`
--

INSERT INTO `detail_barang_masuk` (`id_detail_barang_masuk`, `kode_transaksi`, `kode_barang`, `qty`, `harga`) VALUES
(61, '12110001', 'B343434343', 2, 150000),
(62, '12110001', 'BLAC001', 4, 13000000),
(63, '12110001', 'BSONYMDRZX', 2, 210000),
(69, '12110042', 'B343434343', 2, 150000),
(70, '12110042', 'BLAC001', 2, 13000000),
(71, '12110042', 'BSONYMDRZX', 1, 210000),
(72, '12110043', 'B343434343', 22, 150000),
(73, '12110043', 'BSONYMDRZX', 20, 210000),
(74, '12110043', 'BLAC001', 13, 13000000),
(75, '12110044', 'BSONYMDRZX', 14, 210000),
(76, '12110044', 'BLAC001', 10, 13000000),
(77, '12110045', 'B343434343', 23, 150000),
(78, '12110046', 'BSONYMDRZX', 12, 210000),
(79, '12110046', 'BLAC001', 12, 13000000),
(80, '12110047', 'B343434343', 16, 150000),
(81, '12110047', 'BSONYMDRZX', 13, 210000),
(82, '12110047', 'BLAC001', 15, 13000000),
(83, '12110048', 'B343434343', 16, 150000),
(84, '12110048', 'BSONYMDRZX', 26, 210000),
(85, '12110048', 'BLAC001', 5, 13000000),
(89, '12110050', 'B343434343', 14, 150000),
(90, '12110050', 'BSONYMDRZX', 12, 210000),
(91, '12110050', 'BLAC001', 5, 13000000),
(92, '12110051', 'BSONYMDRZX', 18, 210000),
(93, '12110051', 'BLAC001', 12, 13000000),
(94, '12110052', 'B343434343', 5, 150000),
(95, '12110052', 'BSONYMDRZX', 5, 210000),
(96, '12110052', 'BLAC001', 15, 13000000);

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_barang`
--

CREATE TABLE `inventaris_barang` (
  `id` varchar(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `merk_spesifikasi` varchar(255) NOT NULL,
  `banyaknya` varchar(255) NOT NULL,
  `pengadaan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris_barang`
--

INSERT INTO `inventaris_barang` (`id`, `lokasi`, `nama_barang`, `merk_spesifikasi`, `banyaknya`, `pengadaan`, `keterangan`) VALUES
('BA001', 'Ruang Kepala', 'PS4', 'Sony', '3', '2022', 'Baik'),
('BA002', 'Ruang Kepala', 'PS4', 'Sony', '3', '2022', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_kendaraan`
--

CREATE TABLE `inventaris_kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `kode_kendaraan` varchar(255) DEFAULT NULL,
  `identitas_kendaraan` varchar(255) DEFAULT NULL,
  `merk_kendaraan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `spesifikasi_kendaraan` varchar(255) DEFAULT NULL,
  `penanggung_jawab` varchar(255) DEFAULT NULL,
  `banyaknya` varchar(255) DEFAULT NULL,
  `pengadaan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris_kendaraan`
--

INSERT INTO `inventaris_kendaraan` (`id_kendaraan`, `kode_kendaraan`, `identitas_kendaraan`, `merk_kendaraan`, `tahun`, `spesifikasi_kendaraan`, `penanggung_jawab`, `banyaknya`, `pengadaan`, `keterangan`) VALUES
(6, 'A001', 'Beat', 'Honda', '2022', 'Motor', 'kikiw', '1 Unit', '2022', 'Baik'),
(7, 'A002', 'Test', 'test', 'test', 'test', 'test', 'test', 'test', 'Sedang'),
(8, 'A003', 'Yamaha22', 'yamaha', 'yamaha', 'yamaha', 'yamaha', 'yamaha', 'yamaha', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(9, 'AEROSPORT – PARAMOTOR'),
(10, 'AEROSPORT – TERJUN PAYUNG');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(120) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`, `foto`) VALUES
(8, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'SONY MDR-ZX110AP Headphone.PNG'),
(9, 'Setiawan Dimas', 'dimas', '7d49e40f4b3d8f68c19406a58303f826', 'user', 'celana_panjang.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `retur`
--

CREATE TABLE `retur` (
  `id_retur` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `no_invoice` char(9) NOT NULL,
  `kode_produk` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `stok_barang_keluar`
-- (See below for the actual view)
--
CREATE TABLE `stok_barang_keluar` (
`kode_barang` char(10)
,`stok` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `stok_barang_masuk`
-- (See below for the actual view)
--
CREATE TABLE `stok_barang_masuk` (
`kode_barang` char(10)
,`stok` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `kode_supplier` char(9) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `no_telp` char(14) NOT NULL,
  `email` varchar(355) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `ttl` varchar(355) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `kode_supplier`, `nama_supplier`, `no_telp`, `email`, `alamat_supplier`, `ttl`, `status`) VALUES
(15, '12132', 'PT Natan Jaya', '0898324324787', '', 'jl natan no 44', '', 1),
(16, '23432', 'PT MAKMUR JAYA', '08223943434', '', '', '', 1),
(17, '123321', 'Wwwww', '08392334211', 'kikiw@gmail.com', 'wwww', 'serang, 21 agustus 2001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `tipe`) VALUES
(18, '2021-10-12 12:19:12', 1),
(19, '2021-10-12 12:19:32', 2),
(20, '2021-10-12 12:36:07', 1),
(21, '2021-10-13 14:52:54', 1),
(22, '2021-10-14 12:46:16', 2),
(23, '2021-10-14 13:45:42', 1),
(24, '2021-10-16 07:03:53', 2),
(25, '2021-10-16 07:04:06', 2),
(26, '2021-10-16 07:54:50', 2),
(27, '2021-10-16 08:14:28', 1),
(28, '2021-10-16 08:15:17', 1),
(29, '2021-10-17 09:44:49', 1),
(30, '2021-10-17 09:45:19', 1),
(31, '2021-10-17 09:45:50', 2),
(32, '2021-10-22 09:39:12', 2),
(33, '2021-10-23 05:23:27', 1),
(34, '2021-10-23 05:23:35', 1),
(35, '2021-10-23 05:23:41', 1),
(36, '2021-10-23 05:23:56', 1),
(37, '2021-10-23 05:24:13', 1),
(38, '2021-10-23 05:26:58', 1),
(39, '2021-10-23 05:27:08', 1),
(40, '2021-10-23 05:27:17', 1),
(41, '2021-10-23 05:27:25', 1),
(42, '2021-10-23 05:27:32', 1),
(43, '2021-10-23 05:29:13', 2),
(44, '2021-10-23 05:29:21', 2),
(45, '2021-10-23 05:29:30', 2),
(46, '2021-10-23 05:29:37', 2),
(47, '2021-10-23 05:29:44', 2),
(48, '2021-10-23 05:29:51', 2),
(49, '2021-10-23 05:29:58', 2),
(50, '2021-10-23 05:32:15', 2),
(51, '2021-10-23 05:32:22', 2),
(52, '2021-10-23 05:32:28', 2),
(53, '2021-10-23 05:32:33', 2),
(54, '2021-10-25 01:57:15', 2),
(55, '2021-10-27 10:57:36', 2);

-- --------------------------------------------------------

--
-- Structure for view `data_barang_keluar`
--
DROP TABLE IF EXISTS `data_barang_keluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_barang_keluar`  AS SELECT `m`.`kode_transaksi` AS `kode_transaksi`, cast(`m`.`tanggal` as date) AS `tanggal`, `d`.`kode_barang` AS `kode_barang`, sum(`d`.`qty`) AS `qty`, sum(`d`.`harga` * `d`.`qty`) AS `harga` FROM (`barang_keluar` `m` join `detail_barang_keluar` `d` on(`d`.`kode_transaksi` = `m`.`kode_transaksi`)) GROUP BY `m`.`kode_transaksi`, cast(`m`.`tanggal` as date), `d`.`kode_barang``kode_barang`  ;

-- --------------------------------------------------------

--
-- Structure for view `data_barang_masuk`
--
DROP TABLE IF EXISTS `data_barang_masuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_barang_masuk`  AS SELECT `m`.`kode_transaksi` AS `kode_transaksi`, cast(`m`.`tanggal` as date) AS `tanggal`, `d`.`kode_barang` AS `kode_barang`, sum(`d`.`qty`) AS `qty`, sum(`d`.`harga` * `d`.`qty`) AS `harga` FROM (`barang_masuk` `m` join `detail_barang_masuk` `d` on(`d`.`kode_transaksi` = `m`.`kode_transaksi`)) GROUP BY `m`.`kode_transaksi`, cast(`m`.`tanggal` as date), `d`.`kode_barang``kode_barang`  ;

-- --------------------------------------------------------

--
-- Structure for view `stok_barang_keluar`
--
DROP TABLE IF EXISTS `stok_barang_keluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stok_barang_keluar`  AS SELECT `m`.`kode_barang` AS `kode_barang`, sum(`m`.`qty`) AS `stok` FROM `detail_barang_keluar` AS `m` GROUP BY `m`.`kode_barang``kode_barang`  ;

-- --------------------------------------------------------

--
-- Structure for view `stok_barang_masuk`
--
DROP TABLE IF EXISTS `stok_barang_masuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stok_barang_masuk`  AS SELECT `m`.`kode_barang` AS `kode_barang`, sum(`m`.`qty`) AS `stok` FROM `detail_barang_masuk` AS `m` GROUP BY `m`.`kode_barang``kode_barang`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `detail_barang_keluar`
--
ALTER TABLE `detail_barang_keluar`
  ADD PRIMARY KEY (`id_detail_barang_keluar`);

--
-- Indexes for table `detail_barang_masuk`
--
ALTER TABLE `detail_barang_masuk`
  ADD PRIMARY KEY (`id_detail_barang_masuk`);

--
-- Indexes for table `inventaris_barang`
--
ALTER TABLE `inventaris_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_kendaraan`
--
ALTER TABLE `inventaris_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `retur`
--
ALTER TABLE `retur`
  ADD PRIMARY KEY (`id_retur`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD UNIQUE KEY `kode_supplier` (`kode_supplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2237;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_barang_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `detail_barang_keluar`
--
ALTER TABLE `detail_barang_keluar`
  MODIFY `id_detail_barang_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `detail_barang_masuk`
--
ALTER TABLE `detail_barang_masuk`
  MODIFY `id_detail_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `inventaris_kendaraan`
--
ALTER TABLE `inventaris_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `retur`
--
ALTER TABLE `retur`
  MODIFY `id_retur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
