-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 05:52 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zenith`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(4) NOT NULL,
  `Fname` varchar(15) NOT NULL,
  `Lname` varchar(15) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Department` varchar(15) NOT NULL,
  `Salary` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `Fname`, `Lname`, `Mobile`, `Department`, `Salary`) VALUES
(1, 'Rakesh', 'Kapoor', '7852365478', 'Sales', 35000),
(2, 'Mukesh', 'Ambani', '7865236547', 'CS', 40000),
(3, 'Vikas', 'Sharma', '7898805244', 'IT', 30000),
(5, 'Mustafa', 'Hasan', '8871468852', 'CS', 50000),
(6, 'Rakesh', 'Choudhry', '7523658954', 'Sales', 25000),
(7, 'Murtaza', 'Rafiq', '7856932548', 'Sales', 20000),
(8, 'Han', 'Martin', '7856935214', 'Mech', 40000),
(9, 'Sayli', 'Joshi', '7852365896', 'IT', 40000),
(10, 'Sakshi', 'Jain', '8563289452', 'IT', 50000),
(11, 'snj', 'jgvhg', '8484654523', 'CS', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Fname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Fname`, `Username`, `Password`, `Email`, `Mobile`) VALUES
('Murtaza', 'admin', 'admin', 'admin@zenith.com', '8109861206');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
