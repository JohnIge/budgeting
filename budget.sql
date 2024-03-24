-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 02:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- CREATE DATABASE budget
Database: `budget`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgetitems`
--

CREATE TABLE `budgetitems` (
  `Sn` int(8) NOT NULL,
  `Poolname` varchar(50) NOT NULL,
  `Driver` varchar(50) NOT NULL,
  `Units` varchar(4) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Unitcost` varchar(20) NOT NULL,
  `Totalcost` varchar(30) NOT NULL,
  `Budgettag` varchar(50) NOT NULL,
  `Timestamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budgetitems`
--

INSERT INTO `budgetitems` (`Sn`, `Poolname`, `Driver`, `Units`, `Department`, `Unitcost`, `Totalcost`, `Budgettag`, `Timestamp`) VALUES
(1, '', 'Number of transactions', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710974785'),
(2, '', 'Complexity of financial reporting requirements', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710974785'),
(3, '', 'Number of transactions', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710974977'),
(4, '', 'Complexity of financial reporting requirements', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710974977'),
(5, '', 'Number of transactions', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710976148'),
(6, '', 'Complexity of financial reporting requirements', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710976148'),
(7, '', 'Number of transactions', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710976240'),
(8, '', 'Complexity of financial reporting requirements', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710976240'),
(9, '', 'Number of transactions', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710976604'),
(10, '', 'Complexity of financial reporting requirements', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710976604'),
(11, '', 'Number of transactions', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710976697'),
(12, '', 'Complexity of financial reporting requirements', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710976697'),
(13, 'Payroll processing costs', 'Number of transactions', '5', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710977618'),
(14, 'Accounts payable And receivable processing costs', 'Number of transactions', '20', 'Accounting And Finance', '25', '500', 'may 2024 budget', '1710977619'),
(15, '', 'Complexity of financial reporting requirements', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710977619'),
(16, 'Payroll processing costs', 'Number of transactions', '5', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710977817'),
(17, 'Accounts payable And receivable processing costs', 'Number of transactions', '20', 'Accounting And Finance', '25', '500', 'may 2024 budget', '1710977817'),
(18, '', 'Complexity of financial reporting requirements', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710977817'),
(19, 'Payroll processing costs', 'Number of transactions', '5', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710977872'),
(20, 'Accounts payable And receivable processing costs', 'Number of transactions', '20', 'Accounting And Finance', '25', '500', 'may 2024 budget', '1710977872'),
(21, '', 'Complexity of financial reporting requirements', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710977872'),
(22, 'Payroll processing costs', 'Number of transactions', '5', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710980494'),
(23, 'Accounts payable And receivable processing costs', 'Number of transactions', '20', 'Accounting And Finance', '25', '500', 'may 2024 budget', '1710980494'),
(24, '', 'Complexity of financial reporting requirements', '', 'Accounting And Finance', '', '0', 'may 2024 budget', '1710980494'),
(25, 'Payroll processing costs', 'Number of transactions', '5', 'Accounting And Finance', '', '0', 'second budget', '1710985097'),
(26, 'Accounts payable And receivable processing costs', 'Number of transactions', '20', 'Accounting And Finance', '25', '500', 'second budget', '1710985097'),
(27, 'Machine operation costs', 'Number of transactions', '12', 'Accounting And Finance', '35', '420', 'second budget', '1710985097'),
(28, 'Purchase Order', 'Number of transactions', '27', 'Accounting And Finance', '30', '810', 'second budget', '1710985097'),
(29, '', 'Complexity of financial reporting requirements', '', 'Accounting And Finance', '', '0', 'second budget', '1710985097');

-- --------------------------------------------------------

--
-- Table structure for table `costdriver`
--

CREATE TABLE `costdriver` (
  `Sn` int(8) NOT NULL,
  `Drivername` varchar(80) NOT NULL,
  `Department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costdriver`
--

INSERT INTO `costdriver` (`Sn`, `Drivername`, `Department`) VALUES
(1, 'Lead generation And prospecting', 'Sales And Marketing'),
(2, 'Order processing And customer service', 'Sales And Marketing'),
(3, 'Machine hours', 'Production Line'),
(4, 'Number of units produced', 'Production Line'),
(5, 'Number of transactions', 'Accounting And Finance'),
(6, 'Complexity of financial reporting requirements', 'Accounting And Finance');

-- --------------------------------------------------------

--
-- Table structure for table `costpool`
--

CREATE TABLE `costpool` (
  `Sn` int(8) NOT NULL,
  `Poolname` varchar(50) NOT NULL,
  `Unitcost` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costpool`
--

INSERT INTO `costpool` (`Sn`, `Poolname`, `Unitcost`) VALUES
(1, 'Labour Hour', 40),
(2, 'Machine Hour', 30),
(3, 'Purchase Order', 30),
(4, 'Machine operation costs', 35),
(5, 'Accounts payable And receivable processing costs', 25);

-- --------------------------------------------------------

--
-- Table structure for table `costpooltrans`
--

CREATE TABLE `costpooltrans` (
  `Sn` int(8) NOT NULL,
  `Poolname` varchar(50) NOT NULL,
  `Driver` varchar(50) NOT NULL,
  `Units` varchar(4) NOT NULL,
  `Department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costpooltrans`
--

INSERT INTO `costpooltrans` (`Sn`, `Poolname`, `Driver`, `Units`, `Department`) VALUES
(1, 'Machine operation costs', 'Machine hours', '10', 'Production Line'),
(2, 'Sales personnel costs', 'Number of leads generated', '15', 'Sales And Marketing'),
(3, 'Payroll processing costs', 'Number of transactions', '5', 'Accounting And Finance'),
(4, 'Accounts payable And receivable processing costs', 'Number of transactions', '20', 'Accounting And Finance'),
(5, 'Machine operation costs', 'Number of transactions', '12', 'Accounting And Finance'),
(6, 'Purchase Order', 'Number of transactions', '27', 'Accounting And Finance');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Sn` int(8) NOT NULL,
  `Departmentname` varchar(50) NOT NULL,
  `DepartmentHead` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Sn`, `Departmentname`, `DepartmentHead`) VALUES
(1, 'Accounting And Finance', 'Ayo Ige'),
(2, 'Sales And Marketing', 'Anya'),
(3, 'Production Line', 'Dr Ogu');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Sn` int(10) NOT NULL,
  `ApplicationId` varchar(15) NOT NULL,
  `Amountpaid` varchar(50) NOT NULL,
  `Accountpaidto` varchar(30) NOT NULL,
  `Bank` varchar(40) NOT NULL,
  `Modeofpayment` varchar(30) NOT NULL,
  `Paydate` varchar(40) NOT NULL,
  `TransactionId` varchar(30) DEFAULT NULL,
  `Status` varchar(20) NOT NULL,
  `Regtime` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Sn`, `ApplicationId`, `Amountpaid`, `Accountpaidto`, `Bank`, `Modeofpayment`, `Paydate`, `TransactionId`, `Status`, `Regtime`) VALUES
(1, '', 'Paul ONAKALA', '', '', '', '', 'akins', 'Admin', ''),
(2, '', 'Joe Thomas', '', '', '', '', 'joethomas', 'Employer', ''),
(3, '', 'Paul', '', '', '', '', 'test', 'Corper', ''),
(4, '', 'Babcock', '', '', '', '', 'ayo', 'Employer', ''),
(5, '', 'Babcock', '', '', '', '', 'ayo', 'Employer', ''),
(6, '', 'Babcock', '', '', '', '', 'ayo', 'Employer', ''),
(7, '', 'Babcock', '', '', '', '', 'fajuks', 'Employer', ''),
(8, '', 'Fajuko Odunayo', '', '', '', '', 'tayo', 'Corper', ''),
(9, '', 'Samuel Ayodeji', '', '', '', '', 'samuel', 'Admin', ''),
(10, '', '', '', '', '', '', 'BUadmin', 'Corper', ''),
(11, '', '4000', '3001234567', 'First Bank', 'Transfer', '11-03-2022', '', '', '1647172684'),
(12, '', '4000', '3001234567', 'First Bank', 'Transfer', '11-03-2022', '1234567890', 'Registered', '1647172900'),
(13, '10001', '4000', '3001234567', 'First Bank', 'Transfer', '11-03-2022', '1234567890', 'Registered', '1647172947'),
(14, '1', '7000', '3001234567', 'First Bank', 'Transfer', '13-03-2022', '2345678910', 'Registered', '1647178022');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Sn` int(10) NOT NULL,
  `ApplicationId` varchar(15) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `OtherNames` varchar(40) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Regtime` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Sn`, `ApplicationId`, `Surname`, `FirstName`, `OtherNames`, `Phone`, `Email`, `Username`, `Password`, `Status`, `Regtime`) VALUES
(1, '10001', 'ONAKALA', 'PAUL', 'IKECHUKWU', '08098765412', 'onakala@gmail.com', 'akins', 'inter', 'New', '12908432345'),
(13, '1', 'Joel', 'David', 'Amaka', '08023121213', 'david@gmail.com', 'david', 'david', 'New', '1647789610'),
(12, '1', 'Segun', 'Ade', 'James', '08020000011', 'ade@gmail.com', 'ade', 'again', 'New', '1647788917'),
(11, '1', 'Atitebi', 'remmi', 'Ochade', '09023211959', 'atitebitomiwa@gmail.com', 'Alex', 'Ochade', 'New', '1647177894'),
(14, '14', 'Abel', 'Makinde', 'Samuel', '08021324567', 'makinde@gmail.com', 'abel', 'abel', 'New', '1647789878'),
(15, '15', 'remy', 'mina', 'mina', '08020000011', 'mina@gmail.com', 'mina', 'pass', 'New', '1647790020'),
(16, '1', 'obiadoh', 'augustine', 'ekene', '08161241921', 'davies@gmail.com', 'augustine', 'obiadoh111', 'New', '1648386044'),
(17, '1', 'hggffgfgf', 'hggg', 'gghghghghgh', '08072123456', 'eronmoamos@babcock.edu.ng', 'gfer', 'rtu', 'New', '1648491527');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sn` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(30) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sn`, `Name`, `Username`, `Password`, `Role`) VALUES
(1, 'Paul ONAKALA', 'akins', 'pass', 'Admin'),
(2, 'Joe Thomas', 'joethomas', 'pass', 'Employer'),
(3, 'Ayo Ige', 'test', 'test', 'DHead'),
(4, 'Babcock', 'ayo', '12345', 'Manager'),
(5, 'Babcock', 'ayo', '12345', 'Employer'),
(6, 'Babcock', 'ayo', '12345', 'Employer'),
(7, 'Babcock', 'fajuks', '1234', 'Employer'),
(8, 'Fajuko Odunayo', 'tayo', '321', 'Corper'),
(9, 'Samuel Ayodeji', 'samuel', 'ayodeji', 'Admin'),
(10, '', 'BUadmin', 'aderemi', 'Corper'),
(11, 'Samuel Adekunle', 'sadekunle', 'sadekunle', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `usersn`
--

CREATE TABLE `usersn` (
  `Sn` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersn`
--

INSERT INTO `usersn` (`Sn`, `Name`, `Username`, `Password`, `Role`) VALUES
(0, 'Jimoh Michael', 'jimo', 'jimo', 'User'),
(0, 'Siji Oladele', 'sijidele', 'delesiji', 'Admission'),
(0, 'Akin Samson', 'Akins', 'inter', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgetitems`
--
ALTER TABLE `budgetitems`
  ADD UNIQUE KEY `Sn` (`Sn`);

--
-- Indexes for table `costdriver`
--
ALTER TABLE `costdriver`
  ADD UNIQUE KEY `Sn` (`Sn`);

--
-- Indexes for table `costpool`
--
ALTER TABLE `costpool`
  ADD UNIQUE KEY `Sn` (`Sn`);

--
-- Indexes for table `costpooltrans`
--
ALTER TABLE `costpooltrans`
  ADD UNIQUE KEY `Sn` (`Sn`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD UNIQUE KEY `Sn` (`Sn`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Sn`),
  ADD KEY `Sn` (`Sn`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Sn`),
  ADD KEY `Sn` (`Sn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sn`),
  ADD KEY `Sn` (`Sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budgetitems`
--
ALTER TABLE `budgetitems`
  MODIFY `Sn` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `costdriver`
--
ALTER TABLE `costdriver`
  MODIFY `Sn` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `costpool`
--
ALTER TABLE `costpool`
  MODIFY `Sn` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `costpooltrans`
--
ALTER TABLE `costpooltrans`
  MODIFY `Sn` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Sn` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `Sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
