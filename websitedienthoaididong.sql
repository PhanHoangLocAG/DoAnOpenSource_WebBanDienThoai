-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2020 lúc 04:49 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websitedienthoaididong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `mabinhluan` int(10) UNSIGNED NOT NULL,
  `makhachhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`mabinhluan`, `makhachhang`, `noidung`, `masanpham`, `created_at`, `updated_at`) VALUES
(1, '35249829012', '<p>jyg</p>', 'HUAWEI NOVA', '2020-12-07 11:49:21', '2020-12-07 11:49:21'),
(2, '123456789', '<p>san pham ok</p>', 'APPLE IPHONE 12 WHITE', '2020-12-15 07:00:01', '2020-12-15 07:00:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `masanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahoadon` int(10) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhtien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`masanpham`, `mahoadon`, `soluong`, `dongia`, `thanhtien`, `created_at`, `updated_at`) VALUES
('APPLE IPHONE 12 WHITE', 45, 1, '20000000', '20000000', '2020-12-15 06:58:49', '2020-12-15 06:58:49'),
('APPLE IPHONE 12 WHITE', 48, 1, '20000000', '20000000', '2020-12-24 03:14:11', '2020-12-24 03:14:11'),
('APPLE IPHONE 8', 42, 1, '8200000', '8200000', '2020-12-08 14:08:35', '2020-12-08 14:08:35'),
('HUAWEI Y7 PRO 2019', 46, 1, '8900000', '8900000', '2020-12-23 16:18:21', '2020-12-23 16:18:21'),
('HUAWEI Y7 PRO 2019', 47, 4, '8900000', '35600000', '2020-12-23 16:57:56', '2020-12-23 16:57:56'),
('VIVO V20', 41, 5, '9000000', '18000000', '2020-12-08 14:08:05', '2020-12-08 14:08:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `machucvu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenchucvu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`machucvu`, `tenchucvu`, `created_at`, `updated_at`) VALUES
('Admin', 'QUẢN LÍ CAO CẤP', '2020-11-10 09:36:14', '2020-11-10 09:36:14'),
('TT_GDNS', 'GIÁM ĐỐC NHÂN SỰ', '2020-11-09 18:37:19', '2020-11-09 18:37:19'),
('TT_GDTC', 'GIÁM ĐỐC TÀI CHÍNH', '2020-11-09 18:36:51', '2020-11-09 18:36:51'),
('TT_NVKHO', 'QUẢN LÍ KHO', '2020-11-09 18:38:06', '2020-11-09 18:38:46'),
('TT_NVKT', 'KẾ TOÁN', '2020-11-09 18:37:47', '2020-11-09 18:37:47'),
('TT_NVSALE', 'BÁN HÀNG', '2020-11-09 18:38:25', '2020-11-09 18:38:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `discount`
--

CREATE TABLE `discount` (
  `masanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `Money_discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `makhachhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh`
--

CREATE TABLE `hinh` (
  `masanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` int(10) NOT NULL,
  `makhachhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhachhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manhanvien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thanhtoan` tinyint(4) NOT NULL,
  `phuongthucgiaohang` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `makhachhang`, `tenkhachhang`, `manhanvien`, `diachi`, `sodienthoai`, `email`, `created_at`, `updated_at`, `thanhtoan`, `phuongthucgiaohang`) VALUES
(41, '35249829012', 'Phan Hoàng Lộc', 'admin', '180 Cao Lỗ , phường 4 Quận 8', '0329111928', 'phanhoangloc2017@gmail.com', '2020-12-08 14:07:44', '2020-12-08 14:08:58', 0, 1),
(42, '35249829012', 'Phan Hoàng Lộc', 'admin', '180 Cao Lỗ , phường 4 Quận 8', '0329111928', 'phanhoangloc2017@gmail.com', '2020-12-08 14:08:31', '2020-12-08 14:09:01', 0, 0),
(45, '123456789', 'Phạm Liệu', 'admin', '205 Nguyễn Xí phường 26 quận Bình Thạnh', '1234567890', 'lieu.pham@stu.edu.vn', '2020-12-15 06:58:45', '2020-12-15 06:59:27', 0, 1),
(46, '35249829012', 'Phan Hoàng Lộc', 'admin', '180 Cao Lỗ , phường 4 Quận 8', '0329111928', 'phanhoangloc2017@gmail.com', '2020-12-23 16:18:11', '2020-12-23 17:00:17', 0, 0),
(47, '35249829012', 'Phan Hoàng Lộc', 'admin', '180 Cao Lỗ , phường 4 Quận 8', '0329111928', 'phanhoangloc2017@gmail.com', '2020-12-23 16:57:48', '2020-12-23 17:00:23', 0, 0),
(48, '35249829012', 'Phan Hoàng Lộc', 'admin', '180 Cao Lỗ , phường 4 Quận 8', '0329111928', 'phanhoangloc2017@gmail.com', '2020-12-24 03:14:06', '2020-12-24 03:14:06', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `chungminhnhandan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhachhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`chungminhnhandan`, `tenkhachhang`, `gioitinh`, `ngaysinh`, `diachi`, `email`, `sodienthoai`, `password`, `created_at`, `updated_at`) VALUES
('123456789', 'Phạm Liệu', '1', '1979-08-17', '205 Nguyễn Xí phường 26 quận Bình Thạnh', 'lieu.pham@stu.edu.vn', '1234567890', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-15 06:54:13', '2020-12-15 06:54:13'),
('3524982900', 'Nguyễn Văn Hữu', '1', '2020-08-06', 'Phú Đông,Phú Long ,Phú Tân,An Giang', 'nguyenvanhuu@gmail.com', '0329111926', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-07 15:48:36', '2020-12-07 15:48:36'),
('35249829005', 'Nguyễn Văn Hữu', '1', '2020-12-03', 'Long Hòa,Phú Tân,An Giang', 'huynhvahuuan3620@gmail.com', '0329111920', '827ccb0eea8a706c4c34a16891f84e7b', '2020-12-23 16:42:25', '2020-12-23 16:42:25'),
('3524982901', 'Nguyễn Văn Tuấn', '1', '2020-12-03', 'Quận 10', 'nguyenvantuan@gmail.com', '0329111929', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-03 21:40:44', '2020-12-03 21:49:22'),
('35249829012', 'Phan Hoàng Lộc', '1', '2020-12-15', '180 Cao Lỗ , phường 4 Quận 8', 'phanhoangloc2017@gmail.com', '0329111928', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-04 01:04:39', '2020-12-04 01:04:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichthuoc`
--

CREATE TABLE `kichthuoc` (
  `makichthuoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kichthuoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kichthuoc`
--

INSERT INTO `kichthuoc` (`makichthuoc`, `kichthuoc`, `created_at`, `updated_at`) VALUES
('L', '6x20', '2020-11-09 04:59:46', '2020-11-09 04:59:46'),
('M', '5x20', '2020-11-09 04:59:38', '2020-11-09 04:59:38'),
('S', '6.5x20', '2020-11-09 04:59:55', '2020-11-09 04:59:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luong`
--

CREATE TABLE `luong` (
  `mamucluong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotien` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `luong`
--

INSERT INTO `luong` (`mamucluong`, `sotien`, `created_at`, `updated_at`) VALUES
('Level 1', '3000000', '2020-11-09 18:39:36', '2020-11-09 18:39:36'),
('Level 2', '4000000', '2020-11-09 18:39:44', '2020-11-09 18:39:44'),
('Level 3', '5000000', '2020-11-09 18:39:51', '2020-11-09 18:39:51'),
('Level 4', '6000000', '2020-11-09 18:40:04', '2020-11-09 18:40:04'),
('Level 5', '7000000', '2020-11-09 18:40:13', '2020-11-09 18:40:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `mamau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenmau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`mamau`, `tenmau`, `created_at`, `updated_at`) VALUES
('B', 'blue', '2020-11-09 04:58:41', '2020-11-09 04:58:41'),
('G', 'grey', '2020-11-09 04:59:03', '2020-11-09 04:59:03'),
('R', 'red', '2020-11-09 04:58:34', '2020-11-09 04:58:34'),
('W', 'white', '2020-11-09 04:58:54', '2020-11-09 04:58:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2020_11_01_105829_create_sanpham_table', 1),
(16, '2020_11_06_071804_create_giamgia_table', 1),
(17, '2020_11_06_103618_create_discount_table', 2),
(18, '2020_11_06_104024_create_discount_table', 3),
(20, '2020_11_08_090047_create_mausac_table', 5),
(25, '2014_10_12_000000_create_users_table', 6),
(26, '2019_08_19_000000_create_failed_jobs_table', 6),
(27, '2020_10_28_010308_create_table_the_loai', 6),
(28, '2020_10_29_094621_create_nhanvien_table', 6),
(29, '2020_10_30_050122_create_chucvu_table', 6),
(30, '2020_10_30_060653_create_luong_table', 6),
(31, '2020_11_06_105047_create_discount_table', 6),
(32, '2020_11_08_090153_create_hinh_table', 6),
(33, '2020_11_08_091043_create_mausac_table', 6),
(34, '2020_11_08_091303_create_kichthuoc_table', 6),
(35, '2020_11_08_221922_create_sanpham_table', 6),
(36, '2020_11_11_042552_create_khachhang_table', 7),
(37, '2020_11_11_043211_create_khachhang_table', 8),
(38, '2020_11_11_073618_create_khachhang_table', 9),
(39, '2020_11_11_080634_create_khachhang_table', 10),
(40, '2020_11_20_164340_create_hoadon_table', 11),
(41, '2020_11_20_164730_create_chitiethoadon_table', 12),
(42, '2020_11_20_171308_create_yeuthich_table', 13),
(43, '2020_11_21_084607_create_giohang_table', 14),
(44, '2020_11_24_054348_create_hoadon_table', 15),
(45, '2020_11_24_061420_create_hoadon_table', 16),
(46, '2020_11_24_061653_create_hoadon_table', 17),
(47, '2020_11_24_065510_create_chitiethoadon_table', 18),
(48, '2020_12_07_153854_create_binhluan_table', 19),
(49, '2020_12_07_183232_create_binhluan_table', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manhanvien` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tennhanvien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `sodienthoai` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayvaolam` date NOT NULL,
  `hinhanh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maluong` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manhanvien`, `tennhanvien`, `gioitinh`, `diachi`, `ngaysinh`, `sodienthoai`, `email`, `chucvu`, `ngayvaolam`, `hinhanh`, `maluong`, `password`, `created_at`, `updated_at`) VALUES
('DHTT5001', 'Phan Thị Mỹ Linh', 0, 'Phú Đông,Phú Long ,Phú Tân,An Giang', '1997-11-09', '0329111920', 'phanthimylinh@gmail.com', 'TT_GDNS', '2020-10-11', '1604980383_linh.jpg', 'Level 1', '1234567890', '2020-11-09 20:53:03', '2020-11-09 21:35:20'),
('DHTT5002', 'Nguyễn Thị Kim Ngân', 0, '180 Cao Lỗ , phường 4 Quận 8', '1993-05-18', '0329111921', 'nguyenthikimngan@gmail.com', 'TT_NVKT', '2020-10-11', '1604980554_ngan.jpg', 'Level 1', '1234567890', '2020-11-09 20:55:54', '2020-11-09 20:55:54'),
('DHTT5003', 'Đào Văn Quốc', 1, 'Long Phú,Tân Châu ,An Giang', '1998-06-09', '0329111922', 'nguyenvanquoc@gmail.com', 'TT_NVKHO', '2020-10-11', '1604981509_quoc.jpg', 'Level 1', '1234567890', '2020-11-09 21:11:49', '2020-11-09 21:11:49'),
('DHTT5004', 'Nguyễn Văn Sơn', 1, 'Long Hòa,Phú Tân,An Giang', '1998-07-09', '0329111924', 'nguyenvanson@gmail.com', 'TT_NVKT', '2020-10-11', '1604983401_son.jpg', 'Level 1', 'e807f1fcf82d132f9bb018ca6738a19f', '2020-11-09 21:43:21', '2020-11-09 21:43:21'),
('QTT1000', 'Phan Hoàng Lộc', 1, '180 Cao Lỗ , phường 4 Quận 8', '1999-09-09', '0329111928', 'phanhoangloc2017@gmail.com', 'Admin', '2020-11-11', '1605055733_son.jpg', 'Level 2', 'e807f1fcf82d132f9bb018ca6738a19f', '2020-11-10 17:48:53', '2020-11-10 17:48:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaisanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bonho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hedieuhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manhinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketnoi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trongluong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mausac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kichthuoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `tensanpham`, `loaisanpham`, `bonho`, `hedieuhanh`, `manhinh`, `camera`, `ketnoi`, `trongluong`, `pin`, `hinh`, `mausac`, `kichthuoc`, `giaban`, `soluong`, `created_at`, `updated_at`) VALUES
('APPLE IPHONE 12 BLUE', 'iPhone 12', 'IPHONE USA', 'Dung lượng 64GB', 'IOS 8.0', '5x20 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1607063841_iphone-12-blue.jpeg;1607063841_iphone12-blue-1.png', 'B', 'L', '17000000', 21, '2020-12-03 23:37:21', '2020-12-15 07:01:09'),
('APPLE IPHONE 12 GREY', 'iPhone 12', 'IPHONE USA', 'Dung lượng 32GB', 'IOS 8.0', '5x20 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1607063808_iPhone-12-grey.jpg;1607063808_iphone12-grey-1.png;1607063808_iphone12-grey-2.jpg', 'G', 'L', '23000000', 12, '2020-12-03 23:36:48', '2020-12-03 23:36:48'),
('APPLE IPHONE 12 WHITE', 'iPhone 12', 'IPHONE USA', 'Dung lượng 32GB', 'IOS 8.0', '5x20 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1607064075_iphone12-white.jpg;1607064075_iphone12-white-1.jpg;1607064075_iphone12-white-2.jpg', 'W', 'L', '20000000', 14, '2020-12-03 23:41:15', '2020-12-03 23:41:15'),
('APPLE IPHONE 8', 'iPhone 8', 'IPHONE USA', '64GB Rom', 'IOS 10', 'OLED 3', '2 camera trước và sau', 'Bluetooth,Wifi', '2gram', '3000mAP', '1607407089_iphone_8_1.jpg;1607407089_iphone_8_2jpg.jpg;1607407089_iphone_8_3.png', 'W', 'L', '8200000', 10, '2020-12-08 05:58:09', '2020-12-08 05:58:09'),
('APPLE IPHONE XS', 'iPhone XS', 'IPHONE USA', '256GB Rom', 'IOS 12', 'OLED 3', '2 camera trước và sau', 'Bluetooth,Wifi', '1,7gram', '3000mAP', '1607406895_iphone_xs_1.png;1607406895_iphone_xs_2.jpg;1607406895_iphone_xs_3.jpg', 'G', 'L', '11000000', 20, '2020-12-08 05:54:55', '2020-12-08 05:54:55'),
('HUAWEI MATE', 'Huawei mate 40', 'HUAWEI CHINA', 'Dung lượng 32GB', 'Anroid 9.0', '5x20 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1607066057_huawei-mate-40.jpg;1607066057_huawei-mate-40-1.jpg;1607066057_huawei-mate-40-2.jpg', 'B', 'L', '25000000', 19, '2020-12-04 00:14:17', '2020-12-04 00:14:17'),
('HUAWEI NOVA', 'Huawei nova 7i', 'HUAWEI CHINA', 'Dung lượng 32GB', 'Anroid 7.0', '5x30 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1607065783_huawei-nova-7i.jpg;1607065783_huawei-nova-7i-1.jpg', 'W', 'L', '8000000', 13, '2020-12-04 00:09:43', '2020-12-04 00:09:43'),
('HUAWEI P50', 'Huawei p50', 'HUAWEI CHINA', 'Dung lượng 64GB', 'Anroid 7.0', '5x20 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1607066214_huawei-p50.jpg;1607066214_huawei-P50-1.jpg', 'W', 'L', '30000000', 13, '2020-12-04 00:16:54', '2020-12-04 00:16:54'),
('HUAWEI Y7 PRO 2019', 'Huawei y7 pro', 'HUAWEI CHINA', '64GB Rom', 'Anroid 10', 'OLED 3', '2 camera trước và sau', 'Bluetooth,Wifi', '2,2gram', '3500mAP', '1607407351_huawei_y7_pro_1.jpg;1607407351_huawei_y7_pro_2.jpg;1607407351_huawei_y7_pro_3.jpg', 'R', 'L', '8900000', 13, '2020-12-08 06:02:31', '2020-12-08 06:02:31'),
('HUAWEI Y9 PRIME 2019', 'Huawei y9 prime', 'HUAWEI CHINA', '128GB Rom', 'Anroid 10', 'OLED 3', '2 camera trước và sau', 'Bluetooth,Wifi', '2gram', '4000mAP', '1607407590_huawei_y9_prime_1.jpg;1607407590_huawei_y9_prime_2.jpg;1607407590_huawei_y9_prime_3jpg.jpg', 'B', 'L', '11500000', 12, '2020-12-08 06:06:30', '2020-12-08 06:06:30'),
('OPPO 2020 A12', 'Oppo A12', 'OPPO CHINA', 'Dung lượng 64GB', 'Anroid 7.0', '5x20 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1607065616_oppo-a12.jpg;1607065616_oppo-a12-1.jpg;1607065616_oppo-a12-2.jpg', 'B', 'L', '4000000', 9, '2020-12-04 00:06:56', '2020-12-04 00:06:56'),
('OPPO A92', 'Oppo A92', 'OPPO CHINA', 'Dung lượng 64GB', 'Anroid 7.0', '5x20 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1607065386_oppo-a92.jpg;1607065386_oppo-a92-1.jpg;1607065386_oppo-a92-2.jpg', 'B', 'L', '7000000', 14, '2020-12-04 00:03:06', '2020-12-04 00:03:06'),
('OPPO RENNO', 'Oppo renno 3', 'OPPO CHINA', 'Dung lượng 64GB', 'Anroid 9.0', '5x20 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1607065119_oppo-renno-3.jpeg;1607065119_oppo-renno-3-2.jpg;1607065119_oppo-reno-3-1.jpg', 'B', 'L', '25000000', 14, '2020-12-03 23:58:39', '2020-12-03 23:58:39'),
('OPPO9000', 'OPPO 11', 'OPPO CHINA', 'Dung lượng 32GB', 'Anroid 9.0', '5x20 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1608770027_SoDoChucNang.png', 'B', 'L', '20000000', 12, '2020-12-24 00:33:47', '2020-12-24 00:33:47'),
('SAMSUNG GALAXY', 'Samsung galaxy note 20', 'SAMSUNG KOREA', 'Dung lượng 64GB', 'Anroid 9.0', '5x30 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '2000mAP', '1607064437_samsung-galaxy-note-black-20.jpg;1607064437_samsung-galaxy-note-black-20-1.jpg;1607064437_samsung-galaxy-note-black-20-2.jpg', 'G', 'M', '19000000', 17, '2020-12-03 23:47:17', '2020-12-03 23:47:17'),
('SAMSUNG GALAXY NOTE', 'Samsung galaxy note 10', 'SAMSUNG KOREA', 'Dung lượng 32GB', 'Anroid 9.0', '5x20 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1607064936_samsung-galaxy-note-30.jpg;1607064936_samsung-galaxy-note-30-1.jpg;1607064936_samsung-galaxy-note-30-2.jpg', 'W', 'L', '11000000', 25, '2020-12-03 23:55:36', '2020-12-03 23:55:36'),
('SAMSUNG GALAXY S4', 'SAMSUNG S4', 'SAMSUNG KOREA', '32GB Rom và 4GB Ram', 'Anroid 9', 'OLED 3', '2 camera trước và sau', 'Bluetooth,Wifi', '2,6gram', '3000mAP', '1607406063_galaxy_s4_1.jpg;1607406063_galaxy_s4_2.jpg;1607406063_galaxy_s4_3.jpg', 'W', 'L', '2000000', 5, '2020-12-08 05:41:03', '2020-12-08 05:41:03'),
('SAMSUNG GALAXY S7', 'SAMSUNG S7', 'SAMSUNG KOREA', '32GB Rom và 4GB Ram', 'Anroid 9', 'OLED 3', '2 camera trước và sau', 'Bluetooth,Wifi', '2,6gram', '3000mAP', '1607405823_galaxy_s7_1.jpg;1607405823_galaxy_s7_2.jpg;1607405823_samsung_s7_3.jpg', 'B', 'L', '5000000', 12, '2020-12-08 05:37:03', '2020-12-08 05:37:03'),
('SAMSUNG GALAXY Z', 'Samsung galaxy z flip', 'SAMSUNG KOREA', 'Dung lượng 32GB', 'Anroid 9.0', '5x30 OLED', '2 camera trước và sau', 'Blutooth,4G,Mic', '0,2Gram', '3000mAP', '1607064693_samsung-galaxy-note-black-20.jpg;1607064693_samsung-galaxy-note-black-20-1.jpg', 'W', 'L', '35000000', 9, '2020-12-03 23:51:33', '2020-12-03 23:51:33'),
('VIVO IQOO', 'VIVO IQOO', 'VIVO CHINA', '32GB Rom và 4GB Ram', 'Anroid 9', 'OLED 3', '2 camera trước và sau', 'Bluetooth,Wifi', '2,6gram', '3000mAP', '1607403339_vivo_iqoo.jpg;1607403339_vivo_iqoo_1.jpg', 'R', 'M', '8500000', 15, '2020-12-08 04:55:39', '2020-12-08 04:55:39'),
('VIVO V20', 'Vivo v20', 'VIVO CHINA', '32GB Rom và 4GB Ram', 'Anroid 9', 'OLED 3', '2 camera trước và sau', 'Bluetooth,Wifi', '2,6gram', '3000mAP', '1607403184_vivo_v20.jpg;1607403184_vivo_v20_1.jpg', 'W', 'M', '9000000', 13, '2020-12-08 04:53:04', '2020-12-08 04:53:04'),
('VIVO X30', 'VIVO X30', 'VIVO CHINA', '128GB Rom và 8GB Ram', 'Anroid 10', 'OLED 3', '2 camera trước và sau', 'Bluetooth,Wifi', '2,5gram', '4000mAP', '1607406438_vivo_x30_1.jpg;1607406438_vivo_x30_2.jpg;1607406438_vivo_x30_3.jpg', 'G', 'L', '17000000', 15, '2020-12-08 05:47:18', '2020-12-08 05:47:18'),
('VSMART ACTIVE 3', 'vsmart active 3', 'VSMART VIETNAM', '32GB Rom và 4GB Ram', 'Anroid 9', 'OLED 3', '2 camera trước và sau', 'Bluetooth,Wifi', '2,6gram', '3000mAP', '1607402948_vsmart_active3.jpg;1607402948_vsmart_active3_1.jpg;1607402948_vsmart_active3_2.jpg', 'W', 'L', '6000000', 12, '2020-12-08 04:49:08', '2020-12-08 04:49:08'),
('VSMART LIVE', 'Vsmart live 3', 'VSMART VIETNAM', '32GB Rom và 4GB Ram', 'Anroid 9', 'OLED 3', '2 camera trước và sau', 'Bluetooth,Wifi', '2,6gram', '3000mAP', '1607403104_vsmart_live.jpg;1607403104_vsmart_live_1.jpg', 'W', 'M', '8000000', 10, '2020-12-08 04:51:44', '2020-12-08 04:51:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `maloai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenloai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhasanxuat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donvilaprap` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`maloai`, `tenloai`, `nhasanxuat`, `donvilaprap`, `created_at`, `updated_at`, `logo`) VALUES
('HUAWEI CHINA', 'HUAWEI', 'HUAWEI COMPANY', 'COMPANY COMBINATION HUAWEI', '2020-11-09 18:14:34', '2020-11-09 18:14:34', '1604970874_huawei.png'),
('IPHONE USA', 'IPHONE', 'APPLE USA', 'FOXCOMN', '2020-11-09 18:09:23', '2020-11-09 18:09:23', '1604970563_iphone.jpg'),
('OPPO CHINA', 'OPPO', 'OPPO MACHINE CHINA', 'COMPANY OPPO DESIGN', '2020-11-09 18:07:25', '2020-11-09 18:07:25', '1604970445_oppo.png'),
('SAMSUNG KOREA', 'SAMSUNG', 'SAMSUNG VIETNAM', 'SAMSUNG COMBINATION VIETNAM', '2020-11-09 18:12:13', '2020-11-09 18:12:13', '1604970733_samsung.jpg'),
('VIVO CHINA', 'VIVO', 'VIVO COMPANY CHINA', 'VIVO COMBINATION DESIGN', '2020-11-09 18:10:57', '2020-11-09 18:10:57', '1604970657_vivo.jpg'),
('VSMART VIETNAM', 'VSMART', 'VINSMART MACHINE', 'VSMART COMBINATION', '2020-11-09 18:13:26', '2020-11-09 18:13:26', '1604970806_vsmart.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeuthich`
--

CREATE TABLE `yeuthich` (
  `id` int(10) NOT NULL,
  `makhachhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `yeuthich`
--

INSERT INTO `yeuthich` (`id`, `makhachhang`, `masanpham`, `created_at`, `updated_at`) VALUES
(1, '3524982901', 'OPPO 2020', '2020-12-03 21:47:28', '2020-12-03 21:47:28'),
(2, '3524982901', 'SAMSUNG 2020', '2020-12-03 21:47:34', '2020-12-03 21:47:34'),
(3, '3524982901', 'VSMART 2020', '2020-12-03 21:47:42', '2020-12-03 21:47:42'),
(5, '35249829012', 'APPLE IPHONE 8', '2020-12-14 04:00:51', '2020-12-14 04:00:51');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabinhluan`),
  ADD KEY `FK_BL_KH` (`makhachhang`),
  ADD KEY `FK_BL_SP` (`masanpham`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`masanpham`,`mahoadon`),
  ADD KEY `mahoadon` (`mahoadon`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`machucvu`);

--
-- Chỉ mục cho bảng `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`masanpham`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`makhachhang`,`masanpham`),
  ADD KEY `FK_GH_SP` (`masanpham`);

--
-- Chỉ mục cho bảng `hinh`
--
ALTER TABLE `hinh`
  ADD PRIMARY KEY (`masanpham`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `FK_HD_KH` (`makhachhang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`chungminhnhandan`);

--
-- Chỉ mục cho bảng `kichthuoc`
--
ALTER TABLE `kichthuoc`
  ADD PRIMARY KEY (`makichthuoc`);

--
-- Chỉ mục cho bảng `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`mamucluong`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`mamau`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manhanvien`),
  ADD KEY `FK_NV_CV` (`chucvu`),
  ADD KEY `FK_NV_LUONG` (`maluong`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `FK_SP_MAU` (`mausac`),
  ADD KEY `FK_SP_LOAI` (`loaisanpham`),
  ADD KEY `FK_SP_KT` (`kichthuoc`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_YT_KH` (`makhachhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabinhluan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_BL_KH` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`chungminhnhandan`),
  ADD CONSTRAINT `FK_BL_SP` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `FK_CTHD_HD` FOREIGN KEY (`mahoadon`) REFERENCES `hoadon` (`mahoadon`),
  ADD CONSTRAINT `FK_CTHD_SP` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `discount`
--
ALTER TABLE `discount`
  ADD CONSTRAINT `discount_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `FK_GH_KH` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`chungminhnhandan`),
  ADD CONSTRAINT `FK_GH_SP` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_HD_KH` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`chungminhnhandan`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `FK_NV_CV` FOREIGN KEY (`chucvu`) REFERENCES `chucvu` (`machucvu`),
  ADD CONSTRAINT `FK_NV_LUONG` FOREIGN KEY (`maluong`) REFERENCES `luong` (`mamucluong`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_SP_KT` FOREIGN KEY (`kichthuoc`) REFERENCES `kichthuoc` (`makichthuoc`),
  ADD CONSTRAINT `FK_SP_LOAI` FOREIGN KEY (`loaisanpham`) REFERENCES `theloai` (`maloai`),
  ADD CONSTRAINT `FK_SP_MAU` FOREIGN KEY (`mausac`) REFERENCES `mausac` (`mamau`);

--
-- Các ràng buộc cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `FK_YT_KH` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`chungminhnhandan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
