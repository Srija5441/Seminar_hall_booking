-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 07:02 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(11) NOT NULL,
  `availability` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `availability`) VALUES
(1, 'no'),
(2, 'no'),
(3, 'yes'),
(4, 'no'),
(5, 'yes'),
(6, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `indcom` varchar(30) NOT NULL,
  `person` varchar(30) NOT NULL,
  `telo` bigint(11) NOT NULL,
  `telr` bigint(11) NOT NULL,
  `nature` varchar(30) NOT NULL,
  `hall` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `account` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `indcom`, `person`, `telo`, `telr`, `nature`, `hall`, `date`, `account`) VALUES
(2, 'company', 'srija', 9492769363, 9701094099, 'jirjguitgtrughrh', 'seminar hall1', '2016-04-30', 0),
(24, 'sadjehf', '5454545454', 454545, 644, '5445', 'conference hall 2', '2016-05-19', 0),
(25, 'nexus', 'srija', 95412354475, 56452115565, 'practise', 'conference hall 2', '2016-05-03', 0),
(26, 'nexus', 'srija', 95412354475, 56452115565, 'practise', 'conference hall 2', '2016-05-03', 0),
(27, 'wkfirejf', '45454', 544646, 565564, '45456', 'seminar hall 3', '2016-05-21', 0),
(28, 'srii', 'srijaaa', 9710194099, 9485123741, 'practise', 'seminar hall 2', '2016-05-09', 0),
(29, 'next one', 'huhu', 94125378465, 8465076123, 'loving', 'seminar hall 4', '2016-05-29', 0),
(30, 'next one', 'huhu', 94125378465, 8465076123, 'loving', 'seminar hall 4', '2016-05-29', 0),
(31, 'plzzz', 'pleasing', 95421233, 6552266, 'pleasinggg', 'seminar hall 2', '2016-05-17', 0),
(33, 'ivjifjbi', '5656', 959596, 65965, '5956', 'seminar hall 2', '2016-05-21', 0),
(34, 'ravicom', 'ravi', 9491245784, 95455562252, 'playing', 'seminar hall 4', '2016-05-12', 0),
(35, 'kwdejf', '565', 656565, 56565, '555', 'seminar hall 3', '2016-05-16', 0),
(36, 'kwdejf', '565', 656565, 56565, '555', 'seminar hall 3', '2016-05-16', 54545656),
(37, '566465', '45', 45646, 5456, '56', 'seminar hall 2', '2016-12-21', 5566565),
(38, 'kfoik', 'gdd', 455, 56, 'hgshb', 'seminar hall 1', '2016-05-23', 4545),
(39, 'iujiuhuhu', 'kjklkolk', 9494524235, 91124512112, 'vijrigjij', 'seminar hall 4', '2016-05-25', 656565);

-- --------------------------------------------------------

--
-- Table structure for table `regg`
--

CREATE TABLE `regg` (
  `namw` varchar(10) NOT NULL,
  `ijij` varchar(10) NOT NULL,
  `jnjnjij` varchar(10) NOT NULL,
  `po` varchar(10) NOT NULL,
  `mkjknj` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regg`
--

INSERT INTO `regg` (`namw`, `ijij`, `jnjnjij`, `po`, `mkjknj`) VALUES
('ghyubhh', 'hyhuh', 'huyhyu', 'hy', 'h');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
