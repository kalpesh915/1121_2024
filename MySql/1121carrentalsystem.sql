-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 09:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1121carrentalsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingid` int(11) NOT NULL,
  `bookingdate` date NOT NULL,
  `carid` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `bookingfrom` varchar(100) NOT NULL,
  `bookingto` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `deposit` decimal(10,0) NOT NULL,
  `driverid` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingid`, `bookingdate`, `carid`, `startdate`, `enddate`, `bookingfrom`, `bookingto`, `userid`, `amount`, `deposit`, `driverid`, `status`) VALUES
(1, '2024-09-07', 1, '2024-09-09', '2024-09-14', 'Rajkot', 'Kerala', 2, 19000, 5000, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carid` int(11) NOT NULL,
  `carnumber` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `makingyear` varchar(20) NOT NULL,
  `seating` int(11) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `ac` tinyint(4) NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carid`, `carnumber`, `brand`, `model`, `makingyear`, `seating`, `fuel`, `ac`, `status`) VALUES
(1, 'GJ-03-AB-9876', 'Toyota', 'Innova', '2022', 7, 'Diesel', 1, 1),
(2, 'GJ-03-KP-1234', 'Hyundai', 'I-20', '2020', 5, 'Petrol', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driverid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `address` varchar(256) NOT NULL,
  `dateofbirth` date NOT NULL,
  `photo` varchar(256) NOT NULL,
  `drivinglicance` varchar(20) NOT NULL,
  `licancetype` varchar(20) NOT NULL,
  `licanceexpiredate` date NOT NULL,
  `adharnumber` varchar(20) NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driverid`, `fname`, `lname`, `email`, `phone`, `whatsapp`, `address`, `dateofbirth`, `photo`, `drivinglicance`, `licancetype`, `licanceexpiredate`, `adharnumber`, `status`) VALUES
(1, 'Sujal', 'Patel', 'sujal@gmail.com', '9998889990', '9990009990', 'Kalawad Road Rajkot', '2002-02-02', 'drivers/sujal1.jpg', '9990009990', 'Heavy', '2025-09-28', '99900099900', 1),
(2, 'Ankit', 'Ahuja', 'ankit@gmail.com', '998877665', '1122928298', 'raiya road', '2001-01-01', 'drivers/anikit.jpg', '89987897987', 'LVM', '2034-09-28', '8978977898', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fueling`
--

CREATE TABLE `fueling` (
  `fuleid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL,
  `fueldate` date NOT NULL,
  `driverid` int(11) NOT NULL,
  `fueltype` varchar(20) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fueling`
--

INSERT INTO `fueling` (`fuleid`, `carid`, `vendorid`, `fueldate`, `driverid`, `fueltype`, `quantity`, `rate`) VALUES
(1, 1, 1, '2024-09-01', 2, 'Diesel', 45.78, 94.34);

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insuranceid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL,
  `insurancetype` varchar(20) NOT NULL,
  `purchasedate` date NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `renewdate` date NOT NULL,
  `premium` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`insuranceid`, `carid`, `vendorid`, `insurancetype`, `purchasedate`, `startdate`, `enddate`, `renewdate`, `premium`) VALUES
(1, 1, 3, 'Full Insurance', '2024-09-01', '2024-09-05', '2025-09-05', '2025-09-01', 34568.00);

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `repairid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL,
  `driverid` int(11) NOT NULL,
  `repairstartdate` date NOT NULL,
  `repairenddate` date NOT NULL,
  `repaircost` decimal(10,2) NOT NULL,
  `repairnote` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `repairs`
--

INSERT INTO `repairs` (`repairid`, `carid`, `vendorid`, `driverid`, `repairstartdate`, `repairenddate`, `repaircost`, `repairnote`) VALUES
(1, 1, 2, 2, '2024-09-05', '2024-09-06', 1900.00, 'General Service');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewid` int(11) NOT NULL,
  `reviewdate` date NOT NULL,
  `userid` int(11) NOT NULL,
  `bookingid` int(11) NOT NULL,
  `message` varchar(512) NOT NULL,
  `ratting` tinyint(4) NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewid`, `reviewdate`, `userid`, `bookingid`, `message`, `ratting`, `status`) VALUES
(1, '2024-09-18', 2, 1, 'Nice Experience', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `address` varchar(256) NOT NULL,
  `dateofbirth` date NOT NULL,
  `photo` varchar(256) NOT NULL,
  `drivinglicance` varchar(20) NOT NULL,
  `adharnumber` varchar(20) NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `email`, `phone`, `whatsapp`, `address`, `dateofbirth`, `photo`, `drivinglicance`, `adharnumber`, `status`) VALUES
(1, 'Suman', 'Trivedi', 'suman@gmail.com', '9998889990', '9990009990', 'Sadhu vasvani road', '2002-02-02', 'users/user001.jpg', '9990009990', '99900099900', 1),
(2, 'Priya', 'Patel', 'priya@gmail.com', '9900990099', '1122928298', 'Amin Marg', '2001-01-01', 'users/useroo2.jpg', '89987897987', '8978977898', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendorid` int(11) NOT NULL,
  `vendername` varchar(50) NOT NULL,
  `supply` varchar(50) NOT NULL,
  `vendoraddress` varchar(128) NOT NULL,
  `vendorcity` varchar(20) NOT NULL,
  `vendorstate` varchar(20) NOT NULL,
  `vendorphone` varchar(20) NOT NULL,
  `vendoremail` varchar(128) NOT NULL,
  `venderwhatsapp` varchar(20) NOT NULL,
  `vendorstatus` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendorid`, `vendername`, `supply`, `vendoraddress`, `vendorcity`, `vendorstate`, `vendorphone`, `vendoremail`, `venderwhatsapp`, `vendorstatus`) VALUES
(1, 'Jalaram Fuels', 'Diesel, Petrol, OIL', 'Kalawad ROad', 'Rajkot', 'Gujarat', '809809823', 'jalaram@gmail.com', '9988998899', 1),
(2, 'Delux Spareparts', 'Auto Parts', 'Near Bus Stand', 'Rajkot', 'Gujarat', '809809823', 'delux@gmail.com', '9988998899', 1),
(3, 'ICICI Insurance', 'Insurance', 'Shastri Maidan', 'Rajkot', 'Gujarat', '897897987987', 'icici@gmail.com', '8998989898', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingid`),
  ADD KEY `fk_car_booking_carid` (`carid`),
  ADD KEY `fk_user_booking_userid` (`userid`),
  ADD KEY `fk_driver_booking_driverid` (`driverid`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carid`),
  ADD UNIQUE KEY `carnumber` (`carnumber`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driverid`);

