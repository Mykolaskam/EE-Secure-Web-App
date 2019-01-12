-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 12, 2019 at 06:21 PM
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
('447817814149', '447817814149', '12/01/2019 17:53:24', '18-3110-AN', 'off', 'off', 'off', 'off', 'fwd', '32', 'Not Set'),
('447817814149', '447817814149', '12/01/2019 17:53:44', '18-3110-AN', 'on', 'off', 'on', 'off', 'fwd', '35', 'Not Set'),
('447817814149', '447817814149', '12/01/2019 18:13:00', '18-3110-AN', 'off', 'off', 'off', 'off', 'fwd', '32', 'Not Set');

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
('gm58n8je4jpmkth8r662g3lq46', 'user_name', 'mk'),
('gm58n8je4jpmkth8r662g3lq46', 'user_password', 'mk'),
('0rcq9jekualc4gp96358o5dnd1', 'user_name', 'mk'),
('0rcq9jekualc4gp96358o5dnd1', 'user_password', 'mk');

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
(25, 'mk', '$2y$12$0iMn6ceJrk4YXp4kRZm53u/llrMNrSkt3WJeXktDLE1WN7TMVo1Le', '', '', NULL),
(26, '', '', '', '', NULL),
(27, 'admin', '$2y$12$Tq2bKh69f6V5//7nOfwWBuGKrToDcYrcWH.nBBHzPjQ2CHvsARJjW', 'admin', 'admin', NULL),
(28, '', '', '', '', NULL),
(29, '', '', '', '', NULL),
(30, '', '', '', '', NULL),
(31, '', '', '', '', NULL),
(32, 'ss', '', '', '', NULL),
(33, '', '', '', '', NULL),
(34, '', '', '', '', NULL),
(35, '', '', '', '', NULL),
(36, '', '$2y$12$CZBKIzggbLzKdbdx.k7/.OD18w/mqWTZxvZgoMbkIwnudiZ1NUzRm', '', '', NULL),
(37, '', '', '', '', NULL),
(38, '', '', '', '', NULL),
(39, '', '', '', '', NULL),
(40, '', '', '', '', NULL),
(41, '', '$2y$12$eFs3mx6U3qfKlumGgkhGJu03scOY1rTH4lZm4lR4CClBOFJTkxJ4.', '', '', NULL),
(42, '', '', '', '', NULL),
(43, '', '', '', '', NULL),
(44, '', '', '', '', NULL),
(45, '', '', '', '', NULL),
(46, '', '', '', '', NULL),
(47, '', '', '', '', NULL),
(48, '', '', '', '', NULL),
(49, '', '', '', '', NULL),
(50, '', '', '', '', NULL),
(51, '', '', '', '', NULL),
(52, '', '', '', '', NULL),
(53, '', '', '', '', NULL),
(54, '', '', '', '', NULL),
(55, '', '', '', '', NULL),
(56, '', '', '', '', NULL),
(57, '', '', '', '', NULL),
(58, '', '', '', '', NULL),
(59, '', '', '', '', NULL),
(60, '', '', '', '', NULL),
(61, '', '', '', '', NULL),
(62, '', '', '', '', NULL);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
