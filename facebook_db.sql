-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 03:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `comment_text` varchar(255) DEFAULT NULL,
  `profile_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_datetime`, `comment_text`, `profile_id`, `post_id`) VALUES
(240, '2022-03-21 10:51:07', 'You are handsome.', 15, 135),
(245, '2022-03-21 13:25:43', 'You are handsome.', 15, 139),
(248, '2022-03-21 14:48:41', 'You are handsome.', 15, 144),
(252, '2022-03-21 15:58:57', 'You are handsome.', 30, 145),
(253, '2022-03-21 15:59:03', 'Handsome man', 30, 145),
(262, '2022-03-21 19:35:12', 'You are handsome.', 31, 147),
(267, '2022-03-21 21:01:08', 'You are handsome.', 2, 155),
(268, '2022-03-21 21:01:16', 'hekllo', 2, 156);

-- --------------------------------------------------------

--
-- Stand-in structure for view `comments_post`
-- (See below for the actual view)
--
CREATE TABLE `comments_post` (
`comment_id` int(11)
,`post_id` int(11)
,`comment_text` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `post_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`post_id`, `profile_id`) VALUES
(139, 3),
(143, 29),
(144, 29),
(145, 30),
(145, 30),
(145, 30),
(145, 30),
(145, 30),
(145, 30),
(144, 29),
(147, 31),
(155, 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `like_post`
-- (See below for the actual view)
--
CREATE TABLE `like_post` (
`post_id` int(11)
,`profile_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `text_post` varchar(255) NOT NULL,
  `media_location` varchar(255) NOT NULL,
  `create_datetime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `profile_id` int(11) DEFAULT NULL,
  `images` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `text_post`, `media_location`, `create_datetime`, `profile_id`, `images`) VALUES
(135, 'sdfasdf', '', '2022-03-21 10:51:00', 1, 0x494d472d363233376636323439653232372d73756e7365742e6a7067),
(136, 'efgdsgsdfgsdf', '', '2022-03-21 11:09:38', 1, 0x494d472d363233376661383264653534342d73756e7365742e6a7067),
(139, 'Hello baby...!', '', '2022-03-21 13:25:38', 3, 0x494d472d363233383139636233316563352d7361642e6a7067),
(143, 'My dream. Anyone, Do you like the same me?', '', '2022-03-21 14:43:46', 29, 0x494d472d363233383263396162656239642d6c6170746f702e6a7067),
(144, 'heh, how are you?', '', '2022-03-21 14:55:41', 29, 0x494d472d363233383264636531306635662d706578656c732d73696d6f6e2d6265726765722d313332333535302e6a7067),
(145, 'Hello', '', '2022-03-21 15:58:45', 30, 0x494d472d363233383365343530396466332d706578656c732d73696d6f6e2d6265726765722d313332333535302e6a7067),
(147, 'Hello', '', '2022-03-21 19:35:05', 31, 0x494d472d363233383730663934636333652d73756e7365742d312e6a7067),
(148, 'Hello ', '', '2022-03-21 20:05:49', 31, 0x494d472d363233383738326439343237632d73756e7365742d312e6a7067),
(149, 'hhhh', '', '2022-03-21 20:06:39', 31, 0x494d472d363233383738356662383332612d73756e7365742d312e6a7067),
(151, 'heh', '', '2022-03-21 20:08:21', 15, 0x494d472d363233383738633534373766352d73756e7365742d312e6a7067),
(152, 'sefhsdfg', '', '2022-03-21 20:08:58', 15, 0x494d472d363233383738656136623236362d6d6f756e7461696e2d312e6a7067),
(153, 'dgdfg', '', '2022-03-21 20:10:42', 29, 0x494d472d363233383739353236383130632d7068656172756e2e6a7067),
(154, 'dgdsfg', '', '2022-03-21 20:11:08', 29, 0x494d472d363233383739366334396662322d3233332e6a7067),
(155, 'hello', '', '2022-03-21 20:43:45', 2, 0x494d472d363233383831313161303736362d706578656c732d73696d6f6e2d6265726765722d313332333535302e6a7067),
(156, 'hini', '', '2022-03-21 21:01:21', 2, 0x494d472d363233383835316565666336612d);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profile_id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email_address` varchar(79) NOT NULL,
  `password` varchar(79) NOT NULL,
  `country` varchar(79) NOT NULL,
  `date_of_birth` date NOT NULL,
  `profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `first_name`, `last_name`, `email_address`, `password`, `country`, `date_of_birth`, `profile`) VALUES
(1, 'Hang', 'Vansao', 'vansao@gmail.com', '01234564', 'Cambodia', '2002-10-12', 'images/man.png'),
(2, 'Chhun', 'Phearun', 'phearun@gmail.com', '1234564phearun', 'Cambodia', '2002-09-10', 'images/handsome.jpg'),
(3, 'Meng', 'Liza', 'liza@gmail.com', 'lizabeautiful', 'Cambodia', '2002-08-09', 'images/man.png'),
(28, 'Hang', 'Vansao', 'vansao@gmail.com', '01234564', 'cambodia', '2022-03-18', NULL),
(30, 'Sorey', 'Yin', 'sorey@gmail.com', '7979', 'Cambodia', '2001-10-15', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_posts`
-- (See below for the actual view)
--
CREATE TABLE `user_posts` (
`post_id` int(11)
,`text_post` varchar(255)
,`post_image` longblob
,`profile_id` int(11)
,`first_name` varchar(40)
,`last_name` varchar(40)
,`email_address` varchar(79)
,`password` varchar(79)
,`create_datetime` datetime
,`profile_image` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `comments_post`
--
DROP TABLE IF EXISTS `comments_post`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `comments_post`  AS SELECT `comments`.`comment_id` AS `comment_id`, `comments`.`post_id` AS `post_id`, `comments`.`comment_text` AS `comment_text` FROM `comments` ;

-- --------------------------------------------------------

--
-- Structure for view `like_post`
--
DROP TABLE IF EXISTS `like_post`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `like_post`  AS SELECT `likes`.`post_id` AS `post_id`, `likes`.`profile_id` AS `profile_id` FROM `likes` GROUP BY `likes`.`post_id` ;

-- --------------------------------------------------------

--
-- Structure for view `user_posts`
--
DROP TABLE IF EXISTS `user_posts`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_posts`  AS SELECT `posts`.`post_id` AS `post_id`, `posts`.`text_post` AS `text_post`, `posts`.`images` AS `post_image`, `profiles`.`profile_id` AS `profile_id`, `profiles`.`first_name` AS `first_name`, `profiles`.`last_name` AS `last_name`, `profiles`.`email_address` AS `email_address`, `profiles`.`password` AS `password`, `posts`.`create_datetime` AS `create_datetime`, `profiles`.`profile` AS `profile_image` FROM (`posts` join `profiles` on(`posts`.`profile_id` = `profiles`.`profile_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `post_id` (`post_id`),
  ADD KEY `profile_id` (`profile_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `profile_id` (`profile_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`profile_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`profile_id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`profile_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
