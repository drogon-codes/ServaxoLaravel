-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 04, 2021 at 07:05 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

DROP TABLE IF EXISTS `catagories`;
CREATE TABLE IF NOT EXISTS `catagories` (
  `catagory_id` int(11) NOT NULL AUTO_INCREMENT,
  `catagory_name` varchar(30) NOT NULL,
  `type` varchar(5) NOT NULL,
  `catagory_img` varchar(100) NOT NULL,
  `catagory_description` text NOT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`catagory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`catagory_id`, `catagory_name`, `type`, `catagory_img`, `catagory_description`, `updated_at`, `created_at`) VALUES
(1, 'Body', 'Car', '16164912925038.png', 'Car Body', '2021-03-23 09:21:32', '2021-03-01 02:34:23'),
(2, 'Doors', 'Car', '16164911754380.jpg', 'Car Door', '2021-03-23 09:19:35', '2021-03-01 02:34:30'),
(3, 'Audio/Video Devices', 'Car', '16164910701123.jpg', 'Car  Audio/Video Devices System', '2021-03-23 09:17:50', '2021-03-01 02:49:12'),
(4, 'Cameras', 'Car', '16164888142221.jpg', 'Car Camara', '2021-03-23 08:40:14', '2021-03-01 02:49:12'),
(5, 'Lighting and Signaling', 'Car', '16178931185854.png', 'Car Head light and signals', '2021-04-08 14:45:18', '2021-03-01 02:49:12'),
(6, 'Sensors', 'Car', '16164890171987.jpg', 'Car Sensor System', '2021-03-23 08:43:37', '2021-03-01 02:49:12'),
(7, 'Starts', 'Car', '16164903068086.jpg', 'Car Starter', '2021-03-23 09:05:06', '2021-03-01 02:49:12'),
(8, 'Electrical Switches', 'Car', '16164902124975.jpg', 'Car	Electrical Switches', '2021-03-23 09:03:33', '2021-03-01 02:49:12'),
(9, 'Wiring Harnesses', 'Car', '16164901254483.png', 'Car 	Wiring Harnesses', '2021-03-23 09:02:05', '2021-03-01 02:49:12'),
(10, 'Car Seat', 'Car', '16164890822393.jpg', 'Car Seats', '2021-03-23 08:44:42', '2021-03-01 02:49:12'),
(11, 'Braking', 'Car', '16164896471546.jpg', 'Car  Breaks', '2021-03-23 08:54:07', '2021-03-01 02:49:12'),
(12, 'Engine', 'Car', '16164897756849.jpg', 'Car Engine', '2021-03-23 08:56:15', '2021-03-01 02:49:12'),
(13, 'Suspension and Steering', 'Car', '16164900569967.jpg', 'Car	Suspension and Steering', '2021-03-23 09:00:56', '2021-03-01 03:00:14'),
(14, 'Air Conditioning', 'Car', '16164899094539.png', 'Car Air Conditioning', '2021-03-23 08:58:29', '2021-03-01 03:00:14'),
(15, 'Bearings', 'Car', '16164899966715.png', 'Car Bearing', '2021-03-23 08:59:56', '2021-03-01 03:02:18'),
(16, 'Tyres', 'Bike', '16179583917897.jpeg', 'Tyres for Bikes', '2021-04-09 08:53:11', '2021-04-09 08:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(30) NOT NULL,
  `city_code` varchar(5) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`city_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `city_code`, `state_id`, `updated_at`, `created_at`) VALUES
(1, 'Ahemdabad', '01', 3, '2021-02-25 20:55:42', '2021-02-25 20:55:42'),
(2, 'Bharuch', '16', 3, '2021-02-25 21:02:29', '2021-02-25 20:56:21'),
(3, 'Gandhinagar', '18', 3, '2021-02-25 21:02:03', '2021-02-25 20:56:37'),
(4, 'Surat', '05', 3, '2021-02-25 21:03:54', '2021-02-25 21:03:54'),
(5, 'Valsad', '15', 3, '2021-02-25 21:04:20', '2021-02-25 21:04:20'),
(6, 'Bhopal', '04', 4, '2021-02-25 21:06:25', '2021-02-25 21:06:25'),
(7, 'Datia', '32', 4, '2021-02-25 21:07:07', '2021-02-25 21:07:07'),
(8, 'Indore', '09', 4, '2021-02-25 21:07:32', '2021-02-25 21:07:32'),
(9, 'Jabalpur', '20', 4, '2021-02-25 21:08:31', '2021-02-25 21:08:31'),
(10, 'Ujjain', '13', 4, '2021-02-25 21:09:41', '2021-02-25 21:09:41'),
(11, 'Amravati', '26', 5, '2021-02-25 21:11:41', '2021-02-25 21:11:41'),
(12, 'Nagpur', '31', 5, '2021-02-25 21:13:57', '2021-02-25 21:13:57'),
(13, 'Navi Mumbai', '43', 5, '2021-02-25 21:14:25', '2021-02-25 21:14:25'),
(14, 'Nashik', '15', 5, '2021-02-25 21:15:10', '2021-02-25 21:15:10'),
(15, 'Pune', '12', 5, '2021-02-25 21:15:22', '2021-02-25 21:15:22'),
(16, 'Ajmer', '01', 8, '2021-02-25 21:16:03', '2021-02-25 21:16:03'),
(17, 'Bharatpur', '05', 8, '2021-02-25 21:16:18', '2021-02-25 21:16:18'),
(18, 'Jaisalmer', '15', 8, '2021-02-25 21:16:54', '2021-02-25 21:16:54'),
(19, 'Jaipur', '14', 8, '2021-02-25 21:17:09', '2021-02-25 21:17:09'),
(20, 'Pali', '22', 8, '2021-02-25 21:18:30', '2021-02-25 21:18:30'),
(21, 'Chirang', '26', 1, '2021-02-25 21:27:19', '2021-02-25 21:27:19'),
(22, 'Halakandi', '24', 1, '2021-02-25 21:27:42', '2021-02-25 21:27:42'),
(23, 'Jorhat', '03', 1, '2021-02-25 21:28:09', '2021-02-25 21:28:09'),
(24, 'Sonitpur', '12', 1, '2021-02-25 21:28:32', '2021-02-25 21:28:32'),
(25, 'Udalguri', '27', 1, '2021-02-25 21:29:21', '2021-02-25 21:29:21'),
(26, 'Raipur', '04', 2, '2021-02-25 21:32:54', '2021-02-25 21:32:54'),
(27, 'Korba', '12', 2, '2021-02-25 21:33:12', '2021-02-25 21:33:12'),
(28, 'Jashpur', '14', 2, '2021-02-25 21:33:27', '2021-02-25 21:33:27'),
(29, 'Gariyaband', '23', 2, '2021-02-25 21:33:49', '2021-02-25 21:33:49'),
(30, 'Surajpur', '29', 2, '2021-02-25 21:35:26', '2021-02-25 21:35:26'),
(31, 'Angul', '19', 6, '2021-02-25 21:37:27', '2021-02-25 21:37:27'),
(32, 'Balangir', '03', 6, '2021-02-25 21:37:45', '2021-02-25 21:37:45'),
(33, 'Gajapati', '20', 6, '2021-02-25 21:38:01', '2021-02-25 21:38:01'),
(34, 'Kalahandi', '08', 6, '2021-02-25 21:38:18', '2021-02-25 21:38:18'),
(35, 'Puri', '13', 6, '2021-02-25 21:38:53', '2021-02-25 21:38:53'),
(36, 'Amritsar', '02', 7, '2021-02-25 21:39:59', '2021-02-25 21:39:59'),
(37, 'Faridkot', '04', 7, '2021-02-25 21:40:15', '2021-02-25 21:40:15'),
(38, 'Nakoda', '33', 7, '2021-02-25 21:41:09', '2021-02-25 21:41:09'),
(39, 'Khanna', '26', 7, '2021-02-25 21:42:05', '2021-02-25 21:42:05'),
(40, 'Patran', '72', 7, '2021-02-25 21:42:50', '2021-02-25 21:42:50'),
(41, 'Gangtok', '01', 9, '2021-02-25 21:46:21', '2021-02-25 21:46:21'),
(42, 'Gyalshing', '02', 9, '2021-02-25 21:46:37', '2021-02-25 21:46:37'),
(43, 'Mangan', '03', 9, '2021-02-25 21:46:53', '2021-02-25 21:46:53'),
(44, 'Jorethang', '04', 9, '2021-02-25 21:47:10', '2021-02-25 21:47:10'),
(45, 'Noida', '16', 10, '2021-02-25 21:48:09', '2021-02-25 21:48:09'),
(46, 'Shamli', '19', 10, '2021-02-25 21:48:30', '2021-02-25 21:48:30'),
(47, 'Varanasi', '65', 10, '2021-02-25 21:49:10', '2021-02-25 21:49:10'),
(48, 'Rampur', '22', 10, '2021-02-25 21:49:39', '2021-02-25 21:49:39'),
(49, 'Agra', '80', 10, '2021-02-25 21:50:08', '2021-02-25 21:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(30) NOT NULL,
  `company_logo` varchar(100) NOT NULL,
  `company_type` varchar(11) NOT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `company_logo`, `company_type`, `updated_at`, `created_at`) VALUES
