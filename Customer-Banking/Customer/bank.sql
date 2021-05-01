-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 06:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `customerCode` int(11) NOT NULL,
  `sharesBalance` int(11) NOT NULL,
  `ordinaryDeposite` int(11) NOT NULL,
  `specialDeposite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`customerCode`, `sharesBalance`, `ordinaryDeposite`, `specialDeposite`) VALUES
(100001, 0, 0, 0),
(100001, 0, 0, 0),
(100001, 0, 0, 0),
(100001, 0, 0, 0),
(100001, 0, 0, 0),
(100001, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `AccountId` int(10) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `telephone` bigint(11) NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`AccountId`, `firstName`, `lastName`, `age`, `dob`, `telephone`, `gender`) VALUES
(100001, 'wayne', 'brown', 0, '0000-00-00', 1111111111, ''),
(100002, 'wayne', 'brown', 0, '0000-00-00', 1111111111, '');

-- --------------------------------------------------------

--
-- Table structure for table `customermailing`
--

CREATE TABLE `customermailing` (
  `customerCode` int(11) NOT NULL,
  `streetName` varchar(30) NOT NULL,
  `community` varchar(30) NOT NULL,
  `parish` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customermailing`
--

INSERT INTO `customermailing` (`customerCode`, `streetName`, `community`, `parish`, `country`) VALUES
(100001, 'tes', 'pppp', 'west', 'Jamaican'),
(100001, 'tes', 'pppp', 'west', 'Jamaican'),
(100001, 'tes', 'pppp', 'west', 'Jamaican'),
(100001, 'tes', 'pppp', 'west', 'Jamaican'),
(100001, 'tes', 'pppp', 'west', 'Jamaican'),
(100001, 'tes', 'pppp', 'west', 'Jamaican');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `workerCode` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loanId` int(11) NOT NULL,
  `loanAmount` double NOT NULL,
  `loanStartdate` double NOT NULL,
  `loanDuedate` date NOT NULL,
  `accountNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loanId`, `loanAmount`, `loanStartdate`, `loanDuedate`, `accountNumber`) VALUES
(0, 0, 0, '0000-00-00', 100001),
(0, 0, 0, '0000-00-00', 100001),
(0, 0, 0, '0000-00-00', 100001),
(0, 0, 0, '0000-00-00', 100001),
(0, 0, 0, '0000-00-00', 100001),
(0, 0, 0, '0000-00-00', 100001);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `customerCode` int(11) NOT NULL,
  `deposite` float NOT NULL,
  `withdraw` float NOT NULL,
  `date` datetime NOT NULL,
  `accountNumber` int(11) NOT NULL,
  `transCode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `customerCode` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `attempts` int(11) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`customerCode`, `userName`, `password`, `attempts`, `userType`, `email`) VALUES
(100001, 'kopiooo', '1234', 3, 'customer', 'dwayneaitken111@gmail.com'),
(100002, 'kopioooll', '1234', 3, 'customer', 'dwayneaitken1111@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
