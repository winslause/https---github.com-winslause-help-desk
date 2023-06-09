-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 01:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblservice`
--

CREATE TABLE `tblservice` (
  `id` int(11) NOT NULL,
  `datereported` varchar(100) NOT NULL,
  `timereported` varchar(100) NOT NULL,
  `problem` varchar(500) NOT NULL,
  `datechecked` varchar(100) NOT NULL,
  `timechecked` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `pic` varchar(120) NOT NULL,
  `problempicture` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblservice`
--

INSERT INTO `tblservice` (`id`, `datereported`, `timereported`, `problem`, `datechecked`, `timechecked`, `status`, `comments`, `pic`, `problempicture`, `email`) VALUES
(1, '2023-06-09', '15:03', 'My laptop', '', '', 0, '', '', '', 'wen@gmail.com'),
(2, '2023-06-16', '12:03', 'hhhdhhedhede', '', '', 0, '', '', '', 'wen@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `numberid` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `phone` int(14) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `profilep` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`id`, `fullname`, `numberid`, `email`, `password`, `department`, `jobtitle`, `phone`, `gender`, `profilep`) VALUES
(1, 'Winslause SHIOSO', 8273653, 'kevin@gmail.com', 'f534840f6d9ad80ddf580bdaa5eccbf9', 'Computer', 'Technician', 769525570, 'MALE', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `id` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `anumber` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `idnumber` int(14) NOT NULL,
  `phone` int(14) NOT NULL,
  `profilep` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`id`, `fname`, `anumber`, `email`, `password`, `department`, `course`, `gender`, `idnumber`, `phone`, `profilep`) VALUES
(4, 'Winslause SHIOSO', 'PADVYW108/2023', 'wen@gmail.com', '051493b4952544182b3f2b5e5134f695', 'Computer', 'comp', 'MALE', 8273653, 769525570, ''),
(5, 'Philip Waweru', 'PA109/JHD/09WW', 'phillip@gmail.com', 'da5fef2ee8f8269e5dccae1c867ddea5', '', '', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblservice`
--
ALTER TABLE `tblservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblservice`
--
ALTER TABLE `tblservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
