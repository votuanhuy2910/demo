-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 10:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ueh_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `role_as`, `status`, `create_at`) VALUES
(1, 'Võ Tuấn Huy', 'admin@gmail.com', 'admin', 1, 0, '0000-00-00 00:00:00'),
(2, 'Huỳnh Trúc Linh', 'user@gmail.com', '123', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `identification` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` enum('Nam','Nữ') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `identification`, `email`, `phone`, `city`, `district`, `ward`, `address`, `gender`) VALUES
(46, 'Huy Võ', '12312312312', '1231231223123@gmail.com', '0789833953', '0789833953', '', '', '981/8 Hương lộ 2, phường Bình Trị Đông A, quận Bình Tân, Thành phố Hồ Chí Minh', 'Nam'),
(47, 'Huy Võ', '081236128391', 'votuanhuy2910@gmail.com', '0789833953', '0789833953', '', '', '981/8 Hương lộ 2, phường Bình Trị Đông A, quận Bình Tân, Thành phố Hồ Chí Minh', 'Nam'),
(48, 'Huỳnh Trúc Linh', '123123123534', '4401104097@student.hcmup.edu.vn', '0789833953', 'HCM', '', '', '981/8 Hương lộ 2, phường Bình Trị Đông A, quận Bình Tân, Thành phố Hồ Chí Minh', 'Nữ'),
(49, 'HUỲNH TRÚC LINH', '012837512683', 'huynhtruclinh3001@gmail.com', '0789833951', 'Thành phố Hồ Chí Minh', '', '', '981/8 Hương lộ 2, phường Bình Trị Đông A, quận Bình Tân, thành phố hồ chí minh', 'Nữ'),
(50, 'võ tuấn huy', '078983391231', 'vohuy402@yahoo.com', '0789833962', '79', '777', '27448', 'hương lộ 2', 'Nam'),
(51, 'Võ TUấN HUY', '018231287312', 'votuanhuy@gmail.com', '0123456789', '01', '001', '00001', 'hương lộ 2', 'Nam'),
(52, 'HUỲNH TRÚC LINH', '012381762371', 'truclinh@gmail.com', '0123872137', '01', '003', '00100', 'ngõ 2', 'Nữ'),
(53, '', '123123123123', 'mju@gmail.com', '', '', '', '', '', ''),
(54, '', '12312312302', 'juydf@gmail.com', '', '', '', '', '', ''),
(55, '', '', '2', '', '', '', '', '', ''),
(56, 'HUỲNH TẤN PHÁT', '098251728293', 'phathuynh@gmail.com', '0362131237', '86', '858', '29626', '21 mỹ phước', 'Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
