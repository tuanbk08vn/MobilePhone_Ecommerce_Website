-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2017 at 04:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(30) NOT NULL,
  `product_id` int(8) NOT NULL,
  `quantity` int(6) NOT NULL,
  `price_per_unit` decimal(10,0) NOT NULL,
  `create_date` date NOT NULL,
  `purchased` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `path`, `file_name`) VALUES
(1, 'uploads/product/9d3a605d99d91881b8f0fe1dadc4ec62.jpg', 'macbook-air-17inches'),
(2, 'uploads/product/MacBook_Air_2015_13inch_800home.jpg', 'macbook-air-17inches'),
(3, 'uploads/product/macbookpro13-100657828-orig.jpg', 'macbook-air-17inches');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(8) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `news_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `content`, `news_photo`) VALUES
(1, 'Internet of Things', 'Typically, IoT is expected to offer advanced connectivity of devices, systems, and services that goes beyond machine-to-machine (M2M) communications and covers a variety of protocols, domains, and applications.[12] The interconnection of these embedded devices (including smart objects), is expected to usher in automation in nearly all fields', 'upload/news/AAEAAQAAAAAAAAVaAAAAJGMxMWRmZDhlLTI1ZjEtNGFkYi04ZDZiLTAyNTA5Njg4NGRiMw-331x219.png'),
(1, 'Internet of Things', 'Typically, IoT is expected to offer advanced connectivity of devices, systems, and services that goes beyond machine-to-machine (M2M) communications and covers a variety of protocols, domains, and applications.[12] The interconnection of these embedded devices (including smart objects), is expected to usher in automation in nearly all fields', 'upload/news/amazon-fire-phone.png'),
(1, 'Internet of Things', 'Typically, IoT is expected to offer advanced connectivity of devices, systems, and services that goes beyond machine-to-machine (M2M) communications and covers a variety of protocols, domains, and applications.[12] The interconnection of these embedded devices (including smart objects), is expected to usher in automation in nearly all fields', 'upload/news/future-iphone.jpg'),
(1, 'Internet of Things', 'Typically, IoT is expected to offer advanced connectivity of devices, systems, and services that goes beyond machine-to-machine (M2M) communications and covers a variety of protocols, domains, and applications.[12] The interconnection of these embedded devices (including smart objects), is expected to usher in automation in nearly all fields', 'upload/news/images (1).jpg'),
(1, 'Internet of Things', 'Typically, IoT is expected to offer advanced connectivity of devices, systems, and services that goes beyond machine-to-machine (M2M) communications and covers a variety of protocols, domains, and applications.[12] The interconnection of these embedded devices (including smart objects), is expected to usher in automation in nearly all fields', 'upload/news/images.jpg'),
(1, 'Internet of Things', 'Typically, IoT is expected to offer advanced connectivity of devices, systems, and services that goes beyond machine-to-machine (M2M) communications and covers a variety of protocols, domains, and applications.[12] The interconnection of these embedded devices (including smart objects), is expected to usher in automation in nearly all fields', 'upload/news/internet-of-things.png'),
(1, 'Internet of Things', 'Typically, IoT is expected to offer advanced connectivity of devices, systems, and services that goes beyond machine-to-machine (M2M) communications and covers a variety of protocols, domains, and applications.[12] The interconnection of these embedded devices (including smart objects), is expected to usher in automation in nearly all fields', 'upload/news/internet-of-things-nghe-mai-roi-nhung-may-ai-hieu.jpg'),
(1, 'Internet of Things', 'Typically, IoT is expected to offer advanced connectivity of devices, systems, and services that goes beyond machine-to-machine (M2M) communications and covers a variety of protocols, domains, and applications.[12] The interconnection of these embedded devices (including smart objects), is expected to usher in automation in nearly all fields', 'upload/news/Lenovo-Vibe-Z2-Xiaomi.jpg'),
(1, 'Internet of Things', 'Typically, IoT is expected to offer advanced connectivity of devices, systems, and services that goes beyond machine-to-machine (M2M) communications and covers a variety of protocols, domains, and applications.[12] The interconnection of these embedded devices (including smart objects), is expected to usher in automation in nearly all fields', 'upload/news/LG_G_FLEX_03-600x338.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `name` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `promotion` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  `note` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`name`, `user_id`, `phone`, `address`, `created_date`, `promotion`, `order_id`, `note`) VALUES
('tuan', 111, 13456789, '192 duong 7a', '0000-00-00', '', 3, 'giao buoi sang'),
('', 0, 0, '', '0000-00-00', '', 4, ''),
('', 0, 0, '', '0000-00-00', '', 5, ''),
('tuan', 0, 123456789, 'quan bih tan', '0000-00-00', '', 6, ''),
('', 0, 0, '', '0000-00-00', '', 7, ''),
('', 0, 0, '', '0000-00-00', '', 8, ''),
('', 0, 0, '', '0000-00-00', '', 9, ''),
('', 0, 0, '', '0000-00-00', '', 10, ''),
('', 0, 0, '', '0000-00-00', '', 11, ''),
('', 0, 0, '', '0000-00-00', '', 12, ''),
('', 0, 0, '', '0000-00-00', '', 13, ''),
('Quoc TUan', 0, 231313131, '182 abc ', '0000-00-00', '', 14, ''),
('', 0, 0, '', '0000-00-00', '', 15, ''),
('', 0, 0, '', '0000-00-00', '', 16, ''),
('', 0, 0, '', '0000-00-00', '', 17, ''),
('', 0, 0, '', '0000-00-00', '', 18, ''),
('', 0, 0, '', '0000-00-00', '', 19, ''),
('', 0, 0, '', '0000-00-00', '', 20, ''),
('', 0, 0, '', '0000-00-00', '', 21, ''),
('', 0, 0, '', '0000-00-00', '', 22, ''),
('', 0, 0, '', '0000-00-00', '', 23, ''),
('ffawfw', 0, 0, 'fwafwafwafe', '0000-00-00', '', 24, ''),
('ffawfw', 0, 0, 'fwafwafwafe', '0000-00-00', '', 25, ''),
('ffawfw', 0, 0, 'fwafwafwafe', '0000-00-00', '', 26, ''),
('ffawfw', 0, 0, 'fwafwafwafe', '0000-00-00', '', 27, ''),
('ffawfw', 0, 0, 'fwafwafwafe', '0000-00-00', '', 28, ''),
('ffawfw', 0, 0, 'fwafwafwafe', '0000-00-00', '', 29, ''),
('ffawfw', 0, 0, 'fwafwafwafe', '0000-00-00', '', 30, ''),
('test', 0, 0, 'test', '0000-00-00', '', 31, ''),
('test', 0, 0, 'test', '0000-00-00', '', 32, ''),
('test', 0, 0, 'test', '0000-00-00', '', 33, ''),
('test', 0, 0, 'test', '0000-00-00', '', 34, ''),
('test', 0, 0, 'test', '0000-00-00', '', 35, ''),
('test', 0, 0, 'test', '0000-00-00', '', 36, ''),
('test', 0, 0, 'test', '0000-00-00', '', 37, ''),
('test', 0, 0, 'test', '0000-00-00', '', 38, ''),
('test', 0, 0, 'test', '0000-00-00', '', 39, ''),
('test', 0, 0, 'test', '0000-00-00', '', 40, ''),
('test', 0, 0, 'test', '0000-00-00', '', 41, ''),
('test', 0, 0, 'test', '0000-00-00', '', 42, ''),
('', 0, 0, '', '0000-00-00', '', 43, ''),
('eafawf', 0, 0, 'fwafwaf', '0000-00-00', '', 44, ''),
('fafafw', 0, 0, 'afweafwae', '0000-00-00', '', 45, ''),
('test2', 0, 0, 'wafwaf', '0000-00-00', '', 46, ''),
('test2', 0, 0, 'wafwaf', '0000-00-00', '', 47, ''),
('test3', 0, 0, 'fafaw', '0000-00-00', '', 48, ''),
('test3', 0, 0, 'fafaw', '0000-00-00', '', 49, ''),
('test3', 0, 0, 'fafaw', '0000-00-00', '', 50, ''),
('test3', 0, 0, 'fafaw', '0000-00-00', '', 51, ''),
('fasfawfwaf', 0, 0, 'sfaw', '0000-00-00', '', 52, ''),
('', 0, 0, '', '0000-00-00', '', 53, ''),
('', 0, 0, '', '0000-00-00', '', 54, ''),
('', 0, 0, '', '0000-00-00', '', 55, ''),
('', 0, 0, '', '0000-00-00', '', 56, ''),
('fafaf', 0, 0, 'fasawc', '0000-00-00', '', 57, ''),
('fafaf', 0, 0, 'fasawc', '0000-00-00', '', 58, ''),
('vzsvszv', 0, 0, 'vzsvzs', '0000-00-00', '', 59, ''),
('', 0, 0, '', '0000-00-00', '', 60, ''),
('gafaif', 0, 0, 'dfafwffaf', '0000-00-00', '', 61, ''),
('fafawTEST', 0, 0, 'gswag', '0000-00-00', '', 62, ''),
('fÃ ', 0, 0, 'fwáº§', '0000-00-00', '', 63, ''),
('tuan', 0, 0, 'tuan', '0000-00-00', '', 64, ''),
('tuan', 0, 0, 'tuan', '0000-00-00', '', 65, ''),
('tuan', 0, 0, 'tuan', '0000-00-00', '', 66, ''),
('tuan', 0, 0, 'tuan', '0000-00-00', '', 67, ''),
('tuan', 0, 0, 'tuan', '0000-00-00', '', 68, ''),
('', 0, 0, '', '0000-00-00', '', 69, ''),
('fawfawfw', 0, 0, 'dwfwafaw', '0000-00-00', '', 70, ''),
('fawfawfw', 0, 0, 'dwfwafaw', '0000-00-00', '', 71, ''),
('fawfwaf', 0, 0, 'fwafwaf', '0000-00-00', '', 72, ''),
('fawfwaf', 0, 0, 'fwafwaf', '0000-00-00', '', 73, ''),
('fawfwaf', 0, 0, 'fwafwaf', '0000-00-00', '', 74, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 75, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 76, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 77, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 78, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 79, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 80, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 81, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 82, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 83, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 84, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 85, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 86, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 87, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 88, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 89, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 90, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 91, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 92, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 93, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 94, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 95, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 96, ''),
('fawfawf', 0, 0, 'fawfwaf', '0000-00-00', '', 97, ''),
('fsfa', 0, 0, 'fawfwafe', '0000-00-00', '', 98, ''),
('ss', 0, 0, 'dd', '0000-00-00', '', 99, ''),
('', 0, 0, '', '0000-00-00', '', 100, ''),
('dds', 0, 0, 'saawcw', '0000-00-00', '', 101, ''),
('faf', 0, 0, 'fwaf', '0000-00-00', '', 102, ''),
('faf', 0, 0, 'fwaf', '0000-00-00', '', 103, ''),
('s', 0, 0, 's', '0000-00-00', '', 104, ''),
('j', 0, 0, 'k', '0000-00-00', '', 105, ''),
('', 0, 0, 's', '0000-00-00', '', 106, ''),
('c', 0, 0, 'd', '0000-00-00', '', 107, ''),
('c', 0, 0, 'd', '0000-00-00', '', 108, ''),
('c', 0, 0, 'd', '0000-00-00', '', 109, ''),
('c', 0, 0, 'd', '0000-00-00', '', 110, ''),
('c', 0, 0, 'd', '0000-00-00', '', 111, ''),
('s', 0, 0, 's', '0000-00-00', '', 112, ''),
('a', 0, 0, 'a', '0000-00-00', '', 113, ''),
('a', 0, 0, 'a', '0000-00-00', '', 114, ''),
('a', 0, 0, 'a', '0000-00-00', '', 115, ''),
('a', 0, 0, '', '0000-00-00', '', 116, ''),
('a', 0, 0, '', '0000-00-00', '', 117, ''),
('a', 0, 0, '', '0000-00-00', '', 118, ''),
('a', 0, 0, '', '0000-00-00', '', 119, ''),
('', 0, 0, '', '0000-00-00', '', 120, ''),
('', 0, 0, '', '0000-00-00', '', 121, ''),
('a', 0, 0, 's', '0000-00-00', '', 122, ''),
('', 0, 0, '', '0000-00-00', '', 123, ''),
('', 0, 0, '', '0000-00-00', '', 124, ''),
('', 0, 0, '', '0000-00-00', '', 125, ''),
('', 0, 0, '', '0000-00-00', '', 126, ''),
('', 0, 0, '', '0000-00-00', '', 127, ''),
('', 0, 0, '', '0000-00-00', '', 128, ''),
('', 0, 0, '', '0000-00-00', '', 129, ''),
('', 0, 0, '', '0000-00-00', '', 130, ''),
('', 0, 0, '', '0000-00-00', '', 131, ''),
('', 0, 0, '', '0000-00-00', '', 132, ''),
('', 0, 0, '', '0000-00-00', '', 133, ''),
('', 0, 0, '', '0000-00-00', '', 134, ''),
('', 0, 0, '', '0000-00-00', '', 135, ''),
('', 0, 0, '', '0000-00-00', '', 136, ''),
('', 0, 0, '', '0000-00-00', '', 137, ''),
('', 0, 0, '', '0000-00-00', '', 138, ''),
('', 0, 0, '', '0000-00-00', '', 139, ''),
('', 0, 0, '', '0000-00-00', '', 140, ''),
('', 0, 0, '', '0000-00-00', '', 141, ''),
('', 0, 0, '', '0000-00-00', '', 142, ''),
('', 0, 0, '', '0000-00-00', '', 143, ''),
('', 0, 0, '', '0000-00-00', '', 144, ''),
('', 0, 0, '', '0000-00-00', '', 145, ''),
('', 0, 0, '', '0000-00-00', '', 146, ''),
('', 0, 0, '', '0000-00-00', '', 147, ''),
('', 0, 0, '', '0000-00-00', '', 148, ''),
('', 0, 0, '', '0000-00-00', '', 149, ''),
('', 0, 0, '', '0000-00-00', '', 150, ''),
('', 0, 0, '', '0000-00-00', '', 151, ''),
('', 0, 0, '', '0000-00-00', '', 152, ''),
('', 0, 0, '', '0000-00-00', '', 153, ''),
('', 0, 0, '', '0000-00-00', '', 154, ''),
('', 0, 0, '', '0000-00-00', '', 155, ''),
('', 0, 0, '', '0000-00-00', '', 156, ''),
('', 0, 0, '', '0000-00-00', '', 157, ''),
('', 0, 0, '', '0000-00-00', '', 158, ''),
('', 0, 0, '', '0000-00-00', '', 159, ''),
('', 0, 0, '', '0000-00-00', '', 160, ''),
('', 0, 0, '', '0000-00-00', '', 161, ''),
('', 0, 0, '', '0000-00-00', '', 162, ''),
('', 0, 0, '', '0000-00-00', '', 163, ''),
('', 0, 0, '', '0000-00-00', '', 164, ''),
('', 0, 0, '', '0000-00-00', '', 165, ''),
('', 0, 0, '', '0000-00-00', '', 166, ''),
('a', 0, 0, 'a', '0000-00-00', '', 167, ''),
('a', 0, 0, 'a', '0000-00-00', '', 168, ''),
('a', 0, 0, 'a', '0000-00-00', '', 169, ''),
('a', 0, 0, 'a', '0000-00-00', '', 170, ''),
('a', 0, 0, 'a', '0000-00-00', '', 171, ''),
('a', 0, 0, 'a', '0000-00-00', '', 172, ''),
('a', 0, 0, 'a', '0000-00-00', '', 173, ''),
('a', 0, 0, 'a', '0000-00-00', '', 174, ''),
('a', 0, 0, 'a', '0000-00-00', '', 175, ''),
('a', 0, 0, 'a', '0000-00-00', '', 176, ''),
('a', 0, 0, 'a', '0000-00-00', '', 177, ''),
('a', 0, 0, 'a', '0000-00-00', '', 178, ''),
('a', 0, 0, 'a', '0000-00-00', '', 179, ''),
('a', 0, 0, 'a', '0000-00-00', '', 180, ''),
('a', 0, 0, 'a', '0000-00-00', '', 181, ''),
('a', 0, 0, 'a', '0000-00-00', '', 182, ''),
('a', 0, 0, 'a', '0000-00-00', '', 183, ''),
('a', 0, 0, 'a', '0000-00-00', '', 184, ''),
('a', 0, 0, 'a', '0000-00-00', '', 185, ''),
('a', 0, 0, 'a', '0000-00-00', '', 186, ''),
('a', 0, 0, 'a', '0000-00-00', '', 187, ''),
('a', 0, 0, 'a', '0000-00-00', '', 188, ''),
('a', 0, 0, 'a', '0000-00-00', '', 189, ''),
('a', 0, 0, 'a', '0000-00-00', '', 190, ''),
('a', 0, 0, 'a', '0000-00-00', '', 191, ''),
('a', 0, 0, 'a', '0000-00-00', '', 192, ''),
('a', 0, 0, 'a', '0000-00-00', '', 193, ''),
('a', 0, 0, 'a', '0000-00-00', '', 194, ''),
('a', 0, 0, 'a', '0000-00-00', '', 195, ''),
('a', 0, 0, 'a', '0000-00-00', '', 196, ''),
('a', 0, 0, 'a', '0000-00-00', '', 197, ''),
('a', 0, 0, 'a', '0000-00-00', '', 198, ''),
('a', 0, 0, 'a', '0000-00-00', '', 199, ''),
('a', 0, 0, 'a', '0000-00-00', '', 200, ''),
('a', 0, 0, 'a', '0000-00-00', '', 201, ''),
('a', 0, 0, 'a', '0000-00-00', '', 202, ''),
('a', 0, 0, 'a', '0000-00-00', '', 203, ''),
('a', 0, 0, 'a', '0000-00-00', '', 204, ''),
('a', 0, 0, 'a', '0000-00-00', '', 205, ''),
('a', 0, 0, 'a', '0000-00-00', '', 206, ''),
('a', 0, 0, 'a', '0000-00-00', '', 207, ''),
('a', 0, 0, 'a', '0000-00-00', '', 208, ''),
('a', 0, 0, 'a', '0000-00-00', '', 209, ''),
('a', 0, 0, 'a', '0000-00-00', '', 210, ''),
('a', 0, 0, 'a', '0000-00-00', '', 211, ''),
('a', 0, 0, 'a', '0000-00-00', '', 212, ''),
('a', 0, 0, 'a', '0000-00-00', '', 213, ''),
('a', 0, 0, 'a', '0000-00-00', '', 214, ''),
('a', 0, 0, 'a', '0000-00-00', '', 215, ''),
('a', 0, 0, 'a', '0000-00-00', '', 216, ''),
('a', 0, 0, 'a', '0000-00-00', '', 217, ''),
('a', 0, 0, 'a', '0000-00-00', '', 218, ''),
('a', 0, 0, 'a', '0000-00-00', '', 219, ''),
('a', 0, 0, 'a', '0000-00-00', '', 220, ''),
('a', 0, 0, 'a', '0000-00-00', '', 221, ''),
('a', 0, 0, 'a', '0000-00-00', '', 222, ''),
('a', 0, 0, 'a', '0000-00-00', '', 223, ''),
('a', 0, 0, 'a', '0000-00-00', '', 224, ''),
('a', 0, 0, 'a', '0000-00-00', '', 225, ''),
('a', 0, 0, 'a', '0000-00-00', '', 226, ''),
('a', 0, 0, 'a', '0000-00-00', '', 227, ''),
('a', 0, 0, 'a', '0000-00-00', '', 228, ''),
('a', 0, 0, 'a', '0000-00-00', '', 229, ''),
('a', 0, 0, 'a', '0000-00-00', '', 230, ''),
('a', 0, 0, 'a', '0000-00-00', '', 231, ''),
('a', 0, 0, 'a', '0000-00-00', '', 232, ''),
('a', 0, 0, 'a', '0000-00-00', '', 233, ''),
('a', 0, 0, 'a', '0000-00-00', '', 234, ''),
('a', 0, 0, 'a', '0000-00-00', '', 235, ''),
('a', 0, 0, 'a', '0000-00-00', '', 236, ''),
('a', 0, 0, 'a', '0000-00-00', '', 237, ''),
('a', 0, 0, 'a', '0000-00-00', '', 238, ''),
('a', 0, 0, 'a', '0000-00-00', '', 239, ''),
('a', 0, 0, 'a', '0000-00-00', '', 240, ''),
('a', 0, 0, 'a', '0000-00-00', '', 241, ''),
('a', 0, 0, 'a', '0000-00-00', '', 242, ''),
('a', 0, 0, 'a', '0000-00-00', '', 243, ''),
('a', 0, 0, 'a', '0000-00-00', '', 244, ''),
('a', 0, 0, 'a', '0000-00-00', '', 245, ''),
('a', 0, 0, 'a', '0000-00-00', '', 246, ''),
('a', 0, 0, 'a', '0000-00-00', '', 247, ''),
('a', 0, 0, 'a', '0000-00-00', '', 248, ''),
('a', 0, 0, 'a', '0000-00-00', '', 249, ''),
('a', 0, 0, 'a', '0000-00-00', '', 250, ''),
('s', 0, 223234, 's', '0000-00-00', '', 251, ''),
('s', 0, 223234, 's', '0000-00-00', '', 252, ''),
('s', 0, 223234, 's', '0000-00-00', '', 253, ''),
('s', 0, 223234, 's', '0000-00-00', '', 254, ''),
('s', 0, 223234, 's', '0000-00-00', '', 255, ''),
('s', 0, 223234, 's', '0000-00-00', '', 256, ''),
('tuan', 0, 1213131, 'ffafawfwaf', '0000-00-00', '', 257, ''),
('tuan', 0, 1213131, 'ffafawfwaf', '0000-00-00', '', 258, ''),
('tuan', 0, 1213131, 'ffafawfwaf', '0000-00-00', '', 259, ''),
('tuan', 0, 1213131, 'ffafawfwaf', '0000-00-00', '', 260, ''),
('tuan', 0, 1213131, 'ffafawfwaf', '0000-00-00', '', 261, ''),
('tuan', 0, 1213131, 'ffafawfwaf', '0000-00-00', '', 262, ''),
('test', 0, 12312313, 'test', '0000-00-00', '', 263, ''),
('test', 0, 12312313, 'test', '0000-00-00', '', 264, ''),
('tuan', 0, 1111111, 'tuan', '0000-00-00', '', 265, ''),
('test', 0, 1231312, 'test', '0000-00-00', '', 266, ''),
('test', 0, 1235, 'test', '0000-00-00', '', 267, ''),
('test', 0, 1235, 'test', '0000-00-00', '', 268, ''),
('test', 0, 1131, 'test', '0000-00-00', '', 269, ''),
('ffawf', 0, 411414, 'ggawag', '0000-00-00', '', 270, ''),
('tets', 0, 21313, 'rwerer', '0000-00-00', '', 271, ''),
('test', 0, 213131, 'tets', '0000-00-00', '', 272, ''),
('tuan', 0, 234242, 'tuan', '0000-00-00', '', 273, 'tatawwa'),
('tuan', 0, 123123131, '196', '0000-00-00', '', 274, 'giao buoi sang'),
('tuan', 0, 2147483647, '106 duong 7a', '0000-00-00', '', 275, 'giao buoi chieu'),
('fsdáº§', 0, 0, 'dv', '0000-00-00', '', 276, 'Ä‘');

-- --------------------------------------------------------

--
-- Table structure for table `orders_product`
--

CREATE TABLE `orders_product` (
  `orders_product_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_product`
--

INSERT INTO `orders_product` (`orders_product_id`, `orders_id`, `product_id`) VALUES
(1, 257, 24),
(2, 257, 23),
(3, 257, 25),
(4, 257, 24),
(5, 258, 24),
(6, 258, 23),
(7, 258, 25),
(8, 258, 24),
(9, 259, 24),
(10, 259, 23),
(11, 259, 25),
(12, 259, 24),
(13, 260, 24),
(14, 260, 23),
(15, 260, 25),
(16, 260, 24),
(17, 261, 24),
(18, 261, 23),
(19, 261, 25),
(20, 261, 24),
(21, 262, 24),
(22, 262, 23),
(23, 262, 25),
(24, 262, 24),
(25, 263, 26),
(26, 263, 23),
(27, 263, 23),
(28, 263, 24),
(29, 264, 26),
(30, 264, 23),
(31, 264, 23),
(32, 264, 24),
(33, 265, 26),
(34, 265, 23),
(35, 265, 23),
(36, 265, 24),
(37, 266, 26),
(38, 266, 23),
(39, 266, 23),
(40, 266, 24),
(41, 267, 26),
(42, 267, 23),
(43, 267, 23),
(44, 267, 24),
(45, 268, 26),
(46, 268, 23),
(47, 268, 23),
(48, 268, 24),
(49, 269, 26),
(50, 269, 23),
(51, 269, 23),
(52, 269, 24),
(53, 270, 26),
(54, 270, 23),
(55, 270, 23),
(56, 270, 24),
(57, 271, 26),
(58, 271, 23),
(59, 271, 23),
(60, 271, 24),
(61, 272, 26),
(62, 272, 23),
(63, 272, 23),
(64, 272, 24),
(65, 273, 26),
(66, 273, 23),
(67, 273, 23),
(68, 273, 24),
(69, 274, 26),
(70, 274, 25),
(71, 274, 24),
(72, 275, 25),
(73, 275, 24),
(74, 275, 23),
(75, 276, 12);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `origin` varchar(20) NOT NULL,
  `year` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `concentration` varchar(10) NOT NULL,
  `quantity_in_stock` int(6) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `product_type` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `brand`, `model`, `type`, `origin`, `year`, `gender`, `concentration`, `quantity_in_stock`, `product_image`, `description`, `price`, `product_type`) VALUES
(1, 'Apple iPhone 6', 'Apple', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 90, 'uploads/product/1257265777Apple iPhone 3G S.jpg', 'Have nothing to write here', 1000, 'smartphone'),
(2, 'Apple iPhone 5 Gold', 'Apple', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 100, 'uploads/product/160_0_iphone5gold_1.jpg', 'Have nothing to write here', 989, 'smartphone'),
(3, 'Acer ES1 431 N3060', 'Acer', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 80, 'uploads/product/acer-es1-431-n3060-4gb-500gb-win10-300x300', 'Have nothing to write here', 1203, 'laptop'),
(4, 'Acer ES 531 N3710', 'Acer', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 103, 'uploads/product/acer-es1-531-n3710-4gb-500gb-win10-i-300x300.jpg', 'Have nothing to write here', 1213, 'laptop'),
(5, 'Acer ES1 533', 'Acer', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 107, 'uploads/product/acer-es1-533-n4200-300-300x300.jpg', 'Have nothing to write here', 1232, 'laptop'),
(6, 'Acer Iconia Talk S A1', 'Acer', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 109, 'uploads/product/acer-iconia-talk-s-a1-734-1.jpg', 'Have nothing to write here', 1032, 'smartphone'),
(8, 'Acer R3 131t', 'Acer', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 105, 'uploads/product/acer-r3-131t-c25d-300-300x300.jpg', 'Have nothing to write here', 1308, 'laptop'),
(7, 'Acer R3 131t', 'Acer', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 102, 'uploads/product/acer-r3-131t_300-1-300x300.jpg', 'Have nothing to write here', 863, 'laptop'),
(23, 'Apple iPhone 7S 32Gb', 'Apple', '7S', 'Company', 'China', '2017-02-09', 'Male', '', 50, 'uploads/product/apple-iphone7-plus32.jpg', '', 999, 'smartphone'),
(24, 'Apple iPhone 8 32GB', 'Apple', '8', 'Company', 'China', '2017-02-08', 'Male', '', 99, 'uploads/product/apple-iphone8-32gb.jpg', '', 1001, 'smartphone'),
(25, 'Apple Macbook Pro 13', 'Apple', 'Macbook 13', 'Company', 'USA', '2017-02-16', 'Male', '', 14, 'uploads/product/apple-macbook-pro-13-2015-rear-angle.jpg', 'Nothing to write here', 1366, 'laptop'),
(9, 'Asus E02Sa', 'Asus', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 152, 'uploads/product/asus-e402sa-wx251t-300-300x300.jpg', 'Have nothing to write here', 698, 'laptop'),
(10, 'Asus Zenphone Go', 'Asus', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 162, 'uploads/product/asus-zenfone-go-zc500tg-300x300.jpg', 'Have nothing to write here', 586, 'smartphone'),
(11, 'Apple iPhone 5C ', 'Apple', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 173, 'uploads/product/big_dien-thoai-apple-iphone-5c-32gb-xanh-luc-trang-xanh-duong-hong-vang-1310300150584394.jpg', 'Have nothing to write here', 682, 'smartphone'),
(12, 'Dell Inspiron 3462', 'Dell', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 168, 'uploads/product/dell-inspiron-3462-n4200-6pftf1-300-300x300.jpg', 'Have nothing to write here', 596, 'laptop'),
(13, 'Dell Inpiron 3552', 'Dell', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 187, 'uploads/product/dell-inspiron-3552-v5c008w-300x300jpg', 'Have nothing to write here', 966, 'laptop'),
(14, 'HP 15 AM065tu', 'HP', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 112, 'uploads/product/hp-14-am065tu-x3b72pa-400x400-300x300.jpg', 'Have nothing to write here', 1011, 'laptop'),
(15, 'HP 15 AY072tu', 'HP', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 142, 'uploads/product/hp-15-ay072tu-x3b54pa-400-300x300.jpg', 'Have nothing to write here', 1215, 'laptop'),
(16, 'HTC One Me9', 'HTC', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 145, 'uploads/product/htc-one-me9-1-300x300.jpg', 'Have nothing to write here', 1522, 'smartphone'),
(17, 'Huewei Gr5', 'Huewei', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 100, 'uploads/product/huawei-gr5-mini-300x300.jpg', 'Have nothing to write here', 1237, 'tablet'),
(18, 'Huewei Mediapad T2', 'Huewei', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 164, 'uploads/product/huawei-mediapad-t2-7-pro.jpg', 'Have nothing to write here', 1144, 'tablet'),
(19, 'Ipad Air 2 Cellular 128 GB', 'Apple', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 114, 'uploads/product/ipad-air-2-cellular-128gb-nowatermark-300x300.jpg', 'Have nothing to write here', 1255, 'tablet'),
(20, 'Ipad Air 2 Cellular', 'Apple', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 103, 'uploads/product/ipad-air-2-cellular-32g-300-300x300.jpg', 'Have nothing to write here', 1143, 'tablet'),
(21, 'Ipad Mini 5 Cellular', 'Apple', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 175, 'uploads/product/ipad-mini-4-cellular-16gb-300x300.jpg', 'Have nothing to write here', 1125, 'tablet'),
(22, 'Ipad Mini 4 Wifi', 'Apple', '93X2', 'Company', 'China', '0000-00-00', 'male', '20%', 123, 'uploads/product/ipad-mini-4-wifi-cellular-32gb-300-300x300.jpg', 'Have nothing to write here', 1210, 'tablet'),
(26, 'Apple Macbook 15 Gold', 'Apple', 'Macbook 15', 'Company', 'USA', '2017-02-15', 'Male', '', 21, 'uploads/product/macbook-select-gold-201604.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia', 1569, 'laptop');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `product_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`product_image_id`, `product_id`, `image_id`) VALUES
(1, 26, 1),
(2, 26, 2),
(3, 26, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `product_type_id` int(10) NOT NULL,
  `product_type_name` varchar(20) NOT NULL,
  `description` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_type_id`, `product_type_name`, `description`) VALUES
(1, 'Phone', 0),
(2, 'Tablet', 0),
(3, 'Laptop', 0),
(4, 'Accessory', 0),
(5, 'MP3', 0),
(6, 'PC', 0),
(7, 'TV', 0),
(8, 'Camera', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `image_id_2` (`image_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders_product`
--
ALTER TABLE `orders_product`
  ADD PRIMARY KEY (`orders_product_id`),
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `product_image` (`product_image`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_image_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `product_image_id` (`product_image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;
--
-- AUTO_INCREMENT for table `orders_product`
--
ALTER TABLE `orders_product`
  MODIFY `orders_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders_product`
--
ALTER TABLE `orders_product`
  ADD CONSTRAINT `orders_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `orders_product_ibfk_3` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `product_image_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
