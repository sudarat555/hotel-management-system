-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: laravel-db
-- Generation Time: Feb 19, 2021 at 07:23 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BankAccount`
--

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `Staff_No` int(11) NOT NULL,
  `Staff_Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Staff_Surname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Staff_Address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Staff_Email` varchar(50) NOT NULL,
  `Staff_Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`Staff_No`, `Staff_Name`, `Staff_Surname`, `Staff_Address`, `Staff_Email`, `Staff_Phone`) VALUES
(1, 'กวิน', 'ไววิ่งรบ', 'บางแสน', '61160084@go.buu.ac.th', '123456789'),
(2, 'ประยุทธ์', 'จันทร์โอชา', 'นรก', 'duckhead@pussy.com', '112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`Staff_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
