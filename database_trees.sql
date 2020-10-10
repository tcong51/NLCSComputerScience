-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2020 lúc 04:18 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database_trees`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_admin`
--

CREATE TABLE `db_admin` (
  `masoadmin` int(11) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_admin`
--

INSERT INTO `db_admin` (`masoadmin`, `tendangnhap`, `matkhau`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_trees`
--

CREATE TABLE `db_trees` (
  `Mact` int(11) NOT NULL,
  `Tencay` varchar(200) NOT NULL,
  `Dacdiem` text NOT NULL,
  `Loaicay` varchar(200) NOT NULL,
  `Cachchamsoc` varchar(300) NOT NULL,
  `Hinh` varchar(500) NOT NULL,
  `Motacay` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_trees`
--

INSERT INTO `db_trees` (`Mact`, `Tencay`, `Dacdiem`, `Loaicay`, `Cachchamsoc`, `Hinh`, `Motacay`) VALUES
(10, '', '', '', '', './img/ChaoLong.png', 'ddasd'),
(11, '', '', '', '', './img/ChaoLong.png', 'ddasd'),
(12, '', '', '', '', './img/ChaoLong.png', ''),
(13, '', '', '', '', './img/ChaoLong.png', ''),
(14, '', '', '', '', './img/ChaoLong.png', ''),
(15, 'aszc', '', 'zcsdas', 'sdfsfs', './img/ChaoLong.png', 'ddasd'),
(16, 'aszc', '', 'zcsdas', 'sdfsfs', './img/ChaoLong.png', 'ddasd'),
(17, 'aszc', '', 'zcsdas', 'sdfsfs', './img/ChaoLong.png', 'ddasd'),
(18, 'aszc', '', 'zcsdas', 'sdfsfs', './img/ChaoLong.png', 'ddasd'),
(19, 'aszc', '', 'zcsdas', 'sdfsfs', './img/ChaoLong.png', 'ddasd'),
(20, 'aszc', '', 'zcsdas', 'sdfsfs', './img/ChaoLong.png', 'ddasd'),
(21, 'aszc', '', 'zcsdas', 'sdfsfs', './img/ChaoLong.png', 'ddasd');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`masoadmin`);

--
-- Chỉ mục cho bảng `db_trees`
--
ALTER TABLE `db_trees`
  ADD PRIMARY KEY (`Mact`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `masoadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `db_trees`
--
ALTER TABLE `db_trees`
  MODIFY `Mact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
