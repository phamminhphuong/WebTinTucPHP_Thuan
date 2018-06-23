-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 21, 2018 lúc 05:12 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php3`
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
('abd', 'abc', 'BÃ€I Táº¬P THá»°C HÃ€NH THÃŒ HIá»†N Táº I TIáº¾P DIá»„N.docx', 'cbn', '', '2018-06-05'),
('asew', 'qwer', '7.jpg', 'qwer', 'B', '2018-06-05'),
('bai', 'tap', '', 'tienf anh', 'G', '2018-06-05'),
('M1', 'acctive corea', '4.jpg', 'sach bai tap', 'A', '2018-06-05'),
('M2', 'ngu phap tieng anh', 'book040.jpg', 'giao duc ngu phap', 'AB', '2018-06-05'),
('m3', 'toan', '5.jpg', 'good', 'K', '2018-06-05'),
('xxwa', 'ds', '4.jpg', 'ddd', '', '2018-06-19');

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
(2, 2, 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b', 'b', '1'),
(3, 2, 'ac', 'e2075474294983e013ee4dd2201c7a73', 'ac', 'ac', '2444'),
(4, 2, 'thu@gmail.com', '202cb962ac59075b964b07152d234b70', 'thu', 'aad', '3457'),
(5, 2, 'abc', '827ccb0eea8a706c4c34a16891f84e7b', 'abc', 'ad2', 'abc'),
(6, 2, 'g@gmail.com', '02522a2b2726fb0a03bb19f2d8d9524d', 'acbc', 'hn', '123455677');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
