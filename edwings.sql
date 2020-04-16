-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 11:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edwings`
--

-- --------------------------------------------------------

--
-- Table structure for table `continent`
--

CREATE TABLE `continent` (
  `id` int(11) NOT NULL,
  `continents` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `c_by` varchar(255) DEFAULT NULL,
  `e_by` varchar(255) DEFAULT NULL,
  `c_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `continent`
--

INSERT INTO `continent` (`id`, `continents`, `description`, `c_by`, `e_by`, `c_date`) VALUES
(8, 'Europe', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', 'Kirdar', '2020-04-16 06:03:00'),
(10, 'South America', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', 'Kirdar', '2020-04-16 06:03:20'),
(12, 'Asia', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', 'Kirdar', '2020-04-16 06:03:37'),
(13, 'Australia', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', 'Kirdar', '2020-04-16 06:03:45'),
(14, 'Antarctica', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', 'Kirdar', '2020-04-16 06:03:56'),
(16, 'North America', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 07:00:49'),
(17, 'Africa', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 07:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `continents` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `c_by` varchar(255) DEFAULT NULL,
  `e_by` varchar(255) DEFAULT NULL,
  `c_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `continents`, `country`, `description`, `c_by`, `e_by`, `c_date`) VALUES
(1, 'Europe', 'Austria', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:37:00'),
(2, 'Europe', 'Belgium', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:44:33'),
(3, 'Europe', 'France', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:46:03'),
(4, 'Europe', 'Germany', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:46:16'),
(5, 'Europe', 'Russia', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:46:27'),
(7, 'North America', 'New Yory', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:47:07'),
(8, 'North America', 'Los Angeles', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:47:27'),
(11, 'Asia', 'Cambodia', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:54:26'),
(12, 'Asia', 'Bali', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:54:36'),
(13, 'Asia', 'Japan', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:55:10'),
(15, 'Australia', 'Australia', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:56:08'),
(16, 'Australia', 'New Zealand', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:56:25'),
(18, 'Africa', 'South Africa', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:56:58'),
(19, 'Africa', 'Tanzania', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:57:19'),
(20, 'Africa', 'Zambia', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 06:57:31'),
(21, 'Africa', 'Kenya', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-04-16 07:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE `customer_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `office_name` varchar(255) DEFAULT NULL,
  `next_destination` varchar(255) DEFAULT NULL,
  `destination_visited` varchar(255) DEFAULT NULL,
  `departure_date` varchar(30) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `travel_again` varchar(3) DEFAULT NULL,
  `recommend_friends` varchar(3) DEFAULT NULL,
  `suggestions` longtext DEFAULT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `c_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`id`, `name`, `office_name`, `next_destination`, `destination_visited`, `departure_date`, `telephone`, `mobile`, `email`, `travel_again`, `recommend_friends`, `suggestions`, `ip`, `c_date`) VALUES
(1, 'Kirdar', 'XYZ', NULL, 'America', '2020-04-03', 'Telephone', 'Mobile', 'anwerahmed1771998@gmail.com', 'on', 'on', 'aaaaaa', '', '2020-04-03 01:18:53'),
(2, 'Kirdar', 'XYZ', NULL, 'America', '2020-04-03', 'Telephone', 'Mobile', 'anwerahmed1771998@gmail.com', 'on', 'on', 'aaaaaa', '', '2020-04-03 01:19:29'),
(3, 'Kirdar', 'XYZ', NULL, 'America', '2020-04-03', 'Telephone', 'Mobile', 'anwerahmed1771998@gmail.com', 'on', 'on', 'aaaaaa', '', '2020-04-03 01:20:35'),
(4, 'amitkchaudhary', 'XYZ', NULL, 'America', '2020-04-10', '8652434063', '86524343', '4545@gmail.com', 'on', 'on', 'aaaa', '', '2020-04-03 01:25:40'),
(5, 'amitkchaudhary', 'XYZ', 'demo-country', 'America', '2020-04-16', '865243', '434666', 'ansarifarid12112001@gmail.com', 'on', 'on', 'aaaaaaa', '', '2020-04-03 01:28:55'),
(6, 'amitkchaudhary', 'XYZaaa', 'demo-country', 'America', '2020-04-15', '86', '52', 'edovk9q@upcmaill.com', 'Yes', 'Yes', 'aaa', '::1', '2020-04-03 01:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` longtext DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `f_password` int(8) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `trys` int(1) DEFAULT NULL,
  `trys_out` datetime DEFAULT NULL,
  `c_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`, `email`, `f_password`, `type`, `trys`, `trys_out`, `c_date`) VALUES
(1, 'Kirdar', 'Kirdar', '202cb962ac59075b964b07152d234b70', 'anwerahmed1771998@gmail.com', 123, 'admin', 4, '2020-03-30 02:14:21', '2020-03-30 02:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `link_text` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `c_by` varchar(255) DEFAULT NULL,
  `e_by` varchar(255) DEFAULT NULL,
  `c_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `link`, `link_text`, `file`, `c_by`, `e_by`, `c_date`) VALUES
(8, '123', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', 'Book Now', 'd01a43e098797a4a3f331b58fc623f5fblack-iphone-7-1275229.jpg', '', 'Kirdar', '0000-00-00 00:00:00'),
(13, '789', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', 'Book Now', '2f51666d51e00ec5a9083db5ec58260eslide-3.jpg', '', 'Kirdar', '0000-00-00 00:00:00'),
(16, 'Vision Technology', 'Kirdar', 'Kirdar', 'Book Now', '43a67436e3fb5f1f17ddb036c2995758android-android-phone-cell-phone-cellphone-404280.jpg', 'Kirdar', NULL, '2020-04-16 04:28:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `continent`
--
ALTER TABLE `continent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
