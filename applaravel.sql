-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2019 lúc 03:38 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `applaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_billdetail` int(10) UNSIGNED NOT NULL,
  `id_billfk` int(10) UNSIGNED NOT NULL,
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_billdetail`, `id_billfk`, `id_sanpham`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 13, 20, 2, 13000000, '2019-12-09 16:19:24', '2019-12-09 16:19:24'),
(2, 13, 2, 1, 21990000, '2019-12-09 16:19:24', '2019-12-09 16:19:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_com` int(10) UNSIGNED NOT NULL,
  `com_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `com_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `com_noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `com_sp` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_com`, `com_email`, `com_name`, `com_noidung`, `type`, `com_sp`, `created_at`, `updated_at`) VALUES
(1, 'tuandk@gmail.com', 'Văn Tuấn', 'sản phẩm rất tốt\r\n', '0', 23, '2019-06-06 08:13:37', '2019-06-06 08:13:37'),
(2, 'member@gmail.com', 'member', 'tôi muốn mua sản phẩm này', '0', 29, '2019-06-06 15:50:01', '2019-06-06 15:50:01'),
(3, 'tuandk@gmail.com', 'Văn Tuấn', '1111111111111111', '0', 29, '2019-06-06 16:03:02', '2019-06-06 16:03:02'),
(4, 'tuandk@gmail.com', 'Văn Tuấn', 'Sản phẩm tuyệt vời', '0', 29, '2019-06-06 16:05:05', '2019-06-06 16:05:05'),
(5, 'tuandk@gmail.com', 'Văn Tuấn', 'testttttttt', '0', 29, '2019-06-06 16:05:35', '2019-06-06 16:05:35'),
(6, 'member@gmail.com', 'member2', 'sử dụng rất tốt ', '0', 23, '2019-12-09 16:57:51', '2019-12-09 16:57:51'),
(7, 'member@gmail.com', 'member2', 'Đang hóng em nó', '1', 1, '2019-12-18 14:09:30', '2019-12-18 14:09:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id_danhmuc` int(10) UNSIGNED NOT NULL,
  `ten_danhmuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug_danhmuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`id_danhmuc`, `ten_danhmuc`, `slug_danhmuc`, `created_at`, `updated_at`) VALUES
(1, 'IPhone', 'iphone', NULL, '2019-06-07 06:01:11'),
(2, 'Samsung', 'samsung', NULL, NULL),
(4, 'Xiao Mi', 'xiao-mi', '2019-04-30 01:43:41', '2019-04-30 01:43:41'),
(5, 'HuaWei', 'huawei', '2019-04-30 01:44:07', '2019-04-30 01:44:07'),
(6, 'Nokia', 'nokia', '2019-04-30 01:44:15', '2019-04-30 01:44:15'),
(7, 'Oppo', 'oppo', '2019-04-30 01:44:25', '2019-04-30 01:44:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_bill` int(10) UNSIGNED NOT NULL,
  `email_bill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hovaten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `totall` double NOT NULL,
  `date_order` datetime NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_bill`, `email_bill`, `hovaten`, `sdt`, `diachi`, `totall`, `date_order`, `note`, `created_at`, `updated_at`, `status`) VALUES
