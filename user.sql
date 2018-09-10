-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 12:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE IF NOT EXISTS `userregistration` (
`id` int(10) NOT NULL,
  `RegName` varchar(50) NOT NULL,
  `RegMob` int(20) NOT NULL,
  `RegCourse` varchar(14) NOT NULL,
  `RegEmail` varchar(40) NOT NULL,
  `RegPswd` varchar(14) NOT NULL,
  `RegConfPaswd` varchar(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `RegName`, `RegMob`, `RegCourse`, `RegEmail`, `RegPswd`, `RegConfPaswd`) VALUES
(1, 'kjfdkdjfd', 2147483647, 'djflakjlkdjf', 'lkajdkfj@gmail.com', 'djk;da', 'dkljfa'),
(2, 'dfas', 0, '', 'dfkjdfdf@dioifdia.du', '', ''),
(3, 'goutam', 2147483647, 'BBA', 'goutampalkar@gmail.c', 'hitler', 'hitler'),
(4, 'goutam', 2147483647, 'BBA', 'goutampalkar@gmail.com', 'hitler', 'hitler'),
(6, 'goutam', 2147483647, 'BBA', 'goutampalkar', 'hitler', 'hitler'),
(7, 'sudhakar', 3, '3', 'sudhakar@gmail.com', 'hitler', 'hitler'),
(8, 'nitin', 8, '2', 'nitin123@gmail.com', 'nitin123', 'nitin123'),
(9, 'kumar', 6, '2', 'kumar@gmail.com', 'kumar', 'kumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `RegMob` (`RegMob`,`RegEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
