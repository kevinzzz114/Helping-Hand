-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 10:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpinghand`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_appeal`
--

CREATE TABLE `tb_appeal` (
  `appealID` int(10) NOT NULL,
  `fromDate` date NOT NULL,
  `toDate` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `outcome` varchar(50) NOT NULL,
  `orgID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_appeal`
--

INSERT INTO `tb_appeal` (`appealID`, `fromDate`, `toDate`, `description`, `outcome`, `orgID`) VALUES
(1, '2022-03-27', '2022-04-10', 'food', '', 1),
(2, '2022-03-27', '2022-04-03', 'food', '', 1),
(3, '2022-02-01', '2022-03-18', 'cash', '', 1),
(4, '2022-03-02', '2022-04-22', 'cash', '', 1),
(5, '2022-04-01', '2022-04-15', 'food', '', 1),
(6, '2022-03-27', '2022-04-03', 'food', '', 2),
(7, '2022-03-28', '2022-04-11', 'cash', '', 2),
(8, '2022-03-27', '2022-04-03', 'food', '', 3),
(9, '2022-04-03', '2022-04-10', 'cash', '', 3),
(10, '2022-03-20', '2022-03-27', 'cash', '', 3),
(11, '2022-03-01', '2022-03-15', 'cash', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_applicant`
--

CREATE TABLE `tb_applicant` (
  `username` varchar(50) NOT NULL,
  `IDno` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `householdIncome` decimal(10,2) NOT NULL,
  `orgID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_applicant`
--

INSERT INTO `tb_applicant` (`username`, `IDno`, `address`, `householdIncome`, `orgID`) VALUES
('user6', 1, 'bandar utama', '400.00', 1),
('user7', 2, 'bandar utama', '450.00', 1),
('user8', 3, 'kota damansara', '600.00', 1),
('user9', 4, 'sea park', '400.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cash_donation`
--

CREATE TABLE `tb_cash_donation` (
  `contributionID` int(10) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `paymentChannel` varchar(50) NOT NULL,
  `referenceNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cash_donation`
--

INSERT INTO `tb_cash_donation` (`contributionID`, `amount`, `paymentChannel`, `referenceNo`) VALUES
(2, '400.00', 'online banking', 2147483647),
(4, '600.00', 'online transfer', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tb_contribution`
--

CREATE TABLE `tb_contribution` (
  `contributionID` int(10) NOT NULL,
  `receivedDate` date NOT NULL,
  `appealID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_contribution`
--

INSERT INTO `tb_contribution` (`contributionID`, `receivedDate`, `appealID`) VALUES
(1, '2022-04-01', 4),
(2, '2022-04-01', 4),
(3, '2022-04-01', 5),
(4, '2022-04-01', 4),
(5, '2022-04-01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_disbursement`
--

CREATE TABLE `tb_disbursement` (
  `IDno` int(10) NOT NULL,
  `disbursementDate` date NOT NULL,
  `cashAmount` decimal(10,2) NOT NULL,
  `goodsDisbursed` int(10) NOT NULL,
  `appealID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_document`
--

CREATE TABLE `tb_document` (
  `IDno` int(10) NOT NULL,
  `documentID` int(10) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_document`
--

INSERT INTO `tb_document` (`IDno`, `documentID`, `filename`, `description`) VALUES
(1, 4, 'demo 2', 'demo 2'),
(1, 5, 'demo 3', 'demo 3'),
(1, 6, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_goods`
--

CREATE TABLE `tb_goods` (
  `contributionID` int(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `estimatedValue` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_goods`
--

INSERT INTO `tb_goods` (`contributionID`, `description`, `estimatedValue`) VALUES
(1, 'rice', 100),
(3, 'rice', 80),
(5, 'fruits', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tb_organization`
--

CREATE TABLE `tb_organization` (
  `orgID` int(11) NOT NULL,
  `orgName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_organization`
--

INSERT INTO `tb_organization` (`orgID`, `orgName`, `address`) VALUES
(1, 'OrgA', 'address A'),
(2, 'OrgB', 'address B'),
(3, 'OrgC', 'address C');

-- --------------------------------------------------------

--
-- Table structure for table `tb_organization_rep`
--

CREATE TABLE `tb_organization_rep` (
  `username` varchar(50) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `orgID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_organization_rep`
--

INSERT INTO `tb_organization_rep` (`username`, `jobTitle`, `orgID`) VALUES
('Arep1', 'manager', 1),
('Arep2', 'receptionist', 1),
('Arep3', 'receptionist', 1),
('Brep1', 'manager', 2),
('Crep1', 'manager', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_temp_applicant`
--

CREATE TABLE `tb_temp_applicant` (
  `IDno` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `mobileNo` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `householdIncome` decimal(10,0) NOT NULL,
  `orgID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_temp_applicant`
--

INSERT INTO `tb_temp_applicant` (`IDno`, `fullName`, `mobileNo`, `email`, `address`, `householdIncome`, `orgID`) VALUES
(1, 'adam', '01378997789', 'adam@gmail.com', 'bandar utama', '300', 1),
(2, 'bryan', '01434343356', 'bryan@gmail.com', 'desa park', '700', 1),
(3, 'kevin', '01874889989', 'kevin@gmail.com', 'sea park', '300', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileNo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `fullName`, `email`, `mobileNo`) VALUES
('Arep1', 'password123', 'micheal', 'micheal@gmail.com', '01137559978'),
('Arep2', 'password123', 'claire', 'claire@gmail.com', '01364992255'),
('Arep3', 'password123', 'rex', 'rex@gmail.com', '01267887773'),
('Brep1', 'password123', 'matthew', 'matthew@gmail.com', '01131239978'),
('Crep1', 'password123', 'william', 'william@gmail.com', '0168769870'),
('user6', 'user6', 'sam', 'sam@gmail.com', '0192657345'),
('user7', 'user7', 'ross', 'ross@gmail.com', '0128796876'),
('user8', 'user8', 'ryan', 'ryan@gmail.com', '01189887732'),
('user9', 'user9', 'jenny', 'jenny@gmail.com', '01723114423');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_appeal`
--
ALTER TABLE `tb_appeal`
  ADD PRIMARY KEY (`appealID`),
  ADD KEY `fk_to_organizationID` (`orgID`);

--
-- Indexes for table `tb_applicant`
--
ALTER TABLE `tb_applicant`
  ADD PRIMARY KEY (`IDno`),
  ADD KEY `fk_to_username` (`username`),
  ADD KEY `fk_to_organization` (`orgID`);

--
-- Indexes for table `tb_cash_donation`
--
ALTER TABLE `tb_cash_donation`
  ADD KEY `fk_contributionID` (`contributionID`);

--
-- Indexes for table `tb_contribution`
--
ALTER TABLE `tb_contribution`
  ADD PRIMARY KEY (`contributionID`),
  ADD KEY `fk_to_appeal` (`appealID`);

--
-- Indexes for table `tb_disbursement`
--
ALTER TABLE `tb_disbursement`
  ADD KEY `fk_to_IDno` (`IDno`),
  ADD KEY `fk_to_appealID` (`appealID`);

--
-- Indexes for table `tb_document`
--
ALTER TABLE `tb_document`
  ADD PRIMARY KEY (`documentID`),
  ADD KEY `fk_applicantIDno` (`IDno`);

--
-- Indexes for table `tb_goods`
--
ALTER TABLE `tb_goods`
  ADD KEY `fk_to_contribution` (`contributionID`);

--
-- Indexes for table `tb_organization`
--
ALTER TABLE `tb_organization`
  ADD PRIMARY KEY (`orgID`);

--
-- Indexes for table `tb_organization_rep`
--
ALTER TABLE `tb_organization_rep`
  ADD KEY `fk_to_orgid` (`orgID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_temp_applicant`
--
ALTER TABLE `tb_temp_applicant`
  ADD PRIMARY KEY (`IDno`),
  ADD KEY `orgID` (`orgID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_appeal`
--
ALTER TABLE `tb_appeal`
  MODIFY `appealID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_applicant`
--
ALTER TABLE `tb_applicant`
  MODIFY `IDno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_contribution`
--
ALTER TABLE `tb_contribution`
  MODIFY `contributionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_document`
--
ALTER TABLE `tb_document`
  MODIFY `documentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_organization`
--
ALTER TABLE `tb_organization`
  MODIFY `orgID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_temp_applicant`
--
ALTER TABLE `tb_temp_applicant`
  MODIFY `IDno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_appeal`
--
ALTER TABLE `tb_appeal`
  ADD CONSTRAINT `fk_to_organizationID` FOREIGN KEY (`orgID`) REFERENCES `tb_organization` (`orgID`);

--
-- Constraints for table `tb_applicant`
--
ALTER TABLE `tb_applicant`
  ADD CONSTRAINT `fk_to_organization` FOREIGN KEY (`orgID`) REFERENCES `tb_organization` (`orgID`),
  ADD CONSTRAINT `fk_to_username` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`);

--
-- Constraints for table `tb_cash_donation`
--
ALTER TABLE `tb_cash_donation`
  ADD CONSTRAINT `fk_contributionID` FOREIGN KEY (`contributionID`) REFERENCES `tb_contribution` (`contributionID`);

--
-- Constraints for table `tb_contribution`
--
ALTER TABLE `tb_contribution`
  ADD CONSTRAINT `fk_to_appeal` FOREIGN KEY (`appealID`) REFERENCES `tb_appeal` (`appealID`);

--
-- Constraints for table `tb_disbursement`
--
ALTER TABLE `tb_disbursement`
  ADD CONSTRAINT `fk_to_IDno` FOREIGN KEY (`IDno`) REFERENCES `tb_applicant` (`IDno`),
  ADD CONSTRAINT `fk_to_appealID` FOREIGN KEY (`appealID`) REFERENCES `tb_appeal` (`appealID`);

--
-- Constraints for table `tb_document`
--
ALTER TABLE `tb_document`
  ADD CONSTRAINT `fk_applicantIDno` FOREIGN KEY (`IDno`) REFERENCES `tb_applicant` (`IDno`);

--
-- Constraints for table `tb_goods`
--
ALTER TABLE `tb_goods`
  ADD CONSTRAINT `fk_to_contribution` FOREIGN KEY (`contributionID`) REFERENCES `tb_contribution` (`contributionID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_organization_rep`
--
ALTER TABLE `tb_organization_rep`
  ADD CONSTRAINT `fk_to_orgid` FOREIGN KEY (`orgID`) REFERENCES `tb_organization` (`orgID`),
  ADD CONSTRAINT `tb_organization_rep_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`);

--
-- Constraints for table `tb_temp_applicant`
--
ALTER TABLE `tb_temp_applicant`
  ADD CONSTRAINT `tb_temp_applicant_ibfk_1` FOREIGN KEY (`orgID`) REFERENCES `tb_organization` (`orgID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
