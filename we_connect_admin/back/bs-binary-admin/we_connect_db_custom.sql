-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2016 at 04:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `we_connect_db_custom`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(45) NOT NULL,
  `admin_surname` varchar(45) NOT NULL,
  `admin_email` varchar(45) NOT NULL,
  `admin_password` varchar(45) NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT '0',
  `admin_emp_no` int(11) NOT NULL DEFAULT '0',
  `admini_date_reg` datetime DEFAULT NULL,
  `admin_last_log_on` datetime DEFAULT NULL,
  `admin_level` int(11) DEFAULT '1',
  `admin_failed_log` int(11) DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_name`, `admin_surname`, `admin_email`, `admin_password`, `admin_status`, `admin_emp_no`, `admini_date_reg`, `admin_last_log_on`, `admin_level`, `admin_failed_log`) VALUES
(1, 'Tshepo', 'Cibi', 'billion@gmail.co.za', 'tshepo', 1, 111, '2016-03-28 00:00:00', '2016-03-28 00:00:00', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(45) DEFAULT NULL,
  `options_option_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `options_option_id`) VALUES
(1, 'good because its good', 1),
(2, 'shit baaaaad!', 2);

-- --------------------------------------------------------

--
-- Table structure for table `crowd_source`
--

CREATE TABLE IF NOT EXISTS `crowd_source` (
  `crowd_source_id` int(11) NOT NULL AUTO_INCREMENT,
  `crowd_source_name` varchar(45) NOT NULL,
  `crowd_source_description` varchar(255) DEFAULT NULL,
  `crowd_source_status` int(11) NOT NULL DEFAULT '0',
  `crowd_source_start_date` datetime DEFAULT NULL,
  `crowd_source_end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`crowd_source_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `crowd_source`
--

INSERT INTO `crowd_source` (`crowd_source_id`, `crowd_source_name`, `crowd_source_description`, `crowd_source_status`, `crowd_source_start_date`, `crowd_source_end_date`) VALUES
(1, 'service', 'this is infor about service', 1, '2016-03-28 00:00:00', '2016-03-31 00:00:00'),
(2, 'lol', 'm just loughing', 0, NULL, NULL),
(3, '', '', 0, NULL, NULL),
(4, '', '', 0, NULL, NULL),
(5, 'lol2', 'looooling', 0, NULL, NULL),
(6, 'man', 'checkin', 0, NULL, NULL),
(7, 'MORNING', 'testing good mrng', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(255) NOT NULL,
  `option_set_date` datetime DEFAULT NULL,
  `questions_question_id` int(11) DEFAULT NULL,
  `crowd_source_crowd_source_id` int(11) NOT NULL,
  PRIMARY KEY (`option_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option_id`, `option`, `option_set_date`, `questions_question_id`, `crowd_source_crowd_source_id`) VALUES
(1, 'good', '2016-03-28 00:00:00', 1, 1),
(2, 'bad', '2016-03-28 00:00:00', 1, 1),
(3, 'true', NULL, 4, 6),
(4, 'false', NULL, 4, 6),
(5, 'true', NULL, 5, 7),
(6, 'false', NULL, 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `question_type` varchar(45) DEFAULT NULL,
  `question_set_date` datetime DEFAULT NULL,
  `crowd_source_crowd_source_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `question_type`, `question_set_date`, `crowd_source_crowd_source_id`) VALUES
(1, 'how is our service?', 'choose', '2016-03-28 00:00:00', 1),
(2, 'what', NULL, NULL, 0),
(3, 'what', NULL, NULL, 6),
(4, 'what', NULL, NULL, 6),
(5, 'is it a good morning', NULL, NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE IF NOT EXISTS `reward` (
  `reward_id` int(11) NOT NULL AUTO_INCREMENT,
  `reward` varchar(45) DEFAULT NULL,
  `crowd_source_crowd_source_id` int(11) DEFAULT NULL,
  `users_user_id` int(11) DEFAULT NULL,
  `date_rewarded` datetime DEFAULT NULL,
  PRIMARY KEY (`reward_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`reward_id`, `reward`, `crowd_source_crowd_source_id`, `users_user_id`, `date_rewarded`) VALUES
(1, 'vodacom 5mb', 1, 1, '2016-03-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `user_surname` varchar(45) NOT NULL,
  `user_account_no` int(11) NOT NULL,
  `user_card_no` int(11) NOT NULL,
  `user_phone_no` int(11) DEFAULT NULL,
  `user_active` int(11) DEFAULT '0',
  `user_image` varchar(255) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_gender` varchar(45) DEFAULT NULL,
  `user_date_registered` varchar(45) DEFAULT NULL,
  `participation_participation_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`participation_participation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_surname`, `user_account_no`, `user_card_no`, `user_phone_no`, `user_active`, `user_image`, `user_password`, `user_gender`, `user_date_registered`, `participation_participation_id`) VALUES
(1, 'tshepo billion', 'Cibi', 12345, 54321, 766084013, 1, NULL, 'tshepo', 'male', '28/03/2016', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
