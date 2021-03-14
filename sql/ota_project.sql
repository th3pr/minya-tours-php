-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 07:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ota_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_hotel`
--

CREATE TABLE `book_hotel` (
  `book_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_date` date NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_tour`
--

CREATE TABLE `book_tour` (
  `book_id` int(11) NOT NULL,
  `Tour_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tour_guid_id` int(11) NOT NULL,
  `book_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_model` varchar(100) NOT NULL,
  `car_detail` text NOT NULL,
  `car_image` varchar(150) NOT NULL,
  `car_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hot_id` int(11) NOT NULL,
  `hot_name` varchar(255) NOT NULL,
  `hot_price` varchar(150) NOT NULL,
  `hot_address` varchar(255) NOT NULL,
  `hot_detail` text NOT NULL,
  `hot_type` varchar(255) NOT NULL,
  `hot_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `sat_date` date NOT NULL,
  `end_date` date NOT NULL,
  `tour_detail` text NOT NULL,
  `tour_review` varchar(100) DEFAULT NULL,
  `tour_price` varchar(50) NOT NULL,
  `tour_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tour_guide`
--

CREATE TABLE `tour_guide` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_image` varchar(150) DEFAULT NULL,
  `user_dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `name`, `password`, `user_email`, `user_address`, `user_phone`, `user_image`, `user_dob`) VALUES
(5, 'user1', '', '$2y$10$ASl2/a7QEUMrF2wU3wUtYe6f.NaZYCIngW.HrgqOjGg4pPyMfuok6', '', '', '', NULL, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `book_tour`
--
ALTER TABLE `book_tour`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `Tour_id` (`Tour_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tour_guid_id` (`tour_guid_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hot_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `tour_guide`
--
ALTER TABLE `tour_guide`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_1` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_hotel`
--
ALTER TABLE `book_hotel`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_tour`
--
ALTER TABLE `book_tour`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour_guide`
--
ALTER TABLE `tour_guide`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD CONSTRAINT `book_hotel_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`hot_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_hotel_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book_tour`
--
ALTER TABLE `book_tour`
  ADD CONSTRAINT `book_tour_ibfk_1` FOREIGN KEY (`Tour_id`) REFERENCES `tours` (`tour_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_tour_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_tour_ibfk_3` FOREIGN KEY (`tour_guid_id`) REFERENCES `tour_guide` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`hot_id`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tour_guide`
--
ALTER TABLE `tour_guide`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
