-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 34.87.187.203
-- Generation Time: May 18, 2020 at 05:52 PM
-- Server version: 5.7.25-google-log
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `AdditionalService`
--

CREATE TABLE `AdditionalService` (
  `serviceID` varchar(6) NOT NULL,
  `serviceName` varchar(50) NOT NULL,
  `staffID` varchar(5) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `AdditionalServiceReceipt`
--

CREATE TABLE `AdditionalServiceReceipt` (
  `receiptID` varchar(6) NOT NULL,
  `serviceID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `AdditionalServiceReceiptRecord`
--

CREATE TABLE `AdditionalServiceReceiptRecord` (
  `receiptID` varchar(6) CHARACTER SET utf8mb4 NOT NULL,
  `roomID` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `branchID` varchar(5) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Additional_seq`
--

CREATE TABLE `Additional_seq` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Booking_Detail`
--

CREATE TABLE `Booking_Detail` (
  `bookingID` varchar(10) NOT NULL DEFAULT '0',
  `bookDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `guestFirstName` varchar(50) NOT NULL,
  `guestLastName` varchar(50) NOT NULL,
  `checkIn` date DEFAULT NULL,
  `checkOut` date DEFAULT NULL,
  `branchID` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `paymentMethod` varchar(10) NOT NULL,
  `cardNumber` text,
  `additionalNote` text NOT NULL,
  `promocode` varchar(10) DEFAULT NULL,
  `roomID` varchar(6) DEFAULT NULL,
  `citizenID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `Booking_Detail`
--
DELIMITER $$
CREATE TRIGGER `tg_booking_id_insert` BEFORE INSERT ON `Booking_Detail` FOR EACH ROW BEGIN
  INSERT INTO booking_id_seq VALUES (NULL);
  SET NEW.bookingID = CONCAT('BK', LPAD(LAST_INSERT_ID(), 6, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booking_id_seq`
--

CREATE TABLE `booking_id_seq` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Branch`
--

CREATE TABLE `Branch` (
  `branchID` varchar(5) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `postalCode` varchar(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `firstName` varchar(16) CHARACTER SET utf8 NOT NULL,
  `lastName` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `citizenID` varchar(20) NOT NULL,
  `profileImage` varchar(200) DEFAULT NULL,
  `street` varchar(40) NOT NULL DEFAULT '""',
  `city` varchar(20) NOT NULL DEFAULT '""',
  `state` varchar(10) NOT NULL DEFAULT '""',
  `zipCode` varchar(10) NOT NULL DEFAULT '""',
  `country` varchar(16) NOT NULL DEFAULT '""'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `CustomerReview`
--

CREATE TABLE `CustomerReview` (
  `citizenID` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `points` float NOT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `date` date NOT NULL,
  `branchID` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `staffID` varchar(5) NOT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `position` varchar(40) DEFAULT NULL,
  `salary` float NOT NULL,
  `branchID` varchar(5) NOT NULL,
  `workTime Description` text NOT NULL,
  `startDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` varchar(1) DEFAULT NULL,
  `profileImage` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `EmployeeApplication`
--

CREATE TABLE `EmployeeApplication` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `lastName` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `requiredSalary` float DEFAULT NULL,
  `startDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `street` varchar(40) COLLATE utf8_unicode_ci DEFAULT '',
  `city` varchar(20) COLLATE utf8_unicode_ci DEFAULT '',
  `state` varchar(10) COLLATE utf8_unicode_ci DEFAULT '',
  `zipCode` varchar(10) COLLATE utf8_unicode_ci DEFAULT '',
  `country` varchar(16) COLLATE utf8_unicode_ci DEFAULT '',
  `nationality` varchar(40) COLLATE utf8_unicode_ci DEFAULT '',
  `phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT '',
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `imgURL` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(5) COLLATE utf8_unicode_ci DEFAULT '',
  `position` varchar(20) COLLATE utf8_unicode_ci DEFAULT '',
  `branchID` varchar(5) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Triggers `EmployeeApplication`
--
DELIMITER $$
CREATE TRIGGER `tg_employee_insert` BEFORE INSERT ON `EmployeeApplication` FOR EACH ROW BEGIN
  INSERT INTO Employee_seq VALUES (NULL);
  SET NEW.id = CONCAT('APP', LPAD(LAST_INSERT_ID(), 6, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Employee_seq`
--

CREATE TABLE `Employee_seq` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `FoodReceipt`
--

CREATE TABLE `FoodReceipt` (
  `receiptID` varchar(10) NOT NULL,
  `foodID` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `FoodReceiptRecord`
--

CREATE TABLE `FoodReceiptRecord` (
  `receiptID` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `roomID` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `branchID` varchar(5) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Food_seq`
--

CREATE TABLE `Food_seq` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `InHouseAppAccount`
--

CREATE TABLE `InHouseAppAccount` (
  `id` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `foodID` varchar(10) NOT NULL,
  `foodName` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Promotion`
--

CREATE TABLE `Promotion` (
  `promocode` varchar(10) NOT NULL,
  `discount` float NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Room`
--

CREATE TABLE `Room` (
  `roomID` varchar(5) NOT NULL,
  `branchID` varchar(5) NOT NULL,
  `roomType` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
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
-- Indexes for table `AdditionalServiceReceipt`
--
ALTER TABLE `AdditionalServiceReceipt`
  ADD PRIMARY KEY (`receiptID`,`serviceID`),
  ADD KEY `serviceID` (`serviceID`);

--
-- Indexes for table `AdditionalServiceReceiptRecord`
--
ALTER TABLE `AdditionalServiceReceiptRecord`
  ADD PRIMARY KEY (`receiptID`),
  ADD KEY `roomID` (`roomID`),
  ADD KEY `branchID` (`branchID`);

--
-- Indexes for table `Additional_seq`
--
ALTER TABLE `Additional_seq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Booking_Detail`
--
ALTER TABLE `Booking_Detail`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `citizenID` (`citizenID`),
  ADD KEY `branchID` (`branchID`),
  ADD KEY `promocode` (`promocode`);

--
-- Indexes for table `booking_id_seq`
--
ALTER TABLE `booking_id_seq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Branch`
--
ALTER TABLE `Branch`
  ADD PRIMARY KEY (`branchID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`citizenID`);

--
-- Indexes for table `CustomerReview`
--
ALTER TABLE `CustomerReview`
  ADD PRIMARY KEY (`citizenID`,`date`),
  ADD KEY `branchID` (`branchID`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`staffID`),
  ADD KEY `branchID` (`branchID`);

--
-- Indexes for table `EmployeeApplication`
--
ALTER TABLE `EmployeeApplication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branchID` (`branchID`);

--
-- Indexes for table `Employee_seq`
--
ALTER TABLE `Employee_seq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `FoodReceipt`
--
ALTER TABLE `FoodReceipt`
  ADD PRIMARY KEY (`receiptID`,`foodID`),
  ADD KEY `foodID` (`foodID`);

--
-- Indexes for table `FoodReceiptRecord`
--
ALTER TABLE `FoodReceiptRecord`
  ADD PRIMARY KEY (`receiptID`,`roomID`,`branchID`),
  ADD KEY `roomID` (`roomID`),
  ADD KEY `branchID` (`branchID`);

--
-- Indexes for table `Food_seq`
--
ALTER TABLE `Food_seq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Furniture`
--
ALTER TABLE `Furniture`
  ADD PRIMARY KEY (`roomType`);

--
-- Indexes for table `InHouseAppAccount`
--
ALTER TABLE `InHouseAppAccount`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Additional_seq`
--
ALTER TABLE `Additional_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_id_seq`
--
ALTER TABLE `booking_id_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Employee_seq`
--
ALTER TABLE `Employee_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Food_seq`
--
ALTER TABLE `Food_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AdditionalService`
--
ALTER TABLE `AdditionalService`
  ADD CONSTRAINT `AdditionalService_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `Employee` (`staffID`);

--
-- Constraints for table `AdditionalServiceReceipt`
--
ALTER TABLE `AdditionalServiceReceipt`
  ADD CONSTRAINT `AdditionalServiceReceipt_ibfk_1` FOREIGN KEY (`serviceID`) REFERENCES `AdditionalService` (`serviceID`),
  ADD CONSTRAINT `AdditionalServiceReceipt_ibfk_2` FOREIGN KEY (`receiptID`) REFERENCES `AdditionalServiceReceiptRecord` (`receiptID`),
  ADD CONSTRAINT `AdditionalServiceReceipt_ibfk_3` FOREIGN KEY (`receiptID`) REFERENCES `AdditionalServiceReceiptRecord` (`receiptID`);

--
-- Constraints for table `AdditionalServiceReceiptRecord`
--
ALTER TABLE `AdditionalServiceReceiptRecord`
  ADD CONSTRAINT `AdditionalServiceReceiptRecord_ibfk_1` FOREIGN KEY (`roomID`) REFERENCES `Room` (`roomID`),
  ADD CONSTRAINT `AdditionalServiceReceiptRecord_ibfk_3` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`);

--
-- Constraints for table `Booking_Detail`
--
ALTER TABLE `Booking_Detail`
  ADD CONSTRAINT `Booking_Detail_ibfk_1` FOREIGN KEY (`citizenID`) REFERENCES `Customer` (`citizenID`),
  ADD CONSTRAINT `Booking_Detail_ibfk_2` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`),
  ADD CONSTRAINT `Booking_Detail_ibfk_3` FOREIGN KEY (`promocode`) REFERENCES `Promotion` (`promocode`);

--
-- Constraints for table `CustomerReview`
--
ALTER TABLE `CustomerReview`
  ADD CONSTRAINT `CustomerReview_ibfk_1` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`);

--
-- Constraints for table `Employee`
--
ALTER TABLE `Employee`
  ADD CONSTRAINT `Employee_ibfk_1` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`);

--
-- Constraints for table `EmployeeApplication`
--
ALTER TABLE `EmployeeApplication`
  ADD CONSTRAINT `EmployeeApplication_ibfk_1` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`);

--
-- Constraints for table `FoodReceipt`
--
ALTER TABLE `FoodReceipt`
  ADD CONSTRAINT `FoodReceipt_ibfk_1` FOREIGN KEY (`foodID`) REFERENCES `Menu` (`foodID`),
  ADD CONSTRAINT `FoodReceipt_ibfk_2` FOREIGN KEY (`receiptID`) REFERENCES `FoodReceiptRecord` (`receiptID`);

--
-- Constraints for table `FoodReceiptRecord`
--
ALTER TABLE `FoodReceiptRecord`
  ADD CONSTRAINT `FoodReceiptRecord_ibfk_2` FOREIGN KEY (`roomID`) REFERENCES `Room` (`roomID`),
  ADD CONSTRAINT `FoodReceiptRecord_ibfk_3` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`);

--
-- Constraints for table `InHouseAppAccount`
--
ALTER TABLE `InHouseAppAccount`
  ADD CONSTRAINT `InHouseAppAccount_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Employee` (`staffID`) ON DELETE CASCADE;

--
-- Constraints for table `Room`
--
ALTER TABLE `Room`
  ADD CONSTRAINT `Room_ibfk_1` FOREIGN KEY (`roomType`) REFERENCES `Furniture` (`roomType`),
  ADD CONSTRAINT `Room_ibfk_2` FOREIGN KEY (`branchID`) REFERENCES `Branch` (`branchID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
