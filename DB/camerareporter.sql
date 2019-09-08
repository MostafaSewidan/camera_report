-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 07:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camerareporter`
--

-- --------------------------------------------------------

--
-- Table structure for table `acedant`
--

CREATE TABLE `acedant` (
  `ID` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `acedant`
--

INSERT INTO `acedant` (`ID`, `name`) VALUES
(5, 'sgbvzsv'),
(6, 'asdv'),
(7, 'asc'),
(9, 'dhf'),
(11, 'حسام'),
(12, 'منءئر'),
(13, 'salama');

-- --------------------------------------------------------

--
-- Table structure for table `dvr`
--

CREATE TABLE `dvr` (
  `dvrID` int(10) UNSIGNED NOT NULL,
  `dvr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `dvr`
--

INSERT INTO `dvr` (`dvrID`, `dvr`) VALUES
(3, 'DVR 4');

-- --------------------------------------------------------

--
-- Table structure for table `erea`
--

CREATE TABLE `erea` (
  `ereaID` int(10) UNSIGNED NOT NULL,
  `erea` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `erea`
--

INSERT INTO `erea` (`ereaID`, `erea`) VALUES
(2, 'البسكوت'),
(3, 'الكريمة');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ReportId` int(10) UNSIGNED NOT NULL,
  `DVR` varchar(10) NOT NULL,
  `camera` varchar(10) NOT NULL,
  `eraa` varchar(10) NOT NULL,
  `accident_date` varchar(30) NOT NULL,
  `record_date` varchar(30) NOT NULL,
  `watchman_name` varchar(30) NOT NULL,
  `accident_name` varchar(30) NOT NULL,
  `accident_description` varchar(500) NOT NULL,
  `action` varchar(500) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `vedio` varchar(200) DEFAULT NULL,
  `search_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ReportId`, `DVR`, `camera`, `eraa`, `accident_date`, `record_date`, `watchman_name`, `accident_name`, `accident_description`, `action`, `img`, `vedio`, `search_date`) VALUES
(36, 'DVR 1', 'camera 1', 'الكريمة', '2019-04-04 / 01:01 AM', '2019-04-25  / 01:50 AM', 'مصطفي حيسن سويدان', 'sgbvzsv', 'zsdvsbzd', 'zsdv', '', '', '2019-04-04'),
(37, 'DVR 1', 'camera 1', 'البسكوت', '2019-04-05 / 01:01 AM', '2019-04-25  / 02:49 PM', 'مصطفي فتحي شعيب', 'asdv', 'sdv', 'dsvsd', '', '', '2019-04-05'),
(38, 'DVR 2', 'camera 15', 'البسكوت', '2019-03-04 / 02:02 PM', '2019-04-25  / 02:49 PM', 'مصطفي فتحي شعيب', 'asc', 'asd', 'asx', '', '', '2019-04-04'),
(39, 'DVR 1', 'camera 1', 'البسكوت', '2019-04-19 / 02:22 PM', '2019-04-25  / 03:00 PM', 'مصطفي حيسن سويدان', 'dv', 'dfbxc', 'bd', '', '', '2019-04-19'),
(40, 'DVR 1', 'camera 13', 'البسكوت', '2019-03-05 / 11:01 AM', '2019-04-25  / 03:01 PM', 'مصطفي حيسن سويدان', 'dhf', 'eaegd', 'egsd', '', '', '2019-03-05'),
(42, 'DVR 2', 'camera 3', 'البسكوت', '2019-04-02 / 01:11 AM', '2019-04-26  / 12:42 AM', 'مصطفي', 'حسام', 'يبثلايب', '4قافلا', '', '', '2019-04-02'),
(43, 'DVR 2', 'camera 1', 'الكريمة', '2019-11-01 / 11:11 AM', '2019-04-26  / 02:05 AM', 'asc vad', 'منءئر', '', '', '', '', '2019-11-01'),
(44, 'DVR 2', 'camera 3', 'البسكوت', '2019-04-16 / 09:09 PM', '2019-04-28  / 10:44 PM', 'مصطفي', 'salama', 'sdsea', 'asfasefaf', '', '', '2019-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(10) UNSIGNED NOT NULL,
  `password` varchar(100) NOT NULL,
  `power` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `password`, `power`) VALUES
(1, '$2y$10$RbH70CUjViXgw4f/74inAOeeMTLxtNubOxNJROYrfDcRFgRGw1sDi', 'admin'),
(2, '$2y$10$HexxHohPr/WMvyb0gIUWfeu9jRy3oCE32NzfrpK14ByGM7j6zR4ma', 'watchman'),
(3, '$2y$10$tCHtLpgW.NS.0qDS5BzgQuS3Gb0bA8hQzw3X91cpI9BKemX6yRY3G', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `watcher`
--

CREATE TABLE `watcher` (
  `watchmanID` int(10) UNSIGNED NOT NULL,
  `watchman_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `watcher`
--

INSERT INTO `watcher` (`watchmanID`, `watchman_name`) VALUES
(4, 'asc vad'),
(5, 'مصطفي');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acedant`
--
ALTER TABLE `acedant`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dvr`
--
ALTER TABLE `dvr`
  ADD PRIMARY KEY (`dvrID`);

--
-- Indexes for table `erea`
--
ALTER TABLE `erea`
  ADD PRIMARY KEY (`ereaID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ReportId`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watcher`
--
ALTER TABLE `watcher`
  ADD PRIMARY KEY (`watchmanID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acedant`
--
ALTER TABLE `acedant`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dvr`
--
ALTER TABLE `dvr`
  MODIFY `dvrID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `erea`
--
ALTER TABLE `erea`
  MODIFY `ereaID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ReportId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `watcher`
--
ALTER TABLE `watcher`
  MODIFY `watchmanID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