(1, 'Honda', '16143019226435.png', 'car', '2021-02-26 01:12:02', '2021-01-19 15:20:21'),
(2, 'Maruti Suzuki', '16143021371143.png', 'car', '2021-02-26 01:15:38', '2021-02-03 09:03:15'),
(3, 'Kia', '16178809531975.png', 'car', '2021-04-08 11:22:33', '2021-02-23 20:20:49'),
(4, 'Nissan', '16143024345340.jpg', 'car', '2021-02-26 01:20:34', '2021-02-26 01:20:34'),
(5, 'Audi', '16178911681545.jpg', 'car', '2021-04-08 14:12:48', '2021-02-26 01:23:33'),
(6, 'BMW', '16143026299236.png', 'car', '2021-02-26 01:23:49', '2021-02-26 01:23:49'),
(7, 'Hyundai', '16143028468603.png', 'car', '2021-02-26 01:27:26', '2021-02-26 01:27:26'),
(8, 'Jaguar', '16143032961506.png', 'car', '2021-02-26 01:34:56', '2021-02-26 01:34:56'),
(9, 'Ford', '16143033316798.jpg', 'car', '2021-02-26 01:35:31', '2021-02-26 01:35:31'),
(10, 'Skoda', '16143034499297.png', 'car', '2021-02-26 01:37:29', '2021-02-26 01:37:29'),
(11, 'Toyota', '16143035445884.png', 'car', '2021-02-26 01:39:04', '2021-02-26 01:39:04'),
(12, 'Volkswagen', '16143037786235.png', 'car', '2021-02-26 01:42:58', '2021-02-26 01:42:58'),
(13, 'Honda', '16143133363671.png', 'bike', '2021-02-26 04:22:16', '2021-02-26 04:22:16'),
(14, 'Suzuki', '16143133603448.jpg', 'bike', '2021-02-26 04:22:40', '2021-02-26 04:22:40'),
(15, 'Piaggio', '16143134131899.png', 'bike', '2021-02-26 04:23:33', '2021-02-26 04:23:33'),
(16, 'Mahindra', '16143134409103.png', 'bike', '2021-02-26 04:24:00', '2021-02-26 04:24:00'),
(17, 'Hero', '16143134523747.png', 'bike', '2021-02-26 04:24:12', '2021-02-26 04:24:12'),
(18, 'Bajaj', '16143134875431.png', 'bike', '2021-02-26 04:24:47', '2021-02-26 04:24:47'),
(19, 'TVS', '16143135122504.png', 'bike', '2021-02-26 04:25:12', '2021-02-26 04:25:12'),
(20, 'Yamaha', '16143135966536.png', 'bike', '2021-02-26 04:26:36', '2021-02-26 04:26:36'),
(21, 'Royal Enfield', '16143145676256.png', 'bike', '2021-02-26 04:42:47', '2021-02-26 04:42:47'),
(22, 'KTM', '16178939395347.png', 'bike', '2021-04-08 14:59:00', '2021-02-26 04:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(30) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `model_img` varchar(100) NOT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`model_id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `model_name`, `company_id`, `model_img`, `updated_at`, `created_at`) VALUES
(1, 'BMW X7', 6, '16143924903454.jpg', '2021-02-27 02:21:31', '2021-01-22 07:44:37'),
(2, 'BMW Z4', 6, '16143926858223.jpg', '2021-02-27 02:24:45', '2021-02-01 08:48:58'),
(3, 'Audi RS7', 5, '16143931104656.jpg', '2021-02-27 02:31:51', '2021-02-03 12:10:07'),
(4, 'Audi RS Q8', 5, '16143932054759.jpg', '2021-02-27 02:33:25', '2021-02-27 02:33:25'),
(5, 'Nissan GT-R', 4, '16143934609311.jpg', '2021-02-27 02:37:40', '2021-02-27 02:37:40'),
(6, 'Nissan Kicks', 4, '16143936051322.jpg', '2021-02-27 02:40:05', '2021-02-27 02:40:05'),
(7, 'Kia Carnival', 3, '16143942435016.jpg', '2021-02-27 02:50:43', '2021-02-27 02:50:43'),
(8, 'Kia Sonet', 3, '16143942935357.png', '2021-02-27 02:51:33', '2021-02-27 02:51:33'),
(9, 'Brezza', 2, '16143946062798.jpg', '2021-02-27 02:56:46', '2021-02-27 02:56:46'),
(10, 'Ciaz', 2, '16143946234478.jpg', '2021-02-27 02:57:03', '2021-02-27 02:57:03'),
(11, 'Honda City', 1, '16143947743195.png', '2021-02-27 02:59:34', '2021-02-27 02:59:34'),
(12, 'Honda Civic', 1, '16143948563745.png', '2021-02-27 03:00:56', '2021-02-27 03:00:56'),
(13, 'Hyundai Creta', 7, '16143950398903.jpg', '2021-02-27 03:03:59', '2021-02-27 03:03:59'),
(14, 'Hyundai Verna', 7, '16143951324496.jpg', '2021-02-27 03:05:32', '2021-02-27 03:05:32'),
(15, 'Jaguar XE', 8, '16143952909059.png', '2021-02-27 03:08:10', '2021-02-27 03:08:10'),
(16, 'Jaguar XF', 8, '16143954128018.jpg', '2021-02-27 03:10:12', '2021-02-27 03:10:12'),
(17, 'Ford Freestyle', 9, '16143955667705.jpg', '2021-02-27 03:12:46', '2021-02-27 03:12:46'),
(18, 'Ford Aspire', 9, '16143956717464.jpg', '2021-02-27 03:14:31', '2021-02-27 03:14:31'),
(19, 'Skoda Rapid', 10, '16143959555238.png', '2021-02-27 03:19:15', '2021-02-27 03:19:15'),
(20, 'Skoda Superb', 10, '16143959844296.jpg', '2021-02-27 03:19:44', '2021-02-27 03:19:44'),
(21, 'Toyota Fortuner', 11, '16143962412373.jpg', '2021-02-27 03:24:01', '2021-02-27 03:24:01'),
(22, 'Toyota Glanza', 11, '16143963132705.jpg', '2021-02-27 03:25:13', '2021-02-27 03:25:13'),
(23, 'Volkswagen Golf', 12, '16143965473568.png', '2021-02-27 03:29:07', '2021-02-27 03:29:07'),
(24, 'Volkswagen Jetta', 12, '16143966739859.jpg', '2021-02-27 03:31:13', '2021-02-27 03:31:13'),
(25, 'Activa 3G', 13, '16143968886191.png', '2021-02-27 03:34:48', '2021-02-27 03:34:48'),
(26, 'Dio', 13, '16143969521262.png', '2021-02-27 03:35:52', '2021-02-27 03:35:52'),
(27, 'Gixxer SF', 14, '16143977089003.jpg', '2021-02-27 03:48:28', '2021-02-27 03:48:28'),
(28, 'Access 125', 14, '16144006813721.jpg', '2021-02-27 04:38:01', '2021-02-27 04:38:01'),
(29, 'Pulsar 125', 18, '16143979352134.png', '2021-02-27 03:52:16', '2021-02-27 03:52:16'),
(30, 'Bajaj Discover 110', 18, '16143981676047.jpg', '2021-02-27 03:56:07', '2021-02-27 03:56:07'),
(31, 'Vespa VXL 150', 15, '16143983415058.png', '2021-02-27 03:59:01', '2021-02-27 03:59:01'),
(32, 'Aprilia SR 125', 15, '16143984896283.jpg', '2021-02-27 04:01:29', '2021-02-27 04:01:29'),
(33, 'Mahindra Gustro 125', 16, '16143986178021.jpg', '2021-02-27 04:05:28', '2021-02-27 04:03:37'),
(34, 'Mahindra Mojo', 16, '16143987082805.jpg', '2021-02-27 04:05:08', '2021-02-27 04:05:08'),
(35, 'Splendor Plus', 17, '16143988752592.jpg', '2021-02-27 04:07:55', '2021-02-27 04:07:55'),
(36, 'Hero Xtreme 160-R', 17, '16143989894153.jpg', '2021-02-27 04:09:49', '2021-02-27 04:09:49'),
(37, 'TVS Jupiter 125', 19, '16143991115986.jpg', '2021-02-27 04:11:51', '2021-02-27 04:11:51'),
(38, 'TVS Apache RTR 160', 19, '16143992666806.jpg', '2021-02-27 04:14:26', '2021-02-27 04:14:26'),
(39, 'Yamaha Ray Z', 20, '16143997493493.jpg', '2021-02-27 04:22:29', '2021-02-27 04:22:29'),
(40, 'Yamaha FZ 25', 20, '16143997869901.jpg', '2021-02-27 04:23:06', '2021-02-27 04:23:06'),
(41, 'Royal Enfield Classic 350', 21, '16143999674767.jpeg', '2021-02-27 04:26:07', '2021-02-27 04:26:07'),
(42, 'Royal Enfield Thunderbird', 21, '16144001168226.png', '2021-02-27 04:28:36', '2021-02-27 04:28:36'),
(43, 'KTM RC 200', 22, '16144005084307.png', '2021-02-27 04:35:08', '2021-02-27 04:35:08'),
(44, 'KTM Duke 390', 22, '16144005326820.jpg', '2021-02-27 04:35:32', '2021-02-27 04:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `news_image` varchar(100) NOT NULL,
  `isactive` varchar(3) NOT NULL,
  `news_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `description`, `news_image`, `isactive`, `news_datetime`, `created_at`, `updated_at`) VALUES
(2, 'Tesla Sales Take a Hit From Rising Popularity of F', 'It has come to light that Tesla, which has so far enjoyed a free run of sorts, has started taking a hit from the advent of new electric vehicles, particularly the Ford Mustang Mach-E. As per a study..', '16150889435815.jpg', 'yes', '2021-02-10 00:00:00', '2021-02-06 11:38:31', '2021-03-07 03:49:03'),
(3, '2021 KTM 1290 Super Adventure R', 'After revealing the 2021 model of the Super Adventure S earlier this year, the Austrian two-wheeler giant has now unveiled the 2021 KTM 1290 Super Adventure R, its flagship motorcycle in the ADV segme..', '16150889626657.png', 'yes', '2021-02-12 00:00:00', '2021-02-06 11:40:24', '2021-03-07 03:50:34'),
(4, 'BMW Commences Bookings For The Hot New M340i In In', 'BMW will soon be launching the M340i in India on March 10, 2021. Ahead of its launch, the carmaker has commenced official bookings for this performance-focused BMW 3 Series variant. The booking..', '16150889805071.jpg', 'yes', '2021-02-19 00:00:00', '2021-02-06 11:45:46', '2021-03-07 03:49:40'),
(5, '2023 Honda CR-V Rendered on Basis of Recent Spy Sh', 'Honda CR-V is currently on sale in its fifth-generation rendition across the globe. Sadly, the SUV has started to show off its age now, but interestingly, the Japanese carmaker is on its toes to devel..', '16150889937868.jpg', 'yes', '2021-02-24 00:00:00', '2021-02-06 11:50:30', '2021-03-07 03:49:53'),
(19, 'Tata Tiago AMT Gets Affordable With New XTA Trim For INR 5.99 Lakh', 'Tata Motors have launched a new XTA variant of the Tiago hatchback in India, priced at INR 5.99 lakh (ex-showroom, Delhi). With the launch of this new Trim, Tata Motors now have four AMT variants in..', '16150886624520.jpg', 'yes', '2021-03-06 14:26:37', '2021-03-06 08:56:37', '2021-03-07 03:44:22'),
(20, '2021 MINI Countryman Now in India, Up to INR 5 Lakh Costlier', '2021 MINI Countryman Now in India, Upto INR 5 Lakh Costlier\r\n2021 MINI Countryman Now in India, Upto INR 5 Lakh Costlier\r\n Yatharth Chauhan |  04/03/2021 - 16:52\r\nBMW India has just launched the 2021 MINI Countryman facelift in India. The new Mini model is assembled at the company’s Chennai-based facility and the new model will be sold in two petrol-only..', '16150890109633.jpg', 'yes', '2021-03-06 14:27:49', '2021-03-06 08:57:49', '2021-03-07 03:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `old_vehicle`
--

DROP TABLE IF EXISTS `old_vehicle`;
CREATE TABLE IF NOT EXISTS `old_vehicle` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `vehicle_numbers` varchar(50) NOT NULL,
  `About_vehicle` text NOT NULL,
  `km` float NOT NULL,
  `price` int(11) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `video_url` varchar(100) DEFAULT NULL,
  `isactive` varchar(3) DEFAULT 'yes',
  `addressline1` text NOT NULL,
  `addressline2` text NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `contactno` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`o_id`),
  KEY `user_id` (`user_id`),
  KEY `model_id` (`model_id`),
  KEY `companies` (`company_id`),
  KEY `states` (`state_id`),
  KEY `cities` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `old_vehicle`
--

INSERT INTO `old_vehicle` (`o_id`, `user_id`, `model_id`, `company_id`, `state_id`, `city_id`, `year`, `vehicle_numbers`, `About_vehicle`, `km`, `price`, `img1`, `img2`, `img3`, `video_url`, `isactive`, `addressline1`, `addressline2`, `landmark`, `pincode`, `contactno`, `created_at`, `updated_at`) VALUES
(4, 4, 18, 9, 3, 2, 2020, 'GJ09WE6582', 'A Good Condition Ford Aspira.....', 12002, 500000, '16226971842619.png', '16216722015987.jpg', '16216722017758.jpg', NULL, 'yes', 'Patel Nager', 'Jahangirpura', 'Surat', 395005, '9845623010', '2021-05-22 08:30:01', '2021-06-04 06:21:43'),
(6, 1, 21, 11, 3, 4, 2020, 'GJ01RA0322', 'Toyota fortuner 2013 used 2013 toyota fortuner 4x2 at for sale', 30000, 1200000, '16225395651915.jpg', '16225395655908.jpg', '16225395657123.jpg', NULL, 'yes', 'A-11 Jayraj Society', 'Jahangirpura', 'Ranchhod Park', 395005, '9854562230', '2021-06-01 09:26:05', '2021-06-03 06:31:03'),
(9, 1, 35, 17, 3, 5, 2018, 'GJ05 AS 1236', 'A Splendor Plus in Good Condition...', 20150, 25000, '16227024413940.jpg', '16227024417017.jpg', '16227024413764.png', NULL, 'yes', 'B/102 ,Vihar Society', 'Canal Road', 'Valsad', 364510, '8845120320', '2021-06-03 06:40:41', '2021-06-03 11:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

DROP TABLE IF EXISTS `parts`;
CREATE TABLE IF NOT EXISTS `parts` (
  `part_id` int(11) NOT NULL AUTO_INCREMENT,
  `model_id` int(11) DEFAULT NULL,
  `part_name` varchar(200) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `part_description` text NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `part_manual_pdf` varchar(100) DEFAULT NULL,
  `video_url` varchar(100) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `isactive` varchar(3) NOT NULL DEFAULT 'Y',
  `addeddatetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`part_id`),
  KEY `model_id` (`model_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`part_id`, `model_id`, `part_name`, `price`, `part_description`, `img1`, `img2`, `img3`, `part_manual_pdf`, `video_url`, `cat_id`, `isactive`, `addeddatetime`, `updated_at`, `created_at`) VALUES
(8, 2, 'Engine', '6654000.00', 'Engines for cars', '16184080333449.png', '16179520342609.jpg', '16179520786476.jpg', '16149345654261.pdf', 'https://youtube.com', NULL, 'yes', '2021-03-05 14:23:04', '2021-04-14 13:47:13', '2021-03-05 14:23:04'),
(10, 10, 'Jumpers', '7500.00', 'Jumpers of Ciaz. Pure SS jumpers with 2 years of manufacturer warrenty.', '16177826758532.jpg', '16177826751364.jpg', '16177826757929.png', '16149616771185.pdf', 'https://google.com/jumpers@SuzukiCiaz', 1, 'yes', '2021-03-05 21:57:57', '2021-04-07 08:04:35', '2021-03-05 16:27:57'),
(11, 29, 'Oil For Bikes', '258.00', 'Oils for bikes and mopeds. Servo', '16149639654124.jpg', '16149639658410.jpg', '16149639654101.jpg', '16149639659915.pdf', 'https://oilServo.com', 12, 'yes', '2021-03-05 22:36:05', '2021-04-09 07:35:14', '2021-03-05 17:06:05'),
(12, 10, 'Macwheel', '5500.00', 'Steel alloyed car Macwheels', '16179535743807.jpg', '16179535742785.jpg', '16179535743944.jpg', '16179535743474.pdf', 'https://servaxo.com', 16, 'yes', '2021-04-09 13:02:54', '2021-04-10 08:57:21', '2021-04-09 07:32:54'),
(13, 25, 'Tyres', '1200.00', 'Activa 3G Tyres', '16179560483437.webp', '16179544462419.jpg', '16179544466815.jpg', '16179544466706.pdf', 'https://servaxo.com', 16, 'yes', '2021-04-09 13:17:26', '2021-04-13 08:19:13', '2021-04-09 07:47:26'),
(14, 28, 'Rim', '799.00', 'The   wheel rim utilized in stretchable with heat, conforms to contours and bends easily.', '16182996755125.jpg', '16182996759883.jpg', '16182996755183.jpg', '16182996754776.pdf', 'https://servaxo.com', NULL, 'yes', '2021-04-13 13:11:15', '2021-04-13 07:42:29', '2021-04-13 07:41:15'),
(15, 35, 'Bike Macwheel', '3400.00', 'We provide wheel rims for all bike models.', '16183024756392.jpg', '16183024759427.jpg', '16183024758987.jpg', '16183024756524.pdf', 'https://servaxo.com', NULL, 'yes', '2021-04-13 13:57:55', '2021-04-13 14:19:43', '2021-04-13 08:27:55'),
(16, 3, 'Audio System', '18785.00', 'Audi RS7  Audio &  Video System', '16184689154017.jpg', '16184689157051.jpg', '16184689151194.jpg', '16184689153435.pdf', 'https://servaxo.com', 3, 'yes', '2021-04-15 12:11:55', '2021-04-15 06:41:55', '2021-04-15 06:41:55'),
(17, 19, 'Skoda Audio System', '14160.00', 'Android 10.1 Can be update Bluetooth Function Android/IOS Mirror Link 9 inch HD Touch Screen (1024 x 600)', '16184746305629.jpg', '16184746307312.jpg', '16184746302134.jpg', '16184746306622.pdf', 'https://servaxo.com', 3, 'yes', '2021-04-15 13:47:10', '2021-04-15 08:17:10', '2021-04-15 08:17:10'),
(18, 16, 'Camera', '599.00', 'WATER-PROOF: High waterproof level, reverse camera would never be fogged or wet even in storm or bad rainy day', '16184753036963.jpg', '16184753039607.jpeg', '16184753032379.jpg', '16184753036474.pdf', 'https://servaxo.com', 4, 'yes', '2021-04-15 13:58:23', '2021-04-15 08:28:23', '2021-04-15 08:28:23'),
(19, 12, 'Light and Signal', '5500.00', 'Buy Lumax 115-HLU-WMLTML TIAGO Light Head Lamp online in India at wholesale rates.', '16184846912107.jpg', '16184847183349.jpg', '16184758957671.jpg', '16184758952816.pdf', 'https://servaxo.com', NULL, 'yes', '2021-04-15 14:08:15', '2021-04-15 11:05:18', '2021-04-15 08:38:15'),
(20, 8, 'Leather Car Seat', '3500.00', 'JB company is using best quality leather for their manufacturing and providing the product directly from company to your door step.', '16184851124468.jpg', '16184851125603.jpg', '16184851123787.jpg', '16184851121346.pdf', 'https://servaxo.com', 10, 'yes', '2021-04-15 16:41:52', '2021-04-15 11:11:52', '2021-04-15 11:11:52'),
(21, 5, 'Rear Brake Shoe Set', '2599.00', 'Brake Shoe Set for RENAULT DUSTER 1ST GEN, LODGY, NISSAN TERRANO - RBLBS075RD9033 - RANE', '16184857245461.jpg', '16184856185241.png', '16184856184962.png', '16184856186052.pdf', 'https://servaxo.com', NULL, 'yes', '2021-04-15 16:50:18', '2021-04-15 11:22:05', '2021-04-15 11:20:18'),
(22, 43, 'Brake Gear Shift Pedal', '4705.00', 'This Brake Clutch Gear Pedal Lever Set are CNC machined from high quality aluminum with anodized finishing.', '16184859433886.jpg', '16184859433160.jpg', '16184859435700.jpg', '16184859436970.pdf', 'https://servaxo.com', 11, 'yes', '2021-04-15 16:55:43', '2021-04-15 11:25:43', '2021-04-15 11:25:43'),
(23, 9, 'Brezza Cooling System', '1145.00', 'High Quality and Brand New. Perfect choice for Car RV ATV Truck Trailer.', '16184869827244.jpg', '16184869822862.jpg', '16184869828706.jpg', '16184869824731.pdf', 'https://servaxo.com', 14, 'yes', '2021-04-15 17:13:02', '2021-04-15 11:43:02', '2021-04-15 11:43:02'),
(27, 44, 'Engine  KTM Duke 390', '9600.00', 'These exciting new Engine Case Covers have been developed in collaboration with selected race teams and crash tested within the R&G Racing Suzuki GSX-R Trophy.', '16184885404937.jpg', '16184882003717.jpg', '16184885406312.jpg', '16184882006148.pdf', 'https://servaxo.com', NULL, 'yes', '2021-04-15 17:33:20', '2021-04-15 12:09:00', '2021-04-15 12:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(200) NOT NULL,
  `service_img` varchar(100) NOT NULL,
  `service_description` text NOT NULL,
  `service_price` decimal(18,2) NOT NULL,
  `isactive` varchar(3) NOT NULL,
  `type` varchar(11) NOT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_img`, `service_description`, `service_price`, `isactive`, `type`, `updated_at`, `created_at`) VALUES
(3, 'Brake Inspection & Service', '16178074736849.jpg', 'Brake Checking with oiling', '75.00', 'yes', 'bike', '2021-04-09 09:49:12', '2021-03-10 08:54:37'),
(4, 'Control Inspection & Lubrication', '16177886907875.jpg', 'Lubrication of whole bike', '125.00', 'yes', 'bike', '2021-04-07 09:44:50', '2021-03-10 08:55:13'),
(5, 'Spark Plug Check & Clean', '16178074874732.jpg', 'Spark Plug Check & Clean', '145.00', 'yes', 'bike', '2021-04-07 14:58:07', '2021-03-10 08:55:43'),
(6, 'Air Filter Check & Clean', '16177888272934.jpg', 'Air Filter Checking & Cleaning', '175.00', 'yes', 'bike', '2021-04-07 09:47:07', '2021-03-10 08:56:18'),
(7, 'Carburetor Inspection Clean', '16177889034795.jpg', 'Carburetor/Injector Inspection & Clean', '240.00', 'yes', 'bike', '2021-04-09 09:15:15', '2021-03-10 08:59:21'),
(8, 'Suspension Inspection & Service', '16177890251377.jpg', 'Suspension checking', '140.00', 'yes', 'bike', '2021-04-07 09:50:25', '2021-03-10 09:02:50'),
(9, 'Fastener Inspection & Tightening', '16177891126197.jpg', 'Fastener checking', '145.00', 'yes', 'bike', '2021-04-07 09:51:52', '2021-03-10 09:03:21'),
(10, 'Bearing Inspection & Lubrication', '16177893653813.jpeg', 'Bearing checking', '80.00', 'yes', 'bike', '2021-04-07 09:56:06', '2021-03-10 09:03:49'),
(11, 'Stand Inspection & Lubrication', '16177895153435.jpg', 'Side stand checking', '45.00', 'yes', 'bike', '2021-04-07 09:58:35', '2021-03-10 09:04:15'),
(12, 'Chain Lubrication & Tightening', '16177896106135.jpg', 'Chain checking', '45.00', 'yes', 'bike', '2021-04-07 10:00:10', '2021-03-10 09:04:53'),
(13, 'Foam Wash & Liquid Polish', '16177898181936.webp', 'Washing', '100.00', 'yes', 'bike', '2021-04-07 10:03:38', '2021-03-10 09:05:23'),
(14, 'Engine Oil Replacement', '16177899518016.jpg', 'Engine Oil + Service charge', '300.00', 'yes', 'bike', '2021-04-07 10:05:51', '2021-03-10 09:06:35'),
(15, 'Electrical Inspection', '16177900638404.jpg', 'Electrical Components inspection', '350.00', 'yes', 'bike', '2021-04-07 10:07:43', '2021-03-10 09:07:31'),
(16, 'Battery Charging', '16177901431520.jpg', 'Charging of any kind of batteries', '800.00', 'yes', 'bike', '2021-04-07 10:09:03', '2021-03-10 09:08:36'),
(17, 'Liquid and Wax Polishing', '16177902545641.jpg', 'Polishing', '150.00', 'yes', 'bike', '2021-04-07 10:10:54', '2021-03-10 09:21:16'),
(18, 'Brake Service and Repair', '16178060247205.jpg', 'The technicians at Minit-Tune & Brake Auto Centres are trained to inspect, diagnose and repair braking systems of any kind.', '1400.00', 'yes', 'car', '2021-04-07 14:33:44', '2021-03-12 05:54:50'),
(19, 'Vehicle Maintenance & Inspections', '16178062155225.jpg', 'Our technicians are trained to diagnose any issues, and complete the necessary adjustments and repairs that will return your vehicle to its peak performance.', '4500.00', 'yes', 'car', '2021-04-07 14:36:55', '2021-03-12 05:55:51'),
(20, 'Engine and Transmission Repair', '16178063125883.webp', 'Minit-Tune & Brake Auto Centres have the equipment and technicians to accurately diagnose and repair all engine and transmission related problems.', '2900.00', 'yes', 'car', '2021-04-07 14:38:32', '2021-03-12 05:56:23'),
(21, 'Steering, Suspension & Wheel Alignment', '16178063679727.jpg', 'Minit-Tune & Brake Auto Centres’ technicians are trained diagnose and repair steering, suspension and wheel alignement related issues.', '2500.00', 'yes', 'car', '2021-04-07 14:39:27', '2021-03-12 05:56:52'),
(22, 'Exhaust System Repairs', '16178064992284.jpg', 'Bring your vehicle into a Minit-Tune & Brake Auto Centres, and we will repair your Exhaust System with quality Original Equipment Manufacturer’s (OEM) parts.', '3600.00', 'yes', 'car', '2021-04-07 14:41:39', '2021-03-12 05:57:34'),
(23, 'Cooling System Repairs', '16178065969162.jpg', 'Minit-Tune & Brake Auto Centres’ technicians are trained to inspect engine antifreeze/coolant quality and to diagnose any leaks and associated potential problems.', '3600.00', 'yes', 'car', '2021-04-07 14:43:16', '2021-03-12 05:58:14'),
(24, 'Batteries & Charging Systems Inspection', '16178066625333.jpg', 'Bring your vehicle into a Minit-Tune , Brake Auto Centres,where our technicians will recommend the right repair solution,  efficiently complete the repair.', '1950.00', 'yes', 'car', '2021-04-09 09:16:48', '2021-03-12 05:58:54'),
(25, 'Vehicle Diagnostic Systems', '16178067488879.webp', 'Our certified technicians have the knowledge and diagnostic tools to troubleshoot and solve all types of electrical malfunctions.', '4500.00', 'yes', 'car', '2021-04-07 14:45:48', '2021-03-12 05:59:36'),
(26, 'Heating and AC Repairs', '16178069081924.jpg', 'Bring your vehicle in and our heating and air conditioning (HVAC) technicians will correctly diagnose your HVAC problems, and provide a cost effective solution.', '6500.00', 'yes', 'car', '2021-04-07 14:48:28', '2021-03-12 06:00:01'),
(28, 'Wash and Polishing', '16177898181936.webp', 'Car washing and polishing', '250.00', 'yes', 'car', '2021-06-06 10:42:09', '2021-06-06 10:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `service_detail`
--

DROP TABLE IF EXISTS `service_detail`;
CREATE TABLE IF NOT EXISTS `service_detail` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_vehicle_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `pkg_id` int(11) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`d_id`),
  KEY `s_id` (`user_vehicle_id`),
  KEY `service_id` (`service_id`),
  KEY `pkg_id` (`pkg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_detail`
--

INSERT INTO `service_detail` (`d_id`, `user_vehicle_id`, `service_id`, `pkg_id`, `price`, `updated_at`, `created_at`) VALUES
(10, 8, 18, NULL, '1400.00', '2021-06-05 07:34:18', '2021-06-05 07:34:18'),
(11, 8, 19, NULL, '4500.00', '2021-06-05 07:34:18', '2021-06-05 07:34:18'),
(12, 8, 25, NULL, '4500.00', '2021-06-05 07:34:18', '2021-06-05 07:34:18'),
(13, 14, NULL, 3, NULL, '2021-06-06 07:15:56', '2021-06-06 07:15:56'),
(14, 14, NULL, 3, NULL, '2021-06-06 07:15:56', '2021-06-06 07:15:56'),
(15, 14, NULL, 3, NULL, '2021-06-06 07:15:56', '2021-06-06 07:15:56'),
(16, 14, NULL, 3, NULL, '2021-06-06 07:15:56', '2021-06-06 07:15:56'),
(17, 15, NULL, 3, NULL, '2021-06-06 07:16:28', '2021-06-06 07:16:28'),
(18, 15, NULL, 3, NULL, '2021-06-06 07:16:28', '2021-06-06 07:16:28'),
(19, 15, NULL, 3, NULL, '2021-06-06 07:16:28', '2021-06-06 07:16:28'),
(20, 15, NULL, 3, NULL, '2021-06-06 07:16:28', '2021-06-06 07:16:28'),
(21, 17, NULL, 3, NULL, '2021-06-06 07:19:34', '2021-06-06 07:19:34'),
(22, 17, NULL, 3, NULL, '2021-06-06 07:19:34', '2021-06-06 07:19:34'),
(23, 17, NULL, 3, NULL, '2021-06-06 07:19:34', '2021-06-06 07:19:34'),
(24, 17, NULL, 3, NULL, '2021-06-06 07:19:34', '2021-06-06 07:19:34'),
(25, 18, NULL, 3, NULL, '2021-06-06 07:22:20', '2021-06-06 07:22:20'),
(26, 18, NULL, 3, NULL, '2021-06-06 07:22:20', '2021-06-06 07:22:20'),
(27, 18, NULL, 3, NULL, '2021-06-06 07:22:20', '2021-06-06 07:22:20'),
(28, 18, NULL, 3, NULL, '2021-06-06 07:22:20', '2021-06-06 07:22:20'),
(29, 19, 28, 4, NULL, '2021-06-06 08:30:17', '2021-06-06 08:30:17'),
(30, 19, 18, 4, NULL, '2021-06-06 08:30:17', '2021-06-06 08:30:17'),
(31, 19, 24, 4, NULL, '2021-06-06 08:30:17', '2021-06-06 08:30:17'),
(32, 20, 18, NULL, '1400.00', '2021-06-06 08:36:54', '2021-06-06 08:36:54'),
(33, 20, 19, NULL, '4500.00', '2021-06-06 08:36:54', '2021-06-06 08:36:54'),
(34, 20, 24, NULL, '1950.00', '2021-06-06 08:36:54', '2021-06-06 08:36:54'),
(35, 21, 28, 2, NULL, '2021-06-06 16:40:17', '2021-06-06 16:40:17'),
(36, 21, 18, 2, NULL, '2021-06-06 16:40:17', '2021-06-06 16:40:17'),
(37, 21, 22, 2, NULL, '2021-06-06 16:40:17', '2021-06-06 16:40:17'),
(38, 21, 24, 2, NULL, '2021-06-06 16:40:18', '2021-06-06 16:40:18'),
(39, 22, 28, 1, NULL, '2021-06-07 05:36:29', '2021-06-07 05:36:29'),
(40, 22, 18, 1, NULL, '2021-06-07 05:36:29', '2021-06-07 05:36:29'),
(41, 22, 22, 1, NULL, '2021-06-07 05:36:29', '2021-06-07 05:36:29'),
(42, 22, 24, 1, NULL, '2021-06-07 05:36:29', '2021-06-07 05:36:29'),
(43, 22, 26, 1, NULL, '2021-06-07 05:36:29', '2021-06-07 05:36:29'),
(44, 23, 28, 4, NULL, '2021-06-22 08:49:42', '2021-06-22 08:49:42'),
(45, 23, 18, 4, NULL, '2021-06-22 08:49:42', '2021-06-22 08:49:42'),
(46, 23, 24, 4, NULL, '2021-06-22 08:49:42', '2021-06-22 08:49:42'),
(47, 24, 28, 3, NULL, '2021-06-22 16:25:59', '2021-06-22 16:25:59'),
(48, 24, 18, 3, NULL, '2021-06-22 16:25:59', '2021-06-22 16:25:59'),
(49, 24, 24, 3, NULL, '2021-06-22 16:25:59', '2021-06-22 16:25:59'),
(50, 24, 20, 3, NULL, '2021-06-22 16:25:59', '2021-06-22 16:25:59'),
(51, 25, 28, 1, NULL, '2021-06-23 08:53:56', '2021-06-23 08:53:56'),
(52, 25, 18, 1, NULL, '2021-06-23 08:53:56', '2021-06-23 08:53:56'),
(53, 25, 22, 1, NULL, '2021-06-23 08:53:56', '2021-06-23 08:53:56'),
(54, 25, 24, 1, NULL, '2021-06-23 08:53:56', '2021-06-23 08:53:56'),
(55, 25, 26, 1, NULL, '2021-06-23 08:53:56', '2021-06-23 08:53:56'),
(56, 26, 28, 2, NULL, '2021-06-23 10:34:28', '2021-06-23 10:34:28'),
(57, 26, 18, 2, NULL, '2021-06-23 10:34:28', '2021-06-23 10:34:28'),
(58, 26, 22, 2, NULL, '2021-06-23 10:34:28', '2021-06-23 10:34:28'),
(59, 26, 24, 2, NULL, '2021-06-23 10:34:28', '2021-06-23 10:34:28');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(30) NOT NULL,
  `state_code` varchar(5) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `state_code`, `updated_at`, `created_at`) VALUES
(1, 'Assam', 'AS', '2021-02-22 23:26:20', '2021-01-18 11:48:24'),
(2, 'Chhattisgarh', 'CG', '2021-01-22 08:33:59', '2021-01-22 08:33:59'),
(3, 'Gujarat', 'GJ', '2021-02-25 19:36:25', '2021-02-25 19:36:25'),
(4, 'Madhya Pradesh', 'MP', '2021-02-25 20:42:24', '2021-02-25 20:42:24'),
(5, 'Maharashtra', 'MH', '2021-02-25 20:42:47', '2021-02-25 20:42:47'),
(6, 'Odisha', 'OD', '2021-02-25 20:43:05', '2021-02-25 20:43:05'),
(7, 'Punjab', 'PB', '2021-02-25 20:43:21', '2021-02-25 20:43:21'),
(8, 'Rajasthan', 'RJ', '2021-02-25 20:43:36', '2021-02-25 20:43:36'),
(9, 'Sikkim', 'SK', '2021-02-25 20:43:49', '2021-02-25 20:43:49'),
(10, 'Uttar Pradesh', 'UP', '2021-02-25 20:44:22', '2021-02-25 20:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

DROP TABLE IF EXISTS `tbl_admin_login`;
CREATE TABLE IF NOT EXISTS `tbl_admin_login` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `reg_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`admin_id`, `username`, `password`, `name`, `contact`, `profilepic`, `reg_datetime`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'Chirag Patel', '1234567890', '1.jpg\r\n\r\n', '2021-02-24 02:04:33', '2021-02-24 02:04:33', '2021-02-24 02:04:33'),
(2, 'admin', 'admin12345', 'Deep Kansara', '8780443963', 'admin1.jpg\r\n', '2021-03-10 13:26:21', '2021-03-10 13:26:21', '2021-03-10 13:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cart_id`),
  KEY `user_id` (`user_id`),
  KEY `part_id` (`part_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `user_id`, `part_id`, `qty`, `updated_at`, `created_at`) VALUES
(2, 4, 11, 2, '2021-05-14 11:51:15', '2021-04-21 07:53:40'),
(3, 4, 12, 2, '2021-05-25 07:37:53', '2021-04-21 07:55:20'),
(4, 4, 18, 2, '2021-05-14 14:47:39', '2021-04-21 07:55:25'),
(5, 4, 23, 2, '2021-05-14 14:52:33', '2021-04-21 07:55:29'),
(6, 4, 15, 2, '2021-04-21 09:00:52', '2021-04-21 08:57:31'),
(7, 4, 16, 4, '2021-05-14 14:40:45', '2021-04-21 08:57:43'),
(8, 4, 13, 1, '2021-05-11 05:53:35', '2021-05-11 05:53:35'),
(9, 4, 22, 6, '2021-05-15 05:13:22', '2021-05-11 06:15:59'),
(10, 4, 10, 4, '2021-05-27 08:46:49', '2021-05-11 06:20:31'),
(11, 4, 17, 1, '2021-05-14 14:43:45', '2021-05-14 14:43:45'),
(12, 4, 20, 1, '2021-05-14 14:51:37', '2021-05-14 14:51:37'),
(13, 1, 15, 1, '2021-05-26 14:41:36', '2021-05-26 14:41:36'),
(14, 1, 13, 1, '2021-05-26 14:41:40', '2021-05-26 14:41:40'),
(15, 1, 22, 1, '2021-05-26 14:41:46', '2021-05-26 14:41:46'),
(16, 1, 27, 1, '2021-05-26 14:41:51', '2021-05-26 14:41:51'),
(17, 9, 8, 3, '2021-05-28 14:51:15', '2021-05-28 06:09:39'),
(18, 9, 12, 2, '2021-05-29 07:31:03', '2021-05-28 06:09:52'),
(19, 9, 10, 4, '2021-05-29 08:05:48', '2021-05-28 06:10:01'),
(20, 9, 15, 2, '2021-05-29 07:30:50', '2021-05-29 07:26:54'),
(21, 9, 13, 3, '2021-05-29 07:30:45', '2021-05-29 07:27:30'),
(22, 9, 19, 1, '2021-05-29 07:51:48', '2021-05-29 07:51:48'),
(23, 9, 11, 2, '2021-05-29 08:06:02', '2021-05-29 08:05:55'),
(28, 1, 8, 1, '2021-06-03 06:19:08', '2021-06-03 06:19:08'),
(29, 1, 10, 1, '2021-06-03 06:19:14', '2021-06-03 06:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail`
--

DROP TABLE IF EXISTS `tbl_detail`;
CREATE TABLE IF NOT EXISTS `tbl_detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `part_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`detail_id`),
  KEY `tbl_order` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail`
--

INSERT INTO `tbl_detail` (`detail_id`, `order_id`, `part_id`, `qty`, `amount`, `updated_at`, `created_at`) VALUES
(1, 8, 10, 2, '15000.00', '2021-06-01 17:07:45', '2021-06-01 17:07:45'),
(2, 9, 12, 2, '11000.00', '2021-06-02 09:09:35', '2021-06-02 09:09:35'),
(3, 10, 10, 1, '7500.00', '2021-06-02 10:31:57', '2021-06-02 10:31:57'),
(4, 11, 11, 1, '258.00', '2021-06-02 11:00:23', '2021-06-02 11:00:23'),
(5, 12, 10, 1, '7500.00', '2021-06-04 06:17:07', '2021-06-04 06:17:07'),
(6, 13, 13, 2, '2400.00', '2021-06-04 09:42:45', '2021-06-04 09:42:45'),
(7, 14, 10, 1, '7500.00', '2021-06-04 17:15:53', '2021-06-04 17:15:53'),
(8, 15, 10, 1, '7500.00', '2021-06-04 17:23:49', '2021-06-04 17:23:49'),
(9, 16, 15, 1, '3400.00', '2021-06-04 17:25:51', '2021-06-04 17:25:51'),
(10, 17, 14, 1, '799.00', '2021-06-04 17:32:51', '2021-06-04 17:32:51'),
(11, 18, 11, 1, '258.00', '2021-06-04 17:33:52', '2021-06-04 17:33:52'),
(12, 19, 11, 1, '258.00', '2021-06-04 17:35:16', '2021-06-04 17:35:16'),
(13, 20, 11, 1, '258.00', '2021-06-04 17:42:35', '2021-06-04 17:42:35'),
(14, 21, 10, 1, '7500.00', '2021-06-04 17:52:18', '2021-06-04 17:52:18'),
(15, 22, 12, 1, '5500.00', '2021-06-04 18:01:55', '2021-06-04 18:01:55'),
(16, 23, 10, 1, '7500.00', '2021-06-05 07:05:44', '2021-06-05 07:05:44'),
(17, 24, 14, 1, '799.00', '2021-06-05 07:11:41', '2021-06-05 07:11:41'),
(18, 25, 14, 1, '799.00', '2021-06-05 07:20:10', '2021-06-05 07:20:10'),
(19, 26, 10, 1, '7500.00', '2021-06-06 16:38:11', '2021-06-06 16:38:11'),
(20, 27, 11, 1, '258.00', '2021-06-06 17:00:08', '2021-06-06 17:00:08'),
(21, 28, 14, 2, '1598.00', '2021-06-07 05:46:43', '2021-06-07 05:46:43'),
(22, 29, 10, 1, '7500.00', '2021-06-22 08:49:56', '2021-06-22 08:49:56'),
(23, 30, 10, 1, '7500.00', '2021-06-22 08:53:38', '2021-06-22 08:53:38'),
(24, 31, 18, 1, '599.00', '2021-06-22 09:01:14', '2021-06-22 09:01:14'),
(25, 32, 18, 1, '599.00', '2021-06-22 09:05:02', '2021-06-22 09:05:02'),
(26, 33, 10, 1, '7500.00', '2021-06-22 16:18:29', '2021-06-22 16:18:29'),
(27, 34, 15, 1, '3400.00', '2021-06-22 16:19:15', '2021-06-22 16:19:15'),
(28, 35, 12, 1, '5500.00', '2021-06-22 16:21:21', '2021-06-22 16:21:21'),
(29, 36, 11, 1, '258.00', '2021-06-22 16:23:18', '2021-06-22 16:23:18'),
(30, 38, 19, 1, '5500.00', '2021-06-22 16:24:53', '2021-06-22 16:24:53'),
(31, 39, 11, 1, '258.00', '2021-06-23 07:58:37', '2021-06-23 07:58:37'),
(32, 39, 14, 1, '799.00', '2021-06-23 07:58:37', '2021-06-23 07:58:37'),
(33, 40, 11, 1, '258.00', '2021-06-23 08:01:08', '2021-06-23 08:01:08'),
(34, 41, 11, 1, '258.00', '2021-06-23 08:04:31', '2021-06-23 08:04:31'),
(35, 42, 11, 2, '516.00', '2021-06-23 08:55:03', '2021-06-23 08:55:03'),
(36, 43, 18, 1, '599.00', '2021-06-23 09:09:08', '2021-06-23 09:09:08'),
(37, 43, 23, 3, '3435.00', '2021-06-23 09:09:08', '2021-06-23 09:09:08'),
(38, 44, 10, 1, '7500.00', '2021-06-23 10:32:16', '2021-06-23 10:32:16'),
(39, 45, 11, 2, '516.00', '2021-07-10 04:57:11', '2021-07-10 04:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feed_text` varchar(200) NOT NULL,
  `feed_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feed_id`, `name`, `contact`, `email`, `feed_text`, `feed_datetime`, `updated_at`, `created_at`) VALUES
