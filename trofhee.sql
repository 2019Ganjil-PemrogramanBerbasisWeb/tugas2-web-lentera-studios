-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 10:40 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trofhee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(16) NOT NULL,
  `name` varchar(144) NOT NULL,
  `email` varchar(144) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` varchar(16) NOT NULL,
  `name` varchar(144) NOT NULL,
  `email` varchar(144) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `balance` varchar(32) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `name`, `email`, `username`, `password`, `balance`) VALUES
('5ce3fc2c8cd5b', 'HMIT', 'hmit@its.ac.id', 'hmit', '202cb962ac59075b964b07152d234b70', '500000'),
('5ce3fc2c8cd5c', 'HMTC', 'hmtc@its.ac.id', 'hmtc', '202cb962ac59075b964b07152d234b70', '500000'),
('5ce3fc2c8cd5d', 'HMSI', 'hmsi@its.ac.id', 'hmsi', '202cb962ac59075b964b07152d234b70', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` varchar(16) NOT NULL,
  `user_id` varchar(32) NOT NULL,
  `bill` varchar(16) NOT NULL,
  `method` int(1) NOT NULL,
  `bill_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `user_id`, `bill`, `method`, `bill_date`, `status`) VALUES
('5ce5076c775a2', '1', '0', 1, '2019-05-22 15:25:24', 0),
('5ce4c917edd66', '1', '0', 1, '2019-05-22 10:59:22', 0),
('5ce4c8f2e2b6d', '1', '120000', 1, '2019-05-22 10:58:53', 0),
('5ce493d456542', '5ce493b65db01', '150000', 1, '2019-05-22 07:12:06', 0),
('5ce491f4231b6', '1', '50000', 1, '2019-05-22 07:04:10', 0),
('5ce4911e1b903', '1', '150000', 1, '2019-05-22 07:00:32', 0),
('5ce490d1c2944', '1', '0', 1, '2019-05-22 06:59:19', 0),
('5d28601984c3d', '1', '0', 1, '2019-07-12 17:25:34', 0),
('5d944146571a3', '5d944093b559c', '150000', 1, '2019-10-02 13:18:49', 0),
('5d944eed118fa', '5d6f56313dfd2', '150000', 1, '2019-10-02 14:17:21', 0),
('', '5d9d0ad635e4c', '', 1, '2019-10-14 14:24:47', 0),
('5da426f98a445', '5d9d0ad635e4c', '150000', 1, '2019-10-14 14:42:54', 0),
('5da6afbb5a6f9', '5da67f30dfc8a', '150000', 1, '2019-10-16 12:50:53', 0),
('5da6c66383dab', '5da6c6165178d', '50000', 1, '2019-10-16 14:28:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatID` varchar(16) NOT NULL,
  `fromID` varchar(16) NOT NULL,
  `toID` varchar(16) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `comp_id` varchar(16) NOT NULL,
  `author_id` varchar(16) NOT NULL,
  `name` varchar(144) NOT NULL,
  `img` varchar(144) NOT NULL,
  `category` varchar(64) NOT NULL,
  `com_cat` int(1) DEFAULT '1',
  `desc` varchar(3000) NOT NULL,
  `reg_start` datetime NOT NULL,
  `reg_end` datetime NOT NULL,
  `price` varchar(32) NOT NULL,
  `member` int(4) NOT NULL DEFAULT '0',
  `revenue` varchar(32) NOT NULL DEFAULT '0',
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `location` varchar(144) NOT NULL,
  `slot` varchar(4) NOT NULL,
  `booked_slot` varchar(4) NOT NULL,
  `sale_price` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`comp_id`, `author_id`, `name`, `img`, `category`, `com_cat`, `desc`, `reg_start`, `reg_end`, `price`, `member`, `revenue`, `start_time`, `end_time`, `location`, `slot`, `booked_slot`, `sale_price`) VALUES
