-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2024 lúc 03:53 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vanphongpham`
--

CREATE TABLE `vanphongpham` (
  `mah` int(9) NOT NULL,
  `tenhang` varchar(30) NOT NULL,
  `NCC` varchar(30) NOT NULL,
  `gia` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vanphongpham`
--

INSERT INTO `vanphongpham` (`mah`, `tenhang`, `NCC`, `gia`) VALUES
(243525, 'bút chì', 'Thiên Long', 3000),
(345236, 'thước kẻ', 'Hoàng Long', 10000),
(413534, 'bút bi', 'Hoàng Long', 3000),
(435254, 'bút xoá', 'Hoàng Long', 15000),
(642526, 'tẩy', 'ThiênLong', 10000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `vanphongpham`
--
ALTER TABLE `vanphongpham`
  ADD PRIMARY KEY (`mah`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `vanphongpham`
--
ALTER TABLE `vanphongpham`
  MODIFY `mah` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=642527;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
