-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 08:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaxcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `slno` int(10) NOT NULL,
  `author` varchar(50) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL,
  `statuses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`slno`, `author`, `heading`, `content`, `statuses`) VALUES
(26, 'angelo', 'helloworld', 'ghjkfituyretdy', 'active'),
(27, 'angelo', 'helloworld', 'ghjkfituyretdy', 'active'),
(28, 'r2t4wfw', 'd3frfef', 'bhfgufgfuhffe', 'active'),
(29, 'r2t4wfw', 'd3frfef', 'bhfgufgfuhffe', 'active'),
(30, 'df', 't4ttr', 'rrhuwijwj', 'active'),
(31, 'sdcf', 'hafafj', 'egeheregeyhwwo;eteolidhgrgienoiwgrye', 'active'),
(32, 'mvf', 'mfjg;w', 'sgigwjhtwtj', 'active'),
(33, 'mvf', '', 'sgigwjhtwtj', 'active'),
(34, 'mvf', '', 'sgigwjhtwtj', 'active'),
(35, 'angelo', 'jbvhjk', ' jhvcgjkb', 'active'),
(36, 'angelo', 'jbvhjk', ' jhvcgjkb', 'active'),
(37, 'ghj', 'ndftuo', 'jhjhgfjjkjlik', 'active'),
(38, 'angelo', '', '', 'active'),
(39, 'angelo', 'helloworld', 'adhhjafJ', 'active'),
(40, 'xc', 'dtyijdqdqd', ' qdbqhdqdqigdgd', 'active'),
(41, 'r2t4wfw', 'fygfudhuqd', ', bdfqsqsqdgqid', 'active'),
(42, 'angelo', 'rgg4g3t', '4grgrgrgrgrgrgrgrgrgr', 'active'),
(43, 'angelo', 'xzvbvCKcDfsvaa', 'AGXYYggdcvbxjvbafgeutgdvfgbikfwifviydugyaytgbegnggutytttbyhieb\n', 'active'),
(44, 'angelo', 'xzvbvCKcDfsvaa', 'AGXYYggdcvbxjvbafgeutgdvfgbikfwifviydugyaytgbegnggutytttbyhieb\n', 'active'),
(45, 'hafis', 'gtwfgj', 'crftwfur', 'active'),
(46, 'df', 'bgrhajf', ' vhsgfwufgwufgwfgsj', 'active'),
(47, 'uhutgh', 'jsghksfjw', 'kvgsfhkfhkm', 'active'),
(48, 'df', '3t3t33', '3nt2httgt', 'active'),
(49, 'angelo', 'jjkhghj', 'ghuftgfgefhwek', 'active'),
(50, 'jfwnfkqe', 'nwjfnjegkerj', 'wfgufhqfqwek', 'active'),
(51, ' wnfwfkw', 'ffhwkjfhwej', 'nhwrhwrhwekjr', 'active'),
(52, ' wnfwfkw', 'ffhwkjfhwej', 'nhwrhwrhwekjr', 'active'),
(53, 'hfdghdghj', 'bhjgkw', 'hjgfgsjfghjf', 'active'),
(54, 'angelo', 'helloworld', 'hello this is angelo', 'active'),
(55, 'farz', 'hello', 'wrtqyusiopdg', 'active'),
(56, 'farz', ' 1hdwfhd', 'csbyegihfkbciurguuey', 'active'),
(57, 'angelo', ' dxbabd', 'dxnjhjjhwqjh', 'active'),
(58, ' czvbvj', 'eughhrflsk', 'vkfjhsv', 'active'),
(59, 'egrgkjfn', 'rffhrfhfh', 'dwfdwuege', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
