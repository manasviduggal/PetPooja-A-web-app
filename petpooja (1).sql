-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2015 at 02:12 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petpooja`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `house_no.` varchar(10) NOT NULL,
  `area` varchar(20) NOT NULL,
  `city` varchar(25) NOT NULL DEFAULT 'DELHI',
  `postal_code` int(10) NOT NULL,
  `cus_id` varchar(15) DEFAULT NULL,
  `res_id` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`house_no.`, `area`, `city`, `postal_code`, `cus_id`, `res_id`) VALUES
('1857', 'JIIT', 'Noida', 201307, '1000', NULL),
('113', 'JIIT', 'Noida', 201307, '1001', NULL),
('109', 'JIIT', 'Noida', 201307, '1010', NULL),
('109', 'JIIT', 'Noida', 201307, '1011', NULL),
('D-69', 'Connaught Place', 'Delhi', 110001, NULL, '301'),
('57', 'Pritampura', 'Delhi', 110047, NULL, '302'),
('10', 'Janakpuri', 'Delhi', 110078, NULL, '303'),
('27', 'Khan Market', 'Delhi', 110006, NULL, '304');

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE IF NOT EXISTS `card_details` (
  `cus_id` int(15) NOT NULL,
  `Name_on_card` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `date_of_expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`cus_id`, `Name_on_card`, `type`, `card_no`, `date_of_expiry`) VALUES
(1011, 'ANKIT GOEL', 'Debit', '1450302823456789', '2015-12-22'),
(1010, 'SHRUTI SAHU', 'Credit', '1450301134567890', '2022-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(15) NOT NULL,
  `cus_name` varchar(20) NOT NULL,
  `cus_phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `addess` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_phone`, `email`, `password`, `addess`) VALUES
