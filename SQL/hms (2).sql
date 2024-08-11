-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 05:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `attendance_files`
--

CREATE TABLE `attendance_files` (
  `year` int(4) NOT NULL,
  `month` enum('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `Date_and_time_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hostel` enum('Boys','Girls') NOT NULL,
  `file` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_files`
--

INSERT INTO `attendance_files` (`year`, `month`, `Date_and_time_of_upload`, `hostel`, `file`) VALUES
(2024, 'January', '2024-08-05 11:07:54', '', '../../Attendance/student_attendance.csv');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `Application_ID` varchar(20) NOT NULL,
  `batch` varchar(12) NOT NULL,
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

INSERT INTO `candidates` (`Application_ID`, `batch`, `Candidate_Name`, `Father_Name`, `Mobile_No`, `E_Mail_ID`, `Category`, `Course_Name`) VALUES
('EN21107534', '2021', 'ADSOD OM ANANT', 'ANANT', 7620186474, 'omadsod831@gmail.com', 'OBC', 'Civil Engineering'),
('EN21107535', '2021', 'RAVI SHANKAR YADAV', 'HARI SHANKAR', 2216241234, 'raviyadav123@gmail.com', 'SC', 'Computer Science Engineering'),
('EN21107536', '2021', 'ANJALI KUMARI', 'RAJESH YADAV', 9876543210, 'anjali.kumari@example.com', 'General', 'Electrical Engineering'),
('EN21107537', '2021', 'RAVI KUMAR', 'YOGESH KUMAR', 8765432109, 'ravikumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107538', '2021', 'ANSHIKA SHARMA', 'VIKAS SHARMA', 7654321098, 'anshika.sharma@example.com', 'General', 'Information Technology'),
('EN21107539', '2021', 'RITU KUMARI', 'RAJESH KUMAR', 6543210987, 'ritu.kumari@example.com', 'SC', 'Civil Engineering'),
('EN21107540', '2021', 'ANURAG KUMAR', 'RAJESH KUMAR', 5432109876, 'anurag.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107541', '2021', 'KAVITA SHARMA', 'VIKAS SHARMA', 4321098765, 'kavita.sharma@example.com', 'General', 'Electrical Engineering'),
('EN21107542', '2021', 'RAMESH KUMAR', 'RAJESH KUMAR', 3210987654, 'ramesh.kumar@example.com', 'SC', 'Information Technology'),
('EN21107543', '2021', 'SUNITA DEVI', 'SURESH KUMAR', 2109876543, 'sunita.devi@example.com', 'OBC', 'Civil Engineering'),
('EN21107544', '2021', 'MEENA KUMARI', 'RAJESH KUMAR', 1098765432, 'meena.kumari@example.com', 'General', 'Mechanical Engineering'),
('EN21107545', '2021', 'SANJAY YADAV', 'RAJESH YADAV', 1098765432, 'sanjay.yadav@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107546', '2021', 'RAJESH KUMAR', 'RAJESH KUMAR', 2109876543, 'rajesh.kumar@example.com', 'SC', 'Electrical Engineering'),
('EN21107547', '2021', 'ANIL KUMAR', 'RAJESH KUMAR', 3210987654, 'anil.kumar@example.com', 'General', 'Information Technology'),
('EN21107548', '2021', 'GEETA DEVI', 'SURESH KUMAR', 4321098765, 'geeta.devi@example.com', 'SC', 'Civil Engineering'),
('EN21107549', '2021', 'VIKAS KUMAR', 'RAJESH KUMAR', 5432109876, 'vikas.kumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107550', '2021', 'KAVITA SHARMA', 'VIKAS SHARMA', 6543210987, 'kavita.sharma@example.com', 'General', 'Computer Science Engineering'),
('EN21107551', '2021', 'RAHUL KUMAR', 'RAJESH KUMAR', 7654321098, 'rahul.kumar@example.com', 'SC', 'Electrical Engineering'),
('EN21107552', '2021', 'MEENU KUMARI', 'RAJESH KUMAR', 8765432109, 'meenu.kumari@example.com', 'OBC', 'Information Technology'),
('EN21107553', '2021', 'RAM KUMAR', 'RAJESH KUMAR', 9876543210, 'ram.kumar@example.com', 'General', 'Civil Engineering'),
('EN21107554', '2021', 'ANITA YADAV', 'RAJESH YADAV', 1234567890, 'anita.yadav@example.com', 'SC', 'Mechanical Engineering'),
('EN21107555', '2021', 'AMIT KUMAR', 'YOGESH KUMAR', 2345678901, 'amit.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107556', '2021', 'SUNITA KUMARI', 'SURESH KUMAR', 3456789012, 'sunita.kumari@example.com', 'General', 'Electrical Engineering'),
('EN21107557', '2021', 'SANTOSH YADAV', 'HARI SHANKAR', 4567890123, 'santosh.yadav@example.com', 'SC', 'Information Technology'),
('EN21107558', '2021', 'SHYAM KUMAR', 'YOGESH KUMAR', 5678901234, 'shyam.kumar@example.com', 'OBC', 'Civil Engineering'),
('EN21107559', '2021', 'MANISH KUMAR', 'RAJESH KUMAR', 6789012345, 'manish.kumar@example.com', 'General', 'Mechanical Engineering'),
('EN21107560', '2021', 'POOJA SHARMA', 'VIKAS SHARMA', 7890123456, 'pooja.sharma@example.com', 'SC', 'Computer Science Engineering'),
('EN21107561', '2021', 'ROHIT KUMAR', 'RAJESH KUMAR', 8901234567, 'rohit.kumar@example.com', 'OBC', 'Electrical Engineering'),
('EN21107562', '2021', 'MONIKA KUMARI', 'RAJESH KUMAR', 9012345678, 'monika.kumari@example.com', 'General', 'Information Technology'),
('EN21107563', '2021', 'MANOJ KUMAR', 'RAJESH KUMAR', 1234567890, 'manoj.kumar@example.com', 'SC', 'Civil Engineering'),
('EN21107564', '2021', 'KIRAN YADAV', 'RAJESH YADAV', 2345678901, 'kiran.yadav@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107565', '2021', 'RAJ KUMAR', 'RAJESH KUMAR', 3456789012, 'raj.kumar@example.com', 'General', 'Computer Science Engineering'),
('EN21107566', '2021', 'POOJA DEVI', 'SURESH KUMAR', 4567890123, 'pooja.devi@example.com', 'SC', 'Electrical Engineering'),
('EN21107567', '2021', 'RAMAN KUMAR', 'RAJESH KUMAR', 5678901234, 'raman.kumar@example.com', 'OBC', 'Information Technology'),
('EN21107568', '2021', 'NEHA SHARMA', 'VIKAS SHARMA', 6789012345, 'neha.sharma@example.com', 'General', 'Civil Engineering'),
('EN21107569', '2021', 'KARAN KUMAR', 'RAJESH KUMAR', 7890123456, 'karan.kumar@example.com', 'SC', 'Mechanical Engineering'),
('EN21107570', '2021', 'DEEPAK KUMAR', 'RAJESH KUMAR', 8901234567, 'deepak.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107571', '2021', 'ARTI SHARMA', 'VIKAS SHARMA', 9012345678, 'arti.sharma@example.com', 'General', 'Electrical Engineering'),
('EN21107572', '2021', 'ANUJ KUMAR', 'RAJESH KUMAR', 1234567890, 'anuj.kumar@example.com', 'SC', 'Information Technology'),
('EN21107573', '2021', 'RAMESH YADAV', 'RAJESH YADAV', 2345678901, 'ramesh.yadav@example.com', 'OBC', 'Civil Engineering'),
('EN21107574', '2021', 'KAVITA DEVI', 'SURESH KUMAR', 3456789012, 'kavita.devi@example.com', 'General', 'Mechanical Engineering'),
('EN21107575', '2021', 'SANJAY KUMAR', 'RAJESH KUMAR', 4567890123, 'sanjay.kumar@example.com', 'SC', 'Computer Science Engineering'),
('EN21107576', '2021', 'PRIYA SHARMA', 'VIKAS SHARMA', 5678901234, 'priya.sharma@example.com', 'OBC', 'Electrical Engineering'),
('EN21107577', '2021', 'RAJESH KUMAR', 'RAJESH KUMAR', 6789012345, 'rajesh.kumar@example.com', 'General', 'Information Technology'),
('EN21107578', '2021', 'GEETA KUMARI', 'SURESH KUMAR', 7890123456, 'geeta.kumari@example.com', 'SC', 'Civil Engineering'),
('EN21107579', '2021', 'VIJAY KUMAR', 'RAJESH KUMAR', 8901234567, 'vijay.kumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107580', '2021', 'KAVITA SHARMA', 'VIKAS SHARMA', 9012345678, 'kavita.sharma@example.com', 'General', 'Computer Science Engineering'),
('EN21107534', '2021', 'ADSOD OM ANANT', 'ANANT', 7620186474, 'omadsod831@gmail.com', 'OBC', 'Civil Engineering'),
('EN21107535', '2021', 'RAVI SHANKAR YADAV', 'HARI SHANKAR', 2216241234, 'raviyadav123@gmail.com', 'SC', 'Computer Science Engineering'),
('EN21107536', '2021', 'ANJALI KUMARI', 'RAJESH YADAV', 9876543210, 'anjali.kumari@example.com', 'General', 'Electrical Engineering'),
('EN21107537', '2021', 'RAVI KUMAR', 'YOGESH KUMAR', 8765432109, 'ravikumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107538', '2021', 'ANSHIKA SHARMA', 'VIKAS SHARMA', 7654321098, 'anshika.sharma@example.com', 'General', 'Information Technology'),
('EN21107539', '2021', 'RITU KUMARI', 'RAJESH KUMAR', 6543210987, 'ritu.kumari@example.com', 'SC', 'Civil Engineering'),
('EN21107540', '2021', 'ANURAG KUMAR', 'RAJESH KUMAR', 5432109876, 'anurag.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107541', '2021', 'KAVITA SHARMA', 'VIKAS SHARMA', 4321098765, 'kavita.sharma@example.com', 'General', 'Electrical Engineering'),
('EN21107542', '2021', 'RAMESH KUMAR', 'RAJESH KUMAR', 3210987654, 'ramesh.kumar@example.com', 'SC', 'Information Technology'),
('EN21107543', '2021', 'SUNITA DEVI', 'SURESH KUMAR', 2109876543, 'sunita.devi@example.com', 'OBC', 'Civil Engineering'),
('EN21107544', '2021', 'MEENA KUMARI', 'RAJESH KUMAR', 1098765432, 'meena.kumari@example.com', 'General', 'Mechanical Engineering'),
('EN21107545', '2021', 'SANJAY YADAV', 'RAJESH YADAV', 1098765432, 'sanjay.yadav@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107546', '2021', 'RAJESH KUMAR', 'RAJESH KUMAR', 2109876543, 'rajesh.kumar@example.com', 'SC', 'Electrical Engineering'),
('EN21107547', '2021', 'ANIL KUMAR', 'RAJESH KUMAR', 3210987654, 'anil.kumar@example.com', 'General', 'Information Technology'),
('EN21107548', '2021', 'GEETA DEVI', 'SURESH KUMAR', 4321098765, 'geeta.devi@example.com', 'SC', 'Civil Engineering'),
('EN21107549', '2021', 'VIKAS KUMAR', 'RAJESH KUMAR', 5432109876, 'vikas.kumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107550', '2021', 'KAVITA SHARMA', 'VIKAS SHARMA', 6543210987, 'kavita.sharma@example.com', 'General', 'Computer Science Engineering'),
('EN21107551', '2021', 'RAHUL KUMAR', 'RAJESH KUMAR', 7654321098, 'rahul.kumar@example.com', 'SC', 'Electrical Engineering'),
('EN21107552', '2021', 'MEENU KUMARI', 'RAJESH KUMAR', 8765432109, 'meenu.kumari@example.com', 'OBC', 'Information Technology'),
('EN21107553', '2021', 'RAM KUMAR', 'RAJESH KUMAR', 9876543210, 'ram.kumar@example.com', 'General', 'Civil Engineering'),
('EN21107554', '2021', 'ANITA YADAV', 'RAJESH YADAV', 1234567890, 'anita.yadav@example.com', 'SC', 'Mechanical Engineering'),
('EN21107555', '2021', 'AMIT KUMAR', 'YOGESH KUMAR', 2345678901, 'amit.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107556', '2021', 'SUNITA KUMARI', 'SURESH KUMAR', 3456789012, 'sunita.kumari@example.com', 'General', 'Electrical Engineering'),
('EN21107557', '2021', 'SANTOSH YADAV', 'HARI SHANKAR', 4567890123, 'santosh.yadav@example.com', 'SC', 'Information Technology'),
('EN21107558', '2021', 'SHYAM KUMAR', 'YOGESH KUMAR', 5678901234, 'shyam.kumar@example.com', 'OBC', 'Civil Engineering'),
('EN21107559', '2021', 'MANISH KUMAR', 'RAJESH KUMAR', 6789012345, 'manish.kumar@example.com', 'General', 'Mechanical Engineering'),
('EN21107560', '2021', 'POOJA SHARMA', 'VIKAS SHARMA', 7890123456, 'pooja.sharma@example.com', 'SC', 'Computer Science Engineering'),
('EN21107561', '2021', 'ROHIT KUMAR', 'RAJESH KUMAR', 8901234567, 'rohit.kumar@example.com', 'OBC', 'Electrical Engineering'),
('EN21107562', '2021', 'MONIKA KUMARI', 'RAJESH KUMAR', 9012345678, 'monika.kumari@example.com', 'General', 'Information Technology'),
('EN21107563', '2021', 'MANOJ KUMAR', 'RAJESH KUMAR', 1234567890, 'manoj.kumar@example.com', 'SC', 'Civil Engineering'),
('EN21107564', '2021', 'KIRAN YADAV', 'RAJESH YADAV', 2345678901, 'kiran.yadav@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107565', '2021', 'RAJ KUMAR', 'RAJESH KUMAR', 3456789012, 'raj.kumar@example.com', 'General', 'Computer Science Engineering'),
('EN21107566', '2021', 'POOJA DEVI', 'SURESH KUMAR', 4567890123, 'pooja.devi@example.com', 'SC', 'Electrical Engineering'),
('EN21107567', '2021', 'RAMAN KUMAR', 'RAJESH KUMAR', 5678901234, 'raman.kumar@example.com', 'OBC', 'Information Technology'),
('EN21107568', '2021', 'NEHA SHARMA', 'VIKAS SHARMA', 6789012345, 'neha.sharma@example.com', 'General', 'Civil Engineering'),
('EN21107569', '2021', 'KARAN KUMAR', 'RAJESH KUMAR', 7890123456, 'karan.kumar@example.com', 'SC', 'Mechanical Engineering'),
('EN21107570', '2021', 'DEEPAK KUMAR', 'RAJESH KUMAR', 8901234567, 'deepak.kumar@example.com', 'OBC', 'Computer Science Engineering'),
('EN21107571', '2021', 'ARTI SHARMA', 'VIKAS SHARMA', 9012345678, 'arti.sharma@example.com', 'General', 'Electrical Engineering'),
('EN21107572', '2021', 'ANUJ KUMAR', 'RAJESH KUMAR', 1234567890, 'anuj.kumar@example.com', 'SC', 'Information Technology'),
('EN21107573', '2021', 'RAMESH YADAV', 'RAJESH YADAV', 2345678901, 'ramesh.yadav@example.com', 'OBC', 'Civil Engineering'),
('EN21107574', '2021', 'KAVITA DEVI', 'SURESH KUMAR', 3456789012, 'kavita.devi@example.com', 'General', 'Mechanical Engineering'),
('EN21107575', '2021', 'SANJAY KUMAR', 'RAJESH KUMAR', 4567890123, 'sanjay.kumar@example.com', 'SC', 'Computer Science Engineering'),
('EN21107576', '2021', 'PRIYA SHARMA', 'VIKAS SHARMA', 5678901234, 'priya.sharma@example.com', 'OBC', 'Electrical Engineering'),
('EN21107577', '2021', 'RAJESH KUMAR', 'RAJESH KUMAR', 6789012345, 'rajesh.kumar@example.com', 'General', 'Information Technology'),
('EN21107578', '2021', 'GEETA KUMARI', 'SURESH KUMAR', 7890123456, 'geeta.kumari@example.com', 'SC', 'Civil Engineering'),
('EN21107579', '2021', 'VIJAY KUMAR', 'RAJESH KUMAR', 8901234567, 'vijay.kumar@example.com', 'OBC', 'Mechanical Engineering'),
('EN21107580', '2021', 'KAVITA SHARMA', 'VIKAS SHARMA', 9012345678, 'kavita.sharma@example.com', 'General', 'Computer Science Engineering'),
('EN21107581', '2021', 'ATHARVA WARADE', 'RAMESH WARADE', 7410767476, 'atharvarwarade@gmail.com', 'OBC', 'Computer Science Engineering'),
('EN21107535', '2022', 'Anuja Shankar Lanjewar', 'Shankar Lanjewar', 9876543201, 'anuja.lanjewar@example.com', 'General', 'B.Tech'),
('EN21107536', '2022', 'Atharva Ramesh Warade', 'Ramesh Warade', 9876543202, 'atharva.warade@example.com', 'General', 'B.Tech'),
('EN21107537', '2022', 'Ishika Sunil Patil', 'Sunil Patil', 9876543203, 'ishika.patil@example.com', 'OBC', 'B.Tech'),
('EN21107538', '2022', 'Rohan Rajesh Kulkarni', 'Rajesh Kulkarni', 9876543204, 'rohan.kulkarni@example.com', 'General', 'B.Tech'),
('EN21107539', '2022', 'Prajakta Anil Deshmukh', 'Anil Deshmukh', 9876543205, 'prajakta.deshmukh@example.com', 'SC', 'B.Tech'),
('EN21107540', '2022', 'Aditya Sanjay Gawande', 'Sanjay Gawande', 9876543206, 'aditya.gawande@example.com', 'General', 'B.Tech'),
('EN21107541', '2022', 'Snehal Vijayrao More', 'Vijayrao More', 9876543207, 'snehal.more@example.com', 'OBC', 'B.Tech'),
('EN21107542', '2022', 'Yash Shriniwas Pawar', 'Shriniwas Pawar', 9876543208, 'yash.pawar@example.com', 'General', 'B.Tech'),
('EN21107543', '2022', 'Vaishnavi Sudhir Kale', 'Sudhir Kale', 9876543209, 'vaishnavi.kale@example.com', 'OBC', 'B.Tech'),
('EN21107544', '2022', 'Madhura Suresh Shinde', 'Suresh Shinde', 9876543210, 'madhura.shinde@example.com', 'General', 'B.Tech'),
('EN21107545', '2022', 'Aryan Pravin Jadhav', 'Pravin Jadhav', 9876543211, 'aryan.jadhav@example.com', 'SC', 'B.Tech'),
('EN21107546', '2022', 'Tanvi Milind Patil', 'Milind Patil', 9876543212, 'tanvi.patil@example.com', 'General', 'B.Tech'),
('EN21107547', '2022', 'Rutik Prakash Wankhede', 'Prakash Wankhede', 9876543213, 'rutik.wankhede@example.com', 'OBC', 'B.Tech'),
('EN21107548', '2022', 'Nisha Rajesh Patil', 'Rajesh Patil', 9876543214, 'nisha.patil@example.com', 'General', 'B.Tech'),
('EN21107549', '2022', 'Tejaswini Dinesh Kulkarni', 'Dinesh Kulkarni', 9876543215, 'tejaswini.kulkarni@example.com', 'General', 'B.Tech'),
('EN21107550', '2022', 'Shubham Arun Gaikwad', 'Arun Gaikwad', 9876543216, 'shubham.gaikwad@example.com', 'SC', 'B.Tech'),
('EN21107551', '2022', 'Aditi Ramesh Salunkhe', 'Ramesh Salunkhe', 9876543217, 'aditi.salunkhe@example.com', 'OBC', 'B.Tech'),
('EN21107552', '2022', 'Omkar Pradeep Kshirsagar', 'Pradeep Kshirsagar', 9876543218, 'omkar.kshirsagar@example.com', 'General', 'B.Tech'),
('EN21107553', '2022', 'Sakshi Mahendra Mahajan', 'Mahendra Mahajan', 9876543219, 'sakshi.mahajan@example.com', 'General', 'B.Tech'),
('EN21107554', '2022', 'Hrishikesh Umesh Deshpande', 'Umesh Deshpande', 9876543220, 'hrishikesh.deshpande@example.com', 'OBC', 'B.Tech'),
('EN21107554', '2022', 'Hrishikesh Umesh Deshpande', 'Umesh Deshpande', 9876543220, 'hrishikesh.deshpande@example.com', 'OBC', 'B.Tech'),
('EN21107535', '2022', 'Anuja Shankar Lanjewar', 'Shankar Lanjewar', 9876543201, 'anuja.lanjewar@example.com', 'General', 'B.Tech'),
('EN21107536', '2022', 'Atharva Ramesh Warade', 'Ramesh Warade', 9876543202, 'atharva.warade@example.com', 'General', 'B.Tech'),
('EN21107537', '2022', 'Ishika Sunil Patil', 'Sunil Patil', 9876543203, 'ishika.patil@example.com', 'OBC', 'B.Tech'),
('EN21107538', '2022', 'Rohan Rajesh Kulkarni', 'Rajesh Kulkarni', 9876543204, 'rohan.kulkarni@example.com', 'General', 'B.Tech'),
('EN21107539', '2022', 'Prajakta Anil Deshmukh', 'Anil Deshmukh', 9876543205, 'prajakta.deshmukh@example.com', 'SC', 'B.Tech'),
('EN21107540', '2022', 'Aditya Sanjay Gawande', 'Sanjay Gawande', 9876543206, 'aditya.gawande@example.com', 'General', 'B.Tech'),
('EN21107541', '2022', 'Snehal Vijayrao More', 'Vijayrao More', 9876543207, 'snehal.more@example.com', 'OBC', 'B.Tech'),
('EN21107542', '2022', 'Yash Shriniwas Pawar', 'Shriniwas Pawar', 9876543208, 'yash.pawar@example.com', 'General', 'B.Tech'),
('EN21107543', '2022', 'Vaishnavi Sudhir Kale', 'Sudhir Kale', 9876543209, 'vaishnavi.kale@example.com', 'OBC', 'B.Tech'),
('EN21107544', '2022', 'Madhura Suresh Shinde', 'Suresh Shinde', 9876543210, 'madhura.shinde@example.com', 'General', 'B.Tech'),
('EN21107545', '2022', 'Aryan Pravin Jadhav', 'Pravin Jadhav', 9876543211, 'aryan.jadhav@example.com', 'SC', 'B.Tech'),
('EN21107546', '2022', 'Tanvi Milind Patil', 'Milind Patil', 9876543212, 'tanvi.patil@example.com', 'General', 'B.Tech'),
('EN21107547', '2022', 'Rutik Prakash Wankhede', 'Prakash Wankhede', 9876543213, 'rutik.wankhede@example.com', 'OBC', 'B.Tech'),
('EN21107548', '2022', 'Nisha Rajesh Patil', 'Rajesh Patil', 9876543214, 'nisha.patil@example.com', 'General', 'B.Tech'),
('EN21107549', '2022', 'Tejaswini Dinesh Kulkarni', 'Dinesh Kulkarni', 9876543215, 'tejaswini.kulkarni@example.com', 'General', 'B.Tech'),
('EN21107550', '2022', 'Shubham Arun Gaikwad', 'Arun Gaikwad', 9876543216, 'shubham.gaikwad@example.com', 'SC', 'B.Tech'),
('EN21107551', '2022', 'Aditi Ramesh Salunkhe', 'Ramesh Salunkhe', 9876543217, 'aditi.salunkhe@example.com', 'OBC', 'B.Tech'),
('EN21107552', '2022', 'Omkar Pradeep Kshirsagar', 'Pradeep Kshirsagar', 9876543218, 'omkar.kshirsagar@example.com', 'General', 'B.Tech'),
('EN21107553', '2022', 'Sakshi Mahendra Mahajan', 'Mahendra Mahajan', 9876543219, 'sakshi.mahajan@example.com', 'General', 'B.Tech'),
('EN21107554', '2022', 'Hrishikesh Umesh Deshpande', 'Umesh Deshpande', 9876543220, 'hrishikesh.deshpande@example.com', 'OBC', 'B.Tech'),
('EN21107554', '2022', 'Hrishikesh Umesh Deshpande', 'Umesh Deshpande', 9876543220, 'hrishikesh.deshpande@example.com', 'OBC', 'B.Tech'),
('EN21107535', '2022', 'Anuja Shankar Lanjewar', 'Shankar Lanjewar', 9876543201, 'anuja.lanjewar@example.com', 'General', 'B.Tech'),
('EN21107536', '2022', 'Atharva Ramesh Warade', 'Ramesh Warade', 9876543202, 'atharva.warade@example.com', 'General', 'B.Tech'),
('EN21107537', '2022', 'Ishika Sunil Patil', 'Sunil Patil', 9876543203, 'ishika.patil@example.com', 'OBC', 'B.Tech'),
('EN21107538', '2022', 'Rohan Rajesh Kulkarni', 'Rajesh Kulkarni', 9876543204, 'rohan.kulkarni@example.com', 'General', 'B.Tech'),
('EN21107539', '2022', 'Prajakta Anil Deshmukh', 'Anil Deshmukh', 9876543205, 'prajakta.deshmukh@example.com', 'SC', 'B.Tech'),
('EN21107540', '2022', 'Aditya Sanjay Gawande', 'Sanjay Gawande', 9876543206, 'aditya.gawande@example.com', 'General', 'B.Tech'),
('EN21107541', '2022', 'Snehal Vijayrao More', 'Vijayrao More', 9876543207, 'snehal.more@example.com', 'OBC', 'B.Tech'),
('EN21107542', '2022', 'Yash Shriniwas Pawar', 'Shriniwas Pawar', 9876543208, 'yash.pawar@example.com', 'General', 'B.Tech'),
('EN21107543', '2022', 'Vaishnavi Sudhir Kale', 'Sudhir Kale', 9876543209, 'vaishnavi.kale@example.com', 'OBC', 'B.Tech'),
('EN21107544', '2022', 'Madhura Suresh Shinde', 'Suresh Shinde', 9876543210, 'madhura.shinde@example.com', 'General', 'B.Tech'),
('EN21107545', '2022', 'Aryan Pravin Jadhav', 'Pravin Jadhav', 9876543211, 'aryan.jadhav@example.com', 'SC', 'B.Tech'),
('EN21107546', '2022', 'Tanvi Milind Patil', 'Milind Patil', 9876543212, 'tanvi.patil@example.com', 'General', 'B.Tech'),
('EN21107547', '2022', 'Rutik Prakash Wankhede', 'Prakash Wankhede', 9876543213, 'rutik.wankhede@example.com', 'OBC', 'B.Tech'),
('EN21107548', '2022', 'Nisha Rajesh Patil', 'Rajesh Patil', 9876543214, 'nisha.patil@example.com', 'General', 'B.Tech'),
('EN21107549', '2022', 'Tejaswini Dinesh Kulkarni', 'Dinesh Kulkarni', 9876543215, 'tejaswini.kulkarni@example.com', 'General', 'B.Tech'),
('EN21107550', '2022', 'Shubham Arun Gaikwad', 'Arun Gaikwad', 9876543216, 'shubham.gaikwad@example.com', 'SC', 'B.Tech'),
('EN21107551', '2022', 'Aditi Ramesh Salunkhe', 'Ramesh Salunkhe', 9876543217, 'aditi.salunkhe@example.com', 'OBC', 'B.Tech'),
('EN21107552', '2022', 'Omkar Pradeep Kshirsagar', 'Pradeep Kshirsagar', 9876543218, 'omkar.kshirsagar@example.com', 'General', 'B.Tech'),
('EN21107553', '2022', 'Sakshi Mahendra Mahajan', 'Mahendra Mahajan', 9876543219, 'sakshi.mahajan@example.com', 'General', 'B.Tech'),
('EN21107554', '2022', 'Hrishikesh Umesh Deshpande', 'Umesh Deshpande', 9876543220, 'hrishikesh.deshpande@example.com', 'OBC', 'B.Tech'),
('EN21107554', '2022', 'Hrishikesh Umesh Deshpande', 'Umesh Deshpande', 9876543220, 'hrishikesh.deshpande@example.com', 'OBC', 'B.Tech'),
('hjgy', '', ' mhgu', 'hkih', 0, 'atharvarwarade@gmail.com', 'OBC', 'mnb'),
('Anuja', '2024', 'Shankar', 'Shankar', 5658, 'atharvarwarade@gmail.com', 'General', 'B. Tech Computer Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `candidates_csv_files`
--

CREATE TABLE `candidates_csv_files` (
  `Sr_no` int(11) NOT NULL,
  `Date_and _time` timestamp NOT NULL DEFAULT current_timestamp(),
  `batch` varchar(10) DEFAULT NULL,
  `file_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates_csv_files`
--

INSERT INTO `candidates_csv_files` (`Sr_no`, `Date_and _time`, `batch`, `file_path`) VALUES
(1, '2024-08-09 11:43:27', '2021', 'C:/xampp/htdocs/hms/Candidates CSV Files/2021_1.csv'),
(2, '2024-08-09 11:43:46', '2021', 'C:/xampp/htdocs/hms/Candidates CSV Files/2021_2.csv'),
(3, '2024-08-09 11:43:51', '2021', 'C:/xampp/htdocs/hms/Candidates CSV Files/2021_3.csv');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `furniture_id` varchar(20) NOT NULL,
  `room_id` varchar(20) NOT NULL,
  `furniture_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`furniture_id`, `room_id`, `furniture_type`) VALUES
('B1_10_BED', 'B1_10', 'Bed'),
('B1_10_CHR', 'B1_10', 'Chair'),
('B1_10_TBL', 'B1_10', 'Table'),
('B1_11_BED', 'B1_11', 'Bed'),
('B1_11_CHR', 'B1_11', 'Chair'),
('B1_11_TBL', 'B1_11', 'Table'),
('B1_12_BED', 'B1_12', 'Bed'),
('B1_12_CHR', 'B1_12', 'Chair'),
('B1_12_TBL', 'B1_12', 'Table'),
('B1_13_BED', 'B1_13', 'Bed'),
('B1_13_CHR', 'B1_13', 'Chair'),
('B1_13_TBL', 'B1_13', 'Table'),
('B1_14_BED', 'B1_14', 'Bed'),
('B1_14_CHR', 'B1_14', 'Chair'),
('B1_14_TBL', 'B1_14', 'Table'),
('B1_15_BED', 'B1_15', 'Bed'),
('B1_15_CHR', 'B1_15', 'Chair'),
('B1_15_TBL', 'B1_15', 'Table'),
('B1_16_BED', 'B1_16', 'Bed'),
('B1_16_CHR', 'B1_16', 'Chair'),
('B1_16_TBL', 'B1_16', 'Table'),
('B1_17_BED', 'B1_17', 'Bed'),
('B1_17_CHR', 'B1_17', 'Chair'),
('B1_17_TBL', 'B1_17', 'Table'),
('B1_18_BED', 'B1_18', 'Bed'),
('B1_18_CHR', 'B1_18', 'Chair'),
('B1_18_TBL', 'B1_18', 'Table'),
('B1_19_BED', 'B1_19', 'Bed'),
('B1_19_CHR', 'B1_19', 'Chair'),
('B1_19_TBL', 'B1_19', 'Table'),
('B1_1_BED', 'B1_1', 'Bed'),
('B1_1_CHR', 'B1_1', 'Chair'),
('B1_1_TBL', 'B1_1', 'Table'),
('B1_20_BED', 'B1_20', 'Bed'),
('B1_20_CHR', 'B1_20', 'Chair'),
('B1_20_TBL', 'B1_20', 'Table'),
('B1_21_BED', 'B1_21', 'Bed'),
('B1_21_CHR', 'B1_21', 'Chair'),
('B1_21_TBL', 'B1_21', 'Table'),
('B1_22_BED', 'B1_22', 'Bed'),
('B1_22_CHR', 'B1_22', 'Chair'),
('B1_22_TBL', 'B1_22', 'Table'),
('B1_23_BED', 'B1_23', 'Bed'),
('B1_23_CHR', 'B1_23', 'Chair'),
('B1_23_TBL', 'B1_23', 'Table'),
('B1_24_BED', 'B1_24', 'Bed'),
('B1_24_CHR', 'B1_24', 'Chair'),
('B1_24_TBL', 'B1_24', 'Table'),
('B1_25_BED', 'B1_25', 'Bed'),
('B1_25_CHR', 'B1_25', 'Chair'),
('B1_25_TBL', 'B1_25', 'Table'),
('B1_26_BED', 'B1_26', 'Bed'),
('B1_26_CHR', 'B1_26', 'Chair'),
('B1_26_TBL', 'B1_26', 'Table'),
('B1_27_BED', 'B1_27', 'Bed'),
('B1_27_CHR', 'B1_27', 'Chair'),
('B1_27_TBL', 'B1_27', 'Table'),
('B1_28_BED', 'B1_28', 'Bed'),
('B1_28_CHR', 'B1_28', 'Chair'),
('B1_28_TBL', 'B1_28', 'Table'),
('B1_29_BED', 'B1_29', 'Bed'),
('B1_29_CHR', 'B1_29', 'Chair'),
('B1_29_TBL', 'B1_29', 'Table'),
('B1_2_BED', 'B1_2', 'Bed'),
('B1_2_CHR', 'B1_2', 'Chair'),
('B1_2_TBL', 'B1_2', 'Table'),
('B1_30_BED', 'B1_30', 'Bed'),
('B1_30_CHR', 'B1_30', 'Chair'),
('B1_30_TBL', 'B1_30', 'Table'),
('B1_31_BED', 'B1_31', 'Bed'),
('B1_31_CHR', 'B1_31', 'Chair'),
('B1_31_TBL', 'B1_31', 'Table'),
('B1_32_BED', 'B1_32', 'Bed'),
('B1_32_CHR', 'B1_32', 'Chair'),
('B1_32_TBL', 'B1_32', 'Table'),
('B1_33_BED', 'B1_33', 'Bed'),
('B1_33_CHR', 'B1_33', 'Chair'),
('B1_33_TBL', 'B1_33', 'Table'),
('B1_34_BED', 'B1_34', 'Bed'),
('B1_34_CHR', 'B1_34', 'Chair'),
('B1_34_TBL', 'B1_34', 'Table'),
('B1_35_BED', 'B1_35', 'Bed'),
('B1_35_CHR', 'B1_35', 'Chair'),
('B1_35_TBL', 'B1_35', 'Table'),
('B1_36_BED', 'B1_36', 'Bed'),
('B1_36_CHR', 'B1_36', 'Chair'),
('B1_36_TBL', 'B1_36', 'Table'),
('B1_37_BED', 'B1_37', 'Bed'),
('B1_37_CHR', 'B1_37', 'Chair'),
('B1_37_TBL', 'B1_37', 'Table'),
('B1_38_BED', 'B1_38', 'Bed'),
('B1_38_CHR', 'B1_38', 'Chair'),
('B1_38_TBL', 'B1_38', 'Table'),
('B1_39_BED', 'B1_39', 'Bed'),
('B1_39_CHR', 'B1_39', 'Chair'),
('B1_39_TBL', 'B1_39', 'Table'),
('B1_3_BED', 'B1_3', 'Bed'),
('B1_3_CHR', 'B1_3', 'Chair'),
('B1_3_TBL', 'B1_3', 'Table'),
('B1_40_BED', 'B1_40', 'Bed'),
('B1_40_CHR', 'B1_40', 'Chair'),
('B1_40_TBL', 'B1_40', 'Table'),
('B1_41_BED', 'B1_41', 'Bed'),
('B1_41_CHR', 'B1_41', 'Chair'),
('B1_41_TBL', 'B1_41', 'Table'),
('B1_42_BED', 'B1_42', 'Bed'),
('B1_42_CHR', 'B1_42', 'Chair'),
('B1_42_TBL', 'B1_42', 'Table'),
('B1_43_BED', 'B1_43', 'Bed'),
('B1_43_CHR', 'B1_43', 'Chair'),
('B1_43_TBL', 'B1_43', 'Table'),
('B1_44_BED', 'B1_44', 'Bed'),
('B1_44_CHR', 'B1_44', 'Chair'),
('B1_44_TBL', 'B1_44', 'Table'),
('B1_45_BED', 'B1_45', 'Bed'),
('B1_45_CHR', 'B1_45', 'Chair'),
('B1_45_TBL', 'B1_45', 'Table'),
('B1_46_BED', 'B1_46', 'Bed'),
('B1_46_CHR', 'B1_46', 'Chair'),
('B1_46_TBL', 'B1_46', 'Table'),
('B1_47_BED', 'B1_47', 'Bed'),
('B1_47_CHR', 'B1_47', 'Chair'),
('B1_47_TBL', 'B1_47', 'Table'),
('B1_48_BED', 'B1_48', 'Bed'),
('B1_48_CHR', 'B1_48', 'Chair'),
('B1_48_TBL', 'B1_48', 'Table'),
('B1_49_BED', 'B1_49', 'Bed'),
('B1_49_CHR', 'B1_49', 'Chair'),
('B1_49_TBL', 'B1_49', 'Table'),
('B1_4_BED', 'B1_4', 'Bed'),
('B1_4_CHR', 'B1_4', 'Chair'),
('B1_4_TBL', 'B1_4', 'Table'),
('B1_50_BED', 'B1_50', 'Bed'),
('B1_50_CHR', 'B1_50', 'Chair'),
('B1_50_TBL', 'B1_50', 'Table'),
('B1_51_BED', 'B1_51', 'Bed'),
('B1_51_CHR', 'B1_51', 'Chair'),
('B1_51_TBL', 'B1_51', 'Table'),
('B1_52_BED', 'B1_52', 'Bed'),
('B1_52_CHR', 'B1_52', 'Chair'),
('B1_52_TBL', 'B1_52', 'Table'),
('B1_53_BED', 'B1_53', 'Bed'),
('B1_53_CHR', 'B1_53', 'Chair'),
('B1_53_TBL', 'B1_53', 'Table'),
('B1_54_BED', 'B1_54', 'Bed'),
('B1_54_CHR', 'B1_54', 'Chair'),
('B1_54_TBL', 'B1_54', 'Table'),
('B1_55_BED', 'B1_55', 'Bed'),
('B1_55_CHR', 'B1_55', 'Chair'),
('B1_55_TBL', 'B1_55', 'Table'),
('B1_56_BED', 'B1_56', 'Bed'),
('B1_56_CHR', 'B1_56', 'Chair'),
('B1_56_TBL', 'B1_56', 'Table'),
('B1_57_BED', 'B1_57', 'Bed'),
('B1_57_CHR', 'B1_57', 'Chair'),
('B1_57_TBL', 'B1_57', 'Table'),
('B1_58_BED', 'B1_58', 'Bed'),
('B1_58_CHR', 'B1_58', 'Chair'),
('B1_58_TBL', 'B1_58', 'Table'),
('B1_59_BED', 'B1_59', 'Bed'),
('B1_59_CHR', 'B1_59', 'Chair'),
('B1_59_TBL', 'B1_59', 'Table'),
('B1_5_BED', 'B1_5', 'Bed'),
('B1_5_CHR', 'B1_5', 'Chair'),
('B1_5_TBL', 'B1_5', 'Table'),
('B1_60_BED', 'B1_60', 'Bed'),
('B1_60_CHR', 'B1_60', 'Chair'),
('B1_60_TBL', 'B1_60', 'Table'),
('B1_6_BED', 'B1_6', 'Bed'),
('B1_6_CHR', 'B1_6', 'Chair'),
('B1_6_TBL', 'B1_6', 'Table'),
('B1_7_BED', 'B1_7', 'Bed'),
('B1_7_CHR', 'B1_7', 'Chair'),
('B1_7_TBL', 'B1_7', 'Table'),
('B1_8_BED', 'B1_8', 'Bed'),
('B1_8_CHR', 'B1_8', 'Chair'),
('B1_8_TBL', 'B1_8', 'Table'),
('B1_9_BED', 'B1_9', 'Bed'),
('B1_9_CHR', 'B1_9', 'Chair'),
('B1_9_TBL', 'B1_9', 'Table'),
('G1_10_BED', 'G1_10', 'Bed'),
('G1_10_CHR', 'G1_10', 'Chair'),
('G1_10_TBL', 'G1_10', 'Table'),
('G1_11_BED', 'G1_11', 'Bed'),
('G1_11_CHR', 'G1_11', 'Chair'),
('G1_11_TBL', 'G1_11', 'Table'),
('G1_12_BED', 'G1_12', 'Bed'),
('G1_12_CHR', 'G1_12', 'Chair'),
('G1_12_TBL', 'G1_12', 'Table'),
('G1_13_BED', 'G1_13', 'Bed'),
('G1_13_CHR', 'G1_13', 'Chair'),
('G1_13_TBL', 'G1_13', 'Table'),
('G1_14_BED', 'G1_14', 'Bed'),
('G1_14_CHR', 'G1_14', 'Chair'),
('G1_14_TBL', 'G1_14', 'Table'),
('G1_15_BED', 'G1_15', 'Bed'),
('G1_15_CHR', 'G1_15', 'Chair'),
('G1_15_TBL', 'G1_15', 'Table'),
('G1_16_BED', 'G1_16', 'Bed'),
('G1_16_CHR', 'G1_16', 'Chair'),
('G1_16_TBL', 'G1_16', 'Table'),
('G1_17_BED', 'G1_17', 'Bed'),
('G1_17_CHR', 'G1_17', 'Chair'),
('G1_17_TBL', 'G1_17', 'Table'),
('G1_18_BED', 'G1_18', 'Bed'),
('G1_18_CHR', 'G1_18', 'Chair'),
('G1_18_TBL', 'G1_18', 'Table'),
('G1_19_BED', 'G1_19', 'Bed'),
('G1_19_CHR', 'G1_19', 'Chair'),
('G1_19_TBL', 'G1_19', 'Table'),
('G1_1_BED', 'G1_1', 'Bed'),
('G1_1_CHR', 'G1_1', 'Chair'),
('G1_1_TBL', 'G1_1', 'Table'),
('G1_20_BED', 'G1_20', 'Bed'),
('G1_20_CHR', 'G1_20', 'Chair'),
('G1_20_TBL', 'G1_20', 'Table'),
('G1_21_BED', 'G1_21', 'Bed'),
('G1_21_CHR', 'G1_21', 'Chair'),
('G1_21_TBL', 'G1_21', 'Table'),
('G1_22_BED', 'G1_22', 'Bed'),
('G1_22_CHR', 'G1_22', 'Chair'),
('G1_22_TBL', 'G1_22', 'Table'),
('G1_23_BED', 'G1_23', 'Bed'),
('G1_23_CHR', 'G1_23', 'Chair'),
('G1_23_TBL', 'G1_23', 'Table'),
('G1_24_BED', 'G1_24', 'Bed'),
('G1_24_CHR', 'G1_24', 'Chair'),
('G1_24_TBL', 'G1_24', 'Table'),
('G1_25_BED', 'G1_25', 'Bed'),
('G1_25_CHR', 'G1_25', 'Chair'),
('G1_25_TBL', 'G1_25', 'Table'),
('G1_26_BED', 'G1_26', 'Bed'),
('G1_26_CHR', 'G1_26', 'Chair'),
('G1_26_TBL', 'G1_26', 'Table'),
('G1_27_BED', 'G1_27', 'Bed'),
('G1_27_CHR', 'G1_27', 'Chair'),
('G1_27_TBL', 'G1_27', 'Table'),
('G1_28_BED', 'G1_28', 'Bed'),
('G1_28_CHR', 'G1_28', 'Chair'),
('G1_28_TBL', 'G1_28', 'Table'),
('G1_29_BED', 'G1_29', 'Bed'),
('G1_29_CHR', 'G1_29', 'Chair'),
('G1_29_TBL', 'G1_29', 'Table'),
('G1_2_BED', 'G1_2', 'Bed'),
('G1_2_CHR', 'G1_2', 'Chair'),
('G1_2_TBL', 'G1_2', 'Table'),
('G1_30_BED', 'G1_30', 'Bed'),
('G1_30_CHR', 'G1_30', 'Chair'),
('G1_30_TBL', 'G1_30', 'Table'),
('G1_31_BED', 'G1_31', 'Bed'),
('G1_31_CHR', 'G1_31', 'Chair'),
('G1_31_TBL', 'G1_31', 'Table'),
('G1_32_BED', 'G1_32', 'Bed'),
('G1_32_CHR', 'G1_32', 'Chair'),
('G1_32_TBL', 'G1_32', 'Table'),
('G1_33_BED', 'G1_33', 'Bed'),
('G1_33_CHR', 'G1_33', 'Chair'),
('G1_33_TBL', 'G1_33', 'Table'),
('G1_34_BED', 'G1_34', 'Bed'),
('G1_34_CHR', 'G1_34', 'Chair'),
('G1_34_TBL', 'G1_34', 'Table'),
('G1_35_BED', 'G1_35', 'Bed'),
('G1_35_CHR', 'G1_35', 'Chair'),
('G1_35_TBL', 'G1_35', 'Table'),
('G1_36_BED', 'G1_36', 'Bed'),
('G1_36_CHR', 'G1_36', 'Chair'),
('G1_36_TBL', 'G1_36', 'Table'),
('G1_37_BED', 'G1_37', 'Bed'),
('G1_37_CHR', 'G1_37', 'Chair'),
('G1_37_TBL', 'G1_37', 'Table'),
('G1_38_BED', 'G1_38', 'Bed'),
('G1_38_CHR', 'G1_38', 'Chair'),
('G1_38_TBL', 'G1_38', 'Table'),
('G1_39_BED', 'G1_39', 'Bed'),
('G1_39_CHR', 'G1_39', 'Chair'),
('G1_39_TBL', 'G1_39', 'Table'),
('G1_3_BED', 'G1_3', 'Bed'),
('G1_3_CHR', 'G1_3', 'Chair'),
('G1_3_TBL', 'G1_3', 'Table'),
('G1_40_BED', 'G1_40', 'Bed'),
('G1_40_CHR', 'G1_40', 'Chair'),
('G1_40_TBL', 'G1_40', 'Table'),
('G1_41_BED', 'G1_41', 'Bed'),
('G1_41_CHR', 'G1_41', 'Chair'),
('G1_41_TBL', 'G1_41', 'Table'),
('G1_42_BED', 'G1_42', 'Bed'),
('G1_42_CHR', 'G1_42', 'Chair'),
('G1_42_TBL', 'G1_42', 'Table'),
('G1_43_BED', 'G1_43', 'Bed'),
('G1_43_CHR', 'G1_43', 'Chair'),
('G1_43_TBL', 'G1_43', 'Table'),
('G1_44_BED', 'G1_44', 'Bed'),
('G1_44_CHR', 'G1_44', 'Chair'),
('G1_44_TBL', 'G1_44', 'Table'),
('G1_45_BED', 'G1_45', 'Bed'),
('G1_45_CHR', 'G1_45', 'Chair'),
('G1_45_TBL', 'G1_45', 'Table'),
('G1_46_BED', 'G1_46', 'Bed'),
('G1_46_CHR', 'G1_46', 'Chair'),
('G1_46_TBL', 'G1_46', 'Table'),
('G1_47_BED', 'G1_47', 'Bed'),
('G1_47_CHR', 'G1_47', 'Chair'),
('G1_47_TBL', 'G1_47', 'Table'),
('G1_48_BED', 'G1_48', 'Bed'),
('G1_48_CHR', 'G1_48', 'Chair'),
('G1_48_TBL', 'G1_48', 'Table'),
('G1_49_BED', 'G1_49', 'Bed'),
('G1_49_CHR', 'G1_49', 'Chair'),
('G1_49_TBL', 'G1_49', 'Table'),
('G1_4_BED', 'G1_4', 'Bed'),
('G1_4_CHR', 'G1_4', 'Chair'),
('G1_4_TBL', 'G1_4', 'Table'),
('G1_50_BED', 'G1_50', 'Bed'),
('G1_50_CHR', 'G1_50', 'Chair'),
('G1_50_TBL', 'G1_50', 'Table'),
('G1_51_BED', 'G1_51', 'Bed'),
('G1_51_CHR', 'G1_51', 'Chair'),
('G1_51_TBL', 'G1_51', 'Table'),
('G1_52_BED', 'G1_52', 'Bed'),
('G1_52_CHR', 'G1_52', 'Chair'),
('G1_52_TBL', 'G1_52', 'Table'),
('G1_53_BED', 'G1_53', 'Bed'),
('G1_53_CHR', 'G1_53', 'Chair'),
('G1_53_TBL', 'G1_53', 'Table'),
('G1_54_BED', 'G1_54', 'Bed'),
('G1_54_CHR', 'G1_54', 'Chair'),
('G1_54_TBL', 'G1_54', 'Table'),
('G1_55_BED', 'G1_55', 'Bed'),
('G1_55_CHR', 'G1_55', 'Chair'),
('G1_55_TBL', 'G1_55', 'Table'),
('G1_56_BED', 'G1_56', 'Bed'),
('G1_56_CHR', 'G1_56', 'Chair'),
('G1_56_TBL', 'G1_56', 'Table'),
('G1_57_BED', 'G1_57', 'Bed'),
('G1_57_CHR', 'G1_57', 'Chair'),
('G1_57_TBL', 'G1_57', 'Table'),
('G1_58_BED', 'G1_58', 'Bed'),
('G1_58_CHR', 'G1_58', 'Chair'),
('G1_58_TBL', 'G1_58', 'Table'),
('G1_59_BED', 'G1_59', 'Bed'),
('G1_59_CHR', 'G1_59', 'Chair'),
('G1_59_TBL', 'G1_59', 'Table'),
('G1_5_BED', 'G1_5', 'Bed'),
('G1_5_CHR', 'G1_5', 'Chair'),
('G1_5_TBL', 'G1_5', 'Table'),
('G1_60_BED', 'G1_60', 'Bed'),
('G1_60_CHR', 'G1_60', 'Chair'),
('G1_60_TBL', 'G1_60', 'Table'),
('G1_6_BED', 'G1_6', 'Bed'),
('G1_6_CHR', 'G1_6', 'Chair'),
('G1_6_TBL', 'G1_6', 'Table'),
('G1_7_BED', 'G1_7', 'Bed'),
('G1_7_CHR', 'G1_7', 'Chair'),
('G1_7_TBL', 'G1_7', 'Table'),
('G1_8_BED', 'G1_8', 'Bed'),
('G1_8_CHR', 'G1_8', 'Chair'),
('G1_8_TBL', 'G1_8', 'Table'),
('G1_9_BED', 'G1_9', 'Bed'),
('G1_9_CHR', 'G1_9', 'Chair'),
('G1_9_TBL', 'G1_9', 'Table');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `hostel_id` varchar(20) NOT NULL,
  `hostel_name` varchar(15) DEFAULT NULL,
  `no_of_rooms` int(10) DEFAULT NULL,
  `no_of_students` int(15) DEFAULT NULL,
  `warden_id` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`hostel_id`, `hostel_name`, `no_of_rooms`, `no_of_students`, `warden_id`) VALUES
