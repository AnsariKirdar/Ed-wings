-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 02:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

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
-- Table structure for table `blogs`
--
-- Creation: Apr 19, 2020 at 08:57 PM
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `likes` int(11) DEFAULT 0,
  `views` int(11) DEFAULT 0,
  `data` datetime DEFAULT current_timestamp(),
  `header_img` varchar(255) NOT NULL DEFAULT 'Banner.png',
  `c_by` varchar(255) DEFAULT NULL,
  `c_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `sub_title`, `content`, `file`, `likes`, `views`, `data`, `header_img`, `c_by`, `c_date`) VALUES
(3, 'Tour to Paris', 'Tour Kirdar', '<p><span style=\"text-align: justify; font-size: 24px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae aut nihil suscipit, esse quod tempore voluptates tempora odio illo, facilis culpa fugiat vero excepturi! Voluptas, modi? Alias voluptates aliquam eligendi enim blanditiis necessitatibus labore? Nostrum nulla unde alias quidem iste eligendi libero voluptas perferendis aliquid repellendus iure tempore rerum eum dignissimos dolorem, aliquam ut est maiores quia suscipit doloremque itaque esse consequuntur labore? Dolorem alias asperiores suscipit rem adipisci, cum saepe corporis blanditiis facilis architecto sit officia vel aliquid iure impedit illum nostrum repellendus perferendis numquam maiores placeat id reiciendis neque. Esse, dolor vel quidem ratione incidunt recusandae deserunt temporibus.</span><br style=\"text-align: justify;\"><br style=\"text-align: justify;\"><span style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style=\"font-size: 24px;\"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae aut nihil suscipit, esse quod tempore voluptates tempora odio illo, facilis culpa fugiat vero excepturi! Voluptas, modi? Alias voluptates aliquam eligendi enim blanditiis necessitatibus labore? Nostrum nulla unde alias quidem iste eligendi libero voluptas perferendis aliquid repellendus iure tempore rerum eum dignissimos dolorem, aliquam ut est maiores quia suscipit doloremque itaque esse consequuntur labore? Dolorem alias asperiores suscipit rem adipisci, cum saepe corporis blanditiis facilis architecto sit officia vel aliquid iure impedit illum nostrum repellendus perferendis numquam maiores placeat id reiciendis neque. Esse, dolor vel quidem ratione incidunt recusandae deserunt temporibus.</span></span><br></p>', '8fedbcb07981ab25c0076007f11f907fa.jpg', 2, 39, '0000-00-00 00:00:00', 'Banner.png', 'c_by', '2020-04-19 22:16:18'),
(4, 'Taj Mahal', 'Kirar Sub Tilte', '123', '613b7f954fa87dd5dc676efe358bd950a.jpg', 1, 1, '0000-00-00 00:00:00', 'Banner.png', 'Kirdar', '2020-04-20 19:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_gallery`
--
-- Creation: Apr 20, 2020 at 04:04 PM
--

