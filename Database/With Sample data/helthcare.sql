-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 05:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appinment`
--

CREATE TABLE `appinment` (
  `app_id` int(11) NOT NULL,
  `sch_id` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `apponment_code` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `amount` int(255) NOT NULL,
  `accept` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appinment`
--

INSERT INTO `appinment` (`app_id`, `sch_id`, `patient_email`, `apponment_code`, `trn_date`, `amount`, `accept`, `paid`) VALUES
(32, '5', 'kanishkadewsandaruwan@gmail.com', 'A5202012161', '2020-12-16 12:15:04', 1500, 'Accepted', 'Paided');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `image`) VALUES
(5, 'WhatsApp Image 2020-11-24 at 10.49.21 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `full_name`, `address`, `phone_number`, `email`, `gender`, `password`, `username`, `trndate`) VALUES
(2, 'Dr. Nalaka Godahewa', 'Kosmulla, Galle', 785878963, 'nala@gmail.com', 'Male', '827ccb0eea8a706c4c34a16891f84e7b', 'nalaka', '2020-11-14'),
(3, 'Dr. Ruwan wijevardana', 'Colombo', 713664578, 'ruwan@gmail.com', 'Male', '827ccb0eea8a706c4c34a16891f84e7b', 'thili', '2020-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `medical_officer`
--

CREATE TABLE `medical_officer` (
  `office_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_officer`
--

INSERT INTO `medical_officer` (`office_id`, `full_name`, `address`, `phone_number`, `email`, `gender`, `password`, `username`, `trndate`) VALUES
(1, 'Wathsal Sewwandi', 'Mathara', 713664078, 'wathsla1996@gmail.com', 'Female', '827ccb0eea8a706c4c34a16891f84e7b', 'kaniya', '2020-11-14 00:00:00'),
(2, '', '', 0, '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '0000-00-00 00:00:00'),
(4, 'Wevaldeniya', 'Neluwa', 713664071, 'wevaldeniya@gmail.com', 'Female', '827ccb0eea8a706c4c34a16891f84e7b', 'W', '2020-11-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `medical_test`
--

CREATE TABLE `medical_test` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_test`
--

INSERT INTO `medical_test` (`test_id`, `test_name`, `description`, `available`) VALUES
(3, 'Blood Test', 'Patta sssds', 'Yes'),
(4, 'Blood Test Suger', 'Patta sssds', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_img_id` int(11) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_img_id`, `image1`, `image2`) VALUES
(3, 'WhatsApp Image 2020-11-24 at 10.49.21 PM.jpeg', 'The-Uses-of-Technology-in-Our-Life.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `pid` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `full_name`, `phone_number`, `dob`, `gender`, `email`, `address`, `trndate`, `password`) VALUES
(11, 'Kanishka Dew Sandaruwan', 713664578, '1996.09.23', 'Male', 'kanishkadewsandaruwan@gmail.com', 'Banwalgodalla, Kosmulla', '2020-12-16 00:00:00', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sch_id` int(11) NOT NULL,
  `docid` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `roomNo` int(255) NOT NULL,
  `sc_date` date NOT NULL,
  `sc_time` time NOT NULL,
  `price` int(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sch_id`, `docid`, `description`, `roomNo`, `sc_date`, `sc_time`, `price`, `trndate`) VALUES
(1, '3', 'pain killers', 3, '2020-12-15', '09:50:00', 1500, '2020-12-13 12:16:29'),
(5, '3', 'Patta sssds', 2, '2020-12-18', '05:05:00', 1500, '2020-12-16 12:12:34');

-- --------------------------------------------------------

--
-- Table structure for table `slider_banner`
--

CREATE TABLE `slider_banner` (
  `slider_banner_id` int(11) NOT NULL,
  `slider_banner_01` varchar(255) NOT NULL,
  `slider_banner_02` varchar(255) NOT NULL,
  `slider_banner_03` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_banner`
--

INSERT INTO `slider_banner` (`slider_banner_id`, `slider_banner_01`, `slider_banner_02`, `slider_banner_03`) VALUES
(9, 'The-Uses-of-Technology-in-Our-Life.jpg', 'car-lights-header-by-afreepixel.jpg', 'freecards-header-1000-250-by-afreepixel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test_appinment`
--

CREATE TABLE `test_appinment` (
  `test_appoinment_id` int(11) NOT NULL,
  `test_sch_id` varchar(255) NOT NULL,
  `test_appoinment_code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tested` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `reported` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_appinment`
--

INSERT INTO `test_appinment` (`test_appoinment_id`, `test_sch_id`, `test_appoinment_code`, `email`, `amount`, `tested`, `paid`, `reported`, `trndate`) VALUES
(9, '4', 'MT4202012161', 'kanishkadewsandaruwan@gmail.com', '1200', 'Tested', 'Paided', 'Pending', '2020-12-16 12:10:57'),
(10, '5', 'MT5202012161', 'kanishkadewsandaruwan@gmail.com', '2500', 'Pending', 'Pending', 'Pending', '2020-12-16 12:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `test_schedule`
--

CREATE TABLE `test_schedule` (
  `test_sch_id` int(11) NOT NULL,
  `test_id` int(255) NOT NULL,
  `test_date` date NOT NULL,
  `test_time` time NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_schedule`
--

INSERT INTO `test_schedule` (`test_sch_id`, `test_id`, `test_date`, `test_time`, `price`, `description`, `trndate`) VALUES
(4, 3, '2020-12-18', '12:58:00', 1200, 'Patta sssds', '2020-12-16 12:08:10'),
(5, 4, '2020-12-09', '12:58:00', 2500, 'Patta sssds', '2020-12-16 12:08:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appinment`
--
ALTER TABLE `appinment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `medical_officer`
--
ALTER TABLE `medical_officer`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `medical_test`
--
ALTER TABLE `medical_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_img_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sch_id`);

--
-- Indexes for table `slider_banner`
--
ALTER TABLE `slider_banner`
  ADD PRIMARY KEY (`slider_banner_id`);

--
-- Indexes for table `test_appinment`
--
ALTER TABLE `test_appinment`
  ADD PRIMARY KEY (`test_appoinment_id`);

--
-- Indexes for table `test_schedule`
--
ALTER TABLE `test_schedule`
  ADD PRIMARY KEY (`test_sch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appinment`
--
ALTER TABLE `appinment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medical_officer`
--
ALTER TABLE `medical_officer`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medical_test`
--
ALTER TABLE `medical_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider_banner`
--
ALTER TABLE `slider_banner`
  MODIFY `slider_banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `test_appinment`
--
ALTER TABLE `test_appinment`
  MODIFY `test_appoinment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `test_schedule`
--
ALTER TABLE `test_schedule`
  MODIFY `test_sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
