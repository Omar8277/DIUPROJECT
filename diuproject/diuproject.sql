-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2019 at 04:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diuproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `mobile` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `firstname`, `lastname`, `username`, `mobile`, `email`, `password`) VALUES
(2, 'omar  ', 'Ali', 'gio', 2147483647, 'ciisebotaly@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(3, 'muuse', 'sheikh', 'c112191', 2147483647, 'jamalappdeveloper@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(4, 'Tatiko', 'Ali', 'admin', 2147483647, 'Zamu_143@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `mentor_account`
--

CREATE TABLE `mentor_account` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `mobile` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor_account`
--

INSERT INTO `mentor_account` (`id`, `firstname`, `lastname`, `username`, `mobile`, `email`, `password`) VALUES
(1, 'omar  ', 'Ali', 'c112191', 2147483647, 'giyoow@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 'teacher', 'Amin', 'teacher', 1212312312, 'abdi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(5, 'Casho', 'abdi', 'casho', 2147483647, 'casho@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `description`) VALUES
(1, 'Office of the Director of Students\' Affairs is a professional body who are dedicated to the social, Psychological, ethical and cognitive development and well-being of all DIU Students. It also works collaboratively with respected faculty members\r\n\r\nto implement the universitys educational and developmental mission. In addition to it, the Office of the DSA looks after all club activities, foundation classes, orientation of newly admitted students, psychosocial support.');

-- --------------------------------------------------------

--
-- Table structure for table `prentice_account`
--

CREATE TABLE `prentice_account` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `mobile` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prentice_account`
--

INSERT INTO `prentice_account` (`id`, `firstname`, `lastname`, `username`, `mobile`, `email`, `password`) VALUES
(1, 'Fadumo', 'Hassan', 'faduma', 12121212, 'giyoow@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(4, 'Yurub', 'Hassan', 'mamo', 12121221, 'giyoow@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `student_account`
--

CREATE TABLE `student_account` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `Mothername` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `student_id` varchar(40) NOT NULL,
  `mobile` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `comment` longtext NOT NULL,
  `TotalPaid` int(100) NOT NULL,
  `TotalPaidDue` int(100) NOT NULL,
  `CGPA` float NOT NULL,
  `course_1` varchar(40) NOT NULL,
  `course_2` varchar(40) NOT NULL,
  `course_3` varchar(40) NOT NULL,
  `course_4` varchar(40) NOT NULL,
  `result_1` varchar(40) NOT NULL,
  `result_2` varchar(40) NOT NULL,
  `result_3` varchar(40) NOT NULL,
  `result_4` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_account`
--

INSERT INTO `student_account` (`id`, `firstname`, `lastname`, `Mothername`, `age`, `student_id`, `mobile`, `email`, `password`, `comment`, `TotalPaid`, `TotalPaidDue`, `CGPA`, `course_1`, `course_2`, `course_3`, `course_4`, `result_1`, `result_2`, `result_3`, `result_4`) VALUES
(1, 'jamal', 'Ali', '', 0, '162-35-1679', 2147483647, 'jamalappdeveloper@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', ' Not bad but must hard work', 0, 0, 3.37, ' java ', 'HTML  ', 'CSS  ', 'CSS  ', ' A ', ' A ', ' B ', ' C '),
(4, 'muuse', 'sheikh', '', 0, '1212', 2147483647, 'jamalappdeveloper@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '', 0, 0, 0, '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor_account`
--
ALTER TABLE `mentor_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prentice_account`
--
ALTER TABLE `prentice_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_account`
--
ALTER TABLE `student_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mentor_account`
--
ALTER TABLE `mentor_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prentice_account`
--
ALTER TABLE `prentice_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_account`
--
ALTER TABLE `student_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
