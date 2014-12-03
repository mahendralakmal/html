-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2014 at 05:06 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=206 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryid`, `Country`, `created_user`, `created_date`, `modified_user`, `modified_date`) VALUES
(1, 'Afghanistan', 1, '2014-11-28 11:35:42', 1, NULL),
(2, 'Albania', 1, '2014-11-28 11:35:42', 1, NULL),
(3, 'Algeria', 1, '2014-11-28 11:35:42', 1, NULL),
(4, 'Andorra', 1, '2014-11-28 11:35:42', 1, NULL),
(5, 'Angola', 1, '2014-11-28 11:35:42', 1, NULL),
(6, 'Antigua and Barbuda', 1, '2014-11-28 11:35:42', 1, NULL),
(7, 'Argentina', 1, '2014-11-28 11:35:42', 1, NULL),
(8, 'Armenia', 1, '2014-11-28 11:35:42', 1, NULL),
(9, 'Aruba', 1, '2014-11-28 11:35:42', 1, NULL),
(10, 'Australia', 1, '2014-11-28 11:35:42', 1, NULL),
(11, 'Austria', 1, '2014-11-28 11:35:42', 1, NULL),
(12, 'Azerbaijan', 1, '2014-11-28 11:35:42', 1, NULL),
(13, 'Bahamas', 1, '2014-11-28 11:35:42', 1, NULL),
(14, 'The Bahrain', 1, '2014-11-28 11:35:42', 1, NULL),
(15, 'Bangladesh', 1, '2014-11-28 11:35:42', 1, NULL),
(16, 'Barbados', 1, '2014-11-28 11:35:42', 1, NULL),
(17, 'Belarus', 1, '2014-11-28 11:35:42', 1, NULL),
(18, 'Belgium', 1, '2014-11-28 11:35:42', 1, NULL),
(19, 'Belize', 1, '2014-11-28 11:35:42', 1, NULL),
(20, 'Benin', 1, '2014-11-28 11:35:42', 1, NULL),
(21, 'Bhutan', 1, '2014-11-28 11:35:42', 1, NULL),
(22, 'Bolivia', 1, '2014-11-28 11:35:42', 1, NULL),
(23, 'Bosnia and Herzegovina', 1, '2014-11-28 11:35:42', 1, NULL),
(24, 'Botswana', 1, '2014-11-28 11:35:42', 1, NULL),
(25, 'Brazil', 1, '2014-11-28 11:35:42', 1, NULL),
(26, 'Brunei', 1, '2014-11-28 11:35:42', 1, NULL),
(27, 'Bulgaria', 1, '2014-11-28 11:35:42', 1, NULL),
(28, 'Burkina Faso', 1, '2014-11-28 11:35:42', 1, NULL),
(29, 'Burma', 1, '2014-11-28 11:35:42', 1, NULL),
(30, 'Burundi', 1, '2014-11-28 11:35:42', 1, NULL),
(31, 'Cambodia', 1, '2014-11-28 11:35:42', 1, NULL),
(32, 'Cameroon', 1, '2014-11-28 11:35:42', 1, NULL),
(33, 'Canada', 1, '2014-11-28 11:35:42', 1, NULL),
(34, 'Cape Verde', 1, '2014-11-28 11:35:42', 1, NULL),
(35, 'Central African Republic', 1, '2014-11-28 11:35:42', 1, NULL),
(36, 'Chad', 1, '2014-11-28 11:35:42', 1, NULL),
(37, 'Chile', 1, '2014-11-28 11:35:42', 1, NULL),
(38, 'China', 1, '2014-11-28 11:35:42', 1, NULL),
(39, 'Colombia', 1, '2014-11-28 11:35:42', 1, NULL),
(40, 'Comoros', 1, '2014-11-28 11:35:42', 1, NULL),
(41, 'Congo, Democratic Republic of the', 1, '2014-11-28 11:35:42', 1, NULL),
(42, 'Congo, Republic of the', 1, '2014-11-28 11:35:42', 1, NULL),
(43, 'Costa Rica', 1, '2014-11-28 11:35:42', 1, NULL),
(44, 'Cote d''Ivoire', 1, '2014-11-28 11:35:42', 1, NULL),
(45, 'Croatia', 1, '2014-11-28 11:35:42', 1, NULL),
(46, 'Cuba', 1, '2014-11-28 11:35:42', 1, NULL),
(47, 'Curacao', 1, '2014-11-28 11:35:42', 1, NULL),
(48, 'Cyprus', 1, '2014-11-28 11:35:42', 1, NULL),
(49, 'Czech Republic', 1, '2014-11-28 11:35:42', 1, NULL),
(50, 'Denmark', 1, '2014-11-28 11:35:42', 1, NULL),
(51, 'Djibouti', 1, '2014-11-28 11:35:42', 1, NULL),
(52, 'Dominica', 1, '2014-11-28 11:35:42', 1, NULL),
(53, 'Dominican Republic', 1, '2014-11-28 11:35:42', 1, NULL),
(54, 'East Timor (see Timor-Leste)', 1, '2014-11-28 11:35:42', 1, NULL),
(55, 'Ecuador', 1, '2014-11-28 11:35:42', 1, NULL),
(56, 'Egypt', 1, '2014-11-28 11:35:42', 1, NULL),
(57, 'El Salvador', 1, '2014-11-28 11:35:42', 1, NULL),
(58, 'Equatorial Guinea', 1, '2014-11-28 11:35:42', 1, NULL),
(59, 'Eritrea', 1, '2014-11-28 11:35:42', 1, NULL),
(60, 'Estonia', 1, '2014-11-28 11:35:42', 1, NULL),
(61, 'Ethiopia', 1, '2014-11-28 11:35:42', 1, NULL),
(62, 'Fiji', 1, '2014-11-28 11:35:42', 1, NULL),
(63, 'Finland', 1, '2014-11-28 11:35:42', 1, NULL),
(64, 'France', 1, '2014-11-28 11:35:42', 1, NULL),
(65, 'Gabon', 1, '2014-11-28 11:35:42', 1, NULL),
(66, 'Gambia, The', 1, '2014-11-28 11:35:42', 1, NULL),
(67, 'Georgia', 1, '2014-11-28 11:35:42', 1, NULL),
(68, 'Germany', 1, '2014-11-28 11:35:42', 1, NULL),
(69, 'Ghana', 1, '2014-11-28 11:35:42', 1, NULL),
(70, 'Greece', 1, '2014-11-28 11:35:42', 1, NULL),
(71, 'Grenada', 1, '2014-11-28 11:35:42', 1, NULL),
(72, 'Guatemala', 1, '2014-11-28 11:35:42', 1, NULL),
(73, 'Guinea', 1, '2014-11-28 11:35:42', 1, NULL),
(74, 'Guinea-Bissau', 1, '2014-11-28 11:35:42', 1, NULL),
(75, 'Guyana', 1, '2014-11-28 11:35:42', 1, NULL),
(76, 'Haiti', 1, '2014-11-28 11:35:42', 1, NULL),
(77, 'Holy See', 1, '2014-11-28 11:35:42', 1, NULL),
(78, 'Honduras', 1, '2014-11-28 11:35:42', 1, NULL),
(79, 'Hong Kong', 1, '2014-11-28 11:35:42', 1, NULL),
(80, 'Hungary', 1, '2014-11-28 11:35:42', 1, NULL),
(81, 'Iceland', 1, '2014-11-28 11:35:42', 1, NULL),
(82, 'India', 1, '2014-11-28 11:35:42', 1, NULL),
(83, 'Indonesia', 1, '2014-11-28 11:35:42', 1, NULL),
(84, 'Iran', 1, '2014-11-28 11:35:42', 1, NULL),
(85, 'Iraq', 1, '2014-11-28 11:35:42', 1, NULL),
(86, 'Ireland', 1, '2014-11-28 11:35:42', 1, NULL),
(87, 'Israel', 1, '2014-11-28 11:35:42', 1, NULL),
(88, 'Italy', 1, '2014-11-28 11:35:42', 1, NULL),
(89, 'Jamaica', 1, '2014-11-28 11:35:42', 1, NULL),
(90, 'Japan', 1, '2014-11-28 11:35:42', 1, NULL),
(91, 'Jordan', 1, '2014-11-28 11:35:42', 1, NULL),
(92, 'Kazakhstan', 1, '2014-11-28 11:35:42', 1, NULL),
(93, 'Kenya', 1, '2014-11-28 11:35:42', 1, NULL),
(94, 'Kiribati', 1, '2014-11-28 11:35:42', 1, NULL),
(95, 'Korea, North', 1, '2014-11-28 11:35:42', 1, NULL),
(96, 'Korea, South', 1, '2014-11-28 11:35:42', 1, NULL),
(97, 'Kosovo', 1, '2014-11-28 11:35:42', 1, NULL),
(98, 'Kuwait', 1, '2014-11-28 11:35:42', 1, NULL),
(99, 'Kyrgyzstan', 1, '2014-11-28 11:35:42', 1, NULL),
(100, 'Laos', 1, '2014-11-28 11:35:42', 1, NULL),
(101, 'Latvia', 1, '2014-11-28 11:35:42', 1, NULL),
(102, 'Lebanon', 1, '2014-11-28 11:35:42', 1, NULL),
(103, 'Lesotho', 1, '2014-11-28 11:35:42', 1, NULL),
(104, 'Liberia', 1, '2014-11-28 11:35:42', 1, NULL),
(105, 'Libya', 1, '2014-11-28 11:35:42', 1, NULL),
(106, 'Liechtenstein', 1, '2014-11-28 11:35:42', 1, NULL),
(107, 'Lithuania', 1, '2014-11-28 11:35:42', 1, NULL),
(108, 'Luxembourg', 1, '2014-11-28 11:35:42', 1, NULL),
(109, 'Macau', 1, '2014-11-28 11:35:42', 1, NULL),
(110, 'Macedonia', 1, '2014-11-28 11:35:42', 1, NULL),
(111, 'Madagascar', 1, '2014-11-28 11:35:42', 1, NULL),
(112, 'Malawi', 1, '2014-11-28 11:35:42', 1, NULL),
(113, 'Malaysia', 1, '2014-11-28 11:35:42', 1, NULL),
(114, 'Maldives', 1, '2014-11-28 11:35:42', 1, NULL),
(115, 'Mali', 1, '2014-11-28 11:35:42', 1, NULL),
(116, 'Malta', 1, '2014-11-28 11:35:42', 1, NULL),
(117, 'Marshall Islands', 1, '2014-11-28 11:35:42', 1, NULL),
(118, 'Mauritania', 1, '2014-11-28 11:35:42', 1, NULL),
(119, 'Mauritius', 1, '2014-11-28 11:35:42', 1, NULL),
(120, 'Mexico', 1, '2014-11-28 11:35:42', 1, NULL),
(121, 'Micronesia', 1, '2014-11-28 11:35:42', 1, NULL),
(122, 'Moldova', 1, '2014-11-28 11:35:42', 1, NULL),
(123, 'Monaco', 1, '2014-11-28 11:35:42', 1, NULL),
(124, 'Mongolia', 1, '2014-11-28 11:35:42', 1, NULL),
(125, 'Montenegro', 1, '2014-11-28 11:35:42', 1, NULL),
(126, 'Morocco', 1, '2014-11-28 11:35:42', 1, NULL),
(127, 'Mozambique', 1, '2014-11-28 11:35:42', 1, NULL),
(128, 'Namibia', 1, '2014-11-28 11:35:42', 1, NULL),
(129, 'Nauru', 1, '2014-11-28 11:35:42', 1, NULL),
(130, 'Nepal', 1, '2014-11-28 11:35:42', 1, NULL),
(131, 'Netherlands', 1, '2014-11-28 11:35:42', 1, NULL),
(132, 'Netherlands Antilles', 1, '2014-11-28 11:35:42', 1, NULL),
(133, 'New Zealand', 1, '2014-11-28 11:35:42', 1, NULL),
(134, 'Nicaragua', 1, '2014-11-28 11:35:42', 1, NULL),
(135, 'Niger', 1, '2014-11-28 11:35:42', 1, NULL),
(136, 'Nigeria', 1, '2014-11-28 11:35:42', 1, NULL),
(137, 'North Korea', 1, '2014-11-28 11:35:42', 1, NULL),
(138, 'Norway', 1, '2014-11-28 11:35:42', 1, NULL),
(139, 'Oman', 1, '2014-11-28 11:35:42', 1, NULL),
(140, 'Pakistan', 1, '2014-11-28 11:35:42', 1, NULL),
(141, 'Palau', 1, '2014-11-28 11:35:42', 1, NULL),
(142, 'Palestinian Territories', 1, '2014-11-28 11:35:42', 1, NULL),
(143, 'Panama', 1, '2014-11-28 11:35:42', 1, NULL),
(144, 'Papua New Guinea', 1, '2014-11-28 11:35:42', 1, NULL),
(145, 'Paraguay', 1, '2014-11-28 11:35:42', 1, NULL),
(146, 'Peru', 1, '2014-11-28 11:35:42', 1, NULL),
(147, 'Philippines', 1, '2014-11-28 11:35:42', 1, NULL),
(148, 'Poland', 1, '2014-11-28 11:35:42', 1, NULL),
(149, 'Portugal', 1, '2014-11-28 11:35:42', 1, NULL),
(150, 'Qatar', 1, '2014-11-28 11:35:42', 1, NULL),
(151, 'Romania', 1, '2014-11-28 11:35:42', 1, NULL),
(152, 'Russia', 1, '2014-11-28 11:35:42', 1, NULL),
(153, 'Rwanda', 1, '2014-11-28 11:35:42', 1, NULL),
(154, 'Saint Kitts and Nevis', 1, '2014-11-28 11:35:42', 1, NULL),
(155, 'Saint Lucia', 1, '2014-11-28 11:35:42', 1, NULL),
(156, 'Saint Vincent and the Grenadines', 1, '2014-11-28 11:35:42', 1, NULL),
(157, 'Samoa', 1, '2014-11-28 11:35:42', 1, NULL),
(158, 'San Marino', 1, '2014-11-28 11:35:42', 1, NULL),
(159, 'Sao Tome and Principe', 1, '2014-11-28 11:35:42', 1, NULL),
(160, 'Saudi Arabia', 1, '2014-11-28 11:35:42', 1, NULL),
(161, 'Senegal', 1, '2014-11-28 11:35:42', 1, NULL),
(162, 'Serbia', 1, '2014-11-28 11:35:42', 1, NULL),
(163, 'Seychelles', 1, '2014-11-28 11:35:42', 1, NULL),
(164, 'Sierra Leone', 1, '2014-11-28 11:35:42', 1, NULL),
(165, 'Singapore', 1, '2014-11-28 11:35:42', 1, NULL),
(166, 'Sint Maarten', 1, '2014-11-28 11:35:42', 1, NULL),
(167, 'Slovakia', 1, '2014-11-28 11:35:42', 1, NULL),
(168, 'Slovenia', 1, '2014-11-28 11:35:42', 1, NULL),
(169, 'Solomon Islands', 1, '2014-11-28 11:35:42', 1, NULL),
(170, 'Somalia', 1, '2014-11-28 11:35:42', 1, NULL),
(171, 'South Africa', 1, '2014-11-28 11:35:42', 1, NULL),
(172, 'South Korea', 1, '2014-11-28 11:35:42', 1, NULL),
(173, 'South Sudan', 1, '2014-11-28 11:35:42', 1, NULL),
(174, 'Spain', 1, '2014-11-28 11:35:42', 1, NULL),
(175, 'Sri Lanka', 1, '2014-11-28 11:35:42', 1, NULL),
(176, 'Sudan', 1, '2014-11-28 11:35:42', 1, NULL),
(177, 'Suriname', 1, '2014-11-28 11:35:42', 1, NULL),
(178, 'Swaziland', 1, '2014-11-28 11:35:42', 1, NULL),
(179, 'Sweden', 1, '2014-11-28 11:35:42', 1, NULL),
(180, 'Switzerland', 1, '2014-11-28 11:35:42', 1, NULL),
(181, 'Syria', 1, '2014-11-28 11:35:42', 1, NULL),
(182, 'Taiwan', 1, '2014-11-28 11:35:42', 1, NULL),
(183, 'Tajikistan', 1, '2014-11-28 11:35:42', 1, NULL),
(184, 'Tanzania', 1, '2014-11-28 11:35:42', 1, NULL),
(185, 'Thailand', 1, '2014-11-28 11:35:42', 1, NULL),
(186, 'Timor-Leste', 1, '2014-11-28 11:35:42', 1, NULL),
(187, 'Togo', 1, '2014-11-28 11:35:42', 1, NULL),
(188, 'Tonga', 1, '2014-11-28 11:35:42', 1, NULL),
(189, 'Trinidad and Tobago', 1, '2014-11-28 11:35:42', 1, NULL),
(190, 'Tunisia', 1, '2014-11-28 11:35:42', 1, NULL),
(191, 'Turkey', 1, '2014-11-28 11:35:42', 1, NULL),
(192, 'Turkmenistan', 1, '2014-11-28 11:35:42', 1, NULL),
(193, 'Tuvalu', 1, '2014-11-28 11:35:42', 1, NULL),
(194, 'Uganda', 1, '2014-11-28 11:35:42', 1, NULL),
(195, 'Ukraine', 1, '2014-11-28 11:35:42', 1, NULL),
(196, 'United Arab Emirates', 1, '2014-11-28 11:35:42', 1, NULL),
(197, 'United Kingdom', 1, '2014-11-28 11:35:42', 1, NULL),
(198, 'Uruguay', 1, '2014-11-28 11:35:42', 1, NULL),
(199, 'Uzbekistan', 1, '2014-11-28 11:35:42', 1, NULL),
(200, 'Vanuatu', 1, '2014-11-28 11:35:42', 1, NULL),
(201, 'Venezuela', 1, '2014-11-28 11:35:42', 1, NULL),
(202, 'Vietnam', 1, '2014-11-28 11:35:42', 1, NULL),
(203, 'Yemen', 1, '2014-11-28 11:35:42', 1, NULL),
(204, 'Zambia', 1, '2014-11-28 11:35:42', 1, NULL),
(205, 'Zimbabwe', 1, '2014-11-28 11:35:42', 1, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`sportid`, `sport`, `created_user`, `created_date`, `modified_user`, `modified_date`) VALUES
(1, 'Archery', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(2, 'Athletics', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(3, 'Badminton', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(4, 'Basketball', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(5, 'Beach Volleyball', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(6, 'Boxing', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(7, 'Canoe Slalom', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(8, 'Canoe Sprint', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(9, 'Cycling BMX', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(10, 'Cycling Mountain Bike', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(11, 'Cycling Road', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(12, 'Cycling Track', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(13, 'Diving', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(14, 'Equestrian / Dressage', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(15, 'Equestrian / Eventing', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(16, 'Equestrian / Jumping', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(17, 'Fencing', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(18, 'Football', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(19, 'Golf', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(20, 'Gymnastics Artistic', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(21, 'Gymnastics Rhythmic', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(22, 'Handball', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(23, 'Hockey', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(24, 'Judo', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(25, 'Modern Pentathlon', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(26, 'Rowing', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(27, 'Rugby', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(28, 'Sailing', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(29, 'Shooting', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(30, 'Swimming', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(31, 'Synchronized Swimming', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(32, 'Table Tennis', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(33, 'Taekwondo', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(34, 'Tennis', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(35, 'Trampoline', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(36, 'Triathlon', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(37, 'Volleyball', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(38, 'Water Polo', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(39, 'Weightlifting', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(40, 'Wrestling Freestyle', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(41, 'Wrestling Greco-Roman', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(42, 'Alpine Skiing', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(43, 'Biathlon', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(44, 'Bobsleigh', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(45, 'Cross Country Skiing', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(46, 'Curling', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(47, 'Figure skating', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(48, 'Freestyle Skiing', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(49, 'Ice Hockey', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(50, 'Luge', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(51, 'Nordic Combined', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(52, 'Short Track Speed Skating', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(53, 'Skeleton', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(54, 'Ski Jumping', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(55, 'Snowboard', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00'),
(56, 'Speed skating', 1, '2014-11-28 11:20:04', 1, '0000-00-00 00:00:00');

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
  PRIMARY KEY (`userid`),
  UNIQUE KEY `usr_name` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `passwd`, `created_date`, `created_usr`, `modified_date`, `modified_usr`) VALUES
(1, 'lakmal', 'ajkwRGFiMkhZcGp5dnpod3AwQkZ0UT09', '2014-11-27 11:42:15', 1, '0000-00-00 00:00:00', 0),
(2, 'Jeewan', 'ajkwRGFiMkhZcGp5dnpod3AwQkZ0UT09', '2014-11-28 06:16:15', 1, '0000-00-00 00:00:00', 0);

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
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`usr_cate_id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_prof`
--

CREATE TABLE IF NOT EXISTS `user_prof` (
  `prof_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
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
  `created_user` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_user` int(11) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`prof_id`),
  KEY `userid` (`userid`),
  KEY `created_user` (`created_user`),
  KEY `modified_user` (`modified_user`),
  KEY `country` (`country`),
  KEY `preferd_sport` (`preferd_sport`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `country_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `country_ibfk_2` FOREIGN KEY (`modified_user`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_category`
--
ALTER TABLE `user_category`
  ADD CONSTRAINT `user_category_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_prof`
--
ALTER TABLE `user_prof`
  ADD CONSTRAINT `user_prof_ibfk_6` FOREIGN KEY (`country`) REFERENCES `country` (`countryid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_prof_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_prof_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_prof_ibfk_3` FOREIGN KEY (`modified_user`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_prof_ibfk_5` FOREIGN KEY (`preferd_sport`) REFERENCES `sport` (`sportid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
