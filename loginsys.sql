-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2019 at 07:08 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `itcode` int(11) NOT NULL,
  `dept` char(5) NOT NULL,
  `quan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`itcode`, `dept`, `quan`) VALUES
(1, 'D', 4),
(1, 'E', 2),
(34, 'N', 5),
(34, 'S', 3),
(35, 'D', 2),
(35, 'E', 4),
(103, 'A', 4),
(103, 'b', 2),
(103, 'Vigil', 1),
(206, 'D', 11),
(206, 'E', 15),
(206, 'F', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE `item_list` (
  `item_code` int(11) NOT NULL,
  `generic_code` varchar(5) NOT NULL,
  `brand` text NOT NULL,
  `type` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`item_code`, `generic_code`, `brand`, `type`, `quantity`, `price`) VALUES
(1, 'f', 'h', 'y', 5, 4),
(34, 'erewr', 'rwer', 'werew', 457, 455),
(35, 'gt', 'gffg', 'njhy', 14, 34),
(77, 'r', 'f', 'b', 56, 65),
(101, 'A', 'Tata', 'Regular', 100, 50),
(102, 'B', 'Mahindra', 'X', 20, 5),
(103, 'D', 'Tesla', 'NJ', -3, 45),
(104, 'h', 'NEXA', 'huj', 300, 8),
(105, 'h', 'HIJ', 'BHI', 68, 6),
(123, 'sdsds', 'asdsd', 'as', 113, 1213),
(206, 'g', 'g', 'g', 8, 5),
(456, 'dvvv', 'hp', 'sdsdf', 12, 121313),
(564, 'df', 'hgdv', 'thjn', 45, 6),
(978, 'hvihb', 'hjvhj', 'jvjv', 68, 86),
(5666, 'ffh', 'dfdf', 'whbg', 34, 5);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `name`, `email`, `password`) VALUES
('123', '123', '123@gmail.com', '123'),
('bhavani', 'bhavani', 'v@gmail.com', 'were'),
('kop', 'kop', 'kop@gmail.com', 'kop'),
('ncl123', 'ncl', 'ncl@gmail.com', 'ncl123'),
('Neha123', 'Neha', 'nehasharma987204@gmail.com', '1234'),
('papa', 'papa123', 'papa@gmail.com', 'papa'),
('paras', 'Neha', 'nehasharma486889@gmail.com', '123'),
('puspendra1', 'puspendra verma', 'pusp@gmail.com', '12345'),
('STP', 'STP', 'stp@gmail.com', 'stp'),
('xyz', 'xyz', 'xyz@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`itcode`,`dept`);

--
-- Indexes for table `item_list`
--
ALTER TABLE `item_list`
  ADD PRIMARY KEY (`item_code`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
