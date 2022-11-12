-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 07:42 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19it535`
--

-- --------------------------------------------------------

--
-- Table structure for table `carlist`
--

CREATE TABLE `carlist` (
  `id` int(250) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `Condition` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carlist`
--

INSERT INTO `carlist` (`id`, `Brand`, `Model`, `image`, `price`, `Condition`, `description`) VALUES
(1, 'Susuki', 'Wagon-R', 'w.png', 'LKR 4,250,000.00', 'Registered', 'call - 07X-XXXXXXX'),
(2, 'Honda', 'Civic-2020', 'c.png', 'LKR 7,250,000.00', 'Unregistered', 'call for more details - 07X-XXXXXXX'),
(3, 'Toyota', 'CH-R', 'ch.png', 'LKR 8,780,000.00', 'Brand new', 'call for more details - 07X XXXXXXX'),
(4, 'BMW', 'i8', 'b.png', 'LKR 17,500,000.00', 'Brand new', 'call for more details - 07X XXXXXXX'),
(5, 'Toyota', 'Land Cruiser Diesel', 'l.png', 'LKR 39,000,000.00', 'Registered', 'call for more details - 07X XXXXXXX'),
(6, 'MINI(BMW)', 'Mini Cooper', 'm.png', 'LKR 4,000,000.00', 'Registered', 'call - 07X XXXXXXX'),
(7, 'Mersedes Benz', 'C300', 'mb.png', 'LKR 13,400,000.00', 'Registered', 'CALL - 07XXXXXXXX'),
(8, 'Toyota', 'Axio', 'a.png', 'LKR 67,000,000.00', 'Brand new', 'call for more details - 07XXXXXXXX'),
(9, 'Toyota', 'Prius', 'p.png', 'LKR 56,000,000.00', 'Registered', 'call - 07X XXXXXXX'),
(11, 'Mitsubhishi', 'Eclipse Cross', 'ec.png', 'LKR 15,000,000.00', 'Unregistered', 'CALL for more details - 07XXXXXXXX');

-- --------------------------------------------------------

--
-- Table structure for table `regmember`
--

CREATE TABLE `regmember` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `repassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regmember`
--

INSERT INTO `regmember` (`firstname`, `lastname`, `nic`, `city`, `email`, `password`, `repassword`) VALUES
('ravindu', 'Umanayanga', '32425436v', 'elpitiya', 'ra@gmail.com', '1234', '1234'),
('rr', 'uu', '4372623v', 'dsf', 'ww@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carlist`
--
ALTER TABLE `carlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regmember`
--
ALTER TABLE `regmember`
  ADD PRIMARY KEY (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carlist`
--
ALTER TABLE `carlist`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
