-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 06:17 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saturn`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` varchar(80) NOT NULL,
  `price` varchar(30) NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `ispaid` varchar(30) NOT NULL,
  `ordered_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customer_id` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `price`, `order_status`, `ispaid`, `ordered_on`, `customer_id`) VALUES
(4, '13', '19', 'delivered', 'yes', '2019-12-03 18:03:49', 13),
(5, '13', '39', 'delivered', 'yes', '2019-12-03 18:03:49', 13),
(6, '13', '29', 'delivered', 'yes', '2019-12-03 18:03:49', 13),
(7, '13', '29', 'delivered', 'yes', '2019-12-03 18:03:49', 13),
(8, '3876', '29', 'delivered', 'yes', '2019-12-03 18:03:49', 13),
(9, '2548', '29', 'delivered', 'yes', '2019-12-03 18:03:49', 13),
(10, '3065', '39', 'delivered', 'yes', '2019-12-03 18:03:49', 13),
(11, '3230', '29', 'delivered', 'yes', '2019-12-03 18:03:49', 13),
(12, '3876', '29', 'delivered', 'yes', '2019-12-03 18:03:49', 13),
(13, '2548', '29', 'pending', 'yes', '2019-12-03 18:08:01', 13),
(14, '3065', '39', 'pending', 'yes', '2019-12-03 18:08:01', 13),
(15, '3230', '29', 'pending', 'yes', '2019-12-03 18:08:01', 13),
(16, '8518', '39', 'pending', 'no', '2019-12-03 18:09:59', 14),
(17, '3876', '29', 'pending', 'no', '2019-12-03 18:09:59', 14),
(18, '3230', '29', 'pending', 'no', '2019-12-03 18:23:04', 14);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `sl` int(11) NOT NULL,
  `id` varchar(4) NOT NULL,
  `title` varchar(30) NOT NULL,
  `main_category` varchar(30) NOT NULL,
  `sub_category` varchar(30) NOT NULL,
  `discount` varchar(2) NOT NULL,
  `price` varchar(4) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `added_by` varchar(200) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`sl`, `id`, `title`, `main_category`, `sub_category`, `discount`, `price`, `rating`, `added_by`, `added_on`) VALUES
(1, '6852', 'Girl shirt', 'kids', 'women-jens', '30', '8', '2', 'Biswajit', '2019-11-27 06:57:48'),
(3, '6059', 'Girl watch', 'kids', 'women-jens', '50', '6', '1', 'Biswajit', '2019-11-27 07:03:40'),
(4, '6423', 'Girl jacket', 'kids', 'women-jens', '80', '18', '1', 'Biswajit', '2019-12-03 18:04:49'),
(5, '2661', 'Men shoe', 'kids', 'women-jens', '40', '29', '3', 'Biswajit', '2019-11-27 07:06:10'),
(7, '1825', 'Men trimer', 'kids', 'women-jens', '70', '4', '2', 'Biswajit', '2019-11-27 07:09:18'),
(9, '9060', 'Girl Sallower', 'kids', 'women-jens', '70', '29', '3', 'Biswajit', '2019-11-27 07:10:30'),
(10, '9197', 'Girl Jacket', 'kids', 'women-jens', '80', '8', '2', 'Biswajit', '2019-11-27 07:11:27'),
(11, '8463', 'Girl skin care', 'kids', 'women-jens', '80', '8', '1', 'Biswajit', '2019-11-27 07:12:19'),
(12, '6365', 'Girl sandal', 'kids', 'women-jens', '75', '18', '2', 'Biswajit', '2019-11-27 07:13:02'),
(13, '3876', 'Girl skin care', 'kids', 'women-jens', '10', '29', '5', 'Biswajit', '2019-11-27 07:14:37'),
(14, '8518', 'Girl Sallower', 'kids', 'women-jens', '6', '39', '5', 'Biswajit', '2019-11-27 07:15:32'),
(15, '6826', 'Girl Sallower', 'kids', 'women-jens', '7', '29', '5', 'Biswajit', '2019-11-27 07:16:41'),
(16, '3230', 'Men shirt', 'kids', 'women-jens', '7', '29', '5', 'Biswajit', '2019-11-27 07:17:17'),
(17, '2548', 'Girl Sallower', 'kids', 'women-jens', '7', '29', '4', 'Biswajit', '2019-11-27 07:19:39'),
(18, '8928', 'Girl Sallower', 'kids', 'women-jens', '7', '19', '4', 'Biswajit', '2019-11-27 07:26:28'),
(19, '9799', 'Men sandal', 'kids', 'women-jens', '7', '29', '4', 'Biswajit', '2019-11-27 07:28:34'),
(20, '7027', 'Men watch', 'kids', 'women-jens', '8', '39', '4', 'Biswajit', '2019-11-27 07:30:06'),
(24, '4660', 'Men jeans', 'men', 'women-jens', '8', '49', '3', 'Biswajit', '2019-11-27 07:33:31'),
(25, '5305', 'Men watch', 'men', 'women-jens', '8', '49', '3', 'Biswajit', '2019-11-27 07:33:57'),
(27, '1428', 'Men shirt', 'men', 'women-jens', '8', '49', '3', 'Biswajit', '2019-11-27 07:36:17'),
(28, '2323', 'Men boot', 'men', 'women-jens', '8', '49', '3', 'Biswajit', '2019-11-27 07:37:08'),
(31, '4649', 'Girl skirt', 'kids', 'women-jens', '8', '49', '4', 'Biswajit', '2019-11-27 07:40:33'),
(32, '7197', 'Girl sandal', 'women', 'women-jens', '6', '29', '2', 'Biswajit', '2019-11-27 07:41:27'),
(33, '9469', 'Girl skin care', 'women', 'women-jens', '6', '29', '2', 'Biswajit', '2019-11-27 07:42:03'),
(34, '3502', 'Girl skirt', 'women', 'women-jens', '6', '29', '2', 'Biswajit', '2019-11-27 07:42:38'),
(37, '9351', 'Girl Kurta', 'women', 'women-jens', '6', '29', '2', 'Biswajit', '2019-11-27 07:53:20'),
(38, '8482', 'Girl skin care', 'kids', 'women-jens', '70', '29', '3', 'Biswajit', '2019-11-27 07:54:27'),
(39, '7689', 'Girl lahengga', 'women', 'women-jens', '6', '18', '3', 'Biswajit', '2019-11-27 07:55:45'),
(40, '7229', 'Girl lahengga', 'men', 'women-jens', '6', '18', '3', 'Biswajit', '2019-11-27 07:56:36'),
(41, '1537', 'Men t-shirt', 'kids', 'women-jens', '6', '18', '4', 'Biswajit', '2019-11-27 07:57:58'),
(42, '3065', 'Girl bag', 'kids', 'women-jens', '8', '39', '5', 'Biswajit', '2019-11-27 08:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `frist_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `city` varchar(80) NOT NULL,
  `post` varchar(80) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `registered_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `frist_name`, `last_name`, `email`, `city`, `post`, `full_address`, `password`, `registered_on`) VALUES
(13, 'Biswajit', 'Biswas', 'jfbiswajit@gmail.com', 'Dhaka', '1216', '', '123', '2019-12-03 17:38:55'),
(14, 'Shreya', 'Roy', 'shreya@gmail.com', 'Dhaka', '1216', '', '123', '2019-12-03 18:09:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sl`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