('B1', 'BOYS HOSTEL 1', 60, NULL, NULL),
('G1', 'GIRLS_HOSTEL_1', 60, NULL, NULL);

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
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `EN` varchar(11) NOT NULL,
  `Fullname` varchar(200) NOT NULL,
  `room_id` int(10) DEFAULT NULL,
  `status` enum('Pending','Approved','Cancelled') NOT NULL DEFAULT 'Pending',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`EN`, `Fullname`, `room_id`, `status`, `start_date`, `end_date`, `reason`) VALUES
('EN123456789', 'Atharva Warade', 21, 'Approved', '2024-05-10', '2024-05-17', 'tyt'),
('EN21107545', 'SANJAY YADAV', NULL, 'Pending', '2024-05-03', '2024-05-14', 'cvvc'),
('EN21107546', 'RAJESH KUMAR', NULL, 'Pending', '2024-05-18', '2024-05-31', 'm'),
('EN21107547', 'ANIL KUMAR', 45, 'Approved', '2024-05-02', '2024-05-03', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `paststudent`
--

CREATE TABLE `paststudent` (
  `EN` varchar(12) NOT NULL,
  `Fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quit_requests`
--

CREATE TABLE `quit_requests` (
  `EN` varchar(11) NOT NULL,
  `warden_status` enum('Pending','Approved','Canceled') NOT NULL DEFAULT 'Pending',
  `accountant_status` enum('Pending','Approved','Canceled') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quit_requests`
--

INSERT INTO `quit_requests` (`EN`, `warden_status`, `accountant_status`) VALUES
('789456123', 'Pending', ''),
('EN123456789', 'Approved', 'Approved'),
('EN21107547', 'Pending', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` varchar(20) NOT NULL,
  `hostel_id` varchar(20) NOT NULL,
  `room_number` int(11) NOT NULL,
  `status` enum('vacant','not vacant') NOT NULL DEFAULT 'vacant',
  `no_of_students` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `hostel_id`, `room_number`, `status`, `no_of_students`) VALUES
('B1_1', 'B1', 1, 'vacant', 0),
('B1_10', 'B1', 10, 'vacant', 0),
('B1_11', 'B1', 11, 'vacant', 0),
('B1_12', 'B1', 12, 'vacant', 0),
('B1_13', 'B1', 13, 'vacant', 0),
('B1_14', 'B1', 14, 'vacant', 0),
('B1_15', 'B1', 15, 'vacant', 0),
('B1_16', 'B1', 16, 'vacant', 0),
('B1_17', 'B1', 17, 'vacant', 0),
('B1_18', 'B1', 18, 'vacant', 0),
('B1_19', 'B1', 19, 'vacant', 0),
('B1_2', 'B1', 2, 'vacant', 0),
('B1_20', 'B1', 20, 'vacant', 0),
('B1_21', 'B1', 21, 'vacant', 0),
('B1_22', 'B1', 22, 'vacant', 0),
('B1_23', 'B1', 23, 'vacant', 0),
('B1_24', 'B1', 24, 'vacant', 0),
('B1_25', 'B1', 25, 'vacant', 0),
('B1_26', 'B1', 26, 'vacant', 0),
('B1_27', 'B1', 27, 'vacant', 0),
('B1_28', 'B1', 28, 'vacant', 0),
('B1_29', 'B1', 29, 'vacant', 0),
('B1_3', 'B1', 3, 'vacant', 0),
('B1_30', 'B1', 30, 'vacant', 0),
('B1_31', 'B1', 31, 'vacant', 0),
('B1_32', 'B1', 32, 'vacant', 0),
('B1_33', 'B1', 33, 'vacant', 0),
('B1_34', 'B1', 34, 'vacant', 0),
('B1_35', 'B1', 35, 'vacant', 0),
('B1_36', 'B1', 36, 'vacant', 0),
('B1_37', 'B1', 37, 'vacant', 0),
('B1_38', 'B1', 38, 'vacant', 0),
('B1_39', 'B1', 39, 'vacant', 0),
('B1_4', 'B1', 4, 'vacant', 0),
('B1_40', 'B1', 40, 'vacant', 0),
('B1_41', 'B1', 41, 'vacant', 0),
('B1_42', 'B1', 42, 'vacant', 0),
('B1_43', 'B1', 43, 'vacant', 0),
('B1_44', 'B1', 44, 'vacant', 0),
('B1_45', 'B1', 45, 'vacant', 0),
('B1_46', 'B1', 46, 'vacant', 0),
('B1_47', 'B1', 47, 'vacant', 0),
('B1_48', 'B1', 48, 'vacant', 0),
('B1_49', 'B1', 49, 'vacant', 0),
('B1_5', 'B1', 5, 'vacant', 0),
('B1_50', 'B1', 50, 'vacant', 0),
('B1_51', 'B1', 51, 'vacant', 0),
('B1_52', 'B1', 52, 'vacant', 0),
('B1_53', 'B1', 53, 'vacant', 0),
('B1_54', 'B1', 54, 'vacant', 0),
('B1_55', 'B1', 55, 'vacant', 0),
('B1_56', 'B1', 56, 'vacant', 0),
('B1_57', 'B1', 57, 'vacant', 0),
('B1_58', 'B1', 58, 'vacant', 0),
('B1_59', 'B1', 59, 'vacant', 0),
('B1_6', 'B1', 6, 'vacant', 0),
('B1_60', 'B1', 60, 'vacant', 0),
('B1_7', 'B1', 7, 'vacant', 0),
('B1_8', 'B1', 8, 'vacant', 0),
('B1_9', 'B1', 9, 'vacant', 0),
('G1_1', 'G1', 1, 'vacant', 0),
('G1_10', 'G1', 10, 'vacant', 0),
('G1_11', 'G1', 11, 'vacant', 0),
('G1_12', 'G1', 12, 'vacant', 0),
('G1_13', 'G1', 13, 'vacant', 0),
('G1_14', 'G1', 14, 'vacant', 0),
('G1_15', 'G1', 15, 'vacant', 0),
('G1_16', 'G1', 16, 'vacant', 0),
('G1_17', 'G1', 17, 'vacant', 0),
('G1_18', 'G1', 18, 'vacant', 0),
('G1_19', 'G1', 19, 'vacant', 0),
('G1_2', 'G1', 2, 'vacant', 0),
('G1_20', 'G1', 20, 'vacant', 0),
('G1_21', 'G1', 21, 'vacant', 0),
('G1_22', 'G1', 22, 'vacant', 0),
('G1_23', 'G1', 23, 'vacant', 0),
('G1_24', 'G1', 24, 'vacant', 0),
('G1_25', 'G1', 25, 'vacant', 0),
('G1_26', 'G1', 26, 'vacant', 0),
('G1_27', 'G1', 27, 'vacant', 0),
('G1_28', 'G1', 28, 'vacant', 0),
('G1_29', 'G1', 29, 'vacant', 0),
('G1_3', 'G1', 3, 'vacant', 0),
('G1_30', 'G1', 30, 'vacant', 0),
('G1_31', 'G1', 31, 'vacant', 0),
('G1_32', 'G1', 32, 'vacant', 0),
('G1_33', 'G1', 33, 'vacant', 0),
('G1_34', 'G1', 34, 'vacant', 0),
('G1_35', 'G1', 35, 'vacant', 0),
('G1_36', 'G1', 36, 'vacant', 0),
('G1_37', 'G1', 37, 'vacant', 0),
('G1_38', 'G1', 38, 'vacant', 0),
('G1_39', 'G1', 39, 'vacant', 0),
('G1_4', 'G1', 4, 'vacant', 0),
('G1_40', 'G1', 40, 'vacant', 0),
('G1_41', 'G1', 41, 'vacant', 0),
('G1_42', 'G1', 42, 'vacant', 0),
('G1_43', 'G1', 43, 'vacant', 0),
('G1_44', 'G1', 44, 'vacant', 0),
('G1_45', 'G1', 45, 'vacant', 0),
('G1_46', 'G1', 46, 'vacant', 0),
('G1_47', 'G1', 47, 'vacant', 0),
('G1_48', 'G1', 48, 'vacant', 0),
('G1_49', 'G1', 49, 'vacant', 0),
('G1_5', 'G1', 5, 'vacant', 0),
('G1_50', 'G1', 50, 'vacant', 0),
('G1_51', 'G1', 51, 'vacant', 0),
('G1_52', 'G1', 52, 'vacant', 0),
('G1_53', 'G1', 53, 'vacant', 0),
('G1_54', 'G1', 54, 'vacant', 0),
('G1_55', 'G1', 55, 'vacant', 0),
('G1_56', 'G1', 56, 'vacant', 0),
('G1_57', 'G1', 57, 'vacant', 0),
('G1_58', 'G1', 58, 'vacant', 0),
('G1_59', 'G1', 59, 'vacant', 0),
('G1_6', 'G1', 6, 'vacant', 0),
('G1_60', 'G1', 60, 'vacant', 0),
('G1_7', 'G1', 7, 'vacant', 0),
('G1_8', 'G1', 8, 'vacant', 0),
('G1_9', 'G1', 9, 'vacant', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `EN` varchar(11) NOT NULL,
  `Fullname` varchar(200) NOT NULL,
  `email` varchar(45) NOT NULL,
  `DOB` date DEFAULT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `student_phone` decimal(10,0) NOT NULL,
  `Add_line_1` varchar(2000) NOT NULL,
  `Add_line_2` varchar(2000) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `Father_no` int(12) NOT NULL,
  `Mother_no` int(12) NOT NULL,
  `Gaurdian_no` int(12) NOT NULL,
  `Blood_group` varchar(3) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `YOS` decimal(1,0) DEFAULT NULL,
  `branch` varchar(45) NOT NULL,
  `section` char(1) NOT NULL,
  `Batch` varchar(9) DEFAULT NULL,
  `dateOfStatusChange` date DEFAULT NULL,
  `status` enum('unpaid','paid','paid and approved') DEFAULT 'paid',
  `room_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`EN`, `Fullname`, `email`, `DOB`, `gender`, `student_phone`, `Add_line_1`, `Add_line_2`, `city`, `state`, `pincode`, `Father_no`, `Mother_no`, `Gaurdian_no`, `Blood_group`, `photo`, `YOS`, `branch`, `section`, `Batch`, `dateOfStatusChange`, `status`, `room_id`) VALUES
('EN123258369', 'Rajesh Kumar Mehta', '', NULL, '', 0, '', '', '', '', 0, 0, 0, 0, '', '', 1, '', '', NULL, NULL, 'paid', NULL),
('EN123478936', 'Kumar Sanu ', '', NULL, '', 0, '', '', '', '', 0, 0, 0, 0, '', '', 3, '', '', NULL, NULL, 'paid', NULL),
('EN21107545', 'SANJAY YADAV', 'sanjay.yadav@example.com', '2024-05-10', 'Male', 1098765432, 'Ram nagar', '', 'Wardha', 'Maharshtra', 442001, 2147483647, 2147483647, 0, 'A+', 'EN2110754531556Computer EngineeringAprofile_photo.png', 3, 'Computer Engineering', 'A', NULL, NULL, 'paid', NULL),
('EN21107554', 'ANITA YADAV', 'anita.yadav@example.com', '2024-05-10', 'Female', 1234567890, 'Jayant Nagar', 'Gandhi Chowk, Wardha', 'Wardha', 'Maharashtra', 442001, 2147483647, 2147483647, 321456963, 'A+', 'EN2110755430577Mechanical EngineeringBprofile_photo.png', 1, 'Mechanical Engineering', 'B', NULL, NULL, 'paid and approved', NULL),
('EN21107558', 'SHYAM KUMAR', 'shyam.kumar@example.com', '2024-06-08', 'Male', 5678901234, 'Snehal Nagar', 'Wardha', 'Wardha', 'Maharashtra', 442001, 2147483647, 2147483647, 2147483647, 'AB+', '', 1, 'Computer Engineering', 'A', NULL, NULL, 'unpaid', NULL),
('EN21107578', 'GEETA KUMARI', 'geeta.kumari@example.com', '2003-06-24', 'Female', 7890123456, 'Sai Nagar', 'Wardha', 'Wardha', 'Maharashtra', 442001, 2147483647, 123654789, 2147483647, 'B+', '', 4, 'Civil Engineering', '', NULL, NULL, 'unpaid', NULL);

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `after_student_room_id_update` AFTER UPDATE ON `student` FOR EACH ROW BEGIN
    IF NEW.allotment_id <> OLD.allotment_id THEN
        -- Check if the new room is vacant
        IF EXISTS (
            SELECT 1
            FROM `room`
            WHERE `room_id` = (SELECT `room_id` FROM `alloted` WHERE `allotment_id` = NEW.allotment_id)
            AND `status` = 'vacant'
        ) THEN
            -- Update the student_id in the alloted table for the new room
            UPDATE `alloted`
            SET `student_id` = NEW.EN
            WHERE `allotment_id` = NEW.allotment_id;

            -- Update the status for the old room
            CALL UpdateRoomStatus(OLD.allotment_id);
            
            -- Update the status for the new room
            CALL UpdateRoomStatus(NEW.allotment_id);
        END IF;
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates_csv_files`
--
ALTER TABLE `candidates_csv_files`
  ADD PRIMARY KEY (`Sr_no`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`furniture_id`),
  ADD KEY `fk_room_id` (`room_id`);

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
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`EN`);

--
-- Indexes for table `quit_requests`
--
ALTER TABLE `quit_requests`
  ADD PRIMARY KEY (`EN`) USING BTREE;

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `fk_hostel_id` (`hostel_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`EN`),
  ADD KEY `room_id` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates_csv_files`
--
ALTER TABLE `candidates_csv_files`
  MODIFY `Sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `furniture`
--
ALTER TABLE `furniture`
  ADD CONSTRAINT `fk_room_id` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `fk_hostel_id` FOREIGN KEY (`hostel_id`) REFERENCES `hostels` (`hostel_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_room` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
