-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: 213.171.200.101
-- Generation Time: May 23, 2020 at 02:54 AM
-- Server version: 5.6.48-log
-- PHP Version: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outwooddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbloutwoodlist`
--

CREATE TABLE IF NOT EXISTS `tbloutwoodlist` (
  `id` int(11) NOT NULL,
  `Marque` varchar(100) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Model` varchar(250) NOT NULL,
  `VYear` varchar(50) NOT NULL,
  `Miles` varchar(50) NOT NULL,
  `Description1` text NOT NULL,
  `Description2` text NOT NULL,
  `Description3` text NOT NULL,
  `Description4` text NOT NULL,
  `Description5` text NOT NULL,
  `Description6` text NOT NULL,
  `Description7` text NOT NULL,
  `Description8` text NOT NULL,
  `Description9` text NOT NULL,
  `Description10` text NOT NULL,
  `Description11` text NOT NULL,
  `Description12` text NOT NULL,
  `Description13` text NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Sold` varchar(10) NOT NULL,
  `Pic1` varchar(250) NOT NULL,
  `Pic2` varchar(250) NOT NULL,
  `Pic3` varchar(250) NOT NULL,
  `Pic4` varchar(250) NOT NULL,
  `VActive` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbloutwoodlist`
--

INSERT INTO `tbloutwoodlist` (`id`, `Marque`, `Category`, `Model`, `VYear`, `Miles`, `Description1`, `Description2`, `Description3`, `Description4`, `Description5`, `Description6`, `Description7`, `Description8`, `Description9`, `Description10`, `Description11`, `Description12`, `Description13`, `Price`, `Sold`, `Pic1`, `Pic2`, `Pic3`, `Pic4`, `VActive`) VALUES
(1, 'Mercedes-Benz', '5', '190E 2.0 5 Speed Manual', '1992', '58,000', 'Pueblo Beige with Medium Red Leather', 'Rare 5 Speed Manual', 'Very High Specification', 'Air Conditioning', 'Heated Seats', 'Full Leather Interior', 'Orthopeadic Seats', 'Original Stereo System', 'Headlamp Wash Wipe', 'Outside Temperature Gauge', '4 x Electric Windows', 'ABS Brakes', '', 'Â£5,995', '0', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517042250_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517042250_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517043719_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517043719_4.jpg', 'initial'),
(20, 'Rover', '6', 'P6 3500 S Estoura', '1974&!@#&M&!@#&', '72,000', 'Tobacco Leaf with Black Leather', 'One of eight 3500 S Estoura', 'Original Car', 'Massive History from New', 'Concours Condition', 'Prize Winning Cups and Plaques', 'Original Handbooks and Service Books', 'Superb Throughout !!!', '', '', '', '', '', 'SOLD', '0', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517042355_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517042355_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517042355_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517042355_4.jpg', 'initial'),
(21, 'Aston Martin', '5', 'DBS Superleggera', '2019&!@#&19', '3,000', 'Divine Red Metallic', 'Obsidian Black & Spicy Red Leather', 'Quilted Geode Leather', 'Gloss Black Roof Panel & Mirror Caps', 'Carbon Fibre Spliter & Diffuser', 'Gold Anodised Brake Calipers', 'Climate Control', 'Satellite Navigation', 'Electric Memory Heated Seats', 'Service Pack', 'Full Fitted Luggage', '1 Owner', '', 'P.O.A.', '0', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517043100_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517043100_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517043100_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517043100_4.jpg', 'initial'),
(23, 'Land Rover', '5', 'Discovery HSE', '2013', '58,000', 'Nara Bronze with Almond Leather', 'Satellite Navigation', 'Triple Sunroofs', 'Electric Memory Heated Seats', 'Cruise Control', '7 Seats', 'Bluetooth Phone Prep', 'FLRSH', '', '', '', '', '', 'Â£20,995', '1', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517042458_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517042458_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517042458_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200517042458_4.jpg', 'initial'),
(27, 'Datsun', '6', '260Z Samuri', '1974', '', 'Very Rare, One of Two built by The Samurai Motor Company', 'Orange and Bronze, Original Colours', 'Nut & Bolt Restoration', 'Concours Condition', 'Superb Throughout', '200 BHP', '', '', '', '', '', '', '', 'Â£59,995', '1', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522011818_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522011818_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522011818_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522011818_4.jpg', 'initial'),
(28, 'Bentley', '5', 'GTC Speed', '2013&!@#&13&!@#&', '32,000', 'St James Red/Black Hide with Red Stitching', 'Mulliner Driving Specification', 'Sports Exhaust System', 'Carbon Pack', 'Black Piano Wood Trim', 'Bentley Warranty & Service Pack', 'Lambs Wool Over Rugs', 'Electric Memory Cooled & Heated Seats', 'Air Scarf', 'Satellite Navigation', 'Key Entry', 'Full Bentley Service History', '', '', '0', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013334_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013334_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013334_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013334_4.jpg', 'initial'),
(29, 'Toyota', '6', 'Land Cruiser FJ45 Pick-Up', '1976&!@#&R&!@#&', '', 'Rustic Green/Grey Interior', 'Very Rare UK Supplied FJ45', '4,200 cc 6 Cylinder Petrol', 'Full Restored', 'Photographic Record of Restoration', 'VAT Qualifying', '', '', '', '', '', '', '', 'SOLD', '0', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013602_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013602_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013602_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013602_4.jpg', 'initial'),
(30, 'Ferrari', '5', '355 Spider Manual 6 Speed', '1995&!@#&N&!@#&', '12,000', 'Giallo Fly with Blu Scuro Leather', '12,000 Miles from New!', 'Fully Documented Service History', 'Climate Control', 'Power Soft Top', 'PAS', 'ABS', 'Superb Throughout !!!', '', '', '', '', '', 'SOLD', '0', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013845_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013845_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013845_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522013845_4.jpg', 'initial'),
(31, 'Land Rover', '6', 'Series II 88', '1963', '', 'Land Rover Green with Grey Upholstery', 'New Galvanised Chassis', 'Fully Rebuilt with Photographic Record', 'Engine 2,250 Diesel, Fully Rebuilt', 'New Soft Top', 'Chequer Plate Front Wings', '', '', '', '', '', '', '', 'Â£19,995', '1', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014105_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014105_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014105_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014105_4.jpg', 'initial'),
(32, 'Aston Martin', '5', 'DB7 V12 Vantage', '2004&!@#&04&!@#&', '16,000', 'Tungsten Grey Metallic with Charcoal Leather piped Light Grey', 'Last Year of Production', 'Automatic', 'Electric Heated Seats', 'Air Conditioning', 'Sports Seats', 'Factory Red Brake Calipers', 'Battery Charger', 'Factory Becker Stereo System', 'Wire Mesh Front Grill', 'Full Service History', 'Repeat Only 16,000 Miles !!!', '', 'SOLD', '0', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014523_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014523_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014523_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014523_4.jpg', 'initial'),
(33, 'Citroen', '6', 'DS 23 Pallas Right Hand Drive', '1975', '', 'Palladium Grey Metallic', 'Black Roof', 'Full Tan Leather', 'Fully Restored Over Â£30,000 Spent', 'PAS', 'Comprehensive History File', 'Superb Throughout', '', '', '', '', '', '', 'Â£49,995', '1', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014852_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014852_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014852_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522014852_4.jpg', 'initial'),
(34, 'Ducati', '5', '999 S', '2003&!@#&03&!@#&', '10,000', 'Ducati Red with White Decals', 'Termignoni Exhaust System', 'Carbon Rear Mudguard', 'All Handbooks', 'Full Service History', 'Timing Belt Service & New Mot March 2020', '', '', '', '', '', '', '', 'SOLD', '0', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522015300_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522015300_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522015300_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522015300_4.jpg', 'initial'),
(35, 'Bultaco', '6', '325cc Sherpa', '1973', '', 'Fully Restored', 'World Trials Champions during 1970&!@#&s', 'UK Road Registered', 'Superb!', '', '', '', '', '', '', '', '', '', 'Â£4,995', '1', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522015723_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522015723_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522015723_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522015723_4.jpg', 'initial'),
(36, 'Ossa', '6', '250 Enduro', '1972', '', 'Rare Spanish Enduro Bike', 'Fully Restored', 'Original Specification', 'Can be Road Registered', '', '', '', '', '', '', '', '', '', 'Â£5,995', '1', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522020922_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522020922_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522020922_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522020922_4.jpg', 'initial'),
(37, 'Mini', '5', 'Cooper S Automatic', '2014&!@#&14&!@#&', '43,000', 'White Silver Metallic ', 'Satellite Navigation', 'Chili Pack', 'Head Up Display', 'Heated Seats', 'Harman Kardon Hi-Fi', 'Cruise Control', 'Privacy Glass', '17*!@#* Cosmos Alloy Wheels', 'Black Piano Wood Interior Trim', 'FSH', '', '', 'Â£12,495', '1', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522022313_1.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522022313_2.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522022313_3.jpg', '/home/linweb19/i/in-house-marketing.co.uk-1065286146/user/htdocs/outwood_php/admin/upload/20200522022313_4.jpg', 'initial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbloutwoodlist`
--
ALTER TABLE `tbloutwoodlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbloutwoodlist`
--
ALTER TABLE `tbloutwoodlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
