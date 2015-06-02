-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2013 at 02:46 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teb`
--

-- --------------------------------------------------------

--
-- Table structure for table `national_retail_properties`
--

CREATE TABLE IF NOT EXISTS `national_retail_properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createdDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `property_city` varchar(255) NOT NULL,
  `property_state` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `building_size` double NOT NULL,
  `sq_ft_available` double NOT NULL,
  `rent` double NOT NULL,
  `website` int(11) NOT NULL,
  `description` text NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `national_retail_properties`
--

INSERT INTO `national_retail_properties` (`id`, `createdDate`, `title`, `unit`, `property_city`, `property_state`, `type`, `building_size`, `sq_ft_available`, `rent`, `website`, `description`, `bedroom`, `bathroom`, `sale`) VALUES
(1, '2013-06-04', '50 Broadway ', 'Suite H119', 'New York', 'NY', 'Residential', 56500, 820, 120000, 0, '', 2, 2, 0),
(2, '2013-06-04', '55 Broadway', 'Suite H121', 'New York', 'NY', 'Residential', 56500, 700, 190000, 0, '', 2, 2, 0),
(3, '2013-06-05', '60 Broadway', 'Center 25-A', 'New York', 'NY', 'Commercial Leasing', 319984, 724, 220000, 0, '', 1, 1, 1),
(4, '2013-06-12', '65 Broadway', '4', 'New York', 'NY', 'Commercial Leasing', 319914, 200, 320000, 1, '', 1, 1, 1),
(5, '2013-06-18', '70 Broadway', '6', 'New York', 'NY', 'Commercial Leasing', 319984, 300, 310000, 0, '', 1, 3, 1),
(6, '2013-06-11', '75 Broadway', '6A', 'New York', 'NY', 'Commercial Leasing', 87131, 230, 410000, 0, '', 2, 2, 1),
(7, '2013-06-04', '80 Broadway', '2A', 'New York', 'NY', 'Commercial Leasing', 1245, 320, 220000, 0, '', 4, 4, 1),
(8, '2013-06-04', '85 Broadway', '2B', 'New York', 'NY', 'Commercial Leasing', 2335, 320, 420000, 1, '', 4, 4, 1),
(9, '2013-06-04', '90 Broadway', '2B', 'New York', 'NY', 'Residential', 223, 330, 420500, 0, '', 3, 2, 0),
(10, '2013-06-04', '95 Broadway', '2C', 'New York', 'NY', 'Commercial Leasing', 2223, 310, 420900, 0, '', 3, 2, 1),
(11, '2013-06-04', '100 Broadway', '2F', 'New York', 'NY', 'Commercial Leasing', 2923, 310, 429900, 0, '', 3, 2, 1),
(12, '2013-06-04', '105 Broadway', '55F', 'New York', 'NY', 'Commercial Leasing', 263, 336, 529900, 0, '', 2, 2, 1),
(13, '2013-06-04', '110 Broadway', '5C', 'New York', 'NY', 'Commercial Leasing', 263, 336, 329900, 1, '', 2, 2, 1),
(14, '2013-06-04', '115 Broadway', '5G', 'New York', 'NY', 'Commercial Leasing', 263, 336, 329900, 0, '', 2, 2, 1),
(15, '2013-06-04', '120 Broadway', '5G', 'New York', 'NY', 'Commercial Leasing', 263, 336, 329900, 0, '', 2, 2, 1),
(16, '2013-06-04', '125 Broadway', '5O', 'New York', 'NY', 'Commercial Leasing', 263, 336, 329900, 0, '', 2, 2, 1),
(17, '2013-06-04', '130 Broadway', '5A', 'New York', 'NY', 'Commercial Leasing', 263, 336, 329900, 1, '', 2, 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
