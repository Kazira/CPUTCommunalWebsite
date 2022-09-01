-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 04:07 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prt3_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `cod` int(11) NOT NULL,
  `student_email` varchar(150) COLLATE utf8_bin NOT NULL,
  `student_fname` varchar(150) COLLATE utf8_bin NOT NULL,
  `student_lname` varchar(150) COLLATE utf8_bin NOT NULL,
  `password` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cod`, `student_email`, `student_fname`, `student_lname`, `password`) VALUES
(1, ' eliezerelieljamba@gmail.com', 'Eliezer Eliel da', 'Jamba', ''),
(2, ' eliezerelieljamba@gmail.com', 'Eliezer Eliel da', 'Jamba', ''),
(3, ' 220446571@mycput.ac.za', 'ds', '1', ''),
(4, ' 220446571@mycput.ac.za', 'ds', '1', ''),
(5, ' 220446571@mycput.ac.za', 'ds', 'Jamba', ''),
(6, ' 220446571@mycput.ac.za', 'ds', '1', ''),
(7, ' 220446571@mycput.ac.za', 'Edvalter ', 'Jamba', ''),
(8, ' ', '', '', ''),
(9, ' ', '', '', ''),
(10, ' ', '', '', ''),
(11, ' ', '', '', ''),
(12, ' 220446571@mycput.ac.za', 'Edvalter', 'Jamba', 'jamba9@'),
(13, ' 220446571@mycput.ac.za', 'Edvalter', 'Jamba', 'edvalter9@'),
(14, ' 220446571@mycput.ac.za', 'Edvalter', 'Jamba', 'vcgfdgf'),
(15, ' 220446571@mycput.ac.za', 'Edvalter', 'Jamba', 'jlkj'),
(16, ' 220446571@mycput.ac.za', 'Edvalter', 'Jamba', 'dsfsfsfsdfsf'),
(17, ' 220446571@mycput.ac.za', 'Edvalter', 'Jamba', 'dfsfdsf'),
(18, ' 220446571@mycput.ac.za', 'Edvalter', 'Jamba', 'sadasdsadsadad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
