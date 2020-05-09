-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 08:27 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insta`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(150) NOT NULL,
  `post_id` int(150) NOT NULL,
  `user_id` int(150) NOT NULL,
  `created` datetime NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `created`, `comments`) VALUES
(2, 22, 12, '2017-08-12 11:25:46', 'hello'),
(3, 22, 12, '2017-08-12 11:31:21', 'nice pic'),
(4, 21, 12, '2017-08-12 11:32:33', 'nice one'),
(5, 24, 21, '2017-08-13 09:48:20', 'awesome..!!'),
(6, 21, 32, '2017-08-15 08:44:49', 'g8t'),
(7, 20, 37, '2017-10-28 15:23:09', 'hi'),
(8, 21, 37, '2017-10-28 15:25:29', 'hi'),
(9, 20, 21, '2017-10-28 15:27:46', ''),
(10, 20, 21, '2017-10-28 15:27:59', 'hkjhkj');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(150) NOT NULL,
  `followers` varchar(255) NOT NULL,
  `following` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `followers`, `following`, `created`) VALUES
(10, '33', '32', '2017-08-24 10:37:47'),
(12, '33', '22', '2017-08-24 10:37:59'),
(13, '33', '31', '2017-08-24 10:38:05'),
(20, '12', '16', '2017-08-26 11:55:18'),
(21, '12', '17', '2017-08-26 11:55:27'),
(22, '12', '20', '2017-08-26 11:55:48'),
(25, '21', '20', '2017-10-21 20:24:10'),
(27, '37', '20', '2017-10-24 19:16:41'),
(28, '37', '21', '2017-10-28 15:24:32'),
(29, '39', '12', '2017-11-04 19:06:14'),
(30, '40', '20', '2017-11-25 18:54:48'),
(31, '41', '40', '2017-12-01 19:29:17'),
(32, '40', '41', '2017-12-01 19:30:17'),
(33, '42', '33', '2017-12-26 19:02:53'),
(34, '43', '42', '2018-01-03 11:27:25'),
(35, '33', '42', '2018-01-03 11:27:56'),
(36, '33', '43', '2018-01-03 11:28:03'),
(37, '21', '33', '2018-01-09 21:35:52'),
(38, '45', '33', '2018-02-05 09:38:33'),
(39, '33', '45', '2018-02-05 12:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(150) NOT NULL,
  `post_id` int(150) NOT NULL,
  `user_id` int(150) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`, `created`) VALUES
(3, 22, 12, '2017-08-12 11:45:12'),
(4, 20, 12, '2017-08-12 11:50:05'),
(5, 24, 31, '2017-08-12 12:43:38'),
(6, 24, 21, '2017-08-13 09:16:52'),
(7, 24, 12, '2017-08-14 13:36:30'),
(8, 23, 12, '2017-08-14 13:37:05'),
(9, 25, 32, '2017-08-15 08:43:28'),
(10, 24, 32, '2017-08-15 08:43:45'),
(11, 22, 32, '2017-08-15 08:44:13'),
(12, 21, 32, '2017-08-15 08:44:22'),
(13, 10, 32, '2017-08-15 08:45:23'),
(14, 21, 21, '2017-10-05 17:19:45'),
(15, 10, 21, '2017-10-05 17:21:33'),
(16, 9, 21, '2017-10-20 17:47:46'),
(17, 20, 21, '2017-10-21 20:26:25'),
(18, 29, 37, '2017-10-24 19:18:59'),
(19, 20, 37, '2017-10-24 19:26:01'),
(20, 30, 37, '2017-10-28 15:22:56'),
(21, 22, 39, '2017-11-04 19:07:17'),
(22, 31, 39, '2017-11-04 19:10:35'),
(23, 32, 40, '2017-12-01 19:30:29'),
(24, 33, 21, '2018-01-09 21:37:49'),
(26, 33, 33, '2018-02-03 21:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(150) NOT NULL,
  `user_id` int(15) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `banner`, `caption`, `created`) VALUES
