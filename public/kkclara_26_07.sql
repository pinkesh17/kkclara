-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2025 at 10:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkclara`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `country` tinyint(4) UNSIGNED NOT NULL,
  `state` tinyint(4) UNSIGNED NOT NULL,
  `district` mediumint(9) UNSIGNED NOT NULL,
  `block` int(11) UNSIGNED NOT NULL,
  `panchayat` int(11) UNSIGNED NOT NULL,
  `city` int(11) UNSIGNED NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `address_line1` varchar(300) NOT NULL,
  `address_line2` varchar(300) NOT NULL,
  `landmark` varchar(300) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_gender`
--

CREATE TABLE `info_gender` (
  `gender_id` tinyint(4) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info_gender`
--

INSERT INTO `info_gender` (`gender_id`, `gender`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `info_goal`
--

CREATE TABLE `info_goal` (
  `goal_id` tinyint(4) NOT NULL,
  `goal` varchar(20) NOT NULL,
  `goal_sub` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info_goal`
--

INSERT INTO `info_goal` (`goal_id`, `goal`, `goal_sub`) VALUES
(1, 'Lean', ''),
(2, 'Build', ''),
(3, 'Recomp', ''),
(4, 'Gain flexibility', ''),
(5, 'General health', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_address`
--

CREATE TABLE `location_address` (
  `address_id` int(11) NOT NULL,
  `city_id` mediumint(9) NOT NULL,
  `manager_id` smallint(6) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_block`
--

CREATE TABLE `location_block` (
  `block_id` int(11) UNSIGNED NOT NULL,
  `district_id` mediumint(8) UNSIGNED NOT NULL,
  `block_name` varchar(100) NOT NULL,
  `city_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_block`
--

INSERT INTO `location_block` (`block_id`, `district_id`, `block_name`, `city_url`) VALUES
(1, 24, 'Asthawan', 'eee'),
(2, 24, 'Biharsharif', ''),
(3, 24, 'Chandi', ''),
(4, 24, 'Harnaut', ''),
(5, 24, 'Hilsa', ''),
(6, 24, 'Islampur', ''),
(7, 24, 'Nalanda', ''),
(8, 24, 'Noorsarai', ''),
(9, 24, 'Rajgir', '');

-- --------------------------------------------------------

--
-- Table structure for table `location_districts`
--

CREATE TABLE `location_districts` (
  `district_id` mediumint(8) UNSIGNED NOT NULL,
  `state_id` mediumint(8) UNSIGNED NOT NULL,
  `district_name` varchar(100) NOT NULL,
  `district_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_districts`
--

INSERT INTO `location_districts` (`district_id`, `state_id`, `district_name`, `district_url`) VALUES
(1, 1, 'Nicobars', 'nicobars'),
(2, 1, 'North and Middle Andaman', 'north-and-middle-andaman'),
(3, 1, 'South Andaman', 'south-andaman'),
(4, 2, 'Anantapur', 'anantapur'),
(5, 2, 'Chittoor', 'chittoor'),
(6, 2, 'East Godavari', 'east-godavari'),
(7, 2, 'Guntur', 'guntur'),
(8, 2, 'Krishna', 'krishna'),
(9, 2, 'Kurnool', 'kurnool'),
(10, 2, 'Prakasam', 'prakasam'),
(11, 2, 'Sri Potti Sriramulu Nellore', 'sri-potti-sriramulu-nellore'),
(12, 2, 'Srikakulam', 'srikakulam'),
(13, 2, 'Visakhapatnam', 'visakhapatnam'),
(14, 2, 'Vizianagaram', 'vizianagaram'),
(15, 2, 'West Godavari', 'west-godavari'),
(16, 2, 'Y.S.R.', 'y-s-r'),
(17, 3, 'Anjaw', 'anjaw'),
(18, 3, 'Changlang', 'changlang'),
(19, 3, 'Dibang Valley', 'dibang-valley'),
(20, 3, 'East Kameng', 'east-kameng'),
(21, 3, 'East Siang', 'east-siang'),
(22, 3, 'Kra Daadi', 'kra-daadi'),
(23, 3, 'Kurung Kumey', 'kurung-kumey'),
(24, 3, 'Lohit', 'lohit'),
(25, 3, 'Lower Dibang Valley', 'lower-dibang-valley'),
(26, 3, 'Lower Siang', 'lower-siang'),
(27, 3, 'Lower Subansiri', 'lower-subansiri'),
(28, 3, 'Namsai', 'namsai'),
(29, 3, 'Papum Pare', 'papum-pare'),
(30, 3, 'Siang', 'siang'),
(31, 3, 'Tawang', 'tawang'),
(32, 3, 'Tirap', 'tirap'),
(33, 3, 'Upper Siang', 'upper-siang'),
(34, 3, 'Upper Subansiri', 'upper-subansiri'),
(35, 3, 'West Kameng', 'west-kameng'),
(36, 3, 'West Siang', 'west-siang'),
(37, 4, 'Baksa', 'baksa'),
(38, 4, 'Barpeta', 'barpeta'),
(39, 4, 'Biswanath', 'biswanath'),
(40, 4, 'Bongaigaon', 'bongaigaon'),
(41, 4, 'Cachar', 'cachar'),
(42, 4, 'Charaideo', 'charaideo'),
(43, 4, 'Chirang', 'chirang'),
(44, 4, 'Darrang', 'darrang'),
(45, 4, 'Dhemaji', 'dhemaji'),
(46, 4, 'Dhubri', 'dhubri'),
(47, 4, 'Dibrugarh', 'dibrugarh'),
(48, 4, 'Dima Hasao', 'dima-hasao'),
(49, 4, 'Goalpara', 'goalpara'),
(50, 4, 'Golaghat', 'golaghat'),
(51, 4, 'Hailakandi', 'hailakandi'),
(52, 4, 'Hojai', 'hojai'),
(53, 4, 'Jorhat', 'jorhat'),
(54, 4, 'Kamrup', 'kamrup'),
(55, 4, 'Kamrup Metropolitan', 'kamrup-metropolitan'),
(56, 4, 'Karbi Anglong', 'karbi-anglong'),
(57, 4, 'Karimganj', 'karimganj'),
(58, 4, 'Kokrajhar', 'kokrajhar'),
(59, 4, 'Lakhimpur', 'lakhimpur'),
(60, 4, 'Majuli', 'majuli'),
(61, 4, 'Morigaon', 'morigaon'),
(62, 4, 'Nagaon', 'nagaon'),
(63, 4, 'Nalbari', 'nalbari'),
(64, 4, 'Sivasagar', 'sivasagar'),
(65, 4, 'Sonitpur', 'sonitpur'),
(66, 4, 'South Salamara-Mankachar', 'south-salamara-mankachar'),
(67, 4, 'Tinsukia', 'tinsukia'),
(68, 4, 'Udalguri', 'udalguri'),
(69, 4, 'West Karbi Anglong', 'west-karbi-anglong'),
(70, 5, 'Araria', 'araria'),
(71, 5, 'Arwal', 'arwal'),
(72, 5, 'Aurangabad', 'aurangabad'),
(73, 5, 'Banka', 'banka'),
(74, 5, 'Begusarai', 'begusarai'),
(75, 5, 'Bhagalpur', 'bhagalpur'),
(76, 5, 'Bhojpur', 'bhojpur'),
(77, 5, 'Buxar', 'buxar'),
(78, 5, 'Darbhanga', 'darbhanga'),
(79, 5, 'Gaya', 'gaya'),
(80, 5, 'Gopalganj', 'gopalganj'),
(81, 5, 'Jamui', 'jamui'),
(82, 5, 'Jehanabad', 'jehanabad'),
(83, 5, 'Kaimur (Bhabua)', 'kaimur-bhabua'),
(84, 5, 'Katihar', 'katihar'),
(85, 5, 'Khagaria', 'khagaria'),
(86, 5, 'Kishanganj', 'kishanganj'),
(87, 5, 'Lakhisarai', 'lakhisarai'),
(88, 5, 'Madhepura', 'madhepura'),
(89, 5, 'Madhubani', 'madhubani'),
(90, 5, 'Munger', 'munger'),
(91, 5, 'Muzaffarpur', 'muzaffarpur'),
(92, 5, 'Nalanda', 'nalanda'),
(93, 5, 'Nawada', 'nawada'),
(94, 5, 'Pashchim Champaran', 'pashchim-champaran'),
(95, 5, 'Patna', 'patna'),
(96, 5, 'Purbi Champaran', 'purbi-champaran'),
(97, 5, 'Purnia', 'purnia'),
(98, 5, 'Rohtas', 'rohtas'),
(99, 5, 'Saharsa', 'saharsa'),
(100, 5, 'Samastipur', 'samastipur'),
(101, 5, 'Saran', 'saran'),
(102, 5, 'Sheikhpura', 'sheikhpura'),
(103, 5, 'Sheohar', 'sheohar'),
(104, 5, 'Sitamarhi', 'sitamarhi'),
(105, 5, 'Siwan', 'siwan'),
(106, 5, 'Supaul', 'supaul'),
(107, 5, 'Vaishali', 'vaishali'),
(108, 6, 'Chandigarh', 'chandigarh'),
(109, 7, 'Balod', 'balod'),
(110, 7, 'Baloda Bazar', 'baloda-bazar'),
(111, 7, 'Balrampur', 'balrampur'),
(112, 7, 'Bastar', 'bastar'),
(113, 7, 'Bemetara', 'bemetara'),
(114, 7, 'Bijapur', 'bijapur'),
(115, 7, 'Bilaspur', 'bilaspur'),
(116, 7, 'Dakshin Bastar Dantewada', 'dakshin-bastar-dantewada'),
(117, 7, 'Dhamtari', 'dhamtari'),
(118, 7, 'Durg', 'durg'),
(119, 7, 'Gariyaband', 'gariyaband'),
(120, 7, 'Janjgir - Champa', 'janjgir-champa'),
(121, 7, 'Jashpur', 'jashpur'),
(122, 7, 'Kabeerdham', 'kabeerdham'),
(123, 7, 'Kondagaon', 'kondagaon'),
(124, 7, 'Korba', 'korba'),
(125, 7, 'Koriya', 'koriya'),
(126, 7, 'Mahasamund', 'mahasamund'),
(127, 7, 'Mungeli', 'mungeli'),
(128, 7, 'Narayanpur', 'narayanpur'),
(129, 7, 'Raigarh', 'raigarh'),
(130, 7, 'Raipur', 'raipur'),
(131, 7, 'Rajnandgaon', 'rajnandgaon'),
(132, 7, 'Sukma', 'sukma'),
(133, 7, 'Surajpur', 'surajpur'),
(134, 7, 'Surguja', 'surguja'),
(135, 7, 'Uttar Bastar Kanker', 'uttar-bastar-kanker'),
(136, 8, 'Dadra and Nagar Haveli', 'dadra-and-nagar-haveli'),
(137, 18, 'Daman', 'daman'),
(138, 18, 'Diu', 'diu'),
(139, 10, 'North Goa', 'north-goa'),
(140, 10, 'South Goa', 'south-goa'),
(141, 11, 'Ahmadabad', 'ahmadabad'),
(142, 11, 'Amreli', 'amreli'),
(143, 11, 'Anand', 'anand'),
(144, 11, 'Arvalli', 'arvalli'),
(145, 11, 'Banas Kantha', 'banas-kantha'),
(146, 11, 'Bharuch', 'bharuch'),
(147, 11, 'Bhavnagar', 'bhavnagar'),
(148, 11, 'Botad', 'botad'),
(149, 11, 'Chhota Udepur', 'chhota-udepur'),
(150, 11, 'Devbhoomi Dwarka', 'devbhoomi-dwarka'),
(151, 11, 'Dohad', 'dohad'),
(152, 11, 'Gandhinagar', 'gandhinagar'),
(153, 11, 'Gir Somnath', 'gir-somnath'),
(154, 11, 'Jamnagar', 'jamnagar'),
(155, 11, 'Junagadh', 'junagadh'),
(156, 11, 'Kachchh', 'kachchh'),
(157, 11, 'Kheda', 'kheda'),
(158, 11, 'Mahesana', 'mahesana'),
(159, 11, 'Mahisagar', 'mahisagar'),
(160, 11, 'Morbi', 'morbi'),
(161, 11, 'Narmada', 'narmada'),
(162, 11, 'Navsari', 'navsari'),
(163, 11, 'Panch Mahals', 'panch-mahals'),
(164, 11, 'Patan', 'patan'),
(165, 11, 'Porbandar', 'porbandar'),
(166, 11, 'Rajkot', 'rajkot'),
(167, 11, 'Sabar Kantha', 'sabar-kantha'),
(168, 11, 'Surat', 'surat'),
(169, 11, 'Surendranagar', 'surendranagar'),
(170, 11, 'Tapi', 'tapi'),
(171, 11, 'The Dangs', 'the-dangs'),
(172, 11, 'Vadodara', 'vadodara'),
(173, 11, 'Valsad', 'valsad'),
(174, 12, 'Ambala', 'ambala'),
(175, 12, 'Bhiwani', 'bhiwani'),
(176, 12, 'Charkhi Dadri', 'charkhi-dadri'),
(177, 12, 'Faridabad', 'faridabad'),
(178, 12, 'Fatehabad', 'fatehabad'),
(179, 12, 'Gurgaon', 'gurgaon'),
(180, 12, 'Hisar', 'hisar'),
(181, 12, 'Jhajjar', 'jhajjar'),
(182, 12, 'Jind', 'jind'),
(183, 12, 'Kaithal', 'kaithal'),
(184, 12, 'Karnal', 'karnal'),
(185, 12, 'Kurukshetra', 'kurukshetra'),
(186, 12, 'Mahendragarh', 'mahendragarh'),
(187, 12, 'Mewat', 'mewat'),
(188, 12, 'Palwal', 'palwal'),
(189, 12, 'Panchkula', 'panchkula'),
(190, 12, 'Panipat', 'panipat'),
(191, 12, 'Rewari', 'rewari'),
(192, 12, 'Rohtak', 'rohtak'),
(193, 12, 'Sirsa', 'sirsa'),
(194, 12, 'Sonipat', 'sonipat'),
(195, 12, 'Yamunanagar', 'yamunanagar'),
(196, 13, 'Bilaspur', 'bilaspur'),
(197, 13, 'Chamba', 'chamba'),
(198, 13, 'Hamirpur', 'hamirpur'),
(199, 13, 'Kangra', 'kangra'),
(200, 13, 'Kinnaur', 'kinnaur'),
(201, 13, 'Kullu', 'kullu'),
(202, 13, 'Lahul Spiti', 'lahul-spiti'),
(203, 13, 'Mandi', 'mandi'),
(204, 13, 'Shimla', 'shimla'),
(205, 13, 'Sirmaur', 'sirmaur'),
(206, 13, 'Solan', 'solan'),
(207, 13, 'Una', 'una'),
(208, 14, 'Anantnag', 'anantnag'),
(209, 14, 'Badgam', 'badgam'),
(210, 14, 'Bandipore', 'bandipore'),
(211, 14, 'Baramula', 'baramula'),
(212, 14, 'Doda', 'doda'),
(213, 14, 'Ganderbal', 'ganderbal'),
(214, 14, 'Jammu', 'jammu'),
(215, 14, 'Kargil', 'kargil'),
(216, 14, 'Kathua', 'kathua'),
(217, 14, 'Kishtwar', 'kishtwar'),
(218, 14, 'Kulgam', 'kulgam'),
(219, 14, 'Kupwara', 'kupwara'),
(220, 14, 'Leh(Ladakh)', 'leh-ladakh'),
(221, 14, 'Pulwama', 'pulwama'),
(222, 14, 'Punch', 'punch'),
(223, 14, 'Rajouri', 'rajouri'),
(224, 14, 'Ramban', 'ramban'),
(225, 14, 'Reasi', 'reasi'),
(226, 14, 'Samba', 'samba'),
(227, 14, 'Shupiyan', 'shupiyan'),
(228, 14, 'Srinagar', 'srinagar'),
(229, 14, 'Udhampur', 'udhampur'),
(230, 15, 'Bokaro', 'bokaro'),
(231, 15, 'Chatra', 'chatra'),
(232, 15, 'Deoghar', 'deoghar'),
(233, 15, 'Dhanbad', 'dhanbad'),
(234, 15, 'Dumka', 'dumka'),
(235, 15, 'Garhwa', 'garhwa'),
(236, 15, 'Giridih', 'giridih'),
(237, 15, 'Godda', 'godda'),
(238, 15, 'Gumla', 'gumla'),
(239, 15, 'Hazaribagh', 'hazaribagh'),
(240, 15, 'Jamtara', 'jamtara'),
(241, 15, 'Khunti', 'khunti'),
(242, 15, 'Kodarma', 'kodarma'),
(243, 15, 'Latehar', 'latehar'),
(244, 15, 'Lohardaga', 'lohardaga'),
(245, 15, 'Pakur', 'pakur'),
(246, 15, 'Palamu', 'palamu'),
(247, 15, 'Pashchimi Singhbhum', 'pashchimi-singhbhum'),
(248, 15, 'Purbi Singhbhum', 'purbi-singhbhum'),
(249, 15, 'Ramgarh', 'ramgarh'),
(250, 15, 'Ranchi', 'ranchi'),
(251, 15, 'Sahibganj', 'sahibganj'),
(252, 15, 'Saraikela-Kharsawan', 'saraikela-kharsawan'),
(253, 15, 'Simdega', 'simdega'),
(254, 16, 'Bagalkot', 'bagalkot'),
(255, 16, 'Bangalore', 'bangalore'),
(256, 16, 'Bangalore Rural', 'bangalore-rural'),
(257, 16, 'Belgaum', 'belgaum'),
(258, 16, 'Bellary', 'bellary'),
(259, 16, 'Bidar', 'bidar'),
(260, 16, 'Bijapur', 'bijapur'),
(261, 16, 'Chamarajanagar', 'chamarajanagar'),
(262, 16, 'Chikkaballapura', 'chikkaballapura'),
(263, 16, 'Chikmagalur', 'chikmagalur'),
(264, 16, 'Chitradurga', 'chitradurga'),
(265, 16, 'Dakshina Kannada', 'dakshina-kannada'),
(266, 16, 'Davanagere', 'davanagere'),
(267, 16, 'Dharwad', 'dharwad'),
(268, 16, 'Gadag', 'gadag'),
(269, 16, 'Gulbarga', 'gulbarga'),
(270, 16, 'Hassan', 'hassan'),
(271, 16, 'Haveri', 'haveri'),
(272, 16, 'Kodagu', 'kodagu'),
(273, 16, 'Kolar', 'kolar'),
(274, 16, 'Koppal', 'koppal'),
(275, 16, 'Mandya', 'mandya'),
(276, 16, 'Mysore', 'mysore'),
(277, 16, 'Raichur', 'raichur'),
(278, 16, 'Ramanagara', 'ramanagara'),
(279, 16, 'Shimoga', 'shimoga'),
(280, 16, 'Tumkur', 'tumkur'),
(281, 16, 'Udupi', 'udupi'),
(282, 16, 'Uttara Kannada', 'uttara-kannada'),
(283, 16, 'Yadgir', 'yadgir'),
(284, 17, 'Alappuzha', 'alappuzha'),
(285, 17, 'Ernakulam', 'ernakulam'),
(286, 17, 'Idukki', 'idukki'),
(287, 17, 'Kannur', 'kannur'),
(288, 17, 'Kasaragod', 'kasaragod'),
(289, 17, 'Kollam', 'kollam'),
(290, 17, 'Kottayam', 'kottayam'),
(291, 17, 'Kozhikode', 'kozhikode'),
(292, 17, 'Malappuram', 'malappuram'),
(293, 17, 'Palakkad', 'palakkad'),
(294, 17, 'Pathanamthitta', 'pathanamthitta'),
(295, 17, 'Thiruvananthapuram', 'thiruvananthapuram'),
(296, 17, 'Thrissur', 'thrissur'),
(297, 17, 'Wayanad', 'wayanad'),
(298, 19, 'Lakshadweep', 'lakshadweep'),
(299, 20, 'Agar Malwa', 'agar-malwa'),
(300, 20, 'Alirajpur', 'alirajpur'),
(301, 20, 'Anuppur', 'anuppur'),
(302, 20, 'Ashoknagar', 'ashoknagar'),
(303, 20, 'Balaghat', 'balaghat'),
(304, 20, 'Barwani', 'barwani'),
(305, 20, 'Betul', 'betul'),
(306, 20, 'Bhind', 'bhind'),
(307, 20, 'Bhopal', 'bhopal'),
(308, 20, 'Burhanpur', 'burhanpur'),
(309, 20, 'Chhatarpur', 'chhatarpur'),
(310, 20, 'Chhindwara', 'chhindwara'),
(311, 20, 'Damoh', 'damoh'),
(312, 20, 'Datia', 'datia'),
(313, 20, 'Dewas', 'dewas'),
(314, 20, 'Dhar', 'dhar'),
(315, 20, 'Dindori', 'dindori'),
(316, 20, 'Guna', 'guna'),
(317, 20, 'Gwalior', 'gwalior'),
(318, 20, 'Harda', 'harda'),
(319, 20, 'Hoshangabad', 'hoshangabad'),
(320, 20, 'Indore', 'indore'),
(321, 20, 'Jabalpur', 'jabalpur'),
(322, 20, 'Jhabua', 'jhabua'),
(323, 20, 'Katni', 'katni'),
(324, 20, 'Khandwa (East Nimar)', 'khandwa-east-nimar'),
(325, 20, 'Khargone (West Nimar)', 'khargone-west-nimar'),
(326, 20, 'Mandla', 'mandla'),
(327, 20, 'Mandsaur', 'mandsaur'),
(328, 20, 'Morena', 'morena'),
(329, 20, 'Narsimhapur', 'narsimhapur'),
(330, 20, 'Neemuch', 'neemuch'),
(331, 20, 'Panna', 'panna'),
(332, 20, 'Raisen', 'raisen'),
(333, 20, 'Rajgarh', 'rajgarh'),
(334, 20, 'Ratlam', 'ratlam'),
(335, 20, 'Rewa', 'rewa'),
(336, 20, 'Sagar', 'sagar'),
(337, 20, 'Satna', 'satna'),
(338, 20, 'Sehore', 'sehore'),
(339, 20, 'Seoni', 'seoni'),
(340, 20, 'Shahdol', 'shahdol'),
(341, 20, 'Shajapur', 'shajapur'),
(342, 20, 'Sheopur', 'sheopur'),
(343, 20, 'Shivpuri', 'shivpuri'),
(344, 20, 'Sidhi', 'sidhi'),
(345, 20, 'Singrauli', 'singrauli'),
(346, 20, 'Tikamgarh', 'tikamgarh'),
(347, 20, 'Ujjain', 'ujjain'),
(348, 20, 'Umaria', 'umaria'),
(349, 20, 'Vidisha', 'vidisha'),
(350, 21, 'Ahmadnagar', 'ahmadnagar'),
(351, 21, 'Akola', 'akola'),
(352, 21, 'Amravati', 'amravati'),
(353, 21, 'Aurangabad', 'aurangabad'),
(354, 21, 'Bhandara', 'bhandara'),
(355, 21, 'Bid', 'bid'),
(356, 21, 'Buldana', 'buldana'),
(357, 21, 'Chandrapur', 'chandrapur'),
(358, 21, 'Dhule', 'dhule'),
(359, 21, 'Gadchiroli', 'gadchiroli'),
(360, 21, 'Gondiya', 'gondiya'),
(361, 21, 'Hingoli', 'hingoli'),
(362, 21, 'Jalgaon', 'jalgaon'),
(363, 21, 'Jalna', 'jalna'),
(364, 21, 'Kolhapur', 'kolhapur'),
(365, 21, 'Latur', 'latur'),
(366, 21, 'Mumbai', 'mumbai'),
(367, 21, 'Mumbai Suburban', 'mumbai-suburban'),
(368, 21, 'Nagpur', 'nagpur'),
(369, 21, 'Nanded', 'nanded'),
(370, 21, 'Nandurbar', 'nandurbar'),
(371, 21, 'Nashik', 'nashik'),
(372, 21, 'Osmanabad', 'osmanabad'),
(373, 21, 'Palghar', 'palghar'),
(374, 21, 'Parbhani', 'parbhani'),
(375, 21, 'Pune', 'pune'),
(376, 21, 'Raigarh', 'raigarh'),
(377, 21, 'Ratnagiri', 'ratnagiri'),
(378, 21, 'Sangli', 'sangli'),
(379, 21, 'Satara', 'satara'),
(380, 21, 'Sindhudurg', 'sindhudurg'),
(381, 21, 'Solapur', 'solapur'),
(382, 21, 'Thane', 'thane'),
(383, 21, 'Wardha', 'wardha'),
(384, 21, 'Washim', 'washim'),
(385, 21, 'Yavatmal', 'yavatmal'),
(386, 22, 'Bishnupur', 'bishnupur'),
(387, 22, 'Chandel', 'chandel'),
(388, 22, 'Churachandpur', 'churachandpur'),
(389, 22, 'Imphal East', 'imphal-east'),
(390, 22, 'Imphal West', 'imphal-west'),
(391, 22, 'Jiribam', 'jiribam'),
(392, 22, 'Kakching', 'kakching'),
(393, 22, 'Kamjong', 'kamjong'),
(394, 22, 'Kangpokpi', 'kangpokpi'),
(395, 22, 'Noney', 'noney'),
(396, 22, 'Pherzawl', 'pherzawl'),
(397, 22, 'Senapati', 'senapati'),
(398, 22, 'Tamenglong', 'tamenglong'),
(399, 22, 'Tengnoupal', 'tengnoupal'),
(400, 22, 'Thoubal', 'thoubal'),
(401, 22, 'Ukhrul', 'ukhrul'),
(402, 23, 'East Garo Hills', 'east-garo-hills'),
(403, 23, 'East Jaintia Hills', 'east-jaintia-hills'),
(404, 23, 'East Khasi Hills', 'east-khasi-hills'),
(405, 23, 'Jaintia Hills', 'jaintia-hills'),
(406, 23, 'North Garo Hills', 'north-garo-hills'),
(407, 23, 'Ribhoi', 'ribhoi'),
(408, 23, 'South Garo Hills', 'south-garo-hills'),
(409, 23, 'South West Garo Hills', 'south-west-garo-hills'),
(410, 23, 'South West Khasi Hills', 'south-west-khasi-hills'),
(411, 23, 'West Garo Hills', 'west-garo-hills'),
(412, 23, 'West Jaintia Hills', 'west-jaintia-hills'),
(413, 23, 'West Khasi Hills', 'west-khasi-hills'),
(414, 24, 'Aizawl', 'aizawl'),
(415, 24, 'Champhai', 'champhai'),
(416, 24, 'Kolasib', 'kolasib'),
(417, 24, 'Lawngtlai', 'lawngtlai'),
(418, 24, 'Lunglei', 'lunglei'),
(419, 24, 'Mamit', 'mamit'),
(420, 24, 'Saiha', 'saiha'),
(421, 24, 'Serchhip', 'serchhip'),
(422, 25, 'Dimapur', 'dimapur'),
(423, 25, 'Kiphire', 'kiphire'),
(424, 25, 'Kohima', 'kohima'),
(425, 25, 'Longleng', 'longleng'),
(426, 25, 'Mokokchung', 'mokokchung'),
(427, 25, 'Mon', 'mon'),
(428, 25, 'Peren', 'peren'),
(429, 25, 'Phek', 'phek'),
(430, 25, 'Tuensang', 'tuensang'),
(431, 25, 'Wokha', 'wokha'),
(432, 25, 'Zunheboto', 'zunheboto'),
(433, 9, 'Central', 'central'),
(434, 9, 'East', 'east'),
(435, 9, 'New Delhi', 'new-delhi'),
(436, 9, 'North', 'north'),
(437, 9, 'North East', 'north-east'),
(438, 9, 'North West', 'north-west'),
(439, 9, 'Shahdara', 'shahdara'),
(440, 9, 'South', 'south'),
(441, 9, 'South East Delhi', 'south-east-delhi'),
(442, 9, 'South West', 'south-west'),
(443, 9, 'West', 'west'),
(444, 26, 'Anugul', 'anugul'),
(445, 26, 'Balangir', 'balangir'),
(446, 26, 'Baleshwar', 'baleshwar'),
(447, 26, 'Bargarh', 'bargarh'),
(448, 26, 'Baudh', 'baudh'),
(449, 26, 'Bhadrak', 'bhadrak'),
(450, 26, 'Cuttack', 'cuttack'),
(451, 26, 'Debagarh', 'debagarh'),
(452, 26, 'Dhenkanal', 'dhenkanal'),
(453, 26, 'Gajapati', 'gajapati'),
(454, 26, 'Ganjam', 'ganjam'),
(455, 26, 'Jagatsinghapur', 'jagatsinghapur'),
(456, 26, 'Jajapur', 'jajapur'),
(457, 26, 'Jharsuguda', 'jharsuguda'),
(458, 26, 'Kalahandi', 'kalahandi'),
(459, 26, 'Kandhamal', 'kandhamal'),
(460, 26, 'Kendrapara', 'kendrapara'),
(461, 26, 'Kendujhar', 'kendujhar'),
(462, 26, 'Khordha', 'khordha'),
(463, 26, 'Koraput', 'koraput'),
(464, 26, 'Malkangiri', 'malkangiri'),
(465, 26, 'Mayurbhanj', 'mayurbhanj'),
(466, 26, 'Nabarangapur', 'nabarangapur'),
(467, 26, 'Nayagarh', 'nayagarh'),
(468, 26, 'Nuapada', 'nuapada'),
(469, 26, 'Puri', 'puri'),
(470, 26, 'Rayagada', 'rayagada'),
(471, 26, 'Sambalpur', 'sambalpur'),
(472, 26, 'Subarnapur', 'subarnapur'),
(473, 26, 'Sundargarh', 'sundargarh'),
(474, 27, 'Karaikal', 'karaikal'),
(475, 27, 'Mahe', 'mahe'),
(476, 27, 'Puducherry', 'puducherry'),
(477, 27, 'Yanam', 'yanam'),
(478, 28, 'Amritsar', 'amritsar'),
(479, 28, 'Barnala', 'barnala'),
(480, 28, 'Bathinda', 'bathinda'),
(481, 28, 'Faridkot', 'faridkot'),
(482, 28, 'Fatehgarh Sahib', 'fatehgarh-sahib'),
(483, 28, 'Fazilka', 'fazilka'),
(484, 28, 'Firozpur', 'firozpur'),
(485, 28, 'Gurdaspur', 'gurdaspur'),
(486, 28, 'Hoshiarpur', 'hoshiarpur'),
(487, 28, 'Jalandhar', 'jalandhar'),
(488, 28, 'Kapurthala', 'kapurthala'),
(489, 28, 'Ludhiana', 'ludhiana'),
(490, 28, 'Mansa', 'mansa'),
(491, 28, 'Moga', 'moga'),
(492, 28, 'Muktsar', 'muktsar'),
(493, 28, 'Pathankot', 'pathankot'),
(494, 28, 'Patiala', 'patiala'),
(495, 28, 'Rupnagar', 'rupnagar'),
(496, 28, 'Sahibzada Ajit Singh Nagar', 'sahibzada-ajit-singh-nagar'),
(497, 28, 'Sangrur', 'sangrur'),
(498, 28, 'Shahid Bhagat Singh Nagar', 'shahid-bhagat-singh-nagar'),
(499, 28, 'Tarn Taran', 'tarn-taran'),
(500, 29, 'Ajmer', 'ajmer'),
(501, 29, 'Alwar', 'alwar'),
(502, 29, 'Banswara', 'banswara'),
(503, 29, 'Baran', 'baran'),
(504, 29, 'Barmer', 'barmer'),
(505, 29, 'Bharatpur', 'bharatpur'),
(506, 29, 'Bhilwara', 'bhilwara'),
(507, 29, 'Bikaner', 'bikaner'),
(508, 29, 'Bundi', 'bundi'),
(509, 29, 'Chittaurgarh', 'chittaurgarh'),
(510, 29, 'Churu', 'churu'),
(511, 29, 'Dausa', 'dausa'),
(512, 29, 'Dhaulpur', 'dhaulpur'),
(513, 29, 'Dungarpur', 'dungarpur'),
(514, 29, 'Hanumangarh', 'hanumangarh'),
(515, 29, 'Jaipur', 'jaipur'),
(516, 29, 'Jaisalmer', 'jaisalmer'),
(517, 29, 'Jalor', 'jalor'),
(518, 29, 'Jhalawar', 'jhalawar'),
(519, 29, 'Jhunjhunun', 'jhunjhunun'),
(520, 29, 'Jodhpur', 'jodhpur'),
(521, 29, 'Karauli', 'karauli'),
(522, 29, 'Kota', 'kota'),
(523, 29, 'Nagaur', 'nagaur'),
(524, 29, 'Pali', 'pali'),
(525, 29, 'Pratapgarh', 'pratapgarh'),
(526, 29, 'Rajsamand', 'rajsamand'),
(527, 29, 'Sawai Madhopur', 'sawai-madhopur'),
(528, 29, 'Sikar', 'sikar'),
(529, 29, 'Sirohi', 'sirohi'),
(530, 29, 'Sri Ganganagar', 'sri-ganganagar'),
(531, 29, 'Tonk', 'tonk'),
(532, 29, 'Udaipur', 'udaipur'),
(533, 30, 'East District', 'east-district'),
(534, 30, 'North  District', 'north-district'),
(535, 30, 'South District', 'south-district'),
(536, 30, 'West District', 'west-district'),
(537, 31, 'Ariyalur', 'ariyalur'),
(538, 31, 'Chennai', 'chennai'),
(539, 31, 'Coimbatore', 'coimbatore'),
(540, 31, 'Cuddalore', 'cuddalore'),
(541, 31, 'Dharmapuri', 'dharmapuri'),
(542, 31, 'Dindigul', 'dindigul'),
(543, 31, 'Erode', 'erode'),
(544, 31, 'Kancheepuram', 'kancheepuram'),
(545, 31, 'Kanniyakumari', 'kanniyakumari'),
(546, 31, 'Karur', 'karur'),
(547, 31, 'Krishnagiri', 'krishnagiri'),
(548, 31, 'Madurai', 'madurai'),
(549, 31, 'Nagapattinam', 'nagapattinam'),
(550, 31, 'Namakkal', 'namakkal'),
(551, 31, 'Perambalur', 'perambalur'),
(552, 31, 'Pudukkottai', 'pudukkottai'),
(553, 31, 'Ramanathapuram', 'ramanathapuram'),
(554, 31, 'Salem', 'salem'),
(555, 31, 'Sivaganga', 'sivaganga'),
(556, 31, 'Thanjavur', 'thanjavur'),
(557, 31, 'The Nilgiris', 'the-nilgiris'),
(558, 31, 'Theni', 'theni'),
(559, 31, 'Thiruvallur', 'thiruvallur'),
(560, 31, 'Thiruvarur', 'thiruvarur'),
(561, 31, 'Thoothukkudi', 'thoothukkudi'),
(562, 31, 'Tiruchirappalli', 'tiruchirappalli'),
(563, 31, 'Tirunelveli', 'tirunelveli'),
(564, 31, 'Tiruppur', 'tiruppur'),
(565, 31, 'Tiruvannamalai', 'tiruvannamalai'),
(566, 31, 'Vellore', 'vellore'),
(567, 31, 'Viluppuram', 'viluppuram'),
(568, 31, 'Virudhunagar', 'virudhunagar'),
(569, 32, 'Adilabad', 'adilabad'),
(570, 32, 'Bhadradri', 'bhadradri'),
(571, 32, 'Hyderabad', 'hyderabad'),
(572, 32, 'Jagtial', 'jagtial'),
(573, 32, 'Jangaon', 'jangaon'),
(574, 32, 'Jayashankar', 'jayashankar'),
(575, 32, 'Jogulamba', 'jogulamba'),
(576, 32, 'Kamareddy', 'kamareddy'),
(577, 32, 'Karimnagar', 'karimnagar'),
(578, 32, 'Khammam', 'khammam'),
(579, 32, 'Komaram Bheem', 'komaram-bheem'),
(580, 32, 'Mahabubabad', 'mahabubabad'),
(581, 32, 'Mahbubnagar', 'mahbubnagar'),
(582, 32, 'Mancherial', 'mancherial'),
(583, 32, 'Medak', 'medak'),
(584, 32, 'Medchal-Malkajgiri', 'medchal-malkajgiri'),
(585, 32, 'Nagarkurnool', 'nagarkurnool'),
(586, 32, 'Nalgonda', 'nalgonda'),
(587, 32, 'Nirmal', 'nirmal'),
(588, 32, 'Nizamabad', 'nizamabad'),
(589, 32, 'Peddapalli', 'peddapalli'),
(590, 32, 'Rajanna', 'rajanna'),
(591, 32, 'Rangareddy', 'rangareddy'),
(592, 32, 'Sangareddy', 'sangareddy'),
(593, 32, 'Siddipet', 'siddipet'),
(594, 32, 'Suryapet', 'suryapet'),
(595, 32, 'Vikarabad', 'vikarabad'),
(596, 32, 'Wanaparthy', 'wanaparthy'),
(597, 32, 'Warangal Rural', 'warangal-rural'),
(598, 32, 'Warangal Urban', 'warangal-urban'),
(599, 32, 'Yadadri', 'yadadri'),
(600, 33, 'Dhalai', 'dhalai'),
(601, 33, 'Gomati', 'gomati'),
(602, 33, 'Khowai', 'khowai'),
(603, 33, 'North Tripura', 'north-tripura'),
(604, 33, 'Sepahijala', 'sepahijala'),
(605, 33, 'South Tripura', 'south-tripura'),
(606, 33, 'Unakoti', 'unakoti'),
(607, 33, 'West Tripura', 'west-tripura'),
(608, 34, 'Agra', 'agra'),
(609, 34, 'Aligarh', 'aligarh'),
(610, 34, 'Allahabad', 'allahabad'),
(611, 34, 'Ambedkar Nagar', 'ambedkar-nagar'),
(612, 34, 'Amethi', 'amethi'),
(613, 34, 'Amroha', 'amroha'),
(614, 34, 'Auraiya', 'auraiya'),
(615, 34, 'Azamgarh', 'azamgarh'),
(616, 34, 'Baghpat', 'baghpat'),
(617, 34, 'Bahraich', 'bahraich'),
(618, 34, 'Ballia', 'ballia'),
(619, 34, 'Balrampur', 'balrampur'),
(620, 34, 'Banda', 'banda'),
(621, 34, 'Bara Banki', 'bara-banki'),
(622, 34, 'Bareilly', 'bareilly'),
(623, 34, 'Basti', 'basti'),
(624, 34, 'Bhadohi', 'bhadohi'),
(625, 34, 'Bijnor', 'bijnor'),
(626, 34, 'Budaun', 'budaun'),
(627, 34, 'Bulandshahr', 'bulandshahr'),
(628, 34, 'Chandauli', 'chandauli'),
(629, 34, 'Chitrakoot', 'chitrakoot'),
(630, 34, 'Deoria', 'deoria'),
(631, 34, 'Etah', 'etah'),
(632, 34, 'Etawah', 'etawah'),
(633, 34, 'Faizabad', 'faizabad'),
(634, 34, 'Farrukhabad', 'farrukhabad'),
(635, 34, 'Fatehpur', 'fatehpur'),
(636, 34, 'Firozabad', 'firozabad'),
(637, 34, 'Gautam Buddha Nagar', 'gautam-buddha-nagar'),
(638, 34, 'Ghaziabad', 'ghaziabad'),
(639, 34, 'Ghazipur', 'ghazipur'),
(640, 34, 'Gonda', 'gonda'),
(641, 34, 'Gorakhpur', 'gorakhpur'),
(642, 34, 'Hamirpur', 'hamirpur'),
(643, 34, 'Hapur', 'hapur'),
(644, 34, 'Hardoi', 'hardoi'),
(645, 34, 'Hathras', 'hathras'),
(646, 34, 'Jalaun', 'jalaun'),
(647, 34, 'Jaunpur', 'jaunpur'),
(648, 34, 'Jhansi', 'jhansi'),
(649, 34, 'Kannauj', 'kannauj'),
(650, 34, 'Kanpur Dehat', 'kanpur-dehat'),
(651, 34, 'Kanpur Nagar', 'kanpur-nagar'),
(652, 34, 'Kasganj', 'kasganj'),
(653, 34, 'Kaushambi', 'kaushambi'),
(654, 34, 'Kheri', 'kheri'),
(655, 34, 'Kushinagar', 'kushinagar'),
(656, 34, 'Lalitpur', 'lalitpur'),
(657, 34, 'Lucknow', 'lucknow'),
(658, 34, 'Mahoba', 'mahoba'),
(659, 34, 'Mahrajganj', 'mahrajganj'),
(660, 34, 'Mainpuri', 'mainpuri'),
(661, 34, 'Mathura', 'mathura'),
(662, 34, 'Mau', 'mau'),
(663, 34, 'Meerut', 'meerut'),
(664, 34, 'Mirzapur', 'mirzapur'),
(665, 34, 'Moradabad', 'moradabad'),
(666, 34, 'Muzaffarnagar', 'muzaffarnagar'),
(667, 34, 'Pilibhit', 'pilibhit'),
(668, 34, 'Pratapgarh', 'pratapgarh'),
(669, 34, 'Rae Bareli', 'rae-bareli'),
(670, 34, 'Rampur', 'rampur'),
(671, 34, 'Saharanpur', 'saharanpur'),
(672, 34, 'Sambhal', 'sambhal'),
(673, 34, 'Sant Kabir Nagar', 'sant-kabir-nagar'),
(674, 34, 'Shahjahanpur', 'shahjahanpur'),
(675, 34, 'Shamli', 'shamli'),
(676, 34, 'Shrawasti', 'shrawasti'),
(677, 34, 'Siddharthnagar', 'siddharthnagar'),
(678, 34, 'Sitapur', 'sitapur'),
(679, 34, 'Sonbhadra', 'sonbhadra'),
(680, 34, 'Sultanpur', 'sultanpur'),
(681, 34, 'Unnao', 'unnao'),
(682, 34, 'Varanasi', 'varanasi'),
(683, 35, 'Almora', 'almora'),
(684, 35, 'Bageshwar', 'bageshwar'),
(685, 35, 'Chamoli', 'chamoli'),
(686, 35, 'Champawat', 'champawat'),
(687, 35, 'Dehradun', 'dehradun'),
(688, 35, 'Garhwal', 'garhwal'),
(689, 35, 'Hardwar', 'hardwar'),
(690, 35, 'Nainital', 'nainital'),
(691, 35, 'Pithoragarh', 'pithoragarh'),
(692, 35, 'Rudraprayag', 'rudraprayag'),
(693, 35, 'Tehri Garhwal', 'tehri-garhwal'),
(694, 35, 'Udham Singh Nagar', 'udham-singh-nagar'),
(695, 35, 'Uttarkashi', 'uttarkashi'),
(696, 36, 'Alipurduar', 'alipurduar'),
(697, 36, 'Bankura', 'bankura'),
(698, 36, 'Barddhaman', 'barddhaman'),
(699, 36, 'Birbhum', 'birbhum'),
(700, 36, 'Dakshin Dinajpur', 'dakshin-dinajpur'),
(701, 36, 'Darjiling', 'darjiling'),
(702, 36, 'Haora', 'haora'),
(703, 36, 'Hugli', 'hugli'),
(704, 36, 'Jalpaiguri', 'jalpaiguri'),
(705, 36, 'Jhargram', 'jhargram'),
(706, 36, 'Kalimpong', 'kalimpong'),
(707, 36, 'Koch Bihar', 'koch-bihar'),
(708, 36, 'Kolkata', 'kolkata'),
(709, 36, 'Maldah', 'maldah'),
(710, 36, 'Murshidabad', 'murshidabad'),
(711, 36, 'Nadia', 'nadia'),
(712, 36, 'North Twenty Four Parganas', 'north-twenty-four-parganas'),
(713, 36, 'Paschim Bardhaman', 'paschim-bardhaman'),
(714, 36, 'Paschim Medinipur', 'paschim-medinipur'),
(715, 36, 'Purba Bardhaman', 'purba-bardhaman'),
(716, 36, 'Purba Medinipur', 'purba-medinipur'),
(717, 36, 'Puruliya', 'puruliya'),
(718, 36, 'South Twenty Four Parganas', 'south-twenty-four-parganas'),
(719, 36, 'Uttar Dinajpur', 'uttar-dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `location_localites`
--

CREATE TABLE `location_localites` (
  `locality_id` int(11) NOT NULL,
  `city_id` smallint(6) NOT NULL,
  `district_id` smallint(6) NOT NULL,
  `locality_name` varchar(100) NOT NULL,
  `locality_url` varchar(100) NOT NULL,
  `locality_lat` varchar(20) NOT NULL,
  `locality_long` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_states`
--

CREATE TABLE `location_states` (
  `state_id` mediumint(9) UNSIGNED NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `state_url` varchar(100) NOT NULL,
  `org_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_states`
--

INSERT INTO `location_states` (`state_id`, `state_name`, `state_url`, `org_code`) VALUES
(1, 'Andaman and Nicobar Islands', '9999', 35),
(2, 'Andhra Pradesh', '', 28),
(3, 'Arunachal Pradesh', '', 12),
(4, 'Assam', '', 18),
(5, 'Bihar', '', 10),
(6, 'Chandigarh', '', 4),
(7, 'Chhattisgarh', '', 22),
(8, 'Dadra and Nagar Haveli and Daman and Diu', '', 26),
(9, 'Delhi', '', 7),
(10, 'Goa', '', 30),
(11, 'Gujarat', '', 24),
(12, 'Haryana', '', 6),
(13, 'Himachal Pradesh', '', 2),
(14, 'Jammu and Kashmir', '', 1),
(15, 'Jharkhand', '', 20),
(16, 'Karnataka', '', 29),
(17, 'Kerala', '', 32),
(18, 'Ladakh', '', 25),
(19, 'Lakshadweep', '', 31),
(20, 'Madhya Pradesh', '', 23),
(21, 'Maharashtra', '', 27),
(22, 'Manipur', '', 14),
(23, 'Meghalaya', '', 17),
(24, 'Mizoram', '', 15),
(25, 'Nagaland', '', 13),
(26, 'Odisha', '', 21),
(27, 'Puducherry', '', 34),
(28, 'Punjab', '', 3),
(29, 'Rajasthan', '', 8),
(30, 'Sikkim', '', 11),
(31, 'Tamil Nadu', '', 33),
(32, 'Telangana', '', 36),
(33, 'Tripura', '', 16),
(34, 'Uttar Pradesh', '', 9),
(35, 'Uttarakhand', '', 5),
(36, 'West Bengal', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_01_065605_create_flights_table', 1),
(5, '2025_07_01_092935_create_personal_access_tokens_table', 2),
(6, '2025_07_02_122626_add_phone_role_id_to_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `group_id` bigint(20) NOT NULL,
  `post_type` smallint(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `privacy` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_privacy`
--

CREATE TABLE `post_privacy` (
  `privacy_id` tinyint(4) NOT NULL,
  `privacy_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_privacy`
--

INSERT INTO `post_privacy` (`privacy_id`, `privacy_type`) VALUES
(1, 'public'),
(2, 'friends'),
(3, 'private'),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `post_type`
--

CREATE TABLE `post_type` (
  `post_type_id` tinyint(4) NOT NULL,
  `post_type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_type`
--

INSERT INTO `post_type` (`post_type_id`, `post_type_name`) VALUES
(1, 'General'),
(2, 'News'),
(3, 'Event'),
(4, 'Announcement'),
(5, 'Job'),
(6, 'Matrimony');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('v6chprDtYe5BL7zPHKtCLQzTBAQVTAUNZo13iv3h', 1234567916, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRjJCbm52WEJJbDBCdXJFSHNucml5eEtBaHFZNnZTY0wya0U2UWkyOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Qva2tjbGFyYS93ZWJhZG1pbi91c2VycyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjM0NTY3OTE2O3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTc1MzM4MTYwMjt9fQ==', 1753389620);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_primary` tinyint(4) NOT NULL DEFAULT 0,
  `prefix` tinyint(4) DEFAULT NULL,
  `username` bigint(20) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `steps` tinyint(4) NOT NULL DEFAULT 0,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_primary`, `prefix`, `username`, `first_name`, `last_name`, `phone`, `phone_verified_at`, `email`, `email_verified_at`, `password`, `date_of_birth`, `gender`, `profile_picture`, `bio`, `steps`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 0, NULL, 'Pinkesh Kumar', '', NULL, NULL, 'pinkeshku@gmail.com', NULL, '$2y$12$2to9ezuQsYDVXTE0Gy1.pue2K1Q4iGqYJihSVR9g26aNF/UHYogb2', '2024-11-02', 0, '', '0', 0, 31, 0, NULL, '2025-07-01 03:44:22', '2025-07-01 03:44:22'),
(7, 0, 0, NULL, 'Pinkesh Kumarert', '', '0987678765', NULL, 'pinkeshku1p@gmail.com', NULL, '$2y$12$dl8UCwXOltdB8Dk/KRVZ6uIDMavc7klPF/v3CHjKbuHKeg0IyngFi', '0000-00-00', 0, '', '0', 0, 1, 1, NULL, '2025-07-02 12:49:12', '2025-07-02 12:49:12'),
(1234567900, 0, 0, NULL, NULL, '', '8851394265', '2025-07-03 09:01:37', NULL, NULL, '$2y$12$6lZU5rCEv1J36X3OxjHasu.rr3hIARw.ZKuEZeWEHP2SaEXZsMwFy', '0000-00-00', 0, '', '0', 0, 1, 1, NULL, '2025-07-03 09:01:37', '2025-07-03 09:01:37'),
(1234567901, 0, 0, NULL, NULL, '', '8851394265', '2025-07-03 09:03:21', NULL, NULL, '$2y$12$S0oSxEEctBQRQ7Tyfx2cL.U541R8lv7/4bXQmloVxE9ATtNFjvfL2', '0000-00-00', 0, '', '0', 0, 1, 1, NULL, '2025-07-03 09:03:21', '2025-07-03 09:03:21'),
(1234567911, 0, 0, 1234567911, '402698', '', '1122334455', '2025-07-05 14:21:40', NULL, NULL, '$2y$12$SiF.n9oJtoMtmFcSmIcPturCtunK.260notqAnspjzf3GiVPvMwJ6', '0000-00-00', 0, '', '0', 0, 1, 1, NULL, '2025-07-05 14:21:41', '2025-07-05 14:21:41'),
(1234567914, 1, 0, 1234567914, 'Pert', '', '9953138204', '2025-07-05 19:43:42', NULL, NULL, '$2y$12$cnDRKkkffoqYHKmD4l.cR.p16Fsy1oaJtJvu2ofikWkhm/hi8zuCi', NULL, NULL, NULL, NULL, 0, 1, 1, NULL, '2025-07-05 19:43:43', '2025-07-05 19:43:43'),
(1234567915, 1, 0, 1234567915, 'Aman', '', '9953138210', '2025-07-06 08:14:41', NULL, NULL, '$2y$12$6QQ6D/njn3jL.Xh.08yLdeIfD9f/u/rdbTQxjXpabTTGbfSOHsijC', NULL, NULL, NULL, NULL, 0, 1, 1, NULL, '2025-07-06 08:14:41', '2025-07-06 08:14:41'),
(1234567916, 1, 11, 1234567916, 'Pinko', 'Ji', '9953122222', '2025-07-06 11:01:29', NULL, NULL, '$2y$12$S4G7m7KCPVAygmfEzaRcg.AeLGQ1wNgbEeH0DEnQN3p0VE6XnYToa', '2009-01-01', 1, NULL, NULL, 0, 31, 1, NULL, '2025-07-06 11:01:29', '2025-07-06 19:29:27'),
(1234567917, 1, NULL, 1234567917, 'Pinkesh', 'Kumar', '9898234567', '2025-07-16 21:25:50', NULL, NULL, '$2y$12$DZV3SmAOe99yptBWbo6EJOIXJFGr7zEtGIHDPGDoTK8oELQaZYyXi', NULL, NULL, NULL, NULL, 0, 31, 1, NULL, '2025-07-16 21:25:50', '2025-07-16 21:25:50'),
(1234567918, 1, NULL, NULL, 'Abhay', 'Fr', NULL, NULL, NULL, NULL, '$2y$12$C7ynpbNkxSusPcfQDW086esrLGlwNMjRQoI/.YpOraGmodoL1goJC', NULL, NULL, NULL, NULL, 0, 1, 1, NULL, '2025-07-24 20:32:14', '2025-07-24 20:32:14'),
(1234567919, 1, NULL, 1234567919, 'Final Gt', 'Rty', '580098', NULL, NULL, NULL, '$2y$12$5mcUKcISTYJE6MKxAbEww.kyrmsDUYzE9AJYg6WG/Mts1HIAtSo.S', NULL, NULL, NULL, NULL, 0, 1, 2, NULL, '2025-07-24 20:34:15', '2025-07-24 20:34:15'),
(1234567920, 1, NULL, 1234567920, 'Yur', 'hj', '772662', NULL, NULL, NULL, '$2y$12$wgwL/5V0hlrlEz1JCMGIgutL9I.1qKmlpfXA1cwsjU2gcRAQ7aQ4G', NULL, NULL, NULL, NULL, 0, 1, 1, NULL, '2025-07-24 20:37:39', '2025-07-24 20:37:39'),
(1234567921, 1, NULL, 1234567921, 'Der', 'We', '650154', NULL, NULL, NULL, '$2y$12$nZFsyQ.L3hVo4wOct6AlJuxyBVmvqG6RUbH5ca4lCWi.QPgOEa3DG', NULL, NULL, NULL, NULL, 0, 1, 1, NULL, '2025-07-24 20:38:27', '2025-07-24 20:38:27'),
(1234567922, 1, 10, 1234567922, 'Ser', 'Final', '618408', NULL, NULL, NULL, '$2y$12$1wYYP9.RmKQxvJRNurpYbe1xoU2PnT0a44Uv8B/vVlhU52aawXGwS', NULL, NULL, NULL, NULL, 0, 1, 0, NULL, '2025-07-24 20:40:04', '2025-07-24 20:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_following`
--

CREATE TABLE `user_following` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `follower_id` bigint(20) UNSIGNED NOT NULL,
  `following_id` bigint(20) UNSIGNED NOT NULL,
  `followed_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_friends`
--

CREATE TABLE `user_friends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `friend_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('pending','accepted','rejected') DEFAULT 'pending',
  `requested_at` datetime NOT NULL,
  `accepted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_gender`
--

CREATE TABLE `user_gender` (
  `gender_id` tinyint(4) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_gender`
--

INSERT INTO `user_gender` (`gender_id`, `gender`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_group_members`
--

CREATE TABLE `user_group_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role` enum('member','admin','moderator') DEFAULT 'member',
  `joined_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_jobs`
--

CREATE TABLE `user_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_current` tinyint(1) DEFAULT 0,
  `description` text DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_matrimony_profiles`
--

CREATE TABLE `user_matrimony_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `marital_status` enum('single','divorced','widowed') DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `caste` varchar(100) DEFAULT NULL,
  `height_cm` int(11) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `income` varchar(100) DEFAULT NULL,
  `about_yourself` text DEFAULT NULL,
  `preferences` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

CREATE TABLE `user_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `type` enum('info','warning','success','alert') DEFAULT 'info',
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_prefix`
--

CREATE TABLE `user_prefix` (
  `id` tinyint(4) NOT NULL,
  `prefix` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_prefix`
--

INSERT INTO `user_prefix` (`id`, `prefix`) VALUES
(1, 'Mr.'),
(2, 'Mrs.'),
(3, 'Ms.'),
(4, 'Miss'),
(5, 'Dr.'),
(6, 'Prof.'),
(7, 'Capt.'),
(8, 'Col.'),
(9, 'Maj.'),
(10, 'Engg.'),
(11, 'Adv.'),
(12, 'CA');

-- --------------------------------------------------------

--
-- Table structure for table `user_relatives`
--

CREATE TABLE `user_relatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `relative_id` bigint(20) UNSIGNED DEFAULT NULL,
  `relationship` enum('father','mother','brother','sister','spouse','child','other') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` tinyint(4) NOT NULL,
  `role_name` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`, `role`) VALUES
(1, 'member', 'Member'),
(11, 'moderator', 'Moderator'),
(21, 'admin', 'Admin'),
(31, 'sadmin', 'S. Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_profile_public` tinyint(1) DEFAULT 1,
  `email_notifications` tinyint(1) DEFAULT 1,
  `push_notifications` tinyint(1) DEFAULT 1,
  `dark_mode` tinyint(1) DEFAULT 0,
  `language` varchar(10) DEFAULT 'en',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `id` tinyint(4) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`id`, `status`) VALUES
(0, 'Inactive'),
(1, 'Active'),
(2, 'Blocked'),
(11, 'Deleted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_gender`
--
ALTER TABLE `info_gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `info_goal`
--
ALTER TABLE `info_goal`
  ADD PRIMARY KEY (`goal_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_address`
--
ALTER TABLE `location_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `location_block`
--
ALTER TABLE `location_block`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `location_districts`
--
ALTER TABLE `location_districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `location_localites`
--
ALTER TABLE `location_localites`
  ADD PRIMARY KEY (`locality_id`);

--
-- Indexes for table `location_states`
--
ALTER TABLE `location_states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_privacy`
--
ALTER TABLE `post_privacy`
  ADD PRIMARY KEY (`privacy_id`);

--
-- Indexes for table `post_type`
--
ALTER TABLE `post_type`
  ADD PRIMARY KEY (`post_type_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `name` (`first_name`);

--
-- Indexes for table `user_following`
--
ALTER TABLE `user_following`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `follower_id` (`follower_id`,`following_id`),
  ADD KEY `following_id` (`following_id`);

--
-- Indexes for table `user_friends`
--
ALTER TABLE `user_friends`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`friend_id`),
  ADD KEY `friend_id` (`friend_id`);

--
-- Indexes for table `user_gender`
--
ALTER TABLE `user_gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `user_group_members`
--
ALTER TABLE `user_group_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_id` (`group_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_jobs`
--
ALTER TABLE `user_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_matrimony_profiles`
--
ALTER TABLE `user_matrimony_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_prefix`
--
ALTER TABLE `user_prefix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_relatives`
--
ALTER TABLE `user_relatives`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`relative_id`),
  ADD KEY `relative_id` (`relative_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_gender`
--
ALTER TABLE `info_gender`
  MODIFY `gender_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info_goal`
--
ALTER TABLE `info_goal`
  MODIFY `goal_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location_address`
--
ALTER TABLE `location_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location_block`
--
ALTER TABLE `location_block`
  MODIFY `block_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `location_districts`
--
ALTER TABLE `location_districts`
  MODIFY `district_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=720;

--
-- AUTO_INCREMENT for table `location_localites`
--
ALTER TABLE `location_localites`
  MODIFY `locality_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location_states`
--
ALTER TABLE `location_states`
  MODIFY `state_id` mediumint(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_privacy`
--
ALTER TABLE `post_privacy`
  MODIFY `privacy_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_type`
--
ALTER TABLE `post_type`
  MODIFY `post_type_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567923;

--
-- AUTO_INCREMENT for table `user_following`
--
ALTER TABLE `user_following`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_friends`
--
ALTER TABLE `user_friends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_gender`
--
ALTER TABLE `user_gender`
  MODIFY `gender_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group_members`
--
ALTER TABLE `user_group_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_jobs`
--
ALTER TABLE `user_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_matrimony_profiles`
--
ALTER TABLE `user_matrimony_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_prefix`
--
ALTER TABLE `user_prefix`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_relatives`
--
ALTER TABLE `user_relatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_following`
--
ALTER TABLE `user_following`
  ADD CONSTRAINT `follower_id` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `following_id` FOREIGN KEY (`following_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_friends`
--
ALTER TABLE `user_friends`
  ADD CONSTRAINT `friend_id` FOREIGN KEY (`friend_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD CONSTRAINT `user_groups_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_group_members`
--
ALTER TABLE `user_group_members`
  ADD CONSTRAINT `user_group_members_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_group_members_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `user_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_jobs`
--
ALTER TABLE `user_jobs`
  ADD CONSTRAINT `user_jobs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_matrimony_profiles`
--
ALTER TABLE `user_matrimony_profiles`
  ADD CONSTRAINT `user_matrimony_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD CONSTRAINT `user_notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_relatives`
--
ALTER TABLE `user_relatives`
  ADD CONSTRAINT `user_relatives_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_relatives_ibfk_2` FOREIGN KEY (`relative_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD CONSTRAINT `user_settings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
