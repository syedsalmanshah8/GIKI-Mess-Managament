-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 07:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `central mess system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(15) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `Name`, `Password`) VALUES
(123456789, 'admRaja ', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `check in/out`
--

CREATE TABLE `check in/out` (
  `Registration Number` int(7) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check in/out`
--

INSERT INTO `check in/out` (`Registration Number`, `Name`, `Status`) VALUES
(2018071, 'Anas Raja', 'In'),
(2018231, 'M.Ahmad Tariq', 'In'),
(2018470, 'Salman Shah', 'Out');

-- --------------------------------------------------------

--
-- Table structure for table `mess_bill`
--

CREATE TABLE `mess_bill` (
  `Reg_Number` int(7) NOT NULL,
  `Bill_ID` int(10) NOT NULL,
  `Hostel` int(2) NOT NULL,
  `Arrears` int(10) NOT NULL,
  `Lunch_Dinner` int(11) NOT NULL,
  `Breakfast` int(11) NOT NULL,
  `Monthly_Bill` int(11) NOT NULL,
  `Room_Number` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Admin_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess_bill`
--

INSERT INTO `mess_bill` (`Reg_Number`, `Bill_ID`, `Hostel`, `Arrears`, `Lunch_Dinner`, `Breakfast`, `Monthly_Bill`, `Room_Number`, `Name`, `Admin_Id`) VALUES
(2018231, 7, 9, 512615200, 20, 5, 210000, 69, 'M.Ahmad Tariq', 123456789),
(2018470, 8, 10, 0, 15, 5, 25000, 78, 'Salman Shah', 123456789),
(2018071, 8520, 10, 23563061, 25, 15, 30000, 15, 'raja Anas', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `mess_menu`
--

CREATE TABLE `mess_menu` (
  `Item ID` int(10) NOT NULL,
  `Day` varchar(10) NOT NULL,
  `Breakfast` text NOT NULL,
  `Lunch` text NOT NULL,
  `Dinner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess_menu`
--

INSERT INTO `mess_menu` (`Item ID`, `Day`, `Breakfast`, `Lunch`, `Dinner`) VALUES
(1, 'Monday', 'lobia', 'lobia', 'lobia'),
(2, 'Tuesday', 'lobia', 'lobia', 'lobia'),
(3, 'tuesday', 'egg salad', 'beef stew', 'white rice with daal');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `MessID` int(10) NOT NULL,
  `AdminID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Assigned_Hall` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`MessID`, `AdminID`, `Name`, `Password`, `Assigned_Hall`) VALUES
(456, 123456789, 'Ahmedlala', '124', 2),
(789, 123456789, 'Lala Salman Shah', 'Salmanlala', 4);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Regno` int(7) NOT NULL,
  `Bill_ID` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Hostel` int(11) NOT NULL,
  `Room_Number` int(11) NOT NULL,
  `Assigned_Hall` int(2) NOT NULL,
  `Degree` varchar(15) NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Regno`, `Bill_ID`, `Name`, `Password`, `Hostel`, `Room_Number`, `Assigned_Hall`, `Degree`, `Status`) VALUES
(2018070, 0, 'playa', '123', 5, 57, 6, 'undergrad', 'In'),
(2018071, 8520, 'Anas Raja', 'raja12', 10, 69, 69, 'Undergrad', 'In'),
(2018231, 7, 'M.Ahmad Tariq', 'hehehe', 9, 78, 4, 'Undergrad', 'In'),
(2018470, 8, 'Syed Salman Shah', 'salmanjani', 10, 3, 1, 'Postgrad', 'Out');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

CREATE TABLE `student_feedback` (
  `Serial Number` int(11) NOT NULL,
  `Reg_no` int(7) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Reviews` text NOT NULL,
  `Assigned_Hall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_feedback`
--

INSERT INTO `student_feedback` (`Serial Number`, `Reg_no`, `Name`, `Reviews`, `Assigned_Hall`) VALUES
(1, 2018071, 'Salman', 'farig tareen mess\r\nsab din lobia hona chahiyay', 1),
(2, 2018723, 'Kahn', 'Ye tou hoga', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`),
  ADD KEY `Admin Id` (`AdminId`);

--
-- Indexes for table `check in/out`
--
ALTER TABLE `check in/out`
  ADD PRIMARY KEY (`Registration Number`),
  ADD KEY `Registration Number` (`Registration Number`);

--
-- Indexes for table `mess_bill`
--
ALTER TABLE `mess_bill`
  ADD PRIMARY KEY (`Bill_ID`),
  ADD KEY `Registration Number` (`Reg_Number`,`Bill_ID`),
  ADD KEY `Admin Id` (`Admin_Id`),
  ADD KEY `Hostel` (`Hostel`,`Room_Number`);

--
-- Indexes for table `mess_menu`
--
ALTER TABLE `mess_menu`
  ADD PRIMARY KEY (`Item ID`),
  ADD KEY `Item ID` (`Item ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`MessID`),
  ADD KEY `Mess ID` (`MessID`,`AdminID`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Regno`),
  ADD KEY `Registration Number` (`Regno`,`Bill_ID`),
  ADD KEY `students_ibfk_7` (`Bill_ID`),
  ADD KEY `Room_Number` (`Room_Number`,`Assigned_Hall`),
  ADD KEY `hostel` (`Hostel`);

--
-- Indexes for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD PRIMARY KEY (`Serial Number`),
  ADD UNIQUE KEY `Registration Number` (`Reg_no`),
  ADD KEY `Serial Number` (`Serial Number`,`Reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check in/out`
--
ALTER TABLE `check in/out`
  MODIFY `Registration Number` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018471;

--
-- AUTO_INCREMENT for table `mess_bill`
--
ALTER TABLE `mess_bill`
  MODIFY `Bill_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8521;

--
-- AUTO_INCREMENT for table `mess_menu`
--
ALTER TABLE `mess_menu`
  MODIFY `Item ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `MessID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=790;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Regno` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018471;

--
-- AUTO_INCREMENT for table `student_feedback`
--
ALTER TABLE `student_feedback`
  MODIFY `Serial Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `mess_bill` (`Admin_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_ibfk_3` FOREIGN KEY (`AdminId`) REFERENCES `staff` (`AdminID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `check in/out`
--
ALTER TABLE `check in/out`
  ADD CONSTRAINT `Reg` FOREIGN KEY (`Registration Number`) REFERENCES `students` (`Regno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mess_bill`
--
ALTER TABLE `mess_bill`
  ADD CONSTRAINT `Mess` FOREIGN KEY (`Reg_Number`) REFERENCES `students` (`Regno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mess_bill_ibfk_1` FOREIGN KEY (`Bill_ID`) REFERENCES `students` (`Bill_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mess_bill_ibfk_2` FOREIGN KEY (`Admin_Id`) REFERENCES `admin` (`AdminId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
