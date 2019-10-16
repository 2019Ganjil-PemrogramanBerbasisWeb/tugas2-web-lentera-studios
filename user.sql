-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 07:32 AM
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
