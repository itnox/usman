-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 04:21 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office`
--

-- --------------------------------------------------------

--
-- Table structure for table `callbacks`
--

CREATE TABLE `callbacks` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `businessName` varchar(255) NOT NULL,
  `mobileNumber` varchar(255) NOT NULL,
  `landLineNumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postCode` varchar(255) NOT NULL,
  `bankName` varchar(255) NOT NULL,
  `accountNumber` varchar(255) NOT NULL,
  `sortCode` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `modifiedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `callbacks`
--

INSERT INTO `callbacks` (`id`, `category_id`, `user_id`, `slug`, `customerName`, `businessName`, `mobileNumber`, `landLineNumber`, `address`, `postCode`, `bankName`, `accountNumber`, `sortCode`, `comments`, `modifiedAt`, `createdAt`) VALUES
(1, 2, 1, 'Aimstech', 'Muhammad Usman', 'Aimstech', '03474478934', '041 8718473', 'Regent Mall 1st Floor Chen One Road D-Ground Faisalabad This is updated Addess', '38000', 'Faisalbank', '123456798', '123465', 'Call him Tommarow at 12AM.\r\nCall him again ', '2018-10-05 22:10:38', '2018-10-03 14:13:13'),
(5, 3, 1, 'SB-Store', 'Yasir Anjum', 'SB Store', '03344785177', '041 xxxxxxx', 'Near GC University Faisalabad', '38000', 'HBL', '96587453', '362514', 'Call him after an hour ', '2018-10-05 15:29:38', '2018-10-04 16:39:41'),
(6, 5, 1, 'Quality', 'Farhad ', 'Quality', '03xx xxxxxxx', '041 xxxxxxx', 'Main Floor', 'IG11 ABB', 'ABL', '963852741', '362514', 'Our Quality Asurance Head', '2018-10-05 04:10:35', '2018-10-05 18:52:35'),
(7, 1, 1, 'Operations', 'Abdul Samad', 'Operations', '03xx xxxxxxx', '041 xxxxxxx', 'Regent Mall', 'IG11 ABB', 'Askari Bank', '123456798', '362514', 'Head of Sub Office', '2018-10-05 15:29:38', '2018-10-05 19:02:44'),
(8, 2, 1, 'Fluffs-Game', 'Crush Balls', 'Fluffs Game', '3474478934', '0418718473', 'House # shafiq center, All Streets, Jinnah Colony, Narwala Road, Faisalabad', '38000', 'ABL', 'xxxxxx', '362514', 'Password :: welcome\r\n', '2018-10-05 04:10:19', '2018-10-05 19:04:14'),
(9, 2, 1, 'Admin', 'Fraz Ahmed', 'Admin', '03xx xxxxxxx', '041 xxxxxxx', 'Regent Mall', 'IG11 ABB', 'HBL', '1234567899', '362514', 'Manage Admin Stuff', '2018-10-05 04:10:51', '0000-00-00 00:00:00'),
(10, 1, 1, 'Fluffs-Game', 'Crush Balls', 'Fluffs Game', '3474478934', 'Punjab', 'House # shafiq center, All Streets, Jinnah Colony, Narwala Road, Faisalabad', '38000', 'xxxxxxx', '96587453', '362514', 'test', '2018-10-05 16:13:37', '2018-10-05 21:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Lead', '2018-10-04 17:06:00'),
(2, 'Callback', '2018-10-04 17:06:00'),
(3, 'Strong Callback', '2018-10-04 17:06:48'),
(4, 'Closed/Pending', '2018-10-05 13:49:29'),
(5, 'Closed/Done', '2018-10-05 13:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `employeeCode` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `employeeCode`, `username`, `password`, `register_date`) VALUES
(1, 'Muhammad Usman', 'atfs0537', 'usman', 'bdb5b1ce6d7883a43b6b2629176ed881', '2018-10-05 17:07:57'),
(2, 'Yasir Anjum', 'atfs0208', 'yasir', 'f4b378709b967b4a671264cdeeb47afe', '2018-10-05 18:24:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `callbacks`
--
ALTER TABLE `callbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `callbacks`
--
ALTER TABLE `callbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
