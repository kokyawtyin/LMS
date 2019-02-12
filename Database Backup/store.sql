-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2018 at 05:25 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `authorid` int(11) NOT NULL,
  `authorname` varchar(255) NOT NULL,
  `authorgroupId` int(5) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorid`, `authorname`, `authorgroupId`, `status`) VALUES
(1, 'ကထိကဦးစိန္လြင္ေလး', 1, 1),
(2, 'ကလ်ာ(ဝိဇၨာ/သိပၸံ)', 1, 1),
(3, 'ကေမၻာဇျမင့္လြင္', 1, 1),
(4, 'ကံခၽြန္', 1, 1),
(5, 'ကိတၱိမ', 1, 1),
(6, 'ေကာင္းထက္', 1, 0),
(7, 'ေကာင္းျမတ္မင္း', 1, 1),
(8, 'ေကာင္းျပည့္စံု', 1, 1),
(9, 'ေကာင္းဆက္ႏိုင္', 1, 1),
(10, 'ေကာင္းသန္႔', 1, 1),
(11, 'ေကာက္ႏြယ္ကေနာင္', 1, 1),
(12, 'ေကာင္းသာ', 1, 1),
(13, 'ကိုၾကီးေအာင္ခ်မ္းသာ', 1, 1),
(14, 'ကိုေကာင္း', 1, 1),
(15, 'ကိုခါး (ကြမ္းၿခံကုန္း)', 1, 1),
(16, 'ကိုကိုႀကီး', 1, 1),
(17, 'ကိုကိုလႈိင္', 1, 1),
(18, 'ကိုကိုေလး', 1, 1),
(19, 'ကိုျမင့္ထြန္း', 1, 1),
(20, 'ကိုမ်ဳိး (ျမန္မာစာ)', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `authorgroup`
--

CREATE TABLE `authorgroup` (
  `authorgroupId` int(5) NOT NULL,
  `authorgroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorgroup`
--

INSERT INTO `authorgroup` (`authorgroupId`, `authorgroup`) VALUES
(1, 'က'),
(2, 'ခ'),
(3, 'ဂ'),
(4, 'ဃ'),
(5, 'င'),
(6, 'စ'),
(7, 'ဆ'),
(8, 'ဇ'),
(9, 'စ်'),
(10, 'ည'),
(11, 'ဋ'),
(12, 'ဌ'),
(13, 'ဍ'),
(14, 'ဏ'),
(15, 'တ'),
(16, 'ထ'),
(17, 'ဒ'),
(18, 'ဓ'),
(19, 'န'),
(20, 'ပ'),
(21, 'ဖ'),
(22, 'ဘ'),
(23, 'ဗ'),
(24, 'မ'),
(25, 'ရ'),
(26, 'ယ'),
(27, 'လ'),
(28, 'ဝ'),
(29, 'သ'),
(30, 'ဟ'),
(31, 'ဠ'),
(32, 'အ');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `authorid` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `summary` text NOT NULL,
  `cover` text CHARACTER SET latin1 NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `authorid`, `category_id`, `summary`, `cover`, `created_date`, `modified_date`) VALUES
(1, 'နတ္သွ်င္ေနာင္ႏွင့္ဓါတုကလ်ာ', 1, 15, 'This book describes the internal algorithms and the structures that form the basis of the UNIX® operating system and their relationship to the programmer interface. The system description is based on UNIX System V Release 2 supported by AT&T, with some features from Release 3. ', 'unix.jpg', '2013-07-12 15:40:11', '2013-07-12 15:40:41'),
(2, 'လြမ္းဆြတ္ဖြယ္ ေဆာင္း', 2, 15, 'This book is a tutorial for the Scala programming language, written by people directly involved in the development of Scala. Our goal is that by reading this book, you can learn everything you need to be a productive Scala programmer. All examples in this book compile with Scala version 2.7.2.', 'scala.jpg', '2013-07-12 15:41:39', '2013-07-12 15:41:39'),
(3, 'ညိဳပြင့္', 2, 15, 'Perl is the ever-popular, flexible, open source programming language that has been called the programmers’ Swiss army knife. This book introduces Perl to both new programmers and experienced ones who are looking to learn a new language. In the tradition of the popular Wrox Beginning guides, it presents step-by-step guidance in getting started, a host of try-it-out exercises, real-world examples, and everything necessary for a Perl novice to start programming with confidence.', 'perl.jpg', '2013-07-12 15:43:28', '2013-07-12 15:43:28'),
(4, 'ခ်စ္ပန္းေဝ', 2, 15, 'A very well written introductory book with no fluf for the Ubuntu operating system. The book is rather dated though (Hasnt been updated since 2009) and new users may be confused with the changes such as the Unity interface that have gone into Ubuntu over the years. ', 'ubuntu.jpg', '2013-07-12 15:45:06', '2013-07-12 15:45:06'),
(5, 'ဘိုးဘြားသက္ရွည္', 3, 9, 'This book provides non-technical readers with a gentle introduction to essential concepts and activities of data science. For more technical readers, the book provides explanations and code for a range of interesting applications using the open source R language for statistical computing and graphics', 'data.jpg', '2013-07-12 15:45:42', '2013-07-12 15:45:42'),
(6, 'ဘီလ်ံနာ', 4, 2, 'A must read for any startup or grown-up company that wishes to keep its startup spirit and conquer the world with stunning UX Design.', 'ux.jpg', '2013-07-12 15:46:16', '2013-07-12 15:46:16'),
(7, 'မိစၦာေျမမွ႐ုကၡရာဇာ', 5, 14, '', 'unix.jpg', '2018-03-14 08:37:48', '2018-03-14 08:37:48'),
(8, 'စိတၱဇဝိညာဥ္', 5, 14, '', 'unix.jpg', '2018-03-14 08:38:58', '2018-03-14 08:38:58'),
(9, 'ျပည္သူခ်စ္တဲ့သူရဲေကာင္း က်န္စစ္သား', 6, 8, '', 'unix.jpg', '2018-03-14 08:40:10', '2018-03-14 08:40:10'),
(10, 'ေအာင္ဆန္းတို႔အဖိုး', 6, 8, '', 'unix.jpg', '2018-03-14 08:40:49', '2018-03-14 08:40:49'),
(11, 'ေတာင္ငူဘုရင္နတ္သွ်င္ေနာင္', 6, 8, '', 'unix.jpg', '2018-03-14 08:41:54', '2018-03-14 08:41:54'),
(12, 'ကၽြႏု္ပ္တန္ဖိုးထားတဲ့ ၿငိမ္းခ်မ္းေရး', 7, 9, '', 'unix.jpg', '2018-03-14 08:43:27', '2018-03-14 08:43:27'),
(13, 'ေလာကႀကီမွာရယ္စရာ', 7, 15, '', 'unix.jpg', '2018-03-14 08:44:52', '2018-03-14 09:17:18'),
(14, 'ျမန္မာ့လြပ္လပ္ေရးအတြက္တိုက္ပဲြဝင္ခဲ့သည့္ပုဂၢိဳလ္မ်ား', 8, 8, '', 'no-cover.gif', '2018-03-20 11:40:41', '2018-03-21 11:19:00'),
(15, 'အံ့ၾသလြန္လို႔ေသေတာ့မယ္ ၃', 9, 3, '', 'no-cover.gif', '2018-03-20 11:43:24', '2018-03-20 11:43:24'),
(16, 'အံ့ၾသလြန္းလို႔ေသေတာ့မယ္ ၂', 9, 3, '', 'no-cover.gif', '2018-03-21 11:10:15', '2018-03-21 11:10:15'),
(17, 'ေနာက္ေၾကာင္းျပန္ဝံ့ မျပန္ဝံ့ႏွင့္အေတြးအျမင္ေဆာင္းပါးမ်ား', 9, 22, '', 'no-cover.gif', '2018-03-21 11:12:02', '2018-03-21 11:15:10'),
(18, 'ေကာင္းတာ မေကာင္းတာ အက်ည္းတန္တာေတြ', 9, 22, '', 'no-cover.gif', '2018-03-21 11:12:52', '2018-03-21 11:14:52'),
(19, 'မြတ္စလင္အေမရိကန္ၾကားက အမုန္းတရား', 9, 22, '', 'no-cover.gif', '2018-03-21 11:14:22', '2018-03-21 11:15:19'),
(20, 'ကိုယ္ေဖာ္တဲ့ေဆးကိုယ္စားရဲမွေပါ့', 9, 22, '', 'no-cover.gif', '2018-03-21 11:16:45', '2018-03-21 11:16:45'),
(21, 'ေကာင္ေလးေကာင္မေလး', 10, 15, '', 'no-cover.gif', '2018-03-21 11:17:19', '2018-03-21 11:17:19'),
(22, '', 0, 0, '', '', '2018-03-30 14:27:01', '2018-03-30 14:27:01'),
(23, '', 0, 0, '', '', '2018-03-30 14:28:09', '2018-03-30 14:28:09'),
(24, 'အသိပညာ', 0, 0, '', '', '2018-04-03 10:10:23', '2018-04-03 10:10:23'),
(25, 'အသိပညာ', 0, 0, '', 'no-cover.gif', '2018-04-03 10:13:15', '2018-04-03 10:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_books`
--

