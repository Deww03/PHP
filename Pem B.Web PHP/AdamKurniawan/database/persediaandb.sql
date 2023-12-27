-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 05:45 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persediaandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kdbarang` varchar(5) NOT NULL,
  `nmbarang` varchar(25) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kdbarang`, `nmbarang`, `satuan`, `warna`, `jumlah`) VALUES
('123', 'Sendal Jepit', 'Pcs', 'Hitam', 7),
('124', 'Jaket', 'Kg', 'Biru', 2),
('125', 'Sempak', 'Box', 'Hitam', 3),
('126', 'Sabuk', 'Pcs', 'Putih', 5),
('127', 'Sempak Gusion', 'Kg', 'Hitam', 10000),
('128', 'Kaos Anime (ahageo)', 'Pcs', 'Hitam', 100),
('129', 'Kaos Kobo Kanaeru', 'Box', 'Biru', 3000),
('130', 'Kaos Kutang Pace Yunus', 'Set', 'Biru', 3423),
('131', 'Seblak Lada Hitam', 'Set', 'Hitam', 2123),
('132', 'Cabe Cabean Ngantuk', 'Kg', 'Hitam', 60);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `kdcustomer` varchar(25) NOT NULL,
  `nmcustomer` varchar(25) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`kdcustomer`, `nmcustomer`, `telepon`, `email`, `alamat`) VALUES
('99', 'Adam', '084617822', 'adam@gmail.com', 'cikupa');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kdtransaksi` varchar(25) NOT NULL,
  `kdcustomer` varchar(25) NOT NULL,
  `kdbarang` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `pass`) VALUES
('Adam', '123'),
('Adew', '050803');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kdbarang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kdcustomer`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kdtransaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
