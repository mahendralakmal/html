-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2014 at 05:21 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sportunleash`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `title` varchar(200) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(10000) NOT NULL,
  `pt` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `countryid` int(11) NOT NULL AUTO_INCREMENT,
  `Country` varchar(50) NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_user` int(11) NOT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`countryid`),
  KEY `created_user` (`created_user`),
  KEY `modified_user` (`modified_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE IF NOT EXISTS `feature` (
  `Image` varchar(200) NOT NULL,
  `Des` varchar(20000) NOT NULL,
  `Heading` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL,
  `ct` varchar(10) NOT NULL,
  `content` mediumtext NOT NULL,
  `pt` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE IF NOT EXISTS `sport` (
  `sportid` int(11) NOT NULL AUTO_INCREMENT,
  `sport` varchar(30) NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_user` int(11) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`sportid`),
  KEY `created_user` (`created_user`),
  KEY `modified_user` (`modified_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_usr` int(11) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_usr` int(11) NOT NULL,
  `categry` int(11) NOT NULL,
  `profile` int(11) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `usr_name` (`username`),
  KEY `categry` (`categry`),
  KEY `profile` (`profile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `passwd`, `created_date`, `created_usr`, `modified_date`, `modified_usr`, `categry`, `profile`) VALUES
(13, 'lakmal', 'ajkwRGFiMkhZcGp5dnpod3AwQkZ0UT09', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE IF NOT EXISTS `user_category` (
  `usr_cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_category` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_usr` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_usr` int(11) NOT NULL,
  PRIMARY KEY (`usr_cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`usr_cate_id`, `usr_category`, `created_date`, `created_usr`, `modified_date`, `modified_usr`) VALUES
(1, 'SuperUser', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1),
(2, 'Administrator', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_prof`
--

CREATE TABLE IF NOT EXISTS `user_prof` (
  `prof_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` smallint(1) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `address_2` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state_region` varchar(50) NOT NULL,
  `country` int(11) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `preferd_sport` int(11) NOT NULL,
  PRIMARY KEY (`prof_id`),
  KEY `country` (`country`),
  KEY `preferd_sport` (`preferd_sport`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_prof`
--

INSERT INTO `user_prof` (`prof_id`, `f_name`, `m_name`, `l_name`, `date_of_birth`, `gender`, `address_1`, `address_2`, `city`, `state_region`, `country`, `tel`, `mobile`, `email`, `preferd_sport`) VALUES
(1, 'lakmal', 'lakmal', 'lakmal', '0000-00-00', 0, '', '', '', '', 0, '', '', '', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `country_ibfk_2` FOREIGN KEY (`modified_user`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `country_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sport`
--
ALTER TABLE `sport`
  ADD CONSTRAINT `sport_ibfk_2` FOREIGN KEY (`modified_user`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sport_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `profile` FOREIGN KEY (`profile`) REFERENCES `user_prof` (`prof_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category` FOREIGN KEY (`categry`) REFERENCES `user_category` (`usr_cate_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
