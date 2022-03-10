-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2022 at 11:45 AM
-- Server version: 10.3.34-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daveecok_exshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `opportunities`
--

CREATE TABLE `opportunities` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `opens` varchar(255) NOT NULL,
  `closes` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `audience` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opportunities`
--

INSERT INTO `opportunities` (`id`, `title`, `type`, `opens`, `closes`, `region`, `qualifications`, `audience`) VALUES
(1, 'Rise', 'scholarship', 'october', 'january', 'world wide', '14-17yrs, creative, leadership, project', 'GEN'),
(4, 'Stamps', 'scholarship', 'August', 'December', 'world wide', 'Cleared highschool, partner schools, SAT scores', 'GEN'),
(5, 'Microsoft.leap', 'Job', '', '', 'Kenya, Nigeria', 'Programming skills', 'COMPUTER'),
(6, 'Rhodes', 'scholarship', '', '', '', 'Postgraduate, GPA 3.75', 'GEN'),
(7, 'Solved MIT', 'Funds', 'open', 'open', 'World wide', 'innovative technological ideas, under 24', 'COMPUTER'),
(8, 'Study in Africa', 'scholarship', 'November', 'December', 'Kenya, Uganda, Ghana', '', 'GEN'),
(9, 'Study in India', 'scholarship', '', '', '', '', 'GEN'),
(10, 'UWC', 'scholarship', '', '', '', '', 'GEN'),
(11, 'ALU', 'scholarship', '', '', '', '', 'GEN'),
(12, 'UCT', 'scholarship', '', '', '', '', 'GEN'),
(13, 'MORINGA', 'scholarship', '', '', '', '', 'CAPENTRY'),
(14, 'ALA', 'scholarship', '', '', '', '', 'GEN'),
(15, 'Tesla', 'scholarship', '', '', '', '', 'ENGINEERING'),
(16, 'Fullbright', 'scholarship', '', '', '', '', 'COMMERCE'),
(18, 'Equity', 'scholarship', '', '', '', '', 'GEN'),
(19, 'Palmhouse', 'scholarship', '', '', '', '', 'FIRST AID'),
(20, 'Hopeworld', 'scholarship', '', '', '', '', 'LAW');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skillset1` varchar(255) NOT NULL,
  `skillset2` varchar(255) NOT NULL,
  `skillset3` varchar(255) NOT NULL,
  `skillset4` varchar(255) NOT NULL,
  `skillset5` varchar(255) NOT NULL,
  `skillset6` varchar(255) NOT NULL,
  `skillset7` varchar(255) NOT NULL,
  `skillset8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `email`, `skillset1`, `skillset2`, `skillset3`, `skillset4`, `skillset5`, `skillset6`, `skillset7`, `skillset8`) VALUES
(4, 'pascal123juma@gmail.com', '', '', '', 'computer', '', '', '', ''),
(5, 'Davies.langatt@gmail.com', 'photography', '', '', '', '', '', 'musical', 'influential'),
(6, 'jumaluseno01@gmail.com', '', '', '', '', 'biligual', 'biligual', 'musical', ''),
(7, 'felistersm02@gmail.com', '', '', '', 'computer', '', '', '', 'influential');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `education_level` varchar(255) NOT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `course` varchar(255) NOT NULL,
  `skills` longtext DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `date_joined` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `dp_name` varchar(255) NOT NULL,
  `dp_check` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `gender`, `education_level`, `dob`, `course`, `skills`, `password`, `date_joined`, `status`, `dp_name`, `dp_check`) VALUES
(2, 'Davies KIPRONO', 'Davies.langatt@gmail.com', '2147483647', 'MALE', 'POSTGRADUATE', '2020-05-06', 'PLUMBING', 'AM KIPRONO DAVIES.\r\nCOMPUTER SCIENTIST.\r\nSEKU UNIVERSITY', 'admin', '02-03-2022 22:45:31', 1, 'moni.png', 1),
(3, 'pascal juma', 'pascal123juma@gmail.com', '+254743229542', 'MALE', 'UNDER GRADUATE', '1999-09-22', 'COMPUTER', 'Computer scientist', 'Luseno.', '03-03-2022 07:25:27', 1, '', 0),
(4, 'Felisters Mukhekhe', 'felistersm02@gmail.com', '4459423786', 'FEMALE', 'DIPLOMA', '2000-02-10', 'HEALTH', '  ', 'Belinasi', '03-03-2022 16:22:02', 1, '', 0),
(5, 'juma', 'jumaluseno01@gmail.com', '011539420', 'MALE', 'POSTGRADUATE', '1999-09-22', 'LAW', 'Lawyer', '12345', '04-03-2022 12:36:12', 1, 'kv.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
