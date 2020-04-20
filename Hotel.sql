-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2020 at 08:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `AdditionalService`
--

CREATE TABLE `AdditionalService` (
  `serviceID` varchar(6) NOT NULL,
  `serviceName` varchar(12) NOT NULL,
  `staffID` varchar(5) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Booking_Detail`
--

CREATE TABLE `Booking_Detail` (
  `bookingID` varchar(10) NOT NULL,
  `bookDate` date DEFAULT current_timestamp(),
  `email` varchar(20) NOT NULL,
  `guestFirstName` varchar(10) NOT NULL,
  `guestLastName` varchar(10) NOT NULL,
  `checkIn` date DEFAULT NULL,
  `checkOut` date DEFAULT NULL,
  `branchID` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `paymentMethod` varchar(10) NOT NULL,
  `rating` int(11) NOT NULL,
  `additionalNote` text NOT NULL,
  `promocode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Branch`
--

CREATE TABLE `Branch` (
  `branchID` varchar(5) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `tel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Branch`
--

INSERT INTO `Branch` (`branchID`, `address`, `tel`) VALUES
('BR001', '319 Chamchuri Square Building, 29th Floor, Phayathai Road, Pathumwan,  Bangkok 10330, Thailand', '022999919'),
('BR002', '1221 South Harbor Boulevard Anaheim, California 92805', '022009891');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `firstName` varchar(16) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `citizenID` varchar(20) NOT NULL,
  `totalRoom` int(11) NOT NULL DEFAULT 0,
  `recentStay` datetime DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`firstName`, `lastName`, `email`, `password`, `address`, `citizenID`, `totalRoom`, `recentStay`) VALUES
('Nachanok', 'Issrapruek', 'Nachanok@gmail.com', 'a3ffb3512d094fc531b10ddabfdb02b72ca08065', 'Pracha Uthit', '1234567', 0, '0000-00-00 00:00:00'),
('Siradanai', 'Sutin', 'toobcc34281@hotmail.com', '98K07892328123GT$#', '100 Daokhanong Thonburi 10600 Bangkok Thailand', '11004010109073', 0, '2020-04-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `staffID` varchar(5) NOT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `salary` float NOT NULL,
  `branchID` varchar(5) NOT NULL,
  `workTime Description` text NOT NULL,
  `startDate` date NOT NULL DEFAULT current_timestamp(),
  `gender` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`staffID`, `firstName`, `lastName`, `position`, `salary`, `branchID`, `workTime Description`, `startDate`, `gender`) VALUES
('FDS90', 'Nadakij', 'Rungsubsin', 'Receptionist', 18000, 'BR001', '18:00 PM to 00:00 PM', '2020-04-29', 'F'),
('GBC98', 'Yuttasak', 'Akkadej', 'Receptionist', 20000, 'BR001', '00:00 PM to 07:20 PM', '2020-04-23', 'M'),
('GFD05', 'Mailna', 'Deedsuwan', 'Receptionist', 18000, 'BR001', '12:20 PM to 18:00 PM', '2020-04-29', 'F'),
('HJI03', 'Veerasak', 'Hadheevasri', 'IT Support', 26000, 'BR001', '9:30 AM to 16:00 PM', '2020-04-25', 'M'),
('HYA02', 'Vapidee', 'Boonsonkla', 'Receptionist', 18000, 'BR001', '6:20 AM to 12:20 PM', '2020-04-27', 'F'),
('JKA21', 'Patravee', 'Leesakul', 'Marketing', 26000, 'BR001', '9:30 AM to 16:00 PM', '2020-04-24', 'F'),
('MAS01', 'Pissanu', 'Sangiam', 'Manager', 40000, 'BR001', '10:00 AM to 16:00 PM', '2020-04-20', 'M'),
('MAS79', 'Panya', 'Pakpanya', 'Manager', 40000, 'BR002', '10:00 AM to 16:00 PM', '2020-04-20', 'M'),
('MSJ28', 'Viboon', 'Issaraparb', 'Masseuse', 23400, 'BR001', '16:30 PM to 21:00 PM', '2020-04-26', 'M'),
('TFS45', 'Jirasri', 'Sakthin', 'Receptionist', 18000, 'BR001', '7:30 AM to 15:00 PM', '2020-04-27', 'M'),
('WIK42', 'Jittra', 'Binraka', 'Masseuse', 23400, 'BR001', '9:30 AM to 17:00 PM', '2020-04-27', 'F'),
('WKK79', 'Somsri', 'Kanyavipak', 'Trainer', 24000, 'BR001', '9:30 AM to 17:00 PM', '2020-04-22', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `FoodReceipt`
--

CREATE TABLE `FoodReceipt` (
  `receiptID` varchar(10) NOT NULL,
  `foodID` varchar(5) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Furniture`
--

CREATE TABLE `Furniture` (
  `roomType` varchar(20) NOT NULL,
  `bed` int(11) NOT NULL,
  `table` int(11) NOT NULL,
  `chiar` int(11) NOT NULL,
  `bathRoom` int(11) NOT NULL,
  `smoking` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Furniture`
--

INSERT INTO `Furniture` (`roomType`, `bed`, `table`, `chiar`, `bathRoom`, `smoking`) VALUES
('Deluxe', 1, 1, 2, 1, 0),
('Elite', 2, 2, 4, 1, 1),
('Suite', 1, 2, 2, 1, 1),
('Super-Deluxe', 1, 2, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Maintenance`
--

CREATE TABLE `Maintenance` (
  `maintenanceID` varchar(10) NOT NULL,
  `furnitureIn` varchar(8) NOT NULL,
  `furnitureOut` varchar(8) NOT NULL,
  `roomID` varchar(5) NOT NULL,
  `branchID` varchar(5) NOT NULL,
  `staffID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `foodID` varchar(5) NOT NULL,
  `foodName` varchar(20) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`foodID`, `foodName`, `price`) VALUES
('BVG01', 'Blue Cider', 110),
('BVG02', 'Water', 15),
('DSH01', 'Tom-Tam-Kung', 230),
('DSH02', 'Cabonara-Spaghetti', 180),
('DSH03', 'American Fried Rice', 190),
('DSH04', 'Bacro Salad', 230);

-- --------------------------------------------------------

--
-- Table structure for table `Promotion`
--

CREATE TABLE `Promotion` (
  `promocode` varchar(10) NOT NULL,
  `discount` float NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Promotion`
--

INSERT INTO `Promotion` (`promocode`, `discount`, `description`) VALUES
('GSDE030201', 0.15, '15% Discount'),
('SPSM040201', 0.05, '5% Discount on this 2020 summer ');

-- --------------------------------------------------------

--
-- Table structure for table `Room`
--

CREATE TABLE `Room` (
  `roomID` varchar(5) NOT NULL,
  `branchID` varchar(5) NOT NULL,
  `roomType` varchar(20) NOT NULL,
  `maxGuest` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Room`
--

INSERT INTO `Room` (`roomID`, `branchID`, `roomType`, `maxGuest`, `price`) VALUES
('101', 'BR001', 'Deluxe', 4, 1700),
('101', 'BR002', 'Deluxe', 4, 2200),
('102', 'BR001', 'Deluxe', 4, 1700),
('102', 'BR002', 'Deluxe', 4, 2200),
('103', 'BR001', 'Deluxe', 4, 1700),
('103', 'BR002', 'Deluxe', 4, 2200),
('104', 'BR001', 'Deluxe', 4, 1700),
('104', 'BR002', 'Deluxe', 4, 2200),
('105', 'BR001', 'Deluxe', 4, 1700),
('105', 'BR002', 'Deluxe', 4, 2200),
('106', 'BR001', 'Deluxe', 4, 1700),
('107', 'BR001', 'Deluxe', 4, 1700),
('108', 'BR001', 'Deluxe', 4, 1700),
('201', 'BR001', 'Suite', 3, 1900),
('201', 'BR002', 'Suite', 3, 2400),
('202', 'BR001', 'Suite', 3, 1900),
('202', 'BR002', 'Suite', 3, 2400),
('203', 'BR001', 'Suite', 3, 1900),
('203', 'BR002', 'Suite', 3, 2400),
('204', 'BR001', 'Suite', 3, 1900),
('204', 'BR002', 'Suite', 3, 2400),
('205', 'BR001', 'Super-Deluxe', 4, 2400),
('205', 'BR002', 'Suite', 3, 2400),
('206', 'BR001', 'Super-Deluxe', 4, 2600),
('206', 'BR002', 'Super-Deluxe', 4, 2800),
('207', 'BR001', 'Super-Deluxe', 4, 2600),
('207', 'BR002', 'Super-Deluxe', 4, 2800),
('208', 'BR001', 'Super-Deluxe', 4, 2600),
('208', 'BR002', 'Super-Deluxe', 4, 2800);

-- --------------------------------------------------------

--
-- Table structure for table `RoomUsage`
--

CREATE TABLE `RoomUsage` (
  `branchID` varchar(5) NOT NULL,
  `roomID` varchar(5) NOT NULL,
  `bookingID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `StaffReview`
--

CREATE TABLE `StaffReview` (
  `staffID` varchar(5) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `rating` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tableTest1`
--

CREATE TABLE `tableTest1` (
  `column1` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tableTest2`
--

CREATE TABLE `tableTest2` (
  `something` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `TotalAdditionalService`
--

CREATE TABLE `TotalAdditionalService` (
  `totalAddID` varchar(6) NOT NULL,
  `serviceID` varchar(6) NOT NULL,
  `quantity` int(11) NOT NULL,
  `roomID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `WorktimeRecord`
--

CREATE TABLE `WorktimeRecord` (
  `staffID` varchar(5) NOT NULL,
  `timeIn` date NOT NULL DEFAULT current_timestamp(),
  `timeOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AdditionalService`
--
ALTER TABLE `AdditionalService`
  ADD PRIMARY KEY (`serviceID`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `Booking_Detail`
--
ALTER TABLE `Booking_Detail`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `email` (`email`),
  ADD KEY `branchID` (`branchID`),
  ADD KEY `promocode` (`promocode`);

--
-- Indexes for table `Branch`
--
ALTER TABLE `Branch`
  ADD PRIMARY KEY (`branchID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`staffID`),
  ADD KEY `branchID` (`branchID`);

--
-- Indexes for table `FoodReceipt`
--
ALTER TABLE `FoodReceipt`
  ADD PRIMARY KEY (`receiptID`,`foodID`),
  ADD KEY `foodID` (`foodID`);

--
-- Indexes for table `Furniture`
--
ALTER TABLE `Furniture`
  ADD PRIMARY KEY (`roomType`);

--
-- Indexes for table `Maintenance`
--
ALTER TABLE `Maintenance`
  ADD PRIMARY KEY (`maintenanceID`),
  ADD KEY `branchID` (`branchID`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`foodID`);

--
-- Indexes for table `Promotion`
--
ALTER TABLE `Promotion`
  ADD PRIMARY KEY (`promocode`);

--
-- Indexes for table `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`roomID`,`branchID`),
  ADD KEY `roomType` (`roomType`),
  ADD KEY `branchID` (`branchID`);

--
-- Indexes for table `RoomUsage`
--
ALTER TABLE `RoomUsage`
  ADD PRIMARY KEY (`branchID`,`roomID`,`bookingID`),
  ADD KEY `roomID` (`roomID`),
  ADD KEY `bookingID` (`bookingID`);

--
-- Indexes for table `StaffReview`
--
ALTER TABLE `StaffReview`
  ADD PRIMARY KEY (`staffID`,`date`);

--
-- Indexes for table `tableTest1`
--
ALTER TABLE `tableTest1`
  ADD PRIMARY KEY (`column1`);

--
-- Indexes for table `tableTest2`
--
ALTER TABLE `tableTest2`
  ADD PRIMARY KEY (`something`);

--
-- Indexes for table `TotalAdditionalService`
--
ALTER TABLE `TotalAdditionalService`
  ADD PRIMARY KEY (`totalAddID`,`serviceID`),
  ADD KEY `serviceID` (`serviceID`);

--
-- Indexes for table `WorktimeRecord`
--
ALTER TABLE `WorktimeRecord`
  ADD PRIMARY KEY (`staffID`,`timeIn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AdditionalService`
--
ALTER TABLE `AdditionalService`
  ADD CONSTRAINT `AdditionalService_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `Employee` (`staffID`);

--
-- Constraints for table `Booking_Detail`
--
ALTER TABLE `Booking_Detail`
  ADD CONSTRAINT `Booking_Detail_ibfk_1` FOREIGN KEY (`email`) REFERENCES `Customer` (`email`),
  ADD CONSTRAINT `Booking_Detail_ibfk_2` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`),
  ADD CONSTRAINT `Booking_Detail_ibfk_3` FOREIGN KEY (`promocode`) REFERENCES `Promotion` (`promocode`);

--
-- Constraints for table `Employee`
--
ALTER TABLE `Employee`
  ADD CONSTRAINT `Employee_ibfk_1` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`);

--
-- Constraints for table `FoodReceipt`
--
ALTER TABLE `FoodReceipt`
  ADD CONSTRAINT `FoodReceipt_ibfk_1` FOREIGN KEY (`foodID`) REFERENCES `Menu` (`foodID`);

--
-- Constraints for table `Maintenance`
--
ALTER TABLE `Maintenance`
  ADD CONSTRAINT `Maintenance_ibfk_1` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`),
  ADD CONSTRAINT `Maintenance_ibfk_2` FOREIGN KEY (`staffID`) REFERENCES `Employee` (`staffID`);

--
-- Constraints for table `Room`
--
ALTER TABLE `Room`
  ADD CONSTRAINT `Room_ibfk_1` FOREIGN KEY (`roomType`) REFERENCES `Furniture` (`roomType`),
  ADD CONSTRAINT `Room_ibfk_2` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`);

--
-- Constraints for table `RoomUsage`
--
ALTER TABLE `RoomUsage`
  ADD CONSTRAINT `RoomUsage_ibfk_1` FOREIGN KEY (`roomID`) REFERENCES `Room` (`roomID`),
  ADD CONSTRAINT `RoomUsage_ibfk_2` FOREIGN KEY (`bookingID`) REFERENCES `Booking_Detail` (`bookingID`),
  ADD CONSTRAINT `RoomUsage_ibfk_3` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`);

--
-- Constraints for table `StaffReview`
--
ALTER TABLE `StaffReview`
  ADD CONSTRAINT `StaffReview_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `Employee` (`staffID`);

--
-- Constraints for table `TotalAdditionalService`
--
ALTER TABLE `TotalAdditionalService`
  ADD CONSTRAINT `TotalAdditionalService_ibfk_1` FOREIGN KEY (`serviceID`) REFERENCES `AdditionalService` (`serviceID`);

--
-- Constraints for table `WorktimeRecord`
--
ALTER TABLE `WorktimeRecord`
  ADD CONSTRAINT `WorktimeRecord_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `Employee` (`staffID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
