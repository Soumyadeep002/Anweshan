-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 08:51 PM
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
-- Database: `event_buddy_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` varchar(10) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_s_date` date DEFAULT '2023-09-18',
  `event_s_time` time DEFAULT current_timestamp(),
  `event_e_date` date DEFAULT '2023-09-21',
  `event_e_time` time DEFAULT '00:00:00',
  `event_venue` varchar(50) NOT NULL DEFAULT 'Update Your event venue',
  `organizer` varchar(50) NOT NULL,
  `event_desc` varchar(2000) NOT NULL DEFAULT 'event description will be here',
  `event_broc` varchar(100) NOT NULL DEFAULT 'event-broucher-01.pdf',
  `c_image1` varchar(100) NOT NULL DEFAULT 'coding_backdrop.png',
  `c_image2` varchar(100) NOT NULL DEFAULT 'update_poster.png',
  `c_image3` varchar(100) NOT NULL DEFAULT 'coding backdrop.png',
  `approval` int(1) NOT NULL DEFAULT 0,
  `e_slot` int(10) NOT NULL,
  `event_type` varchar(10) DEFAULT NULL,
  `form_link` varchar(2000) DEFAULT 'your embeded form link will be here'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_admin`
--

CREATE TABLE `event_admin` (
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_password` varchar(100) NOT NULL,
  `event_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `p_email` varchar(100) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `qr_image` varchar(50) NOT NULL,
  `attendance` int(1) NOT NULL DEFAULT 0,
  `entry_time` time NOT NULL,
  `event_id` varchar(10) NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `collage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `sa_email` varchar(50) NOT NULL,
  `sa_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`sa_email`, `sa_password`) VALUES
('eventbuddy05@gmail.com', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`sa_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
