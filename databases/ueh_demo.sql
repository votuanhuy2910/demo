-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 16, 2023 lúc 06:38 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ueh_demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `role_as`, `status`, `create_at`) VALUES
(1, 'Võ Tuấn Huy', 'admin@gmail.com', 'admin', 1, 0, '0000-00-00 00:00:00'),
(2, 'Huỳnh Trúc Linh', 'user@gmail.com', '123', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `identification` varchar(12) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `gender` enum('Nam','Nữ') NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `identification`, `name`, `email`, `address`, `city`, `gender`, `phone`) VALUES
(46, '12312312312', 'Huy Võ', '1231231223123@gmail.com', '981/8 Hương lộ 2, phường Bình Trị Đông A, quận Bình Tân, Thành phố Hồ Chí Minh', '0789833953', 'Nam', '0789833953'),
(47, '081236128391', 'Huy Võ', 'votuanhuy2910@gmail.com', '981/8 Hương lộ 2, phường Bình Trị Đông A, quận Bình Tân, Thành phố Hồ Chí Minh', '0789833953', 'Nam', '0789833953'),
(48, '123123123534', 'Huỳnh Trúc Linh', '4401104097@student.hcmup.edu.vn', '981/8 Hương lộ 2, phường Bình Trị Đông A, quận Bình Tân, Thành phố Hồ Chí Minh', 'HCM', 'Nữ', '0789833953'),
(49, '012837512683', 'HUỲNH TRÚC LINH', 'huynhtruclinh3001@gmail.com', '981/8 Hương lộ 2, phường Bình Trị Đông A, quận Bình Tân, thành phố hồ chí minh', 'Thành phố Hồ Chí Minh', 'Nữ', '0789833951');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
