-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2016 at 06:44 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

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
-- Table structure for table `employee_items`
--

CREATE TABLE `employee_items` (
  `Employee_ID` varchar(50) NOT NULL,
  `HW_Type` varchar(50) NOT NULL,
  `Model_No` varchar(50) NOT NULL,
  `Item_No` varchar(50) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Date_of_All` date NOT NULL,
  `Period_of_All` varchar(5) NOT NULL,
  `Warranty_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_items`
--

INSERT INTO `employee_items` (`Employee_ID`, `HW_Type`, `Model_No`, `Item_No`, `Quantity`, `Date_of_All`, `Period_of_All`, `Warranty_Date`) VALUES
('1003', 'Monitor', '654654', '87897', 1, '2016-12-12', '2', '2017-03-17'),
('1004', 'computer', '6514', '6184', 2, '2016-12-06', '2', '2016-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `Employee_ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Building` varchar(50) NOT NULL,
  `Floor_No` varchar(50) NOT NULL,
  `Seat_No` varchar(50) NOT NULL,
  `Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`Employee_ID`, `Name`, `Department`, `Email`, `Building`, `Floor_No`, `Seat_No`, `Type`) VALUES
('1000', 'Ramesh', 'Administration', 'rameshkumar@gmail.com', 'Admin', 'Ground Floor', '89', 'admin'),
('1001', 'Suresh', 'Airport Systems', 'sureshrana@gmail.com', 'AS', 'First Floor', '69', 'inventory'),
('1002', 'Raghav', 'Commercial', 'raghavsingh@gmail.com', 'Communication', '4th Floor', '12', 'client'),
('1003', 'Karan', 'Public Relations', 'karankashyap@gmail.com', 'PR', '3rd Floor', '54', 'client'),
('1004', 'Shreya', 'Human Resource', 'shreyasharma@gmail.com', '89', '45', '6', 'client'),
('1005', 'Aakriti', 'Law', 'aakriti1989@gmail.com', 'Law', 'Ground Floor', '71', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE `hardware` (
  `Hardware_Type` varchar(50) NOT NULL,
  `Model_No` varchar(50) NOT NULL,
  `Item_No` varchar(50) NOT NULL,
  `Employee_ID` varchar(50) NOT NULL,
  `Date_of_All` date NOT NULL,
  `Period_of_All` varchar(5) NOT NULL,
  `Warranty_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hardware`
--

INSERT INTO `hardware` (`Hardware_Type`, `Model_No`, `Item_No`, `Employee_ID`, `Date_of_All`, `Period_of_All`, `Warranty_Date`) VALUES
('Monitor', '14654654', '12112', '1003', '2016-12-12', '2', '2017-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Employee_ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Hardware_type` varchar(50) DEFAULT NULL,
  `issue` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Employee_ID`, `Name`, `Type`, `Date`, `Hardware_type`, `issue`) VALUES
('1003', 'Karan', 'issues', '2016-11-29', 'Keyboard', 'uukdhnilfsjf'),
('1003', 'Karan', 'request', '2016-12-05', 'Scanner', NULL),
('1000', 'Ramesh', 'request', '2016-11-30', 'Printer', NULL),
('1004', 'shreya', 'move', '2016-12-22', NULL, NULL),
('1005', 'akriti', 'move', '2016-12-05', NULL, NULL),
('108', '61846', '6235', '2016-12-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `Name` varchar(50) NOT NULL,
  `Employee_Id` varchar(50) NOT NULL,
  `Hardware_Type` varchar(50) NOT NULL,
  `Model_no` varchar(50) NOT NULL,
  `Item_no` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Issue` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`Name`, `Employee_Id`, `Hardware_Type`, `Model_no`, `Item_no`, `Date`, `Issue`) VALUES
('shreya', '1004', 'Computer', '64564654', '2121', '2016-12-15', 'Give me something'),
('karan', '1003', 'Computer', '65465', '21321', '0000-00-00', 'vgftycdix'),
('Karan', '1003', 'Keyboard', '92282', '29856', '2016-11-29', 'uukdhnilfsjf');

-- --------------------------------------------------------

--
-- Table structure for table `it_store`
--

CREATE TABLE `it_store` (
  `Supplier_Name` varchar(50) NOT NULL,
  `Supplier_ID` int(50) NOT NULL,
  `HW_Type` varchar(50) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Balance Quantity` int(50) NOT NULL,
  `Date` date NOT NULL,
  `POI` int(50) NOT NULL,
  `Receipt` int(50) NOT NULL,
  `Model_No` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_store`
--

INSERT INTO `it_store` (`Supplier_Name`, `Supplier_ID`, `HW_Type`, `Quantity`, `Balance Quantity`, `Date`, `POI`, `Receipt`, `Model_No`) VALUES
('Agmatel Pvt. Ltd.', 7001, 'Monitor', 150, 150, '2016-12-21', 80001, 90001, 120050),
('Frontline Pvt. Ltd.', 7002, 'Keyboard', 200, 200, '2016-12-14', 80002, 90002, 120051),
('Boron Pvt. Ltd.', 7003, 'Mouse', 200, 200, '2016-12-20', 80003, 90003, 120052);

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
-- Table structure for table `move`
--

CREATE TABLE `move` (
  `Employee_ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Old_Building` varchar(50) NOT NULL,
  `Old_Floor` varchar(50) NOT NULL,
  `Old_Seat` varchar(50) NOT NULL,
  `New_Building` varchar(50) NOT NULL,
  `New_Floor` varchar(50) NOT NULL,
  `New_Seat` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `move`
--

INSERT INTO `move` (`Employee_ID`, `Name`, `Old_Building`, `Old_Floor`, `Old_Seat`, `New_Building`, `New_Floor`, `New_Seat`, `Date`) VALUES
('1005', 'Akriti', '65', '32132', '78', '41', '87', '23', '2016-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `pending_reg`
--

CREATE TABLE `pending_reg` (
  `Name` varchar(50) NOT NULL,
  `E_Mail` varchar(50) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Building` varchar(50) NOT NULL,
  `Floor_No` varchar(50) NOT NULL,
  `Seat_No` varchar(50) NOT NULL,
  `Employee_ID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Type` varchar(10) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_reg`
--

INSERT INTO `pending_reg` (`Name`, `E_Mail`, `Dept`, `Building`, `Floor_No`, `Seat_No`, `Employee_ID`, `Password`, `Type`) VALUES
('shivani sharma', 'shivanisharma@gmail.com', 'Information Technology', 'IT', '1st Floor', '20', '1006', 'sharmaji95', 'client'),
('ishita jaisia', 'ishitajaisia@gmail.com', 'Information Technology', 'IT', '1st Floor', '21', '1007', 'hello', 'client'),
('Ashok Kumar', 'ashujaisia@gmail.com', 'Architecture Planning', 'AP', 'Ground Floor', '56', '1008', '1008', 'client'),
('Abhilasha', 'abhilashasingh1996@gmail.com', 'Information Technology', 'IT', '1st Floor', '23', '1009', 'abhilasha', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Name` varchar(50) NOT NULL,
  `Employee_Id` varchar(50) NOT NULL,
  `Hardware Type` varchar(50) NOT NULL,
  `Qty` int(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Name`, `Employee_Id`, `Hardware Type`, `Qty`, `Date`) VALUES
('shreya', '1004', 'Computer', 2, '0000-00-00'),
('karan', '1003', 'Mouse', 1, '2016-12-13'),
('karan', '1003', 'Computer', 123213, '2016-12-18'),
('karan', '1003', 'Computer', 123213, '2016-12-18'),
('Karan', '1003', 'Scanner', 1, '2016-12-05'),
('Karan', '1003', 'Scanner', 1, '2016-12-05'),
('Karan', '1003', 'Scanner', 1, '2016-12-05'),
('Ramesh', '1000', 'Printer', 5, '2016-11-30');

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
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`Item_no`);

--
-- Indexes for table `it_store`
--
ALTER TABLE `it_store`
  ADD PRIMARY KEY (`POI`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `move`
--
ALTER TABLE `move`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `pending_reg`
--
ALTER TABLE `pending_reg`
  ADD PRIMARY KEY (`Employee_ID`),
  ADD UNIQUE KEY `E_Mail` (`E_Mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
