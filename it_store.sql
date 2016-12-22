-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2016 at 12:10 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `it_store`
--
ALTER TABLE `it_store`
  ADD PRIMARY KEY (`POI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
