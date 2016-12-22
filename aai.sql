-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2016 at 09:33 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aai`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `Employee_ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`Employee_ID`, `Name`, `Department`, `Email`, `Location`, `Type`) VALUES
('1000', 'Ramesh', 'Administration', 'rameshkumar@gmail.com', 'admin, ground floor , 10', 'admin'),
('1001', 'Suresh', 'Airport Systems', 'sureshrana@gmail.com', 'as, 1st floor , 56', 'inventory'),
('1002', 'Raghav', 'Commercial', 'raghavsingh@gmail.com', 'Comm.,4th floor, 67', 'client'),
('1003', 'Karan', 'Public Relations', 'karankashyap@gmail.com', 'PR, 3rd Floor, 32', 'client'),
('1004', 'Shreya', 'Human Resource', 'shreyasharma@gmail.com', 'HR, 2nd Floor, 41', 'client'),
('1005', 'Aakriti', 'Law', 'aakriti1989@gmail.com', 'Law, Groun Floor, 15', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `Employee_ID` int(250) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`Employee_ID`, `Password`, `Type`) VALUES
(1000, '1000', 'admin'),
(1001, '1001', 'inventory'),
(1002, '1002', 'client'),
(1003, '1003', 'client'),
(1004, '1004', 'client'),
(1005, '1005', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `pending_reg`
--

CREATE TABLE `pending_reg` (
  `Name` varchar(50) NOT NULL,
  `E_Mail` varchar(50) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Employee_ID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Type` varchar(10) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_reg`
--

INSERT INTO `pending_reg` (`Name`, `E_Mail`, `Dept`, `Location`, `Employee_ID`, `Password`, `Type`) VALUES
('shivani sharma', 'shivanisharma@gmail.com', 'Information Technology', 'it , 1st floor , 20', '1006', 'sharmaji95', 'client'),
('ishita jaisia', 'ishitajaisia@gmail.com', 'Information Technology', 'it , 1st floor , 21', '1007', 'hello', 'client'),
('Ashok Kumar', 'ashujaisia@gmail.com', 'Architecture Planning', 'AP,Ground Floor,56', '1008', '1008', 'client'),
('Abhilasha', 'abhilashasingh1996@gmail.com', 'Information Technology', 'it , 1st floor , 23', '1009', 'abhilasha', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`Employee_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `pending_reg`
--
ALTER TABLE `pending_reg`
  ADD PRIMARY KEY (`Employee_ID`),
  ADD UNIQUE KEY `E_Mail` (`E_Mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