(1000, 'Aditya ', 1234567890, 'aditya_cool@gmail.com', '14503027', 'Room no. 1917\r\nABB-3\r\nJaypee Insitute of Information Technology\r\nA-10 Sec-6'),
(1001, 'manasvi', 2134567890, 'dmanasvi@gmail.com', '14503003', 'Room no. 1446\r\nG.B panth(H-4)\r\nJaypee Insitute of Information Technology\r\nA'),
(1010, 'Shruti', 2147483647, 'shruti_potterholic@gmail.com', '14503011', 'Room no. 1227\r\nG.B panth(H-4)\r\nJaypee Insitute of Information Technology\r\nA'),
(1011, 'Ankit Goel', 2147483647, 'lucifer_hell@gmail.com', '14503028', 'Room no. 1817\r\nABB-3\r\nJaypee Insitute of Information Technology\r\nA-10 Sec-6');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('dmanasvi@gmail.com', '14503003'),
('shruti_potterholic@gmail.com', '14503011'),
('aditya_cool@gmail.com', '14503027'),
('lucifer_hell@gmail.com', '14503028');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE IF NOT EXISTS `menu_item` (
  `res_id` varchar(15) NOT NULL,
  `item_id` varchar(10) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_price` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`res_id`, `item_id`, `item_name`, `item_price`) VALUES
('301', '30101', 'Plain Dosa ', 75.00),
('301', '30102', 'Masala Dosa', 100.00),
('301', '30103', 'Rava Dosa', 120.00),
('301', '30104', 'Plain Uttapam', 80.00),
('301', '30105', 'Masala Uttapam', 95.00),
('301', '30106', 'Rava uttapam', 120.00),
('301', '30107', 'Idli Sambhar', 75.00),
('301', '30108', 'Vada Sambhar', 80.00),
('301', '30109', 'Kesari', 60.00),
('302', '30201', 'Dhokla', 50.00),
('302', '30202', 'Khandvi', 60.00),
('302', '30203', 'Patra', 60.00),
('302', '30204', 'Fafda with Jalebi', 75.00),
('302', '30205', 'Bhakri', 20.00),
('302', '30206', 'Thepla', 25.00),
('302', '30207', 'Khichdi', 80.00),
('302', '30208', 'Kadhi', 80.00),
('302', '30209', 'Sev Tamatar', 75.00),
('302', '30210', 'Handvo', 90.00),
('302', '30211', 'Undhiyu', 120.00),
('302', '30212', 'Agashiye Special Thaali', 200.00),
('303', '30301', 'Postor Bora ', 75.00),
('303', '30302', 'Chor Chori', 120.00),
('303', '30303', 'Baigun Bhajja', 165.00),
('303', '30304', 'Murgir Jhol', 150.00),
('303', '30305', 'Sorsebata Llish Mach', 180.00),
('303', '30306', 'Roshun Bhapa Bhetki', 200.00),
('303', '30307', 'Chingri Malai Curry', 200.00),
('303', '30308', 'Mishti Doi', 50.00),
('303', '30309', 'Rosogolla', 60.00),
('304', '30401', 'Rajma', 90.00),
('304', '30402', 'Dal Makhani', 90.00),
('304', '30403', 'Sarso da Saag', 100.00),
('304', '30404', 'Paneer Butter Masala ', 120.00),
('304', '30405', 'Butter Chicken', 150.00),
('304', '30406', 'Tandoori  Chicken', 200.00),
('304', '30407', 'Makki di Roti', 30.00),
('304', '30408', 'Aloo da Parantha', 35.00),
('304', '30409', 'Butter Naan', 40.00),
('304', '30410', 'Garlic Naan', 45.00),
('304', '30411', 'Rice', 60.00),
('304', '30412', 'Sweet Lassi', 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `cus_id` varchar(15) NOT NULL,
  `item_id` varchar(15) NOT NULL,
  `res_id` varchar(15) NOT NULL,
  `order_id` varchar(15) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(30) NOT NULL DEFAULT 'it is being prepared',
  `order_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_er`
--

CREATE TABLE IF NOT EXISTS `order_er` (
  `order_id` varchar(15) NOT NULL,
  `item_id` varchar(15) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reastaurant`
--

CREATE TABLE IF NOT EXISTS `reastaurant` (
  `res_id` varchar(15) NOT NULL,
  `res_name` varchar(35) NOT NULL,
  `cuisine` varchar(35) NOT NULL,
  `res_phone` int(10) NOT NULL,
  `food_type` varchar(10) NOT NULL,
  `minimum_order` int(5) NOT NULL DEFAULT '250',
  `hours_open` varchar(20) NOT NULL DEFAULT '10 AM - 10 PM',
  `avg_rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reastaurant`
--

INSERT INTO `reastaurant` (`res_id`, `res_name`, `cuisine`, `res_phone`, `food_type`, `minimum_order`, `hours_open`, `avg_rating`) VALUES
('301', 'Dakshinayan', 'South Indian', 987654321, 'veg', 500, '10 AM - 10 PM', 4.2),
('302', 'Agashiye', 'gujarati', 897654321, 'veg', 250, '10 AM - 10 PM', 3.9),
('303', 'Aaheli', 'Bengali', 789654321, 'Non-veg', 350, '10 AM - 10 PM', 4.1),
('304', 'Dhaba', 'punjabi', 678954321, 'Non veg', 250, '10 AM - 10 PM', 4.5);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `res_id` varchar(15) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `r_reviews` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_details`
--
ALTER TABLE `card_details`
  ADD UNIQUE KEY `Name_on_card` (`Name_on_card`),
  ADD UNIQUE KEY `card_no` (`card_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_id` (`item_id`),
  ADD UNIQUE KEY `item_name` (`item_name`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `reastaurant`
--
ALTER TABLE `reastaurant`
  ADD PRIMARY KEY (`res_id`),
  ADD UNIQUE KEY `res_id` (`res_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD UNIQUE KEY `res_id` (`res_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
