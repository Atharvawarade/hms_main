-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 06:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `Application_ID` varchar(20) NOT NULL,
  `Candidate_Name` varchar(60) DEFAULT NULL,
  `Father_Name` varchar(20) DEFAULT NULL,
  `Mobile_No` decimal(10,0) DEFAULT NULL,
  `E_Mail_ID` varchar(100) DEFAULT NULL,
  `Category` enum('General','OBC','SC','ST') DEFAULT NULL,
  `Course_Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`Application_ID`, `Candidate_Name`, `Father_Name`, `Mobile_No`, `E_Mail_ID`, `Category`, `Course_Name`) VALUES
('EN21107534', 'ADSOD OM ANANT', 'ANANT', 7620186474, 'omadsod831@gmail.com', 'OBC', 'Civil Engineering'),
('EN21107535', 'RAVI SHANKAR YADAV', 'HARI SHANKAR', 2216241234, 'raviyadav123@gmail.com', 'SC', 'Computer Science Engineering'),
('EN21107536', 'ANJALI KUMARI', 'RAJESH YADAV', 9876543210, 'anjali.kumari@example.com', 'General', 'Electrical Engineering'),
('EN21107537', 'RAVI KUMAR', 'YOGESH KUMAR', 8765432109, 'ravikumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107538', 'ANSHIKA SHARMA', 'VIKAS SHARMA', 7654321098, 'anshika.sharma@example.com', 'General', 'Information Technology'),
('EN21107539', 'RITU KUMARI', 'RAJESH KUMAR', 6543210987, 'ritu.kumari@example.com', 'SC', 'Civil Engineering'),
('EN21107540', 'ANURAG KUMAR', 'RAJESH KUMAR', 5432109876, 'anurag.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107541', 'KAVITA SHARMA', 'VIKAS SHARMA', 4321098765, 'kavita.sharma@example.com', 'General', 'Electrical Engineering'),
('EN21107542', 'RAMESH KUMAR', 'RAJESH KUMAR', 3210987654, 'ramesh.kumar@example.com', 'SC', 'Information Technology'),
('EN21107543', 'SUNITA DEVI', 'SURESH KUMAR', 2109876543, 'sunita.devi@example.com', 'OBC', 'Civil Engineering'),
('EN21107544', 'MEENA KUMARI', 'RAJESH KUMAR', 1098765432, 'meena.kumari@example.com', 'General', 'Mechanical Engineering'),
('EN21107545', 'SANJAY YADAV', 'RAJESH YADAV', 1098765432, 'sanjay.yadav@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107546', 'RAJESH KUMAR', 'RAJESH KUMAR', 2109876543, 'rajesh.kumar@example.com', 'SC', 'Electrical Engineering'),
('EN21107547', 'ANIL KUMAR', 'RAJESH KUMAR', 3210987654, 'anil.kumar@example.com', 'General', 'Information Technology'),
('EN21107548', 'GEETA DEVI', 'SURESH KUMAR', 4321098765, 'geeta.devi@example.com', 'SC', 'Civil Engineering'),
('EN21107549', 'VIKAS KUMAR', 'RAJESH KUMAR', 5432109876, 'vikas.kumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107550', 'KAVITA SHARMA', 'VIKAS SHARMA', 6543210987, 'kavita.sharma@example.com', 'General', 'Computer Science Engineering'),
('EN21107551', 'RAHUL KUMAR', 'RAJESH KUMAR', 7654321098, 'rahul.kumar@example.com', 'SC', 'Electrical Engineering'),
('EN21107552', 'MEENU KUMARI', 'RAJESH KUMAR', 8765432109, 'meenu.kumari@example.com', 'OBC', 'Information Technology'),
('EN21107553', 'RAM KUMAR', 'RAJESH KUMAR', 9876543210, 'ram.kumar@example.com', 'General', 'Civil Engineering'),
('EN21107554', 'ANITA YADAV', 'RAJESH YADAV', 1234567890, 'anita.yadav@example.com', 'SC', 'Mechanical Engineering'),
('EN21107555', 'AMIT KUMAR', 'YOGESH KUMAR', 2345678901, 'amit.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107556', 'SUNITA KUMARI', 'SURESH KUMAR', 3456789012, 'sunita.kumari@example.com', 'General', 'Electrical Engineering'),
('EN21107557', 'SANTOSH YADAV', 'HARI SHANKAR', 4567890123, 'santosh.yadav@example.com', 'SC', 'Information Technology'),
('EN21107558', 'SHYAM KUMAR', 'YOGESH KUMAR', 5678901234, 'shyam.kumar@example.com', 'OBC', 'Civil Engineering'),
('EN21107559', 'MANISH KUMAR', 'RAJESH KUMAR', 6789012345, 'manish.kumar@example.com', 'General', 'Mechanical Engineering'),
('EN21107560', 'POOJA SHARMA', 'VIKAS SHARMA', 7890123456, 'pooja.sharma@example.com', 'SC', 'Computer Science Engineering'),
('EN21107561', 'ROHIT KUMAR', 'RAJESH KUMAR', 8901234567, 'rohit.kumar@example.com', 'OBC', 'Electrical Engineering'),
('EN21107562', 'MONIKA KUMARI', 'RAJESH KUMAR', 9012345678, 'monika.kumari@example.com', 'General', 'Information Technology'),
('EN21107563', 'MANOJ KUMAR', 'RAJESH KUMAR', 1234567890, 'manoj.kumar@example.com', 'SC', 'Civil Engineering'),
('EN21107564', 'KIRAN YADAV', 'RAJESH YADAV', 2345678901, 'kiran.yadav@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107565', 'RAJ KUMAR', 'RAJESH KUMAR', 3456789012, 'raj.kumar@example.com', 'General', 'Computer Science Engineering'),
('EN21107566', 'POOJA DEVI', 'SURESH KUMAR', 4567890123, 'pooja.devi@example.com', 'SC', 'Electrical Engineering'),
('EN21107567', 'RAMAN KUMAR', 'RAJESH KUMAR', 5678901234, 'raman.kumar@example.com', 'OBC', 'Information Technology'),
('EN21107568', 'NEHA SHARMA', 'VIKAS SHARMA', 6789012345, 'neha.sharma@example.com', 'General', 'Civil Engineering'),
('EN21107569', 'KARAN KUMAR', 'RAJESH KUMAR', 7890123456, 'karan.kumar@example.com', 'SC', 'Mechanical Engineering'),
('EN21107570', 'DEEPAK KUMAR', 'RAJESH KUMAR', 8901234567, 'deepak.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107571', 'ARTI SHARMA', 'VIKAS SHARMA', 9012345678, 'arti.sharma@example.com', 'General', 'Electrical Engineering'),
('EN21107572', 'ANUJ KUMAR', 'RAJESH KUMAR', 1234567890, 'anuj.kumar@example.com', 'SC', 'Information Technology'),
('EN21107573', 'RAMESH YADAV', 'RAJESH YADAV', 2345678901, 'ramesh.yadav@example.com', 'OBC', 'Civil Engineering'),
('EN21107574', 'KAVITA DEVI', 'SURESH KUMAR', 3456789012, 'kavita.devi@example.com', 'General', 'Mechanical Engineering'),
('EN21107575', 'SANJAY KUMAR', 'RAJESH KUMAR', 4567890123, 'sanjay.kumar@example.com', 'SC', 'Computer Science Engineering'),
('EN21107576', 'PRIYA SHARMA', 'VIKAS SHARMA', 5678901234, 'priya.sharma@example.com', 'OBC', 'Electrical Engineering'),
('EN21107577', 'RAJESH KUMAR', 'RAJESH KUMAR', 6789012345, 'rajesh.kumar@example.com', 'General', 'Information Technology'),
('EN21107578', 'GEETA KUMARI', 'SURESH KUMAR', 7890123456, 'geeta.kumari@example.com', 'SC', 'Civil Engineering'),
('EN21107579', 'VIJAY KUMAR', 'RAJESH KUMAR', 8901234567, 'vijay.kumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107580', 'KAVITA SHARMA', 'VIKAS SHARMA', 9012345678, 'kavita.sharma@example.com', 'General', 'Computer Science Engineering'),
('EN21107534', 'ADSOD OM ANANT', 'ANANT', 7620186474, 'omadsod831@gmail.com', 'OBC', 'Civil Engineering'),
('EN21107535', 'RAVI SHANKAR YADAV', 'HARI SHANKAR', 2216241234, 'raviyadav123@gmail.com', 'SC', 'Computer Science Engineering'),
('EN21107536', 'ANJALI KUMARI', 'RAJESH YADAV', 9876543210, 'anjali.kumari@example.com', 'General', 'Electrical Engineering'),
('EN21107537', 'RAVI KUMAR', 'YOGESH KUMAR', 8765432109, 'ravikumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107538', 'ANSHIKA SHARMA', 'VIKAS SHARMA', 7654321098, 'anshika.sharma@example.com', 'General', 'Information Technology'),
('EN21107539', 'RITU KUMARI', 'RAJESH KUMAR', 6543210987, 'ritu.kumari@example.com', 'SC', 'Civil Engineering'),
('EN21107540', 'ANURAG KUMAR', 'RAJESH KUMAR', 5432109876, 'anurag.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107541', 'KAVITA SHARMA', 'VIKAS SHARMA', 4321098765, 'kavita.sharma@example.com', 'General', 'Electrical Engineering'),
('EN21107542', 'RAMESH KUMAR', 'RAJESH KUMAR', 3210987654, 'ramesh.kumar@example.com', 'SC', 'Information Technology'),
('EN21107543', 'SUNITA DEVI', 'SURESH KUMAR', 2109876543, 'sunita.devi@example.com', 'OBC', 'Civil Engineering'),
('EN21107544', 'MEENA KUMARI', 'RAJESH KUMAR', 1098765432, 'meena.kumari@example.com', 'General', 'Mechanical Engineering'),
('EN21107545', 'SANJAY YADAV', 'RAJESH YADAV', 1098765432, 'sanjay.yadav@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107546', 'RAJESH KUMAR', 'RAJESH KUMAR', 2109876543, 'rajesh.kumar@example.com', 'SC', 'Electrical Engineering'),
('EN21107547', 'ANIL KUMAR', 'RAJESH KUMAR', 3210987654, 'anil.kumar@example.com', 'General', 'Information Technology'),
('EN21107548', 'GEETA DEVI', 'SURESH KUMAR', 4321098765, 'geeta.devi@example.com', 'SC', 'Civil Engineering'),
('EN21107549', 'VIKAS KUMAR', 'RAJESH KUMAR', 5432109876, 'vikas.kumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107550', 'KAVITA SHARMA', 'VIKAS SHARMA', 6543210987, 'kavita.sharma@example.com', 'General', 'Computer Science Engineering'),
('EN21107551', 'RAHUL KUMAR', 'RAJESH KUMAR', 7654321098, 'rahul.kumar@example.com', 'SC', 'Electrical Engineering'),
('EN21107552', 'MEENU KUMARI', 'RAJESH KUMAR', 8765432109, 'meenu.kumari@example.com', 'OBC', 'Information Technology'),
('EN21107553', 'RAM KUMAR', 'RAJESH KUMAR', 9876543210, 'ram.kumar@example.com', 'General', 'Civil Engineering'),
('EN21107554', 'ANITA YADAV', 'RAJESH YADAV', 1234567890, 'anita.yadav@example.com', 'SC', 'Mechanical Engineering'),
('EN21107555', 'AMIT KUMAR', 'YOGESH KUMAR', 2345678901, 'amit.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107556', 'SUNITA KUMARI', 'SURESH KUMAR', 3456789012, 'sunita.kumari@example.com', 'General', 'Electrical Engineering'),
('EN21107557', 'SANTOSH YADAV', 'HARI SHANKAR', 4567890123, 'santosh.yadav@example.com', 'SC', 'Information Technology'),
('EN21107558', 'SHYAM KUMAR', 'YOGESH KUMAR', 5678901234, 'shyam.kumar@example.com', 'OBC', 'Civil Engineering'),
('EN21107559', 'MANISH KUMAR', 'RAJESH KUMAR', 6789012345, 'manish.kumar@example.com', 'General', 'Mechanical Engineering'),
('EN21107560', 'POOJA SHARMA', 'VIKAS SHARMA', 7890123456, 'pooja.sharma@example.com', 'SC', 'Computer Science Engineering'),
('EN21107561', 'ROHIT KUMAR', 'RAJESH KUMAR', 8901234567, 'rohit.kumar@example.com', 'OBC', 'Electrical Engineering'),
('EN21107562', 'MONIKA KUMARI', 'RAJESH KUMAR', 9012345678, 'monika.kumari@example.com', 'General', 'Information Technology'),
('EN21107563', 'MANOJ KUMAR', 'RAJESH KUMAR', 1234567890, 'manoj.kumar@example.com', 'SC', 'Civil Engineering'),
('EN21107564', 'KIRAN YADAV', 'RAJESH YADAV', 2345678901, 'kiran.yadav@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107565', 'RAJ KUMAR', 'RAJESH KUMAR', 3456789012, 'raj.kumar@example.com', 'General', 'Computer Science Engineering'),
('EN21107566', 'POOJA DEVI', 'SURESH KUMAR', 4567890123, 'pooja.devi@example.com', 'SC', 'Electrical Engineering'),
('EN21107567', 'RAMAN KUMAR', 'RAJESH KUMAR', 5678901234, 'raman.kumar@example.com', 'OBC', 'Information Technology'),
('EN21107568', 'NEHA SHARMA', 'VIKAS SHARMA', 6789012345, 'neha.sharma@example.com', 'General', 'Civil Engineering'),
('EN21107569', 'KARAN KUMAR', 'RAJESH KUMAR', 7890123456, 'karan.kumar@example.com', 'SC', 'Mechanical Engineering'),
('EN21107570', 'DEEPAK KUMAR', 'RAJESH KUMAR', 8901234567, 'deepak.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107571', 'ARTI SHARMA', 'VIKAS SHARMA', 9012345678, 'arti.sharma@example.com', 'General', 'Electrical Engineering'),
('EN21107572', 'ANUJ KUMAR', 'RAJESH KUMAR', 1234567890, 'anuj.kumar@example.com', 'SC', 'Information Technology'),
('EN21107573', 'RAMESH YADAV', 'RAJESH YADAV', 2345678901, 'ramesh.yadav@example.com', 'OBC', 'Civil Engineering'),
('EN21107574', 'KAVITA DEVI', 'SURESH KUMAR', 3456789012, 'kavita.devi@example.com', 'General', 'Mechanical Engineering'),
('EN21107575', 'SANJAY KUMAR', 'RAJESH KUMAR', 4567890123, 'sanjay.kumar@example.com', 'SC', 'Computer Science Engineering'),
('EN21107576', 'PRIYA SHARMA', 'VIKAS SHARMA', 5678901234, 'priya.sharma@example.com', 'OBC', 'Electrical Engineering'),
('EN21107577', 'RAJESH KUMAR', 'RAJESH KUMAR', 6789012345, 'rajesh.kumar@example.com', 'General', 'Information Technology'),
('EN21107578', 'GEETA KUMARI', 'SURESH KUMAR', 7890123456, 'geeta.kumari@example.com', 'SC', 'Civil Engineering'),
('EN21107579', 'VIJAY KUMAR', 'RAJESH KUMAR', 8901234567, 'vijay.kumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107580', 'KAVITA SHARMA', 'VIKAS SHARMA', 9012345678, 'kavita.sharma@example.com', 'General', 'Computer Science Engineering'),
('EN21107581', 'ATHARVA WARADE', 'RAMESH WARADE', 7410767476, 'atharvarwarade@gmail.com', 'OBC', 'Computer Science Engineering');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`hostel_id`, `hostel_name`) VALUES
(1, 'BOYS HOSTEL'),
(2, 'GIRLS HOSTEL');

-- --------------------------------------------------------

--
-- Table structure for table `incharges`
--

CREATE TABLE `incharges` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incharges`
--

INSERT INTO `incharges` (`username`, `password`, `name`) VALUES
('ACCNTBIT01', '789456123', 'Parag Kombe'),
('WARDB01', '123456789', 'Mohan Chauvhan'),
('WARDG01', '987654321', 'Geeta Tiwari');

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

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `hostel_id`, `room_number`, `capacity`, `room_type`) VALUES
(1, 1, 1, 2, '');

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
-- Dumping data for table `student`
--

INSERT INTO `student` (`EN`, `YOA`, `branch`, `FName`, `MName`, `LName`, `email`, `student_phone`, `Address`, `state`, `room_id`, `YOS`, `Batch`, `dateOfStatusChange`, `status`) VALUES
('EN123456789', '2021-12-21', 'Computer Engineering', 'Atharva ', 'Ramesh', 'Warade', 'co.2021.arwarade@bitwardha.ac.in', 7410767476, 'Meera Nagar', 'Maharashtra', 1, 9, '2021', '2024-05-01', 'paid and approved');

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
-- Indexes for table `incharges`
--
ALTER TABLE `incharges`
  ADD PRIMARY KEY (`username`);

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
  MODIFY `hostel_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
