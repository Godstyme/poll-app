-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2022 at 03:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pollapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `quetitle` text NOT NULL,
  `optiona` varchar(40) NOT NULL,
  `optionb` varchar(40) NOT NULL,
  `optionc` varchar(40) NOT NULL,
  `optiond` varchar(40) NOT NULL,
  `polllink` varchar(30) NOT NULL,
  `time` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quetitle`, `optiona`, `optionb`, `optionc`, `optiond`, `polllink`, `time`, `date`) VALUES
(1, 'bnd', 'jhhj', 'jhjh', 'jhjhk', 'io', 'bdb8e142a5b92f54', '18:43:33', '2022-07-24'),
(2, 'bnd', 'jhhj', 'jhjh', 'jhjhk', 'io', 'c675dab27b0bd8cf', '18:43:57', '2022-07-24'),
(3, 'hjik', 'op', 'po', 'mb', 'bn', 'e4d52b6fd7ac82b9', '18:44:10', '2022-07-24'),
(4, 'kk', 'vhfg', 'uiu', 'nvn', 'bbn', 'f1f95369fc20f454', '18:45:11', '2022-07-24'),
(5, 'how old are u?', '22', '23', '10', '18', 'fdc0548225762aaf', '20:03:56', '2022-07-24'),
(6, 'h', 'hg', 'jhjh', 'hjh', 'jk', 'a34e87c4179eece6', '20:05:08', '2022-07-24'),
(7, 'nmdfn', 'jhjh', 'jhjh', 'hhj', 'jh', '08c2228ca6e360e1', '20:08:21', '2022-07-24'),
(8, 'nsdjnh', 'jhhh', 'hgg', 'jkjk', 'jkj', 'aaae73bd6fd56818', '20:15:54', '2022-07-24'),
(9, 'bnh', 'hjhjjh', 'jhjhjh', 'hjjh', 'ioi', '7410a66e183924c7', '20:16:58', '2022-07-24'),
(10, 'nbdfj', 'jhhj', 'jhjh', 'yu', 'yu', 'ed9765ca38d57515', '20:20:24', '2022-07-24'),
(11, 'hdfuh', 'uu', 'uiu', 'ugug', 'jgh', '79489cc0e813d461', '20:32:32', '2022-07-24'),
(12, 'jejw', 'ioio', 'ioionm', 'n', 'nm', '143004e88ab5d244', '20:34:16', '2022-07-24'),
(13, 'bbh', 'Onyibe', 'gostime@gmail.com', '09088', 'uututu', '33', 'hdfhf', 'hfdhdf'),
(14, 'bbh', 'Onyibe', 'gostime@gmail.com', '09088', 'uututu', '33', '15:06:25', '2022-07-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
