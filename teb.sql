-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2013 at 01:37 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teb_local`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_national_retail_counties`
--

CREATE TABLE IF NOT EXISTS `cms_national_retail_counties` (
  `county_id` int(11) NOT NULL AUTO_INCREMENT,
  `county` varchar(255) NOT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cms_national_retail_counties`
--

INSERT INTO `cms_national_retail_counties` (`county_id`, `county`) VALUES
(1, 'Mahattan'),
(2, 'Brooklyn'),
(3, 'Hamptons');

-- --------------------------------------------------------

--
-- Table structure for table `cms_national_retail_neighborhoods`
--

CREATE TABLE IF NOT EXISTS `cms_national_retail_neighborhoods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `neighborhoods` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=140 ;

--
-- Dumping data for table `cms_national_retail_neighborhoods`
--

INSERT INTO `cms_national_retail_neighborhoods` (`id`, `county_id`, `neighborhoods`) VALUES
(1, 1, 'Lakewood'),
(2, 1, 'Chelsea'),
(3, 1, ' Battery Park City '),
(4, 1, 'Bowery'),
(5, 1, 'Carnegie Hill'),
(6, 1, 'Central Park'),
(7, 1, 'Chinatown'),
(8, 1, 'Civic Center'),
(9, 1, 'East Harlem'),
(10, 1, 'Financial District'),
(11, 1, 'Flatiron'),
(12, 1, 'Garment District'),
(13, 1, 'Gramercy Park'),
(14, 1, 'Greenwich Village'),
(15, 1, 'East Village'),
(16, 1, 'West Village'),
(17, 1, 'Hamilton Heights'),
(18, 1, 'Harlem'),
(19, 1, 'Inwood'),
(20, 1, 'Kips Bay'),
(21, 1, 'Lenox Hill'),
(22, 1, 'Little Italy'),
(23, 1, 'Lower Eastside'),
(24, 1, 'Madison Square'),
(25, 1, 'Manhattan Valley'),
(26, 1, 'Meatpacking District'),
(27, 1, 'Midtown'),
(28, 1, 'Morningside Heights'),
(29, 1, 'Murray Hill'),
(30, 1, 'NoHo'),
(31, 1, 'NoLita'),
(32, 1, 'Roosevelt Island'),
(33, 1, 'SoHo'),
(34, 1, 'Stuyvesant Town'),
(35, 1, 'Sutton Place'),
(36, 1, 'Times Square'),
(37, 1, 'Tribeca'),
(38, 1, 'Turtle Bay'),
(39, 1, 'Upper Eastside'),
(40, 1, 'Upper Westside'),
(41, 1, 'Washington Heights'),
(42, 1, 'Yorkville'),
(43, 2, 'Bath Beach'),
(44, 2, 'Bay Ridge'),
(45, 2, 'Bedford Stuyvesant'),
(46, 2, 'Bensonhurst'),
(47, 2, 'Bergen Beach'),
(48, 2, 'Boerum Hill'),
(49, 2, 'Borough Park'),
(50, 2, 'Brighton Beach'),
(51, 2, 'Brooklyn Heights'),
(52, 2, 'Brooklyn Navy Yard'),
(53, 2, 'Brownsville'),
(54, 2, 'Bushwick'),
(55, 2, 'Canarsie'),
(56, 2, 'Carroll Gardens'),
(57, 2, 'Clinton Hill'),
(58, 2, 'Columbia Street Waterfront District'),
(59, 2, 'Coney Island / Sea Gate'),
(60, 2, 'Crown Heights'),
(61, 2, 'Cypress Hills'),
(62, 2, 'Downtown Brooklyn'),
(63, 2, 'Dyker Heights'),
(64, 2, 'East Flatbush'),
(65, 2, 'East New York'),
(66, 2, 'Flatbush'),
(67, 2, 'Flatlands'),
(68, 2, 'Fort Greene'),
(69, 2, 'Gerritsen Beach'),
(70, 2, 'Glendale'),
(71, 2, 'Gowanus'),
(72, 2, 'Gravesend'),
(73, 2, 'Greenpoint'),
(74, 2, 'Kensington'),
(75, 2, 'Lindenwood'),
(76, 2, 'Manhattan Beach'),
(77, 2, 'Marine Park'),
(78, 2, 'Midwood'),
(79, 2, 'Mill Basin'),
(80, 2, 'Ozone Park'),
(81, 2, 'Park Slope'),
(82, 2, 'Prospect Heights'),
(83, 2, 'Prospect Lefferts Gardens'),
(84, 2, 'Prospect Park'),
(85, 2, 'Prospect Park South'),
(86, 2, 'Red Hook'),
(87, 2, 'Ridgewood'),
(88, 2, 'Sheepshead Bay'),
(89, 2, 'Sunset Park'),
(90, 2, 'Williamsburg'),
(91, 2, 'Windsor Terrace'),
(92, 2, 'Woodhaven'),
(93, 3, 'Acorn Point / Cedar Point'),
(94, 3, 'Armistead Pointe'),
(95, 3, 'Back River'),
(96, 3, 'Baker Farm'),
(97, 3, 'Bellgrade'),
(98, 3, 'Bethel Park'),
(99, 3, 'Briarfield'),
(100, 3, 'Central Park'),
(101, 3, 'Cherry Acres'),
(102, 3, 'Coliseum Central'),
(103, 3, 'Colonial Acres'),
(104, 3, 'Copeland Industrial Park'),
(105, 3, 'Crowne Pointe'),
(106, 3, 'Downtown'),
(107, 3, 'Elizabeth Lakes'),
(108, 3, 'Fairfield'),
(109, 3, 'Farmington'),
(110, 3, 'Fordham'),
(111, 3, 'Forrest Park'),
(112, 3, 'Grandview'),
(113, 3, 'Hampton University'),
(114, 3, 'Howe Farms'),
(115, 3, 'Langley Air Force Base'),
(116, 3, 'Langley R and D'),
(117, 3, 'Langley View'),
(118, 3, 'Little England'),
(119, 3, 'Marina Cove'),
(120, 3, 'Michaels Woods'),
(121, 3, 'NASA'),
(122, 3, 'Newmarket Creek'),
(123, 3, 'Newmarket North'),
(124, 3, 'Northampton'),
(125, 3, 'Phoebus'),
(126, 3, 'Power Plant'),
(127, 3, 'Riverdale'),
(128, 3, 'Roberts Trace'),
(129, 3, 'Salt Ponds'),
(130, 3, 'Salters Creek'),
(131, 3, 'Sanlun Lakes'),
(132, 3, 'Silver Isles'),
(133, 3, 'Tidemill Farms'),
(134, 3, 'Todds Center'),
(135, 3, 'Town Park'),
(136, 3, 'West Park'),
(137, 3, 'Willow Oaks'),
(138, 3, 'Woodland Park'),
(139, 3, 'Wythe');

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
  `website` text NOT NULL,
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
(1, '2013-06-04', 'Mission Trace II', 'Suite H119', 'Lakewood', 'Colorado', 'Commercial Leasing', 56500, 820, 120000, '', '', 2, 2, 1),
(2, '2013-06-04', 'Mission Trace II', 'Suite H121', 'Carnegie Hill', 'Colorado', 'Commercial Leasing', 56500, 700, 190000, '', '', 2, 2, 1),
(3, '2013-06-05', 'Southgate Shopping Center', 'Center 25-A', 'Augusta', 'Georgia', 'Commercial Leasing', 319984, 724, 220000, '', '', 1, 1, 0),
(4, '2013-06-12', 'Southgate Shopping Center', '4', 'Augusta', 'Georgia', 'Commercial Leasing', 319914, 200, 320000, '', '', 1, 1, 0),
(5, '2013-06-18', 'Southgate Shopping Center', '6', 'Augusta', 'Georgia', 'Commercial Leasing', 319984, 300, 310000, '', '', 1, 3, 0),
(6, '2013-06-11', 'Summit at the Mall', '6A', 'Macon', 'Georgia', 'Commercial Leasing', 87131, 230, 410000, '', '', 2, 2, 1),
(7, '2013-06-04', 'Mission Trace II', '2A', 'Lakewood', 'Colorado', 'Commercial Leasing', 1245, 320, 220000, '', '', 4, 4, 0),
(8, '2013-06-04', 'Mission Trace II', '2B', 'Lakewood', 'Colorado', 'Commercial Leasing', 2335, 320, 420000, '', '', 4, 4, 1),
(9, '2013-06-04', 'Mission Trace II', '2B', 'Lakewood', 'Colorado', 'Commercial Leasing', 223, 330, 420500, '', '', 3, 2, 0),
(10, '2013-06-04', 'Mission Trace III', '2C', 'Lakewood', 'Colorado', 'Commercial Leasing', 2223, 310, 420900, '', '', 3, 2, 1),
(11, '2013-06-04', 'Mission Trace I', '2F', 'Lakewood', 'Colorado', 'Commercial Leasing', 2923, 310, 429900, '', '', 3, 2, 0),
(12, '2013-06-04', 'Mission Trace I', '55F', 'Lakewood', 'Colorado', 'Commercial Leasing', 263, 336, 529900, '', '', 2, 2, 0),
(13, '2013-06-04', 'Mission Trace I', '5C', 'Bath Beach', 'Colorado', 'Commercial Leasing', 263, 336, 329900, '', '', 2, 2, 1),
(14, '2013-06-04', 'Mission Trace I', '5G', 'Bay Ridge', 'Colorado', 'Commercial Leasing', 263, 336, 329900, '', '', 2, 2, 0),
(15, '2013-06-04', 'Mission Trace I', '5G', 'Acorn Point / Cedar Point', 'Colorado', 'Commercial Leasing', 263, 336, 329900, '', '', 2, 2, 0),
(16, '2013-06-04', 'Mission Trace I', '5O', 'Armistead Pointe', 'Colorado', 'Commercial Leasing', 263, 336, 329900, '', '', 2, 2, 0),
(17, '2013-06-04', 'Mission Trace I', '5A', 'Chelsea', 'Colorado', 'Commercial Leasing', 263, 336, 329900, '', '', 2, 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