DROP TABLE IF EXISTS `blogs_gallery`;
CREATE TABLE `blogs_gallery` (
  `id` int(11) NOT NULL,
  `blogs_id` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `c_date` datetime(6) DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs_gallery`
--

INSERT INTO `blogs_gallery` (`id`, `blogs_id`, `file`, `c_date`) VALUES
(1, '4', '4a24bf7836441891e4e8fa86d0dc8b95a.jpg', '2020-04-20 20:23:29.976079'),
(2, '4', '4a24bf7836441891e4e8fa86d0dc8b95a.jpg', '2020-04-20 20:23:43.065768'),
(3, '4', '4a24bf7836441891e4e8fa86d0dc8b95a.jpg', '2020-04-20 20:23:50.560408');

-- --------------------------------------------------------

--
-- Table structure for table `brochure`
--
-- Creation: Apr 30, 2020 at 08:40 PM
--

DROP TABLE IF EXISTS `brochure`;
CREATE TABLE `brochure` (
  `id` int(11) NOT NULL,
  `packages` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `image_File` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `c_by` varchar(255) DEFAULT NULL,
  `e_by` varchar(255) DEFAULT NULL,
  `c_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brochure`
--

INSERT INTO `brochure` (`id`, `packages`, `file`, `image_File`, `title`, `c_by`, `e_by`, `c_date`) VALUES
(1, '5', '3590a9c4c36da056836ba77f10744338a.pdf', '3590a9c4c36da056836ba77f10744338a.jpg', 'Goa', 'Kirdar', NULL, '2020-05-01 02:25:13'),
(3, '3', 'a584de0014d587f6408fa45e1214b8b2a.pdf', 'a584de0014d587f6408fa45e1214b8b2a.jpg', 'Tour to Paris', 'Kirdar', NULL, '2020-05-01 02:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `continent`
--
-- Creation: Apr 18, 2020 at 09:23 PM
--

DROP TABLE IF EXISTS `continent`;
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
-- Creation: Apr 18, 2020 at 09:23 PM
--

DROP TABLE IF EXISTS `country`;
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
-- Creation: Apr 30, 2020 at 09:42 PM
--

DROP TABLE IF EXISTS `customer_feedback`;
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
  `c_date` datetime NOT NULL DEFAULT current_timestamp(),
  `viewed` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`id`, `name`, `office_name`, `next_destination`, `destination_visited`, `departure_date`, `telephone`, `mobile`, `email`, `travel_again`, `recommend_friends`, `suggestions`, `ip`, `c_date`, `viewed`) VALUES
(1, 'Kirdar', 'XYZ', NULL, 'America', '2020-04-03', 'Telephone', 'Mobile', 'anwerahmed1771998@gmail.com', 'on', 'on', 'aaaaaa', '', '2020-04-03 01:18:53', 0),
(4, 'amitkchaudhary', 'XYZ', NULL, 'America', '2020-04-10', '8652434063', '86524343', '4545@gmail.com', 'on', 'on', 'aaaa', '', '2020-04-03 01:25:40', 0),
(5, 'amitkchaudhary', 'XYZ', 'demo-country', 'America', '2020-04-16', '865243', '434666', 'ansarifarid12112001@gmail.com', 'on', 'on', 'aaaaaaa', '', '2020-04-03 01:28:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--
-- Creation: Apr 18, 2020 at 09:23 PM
--

DROP TABLE IF EXISTS `gallery`;
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
-- Table structure for table `itinerary`
--
-- Creation: Apr 22, 2020 at 08:57 PM
--

DROP TABLE IF EXISTS `itinerary`;
CREATE TABLE `itinerary` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `days_place_name` longtext DEFAULT NULL,
  `days_place_decs` longtext DEFAULT NULL,
  `card_img` varchar(255) DEFAULT NULL,
  `header_img` varchar(255) DEFAULT NULL,
  `accommodation` varchar(255) DEFAULT NULL,
  `meals` varchar(255) DEFAULT NULL,
  `transportation` varchar(255) DEFAULT NULL,
  `visa` varchar(255) DEFAULT NULL,
  `included` longtext DEFAULT NULL,
  `activity_level` int(11) DEFAULT NULL,
  `group_size_min` int(4) DEFAULT NULL,
  `group_size_max` int(4) DEFAULT NULL,
  `group_size_avg` int(4) DEFAULT NULL,
  `travel_type` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `add_by` varchar(255) DEFAULT NULL,
  `continents` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `e_date` datetime DEFAULT NULL,
  `c_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`id`, `title`, `description`, `days_place_name`, `days_place_decs`, `card_img`, `header_img`, `accommodation`, `meals`, `transportation`, `visa`, `included`, `activity_level`, `group_size_min`, `group_size_max`, `group_size_avg`, `travel_type`, `tags`, `add_by`, `continents`, `country`, `price`, `e_date`, `c_date`) VALUES
