-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 05:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productImage` text COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `productName` varchar(200) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT 1,
  `total` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`userId`, `productId`, `productImage`, `productName`, `quantity`, `total`) VALUES
(2, 3, '68172071_1016276_SV_1.jpg', 'Tiffany T T1 Ring', 2, NULL),
(2, 2, '67796489_1008969_ED.jpg', 'T1 Ring in Rose Gold, 4.5 mm', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` varchar(120) COLLATE utf8_unicode_520_ci NOT NULL,
  `cname` varchar(120) COLLATE utf8_unicode_520_ci NOT NULL,
  `createdAt` datetime DEFAULT current_timestamp(),
  `updatedAt` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `cname`, `createdAt`, `updatedAt`) VALUES
('1', 'Tee', '2021-06-24 00:00:00', '2021-06-25 01:15:06'),
('2', 'Bottom', '2021-06-25 01:48:32', '2021-06-25 01:48:32'),
('3', 'Jacket', '2021-06-24 01:48:32', '2021-06-24 01:48:32'),
('5', 'Hoodie', '2022-03-03 21:03:32', '2022-03-03 21:03:32'),
('6', 'Accessories', '2022-03-03 21:04:53', '2022-03-03 21:04:53'),
('7', 'Shoes', '2022-03-03 21:06:33', '2022-03-03 21:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `total` decimal(8,2) DEFAULT 0.00,
  `createdAt` datetime DEFAULT current_timestamp(),
  `isFinished` tinyint(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `description`, `address`, `phone`, `total`, `createdAt`, `isFinished`) VALUES
(2181, 2, 'ship nhanh nhanh dum em cuoi chong anh oi', '225 Nguyen Van Cu, Q5, HCMC', '0987654312', '3800.00', '2021-06-24 15:33:37', 1),
(2182, 3, 'ship vao buoi sang nha ban', '69 Nguyen Thi Minh Khai, HCMC', '0843223860', '1700.00', '2021-06-24 15:33:37', 1),
(2186, 2, NULL, '225 Nguyen Van Cu, Q5, HCMC', '0987654312', '860000.00', '2021-06-25 13:23:39', 1),
(2187, 0, NULL, NULL, NULL, '0.00', '2021-06-25 13:23:47', 0),
(2188, 2, 'no des', 'HCMC', '', '8940.00', '2021-06-29 01:05:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) DEFAULT 1,
  `discountPercent` decimal(8,1) DEFAULT 0.0,
  `subTotal` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`orderId`, `productId`, `quantity`, `discountPercent`, `subTotal`) VALUES
(2186, 20, 2, '0.0', 86000),
(2182, 1, 1, '0.0', 1700),
(2181, 3, 1, '0.0', 3800),
(2188, 3, 2, '10.0', 6840),
(2188, 2, 1, '0.0', 2100);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `imageUrl` text COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `discount` int(2) NOT NULL,
  `createAt` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `quantity`, `sold`, `imageUrl`, `categoryId`, `price`, `discount`, `createAt`) VALUES
(1, 'Nike Air Maxx', NULL, 2, 4, 'product1.jpg', 7, 500000, 0, '2022-01-16 22:37:45'),
(2, 'Nike Jd 2', 'Rep 1:1 bao real =))', 3, 5, 'product2.jpg', 7, 560000, 0, '2021-12-13 12:37:45'),
(3, 'Áo phông shopee fake', 'fakeeeeeeee', 4, 8, 'aophong.jpg', 1, 9999, 0, '2022-03-12 22:37:45'),
(4, 'Hoodie zip có nón', 'Hoodie bao dày xịn xò con bò', 1, 99, 'product4.jpg', 5, 3200000, 0, '2022-03-11 22:37:45'),
(5, 'Jacket promax 2 lớp', NULL, 11, 2, 'product7.jpg', 3, 290000, 0, '2022-01-11 22:37:45'),
(6, 'Jacket Tag Windbreaker', 'Jacket Winbreaker by TNTxShopee', 2, 0, 'product10.jpg', 3, 219000, 0, '2022-03-05 22:37:45'),
(7, 'Marcus Pin', 'móc khóa Marcus', 5, 3, 'product30.jpg', 6, 50000, 0, '2022-03-08 22:37:45'),
(8, 'Tee Shirt', NULL, 67, 3, 'product31.jpg', 1, 129000, 0, '2022-03-01 22:37:45'),
(29, 'The bloodline of Tran family', 'Trần Nguyên....', 23, 5, 'product34.jpg', 1, 330000, 0, '2019-03-11 22:37:45'),
(28, 'DISTRESSED STRETCH SKINNY JEANS', NULL, 23, 9, 'product33.jpg', 2, 450000, 0, '2022-02-08 22:07:45'),
(27, 'Pants Tiger Sliver', 'White Dragonn', 5, 123, 'product32.jpg', 2, 580000, 5, '2021-03-11 22:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `color` varchar(120) COLLATE utf8_unicode_520_ci NOT NULL,
  `size` char(5) COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'M'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`productId`, `quantity`, `color`, `size`) VALUES
(7, 1, 'Black', 'L'),
(7, 3, 'Blue', 'M'),
(7, 3, 'Green', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Admin'),
(0, 'User'),
(3, 'VIP');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` text COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `imageUrl` text COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT current_timestamp(),
  `updatedAt` datetime DEFAULT current_timestamp(),
  `roleId` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `phone`, `email`, `imageUrl`, `createdAt`, `updatedAt`, `roleId`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrator', '0987654312', 'admin.me@gmail.com', NULL, '2021-06-24 01:38:17', '2021-06-24 01:38:17', 1),
(5, 'nguyentuan', '81dc9bdb52d04dc20036dbd8313ed055', 'Nguyen Tuan Tran', '098537293', 'nguyentuan@pyonsama.com', NULL, '2021-06-24 01:42:59', '2021-06-24 01:42:59', 0),
(6, 'darkling', '81dc9bdb52d04dc20036dbd8313ed055', 'Mr. Darkling', '032157393', 'darkling@netflix.com', NULL, '2021-06-24 01:42:59', '2021-06-24 01:42:59', 0),
(7, 'jonsnow', '81dc9bdb52d04dc20036dbd8313ed055', 'Jon Snow', '0986845781', 'jon@hbo.com', NULL, '2021-06-24 15:54:03', '2021-06-24 15:54:03', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`productId`,`userId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`orderId`,`productId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`productId`,`quantity`,`color`,`size`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `roleId` (`roleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2189;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
