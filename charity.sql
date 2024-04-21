-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 08:43 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_id` int(11) NOT NULL,
  `a_email` varchar(60) NOT NULL,
  `a_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_id`, `a_email`, `a_password`) VALUES
(1, 'ismat12@gmail.com', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin_tb`
--

CREATE TABLE `userlogin_tb` (
  `login_id` int(11) NOT NULL,
  `login_pass` varchar(60) NOT NULL,
  `login_email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userregister_tb`
--

CREATE TABLE `userregister_tb` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(60) NOT NULL,
  `u_address` varchar(60) NOT NULL,
  `u_email` varchar(60) NOT NULL,
  `u_phone` bigint(11) NOT NULL,
  `u_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregister_tb`
--

INSERT INTO `userregister_tb` (`u_id`, `u_name`, `u_address`, `u_email`, `u_phone`, `u_password`) VALUES
(1, 'JGGJJH', 'GHFJ', 'ABC$GMAIL.COM', 54676889, '566'),
(2, 'Yasir Altaf', 'vamd,f', 'bsit2016027@student.gudgk.edu.pk', 84923553535, '73568');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `userlogin_tb`
--
ALTER TABLE `userlogin_tb`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `userregister_tb`
--
ALTER TABLE `userregister_tb`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userlogin_tb`
--
ALTER TABLE `userlogin_tb`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userregister_tb`
--
ALTER TABLE `userregister_tb`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