(1, 'jwidw', '1234567890', 'abc@gmail.com', ',diuehfenjkenvjhbuvbjnvk e', '2021-02-06 18:06:40', '2021-02-06 18:06:40', '2021-02-06 18:06:40'),
(2, 'Deep', '123', '123', '123', '2021-03-12 14:58:13', '2021-03-12 09:28:11', '2021-03-12 09:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ins_company`
--

DROP TABLE IF EXISTS `tbl_ins_company`;
CREATE TABLE IF NOT EXISTS `tbl_ins_company` (
  `ins_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(30) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `isactive` varchar(3) NOT NULL DEFAULT 'Y',
  `addressline1` text NOT NULL,
  `addressline2` text NOT NULL,
  `landmark` varchar(30) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `city_id` int(11) NOT NULL,
  `about` varchar(30) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ins_id`),
  KEY `ins_id` (`ins_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ins_company`
--

INSERT INTO `tbl_ins_company` (`ins_id`, `com_name`, `p_name`, `contact`, `email`, `website`, `isactive`, `addressline1`, `addressline2`, `landmark`, `pincode`, `city_id`, `about`, `logo`, `updated_at`, `created_at`) VALUES
(1, 'Max Bupa', 'Jivan Suraksha', '1234567890', 'abc@gmail.com', 'https://google.com', 'yes', 'kdiwuydww', ',dniwduudqd jwbd', 'dqjdi', '395005', 4, 'abc', '16152747955607.png', '2021-03-09 07:26:36', '2021-02-19 03:24:33'),
(2, 'ICICI', 'Jeete Raho', '1234567890', 'abc@gmail.com', 'https://google.com', 'yes', 'kdiwuydww', ',dniwduudqd jwbd', 'dqjdi', '395005', 4, 'abc', '16152720738405.svg', '2021-03-09 06:41:13', '2021-02-19 03:24:33'),
(3, 'Tata Ins. Cop.', 'Tata Insuremile', '9876543210', 'tata@gmail.com', 'https://www.google.com', 'yes', '5611 Wellington Road, Suite 115, Gainesville, VA 20155', '5611 Wellington Road, Suite 115, Gainesville, VA 20155', 'Gainesville Park', '395005', 4, 'test', '16152768175848.jfif', '2021-03-09 08:00:17', '2021-03-09 08:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mechanic`
--

DROP TABLE IF EXISTS `tbl_mechanic`;
CREATE TABLE IF NOT EXISTS `tbl_mechanic` (
  `mach_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mach_image` text NOT NULL,
  `iscar` varchar(30) NOT NULL,
  `isbike` varchar(30) NOT NULL,
  `addressline1` text NOT NULL,
  `addressline2` text NOT NULL,
  `landmark` text NOT NULL,
  `pincode` decimal(10,0) NOT NULL,
  `lattitude` text NOT NULL,
  `longtitude` text NOT NULL,
  `mach_contact` text,
  `isactive` varchar(30) NOT NULL,
  `regi_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mach_id`),
  KEY `city_id` (`city_id`),
  KEY `city_id_2` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mechanic`
--

INSERT INTO `tbl_mechanic` (`mach_id`, `city_id`, `name`, `mach_image`, `iscar`, `isbike`, `addressline1`, `addressline2`, `landmark`, `pincode`, `lattitude`, `longtitude`, `mach_contact`, `isactive`, `regi_datetime`, `updated_at`, `created_at`) VALUES
(1, 4, 'Sailesh', '16152800224277.jpg', 'yes', 'yes', 'Morabhagal', 'Surat', '22, Dariya Co-Operative Farmers Society, Surat, Gujarat 395005, India', '395005', '21.235976698828036', '72.79041625366214', '8780443963', 'yes', '2021-02-08 11:07:23', '2021-05-25 08:31:25', '2021-02-08 05:37:23'),
(5, 4, 'Banti', '16152805679110.jpg', 'yes', 'no', 'Karanj', 'Olpad', 'B-119, 2nd Floor, Navjivan Palace, Mandroi - Karanj Rd, Karanj, Gujarat 394530, India', '394540', '21.414114257820774', '72.68046714172367', '6354568895', 'yes', '2021-02-17 14:59:33', '2021-05-25 08:34:37', '2021-02-17 09:29:33'),
(6, 16, 'Mitesh', '16152861482041.jpg', 'yes', 'no', '3/79, Rander Rd, Dhanlaxmi Society, Rander, Surat, Gujarat 395005, India', 'Paldi', 'Merulakshmi Temple', '380007', '21.211473901685068', '72.79763676033024', '7984574524', 'yes', '2021-03-09 16:04:52', '2021-05-25 08:40:07', '2021-03-09 10:34:52'),
(7, 15, 'Samir', '16153616578676.jpg', 'yes', 'yes', 'Shop No 9, Jay Jalaram Shopping Centre, Rander Road, Tadwadi, Tadwadi, opposite Saikrupa Bus Stand, Paribrahma Society, Tadwadi, Surat, Gujarat 395005, India', 'Adajan', 'Shivam Cycle', '394540', '21.20946224134978', '72.79514901146892', '9638869095', 'yes', '2021-03-10 12:56:26', '2021-05-25 10:07:40', '2021-03-10 07:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `total_payment` varchar(30) NOT NULL,
  `ispay` varchar(3) NOT NULL DEFAULT 'Y',
  `paymode` varchar(30) NOT NULL,
  `addressline1` varchar(30) NOT NULL,
  `addressline2` varchar(30) NOT NULL,
  `landmark` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `order_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `user_id`, `total_payment`, `ispay`, `paymode`, `addressline1`, `addressline2`, `landmark`, `pincode`, `city_id`, `status`, `order_datetime`, `updated_at`, `created_at`) VALUES
(1, 1, '14500', 'Y', 'cod', 'test', 'test', 'test', 112456, 5, 'completed', '2021-03-08 10:37:25', '2021-06-07 05:08:29', '2021-03-08 10:37:25'),
(2, 2, '8500', 'N', 'cod', 'test', 'test', 'test', 123456, 4, 'completed', '2021-03-08 10:39:40', '2021-06-07 05:11:47', '2021-03-08 10:39:40'),
(3, 3, '14200', 'Y', 'card', 'test', 'test', 'test', 123456, 15, 'delivered', '2021-03-08 10:39:40', '2021-03-08 10:39:40', '2021-03-08 10:39:40'),
(4, 3, '', 'Y', 'COD', 'test', 'test', 'test', 123456, 15, 'cancelled', '2021-06-01 21:16:09', '2021-06-01 17:09:09', '2021-06-01 15:46:09'),
(5, 3, '', 'Y', 'COD', 'test', 'test', 'test', 123456, 15, 'cancelled', '2021-06-01 21:16:35', '2021-06-04 06:17:19', '2021-06-01 15:46:35'),
(6, 3, '', 'Y', 'COD', 'test', 'test', 'test', 123456, 15, 'processing', '2021-06-01 22:33:13', '2021-06-07 05:14:26', '2021-06-01 17:03:13'),
(7, 3, '', 'Y', 'COD', 'test', 'test', 'test', 123456, 15, 'pending', '2021-06-01 22:36:39', '2021-06-01 17:06:39', '2021-06-01 17:06:39'),
(8, 3, '15000', 'Y', 'COD', 'test', 'test', 'test', 123456, 15, 'pending', '2021-06-01 22:37:45', '2021-06-01 17:07:45', '2021-06-01 17:07:45'),
(9, 3, '11000', 'Y', 'COD', 'test', 'test', 'test', 123456, 15, 'pending', '2021-06-02 14:39:35', '2021-06-02 09:09:35', '2021-06-02 09:09:35'),
(10, 3, '7500', 'Y', 'COD', 'test', 'test', 'test', 123456, 15, 'pending', '2021-06-02 16:01:57', '2021-06-02 10:31:57', '2021-06-02 10:31:57'),
(11, 3, '258', 'Y', 'COD', 'test', 'test', 'test', 123456, 15, 'pending', '2021-06-02 16:30:23', '2021-06-02 11:00:23', '2021-06-02 11:00:23'),
(12, 3, '7500', 'Y', 'COD', 'test', 'test', 'test', 123456, 15, 'pending', '2021-06-04 11:47:07', '2021-06-04 06:17:07', '2021-06-04 06:17:07'),
(40, 13, '258', 'Y', 'Online', 'B-504, Vasupujya 15 Pavilions', 'Vaishnodevi Canal Road', 'Opp. D-mart Dandi Road', 395005, 1, 'pending', '2021-06-23 13:31:08', '2021-06-23 08:01:08', '2021-06-23 08:01:08'),
(41, 13, '258', 'Y', 'Online', 'B-504, Vasupujya 15 Pavilions', 'Vaishnodevi Canal Road', 'Opp. D-mart Dandi Road', 395005, 1, 'processing', '2021-06-23 13:34:31', '2021-06-23 08:10:14', '2021-06-23 08:04:31'),
(42, 13, '516', 'Y', 'Online', 'test', 'test', 'test', 123456, 1, 'cancelled', '2021-06-23 14:25:03', '2021-06-23 09:03:49', '2021-06-23 08:55:03'),
(43, 13, '4034', 'Y', 'Online', 'test', 'test', 'test', 123456, 1, 'pending', '2021-06-23 14:39:08', '2021-06-23 09:09:08', '2021-06-23 09:09:08'),
(44, 13, '7500', 'Y', 'Online', 'test', 'test', 'test', 123456, 1, 'pending', '2021-06-23 16:02:16', '2021-06-23 10:32:17', '2021-06-23 10:32:16'),
(45, 13, '516', 'Y', 'Online', 'test', 'test', 'test', 390550, 1, 'pending', '2021-07-10 10:27:11', '2021-07-10 04:57:12', '2021-07-10 04:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pkg`
--

DROP TABLE IF EXISTS `tbl_pkg`;
CREATE TABLE IF NOT EXISTS `tbl_pkg` (
  `pkg_id` int(11) NOT NULL AUTO_INCREMENT,
  `pkg_title` varchar(100) NOT NULL,
  `pkg_desc` text NOT NULL,
  `pkg_image` text,
  `price` decimal(18,2) NOT NULL,
  `discount` int(4) NOT NULL,
  `isactive` varchar(5) NOT NULL DEFAULT 'Y',
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pkg`
--

INSERT INTO `tbl_pkg` (`pkg_id`, `pkg_title`, `pkg_desc`, `pkg_image`, `price`, `discount`, `isactive`, `updated_at`, `created_at`) VALUES
(1, 'Diamond', '25% on Total Services', 'diamond.jpg', '10275.00', 25, 'yes', '2021-06-06 05:36:29', '2021-03-12 07:28:20'),
(2, 'Platinum', '20% on Total Services', 'platinum.jpg', '5904.00', 18, 'yes', '2021-06-06 07:13:06', '2021-03-12 07:28:51'),
(3, 'Gold', '15% on Total Services', 'gold.jpg', '5525.00', 15, 'yes', '2021-06-06 05:37:10', '2021-03-12 07:29:19'),
(4, 'Silver', '10% on Total Services', 'silver.jpg', '3240.00', 10, 'yes', '2021-06-06 05:37:26', '2021-03-12 07:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pkg_service`
--

DROP TABLE IF EXISTS `tbl_pkg_service`;
CREATE TABLE IF NOT EXISTS `tbl_pkg_service` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `pkg_id` int(11) NOT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_id`),
  KEY `service_id` (`service_id`),
  KEY `pkg_id` (`pkg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pkg_service`
--

INSERT INTO `tbl_pkg_service` (`p_id`, `service_id`, `pkg_id`, `updated_at`, `created_at`) VALUES
(26, 28, 1, '2021-06-06 10:58:38', '2021-06-06 10:58:38'),
(27, 18, 1, '2021-06-06 10:58:38', '2021-06-06 10:58:38'),
(28, 22, 1, '2021-06-06 10:59:11', '2021-06-06 10:59:11'),
(29, 24, 1, '2021-06-06 10:59:11', '2021-06-06 10:59:11'),
(30, 26, 1, '2021-06-06 10:59:26', '2021-06-06 10:59:26'),
(31, 28, 2, '2021-06-06 11:00:28', '2021-06-06 11:00:28'),
(32, 18, 2, '2021-06-06 11:00:28', '2021-06-06 11:00:28'),
(33, 22, 2, '2021-06-06 11:00:28', '2021-06-06 11:00:28'),
(34, 24, 2, '2021-06-06 11:00:28', '2021-06-06 11:00:28'),
(35, 28, 3, '2021-06-06 11:01:55', '2021-06-06 11:01:55'),
(36, 18, 3, '2021-06-06 11:01:55', '2021-06-06 11:01:55'),
(37, 24, 3, '2021-06-06 11:01:55', '2021-06-06 11:01:55'),
(38, 20, 3, '2021-06-06 11:01:55', '2021-06-06 11:01:55'),
(39, 28, 4, '2021-06-06 11:03:05', '2021-06-06 11:03:05'),
(40, 18, 4, '2021-06-06 11:03:05', '2021-06-06 11:03:05'),
(41, 24, 4, '2021-06-06 11:03:05', '2021-06-06 11:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plan`
--

DROP TABLE IF EXISTS `tbl_plan`;
CREATE TABLE IF NOT EXISTS `tbl_plan` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `ins_id` int(11) NOT NULL,
  `plan_title` varchar(30) NOT NULL,
  `plan_desc` text NOT NULL,
  `pdf_file` varchar(100) DEFAULT NULL,
  `price` varchar(30) NOT NULL,
  `validity` varchar(30) NOT NULL,
  `isactive` varchar(3) NOT NULL DEFAULT 'Y',
  `vehicle_type` varchar(30) NOT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`plan_id`),
  KEY `ins_id` (`ins_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_plan`
--

INSERT INTO `tbl_plan` (`plan_id`, `ins_id`, `plan_title`, `plan_desc`, `pdf_file`, `price`, `validity`, `isactive`, `vehicle_type`, `updated_at`, `created_at`) VALUES
(1, 1, 'Term Insurance', 'Term insurance is a pure life insurance product, which provides financial protection to the policyholder. In case of death of the insured during the policy period, the beneficiary receives a death benefit as defined under the chosen term insurance plan.\r\n\r\nTerm insurance is a pure life insurance product, which provides financial protection to the policyholder. In case of death of the insured during the policy period, the beneficiary receives a death benefit as defined under the chosen term insurance plan.\r\n\r\nTerm insurance is a pure life insurance product, which provides financial protection to the policyholder. In case of death of the insured during the policy period, the beneficiary receives a death benefit as defined under the chosen term insurance plan.\r\n\r\nTerm insurance is a pure life insurance product, which provides financial protection to the policyholder. In case of death of the insured during the policy period, the beneficiary receives a death benefit as defined under the chosen term insurance plan.\r\n\r\nTerm insurance is a pure life insurance product, which provides financial protection to the policyholder. In case of death of the insured during the policy period, the beneficiary receives a death benefit as defined under the chosen term insurance plan.', '16152716149528.jpg', '7000', '1 year', 'Yes', 'car', '2021-03-09 07:33:49', '2021-02-06 21:57:02'),
(2, 2, 'Jeete Raho', 'Death, disability, disease, all are realities seldom talked about. However, all three are realities we cannot possibly overcome with certainty. Term insurance is one tool, which can save you and your family from the financial hardships brought upon by these three and similar disastrous conditions.', 'kjbgu4hgn gk', '7000', '1 year', 'Yes', 'bike', '2021-03-22 13:05:53', '2021-02-07 09:49:37'),
(3, 1, 'Bon Voyage', 'Various term insurance plans also offer critical illness benefits to help you avail good treatment for life-threatening diseases without worrying about the costs. You can avail of critical illness cover for more than 40 diseases by opting for Critical illness rider with Max Life Term Insurance plans.', 'kjbgu4hgn gk', '7000', '1 year', 'Yes', 'bike', '2021-03-22 13:05:37', '2021-02-07 09:49:40'),
(4, 3, 'Insuremile', 'ATA AIG two wheeler insurance plans has distinctive features and benefits which makes it different from the rest of the two wheeler insurance plans. The two wheeler plans provides an all round coverage from any unforeseen loss or damage to the two wheeler. TATA AIG Two wheeler plans are cost efficient user friendly and most importantly transparent in nature. This plan covers the partial or total loss caused to the vehicle due to accident fire and associated perils.li liTATA AIG Two Wheeler Insurance Plan covers the Third Party Liability in terms of bodily injury and third party property damage under this plan.li liSpecial discount (No Claim Bonus) for a claim free experience.', '16152771567806.pdf', '7500', '2 years', 'Yes', 'Bike', '2021-03-09 08:05:57', '2021-03-09 08:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating_review`
--

DROP TABLE IF EXISTS `tbl_rating_review`;
CREATE TABLE IF NOT EXISTS `tbl_rating_review` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_vehicle_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `reviews_text` varchar(50) NOT NULL,
  `isdisplay` varchar(3) NOT NULL,
  `review_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`r_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rating_review`
--

INSERT INTO `tbl_rating_review` (`r_id`, `user_vehicle_id`, `user_id`, `rating`, `reviews_text`, `isdisplay`, `review_datetime`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 4, 'Nice Website', 'yes', '2021-02-07 21:58:12', '2021-02-12 13:39:34', '2021-02-12 13:39:34'),
(2, 2, 2, 3, 'Needs more improvement. Slow to load', 'yes', '2021-02-07 21:58:12', '2021-02-12 13:39:34', '2021-02-12 13:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rto_agent`
--

DROP TABLE IF EXISTS `tbl_rto_agent`;
CREATE TABLE IF NOT EXISTS `tbl_rto_agent` (
  `rtoagn_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `agent_work` varchar(30) NOT NULL,
  `lattitude` text NOT NULL,
  `longtitude` text NOT NULL,
  `isactive` varchar(3) NOT NULL DEFAULT 'Y',
  `reg_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rtoagn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rto_agent`
--

INSERT INTO `tbl_rto_agent` (`rtoagn_id`, `name`, `contact`, `email`, `photo`, `agent_work`, `lattitude`, `longtitude`, `isactive`, `reg_datetime`, `updated_at`, `created_at`) VALUES
(1, 'Kushal', '9878556315', 'kushalRTO@gmail.com', '16220389166621.jpg', 'New License', '21.204194', '72.798018', 'yes', '2021-02-19 15:48:08', '2021-05-26 14:21:56', '2021-02-19 10:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_servicecart`
--

DROP TABLE IF EXISTS `tbl_servicecart`;
CREATE TABLE IF NOT EXISTS `tbl_servicecart` (
  `servicecart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`servicecart_id`),
  KEY `service_id` (`service_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tow`
--

DROP TABLE IF EXISTS `tbl_tow`;
CREATE TABLE IF NOT EXISTS `tbl_tow` (
  `tow_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `lattitude` varchar(50) DEFAULT NULL,
  `longtitude` varchar(50) DEFAULT NULL,
  `addressline1` text NOT NULL,
  `addressline2` text NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `desaddrline1` text,
  `desaddrline2` text,
  `deslandmark` varchar(50) DEFAULT NULL,
  `despincode` int(11) DEFAULT NULL,
  `km` float DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `request_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_usr` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tow_id`),
  KEY `user_id` (`user_id`),
  KEY `model_id` (`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tow`
--

INSERT INTO `tbl_tow` (`tow_id`, `user_id`, `model_id`, `lattitude`, `longtitude`, `addressline1`, `addressline2`, `landmark`, `pincode`, `desaddrline1`, `desaddrline2`, `deslandmark`, `despincode`, `km`, `price`, `status`, `request_datetime`, `image_usr`, `created_at`, `updated_at`) VALUES
(1, 3, 2, NULL, NULL, 'bnbnb', 'nbnbnb', 'nbnbn', 636366, 'bn', 'bnbnbn', NULL, 63636, NULL, NULL, NULL, '2021-04-03 11:31:44', NULL, '2021-04-03 06:01:44', '2021-04-03 06:01:44'),
(2, NULL, NULL, NULL, NULL, 'bnbnb', 'nbnbnb', 'nbnbn', 636366, 'bn', 'bnbnbn', NULL, 63636, NULL, NULL, NULL, '2021-04-03 11:31:49', NULL, '2021-04-03 06:01:49', '2021-04-03 06:01:49'),
(3, NULL, NULL, NULL, NULL, 'bnbnb', 'nbnbnb', 'nbnbn', 636366, 'bn', 'bnbnbn', NULL, 63636, NULL, NULL, NULL, '2021-04-03 11:32:11', NULL, '2021-04-03 06:02:11', '2021-04-03 06:02:11'),
(4, NULL, NULL, NULL, NULL, 'Bavafaliya', 'Olpad', 'Surat', 394540, 'Surat', 'Jahangirpura', NULL, 395005, NULL, NULL, NULL, '2021-04-03 11:33:35', NULL, '2021-04-03 06:03:35', '2021-04-03 06:03:35'),
(5, NULL, NULL, NULL, NULL, 'bn', 'bnbnb', 'nb', 6565, 'mn', 'nmn', NULL, 65, NULL, NULL, NULL, '2021-04-03 11:34:45', NULL, '2021-04-03 06:04:45', '2021-04-03 06:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training_schools`
--

DROP TABLE IF EXISTS `tbl_training_schools`;
CREATE TABLE IF NOT EXISTS `tbl_training_schools` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(30) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `school_contact` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `addressline1` text NOT NULL,
  `addressline2` text,
  `landmark` varchar(30) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `city_id` int(11) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `isactive` varchar(3) NOT NULL,
  `price` varchar(30) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`school_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_training_schools`
--

INSERT INTO `tbl_training_schools` (`school_id`, `school_name`, `logo`, `school_contact`, `emailid`, `addressline1`, `addressline2`, `landmark`, `pincode`, `city_id`, `latitude`, `longitude`, `isactive`, `price`, `updated_at`, `created_at`) VALUES
(5, 'Angel Motor Driving School', '16151158189084.jpg', '9377778503', 'angeldriving@gmail.com', 'Devashish Nagar Mora Bhagal, Devashish Nagar, Morabhagal, Surat, Gujarat 395005, India', NULL, 'Dr Park', '380013', 4, '21.22109548520692', '72.78475142822269', 'yes', '1200', '2021-06-06 14:01:31', '2021-02-19 08:16:26'),
(6, 'Rupa Driving School', '16151189369431.webp', '8238228878', 'RupaDrivingSchool@gmail.com', 'G-17, Turning Point Complax, Kamrej Gam Road', 'Kamrej', 'Surat', '394180', 15, '21.276898', '72.953838', 'yes', '2000', '2021-03-07 12:08:56', '2021-02-24 07:45:21'),
(7, 'First Class Driving School', '16151194777615.jpg', '9427722000', 'FirstClass@gmail.com', '2 Kalash Complex, Near New Sharda Mandir Road, Paldi', 'Paldi', 'Ahmedabad', '380007', 16, '15.216355', '77.914198', 'yes', '2500', '2021-03-08 04:59:59', '2021-03-07 11:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `otp` varchar(30) DEFAULT NULL,
  `isverify` varchar(3) DEFAULT 'N',
  `register_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `contact`, `email`, `password`, `otp`, `isverify`, `register_datetime`, `updated_at`, `created_at`) VALUES
(1, 'Deep', '1234567890', 'abc@gmail.com', 'abc123456', '123', 'Y', '2021-02-07 09:48:32', '2021-02-07 09:48:32', '2021-02-07 09:48:32'),
(2, 'Chirag', '1234567890', 'abc@gmail.com', 'abc', '123', 'Y', '2021-02-07 09:48:35', '2021-02-07 09:48:35', '2021-02-07 09:48:35'),
(3, 'Nidhi', '123456456', 'nidhi@gmail.com', 'nidhi123', '123456', 'Y', '2021-03-08 10:34:46', '2021-03-08 10:34:46', '2021-03-08 10:34:46'),
(4, 'Nitin', '6958745541', 'n@gmail.com', 'n1234567', NULL, NULL, '2021-04-02 14:34:58', '2021-04-02 09:04:58', '2021-04-02 09:04:58'),
(5, 'Tejash Patel', '9685455581', 'tejash@gmail.com', 'tejash5581', NULL, NULL, '2021-04-07 13:24:34', '2021-04-07 07:54:34', '2021-04-07 07:54:34'),
(7, 'Chirag Patel', '6354112200', 'Chirag@gmail.com', 'chirag07', NULL, 'Y', '2021-05-27 15:34:06', '2021-05-27 10:04:06', '2021-05-27 10:04:06'),
(8, 'Chirag Patel', '6354568895', 'Chirag@gmail.com', 'chirag07', NULL, 'Y', '2021-05-27 15:34:41', '2021-05-27 10:04:41', '2021-05-27 10:04:41'),
(9, 'Chirag Patel', '6354568895', 'Chirag@gmail.com', 'chirag07', NULL, 'Y', '2021-05-28 11:37:49', '2021-05-28 06:07:49', '2021-05-28 06:07:49'),
(10, 'Kamal Patel', '6354525512', 'chilupatel77@gmail.com', 'kamal12345', NULL, 'Y', '2021-06-03 11:59:03', '2021-06-03 06:29:03', '2021-06-03 06:29:03'),
(11, 'Jenish', '7845129630', 'jenish@gmail.com', 'jenish1198', NULL, 'Y', '2021-06-03 12:13:51', '2021-06-03 12:13:51', '2021-06-03 12:13:51'),
(12, 'Chirag Patel', '6354568895', 'chilupatel77@gmail.com', 'chirag89', NULL, 'Y', '2021-06-04 11:52:49', '2021-06-04 06:22:49', '2021-06-04 06:22:49'),
(13, 'Deep Kansara', '8780443963', 'kansaradeep1820@gmail.com', 'deep1234', '244766', 'N', '2021-06-04 14:12:02', '2021-06-06 16:56:28', '2021-06-04 14:12:02'),
(16, 'Rinki Shah', '8780443963', 'kansaradeep1820@gmail.com', '8780443963', '395830', 'N', '2021-06-06 22:23:59', '2021-06-06 16:53:59', '2021-06-06 16:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle_service`
--

DROP TABLE IF EXISTS `tbl_vehicle_service`;
CREATE TABLE IF NOT EXISTS `tbl_vehicle_service` (
  `user_vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `vehicale_no` varchar(100) NOT NULL,
  `remark` text,
  `total_payment` varchar(100) DEFAULT NULL,
  `pic_up_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Addressline1` text NOT NULL,
  `Addressline2` text NOT NULL,
  `pincode` int(11) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `order_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_vehicle_id`),
  KEY `user_id` (`user_id`,`model_id`),
  KEY `model_id` (`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vehicle_service`
--

INSERT INTO `tbl_vehicle_service` (`user_vehicle_id`, `user_id`, `model_id`, `vehicale_no`, `remark`, `total_payment`, `pic_up_date`, `Addressline1`, `Addressline2`, `pincode`, `landmark`, `status`, `type`, `order_datetime`, `updated_at`, `created_at`) VALUES
(1, 2, 1, 'GJ-05 NA 7315', 'jdiwufiunekjeif', '2000', '2021-02-13 00:00:00', 'olpad', 'surat', 395005, 'riuhe', 'complete', '', '2021-02-27 00:00:00', '2021-06-07 04:52:54', NULL),
(2, 2, 1, '135323', 'gchjhgc', '7836783', '2021-02-11 00:00:00', '85/SAI ASHISH SOCIETY, BHATGAMROAD, OLPAD', '85/SAI ASHISH SOCIETY, BHATGAMROAD, OLPAD', 394540, 'nbcs', '2', '', '2021-02-19 00:00:00', '2021-02-23 20:03:33', '2021-02-20 12:10:47'),
(3, 2, 1, '9965', 'jvjijevk veve', '2000', '2021-02-06 00:00:00', 'Nishal faliya', 'Nishal faliya', 395005, 'dqjdi', 'New Order', '', '2021-02-11 00:00:00', '2021-02-23 20:08:10', '2021-02-23 20:08:10'),
(4, 13, 5, 'GJ-05 1314', NULL, '', '2021-06-04 19:22:39', 'B-504 Vasupujya 15 Pavilions', 'Ugat Canal Road', 395005, 'Opp Dmart', 'cancelled', '', '2021-06-04 19:22:39', '2021-06-04 15:27:30', '2021-06-04 13:52:39'),
(5, 13, 5, 'GJ-05 1314', NULL, '2075', '2021-06-04 19:23:25', 'B-504 Vasupujya 15 Pavilions', 'Ugat Canal Road', 395005, 'Opp Dmart', 'pending', '', '2021-06-04 19:23:25', '2021-06-04 13:53:25', '2021-06-04 13:53:25'),
(6, 13, 5, 'GJ-05 1314', NULL, '9500', '2021-06-04 20:54:44', 'B-504 Vasupujya 15 Pavilions', 'Ugat Canal Road', 395005, 'Opp Dmart', 'pending', '', '2021-06-04 20:54:44', '2021-06-04 15:24:44', '2021-06-04 15:24:44'),
(7, 13, 5, 'GJ-05 1314', NULL, '1080', '2021-06-04 20:56:27', 'B-504 Vasupujya 15 Pavilions', 'Ugat Canal Road', 395005, 'Opp Dmart', 'processing', '', '2021-06-04 20:56:27', '2021-06-04 15:27:08', '2021-06-04 15:26:27'),
(8, 13, 13, 'GJ-05 1', NULL, '10400', '2021-06-05 13:04:18', 'test', 'test', 395005, 'test', 'pending', '', '2021-06-05 13:04:18', '2021-06-05 07:34:18', '2021-06-05 07:34:18'),
(9, 13, 13, 'GJ-05 1', NULL, '0', '2021-06-05 13:08:26', 'test', 'test', 395005, 'test', 'pending', 'manual', '2021-06-05 13:08:26', '2021-06-05 07:38:26', '2021-06-05 07:38:26'),
(10, 2, 17, 'GJ-05 1314', NULL, '0', '2021-06-06 12:25:51', 'test', 'test', 395005, 'test', 'pending', 'manual', '2021-06-06 12:25:51', '2021-06-06 06:55:51', '2021-06-06 06:55:51'),
(11, 2, 17, 'GJ-05 1314', NULL, '0', '2021-06-06 12:34:10', 'test', 'test', 395005, 'test', 'pending', 'package', '2021-06-06 12:34:10', '2021-06-06 07:04:10', '2021-06-06 07:04:10'),
(12, 2, 17, 'GJ-05 1314', NULL, '', '2021-06-06 12:44:47', 'test', 'test', 395005, 'test', 'pending', 'package', '2021-06-06 12:44:47', '2021-06-06 07:14:47', '2021-06-06 07:14:47'),
(13, 2, 17, 'GJ-05 1314', NULL, '', '2021-06-06 12:45:27', 'test', 'test', 395005, 'test', 'pending', 'package', '2021-06-06 12:45:27', '2021-06-06 07:15:27', '2021-06-06 07:15:27'),
(14, 2, 17, 'GJ-05 1314', NULL, '', '2021-06-06 12:45:56', 'test', 'test', 395005, 'test', 'pending', 'package', '2021-06-06 12:45:56', '2021-06-06 07:15:56', '2021-06-06 07:15:56'),
(15, 2, 17, 'GJ-05 1314', NULL, '', '2021-06-06 12:46:28', 'test', 'test', 395005, 'test', 'pending', 'package', '2021-06-06 12:46:28', '2021-06-06 07:16:28', '2021-06-06 07:16:28'),
(16, 2, 17, 'GJ-05 1314', NULL, '', '2021-06-06 12:48:03', 'test', 'test', 395005, 'test', 'pending', 'package', '2021-06-06 12:48:03', '2021-06-06 07:18:03', '2021-06-06 07:18:03'),
(17, 2, 17, 'GJ-05 1314', NULL, '0', '2021-06-06 12:49:34', 'test', 'test', 395005, 'test', 'pending', 'package', '2021-06-06 12:49:34', '2021-06-06 07:19:34', '2021-06-06 07:19:34'),
(18, 2, 17, 'GJ-05 1314', NULL, '5525', '2021-06-06 12:52:20', 'test', 'test', 395005, 'test', 'pending', 'package', '2021-06-06 12:52:20', '2021-06-06 07:22:20', '2021-06-06 07:22:20'),
(19, 2, 17, 'GJ-05 1314', NULL, '3240', '2021-06-06 14:00:17', 'test', 'test', 395005, 'test', 'pending', 'package', '2021-06-06 14:00:17', '2021-06-06 08:30:17', '2021-06-06 08:30:17'),
(20, 2, 17, 'GJ-05 1314', NULL, '7850', '2021-06-06 14:06:54', 'test', 'test', 395005, 'test', 'pending', 'manual', '2021-06-06 14:06:54', '2021-06-06 08:36:54', '2021-06-06 08:36:54'),
(21, 13, 16, 'Gj-05 1314', NULL, '5904', '2021-06-06 22:10:17', 'test', 'test', 395005, 'test', 'pending', 'package', '2021-06-06 22:10:17', '2021-06-06 16:40:18', '2021-06-06 16:40:17'),
(22, 13, 24, 'gj-05 1314', NULL, '10275', '2021-06-07 11:06:29', 'test', 'test', 395005, 'test', 'processing', 'package', '2021-06-07 11:06:29', '2021-06-07 05:42:51', '2021-06-07 05:36:29'),
(23, 13, 13, 'gj-05 1314', NULL, '3240', '2021-06-22 14:19:42', 'test', 'test', 395005, 'test', 'pending', 'package', '2021-06-22 14:19:42', '2021-06-22 08:49:42', '2021-06-22 08:49:41'),
(24, 13, 19, 'gj-05 1124', NULL, '5525', '2021-06-22 21:55:59', 'test', 'TEST', 395005, 'test', 'complete', 'package', '2021-06-22 21:55:59', '2021-06-22 16:26:52', '2021-06-22 16:25:59'),
(25, 13, 14, 'AB-05 1314', NULL, '10275', '2021-06-23 14:23:56', 'test', 'test', 123456, 'test', 'pending', 'package', '2021-06-23 14:23:56', '2021-06-23 08:53:56', '2021-06-23 08:53:56'),
(26, 13, 17, 'gj-05 1314', NULL, '5904', '2021-06-23 16:04:28', 'test', 'test', 123456, 'test', 'pending', 'package', '2021-06-23 16:04:28', '2021-06-23 10:34:28', '2021-06-23 10:34:28');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD CONSTRAINT `service_detail_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_detail_ibfk_2` FOREIGN KEY (`user_vehicle_id`) REFERENCES `tbl_vehicle_service` (`user_vehicle_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_detail_ibfk_3` FOREIGN KEY (`pkg_id`) REFERENCES `tbl_pkg` (`pkg_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`part_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pkg_service`
--
ALTER TABLE `tbl_pkg_service`
  ADD CONSTRAINT `tbl_pkg_service_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pkg_service_ibfk_2` FOREIGN KEY (`pkg_id`) REFERENCES `tbl_pkg` (`pkg_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_servicecart`
--
ALTER TABLE `tbl_servicecart`
  ADD CONSTRAINT `tbl_servicecart_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_servicecart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_vehicle_service`
--
ALTER TABLE `tbl_vehicle_service`
  ADD CONSTRAINT `tbl_vehicle_service_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_vehicle_service_ibfk_2` FOREIGN KEY (`model_id`) REFERENCES `model` (`model_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
