-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 05:28 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `English` varchar(255) NOT NULL,
  `Math` varchar(255) NOT NULL,
  `Physics` varchar(255) NOT NULL,
  `History` varchar(255) NOT NULL,
  `Art` varchar(255) NOT NULL,
  `Highest` varchar(255) NOT NULL,
  `Lowest` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `Average` varchar(255) NOT NULL,
  `Grades` varchar(255) NOT NULL,
  `Rank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `Name`, `English`, `Math`, `Physics`, `History`, `Art`, `Highest`, `Lowest`, `Total`, `Average`, `Grades`, `Rank`) VALUES
(22001, 'Ireni', '61', '80', '65', '90', '68', '90', '61', '363', '73', 'C', '8'),
(22002, 'Joseph', '65', '60', '55', '40', '56', '65', '40', '276', '55', 'F', '10'),
(22003, 'Katrina', '74', '70', '50', '76', '50', '76', '50', '320', '64', 'F', '9'),
(22004, 'Joey', '78', '68', '80', '90', '88', '90', '68', '404', '81', 'B', '4'),
(22005, 'Lucy', '80', '70', '100', '86', '90', '100', '70', '426', '85', 'B', '2'),
(22006, 'Lucas', '76', '69', '66', '74', '97', '97', '66', '382', '76', 'C', '6'),
(22007, 'Mike', '100', '85', '63', '99', '75', '100', '63', '422', '84', 'B', '3'),
(22008, 'Jamie', '84', '75', '64', '61', '84', '75', '61', '379', '76', 'C', '7'),
(22009, 'Gilbert', '75', '70', '68', '99', '90', '99', '68', '402', '80', 'B', '5'),
(22010, 'Tori', '99', '87', '85', '91', '86', '99', '85', '448', '90', 'A', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22012;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
