-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 06:02 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udise`
--

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `id` int(11) NOT NULL,
  `govt_schools` int(11) NOT NULL,
  `aided_schools` int(11) NOT NULL,
  `private_schools` int(11) NOT NULL,
  `others_schools` int(11) NOT NULL,
  `govt_teachers` int(11) NOT NULL,
  `aided_teachers` int(11) NOT NULL,
  `private_teachers` int(11) NOT NULL,
  `other_teachers` int(11) NOT NULL,
  `govt_students` int(11) NOT NULL,
  `aided_students` int(11) NOT NULL,
  `private_students` int(11) NOT NULL,
  `other_students` int(11) NOT NULL,
  `state` tinyint(2) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`id`, `govt_schools`, `aided_schools`, `private_schools`, `others_schools`, `govt_teachers`, `aided_teachers`, `private_teachers`, `other_teachers`, `govt_students`, `aided_students`, `private_students`, `other_students`, `state`, `created_on`) VALUES
(1, 339, 2, 72, 1, 4335, 73, 1121, 4, 49418, 1823, 17746, 8, 2, '2020-12-25 19:41:58'),
(2, 45013, 2346, 15862, 400, 186086, 8815, 118989, 880, 3897043, 263499, 3672881, 28476, 1, '2020-12-25 19:47:06'),
(3, 3179, 64, 503, 47, 16566, 924, 5517, 378, 221605, 17708, 82176, 4353, 3, '2020-12-25 19:49:39'),
(4, 47223, 5065, 6084, 7952, 225216, 37131, 87452, 26187, 4798865, 458368, 1290181, 383025, 4, '2020-12-25 19:52:10'),
(5, 72590, 689, 6031, 9209, 410167, 3635, 80233, 86038, 19653062, 180957, 2192403, 1898053, 5, '2020-12-25 19:55:26'),
(6, 48671, 434, 6842, 327, 178829, 2674, 87279, 1088, 4088725, 88899, 1487071, 14486, 6, '2020-12-25 19:57:59'),
(7, 121, 7, 74, 27, 5105, 289, 4048, 445, 149683, 8036, 79308, 5343, 7, '2020-12-25 19:59:46'),
(8, 300, 10, 35, 1, 2143, 82, 1013, 9, 58456, 2433, 21316, 90, 8, '2020-12-25 20:01:33'),
(9, 112, 4, 23, 1, 853, 142, 525, 26, 20783, 5211, 13171, 285, 9, '2020-12-25 20:11:50'),
(10, 2784, 253, 2666, 0, 82433, 5018, 68217, 0, 2288296, 158142, 1697805, 0, 10, '2020-12-25 20:14:53'),
(11, 833, 514, 139, 0, 3212, 8551, 1913, 0, 43777, 203993, 34375, 0, 11, '2020-12-26 04:39:05'),
(12, 35202, 5734, 13641, 4, 207365, 49787, 144732, 55, 5417447, 1824240, 4238255, 1410, 12, '2020-12-26 04:41:15'),
(13, 14516, 26, 7913, 1079, 98992, 568, 133667, 8908, 22136665, 16292, 3277808, 133412, 13, '2020-12-26 04:43:44'),
(14, 15433, 0, 2778, 1, 67574, 0, 34077, 3, 848791, 0, 525328, 16, 14, '2020-12-26 04:45:53'),
(15, 24080, 0, 5552, 47, 108681, 0, 67477, 217, 1264331, 0, 984502, 3257, 15, '2020-12-26 04:48:24'),
(16, 35954, 1177, 1400, 7377, 118100, 5496, 26281, 63765, 4877167, 326300, 1159920, 1245407, 16, '2020-12-26 04:50:37'),
(17, 50184, 7417, 20604, 28, 241622, 55044, 169034, 73, 4949769, 1554723, 4848469, 1014, 17, '2020-12-26 04:53:16'),
(18, 5011, 7195, 3156, 1339, 66549, 111995, 65069, 13617, 1560458, 2532589, 1517551, 205948, 18, '2020-12-26 04:55:40'),
(19, 45, 0, 0, 0, 1059, 0, 0, 0, 11675, 0, 0, 0, 19, '2020-12-26 04:56:44'),
(20, 122056, 874, 29105, 1949, 323475, 4905, 244325, 6533, 9265880, 154306, 6087339, 136248, 20, '2020-12-26 05:00:23'),
(21, 163142, 8090, 87433, 14570, 588074, 77729, 580237, 69298, 16875056, 4848804, 20320662, 2085892, 35, '2020-12-26 05:04:10'),
(22, 66033, 23554, 19400, 955, 257939, 298860, 207356, 5970, 5664237, 10666880, 5887708, 137208, 21, '2020-12-26 05:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `master_state`
--

CREATE TABLE `master_state` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `regional_zone` varchar(255) DEFAULT NULL,
  `union_territories` tinyint(1) DEFAULT 0,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_state`
