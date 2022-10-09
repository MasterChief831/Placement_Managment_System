-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 01:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `Enrollment_no` varchar(15) NOT NULL,
  `Roll_no` varchar(15) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `year` varchar(10) NOT NULL,
  `Current_semr` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `pass2` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `cgpa` float NOT NULL,
  `10th` float NOT NULL,
  `12th` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`Enrollment_no`, `Roll_no`, `Username`, `name`, `Gender`, `branch`, `year`, `Current_semr`, `email`, `pass1`, `pass2`, `phone`, `cgpa`, `10th`, `12th`) VALUES
('aa', 'aa', 'aa', 'aa', 'M', 'civ', 'second', 'second', 'aa@gmail.com', '$2y$10$Sgo5YR9HnmwY9c.xQo/aweKLW9GZqkMTOBG4qjxKFxR9soozZzPSi', '$2y$10$Sgo5YR9HnmwY9c.xQo/aweKLW9GZqkMTOBG4qjxKFxR9soozZzPSi', 1111111111, 10, 80, 0),
('as', 'as', 'as', 'as', 'M', 'civ', 'third', 'third', 'aa@gmail.com', '$2y$10$qqRwJzHblt1l8Na9JYuFb.gM54vp62dgV/sVGfPPrEQzJjUWk2PYC', '$2y$10$qqRwJzHblt1l8Na9JYuFb.gM54vp62dgV/sVGfPPrEQzJjUWk2PYC', 1111111111, 10, 80, 0),
('DE20459', '20I1129', 'ratika', 'ratika', 'F', 'civ', 'second', 'first', 'ratika@ladycr.com', '$2y$10$W2E6PaVtH0py/QR2rss1QeDTqLgxMJLcWN.2B5Q47y3I3Kl22HdF.', '$2y$10$W2E6PaVtH0py/QR2rss1QeDTqLgxMJLcWN.2B5Q47y3I3Kl22HdF.', 1111111111, 10, 80, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`Enrollment_no`),
  ADD UNIQUE KEY `Roll_no` (`Roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
