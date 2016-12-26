-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 12:24 PM
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
('1003', 'Monitor', '654654', '87897', 1, '2016-12-12', '2', '2017-03-17');

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
('karan', '1003', 'Computer', '65465', '21321', '0000-00-00', 'vgftycdix');

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
  `Old_Seat` varchar(50) NOT NULL,
  `New_Building` varchar(50) NOT NULL,
  `New_Seat` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `move`
--

INSERT INTO `move` (`Employee_ID`, `Name`, `Old_Building`, `Old_Seat`, `New_Building`, `New_Seat`, `Date`) VALUES
('1003', 'karan', '2', '3', '2', '8', '2016-12-13');

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
('shreya', '1004', 'Computer', 2, '0000-00-00');

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
