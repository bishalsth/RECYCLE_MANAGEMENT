-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 10:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artist`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookingId` int(11) NOT NULL,
  `eventId` int(11) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventLocation` varchar(255) NOT NULL,
  `nTicket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookingId`, `eventId`, `eventName`, `eventLocation`, `nTicket`) VALUES
(1, 1, 'rock', 'ktm', 1),
(2, 70, 'ullluulul', 'ads', 2),
(3, 70, 'ullluulul', 'ads', 24),
(4, 72, 'softy', 'pokhara', 1111),
(5, 70, 'ullluulul', 'ads', 44),
(6, 70, 'ullluulul', 'ads', 11111111),
(7, 70, 'ullluulul', 'ads', 2),
(8, 70, 'ullluulul', 'ads', 2),
(9, 70, 'ullluulul', 'ads', 44),
(10, 70, 'ullluulul', 'ads', 4);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventId` int(11) NOT NULL,
  `eventName` varchar(12) NOT NULL,
  `eventLocation` varchar(12) NOT NULL,
  `eventDes` varchar(255) NOT NULL,
  `eventDate` date NOT NULL,
  `eventPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventId`, `eventName`, `eventLocation`, `eventDes`, `eventDate`, `eventPrice`) VALUES
(70, 'ullluulul', 'ads', '', '0000-00-00', 0),
(71, 'softy', 'pokhara', 'this is soft', '2019-05-07', 500),
(72, 'softy', 'pokhara', 'this is soft', '2019-05-07', 500),
(73, 'aljn', 'lj', 'nljn', '2019-05-07', 788),
(74, 'aljn', 'lj', 'nljn', '2019-05-07', 788),
(75, 'hawa', 'hawa', 'hawa', '0004-04-04', 44),
(76, 'hawa', 'hawa', 'hawa', '0004-04-04', 44),
(77, 'maya', 'lu', 'le ', '0023-11-21', 45),
(78, 'maya', 'lu', 'le ', '0023-11-21', 45);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useraddress` varchar(255) NOT NULL,
  `userphn` int(11) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `type` enum('manager','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `username`, `useraddress`, `userphn`, `useremail`, `userpassword`, `type`) VALUES
(13, 'bishal', '', 0, 'bishal@gmail.com', '123456', 'manager'),
(14, 'milan', '', 0, 'bishal@gmail.com', '123456', 'manager'),
(15, 'asd', '', 0, 'asdas', 'asdasd', 'manager'),
(16, 'sano', '', 0, 'sano@gmail.com', '123456', 'user'),
(17, 'asd', '', 0, 'asd', 'asd', 'user'),
(18, 'guru', '', 0, 'guru@gmail.com', '123456', 'manager'),
(19, 'ram', '', 0, 'ram', 'ram', 'user'),
(20, 'asdasd', '', 0, 'asdas', '123456', ''),
(21, 'asd', '', 0, 'asdad', 'asdasd', 'user'),
(22, 'ram', '', 0, 'ram', 'ram', 'manager'),
(23, 'ram', 'ram', 123456789, 'user', 'ram', 'user'),
(24, 'ar', 'ar', 123, 'ar', 'ar', 'manager'),
(25, 'bishu', 'ktm', 123456, 'bishu', '123456', 'user'),
(26, 'biku', 'biku', 123, 'biku', '123456', 'user'),
(27, 'avi', 'ktm', 981025662, 'avi@gmail.com', 'avi', 'user'),
(28, 'nishan ', 'ktm', 98102555, 'nishant@gmail.com', '123456', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