CREATE TABLE `borrowed_books` (
  `brid` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrowed_books`
--

INSERT INTO `borrowed_books` (`brid`, `book_id`, `author_id`, `member_id`, `borrow_date`, `return_date`) VALUES
(1, 6, 4, 'TDA000002', '2018-03-26', '2018-03-29'),
(2, 6, 4, 'TDA000001', '2018-03-25', '2018-03-26'),
(3, 10, 6, 'TDA000002', '2018-03-25', '2018-03-27'),
(4, 21, 10, 'TDA000001', '2018-03-26', '2018-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `remark` text CHARACTER SET utf8mb4 NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `remark`, `created_date`, `modified_date`) VALUES
(1, 'စိုက္ပ်ဳိးေရးဆိုင္ရာ စာအုပ္မ်ား', '', '2013-06-22 08:19:41', '2013-06-22 08:19:41'),
(2, 'စီးပြားေရးဆိုင္ရာ စာအုပ္မ်ား', '', '2013-06-22 08:19:45', '2013-06-22 08:19:45'),
(3, 'ဟာသ စာအုပ္မ်ား', '', '2013-06-22 08:19:54', '2013-06-22 08:19:54'),
(4, 'ကာတြန္း စာအုပ္မ်ား', '', '2013-06-22 08:20:05', '2013-06-22 08:20:05'),
(5, 'စံုေထာက္ စာအုပ္မ်ား', '', '2018-03-09 14:50:00', '2018-03-09 14:50:00'),
(6, 'အဂၤလိပ္စာ စာအုပ္မ်ား', '', '2018-03-09 14:50:20', '2018-03-09 14:50:20'),
(7, 'က်န္းမာေရးဆိုင္ရာ စာအုပ္မ်ား', '', '2018-03-11 16:47:16', '2018-03-11 16:47:16'),
(8, 'သမိုင္းဆိုင္ရာ စာအုပ္မ်ား', '', '2018-03-11 16:48:07', '2018-03-11 16:48:07'),
(9, 'အေထြေထြဗဟုသုတ စာအုပ္မ်ား', '', '2018-03-11 16:48:45', '2018-03-11 16:48:45'),
(10, 'ဘာသာစကားဆိုင္ရာ စာအုပ္မ်ား', '', '2018-03-12 13:51:18', '2018-03-12 13:51:18'),
(11, 'မဂၢဇင္း စာအုပ္မ်ား', '', '2018-03-12 13:52:29', '2018-03-12 13:52:29'),
(12, 'သိုင္း စာအုပ္မ်ား', '', '2018-03-12 13:53:23', '2018-03-12 13:53:23'),
(13, 'ဂီတဆိုင္ရာ စာအုပ္မ်ား', '', '2018-03-12 13:54:18', '2018-03-12 13:54:18'),
(14, 'လွ်ဳိ႕ဝွက္ဆန္းၾကယ္ စာအုပ္မ်ား', '', '2018-03-12 13:54:45', '2018-03-12 13:54:45'),
(15, 'ဝတၳဳ စာအုပ္မ်ား', '', '2018-03-12 13:55:09', '2018-03-12 13:55:09'),
(16, 'အျခားေသာ စာအုပ္မ်ား', '', '2018-03-12 13:55:27', '2018-03-12 13:55:27'),
(17, 'ကဗ်ာ စာအုပ္မ်ား', '', '2018-03-12 13:55:39', '2018-03-12 13:55:39'),
(18, 'ဘာသာေရးဆိုင္ရာ စာအုပ္မ်ား', '', '2018-03-12 13:55:57', '2018-03-12 13:55:57'),
(19, 'နည္းပညာဆိုင္ရာ စာအုပ္မ်ား', '', '2018-03-12 13:58:22', '2018-03-12 13:58:22'),
(20, 'ဘာသာျပန္ စာအုပ္မ်ား', '', '2018-03-12 13:58:49', '2018-03-12 13:58:49'),
(21, 'ႏိုင္ငံေရးဆုိင္ရာ စာအုပ္မ်ား', '', '2018-03-21 11:13:36', '2018-03-21 11:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(11) NOT NULL,
  `eventname` varchar(250) NOT NULL,
  `eventdir` varchar(200) NOT NULL,
  `eventsdir` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `eventname`, `eventdir`, `eventsdir`, `status`) VALUES
(1, 'GL (1)', 'GL (1).jpg', 'GL (1).jpg', 1),
(2, 'GL (2)', 'GL (2).jpg', 'GL (2).jpg', 1),
(3, 'GL (3)', 'GL (3).jpg', 'GL (3).jpg', 1),
(4, 'GL (4)', 'GL (4).jpg', 'GL (4).jpg', 1),
(5, 'GL (5)', 'GL (5).jpg', 'GL (5).jpg', 1),
(6, 'GL (6)', 'GL (6).jpg', 'GL (6).jpg', 1),
(7, 'GL (7)', 'GL (7).jpg', 'GL (7).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mebid` int(11) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `mebename` varchar(200) NOT NULL,
  `mebmname` varchar(250) NOT NULL,
  `mempass` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `mebemail` varchar(255) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `mebstatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mebid`, `member_id`, `mebename`, `mebmname`, `mempass`, `phone`, `address`, `mebemail`, `photo`, `mebstatus`) VALUES
(1, 'TDA000001', 'Mg Soe Moe Aung', 'ေမာင္စိုးမိုးေအာင္', '11223344', '0', '', '', 'TDA000001.jpg', 1),
(2, 'TDA000002', 'Daw Ei Hnin Phyu', 'ေဒၚအိႏွင္းျဖဴ', '22334455', '09767442644', 'ရဲစခန္း၀င္း၊ သန္လ်င္။', 'Thirihninphyu13@gmail.com  ', 'TDA000002.jpg', 1),
(3, 'TDA000003', 'KoKyaw', '', '33445566', '', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorid`);

--
-- Indexes for table `authorgroup`
--
ALTER TABLE `authorgroup`
  ADD PRIMARY KEY (`authorgroupId`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD PRIMARY KEY (`brid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mebid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `authorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `authorgroup`
--
ALTER TABLE `authorgroup`
  MODIFY `authorgroupId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  MODIFY `brid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mebid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
