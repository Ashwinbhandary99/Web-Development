-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 04:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `c_info`
--

CREATE TABLE `c_info` (
  `name` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `telephone_number` varchar(55) NOT NULL,
  `website` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_info`
--

INSERT INTO `c_info` (`name`, `address`, `telephone_number`, `website`) VALUES
('IBM', 'New Jersey', '+662527281', 'www.IBM.com');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Id` int(13) NOT NULL,
  `Emp_Type` varchar(14) NOT NULL,
  `Title` varchar(5) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `address` varchar(43) NOT NULL,
  `email` varchar(44) NOT NULL,
  `salary` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Id`, `Emp_Type`, `Title`, `fname`, `lname`, `address`, `email`, `salary`) VALUES
(23, 'Part Time', 'Mr', 'Sebastian', 'Rudy', 'Jakarta', 'Rudy1.seb@rocketmail.com', 123000),
(25, 'Full Time', 'Mr.', 'Marco ', 'Reus', 'Germay', 'Reus.Mar22@yahoo.com', 0),
(26, 'Part Time', 'Mr.', 'Eddie', 'Vedder', 'Seaatle', 'Edi3.Veddie@rocketmail.com', 123333),
(123, 'Full Time', 'Mr.', 'Zakk', 'Wylde', 'Weidlant', 'vood.jack@hotmail.com', 133322),
(1244, 'Full Time', 'Ms', 'Linda', 'Rosie', 'Phildelphia', 'Sonice@rocketmail.com', 13333),
(44, 'Part Time', 'Ms.', 'Nancy', 'Williams', 'Las Vegas', 'nandoman@yahoo.com', 133322),
(101, 'Full Time', 'Mr', 'Baba', 'Blacksheep', 'Barnyard', 'yard.121@gmail.com', 199922),
(102, 'Part Time', 'Mr', 'Paul', 'Maccartney', 'Los Angeles', 'mac.paul@gmail.com', 19922),
(103, 'Full Time', 'Ms', 'Ellie', 'Haze', 'South california', 'haze.ell@yahoo.com', 13342),
(104, 'Full Time', 'Mr', 'Yingwie', 'Malmsteen', 'Westminster', 'malmsteen.121@yahoo.com', 14422);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