('123', '5ce3fc2c8cd5c', 'National Logic Competition', '', 'Olimpiade', 1, 'olimpiade tentang logika', '2019-09-10 00:00:00', '2019-10-17 00:00:00', '150000', 14, '1466250', '2019-10-20 07:00:00', '2019-10-20 12:00:00', 'Informatika ITS', '1500', '720', '125000'),
('124', '5ce3fc2c8cd5c', 'National Programming Competition', '', 'Olimpiade', 1, 'olimpiade pemrograman', '2019-09-10 00:00:00', '2019-10-17 00:00:00', '50000', 12, '293750', '2019-10-20 07:00:00', '2019-10-20 12:00:00', 'Informatika ITS', '1000', '245', ''),
('125', '5ce3fc2c8cd5d', 'Bionix 2019', '', '1', 1, 'lomba olimpiade dan manajemen', '2019-05-22 00:00:00', '2019-05-31 00:00:00', '120000', 4, '351000', '2019-05-31 00:00:00', '2019-06-01 00:00:00', 'Sistem Informasi ITS', '2000', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `comp_participation`
--

CREATE TABLE `comp_participation` (
  `comPartID` varchar(16) NOT NULL,
  `comp_id` varchar(16) NOT NULL,
  `com_cat` int(1) NOT NULL DEFAULT '1',
  `user_id` varchar(16) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment` int(1) NOT NULL DEFAULT '0',
  `bill_id` varchar(16) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comp_participation`
--

INSERT INTO `comp_participation` (`comPartID`, `comp_id`, `com_cat`, `user_id`, `reg_date`, `payment`, `bill_id`) VALUES
('5ce4c8f2d3690', '125', 1, '1', '2019-05-22 10:58:42', 1, '5ce4c8f2e2b6d'),
('5ce491f2ac2ce', '124', 1, '1', '2019-05-22 07:04:02', 1, '5ce491f4231b6'),
('5ce493c7740e4', '123', 1, '5ce493b65db01', '2019-05-22 07:11:51', 1, '5ce493d456542'),
('5ce49118833c1', '123', 1, '1', '2019-05-22 07:00:24', 1, '5ce4911e1b903'),
('5d94413d58bd2', '123', 1, '5d944093b559c', '2019-10-02 13:18:37', 1, '5d944146571a3'),
('5d944ee11925f', '123', 1, '5d6f56313dfd2', '2019-10-02 14:16:49', 1, '5d944eed118fa'),
('5d9d58e6ae510', '124', 1, '5d9d0ad635e4c', '2019-10-09 10:49:58', 1, ''),
('5da423bd2d01a', '123', 1, '5d9d0ad635e4c', '2019-10-14 14:29:01', 1, '5da426f98a445'),
('5da655a6e13ef', '124', 1, '5da6543848aaa', '2019-10-16 06:26:30', 0, NULL),
('5da65a35eb19f', '123', 1, '5da6543848aaa', '2019-10-16 06:45:57', 0, NULL),
('5da67f52ee8fc', '123', 1, '5da67f30dfc8a', '2019-10-16 09:24:18', 1, '5da6afbb5a6f9'),
('5da6b8329ae0f', '123', 1, '5da6b812471c4', '2019-10-16 13:26:58', 0, NULL),
('5da6b8594079a', '125', 1, '5da6b812471c4', '2019-10-16 13:27:37', 0, NULL),
('5da6c65934ea8', '124', 1, '5da6c6165178d', '2019-10-16 14:27:21', 1, '5da6c66383dab');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` varchar(16) NOT NULL,
  `author_id` varchar(16) NOT NULL,
  `name` varchar(144) NOT NULL,
  `category` varchar(64) NOT NULL,
  `desc` varchar(3000) NOT NULL,
  `reg_start` datetime NOT NULL,
  `reg_end` datetime NOT NULL,
  `price` varchar(32) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `location` varchar(144) NOT NULL,
  `slot` varchar(4) NOT NULL,
  `booked_slot` varchar(4) NOT NULL,
  `sale_price` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_participation`
--

CREATE TABLE `event_participation` (
  `evePartID` varchar(16) NOT NULL,
  `event_id` varchar(16) NOT NULL,
  `user_id` varchar(16) NOT NULL,
  `reg_date` datetime NOT NULL,
  `payment` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageID` varchar(16) NOT NULL,
  `chatID` varchar(16) NOT NULL,
  `fromID` varchar(16) NOT NULL,
  `toID` varchar(16) NOT NULL,
  `chat_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `top_up`
--

CREATE TABLE `top_up` (
  `topUp_id` varchar(32) NOT NULL,
  `user_id` varchar(16) NOT NULL,
  `amount` varchar(12) NOT NULL,
  `datereg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(16) NOT NULL,
  `name` varchar(144) NOT NULL,
  `email` varchar(144) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `balance` varchar(12) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `username`, `password`, `balance`) VALUES
('5da6c6165178d', 'hanaaa', 'hana@gmail.com', 'hana', '3b7972d6e14381a8f234aaf14c813d2e', '450000'),
('5da6543848aaa', 'David Verrel', 'david_verl@gmail.com', 'david_verl', '2fbb601f601add579f46281fef9dc411', '200000'),
('5d9d0ad635e4c', 'Fikri Haykal', 'sdaw@jw.cin', 'cica', '727094ec64105ee2a801e0eb84b4e785', '1001235'),
('5d9d0a2e79fd2', 'Fikri Haykal', 'fhaykal@gmail.com', 'fikri', '727094ec64105ee2a801e0eb84b4e785', '0'),
('5da6b812471c4', 'Widyantari Febiyanti', 'widyantari@its.ac.id', 'widyantari', 'e10adc3949ba59abbe56e057f20f883e', '0'),
('5d96a663af3d9', 'Fikri Haykal', 'fhaykal24@gmail.com', 'fikrihaykal', '5a1fb25451280c13663b05269e187ac9', '0'),
('5da67f30dfc8a', 'Lakyah Irkif', 'ajshdsh@djsd.com', 'lakyah', '727094ec64105ee2a801e0eb84b4e785', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `author_id` (`author_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatID`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `comp_participation`
--
ALTER TABLE `comp_participation`
  ADD PRIMARY KEY (`comPartID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `top_up`
--
ALTER TABLE `top_up`
  ADD PRIMARY KEY (`topUp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
