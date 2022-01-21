-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 09:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helperland`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(20) NOT NULL COMMENT 'Customer  id',
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobileno.` varchar(20) NOT NULL COMMENT 'Mobile number',
  `Birthdate` date NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Language` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `my_details`
--

CREATE TABLE `my_details` (
  `id` int(30) NOT NULL COMMENT 'my id',
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Account Status` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `mobileno.` varchar(20) NOT NULL,
  `Birthdate` date DEFAULT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Myaddress` varchar(50) NOT NULL,
  `Houseno` varchar(30) NOT NULL,
  `PostalCode` varchar(50) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `C_Name` varchar(50) NOT NULL COMMENT 'Customer name',
  `C_id` int(30) NOT NULL COMMENT 'customer id',
  `C_phoneno` varchar(30) NOT NULL COMMENT 'Customer phone number',
  `From date` date NOT NULL,
  `To date` date NOT NULL,
  `Total Amount` varchar(50) NOT NULL,
  `Payment mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_history`
--

CREATE TABLE `service_history` (
  `id` int(20) NOT NULL COMMENT 'service id',
  `Service Date` date NOT NULL,
  `SP_Name` varchar(30) NOT NULL COMMENT 'service provider name',
  `C_Name` varchar(30) NOT NULL COMMENT 'customer name',
  `QualityService` varchar(60) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Payment` decimal(60,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `SPName` varchar(30) NOT NULL,
  `SPType` varchar(30) NOT NULL,
  `CName` varchar(30) NOT NULL,
  `ExtraService` varchar(50) NOT NULL,
  `Charges` varchar(70) NOT NULL,
  `BookaService` varchar(50) NOT NULL,
  `QualityofService` varchar(60) NOT NULL,
  `Time` time(6) NOT NULL,
  `Total Amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `User Name` varchar(30) NOT NULL,
  `User Type` varchar(30) NOT NULL,
  `phoneno.` varchar(20) NOT NULL,
  `Postal Code` varchar(20) NOT NULL,
  `Email id` varchar(20) NOT NULL,
  `From Date` date NOT NULL,
  `To Date` date NOT NULL,
  `Date of Registration` date NOT NULL,
  `Role` char(20) NOT NULL,
  `Action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_details`
--
ALTER TABLE `my_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `service_history`
--
ALTER TABLE `service_history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `QualityService` (`QualityService`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'Customer  id';

--
-- AUTO_INCREMENT for table `my_details`
--
ALTER TABLE `my_details`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT COMMENT 'my id';

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `C_id` int(30) NOT NULL AUTO_INCREMENT COMMENT 'customer id';

--
-- AUTO_INCREMENT for table `service_history`
--
ALTER TABLE `service_history`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'service id';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
