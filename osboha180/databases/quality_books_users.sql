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
-- Table structure for table `quality_books_users`
--

CREATE TABLE `quality_books_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thesis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `accepted_reviews` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quality_books_users`
--

INSERT INTO `quality_books_users` (`id`, `name`, `pages`, `thesis`, `accepted_reviews`) VALUES
(105, 'Noor Omar', '18', '3', 3),
(108, 'سيليا', '68', '1', 0),
(110, 'Rami', '30', '7', 1),
(114, 'sami2', '', '', 0),
(115, 'Noor Omar', '', '', 0),
(116, 'Noor Omar', '', '', 0),
(118, 'عايدة محمد', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quality_books_users`
--
ALTER TABLE `quality_books_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quality_books_users`
--
ALTER TABLE `quality_books_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
