-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 10:07 AM
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
  `event_s_date` date DEFAULT '2023-01-01',
  `event_s_time` time DEFAULT '00:00:00',
  `event_e_date` date DEFAULT '2023-01-01',
  `event_e_time` time DEFAULT '00:00:00',
  `event_venue` varchar(50) NOT NULL DEFAULT 'Update Your event venue',
  `organizer` varchar(50) NOT NULL,
  `event_desc` varchar(300) NOT NULL DEFAULT 'event buddy description (please update from below )',
  `event_broc` varchar(100) NOT NULL DEFAULT 'event-broucher-01.pdf',
  `c_image1` varchar(100) NOT NULL DEFAULT 'eb-black-bg-logo-16-9.png',
  `c_image2` varchar(100) NOT NULL DEFAULT 'eb-black-bg-logo-16-9.png',
  `c_image3` varchar(100) NOT NULL DEFAULT 'eb-black-bg-logo-16-9.png',
  `approval` int(1) NOT NULL DEFAULT 0,
  `e_slot` int(10) NOT NULL,
  `event_type` varchar(10) DEFAULT NULL,
  `max_participant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_s_date`, `event_s_time`, `event_e_date`, `event_e_time`, `event_venue`, `organizer`, `event_desc`, `event_broc`, `c_image1`, `c_image2`, `c_image3`, `approval`, `e_slot`, `event_type`, `max_participant`) VALUES
('0N5HL6', 'DRONATHON 2K23', '2023-01-01', '00:00:00', '2023-01-01', '00:00:00', 'Update Your event venue', 'SOUMYADEEP', 'event buddy description (please update from below )', '0N5HL6_event_broc.pdf', '0N5HL6_c_img1.png', '0N5HL6_c_img2.png', 'eb-black-bg-logo-16-9.png', 1, 0, 'tech', 3);

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

--
-- Dumping data for table `event_admin`
--

INSERT INTO `event_admin` (`a_name`, `a_email`, `a_password`, `event_id`) VALUES
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$cHA1pBJcdcIj9mvE6pETs.jHhwdGlDX.zoZ3Nof4WcNCWgVSW8a7a', '4H28DR'),
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$XFKqDvlsGWt61mCyMiJ3ueKdGOs0IstUTo7Fp4hGzVFTeNTdLG74C', '0L7GIW'),
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$QrfJqmr0uVNIkHhqsQDFYuRoNtL9HwHdJ00sXbjSWVuGjTYcn9zEW', '0N5HL6');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `p_email` varchar(30) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `qr_image` varchar(50) NOT NULL,
  `attendance` int(1) NOT NULL DEFAULT 0,
  `entry_time` time NOT NULL,
  `event_id` varchar(10) NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `collage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`p_email`, `p_name`, `mobile`, `qr_image`, `attendance`, `entry_time`, `event_id`, `department`, `collage`) VALUES
('sambhuganguli1@gmail.com', 'Soumyadeep Ganguly', '08240254624', '1689352659.png', 0, '00:00:00', '4H28DR', 'dsa5d56asd', 's1d1as1d23'),
('adasd@gmail.com', 'sssssss', 'sda', '1689352831.png', 0, '00:00:00', '4H28DR', 'sda', 'asd'),
('sambhuganuli1@gmail.com', 'Soumyadeep Ganguly', '08240254624', '1689352859.png', 0, '00:00:00', '4H28DR', 'sax', 'asx'),
('gssgs@gmail.com', 'sgsgsgsggsgsg', 'asds', '1689353073.png', 0, '00:00:00', '4H28DR', 'sd', 'ddddddddddddddddddddddddd');

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
