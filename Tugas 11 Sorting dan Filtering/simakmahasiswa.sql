-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 08:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simakmahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `matkul` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`nip`, `nama`, `matkul`, `alamat`) VALUES
('000000000000000000', 'Komang Putra, S.T, M.Kom', 'Analisis Numerik', 'Jimbaran'),
('111111111111111111', 'Edward, S.Kom, M.Kom', 'Basis Data', 'Kuta'),
('22222222222222222', 'Sastradi, S.Si, M.Kom', 'Matematika Diskrit', 'Denpasar'),
('333333333333333333', 'Collins, S.Si, M.Si', 'Matematika Diskrit 2', 'Denpasar'),
('444444444444444444', 'Ketut, S.Kom, M.Kom', 'Etika', 'Denpasar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `matkul` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`nim`, `nama`, `matkul`, `alamat`) VALUES
(1708111062, 'Agus', 'Basis Data', 'Bangli'),
(1708561075, 'Pasek Wahyu', 'Matematika Diskrit', 'Karangasem'),
(1708561077, 'Kadek', 'Analisis Numerik', 'Jimbaran'),
(1708561084, 'Gevin', 'Etika', 'Denpasar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
