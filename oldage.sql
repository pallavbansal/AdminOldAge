-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 04:40 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oldage`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `skypeId` varchar(300) NOT NULL,
  `emailId` varchar(100) DEFAULT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstName`, `lastName`, `phoneNumber`, `skypeId`, `emailId`, `dateTime`) VALUES
(11, 'Sidd', 'Singh', '9044204665', 'live326', '', '2021-01-12 15:31:54'),
(13, 'Sumith', 'Kumar', '8384863081', 'live7599', '', '2021-01-12 15:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `childUserId` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `userId`, `childUserId`, `date_time`) VALUES
(1, 2, 3, '2021-01-11 10:28:48'),
(2, 2, 4, '2021-01-11 10:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `time` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `isEnabled` tinyint(1) NOT NULL DEFAULT 1,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `transaction_id` varchar(300) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `emailId` varchar(200) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `isEnabled` tinyint(1) NOT NULL DEFAULT 1,
  `passwordHash` varchar(100) NOT NULL,
  `contactId` int(11) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `skypeId` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `emailId`, `phone`, `isEnabled`, `passwordHash`, `contactId`, `dateTime`, `skypeId`) VALUES
(1, 'Siddhant', 'Singh', 'siddhant.singh326@gmail.com', NULL, 1, '$2y$10$VRfAOS5SEzm98ENFC0dyJeRBfHW7NlZ1ZbCmJ8Rt52a3pffoRzlwi', 11, '2021-01-11 10:07:45', NULL),
(2, 'Sumith', 'Kumar', 's9k7.sai@gmail.com', NULL, 1, '$2y$10$93UUE1VMei/t1ppM5PnAse6YlfW8uHBl94btPtgRogMzEvsD7MZrS', 11, '2021-01-11 10:09:33', NULL),
(3, 'Ritesh', 'Kumar', 'ritesh@gmail.com', NULL, 1, '$2y$10$7kvVyvhNV72NvLwCLxz.hefsV7z6yeudNS36WftiNqY0Mj/ojGHN.', 13, '2021-01-11 10:28:09', NULL),
(4, 'Testing', '', 'testingUser4@gmail.com', NULL, 1, '$2y$10$AzIY3nYeVCOsSpm5hkxcNOQs/U61dV3217qulj73O0WKaj6fn8JP.', 13, '2021-01-11 10:36:13', NULL),
(5, 'Testing5', '', 'testingUser5@gmail.com', NULL, 1, '$2y$10$8vuyZG9/waTEYm1Bgi1/n.q7F2UN41K/ZDoeghQaMP836EOseCu8m', 13, '2021-01-11 10:36:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skypeId` (`skypeId`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailId` (`emailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