(2, 'Kenya Tour', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error voluptatem? Qui et expedita ab magnam debitis reiciendis recusandae. Sint veritatis error optio ab amet consequatur adipisci fugit non dignissimos quisquam. At sed, animi quo consequuntur eos aliquam asperiores recusandae eius enim quos odio, perferendis quod nemo, dolore minus nobis rerum aliquid magni. Culpa nostrum hic quod eum rerum veniam vero pariatur recusandae, perspiciatis aspernatur accusamus optio praesentium expedita architecto laudantium, obcaecati, maiores dicta alias fugit in quia ullam consequatur? Optio libero itaque laudantium nisi voluptatum alias id, hic quos voluptates ipsa aliquid iusto saepe fugiat corrupti reiciendis praesentium quibusdam harum necessitatibus, doloribus error tempora? Consequuntur repellat, corrupti officia cum labore volupta', 'Kenya Tour 1-----Kenya Tour 2-----Kenya Tour 3-----Kenya Tour 4-----Kenya Tour 5-----Kenya Tour 6-----Kenya Tour 7', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.-----Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.-----Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.-----Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.-----Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.-----Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.-----Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.', '6d316ebc2e2ec35ab14e6455375d52dba.jpg', '6d316ebc2e2ec35ab14e6455375d52dba.jpg', 'yes accommodations', 'yes meals veg', 'yes transportation luxury car', 'on arrival', 'What Included Kenya line 1-----What Included Kenya line 2-----What Included Kenya line 3-----What Included Kenya line 4-----What Included Kenya line 5', 5, 5, 10, 8, 'Flight', 'Cycling , Climbing , Swing , Boating', 'Kirdar', 'Africa', 'Kenya', 300, NULL, '2020-04-23 02:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `like_log`
--
-- Creation: Apr 19, 2020 at 08:14 PM
--

DROP TABLE IF EXISTS `like_log`;
CREATE TABLE `like_log` (
  `id` int(11) NOT NULL,
  `ip` varchar(11) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_log`
--

INSERT INTO `like_log` (`id`, `ip`, `bid`) VALUES
(1, '::1', 33),
(3, '::1', 3),
(4, '::1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--
-- Creation: Apr 18, 2020 at 09:23 PM
--

DROP TABLE IF EXISTS `login`;
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
-- Table structure for table `news_letter`
--
-- Creation: Apr 30, 2020 at 11:32 PM
--

DROP TABLE IF EXISTS `news_letter`;
CREATE TABLE `news_letter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `c_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--
-- Creation: Apr 30, 2020 at 07:12 PM
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `packages` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `c_by` varchar(255) DEFAULT NULL,
  `e_by` varchar(255) DEFAULT NULL,
  `c_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `packages`, `file`, `description`, `c_by`, `e_by`, `c_date`) VALUES
(3, 'Duniya Dekho', '6b2ae4b66556ae6ccfd0e27b38b5a8632dfa063a423f6fac0b1b29d9a1b30086a.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, corrupti natus reprehenderit culpa dolores nisi quidem sapiente, ipsam sunt voluptatem odio quibusdam? Pariatur deserunt quae facilis molestiae saepe est. Maiores.', 'Kirdar', NULL, '2020-05-01 01:05:48'),
(4, 'Flexihol', '462c4e7b629c5f27047e09b3afdfce44998ecb42e678a39090831884cb6283eba.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, corrupti natus reprehenderit culpa dolores nisi quidem sapiente, ipsam sunt voluptatem odio quibusdam? Pariatur deserunt quae facilis molestiae saepe est. Maiores.', 'Kirdar', NULL, '2020-05-01 01:06:06'),
(5, 'Bharat Deko', 'dacd9f056c52c749e208850d6a157729f7c123a978e7ef168924e9fe7c441800a.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', NULL, '2020-05-01 01:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--
-- Creation: Apr 18, 2020 at 09:23 PM
--

DROP TABLE IF EXISTS `slider`;
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
(16, 'Prias', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, corrupti natus reprehenderit culpa dolores nisi quidem sapiente, ipsam sunt voluptatem odio quibusdam? Pariatur deserunt quae facilis molestiae saepe est. Maiores.', 'Kirdar', 'Book Now', 'd833fdcdcd4b459df61798329c6b99b7a.png', 'Kirdar', 'Kirdar', '2020-04-16 04:28:46'),
(22, 'Taj Mahal', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, nam eius tenetur distinctio perferendis modi ab necessitatibus beatae minus deserunt, maxime inventore quidem facere totam veniam sunt voluptate fuga porro dicta? Dolorem quasi error volupta', 'Kirdar', 'Book Now', '7dbc23d724d7beef76e443dabde439eca.jpg', 'Kirdar', NULL, '2020-04-18 23:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--
-- Creation: Apr 22, 2020 at 11:15 PM
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `from_city` varchar(255) DEFAULT NULL,
  `trip_to` varchar(255) DEFAULT NULL,
  `testimonial` longtext DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `c_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `from_city`, `trip_to`, `testimonial`, `file`, `c_date`) VALUES
(2, 'Kirdar 3', 'Mumbai, India', 'Prais', 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem', '80f9f34e2a95545d398fa5e2295f9a9ba.jpg', '2020-04-23 04:49:39'),
(3, 'Kirdar', 'Mumbai, India', 'Prais', 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem', '80f9f34e2a95545d398fa5e2295f9a9ba.jpg', '2020-04-23 04:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `views_log`
--
-- Creation: Apr 19, 2020 at 08:18 PM
--

DROP TABLE IF EXISTS `views_log`;
CREATE TABLE `views_log` (
  `id` int(11) NOT NULL,
  `ip` varchar(11) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `views_log`
--

INSERT INTO `views_log` (`id`, `ip`, `bid`) VALUES
(1, '::1', 3),
(2, '::1', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_gallery`
--
ALTER TABLE `blogs_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brochure`
--
ALTER TABLE `brochure`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_log`
--
ALTER TABLE `like_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views_log`
--
ALTER TABLE `views_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs_gallery`
--
ALTER TABLE `blogs_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brochure`
--
ALTER TABLE `brochure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `like_log`
--
ALTER TABLE `like_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `views_log`
--
ALTER TABLE `views_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
