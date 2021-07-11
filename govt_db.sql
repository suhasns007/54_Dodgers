-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 05:58 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `govt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_tab`
--

CREATE TABLE `auth_tab` (
  `authid` int(11) NOT NULL,
  `authfullname` varchar(25) NOT NULL,
  `authusername` varchar(20) NOT NULL,
  `authpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_tab`
--

INSERT INTO `auth_tab` (`authid`, `authfullname`, `authusername`, `authpassword`) VALUES
(1, 'abcd', 'abcd-municipality', 'abcd1234');

-- --------------------------------------------------------

--
-- Table structure for table `citizen_tab`
--

CREATE TABLE `citizen_tab` (
  `citid` int(11) NOT NULL,
  `citiusername` varchar(20) NOT NULL,
  `citiemail` varchar(25) NOT NULL,
  `citiphno` bigint(20) NOT NULL,
  `citipassword` varchar(30) NOT NULL,
  `citiaadhar` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizen_tab`
--

INSERT INTO `citizen_tab` (`citid`, `citiusername`, `citiemail`, `citiphno`, `citipassword`, `citiaadhar`) VALUES
(1, 'abcde12345', 'abc@123.com', 1234567890, 'pass123', 111122223333),
(2, '', '', 0, '', 0),
(3, '', '', 0, '', 0),
(4, '', '', 0, '', 0),
(5, '', '', 0, '', 0),
(6, '', '', 0, '', 0),
(7, '', '', 0, '', 0),
(8, 'abc', 'abc@abc.com', 1234567892, 'pass1234', 123412341234);

-- --------------------------------------------------------

--
-- Table structure for table `elec_issues`
--

CREATE TABLE `elec_issues` (
  `issue_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `elecomplaint` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elec_issues`
--

INSERT INTO `elec_issues` (`issue_id`, `username`, `elecomplaint`) VALUES
(1, 'abc', 'Electricity Problem'),
(2, 'abc', 'Electricity problem 2');

-- --------------------------------------------------------

--
-- Table structure for table `it_issues`
--

CREATE TABLE `it_issues` (
  `issue_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `itcomplaint` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mun_issues`
--

CREATE TABLE `mun_issues` (
  `issue_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `muncomplaint` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_tab`
--
ALTER TABLE `auth_tab`
  ADD PRIMARY KEY (`authid`);

--
-- Indexes for table `citizen_tab`
--
ALTER TABLE `citizen_tab`
  ADD PRIMARY KEY (`citid`);

--
-- Indexes for table `elec_issues`
--
ALTER TABLE `elec_issues`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `it_issues`
--
ALTER TABLE `it_issues`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `mun_issues`
--
ALTER TABLE `mun_issues`
  ADD PRIMARY KEY (`issue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_tab`
--
ALTER TABLE `auth_tab`
  MODIFY `authid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `citizen_tab`
--
ALTER TABLE `citizen_tab`
  MODIFY `citid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `elec_issues`
--
ALTER TABLE `elec_issues`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `it_issues`
--
ALTER TABLE `it_issues`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mun_issues`
--
ALTER TABLE `mun_issues`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
