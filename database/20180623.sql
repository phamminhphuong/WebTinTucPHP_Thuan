-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 23, 2018 lúc 11:54 AM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webtintucphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `b_id` varchar(10) NOT NULL,
  `b_name` text,
  `b_img` text,
  `b_des` text,
  `cate_id` varchar(11) DEFAULT NULL,
  `b_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='data for list book';

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`b_id`, `b_name`, `b_img`, `b_des`, `cate_id`, `b_date`) VALUES
('Kh2', 'Khoa há»c viá»…n tÆ°á»Ÿng', '5.jpg', 'Tháº¿ giá»›i khá»§ng long', 'V', '2018-06-23'),
('M1', 'acctive corea', '4.jpg', 'sach bai tap', 'A', '2018-06-05'),
('M2', 'ngu phap tieng anh', 'book040.jpg', 'giao duc ngu phap', 'AB', '2018-06-05'),
('m2as', 'SÃ¡ch tiáº¿ng anh', '3.jpg', 'SÃ¡ch dáº¡y tiáº¿ng anh hay', 'A', '2018-06-23'),
('m3', 'toan', '5.jpg', 'good', 'K', '2018-06-05'),
('sadsds', 'SÃ¡ch truyá»‡n', 'hai-so-phan.450x652.w.b.jpg', 'LÃ  quyá»ƒn sÃ¡ch hay', 'G', '2018-06-23'),
('sv2', 'SÃ¡ch bÃ¡ch khoa', 'sÃ¡ch gt trong ks(2).jpg', 'LÃ  sÃ¡ch hay', 'P', '2018-06-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `cate_id` varchar(2) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cate_name` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
('A', 'ForeignLan'),
('G', 'Major'),
('K', 'Specialist'),
('P', 'Encycloped'),
('V', 'Sciencefic');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role` int(5) DEFAULT '2',
  `user_email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `user_password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `user_address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `user_phone` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `role`, `user_email`, `user_password`, `username`, `user_address`, `user_phone`) VALUES
(4, 1, 'thu@gmail.com', '202cb962ac59075b964b07152d234b70', 'thu', 'aad', '3457'),
(6, 2, 'g@gmail.com', '02522a2b2726fb0a03bb19f2d8d9524d', 'acbc', 'hn', '123455677'),
(7, 2, 'minha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'minhanh', 'ha noi', '123456'),
(8, 1, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'HÃ  Ná»™i', '0987654321'),
(9, 2, 'thuha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'thuha', 'Quáº£ng Nam', '123456789');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
