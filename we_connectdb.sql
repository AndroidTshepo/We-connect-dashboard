-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2016 at 09:40 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `we_connectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_Fname` varchar(25) NOT NULL,
  `admin_Lname` varchar(25) NOT NULL,
  `admin_Surname` varchar(25) NOT NULL,
  `admin_status` int(10) NOT NULL DEFAULT '0',
  `admin_email` varchar(50) NOT NULL,
  `admin_emp_no` int(25) NOT NULL,
  `admin_date_reg` date NOT NULL,
  `admin_last_log_on` date NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_level` int(5) NOT NULL DEFAULT '4',
  `admin_failed_log` int(30) NOT NULL,
  `admin_lockout` int(11) NOT NULL DEFAULT '0',
  `admin_role` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_Fname`, `admin_Lname`, `admin_Surname`, `admin_status`, `admin_email`, `admin_emp_no`, `admin_date_reg`, `admin_last_log_on`, `admin_password`, `admin_level`, `admin_failed_log`, `admin_lockout`, `admin_role`) VALUES
(1, 'trinite', 'kut', 'mpunga', 0, 'trinite@barclays.com', 123456789, '2016-03-22', '2016-03-16', 'trinite', 4, 0, 1, 'manager'),
(2, 'Tshepo', 'cibi', 'Cibi', 1, 'tshepo@gmail.com', 1232, '2016-03-09', '2016-03-09', '12345678', 4, 0, 1, 'supervisor'),
(3, 'VICky', 'Vickyash', 'Vikyy', 0, 'vicky@gmail.com', 789654, '2016-03-09', '2016-03-09', '2565862', 4, 0, 1, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `chosen_reward_tbl`
--

CREATE TABLE IF NOT EXISTS `chosen_reward_tbl` (
  `chosen_rew_id` int(10) NOT NULL,
  `chosen_rew_date` date NOT NULL,
  `particip_id` int(10) NOT NULL,
  `reward_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crowd_scr_quest`
--

CREATE TABLE IF NOT EXISTS `crowd_scr_quest` (
  `crowd_scr_q_date_mod` date NOT NULL,
  `crow_src_id` int(10) NOT NULL,
  `quest_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crowd_scr_quest`
--

INSERT INTO `crowd_scr_quest` (`crowd_scr_q_date_mod`, `crow_src_id`, `quest_id`, `admin_id`) VALUES
('2016-04-14', 340, 125, 1),
('2016-04-14', 340, 126, 1),
('2016-04-14', 341, 127, 1),
('2016-04-14', 341, 128, 1),
('2016-04-14', 341, 129, 1);

-- --------------------------------------------------------

--
-- Table structure for table `crowd_source_tbl`
--

CREATE TABLE IF NOT EXISTS `crowd_source_tbl` (
  `crow_src_id` int(10) NOT NULL,
  `crow_src_name` varchar(50) NOT NULL,
  `crow_src_desc` text NOT NULL,
  `crow_src_start_date` date NOT NULL,
  `crow_src_end_date` date NOT NULL,
  `crow_src_status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=342 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crowd_source_tbl`
--

INSERT INTO `crowd_source_tbl` (`crow_src_id`, `crow_src_name`, `crow_src_desc`, `crow_src_start_date`, `crow_src_end_date`, `crow_src_status`) VALUES
(340, 'crowd source 1', 'm m m m m m m m m m m m m m m m m m m mm', '0000-00-00', '0000-00-00', 0),
(341, 'crowd source 2', 'm m m m m m m m m m m m m m m m m m m m mm m m m', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `option_tbl`
--

CREATE TABLE IF NOT EXISTS `option_tbl` (
  `option_id` int(10) NOT NULL,
  `option_desc` text NOT NULL,
  `option_date_added` datetime NOT NULL,
  `option_removed_status` int(11) NOT NULL DEFAULT '0',
  `quest_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `option_tbl`
--

INSERT INTO `option_tbl` (`option_id`, `option_desc`, `option_date_added`, `option_removed_status`, `quest_id`) VALUES
(84, 'my opton1', '2016-04-14 00:00:00', 0, 125),
(85, 'my opton2', '2016-04-14 00:00:00', 0, 125),
(86, 'option1 for question2', '2016-04-14 00:00:00', 0, 126),
(87, 'option2 for question2', '2016-04-14 00:00:00', 0, 126),
(88, 'true', '2016-04-14 00:00:00', 0, 127),
(89, 'false', '2016-04-14 00:00:00', 0, 127),
(90, 'option 1', '2016-04-14 00:00:00', 0, 128),
(91, 'my option2', '2016-04-14 00:00:00', 0, 128),
(92, 'option 1', '2016-04-14 00:00:00', 0, 129),
(93, 'option 3', '2016-04-14 00:00:00', 0, 129),
(94, 'option 5', '2016-04-14 00:00:00', 0, 129),
(95, 'option 9', '2016-04-14 00:00:00', 0, 129);

-- --------------------------------------------------------

--
-- Table structure for table `participation_tbl`
--

CREATE TABLE IF NOT EXISTS `participation_tbl` (
  `particip_id` int(10) NOT NULL,
  `particip_date` date NOT NULL,
  `particip_time_submit` time NOT NULL,
  `particip_locationn_submit` varchar(50) NOT NULL,
  `crow_src_id` int(10) NOT NULL,
  `quest_id` int(10) NOT NULL,
  `u_Id` int(10) NOT NULL,
  `option_id` int(10) NOT NULL,
  `raison_for_option` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_tbl`
--

CREATE TABLE IF NOT EXISTS `question_tbl` (
  `quest_id` int(10) NOT NULL,
  `quest_desc` text NOT NULL,
  `quest_last_date_modified` date NOT NULL,
  `quest_type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_tbl`
--

INSERT INTO `question_tbl` (`quest_id`, `quest_desc`, `quest_last_date_modified`, `quest_type`) VALUES
(125, 'question 1', '2016-04-14', 'multileChoiceQuestOne'),
(126, 'my question 2', '2016-04-14', 'multileChoiceQuestOne'),
(127, 'my true and false question', '2016-04-14', 'true_false_question'),
(128, 'my question 2 multiple choice one', '2016-04-14', 'multileChoiceQuestOne'),
(129, 'question 3', '2016-04-14', 'multileChoiceQuestOne');

-- --------------------------------------------------------

--
-- Table structure for table `reward_tbl`
--

CREATE TABLE IF NOT EXISTS `reward_tbl` (
  `reward_id` int(10) NOT NULL,
  `reward_type` varchar(30) NOT NULL,
  `reward_value` varchar(30) NOT NULL,
  `reward_service_pro` varchar(20) NOT NULL,
  `admin_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `u_Id` int(10) NOT NULL,
  `u_Fname` varchar(30) NOT NULL,
  `u_Lname` varchar(30) NOT NULL,
  `u_Gender` tinyint(1) NOT NULL,
  `u_AccNo` int(10) NOT NULL,
  `u_CardNo` int(16) NOT NULL,
  `u_Pin` int(5) NOT NULL,
  `u_Password` varchar(30) NOT NULL,
  `u_active` int(11) NOT NULL DEFAULT '0',
  `u_Image` text NOT NULL,
  `u_TelNo` int(11) NOT NULL,
  `u_province` varchar(30) NOT NULL,
  `u_city` varchar(30) NOT NULL,
  `u_age` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`u_Id`, `u_Fname`, `u_Lname`, `u_Gender`, `u_AccNo`, `u_CardNo`, `u_Pin`, `u_Password`, `u_active`, `u_Image`, `u_TelNo`, `u_province`, `u_city`, `u_age`) VALUES
(1, 'Tshepo', 'Cibi', 0, 2147483647, 2147483647, 1236, '1234', 0, '', 123654789, 'Gauteng', 'capeTown', '36'),
(2, 'Trinite', 'mpunga', 0, 1236547896, 2147483647, 2563, '1234', 0, '', 123654789, 'Gauteng', 'johannesburg', '32'),
(3, 'Tshepo', 'Cibi', 0, 2147483647, 2147483647, 1236, '1234', 0, '', 123654789, 'Gauteng', 'johannesburg', '44'),
(4, 'Trinite', 'mpunga', 0, 1236547896, 2147483647, 2563, '1234', 0, '', 123654789, 'Gauteng', 'capeTown', '30'),
(5, 'Tshepo', 'Cibi', 0, 2147483647, 2147483647, 1236, '1234', 0, '', 123654789, 'Gauteng', 'capeTown', '22'),
(6, 'Trinite', 'mpunga', 0, 1236547896, 2147483647, 2563, '1234', 0, '', 123654789, 'Gauteng', 'capeTown', '30'),
(7, 'Tshepo', 'Cibi', 0, 2147483647, 2147483647, 1236, '1234', 0, '', 123654789, 'Gauteng', 'johannesburg', '22'),
(8, 'Trinite', 'mpunga', 0, 1236547896, 2147483647, 2563, '1234', 0, '', 123654789, 'Gauteng', 'capeTown', '30'),
(9, 'Tshepo', 'Cibi', 0, 2147483647, 2147483647, 1236, '1234', 0, '', 123654789, 'Gauteng', 'johannesburg', '22'),
(10, 'Trinite', 'mpunga', 0, 1236547896, 2147483647, 2563, '1234', 0, '', 123654789, 'Gauteng', 'durban', '54'),
(11, 'Tshepo', 'Cibi', 0, 2147483647, 2147483647, 1236, '1234', 0, '', 123654789, 'Gauteng', 'johannesburg', '51'),
(12, 'Trinite', 'mpunga', 0, 1236547896, 2147483647, 2563, '1234', 0, '', 123654789, 'Gauteng', 'pretoria', '30'),
(13, 'Tshepo', 'Cibi', 0, 2147483647, 2147483647, 1236, '1234', 0, '', 123654789, 'Gauteng', 'pretoria', '22'),
(14, 'Trinite', 'mpunga', 0, 1236547896, 2147483647, 2563, '1234', 0, '', 123654789, 'Gauteng', 'pretoria', '60');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chosen_reward_tbl`
--
ALTER TABLE `chosen_reward_tbl`
  ADD PRIMARY KEY (`chosen_rew_id`);

--
-- Indexes for table `crowd_source_tbl`
--
ALTER TABLE `crowd_source_tbl`
  ADD PRIMARY KEY (`crow_src_id`);

--
-- Indexes for table `option_tbl`
--
ALTER TABLE `option_tbl`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `participation_tbl`
--
ALTER TABLE `participation_tbl`
  ADD PRIMARY KEY (`particip_id`);

--
-- Indexes for table `question_tbl`
--
ALTER TABLE `question_tbl`
  ADD PRIMARY KEY (`quest_id`);

--
-- Indexes for table `reward_tbl`
--
ALTER TABLE `reward_tbl`
  ADD PRIMARY KEY (`reward_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`u_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `chosen_reward_tbl`
--
ALTER TABLE `chosen_reward_tbl`
  MODIFY `chosen_rew_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `crowd_source_tbl`
--
ALTER TABLE `crowd_source_tbl`
  MODIFY `crow_src_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=342;
--
-- AUTO_INCREMENT for table `option_tbl`
--
ALTER TABLE `option_tbl`
  MODIFY `option_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `participation_tbl`
--
ALTER TABLE `participation_tbl`
  MODIFY `particip_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question_tbl`
--
ALTER TABLE `question_tbl`
  MODIFY `quest_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `reward_tbl`
--
ALTER TABLE `reward_tbl`
  MODIFY `reward_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `u_Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
