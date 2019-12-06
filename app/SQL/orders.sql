-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 06:18 PM
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
