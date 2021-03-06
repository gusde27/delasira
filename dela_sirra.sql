-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 08:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dela_sirra`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `NAMA_E` varchar(80) NOT NULL,
  `TANGGAL_E` varchar(70) NOT NULL,
  `DES_E` varchar(2500) NOT NULL,
  `FOTO_E` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`NAMA_E`, `TANGGAL_E`, `DES_E`, `FOTO_E`) VALUES
('Reuni', '2019-09-08', '<p>Pada Hari Minggu, tepatnya pada 8 september 2019. Sekolah Menengah Pertama (SMP) 1 Matarak Angkatan 1991 Mengadakan Reuni di De La Sirra Cafe and Resto yang mengusung tema \"Kita pernah satu rasa\". Dimana Acaranya sangat meriah dengan berbagai hiburan acara seperti games, karouke, dll, diadakan untuk menghibur para tamu dan tentunya juga prasmanan yang sudah siap dengan segala macam menu yang sudah di pesan oleh panitia acara.\r\n\r\nBuruan Booking De La Sirra untuk acara kamu, karna kami siap melayani segala kebutuhan acara anda</p>', 'cover5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `NAMA_F` varchar(255) NOT NULL,
  `FOTO_F` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`NAMA_F`, `FOTO_F`) VALUES
('parkiran', 'cover1.jpg'),
('parkiran', 'IMG_4236.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `foto_event`
--

CREATE TABLE `foto_event` (
  `NAMA_E` varchar(75) NOT NULL,
  `FOTO_E` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto_event`
--

INSERT INTO `foto_event` (`NAMA_E`, `FOTO_E`) VALUES
('Birthday Party', 'IMG_0424.JPG'),
('Birthday Party', 'IMG_0960.JPG'),
('Reuni', 'IMG_4240.jpg'),
('Reuni', 'IMG_4242.jpg'),
('Reuni', 'IMG_4254.jpg'),
('Reuni', 'IMG_4256.jpg'),
('Reuni', 'IMG_4258.jpg'),
('Reuni', 'IMG_4259.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `NAMA_K` varchar(50) NOT NULL,
  `PELAYANAN` varchar(50) NOT NULL,
  `MAKANAN` varchar(50) NOT NULL,
  `KRITIK` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`NAMA_K`, `PELAYANAN`, `MAKANAN`, `KRITIK`) VALUES
('Gusde', 'on', 'on', 'Lebih ditungkatkan lagi fasilitasnya'),
('Gusde3', 'Sangat Baik', 'Baik', 'AHHA'),
('<b>entah </b>', 'Kurang Baik', 'Kurang Baik', 'entah\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `NAMA_P` varchar(50) NOT NULL,
  `JENIS_P` varchar(70) NOT NULL,
  `DES_P` varchar(255) NOT NULL,
  `FOTO_P` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`NAMA_P`, `JENIS_P`, `DES_P`, `FOTO_P`) VALUES
('Daging Kuah', 'Makanan', '', 'makanan7.jpeg'),
('Ikan Bakar', 'Makanan', '', 'makanan3.jpeg'),
('Mie Yun', 'Makanan', '', 'makanan2.jpeg'),
('Sup Buntut', 'Makanan', '', 'makanan5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `NAMA_T` varchar(50) NOT NULL,
  `NO_T` varchar(20) NOT NULL,
  `TANGGAL_T` varchar(25) NOT NULL,
  `ACARA_T` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`NAMA_T`, `NO_T`, `TANGGAL_T`, `ACARA_T`) VALUES
('Gusde Alexander Albert', '087761472255', '2019-09-20', 'Meeting'),
('<b>entah</b>', '087761472255', '2019-10-01', 'Wedding Party');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `NICKNAME` varchar(30) NOT NULL,
  `NO_TELP` varchar(20) NOT NULL,
  `JK` varchar(15) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `JABATAN` varchar(50) NOT NULL,
  `LEVEL` int(2) NOT NULL,
  `FOTO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `PASSWORD`, `NAMA`, `NICKNAME`, `NO_TELP`, `JK`, `ALAMAT`, `JABATAN`, `LEVEL`, `FOTO`) VALUES
('gusde', 'wirawan@21.', 'I Gede Bagus Wirawan', 'Gusde', '087761472255', 'Male', 'Lamper Nice', 'Admin', 1, 'ahaha.jpg'),
('sirra', 'good', 'Dela Sirra', 'Taufik', '03095832', 'Laki-Laki', 'Alamat', 'Manager', 2, 'logo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`FOTO_F`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
