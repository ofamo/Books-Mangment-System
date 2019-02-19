-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 03:57 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osboha180`
--

-- --------------------------------------------------------

--
-- Table structure for table `classbooks`
--

CREATE TABLE `classbooks` (
  `idClassBook` int(11) NOT NULL,
  `ClassBook` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classbooks`
--

INSERT INTO `classbooks` (`idClassBook`, `ClassBook`) VALUES
(1, 'Úáæã ÏíäíÉ'),
(2, 'ÇÌÊãÇÚí '),
(3, 'ÊäãíÉ ÈÔÑíÉ'),
(4, 'ÊäãíÉ ÈÔÑíÉ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classbooks`
--
ALTER TABLE `classbooks`
  ADD PRIMARY KEY (`idClassBook`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
