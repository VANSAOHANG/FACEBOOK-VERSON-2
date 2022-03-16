-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 09:59 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
-- Table structure for table `profile`
--

CREATE TABLE `profiles` (
  `profile_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email_address` varchar(79) NOT NULL,
  `password` varchar(79) NOT NULL,
  `country` varchar(79) NOT NULL,
  `date_of_birth` date NOT NULL,
  `profile` varchar(255)
) ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `first_name`, `last_name`,`email_address`,`password`,`country`,`date_of_birth`,`profile`) VALUES
(1,'Hang','Vansao','vansao@gmail.com','01234564','Cambodia','2002-10-12','images/handsome.jpg'),
(2,'Chhun','Phearun','phearun@gmail.com','1234564phearun','Cambodia','2002-09-10','images/handsome.jpg'),
(3,'Meng','Liza','liza@gmail.com','lizabeautiful','Cambodia','2002-08-09','images/beautiful.jpg');

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `text_post` varchar(255) NOT NULL,
  `media_location` varchar(255) NOT NULL,
  `create_datetime` datetime NOT NULL,
  `profile_id` int ,
  foreign key (profile_id) REFERENCES profiles(profile_id),
  `images` VARCHAR(255)
) ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `text_post`, `media_location`,`create_datetime`,`profile_id`) VALUES
(1,'Today is the best for me to graduate at universtiy','At Phnom Penh','2020-10-09 09:42:55',2),
(2,'If you want to be a beautiful girl, you should take care of yourself','At Banteay Mean Chey','2019-10-08 13:25:23',3),
(3,'You are not a lone','At home','2021-12-07 14:15:32',1);


--
-- Table structure for table `posts`
--

CREATE TABLE `likes` (
  `post_id` int(11) NOT NULL ,
  foreign key (post_id) REFERENCES posts(post_id) ON DELETE CASCADE,
  `profile_id` int NOT NULL,
  foreign key (profile_id) REFERENCES profiles(profile_id) ON DELETE CASCADE
) ;
--
-- Dumping data for table `posts`
--

INSERT INTO `likes` (`post_id`,`profile_id`) VALUES
(1,2),
(2,3),
(3,1),
(1,3),
(3,2);

--
-- Table structure for table `posts`
--

CREATE TABLE `comments` (
 `comment_id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `comment_datetime` DATETIME NOT NULL,
 `comment_text` VARCHAR(255) NOT NULL,
 `profile_id` INT(11) NOT NULL,
 foreign key (profile_id) REFERENCES profiles(profile_id),
  `post_id` INT(11) NOT NULL,
  foreign key (post_id) REFERENCES posts(post_id) ON DELETE CASCADE

) ;
--
-- Dumping data for table `posts`
--

INSERT INTO `comments` (`comment_id`,`comment_datetime`,`comment_text`,`profile_id`,`post_id`) VALUES
(1,'2021-12-02 12:23:11','Congratulation',2,1),
(2,'2021-12-02 22:23:11','Congratulation',2,1),
(3,'2021-12-02 10:23:11','Congratulation',2,1),
(4,'2019-11-20 12:23:11','Wow',3,2),
(5,'2019-11-20 22:23:11','Wow',3,2),
(6,'2019-11-20 10:23:11','Awesome',3,2),
(7,'2021-12-08 12:23:11','Yes, you are not a lone',1,3),
(8,'2021-12-08 22:23:11','That is not good',1,3),
(9,'2021-12-08 10:23:11','Why not!',1,3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
