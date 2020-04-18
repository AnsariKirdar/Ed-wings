-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 11:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29
CREATE Database `edwings`;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `thumb` longtext DEFAULT NULL,
  `full_img` longtext DEFAULT NULL,
  `u_by` varchar(255) DEFAULT NULL,
  `e_date` datetime DEFAULT current_timestamp(),
  `c_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `thumb`, `full_img`, `u_by`, `e_date`, `c_date`) VALUES
(7, 'Taj Mahal', ' 444c5fa7e80ce8facf2c8aad052f1b26a.jpg', ' 444c5fa7e80ce8facf2c8aad052f1b26a.jpg', 'Kirdar', '2020-04-18 23:53:48', '0000-00-00 00:00:00'),
(8, 'lorem', ' 2a069651f789df22f60e57534f038f4ea.jpg', ' 2a069651f789df22f60e57534f038f4ea.jpg', 'Kirdar', '2020-04-18 23:54:03', '0000-00-00 00:00:00'),
(9, 'lorem', ' c79689cbf24d39a5d7bb50b9a94a0e98a.jpg', ' c79689cbf24d39a5d7bb50b9a94a0e98a.jpg', 'Kirdar', '2020-04-18 23:54:33', '0000-00-00 00:00:00'),
(10, 'lorem', ' adf55fb6614250aa72b934b38f917c11a.jpg', ' adf55fb6614250aa72b934b38f917c11a.jpg', 'Kirdar', '2020-04-18 23:54:47', '0000-00-00 00:00:00'),
(11, 'lorem', ' 62dd3ebc22035fc9ce159e842a88578da.jpg', ' 62dd3ebc22035fc9ce159e842a88578da.jpg', 'Kirdar', '2020-04-18 23:55:13', '0000-00-00 00:00:00'),
(12, 'lorem', ' 404e80af2cc5732ee64e88fd5f5f5716a.jpg', ' 404e80af2cc5732ee64e88fd5f5f5716a.jpg', 'Kirdar', '2020-04-18 23:55:26', '0000-00-00 00:00:00'),
(13, 'lorem', ' 7242befd8e31d40af9cb1d675d487d11a.jpg', ' 7242befd8e31d40af9cb1d675d487d11a.jpg', 'Kirdar', '2020-04-18 23:55:50', '0000-00-00 00:00:00'),
(14, 'lorem', ' 618f3950b7ef36179dcb42a11c7f52eba.jpg', ' 618f3950b7ef36179dcb42a11c7f52eba.jpg', 'Kirdar', '2020-04-18 23:55:58', '0000-00-00 00:00:00'),
(15, 'Taj Mahalaaa', ' 387eaa621a7dbc8d3f68bb560575b928a.jpg', ' 387eaa621a7dbc8d3f68bb560575b928a.jpg', 'Kirdar', '2020-04-19 02:48:18', '0000-00-00 00:00:00'),
(16, 'Taj Mahalaa', ' e00cf0dfd0444983803d6984d7091e81a.jpg', ' e00cf0dfd0444983803d6984d7091e81a.jpg', 'Kirdar', '2020-04-19 02:48:44', '0000-00-00 00:00:00');

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
(8, 'Mountain Climbing', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', 'Best Deal', 'b898dd2511c21ca869bd3aca3d9f70c6photo-1508558936510-0af1e3cccbab.jpg', '', 'Kirdar', '0000-00-00 00:00:00'),
(13, 'Dubai', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', 'Book Now', 'e3d426fb2cc81c5fc06cd1bf99347523photo-1462007895615-c8c073bebcd8.jpg', '', 'Kirdar', '0000-00-00 00:00:00'),
(16, 'Prias', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, corrupti natus reprehenderit culpa dolores nisi quidem sapiente, ipsam sunt voluptatem odio quibusdam? Pariatur deserunt quae facilis molestiae saepe est. Maiores.', 'Kirdar', 'Book Now', '0a34dfe740ebdb6607e8b25eaa9a03b9photo-1502602898657-3e91760cbb34.png', 'Kirdar', 'Kirdar', '2020-04-16 04:28:46'),
(22, 'Taj Mahal', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', 'Book Now', '7dbc23d724d7beef76e443dabde439eca.jpg', 'Kirdar', NULL, '2020-04-18 23:49:09');

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
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
