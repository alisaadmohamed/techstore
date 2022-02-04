-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2022 at 04:47 PM
-- Server version: 10.5.13-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_super` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `is_super`, `created_at`) VALUES
(1, 'malik', 'ali_saad2003@hotmail.com', '$2y$10$Rkx6MRcL9uVNbTFA/YQIQ.UcaAYZZ2/wZ35L8mln/HRnMcQGgU5n6', 'no', '2022-01-06 01:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `created_at`) VALUES
(4, 'Laptops', '2022-01-06 01:26:56'),
(5, 'PCs', '2022-01-06 01:26:56'),
(6, 'Mobiles', '2022-01-06 01:26:56'),
(10, 'Tablets', '2022-01-10 22:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('pending','approved','canceled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `status`, `created_at`) VALUES
(18, 'Mahmoud Ali', 'ali.isra96@outlook.com', '+436766807260', 'Kajetan-sweth-straÃŸe54', 'approved', '2022-01-20 21:58:52'),
(19, 'Mahmoud Ali', NULL, '+436766807260', 'AnzengruberstraÃŸe\r\n1/20', 'approved', '2022-01-20 22:03:10'),
(20, 'aya', 'a@hot.com', '012', NULL, 'pending', '2022-01-20 22:04:50'),
(21, 'Israa Ali', 'ali.isra96@outlook.com', '+436766807260', 'AnzengruberstraÃŸe\r\n1/20', 'pending', '2022-01-21 12:36:08'),
(22, 'Israa Ali', 'ali.isra96@outlook.com', '+436766807260', 'AnzengruberstraÃŸe\r\n1/20', 'pending', '2022-01-22 13:39:22'),
(23, 'Israa Ali', 'ali.isra96@outlook.com', '+436766807260', 'AnzengruberstraÃŸe\r\n1/20', 'pending', '2022-01-22 18:25:52'),
(24, 'ali', 'ali@hot.com', '555', 'kj', 'pending', '2022-01-28 21:57:21'),
(25, 'malik', 'a@a.com', '58555', 'gfhjm,', 'pending', '2022-01-28 22:00:37'),
(26, 'Ali Abdelhamid', 'ali_saad2003@hotmail.com', '06605195599', 'Anzengruberstr.1/20', 'approved', '2022-01-28 22:03:47'),
(27, 'anything', 'a@ahot.com', '00433', 'there', 'pending', '2022-02-04 14:44:25'),
(28, 'noor', 'noor@hot.com', '555', 'dkldkdkdkdk', 'approved', '2022-02-04 14:46:57'),
(29, 'aya', 'aya@hot.com', '00121', 'home', 'canceled', '2022-02-04 16:17:00'),
(30, 'iss Ali', 'ali.isra96@outlook.com', '+436766807260', 'AnzengruberstraÃŸe\r\n1/20', 'pending', '2022-02-04 16:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `products_id` int(10) UNSIGNED DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders_details`
--

INSERT INTO `orders_details` (`id`, `order_id`, `products_id`, `qty`) VALUES
(8, 18, 44, 1),
(10, 19, 42, 1),
(11, 20, NULL, 1),
(12, 21, NULL, 1),
(13, 22, NULL, 1),
(14, 23, NULL, 1),
(15, 24, NULL, 1),
(16, 25, NULL, 1),
(17, 26, NULL, 1),
(18, 26, 44, 1),
(19, 28, 42, 1),
(20, 28, 44, 1),
(21, 28, 45, 4),
(22, 29, 45, 4),
(23, 29, 42, 3),
(24, 30, 44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `quantity`, `img`, `cat_id`, `created_at`) VALUES
(42, 'apple laptop', 'this is dummy description for product', 3000, 20, '4.jpg', 5, '2022-01-10 22:52:25'),
(44, 'smart phone', 'this is dummy description for product', 150, 33, '5.jpg', 6, '2022-01-10 22:53:45'),
(45, 'HP pc', 'this is dummy description for product  ', 25000, 10, '2.jpg', 6, '2022-01-10 22:58:34'),
(55, 'Ali', '7uio      ', 255, 55, '61f7f76aeb203.jpg', 4, '2022-01-31 14:47:04'),
(56, 'apple ipad', 'ipad', 5580, 6, '2.jpg', 10, '2022-02-04 16:36:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `products_id` (`products_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `orders_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_details_ibfk_2` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
