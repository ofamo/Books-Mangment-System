-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 03:56 PM
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
-- Table structure for table `sugg_books`
--

CREATE TABLE `sugg_books` (
  `id` int(11) NOT NULL,
  `NameBook` varchar(50) DEFAULT NULL,
  `idClassBook` varchar(50) DEFAULT NULL,
  `AboutTheBook` varchar(250) DEFAULT NULL,
  `NamePH` varchar(50) DEFAULT NULL,
  `LinkBook` varchar(50) DEFAULT NULL,
  `review1` varchar(50) DEFAULT NULL,
  `review2` varchar(50) DEFAULT NULL,
  `dreviews` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sugg_books`
--

INSERT INTO `sugg_books` (`id`, `NameBook`, `idClassBook`, `AboutTheBook`, `NamePH`, `LinkBook`, `review1`, `review2`, `dreviews`) VALUES
(3, 'ÃäÇ æÃÎæÇÊåÇ', '3', 'íÍÊæí ÇáßÊÇÈ Úáì ( 48 ) ãÞÇáÇ äÔÑÊ ÈÚÖåÇ Ýí ãæÇÞÚ æÕÍÝ ÇáßÊÑæäíÉ áßä Êã ÊÚÏíá ÈÚÖåÇ ÝíãÇ íÊäÇÓÈ ãÚ ÇáÇÍÏÇË æÇáæÞÊ ÇáÍÇáí ßá ãÞÇá ßÇä íÔÏ ÇßËÑ ãä ÇáÇÎÑ .. ÇãÇ ÇááÇÓáæÈ ÝßÇä ÓáÓðÇ ããÊÚÇ ÞÑíÈðÇ ãä ÇáäÝÓ .. ÊØÑÞ Çáì ÇáÚÏíÏ ãä ÇáãæÇÖíÚ ÇáÊí áã ÊäÇÞÔ ãä ÞÈ', 'ÏÇÑ ÇáäÔÑ', 'http://www.bookleaks.com/files/ketab/ketab2/700.pd', 'Úáí ÓÚÏ', 'ÂíÇ ãÍãÏ', ''),
(4, 'äÙÑíÉ  ÇáÝÓÊÞ', '3', 'ßÊÇÈ ãÈÓØ ÌÏÇð ¡ ÌãÚ ÇáÚÏíÏ ãä ãæÇÖíÚ ÊØæíÑ ÇáÐÇÊ æ ÇáÈÑãÌÉ ÇááÛæíÉ ÇáÚÕÈíÉ æÇáæÚí æÇáÓáæß ÇáÅäÓÇäí¡ æ ÓíÊÑß ááÞÇÑÆ ÇáãÌÇá ááÈÍË æÇáÊÛáÛá Ýí ßá ãæÖæÚ Úáì ÍÏÇ . ÇáßÊÇÈ íÔãá ÇáÚÏíÏ ãä ÇáÇÝßÇÑ ÇáÓáÓÉ æ ÇáÈÓíØå æ Ðáß ÈÓÑÏ ÇáÞÕÕ ææÖÚ ÇáÊãÇÑíä æÇÚØÇÁ äãÇÐÌ', 'ÏÇÑ ÇáäÔÑ', 'https://www.ebooksstream.com/pdfs/kutub-pdf.com_kI', NULL, NULL, ''),
(5, 'ãÞÏãÉ ÇÈä ÎáÏæä', '4', 'ÇáãÞÏãÉ åæ ßÊÇÈ ÃáÝå ÇÈä ÎáÏæä ÓäÉ 1377ã ßãÞÏãÉ áãÄáÝå ÇáÖÎã ÇáãæÓæã ßÊÇÈ ÇáÚÈÑ (ÇáÇÓã ÇáßÇãá ááßÊÇÈ åæ ßÊÇÈ ÇáÚÈÑ¡ æÏíæÇä ÇáãÈÊÏÃ æÇáÎÈÑ Ýí ÃíÇã ÇáÚÑÈ æÇáÚÌã æÇáÈÑÈÑ¡ æãä ÚÇÕÑåã ãä Ðæí ÇáÓáØÇä ÇáÃßÈÑ). æÞÏ ÇÚÊÈÑÊ ÇáãÞÏãÉ áÇÍÞÇð ãÄáÝÇð ãäÝÕáÇ Ðí ØÇÈÚ', 'ÏÇÑ ÇáäÔÑ', 'http://ia801801.us.archive.org/7/items/WAQ80921/01', NULL, NULL, ''),
(6, 'ÞÕÉ ÇáÇäÏáÓ ãä ÇáÝÊÍ Çáì ÇáÓÞæØ', '4', 'íÚÊÈÑ ÊÇÑíÎ ÇáÃäÏáÓ ãä Ãåã ÇáÝÊÑÇÊ Ýí ÇáÊÇÑíÎ ÇáÅÓáÇãíº ÍíË Íßóãó ÇáãõÓáöãæä ÇáÃäÏáÓ ÃßËÑ ãä ËãÇäíÉ ÞÑæäò¡ ÇÒÏåóÑó ÝíåÇ ÇáãõÓáöãæä ÇÒÏöåÇÑðÇ ßÈíÑðÇ¡ æÊÞÏøóãæÇ Ýí ÌãíÚ ãäÇÍöí ÇáÍíÇÉ ÊÞÏøõãðÇ ÃÐåáó ÇáÚÇáã ßáøóå¡ æÍÞøóÞæÇ ÇäÊöÕÇÑÇÊ ßËíÑÉ Úáì ÃÚÏÇÆöåã¡ Í', 'ÏÇÑ ÇáäÔÑ', 'https://archive.org/download/waq116393/116393.pdf', NULL, NULL, ''),
(7, 'ãáåãæä', '3', 'Åä ÇáäÌÇÍ áíÓ ÚØíÉ ÊÚØì¡ æáÇ ãäÊÌÇð íÔÊÑì¡ æáÇ ÅÑËÇð íæÑË¡ Èá åæ äÊÇÌ Úãá ÌÈÇÑ æÓåÑ ÈÇááíá æÇáäåÇÑ¡ æÊÏÑíÈ æÅÕÑÇÑ¡ æÊÌÇæÒ ááÚÞÈÇÊ¡ ÍÊì Êã ÊÍÞíÞå ÈÚÏ ÊæÝíÞ Çááå.\r\næåÇ ÃäÇ ÞÏ æÖÚÊ áß Ýí åÐÇ ÇáßÊÇÈ ÇáÚÏíÏ ãä ÇáÞÕÕ ÇáãáåãÉ ÇáÊí ÃÊãäì Ãä ÊÒíÏ ãä ÊÝÇÄáß æÅ', 'ÏÇÑ ÇáäÔÑ', 'http://www.bookleaks.com/files/ketab/ketab2/659.pd', NULL, NULL, ''),
(8, 'ÇáåÒíãÉ', '3', 'Åä ÇáÅäßÓÇÑ åæ ÇáÑÖÇ ÈÇáÅäßÓÇÑ æÃä ÇáåÒíãÉ åí Ãä ÊæÞÝäÇ ÇáåÒíãÉ ¡ Åä ÇáÓÞæØ åæ Ãä äÙá ÓÇÞØíä Åáì ÇáÃÈÏ Åä ÇáßÊÇÈÉ äÖÇá æÃßËÑ ÇáãÕÇÏÑ ÅÒÚÇÌÇð ááÙáã åæ Þáã ÍÑ íÃÈì Ãä íäßÓÑ Ãæ íáíä ¡ ÝÇáÍÑÝ áíÓÊ ãÌÑÏ ÊÓæíÏ ááÕÝÍÇÊ æÅäãÇ åí ÊÍÑíÑ ááÚÞæá æÅÒÚÇÌ ááÞäÇÚÇÊ ', 'ÏÇÑ ÇáäÔÑ', 'http://www.bookleaks.com/files/fhrst1/211.pdf', NULL, NULL, ''),
(9, 'áÇ ÊÍÒä', '2', 'íÊäÇæá ÇáßÊÇÈ ÇáÌÇäÈ ÇáãÃÓÇæí Ýí ÍíÇÉ ÇáÅäÓÇä¡ ÝíÍÇæá äÞáåÇ ãä Çáåã Åáì ÇáÓÑæÑ¡ æãä ÇáÔÄã Åáì ÇáÞäÇÚÉ. íÍÏË ÇáßÊÇÈ ÇáÞÇÑÆ ãÈÇÔÑÉ ÈÃÓáæÈ Óåá íÛáÈ Úáíå ÇáØÇÈÚ ÇáÏíäí¡ æÇÚÊãÏ ÇáßÇÊÈ Úáì ãÍÇßÇÉ ÇáÞÇÑÆ ÈÔßá ÓáÓ æãÄËÑ æÈÑÓÇÆá ÚÞáÇäíÉ¡ æäÕÇÆÍ ÍíÇÊíÉ¡ ßãÇ ÇÚ', 'ÏÇÑ ÇáäÔÑ', ' https://ia600302.us.archive.org/…/%D9%84%D8%A7%20', NULL, NULL, ''),
(10, 'Ýä ÇááÇãÈÇáÇÉ', '3', 'áÇ ÈÏ Ãä íãÑ ßá ãäÇ ÈÙÑæÝ æ ÃÒãÇÊ ÚÕíÈÉ Ýí ÍíÇÊå ¡ ÃãÇ ãÇ íÎÊáÝ ãä ÔÎÕ áÇÎÑ Ýåæ ÃÓáæÈ ÊÚÇãá ßá ãäÇ ãÚ åÐå ÇáÃÒãÇÊ Ãæ ãÇ íÚÑÝ ÈÑÏ ÇáÝÚá ¡ æ áÚá ÃÓæÁ ãÇ íãßä Ãä äÝÚáå Ýí æÞÊ ßåÐÇ åæ ÇáÎæÝ æ ÇáÊåÑÈ .\r\nåÐÇ ÇáßÊÇÈ íãäÍß ÇáÞÏÑÉ Úáì ÊÚÇãá ãÚ ÇáÃÒãÇÊ ÇáÚÕíÈÉ', 'ÏÇÑ ÇáäÔÑ', 'http://mybook4u.org/…/1UC7N6XYoRdFYqn2W0QlgMM535K', NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sugg_books`
--
ALTER TABLE `sugg_books`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
