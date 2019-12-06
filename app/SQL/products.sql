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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