(1, 0, 'upload1501140424.jpg', 'hello world', '2017-07-27 12:28:46'),
(2, 0, 'upload1501140424.jpg', 'hello world', '2017-07-27 12:36:53'),
(3, 0, 'upload1501140424.jpg', 'caption', '2017-07-27 12:37:57'),
(5, 0, 'upload1501140424.jpg', 'Family Picture', '2017-07-27 12:48:41'),
(6, 0, 'upload1501140424.jpg', 'family picture again and again', '2017-07-27 12:57:04'),
(7, 13, 'upload1501140638.jpg', 'aakhir kitni baar?', '2017-07-27 13:00:38'),
(9, 17, 'upload1502261295.jpg', 'stars', '2017-08-03 12:47:54'),
(10, 17, 'upload1501744897.jpg', 'again\r\n', '2017-08-03 12:51:37'),
(18, 8, 'upload1501748457.png', 'hello\r\n', '2017-08-03 13:50:57'),
(19, 11, 'upload1501829832.jpg', '# tag #picture 1', '2017-08-04 12:27:12'),
(20, 20, 'upload1502176578.jpg', 'dzfdzfgf', '2017-08-08 12:45:03'),
(22, 12, 'upload1502474999.JPG', '', '2017-08-11 23:37:47'),
(23, 31, '', '', '2017-08-12 12:42:18'),
(24, 31, 'upload1502521994.JPG', 'hello', '2017-08-12 12:43:14'),
(26, 35, 'upload1508852238.jpg', 'hello', '2017-10-24 19:07:17'),
(27, 35, 'upload1508852329.jpg', '', '2017-10-24 19:08:49'),
(30, 37, 'upload1509184166.jpg', 'hhh', '2017-10-28 15:19:26'),
(31, 39, 'upload1509802696.png', 'hi', '2017-11-04 19:08:16'),
(32, 41, 'upload1512136706.jpg', '', '2017-12-01 19:28:25'),
(34, 21, 'upload1515514353.JPG', '', '2018-01-09 21:42:33'),
(35, 33, 'upload1517813141.JPG', '', '2018-02-05 12:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `phone` bigint(150) NOT NULL,
  `full_name` text NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` enum('Female','Male') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`phone`, `full_name`, `user_name`, `password`, `id`, `photo`, `email`, `gender`) VALUES
(9034622475, 'komal Hello', 'komal@', 'abc', 12, 'photo1502435534.JPG', 'kkkk@gmail.com', 'Female'),
(1234, 'km', 'km', '', 16, 'WIN_20170310_15_09_12_Pro (2).jpg', '', 'Female'),
(9034622475, 'komal Mittu ', 'komal@475', '', 17, 'WIN_20170310_15_09_12_Pro (2).jpg', '', 'Female'),
(999, 'komal', 'ppp', '999', 20, 'India-SeaWorld_&_912f21b4-f81f-4234-804a-b857a900afbf.jpg', 'jjj', 'Male'),
(452, 'trox', 'trox', 'trox', 21, 'India-SeaWorld_&_912f21b4-f81f-4234-804a-b857a900afbf.jpg', '', 'Male'),
(444, 'km', 'km', 'k', 22, 'DSC03189.JPG', '', 'Female'),
(7206550475, 'Arjun ', 'arj._7', 'arjmittu', 33, 'DSC_0029_1.JPG', 'parthmittu@hotmail.com', 'Male'),
(9466687188, 'neeraj', 'neeraj', '12345678', 34, '', '', 'Female'),
(9034622475, 'komal Mittu', 'komal', '123456789', 35, '', '', 'Female'),
(9034622475, 'komal Mittu', 'komal', '123456789', 36, '', '', 'Female'),
(1111, 'kkkkytt', 'kkkk', 'kkkkkk', 37, 'photo1509028714.jpg', 'ghgkjhkj', 'Female'),
(1535565, 'hjhhi', 'yjhkhkl', 'jhjkhiki', 38, '', '', 'Female'),
(9354442424, 'sajal chauhan', 'chauhansajal7@gmail.com', '9354442424', 39, 'photo1509802795.JPG', '', 'Female'),
(123456789, 'meera', 'meera', '123456', 40, '', '', 'Female'),
(9812152538, 'am', 'am', '123456789', 41, '', '', 'Female'),
(7988202484, 'naman jain', 'naman@764', 'naman764', 42, '', '', 'Male'),
(9034423055, 'navan', 'nav.1', 'navan12345', 43, '', '', 'Female'),
(112233455, 'kkkkkkk', 'kkkkkkk', 'kkkkkkk', 44, '', '', 'Female'),
(9050561913, 'Rachit Ahuja', 'rachit123', 'rachit123', 45, 'India-SeaWorld_&_912f21b4-f81f-4234-804a-b857a900afbf.jpg', 'rachitahuja2011@gmail.com', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
