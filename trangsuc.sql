-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2023 lúc 06:37 AM
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
-- Cơ sở dữ liệu: `trangsuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `namemenu` varchar(50) NOT NULL,
  `id_parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `namemenu`, `id_parent`) VALUES
(1, 'Trang sức nữ', 0),
(2, 'Nhẫn cưới', 0),
(3, 'Trang sức kim cương', 0),
(4, 'Trang sức đá màu', 0),
(5, 'Sản phầm 24K', 0),
(6, 'Trang sức nam', 0),
(7, 'Trang sức nữ 18K', 1),
(8, 'Trang sức nữ 18K', 1),
(9, 'Nhẫn cưới kim cương', 2),
(10, 'Nhẫn cưới đá quý', 2),
(11, 'Ổ kim cương nam', 3),
(12, 'Ổ kim cương nữ', 3),
(13, 'Trang sức nam đá màu', 4),
(14, 'Trang sức nữ đá màu', 4),
(15, 'Vàng phú quý 24K', 5),
(16, 'Thần tài phú quý', 5),
(17, 'Phú quý cát tường', 5),
(18, 'Trang sức nam 18K', 6),
(19, 'Trang sức nam 24K', 6),
(20, 'Nhẫn', 7),
(21, 'Dây chuyền', 7),
(22, 'Mặt dây', 7),
(23, 'Lắc tay', 7),
(24, 'Lắc chân', 7),
(25, 'Khuyên tai', 7),
(26, 'Nhẫn', 8),
(27, 'Dây chuyền', 8),
(28, 'Mặt dây', 8),
(29, 'Lắc tay', 8),
(30, 'Lắc chân', 8),
(31, 'Khuyên tai', 8),
(32, 'Nhẫn', 13),
(33, 'Mặt dây', 13),
(34, 'Nhẫn', 14);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
