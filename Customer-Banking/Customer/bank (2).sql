-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 05:53 AM
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
  `ordinaryDeposit` int(11) NOT NULL,
  `specialDeposit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`customerCode`, `sharesBalance`, `ordinaryDeposit`, `specialDeposit`) VALUES
(100001, 0, 4812, 0),
(100001, 0, 4812, 0),
(100001, 0, 4812, 0),
(100001, 0, 4812, 0),
(100001, 0, 4812, 0),
(100001, 0, 4812, 0),
(100002, 20500, -9296, 29955),
(100002, 20500, -9296, 29955),
(100008, 0, 0, 0),
(100009, 0, 0, 0),
(100010, 0, 0, 0),
(100011, 0, 0, 0),
(100012, 0, 0, 0),
(100013, 0, 0, 0),
(100014, 0, 0, 0),
(100015, 0, 0, 0),
(100016, 0, 0, 0),
(100017, 0, 0, 0),
(100018, 0, 0, 0),
(100019, 0, 0, 0);

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
(100002, 'wayne', 'brown', 0, '0000-00-00', 1111111111, ''),
(100003, 'kkkkkk', 'lllllllllllllll', 0, '0000-00-00', 1234567891, 'male'),
(100004, 'kkkkkk', 'lllllllllllllll', 0, '0000-00-00', 1234567891, 'male'),
(100005, 'kkkkkk', 'lllllllllllllll', 0, '0000-00-00', 1234567891, 'male'),
(100006, 'kkkkkk', 'lllllllllllllll', 0, '0000-00-00', 1234567891, 'male'),
(100007, 'kkkkkk', 'lllllllllllllll', 0, '0000-00-00', 1234567891, 'male'),
(100008, 'kkkkkk', 'lllllllllllllll', 0, '0000-00-00', 1234567891, 'male'),
(100009, 'jo', 'wil', 0, '0000-00-00', 1234567891, 'male'),
(100010, 'jo', 'wil', 0, '0000-00-00', 1234567891, 'male'),
(100011, 'dog', 'do', 0, '0000-00-00', 1234567890, 'male'),
(100012, 'cat', 'cat', 0, '0000-00-00', 1234567890, 'male'),
(100013, 'tat', 'ta', 0, '0000-00-00', 1234567890, 'female'),
(100014, 'aa', 'aa', 0, '0000-00-00', 1234567890, 'male'),
(100015, 'last', 'last', 0, '0000-00-00', 1234567890, 'male'),
(100016, 'qq', 'qq', 0, '0000-00-00', 1234567890, 'male'),
(100017, 'kim', 'kim', 0, '0000-00-00', 1234567890, 'male'),
(100018, 'jjjj', 'lllllllllllllll', 0, '0000-00-00', 1234567891, 'male'),
(100019, 'kkkkkk', 'lllllllllllllll', 0, '0000-00-00', 1234567891, 'male');

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
(100001, 'tes', 'pppp', 'west', 'Jamaican'),
(100003, 'kkkkk', 'kookok', 'ppllpp', 'Jamaican'),
(100004, 'kkkkk', 'kookok', 'ppllpp', 'Jamaican'),
(100005, 'kkkkk', 'kookok', 'ppllpp', 'Jamaican'),
(100006, 'kkkkk', 'kookok', 'ppllpp', 'Jamaican'),
(100007, 'kkkkk', 'kookok', 'ppllpp', 'Jamaican'),
(100008, 'kkkkk', 'kookok', 'ppllpp', 'Jamaican'),
(100009, 'Sher', 'stony', 'st.andrew', 'Jamaican'),
(100010, 'Sher', 'stony', 'st.andrew', 'Jamaican'),
(100011, 'sd', 'www', 'sd', 'Jamaican'),
(100012, 'caa', 'ca', 'caa', 'Jamaican'),
(100013, 'ta', 'ta', 'ta', 'Jamaican'),
(100014, 'tes', 'kkk', 'west', 'Jamaican'),
(100015, 'ss', 'sf', 'sf', 'Jamaican'),
(100016, 'qq', 'qq', 'qq', 'Jamaican'),
(100017, 'kim', 'kim', 'kimk', 'Jamaican'),
(100018, 'eeee', 'kkkppp', 'west', 'Jamaican'),
(100019, 'lll', 'lll', '4444', 'Jamaican');

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
  `accountNumber` int(11) NOT NULL,
  `loanType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loanId`, `loanAmount`, `loanStartdate`, `loanDuedate`, `accountNumber`, `loanType`) VALUES
(0, 0, 0, '0000-00-00', 100001, ''),
(0, 0, 0, '0000-00-00', 100001, ''),
(0, 0, 0, '0000-00-00', 100008, ''),
(0, 0, 0, '0000-00-00', 100009, ''),
(0, 0, 0, '0000-00-00', 100010, ''),
(0, 0, 0, '0000-00-00', 100011, ''),
(0, 0, 0, '0000-00-00', 100012, ''),
(0, 0, 0, '0000-00-00', 100013, ''),
(0, 0, 0, '0000-00-00', 100014, ''),
(0, 0, 0, '0000-00-00', 100015, ''),
(0, 0, 0, '0000-00-00', 100016, ''),
(0, 0, 0, '0000-00-00', 100017, ''),
(0, 0, 0, '0000-00-00', 100018, ''),
(0, 0, 0, '0000-00-00', 100019, '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `customerCode` int(11) NOT NULL,
  `deposite` float NOT NULL,
  `withdraw` float NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`customerCode`, `deposite`, `withdraw`, `date`, `description`) VALUES
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 456, '2021-04-01 00:00:00', 'Transfer 456 to  kopi'),
(100001, 456, 0, '2021-04-01 00:00:00', 'Receive 456 to  kopi'),
(100002, 0, 2076, '2021-04-01 00:00:00', 'Transfer 2076 to  kopi'),
(100001, 2076, 0, '2021-04-01 00:00:00', 'Receive 2076 to  kopi'),
(100002, 0, 2076, '2021-04-01 00:00:00', 'Transfer 2076 to  kopi'),
(100001, 2076, 0, '2021-04-01 00:00:00', 'Receive 2076 to  kopi'),
(100002, 0, 2076, '2021-04-01 00:00:00', 'Transfer 2076 to  kopi'),
(100001, 2076, 0, '2021-04-01 00:00:00', 'Receive 2076 to  kopi'),
(100002, 0, 2076, '2021-04-01 00:00:00', 'Transfer 2076 to  kopi'),
(100001, 2076, 0, '2021-04-01 00:00:00', 'Receive 2076 to  kopi'),
(100002, 0, 2076, '2021-04-01 00:00:00', 'Transfer 2076 to  kopi'),
(100001, 2076, 0, '2021-04-01 00:00:00', 'Receive 2076 to  kopi'),
(100002, 0, 2076, '2021-04-01 00:00:00', 'Transfer 2076 to  kopi'),
(100001, 2076, 0, '2021-04-01 00:00:00', 'Receive 2076 to  kopi');

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
(100001, 'kopiooo', '1234', 0, 'customer', 'dwayneaitken111@gmail.com'),
(100002, 'kopioooll', '1234', 2, 'customer', 'dwayneaitken1111@gmail.com'),
(100003, 'kopipppp', '456', 3, 'customer', 'dwayneaitkekkn111@gmail.com'),
(100004, 'kopippppppp', '456', 3, 'customer', 'dwayneaitkekkn1p11@gmail.com'),
(100005, 'kopipppppppkk', '456', 3, 'customer', 'dwayneaitkekkkkn1p11@gmail.com'),
(100006, 'kopipppppppkkk', '456', 3, 'customer', 'dwayneaitkekkkknkkk1p11@gmail.com'),
(100007, 'kopipppp  pppkkk', '456', 3, 'customer', 'dwayneaitkekkklllknkkk1p11@gmail.com'),
(100008, 'kopippppmmmmmpppkkk', '456', 3, 'customer', 'dwayneaitkekkklllkkkknkkk1p11@gmail.com'),
(100009, 'Spirit', '1234', 3, 'customer', 'jxc@gmail.com'),
(100010, 'Spiriti', '1234', 3, 'customer', 'jxllc@gmail.com'),
(100011, 'dogg', '1234', 3, 'customer', 'dog@gmail.com'),
(100012, 'Shamory', '11111111111', 3, 'customer', 'cat@cat.com'),
(100013, 'taaa', '1234', 3, 'customer', 'ta@gmail.com'),
(100014, 'aaaa', '1234', 3, 'customer', 'aa@gmail.com'),
(100015, 'pussy', '1234', 3, 'customer', 'last@gmail.com'),
(100016, 'qq', '1234', 3, 'customer', 'qq@gmail.com'),
(100017, 'kim', '1234', 3, 'customer', 'kim@gmail.com'),
(100018, 'kopip', '789', 3, 'customer', 'dwayneaitkelllllln111@gmail.com'),
(100019, 'kopii', 'lol', 3, 'customer', 'dwayneaitmmmmmken111@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
