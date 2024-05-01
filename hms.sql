-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 12:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `furniture_id` int(10) UNSIGNED NOT NULL,
  `furniture_type` enum('Bed','Chair','Table') NOT NULL,
  `description` text DEFAULT NULL,
  `condition` varchar(20) DEFAULT 'Good'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `furniture_student`
--

CREATE TABLE `furniture_student` (
  `student_id` varchar(11) NOT NULL,
  `furniture_id_1` int(10) UNSIGNED NOT NULL,
  `furniture_id_2` int(10) UNSIGNED NOT NULL,
  `furniture_id_3` int(10) UNSIGNED NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `guardian_id` int(10) UNSIGNED NOT NULL,
  `student_id` varchar(11) NOT NULL,
  `guardian_name` varchar(25) NOT NULL,
  `guardian_relation` varchar(15) NOT NULL,
  `guardian_phone` decimal(10,0) NOT NULL,
  `guardian_email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `hostel_id` int(10) UNSIGNED NOT NULL,
  `hostel_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paststudent`
--

CREATE TABLE `paststudent` (
  `EN` varchar(11) NOT NULL,
  `YOA` date NOT NULL,
  `branch` varchar(45) NOT NULL,
  `FName` varchar(25) NOT NULL,
  `MName` varchar(25) DEFAULT NULL,
  `LName` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `student_phone` decimal(10,0) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `YOS` decimal(1,0) DEFAULT NULL,
  `Batch` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(10) UNSIGNED NOT NULL,
  `hostel_id` int(10) UNSIGNED NOT NULL,
  `room_number` int(11) NOT NULL,
  `capacity` int(10) UNSIGNED NOT NULL,
  `room_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `EN` varchar(11) NOT NULL,
  `YOA` date NOT NULL,
  `branch` varchar(45) NOT NULL,
  `FName` varchar(25) NOT NULL,
  `MName` varchar(25) DEFAULT NULL,
  `LName` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `student_phone` decimal(10,0) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `YOS` decimal(1,0) DEFAULT NULL,
  `Batch` varchar(9) DEFAULT NULL,
  `dateOfStatusChange` date DEFAULT NULL,
  `status` enum('unpaid','paid','paid and approved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`furniture_id`);

--
-- Indexes for table `furniture_student`
--
ALTER TABLE `furniture_student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `furniture_id_1` (`furniture_id_1`),
  ADD KEY `furniture_id_2` (`furniture_id_2`),
  ADD KEY `furniture_id_3` (`furniture_id_3`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`guardian_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `paststudent`
--
ALTER TABLE `paststudent`
  ADD PRIMARY KEY (`EN`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `unique_hostel_room_number` (`hostel_id`,`room_number`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`EN`),
  ADD KEY `fk_room_student` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `furniture_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `guardian_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `hostel_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `furniture_student`
--
ALTER TABLE `furniture_student`
  ADD CONSTRAINT `furniture_student_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`EN`),
  ADD CONSTRAINT `furniture_student_ibfk_2` FOREIGN KEY (`furniture_id_1`) REFERENCES `furniture` (`furniture_id`),
  ADD CONSTRAINT `furniture_student_ibfk_3` FOREIGN KEY (`furniture_id_2`) REFERENCES `furniture` (`furniture_id`),
  ADD CONSTRAINT `furniture_student_ibfk_4` FOREIGN KEY (`furniture_id_3`) REFERENCES `furniture` (`furniture_id`);

--
-- Constraints for table `guardian`
--
ALTER TABLE `guardian`
  ADD CONSTRAINT `fk_student_guardian` FOREIGN KEY (`student_id`) REFERENCES `student` (`EN`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `fk_hostel_room` FOREIGN KEY (`hostel_id`) REFERENCES `hostels` (`hostel_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_room_student` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
