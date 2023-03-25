-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 01, 2023 lúc 11:12 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tendanhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'Oppo'),
(2, 'SamSung'),
(3, 'Apple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nguoidung_id` int(11) NOT NULL,
  `ngay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tongtien` float NOT NULL DEFAULT '0',
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nguoidung_id` (`nguoidung_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `nguoidung_id`, `ngay`, `tongtien`, `ghichu`, `diachi`) VALUES
(1, 4, '2020-10-23 13:38:40', 1320000, NULL, ''),
(2, 5, '2020-10-24 15:13:10', 3920000, NULL, ''),
(3, 8, '2021-03-13 16:38:57', 6035000, NULL, ''),
(4, 9, '2021-03-13 16:53:28', 6035000, NULL, ''),
(5, 10, '2021-03-13 16:55:44', 7800000, NULL, ''),
(14, 15, '2022-12-19 21:15:51', 186494000, NULL, '1234'),
(15, 1, '2022-12-19 21:16:35', 7999000, NULL, '34563456'),
(16, 1, '2022-12-19 21:18:06', 39995000, NULL, '12341234'),
(17, 14, '2022-12-19 21:19:38', 21000000, NULL, '123123'),
(18, 1, '2022-12-19 21:20:09', 21300000, NULL, '2345'),
(19, 15, '2022-12-19 21:36:14', 10100000, NULL, '223542354'),
(20, 14, '2022-12-20 07:30:57', 7999000, NULL, '2345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangct`
--

DROP TABLE IF EXISTS `donhangct`;
CREATE TABLE IF NOT EXISTS `donhangct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donhang_id` int(11) NOT NULL,
  `mathang_id` int(11) NOT NULL,
  `dongia` float NOT NULL DEFAULT '0',
  `soluong` int(11) NOT NULL DEFAULT '1',
  `thanhtien` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `donhang_id` (`donhang_id`),
  KEY `mathang_id` (`mathang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangct`
--

INSERT INTO `donhangct` (`id`, `donhang_id`, `mathang_id`, `dongia`, `soluong`, `thanhtien`) VALUES
(1, 1, 1, 1320000, 1, 1320000),
(2, 2, 3, 2130000, 1, 2130000),
(3, 2, 7, 1790000, 1, 1790000),
(4, 4, 9, 1775000, 1, 1775000),
(5, 4, 4, 2130000, 2, 4260000),
(13, 14, 7, 7999000, 6, 47994000),
(14, 14, 9, 37750000, 2, 75500000),
(15, 14, 8, 21000000, 3, 63000000),
(16, 15, 7, 7999000, 1, 7999000),
(17, 16, 7, 7999000, 5, 39995000),
(18, 17, 8, 21000000, 1, 21000000),
(19, 18, 3, 21300000, 1, 21300000),
(20, 19, 2, 2020000, 5, 10100000),
(21, 20, 7, 7999000, 1, 7999000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mathang`
--

DROP TABLE IF EXISTS `mathang`;
CREATE TABLE IF NOT EXISTS `mathang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenmathang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `giagoc` float NOT NULL DEFAULT '0',
  `giaban` float NOT NULL DEFAULT '0',
  `soluongton` int(11) NOT NULL DEFAULT '0',
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT '0',
  `luotmua` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `danhmuc_id` (`danhmuc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mathang`
--

INSERT INTO `mathang` (`id`, `tenmathang`, `mota`, `giagoc`, `giaban`, `soluongton`, `hinhanh`, `danhmuc_id`, `luotxem`, `luotmua`) VALUES
(1, 'Samsung Galaxy A32', 'xxxxx', 0, 1320000, 10, 'images/A32.jpg', 2, 3, 0),
(2, 'Oppo A12 ', 'xxxxxxxx', 0, 2020000, 5, 'images/CGG_OPPO_A12.jpg', 1, 10, 0),
(3, 'Oppo Reno7 Z 5G', 'xxxxxx', 0, 21300000, 9, 'images/Reno7 Z 5G.jpg', 1, 10, 0),
(4, 'IP13 Promax 512GB ', 'xxxxxxx', 0, 2130000, 10, 'images/ip13.jpg', 3, 7, 0),
(5, 'Iphone 12 Promax 256gb 5G', 'xxxxx', 0, 20500000, 10, 'images/ip12.jpg', 3, 4, 0),
(6, 'Samsung galaxy ZFlip 3 5G', 'xxxxxxx', 0, 18500000, 10, 'images/zflip3.png', 2, 4, 0),
(7, 'Oppo A9S', 'xxxxx', 0, 7999000, 6, 'images/th.jpg', 1, 5, 0),
(8, 'SamSung S22 Ultra', 'xxxxxxxx', 0, 21000000, 4, 'images/samsung-galaxy-s22-ultra.jpg', 2, 1, 0),
(9, 'Điện thoại IP14 ProMax 256gb', 'xxxxxxxxxxx', 39000000, 37750000, 5, 'images/product1.jpg', 3, 10, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai` tinyint(4) NOT NULL DEFAULT '3',
  `trangthai` tinyint(4) NOT NULL DEFAULT '1',
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `email`, `sodienthoai`, `matkhau`, `hoten`, `loai`, `trangthai`, `hinhanh`) VALUES
(1, 'abc@abc.com', '0988994683', '21232f297a57a5a743894a0e4a801fc3', 'Quản trị ABC', 1, 1, NULL),
(2, 'def@abc.com', '0988994684', '900150983cd24fb0d6963f7d28e17f72', 'Nhân viên DEF', 2, 1, NULL),
(3, 'ghi@abc.com', '0988994685', '900150983cd24fb0d6963f7d28e17f72', 'Nhân viên GHI', 2, 1, NULL),
(4, 'kh1@gmail.com', '0988994686', '900150983cd24fb0d6963f7d28e17f72', 'Nguyễn Thị Thu An', 3, 1, NULL),
(5, 'kh2@gmail.com', '0988994687', '12345678', 'Hồ Xuân Minh', 3, 1, NULL),
(8, 'ccc@abc.com', '1234567892', 'd893377c9d852e09874125b10a0e4f66', 'CCC', 3, 1, NULL),
(9, 'ddd@abc.com', '1234567893', '43042f668f07adfd174cb1823d4795e1', 'DDD', 3, 1, NULL),
(10, 'eee@abc.com', '1234567894', 'f66f4446648ae7ae56419eca43bf2b8a', 'EEE', 3, 1, NULL),
(12, 'mackiepsau007@gmail.com', '099999999', '7cb560f2a84db870c8d9025b2acd87f2', 'Ngân', 3, 1, NULL),
(14, 'user@gmail.com', '0903113113', 'ee11cbb19052e40b07aac0ca060c23ee', 'Minh Quân', 3, 1, NULL),
(15, 'admin@gmail.com', '0963003309', '21232f297a57a5a743894a0e4a801fc3', 'Minh Quân', 1, 1, 'ip13.jpg'),
(16, 'staff@gmail.com', '0963008977', '1253208465b1efa876f982d8a9e73eef', 'Nguyễn Văn Qúy', 2, 1, ''),
(17, 'admin1@gmail.com', '0909090909', '123', 'Admin', 1, 1, NULL);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhangct`
--
ALTER TABLE `donhangct`
  ADD CONSTRAINT `donhangct_ibfk_1` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donhangct_ibfk_2` FOREIGN KEY (`mathang_id`) REFERENCES `mathang` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD CONSTRAINT `mathang_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
