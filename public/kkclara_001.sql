-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2025 at 02:29 PM
-- Server version: 8.0.42-0ubuntu0.24.04.1
-- PHP Version: 8.2.12

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
  `address_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `country` tinyint UNSIGNED NOT NULL,
  `state` tinyint UNSIGNED NOT NULL,
  `district` mediumint UNSIGNED NOT NULL,
  `block` int UNSIGNED NOT NULL,
  `panchayat` int UNSIGNED NOT NULL,
  `city` int UNSIGNED NOT NULL,
  `postal_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line1` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_gender`
--

CREATE TABLE `info_gender` (
  `gender_id` tinyint NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `goal_id` tinyint NOT NULL,
  `goal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal_sub` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_address`
--

CREATE TABLE `location_address` (
  `address_id` int NOT NULL,
  `city_id` mediumint NOT NULL,
  `manager_id` smallint NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_blocks`
--

CREATE TABLE `location_blocks` (
  `id` int NOT NULL,
  `district_id` smallint NOT NULL,
  `block_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_url` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_blocks`
--

INSERT INTO `location_blocks` (`id`, `district_id`, `block_name`, `block_url`) VALUES
(1, 70, 'Araria', 'araria'),
(2, 70, 'Jokihat', 'jokihat'),
(3, 70, 'Kursakanta', 'kursakanta'),
(4, 70, 'Palasi', 'palasi'),
(5, 70, 'Raniganj', 'raniganj'),
(6, 70, 'Sikti', 'sikti'),
(7, 70, 'Forbesganj', 'forbesganj'),
(8, 70, 'Bhargama', 'bhargama'),
(9, 71, 'Arwal', 'arwal'),
(10, 71, 'Karpi', 'karpi'),
(11, 71, 'Kaler', 'kaler'),
(12, 71, 'Kurtha', 'kurtha'),
(13, 71, 'Sonbhadra Banshi Suryapur', 'sonbhadra-banshi-suryapur'),
(14, 72, 'Aurangabad', 'aurangabad'),
(15, 72, 'Daudnagar', 'daudnagar'),
(16, 72, 'Barun', 'barun'),
(17, 72, 'Obra', 'obra'),
(18, 72, 'Madanpur', 'madanpur'),
(19, 72, 'Kutumba', 'kutumba'),
(20, 72, 'Deo', 'deo'),
(21, 72, 'Nabinagar', 'nabinagar'),
(22, 72, 'Haspura', 'haspura'),
(23, 72, 'Rafiganj', 'rafiganj'),
(24, 73, 'Banka', 'banka'),
(25, 73, 'Amarpur', 'amarpur'),
(26, 73, 'Katoria', 'katoria'),
(27, 73, 'Belhar', 'belhar'),
(28, 73, 'Bounsi', 'bounsi'),
(29, 73, 'Chandan', 'chandan'),
(30, 73, 'Dhuraiya', 'dhuraiya'),
(31, 73, 'Fullidumar', 'fullidumar'),
(32, 73, 'Rajaun', 'rajaun'),
(33, 73, 'Shambhuganj', 'shambhuganj'),
(34, 74, 'Begusarai', 'begusarai'),
(35, 74, 'Bakhri', 'bakhri'),
(36, 74, 'Balia', 'balia'),
(37, 74, 'Barauni', 'barauni'),
(38, 74, 'Bachhwara', 'bachhwara'),
(39, 74, 'Teghra', 'teghra'),
(40, 74, 'Cheria Bariarpur', 'cheria-bariarpur'),
(41, 74, 'Chhorahi', 'chhorahi'),
(42, 74, 'Dandari', 'dandari'),
(43, 74, 'Garhpura', 'garhpura'),
(44, 74, 'Khudabandpur', 'khudabandpur'),
(45, 74, 'Mansurchak', 'mansurchak'),
(46, 74, 'Matihani', 'matihani'),
(47, 74, 'Naokothi', 'naokothi'),
(48, 74, 'Sahebpur Kamal', 'sahebpur-kamal'),
(49, 74, 'Shamho Akha Kurha', 'shamho-akha-kurha'),
(50, 75, 'Bhagalpur', 'bhagalpur'),
(51, 75, 'Goradih', 'goradih'),
(52, 75, 'Ismailpur', 'ismailpur'),
(53, 75, 'Colgong', 'colgong'),
(54, 75, 'Narayanpur', 'narayanpur'),
(55, 75, 'Bihpur', 'bihpur'),
(56, 75, 'Kharik', 'kharik'),
(57, 75, 'Naugachhia', 'naugachhia'),
(58, 75, 'Pirpainti', 'pirpainti'),
(59, 75, 'Rangra Chowk', 'rangra-chowk'),
(60, 75, 'Sabour', 'sabour'),
(61, 75, 'Sonhaula', 'sonhaula'),
(62, 75, 'Kahalgaon', 'kahalgaon'),
(63, 76, 'Arrah', 'arrah'),
(64, 76, 'Barhara', 'barhara'),
(65, 76, 'Bihiya', 'bihiya'),
(66, 76, 'Charpokhari', 'charpokhari'),
(67, 76, 'Garhani', 'garhani'),
(68, 76, 'Jagdishpur', 'jagdishpur'),
(69, 76, 'Koilwar', 'koilwar'),
(70, 76, 'Piro', 'piro'),
(71, 76, 'Sandesh', 'sandesh'),
(72, 76, 'Shahpur', 'shahpur'),
(73, 76, 'Tarari', 'tarari'),
(74, 76, 'Udwantnagar', 'udwantnagar'),
(75, 77, 'Buxar', 'buxar'),
(76, 77, 'Chausa', 'chausa'),
(77, 77, 'Chaugain', 'chaugain'),
(78, 77, 'Dumraon', 'dumraon'),
(79, 77, 'Itarhi', 'itarhi'),
(80, 77, 'Kesath', 'kesath'),
(81, 77, 'Nawanagar', 'nawanagar'),
(82, 77, 'Rajpur', 'rajpur'),
(83, 77, 'Simri', 'simri'),
(84, 78, 'Darbhanga', 'darbhanga'),
(85, 78, 'Bahadurpur', 'bahadurpur'),
(86, 78, 'Baheri', 'baheri'),
(87, 78, 'Benipur', 'benipur'),
(88, 78, 'Biraul', 'biraul'),
(89, 78, 'Ghanshyampur', 'ghanshyampur'),
(90, 78, 'Hanuman Nagar', 'hanuman-nagar'),
(91, 78, 'Hayaghat', 'hayaghat'),
(92, 78, 'Jale', 'jale'),
(93, 78, 'Keoti', 'keoti'),
(94, 78, 'Kiratpur', 'kiratpur'),
(95, 78, 'Kusheshwar Asthan', 'kusheshwar-asthan'),
(96, 78, 'Kusheshwar Asthan East', 'kusheshwar-asthan-east'),
(97, 78, 'Manigachhi', 'manigachhi'),
(98, 78, 'Singhwara', 'singhwara'),
(99, 78, 'Tardih', 'tardih'),
(100, 79, 'Motihari', 'motihari'),
(101, 79, 'Areraj', 'areraj'),
(102, 79, 'Banjaria', 'banjaria'),
(103, 79, 'Chakia', 'chakia'),
(104, 79, 'Dhaka', 'dhaka'),
(105, 79, 'Ghorasahan', 'ghorasahan'),
(106, 79, 'Harsidhi', 'harsidhi'),
(107, 79, 'Kalyanpur', 'kalyanpur'),
(108, 79, 'Kesaria', 'kesaria'),
(109, 79, 'Kotwa', 'kotwa'),
(110, 79, 'Madhuban', 'madhuban'),
(111, 79, 'Mehsi', 'mehsi'),
(112, 79, 'Pakri Dayal', 'pakri-dayal'),
(113, 79, 'Paharpur', 'paharpur'),
(114, 79, 'Raxaul', 'raxaul'),
(115, 79, 'Sangrampur', 'sangrampur'),
(116, 79, 'Sugauli', 'sugauli'),
(117, 79, 'Tetaria', 'tetaria'),
(118, 79, 'Turkaulia', 'turkaulia'),
(119, 80, 'Gaya', 'gaya'),
(120, 80, 'Amas', 'amas'),
(121, 80, 'Banke Bazar', 'banke-bazar'),
(122, 80, 'Belaganj', 'belaganj'),
(123, 80, 'Bodh Gaya', 'bodh-gaya'),
(124, 80, 'Dobhi', 'dobhi'),
(125, 80, 'Fatehpur', 'fatehpur'),
(126, 80, 'Guraru', 'guraru'),
(127, 80, 'Gurua', 'gurua'),
(128, 80, 'Imamganj', 'imamganj'),
(129, 80, 'Khizirsarai', 'khizirsarai'),
(130, 80, 'Konch', 'konch'),
(131, 80, 'Manpur', 'manpur'),
(132, 80, 'Mohanpur', 'mohanpur'),
(133, 80, 'Muhra', 'muhra'),
(134, 80, 'Neem Chak Bathani', 'neem-chak-bathani'),
(135, 80, 'Paraiya', 'paraiya'),
(136, 80, 'Sherghati', 'sherghati'),
(137, 80, 'Tankuppa', 'tankuppa'),
(138, 80, 'Tekari', 'tekari'),
(139, 80, 'Wazirganj', 'wazirganj'),
(140, 80, 'Atri', 'atri'),
(141, 81, 'Gopalganj', 'gopalganj'),
(142, 81, 'Barauli', 'barauli'),
(143, 81, 'Bhore', 'bhore'),
(144, 81, 'Hathua', 'hathua'),
(145, 81, 'Katiya', 'katiya'),
(146, 81, 'Manjha', 'manjha'),
(147, 81, 'Phulwaria', 'phulwaria'),
(148, 81, 'Sidhwalia', 'sidhwalia'),
(149, 81, 'Thawe', 'thawe'),
(150, 81, 'Uchkagaon', 'uchkagaon'),
(151, 82, 'Jamui', 'jamui'),
(152, 82, 'Barhat', 'barhat'),
(153, 82, 'Chakai', 'chakai'),
(154, 82, 'Gidhaur', 'gidhaur'),
(155, 82, 'Jhajha', 'jhajha'),
(156, 82, 'Khaira', 'khaira'),
(157, 82, 'Laxmipur', 'laxmipur'),
(158, 82, 'Sikandra', 'sikandra'),
(159, 82, 'Sono', 'sono'),
(160, 83, 'Jehanabad', 'jehanabad'),
(161, 83, 'Ghoshi', 'ghoshi'),
(162, 83, 'Kako', 'kako'),
(163, 83, 'Makhdumpur', 'makhdumpur'),
(164, 83, 'Modanganj', 'modanganj'),
(165, 83, 'Ratni Faridpur', 'ratni-faridpur'),
(166, 84, 'Bhabua', 'bhabua'),
(167, 84, 'Adhaura', 'adhaura'),
(168, 84, 'Bhagwanpur', 'bhagwanpur'),
(169, 84, 'Chand', 'chand'),
(170, 84, 'Chainpur', 'chainpur'),
(171, 84, 'Durgawati', 'durgawati'),
(172, 84, 'Kudra', 'kudra'),
(173, 84, 'Mohania', 'mohania'),
(174, 84, 'Ramgarh', 'ramgarh'),
(175, 84, 'Rampur', 'rampur'),
(176, 85, 'Katihar', 'katihar'),
(177, 85, 'Barari', 'barari'),
(178, 85, 'Balrampur', 'balrampur'),
(179, 85, 'Barsoi', 'barsoi'),
(180, 85, 'Dandkhora', 'dandkhora'),
(181, 85, 'Falka', 'falka'),
(182, 85, 'Hasanganj', 'hasanganj'),
(183, 85, 'Kadwa', 'kadwa'),
(184, 85, 'Korha', 'korha'),
(185, 85, 'Kursela', 'kursela'),
(186, 85, 'Manihari', 'manihari'),
(187, 85, 'Pranpur', 'pranpur'),
(188, 85, 'Sameli', 'sameli'),
(189, 85, 'Azamnagar', 'azamnagar'),
(190, 86, 'Khagaria', 'khagaria'),
(191, 86, 'Alauli', 'alauli'),
(192, 86, 'Beldaur', 'beldaur'),
(193, 86, 'Chautham', 'chautham'),
(194, 86, 'Gogri', 'gogri'),
(195, 86, 'Mansi', 'mansi'),
(196, 86, 'Parbatta', 'parbatta'),
(197, 87, 'Kishanganj', 'kishanganj'),
(198, 87, 'Bahadurganj', 'bahadurganj'),
(199, 87, 'Dighalbank', 'dighalbank'),
(200, 87, 'Kochadhamin', 'kochadhamin'),
(201, 87, 'Pothia', 'pothia'),
(202, 87, 'Terhagachh', 'terhagachh'),
(203, 87, 'Thakurganj', 'thakurganj'),
(204, 88, 'Lakhisarai', 'lakhisarai'),
(205, 88, 'Barahiya', 'barahiya'),
(206, 88, 'Halsi', 'halsi'),
(207, 88, 'Pipariya', 'pipariya'),
(208, 88, 'Ramgarh Chowk', 'ramgarh-chowk'),
(209, 88, 'Surajgarha', 'surajgarha'),
(210, 89, 'Madhepura', 'madhepura'),
(211, 89, 'Alamnagar', 'alamnagar'),
(212, 89, 'Bihariganj', 'bihariganj'),
(213, 89, 'Chausa', 'chausa'),
(214, 89, 'Gamharia', 'gamharia'),
(215, 89, 'Gwalpara', 'gwalpara'),
(216, 89, 'Kumarkhand', 'kumarkhand'),
(217, 89, 'Murliganj', 'murliganj'),
(218, 89, 'Puraini', 'puraini'),
(219, 89, 'Shankarpur', 'shankarpur'),
(220, 89, 'Singheshwar', 'singheshwar'),
(221, 89, 'Udakishanganj', 'udakishanganj'),
(222, 90, 'Madhubani', 'madhubani'),
(223, 90, 'Andhratharhi', 'andhratharhi'),
(224, 90, 'Babubarhi', 'babubarhi'),
(225, 90, 'Basopatti', 'basopatti'),
(226, 90, 'Benipatti', 'benipatti'),
(227, 90, 'Bisfi', 'bisfi'),
(228, 90, 'Harlakhi', 'harlakhi'),
(229, 90, 'Jhanjharpur', 'jhanjharpur'),
(230, 90, 'Khajauli', 'khajauli'),
(231, 90, 'Ladania', 'ladania'),
(232, 90, 'Lakhnaur', 'lakhnaur'),
(233, 90, 'Laukahi', 'laukahi'),
(234, 90, 'Laukaha', 'laukaha'),
(235, 90, 'Phulparas', 'phulparas'),
(236, 90, 'Rajnagar', 'rajnagar'),
(237, 90, 'Pandaul', 'pandaul'),
(238, 91, 'Munger', 'munger'),
(239, 91, 'Asarganj', 'asarganj'),
(240, 91, 'Bariarpur', 'bariarpur'),
(241, 91, 'Dharhara', 'dharhara'),
(242, 91, 'Kharagpur', 'kharagpur'),
(243, 91, 'Sangrampur', 'sangrampur'),
(244, 91, 'Tarapur', 'tarapur'),
(245, 91, 'Tetiha Bambor', 'tetiha-bambor'),
(246, 92, 'Muzaffarpur', 'muzaffarpur'),
(247, 92, 'Aurai', 'aurai'),
(248, 92, 'Bandra', 'bandra'),
(249, 92, 'Bochaha', 'bochaha'),
(250, 92, 'Gaighat', 'gaighat'),
(251, 92, 'Kanti', 'kanti'),
(252, 92, 'Katra', 'katra'),
(253, 92, 'Kurhani', 'kurhani'),
(254, 92, 'Marwan', 'marwan'),
(255, 92, 'Minapur', 'minapur'),
(256, 92, 'Motipur', 'motipur'),
(257, 92, 'Mushahari', 'mushahari'),
(258, 92, 'Paroo', 'paroo'),
(259, 92, 'Sahebganj', 'sahebganj'),
(260, 92, 'Sakra', 'sakra'),
(261, 93, 'Bihar Sharif', 'bihar-sharif'),
(262, 93, 'Asthawan', 'asthawan'),
(263, 93, 'Ben', 'ben'),
(264, 93, 'Bind', 'bind'),
(265, 93, 'Chandi', 'chandi'),
(266, 93, 'Ekangarsarai', 'ekangarsarai'),
(267, 93, 'Giriyak', 'giriyak'),
(268, 93, 'Harnaut', 'harnaut'),
(269, 93, 'Hilsa', 'hilsa'),
(270, 93, 'Islampur', 'islampur'),
(271, 93, 'Karai Parsurai', 'karai-parsurai'),
(272, 93, 'Katrisarai', 'katrisarai'),
(273, 93, 'Nagarnausa', 'nagarnausa'),
(274, 93, 'Noorsarai', 'noorsarai'),
(275, 93, 'Parwalpur', 'parwalpur'),
(276, 93, 'Rahui', 'rahui'),
(277, 93, 'Rajgir', 'rajgir'),
(278, 93, 'Sarmera', 'sarmera'),
(279, 93, 'Silao', 'silao'),
(280, 93, 'Tharthari', 'tharthari'),
(281, 94, 'Nawada', 'nawada'),
(282, 94, 'Akbarpur', 'akbarpur'),
(283, 94, 'Govindpur', 'govindpur'),
(284, 94, 'Hisua', 'hisua'),
(285, 94, 'Kashichak', 'kashichak'),
(286, 94, 'Kawakol', 'kawakol'),
(287, 94, 'Meskaur', 'meskaur'),
(288, 94, 'Narhat', 'narhat'),
(289, 94, 'Nardiganj', 'nardiganj'),
(290, 94, 'Pakribarawan', 'pakribarawan'),
(291, 94, 'Rajauli', 'rajauli'),
(292, 94, 'Roh', 'roh'),
(293, 94, 'Sirdala', 'sirdala'),
(294, 94, 'Warisaliganj', 'warisaliganj'),
(295, 95, 'Patna', 'patna'),
(296, 95, 'Athmalgola', 'athmalgola'),
(297, 95, 'Bakhtiarpur', 'bakhtiarpur'),
(298, 95, 'Barh', 'barh'),
(299, 95, 'Bihta', 'bihta'),
(300, 95, 'Bikram', 'bikram'),
(301, 95, 'Danapur', 'danapur'),
(302, 95, 'Dhanarua', 'dhanarua'),
(303, 95, 'Dulhin Bazar', 'dulhin-bazar'),
(304, 95, 'Fatuha', 'fatuha'),
(305, 95, 'Ghoswari', 'ghoswari'),
(306, 95, 'Khusrupur', 'khusrupur'),
(307, 95, 'Maner', 'maner'),
(308, 95, 'Masaurhi', 'masaurhi'),
(309, 95, 'Mokama', 'mokama'),
(310, 95, 'Naubatpur', 'naubatpur'),
(311, 95, 'Paliganj', 'paliganj'),
(312, 95, 'Pandarak', 'pandarak'),
(313, 95, 'Phulwari', 'phulwari'),
(314, 95, 'Punpun', 'punpun'),
(315, 95, 'Sampatchak', 'sampatchak'),
(316, 96, 'Purnia', 'purnia'),
(317, 96, 'Amour', 'amour'),
(318, 96, 'Banmankhi', 'banmankhi'),
(319, 96, 'Barhara', 'barhara'),
(320, 96, 'Baisa', 'baisa'),
(321, 96, 'Baisi', 'baisi'),
(322, 96, 'Dagarua', 'dagarua'),
(323, 96, 'Jalalgarh', 'jalalgarh'),
(324, 96, 'Kasba', 'kasba'),
(325, 96, 'Krityanand Nagar', 'krityanand-nagar'),
(326, 96, 'Rupauli', 'rupauli'),
(327, 96, 'Srinagar', 'srinagar'),
(328, 96, 'Dhamdaha', 'dhamdaha'),
(329, 97, 'Sasaram', 'sasaram'),
(330, 97, 'Akorhi Gola', 'akorhi-gola'),
(331, 97, 'Bikramganj', 'bikramganj'),
(332, 97, 'Chenari', 'chenari'),
(333, 97, 'Dawath', 'dawath'),
(334, 97, 'Dehri', 'dehri'),
(335, 97, 'Dinara', 'dinara'),
(336, 97, 'Karakat', 'karakat'),
(337, 97, 'Kochas', 'kochas'),
(338, 97, 'Nasriganj', 'nasriganj'),
(339, 97, 'Nokha', 'nokha'),
(340, 97, 'Rajpur', 'rajpur'),
(341, 97, 'Sanjhauli', 'sanjhauli'),
(342, 97, 'Sheosagar', 'sheosagar'),
(343, 97, 'Suryapura', 'suryapura'),
(344, 97, 'Tilouthu', 'tilouthu'),
(345, 98, 'Saharsa', 'saharsa'),
(346, 98, 'Banma Itahri', 'banma-itahri'),
(347, 98, 'Kahara', 'kahara'),
(348, 98, 'Mahishi', 'mahishi'),
(349, 98, 'Nauhatta', 'nauhatta'),
(350, 98, 'Patarghat', 'patarghat'),
(351, 98, 'Salkhua', 'salkhua'),
(352, 98, 'Simri Bakhtiarpur', 'simri-bakhtiarpur'),
(353, 98, 'Sonbarsa', 'sonbarsa'),
(354, 98, 'Sattar Kataiya', 'sattar-kataiya'),
(355, 99, 'Samastipur', 'samastipur'),
(356, 99, 'Bibhutpur', 'bibhutpur'),
(357, 99, 'Bithan', 'bithan'),
(358, 99, 'Dalsinghsarai', 'dalsinghsarai'),
(359, 99, 'Hasanpur', 'hasanpur'),
(360, 99, 'Kalyanpur', 'kalyanpur'),
(361, 99, 'Khanpur', 'khanpur'),
(362, 99, 'Mohanpur', 'mohanpur'),
(363, 99, 'Mohiuddinagar', 'mohiuddinagar'),
(364, 99, 'Morwa', 'morwa'),
(365, 99, 'Patori', 'patori'),
(366, 99, 'Pusa', 'pusa'),
(367, 99, 'Rosera', 'rosera'),
(368, 99, 'Sarairanjan', 'sarairanjan'),
(369, 99, 'Shivaji Nagar', 'shivaji-nagar'),
(370, 99, 'Singhia', 'singhia'),
(371, 99, 'Tajpur', 'tajpur'),
(372, 99, 'Ujiarpur', 'ujiarpur'),
(373, 99, 'Vidyapatinagar', 'vidyapatinagar'),
(374, 99, 'Warisnagar', 'warisnagar'),
(375, 100, 'Chhapra', 'chhapra'),
(376, 100, 'Amnour', 'amnour'),
(377, 100, 'Baniapur', 'baniapur'),
(378, 100, 'Dariapur', 'dariapur'),
(379, 100, 'Dighwara', 'dighwara'),
(380, 100, 'Ekma', 'ekma'),
(381, 100, 'Garkha', 'garkha'),
(382, 100, 'Ishupur', 'ishupur'),
(383, 100, 'Jalalpur', 'jalalpur'),
(384, 100, 'Lahladpur', 'lahladpur'),
(385, 100, 'Maker', 'maker'),
(386, 100, 'Manjhi', 'manjhi'),
(387, 100, 'Marhaura', 'marhaura'),
(388, 100, 'Mashrakh', 'mashrakh'),
(389, 100, 'Nagra', 'nagra'),
(390, 100, 'Panapur', 'panapur'),
(391, 100, 'Parsa', 'parsa'),
(392, 100, 'Revelganj', 'revelganj'),
(393, 100, 'Sonepur', 'sonepur'),
(394, 100, 'Taraiya', 'taraiya'),
(395, 101, 'Sheikhpura', 'sheikhpura'),
(396, 101, 'Ariari', 'ariari'),
(397, 101, 'Barbigha', 'barbigha'),
(398, 101, 'Chewara', 'chewara'),
(399, 101, 'Ghat Kusumbha', 'ghat-kusumbha'),
(400, 101, 'Shekhopur Sarai', 'shekhopur-sarai'),
(401, 102, 'Sheohar', 'sheohar'),
(402, 102, 'Dumri Katsari', 'dumri-katsari'),
(403, 102, 'Piprarhi', 'piprarhi'),
(404, 102, 'Tariani Chowk', 'tariani-chowk'),
(405, 103, 'Sitamarhi', 'sitamarhi'),
(406, 103, 'Bajpatti', 'bajpatti'),
(407, 103, 'Bathnaha', 'bathnaha'),
(408, 103, 'Bairgania', 'bairgania'),
(409, 103, 'Belsand', 'belsand'),
(410, 103, 'Bokhara', 'bokhara'),
(411, 103, 'Chorahi', 'chorahi'),
(412, 103, 'Dumra', 'dumra'),
(413, 103, 'Majorganj', 'majorganj'),
(414, 103, 'Nanpur', 'nanpur'),
(415, 103, 'Parihar', 'parihar'),
(416, 103, 'Pupri', 'pupri'),
(417, 103, 'Riga', 'riga'),
(418, 103, 'Runnisaidpur', 'runnisaidpur'),
(419, 103, 'Sonbarsa', 'sonbarsa'),
(420, 103, 'Sursand', 'sursand'),
(421, 104, 'Siwan', 'siwan'),
(422, 104, 'Andar', 'andar'),
(423, 104, 'Barharia', 'barharia'),
(424, 104, 'Basantpur', 'basantpur'),
(425, 104, 'Bhagwanpur Hat', 'bhagwanpur-hat'),
(426, 104, 'Darauli', 'darauli'),
(427, 104, 'Goriakothi', 'goriakothi'),
(428, 104, 'Guthani', 'guthani'),
(429, 104, 'Hasanpura', 'hasanpura'),
(430, 104, 'Hussainganj', 'hussainganj'),
(431, 104, 'Lakri Nabiganj', 'lakri-nabiganj'),
(432, 104, 'Maharajganj', 'maharajganj'),
(433, 104, 'Mairwa', 'mairwa'),
(434, 104, 'Nautan', 'nautan'),
(435, 104, 'Pachrukhi', 'pachrukhi'),
(436, 104, 'Raghunathpur', 'raghunathpur'),
(437, 104, 'Ziradei', 'ziradei'),
(438, 105, 'Supaul', 'supaul'),
(439, 105, 'Basantpur', 'basantpur'),
(440, 105, 'Chhatapur', 'chhatapur'),
(441, 105, 'Kishanpur', 'kishanpur'),
(442, 105, 'Marauna', 'marauna'),
(443, 105, 'Nirmali', 'nirmali'),
(444, 105, 'Pipra', 'pipra'),
(445, 105, 'Pratapganj', 'pratapganj'),
(446, 105, 'Raghopur', 'raghopur'),
(447, 105, 'Saraigarh Bhaptiyahi', 'saraigarh-bhaptiyahi'),
(448, 105, 'Tribeniganj', 'tribeniganj'),
(449, 106, 'Hajipur', 'hajipur'),
(450, 106, 'Bidupur', 'bidupur'),
(451, 106, 'Chehrakala', 'chehrakala'),
(452, 106, 'Desri', 'desri'),
(453, 106, 'Goraul', 'goraul'),
(454, 106, 'Jandaha', 'jandaha'),
(455, 106, 'Lalganj', 'lalganj'),
(456, 106, 'Mahnar', 'mahnar'),
(457, 106, 'Mahua', 'mahua'),
(458, 106, 'Patepur', 'patepur'),
(459, 106, 'Raghopur', 'raghopur'),
(460, 106, 'Rajapakar', 'rajapakar'),
(461, 106, 'Sahdei Buzurg', 'sahdei-buzurg'),
(462, 106, 'Vaishali', 'vaishali'),
(463, 107, 'Bettiah', 'bettiah'),
(464, 107, 'Bagaha', 'bagaha'),
(465, 107, 'Bhitaha', 'bhitaha'),
(466, 107, 'Chanpatia', 'chanpatia'),
(467, 107, 'Gaunaha', 'gaunaha'),
(468, 107, 'Mainatanr', 'mainatanr'),
(469, 107, 'Majhaulia', 'majhaulia'),
(470, 107, 'Narkatiaganj', 'narkatiaganj'),
(471, 107, 'Nautan', 'nautan'),
(472, 107, 'Piprasi', 'piprasi'),
(473, 107, 'Ramnagar', 'ramnagar'),
(474, 107, 'Sikta', 'sikta'),
(475, 107, 'Thakaraha', 'thakaraha');

-- --------------------------------------------------------

--
-- Table structure for table `location_countries`
--

CREATE TABLE `location_countries` (
  `country_id` smallint NOT NULL,
  `country_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_capital` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_countries`
--

INSERT INTO `location_countries` (`country_id`, `country_name`, `country_code`, `country_capital`, `country_url`) VALUES
(1, 'Afghanistan', 'AFG', 'Kabul', ''),
(2, 'Albania', 'ALB', 'Tirana', ''),
(3, 'Algeria', 'DZA', 'Algiers', ''),
(4, 'Andorra', 'AND', 'Andorra la Vella', ''),
(5, 'Angola', 'AGO', 'Luanda', ''),
(6, 'Antigua & Barbuda', 'ATG', 'St. John\'s', ''),
(7, 'Argentina', 'ARG', 'Buenos Aires', ''),
(8, 'Armenia', 'ARM', 'Yerevan', ''),
(9, 'Australia', 'AUS', 'Canberra', ''),
(10, 'Austria', 'AUT', 'Vienna', ''),
(11, 'Azerbaijan', 'AZE', 'Baku', ''),
(12, 'Bahamas', 'BHS', 'Nassau', ''),
(13, 'Bahrain', 'BHR', 'Manama', ''),
(14, 'Bangladesh', 'BGD', 'Dhaka', ''),
(15, 'Barbados', 'BRB', 'Bridgetown', ''),
(16, 'Belarus', 'BLR', 'Minsk', ''),
(17, 'Belgium', 'BEL', 'Brussels', ''),
(18, 'Belize', 'BLZ', 'Belmopan', ''),
(19, 'Benin', 'BEN', 'Porto-Novo', ''),
(20, 'Bhutan', 'BTN', 'Thimphu', ''),
(21, 'Bolivia', 'BOL', 'La Paz', ''),
(22, 'Bosnia & Herzegovina', 'BIH', 'Sarajevo', ''),
(23, 'Botswana', 'BWA', 'Gaborone', ''),
(24, 'Brazil', 'BRA', 'Brasília', ''),
(25, 'Brunei', 'BRN', 'Bandar Seri Begawan', ''),
(26, 'Bulgaria', 'BGR', 'Sofia', ''),
(27, 'Burkina Faso', 'BFA', 'Ouagadougou', ''),
(28, 'Burundi', 'BDI', 'Gitega', ''),
(29, 'Cabo Verde', 'CPV', 'Praia', ''),
(30, 'Cambodia', 'KHM', 'Phnom Penh', ''),
(31, 'Cameroon', 'CMR', 'Yaoundé', ''),
(32, 'Canada', 'CAN', 'Ottawa', ''),
(33, 'Central African Republic', 'CAF', 'Bangui', ''),
(34, 'Chad', 'TCD', 'N\'Djamena', ''),
(35, 'Chile', 'CHL', 'Santiago', ''),
(36, 'China', 'CHN', 'Beijing', ''),
(37, 'Colombia', 'COL', 'Bogotá', ''),
(38, 'Comoros', 'COM', 'Moroni', ''),
(39, 'Congo', 'COG', 'Brazzaville', ''),
(40, 'Costa Rica', 'CRI', 'San José', ''),
(41, 'Côte d\'Ivoire', 'CIV', 'Yamoussoukro', ''),
(42, 'Croatia', 'HRV', 'Zagreb', ''),
(43, 'Cuba', 'CUB', 'Havana', ''),
(44, 'Cyprus', 'CYP', 'Nicosia', ''),
(45, 'Czech Republic', 'CZE', 'Prague', ''),
(46, 'Denmark', 'DNK', 'Copenhagen', ''),
(47, 'Djibouti', 'DJI', 'Djibouti', ''),
(48, 'Dominica', 'DMA', 'Roseau', ''),
(49, 'Dominican Republic', 'DOM', 'Santo Domingo', ''),
(50, 'DR Congo', 'COD', 'Kinshasa', ''),
(51, 'Ecuador', 'ECU', 'Quito', ''),
(52, 'Egypt', 'EGY', 'Cairo', ''),
(53, 'El Salvador', 'SLV', 'San Salvador', ''),
(54, 'Equatorial Guinea', 'GNQ', 'Malabo', ''),
(55, 'Eritrea', 'ERI', 'Asmara', ''),
(56, 'Estonia', 'EST', 'Tallinn', ''),
(57, 'Eswatini', 'SWZ', 'Mbabane', ''),
(58, 'Ethiopia', 'ETH', 'Addis Ababa', ''),
(59, 'Fiji', 'FJI', 'Suva', ''),
(60, 'Finland', 'FIN', 'Helsinki', ''),
(61, 'France', 'FRA', 'Paris', ''),
(62, 'Gabon', 'GAB', 'Libreville', ''),
(63, 'Gambia', 'GMB', 'Banjul', ''),
(64, 'Georgia', 'GEO', 'Tbilisi', ''),
(65, 'Germany', 'DEU', 'Berlin', ''),
(66, 'Ghana', 'GHA', 'Accra', ''),
(67, 'Greece', 'GRC', 'Athens', ''),
(68, 'Grenada', 'GRD', 'St. George\'s', ''),
(69, 'Guatemala', 'GTM', 'Guatemala City', ''),
(70, 'Guinea', 'GIN', 'Conakry', ''),
(71, 'Guinea-Bissau', 'GNB', 'Bissau', ''),
(72, 'Guyana', 'GUY', 'Georgetown', ''),
(73, 'Haiti', 'HTI', 'Port-au-Prince', ''),
(74, 'Holy See', 'VAT', 'Vatican City', ''),
(75, 'Honduras', 'HND', 'Tegucigalpa', ''),
(76, 'Hungary', 'HUN', 'Budapest', ''),
(77, 'Iceland', 'ISL', 'Reykjavik', ''),
(78, 'India', 'IND', 'New Delhi', 'india'),
(79, 'Indonesia', 'IDN', 'Jakarta', ''),
(80, 'Iran', 'IRN', 'Tehran', ''),
(81, 'Iraq', 'IRQ', 'Baghdad', ''),
(82, 'Ireland', 'IRL', 'Dublin', ''),
(83, 'Israel', 'ISR', 'Jerusalem', ''),
(84, 'Italy', 'ITA', 'Rome', ''),
(85, 'Jamaica', 'JAM', 'Kingston', ''),
(86, 'Japan', 'JPN', 'Tokyo', ''),
(87, 'Jordan', 'JOR', 'Amman', ''),
(88, 'Kazakhstan', 'KAZ', 'Nur-Sultan', ''),
(89, 'Kenya', 'KEN', 'Nairobi', ''),
(90, 'Kiribati', 'KIR', 'South Tarawa', ''),
(91, 'Kuwait', 'KWT', 'Kuwait City', ''),
(92, 'Kyrgyzstan', 'KGZ', 'Bishkek', ''),
(93, 'Laos', 'LAO', 'Vientiane', ''),
(94, 'Latvia', 'LVA', 'Riga', ''),
(95, 'Lebanon', 'LBN', 'Beirut', ''),
(96, 'Lesotho', 'LSO', 'Maseru', ''),
(97, 'Liberia', 'LBR', 'Monrovia', ''),
(98, 'Libya', 'LBY', 'Tripoli', ''),
(99, 'Liechtenstein', 'LIE', 'Vaduz', ''),
(100, 'Lithuania', 'LTU', 'Vilnius', ''),
(101, 'Luxembourg', 'LUX', 'Luxembourg City', ''),
(102, 'Madagascar', 'MDG', 'Antananarivo', ''),
(103, 'Malawi', 'MWI', 'Lilongwe', ''),
(104, 'Malaysia', 'MYS', 'Kuala Lumpur', ''),
(105, 'Maldives', 'MDV', 'Male', ''),
(106, 'Mali', 'MLI', 'Bamako', ''),
(107, 'Malta', 'MLT', 'Valletta', ''),
(108, 'Marshall Islands', 'MHL', 'Majuro', ''),
(109, 'Mauritania', 'MRT', 'Nouakchott', ''),
(110, 'Mauritius', 'MUS', 'Port Louis', ''),
(111, 'Mexico', 'MEX', 'Mexico City', ''),
(112, 'Micronesia', 'FSM', 'Palikir', ''),
(113, 'Moldova', 'MDA', 'Chisinau', ''),
(114, 'Monaco', 'MCO', 'Monaco', ''),
(115, 'Mongolia', 'MNG', 'Ulaanbaatar', ''),
(116, 'Montenegro', 'MNE', 'Podgorica', ''),
(117, 'Morocco', 'MAR', 'Rabat', ''),
(118, 'Mozambique', 'MOZ', 'Maputo', ''),
(119, 'Myanmar', 'MMR', 'Naypyidaw', ''),
(120, 'Namibia', 'NAM', 'Windhoek', ''),
(121, 'Nauru', 'NRU', 'Yaren District', ''),
(122, 'Nepal', 'NPL', 'Kathmandu', ''),
(123, 'Netherlands', 'NLD', 'Amsterdam', ''),
(124, 'New Zealand', 'NZL', 'Wellington', ''),
(125, 'Nicaragua', 'NIC', 'Managua', ''),
(126, 'Niger', 'NER', 'Niamey', ''),
(127, 'Nigeria', 'NGA', 'Abuja', ''),
(128, 'North Korea', 'PRK', 'Pyongyang', ''),
(129, 'North Macedonia', 'MKD', 'Skopje', ''),
(130, 'Norway', 'NOR', 'Oslo', ''),
(131, 'Oman', 'OMN', 'Muscat', ''),
(132, 'Pakistan', 'PAK', 'Islamabad', ''),
(133, 'Palau', 'PLW', 'Ngerulmud', ''),
(134, 'Panama', 'PAN', 'Panama City', ''),
(135, 'Papua New Guinea', 'PNG', 'Port Moresby', ''),
(136, 'Paraguay', 'PRY', 'Asunción', ''),
(137, 'Peru', 'PER', 'Lima', ''),
(138, 'Philippines', 'PHL', 'Manila', ''),
(139, 'Poland', 'POL', 'Warsaw', ''),
(140, 'Portugal', 'PRT', 'Lisbon', ''),
(141, 'Qatar', 'QAT', 'Doha', ''),
(142, 'Romania', 'ROM', 'Bucharest', ''),
(143, 'Russia', 'RUS', 'Moscow', ''),
(144, 'Rwanda', 'RWA', 'Kigali', ''),
(145, 'Saint Kitts & Nevis', 'KNA', 'Basseterre', ''),
(146, 'Saint Lucia', 'LCA', 'Castries', ''),
(147, 'Samoa', 'WSM', 'Apia', ''),
(148, 'San Marino', 'SMR', 'San Marino', ''),
(149, 'Sao Tome & Principe', 'STP', 'São Tomé', ''),
(150, 'Saudi Arabia', 'SAU', 'Riyadh', ''),
(151, 'Senegal', 'SEN', 'Dakar', ''),
(152, 'Serbia', 'SRB', 'Belgrade', ''),
(153, 'Seychelles', 'SYC', 'Victoria', ''),
(154, 'Sierra Leone', 'SLE', 'Freetown', ''),
(155, 'Singapore', 'SGP', 'Singapore', ''),
(156, 'Slovakia', 'SVK', 'Bratislava', ''),
(157, 'Slovenia', 'SVN', 'Ljubljana', ''),
(158, 'Solomon Islands', 'SLB', 'Honiara', ''),
(159, 'Somalia', 'SOM', 'Mogadishu', ''),
(160, 'South Africa', 'ZAF', 'Cape Town', ''),
(161, 'South Korea', 'KOR', 'Seoul', ''),
(162, 'South Sudan', 'SSD', 'Juba', ''),
(163, 'Spain', 'ESP', 'Madrid', ''),
(164, 'Sri Lanka', 'LKA', 'Sri Jayawardenepura Kotte', ''),
(165, 'St. Vincent & Grenadines', 'VCT', 'Kingstown', ''),
(166, 'State of Palestine', 'PSE', 'Ramallah', ''),
(167, 'Sudan', 'SDN', 'Khartoum', ''),
(168, 'Suriname', 'SUR', 'Paramaribo', ''),
(169, 'Sweden', 'SWE', 'Stockholm', ''),
(170, 'Switzerland', 'CHE', 'Bern', ''),
(171, 'Syria', 'SYR', 'Damascus', ''),
(172, 'Tajikistan', 'TJK', 'Dushanbe', ''),
(173, 'Tanzania', 'TZA', 'Dodoma', ''),
(174, 'Thailand', 'THA', 'Bangkok', ''),
(175, 'Timor-Leste', 'TLS', 'Dili', ''),
(176, 'Togo', 'TGO', 'Lomé', ''),
(177, 'Tonga', 'TON', 'Nuku\'alofa', ''),
(178, 'Trinidad & Tobago', 'TTO', 'Port of Spain', ''),
(179, 'Tunisia', 'TUN', 'Tunis', ''),
(180, 'Turkey', 'TUR', 'Ankara', ''),
(181, 'Turkmenistan', 'TKM', 'Ashgabat', ''),
(182, 'Tuvalu', 'TUV', 'Funafuti', ''),
(183, 'Uganda', 'UGA', 'Kampala', ''),
(184, 'Ukraine', 'UKR', 'Kyiv', ''),
(185, 'United Arab Emirates', 'ARE', 'Abu Dhabi', ''),
(186, 'United Kingdom', 'GBR', 'London', ''),
(187, 'United States', 'USA', 'Washington DC', ''),
(188, 'Uruguay', 'URY', 'Montevideo', ''),
(189, 'Uzbekistan', 'UZB', 'Tashkent', ''),
(190, 'Vanuatu', 'VUT', 'Port Vila', ''),
(191, 'Venezuela', 'VEN', 'Caracas', ''),
(192, 'Vietnam', 'VNM', 'Hanoi', ''),
(193, 'Yemen', 'YEM', 'Sana\'a', ''),
(194, 'Zambia', 'ZMB', 'Lusaka', ''),
(195, 'Zimbabwe', 'ZWE', 'Harare', '');

-- --------------------------------------------------------

--
-- Table structure for table `location_districts`
--

CREATE TABLE `location_districts` (
  `district_id` mediumint UNSIGNED NOT NULL,
  `state_id` mediumint UNSIGNED NOT NULL,
  `district_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `locality_id` int NOT NULL,
  `city_id` smallint NOT NULL,
  `district_id` smallint NOT NULL,
  `locality_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locality_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locality_lat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locality_long` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_states`
--

CREATE TABLE `location_states` (
  `country_id` smallint NOT NULL DEFAULT '78',
  `state_id` mediumint UNSIGNED NOT NULL,
  `state_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_code` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_states`
--

INSERT INTO `location_states` (`country_id`, `state_id`, `state_name`, `state_url`, `org_code`) VALUES
(78, 1, 'Andaman and Nicobar Islands', '9999', 35),
(78, 2, 'Andhra Pradesh', '', 28),
(78, 3, 'Arunachal Pradesh', '', 12),
(78, 4, 'Assam', '', 18),
(78, 5, 'Bihar', '', 10),
(78, 6, 'Chandigarh', '', 4),
(78, 7, 'Chhattisgarh', '', 22),
(78, 8, 'Dadra and Nagar Haveli and Daman and Diu', '', 26),
(78, 9, 'Delhi', '', 7),
(78, 10, 'Goa', '', 30),
(78, 11, 'Gujarat', '', 24),
(78, 12, 'Haryana', '', 6),
(78, 13, 'Himachal Pradesh', '', 2),
(78, 14, 'Jammu and Kashmir', '', 1),
(78, 15, 'Jharkhand', '', 20),
(78, 16, 'Karnataka', '', 29),
(78, 17, 'Kerala', '', 32),
(78, 18, 'Ladakh', '', 25),
(78, 19, 'Lakshadweep', '', 31),
(78, 20, 'Madhya Pradesh', '', 23),
(78, 21, 'Maharashtra', '', 27),
(78, 22, 'Manipur', '', 14),
(78, 23, 'Meghalaya', '', 17),
(78, 24, 'Mizoram', '', 15),
(78, 25, 'Nagaland', '', 13),
(78, 26, 'Odisha', '', 21),
(78, 27, 'Puducherry', '', 34),
(78, 28, 'Punjab', '', 3),
(78, 29, 'Rajasthan', '', 8),
(78, 30, 'Sikkim', '', 11),
(78, 31, 'Tamil Nadu', '', 33),
(78, 32, 'Telangana', '', 36),
(78, 33, 'Tripura', '', 16),
(78, 34, 'Uttar Pradesh', '', 9),
(78, 35, 'Uttarakhand', '', 5),
(78, 36, 'West Bengal', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `post_id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `group_id` bigint NOT NULL,
  `post_type` smallint NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_privacy`
--

CREATE TABLE `post_privacy` (
  `privacy_id` tinyint NOT NULL,
  `privacy_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `post_type_id` tinyint NOT NULL,
  `post_type_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('PTVGe3EznpLt0gR5ri3CTK1rm6n0eyWZjKFGZAMK', 1234567916, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicU8xVWZ2UG4xWmpEaWtsZExhZ3h2cjRreDJoVmk3M2hTVTRhRmlpZiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQyOiJodHRwOi8vbG9jYWxob3N0L2trY2xhcmEvZGFzaGJvYXJkL3NldHRpbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjM0NTY3OTE2O3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTc1MjEyNTg2MDt9fQ==', 1752128284),
('tgiTdCBjJwdiRWhhB4l8lEaVC0JJQ8uqjOHkRJUC', 1234567916, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiS3g0Z3JEbmxGUHBTU3BMVVh6MHNDZEhFRHlPT2RGNnJUZjd4TWxsViI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQyOiJodHRwOi8vbG9jYWxob3N0L2trY2xhcmEvZGFzaGJvYXJkL3NldHRpbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjM0NTY3OTE2O3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTc1MjE0Mzg1Njt9fQ==', 1752147036),
('wUuAvyh7QMmB2HbEKLChsuEFThd0HFMLT6IZa9Nh', 1234567916, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTURmZDdvYlBDMXRnWVMyQ2F2TXVXNGdvS3o0dG1BRnlxZWVRY081dSI7czozOiJ1cmwiO2E6MDp7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEyMzQ1Njc5MTY7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzUyMjIxOTI4O31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MjoiaHR0cDovL2xvY2FsaG9zdC9ra2NsYXJhL2Rhc2hib2FyZC9zZXR0aW5nIjt9fQ==', 1752236935);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `is_primary` tinyint NOT NULL DEFAULT '0' COMMENT 'primary account have phone no., other may or mat not',
  `prefix` tinyint DEFAULT NULL,
  `username` bigint DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` tinyint DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `steps` tinyint NOT NULL DEFAULT '0',
  `role` tinyint NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_primary`, `prefix`, `username`, `first_name`, `last_name`, `phone`, `phone_verified_at`, `email`, `email_verified_at`, `password`, `date_of_birth`, `gender`, `profile_picture`, `bio`, `steps`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 0, NULL, 'Pinkesh Kumar', '', NULL, NULL, 'pinkeshku@gmail.com', NULL, '$2y$12$2to9ezuQsYDVXTE0Gy1.pue2K1Q4iGqYJihSVR9g26aNF/UHYogb2', '2024-11-02', 0, '', '0', 0, 0, 0, NULL, '2025-07-01 03:44:22', '2025-07-01 03:44:22'),
(7, 0, 0, NULL, 'Pinkesh Kumarert', '', '0987678765', NULL, 'pinkeshku1p@gmail.com', NULL, '$2y$12$dl8UCwXOltdB8Dk/KRVZ6uIDMavc7klPF/v3CHjKbuHKeg0IyngFi', '0000-00-00', 0, '', '0', 0, 1, 1, NULL, '2025-07-02 12:49:12', '2025-07-02 12:49:12'),
(1234567900, 0, 0, NULL, NULL, '', '8851394265', '2025-07-03 09:01:37', NULL, NULL, '$2y$12$6lZU5rCEv1J36X3OxjHasu.rr3hIARw.ZKuEZeWEHP2SaEXZsMwFy', '0000-00-00', 0, '', '0', 0, 1, 1, NULL, '2025-07-03 09:01:37', '2025-07-03 09:01:37'),
(1234567901, 0, 0, NULL, NULL, '', '8851394265', '2025-07-03 09:03:21', NULL, NULL, '$2y$12$S0oSxEEctBQRQ7Tyfx2cL.U541R8lv7/4bXQmloVxE9ATtNFjvfL2', '0000-00-00', 0, '', '0', 0, 1, 1, NULL, '2025-07-03 09:03:21', '2025-07-03 09:03:21'),
(1234567911, 0, 0, 1234567911, '402698', '', '1122334455', '2025-07-05 14:21:40', NULL, NULL, '$2y$12$SiF.n9oJtoMtmFcSmIcPturCtunK.260notqAnspjzf3GiVPvMwJ6', '0000-00-00', 0, '', '0', 0, 1, 1, NULL, '2025-07-05 14:21:41', '2025-07-05 14:21:41'),
(1234567914, 1, 0, 1234567914, 'Pert', '', '9953138204', '2025-07-05 19:43:42', NULL, NULL, '$2y$12$cnDRKkkffoqYHKmD4l.cR.p16Fsy1oaJtJvu2ofikWkhm/hi8zuCi', NULL, NULL, NULL, NULL, 0, 1, 1, NULL, '2025-07-05 19:43:43', '2025-07-05 19:43:43'),
(1234567915, 1, 0, 1234567915, 'Aman', '', '9953138210', '2025-07-06 08:14:41', NULL, NULL, '$2y$12$6QQ6D/njn3jL.Xh.08yLdeIfD9f/u/rdbTQxjXpabTTGbfSOHsijC', NULL, NULL, NULL, NULL, 0, 1, 1, NULL, '2025-07-06 08:14:41', '2025-07-06 08:14:41'),
(1234567916, 1, 11, 1234567916, 'Pinko', 'Ji', '9953122222', '2025-07-06 11:01:29', NULL, NULL, '$2y$12$S4G7m7KCPVAygmfEzaRcg.AeLGQ1wNgbEeH0DEnQN3p0VE6XnYToa', '2009-01-01', 1, NULL, NULL, 0, 1, 1, NULL, '2025-07-06 11:01:29', '2025-07-06 19:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_following`
--

CREATE TABLE `user_following` (
  `id` bigint UNSIGNED NOT NULL,
  `follower_id` bigint UNSIGNED NOT NULL,
  `following_id` bigint UNSIGNED NOT NULL,
  `followed_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_friends`
--

CREATE TABLE `user_friends` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `friend_id` bigint UNSIGNED DEFAULT NULL,
  `status` enum('pending','accepted','rejected') COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `requested_at` datetime NOT NULL,
  `accepted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_gender`
--

CREATE TABLE `user_gender` (
  `gender_id` tinyint NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `created_by` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_group_members`
--

CREATE TABLE `user_group_members` (
  `id` bigint UNSIGNED NOT NULL,
  `group_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `role` enum('member','admin','moderator') COLLATE utf8mb4_unicode_ci DEFAULT 'member',
  `joined_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_jobs`
--

CREATE TABLE `user_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_current` tinyint(1) DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_matrimony_profiles`
--

CREATE TABLE `user_matrimony_profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `marital_status` enum('single','divorced','widowed') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caste` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height_cm` int DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_yourself` text COLLATE utf8mb4_unicode_ci,
  `preferences` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

CREATE TABLE `user_notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `type` enum('info','warning','success','alert') COLLATE utf8mb4_unicode_ci DEFAULT 'info',
  `is_read` tinyint(1) DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_prefix`
--

CREATE TABLE `user_prefix` (
  `id` tinyint NOT NULL,
  `prefix` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `relative_id` bigint UNSIGNED DEFAULT NULL,
  `relationship` enum('father','mother','brother','sister','spouse','child','other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` tinyint NOT NULL,
  `role_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'member'),
(11, 'moderator'),
(21, ''),
(31, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `is_profile_public` tinyint(1) DEFAULT '1',
  `email_notifications` tinyint(1) DEFAULT '1',
  `push_notifications` tinyint(1) DEFAULT '1',
  `dark_mode` tinyint(1) DEFAULT '0',
  `language` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'en',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zzz_blocks`
--

CREATE TABLE `zzz_blocks` (
  `id` int NOT NULL,
  `district` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blocks` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zzz_blocks`
--

INSERT INTO `zzz_blocks` (`id`, `district`, `blocks`) VALUES
(70, 'Araria', 'Araria, Jokihat, Kursakanta, Palasi, Raniganj, Sikti, Forbesganj, Bhargama'),
(71, 'Arwal', 'Arwal, Karpi, Kaler, Kurtha, Sonbhadra Banshi Suryapur'),
(72, 'Aurangabad', 'Aurangabad, Daudnagar, Barun, Obra, Madanpur, Kutumba, Deo, Nabinagar, Haspura, Rafiganj'),
(73, 'Banka', 'Banka, Amarpur, Katoria, Belhar, Bounsi, Chandan, Dhuraiya, Fullidumar, Rajaun, Shambhuganj'),
(74, 'Begusarai', 'Begusarai, Bakhri, Balia, Barauni, Bachhwara, Teghra, Cheria Bariarpur, Chhorahi, Dandari, Garhpura, Khudabandpur, Mansurchak, Matihani, Naokothi, Sahebpur Kamal, Shamho Akha Kurha'),
(75, 'Bhagalpur', 'Bhagalpur, Goradih, Ismailpur, Colgong, Narayanpur, Bihpur, Kharik, Naugachhia, Pirpainti, Rangra Chowk, Sabour, Sonhaula, Kahalgaon'),
(76, 'Bhojpur', 'Arrah, Barhara, Bihiya, Charpokhari, Garhani, Jagdishpur, Koilwar, Piro, Sandesh, Shahpur, Tarari, Udwantnagar'),
(77, 'Buxar', 'Buxar, Chausa, Chaugain, Dumraon, Itarhi, Kesath, Nawanagar, Rajpur, Simri'),
(78, 'Darbhanga', 'Darbhanga, Bahadurpur, Baheri, Benipur, Biraul, Ghanshyampur, Hanuman Nagar, Hayaghat, Jale, Keoti, Kiratpur, Kusheshwar Asthan, Kusheshwar Asthan East, Manigachhi, Singhwara, Tardih'),
(79, 'East Champaran', 'Motihari, Areraj, Banjaria, Chakia, Dhaka, Ghorasahan, Harsidhi, Kalyanpur, Kesaria, Kotwa, Madhuban, Mehsi, Pakri Dayal, Paharpur, Raxaul, Sangrampur, Sugauli, Tetaria, Turkaulia'),
(80, 'Gaya', 'Gaya, Amas, Banke Bazar, Belaganj, Bodh Gaya, Dobhi, Fatehpur, Guraru, Gurua, Imamganj, Khizirsarai, Konch, Manpur, Mohanpur, Muhra, Neem Chak Bathani, Paraiya, Sherghati, Tankuppa, Tekari, Wazirganj, Atri'),
(81, 'Gopalganj', 'Gopalganj, Barauli, Bhore, Hathua, Katiya, Manjha, Phulwaria, Sidhwalia, Thawe, Uchkagaon'),
(82, 'Jamui', 'Jamui, Barhat, Chakai, Gidhaur, Jhajha, Khaira, Laxmipur, Sikandra, Sono'),
(83, 'Jehanabad', 'Jehanabad, Ghoshi, Kako, Makhdumpur, Modanganj, Ratni Faridpur'),
(84, 'Kaimur', 'Bhabua, Adhaura, Bhagwanpur, Chand, Chainpur, Durgawati, Kudra, Mohania, Ramgarh, Rampur'),
(85, 'Katihar', 'Katihar, Barari, Balrampur, Barsoi, Dandkhora, Falka, Hasanganj, Kadwa, Korha, Kursela, Manihari, Pranpur, Sameli, Azamnagar'),
(86, 'Khagaria', 'Khagaria, Alauli, Beldaur, Chautham, Gogri, Mansi, Parbatta'),
(87, 'Kishanganj', 'Kishanganj, Bahadurganj, Dighalbank, Kochadhamin, Pothia, Terhagachh, Thakurganj'),
(88, 'Lakhisarai', 'Lakhisarai, Barahiya, Halsi, Pipariya, Ramgarh Chowk, Surajgarha'),
(89, 'Madhepura', 'Madhepura, Alamnagar, Bihariganj, Chausa, Gamharia, Gwalpara, Kumarkhand, Murliganj, Puraini, Shankarpur, Singheshwar, Udakishanganj'),
(90, 'Madhubani', 'Madhubani, Andhratharhi, Babubarhi, Basopatti, Benipatti, Bisfi, Harlakhi, Jhanjharpur, Khajauli, Ladania, Lakhnaur, Laukahi, Laukaha, Phulparas, Rajnagar, Pandaul'),
(91, 'Munger', 'Munger, Asarganj, Bariarpur, Dharhara, Kharagpur, Sangrampur, Tarapur, Tetiha Bambor'),
(92, 'Muzaffarpur', 'Muzaffarpur, Aurai, Bandra, Bochaha, Gaighat, Kanti, Katra, Kurhani, Marwan, Minapur, Motipur, Mushahari, Paroo, Sahebganj, Sakra'),
(93, 'Nalanda', 'Bihar Sharif, Asthawan, Ben, Bind, Chandi, Ekangarsarai, Giriyak, Harnaut, Hilsa, Islampur, Karai Parsurai, Katrisarai, Nagarnausa, Noorsarai, Parwalpur, Rahui, Rajgir, Sarmera, Silao, Tharthari'),
(94, 'Nawada', 'Nawada, Akbarpur, Govindpur, Hisua, Kashichak, Kawakol, Meskaur, Narhat, Nardiganj, Pakribarawan, Rajauli, Roh, Sirdala, Warisaliganj'),
(95, 'Patna', 'Patna, Athmalgola, Bakhtiarpur, Barh, Bihta, Bikram, Danapur, Dhanarua, Dulhin Bazar, Fatuha, Ghoswari, Khusrupur, Maner, Masaurhi, Mokama, Naubatpur, Paliganj, Pandarak, Phulwari, Punpun, Sampatchak'),
(96, 'Purnia', 'Purnia, Amour, Banmankhi, Barhara, Baisa, Baisi, Dagarua, Jalalgarh, Kasba, Krityanand Nagar, Rupauli, Srinagar, Dhamdaha'),
(97, 'Rohtas', 'Sasaram, Akorhi Gola, Bikramganj, Chenari, Dawath, Dehri, Dinara, Karakat, Kochas, Nasriganj, Nokha, Rajpur, Sanjhauli, Sheosagar, Suryapura, Tilouthu'),
(98, 'Saharsa', 'Saharsa, Banma Itahri, Kahara, Mahishi, Nauhatta, Patarghat, Salkhua, Simri Bakhtiarpur, Sonbarsa, Sattar Kataiya'),
(99, 'Samastipur', 'Samastipur, Bibhutpur, Bithan, Dalsinghsarai, Hasanpur, Kalyanpur, Khanpur, Mohanpur, Mohiuddinagar, Morwa, Patori, Pusa, Rosera, Sarairanjan, Shivaji Nagar, Singhia, Tajpur, Ujiarpur, Vidyapatinagar, Warisnagar'),
(100, 'Saran', 'Chhapra, Amnour, Baniapur, Dariapur, Dighwara, Ekma, Garkha, Ishupur, Jalalpur, Lahladpur, Maker, Manjhi, Marhaura, Mashrakh, Nagra, Panapur, Parsa, Revelganj, Sonepur, Taraiya'),
(101, 'Sheikhpura', 'Sheikhpura, Ariari, Barbigha, Chewara, Ghat Kusumbha, Shekhopur Sarai'),
(102, 'Sheohar', 'Sheohar, Dumri Katsari, Piprarhi, Tariani Chowk'),
(103, 'Sitamarhi', 'Sitamarhi, Bajpatti, Bathnaha, Bairgania, Belsand, Bokhara, Chorahi, Dumra, Majorganj, Nanpur, Parihar, Pupri, Riga, Runnisaidpur, Sonbarsa, Sursand'),
(104, 'Siwan', 'Siwan, Andar, Barharia, Basantpur, Bhagwanpur Hat, Darauli, Goriakothi, Guthani, Hasanpura, Hussainganj, Lakri Nabiganj, Maharajganj, Mairwa, Nautan, Pachrukhi, Raghunathpur, Ziradei'),
(105, 'Supaul', 'Supaul, Basantpur, Chhatapur, Kishanpur, Marauna, Nirmali, Pipra, Pratapganj, Raghopur, Saraigarh Bhaptiyahi, Tribeniganj'),
(106, 'Vaishali', 'Hajipur, Bidupur, Chehrakala, Desri, Goraul, Jandaha, Lalganj, Mahnar, Mahua, Patepur, Raghopur, Rajapakar, Sahdei Buzurg, Vaishali'),
(107, 'West Champaran', 'Bettiah, Bagaha, Bhitaha, Chanpatia, Gaunaha, Mainatanr, Majhaulia, Narkatiaganj, Nautan, Piprasi, Ramnagar, Sikta, Thakaraha');

-- --------------------------------------------------------

--
-- Table structure for table `zzz_block_list`
--

CREATE TABLE `zzz_block_list` (
  `id` int NOT NULL,
  `district_id` int NOT NULL,
  `district` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blocks` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zzz_block_list`
--

INSERT INTO `zzz_block_list` (`id`, `district_id`, `district`, `blocks`, `block_url`) VALUES
(1, 70, 'Araria', 'Araria', 'araria'),
(2, 70, 'Araria', 'Jokihat', 'jokihat'),
(3, 70, 'Araria', 'Kursakanta', 'kursakanta'),
(4, 70, 'Araria', 'Palasi', 'palasi'),
(5, 70, 'Araria', 'Raniganj', 'raniganj'),
(6, 70, 'Araria', 'Sikti', 'sikti'),
(7, 70, 'Araria', 'Forbesganj', 'forbesganj'),
(8, 70, 'Araria', 'Bhargama', 'bhargama'),
(9, 71, 'Arwal', 'Arwal', 'arwal'),
(10, 71, 'Arwal', 'Karpi', 'karpi'),
(11, 71, 'Arwal', 'Kaler', 'kaler'),
(12, 71, 'Arwal', 'Kurtha', 'kurtha'),
(13, 71, 'Arwal', 'Sonbhadra Banshi Suryapur', 'sonbhadra-banshi-suryapur'),
(14, 72, 'Aurangabad', 'Aurangabad', 'aurangabad'),
(15, 72, 'Aurangabad', 'Daudnagar', 'daudnagar'),
(16, 72, 'Aurangabad', 'Barun', 'barun'),
(17, 72, 'Aurangabad', 'Obra', 'obra'),
(18, 72, 'Aurangabad', 'Madanpur', 'madanpur'),
(19, 72, 'Aurangabad', 'Kutumba', 'kutumba'),
(20, 72, 'Aurangabad', 'Deo', 'deo'),
(21, 72, 'Aurangabad', 'Nabinagar', 'nabinagar'),
(22, 72, 'Aurangabad', 'Haspura', 'haspura'),
(23, 72, 'Aurangabad', 'Rafiganj', 'rafiganj'),
(24, 73, 'Banka', 'Banka', 'banka'),
(25, 73, 'Banka', 'Amarpur', 'amarpur'),
(26, 73, 'Banka', 'Katoria', 'katoria'),
(27, 73, 'Banka', 'Belhar', 'belhar'),
(28, 73, 'Banka', 'Bounsi', 'bounsi'),
(29, 73, 'Banka', 'Chandan', 'chandan'),
(30, 73, 'Banka', 'Dhuraiya', 'dhuraiya'),
(31, 73, 'Banka', 'Fullidumar', 'fullidumar'),
(32, 73, 'Banka', 'Rajaun', 'rajaun'),
(33, 73, 'Banka', 'Shambhuganj', 'shambhuganj'),
(34, 74, 'Begusarai', 'Begusarai', 'begusarai'),
(35, 74, 'Begusarai', 'Bakhri', 'bakhri'),
(36, 74, 'Begusarai', 'Balia', 'balia'),
(37, 74, 'Begusarai', 'Barauni', 'barauni'),
(38, 74, 'Begusarai', 'Bachhwara', 'bachhwara'),
(39, 74, 'Begusarai', 'Teghra', 'teghra'),
(40, 74, 'Begusarai', 'Cheria Bariarpur', 'cheria-bariarpur'),
(41, 74, 'Begusarai', 'Chhorahi', 'chhorahi'),
(42, 74, 'Begusarai', 'Dandari', 'dandari'),
(43, 74, 'Begusarai', 'Garhpura', 'garhpura'),
(44, 74, 'Begusarai', 'Khudabandpur', 'khudabandpur'),
(45, 74, 'Begusarai', 'Mansurchak', 'mansurchak'),
(46, 74, 'Begusarai', 'Matihani', 'matihani'),
(47, 74, 'Begusarai', 'Naokothi', 'naokothi'),
(48, 74, 'Begusarai', 'Sahebpur Kamal', 'sahebpur-kamal'),
(49, 74, 'Begusarai', 'Shamho Akha Kurha', 'shamho-akha-kurha'),
(50, 75, 'Bhagalpur', 'Bhagalpur', 'bhagalpur'),
(51, 75, 'Bhagalpur', 'Goradih', 'goradih'),
(52, 75, 'Bhagalpur', 'Ismailpur', 'ismailpur'),
(53, 75, 'Bhagalpur', 'Colgong', 'colgong'),
(54, 75, 'Bhagalpur', 'Narayanpur', 'narayanpur'),
(55, 75, 'Bhagalpur', 'Bihpur', 'bihpur'),
(56, 75, 'Bhagalpur', 'Kharik', 'kharik'),
(57, 75, 'Bhagalpur', 'Naugachhia', 'naugachhia'),
(58, 75, 'Bhagalpur', 'Pirpainti', 'pirpainti'),
(59, 75, 'Bhagalpur', 'Rangra Chowk', 'rangra-chowk'),
(60, 75, 'Bhagalpur', 'Sabour', 'sabour'),
(61, 75, 'Bhagalpur', 'Sonhaula', 'sonhaula'),
(62, 75, 'Bhagalpur', 'Kahalgaon', 'kahalgaon'),
(63, 76, 'Bhojpur', 'Arrah', 'arrah'),
(64, 76, 'Bhojpur', 'Barhara', 'barhara'),
(65, 76, 'Bhojpur', 'Bihiya', 'bihiya'),
(66, 76, 'Bhojpur', 'Charpokhari', 'charpokhari'),
(67, 76, 'Bhojpur', 'Garhani', 'garhani'),
(68, 76, 'Bhojpur', 'Jagdishpur', 'jagdishpur'),
(69, 76, 'Bhojpur', 'Koilwar', 'koilwar'),
(70, 76, 'Bhojpur', 'Piro', 'piro'),
(71, 76, 'Bhojpur', 'Sandesh', 'sandesh'),
(72, 76, 'Bhojpur', 'Shahpur', 'shahpur'),
(73, 76, 'Bhojpur', 'Tarari', 'tarari'),
(74, 76, 'Bhojpur', 'Udwantnagar', 'udwantnagar'),
(75, 77, 'Buxar', 'Buxar', 'buxar'),
(76, 77, 'Buxar', 'Chausa', 'chausa'),
(77, 77, 'Buxar', 'Chaugain', 'chaugain'),
(78, 77, 'Buxar', 'Dumraon', 'dumraon'),
(79, 77, 'Buxar', 'Itarhi', 'itarhi'),
(80, 77, 'Buxar', 'Kesath', 'kesath'),
(81, 77, 'Buxar', 'Nawanagar', 'nawanagar'),
(82, 77, 'Buxar', 'Rajpur', 'rajpur'),
(83, 77, 'Buxar', 'Simri', 'simri'),
(84, 78, 'Darbhanga', 'Darbhanga', 'darbhanga'),
(85, 78, 'Darbhanga', 'Bahadurpur', 'bahadurpur'),
(86, 78, 'Darbhanga', 'Baheri', 'baheri'),
(87, 78, 'Darbhanga', 'Benipur', 'benipur'),
(88, 78, 'Darbhanga', 'Biraul', 'biraul'),
(89, 78, 'Darbhanga', 'Ghanshyampur', 'ghanshyampur'),
(90, 78, 'Darbhanga', 'Hanuman Nagar', 'hanuman-nagar'),
(91, 78, 'Darbhanga', 'Hayaghat', 'hayaghat'),
(92, 78, 'Darbhanga', 'Jale', 'jale'),
(93, 78, 'Darbhanga', 'Keoti', 'keoti'),
(94, 78, 'Darbhanga', 'Kiratpur', 'kiratpur'),
(95, 78, 'Darbhanga', 'Kusheshwar Asthan', 'kusheshwar-asthan'),
(96, 78, 'Darbhanga', 'Kusheshwar Asthan East', 'kusheshwar-asthan-east'),
(97, 78, 'Darbhanga', 'Manigachhi', 'manigachhi'),
(98, 78, 'Darbhanga', 'Singhwara', 'singhwara'),
(99, 78, 'Darbhanga', 'Tardih', 'tardih'),
(100, 79, 'East Champaran', 'Motihari', 'motihari'),
(101, 79, 'East Champaran', 'Areraj', 'areraj'),
(102, 79, 'East Champaran', 'Banjaria', 'banjaria'),
(103, 79, 'East Champaran', 'Chakia', 'chakia'),
(104, 79, 'East Champaran', 'Dhaka', 'dhaka'),
(105, 79, 'East Champaran', 'Ghorasahan', 'ghorasahan'),
(106, 79, 'East Champaran', 'Harsidhi', 'harsidhi'),
(107, 79, 'East Champaran', 'Kalyanpur', 'kalyanpur'),
(108, 79, 'East Champaran', 'Kesaria', 'kesaria'),
(109, 79, 'East Champaran', 'Kotwa', 'kotwa'),
(110, 79, 'East Champaran', 'Madhuban', 'madhuban'),
(111, 79, 'East Champaran', 'Mehsi', 'mehsi'),
(112, 79, 'East Champaran', 'Pakri Dayal', 'pakri-dayal'),
(113, 79, 'East Champaran', 'Paharpur', 'paharpur'),
(114, 79, 'East Champaran', 'Raxaul', 'raxaul'),
(115, 79, 'East Champaran', 'Sangrampur', 'sangrampur'),
(116, 79, 'East Champaran', 'Sugauli', 'sugauli'),
(117, 79, 'East Champaran', 'Tetaria', 'tetaria'),
(118, 79, 'East Champaran', 'Turkaulia', 'turkaulia'),
(119, 80, 'Gaya', 'Gaya', 'gaya'),
(120, 80, 'Gaya', 'Amas', 'amas'),
(121, 80, 'Gaya', 'Banke Bazar', 'banke-bazar'),
(122, 80, 'Gaya', 'Belaganj', 'belaganj'),
(123, 80, 'Gaya', 'Bodh Gaya', 'bodh-gaya'),
(124, 80, 'Gaya', 'Dobhi', 'dobhi'),
(125, 80, 'Gaya', 'Fatehpur', 'fatehpur'),
(126, 80, 'Gaya', 'Guraru', 'guraru'),
(127, 80, 'Gaya', 'Gurua', 'gurua'),
(128, 80, 'Gaya', 'Imamganj', 'imamganj'),
(129, 80, 'Gaya', 'Khizirsarai', 'khizirsarai'),
(130, 80, 'Gaya', 'Konch', 'konch'),
(131, 80, 'Gaya', 'Manpur', 'manpur'),
(132, 80, 'Gaya', 'Mohanpur', 'mohanpur'),
(133, 80, 'Gaya', 'Muhra', 'muhra'),
(134, 80, 'Gaya', 'Neem Chak Bathani', 'neem-chak-bathani'),
(135, 80, 'Gaya', 'Paraiya', 'paraiya'),
(136, 80, 'Gaya', 'Sherghati', 'sherghati'),
(137, 80, 'Gaya', 'Tankuppa', 'tankuppa'),
(138, 80, 'Gaya', 'Tekari', 'tekari'),
(139, 80, 'Gaya', 'Wazirganj', 'wazirganj'),
(140, 80, 'Gaya', 'Atri', 'atri'),
(141, 81, 'Gopalganj', 'Gopalganj', 'gopalganj'),
(142, 81, 'Gopalganj', 'Barauli', 'barauli'),
(143, 81, 'Gopalganj', 'Bhore', 'bhore'),
(144, 81, 'Gopalganj', 'Hathua', 'hathua'),
(145, 81, 'Gopalganj', 'Katiya', 'katiya'),
(146, 81, 'Gopalganj', 'Manjha', 'manjha'),
(147, 81, 'Gopalganj', 'Phulwaria', 'phulwaria'),
(148, 81, 'Gopalganj', 'Sidhwalia', 'sidhwalia'),
(149, 81, 'Gopalganj', 'Thawe', 'thawe'),
(150, 81, 'Gopalganj', 'Uchkagaon', 'uchkagaon'),
(151, 82, 'Jamui', 'Jamui', 'jamui'),
(152, 82, 'Jamui', 'Barhat', 'barhat'),
(153, 82, 'Jamui', 'Chakai', 'chakai'),
(154, 82, 'Jamui', 'Gidhaur', 'gidhaur'),
(155, 82, 'Jamui', 'Jhajha', 'jhajha'),
(156, 82, 'Jamui', 'Khaira', 'khaira'),
(157, 82, 'Jamui', 'Laxmipur', 'laxmipur'),
(158, 82, 'Jamui', 'Sikandra', 'sikandra'),
(159, 82, 'Jamui', 'Sono', 'sono'),
(160, 83, 'Jehanabad', 'Jehanabad', 'jehanabad'),
(161, 83, 'Jehanabad', 'Ghoshi', 'ghoshi'),
(162, 83, 'Jehanabad', 'Kako', 'kako'),
(163, 83, 'Jehanabad', 'Makhdumpur', 'makhdumpur'),
(164, 83, 'Jehanabad', 'Modanganj', 'modanganj'),
(165, 83, 'Jehanabad', 'Ratni Faridpur', 'ratni-faridpur'),
(166, 84, 'Kaimur', 'Bhabua', 'bhabua'),
(167, 84, 'Kaimur', 'Adhaura', 'adhaura'),
(168, 84, 'Kaimur', 'Bhagwanpur', 'bhagwanpur'),
(169, 84, 'Kaimur', 'Chand', 'chand'),
(170, 84, 'Kaimur', 'Chainpur', 'chainpur'),
(171, 84, 'Kaimur', 'Durgawati', 'durgawati'),
(172, 84, 'Kaimur', 'Kudra', 'kudra'),
(173, 84, 'Kaimur', 'Mohania', 'mohania'),
(174, 84, 'Kaimur', 'Ramgarh', 'ramgarh'),
(175, 84, 'Kaimur', 'Rampur', 'rampur'),
(176, 85, 'Katihar', 'Katihar', 'katihar'),
(177, 85, 'Katihar', 'Barari', 'barari'),
(178, 85, 'Katihar', 'Balrampur', 'balrampur'),
(179, 85, 'Katihar', 'Barsoi', 'barsoi'),
(180, 85, 'Katihar', 'Dandkhora', 'dandkhora'),
(181, 85, 'Katihar', 'Falka', 'falka'),
(182, 85, 'Katihar', 'Hasanganj', 'hasanganj'),
(183, 85, 'Katihar', 'Kadwa', 'kadwa'),
(184, 85, 'Katihar', 'Korha', 'korha'),
(185, 85, 'Katihar', 'Kursela', 'kursela'),
(186, 85, 'Katihar', 'Manihari', 'manihari'),
(187, 85, 'Katihar', 'Pranpur', 'pranpur'),
(188, 85, 'Katihar', 'Sameli', 'sameli'),
(189, 85, 'Katihar', 'Azamnagar', 'azamnagar'),
(190, 86, 'Khagaria', 'Khagaria', 'khagaria'),
(191, 86, 'Khagaria', 'Alauli', 'alauli'),
(192, 86, 'Khagaria', 'Beldaur', 'beldaur'),
(193, 86, 'Khagaria', 'Chautham', 'chautham'),
(194, 86, 'Khagaria', 'Gogri', 'gogri'),
(195, 86, 'Khagaria', 'Mansi', 'mansi'),
(196, 86, 'Khagaria', 'Parbatta', 'parbatta'),
(197, 87, 'Kishanganj', 'Kishanganj', 'kishanganj'),
(198, 87, 'Kishanganj', 'Bahadurganj', 'bahadurganj'),
(199, 87, 'Kishanganj', 'Dighalbank', 'dighalbank'),
(200, 87, 'Kishanganj', 'Kochadhamin', 'kochadhamin'),
(201, 87, 'Kishanganj', 'Pothia', 'pothia'),
(202, 87, 'Kishanganj', 'Terhagachh', 'terhagachh'),
(203, 87, 'Kishanganj', 'Thakurganj', 'thakurganj'),
(204, 88, 'Lakhisarai', 'Lakhisarai', 'lakhisarai'),
(205, 88, 'Lakhisarai', 'Barahiya', 'barahiya'),
(206, 88, 'Lakhisarai', 'Halsi', 'halsi'),
(207, 88, 'Lakhisarai', 'Pipariya', 'pipariya'),
(208, 88, 'Lakhisarai', 'Ramgarh Chowk', 'ramgarh-chowk'),
(209, 88, 'Lakhisarai', 'Surajgarha', 'surajgarha'),
(210, 89, 'Madhepura', 'Madhepura', 'madhepura'),
(211, 89, 'Madhepura', 'Alamnagar', 'alamnagar'),
(212, 89, 'Madhepura', 'Bihariganj', 'bihariganj'),
(213, 89, 'Madhepura', 'Chausa', 'chausa'),
(214, 89, 'Madhepura', 'Gamharia', 'gamharia'),
(215, 89, 'Madhepura', 'Gwalpara', 'gwalpara'),
(216, 89, 'Madhepura', 'Kumarkhand', 'kumarkhand'),
(217, 89, 'Madhepura', 'Murliganj', 'murliganj'),
(218, 89, 'Madhepura', 'Puraini', 'puraini'),
(219, 89, 'Madhepura', 'Shankarpur', 'shankarpur'),
(220, 89, 'Madhepura', 'Singheshwar', 'singheshwar'),
(221, 89, 'Madhepura', 'Udakishanganj', 'udakishanganj'),
(222, 90, 'Madhubani', 'Madhubani', 'madhubani'),
(223, 90, 'Madhubani', 'Andhratharhi', 'andhratharhi'),
(224, 90, 'Madhubani', 'Babubarhi', 'babubarhi'),
(225, 90, 'Madhubani', 'Basopatti', 'basopatti'),
(226, 90, 'Madhubani', 'Benipatti', 'benipatti'),
(227, 90, 'Madhubani', 'Bisfi', 'bisfi'),
(228, 90, 'Madhubani', 'Harlakhi', 'harlakhi'),
(229, 90, 'Madhubani', 'Jhanjharpur', 'jhanjharpur'),
(230, 90, 'Madhubani', 'Khajauli', 'khajauli'),
(231, 90, 'Madhubani', 'Ladania', 'ladania'),
(232, 90, 'Madhubani', 'Lakhnaur', 'lakhnaur'),
(233, 90, 'Madhubani', 'Laukahi', 'laukahi'),
(234, 90, 'Madhubani', 'Laukaha', 'laukaha'),
(235, 90, 'Madhubani', 'Phulparas', 'phulparas'),
(236, 90, 'Madhubani', 'Rajnagar', 'rajnagar'),
(237, 90, 'Madhubani', 'Pandaul', 'pandaul'),
(238, 91, 'Munger', 'Munger', 'munger'),
(239, 91, 'Munger', 'Asarganj', 'asarganj'),
(240, 91, 'Munger', 'Bariarpur', 'bariarpur'),
(241, 91, 'Munger', 'Dharhara', 'dharhara'),
(242, 91, 'Munger', 'Kharagpur', 'kharagpur'),
(243, 91, 'Munger', 'Sangrampur', 'sangrampur'),
(244, 91, 'Munger', 'Tarapur', 'tarapur'),
(245, 91, 'Munger', 'Tetiha Bambor', 'tetiha-bambor'),
(246, 92, 'Muzaffarpur', 'Muzaffarpur', 'muzaffarpur'),
(247, 92, 'Muzaffarpur', 'Aurai', 'aurai'),
(248, 92, 'Muzaffarpur', 'Bandra', 'bandra'),
(249, 92, 'Muzaffarpur', 'Bochaha', 'bochaha'),
(250, 92, 'Muzaffarpur', 'Gaighat', 'gaighat'),
(251, 92, 'Muzaffarpur', 'Kanti', 'kanti'),
(252, 92, 'Muzaffarpur', 'Katra', 'katra'),
(253, 92, 'Muzaffarpur', 'Kurhani', 'kurhani'),
(254, 92, 'Muzaffarpur', 'Marwan', 'marwan'),
(255, 92, 'Muzaffarpur', 'Minapur', 'minapur'),
(256, 92, 'Muzaffarpur', 'Motipur', 'motipur'),
(257, 92, 'Muzaffarpur', 'Mushahari', 'mushahari'),
(258, 92, 'Muzaffarpur', 'Paroo', 'paroo'),
(259, 92, 'Muzaffarpur', 'Sahebganj', 'sahebganj'),
(260, 92, 'Muzaffarpur', 'Sakra', 'sakra'),
(261, 93, 'Nalanda', 'Bihar Sharif', 'bihar-sharif'),
(262, 93, 'Nalanda', 'Asthawan', 'asthawan'),
(263, 93, 'Nalanda', 'Ben', 'ben'),
(264, 93, 'Nalanda', 'Bind', 'bind'),
(265, 93, 'Nalanda', 'Chandi', 'chandi'),
(266, 93, 'Nalanda', 'Ekangarsarai', 'ekangarsarai'),
(267, 93, 'Nalanda', 'Giriyak', 'giriyak'),
(268, 93, 'Nalanda', 'Harnaut', 'harnaut'),
(269, 93, 'Nalanda', 'Hilsa', 'hilsa'),
(270, 93, 'Nalanda', 'Islampur', 'islampur'),
(271, 93, 'Nalanda', 'Karai Parsurai', 'karai-parsurai'),
(272, 93, 'Nalanda', 'Katrisarai', 'katrisarai'),
(273, 93, 'Nalanda', 'Nagarnausa', 'nagarnausa'),
(274, 93, 'Nalanda', 'Noorsarai', 'noorsarai'),
(275, 93, 'Nalanda', 'Parwalpur', 'parwalpur'),
(276, 93, 'Nalanda', 'Rahui', 'rahui'),
(277, 93, 'Nalanda', 'Rajgir', 'rajgir'),
(278, 93, 'Nalanda', 'Sarmera', 'sarmera'),
(279, 93, 'Nalanda', 'Silao', 'silao'),
(280, 93, 'Nalanda', 'Tharthari', 'tharthari'),
(281, 94, 'Nawada', 'Nawada', 'nawada'),
(282, 94, 'Nawada', 'Akbarpur', 'akbarpur'),
(283, 94, 'Nawada', 'Govindpur', 'govindpur'),
(284, 94, 'Nawada', 'Hisua', 'hisua'),
(285, 94, 'Nawada', 'Kashichak', 'kashichak'),
(286, 94, 'Nawada', 'Kawakol', 'kawakol'),
(287, 94, 'Nawada', 'Meskaur', 'meskaur'),
(288, 94, 'Nawada', 'Narhat', 'narhat'),
(289, 94, 'Nawada', 'Nardiganj', 'nardiganj'),
(290, 94, 'Nawada', 'Pakribarawan', 'pakribarawan'),
(291, 94, 'Nawada', 'Rajauli', 'rajauli'),
(292, 94, 'Nawada', 'Roh', 'roh'),
(293, 94, 'Nawada', 'Sirdala', 'sirdala'),
(294, 94, 'Nawada', 'Warisaliganj', 'warisaliganj'),
(295, 95, 'Patna', 'Patna', 'patna'),
(296, 95, 'Patna', 'Athmalgola', 'athmalgola'),
(297, 95, 'Patna', 'Bakhtiarpur', 'bakhtiarpur'),
(298, 95, 'Patna', 'Barh', 'barh'),
(299, 95, 'Patna', 'Bihta', 'bihta'),
(300, 95, 'Patna', 'Bikram', 'bikram'),
(301, 95, 'Patna', 'Danapur', 'danapur'),
(302, 95, 'Patna', 'Dhanarua', 'dhanarua'),
(303, 95, 'Patna', 'Dulhin Bazar', 'dulhin-bazar'),
(304, 95, 'Patna', 'Fatuha', 'fatuha'),
(305, 95, 'Patna', 'Ghoswari', 'ghoswari'),
(306, 95, 'Patna', 'Khusrupur', 'khusrupur'),
(307, 95, 'Patna', 'Maner', 'maner'),
(308, 95, 'Patna', 'Masaurhi', 'masaurhi'),
(309, 95, 'Patna', 'Mokama', 'mokama'),
(310, 95, 'Patna', 'Naubatpur', 'naubatpur'),
(311, 95, 'Patna', 'Paliganj', 'paliganj'),
(312, 95, 'Patna', 'Pandarak', 'pandarak'),
(313, 95, 'Patna', 'Phulwari', 'phulwari'),
(314, 95, 'Patna', 'Punpun', 'punpun'),
(315, 95, 'Patna', 'Sampatchak', 'sampatchak'),
(316, 96, 'Purnia', 'Purnia', 'purnia'),
(317, 96, 'Purnia', 'Amour', 'amour'),
(318, 96, 'Purnia', 'Banmankhi', 'banmankhi'),
(319, 96, 'Purnia', 'Barhara', 'barhara'),
(320, 96, 'Purnia', 'Baisa', 'baisa'),
(321, 96, 'Purnia', 'Baisi', 'baisi'),
(322, 96, 'Purnia', 'Dagarua', 'dagarua'),
(323, 96, 'Purnia', 'Jalalgarh', 'jalalgarh'),
(324, 96, 'Purnia', 'Kasba', 'kasba'),
(325, 96, 'Purnia', 'Krityanand Nagar', 'krityanand-nagar'),
(326, 96, 'Purnia', 'Rupauli', 'rupauli'),
(327, 96, 'Purnia', 'Srinagar', 'srinagar'),
(328, 96, 'Purnia', 'Dhamdaha', 'dhamdaha'),
(329, 97, 'Rohtas', 'Sasaram', 'sasaram'),
(330, 97, 'Rohtas', 'Akorhi Gola', 'akorhi-gola'),
(331, 97, 'Rohtas', 'Bikramganj', 'bikramganj'),
(332, 97, 'Rohtas', 'Chenari', 'chenari'),
(333, 97, 'Rohtas', 'Dawath', 'dawath'),
(334, 97, 'Rohtas', 'Dehri', 'dehri'),
(335, 97, 'Rohtas', 'Dinara', 'dinara'),
(336, 97, 'Rohtas', 'Karakat', 'karakat'),
(337, 97, 'Rohtas', 'Kochas', 'kochas'),
(338, 97, 'Rohtas', 'Nasriganj', 'nasriganj'),
(339, 97, 'Rohtas', 'Nokha', 'nokha'),
(340, 97, 'Rohtas', 'Rajpur', 'rajpur'),
(341, 97, 'Rohtas', 'Sanjhauli', 'sanjhauli'),
(342, 97, 'Rohtas', 'Sheosagar', 'sheosagar'),
(343, 97, 'Rohtas', 'Suryapura', 'suryapura'),
(344, 97, 'Rohtas', 'Tilouthu', 'tilouthu'),
(345, 98, 'Saharsa', 'Saharsa', 'saharsa'),
(346, 98, 'Saharsa', 'Banma Itahri', 'banma-itahri'),
(347, 98, 'Saharsa', 'Kahara', 'kahara'),
(348, 98, 'Saharsa', 'Mahishi', 'mahishi'),
(349, 98, 'Saharsa', 'Nauhatta', 'nauhatta'),
(350, 98, 'Saharsa', 'Patarghat', 'patarghat'),
(351, 98, 'Saharsa', 'Salkhua', 'salkhua'),
(352, 98, 'Saharsa', 'Simri Bakhtiarpur', 'simri-bakhtiarpur'),
(353, 98, 'Saharsa', 'Sonbarsa', 'sonbarsa'),
(354, 98, 'Saharsa', 'Sattar Kataiya', 'sattar-kataiya'),
(355, 99, 'Samastipur', 'Samastipur', 'samastipur'),
(356, 99, 'Samastipur', 'Bibhutpur', 'bibhutpur'),
(357, 99, 'Samastipur', 'Bithan', 'bithan'),
(358, 99, 'Samastipur', 'Dalsinghsarai', 'dalsinghsarai'),
(359, 99, 'Samastipur', 'Hasanpur', 'hasanpur'),
(360, 99, 'Samastipur', 'Kalyanpur', 'kalyanpur'),
(361, 99, 'Samastipur', 'Khanpur', 'khanpur'),
(362, 99, 'Samastipur', 'Mohanpur', 'mohanpur'),
(363, 99, 'Samastipur', 'Mohiuddinagar', 'mohiuddinagar'),
(364, 99, 'Samastipur', 'Morwa', 'morwa'),
(365, 99, 'Samastipur', 'Patori', 'patori'),
(366, 99, 'Samastipur', 'Pusa', 'pusa'),
(367, 99, 'Samastipur', 'Rosera', 'rosera'),
(368, 99, 'Samastipur', 'Sarairanjan', 'sarairanjan'),
(369, 99, 'Samastipur', 'Shivaji Nagar', 'shivaji-nagar'),
(370, 99, 'Samastipur', 'Singhia', 'singhia'),
(371, 99, 'Samastipur', 'Tajpur', 'tajpur'),
(372, 99, 'Samastipur', 'Ujiarpur', 'ujiarpur'),
(373, 99, 'Samastipur', 'Vidyapatinagar', 'vidyapatinagar'),
(374, 99, 'Samastipur', 'Warisnagar', 'warisnagar'),
(375, 100, 'Saran', 'Chhapra', 'chhapra'),
(376, 100, 'Saran', 'Amnour', 'amnour'),
(377, 100, 'Saran', 'Baniapur', 'baniapur'),
(378, 100, 'Saran', 'Dariapur', 'dariapur'),
(379, 100, 'Saran', 'Dighwara', 'dighwara'),
(380, 100, 'Saran', 'Ekma', 'ekma'),
(381, 100, 'Saran', 'Garkha', 'garkha'),
(382, 100, 'Saran', 'Ishupur', 'ishupur'),
(383, 100, 'Saran', 'Jalalpur', 'jalalpur'),
(384, 100, 'Saran', 'Lahladpur', 'lahladpur'),
(385, 100, 'Saran', 'Maker', 'maker'),
(386, 100, 'Saran', 'Manjhi', 'manjhi'),
(387, 100, 'Saran', 'Marhaura', 'marhaura'),
(388, 100, 'Saran', 'Mashrakh', 'mashrakh'),
(389, 100, 'Saran', 'Nagra', 'nagra'),
(390, 100, 'Saran', 'Panapur', 'panapur'),
(391, 100, 'Saran', 'Parsa', 'parsa'),
(392, 100, 'Saran', 'Revelganj', 'revelganj'),
(393, 100, 'Saran', 'Sonepur', 'sonepur'),
(394, 100, 'Saran', 'Taraiya', 'taraiya'),
(395, 101, 'Sheikhpura', 'Sheikhpura', 'sheikhpura'),
(396, 101, 'Sheikhpura', 'Ariari', 'ariari'),
(397, 101, 'Sheikhpura', 'Barbigha', 'barbigha'),
(398, 101, 'Sheikhpura', 'Chewara', 'chewara'),
(399, 101, 'Sheikhpura', 'Ghat Kusumbha', 'ghat-kusumbha'),
(400, 101, 'Sheikhpura', 'Shekhopur Sarai', 'shekhopur-sarai'),
(401, 102, 'Sheohar', 'Sheohar', 'sheohar'),
(402, 102, 'Sheohar', 'Dumri Katsari', 'dumri-katsari'),
(403, 102, 'Sheohar', 'Piprarhi', 'piprarhi'),
(404, 102, 'Sheohar', 'Tariani Chowk', 'tariani-chowk'),
(405, 103, 'Sitamarhi', 'Sitamarhi', 'sitamarhi'),
(406, 103, 'Sitamarhi', 'Bajpatti', 'bajpatti'),
(407, 103, 'Sitamarhi', 'Bathnaha', 'bathnaha'),
(408, 103, 'Sitamarhi', 'Bairgania', 'bairgania'),
(409, 103, 'Sitamarhi', 'Belsand', 'belsand'),
(410, 103, 'Sitamarhi', 'Bokhara', 'bokhara'),
(411, 103, 'Sitamarhi', 'Chorahi', 'chorahi'),
(412, 103, 'Sitamarhi', 'Dumra', 'dumra'),
(413, 103, 'Sitamarhi', 'Majorganj', 'majorganj'),
(414, 103, 'Sitamarhi', 'Nanpur', 'nanpur'),
(415, 103, 'Sitamarhi', 'Parihar', 'parihar'),
(416, 103, 'Sitamarhi', 'Pupri', 'pupri'),
(417, 103, 'Sitamarhi', 'Riga', 'riga'),
(418, 103, 'Sitamarhi', 'Runnisaidpur', 'runnisaidpur'),
(419, 103, 'Sitamarhi', 'Sonbarsa', 'sonbarsa'),
(420, 103, 'Sitamarhi', 'Sursand', 'sursand'),
(421, 104, 'Siwan', 'Siwan', 'siwan'),
(422, 104, 'Siwan', 'Andar', 'andar'),
(423, 104, 'Siwan', 'Barharia', 'barharia'),
(424, 104, 'Siwan', 'Basantpur', 'basantpur'),
(425, 104, 'Siwan', 'Bhagwanpur Hat', 'bhagwanpur-hat'),
(426, 104, 'Siwan', 'Darauli', 'darauli'),
(427, 104, 'Siwan', 'Goriakothi', 'goriakothi'),
(428, 104, 'Siwan', 'Guthani', 'guthani'),
(429, 104, 'Siwan', 'Hasanpura', 'hasanpura'),
(430, 104, 'Siwan', 'Hussainganj', 'hussainganj'),
(431, 104, 'Siwan', 'Lakri Nabiganj', 'lakri-nabiganj'),
(432, 104, 'Siwan', 'Maharajganj', 'maharajganj'),
(433, 104, 'Siwan', 'Mairwa', 'mairwa'),
(434, 104, 'Siwan', 'Nautan', 'nautan'),
(435, 104, 'Siwan', 'Pachrukhi', 'pachrukhi'),
(436, 104, 'Siwan', 'Raghunathpur', 'raghunathpur'),
(437, 104, 'Siwan', 'Ziradei', 'ziradei'),
(438, 105, 'Supaul', 'Supaul', 'supaul'),
(439, 105, 'Supaul', 'Basantpur', 'basantpur'),
(440, 105, 'Supaul', 'Chhatapur', 'chhatapur'),
(441, 105, 'Supaul', 'Kishanpur', 'kishanpur'),
(442, 105, 'Supaul', 'Marauna', 'marauna'),
(443, 105, 'Supaul', 'Nirmali', 'nirmali'),
(444, 105, 'Supaul', 'Pipra', 'pipra'),
(445, 105, 'Supaul', 'Pratapganj', 'pratapganj'),
(446, 105, 'Supaul', 'Raghopur', 'raghopur'),
(447, 105, 'Supaul', 'Saraigarh Bhaptiyahi', 'saraigarh-bhaptiyahi'),
(448, 105, 'Supaul', 'Tribeniganj', 'tribeniganj'),
(449, 106, 'Vaishali', 'Hajipur', 'hajipur'),
(450, 106, 'Vaishali', 'Bidupur', 'bidupur'),
(451, 106, 'Vaishali', 'Chehrakala', 'chehrakala'),
(452, 106, 'Vaishali', 'Desri', 'desri'),
(453, 106, 'Vaishali', 'Goraul', 'goraul'),
(454, 106, 'Vaishali', 'Jandaha', 'jandaha'),
(455, 106, 'Vaishali', 'Lalganj', 'lalganj'),
(456, 106, 'Vaishali', 'Mahnar', 'mahnar'),
(457, 106, 'Vaishali', 'Mahua', 'mahua'),
(458, 106, 'Vaishali', 'Patepur', 'patepur'),
(459, 106, 'Vaishali', 'Raghopur', 'raghopur'),
(460, 106, 'Vaishali', 'Rajapakar', 'rajapakar'),
(461, 106, 'Vaishali', 'Sahdei Buzurg', 'sahdei-buzurg'),
(462, 106, 'Vaishali', 'Vaishali', 'vaishali'),
(463, 107, 'West Champaran', 'Bettiah', 'bettiah'),
(464, 107, 'West Champaran', 'Bagaha', 'bagaha'),
(465, 107, 'West Champaran', 'Bhitaha', 'bhitaha'),
(466, 107, 'West Champaran', 'Chanpatia', 'chanpatia'),
(467, 107, 'West Champaran', 'Gaunaha', 'gaunaha'),
(468, 107, 'West Champaran', 'Mainatanr', 'mainatanr'),
(469, 107, 'West Champaran', 'Majhaulia', 'majhaulia'),
(470, 107, 'West Champaran', 'Narkatiaganj', 'narkatiaganj'),
(471, 107, 'West Champaran', 'Nautan', 'nautan'),
(472, 107, 'West Champaran', 'Piprasi', 'piprasi'),
(473, 107, 'West Champaran', 'Ramnagar', 'ramnagar'),
(474, 107, 'West Champaran', 'Sikta', 'sikta'),
(475, 107, 'West Champaran', 'Thakaraha', 'thakaraha');

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
-- Indexes for table `location_blocks`
--
ALTER TABLE `location_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_countries`
--
ALTER TABLE `location_countries`
  ADD PRIMARY KEY (`country_id`);

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
-- Indexes for table `zzz_blocks`
--
ALTER TABLE `zzz_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_block_list`
--
ALTER TABLE `zzz_block_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_gender`
--
ALTER TABLE `info_gender`
  MODIFY `gender_id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info_goal`
--
ALTER TABLE `info_goal`
  MODIFY `goal_id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location_address`
--
ALTER TABLE `location_address`
  MODIFY `address_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location_blocks`
--
ALTER TABLE `location_blocks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;

--
-- AUTO_INCREMENT for table `location_countries`
--
ALTER TABLE `location_countries`
  MODIFY `country_id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `location_districts`
--
ALTER TABLE `location_districts`
  MODIFY `district_id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=720;

--
-- AUTO_INCREMENT for table `location_localites`
--
ALTER TABLE `location_localites`
  MODIFY `locality_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location_states`
--
ALTER TABLE `location_states`
  MODIFY `state_id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_privacy`
--
ALTER TABLE `post_privacy`
  MODIFY `privacy_id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_type`
--
ALTER TABLE `post_type`
  MODIFY `post_type_id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567917;

--
-- AUTO_INCREMENT for table `user_following`
--
ALTER TABLE `user_following`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_friends`
--
ALTER TABLE `user_friends`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_gender`
--
ALTER TABLE `user_gender`
  MODIFY `gender_id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group_members`
--
ALTER TABLE `user_group_members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_jobs`
--
ALTER TABLE `user_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_matrimony_profiles`
--
ALTER TABLE `user_matrimony_profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_prefix`
--
ALTER TABLE `user_prefix`
  MODIFY `id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_relatives`
--
ALTER TABLE `user_relatives`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zzz_blocks`
--
ALTER TABLE `zzz_blocks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `zzz_block_list`
--
ALTER TABLE `zzz_block_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;

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