--
-- Indexes for table `fueling`
--
ALTER TABLE `fueling`
  ADD PRIMARY KEY (`fuleid`),
  ADD KEY `fk_fuel_car_carid` (`carid`),
  ADD KEY `fk_fuel_vendor_vendorid` (`vendorid`),
  ADD KEY `fk_fuel_driver_driverid` (`driverid`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`insuranceid`),
  ADD KEY `fk_insurance_cars_carid` (`carid`),
  ADD KEY `fk_insurance_vendor_vendorid` (`vendorid`);

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`repairid`),
  ADD KEY `fk_repair_car_carid` (`carid`),
  ADD KEY `fk_repair_vendor_vendorid` (`vendorid`),
  ADD KEY `fk_repair_driver_driverid` (`driverid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `fk_user_review_userid` (`userid`),
  ADD KEY `fk_booking_review_bookingid` (`bookingid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driverid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fueling`
--
ALTER TABLE `fueling`
  MODIFY `fuleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `insuranceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `repairid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_car_booking_carid` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_driver_booking_driverid` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`),
  ADD CONSTRAINT `fk_user_booking_userid` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `fueling`
--
ALTER TABLE `fueling`
  ADD CONSTRAINT `fk_fuel_car_carid` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_fuel_driver_driverid` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`),
  ADD CONSTRAINT `fk_fuel_vendor_vendorid` FOREIGN KEY (`vendorid`) REFERENCES `vendors` (`vendorid`);

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `fk_insurance_cars_carid` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_insurance_vendor_vendorid` FOREIGN KEY (`vendorid`) REFERENCES `vendors` (`vendorid`);

--
-- Constraints for table `repairs`
--
ALTER TABLE `repairs`
  ADD CONSTRAINT `fk_repair_car_carid` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_repair_driver_driverid` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`),
  ADD CONSTRAINT `fk_repair_vendor_vendorid` FOREIGN KEY (`vendorid`) REFERENCES `vendors` (`vendorid`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_booking_review_bookingid` FOREIGN KEY (`bookingid`) REFERENCES `bookings` (`bookingid`),
  ADD CONSTRAINT `fk_user_review_userid` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
