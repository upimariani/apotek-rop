-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2026 at 05:21 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek-rop`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisis`
--

CREATE TABLE `analisis` (
  `id_analisis` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `hasil_rop` int(11) NOT NULL,
  `total_pemakaian` int(11) NOT NULL,
  `jml_perhari` int(11) NOT NULL,
  `safety_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_keluar`
--

CREATE TABLE `detail_keluar` (
  `id_detail_keluar` int(11) NOT NULL,
  `id_obat_keluar` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_keluar`
--

INSERT INTO `detail_keluar` (`id_detail_keluar`, `id_obat_keluar`, `id_obat`, `jumlah_keluar`) VALUES
(1, 22, 5, 4),
(2, 31, 2, 2),
(3, 2, 10, 1),
(4, 79, 8, 5),
(5, 5, 4, 5),
(6, 37, 6, 3),
(7, 61, 3, 5),
(8, 97, 3, 2),
(9, 8, 7, 5),
(10, 65, 2, 2),
(11, 22, 3, 5),
(12, 23, 10, 2),
(13, 55, 10, 1),
(14, 49, 10, 5),
(15, 75, 3, 5),
(16, 38, 7, 3),
(17, 52, 4, 2),
(18, 1, 1, 1),
(19, 76, 8, 5),
(20, 54, 10, 3),
(21, 83, 4, 1),
(22, 16, 6, 3),
(23, 59, 7, 5),
(24, 11, 2, 1),
(25, 89, 5, 3),
(26, 77, 8, 4),
(27, 65, 6, 3),
(28, 93, 10, 1),
(29, 10, 5, 3),
(30, 84, 3, 5),
(31, 82, 10, 2),
(32, 30, 8, 1),
(33, 79, 3, 3),
(34, 37, 2, 2),
(35, 72, 2, 4),
(36, 36, 3, 5),
(37, 61, 2, 1),
(38, 10, 1, 5),
(39, 81, 9, 5),
(40, 73, 3, 1),
(41, 3, 9, 1),
(42, 13, 2, 2),
(43, 54, 4, 3),
(44, 12, 5, 5),
(45, 74, 1, 1),
(46, 51, 1, 1),
(47, 6, 7, 5),
(48, 98, 6, 5),
(49, 41, 6, 5),
(50, 73, 2, 3),
(51, 77, 10, 1),
(52, 13, 2, 1),
(53, 24, 8, 4),
(54, 60, 6, 2),
(55, 15, 6, 1),
(56, 5, 9, 2),
(57, 64, 9, 2),
(58, 84, 5, 2),
(59, 15, 5, 5),
(60, 41, 6, 3),
(61, 40, 2, 5),
(62, 62, 9, 1),
(63, 79, 9, 1),
(64, 69, 4, 3),
(65, 51, 8, 3),
(66, 35, 9, 3),
(67, 96, 5, 4),
(68, 96, 7, 5),
(69, 4, 3, 4),
(70, 28, 4, 4),
(71, 69, 5, 1),
(72, 13, 9, 4),
(73, 48, 4, 1),
(74, 44, 3, 1),
(75, 25, 10, 3),
(76, 69, 4, 4),
(77, 68, 1, 4),
(78, 66, 5, 1),
(79, 92, 1, 1),
(80, 100, 4, 5),
(81, 54, 5, 3),
(82, 11, 2, 3),
(83, 22, 7, 1),
(84, 2, 1, 3),
(85, 7, 1, 4),
(86, 15, 7, 1),
(87, 95, 4, 4),
(88, 99, 7, 1),
(89, 46, 4, 5),
(90, 2, 8, 1),
(91, 51, 3, 1),
(92, 85, 8, 2),
(93, 32, 2, 4),
(94, 42, 2, 3),
(95, 9, 8, 1),
(96, 99, 2, 4),
(97, 75, 4, 5),
(98, 60, 1, 4),
(99, 6, 4, 1),
(100, 43, 1, 2),
(101, 64, 9, 2),
(102, 22, 8, 2),
(103, 59, 9, 4),
(104, 61, 10, 5),
(105, 42, 6, 3),
(106, 97, 2, 4),
(107, 15, 4, 4),
(108, 30, 1, 4),
(109, 43, 4, 2),
(110, 42, 9, 1),
(111, 30, 4, 3),
(112, 85, 10, 3),
(113, 87, 8, 4),
(114, 96, 3, 4),
(115, 76, 3, 3),
(116, 19, 8, 2),
(117, 41, 3, 4),
(118, 86, 3, 2),
(119, 83, 2, 1),
(120, 38, 1, 3),
(121, 23, 6, 2),
(122, 87, 4, 4),
(123, 26, 5, 1),
(124, 32, 3, 3),
(125, 89, 5, 3),
(126, 36, 10, 4),
(127, 78, 6, 3),
(128, 63, 10, 1),
(129, 82, 6, 4),
(130, 21, 5, 4),
(131, 52, 5, 2),
(132, 99, 7, 5),
(133, 81, 4, 1),
(134, 60, 8, 5),
(135, 54, 4, 2),
(136, 6, 7, 5),
(137, 51, 5, 5),
(138, 17, 8, 5),
(139, 41, 3, 1),
(140, 61, 9, 2),
(141, 4, 6, 5),
(142, 45, 5, 3),
(143, 64, 6, 3),
(144, 82, 4, 1),
(145, 46, 6, 5),
(146, 81, 1, 4),
(147, 44, 3, 3),
(148, 32, 2, 4),
(149, 61, 4, 5),
(150, 4, 5, 3),
(151, 85, 3, 2),
(152, 20, 1, 3),
(153, 84, 8, 1),
(154, 39, 4, 4),
(155, 66, 1, 5),
(156, 7, 8, 4),
(157, 68, 1, 2),
(158, 79, 4, 4),
(159, 28, 3, 3),
(160, 66, 4, 4),
(161, 57, 7, 4),
(162, 8, 3, 3),
(163, 70, 5, 3),
(164, 58, 5, 1),
(165, 62, 3, 5),
(166, 89, 4, 5),
(167, 20, 9, 2),
(168, 2, 9, 1),
(169, 50, 7, 4),
(170, 76, 7, 5),
(171, 48, 5, 3),
(172, 74, 10, 5),
(173, 89, 7, 1),
(174, 84, 1, 2),
(175, 65, 4, 2),
(176, 10, 8, 1),
(177, 32, 3, 3),
(178, 66, 6, 1),
(179, 91, 10, 4),
(180, 40, 5, 3),
(181, 58, 2, 3),
(182, 82, 6, 3),
(183, 44, 5, 3),
(184, 91, 9, 1),
(185, 100, 7, 1),
(186, 65, 8, 1),
(187, 62, 7, 1),
(188, 71, 6, 3),
(189, 9, 10, 4),
(190, 46, 5, 5),
(191, 19, 4, 2),
(192, 75, 4, 1),
(193, 100, 3, 1),
(194, 57, 4, 4),
(195, 49, 1, 3),
(196, 89, 2, 2),
(197, 98, 2, 4),
(198, 30, 6, 4),
(199, 18, 1, 2),
(200, 58, 5, 4),
(201, 101, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `detail_masuk`
--

CREATE TABLE `detail_masuk` (
  `id_detail_masuk` int(11) NOT NULL,
  `id_obat_masuk` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `tgl_kedaluarsa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_masuk`
--

INSERT INTO `detail_masuk` (`id_detail_masuk`, `id_obat_masuk`, `id_obat`, `jumlah_masuk`, `tgl_kedaluarsa`) VALUES
(1, 1, 2, 12, '2026-07-22'),
(2, 2, 3, 10, '2026-09-24'),
(3, 3, 2, 10, '2026-04-29'),
(4, 3, 3, 10, '2026-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(125) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `harga_perbox` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `sat_supplier` int(11) NOT NULL,
  `rop` int(11) NOT NULL,
  `lead_time` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `keterangan`, `harga`, `harga_perbox`, `stok`, `sat_supplier`, `rop`, `lead_time`, `gambar`) VALUES
(1, 'Quetiapin', 'strip', '13000', 130000, 3, 100, 8, 2, 'a.png'),
(2, 'Nerilon', 'strip', '40000', 400000, 1000, 100, 9, 3, 'a.png'),
(3, 'Flixotit', 'strip', '3000', 30000, 1000, 100, 7, 2, 'a.png'),
(4, 'Depakote', 'strip', '23000', 230000, 1000, 100, 4, 1, 'a.png'),
(5, 'Citicolin', 'strip', '19000', 190000, 1000, 100, 8, 2, 'a.png'),
(6, 'Mecobalamin', 'strip', '15000', 150000, 1000, 100, 7, 2, 'a.png'),
(7, 'Osteocal', 'strip', '8000', 80000, 1000, 100, 12, 3, 'a.png'),
(8, 'Lodomer 2 mg', 'strip', '37000', 370000, 1000, 100, 5, 2, 'a.png'),
(9, 'THD 2 mg', 'strip', '22000', 220000, 1000, 100, 3, 2, 'a.png'),
(10, 'Stalevo', 'strip', '14000', 140000, 1000, 100, 4, 2, 'a.png');

-- --------------------------------------------------------

--
-- Table structure for table `obat_keluar`
--

CREATE TABLE `obat_keluar` (
  `id_obat_keluar` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_keluar` varchar(15) NOT NULL,
  `total_keluar` int(11) NOT NULL,
  `pengiriman` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat_keluar`
--

INSERT INTO `obat_keluar` (`id_obat_keluar`, `id_pelanggan`, `tgl_keluar`, `total_keluar`, `pengiriman`, `status`) VALUES
(1, 16, '2026-04-02', 13000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(2, 12, '2026-03-29', 112000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(3, 15, '2026-03-28', 22000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(4, 4, '2026-03-30', 144000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(5, 17, '2026-04-01', 159000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(6, 20, '2026-03-05', 103000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(7, 5, '2026-03-22', 200000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(8, 13, '2026-03-25', 49000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(9, 15, '2026-04-02', 93000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(10, 20, '2026-03-07', 159000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(11, 16, '2026-03-20', 160000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(12, 17, '2026-03-09', 95000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(13, 4, '2026-04-10', 208000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(15, 9, '2026-04-01', 210000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(16, 1, '2026-03-09', 45000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(17, 1, '2026-03-13', 185000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(18, 15, '2026-03-21', 26000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(19, 7, '2026-04-13', 120000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(20, 13, '2026-03-05', 83000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(21, 7, '2026-04-05', 76000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(22, 13, '2026-04-05', 173000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(23, 14, '2026-04-12', 58000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(24, 17, '2026-04-06', 148000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(25, 15, '2026-03-31', 42000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(26, 16, '2026-03-04', 19000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(28, 19, '2026-04-06', 101000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(30, 11, '2026-04-01', 218000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(31, 3, '2026-03-19', 80000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(32, 17, '2026-03-15', 338000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(35, 11, '2026-03-27', 66000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(36, 19, '2026-04-13', 71000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(37, 5, '2026-03-05', 125000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(38, 10, '2026-03-06', 63000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(39, 11, '2026-03-30', 92000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(40, 11, '2026-04-01', 257000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(41, 12, '2026-03-09', 135000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(42, 10, '2026-04-07', 187000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(43, 15, '2026-03-08', 72000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(44, 14, '2026-04-13', 69000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(45, 11, '2026-03-25', 57000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(46, 14, '2026-03-22', 285000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(48, 16, '2026-03-22', 80000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(49, 3, '2026-03-29', 109000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(50, 11, '2026-03-20', 32000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(51, 8, '2026-04-05', 222000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(52, 11, '2026-03-27', 84000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(54, 9, '2026-03-27', 214000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(55, 2, '2026-04-09', 14000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(57, 9, '2026-04-11', 124000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(58, 14, '2026-03-19', 215000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(59, 16, '2026-03-29', 128000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(60, 18, '2026-03-31', 267000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(61, 7, '2026-04-03', 284000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(62, 13, '2026-04-09', 45000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(63, 8, '2026-03-25', 14000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(64, 4, '2026-03-02', 133000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(65, 9, '2026-04-13', 208000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(66, 3, '2026-03-06', 191000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(68, 4, '2026-03-16', 78000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(69, 9, '2026-04-01', 180000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(70, 16, '2026-04-05', 57000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(71, 10, '2026-04-11', 45000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(72, 18, '2026-03-31', 160000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(73, 15, '2026-03-06', 123000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(74, 4, '2026-03-28', 83000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(75, 18, '2026-03-13', 153000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(76, 9, '2026-03-16', 234000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(77, 8, '2026-04-04', 162000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(78, 2, '2026-04-02', 45000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(79, 19, '2026-03-05', 308000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(81, 5, '2026-04-12', 185000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(82, 4, '2026-03-28', 156000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(83, 1, '2026-03-05', 63000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(84, 19, '2026-03-04', 116000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(85, 6, '2026-04-09', 122000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(86, 5, '2026-03-26', 6000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(87, 7, '2026-03-23', 240000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(89, 1, '2026-03-16', 317000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(91, 18, '2026-04-01', 78000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(92, 11, '2026-03-02', 13000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(93, 17, '2026-03-07', 14000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(95, 4, '2026-04-12', 92000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(96, 1, '2026-03-17', 128000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(97, 7, '2026-04-06', 166000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(98, 19, '2026-04-07', 235000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(99, 11, '2026-03-09', 208000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(100, 1, '2026-04-12', 126000, 'Lingk Kramat Jaya RT.07/03 Kec.KESAMBI Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne REG', 2),
(101, 1, '2026-04-13', 59000, 'Lingk Kramat Jaya RT.07/03 Kec.KUNINGAN Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC', 2);

-- --------------------------------------------------------

--
-- Table structure for table `obat_masuk`
--

CREATE TABLE `obat_masuk` (
  `id_obat_masuk` int(11) NOT NULL,
  `tgl_masuk` varchar(15) NOT NULL,
  `total_transaksi` varchar(15) NOT NULL,
  `status_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat_masuk`
--

INSERT INTO `obat_masuk` (`id_obat_masuk`, `tgl_masuk`, `total_transaksi`, `status_masuk`) VALUES
(1, '2026-03-30', '60000', 2),
(2, '2026-03-30', '30000', 2),
(3, '2026-04-10', '80000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `fullname`, `no_hp`, `username`, `password`) VALUES
(1, 'Pelanggan A', '0834200751', 'pelanggan_a', 'pelanggan_a'),
(2, 'Pelanggan B', '085848784', 'pelanggan_b', 'pelanggan_b'),
(3, 'Pelanggan C', '0832641150', 'pelanggan_c', 'pelanggan_c'),
(4, 'Pelanggan D', '0835395403', 'pelanggan_d', 'pelanggan_d'),
(5, 'Pelanggan E', '0857617351', 'pelanggan_e', 'pelanggan_e'),
(6, 'Pelanggan F', '0858393226', 'pelanggan_f', 'pelanggan_f'),
(7, 'Pelanggan G', '082362664', 'pelanggan_g', 'pelanggan_g'),
(8, 'Pelanggan H', '089181765', 'pelanggan_h', 'pelanggan_h'),
(9, 'Pelanggan I', '0887706142', 'pelanggan_i', 'pelanggan_i'),
(10, 'Pelanggan J', '0838034367', 'pelanggan_j', 'pelanggan_j'),
(11, 'Pelanggan K', '0883803109', 'pelanggan_k', 'pelanggan_k'),
(12, 'Pelanggan L', '0878348658', 'pelanggan_l', 'pelanggan_l'),
(13, 'Pelanggan M', '0852499162', 'pelanggan_m', 'pelanggan_m'),
(14, 'Pelanggan N', '0859846757', 'pelanggan_n', 'pelanggan_n'),
(15, 'Pelanggan O', '0859306626', 'pelanggan_o', 'pelanggan_o'),
(16, 'Pelanggan P', '0876444276', 'pelanggan_p', 'pelanggan_p'),
(17, 'Pelanggan Q', '0874319023', 'pelanggan_q', 'pelanggan_q'),
(18, 'Pelanggan R', '0846327553', 'pelanggan_r', 'pelanggan_r'),
(19, 'Pelanggan S', '0865356752', 'pelanggan_s', 'pelanggan_s'),
(20, 'Pelanggan T', '0891685892', 'pelanggan_t', 'pelanggan_t');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id_analisis`);

--
-- Indexes for table `detail_keluar`
--
ALTER TABLE `detail_keluar`
  ADD PRIMARY KEY (`id_detail_keluar`);

--
-- Indexes for table `detail_masuk`
--
ALTER TABLE `detail_masuk`
  ADD PRIMARY KEY (`id_detail_masuk`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
  ADD PRIMARY KEY (`id_obat_keluar`);

--
-- Indexes for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD PRIMARY KEY (`id_obat_masuk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisis`
--
ALTER TABLE `analisis`
  MODIFY `id_analisis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_keluar`
--
ALTER TABLE `detail_keluar`
  MODIFY `id_detail_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `detail_masuk`
--
ALTER TABLE `detail_masuk`
  MODIFY `id_detail_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
  MODIFY `id_obat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `id_obat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
