-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 05:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_buddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `event_id` varchar(255) NOT NULL,
  `a_mail` varchar(255) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_sdate` date NOT NULL,
  `event_stime` time NOT NULL,
  `event_edate` date NOT NULL,
  `event_etime` time NOT NULL,
  `event_venue` varchar(255) NOT NULL,
  `organizer` varchar(255) NOT NULL,
  `event_desc` varchar(255) NOT NULL,
  `event_broc` varchar(300) NOT NULL,
  `c_image1` varchar(300) NOT NULL,
  `c_image2` varchar(300) NOT NULL,
  `c_image3` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`event_id`, `a_mail`, `a_name`, `a_password`, `event_name`, `event_sdate`, `event_stime`, `event_edate`, `event_etime`, `event_venue`, `organizer`, `event_desc`, `event_broc`, `c_image1`, `c_image2`, `c_image3`) VALUES
('DZKIGT', 'demo1@demo.com', 'Demo1', '$2y$10$Rp9oc85EahFT6jjkd4u9bu1xxWomPBUX/styX/KFasajkn.lGN8AC', 'Demo1', '2023-02-19', '22:04:00', '2023-02-22', '12:04:00', 'Demo1', 'Demo1', 'Demo1', 'DZKIGT_event_broc_.pdf', 'DZKIGT_c_img1.png', 'DZKIGT_c_img2.png', 'DZKIGT_c_img3.png'),
('MPRN62', 'demo3@demo.com', 'Demo 3 Admin', '$2y$10$6tSV3v.K3I.xHu6t3Edu..3pcTcOy0SzNQxWTWu5hN0OtjtjUcRa2', 'Demo 3', '2023-02-23', '11:50:00', '2023-02-28', '23:54:00', 'Demo 3 venue', 'demo3 organiser', 'Demo 3 Event Description ...', 'MPRN62_event_broc.pdf', 'MPRN62_c_img1.png', 'MPRN62_c_img2.png', 'MPRN62_c_img3.png'),
('UBTKQR', 'demo2@demo.com', 'Demo2 Admin Name', '$2y$10$qrdaAw6svQxIZmJnDBlL5ujSOqV6Wn8k5ywQP9WyhcuPCEdevdYLC', 'Demo2', '2023-02-21', '21:19:00', '2023-02-20', '21:20:00', 'Demo2 Venue', 'Demo2', 'Demo2 Description', 'UBTKQR_event_broc.pdf', 'UBTKQR_c_img1.png', 'UBTKQR_c_img2.png', 'UBTKQR_c_img3.png');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `p_email` varchar(255) NOT NULL,
  `event_id` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `qr_image` varchar(50) NOT NULL,
  `flag` bit(1) NOT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`p_email`, `event_id`, `p_name`, `mobile`, `qr_image`, `flag`, `date_time`) VALUES
('arnabr0509@gmail.com', 'DZKIGT', 'Arnab Roy', '9876543210', '1677495156.png', b'0', NULL),
('lghosh857@gmail.com', 'UBTKQR', 'Lokesh Ghosh', '9638527410', '1677495490.png', b'1', NULL),
('rahul222dutta@gmail.com', 'DZKIGT', 'Rahul Dutta', '7477690857', '1677498613.png', b'1', '2023-03-05 22:07:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`event_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
