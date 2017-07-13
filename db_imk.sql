-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 04:43 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_imk`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` varchar(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `namaProduk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `ukuran`, `tipe`, `namaProduk`) VALUES
(0, 'kelapa.jpg', 'Buah', 'UD.Balige Jaya', 'Kelapa Muda'),
(1, 'padi.jpg', 'Buah', 'UD.Balige Jaya', 'Padi'),
(1, 'tomat.jpg', 'Buah', 'UD.Balige Jaya', 'Tomat'),
(1, 'andaliman.jpg', 'Buah', 'UD.Balige Jaya', 'Andaliman'),
(1, 'kopi.jpg', 'Buah', 'UD.Balige Jaya', 'Kopi'),
(0, 'bawangPutih.jpg', 'Rempah', 'PHH Laguboti', 'Bawang Putih'),
(0, 'andaliman.jpg', 'Rempah', 'PHH Laguboti', 'Andaliman'),
(0, 'deface.png', '', '', 'Anjay');

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan`
--

CREATE TABLE `kebutuhan` (
  `nama` varchar(40) NOT NULL,
  `NamaProduk` text NOT NULL,
  `gambar` text NOT NULL,
  `spesifikasi` text NOT NULL,
  `konsumen` varchar(50) NOT NULL,
  `noHP` int(20) NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebutuhan`
--

INSERT INTO `kebutuhan` (`nama`, `NamaProduk`, `gambar`, `spesifikasi`, `konsumen`, `noHP`, `alamat`) VALUES
('kelapa.JPG', 'Kelapa Muda', '', 'Dibutuhkan Kelapa Muda sebanyak 100 KG untuk Keperluan acara Keluarga', 'Andrey Sembiring (08', 0, 'DEL'),
('BawangMerah.jpg', 'Bawang merah', '', 'dibutuhkan Bawang merah untuk keperluan bahan masakan ', 'Lohot (085314651)', 0, 'Del'),
('andaliman.jpg', 'Andaliman', '', 'dibutuhkan andaliman untuk keperluan bahan masakan ', 'Joshua SAS', 0, 'Del');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('andrey', 'andrey');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `penjual` varchar(40) NOT NULL,
  `noKTP` varchar(40) NOT NULL,
  `noHP` int(20) NOT NULL,
  `noKK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`nama`, `alamat`, `penjual`, `noKTP`, `noHP`, `noKK`) VALUES
('aaa.png', 'Kisaran', 'Joshua', '082276036519', 2147483647, '0853426987'),
('andaliman.jpg', 'Simalingkar Smart City', 'Andrey', '0853426987', 853426987, '0853426987'),
('waw.jpg', 'del', 'lohot', '555', 255, '444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`noKTP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
