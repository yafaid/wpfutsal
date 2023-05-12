-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 02:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpfutsal_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id` int(8) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id`, `jam`, `is_active`) VALUES
(9, '09:00:00', 1),
(10, '10:00:00', 1),
(11, '11:00:00', 1),
(12, '12:00:00', 1),
(13, '13:00:00', 1),
(14, '14:00:00', 1),
(15, '15:00:00', 1),
(16, '16:00:00', 1),
(17, '17:00:00', 1),
(18, '18:00:00', 1),
(19, '19:00:00', 1),
(20, '20:00:00', 1),
(21, '21:00:00', 1),
(22, '22:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id` int(1) NOT NULL,
  `lapangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id`, `lapangan`) VALUES
(1, 'Lapangan 1'),
(2, 'Lapangan 2'),
(3, 'Lapangan 3');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lapangan_id` int(1) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` int(11) NOT NULL,
  `bukti` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `lapangan_id`, `tanggal`, `jam`, `bukti`, `is_active`) VALUES
(51, 23, 1, '2023-05-10', 9, '', 2),
(52, 23, 1, '2023-05-10', 9, '', 2),
(53, 23, 1, '2023-05-10', 20, '', 2),
(54, 23, 1, '2023-05-10', 21, '', 2),
(55, 23, 1, '2023-05-11', 9, '', 2),
(56, 23, 2, '2023-05-11', 9, '', 3),
(57, 23, 1, '2023-05-11', 9, '', 3),
(60, 23, 2, '2023-05-12', 9, '', 2),
(61, 23, 2, '2023-05-12', 10, '', 2),
(62, 23, 1, '2023-05-12', 9, '', 2),
(63, 23, 2, '2023-05-12', 11, '', 3),
(64, 23, 2, '2023-05-12', 12, '', 3),
(65, 23, 1, '2023-05-13', 9, '', 3),
(66, 23, 1, '2023-05-13', 10, '', 1),
(67, 23, 1, '2023-05-12', 9, 'bukti_1683893065.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `ktp` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `email`, `no_hp`, `ktp`, `password`, `role_id`, `is_active`, `created_at`) VALUES
(19, 'yana', 'admin@gmail.com', 123456789, '', '25d55ad283aa400af464c76d713c07ad', 1, 1, 1683219719),
(22, 'yana', 'aku@gmail.com', 123456789, 'nama_1683359533.jpg', 'a8f5f167f44f4964e6c998dee827110c', 2, 2, 2023),
(23, 'yanuu', 'tes@gmail.com', 898888, 'nama_1683359632.jpg', 'a8f5f167f44f4964e6c998dee827110c', 2, 2, 2023),
(24, 'yana', 'yanuaa@gmail.com', 123456789, 'user_1683877928.jpg', 'a8f5f167f44f4964e6c998dee827110c', 2, 2, 2023);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_user` (`user_id`),
  ADD KEY `order_lapangan` (`lapangan_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `user_role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_jam` FOREIGN KEY (`jam`) REFERENCES `jam` (`id`),
  ADD CONSTRAINT `order_lapangan` FOREIGN KEY (`lapangan_id`) REFERENCES `lapangan` (`id`),
  ADD CONSTRAINT `order_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`iduser`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
