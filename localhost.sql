-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 13, 2019 at 05:22 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secure_db`
--
CREATE DATABASE IF NOT EXISTS `secure_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `secure_db`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `source` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `switch_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `switch_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `switch_3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `switch_4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `temperature` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_key` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`source`, `destination`, `time`, `group_id`, `switch_1`, `switch_2`, `switch_3`, `switch_4`, `fan`, `temperature`, `last_key`) VALUES
('447817814149', '447817814149', '12/01/2019 17:53:24', '18-3110-AN', 'off', 'off', 'off', 'off', 'fwd', '32', '7'),
('447817814149', '447817814149', '12/01/2019 17:53:44', '18-3110-AN', 'on', 'off', 'on', 'off', 'fwd', '35', '7'),
('447817814149', '447817814149', '12/01/2019 18:13:00', '18-3110-AN', 'off', 'off', 'off', 'off', 'fwd', '32', '3'),
('447817814149', '447817814149', '12/01/2019 19:42:49', '18-3110-AN', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `session_var_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `session_value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `session_var_name`, `session_value`) VALUES
('gm58n8je4jpmkth8r662g3lq46', 'user_name', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `session_id` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `name`, `surname`, `session_id`) VALUES
(69, 'admin', '$2y$12$u9z76q05mF6yzjwnIN1HteGgwY8okJb2pg0nPz4D3lv8X1dZHxrCq', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
