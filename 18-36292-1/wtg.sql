-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 02:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtg`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_information`
--

CREATE TABLE `account_information` (
  `id` int(10) NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `accountno` varchar(20) NOT NULL,
  `balance` int(10) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_information`
--

INSERT INTO `account_information` (`id`, `bankname`, `accountno`, `balance`, `userid`) VALUES
(1, 'DB', 'AAA111', 50000, 1),
(2, 'DBBL', '10103216', 500, 5),
(3, 'Mis', '12345', 20000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `id` int(10) NOT NULL,
  `paymentdate` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`id`, `paymentdate`, `location`, `amount`, `userid`) VALUES
(1, '2021-08-10', 'chandanpura', 10000, 1),
(2, '2021-08-11', 'dhanmondi', 200, 1),
(3, '2021-07-01', 'panchlaish', 20000, 5),
(5, '2021-08-10', 'bashundhara', 1200, 6);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `owner`, `price`, `location`) VALUES
(1, 'sharif', 15000, 'chandgaon'),
(2, 'aqib', 25000, 'dewanbazaar'),
(3, 'mishal', 30000, 'anderkilla');

-- --------------------------------------------------------

--
-- Table structure for table `showproperty`
--

CREATE TABLE `showproperty` (
  `id` int(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showproperty`
--

INSERT INTO `showproperty` (`id`, `location`, `price`, `userid`) VALUES
(1, 'chandanpura', 10000, 1),
(2, 'panchlaish', 20000, 5),
(3, 'dhanmondi', 2000, 1),
(4, 'bashundhara', 1250, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phone`, `type`) VALUES
(1, 'Nilhan S', 'nilhan', '123456', 'nil@gmail.com', 12345, 'buyer'),
(5, 'ABC', 'abc', '123456', 'abc@abc.com', 123, 'Buyer'),
(6, 'sara', 'sar', '654321', 'sar@gmail.com', 1234, 'Buyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_information`
--
ALTER TABLE `account_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showproperty`
--
ALTER TABLE `showproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_information`
--
ALTER TABLE `account_information`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `showproperty`
--
ALTER TABLE `showproperty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
