-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 06:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kosan`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `listkamarlaporan` varchar(10) NOT NULL,
  `isilaporan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`listkamarlaporan`, `isilaporan`) VALUES
('kamar1', ''),
('kamar2', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`username`, `password`) VALUES
('bapa', 'bapa123');

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `nik` char(16) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tglLahir` date NOT NULL,
  `jenisKelamin` char(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `perkawinan` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `listkamar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`nik`, `username`, `password`, `nama`, `tglLahir`, `jenisKelamin`, `alamat`, `perkawinan`, `pekerjaan`, `listkamar`) VALUES
('1111111111111111', 'handa', 'handa123', 'Raihan Ramadhan', '2004-02-10', 'L', 'Jl. Cigadung', 'Kawin', 'Mahasiswa', 'kamar1'),
('1234567890987654', 'venti', 'venti1234', 'Venti', '2004-06-05', 'P', 'Mondstat', 'belum kawin', 'archon', 'kamar5'),
('1234567898765431', 'neuvillette', 'neuvillette1234', 'Neuvillette', '2004-12-18', 'L', 'Fontaine', 'belum kawin', 'Hakim', 'kamar6'),
('1234567898765432', 'Raiden', 'Raiden', 'Raiden Shogun', '2004-06-26', 'P', 'Inazuma', 'belum kawin', 'archon', 'kamar3'),
('1234567898765433', 'furina', 'furina1234', 'Furina', '2004-10-13', 'P', 'Fontaine', 'belum kawin', 'archon', 'kamar7'),
('1234567898765434', 'ayato', 'ayato1234', 'Kamisato Ayato', '2004-03-26', 'L', 'Inazuma', 'belum kawin', 'Yashiro Commission', 'kamar8'),
('2222222222222222', 'nahida', 'nahida1234', 'Nahida', '2004-10-27', 'P', 'Sumeru', 'belum kawin', 'archon', 'kamar2'),
('2345678987654321', 'zhongli', 'zhongli1234', 'Zhongli', '2004-12-31', 'L', 'Liyue', 'belum kawin', 'archon', 'kamar4');

-- --------------------------------------------------------

--
-- Table structure for table `penghuni2`
--

CREATE TABLE `penghuni2` (
  `nik` char(16) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tglLahir` date NOT NULL,
  `jenisKelamin` char(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `perkawinan` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `listkamar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penghuni2`
--

INSERT INTO `penghuni2` (`nik`, `username`, `password`, `nama`, `tglLahir`, `jenisKelamin`, `alamat`, `perkawinan`, `pekerjaan`, `listkamar`) VALUES
('1111111111111111', 'handa', 'handa123', 'Raihan Ramadhan', '2004-02-10', 'L', 'Jl. Cigadung', 'Kawin', 'Mahasiswa', 'kamar1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`listkamarlaporan`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `penghuni2`
--
ALTER TABLE `penghuni2`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
