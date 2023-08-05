-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 06:02 PM
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
  `form_link` varchar(2000) DEFAULT 'your embeded form link will be here'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_s_date`, `event_s_time`, `event_e_date`, `event_e_time`, `event_venue`, `organizer`, `event_desc`, `event_broc`, `c_image1`, `c_image2`, `c_image3`, `approval`, `e_slot`, `event_type`, `form_link`) VALUES
('0N5HL6', 'DRONEMANIA', '2023-01-01', '00:00:00', '2023-01-01', '00:00:00', 'Update Your event venue', 'SOUMYADEEP', 'event buddy description (please update from below )', '0N5HL6_event_broc.pdf', '0N5HL6_c_img1.png', '0N5HL6_c_img2.png', 'eb-black-bg-logo-16-9.png', 1, 0, 'tech', 'https://docs.google.com/forms/d/e/1FAIpQLSfVO344mumBbs-9PIXw-0gh5X5D8Uh0Doal-HFiWBFY-9y4OQ/viewform?embedded=true'),
('HI8EY3', 'PRIMA FACIE', '2023-01-01', '00:00:00', '2023-01-01', '00:00:00', 'Update Your event venue', 'SOUMYADEEP', 'event buddy description (please update from below )', 'HI8EY3_event_broc.pdf', 'HI8EY3_c_img1.png', 'HI8EY3_c_img2.png', 'eb-black-bg-logo-16-9.png', 1, 0, 'tech', 'your embeded form link will be here'),
('9LN1XO', 'GAMCON', '2023-01-01', '00:00:00', '2023-01-01', '00:00:00', 'Update Your event venue', 'dasd', 'event buddy description (please update from below )', '9LN1XO_event_broc.pdf', '9LN1XO_c_img1.png', '9LN1XO_c_img2.png', 'eb-black-bg-logo-16-9.png', 1, 0, 'tech', 'your embeded form link will be here'),
('MDE8QR', 'SIT &amp; DRAW', '2023-01-01', '00:00:00', '2023-01-01', '00:00:00', 'Update Your event venue', 'dasd', 'event buddy description (please update from below )', 'MDE8QR_event_broc.pdf', 'MDE8QR_c_img1.png', 'MDE8QR_c_img2.png', 'eb-black-bg-logo-16-9.png', 1, 0, 'cultural', 'your embeded form link will be here'),
('7RM9SQ', 'DANCE', '2023-01-01', '00:00:00', '2023-01-01', '00:00:00', 'Update Your event venue', 'SOUMYADEEP', 'event buddy description (please update from below )', '7RM9SQ_event_broc.pdf', '7RM9SQ_c_img1.png', '7RM9SQ_c_img2.png', 'eb-black-bg-logo-16-9.png', 1, 0, 'cultural', 'your embeded form link will be here'),
('1VFIU9', 'NRITYA NATYA', '2023-01-01', '00:00:00', '2023-01-01', '00:00:00', 'Update Your event venue', 'SOUMYADEEP', 'event buddy description (please update from below )', '1VFIU9_event_broc.pdf', '1VFIU9_c_img1.png', '1VFIU9_c_img2.png', 'eb-black-bg-logo-16-9.png', 1, 0, 'cultural', 'your embeded form link will be here'),
('B1UGQZ', 'QUIZ COMPETITION', '2023-01-01', '00:00:00', '2023-01-01', '00:00:00', 'Update Your event venue', 'SOUMYADEEP', 'event buddy description (please update from below )', 'B1UGQZ_event_broc.pdf', 'B1UGQZ_c_img1.png', 'B1UGQZ_c_img2.png', 'eb-black-bg-logo-16-9.png', 1, 0, 'cultural', 'your embeded form link will be here'),
('MBSFIN', 'RECITATION', '2023-01-01', '00:00:00', '2023-01-01', '00:00:00', 'Update Your event venue', 'SOUMYADEEP', 'event buddy description (please update from below )', 'MBSFIN_event_broc.pdf', 'MBSFIN_c_img1.png', 'MBSFIN_c_img2.png', 'eb-black-bg-logo-16-9.png', 1, 0, 'cultural', 'your embeded form link will be here'),
('1OYC89', 'SPRINT-R', '2023-01-01', '00:00:00', '2023-01-01', '00:00:00', 'Update Your event venue', 'SOUMYADEEP', 'event buddy description (please update from below )', '1OYC89_event_broc.pdf', '1OYC89_c_img1.png', '1OYC89_c_img2.png', 'eb-black-bg-logo-16-9.png', 1, 0, 'tech', 'your embeded form link will be here');

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
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$QrfJqmr0uVNIkHhqsQDFYuRoNtL9HwHdJ00sXbjSWVuGjTYcn9zEW', '0N5HL6'),
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$4bEZGKLyITX61h5MWVZ2Q.7225dbmEldMwPyI87r6ujwNSvY/Llfm', 'HI8EY3'),
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$LMoy2muLeTc/qL9NeedLfeit8Zaxa7gv3AoWrpRWzHOQHSSvfz1FK', '9LN1XO'),
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$GgrrUaV4BW/hi/OGLtAH8eEDJm2jbtDCOiXiFx6XF45QWRolqLXF2', 'MDE8QR'),
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$UmH/xfkQY2mP3LSfdkuGA.o5xrd.V5dXroLdqwfFIYRuSesDrA1Bm', '7RM9SQ'),
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$JCqTOt9aX99rNuF.MVmiXuHptJ0w1dqKSMtOxZw0RAwF4Z.lx1B.C', '1VFIU9'),
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$ocxmkC6Pi6UgE7CWI99CCuUFoc9vkbVhF/TvWOU2DnRFF7JOZ4z0m', 'B1UGQZ'),
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$XzHs0GnE8BcbicgkOYL5Nu/gQ2jUZ09h1gsxpGdsGFm0tzBWTdADS', 'MBSFIN'),
('soumyadeep', 'sambhuganguli1@gmail.com', '$2y$10$tDjxXT6om6sglk3JF3SYVOH/0mvTgTb4VuNQU3/PwIZw53ifkJdQ.', '1OYC89');

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

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`p_email`, `p_name`, `mobile`, `qr_image`, `attendance`, `entry_time`, `event_id`, `department`, `collage`) VALUES
('sambhuganguli1@gmail.com', 'Name1', '8240254624', '1690905559.png', 1, '21:33:30', '0N5HL6', 'IT', 'MAKAUT'),
('arunmondal3457@gmail.com', 'Name2', '3262565565', '1690905595.png', 1, '21:33:23', '0N5HL6', 'IT', 'MAKAUT'),
('soumyadeepganguly1922@gmail.com', 'adsds', '08240254624', '1690906522.png', 1, '21:56:19', '0N5HL6', 'ds', 'makaut'),
('Hdhdhdhdhdjsjjsjsjje@gmail.com', 'Soumya', '123', '1691231634.png', 0, '00:00:00', 'HI8EY3', 'Jdje', 'Jdje');

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
