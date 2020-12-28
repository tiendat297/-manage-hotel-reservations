-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2020 at 03:50 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

DROP TABLE IF EXISTS `dichvu`;
CREATE TABLE IF NOT EXISTS `dichvu` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tendichvu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `dichvu_images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`id`, `tendichvu`, `mota`, `gia`, `dichvu_images`) VALUES
(1, 'Karaoke', 'Khách sạn được trang bị 10 phòng hát karaoke rất tiện nghi như quán hát chuyên nghiệp', 700, 'mát xa2.jpg'),
(2, 'Masage', 'Quý khách có thể tận hưởng dịch vụ masage với nhân viên chuyên nghiệp, rất thư giãn', 100, 'mat xa.jpg'),
(3, 'Ẩm thực', 'Khách sạn có những set buffet ngay tại dưới sảnh với mức giá rất hợp túi tiền', 500, 'matxa3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `don_dat_phong`
--

DROP TABLE IF EXISTS `don_dat_phong`;
CREATE TABLE IF NOT EXISTS `don_dat_phong` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `khachhang_id` int(11) DEFAULT NULL,
  `tenkhachhang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loaiphong_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenphong` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl` int(11) DEFAULT NULL,
  `ngayden` date DEFAULT NULL,
  `ngaydi` date DEFAULT NULL,
  `slnguoilon` int(11) DEFAULT NULL,
  `sltreem` int(11) DEFAULT NULL,
  `tinhtrang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giatamtinh` float DEFAULT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `don_dat_phong`
--

INSERT INTO `don_dat_phong` (`id`, `khachhang_id`, `tenkhachhang`, `sdt`, `loaiphong_id`, `tenphong`, `sl`, `ngayden`, `ngaydi`, `slnguoilon`, `sltreem`, `tinhtrang`, `ghichu`, `giatamtinh`, `feedback`, `created_at`, `updated_at`) VALUES
(52, 1, 'Tiến Đạt', '', '52', 'Phòng gia đình ', 1, '2020-07-11', '2020-07-13', 2, 1, 'check in', 'Cần phục vụ chu đáo', 0, NULL, '2020-07-09 21:44:40', '2020-07-09 21:44:40'),
(55, 21, 'hang', '', '55', 'Phòng gia đình ', 1, '2020-07-11', '2020-07-17', 4, 3, 'check out', 'Yêu cầu thêm máy lạnh', 0, NULL, '2020-07-09 22:54:21', '2020-07-09 22:54:21'),
(27, 1, 'Tiến Đạt', '', '2', 'Phòng gia đình ', 1, '2020-07-09', '2020-07-03', 2, 3, 'check out', 'Yêu cầu thêm máy lạnh', 0, NULL, '2020-07-08 08:47:03', '2020-07-08 08:47:03'),
(73, NULL, 'Thu Trang', '', '73', NULL, 1, '2020-07-16', '2020-07-18', 2, 3, NULL, NULL, 0, NULL, '2020-07-10 22:06:30', '2020-07-10 22:06:30'),
(74, 23, 'nguyễn tiến đạt', '', '74', 'Phòng gia đình ', 1, '2020-07-12', '2020-07-24', 5, 5, NULL, 'Cần thêm điều hòa', 450, NULL, '2020-07-10 22:12:30', '2020-07-10 22:12:30'),
(59, 23, 'nguyễn tiến đạt', '', '59', 'Phòng nghỉ dài ngày', 1, '2020-07-11', '2020-07-12', 2, 0, 'check in', 'Cần thêm điều hòa', 0, NULL, '2020-07-10 02:00:01', '2020-07-10 02:00:01'),
(75, 21, 'hang', '', '75', 'Phòng thương gia', 1, '2020-07-24', '2020-07-04', 4, 2, 'confirm', 'Yêu cầu thêm máy lạnh', 400, NULL, '2020-07-10 22:13:20', '2020-07-10 22:13:20'),
(71, 23, 'nguyễn tiến đạt', '', '71', 'Phòng thương gia', 1, '2020-07-13', '2020-07-15', 2, 5, 'confirm', 'Cần thêm điều hòa', 400, NULL, '2020-07-10 22:03:02', '2020-07-10 22:03:02'),
(64, 23, 'nguyễn tiến đạt', '', '64', 'Phòng nghỉ dài ngày', 1, '2020-07-12', '2020-07-13', 4, 3, 'check out', NULL, 0, 'Nhân viên rất tuyệt', '2020-07-10 10:17:14', '2020-07-10 10:17:14'),
(82, 22, 'Vinh', '111111', '82', 'Phòng gia đình', 1, '2020-07-15', '2020-07-18', 2, 4, 'check out', 'Tôi càn sự riêng tư cho phòng ngủ của mình', 400, 'Phòng rất đẹp', '2020-07-12 20:15:26', '2020-07-12 20:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

DROP TABLE IF EXISTS `loaiphong`;
CREATE TABLE IF NOT EXISTS `loaiphong` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenphong` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SLmax` int(11) DEFAULT NULL,
  `dientich` int(11) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `mota` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loaiphong_images` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phongkhach` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phongtam` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phongngu` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`id`, `tenphong`, `SLmax`, `dientich`, `gia`, `mota`, `loaiphong_images`, `phongkhach`, `phongtam`, `phongngu`, `created_at`, `updated_at`) VALUES
