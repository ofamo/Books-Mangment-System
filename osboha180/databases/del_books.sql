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
-- Table structure for table `del_books`
--

CREATE TABLE `del_books` (
  `id` int(11) NOT NULL,
  `NameBook` varchar(50) DEFAULT NULL,
  `idClassBook` varchar(50) DEFAULT NULL,
  `AboutTheBook` varchar(50) DEFAULT NULL,
  `NamePH` varchar(50) DEFAULT NULL,
  `LinkBook` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `del_books`
--

INSERT INTO `del_books` (`id`, `NameBook`, `idClassBook`, `AboutTheBook`, `NamePH`, `LinkBook`) VALUES
(1, 'ÇáãÄãä ÇáÕÇÏÞ', '4', 'íÊÚÇãá åÐÇ ÇáßÊÇÈ ãÚ ÎÕÇÆÕ ÊÔÊÑß ÝíåÇ ßá ÇáÍÑßÇÊ Ç', 'ÏÇÑ ÇáäÔÑ', 'http://www.osboha180.com/evaluation/books/60b.pdf'),
(2, 'ÚíÔ ÇááÍÙÉ', '3', 'ÍíÇÊäÇ ãÇ åí ÅáÇ ãÌãæÚÉ ãä ÇááÍÙÇÊ¡ ÊÛíÑ ÝíäÇ íæãÇ', 'ÏÇÑ ÇáäÔÑ', 'http://www.bookleaks.com/files/fhrst4/344.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `del_books`
--
ALTER TABLE `del_books`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
