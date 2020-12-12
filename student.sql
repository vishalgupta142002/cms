-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 03:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_Password` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `confirm_Password`, `gender`, `dob`, `mobile`, `resume`, `country`, `city`, `address`, `course`) VALUES
(1, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