(13, 'member@gmail.com', 'Nguyễn VăN Tuấn', '0923321325', 'daklak', 47990000, '2019-12-09 23:19:24', '						\r\n					', '2019-12-09 16:19:24', '2019-12-09 16:19:24', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_19_030304_vp_user', 1),
(4, '2019_04_19_142817_danhmucsp', 2),
(5, '2019_04_19_154740_UpdateDanhmucSP', 3),
(6, '2019_04_20_013540_sanpham', 4),
(7, '2019_05_02_143040_create_uploads_table', 5),
(8, '2019_05_07_112600_sanpham', 6),
(9, '2019_05_09_153940_comment', 7),
(10, '2019_05_09_161638_comment', 8),
(11, '2019_05_23_134128_giohang', 9),
(12, '2019_05_26_074804_makeUniqueEmail', 10),
(13, '2019_05_26_075953_KhoaNgoaiComment', 11),
(14, '2019_05_26_080652_updateComment', 12),
(15, '2019_05_26_080749_updateUser', 12),
(17, '2019_05_26_081854_addNameUser', 13),
(18, '2019_05_27_171830_Hoadon', 14),
(19, '2019_05_27_180440_chitiethoadon', 15),
(20, '2019_05_29_172548_addforeignkeyHoadonchitietTable', 15),
(22, '2019_06_02_161610_updateHoadonTable', 16),
(23, '2019_06_06_225546_addNameTableComment', 17),
(24, '2019_11_29_230356_allter_table_bill_add_status_column', 18),
(25, '2019_12_06_114154_add_column_status_for_usertable', 19),
(26, '2019_12_06_122751_create_posts_table', 20),
(28, '2019_12_08_213517_add_img_description_column_to_posts_table', 21),
(30, '2019_12_17_190347_add-type-column-table-comment', 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`, `product_id`, `created_at`, `updated_at`, `img`, `description`) VALUES
(5, 'Realme C2 2 GB/32 GB tiếp tục điều chỉnh giảm giá, có gì HOT đáng mua?', '<p>s</p>\r\n', 11, '2019-12-08 17:22:22', '2019-12-16 13:17:17', 'sk2.jpg', 'từ ngày 07/12/2019, Realme C2 2 GB/32 GB được điều chỉnh giảm 200.000 đồng, từ 2.59 triệu xuống còn 2.39 triệu, không kèm ưu đãi khác.'),
(7, 'ssssss', '<p>sssssssss</p>\r\n', 1, '2019-12-17 15:27:58', '2019-12-17 15:27:58', 'a15_800x450-300x200.jpg', 'sssssss');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) UNSIGNED NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `img_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `baohanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phukien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `khuyenmai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `mieuta` text COLLATE utf8_unicode_ci NOT NULL,
  `manhinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hdh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `camtrc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `camsau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thenho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thesim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sp_noibat` tinyint(4) NOT NULL,
  `sp_danhmuc` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `slug_sp`, `gia_sp`, `img_sp`, `baohanh`, `phukien`, `tinhtrang`, `khuyenmai`, `status`, `mieuta`, `manhinh`, `hdh`, `camtrc`, `camsau`, `cpu`, `ram`, `rom`, `thenho`, `thesim`, `sp_noibat`, `sp_danhmuc`, `created_at`, `updated_at`) VALUES
(1, 'HuaWei P30', 'huawei-p30', 16900000, 'huawei-p30-lite-1-400x400.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>hiii</p>\r\n', 'OLED, 6.1\", Full HD+', 'Android 9.0 (Pie)', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Hisilicon Kirin 980 8 nhân 64-bit', '8GB', '128GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 1, 5, '2019-05-07 06:02:14', '2019-05-07 06:02:14'),
(2, 'IPhone X  64GB', 'iphone-x-64gb', 21990000, 'iphone-x-64gb-21-400x400.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>hihi</p>\r\n', 'OLED, 5.8\", Super Retina', 'iOS 12  ', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Apple A11 Bionic 6 nhân', '3GB', '64GB', 'MicroSD, hỗ trợ tối đa 512 GB', '1 Nano SIM, Hỗ trợ 4G', 1, 1, '2019-05-07 06:04:20', '2019-05-07 06:07:54'),
(3, 'iPhone Xs max 64G', 'iphone-xs-max-64g', 30000000, 'iphone-xs-max-gray-400x400.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>hihi</p>\r\n', 'OLED, 6.5\", Super Retina', 'iOS 12', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Apple A12 Bionic 6 nhân', '4GB', '64GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 1, 1, '2019-05-07 06:16:29', '2019-05-07 06:16:29'),
(4, 'Oppo F11', 'oppo-f11', 7200000, 'oppo-f11-mtp-400x400.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>hihi</p>\r\n', 'LTPS LCD, 6.5\", Full HD+', 'Android 9.0 (Pie)', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'MediaTek Helio P70 8 nhân', '6GB', '64GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 1, 7, '2019-05-07 06:18:47', '2019-05-07 06:18:47'),
(5, 'Samsung Galaxy A50 ', 'samsung-galaxy-a50', 8000000, 'samsung-galaxy-a50-128gb-blue-400x400.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>hihi</p>\r\n', 'Super AMOLED, 6.4\", Full HD+', 'Android 9.0 (Pie) ', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Exynos 9610 8 nhân 64-bit', '6GB', '128GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 1, 2, '2019-05-07 06:27:31', '2019-05-08 07:02:09'),
(6, 'Samsung Galaxy S10+ ', 'samsung-galaxy-s10', 27000000, 'samsung-galaxy-s10-plus-512gb-ceramic-black-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>hihi</p>\r\n', 'Dynamic AMOLED, 6.4\", Quad HD+ (2K+)', 'Android 9.0 (Pie) ', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Exynos 9820 8 nhân 64-bit', '8GB', '512GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 1, 2, '2019-05-07 06:29:49', '2019-05-08 07:01:34'),
(7, 'Samsung Galaxy Note 9', 'samsung-galaxy-note-9', 19000000, 'samsung-galaxy-note-9-black-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>h</p>\r\n', 'Super AMOLED, 6.4\", Quad HD+ (2K+)', 'Android 9.0 (Pie)', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Exynos 9810 8 nhân 64-bit', '6GB', '128GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 1, 2, '2019-05-07 06:31:07', '2019-05-07 06:31:07'),
(8, 'Samsung Galaxy A9 ', 'samsung-galaxy-a9', 9000000, 'samsung-galaxy-a9-2018-blue-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>g</p>\r\n', 'Super AMOLED, 6.3\", Full HD+', 'Android  ', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Qualcomm Snapdragon 660 8 nhân', '6GB', '128GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 2, '2019-05-07 06:32:41', '2019-05-08 07:02:24'),
(9, 'Samsung Galaxy A30', 'samsung-galaxy-a30', 5700000, 'samsung-galaxy-a30-blue-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>g</p>\r\n', 'Super AMOLED, 6.4\", Full HD+', 'Android 9.0 (Pie)', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Exynos 7904 8 nhân 64-bit', '4GB', '64GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 2, '2019-05-07 06:34:54', '2019-05-07 06:34:54'),
(10, 'IPhone 8 plus', 'iphone-8-plus', 25000000, 'iphone-8-plus-256gb-hh-600x600-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>f</p>\r\n', 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Apple A11 Bionic 6 nhân', '3GB', '256GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 1, '2019-05-07 06:36:46', '2019-05-07 06:36:46'),
(11, 'IPhone 7 plus', 'iphone-7-plus', 12000000, 'iphone-7-plus-32gb-gold-600x600-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>d</p>\r\n', 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 12', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Apple A10 Bionic 4 nhân', '3GB', '32GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 1, '2019-05-07 06:38:39', '2019-05-07 06:38:39'),
(12, 'IPhone 6 plus', 'iphone-6-plus', 9000000, 'iphone-6s-plus-32gb-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 0, '<p>a</p>\r\n', 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 12', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Apple A9 Bionic 2 nhân', '2GB', '32GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 1, '2019-05-07 06:40:10', '2019-05-07 06:40:10'),
(13, 'HuaWei P30 PRO', 'huawei-p30-pro', 23000000, 'huawei-p30-pro-1-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>a</p>\r\n', 'OLED, 6.47\", Full HD+', 'Android 9.0 (Pie)', '25 MP', 'Chính 40 MP & Phụ 20 MP, 8 MP, TOF 3', 'Hisilicon Kirin 980 8 nhân 64-bit', '8GB', '256GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 1, 5, '2019-05-07 06:42:05', '2019-05-07 06:42:05'),
(14, 'Huawei Mate 20', 'huawei-mate-20', 15000000, 'huawei-mate-20-black-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>s</p>\r\n', 'Huawei Mate 20', 'Android 9.0 (Pie)', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Hisilicon Kirin 980 8 nhân 64-bit', '6GB', '128GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 1, 5, '2019-05-07 06:43:26', '2019-05-07 06:43:26'),
(15, 'HuaWei Nova 3i', 'huawei-nova-3i', 6000000, 'huawei-nova-3i-trang-chipu-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>a</p>\r\n', 'LTPS LCD, 6.3\", Full HD+', 'Android 8.1', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'HiSilicon Kirin 710', '4GB', '128GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 5, '2019-05-07 06:45:20', '2019-05-07 06:45:20'),
(16, 'Huawei Y9 (2019)', 'huawei-y9-2019', 5000000, 'huawei-y9-2019-blue-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>a</p>\r\n', 'LTPS LCD, 6.5\", Full HD+', 'Android 8.1', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'HiSilicon Kirin 710', '4GB', '64GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 5, '2019-05-07 06:46:58', '2019-05-07 06:46:58'),
(17, 'Nokia 8.1', 'nokia-81', 8000000, 'nokia-81-silver-18thangbh-600x600.jpg', 'Bảo hành chính hãng 18 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>n</p>\r\n', 'IPS LCD, 6.18”, Full HD+', 'Android 9.0 (Android One)', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Snapdragon 710 8 nhân 64-bit', '4GB', '64GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 1, 6, '2019-05-07 06:49:06', '2019-05-07 06:49:06'),
(18, 'Nokia 6.1', 'nokia-61', 5200000, 'nokia-61-plus-2-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>n</p>\r\n', 'IPS LCD, 5.8\", Full HD+', 'Android 9.0 (Android One)', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Qualcomm Snapdragon 636 8 nhân 64-bit', '4GB', '64GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 6, '2019-05-07 06:50:48', '2019-05-07 06:50:48'),
(19, 'Nokia 3.1', 'nokia-31', 3000000, 'nokia-31-docquyen-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>n</p>\r\n', 'IPS LCD, 5.2\", HD+', 'Android 9.0 (Android One)', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'MediaTek MT6750N 8 nhân', '3GB', '32GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 6, '2019-05-07 06:52:34', '2019-05-07 06:52:34'),
(20, 'Xiao Mi 8', 'xiao-mi-8', 13000000, 'xiaomi-mi-8-black-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 0, '<p>x</p>\r\n', 'Super AMOLED, 6.21\", Full HD+', 'Android 9.0 (Android One)   ', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Snapdragon 845 8 nhân', '6GB', '64GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 1, 4, '2019-05-07 06:55:06', '2019-05-08 08:38:54'),
(21, 'Xiaomi Redmi Note 6 Pro ', 'xiaomi-redmi-note-6-pro', 5600000, 'xiaomi-redmi-note-6-pro-64gb-black-18thangbh-600x600.jpg', 'Bảo hành chính hãng 18 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 0, '<p>x</p>\r\n', 'IPS LCD, 6.26\", Full HD+', 'Android 8.1', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Qualcomm Snapdragon 636 8 nhân 64-bit', '4GB', '64GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 4, '2019-05-07 06:57:02', '2019-05-07 06:57:02'),
(22, 'Xiaomi Mi A2 Lite', 'xiaomi-mi-a2-lite', 4000000, 'xiaomi-mi-a2-lite-gold-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>x</p>\r\n', 'IPS LCD, 5.84\", Full HD+', 'Android 8', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Qualcomm Snapdragon 625', '3GB', '32GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 4, '2019-05-07 06:58:32', '2019-05-07 06:58:32'),
(23, 'IPhone Xs 256GB', 'iphone-xs-256gb', 33000000, 'iphone-xs-256gb-white-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>Chiếc điện thoại&nbsp;mới đ&atilde; ch&iacute;nh thức được ra mắt v&agrave;o đ&ecirc;m 12/9 theo giờ Việt Nam, trong đ&oacute; c&oacute; phi&ecirc;n bản IPhone xs 25GB với bộ nhớ khủng, cấu h&igrave;nh mạnh mẽ với chip Apple A12 v&agrave; những t&iacute;nh năng đẳng cấp kh&aacute;c.</p>\r\n\r\n<p><strong>T&iacute;ch hợp chip A12&nbsp;hiệu năng mạnh mẽ bậc nhất</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/adminLaravel/public/upload/images/iphone-xs-256gb-1.jpg\" style=\"height:496px; width:800px\" />M&agrave;n h&igrave;nh Super Retina độc quyền cực sắc n&eacute;t</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/adminLaravel/public/upload/images/iphone-xs-256gb-2.jpg\" style=\"height:533px; width:800px\" /></strong></p>\r\n', 'OLED, 5.8\", Super Retina', 'iOS 12   ', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Apple A12 Bionic 6 nhân', '4GB', '256GB', 'MicroSD, hỗ trợ tối đa 512 GB', '1 Nano SIM, Hỗ trợ 4G', 1, 1, '2019-05-09 08:18:56', '2019-05-09 10:01:35'),
(24, 'IPhone XR 256GB', 'iphone-xr-256gb', 24000000, 'iphone-xr-256gb-white-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 0, '<p>d</p>\r\n', 'IPS LCD, 6.1\", Liquid Retina', 'iOS 12', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Apple A12 Bionic 6 nhân', '3GB', '256GB', 'MicroSD, hỗ trợ tối đa 512 GB', '1 Nano SIM, Hỗ trợ 4G', 0, 1, '2019-05-09 08:21:02', '2019-05-09 08:21:02'),
(25, 'IPhone 7 32GB', 'iphone-7-32gb', 12000000, 'iphone-7-hh-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>a</p>\r\n', 'LED-backlit IPS LCD, 4.7\", Retina HD', 'iOS 12', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Apple A10 Bionic 4 nhân', '2GB', '32GB', 'MicroSD, hỗ trợ tối đa 512 GB', '1 Nano SIM, Hỗ trợ 4G', 0, 1, '2019-05-09 08:22:35', '2019-05-09 08:22:35'),
(26, 'IPhone 8 64GB', 'iphone-8-64gb', 15000000, 'iphone-8-plus-hh-600x600a.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<p>a</p>\r\n', 'LED-backlit IPS LCD, 4.7\", Retina HD', 'iOS 12 ', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'Apple A11 Bionic 6 nhân', '2GB', '64GB', 'MicroSD, hỗ trợ tối đa 512 GB', '1 Nano SIM, Hỗ trợ 4G', 0, 1, '2019-05-09 08:26:01', '2019-05-15 07:29:26'),
(28, 'Oppo F11 Pro', 'oppo-f11-pro', 8400000, 'oppo-find-x-1-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'Máy mới 100%ss', 'Phiếu mua hàng trị giá 400.000đ ', 1, '<h3>Camera &quot;th&ograve; ra thụt v&agrave;o&quot; độc đ&aacute;o</h3>\r\n\r\n<p>Camera sẽ tự bật l&ecirc;n khi sử dụng ứng dụng camera hay bất cứ ứng dụng n&agrave;o c&oacute; d&ugrave;ng camera trước như Facebook, Zalo... Khi tho&aacute;t khỏi ứng dụng n&oacute; sẽ tự r&uacute;t lại.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/202704/oppo-f11-pro-xam-128gb-tgdd-13.png\" onclick=\"return false;\"><img alt=\"Điện thoại OPPO F11 Pro Xám 128GB | Thiết kế camera\" src=\"https://cdn.tgdd.vn/Products/Images/42/202704/oppo-f11-pro-xam-128gb-tgdd-13.png\" /></a></p>\r\n', 'LCD', 'Android 9.0 (Pie)         ', '25 MP', 'Chính 25 MP & Phụ 8 MP, 5 MP', 'HiSilicon Kirin 710', 'GB', '128 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 7, '2019-05-24 01:06:48', '2019-06-06 14:13:44'),
(29, 'Samsung Galaxy Note 8', 'samsung-galaxy-note-8', 12990000, 'samsung-galaxy-note8-black-1-600x600.jpg', 'Bảo hành chính hãng 12 tháng. 1 đổi 1 trong 1 tháng nếu lỗi..', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng..', 'Máy mới 100%', 'Phiếu mua hàng trị giá 400.000đ .', 0, '<h3>Galaxy Note 8&nbsp;l&agrave; niềm hy vọng vực lại d&ograve;ng Note danh tiếng của&nbsp;điện thoại Samsung&nbsp;với diện mạo nam t&iacute;nh, sang trọng. M&aacute;y trang bị camera k&eacute;p x&oacute;a ph&ocirc;ng thời thượng,&nbsp;m&agrave;n h&igrave;nh v&ocirc; cực&nbsp;như tr&ecirc;n&nbsp;S8 Plus, b&uacute;t S Pen c&ugrave;ng nhiều t&iacute;nh năng mới v&agrave; nhiều c&ocirc;ng nghệ được ưu &aacute;i.</h3>\r\n\r\n<h3>M&agrave;n h&igrave;nh v&ocirc; cực hiện đại ti&ecirc;n tiến.</h3>\r\n\r\n<p>D&ugrave; được giới thiệu l&agrave; m&agrave;n h&igrave;nh l&ecirc;n tới 6.3 inch nhưng thực sự khi cầm&nbsp;điện thoại&nbsp;Note 8&nbsp;tr&ecirc;n tay rất nhỏ gọn nhờ v&agrave;o c&ocirc;ng nghệ &quot;m&agrave;n h&igrave;nh v&ocirc; cực&quot; ti&ecirc;n tiến nhất hiện nay của Samsung.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741903200_347a0ee08cf7acf973047629cf2c29ac-_2560x1920-800-resize.jpg\" onclick=\"return false;\"><img alt=\"Màn hình điện thoại Samsung Galaxy Note 8\" src=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741903200_347a0ee08cf7acf973047629cf2c29ac-_2560x1920-800-resize.jpg\" /></a></p>\r\n\r\n<p>C&aacute;c cạnh b&ecirc;n m&aacute;y được l&agrave;m cong đều khiến m&igrave;nh khi cầm c&oacute; cảm gi&aacute;c &ocirc;m tay rất thoải m&aacute;i v&agrave; kh&ocirc;ng hề bị cấn.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741534567_c7686e1d5bdbcd1a1a365182240bd1fd-_2560x1920-800-resize.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế điện thoại Samsung Galaxy Note 8\" src=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741534567_c7686e1d5bdbcd1a1a365182240bd1fd-_2560x1920-800-resize.jpg\" /></a></p>\r\n\r\n<p>Cả mặt trước v&agrave; mặt sau m&aacute;y đều được phủ k&iacute;n bằng lớp k&iacute;nh phản chiếu rất đẹp như đ&atilde; từng xuất hiện ở bộ đ&ocirc;i S8/S8+.</p>\r\n\r\n<p>V&agrave; m&agrave;n h&igrave;nh 2K+ tr&ecirc;n Note 8 hoạt động tốt, g&oacute;c nh&igrave;n sắc n&eacute;t. ssdsd</p>\r\n', 'Super AMOLED, 6.3\", Quad HD+ (2K+)', 'Android 7.1 (Nougat)        ', '8MP', 'Chính 12 MP & Phụ 12 MP', 'Exynos 8895 8 nhân 64-bit', '6GB', '64GB', 'MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM, Hỗ trợ 4G', 0, 2, '2019-06-06 15:37:21', '2019-12-08 08:10:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tet`
--

CREATE TABLE `tet` (
  `id` int(11) NOT NULL,
  `test` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_users`
--

CREATE TABLE `vp_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_users`
--

INSERT INTO `vp_users` (`id`, `email`, `name`, `password`, `level`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(6, 'tuannguyen@gmail.com', 'Admin', '$2y$10$t/r2lJXKs6vHNxcQONswGeG62XH6G1c1QeHgdIj9B2/kq0Fd7aZ1.', 1, 'fFeaOLyLDOftdzy3TjlS2hkSt6t57HQbYmHkZyzbcAWMBB4V1MqZJ2OFfAah', NULL, '2019-12-17 15:28:03', 0),
(7, 'admin@gmail.com', 'Admin1', '$2y$10$bPbRkBklxgH3beEKrwOWR.bMb8V/4KzQvlCAeDHz0d4CFsV6UMkey', 1, 'P6e53rtnb3B7FwVJY65mcv88iMLg5nzjEOdcXqsXXs1io54ogePQXdcZ9fS5', NULL, '2019-06-06 15:39:27', 0),
(21, 'member2@gmail.com', 'member', '$2y$10$Ceg3SfGAkiMzmJIIBbQ0v.hE5dZJI0tnjdfPCRSBYK3vWO0NvRiny', 0, NULL, '2019-05-27 07:16:48', '2019-05-27 07:16:48', 0),
(29, 'member3@gmail.com', 'member', '$2y$10$VHXYYC1tXRW5zpitBTNpa.ZO9HnvIOYhIXPtOVeLUm74QlgABFSgK', 0, NULL, '2019-05-27 08:22:23', '2019-05-27 08:22:23', 0),
(30, 'tuandk@gmail.com', 'Văn Tuấn', '$2y$10$ympz/Fo0rcFu4cOftmKve.IkVHxK70A3VA2VbYKJgaBhKORW.w9RG', 0, 'qvTwvisyzFoyqYv0lunS60yRTpIzvOnJVastQxfPuzrdglYq4rb1ICldwF9v', '2019-06-05 16:31:29', '2019-06-07 08:10:50', 0),
(32, 'minhf3@gmail.com', 'Minh', '$2y$10$VriVWeRM1emyvr.EAhHJXelI7h9eNISNu14Mq./aSyincIfSh29hu', 0, NULL, '2019-06-05 16:40:25', '2019-06-05 18:27:19', 0),
(33, 'member@gmail.com', 'member2', '$2y$10$zEZO0s5p.0XKrbJQCkcxPeWZ1.fxoIObxxl3IiPVFOMzKmzS9pHoy', 0, 'CVoM0kyznmrfqoRxgfuVk9RoIBhZBym8HwyOk43DhRHfe5TmKTEldoUZkS9d', '2019-06-06 12:46:51', '2019-12-17 15:27:07', 0),
(34, 'tuan@gmail.com', 'tuan', '$2y$10$xxv4CXJAuyWvE2.jndmG9.4nFloIxHTq7Tb1gjq1BcBtWvI/LnFni', 0, NULL, '2019-12-06 05:16:38', '2019-12-06 05:16:38', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_billdetail`),
  ADD KEY `chitiethoadon_id_billfk_foreign` (`id_billfk`),
  ADD KEY `chitiethoadon_id_sanpham_foreign` (`id_sanpham`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `comment_com_sp_foreign` (`com_sp`),
  ADD KEY `comment_com_email_foreign` (`com_email`);

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `hoadon_email_bill_foreign` (`email_bill`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `sanpham_sp_danhmuc_foreign` (`sp_danhmuc`);

--
-- Chỉ mục cho bảng `tet`
--
ALTER TABLE `tet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `vp_users`
--
ALTER TABLE `vp_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vp_users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_billdetail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_com` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `id_danhmuc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_bill` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tet`
--
ALTER TABLE `tet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vp_users`
--
ALTER TABLE `vp_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_id_billfk_foreign` FOREIGN KEY (`id_billfk`) REFERENCES `hoadon` (`id_bill`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitiethoadon_id_sanpham_foreign` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_com_email_foreign` FOREIGN KEY (`com_email`) REFERENCES `vp_users` (`email`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_com_sp_foreign` FOREIGN KEY (`com_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_email_bill_foreign` FOREIGN KEY (`email_bill`) REFERENCES `vp_users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_sp_danhmuc_foreign` FOREIGN KEY (`sp_danhmuc`) REFERENCES `danhmucsp` (`id_danhmuc`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