(1, 'Phòng thương gia', 2, 45, 500, 'Dành cho các doanh nhân khi đi công tác với các trang thiết bị xa xỉ', 'khách sạn 2.jpg', 'thuonggia3.jpg', 'thuonggia1.jpg', 'thuonggia2.jpg', '2020-07-11 06:07:43', '0000-00-00 00:00:00'),
(2, 'Phòng gia đình', 4, 50, 400, 'Phòng dành cho các gia đình có cả trẻ nhỏ với diện tích rộng và đầy đủ', 'khachsan6.jpg', 'giadinh1.jpg', 'giadinh2.jpg', 'giadinh3.jpg', '2020-07-11 18:03:22', '0000-00-00 00:00:00'),
(3, 'Phòng đơn', 2, 25, 300, 'Phòng dành cho 1,2 người đi du lịch', 'room-b2.jpg', 'phongdon1.jpg', 'phongdon2.jpg', 'phongdon3.jpg', '2020-07-11 06:07:43', '0000-00-00 00:00:00'),
(4, 'Phòng nghỉ dài ngày', 5, 40, 200, 'Phòng dành cho các khách du lịch nước ngoài muốn ở lại lâu tại VN', 'room-b3.jpg', 'dai1.jpg', 'dai2.jpg', 'dai3.jpg', '2020-07-11 06:07:43', '0000-00-00 00:00:00'),
(5, 'Phòng tình yêu', 2, 25, 300, 'Dành cho các cặp tình nhân ', 'room-b4.jpg', 'tinhyeu.jpg', 'tinhyeu2.jpg', 'tinhyeu3.jpg', '2020-07-11 06:07:43', '0000-00-00 00:00:00'),
(6, 'Phòng view ngắm biển', 4, 40, 400, 'Phòng có view biển thoáng mát phù hợp cho các sự kiện', 'khách sạn 4.jpg', 'bien1.jpg', 'bien2.jpg', 'bien3.jpg', '2020-07-11 06:07:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong_trangthietbi`
--

DROP TABLE IF EXISTS `loaiphong_trangthietbi`;
CREATE TABLE IF NOT EXISTS `loaiphong_trangthietbi` (
  `loaiphong_id` int(11) NOT NULL,
  `trangthietbi_id` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `loaiphong_trangthietbi_loaiphong_id_foreign` (`loaiphong_id`),
  KEY `loaiphong_trangthietbi_trangthietbi_id_foreign` (`trangthietbi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaiphong_trangthietbi`
--

INSERT INTO `loaiphong_trangthietbi` (`loaiphong_id`, `trangthietbi_id`, `sl`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(1, 3, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(1, 4, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(1, 5, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(1, 6, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(2, 1, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(2, 2, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(2, 3, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(2, 4, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(2, 5, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(2, 6, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(3, 1, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(3, 2, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(3, 3, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(3, 4, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(3, 5, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(3, 6, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(4, 1, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(4, 2, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(4, 3, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(4, 4, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(4, 5, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(4, 6, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(5, 1, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(5, 2, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(5, 3, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(5, 4, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(5, 5, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(5, 6, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(6, 1, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(6, 2, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(6, 3, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(6, 4, 1, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(6, 5, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(6, 6, 2, '2020-07-11 17:57:18', '0000-00-00 00:00:00'),
(1, 7, 1, '2020-07-11 18:47:38', '2020-07-11 18:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `trangthietbi`
--

DROP TABLE IF EXISTS `trangthietbi`;
CREATE TABLE IF NOT EXISTS `trangthietbi` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenthietbi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trangthietbi`
--

INSERT INTO `trangthietbi` (`id`, `tenthietbi`) VALUES
(1, 'Giường'),
(2, 'Tivi'),
(3, 'điều hòa'),
(4, 'internet'),
(5, 'Tủ lạnh'),
(6, 'phòng tắm'),
(7, 'Tủ treo đồ'),
(8, 'Bếp nướng');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `diachi`, `sdt`, `remember_token`, `created_at`, `updated_at`) VALUES
(24, 'Trang', 'trang@gmail.com', '$2y$10$AoZATYFv00BSlqAvSS/LIOpXZ9r8ViKLIaUCeGe2SoqfcAN0SXSpy', 'Hà Nội', '096772222333', NULL, '2020-07-12 04:23:06', '2020-07-12 04:23:06'),
(2, 'nguyễn tiến đạt', 'nguyentiendat29799@gmail.com', '$2y$10$4qHeUhwCWykjp/DbvcBViuxWNoxQcd4eBTREDyj611J5hkcp1gEzm', '', '', NULL, '2020-06-27 04:18:08', '2020-06-27 04:18:08'),
(3, 'Lê Thị Hằng Béo', 'hăng@gmail.com', '$2y$10$wEb4v1uQjA8RELCIQ6cDmO8VTuvyKfSwRqz3daNh6YxSSkSBA1XRy', 'Hải Tân - Hải Dương', '09756123525', NULL, '2020-06-27 04:25:26', '2020-07-11 19:33:21'),
(4, 'Nguyễn Văn Lợi', 'loi@gmail.com', '$2y$10$eq7wX6nIz1NiJSiwdaa1bejpuJRNWYVkTSzc5PPL/d3vjYqnrbxC2', '', '', NULL, '2020-06-27 06:32:05', '2020-06-27 06:32:05'),
(14, 'hang', 'lethihang08111999@gmail.com', '$2y$10$6LdWmTkbTmhxYmRRVLSVHujri9NhDAlbYjJP2e7aHA1YiVX.bJXi6', 'hh2a-ld', '0946276607', NULL, '2020-06-28 21:58:26', '2020-06-28 21:58:26'),
(23, 'nguyễn tiến đạt', 'dat@gmail.com', '$2y$10$XIJBHka3kUu4U4vaMCNLTeCJF2H6V.nMw6nBbh6FrV6KTgCuagDKi', 'Hà Nội', '0967723426', NULL, '2020-07-10 01:56:27', '2020-07-10 01:56:27'),
(15, 'duong12', 'mtduong5299@gmail.com', '$2y$10$kPv1qLnYcve/Z5pIqm4ZSepVzh5n/OmPNmNN2n14D/Y4AzXUUVCC6', 'Hải Dương', '12434566', NULL, '2020-07-06 07:13:21', '2020-07-06 07:13:21'),
(16, 'dat', 'dat.nt173493@gmail.com', '$2y$10$8RgX3gSRZGvM8Mz6pWDxrei787MBkIjEPUuALpUgl2/GJ6RnmnmQq', 'Hải Dương', '0967723426', NULL, '2020-07-08 10:01:05', '2020-07-08 10:01:05'),
(13, 'Huyễn Nguyễn', 'huyen@gmail.com', '$2y$10$2p4HvcZLtac1.RnAHiaxheIAG7a0hkkigVDlrpju7sH2jsHpeN3.m', 'Hải Dương', '0967723426', NULL, '2020-06-28 07:12:18', '2020-06-28 07:12:18'),
(17, 'Đạt', 'datfit@gmail.com', '$2y$10$GCa2VHQbrg5Axp/gCIYIu.C/vhIIcmMcXORNurRUmROi1PNgSn8yO', 'Hà Nội', '0967723426', NULL, '2020-07-08 10:01:59', '2020-07-08 10:01:59'),
(18, 'Đạt fit', 'hieudang19051999@gmail.com', '$2y$10$uzcFhtWn.IUVf9hKIzXrVOh1hJqCDvy0XygSo80Vtg9yT3k.GDDi6', 'Hà Nội', '03870807999', NULL, '2020-07-08 19:08:28', '2020-07-08 19:08:28'),
(19, 'Lê Thị Hằng Béo', 'a@gmail.com', '$2y$10$6saKX2KlyMwJBuVyZMMENexShhE1.nhS66ysc3Ft.GsDz4z5s/y9O', 'Hải Dương', '0967723426', NULL, '2020-07-08 19:15:07', '2020-07-08 19:15:07'),
(20, 'hust', 'hust@gmail.com', '$2y$10$JOvljfVP0KGHvsmL5D7SVecNuBn37C3Vco8wobRhFDfIvRz/9WFyG', 'Hà Nội', '0967723426', NULL, '2020-07-08 21:28:55', '2020-07-08 21:28:55'),
(21, 'hang', 'hanglens0811@gmail.com', '$2y$10$/YOGDE49TNCw4ceqeo4OjOBeJYRQtO5VA3RP895Np55hn5ALXtUBK', 'hải dương', '0946276607', NULL, '2020-07-09 18:57:16', '2020-07-09 18:57:16'),
(22, 'Vinh', 'vinh@gmail.com', '$2y$10$kPc2WgFh4DhU4jwVpdgvk.M5jPI0quqb9x6Hu4bP88nMg6GK.bN9a', 'Hà Nội', '111111', NULL, '2020-07-09 22:47:39', '2020-07-09 22:47:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
