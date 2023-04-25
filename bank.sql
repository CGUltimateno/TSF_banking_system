-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 05:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `sr_no` int(255) NOT NULL,
  `account_no` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`sr_no`, `account_no`, `name`, `email`, `current_balance`) VALUES
(1, 123421, 'Ahmed Mohamed', 'am12q@gmail.com', 36000),
(2, 123422, 'Omar Mahmoud', 'OmarMah123@gmail.com', 112000),
(3, 123423, 'Mona Mansour', 'Monaaa111@gmail.com', 32000),
(4, 123424, 'Mena Ahmed', 'MenaAhmed22@gmail.com', 10000),
(5, 123425, 'Romany Emad', 'Roooo18492@gmail.com', 56400),
(6, 123426, 'Mortada Mansour', 'Mortadamortada1232@gmail.com', 74230),
(7, 123427, 'Sarah Mahmoud', 'SarahMahmoud3214@gmail.com', 32700),
(8, 123427, 'Retag Samir', 'Ratogaa1235@gmail.com', 68600),
(9, 123428, 'Tarek Badr', 'Tarekbusiness1245@gmail.com', 200000),
(10, 123429, 'Amr Mohamed', 'Amramramr23526@gmail.com', 244000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sender` int(255) NOT NULL,
  `receiver` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `Dat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`, `Dat`) VALUES
(123421, 123423, 2000, 'succeed', '2023-04-17 21:34:44'),
(23, 1881, 292992, 'failed', '2023-04-17 21:36:13'),
(18272663, 282882828, 1929838, 'failed', '2023-04-17 21:36:44'),
(123421, 123422, 12000, 'succeed', '2023-04-25 17:38:06'),
(123421, 123424, 3000, 'failed', '2023-04-25 17:39:37'),
(123422, 123421, 12333, 'failed', '2023-04-25 17:39:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `sr_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
