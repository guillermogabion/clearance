-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 04:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `instructor` text NOT NULL,
  `student` text NOT NULL,
  `inform` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instructordata`
--

CREATE TABLE `instructordata` (
  `id` int(11) NOT NULL,
  `InstructorID` text NOT NULL,
  `sender` text NOT NULL,
  `password` text NOT NULL,
  `Iname` text NOT NULL,
  `desig` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructordata`
--

INSERT INTO `instructordata` (`id`, `InstructorID`, `sender`, `password`, `Iname`, `desig`) VALUES
(24, '1', 'dendenluceno1234@gmail.com', 'yyerioqyvkkpujnt', 'Denden', 'Instructor'),
(25, '55555', 'bautistajosh832@gmail.com', 'zpkylevcwwlanyqj', 'JOSH', 'Instructor'),
(26, 'it3', 'riverakyle732@gmail.com', 'rivera kyle', 'Nico Navarro', 'Instructor');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `instructorID` text NOT NULL,
  `inform` text NOT NULL,
  `lastname` text NOT NULL,
  `programname` text NOT NULL,
  `yearname` text NOT NULL,
  `emailaddress` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `reqstatus` text NOT NULL,
  `comm` text NOT NULL,
  `Iname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `instructorID`, `inform`, `lastname`, `programname`, `yearname`, `emailaddress`, `mobile`, `reqstatus`, `comm`, `Iname`) VALUES
(74, '1', '1234567890', 'Bautista Joshua brozo', 'CC101', 'BSIT 2', 'bautistajosh832@gmail.com', '', 'Approved', '', 'Denden'),
(75, '1', 'IT-18-656-7311', 'Lucino, Cedjane G. ', 'CC101', 'BSIT 2', 'lucinocedjane@gmail.com', '', '', '', ''),
(76, '55555', 'IT-18-663-7324', 'Monkey D. Luffy', 'CC101', 'BSIT 1', 'monkeyd.jarred11@gmail.com', '', 'Approved', 'GOODJOD!!!!', 'JOSH'),
(77, '55555', 'IT-18-663-7324', 'CALOSOR MARVIN B.', 'CC101', 'BSIT 1', 'tvfgyouth@gmail.com', '', 'Rejected', 'lack of requirements', 'JOSH'),
(78, '1', 'IT-18-663-7324', 'manook lestly ', 'President', 'BSIT 1', 'monkeyd.jarred11@gmail.com', '+639260476548', 'Cleared', '', ''),
(79, 'it3', 'IT-18-663-7324', 'JOSHUA B. BAUTISTA', 'CC101', 'BSIT 1', 'bautistajosh832@gmail.com', '', '', '', ''),
(80, 'it3', 'IT-18-663-7324', 'JOSHUA B. BAUTISTA', 'cc102', 'BSIT 1', 'bautistajosh832@gmail.com', '', '', '', ''),
(81, '1', '12345123', 'Ian', 'president', 'BSIT 1', 'gabionian7@gmail.com', '+639484996063', 'Rejected', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
(1, 'executive', 'executive@account.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructordata`
--
ALTER TABLE `instructordata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructordata`
--
ALTER TABLE `instructordata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
