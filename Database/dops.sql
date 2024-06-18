-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 12:21 PM
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
-- Database: `dops`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `a_password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_password`) VALUES
(101, 'Meet Dodiya', '47450');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(24, 'Dops 2', 100, '1710658841.jpg', 1),
(25, 'Dops 3', 100, '1710688598.jpg', 1),
(26, 'Dops', 150, '1710657770.jpg', 1),
(27, 'Dops 2fhgfhgfhgfhg', 100, '1710658841.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `method` varchar(50) DEFAULT NULL,
  `flat` varchar(50) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  `country` varchar(15) DEFAULT NULL,
  `pin_code` varchar(20) DEFAULT NULL,
  `total_products` varchar(20) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(19, 'njew', '+4685', 'mee@gamil.com', 'credit cart', '654', '654', 'sdg', 'esf', 'sdf', '654', 'Dops 2 (1), Dops 3 (', 350.00),
(20, 'ded', '123456789', 'qwertyu@gmail.com', 'credit cart', 'wertyuio', 'sdfghjkl', 'ertyui', 'bn', 'rtyui', '45453', 'Dops 2 (1), Dops 3 (', 450.00);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `owner` varchar(30) NOT NULL,
  `card_number` varchar(12) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `cvv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`owner`, `card_number`, `month`, `year`, `cvv`) VALUES
('Meet Dodiya', '111122223333', 'jav', '2004', '0123'),
('Abc', '123', 'Jan', '2011', '456'),
('Akshar Rathod', '111122223333', 'Mar', '2011', '789'),
('Akshar Rathod', '111122223333', 'Mar', '2011', '789'),
('Akshar Rathod', '111122223333', 'Mar', '2011', '789'),
('Akshar Rathod', '111122223333', 'Mar', '2011', '789'),
('xsd', '123', 'Mar', '2014', '124'),
('xsd', '123', 'Mar', '2014', '124'),
('xsd', '123', 'Mar', '2014', '124'),
('xsd', '123', 'Mar', '2014', '124'),
('xsd', '123', 'Mar', '2014', '124'),
('owner', '789789789', 'Oct', '2011', '123'),
('owner', '789789789', 'Jan', '2011', '456'),
('uruyr', '6545432487', 'Mar', '2013', '545'),
('credit', '100', 'Select...', 'Select...', '454'),
('54', '51', 'Select...', 'Select...', '21'),
('dfgh', '456', 'Select...', 'Select...', '745'),
('sjdn', '67845', 'Select...', 'Select...', '842'),
('987', '8789', 'Jun', '2014', '864'),
('dfg', 'dfg', 'Feb', '2014', '58547'),
('Meet Dodiya', '998877665544', 'Feb', '2023', '859'),
('Meet Dodiya', '998877665544', 'Feb', '2023', '859'),
('gf', '6485', 'Select...', 'Select...', '845'),
('ug', '95589', 'Select...', 'Select...', '455');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(4) NOT NULL,
  `pro_name` varchar(250) NOT NULL,
  `cost` int(5) NOT NULL,
  `pro_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `cost`, `pro_image`) VALUES
(2, 'Dops 2fhgfhgfhgfhg', 100, '1710658841.jpg'),
(3, 'Dops 3', 100, '1710688598.jpg'),
(4, 'sfdgfdgh', 123, '1713258786.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_no` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Phone_no`, `Password`) VALUES
(1, 'meet dodiya', 'meetdodiya123@gmail.com', '9313347450', '47450');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `EMAIL` (`Email`),
  ADD UNIQUE KEY `EMAIL_2` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
