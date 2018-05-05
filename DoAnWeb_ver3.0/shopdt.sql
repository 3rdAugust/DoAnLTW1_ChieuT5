-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2018 at 03:07 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `name`, `price`, `img`, `date`) VALUES
(1, 'Apple', 'iPhone 5 16G', 4900000, 'iphone5.png', '2018-05-04 08:58:48'),
(2, 'Apple', 'iPhone 5 32G', 5490000, 'iphone5.png', '2018-05-04 09:00:03'),
(3, 'Apple', 'iPhone 5S 16G', 6490000, 'iphone5s.png', '2018-05-04 09:00:46'),
(4, 'Apple', 'iPhone 5S 32G', 6890000, 'iphone5s.png', '2018-05-04 09:01:21'),
(5, 'Apple', 'iPhone 6 16G', 7490000, 'iphone6.png', '2018-05-05 11:51:48'),
(6, 'Apple', 'iPhone 6 32G', 7900000, 'iphone6.png', '2018-05-05 11:57:28'),
(7, 'Apple', 'iPhone 6 64G', 8490000, 'iphone6.png', '2018-05-05 11:57:28'),
(8, 'Apple', 'iPhone 6S 16G', 7690000, 'iphone6s.png', '2018-05-05 12:03:22'),
(9, 'Apple', 'iPhone 6S 16G', 8190000, 'iphone6s.png', '2018-05-05 12:03:22'),
(10, 'Apple', 'iPhone 7 16G', 8900000, 'iphone7.png', '2018-05-05 12:10:43'),
(11, 'Apple', 'iPhone 7 32G', 8490000, 'iphone7.png', '2018-05-05 12:10:43'),
(12, 'Apple', 'iPhone 7 Plus 32G', 19900000, 'iphone7Plus.png', '2018-05-05 12:13:24'),
(13, 'Apple', 'iPhone 7S Plus 64G', 21990000, 'iphone7Plus.png', '2018-05-05 12:13:24'),
(14, 'Apple', 'iPhone 8 64G', 20990000, 'iphone8.png', '2018-05-05 12:40:33'),
(15, 'Apple', 'iPhone 8 Plus 64G', 23990000, 'iphone8Plus.png', '2018-05-05 12:40:33'),
(16, 'Apple', 'iPhone 8 256GB', 25790000, 'iphone8.png', '2018-05-05 12:50:06'),
(17, 'Apple', 'iPhone 8 Plus 256GB', 28790000, 'iphone8Plus.png', '2018-05-05 12:50:06'),
(18, 'Apple', 'iPhone X 64G', 29990000, 'iphoneX.png', '2018-05-05 12:51:54'),
(19, 'Apple', 'iPhone X 256G', 34790000, 'iphoneX.png', '2018-05-05 12:51:54'),
(20, 'Samsung', 'Samsung Galaxy J2 Pro', 3290000, 'SamsungJ2Pro.png', '2018-05-05 13:35:21'),
(21, 'Samsung', 'Samsung Galaxy J3 Pro', 3990000, 'SamsungJ3Pro.png', '2018-05-05 13:35:21'),
(22, 'Samsung', 'Samsung Galaxy J7 Prime', 4990000, 'SamsungJ7Prime.png', '2018-05-05 13:38:37'),
(23, 'Samsung', 'Samsung Galaxy J7 Pro', 6090000, 'SamsungJ7Pro.png', '2018-05-05 13:38:37'),
(24, 'Samsung', 'Samsung Galaxy J7+', 7290000, 'SamsungJ7+.png', '2018-05-05 13:42:16'),
(25, 'Samsung', 'Samsung Galaxy A8', 10990000, 'SamsungA8.png', '2018-05-05 13:42:16'),
(26, 'Samsung', 'Samsung Galaxy A8+', 11390000, 'SamsungA8.png', '2018-05-05 13:45:07'),
(27, 'Samsung', 'Samsung Galaxy S7 edge 32GB', 15490000, 'SamsungS7Edge.png', '2018-05-05 13:45:07'),
(28, 'Samsung', 'Samsung Galaxy S8', 15990000, 'SamsungS8.png', '2018-05-05 13:50:43'),
(29, 'Samsung', 'Samsung Galaxy Note 8', 22490000, 'SamsungNote8.png', '2018-05-05 13:50:43'),
(30, 'Samsung', 'Samsung Galaxy S9', 19990000, 'SamsungS9.png', '2018-05-05 13:53:32'),
(31, 'Samsung', 'Samsung Galaxy S9+', 23490000, 'SamsungS9+.png', '2018-05-05 13:53:32'),
(32, 'Xiaomi', 'Xiaomi Mi Mix 2S', 18790000, 'XiaomiMix2S.png', '2018-05-05 20:48:16'),
(33, 'Xiaomi', 'Xiaomi Black Shark', 15999000, 'XiaomiBlackShark.png', '2018-05-05 20:48:16'),
(34, 'Xiaomi', 'Xiaomi Mi 6', 11490000, 'XiaomiMi6.png', '2018-05-05 20:50:25'),
(35, 'Xiaomi', 'Xiaomi Mi Mix', 11490000, 'XiaomiMix.png', '2018-05-05 20:50:25'),
(36, 'Xiaomi', 'Xiaomi Mi Note 2', 89990000, 'XiaomiNote2.png', '2018-05-05 20:51:57'),
(37, 'Xiaomi', 'Xiaomi Mi 5S Plus', 8290000, 'Xiami5S.png', '2018-05-05 20:51:57'),
(38, 'Xiaomi', 'Xiaomi Mi 6X', 7990000, 'Xiaomi6X.png', '2018-05-05 20:53:29'),
(39, 'Xiaomi', 'Xiaomi Mi Note 3', 7890000, 'XiaomiNote3.png', '2018-05-05 20:53:29'),
(40, 'Xiaomi', 'Xiaomi Mi Max 2', 6290000, 'XiaomiMax2.png', '2018-05-05 20:54:41'),
(41, 'Xiaomi', 'Xiaomi Mi Note Pro', 6190000, 'XiaomiNotePro.png', '2018-05-05 20:54:41'),
(42, 'Xiaomi', 'Xiaomi Redmi Note 5 Pro', 6190000, 'XiamiNote5Pro.png', '2018-05-05 20:55:52'),
(43, 'Xiaomi', 'Xiaomi Mi 4C', 5990000, 'Xiami4C.png', '2018-05-05 20:55:52'),
(44, 'Xiaomi', 'Xiaomi Mi A1', 5490000, 'XiaomiMiA1.png', '2018-05-05 20:57:26'),
(45, 'Xiaomi', 'Xiaomi Mi 5X', 4290000, 'XiaomiMi5X.png', '2018-05-05 20:57:26'),
(46, 'Xiaomi', 'Xiaomi Mi 4S', 3990000, 'Xiami4S.png', '2018-05-05 20:58:41'),
(47, 'Xiaomi', 'Xiaomi Redmi Note 4', 3690000, 'XiaomiNote4.png', '2018-05-05 20:58:41'),
(48, 'Oppo', 'Oppo F7 128GB', 9990000, 'OppoF7.png', '2018-05-05 21:01:42'),
(49, 'Oppo', 'OPPO F5 6GB', 8990000, 'OppoF5.png', '2018-05-05 21:01:42'),
(50, 'Oppo', 'OPPO F5 Youth', 5990000, 'OppoF5Youth.png', '2018-05-05 21:02:24'),
(51, 'Oppo', 'OPPO F5 Youth', 5990000, 'OppoF5Youth.png', '2018-05-05 21:02:59'),
(52, 'Oppo', 'OPPO A83', 4990000, 'OppoA83.png', '2018-05-05 21:02:59'),
(53, 'Oppo', 'Oppo A71 32GB', 4190000, 'OppoA71.png', '2018-05-05 21:03:50'),
(54, 'Oppo', 'OPPO F1 Plus', 3990000, 'OppoF1Plus.png', '2018-05-05 21:04:54'),
(55, 'Oppo', 'OPPO F3', 3990000, 'OppoF3.png', '2018-05-05 21:04:54'),
(56, 'Oppo', 'Oppo A71K', 3590000, 'OppoA71K.png', '2018-05-05 21:06:00'),
(57, 'Oppo', 'Oppo F3 Lite', 3490000, 'OppoF3Lite.png', '2018-05-05 21:06:00'),
(58, 'Oppo', 'OPPO A37 (Neo 9)', 3290000, 'OppoA37.png', '2018-05-05 21:07:05'),
(59, 'Oppo', 'OPPO F3 Plus', 7490000, 'OppoF3Plus.png', '2018-05-05 21:07:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
