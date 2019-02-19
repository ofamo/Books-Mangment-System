-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 02:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quality_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_review`
--

CREATE TABLE IF NOT EXISTS `add_review` (
`id` int(11) NOT NULL,
  `ReferenceOpinion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_book` int(11) NOT NULL,
  `id_reference` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_review`
--

INSERT INTO `add_review` (`id`, `ReferenceOpinion`, `id_book`, `id_reference`) VALUES
(2, 'try try', 0, 0),
(35, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjllllllllllllllllllllllllllllllodfs;e;;;;;;;;;;;;;;;;;;;;;;;;;;;;;', 1, 1),
(36, '$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book[''note'']$book', 2, 1),
(37, '$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_id$refe_i$refe_id$refe_id$refe_id$', 2, 0),
(38, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 2, 0),
(39, '$data[''ReferenceOpinion'']$data[''ReferenceOpinion'']$data[''ReferenceOpinion'']$data[''ReferenceOpinion'']$data[''ReferenceOpinion'']$data[''ReferenceOpinion'']$data[''ReferenceOpinion'']$data[''ReferenceOpinion'']', 2, 0),
(40, 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 2, 0),
(41, 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 2, 0),
(42, '$this->db->select(''No, BookName, BookCategory, AboutBook, Link ,PublishingHouse, ReferencesI,ReferencesII,ReferenceOpinion'');$this->db->select(''No, BookName, BookCategory, AboutBook, Link ,PublishingH', 2, 0),
(43, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 2, 0),
(44, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 2, 0),
(45, '$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note$note', 2, 0),
(46, 'skdfshfsyudfaskfdjfasgoudrfm,dsiosdklfjsfjdsifseifksmnfsdjfdslfmdskjfhdsjfhdsjhfdskjfsdklfksdkfhsldsdjfnsdkfjsdufd,fjsdfjs;f\r\nlawhfsdfnjdfsl;dldfjfsfksdkfdsflksdlfklsdfldskjfkdsjfkdsjflsdfsdkfesidfmcd', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Password` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Password`) VALUES
(1, 'omar', '123456'),
(2, 'nour', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE IF NOT EXISTS `book_categories` (
  `id` int(11) NOT NULL,
  `BookCategory` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`id`, `BookCategory`) VALUES
(1, 'تاريخي'),
(2, 'اجتماعي');

-- --------------------------------------------------------

--
-- Table structure for table `book_delete`
--

CREATE TABLE IF NOT EXISTS `book_delete` (
  `No` int(11) NOT NULL,
  `BookName` varchar(50) DEFAULT NULL,
  `BookCategory` int(11) DEFAULT NULL,
  `AboutBook` varchar(500) DEFAULT NULL,
  `PublishingHouse` varchar(50) DEFAULT NULL,
  `Link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cp_admin`
--

CREATE TABLE IF NOT EXISTS `cp_admin` (
  `No` int(11) NOT NULL,
  `BookName` varchar(50) DEFAULT NULL,
  `BookCategory` varchar(50) DEFAULT NULL,
  `AboutBook` varchar(500) DEFAULT NULL,
  `PublishingHouse` varchar(50) DEFAULT NULL,
  `Link` varchar(100) DEFAULT NULL,
  `ReferencesI` varchar(50) DEFAULT NULL,
  `ReferencesII` varchar(50) DEFAULT NULL,
  `ReferenceOpinion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cp_admin`
--

INSERT INTO `cp_admin` (`No`, `BookName`, `BookCategory`, `AboutBook`, `PublishingHouse`, `Link`, `ReferencesI`, `ReferencesII`, `ReferenceOpinion`) VALUES
(1, 'نظرية الفستق', '1', 'AboutBook', 'PublishingHouse', 'Link', 'salwa', 'ali', NULL),
(2, 'من أنت؟', '2', 'AboutBook', 'درا النشر', 'Link', 'salwa', 'salwa', NULL),
(3, 'صور من حياة الصحابة', '2', 'AboutBook3', 'PublishingHouse3', 'Link3', 'ali', 'rami', NULL),
(4, 'صور من حياة التابعين', '1', 'AboutBook4', 'PublishingHouse4', NULL, 'raghd', 'ali', NULL),
(5, 'قصة التتار', '1', 'AboutBook', 'PublishingHouse	', 'Link', NULL, NULL, NULL),
(6, 'قصة التتار', '1', 'AboutBook', 'PublishingHouse	', 'Link', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cumulative`
--

CREATE TABLE IF NOT EXISTS `cumulative` (
  `id` int(11) NOT NULL,
  `pages` int(11) NOT NULL,
  `thesis` int(11) NOT NULL,
  `accepted_reviews` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cumulative`
--

INSERT INTO `cumulative` (`id`, `pages`, `thesis`, `accepted_reviews`, `name`) VALUES
(105, 18, 3, 3, 'Noor Omar'),
(108, 6, 1, 0, 'سيليا'),
(108, 68, 1, 0, 'سيليا');

-- --------------------------------------------------------

--
-- Table structure for table `quality_books_users`
--

CREATE TABLE IF NOT EXISTS `quality_books_users` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thesis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `accepted_reviews` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE IF NOT EXISTS `references` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `Name`, `Password`) VALUES
(1, 'salwa', '12345678'),
(2, 'ali', '12345678'),
(3, 'rami', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `review_books`
--

CREATE TABLE IF NOT EXISTS `review_books` (
`id` int(11) NOT NULL,
  `book_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_book` text COLLATE utf8_unicode_ci NOT NULL,
  `dar_al_nasher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `review_books`
--

INSERT INTO `review_books` (`id`, `book_name`, `book_category`, `about_book`, `dar_al_nasher`, `book_link`) VALUES
(1, 'كتاب الدولة العثمانية (عوامل النهوض وأسباب السقوط)', 'تاريخ', 'هذا الكتاب جزء من سلسلة ( صفحات من التاريخ الإسلامي ) صدرت للكاتب وهو - كما يُستدل من عنوانه - يتحدث عن الدولة العثمانية ، ويعطي صورة واضحة عن الأتراك ، ودخولهم للإسلام وأعمالهم المجيدة ، وبعض التراجم لشخصيات تركية صهرها القرآن الكريم وساهمت في بناء الحضارة الإسلامي . ويبيّن للقارئ : أن النهوض العثماني كان شاملاً في كافة المجالات : العلميّـة والسياسية والاقتصادية والإعلامية والحربية ، ويوضح حقيقة الدولة العثمانية والأسس التي قامت عليها والأعمال الجلية التي قدّمتها لأمة . ومن أهداف الكاتب العديدة في وضع كتابه القيمّ هذا: ترشيد الأجيال لمعرفة حقيقة العثمانيين بعد أن شنّ اليهود والنصارى والعلمانيين حرباً لا هوادة فيها بأقلامهم المسمومة على تاريخهم المشرق .', 'دار الشام', 'http://www.osboha180.com/evaluation/users/numdownload/150/150b.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_review`
--
ALTER TABLE `add_review`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_categories`
--
ALTER TABLE `book_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_delete`
--
ALTER TABLE `book_delete`
 ADD PRIMARY KEY (`No`);

--
-- Indexes for table `cp_admin`
--
ALTER TABLE `cp_admin`
 ADD PRIMARY KEY (`No`);

--
-- Indexes for table `quality_books_users`
--
ALTER TABLE `quality_books_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_books`
--
ALTER TABLE `review_books`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_review`
--
ALTER TABLE `add_review`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `quality_books_users`
--
ALTER TABLE `quality_books_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `review_books`
--
ALTER TABLE `review_books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