--

INSERT INTO `master_state` (`id`, `name`, `regional_zone`, `union_territories`, `created_on`, `update_at`) VALUES
(1, 'Andhra Pradesh', 'South-Central/SCRO', 0, '2019-03-29 10:12:59', '2019-08-27 07:07:50'),
(2, 'Andaman and Nicobar Islands', 'Eastern/ERO', 1, '2019-03-29 10:13:21', '2020-09-23 11:22:19'),
(3, 'Arunachal Pradesh', 'Eastern/ERO', 0, '2019-03-29 10:13:36', '2019-08-27 07:01:26'),
(4, 'Assam', 'Eastern/ERO', 0, '2019-03-29 10:13:47', '2019-08-27 07:01:30'),
(5, 'Bihar', 'Northern/NRO', 0, '2019-03-29 10:14:09', '2019-08-27 07:04:21'),
(6, 'Chhattisgarh', 'Central/CRO', 0, '2019-03-29 10:14:09', '2019-08-27 06:40:55'),
(7, 'Chandigarh', 'North-West/NWRO', 1, '2019-03-29 10:14:38', '2020-09-23 11:22:19'),
(8, 'Dadar and Nagar Haveli', 'Western/WRO', 1, '2019-03-29 10:14:38', '2020-09-23 11:22:19'),
(9, 'Daman and Diu', 'Western/WRO', 1, '2019-03-29 10:14:59', '2020-09-23 11:22:19'),
(10, 'Delhi', 'North-West/NWRO', 1, '2019-03-29 10:14:59', '2020-09-23 11:22:19'),
(11, 'Goa', 'Western/WRO', 0, '2019-03-29 10:15:18', '2019-08-27 07:11:39'),
(12, 'Gujarat', 'Central/CRO', 0, '2019-03-29 10:15:18', '2019-08-27 06:40:48'),
(13, 'Haryana', 'North-West/NWRO', 0, '2019-03-29 10:15:35', '2019-08-27 07:06:57'),
(14, 'Himachal Pradesh', 'North-West/NWRO', 0, '2019-03-29 10:15:35', '2019-08-27 07:07:06'),
(15, 'Jammu and Kashmir', 'North-West/NWRO', 1, '2019-03-29 10:15:55', '2020-09-23 11:22:19'),
(16, 'Jharkhand', 'Eastern/ERO', 0, '2019-03-29 10:15:55', '2019-08-27 07:01:35'),
(17, 'Karnataka', 'South-West/SWRO', 0, '2019-03-29 10:16:10', '2019-08-27 07:09:58'),
(18, 'Kerala', 'South-West/SWRO', 0, '2019-03-29 10:16:10', '2019-08-27 07:10:01'),
(19, 'Lakshadeep', 'Southern/SRO', 1, '2019-03-29 10:16:26', '2020-11-06 10:18:25'),
(20, 'Madhya Pradesh', 'Central/CRO', 0, '2019-03-29 10:16:26', '2019-08-27 06:40:42'),
(21, 'Maharashtra', 'Western/WRO', 0, '2019-03-29 10:16:42', '2019-08-27 07:11:41'),
(22, 'Manipur', 'Eastern/ERO', 0, '2019-03-29 10:16:42', '2019-08-27 07:01:28'),
(23, 'Meghalaya', 'Eastern/ERO', 0, '2019-03-29 10:16:54', '2019-08-27 07:01:39'),
(24, 'Mizoram', 'Eastern/ERO', 0, '2019-03-29 10:16:54', '2019-08-27 07:01:37'),
(25, 'Nagaland', 'Eastern/ERO', 0, '2019-03-29 10:17:08', '2019-08-27 07:01:43'),
(26, 'Odisha', 'Eastern/ERO', 0, '2019-03-29 10:17:08', '2019-08-27 07:01:41'),
(27, 'Punjab', 'North-West/NWRO', 0, '2019-03-29 10:17:24', '2019-08-27 07:07:13'),
(28, 'Puducherry', 'Southern/SRO', 1, '2019-03-29 10:17:24', '2020-09-23 11:22:19'),
(29, 'Rajasthan', 'North-West/NWRO', 0, '2019-03-29 10:17:40', '2019-08-27 07:07:16'),
(30, 'Sikkim', 'Eastern/ERO', 0, '2019-03-29 10:17:40', '2019-08-27 07:01:48'),
(31, 'Tamil Nadu', 'Southern/SRO', 0, '2019-03-29 10:17:57', '2019-08-27 07:09:23'),
(32, 'Telangana', 'South-Central/SCRO', 0, '2019-03-29 10:17:57', '2019-08-27 07:07:52'),
(33, 'Tripura', 'Eastern/ERO', 0, '2019-03-29 10:18:11', '2019-08-27 07:01:45'),
(34, 'Uttarakhand', 'Northern/NRO', 0, '2019-03-29 10:18:11', '2019-08-27 07:04:24'),
(35, 'Uttar Pradesh', 'Northern/NRO', 0, '2019-03-29 10:18:34', '2019-08-27 07:04:27'),
(36, 'West Bengal', 'Eastern/ERO', 0, '2019-03-29 10:18:34', '2019-08-27 07:01:51'),
(37, 'Ladakh', 'North-West/NWRO', 1, '2020-09-23 11:23:49', '2020-11-06 09:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `status_of_infrastructure`
--

CREATE TABLE `status_of_infrastructure` (
  `id` int(11) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `govt_total` varchar(255) DEFAULT NULL,
  `govt_existing` varchar(255) DEFAULT NULL,
  `aided_total` varchar(255) DEFAULT NULL,
  `aided_existing` varchar(255) DEFAULT NULL,
  `private_total` varchar(255) DEFAULT NULL,
  `private_existing` varchar(255) DEFAULT NULL,
  `other_total` varchar(255) DEFAULT NULL,
  `other_existing` varchar(255) DEFAULT NULL,
  `image` varchar(355) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_of_infrastructure`
--

INSERT INTO `status_of_infrastructure` (`id`, `name`, `govt_total`, `govt_existing`, `aided_total`, `aided_existing`, `private_total`, `private_existing`, `other_total`, `other_existing`, `image`, `color`, `status`, `created_on`) VALUES
(1, 'Girls Toilet', '1033946', '984140', '76574', '74459', '310957', '301542', '46202', '44067', 'images/features/girls-toilet.png', '#a34545', 1, '2020-12-26 15:40:40'),
(2, 'Boys Toilet', '1008993', '940337', '72925', '70869', '299343', '308352', '44088', '46155', 'images/features/boys-toilet.png', '#4a536e', 1, '2020-12-26 15:40:40'),
(3, 'CWSN Toilet', '1083678', '137751', '84614', '11750', '325760', '56072', '55954', '5363', 'images/features/cwsn-toilet.png', '#dfae58', 1, '2020-12-26 15:42:50'),
(4, 'Library', '1083678', '676000', '84614', '55087', '327560', '204118', '55954', '20592', 'images/features/library.png', '#688d67', 1, '2020-12-26 15:42:50'),
(5, 'Electricity', '798126', '759211', '69542', '68868', '283511', '279629', '37908', '36789', 'images/features/electricity.png', '#7c7e85', 1, '2020-12-26 16:41:52'),
(6, 'Drinking Water', '1083678', '983184', '84614', '76792', '325760', '289230', '55954', '45368', 'images/features/drinking-water.png', '#685849', 1, '2020-12-26 16:41:52'),
(7, 'Playground', '1083678', '630343', '84614', '70074', '325760', '257570', '55954', '28535', 'images/features/play-ground.png', '#73c1dd', 1, '2020-12-26 16:46:03'),
(8, 'Boundary Wall', '1083678', '402911', '84614', '40647', '325760', '237815', '55954', '26314', 'images/features/boundary-wall.png', '#e56386', 1, '2020-12-26 16:46:03'),
(9, 'Ramp', '1083678', '788371', '84614', '45332', '325760', '128604', '55954', '13964', 'images/features/ramp.png', '#f05836', 1, '2020-12-26 16:46:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education_details`
--
ALTER TABLE `education_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_state`
--
ALTER TABLE `master_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_of_infrastructure`
--
ALTER TABLE `status_of_infrastructure`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education_details`
--
ALTER TABLE `education_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `master_state`
--
ALTER TABLE `master_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `status_of_infrastructure`
--
ALTER TABLE `status_of_infrastructure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
