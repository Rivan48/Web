-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 10:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopikupa`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`, `gambar`) VALUES
(1, 'Espresso', 20000, 'kopi.jpg'),
(2, 'Cappucino', 25000, 'kopi2.jpg'),
(3, 'Americano', 22000, 'kopi9.jpg'),
(4, 'Vanilla Latte', 27000, 'kopi4.jpg'),
(5, 'Caramel Macchiato', 27000, 'kopi5.jpg'),
(6, 'Matcha Latte', 27000, 'kopi6.jpg'),
(7, 'Milo Macchiato', 26000, 'kopi10.jpg'),
(8, 'Kopi Susu', 5000, 'kopi8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(50) NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL,
  `total_belanja` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `tanggal_pemesanan`, `total_belanja`) VALUES
(33, '2023-05-23 21:59:00', 22000),
(34, '2023-05-24 07:33:00', 54000),
(35, '2023-05-24 10:05:00', 22000),
(36, '2023-05-24 13:27:00', 25000),
(37, '2023-05-24 13:34:00', 25000),
(38, '2024-05-21 09:41:00', 54000),
(39, '2024-05-21 09:42:00', 22000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_produk`
--

CREATE TABLE `pemesanan_produk` (
  `id_pemesanan_produk` int(50) NOT NULL,
  `id_pemesanan` int(50) NOT NULL,
  `id_menu` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan_produk`
--

INSERT INTO `pemesanan_produk` (`id_pemesanan_produk`, `id_pemesanan`, `id_menu`, `jumlah`) VALUES
(1, 1, '29', 1),
(2, 2, '2', 1),
(3, 3, '2', 1),
(4, 3, '1', 1),
(5, 3, '3', 1),
(6, 4, '2', 1),
(7, 4, '3', 1),
(8, 5, '4', 1),
(9, 6, '3', 1),
(10, 7, '3', 1),
(11, 8, '8', 1),
(12, 8, '7', 1),
(13, 9, '4', 1),
(14, 10, '1', 2),
(15, 10, '6', 1),
(16, 10, '8', 1),
(17, 10, '4', 1),
(18, 11, '5', 1),
(19, 11, '6', 1),
(20, 11, '7', 1),
(21, 11, '8', 1),
(22, 12, '2', 1),
(23, 13, '2', 1),
(24, 14, '1', 1),
(25, 15, '2', 1),
(26, 16, '3', 2),
(27, 16, '1', 1),
(28, 16, '4', 1),
(29, 17, '1', 1),
(30, 18, '1', 1),
(31, 19, '2', 2),
(32, 19, '1', 1),
(33, 19, '3', 1),
(34, 19, '4', 1),
(35, 19, '5', 1),
(36, 19, '8', 2),
(37, 19, '7', 1),
(38, 19, '6', 1),
(39, 20, '5', 1),
(40, 20, '7', 1),
(41, 20, '3', 1),
(42, 21, '3', 2),
(43, 22, '4', 1),
(44, 23, '2', 1),
(45, 24, '1', 1),
(46, 24, '2', 1),
(47, 24, '7', 1),
(48, 25, '1', 1),
(49, 25, '2', 1),
(50, 26, '2', 1),
(51, 27, '4', 1),
(52, 28, '2', 1),
(53, 29, '1', 1),
(54, 29, '6', 1),
(55, 29, '7', 1),
(56, 29, '15', 1),
(57, 30, '6', 1),
(58, 30, '7', 1),
(59, 31, '5', 1),
(60, 31, '6', 1),
(61, 32, '6', 1),
(62, 32, '5', 1),
(63, 33, '3', 1),
(64, 34, '5', 1),
(65, 34, '4', 1),
(66, 35, '3', 1),
(67, 36, '2', 1),
(68, 37, '2', 1),
(69, 38, '5', 1),
(70, 38, '6', 1),
(71, 39, '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `status`) VALUES
(28, 'Admin', 'admin123@gmail.com', '$2y$10$I1.HyNgEyFKY/NCEqkvaJutZ3NRv18BvSUES2kaiioWzftcZ.vHzC', 'admin'),
(29, 'User', 'user123@gmail.com', '$2y$10$j8YH0UZsDiklcUCJmK9GWO22UrUfAzo/CNEpPivBEBOYUdcVasbky', 'user'),
(31, 'taufiq', 'taufiq@gmail.com', '$2y$10$S0cBmKPVCnJRwXuqt2jsiuYS9Msb8rMHVSqm8Op0s8aAlwomjGhty', 'user'),
(32, 'Rivan', 'rivan@gmail.com', '$2y$10$q5OSUjpni8v9KedWuAta5uKyuzEqZOAq7paR/fVafSb23fO7tGFqa', 'user'),
(34, 'Ripan', 'ripan@gmail.com', '$2y$10$A3dVr33i2w33wJMPNZ.s6uXWhnXrRGAm4GyUlq88iQdPusglQVe9i', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  ADD PRIMARY KEY (`id_pemesanan_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  MODIFY `id_pemesanan_produk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
