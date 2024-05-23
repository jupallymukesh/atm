-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 05:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `account_no` bigint(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phno` varchar(13) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `login_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`account_no`, `name`, `phno`, `balance`, `login_id`) VALUES
(2191100006701, 'dasu', '123456789', 1000, 'test@123'),
(2191100006703, 'Jupally', '1234567890', 0, 'tet@123'),
(2191100006704, 'jupally mukesh', '486759321', 9300, 'pally'),
(2191100006705, 'JUPALLY MUKESH RAO', '8309864454', 1000, '21911A6732'),
(2191100006707, 'Yejjavarapu Venu', '7396134418', 6000, 'badey@123'),
(2191100006708, 'JUPALLY MANUDEEP RAO', '6303295635', 2116, 'manu@123'),
(2191100006709, 'Bandaru Karthik Kumar', '9391089170', 202000, '21911A6710'),
(2191100006711, 'dalla', '1234567894', 1000, 'sindhu_1');

-- --------------------------------------------------------

--
-- Table structure for table `account_login`
--

CREATE TABLE `account_login` (
  `login_id` varchar(15) NOT NULL,
  `pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_login`
--

INSERT INTO `account_login` (`login_id`, `pin`) VALUES
('21911A6710', 1111),
('21911A6732', 4454),
('badey@123', 73961),
('manu@123', 7757),
('pally', 9654),
('sindhu', 1234),
('sindhu_1', 1234),
('test@123', 4454),
('tet@123', 4454);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`account_no`),
  ADD UNIQUE KEY `phno` (`phno`),
  ADD UNIQUE KEY `loginid` (`login_id`);

--
-- Indexes for table `account_login`
--
ALTER TABLE `account_login`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `account_no` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2191100006712;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_details`
--
ALTER TABLE `account_details`
  ADD CONSTRAINT `account_details_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `account_login` (`login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
