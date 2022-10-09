-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 08:21 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exploreindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `sno` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `Tour` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `nop` int(3) NOT NULL,
  `package` varchar(20) NOT NULL,
  `totalprice` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`sno`, `username`, `email`, `phonenumber`, `Tour`, `date`, `nop`, `package`, `totalprice`) VALUES
(56, 'Rishith', 'tilaksoorya25@gmail.com', '9876543219', 'North Indian Tour', '2021-07-29', 8, '15 days 14 Nights', '145000'),
(57, 'Tilak', 'tilaksoorya25@gmail.com', '8765432165', 'East Indian Tour', '2021-07-30', 8, '15 days 14 Nights', '145000'),
(58, 'Mithulesh', 'tilaksoorya25@gmail.com', '9876543218', 'North Indian Tour', '2021-07-04', 2147483647, '15 days 14 Nights', '1578221637'),
(61, 'Mukesh', 'tilaksoorya25@gmail.com', '8700148571', 'South Indian Tour', '2021-07-01', 3, '10 days 9 Nights', '37000'),
(62, 'Tilak', 'tilaksoorya25@gmail.com', '9876543219', 'East Indian Tour', '2021-08-05', 3, '10 days 9 Nights', '37000');

-- --------------------------------------------------------

--
-- Table structure for table `signup_details`
--

CREATE TABLE `signup_details` (
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_details`
--

INSERT INTO `signup_details` (`username`, `email`, `phonenumber`, `password`, `confirm`) VALUES
('Mukesh', 'muk@gmail.com', '8764534231', 'Mukesh', 'Mukesh'),
('Ramesh', 'gramesh@indiatvnews.com', '9999996821', 'tilaksoorya', 'tilaksoorya'),
('Tilak', 'tilaksoorya25@gmail.com', '9876543219', 'indiatour', 'indiatour');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `signup_details`
--
ALTER TABLE `signup_details`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
