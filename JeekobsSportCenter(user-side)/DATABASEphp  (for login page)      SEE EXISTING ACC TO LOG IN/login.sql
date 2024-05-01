-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 12:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `Order_id` int(50) NOT NULL,
  `Order_name` varchar(50) NOT NULL,
  `Order_price` double NOT NULL,
  `Total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Jameel', 'awad', 'jamzmeel@gmail.com', 'df9bcb3306e553bb4d6e316e184ed8dc'),
(2, 'jameel', 'awad', 'Jameel@gmail.com', '5275cb415e5bc3948e8f2cd492859f26'),
(3, 'jacobs', 'awad', 'a@gmail.com', 'df59ae3c1441deeaa035d686cd2c8994'),
(4, 'jeekobs', 'rold', 'jacobs@gmail.com', '6e11873b9d9d94a44058bef5747735ce'),
(5, 'jameel', 'ajmeel', 'Jameel@gmail.com', 'ec37aa25501f5aea74d5eb3d19b08333'),
(6, 'jamz', 'awad', 'jamz@gmail.com', 'a0b9a4445e09fd1c00a0094bd60281a6'),
(7, 'ken', 'llyod', 'kenGmail.com', '6d73c5cc8bbf73397024f37223700412'),
(8, 'john', 'roldsss', 'jmx@gmail.com', 'a1140a3d0df1c81e24ae954d935e8926'),
(9, 'jj', 'll', 'jzs@gmail.com', 'juju'),
(10, 'juju', 'utut', 'utu@gmail.com', '3ff01b4f2990f1fa7f31c82fd7c6c9d6'),
(11, 'william', 'derrek', 'william@gmail.com', '18218139eec55d83cf82679934e5cd75'),
(12, 'yammy', 'sekiro', 'sekir@gmail.com', 'b2036ae033a1f04d71f23ca6ce806f4e'),
(13, 'yassy', 'tan', 'tan@gmail.com', 'feffb71c68226b9c8da1ab2c86554cbd'),
(14, 'kiannssss', 'loloyd', 'loyd@gmail.com', 'c9a7d5014fda755975db927d32f39ad6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `Order_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
