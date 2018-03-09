-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2018 at 08:15 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logger`
--

CREATE TABLE `activity_logger` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity` text NOT NULL,
  `activity_time` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_logger`
--

INSERT INTO `activity_logger` (`log_id`, `user_id`, `activity`, `activity_time`, `ip_address`) VALUES
(1, 106, 'New Question added with out exhibit', '1349328610', '122.174.204.23'),
(2, 106, 'Deleted a question', '1349328632', '122.174.204.23'),
(3, 106, 'New admin user added', '1349328882', '111.92.64.16'),
(4, 1, 'New test template added', '1349853160', '122.174.204.23'),
(5, 1, 'Deleted exam template 19', '1349853174', '122.174.204.23'),
(6, 1, 'New test template added', '1349853187', '122.174.204.23'),
(7, 1, 'New test template added', '1349861655', '111.92.64.16'),
(8, 1, 'Exam template 20 updated', '1349861697', '122.174.204.23'),
(9, 1, 'Updated question ID: 167', '1349868130', '111.92.64.16'),
(10, 1, 'Updated question ID: 167', '1349868276', '111.92.64.16'),
(11, 1, 'New category added', '1350370147', '111.92.64.16'),
(12, 1, 'New Question added with out exhibit', '1350370234', '111.92.64.16'),
(13, 1, 'New Question added with out exhibit', '1350370305', '111.92.64.16'),
(14, 1, 'New Question added with out exhibit', '1350370804', '111.92.64.16'),
(15, 1, 'New Question added with out exhibit', '1350370887', '111.92.64.16'),
(16, 1, 'New Question added with out exhibit', '1350370938', '111.92.64.16'),
(17, 1, 'New Question added with out exhibit', '1350371034', '111.92.64.16'),
(18, 1, 'New Question added with out exhibit', '1350371405', '111.92.64.16'),
(19, 1, 'New Question added with out exhibit', '1350371471', '111.92.64.16'),
(20, 1, 'New Question added with out exhibit', '1350371542', '111.92.64.16'),
(21, 1, 'New Question added with out exhibit', '1350375328', '111.92.64.16'),
(22, 1, 'New Question added with out exhibit', '1350375470', '111.92.64.16'),
(23, 1, 'New Question added with out exhibit', '1350375570', '111.92.64.16'),
(24, 1, 'New Question added with out exhibit', '1350375669', '111.92.64.16'),
(25, 1, 'New Question added with out exhibit', '1350375872', '111.92.64.16'),
(26, 1, 'New Question added with out exhibit', '1350375919', '111.92.64.16'),
(27, 1, 'Deleted a question', '1350377167', '111.92.64.16'),
(28, 1, 'New Question added with out exhibit', '1350377644', '111.92.64.16'),
(29, 1, 'New Question added with out exhibit', '1350377714', '111.92.64.16'),
(30, 1, 'New Question added with out exhibit', '1350377913', '111.92.64.16'),
(31, 1, 'New Question added with out exhibit', '1350377982', '111.92.64.16'),
(32, 1, 'New Question added with out exhibit', '1350378247', '111.92.64.16'),
(33, 1, 'New Question added with out exhibit', '1350378306', '111.92.64.16'),
(34, 1, 'New Question added with out exhibit', '1350378440', '111.92.64.16'),
(35, 1, 'New Question added with out exhibit', '1350378548', '111.92.64.16'),
(36, 1, 'New Question added with out exhibit', '1350378634', '111.92.64.16'),
(37, 1, 'New Question added with out exhibit', '1350378696', '111.92.64.16'),
(38, 1, 'New Question added with out exhibit', '1350378752', '111.92.64.16'),
(39, 1, 'New Question added with out exhibit', '1350378811', '111.92.64.16'),
(40, 1, 'New Question added with out exhibit', '1350378868', '111.92.64.16'),
(41, 1, 'New Question added with out exhibit', '1350378928', '111.92.64.16'),
(42, 1, 'New Question added with out exhibit', '1350378989', '111.92.64.16'),
(43, 1, 'New Question added with out exhibit', '1350379050', '111.92.64.16'),
(44, 1, 'New Question added with out exhibit', '1350379101', '111.92.64.16'),
(45, 1, 'New Question added with out exhibit', '1350379146', '111.92.64.16'),
(46, 1, 'New Question added with out exhibit', '1350379207', '111.92.64.16'),
(47, 1, 'Exam template 17 updated', '1350379378', '111.92.64.16'),
(48, 1, 'Deleted exam template 21', '1350379830', '111.92.64.16'),
(49, 1, 'New test template added', '1350379962', '111.92.64.16'),
(50, 1, 'Exam template 22 updated', '1350380351', '111.92.64.16'),
(51, 1, 'Deleted exam template 22', '1350380364', '111.92.64.16'),
(52, 1, 'Removed a segment from exam template 20', '1350380417', '111.92.64.16'),
(53, 1, 'Exam template 20 updated', '1350380470', '111.92.64.16'),
(54, 1, 'Exam template 20 updated', '1350380966', '111.92.64.16'),
(55, 1, 'Updated question ID: 219', '1350381486', '122.174.236.85'),
(56, 1, 'Updated question ID: 219', '1350381504', '122.174.236.85'),
(57, 1, 'New Question added with out exhibit', '1350381620', '122.174.236.85'),
(58, 1, 'Deleted a question', '1350381661', '122.174.236.85'),
(59, 1, 'New Question added with out exhibit', '1350384308', '111.92.64.16'),
(60, 1, 'Updated question ID: 221', '1350385010', '111.92.64.16'),
(61, 1, 'Deleted a question', '1350385020', '111.92.64.16'),
(62, 1, 'Updated question ID: 221', '1350385037', '111.92.64.16'),
(63, 1, 'Updated question ID: 218', '1350385109', '111.92.64.16'),
(64, 1, 'Updated question ID: 218', '1350385130', '111.92.64.16'),
(65, 1, 'Updated question ID: 217', '1350385195', '111.92.64.16'),
(66, 1, 'Updated question ID: 218', '1350385295', '111.92.64.16'),
(67, 1, 'Updated question ID: 216', '1350385401', '111.92.64.16'),
(68, 1, 'Updated question ID: 215', '1350385460', '111.92.64.16'),
(69, 1, 'Updated question ID: 214', '1350385507', '111.92.64.16'),
(70, 1, 'Updated question ID: 214', '1350386263', '111.92.64.16'),
(71, 1, 'Updated question ID: 213', '1350386330', '111.92.64.16'),
(72, 1, 'Updated question ID: ', '1350386423', '111.92.64.16'),
(73, 1, 'Updated question ID: 211', '1350386494', '111.92.64.16'),
(74, 1, 'Updated question ID: 211', '1350386530', '111.92.64.16'),
(75, 1, 'Updated question ID: 210', '1350386586', '111.92.64.16'),
(76, 1, 'Updated question ID: 209', '1350386673', '111.92.64.16'),
(77, 1, 'Updated question ID: 208', '1350386731', '111.92.64.16'),
(78, 1, 'Updated question ID: 207', '1350386815', '111.92.64.16'),
(79, 1, 'Updated question ID: 206', '1350455862', '111.92.64.16'),
(80, 1, 'Updated question ID: 205', '1350455939', '111.92.64.16'),
(81, 1, 'Updated question ID: 204', '1350456028', '111.92.64.16'),
(82, 1, 'Updated question ID: 211', '1350456058', '111.92.64.16'),
(83, 1, 'Updated question ID: 211', '1350456060', '111.92.64.16'),
(84, 1, 'Updated question ID: 203', '1350456131', '111.92.64.16'),
(85, 1, 'Updated question ID: 202', '1350456196', '111.92.64.16'),
(86, 1, 'Updated question ID: 201', '1350456273', '111.92.64.16'),
(87, 1, 'Updated question ID: 200', '1350456335', '111.92.64.16'),
(88, 1, 'Updated question ID: 198', '1350456412', '111.92.64.16'),
(89, 1, 'Updated question ID: 197', '1350456477', '111.92.64.16'),
(90, 1, 'Updated question ID: 196', '1350456544', '111.92.64.16'),
(91, 1, 'Updated question ID: 195', '1350456604', '111.92.64.16'),
(92, 1, 'Updated question ID: 194', '1350456677', '111.92.64.16'),
(93, 1, 'Updated question ID: 193', '1350456749', '111.92.64.16'),
(94, 1, 'Updated question ID: 192', '1350456809', '111.92.64.16'),
(95, 1, 'Updated question ID: 192', '1350459447', '111.92.64.16'),
(96, 1, 'Updated question ID: 191', '1350459531', '111.92.64.16'),
(97, 1, 'Updated question ID: 191', '1350459540', '111.92.64.16'),
(98, 1, 'Updated question ID: 190', '1350459586', '111.92.64.16'),
(99, 1, 'Updated question ID: 189', '1350459664', '111.92.64.16'),
(100, 1, 'Updated question ID: 188', '1350459763', '111.92.64.16'),
(101, 1, 'Updated question ID: 186', '1350459862', '111.92.64.16'),
(102, 1, 'Exam template 20 updated', '1350459907', '111.92.64.16'),
(103, 1, 'Updated question ID: 216', '1350468490', '111.92.64.16'),
(104, 1, 'Updated question ID: 203', '1350468709', '111.92.64.16'),
(105, 1, 'Updated question ID: 187', '1351571697', '122.174.219.117'),
(106, 1, 'Test unassigned for user ID:50', '1351588659', '122.174.219.117'),
(107, 1, 'Test unassigned for user ID:57', '1351667686', '111.92.64.16'),
(108, 1, 'Test unassigned for user ID:48', '1351667847', '111.92.64.16'),
(109, 1, 'Test unassigned for user ID:46', '1351667996', '111.92.64.16'),
(110, 1, 'Test unassigned for user ID:61', '1351920489', '122.174.219.117'),
(111, 144, 'New Question added with out exhibit', '1498390332', '::1'),
(112, 144, 'Deleted a question', '1498390367', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `serial` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text COMMENT 'Answer can be text, answerkey_id, or group of IDS based on question type',
  `exam_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `assigned_exam_id` int(11) NOT NULL,
  `answer_start` varchar(150) NOT NULL,
  `answer_end` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `serial`, `question_id`, `answer`, `exam_id`, `user_id`, `assigned_exam_id`, `answer_start`, `answer_end`) VALUES
(120, 1, 5, 'Packers', 17, 24, 26, '1348746816', '1348746825'),
(121, 2, 3, 'Fuirewal', 17, 24, 26, '1348746826', '1348746830'),
(122, 3, 27, 'Web', 17, 24, 26, '1348746830', '1348746836'),
(123, 4, 6, 'Fakse', 17, 24, 26, '1348746836', '1348746843'),
(124, 5, 23, 'SSK', 17, 24, 26, '1348746843', '1348746847'),
(125, 6, 9, '4', 17, 24, 26, '1348746847', '1348746851'),
(126, 7, 48, '0', 17, 24, 26, '1348746851', '1348746918'),
(127, 8, 34, '77', 17, 24, 26, '1348746918', '1348746924'),
(128, 9, 37, '93', 17, 24, 26, '1348746924', '1348746931'),
(129, 10, 52, '123', 17, 24, 26, '1348746931', '1348746933'),
(130, 11, 54, '134', 17, 24, 26, '1348746933', '1348746935'),
(131, 12, 32, '70', 17, 24, 26, '1348746935', '1348746937'),
(132, 13, 53, '0', 17, 24, 26, '1348746937', '1348746958'),
(133, 14, 55, '137', 17, 24, 26, '1348746958', '1348746961'),
(134, 15, 12, '16', 17, 24, 26, '1348746961', '1348746964'),
(135, 16, 122, '188', 17, 24, 26, '1348746964', '1348746967'),
(136, 17, 118, '169', 17, 24, 26, '1348746967', '1348746969'),
(137, 18, 121, '184', 17, 24, 26, '1348746969', '1348746972'),
(138, 19, 110, 'Tsjhgasdjhasd', 17, 24, 26, '1348746972', '1348746978'),
(139, 20, 114, 'ewrewrBriefly explain about your College Days.(Use less than 1000 words)', 17, 24, 26, '1348746978', '1348746984'),
(140, 1, 8, 'IP address', 17, 26, 27, '1348805659', '1348805670'),
(141, 2, 26, 'Extended Mark up language', 17, 26, 27, '1348805670', '1348805683'),
(142, 3, 24, 'SMTP', 17, 26, 27, '1348805684', '1348805693'),
(143, 4, 3, 'Security software', 17, 26, 27, '1348805693', '1348805708'),
(144, 5, 41, 'Basic Input Output System', 17, 26, 27, '1348805709', '1348805725'),
(145, 6, 61, '152', 17, 26, 27, '1348805725', '1348805732'),
(146, 7, 29, '56', 17, 26, 27, '1348805732', '1348805766'),
(147, 8, 53, '0', 17, 26, 27, '1348805766', '1348805794'),
(148, 9, 34, '77', 17, 26, 27, '1348805794', '1348805812'),
(149, 10, 37, '90', 17, 26, 27, '1348805812', '1348805847'),
(150, 11, 36, '86', 17, 26, 27, '1348805847', '1348805867'),
(151, 12, 52, '120', 17, 26, 27, '1348805868', '1348805885'),
(152, 13, 12, '18', 17, 26, 27, '1348805885', '1348805890'),
(153, 14, 51, '116', 17, 26, 27, '1348805890', '1348805999'),
(154, 15, 54, '130', 17, 26, 27, '1348805999', '1348806005'),
(155, 16, 124, '199', 17, 26, 27, '1348806005', '1348806041'),
(156, 17, 122, '188', 17, 26, 27, '1348806041', '1348806048'),
(157, 18, 105, '0', 17, 26, 27, '1348806049', '1348806071'),
(158, 19, 109, 'gdfg', 17, 26, 27, '1348806071', '1348806076'),
(159, 20, 116, 'wtratyer', 17, 26, 27, '1348806076', '1348806081'),
(160, 1, 43, '<image>\n\n</image>', 17, 27, 28, '1348809089', '1348809119'),
(161, 2, 25, 'in the rom of motherboard', 17, 27, 28, '1348809120', '1348809154'),
(162, 3, 26, 'extended Mark up language ', 17, 27, 28, '1348809154', '1348809192'),
(163, 4, 7, '', 17, 27, 28, '1348809192', '1348809199'),
(164, 5, 41, 'Build in Operating System', 17, 27, 28, '1348809200', '1348809222'),
(165, 6, 29, '56', 17, 27, 28, '1348809222', '1348809259'),
(166, 7, 61, '152', 17, 27, 28, '1348809259', '1348809351'),
(167, 8, 36, '86', 17, 27, 28, '1348809351', '1348809387'),
(168, 9, 52, '120', 17, 27, 28, '1348809388', '1348809418'),
(169, 10, 37, '93', 17, 27, 28, '1348809418', '1348809448'),
(170, 11, 12, '18', 17, 27, 28, '1348809448', '1348809478'),
(171, 12, 31, '65', 17, 27, 28, '1348809596', '1348809617'),
(172, 13, 56, '144', 17, 27, 28, '1348809618', '1348809655'),
(173, 14, 32, '69', 17, 27, 28, '1348809656', '1348809698'),
(174, 15, 15, '28', 17, 27, 28, '1348809698', '1348809733'),
(175, 16, 123, '196', 17, 27, 28, '1348809734', '1348809794'),
(176, 17, 117, '164', 17, 27, 28, '1348809794', '1348809844'),
(177, 18, 120, '177', 17, 27, 28, '1348809845', '1348809889'),
(178, 19, 111, '', 17, 27, 28, '1348809890', '1349068800'),
(179, 20, 115, 'hjghjgh', 17, 27, 28, '', '1349185722'),
(180, 1, 8, 'IP address', 17, 29, 29, '1348811749', '1348811795'),
(181, 2, 41, 'Basic Input Output System', 17, 29, 29, '1348811795', '1348811825'),
(182, 3, 43, '<img src=\"\" alt=\"\"/>', 17, 29, 29, '1348811825', '1348811877'),
(183, 4, 6, 'false', 17, 29, 29, '1348811877', '1348811892'),
(184, 5, 5, '', 17, 29, 29, '1348811893', '1348812023'),
(185, 6, 60, '151', 17, 29, 29, '1348812023', '1348812054'),
(186, 7, 9, '5', 17, 29, 29, '1348812054', '1348812145'),
(187, 8, 31, '67', 17, 29, 29, '1348812146', '1348812176'),
(188, 9, 53, '0', 17, 29, 29, '1348812176', '1348812232'),
(189, 10, 36, '86', 17, 29, 29, '1348812232', '1348812264'),
(190, 11, 30, '60', 17, 29, 29, '1348812265', '1348812298'),
(191, 12, 51, '116', 17, 29, 29, '1348812298', '1348812327'),
(192, 13, 37, '93', 17, 29, 29, '1348812328', '1348812358'),
(193, 14, 34, '77', 17, 29, 29, '1348812358', '1348812384'),
(194, 15, 33, '75', 17, 29, 29, '1348812385', '1348812425'),
(195, 16, 120, '178', 17, 29, 29, '1348812425', '1348812486'),
(196, 17, 122, '189', 17, 29, 29, '1348812486', '1348812560'),
(197, 18, 123, '194', 17, 29, 29, '1348812560', '1348812614'),
(198, 19, 110, '         INDIA promises to assure the Atomic security \nNew Delhi: Prime minister Mr.Manmohan Singh was clarify that India will takes steps to ensure the atomic security before he departure to South Korea.\n   P.M. says that the energy field in the country is going through modification.\nSo according to this situation the the atomic projects are going to be expanded.\nAnd the security in the energy field is going to be improved.\n   For getting the support for atomic projects from pupil we have to ensure its high security. Due to the disaster happens in Fukoshima located in Japan, the importants of atomic security is more important. The P.M. informed that the steps to enhance the security is going to taken by doing modifications in atomic projects. And also the priority will be for ensuring complete security.\n   The External Affairs Secretary Mr. Ranjan Mathai told that the main agenda of the summit is for calling every bodies attention to the atomic terrorism which strengthening in all over the world.  ', 17, 29, 29, '1348812614', '1348814098'),
(199, 20, 116, 'The happiest moment in my life was the occasion on which I got a chance to see the Tajmahal one of the seven wonders in the world. In the educational year 2000-2001 I got a chance to study my 9^th standard in Uthar Pradesh state as a part of national integrity. At that time we had a trip to Agra to visit the Tajmahal, Agra fort, Fathepur Sikri etc. That was a beautiful experience in my life.', 17, 29, 29, '1348814098', '1348814728'),
(220, 1, 71, '21,25,22,80443,23,53', 18, 24, 31, '1348891555', '1348891588'),
(221, 2, 45, '4096', 18, 24, 31, '1348891589', '1348891596'),
(222, 3, 100, 'root', 18, 24, 31, '1348891597', '1348891602'),
(223, 4, 91, 'Switch Mode power Supply', 18, 24, 31, '1348891602', '1348891613'),
(224, 5, 78, '', 18, 24, 31, '1348891613', '1348891615'),
(225, 6, 74, 'locate .. find', 18, 24, 31, '1348891615', '1348891624'),
(226, 7, 72, 'INODE is a number', 18, 24, 31, '1348891625', '1348891632'),
(227, 8, 86, 'tar czf ', 18, 24, 31, '1348891632', '1348891656'),
(228, 9, 82, 'df -h', 18, 24, 31, '1348891656', '1348891676'),
(229, 10, 68, 'as', 18, 24, 31, '1348891676', '1348891686'),
(230, 11, 93, '255.255.255.0', 18, 24, 31, '1348891686', '1348891693'),
(231, 12, 102, '/var/log/messages', 18, 24, 31, '1348891693', '1348891700'),
(232, 13, 63, 'Mosaic', 18, 24, 31, '1348891701', '1348891706'),
(233, 14, 97, 'Application', 18, 24, 31, '1348891706', '1348891714'),
(234, 15, 77, 'Binary Language', 18, 24, 31, '1348891715', '1348891721'),
(235, 16, 70, '/root /bin /usr /sbin', 18, 24, 31, '1348891721', '1348891735'),
(236, 17, 104, 'iptables -L\niptables -F', 18, 24, 31, '1348891736', '1348891747'),
(237, 18, 96, 'Canonical Name Recod', 18, 24, 31, '1348891747', '1348891757'),
(238, 19, 65, 'HTTP', 18, 24, 31, '1348891757', '1348891766'),
(239, 20, 89, 'I dont know', 18, 24, 31, '1348891767', '1348891781'),
(240, 1, 90, '', 18, 30, 32, '1349066114', '1349066150'),
(241, 2, 89, '', 18, 30, 32, '1349066150', '1349066163'),
(242, 3, 80, 'icann', 18, 30, 32, '1349066163', '1349066181'),
(243, 4, 68, 'runlevel 0  halt\nrunlevel 1  single usermode\nrunlevel 2  non graphical mode without networking\nrunlevel 3\nrunlevel 4\nrunlevel 5  graphical mode\nrunlevel 6  reboot', 18, 30, 32, '1349066181', '1349066374'),
(244, 5, 70, '/boot, /etc ,/root', 18, 30, 32, '1349066374', '1349066452'),
(245, 6, 95, 'crontab -lu user1', 18, 30, 32, '1349066452', '1349066492'),
(246, 7, 79, '', 18, 30, 32, '1349066492', '1349066497'),
(247, 8, 45, '', 18, 30, 32, '1349066497', '1349066512'),
(248, 9, 84, 'if the shadow file is deleted, then we cant enter to system as normal user.so we enter in single user mode and use \"pwconv\" to reproduce the shadow file. ie(/etc/shadow)', 18, 30, 32, '1349066512', '1349066780'),
(249, 10, 104, 'To list = iptables -l\nTo flush = iptables -F', 18, 30, 32, '1349066780', '1349066929'),
(250, 11, 100, 'ROOT', 18, 30, 32, '1349066929', '1349066947'),
(251, 12, 93, '255.255.255.0', 18, 30, 32, '1349066947', '1349067038'),
(252, 13, 88, 'error log\npath /var/log', 18, 30, 32, '1349067039', '1349067093'),
(253, 14, 85, 'SUID = If we set suid for a file it will execute only in the permission of owner not in the permission of executer.\nSGID = if we set sgid for a folder, any object that we ceate under it will have same group.\nstickybit = if we set sticky bit for an object only owner and root can remove it.', 18, 30, 32, '1349067093', '1349067437'),
(254, 15, 74, 'Locate uses a precompiled database while Find traverses the directory tree .Since locate uses a database to search , it is faster but not up to date .', 18, 30, 32, '1349067437', '1349436133'),
(255, 16, 86, 'tar -zcvf /home/user1', 18, 30, 32, '', '1349456641'),
(256, 17, 69, 'Bios will start system integrity checks and check for boot loader in floppy, harddrive and CDrom. When boot loader is detected BIOS will give control to it. MBR (master boot record) is located in the first sector of the hard drive. It is 512kb in size. MBR will locate the GRUB (grand unified boot loader) and gives control to it.  GRub is in /etc/grub.conf or /boot/grub.conf.  Grub.conf have timeout values(OS selection), default OS, kernel (vmlinuz), initrd images. Initrd images will act as temporary root file system till root file system is mounted. Vmlinuz is the kernel. Grub mounts root file system and /sbin/init program is started. init have process id of 1. It is the mail process, init will look for default run level in /etc/inittab file..  run level 0 - halt (same as #shutdown -r now)  s - single user mode, 2 - multiuser mode without networking/NFS. 3 - multiuser mode with out GUI and with networking, 4 - officially undefined, 5 - GUI mode (for home PCs), 6 - reboot (same as #reboot -r now) ...  init will execute the services (like cron, httpd) in /etc/rc.d/rc3.d/', 18, 30, 32, '', '1349457672'),
(257, 18, 65, 'HyperText Transfer Protocol', 18, 30, 32, '', '1349781430'),
(258, 19, 83, 'yes\nlisten', 18, 30, 32, '1349068794', '1349847709'),
(259, 20, 72, 'The meta data information of all objects created in the system is stored in inod.\nWhich contains basic informations like type, permissions,modified date and time.... ', 18, 30, 32, '1349068800', '1349068998'),
(260, 1, 81, 'Basic Input Output System', 18, 24, 34, '1349087741', '1349087766'),
(261, 2, 69, 'When a system is first booted, or is reset, the processor executes code at a well-known location. In a personal computer (PC), this location is in the basic input/output system (BIOS), which is stored in flash memory on the motherboard. The central processing unit (CPU) in an embedded system invokes the reset vector to start a program at a known address in flash/ROM. In either case, the result is the same. Because PCs offer so much flexibility, the BIOS must determine which devices are candidates for boot. We\'ll look at this in more detail later.\nWhen a boot device is found, the first-stage boot loader is loaded into RAM and executed. This boot loader is less than 512 bytes in length (a single sector), and its job is to load the second-stage boot loader.', 18, 24, 34, '1349087767', '1349087842'),
(262, 3, 67, 'DK', 18, 24, 34, '1349087842', '1349087912'),
(263, 4, 99, 'pwconv\n\nThe pwconv command creates the file /etc/shadow and changes all passwords to \'x\' in the /etc/passwd file.', 18, 24, 34, '1349087912', '1349088007'),
(264, 5, 62, 'Computer Virus', 18, 24, 34, '1349088007', '1349088059'),
(265, 6, 92, 'RJ11', 18, 24, 34, '1349088060', '1349088136'),
(266, 7, 100, 'Root', 18, 24, 34, '1349088136', '1349088178'),
(267, 8, 89, 'Ctrl+A  - Move cursor to the beginning of the command line.\nCtrl+W  _   \nCtrl+E  - Move cursor to the end of the command line.\nCtrl+U  -       ', 18, 24, 34, '1349088178', '1349088361'),
(268, 9, 97, 'Application\nPresentation\nSession\nTransport\nNetwork\nData Link\nPhysical', 18, 24, 34, '1349088361', '1349088632'),
(269, 10, 80, 'Internet Corporation for Assigned Names and Numbers', 18, 24, 34, '1349088632', '1349088734'),
(270, 11, 73, 'RAID 1 - 5', 18, 24, 34, '1349088734', '1349088779'),
(271, 12, 83, 'Yes,', 18, 24, 34, '1349088779', '1349089147'),
(272, 13, 94, 'Orginal Equipment Manufacturer', 18, 24, 34, '1349089147', '1349089208'),
(273, 14, 45, '256', 18, 24, 34, '1349089209', '1349089343'),
(274, 15, 70, '', 18, 24, 34, '1349089343', '1349089396'),
(275, 16, 79, 'Trux', 18, 24, 34, '1349089396', '1349089403'),
(276, 17, 77, 'Assembly language', 18, 24, 34, '1349089403', '1349089439'),
(277, 18, 71, 'adda', 18, 24, 34, '1349089439', '1349090565'),
(278, 19, 104, 'dsfdfdfdf', 18, 24, 34, '1349090565', '1349090570'),
(279, 20, 82, 'fdfdfdf', 18, 24, 34, '1349090571', '1349090575'),
(280, 1, 183, 'No', 17, 31, 35, '1349101531', '1349101546'),
(281, 2, 180, 'Common Gateway Interface', 17, 31, 35, '1349101546', '1349101559'),
(282, 3, 178, 'In computer science and numerical computation, pseudocode is an informal high-level description of the operating principle of a computer program or other algorithm. It uses the structural conventions of a programming language, but is intended for human reading rather than machine reading. ', 17, 31, 35, '1349101559', '1349101606'),
(283, 4, 5, ' Not digital. This is data in the form of a continuous flow. A record or a tape is analog. Digital, on the other hand, is in pieces or samples. More to come on that.', 17, 31, 35, '1349101606', '1349101740'),
(284, 5, 177, 'If you\'ve ever been in a situation in which you\'ve almost completed an important project, only to have your computer spontaneously crash seconds before hitting the \"save\" button, you understand how frustrating losing your data can be.', 17, 31, 35, '1349101740', '1349101773'),
(285, 6, 9, '5', 17, 31, 35, '1349101773', '1349101778'),
(286, 7, 47, '209', 17, 31, 35, '1349101778', '1349101907'),
(287, 8, 32, '71', 17, 31, 35, '1349101907', '1349101937'),
(288, 9, 11, '13', 17, 31, 35, '1349101938', '1349101966'),
(289, 10, 54, '130', 17, 31, 35, '1349101966', '1349101983'),
(290, 11, 145, '305', 17, 31, 35, '1349101983', '1349102010'),
(291, 12, 13, '22', 17, 31, 35, '1349102010', '1349102055'),
(292, 13, 152, '342', 17, 31, 35, '1349102055', '1349102093'),
(293, 14, 139, '275', 17, 31, 35, '1349102094', '1349102139'),
(294, 15, 138, '269', 17, 31, 35, '1349102140', '1349102207'),
(295, 16, 162, '402', 17, 31, 35, '1349102207', '1349102281'),
(296, 17, 120, '180', 17, 31, 35, '1349102281', '1349102421'),
(297, 18, 124, '200', 17, 31, 35, '1349102422', '1349102440'),
(298, 19, 111, 'Two small milk societies was firstly started collecting the milk of 247 litres in Anand a small town in Gujarat. Dr.Varghese Kurien were responsible for this establishment. And the reason for this establishment is mainly due to his hardwork. Amul started by Kurien later became the India\'s largest milk making factory. ', 17, 31, 35, '1349102440', '1349103380'),
(299, 20, 115, 'As all peoples have different childhood experiences i also had some good and bad memories in my life. In my childhood i was mostly attached with my father. My father was very much passioned in Badminton. So he wanted me also playing badminton. So i was forced to get up early in the morning and do exercises and to train badminton with him. After that i was send to coaching where the badminton was trained by some professionals. But in the early school days i was used to play football more than badminton. But still i continued to play badminton and used to go more coaching classes in the vacations. And once i was a junior champion in Kottayam. This was one of my most favourable moment in my child hood days. But my favourite childhood moment were in the Onam vacations. Which i used to go my native place Kollam once in a year and enjoy the holiday with my cousins and having Onam sadyas with them. ', 17, 31, 35, '1349103380', '1349104892'),
(300, 1, 101, 'Hello sds', 18, 28, 37, '1349185468', '1349185528'),
(301, 2, 96, 'xcxcxc', 18, 28, 37, '1349185528', '1349185533'),
(302, 3, 97, 'xdc dxdf ddf dfdf', 18, 28, 37, '1349185533', '1349185543'),
(303, 4, 95, 'dffdfdfdfdf dfdf', 18, 28, 37, '1349185543', '1349185565'),
(304, 5, 100, 'dfdfdf edf dfdf', 18, 28, 37, '1349185565', '1349185575'),
(305, 6, 70, 'dfecdf dfdf', 18, 28, 37, '1349185575', '1349185589'),
(306, 7, 98, 'fggfrgfg', 18, 28, 37, '1349185589', '1349185595'),
(307, 8, 79, 'fggfggfgf', 18, 28, 37, '1349185595', '1349185601'),
(308, 9, 83, 'fgftgrtvfg', 18, 28, 37, '1349185602', '1349185608'),
(309, 10, 85, 'fff        fgvfg gfgdfgdgfgg', 18, 28, 37, '1349185608', '1349185617'),
(310, 11, 81, 'fgfgfgfgf', 18, 28, 37, '1349185617', '1349185622'),
(311, 12, 88, 'fgfgfgfg', 18, 28, 37, '1349185622', '1349185627'),
(312, 13, 69, 'fgfgfgf', 18, 28, 37, '1349185627', '1349185631'),
(313, 14, 65, 'fgfgfg', 18, 28, 37, '1349185631', '1349185636'),
(314, 15, 78, 'tytytfgfgfggsdgg', 18, 28, 37, '1349185636', '1349185643'),
(315, 16, 45, 'fgfgdfgfgdg', 18, 28, 37, '1349185643', '1349185647'),
(316, 17, 63, 'fdgdfgdfg', 18, 28, 37, '1349185647', '1349185651'),
(317, 18, 66, 'fgfg fgdgd dfgdfgdfg', 18, 28, 37, '1349185652', '1349185659'),
(318, 19, 73, '0', 18, 28, 37, '', '1349850608'),
(319, 20, 68, 'init 0 - shutdown\ninit 1 - single user mode\ninit 2 - multi usermode without network\ninit 3 - full multi usermode\ninit 4 - user definable\ninit 5 - multi usermode with grafics\ninit 6 - reboot\n', 18, 28, 37, '1349185712', '1349861984'),
(320, 1, 179, 'It is the last test of the computer product prior to its commercial release.', 17, 41, 38, '1349429309', '1349429443'),
(321, 2, 180, 'CGI stands for common gate interface. PHP can be complied as cgi or as dso.', 17, 41, 38, '1349429443', '1349429541'),
(322, 3, 181, 'CMOS chip in the mother board.', 17, 41, 38, '1349429542', '1349429612'),
(323, 4, 26, 'extensible markup language. ', 17, 41, 38, '1349429614', '1349429646'),
(324, 5, 3, 'Firewall is mechanism by which we can prevent or protect our severs/computers from external access. ', 17, 41, 38, '1349429646', '1349429704'),
(325, 6, 10, '8', 17, 41, 38, '1349429704', '1349429845'),
(326, 7, 60, '151', 17, 41, 38, '1349429845', '1349429908'),
(327, 8, 136, '260', 17, 41, 38, '1349429909', '1349429987'),
(328, 9, 11, '13', 17, 41, 38, '1349429987', '1349430018'),
(329, 10, 159, '372', 17, 41, 38, '1349430018', '1349430047'),
(330, 11, 51, '116', 17, 41, 38, '1349430047', '1349430093'),
(331, 12, 155, '356', 17, 41, 38, '1349430093', '1349430131'),
(332, 13, 154, '375', 17, 41, 38, '1349430131', '1349430206'),
(333, 14, 138, '271', 17, 41, 38, '1349430206', '1349430249'),
(334, 15, 30, '62', 17, 41, 38, '1349430250', '1349430297'),
(335, 16, 162, '404', 17, 41, 38, '1349430297', '1349430320'),
(336, 17, 105, '224', 17, 41, 38, '1349430320', '1349430396'),
(337, 18, 118, '170', 17, 41, 38, '1349430396', '1349430471'),
(338, 19, 113, 'KOndotti: This passage deals with the custom made Cruiser bike made by Mr. Praveen Nair who is living in Palakakd. He took 2 years for this bike to come true. He spent 3.5 lacs to build this bike. And he made this dream come true with the help of his friend Jaleel. The specifications of this bike are really amazing. It has 1200cc Honda updown fork shock absorber, harley davidson hydraulic mass cylinder with a 4 cylinder caliber unit and the bike heights upto 1.75 meter.\nHe holds a Bachelor degree from Madras applied photography. He designed this bike in his own colour lab and he is claims that this bike can travel in a speed of 15-170km in highways without any issue. It has two front and one back disc breaks. He used an old standard 2000 model bullet to make his own harley davidson. It is also gives a mileage of 40km. Praveen says that he is crazy about bikes from the childhood and this is the inspiration behind this achievement. ', 17, 41, 38, '1349430471', '1349431321'),
(339, 20, 116, 'The most happiest moment in my life was when I got my Bike as a Birthday gift from my parents. It was a pretty old birthday evening for me,but suddenly my father rides in a new bike to our home. I wondered by seeing that it was a new registered full black Yamaha FZ 16. My father came to me and gave me the keys of the bike and told me that this is your birthday gift from us. I was really happy at that moment and I don\'t know how can I explain that. I start the bike and and took my first ride to my church. Until now this bike is my companion. I love to ride my bike so much. ', 17, 41, 38, '1349431321', '1349431808'),
(340, 1, 24, 'smtp', 17, 39, 40, '1349430528', '1349430554'),
(341, 2, 6, 'false', 17, 39, 40, '1349430555', '1349430601'),
(342, 3, 177, 'Backing up is the process of archiving a valuable data .It is important because  in the event of a machine crash ,  the backed up data can be restored and can be used .Backups can be done either to a local machine or to a remote location', 17, 39, 40, '1349430601', '1349430796'),
(343, 4, 26, 'Extensible Markup Language', 17, 39, 40, '1349430796', '1349430854'),
(344, 5, 178, 'pseudocode consist of simple english sentence like description of a computer program .', 17, 39, 40, '1349430854', '1349431090'),
(345, 6, 29, '56', 17, 39, 40, '1349431091', '1349431159'),
(346, 7, 61, '152', 17, 39, 40, '1349431159', '1349431222'),
(347, 8, 154, '375', 17, 39, 40, '1349431223', '1349431248'),
(348, 9, 18, '42', 17, 39, 40, '1349431248', '1349431422'),
(349, 10, 55, '138', 17, 39, 40, '1349431423', '1349431462'),
(350, 11, 36, '86', 17, 39, 40, '1349431462', '1349431557'),
(351, 12, 31, '65', 17, 39, 40, '1349431557', '1349431650'),
(352, 13, 131, '235', 17, 39, 40, '1349431650', '1349431747'),
(353, 14, 158, '368', 17, 39, 40, '1349431748', '1349431814'),
(354, 15, 37, '93', 17, 39, 40, '1349435985', '1349431873'),
(355, 16, 167, '440', 17, 39, 40, '1349436133', '1349436146'),
(356, 17, 161, '397', 17, 39, 40, '1349436147', '1349436152'),
(357, 18, 124, '200', 17, 39, 40, '1349436152', '1349436170'),
(358, 19, 109, 'dfdfdfdfdfdfdfdfdfdf', 17, 39, 40, '1349436170', '1349867888'),
(359, 20, 116, 'The happiest moment in my life is when I got my first job. \n   When I did post graduation I use to bunk classes and hang around with my friends. During first year I had two backlogs and most of my close friends didn\'t get through. Final year most of my friends cleared the backpapers and completed post graduation. I was really upset for wasting valuable time with my friends. My classmates made fun of me when I didnt complete the course. After course completion my teacher consoled me and advised me to apply for a job. She said some companies are recruiting even if there are backlogs. She told me to prepare well and apply for all job openings. I completed post graduation during financial crisis and and there were only few openings in most of the companies. Daily parents were shouting at me for wasting time and their money. One day my teacher asked me to attend an walk-in interview that was going on in Ernakulam. I had a negative attitude, I thought I wont get this job. I went for the Interview and the interviewer started shooting out questions. The first question was \"what issue did u recently fixed in the PC\". I said my PC was infected with trojans and I told him steps I followed to fix it. He was impressed after hearing my answer. It was an interview for an antivirus company and I never knew it. I was shortlisted and I got a call from them next day. Parents and I were so happy after hearing this news. \nI had backlogs and I was the guy who was placed before anyone in my class.\nI\'m still thankful to my teacher who helped me. I got salary hike when I went to other companies but I will never forget my first job. First comes only once and it is the happiest moment in my life that I still remember.', 17, 39, 40, '', '1349888410'),
(360, 1, 44, '104', 17, 40, 39, '1349456304', '1349456430'),
(361, 2, 176, 'ghghgh', 17, 40, 39, '1349456430', '1350381291'),
(362, 3, 24, 'SMTP', 17, 40, 39, '', '1350479971'),
(363, 4, 26, 'EXtensible Markup Language', 17, 40, 39, '', '1350480360'),
(364, 5, 180, 'common gateway interface.it is a standard method for web server software to delegate the generation of web content', 17, 40, 39, '', '1350484422'),
(365, 6, 10, '6', 17, 40, 39, '', '1350487747'),
(366, 7, 60, '0', 17, 40, 39, '', '1350497959'),
(367, 8, 142, '291', 17, 40, 39, '', '1350498436'),
(368, 9, 137, '0', 17, 40, 39, '', '1350529489'),
(369, 10, 145, '305', 17, 40, 39, '', '1351272685'),
(370, 11, 32, '0', 17, 40, 39, '', '1351506985'),
(371, 12, 31, '0', 17, 40, 39, '', '1351507528'),
(372, 13, 143, '0', 17, 40, 39, '', '1351507670'),
(373, 14, 35, '0', 17, 40, 39, '', '1351507724'),
(374, 15, 33, '75', 17, 40, 39, '', '1351530396'),
(375, 16, 119, '175', 17, 40, 39, '1349456585', '1351531108'),
(376, 17, 163, '428', 17, 40, 39, '1349457200', '1349456738'),
(377, 18, 120, '181', 17, 40, 39, '1349457672', '1349457682'),
(378, 19, 110, 'India is committed to Nuclear safety\nNew delhi :  Starting off for South Korea President Manmohan singh ensured that India will take nuclear security measures. ', 17, 40, 39, '1349457682', '1349458118'),
(379, 20, 116, 'The happiest moment in my life is when I fell in love with a girl. It is the one of the days I still remember in my life.\n\nAfter completing graduation I was enrolled in a coed college. I had no girls as my friends till I did Post graduation. I met her on the first day in college and it was not love at first sight. She was sitting next to me in the class and she became on of my best friends after few days. I was really happy cuz I got a girl as my friend and for the first time. Days passed on and I started loving her and it was without my knowledge. Later on I told one of my classmates about her and she said she will keep this as a secrecy. I felt bad for loving a classmate who see me as a friend so I changed my mind. I kept a distance from her and try to control my mind. While pursuing post graduation she was placed in infosys as a software engineer and I dont know why this news hurted me. Before leaving the college one of my classmates told her that I\'m in love with her. She tried her maximum to make me say that but I didn\'t utter any word. On her last day in college I said I liked u. she misunderstood, she thought I\'m trying to propose and she said she can only see me as a friend.  My friends started and collegemates started making fun of me. After this incident and after she left college I really started loving her. I got her contact number and started calling her everyday. She consoled me and tried to change my mind. One day I went to mangalore to meet her and she understood that I\'m mad in love with her. It took 8 months to make her fell in love with me. I tried to express maximum and it worked. \n\nThis is the happiest moment that happened in my life. Saddest part is that after a fight we are parted and we no longer contact each other. ', 17, 40, 39, '1349458118', '1349459806'),
(380, 1, 27, 'Web Server. Communication port is 80 by default', 17, 42, 41, '1349669021', '1349669068'),
(381, 2, 181, 'system-config-date', 17, 42, 41, '1349669068', '1349669092'),
(382, 3, 178, 'A form of interpreted language. It will convert in to binary form automatically when run.', 17, 42, 41, '1349669092', '1349669275'),
(383, 4, 171, 'service \'named\'.', 17, 42, 41, '1349669275', '1349669326'),
(384, 5, 42, 'File extension of compressed files in Linux.', 17, 42, 41, '1349669327', '1349669443'),
(385, 6, 60, '148', 17, 42, 41, '1349669443', '1349669492'),
(386, 7, 61, '152', 17, 42, 41, '1349669492', '1349669563'),
(387, 8, 53, '0', 17, 42, 41, '1349669563', '1349669573'),
(388, 9, 158, '365', 17, 42, 41, '1349669573', '1349669612'),
(389, 10, 14, '25', 17, 42, 41, '1349669612', '1349669646'),
(390, 11, 55, '138', 17, 42, 41, '1349669647', '1349669659'),
(391, 12, 17, '39', 17, 42, 41, '1349669660', '1349669677'),
(392, 13, 56, '144', 17, 42, 41, '1349669677', '1349669700'),
(393, 14, 34, '77', 17, 42, 41, '1349669701', '1349669721'),
(394, 15, 134, '250', 17, 42, 41, '1349669721', '1349669753'),
(395, 16, 122, '188', 17, 42, 41, '1349669753', '1349669793'),
(396, 17, 166, '421', 17, 42, 41, '1349669793', '1349669817'),
(397, 18, 163, '429', 17, 42, 41, '1349669817', '1349669839'),
(398, 19, 113, 'Mr. Praveen Nair from Thrippanachhi, Palakkad have designed a cruiser bike that have many features that a foreign cruiser bike have. \nHe altered a 2000 model standard bullet to prepare this wonderful cruiser bike. Many of the parts were imported from foreign countries.\nMr. Praveen Nair an Applied Photography Degree holder from Madras and a Photographer by profession designed this bike in his own colour lab. \nIt costed 3.5 lakhs to make this 200 kg bike. It was his passion towards cruiser bikes from his child hood that encouraged him for this adventerous job.\nHis friend Jaleel Karuvaangall supported him for thi venture. It took 2 years for the dream come true.', 17, 42, 41, '1349669839', '1349670714'),
(399, 20, 116, 'My happiest moment in life was when i came to know that, I got selected in LET(Lateral Entry Test) in 2003. I was so excited to study in a Engg College.', 17, 42, 41, '1349670714', '1349670863'),
(400, 1, 90, 'Hard disk drive', 18, 39, 44, '1349779647', '1349779713'),
(401, 2, 99, 'pwconv', 18, 39, 44, '1349779714', '1349779774'),
(402, 3, 45, '14 characters', 18, 39, 44, '1349779774', '1349779850'),
(403, 4, 63, 'Mosaic', 18, 39, 44, '1349779850', '1349779880'),
(404, 5, 65, 'Hyper Text Transfer Protocol', 18, 39, 44, '1349779880', '1349779905'),
(405, 6, 74, 'Locate uses a precompiled database to search but find dynamically search for a file .So locate is much faster but less acurrate', 18, 39, 44, '1349779905', '1349779983'),
(406, 7, 88, '/var/log/messages', 18, 39, 44, '1349779984', '1349780009'),
(407, 8, 80, 'Internet Corporation for Assigned Names and Numbers', 18, 39, 44, '1349780009', '1349780068'),
(408, 9, 68, '0 -halt \n1-singleusermode\n2-Multiuser\n3-Multiuser with networking\n4-unused \n5-Graphical multiusermode\n6-reboot', 18, 39, 44, '1349780068', '1349780178'),
(409, 10, 69, 'The boot process starts with the BIOS which detects and initialize h/w and determine devices to boot from and loads the GRUB .The GRUB load the initial RAM disk and executes the Kernel.The kernel detects h/w devices and load device drivers  and mounts the / as read only and calls init.Then init calls all other non kernel system process based on the run level defined.', 18, 39, 44, '1349780178', '1349780480'),
(410, 11, 96, 'CNAME is canonical name used to specify a domain name as an alias of another domain name . It is used to specify FTP and WWW for the same ip address of the domain in DNS \n', 18, 39, 44, '1349780480', '1349780710'),
(411, 12, 82, 'df -h', 18, 39, 44, '1349780711', '1349780910'),
(412, 13, 91, 'switched mode power supply ', 18, 39, 44, '1349780910', '1349780957'),
(413, 14, 79, 'Tux', 18, 39, 44, '1349780957', '1349780964'),
(414, 15, 94, 'original equipment manufacturer ', 18, 39, 44, '1349780964', '1349781045'),
(415, 16, 101, 'dmesg', 18, 39, 44, '1349781045', '1349781063'),
(416, 17, 95, 'crontab -u user1 -l', 18, 39, 44, '1349781063', '1349781143'),
(417, 18, 83, 'Yes , we can change using the Listen directive', 18, 39, 44, '1349781402', '1349781249'),
(418, 19, 100, 'root\n', 18, 39, 44, '1349781430', '1349781436'),
(419, 20, 98, 'By either using usermod -s or  editing /etc/passwd file', 18, 39, 44, '1349781436', '1349781473'),
(420, 1, 101, 'dmesg', 18, 42, 43, '1349845739', '1349845848'),
(421, 2, 70, '/\n/root\n/etc\n/boot\n/bin\n/sbin\n/dev\n/tmp\n/usr\n/home', 18, 42, 43, '1349845848', '1349846067'),
(422, 3, 91, 'Switched Mode Power supply', 18, 42, 43, '1349846067', '1349846147'),
(423, 4, 65, 'Hyper Text Transfer Protocol', 18, 42, 43, '1349846147', '1349846227'),
(424, 5, 104, 'iptables -L\niptables -F', 18, 42, 43, '1349846227', '1349846267'),
(425, 6, 69, 'As the first step the BIOS will tests the system,checks the peripherals. Then it looks for a drive to boot(floppy, CD-ROM or Hard Disk). The order of the drives used for booting is usually controlled by a particular BIOS setting. If the Linux is installed on a Hard Disk the BIOS will look for the MBR present in the first sector of the Hard Disk, loads its content in to memory, then passes control to it. MBR loads boot-loader which takes over the process. Once the boot-loader has receieved the correct instruction for the OS to start, it will find the necessary boot files and hands off control of the meachine to that OS', 18, 42, 43, '1349846267', '1349847259'),
(426, 7, 63, 'World Wide Web', 18, 42, 43, '1349847259', '1349847415'),
(427, 8, 93, '255.255.255.0', 18, 42, 43, '1349847415', '1349847513'),
(428, 9, 78, 'dfdfdfdf', 18, 42, 43, '', '1351749266'),
(429, 10, 83, NULL, 18, 42, 43, '', ''),
(430, 11, 96, NULL, 18, 42, 43, '', ''),
(431, 12, 81, NULL, 18, 42, 43, '', ''),
(432, 13, 79, NULL, 18, 42, 43, '', ''),
(433, 14, 103, NULL, 18, 42, 43, '', ''),
(434, 15, 100, NULL, 18, 42, 43, '', ''),
(435, 16, 173, NULL, 18, 42, 43, '', ''),
(436, 17, 95, NULL, 18, 42, 43, '', ''),
(437, 18, 45, NULL, 18, 42, 43, '', ''),
(438, 19, 84, NULL, 18, 42, 43, '1349850597', ''),
(439, 20, 67, './a.out', 18, 42, 43, '1349851717', ''),
(440, 1, 8, 'IP Address', 17, 43, 47, '1349850924', '1349850947'),
(441, 2, 180, 'Carrier grade linux - use in communications environments', 17, 43, 47, '1349850947', '1349851065'),
(442, 3, 41, 'Build in operation system', 17, 43, 47, '1349851065', '1349851139'),
(443, 4, 7, 'Phishing is the act of attempting to acquire information\n such as usernames, passwords, and credit card details etc.', 17, 43, 47, '1349851139', '1349851181'),
(444, 5, 6, 'False', 17, 43, 47, '1349851181', '1349851242'),
(445, 6, 28, '51', 17, 43, 47, '1349851242', '1349851273'),
(446, 7, 9, '3', 17, 43, 47, '1349851273', '1349851346'),
(447, 8, 33, '74', 17, 43, 47, '1349851346', '1349851429'),
(448, 9, 156, '360', 17, 43, 47, '1349851429', '1349851502'),
(449, 10, 14, '24', 17, 43, 47, '1349851502', '1349851565'),
(450, 11, 56, '141', 17, 43, 47, '1349851565', '1349851652'),
(451, 12, 36, '89', 17, 43, 47, '1349851652', '1349851748'),
(452, 13, 158, '368', 17, 43, 47, '1349851748', '1349851854'),
(453, 14, 34, '77', 17, 43, 47, '1349851854', '1349851948'),
(454, 15, 52, '122', 17, 43, 47, '1349851948', '1349852180'),
(455, 16, 163, '426', 17, 43, 47, '1349852180', '1349852269'),
(456, 17, 162, '403', 17, 43, 47, '1349852269', '1349852367'),
(457, 18, 166, '421', 17, 43, 47, '1349852367', '1349852417'),
(458, 19, 108, 'why these people are irresponsible ?\n\n', 17, 43, 47, '1349852418', '1349852757'),
(459, 20, 116, 'When i get a dream job, the moment i felt like happiest in my life\n and amazing. The moment is unforgettable', 17, 43, 47, '1349852757', '1349853175'),
(460, 1, 178, '', 17, 46, 49, '1349852866', '1349852902'),
(461, 2, 5, '', 17, 46, 49, '1349852903', '1349852906'),
(462, 3, 41, '', 17, 46, 49, '1349852906', '1349852907'),
(463, 4, 6, '', 17, 46, 49, '1349852908', '1349852911'),
(464, 5, 182, '', 17, 46, 49, '1349852911', '1349852914'),
(465, 6, 28, '0', 17, 46, 49, '1349852914', '1349852918'),
(466, 7, 9, '0', 17, 46, 49, '1349852918', '1349852921'),
(467, 8, 139, '0', 17, 46, 49, '1349852921', '1349852924'),
(468, 9, 12, '17', 17, 46, 49, '1349852924', '1349852937'),
(469, 10, 149, '328', 17, 46, 49, '1349852937', '1349852944'),
(470, 11, 13, '0', 17, 46, 49, '1349852943', '1349852946'),
(471, 12, 15, '0', 17, 46, 49, '1349852946', '1349852950'),
(472, 13, 34, '77', 17, 46, 49, '1349852950', '1349852969'),
(473, 14, 148, '323', 17, 46, 49, '1349852970', '1349853014'),
(474, 15, 154, '375', 17, 46, 49, '1349853014', '1349853067'),
(475, 16, 168, '445', 17, 46, 49, '1349853070', '1349853110'),
(476, 17, 118, '171', 17, 46, 49, '1349853110', '1349853167'),
(477, 18, 120, NULL, 17, 46, 49, '', ''),
(478, 19, 108, NULL, 17, 46, 49, '', ''),
(479, 20, 114, NULL, 17, 46, 49, '1349853222', ''),
(480, 1, 26, 'rtrtr', 17, 28, 50, '1349854199', '1349854217'),
(481, 2, 44, 'dfrdf', 17, 28, 50, '1349854217', '1349854228'),
(482, 3, 182, 'dfdf', 17, 28, 50, '1349854228', '1349854231'),
(483, 4, 181, 'dfdf', 17, 28, 50, '1349854231', '1349854234'),
(484, 5, 42, 'dfdf', 17, 28, 50, '1349854234', '1349854240'),
(485, 6, 9, '2', 17, 28, 50, '1349854241', '1349854254'),
(486, 7, 60, '150', 17, 28, 50, '1349854254', '1349854264'),
(487, 8, 157, '362', 17, 28, 50, '1349854265', '1349854271'),
(488, 9, 37, NULL, 17, 28, 50, '1349854271', ''),
(489, 10, 56, NULL, 17, 28, 50, '', ''),
(490, 11, 36, NULL, 17, 28, 50, '', ''),
(491, 12, 35, NULL, 17, 28, 50, '', ''),
(492, 13, 51, NULL, 17, 28, 50, '', ''),
(493, 14, 135, NULL, 17, 28, 50, '', ''),
(494, 15, 52, NULL, 17, 28, 50, '', ''),
(495, 16, 168, NULL, 17, 28, 50, '', ''),
(496, 17, 167, NULL, 17, 28, 50, '', ''),
(497, 18, 166, NULL, 17, 28, 50, '', ''),
(498, 19, 108, NULL, 17, 28, 50, '', ''),
(499, 20, 114, NULL, 17, 28, 50, '1349854296', ''),
(500, 1, 86, 'tar cjf cprzd.tar.gz /home/user1 ', 20, 42, 52, '1349859677', '1349860051'),
(501, 2, 89, 'a) Point to the start of the line\nb) Cut the word behind the cursor position\nc) Point to the end of the line\nd) Delete backward from cursor position', 20, 42, 52, '1349860051', '1349860379'),
(502, 3, 173, 'x', 20, 42, 52, '1349860380', '1349860478'),
(503, 4, 84, 'creates shadow from /etc/passwd', 20, 42, 52, '1349860478', '1349860676'),
(504, 5, 103, 'When a domain name is entered in the browser, firstly it will look for corespondin g IP in the /etc/hosts file. If not available it will look in the /etc/resolv.conf file to get the DNS Server IP. Then it will contact the corresponding DNS server. If it is not available there also it will contact the next responsible DNS server.\nLike this way it will resolves the IP.\nResolving can take place in either iterative or recursive manner', 20, 42, 52, '1349860676', '1349861062'),
(505, 6, 70, '/\n/root\n/home\n/etc\n/boot\n/bin\n/sbin\n/dev\n/tmp\n/usr\n/mnt\n\n', 20, 42, 52, '1349861063', '1349861180'),
(506, 7, 66, 'Java Virtual Machine', 20, 42, 52, '1349861180', '1349861229'),
(507, 8, 77, 'Low Level Language', 20, 42, 52, '1349861229', '1349861274'),
(508, 9, 72, 'Each file has a inode entry in the inode table. Inode contains the information such as file modification time, permission and pointer to the data block assigned to it by the file system.\nls -li <filename> - shows the inode of file', 20, 42, 52, '1349861275', '1349861533'),
(509, 10, 45, '255', 20, 42, 52, '1349861533', '1349861614'),
(510, 11, 80, 'ICANN - Internet Corporation for Assigned Name and Numbers', 20, 42, 52, '1349861614', '1349861765'),
(511, 12, 79, 'penguin', 20, 42, 52, '1349861765', '1349861881'),
(512, 13, 91, 'Switched Mode Power supply', 20, 42, 52, '1349861881', '1349861908'),
(513, 14, 90, 'Hard Drive', 20, 42, 52, '1349861908', '1349861941'),
(514, 15, 81, 'Basic Input Output System', 20, 42, 52, '1349861942', '1349861982'),
(515, 16, 71, 'FTP- 20(data), 21(control)\nSMTP - 25\nSSH - 22\nHTTP - 80\nHTTPS - 443\nTelnet - 23\nDNS - 53', 20, 42, 52, '1349861982', '1349862224'),
(516, 17, 97, '1) Physical layer\n2) Data-link Layer\n3) Network Layer\n4) Transport Layer\n5) Session Layer\n6) Presentation Layer\n7) Application Layer', 20, 42, 52, '1349862224', '1349862341'),
(517, 18, 184, 'RAID 0\nRAID 1\nRAID 5\nRAID 10', 20, 42, 52, '1349862341', '1349862437'),
(518, 19, 78, 'Blind Carbon Copy', 20, 42, 52, '1349862437', '1349862489'),
(519, 20, 83, 'Yeah, we can change the port number of apache by editing the \'Listen\' directive in the configuration file /etc/httpd/conf/httpd.conf', 20, 42, 52, '1349862489', '1349862655'),
(520, 1, 5, '', 17, 47, 54, '1349860010', '1349860053'),
(521, 2, 179, '', 17, 47, 54, '1349860053', '1349860131'),
(522, 3, 182, 'intel pentium processor.', 17, 47, 54, '1349860132', '1349860212'),
(523, 4, 23, 'short system line', 17, 47, 54, '1349860212', '1349860314'),
(524, 5, 24, 'pop3 and smpn', 17, 47, 54, '1349860314', '1349860403'),
(525, 6, 29, '56', 17, 47, 54, '1349860403', '1349860455'),
(526, 7, 48, '204', 17, 47, 54, '1349860455', '1349860504'),
(527, 8, 33, '74', 17, 47, 54, '1349860504', '1349860543'),
(528, 9, 17, '38', 17, 47, 54, '1349860543', '1349860604'),
(529, 10, 147, '318', 17, 47, 54, '1349860604', '1349860720'),
(530, 11, 150, '331', 17, 47, 54, '1349860720', '1349860765'),
(531, 12, 153, '377', 17, 47, 54, '1349860766', '1349860850'),
(532, 13, 139, '278', 17, 47, 54, '1349860851', '1349860956'),
(533, 14, 136, '261', 17, 47, 54, '1349860956', '1349861001'),
(534, 15, 142, '293', 17, 47, 54, '1349861001', '1349861080'),
(535, 16, 166, '420', 17, 47, 54, '1349861080', '1349861147'),
(536, 17, 162, '405', 17, 47, 54, '1349861147', '1349861192'),
(537, 18, 118, '171', 17, 47, 54, '1349861192', '1349861248'),
(538, 19, 106, 'ONLY LAW CAN REMOVE THE WASTAGE DUMPIMG\n', 17, 47, 54, '1349861248', '1349861639'),
(539, 20, 114, 'My college life is very awesome.i never live this kind of life.i started my college life in 2007 in younus college of engg &tech kollam. it is one of the top college in our district.I got manegement seat in there.\n\nFirst day of my college life it is very difficult i\'am totaly nervous for ragging.after that day i feel good.1st whole me and my gang totaly scare  of seniors.after i complete my 1st year that is time to enjoy my college. i loved go every in the college.i loved my friends very much they are aseem sreenath etc.we completly enjoy our college.\n\nAt last the last year in my college.it\'s very sad day\'s at the end.in classroom canteen so sad.but we did not give up to that. we have maximum fun in there. we has college tour in banglore goa .that moment in life is the ever lasting in my life.\n\nAt last it\'s over the final day of my college life.I loved my college very well.........my memory remains ever in my life.', 17, 47, 54, '1349861639', '1349862829'),
(540, 1, 23, '', 17, 48, 53, '1349860122', '1349860153'),
(541, 2, 178, '', 17, 48, 53, '1349860153', '1349860206'),
(542, 3, 3, 'it is a security system.it controlls the files or objects get or passes out to the system', 17, 48, 53, '1349860207', '1349860412'),
(543, 4, 27, 'it is a web server, configuration file is /etc/http/conf/httpd.conf', 17, 48, 53, '1349860412', '1349860476'),
(544, 5, 170, '3\n', 17, 48, 53, '1349860476', '1349860515'),
(545, 6, 10, '8', 17, 48, 53, '1349860514', '1349860600'),
(546, 7, 61, '152', 17, 48, 53, '1349860600', '1349860641'),
(547, 8, 35, '80', 17, 48, 53, '1349860641', '1349860695'),
(548, 9, 11, '11', 17, 48, 53, '1349860695', '1349860760'),
(549, 10, 133, '245', 17, 48, 53, '1349860760', '1349860820'),
(550, 11, 51, '116', 17, 48, 53, '1349860820', '1349860852'),
(551, 12, 34, '76', 17, 48, 53, '1349860853', '1349860878'),
(552, 13, 151, '335', 17, 48, 53, '1349860878', '1349860949'),
(553, 14, 141, '286', 17, 48, 53, '1349860949', '1349860989'),
(554, 15, 53, '214', 17, 48, 53, '1349860989', '1349861040'),
(555, 16, 160, '399', 17, 48, 53, '1349861040', '1349861109'),
(556, 17, 161, '396', 17, 48, 53, '1349861109', '1349861242'),
(557, 18, 165, '430', 17, 48, 53, '1349861242', '1349861288'),
(558, 19, 108, NULL, 17, 48, 53, '1349861288', ''),
(559, 20, 116, NULL, 17, 48, 53, '1349861802', ''),
(560, 1, 179, 'Trial testing period', 17, 49, 55, '1349866232', '1349866297'),
(561, 2, 41, 'Basic INPUT Output system', 17, 49, 55, '1349866297', '1349866322'),
(562, 3, 171, 'DNS', 17, 49, 55, '1349866322', '1349866329'),
(563, 4, 177, 'For restoring data ', 17, 49, 55, '1349866329', '1349866347'),
(564, 5, 44, '104', 17, 49, 55, '1349866348', '1349866353'),
(565, 6, 28, '51', 17, 49, 55, '1349866353', '1349866379'),
(566, 7, 9, '5', 17, 49, 55, '1349866379', '1349866384'),
(567, 8, 142, '290', 17, 49, 55, '1349866384', '1349866395'),
(568, 9, 143, '295', 17, 49, 55, '1349866395', '1349866408'),
(569, 10, 13, '22', 17, 49, 55, '1349866406', '1349866414'),
(570, 11, 56, '140', 17, 49, 55, '1349866414', '1349866430'),
(571, 12, 12, '18', 17, 49, 55, '1349866430', '1349866438'),
(572, 13, 144, '303', 17, 49, 55, '1349866438', '1349866454'),
(573, 14, 54, '130', 17, 49, 55, '1349866454', '1349866460'),
(574, 15, 155, '356', 17, 49, 55, '1349866461', '1349866474'),
(575, 16, 117, '164', 17, 49, 55, '1349866477', '1349866485'),
(576, 17, 121, '183', 17, 49, 55, '1349866485', '1349866492'),
(577, 18, 167, '440', 17, 49, 55, '1349866492', '1349866500'),
(578, 19, 108, NULL, 17, 49, 55, '1349867773', ''),
(579, 20, 115, 'sdsd', 17, 49, 55, '1349867888', '1349867897'),
(580, 1, 64, 'Cookie', 18, 40, 48, '1349885655', '1349885740'),
(581, 2, 67, 'chmod a+x a.out\n./a.out', 18, 40, 48, '1349885741', '1349885919'),
(582, 3, 45, '256 characters', 18, 40, 48, '1349885919', '1349886018'),
(583, 4, 91, 'switched mode power supply', 18, 40, 48, '1349886019', '1349886038'),
(584, 5, 89, 'ctrl+A - go to starting of line.\nctrl+e - go to end of line\nctrl+u - erase full line\nctrl+w - erase one word', 18, 40, 48, '1349886039', '1349886261'),
(585, 6, 66, 'Java virtual machine', 18, 40, 48, '1349886261', '1349886294'),
(586, 7, 95, '#crontab -u user1 -l', 18, 40, 48, '1349886294', '1349886326'),
(587, 8, 98, NULL, 18, 40, 48, '1349886326', ''),
(588, 9, 79, NULL, 18, 40, 48, '', ''),
(589, 10, 101, NULL, 18, 40, 48, '', ''),
(590, 11, 87, NULL, 18, 40, 48, '', ''),
(591, 12, 86, NULL, 18, 40, 48, '', ''),
(592, 13, 72, NULL, 18, 40, 48, '', ''),
(593, 14, 77, NULL, 18, 40, 48, '', ''),
(594, 15, 71, NULL, 18, 40, 48, '', ''),
(595, 16, 92, NULL, 18, 40, 48, '', ''),
(596, 17, 63, NULL, 18, 40, 48, '', ''),
(597, 18, 69, NULL, 18, 40, 48, '', ''),
(598, 19, 78, NULL, 18, 40, 48, '', ''),
(599, 20, 184, NULL, 18, 40, 48, '1349886747', ''),
(600, 1, 218, '0', 20, 51, 56, '1350380846', '1350380858'),
(601, 2, 192, '0', 20, 51, 56, '1350381277', '1350380862'),
(602, 3, 212, '0', 20, 51, 56, '1350381292', '1350381321'),
(603, 4, 186, '0', 20, 51, 56, '1350381321', '1350381324'),
(604, 5, 202, '0', 20, 51, 56, '1350381324', '1350381328'),
(605, 6, 193, '0', 20, 51, 56, '1350381328', '1350381330'),
(606, 7, 196, '0', 20, 51, 56, '1350381330', '1350381333'),
(607, 8, 195, '0', 20, 51, 56, '1350381333', '1350381335'),
(608, 9, 198, '0', 20, 51, 56, '1350381335', '1350381337'),
(609, 10, 219, '0', 20, 51, 56, '1350381337', '1350381339'),
(610, 11, 74, 'gggh', 20, 51, 56, '1350381339', '1350381344'),
(611, 12, 68, 'ggh', 20, 51, 56, '1350381344', '1350381349'),
(612, 13, 84, 'gh', 20, 51, 56, '1350381349', '1350381351'),
(613, 14, 82, 'gh', 20, 51, 56, '1350381351', '1350381355'),
(614, 15, 69, 'gh', 20, 51, 56, '1350381355', '1350381358'),
(615, 16, 63, 'gh', 20, 51, 56, '1350381358', '1350381361'),
(616, 17, 97, 'ggg', 20, 51, 56, '1350381361', '1350381364'),
(617, 18, 98, 'ggg', 20, 51, 56, '1350381364', '1350381367'),
(618, 19, 66, 'ggg', 20, 51, 56, '1350381367', '1350381370'),
(619, 20, 173, 'gg', 20, 51, 56, '1350381370', '1350381373'),
(620, 21, 88, 'ggg', 20, 51, 56, '1350381373', '1350381376'),
(621, 22, 72, 'gggg', 20, 51, 56, '1350381376', '1350381379'),
(622, 23, 85, 'ggg', 20, 51, 56, '1350381379', '1350381382'),
(623, 24, 79, 'gggg', 20, 51, 56, '1350381382', '1350381385'),
(624, 25, 76, '', 20, 51, 56, '1350381385', '1350381387'),
(625, 26, 86, 'gghgh', 20, 51, 56, '1350381387', '1350381391'),
(626, 27, 70, 'ghgh', 20, 51, 56, '1350381391', '1350381394'),
(627, 28, 93, 'ghg', 20, 51, 56, '1350381394', '1350381396'),
(628, 29, 95, 'ghgh', 20, 51, 56, '1350381396', '1350381400'),
(629, 30, 71, 'ghgh', 20, 51, 56, '1350381400', '1350381403'),
(630, 1, 188, '836', 20, 55, 57, '1350467812', '1350467826'),
(631, 2, 192, '813', 20, 55, 57, '1350467826', '1350467834'),
(632, 3, 216, '679', 20, 55, 57, '1350467834', '1350467845'),
(633, 4, 195, '791', 20, 55, 57, '1350467846', '1350467852'),
(634, 5, 205, '735', 20, 55, 57, '1350467853', '1350467863'),
(635, 6, 203, '755', 20, 55, 57, '1350467863', '1350467885'),
(636, 7, 201, '766', 20, 55, 57, '1350467885', '1350467894'),
(637, 8, 211, '753', 20, 55, 57, '1350467894', '1350467916'),
(638, 9, 189, '833', 20, 55, 57, '1350467916', '1350467923'),
(639, 10, 210, '712', 20, 55, 57, '1350467924', '1350467932'),
(640, 11, 89, 'ttt', 20, 55, 57, '1350467933', '1350467941'),
(641, 12, 82, 'sty', 20, 55, 57, '1350467941', '1350467948'),
(642, 13, 85, 'tyt', 20, 55, 57, '1350467948', '1350467956'),
(643, 14, 173, 'x', 20, 55, 57, '1350467956', '1350467964'),
(644, 15, 96, 'yt', 20, 55, 57, '1350467965', '1350467977'),
(645, 16, 86, 'retrt', 20, 55, 57, '1350467977', '1350467984'),
(646, 17, 90, 'Hard disk drive', 20, 55, 57, '1350467985', '1350468066'),
(647, 18, 72, 'An inode is an entry in a disk table that contains information about a file such as its owner, size, and last access date. ', 20, 55, 57, '1350468066', '1350468104'),
(648, 19, 83, 'yes', 20, 55, 57, '1350468104', '1350468113'),
(649, 20, 63, 'IE', 20, 55, 57, '1350468114', '1350468120'),
(650, 21, 95, 'DDDF', 20, 55, 57, '1350468120', '1350468128'),
(651, 22, 71, 'gfgfg', 20, 55, 57, '1350468128', '1350468132'),
(652, 23, 78, 'Blind carbon copy', 20, 55, 57, '1350468132', '1350468148'),
(653, 24, 77, 'Assembly language', 20, 55, 57, '1350468148', '1350468161'),
(654, 25, 99, 'shadow', 20, 55, 57, '1350468162', '1350468177'),
(655, 26, 65, 'Hyper text transfer protocol', 20, 55, 57, '1350468177', '1350468192'),
(656, 27, 87, 'sdsds', 20, 55, 57, '1350468193', '1350468197'),
(657, 28, 67, 'fdf', 20, 55, 57, '1350468197', '1350468205'),
(658, 29, 70, 'dsfd', 20, 55, 57, '1350468206', '1350468210'),
(659, 30, 68, 'djfhdf', 20, 55, 57, '1350468210', '1350468253');
INSERT INTO `answers` (`answer_id`, `serial`, `question_id`, `answer`, `exam_id`, `user_id`, `assigned_exam_id`, `answer_start`, `answer_end`) VALUES
(660, 1, 178, 'It\'s a readable description of what a computer algorithms must do.', 17, 52, 60, '1350479313', '1350479451'),
(661, 2, 25, 'EEPROM', 17, 52, 60, '1350479451', '1350479520'),
(662, 3, 7, 'Phishing is the act of attempting to acquire information such as usernames, passwords, and credit card details', 17, 52, 60, '1350479952', '1350479576'),
(663, 4, 179, 'It\'s a form of external user acceptance testing', 17, 52, 60, '1350480334', '1350479991'),
(664, 5, 170, '4', 17, 52, 60, '1350480360', '1350480365'),
(665, 6, 48, '206', 17, 52, 60, '1350480366', '1350480370'),
(666, 7, 47, '210', 17, 52, 60, '1350480370', '1350480375'),
(667, 8, 151, '336', 17, 52, 60, '1350498424', '1350480385'),
(668, 9, 155, '354', 17, 52, 60, '1350498436', '1350498452'),
(669, 10, 138, '272', 17, 52, 60, '1350498453', '1350498461'),
(670, 11, 135, '255', 17, 52, 60, '1350498460', '1350498469'),
(671, 12, 139, '276', 17, 52, 60, '1350498470', '1350498493'),
(672, 13, 159, '372', 17, 52, 60, '1350498494', '1350498503'),
(673, 14, 142, '292', 17, 52, 60, '1350498504', '1350498512'),
(674, 15, 156, '360', 17, 52, 60, '1350498513', '1350498522'),
(675, 16, 160, '399', 17, 52, 60, '1350498522', '1350498538'),
(676, 17, 163, '427', 17, 52, 60, '1350498538', '1350498551'),
(677, 18, 165, '433', 17, 52, 60, '1350498551', '1350498561'),
(678, 19, 111, '', 17, 52, 60, '1350498562', '1350498620'),
(679, 20, 115, '', 17, 52, 60, '1350498621', '1350498630'),
(680, 1, 178, 'is the informal high level description of the opereating principle of the computer program', 17, 53, 59, '1350483691', '1350483829'),
(681, 2, 179, NULL, 17, 53, 59, '1350483830', ''),
(682, 3, 180, NULL, 17, 53, 59, '', ''),
(683, 4, 169, NULL, 17, 53, 59, '', ''),
(684, 5, 5, NULL, 17, 53, 59, '1350484255', ''),
(685, 6, 60, '150', 17, 53, 59, '1350487918', '1350484495'),
(686, 7, 47, '207', 17, 53, 59, '1350487748', '1350487757'),
(687, 8, 35, '82', 17, 53, 59, '1350487757', '1350487766'),
(688, 9, 132, '242', 17, 53, 59, '1350487767', '1350487775'),
(689, 10, 142, '290', 17, 53, 59, '1350487775', '1350487793'),
(690, 11, 141, '0', 17, 53, 59, '1350487793', '1350487797'),
(691, 12, 54, '130', 17, 53, 59, '1350487798', '1350487809'),
(692, 13, 143, '297', 17, 53, 59, '1350487810', '1350485012'),
(693, 14, 31, '67', 17, 53, 59, '1350485012', '1350485058'),
(694, 15, 30, '560', 17, 53, 59, '1350485058', '1350485088'),
(695, 16, 166, '419', 17, 53, 59, '1350485088', '1350485174'),
(696, 17, 121, '183', 17, 53, 59, '1350485175', '1350485209'),
(697, 18, 119, '176', 17, 53, 59, '1350485210', '1350485267'),
(698, 19, 108, NULL, 17, 53, 59, '1350485268', ''),
(699, 20, 115, NULL, 17, 53, 59, '', ''),
(700, 1, 23, 'Secure Socket Layer', 17, 54, 58, '1350492766', '1350492849'),
(701, 2, 27, 'Its a linux based web server application.This allows the users to access to the website and by  configuring apache the accesibility to the site can be controlled.', 17, 54, 58, '1350492849', '1350493388'),
(702, 3, 42, 'Its a file extenion which denotes the BZIP compressed Tar archive file.', 17, 54, 58, '1350493388', '1350493565'),
(703, 4, 24, 'SMTP : Simple Mail Transfer Protocol', 17, 54, 58, '1350493565', '1350493686'),
(704, 5, 43, '<img> tag is used for inserting an image.', 17, 54, 58, '1350493687', '1350493951'),
(705, 6, 9, '5', 17, 54, 58, '1350493951', '1350494573'),
(706, 7, 28, '50', 17, 54, 58, '1350497934', '1350494693'),
(707, 8, 51, '0', 17, 54, 58, '1350497960', '1350497964'),
(708, 9, 154, '0', 17, 54, 58, '1351749254', '1350497966'),
(709, 10, 150, '329', 17, 54, 58, '1351749266', '1351749270'),
(710, 11, 138, '270', 17, 54, 58, '1351749270', '1351749277'),
(711, 12, 132, '240', 17, 54, 58, '1351749276', '1351749280'),
(712, 13, 144, '299', 17, 54, 58, '1351749280', '1351749284'),
(713, 14, 131, '235', 17, 54, 58, '1351749284', '1351749288'),
(714, 15, 143, '298', 17, 54, 58, '1351749288', '1351749291'),
(715, 16, 161, '396', 17, 54, 58, '1351749291', '1351749294'),
(716, 17, 168, '443', 17, 54, 58, '1351749294', '1351749297'),
(717, 18, 105, '226', 17, 54, 58, '1351749297', '1351749300'),
(718, 19, 106, 'klKLAAAAAA kleee kleee', 17, 54, 58, '1351749300', '1351749313'),
(719, 20, 115, 'uvvaa uvvaa', 17, 54, 58, '1351749314', '1351749320'),
(720, 1, 179, 'it is a test for testing the external acceptance of a software', 17, 50, 61, '1350660526', '1350660620'),
(721, 2, 25, 'ROM on the motherboard', 17, 50, 61, '1350660620', '1350660654'),
(722, 3, 178, 'description of a computer program', 17, 50, 61, '1350660654', '1350660719'),
(723, 4, 44, '104', 17, 50, 61, '1350660720', '1350660795'),
(724, 5, 5, 'analog data', 17, 50, 61, '1350660795', '1350660889'),
(725, 6, 60, '150', 17, 50, 61, '1350660890', '1350660931'),
(726, 7, 61, '152', 17, 50, 61, '1350660931', '1350661008'),
(727, 8, 139, '278', 17, 50, 61, '1350661008', '1350661123'),
(728, 9, 35, '80', 17, 50, 61, '1350661123', '1350661205'),
(729, 10, 31, '64', 17, 50, 61, '1350661205', '1350661305'),
(730, 11, 159, '372', 17, 50, 61, '1350661305', '1350661362'),
(731, 12, 54, '130', 17, 50, 61, '1350661362', '1350661387'),
(732, 13, 11, '13', 17, 50, 61, '1350661387', '1350661412'),
(733, 14, 140, '280', 17, 50, 61, '1350661412', '1350661456'),
(734, 15, 132, '239', 17, 50, 61, '1350661456', '1350661518'),
(735, 16, 117, '166', 17, 50, 61, '1350661519', '1350661610'),
(736, 17, 123, '193', 17, 50, 61, '1350661611', '1350661735'),
(737, 18, 166, '419', 17, 50, 61, '1350661736', '1350661812'),
(738, 19, 112, 'KERALA ALSO CHANGES\n\nIts not late to become some of kerala villages like northern towns. Its already started to write the names of places in Hindi in bus. Its available, hotels serving northern foods and medical stores with the name boards in hindi. Perumbaavoor town is now almost like a northern town in sundays and nights.\n\nThe northern laboureres spend most of their earning itself in kerala. Mobile phone is their on of the weekness. Their main hobby is to hear the songs in their mobiles. The mobile shops are opened only for north indian laboureres even in sundays. It\'s become a habbit to walk and through beaches , shops on their holidays. There is their presence in \'beverages queue\' too. Railway stations, post offices, theaters which are playing hindi films are the other places which they reach. Odiya and Bengali film are also come in play in Perumbaavvoor. It also started a school which teaches Bengaali.\n\nThe southern families and colonies are developing in the brick factories of  Budhanoor and Mannar.', 17, 50, 61, '1350661812', '1350663310'),
(739, 20, 116, 'It was really a shocking news for me that to hear that my father was a cancer patient. actually it was a wrong prediction from a local hospital which is near to me.\n My family was an ordinary one. My family consists of my father , mother and three children includes me. My father is a farmer. He is the back bone of our family. He is lovable. But he was a chain smoker. He used to smoke up to  two to three packets daily. actually he did want to stop smoking. But he failed in it.\n\n Two years ago he did start to cough unexpectedly even was healthy. First we did\'nt mind it . since there was no cure we decided to consult a doctor in our town. After the checkups he told that it might be the symptoms of cancer and it will be more better to take him to a better hospital for further checkups. This news stroke us.  \n\n On the nearest day we took him to the Medical trust hospital. I still remember that seen that my mom and younger brother were crying without stop. We had been  praying for allthose days. Two days after the admission the doctor did check up him and he said us to wait for the result. I think it was the longest day in my life. We waited with floating eyes. Finally the result has come.. It was really a pleasant result for us that my father had no any symptoms of cancer. It was an ordinary cough. At that time we had no words to express our pleasure.  Still my mother beliefs that it was an miracle  of God. Fortunately because of that incident father was really shocked and he did stop smoking. It doubled my happiness. Thank God.', 17, 50, 61, '1350663310', '1350665503'),
(740, 1, 200, '771', 20, 54, 65, '1350661849', '1350661877'),
(741, 2, 210, '712', 20, 54, 65, '1350661877', '1350661896'),
(742, 3, 215, '684', 20, 54, 65, '1350661896', '1350661912'),
(743, 4, 197, '782', 20, 54, 65, '1350661912', '1350661951'),
(744, 5, 212, '0', 20, 54, 65, '1350661952', '1350661976'),
(745, 6, 221, '659', 20, 54, 65, '1350661976', '1350662039'),
(746, 7, 187, '0', 20, 54, 65, '1350662039', '1350662071'),
(747, 8, 192, '813', 20, 54, 65, '1350662071', '1350662118'),
(748, 9, 217, '670', 20, 54, 65, '1350662118', '1350662131'),
(749, 10, 205, '739', 20, 54, 65, '1350662131', '1350662285'),
(750, 11, 103, 'DOMAIN NAMING SYSTEM abbreviated as DNS.This server works similar to a telephone diectory,where the names that we search are equivalent to a telephone number.In the case of system the URL(UNIVERSAL RESOURCE LINK)are converted to a particular ip(internet protocol)address and the vice-versa also takes place.Initially the search start with the root server(. server).Then the correponding names are searched from the reverse direction of url.', 20, 54, 65, '1350662285', '1350662838'),
(751, 12, 173, 'x command is used with vi editor for deleting a single character.', 20, 54, 65, '1350662838', '1350663062'),
(752, 13, 95, 'crontab -u user1 -l', 20, 54, 65, '1350663062', '1350663438'),
(753, 14, 83, 'yes.vim /etc/httpd/conf/httpd.conf.there will be Listen which lists the ip address and port number,by editing this we can change the port number.\n', 20, 54, 65, '1350663438', '1350663715'),
(754, 15, 67, './a.out', 20, 54, 65, '1350663715', '1350663808'),
(755, 16, 68, '0=halt\n1=single-user mode\n2=multi-user mode\n3=multi-user mode with networking\n4=not used\n5=GUI\n6=reboot', 20, 54, 65, '1350663808', '1350663939'),
(756, 17, 76, 'httpd -l', 20, 54, 65, '1350663939', '1350664007'),
(757, 18, 93, '255.255.255.0', 20, 54, 65, '1350664007', '1350664046'),
(758, 19, 92, 'RJ-11 is used', 20, 54, 65, '1350664046', '1350664126'),
(759, 20, 100, 'root account', 20, 54, 65, '1350664126', '1350664166'),
(760, 21, 82, 'df -h\n\n', 20, 54, 65, '1350664166', '1350664239'),
(761, 22, 62, 'computer virus', 20, 54, 65, '1350664239', '1350664351'),
(762, 23, 91, 'SWITCHED MODE POWER SUPPLY', 20, 54, 65, '1350664351', '1350664384'),
(763, 24, 101, 'dmesg', 20, 54, 65, '1350664385', '1350664416'),
(764, 25, 94, 'OEM :Orginal Equipment Manufacturer\nOR\nOEM :Oracle Enterprise Manager', 20, 54, 65, '1350664416', '1350664536'),
(765, 26, 99, 'By default every users password is stored in /etc/shadow ', 20, 54, 65, '1350664536', '1350664794'),
(766, 27, 96, 'Canonical name record.its used when two different ports are accessed in a single ip address.', 20, 54, 65, '1350664794', '1350664940'),
(767, 28, 77, 'Binary', 20, 54, 65, '1350664940', '1350665012'),
(768, 29, 69, 'Boot initialization\nBoot Loader\nKernel Initialization\ninit starts and enters desired run level', 20, 54, 65, '1350665012', '1350665091'),
(769, 30, 90, 'hard disk drive', 20, 54, 65, '1350665091', '1350665186'),
(770, 1, 27, 'apache is a webserver software', 17, 58, 63, '1350983833', '1350983882'),
(771, 2, 24, 'SMTP', 17, 58, 63, '1350983883', '1350983897'),
(772, 3, 23, 'SECURE SOCKET LAYER', 17, 58, 63, '1350983897', '1350983947'),
(773, 4, 180, 'common gateway interface', 17, 58, 63, '1350983947', '1350984017'),
(774, 5, 25, 'rom', 17, 58, 63, '1350984017', '1350984074'),
(775, 6, 61, '152', 17, 58, 63, '1350984074', '1350984139'),
(776, 7, 10, '8', 17, 58, 63, '1350984140', '1350984206'),
(777, 8, 159, '372', 17, 58, 63, '1350984206', '1350984255'),
(778, 9, 31, '66', 17, 58, 63, '1350984255', '1350984305'),
(779, 10, 131, '237', 17, 58, 63, '1350984305', '1350984341'),
(780, 11, 146, '311', 17, 58, 63, '1350984341', '1350984377'),
(781, 12, 147, '317', 17, 58, 63, '1350984377', '1350984411'),
(782, 13, 35, '81', 17, 58, 63, '1350984412', '1350984455'),
(783, 14, 145, '305', 17, 58, 63, '1350984455', '1350984534'),
(784, 15, 14, '24', 17, 58, 63, '1350984535', '1350984670'),
(785, 16, 160, '401', 17, 58, 63, '1350984671', '1350984726'),
(786, 17, 122, '0', 17, 58, 63, '1350984726', '1350984730'),
(787, 18, 163, '426', 17, 58, 63, '1350984731', '1350984771'),
(788, 19, 111, 'a sweetening story of winnings\n Two small milk diaries in a village of Gujarat namely anand was the starting of dr.Varghese kurian ,He is now a famous man in our country. It\'s a growth like dreaming and the full credit of that belonging to him. The Business grown again and again ,and now its is known as Amul,which the main brand product of our country.  The winning story of varghese kurian was accepted by the whole nation and he seemed like a national hero.\nAmul now have a business of totally 10000 crore and around 30 lakhs of farmers from 16000 villages are members for this it. \nThe world bank believes that the the Amul project is a role model for the strike against povrety.   ', 17, 58, 63, '1350984771', '1350985625'),
(789, 20, 116, 'The happiest moment In my life happened when i was in ma high school.Its because,when i was in 10th ,our school got 100% winning rate.I am happy for this because i was the part of this moment and i am very proud of it.', 17, 58, 63, '1350985625', '1350985812'),
(790, 1, 42, 'BZIP2 Compressed TAR', 17, 63, 70, '1351267620', '1351267701'),
(791, 2, 25, 'BIOS software is stored on a non-volatile ROM chip on the motherboard', 17, 63, 70, '1351267702', '1351267757'),
(792, 3, 170, 'four primary partitions', 17, 63, 70, '1351267757', '1351267814'),
(793, 4, 44, '104', 17, 63, 70, '1351267814', '1351267907'),
(794, 5, 7, 'It is the act of attempting to acquire information such as usernames, passwords, and credit card details by masquerading as a trustworthy entity in an electronic communication.', 17, 63, 70, '1351267908', '1351267971'),
(795, 6, 47, '208', 17, 63, 70, '1351267971', '1351268250'),
(796, 7, 29, '56', 17, 63, 70, '1351268250', '1351268526'),
(797, 8, 159, '372', 17, 63, 70, '1351268526', '1351268653'),
(798, 9, 149, '327', 17, 63, 70, '1351268653', '1351268724'),
(799, 10, 144, '302', 17, 63, 70, '1351272580', '1351268761'),
(800, 11, 133, '245', 17, 63, 70, '1351272685', '1351268834'),
(801, 12, 17, '39', 17, 63, 70, '1351268835', '1351268944'),
(802, 13, 155, '356', 17, 63, 70, '1351268944', '1351268967'),
(803, 14, 156, '0', 17, 63, 70, '1351268967', '1351268971'),
(804, 15, 32, '570', 17, 63, 70, '1351268971', '1351269100'),
(805, 16, 168, '443', 17, 63, 70, '1351269100', '1351269144'),
(806, 17, 167, '471', 17, 63, 70, '1351269145', '1351269187'),
(807, 18, 105, '222', 17, 63, 70, '1351269187', '1351269278'),
(808, 19, 112, 'Even Kerala Is Changing !\n\nIt wont take much time for some cities of kerala to be \nlike north indian cities. many of the local buses have their \nroute name displays in hindi. Hotels  and medical shops with \nhindi display boards are common now. Sundays and evenings \nat perumbavoor looks like a north indian town.\n\nMost of the money earned by north Indian labours have\nbeen spent at kerala. Mobile phones are their weakness. \nThey enjoy music from phone during their walk outs. Mobiles \nshops are opened during sundays mainly focusing these \nworkers.They spent their leisure time at beaches or cities \nin groups. Their presence is even at beverages queue. \nWe can see them at railway station , post office and movie \ntheater where hindi movies are played. Some of the theaters \nat perumbavoor plays odiya or bangali movies. A school for \nlearning bangali is also opened.\nNorth indian  families formed \ncolonies near brick industrial areas of Budhanoor and mannar. ', 17, 63, 70, '1351269278', '1351271129'),
(809, 20, 116, NULL, 17, 63, 70, '1351271129', ''),
(810, 1, 27, 'Apache is a kind of helicopter used by the US Navy seals.', 17, 62, 71, '1351336073', '1351336122'),
(811, 2, 170, 'one', 17, 62, 71, '1351336122', '1351336185'),
(812, 3, 44, '', 17, 62, 71, '1351336186', '1351336220'),
(813, 4, 179, 'Software testing is an investigation conducted to provide stakeholders with information about the quality of the product or service.', 17, 62, 71, '1351336220', '1351336361'),
(814, 5, 8, 'into IP address', 17, 62, 71, '1351336361', '1351336408'),
(815, 6, 48, '204', 17, 62, 71, '1351336408', '1351336435'),
(816, 7, 60, '151', 17, 62, 71, '1351336436', '1351336489'),
(817, 8, 150, '333', 17, 62, 71, '1351336489', '1351336508'),
(818, 9, 18, '44', 17, 62, 71, '1351336508', '1351336620'),
(819, 10, 34, '77', 17, 62, 71, '1351336621', '1351336654'),
(820, 11, 30, '560', 17, 62, 71, '1351336654', '1351336702'),
(821, 12, 31, '65', 17, 62, 71, '1351336702', '1351336725'),
(822, 13, 135, '257', 17, 62, 71, '1351336725', '1351336751'),
(823, 14, 141, '287', 17, 62, 71, '1351336751', '1351336782'),
(824, 15, 149, '327', 17, 62, 71, '1351336782', '1351336849'),
(825, 16, 122, '190', 17, 62, 71, '1351336849', '1351336927'),
(826, 17, 166, '421', 17, 62, 71, '1351336927', '1351337007'),
(827, 18, 164, '411', 17, 62, 71, '1351337007', '1351337080'),
(828, 19, 108, 'Why are they being treated as second class citizens?\n\nThe non keralite labourers are  treated as second class citizens in kerala,a state in which many revolutionary organizations took birth. \nThis practice of treating them indifferently starts from the administration level itself.Its has been reported that an average of 20 non keralite labourers die every year and we do not even have  a proper census record to keep of track of it.\nInformation Kerala mission is the only organization which takes responsibility to collect information about the other other state labourers but bitter fact is that even they are reluctant in maintaining the basic information about them. They run away from this role with the excuse that the Census department haven\'t demanded for this.\nThe government can offer compensation to the family of the dead, but the details have to be procured. In order to keep a check on the number of accidents happening in work sites in the middle east, its enforced by law to have a safety officer for every 150 employees when compared to one for 500 employees in India.This is the main reason why the accidental death rates are less in middle east. We have to adapt the same practice here in Kerala.', 17, 62, 71, '1351337080', '1351338976'),
(829, 20, 115, 'I was born and brought up in a beautiful village. When recollecting the childhood days, the memories that first strikes my mind are of the school days.The times spent with my friends were the best days of my life. Those innocent days were the colorful days in my life with full of joy and fun. The festivals and celebrations in those days,fights that happened over chocolates,mangoes,wrappers,cards are still fresh in my memory as if they happened recently. Being bought up in a joint family i had the privilege of experiencing the love from elders and cousins.My only worries in those days were \"exams\". While studying for the exam the thing that runs through my mind is about my vacation plans. Even now amidst my busy metro life I relish those beautiful days spend during childhood. and will always miss them till my last breath.', 17, 62, 71, '1351338976', '1351340326'),
(860, 1, 169, 'free software foundation', 17, 61, 72, '1351511519', '1351511594'),
(861, 2, 41, 'basic input output system', 17, 61, 72, '1351511595', '1351511632'),
(862, 3, 25, 'motherboard', 17, 61, 72, '1351511632', '1351511675'),
(863, 4, 26, ' Extensible Markup Language', 17, 61, 72, '1351511675', '1351511706'),
(864, 5, 23, 'secured socket layer', 17, 61, 72, '1351511706', '1351511729'),
(865, 6, 9, '5', 17, 61, 72, '1351511729', '1351511833'),
(866, 7, 29, '56', 17, 61, 72, '1351511833', '1351511887'),
(867, 8, 147, '317', 17, 61, 72, '1351511887', '1351511968'),
(868, 9, 148, '323', 17, 61, 72, '1351511968', '1351512048'),
(869, 10, 153, '377', 17, 61, 72, '1351512048', '1351512132'),
(870, 11, 149, '327', 17, 61, 72, '1351512132', '1351512155'),
(871, 12, 12, '18', 17, 61, 72, '1351512155', '1351512226'),
(872, 13, 55, '136', 17, 61, 72, '1351512226', '1351512274'),
(873, 14, 31, '65', 17, 61, 72, '1351512275', '1351512337'),
(874, 15, 135, '255', 17, 61, 72, '1351512337', '1351512368'),
(875, 16, 105, '222', 17, 61, 72, '1351512368', '1351512458'),
(876, 17, 161, '394', 17, 61, 72, '1351512458', '1351512564'),
(877, 18, 122, '188', 17, 61, 72, '1351512565', '1351512679'),
(878, 19, 111, '', 17, 61, 72, '1351512680', '1351512797'),
(879, 20, 115, '', 17, 61, 72, '1351512797', '1351512932'),
(880, 1, 193, '803', 20, 62, 73, '1351530162', '1351530188'),
(881, 2, 215, '684', 20, 62, 73, '1351530188', '1351529473'),
(882, 3, 196, '787', 20, 62, 73, '1351529473', '1351529568'),
(883, 4, 202, '761', 20, 62, 73, '1351529568', '1351529614'),
(884, 5, 201, '766', 20, 62, 73, '1351529614', '1351529772'),
(885, 6, 210, '712', 20, 62, 73, '1351529773', '1351529836'),
(886, 7, 214, '694', 20, 62, 73, '1351529836', '1351529900'),
(887, 8, 189, '833', 20, 62, 73, '1351529900', '1351529966'),
(888, 9, 186, '840', 20, 62, 73, '1351529966', '1351530142'),
(889, 10, 212, NULL, 20, 62, 73, '1351530142', ''),
(890, 11, 69, NULL, 20, 62, 73, '', ''),
(891, 12, 184, NULL, 20, 62, 73, '', ''),
(892, 13, 97, NULL, 20, 62, 73, '', ''),
(893, 14, 88, NULL, 20, 62, 73, '', ''),
(894, 15, 91, NULL, 20, 62, 73, '1351530239', ''),
(895, 16, 66, 'JVM is called as Java Virtual Machine. It is a virtual machine that can execute Java bytecode. It is the code execution component of the Java software platform.  They are most often implemented to run on an existing operating system, but can also be implemented to run directly on hardware.', 20, 62, 73, '1351530901', '1351530605'),
(896, 17, 95, 'cat /etc/passwd | cut -d&#58; -f1 | xargs crontab -l -u', 20, 62, 73, '1351531108', '1351531153'),
(897, 18, 90, 'Its another term for hard disk drive. It was developed by IBM that had 30MB of fixed storage and 30MB of removable storage; so its inventors called it a Winchester in honor of its 30/30 rifle.', 20, 62, 73, '1351531154', '1351531244'),
(898, 19, 68, '0 - System halt; no activity, the system can be safely powered down. \n1 - Single user; rarely used. \n2 - Multiple users, no NFS (network filesystem); also used rarely. \n3 - Multiple users, command line (i.e., all-text mode) interface; the standard runlevel for most Linux-based server hardware. \n4 - User-definable \n5 - Multiple users, GUI (graphical user interface); the standard runlevel for most Linux-based desktop systems. \n6 - Reboot; used when restarting the system.', 20, 62, 73, '1351531244', '1351531405'),
(899, 20, 89, 'ctrl-A --- Move cursor to beginning of line\n\nctrl-W --- Cut the last word\n\nctrl-E --- Move cursor to end of line\n\nctrl-U --- Cut everything before the cursor ', 20, 62, 73, '1351531405', '1351531576'),
(900, 21, 100, 'root.', 20, 62, 73, '1351531577', '1351531631'),
(901, 22, 72, 'Every file in Unix has a number, called an inode, associated with it. Unix doesn’t use the filename to refer to the file; it uses the inodes. ', 20, 62, 73, '1351531632', '1351531720'),
(902, 23, 76, 'apache2 -l', 20, 62, 73, '1351531720', '1351531903'),
(903, 24, 99, 'pwconv', 20, 62, 73, '1351531903', '1351532295'),
(904, 25, 71, 'FTP- 21\nSMTP- 25\nSSH- 22\nHTTP- 80\nTelnet- 23\nDNS- 53', 20, 62, 73, '1351532295', '1351532533'),
(905, 26, 79, 'Tux', 20, 62, 73, '1351532533', '1351532586'),
(906, 27, 86, 'tar /home/user1', 20, 62, 73, '1351532586', '1351532843'),
(907, 28, 103, '1.You type a domain name such as google.com into your browser using client computer operating system such as Windows or Apple OS.\n2.The client needs to find the IP address where google.com search engine is located on the earth.\n3.Your browser will send this query to the operating system.\n4.Each operating system is configured to query certain dns servers. Typically your ISP or network administrator configures such dns servers called Resolving Name Server.\n5.The resolving name server does not aware of the location of the google.com, but it does know where the root servers are located.\n6.Next, the resolving name server find the location of the top-level domain name server to send query for google.com. Each domain on the Internet has authoritative name server.\n7.Finally, the authoritative name server will give you exact IP address of google.com. This information will come back to to the resolving name server, which caches the information and send backs an answer (answer to your query what is IP address of google.com) to the browser to the correct place. The end result you will see google search engine home page.', 20, 62, 73, '1351532843', '1351533013'),
(908, 29, 70, '/bin/\n/dev/\n/etc/\n/home/\n/lib/\n/mnt/\n/proc/\n/root/\n/sbin/\n/tmp/\n/usr/\n/var/', 20, 62, 73, '1351533013', '1351533075'),
(909, 30, 98, 'chsh [-s shell] [-l] [-u] [-v] [username]', 20, 62, 73, '1351533075', '1351533131'),
(910, 1, 209, '717', 20, 63, 74, '1351597394', '1351597412'),
(911, 2, 206, '733', 20, 63, 74, '1351597413', '1351597424'),
(912, 3, 213, '695', 20, 63, 74, '1351597425', '1351597449'),
(913, 4, 189, '833', 20, 63, 74, '1351597449', '1351597464'),
(914, 5, 207, '726', 20, 63, 74, '1351597464', '1351597521'),
(915, 6, 202, '761', 20, 63, 74, '1351597521', '1351597559'),
(916, 7, 204, '742', 20, 63, 74, '1351597559', '1351597588'),
(917, 8, 217, '670', 20, 63, 74, '1351597588', '1351597596'),
(918, 9, 195, '791', 20, 63, 74, '1351597597', '1351597603'),
(919, 10, 210, '712', 20, 63, 74, '1351597603', '1351597611'),
(920, 11, 77, 'Machine languages are also known as first generation languages. Machine language, also known as machine code, native code, and byte code, is the set of raw instructions and data that can be executed by a central processing unit (CPU). It allows a CPU to interpret a certain set of byte sequences as an \"instruction\" to perform a task. These tasks are very small, such as copying small amounts of data or arithmetic.In machine language program, the computation is based on binary numbers. All the instructions including operations, registers, data and memory locations are given in there binary equivalent.\n\nThe machine directly understands this language by virtue of its circuitry design so these programs are directly executable on the computer without any translations. This makes the program execution very fast. ', 20, 63, 74, '1351597612', '1351597798'),
(921, 12, 101, 'dmesg.\nThe dmesg command displays the system messages contained in the kernel ring buffer. By using this command immediately after booting your computer, you will see the boot messages.', 20, 63, 74, '1351597797', '1351597877'),
(922, 13, 99, 'pwconv\n\nThe pwconv command creates the file /etc/shadow and changes all passwords to \'x\' in the /etc/passwd file.', 20, 63, 74, '1351597877', '1351597993'),
(923, 14, 84, 'The pwconv command creates and updates /etc/shadow with information from /etc/passwd.\n\npwconv relies on a special value of \'x\' in the password field of /etc/passwd. This value of \'x\' indicates that the password for the user is already in /etc/shadow and should not be modified.\n\nIf the /etc/shadow file does not exist, this command will create /etc/shadow with information from /etc/passwd. The command populates /etc/shadow with the user\'s login name, password, and password aging information. If password aging information does not exist in /etc/passwd for a given user, none will be added to /etc/shadow. However, the last changed information will always be updated.', 20, 63, 74, '1351597994', '1351598104'),
(924, 15, 86, 'rsync -abz /home/user1', 20, 63, 74, '1351598104', '1351598846'),
(925, 16, 72, 'A file system relies on data structures about the files, beside the file content. The former is called metadata—data that describes data. Each file is associated with an inode, which is identified by an integer number, often referred to as an i-number or inode number.Inodes store information about files and directories (folders), such as file ownership, access mode (read, write, execute permissions), and file type. On many types of file system implementations, the maximum number of inodes is fixed at file system creation, limiting the maximum number of files the file system can hold. The inode number indexes a table of inodes in a known location on the device; from the inode number, the file system driver portion of the kernel can access the contents of the inode, including the location of the file allowing access to the file.A file\'s inode number can be found using the ls -i command. The ls -l command displays some of the inode contents for each file.', 20, 63, 74, '1351598846', '1351599047'),
(926, 17, 92, 'RJ-11.\nA telephone interface that uses a cable of twisted wire pairs and a modular jack with two, four or six contacts. RJ-11 is the common connector for plugging a telephone into the wall and the handset into the telephone', 20, 63, 74, '1351599047', '1351599295'),
(927, 18, 103, 'DNS is used to map a domain name to an IP address. For e.g. when you type a domain such as dnsknowledge.com into your browser the client needs to find the IP address where this website is located. This is done using DNS servers. However, keep in mind that over last few years the Internet grew into the tens of thousands (there may be billions of IP address active with hostnames), a more flexible more scalable solution was required. The DNS makes is possible to manage millions of hostnames and IP address efficiently. ', 20, 63, 74, '1351599295', '1351599676'),
(928, 19, 64, 'Cookie.', 20, 63, 74, '1351599677', '1351599826'),
(929, 20, 71, 'FTP :20 AND 21\nSMTP:25\nSSH:22\nHTTP:80\nHTTPS:443\nTELNET:23\nDNS:53', 20, 63, 74, '1351599826', '1351600057'),
(930, 21, 83, 'yes.If we change the port to another, the Apache daemon can be started only by the root user. You can also use Listen to define specific addresses that the server will accept connections from.', 20, 63, 74, '1351600058', '1351600293'),
(931, 22, 65, 'Hyper Text Transfer Protocol', 20, 63, 74, '1351600293', '1351600322'),
(932, 23, 104, 'iptables -L\niptables -F\n', 20, 63, 74, '1351600322', '1351600389'),
(933, 24, 100, 'Root', 20, 63, 74, '1351600389', '1351600419'),
(934, 25, 94, 'original equipment manufacture', 20, 63, 74, '1351600420', '1351600468'),
(935, 26, 68, '0 	Halt 	Shuts down the system.\n1 	Single-User Mode 	Mode for administrative tasks.\n2 	Multi-User Mode 	Does not configure network interfaces and     does       not export networks services.\n3 	Multi-User Mode with Networking 	Starts the system normally.\n4 	Not used/User-definable 	For special purposes.\n5 	Start the system normally with appropriate display manager. \n6 	Reboot 	Reboots the system.', 20, 63, 74, '1351600468', '1351600577'),
(936, 27, 69, '    The BIOS performs hardware-platform specific startup tasks\n    Once the hardware is recognized and started correctly, the BIOS loads and executes the partition boot code from the designated boot device, which contains phase 1 of a Linux boot loader. Phase 1 loads phase 2 (the bulk of the boot loader code). Some loaders may use an intermediate phase (known as phase 1.5) to achieve this since modern large disks may not be fully readable without further code.\n    The boot loader often presents the user with a menu of possible boot options. It then loads the operating system, which decompresses into memory, and sets up system functions such as essential hardware and memory paging, before calling start_kernel().\n    start_kernel() then performs the majority of system setup (interrupts, the rest of memory management, device initialization, drivers, etc) before spawning separately, the idle process and scheduler, and the Init process (which is executed in user space).\n    The scheduler effectively takes control of the system management, as the kernel goes dormant (idle).\n    The Init process executes scripts as needed that set up all non-operating system services and structures in order to allow a user environment to be created, and then presents the user with a login screen.', 20, 63, 74, '1351600577', '1351600634'),
(937, 28, 184, 'RAID stands for Redundant Arrayof Inexpensive  Disks. RAID isa method of combining multiple hard disks in a single logical unit tooffer high availability, performance or a combination of both. This his level is known for its mirroring capability. Two hard disks are used, out of which one stores duplicate data. In other words, same data is stored in both the hard disks.\nIn RAID 3, data is split at byte level. In this method, one additional hard disk is used for holding the parity bits. Since data is stored and stripped at the byte level, hence, accessing a single block of data requires access to more than one hard disks.\nIn RAID 2, data is not stripped at blocks, but at the level of bits. Hamming code is used for error correction. Hamming code is a linear error correcting code\nRAID 4 is quite similar to that of RAID 3. It also uses a dedicated parity disk, but the difference is that, it strips the data at block level', 20, 63, 74, '1351600634', '1351600825'),
(938, 29, 82, 'fdisk -cul', 20, 63, 74, '1351600826', '1351600844'),
(939, 30, 62, 'Virus', 20, 63, 74, '1351600844', '1351600887'),
(960, 1, 198, '778', 20, 50, 75, '1351665897', '1351665951'),
(961, 2, 200, '771', 20, 50, 75, '1351665951', '1351666064'),
(962, 3, 215, '684', 20, 50, 75, '1351666064', '1351666156'),
(963, 4, 201, '766', 20, 50, 75, '1351666156', '1351666318'),
(964, 5, 206, '733', 20, 50, 75, '1351666318', '1351666388'),
(965, 6, 209, '717', 20, 50, 75, '1351666388', '1351666459'),
(966, 7, 192, '813', 20, 50, 75, '1351666459', '1351666503'),
(967, 8, 207, '727', 20, 50, 75, '1351666503', '1351666514'),
(968, 9, 212, '0', 20, 50, 75, '1351666514', '1351666543'),
(969, 10, 186, '840', 20, 50, 75, '1351666543', '1351666619'),
(970, 11, 91, 'Swtiched Mode Power Supply', 20, 50, 75, '1351666619', '1351666655'),
(971, 12, 70, '', 20, 50, 75, '1351666656', '1351666657'),
(972, 13, 86, 'tar -cvf user1.tar /home/user1', 20, 50, 75, '1351666657', '1351666767'),
(973, 14, 77, 'Assembly Language', 20, 50, 75, '1351666767', '1351666849'),
(974, 15, 71, 'ftp-21/tcp\nsmtp-25/tcp\nssh-22/tcp\nhttp-80/tcp\nhttps-443/tcp\ntelnet-23/tcp\nDNS-53/tcp', 20, 50, 75, '1351666849', '1351667175'),
(975, 16, 62, 'computer virus', 20, 50, 75, '1351667175', '1351667225'),
(976, 17, 184, 'RAID 0-blocks striped,no mirror,no parity\nRAID 1-blocks mirrored, no stripes, no parity\nRAID 5-blocks striped,distributed parity\nRAID 10-blocks mirrored and striped', 20, 50, 75, '1351667225', '1351667484'),
(977, 18, 74, 'locate uses a database and more faster', 20, 50, 75, '1351667484', '1351667599'),
(978, 19, 101, 'dmesg', 20, 50, 75, '1351667599', '1351667684'),
(979, 20, 99, ' pwconv', 20, 50, 75, '1351667684', '1351667795'),
(980, 21, 96, ' used to give a single computer multiple names(aliases)', 20, 50, 75, '1351667795', '1351667929'),
(981, 22, 85, 'SUID- SPecial User ID  eg:chmod u+s /bin/chmod\nSGID- Special Group ID ed: chmod g+s harry\nsticky bit- give permisions to only owner can remove the file. Eg: chmod 0+t', 20, 50, 75, '1351667929', '1351668156'),
(982, 23, 45, '256', 20, 50, 75, '1351668156', '1351668259'),
(983, 24, 66, 'Java Virtual Machine', 20, 50, 75, '1351668259', '1351668297'),
(984, 25, 72, ' inode(index node) is a data structure. Each inode stores all the information about a file system and objects', 20, 50, 75, '1351668297', '1351668383'),
(985, 26, 79, 'Tux', 20, 50, 75, '1351668383', '1351668437'),
(986, 27, 80, 'IANA\nICANN', 20, 50, 75, '1351668437', '1351668500'),
(987, 28, 84, 'pwconv creates /etc/shadow from /etc/passwd', 20, 50, 75, '1351668500', '1351668623'),
(988, 29, 94, 'original equipment manufacture', 20, 50, 75, '1351668624', '1351668701'),
(989, 30, 88, 'messages       /var/log/messages', 20, 50, 75, '1351668701', '1351668800'),
(990, 1, 169, 'Free Software Foundation', 17, 69, 84, '1352103873', '1352103930'),
(991, 2, 182, 'Microprocessor', 17, 69, 84, '1352103931', '1352104137'),
(992, 3, 8, 'ipaddress', 17, 69, 84, '1352104137', '1352104200'),
(993, 4, 25, 'nonvolatile ROM chip on motherboard', 17, 69, 84, '1352104200', '1352104247'),
(994, 5, 170, '4', 17, 69, 84, '1352104247', '1352104306'),
(995, 6, 60, '150', 17, 69, 84, '1352104306', '1352104421'),
(996, 7, 9, '4', 17, 69, 84, '1352104421', '1352104682'),
(997, 8, 158, '368', 17, 69, 84, '1352104682', '1352104724'),
(998, 9, 159, '372', 17, 69, 84, '1352104724', '1352104753'),
(999, 10, 149, '326', 17, 69, 84, '1352104753', '1352104787'),
(1000, 11, 138, '270', 17, 69, 84, '1352104788', '1352104835'),
(1001, 12, 136, '259', 17, 69, 84, '1352104835', '1352105043'),
(1002, 13, 52, '121', 17, 69, 84, '1352105043', '1352105080'),
(1003, 14, 152, '339', 17, 69, 84, '1352105080', '1352105134'),
(1004, 15, 51, '116', 17, 69, 84, '1352105134', '1352105182'),
(1005, 16, 118, '169', 17, 69, 84, '1352105182', '1352105310'),
(1006, 17, 164, '412', 17, 69, 84, '1352105310', '1352105356'),
(1007, 18, 105, '222', 17, 69, 84, '1352105356', '1352105386'),
(1008, 19, 113, 'Pravin nayar developed a 1200 cc cruizer bike having 1.75m height.He made this by modifying 2000 model standard bullet.he imported handlebar, fork and mas cylinder from european countries.Pravin got his degree in applied photography from madras.Due to the installation of four cylinder caber unit the vehicle will not skid at any point.There are two disk brakes in front tyre and one in back tyre.The vehicle got 10-15kn mileage and got a speed of 150-170km.The bike weighs 200 kg and the cost of developing this bike was 3.5 lakh.He took two years to complete this work with the help of his friend jaleel. ', 17, 69, 84, '1352105386', '1352106057'),
(1009, 20, 114, 'my collage life was amazing. i m a friendly kind of person thats why i have lots of friends in my life. in my friend group i have 8 members.My college is located in Puthupaly,kottayam.It is very happy to think about my college life.\nIt was great experience being there. I learnt many things…. Now when I look back I feel….the changes… It’s the similar feeling I had when I graduated two years back… how time changes and how life keeps on moving without a pause…. People come… people go…. We laugh we cry…. Some really low moments…. Some really high…. Life is so beautiful in its own way…. ', 17, 69, 84, '1352106057', '1352106402'),
(1010, 1, 179, 'Test for a computer product, mainly software prior to its commercial release. Its the final stage in testing. In Beta testing the product may be available for download through sites around the world where software developers can download it for free or as a trial and test it.', 17, 70, 86, '1352176530', '1352176849'),
(1011, 2, 8, 'DNS or Domain Naming System translates or resolves the domain name of a website to its corresponding ip address because unlike humans, computer systems can communicate with ip address only. ', 17, 70, 86, '1352176849', '1352177079'),
(1012, 3, 25, 'The BIOS or Basic input output system is mainly stored in CMOS chip.', 17, 70, 86, '1352177079', '1352177284'),
(1013, 4, 178, 'Its an outline of a program. Pseudocode can\'t be complied or executed. Its main purpose is to get the outline or general concept of a program without knowing its syntax or programming language used.', 17, 70, 86, '1352177285', '1352177756'),
(1014, 5, 42, 'Its the file extension for BZIP compressed TAR archive files', 17, 70, 86, '1352177756', '1352178039'),
(1015, 6, 28, '550', 17, 70, 86, '1352178039', '1352178104'),
(1016, 7, 9, '5', 17, 70, 86, '1352178104', '1352178589'),
(1017, 8, 18, '44', 17, 70, 86, '1352178590', '1352178654'),
(1018, 9, 143, '295', 17, 70, 86, '1352178654', '1352178698'),
(1019, 10, 13, '22', 17, 70, 86, '1352178698', '1352178743'),
(1020, 11, 32, '71', 17, 70, 86, '1352178743', '1352178805'),
(1021, 12, 156, '358', 17, 70, 86, '1352178805', '1352178905'),
(1022, 13, 132, '239', 17, 70, 86, '1352178905', '1352179067'),
(1023, 14, 134, '253', 17, 70, 86, '1352179067', '1352179194'),
(1024, 15, 14, '23', 17, 70, 86, '1352179194', '1352179272'),
(1025, 16, 105, '226', 17, 70, 86, '1352179272', '1352179337'),
(1026, 17, 123, '193', 17, 70, 86, '1352179337', '1352179395'),
(1027, 18, 121, '184', 17, 70, 86, '1352179395', '1352179456'),
(1028, 19, 112, 'Kerala Transformation\n\nWithin a short period of time some regions of Kerala might change like the cities in northern India. Now they have started to include Hindi as the bus destination board name. Hotels that advertise in Hindi,serve North Indian food and Medical shops that also advertise in Hindi have started to gain popularity. Even on Sunday\'s and night time the city of Perumbavoor seems like a north Indian city. North Indian laborer\'s mainly spend their money in Kerala itself. They can\'t avoid a mobile phone. Most of them copy songs in their mobile phones and listen to music most of time. This has turned out to be a source of entertainment for them. Mobile shops are open on Sundays mainly for these people. These group of laborers  on non working days prefer to take a walk along the beach or just roam around the city. They too have made their presence felt while waiting in a beverages queue. They also primarily frequently visit Railway stations, post offices, movie theaters playing hindi movies. Theaters at Perumbavoor have started showing Odisha and Bengali movies. A Bengali school has also been started. Colonies comprising of North India families have been established near Brick factories in the region of Buddanoor and Mannar.\n ', 17, 70, 86, '1352179456', '1352181201'),
(1029, 20, 114, 'My college days were the some of the best days of my life. Those were the days i enjoyed a lot. I believe college days are one of the most memorable days of a person\'s life. Those are the days in which we can establish a strong friend circle. We can meet and make friends with many student who came from different families and aspects of life. Shortly about my college days...those were the best days of my life which i will never forgot and cherish even now.', 17, 70, 86, '1352181201', '1352181459'),
(1030, 1, 210, '712', 20, 69, 85, '1352177871', '1352177889'),
(1031, 2, 215, '684', 20, 69, 85, '1352177889', '1352177943'),
(1032, 3, 212, '0', 20, 69, 85, '1352177943', '1352177972'),
(1033, 4, 213, '695', 20, 69, 85, '1352177972', '1352177985'),
(1034, 5, 207, '726', 20, 69, 85, '1352177985', '1352178007'),
(1035, 6, 188, '836', 20, 69, 85, '1352178008', '1352178019'),
(1036, 7, 195, '791', 20, 69, 85, '1352178020', '1352178025'),
(1037, 8, 196, '787', 20, 69, 85, '1352178025', '1352178232'),
(1038, 9, 193, '803', 20, 69, 85, '1352178232', '1352178241'),
(1039, 10, 214, '694', 20, 69, 85, '1352178241', '1352178251'),
(1040, 11, 89, 'Ctrl+A go to the begining of line you are working on\nCtrl+W  delete the word before cursor\nCtrl+E  go to the end of line you are working on\nCtrl+U  clears the line before cursor position\n\n', 20, 69, 85, '1352178251', '1352178460'),
(1041, 12, 79, 'Tux is a penguin character and is the official mascot of the Linux OS', 20, 69, 85, '1352178460', '1352178530'),
(1042, 13, 74, ' find : It generate dynamic o/p in the sense that it search in whole system and find the specified name. and also it give error if it can not access some folder which have root priority. Find command can operate with various option.\n\nlocate : It search in db which is already created in system. so it is not give dynamic o/p. also it has only option.', 20, 69, 85, '1352178530', '1352178607'),
(1043, 14, 103, '\nThe DNS is the default name resolution service used in UNIX (configurable option) and Windows servers.\n\nHowever, when the Internet was very small, hostname resolution was done using /etc/hosts file under UNIX. The hosts file is a computer file used by an operating system to map hostnames to IP addresses. MS-Windows also support the hosts file and usaully locate at %SystemRoot%\\system32\\drivers\\etc\\ directory.\n\nDNS is used to map a domain name to an IP address. For e.g. when you type a domain such as dnsknowledge.com into your browser the client needs to find the IP address where this website is located. This is done using DNS servers. However, keep in mind that over last few years the Internet grew into the tens of thousands (there may be billions of IP address active with hostnames), a more flexible more scalable solution was required. The DNS makes is possible to manage millions of hostnames and IP address efficiently. The DNS has become the main ', 20, 69, 85, '1352178608', '1352178685'),
(1044, 15, 101, 'dmesg\n\nThe dmesg command displays the system messages contained in the kernel ring buffer. By using this command immediately after booting your computer, you will see the boot messages.', 20, 69, 85, '1352178685', '1352178736'),
(1045, 16, 66, 'JVM stands for java virtual machines.\nA Java virtual machine (JVM) is a virtual machine that can execute Java bytecode. It is the code execution component of the Java software platform. Sun Microsystems has stated that there are over 5.5 billion JVM-enabled devices.[1]', 20, 69, 85, '1352178737', '1352178807'),
(1046, 17, 67, 'first give the execute permission\n#chmod +x a.out\nthen run the file\n#/home/user1/a.out', 20, 69, 85, '1352178807', '1352179056'),
(1047, 18, 63, 'The first web browser ever written was called \"WorldWideWeb\", and it was created by a man named Tim Berners-Lee. While this was the very first web browser, it was not widely used, and was only available for the NeXT platform.', 20, 69, 85, '1352179057', '1352179146'),
(1048, 19, 86, 'tar xpf /home/user1', 20, 69, 85, '1352179146', '1352179265'),
(1049, 20, 84, ' pwconv– installs and updates /etc/shadow with information from /etc/passwd', 20, 69, 85, '1352179265', '1352179316'),
(1050, 21, 99, 'pwconv.It installs and updates /etc/shadow with information from /etc/passwd', 20, 69, 85, '1352179316', '1352179417'),
(1051, 22, 83, 'yes open the /etc/httpd/conf/httpd.conf file and select the port 80 porton and change it according to our need.Then restart the daemon.', 20, 69, 85, '1352179417', '1352179604'),
(1052, 23, 98, 'Use chsh command to change the user login shell. This determines the name of the user’s initial login command. A normal user may only change the login shell for her own account, the super user may change the login shell for any account.\nor use useradd -s command', 20, 69, 85, '1352179604', '1352179768'),
(1053, 24, 69, ' The Linux boot process consists of several stages, each represented by a different component. The following list briefly summarizes the boot process and features all the major components involved.\n\n    BIOS.  After turning on the computer, the BIOS initializes the screen and keyboard and tests the main memory. Up to this stage, the machine does not access any mass storage media. Subsequently, the information about the current date, time, and the most important peripherals are loaded from the CMOS values.\n\nBoot Loader.  The first physical 512-byte data sector of the first hard disk is loaded into the main memory and the boot loader that resides at the beginning of this sector takes over. The commands executed by the boot loader determine the remaining part of the boot process. Therefore, the first 512 bytes on the first hard disk are referred to as the Master Boot Record (MBR). \n\nKernel and initramfs.  To pass system control, the boot loader loads both the Kernel and an initial RAM–based file system (initramfs) into memory. The contents of the initramfs can be used by the Kernel directly. initramfs contains a small executable calle init that handles the mounting of the real root file system. \n\ninit on initramfs.  This program performs all actions needed to mount the proper root file system, like providing Kernel functionality for the needed file system and device drivers for mass storage controllers with udev. After the root file system has been found, it is checked for errors and mounted. If this is successful.\n\n    init.  init handles the actual booting of the system through several different levels providing different functionality. init is described in Section 9.2, “The init Process”. ', 20, 69, 85, '1352179768', '1352179905'),
(1054, 25, 76, 'usethe following command \nhttpd -l ', 20, 69, 85, '1352179905', '1352180022'),
(1055, 26, 77, 'Machine language is also known as binary.Machine language is the language that a computer can understand.It is in the form of binary digits', 20, 69, 85, '1352180022', '1352180122');
INSERT INTO `answers` (`answer_id`, `serial`, `question_id`, `answer`, `exam_id`, `user_id`, `assigned_exam_id`, `answer_start`, `answer_end`) VALUES
(1056, 27, 70, ' /\nThe root directory. The starting point of your directory structure. This is where the Linux system begins. Every other file and directory on your system is under the root directory. Usually the root directory contains only subdirectories, so it\'s a bad idea to store single files directly under root.\n /boot \nAs the name suggests, this is the place where Linux keeps information that it needs when booting up. For example, this is where the Linux kernel is kept. If you list the contents of /boot, you\'ll see a file called vmlinuz - that\'s the kerne\n< /etc >\n\nThe configuration files for the Linux system. Most of these files are text files and can be edited by hand. Some interesting stuff in this directory\n/etc/inittab\nA text file that describes what processes are started at system bootup and during normal operation. For example, here you can determine if you want the X Window System to start automatically at bootup, and configure what happens when a user presses Ctrl+Alt+Del.\n\n/etc/fstab\nThis file contains descriptive information about the various file systems and their mount points, like floppies, cdroms, and so on.\n\n/etc/passwd\nA file that contains various pieces of information for each user account. This is where the users are defined.\n< /usr >\n\nThis directory contains user applications and a variety of other things for them, like their source codes, and pictures, docs, or config files they use. /usr is the largest directory on a Linux system, and some people like to have it on a separate partition. Some interesting stuff in /usr:\n< /root >\n\nThe superuser\'s (root\'s) home directory. Don\'t confuse this with the root directory (/) of a Linux system\n< /lib >\n\nThe shared libraries for programs that are dynamically linked. The shared libraries are similar to DLL\'s on Winblows.\n< /home >\n\nThis is where users keep their personal files. Every user has their own directory under /home, and usually it\'s the only place where normal users are allowed to write files. You can configure a Linux system so that normal users can\'t even list the contents of other users\' home directories. This means that if your family members have their own user accounts on your Linux system, they won\'t see all the w4r3z you keep in your home directory. ;-)\n< /tmp >\n\nPrograms can write their temporary files here.\n< /dev >\n\nThe devices that are available to a Linux system\n< /mnt >\n\nThis directory is used for mount points\n< /proc >\n\nThis is a special directory. Well, actually /proc is just a virtual directory, because it doesn\'t exist at all! It contains some info about the kernel itself. There\'s a bunch of numbered entries that correspond to all processes running on the system, and there are also named entries that permit access to the current configuration of the system. Many of these entries can be viewed.', 20, 69, 85, '1352180122', '1352180316'),
(1057, 28, 100, 'root\n\nWhenever you install Linux, only one user account is created. This is the superuser account also known as root.\n', 20, 69, 85, '1352180316', '1352180355'),
(1058, 29, 68, 'ID 	Name 	                                       Description\n\n0 	Halt 	                                  Shuts down the system.\n\n1 	Single-User Mode 	                   Mode for administrative tasks.\n2 	Multi-User Mode 	                    Does not configure network interfaces and does    \n3 	Multi-User Mode with Networking 	    Starts the system normally.[5]\n4 	Not used/User-definable 	For special purposes.\n5 	Start the system normally with appropriate display manager. ( with GUI ) 	As runlevel 3 + display manager.\n6 	Reboot', 20, 69, 85, '1352180355', '1352180688'),
(1059, 30, 85, 'Linux has some special attributes associated with all files. Often in X Windows when you check the properties of any file (by right clicking on it and viewing its properties) you would get to see 3 special attributes besides the common read/write/execute rights for the owner/group/others . The 3 extra attributes are known as SUID, SGID and Sticky Bits\nSUID (Set User ID) Bit\n\nSometime you may faced an error while trying to run any application stating that the application must be \'SUID root\' . You might have been confused that time, but now once you read this article you would no longer find it confusing.\n\nSUID stands for Set User ID. This means that if the SUID bit is set for any application then your user ID would be set as that of the owner of application/file rather than the current user, while running that application. That means in case I have an application whose owner is \' root \' and it has its SUID bit set, then when I run this application as a normal user, that application would still run as root. Since the SUID bit tells Linux that the the User ID root is set for this application and whenever this application executes it must execute as if root was executing it (since root owns this file).\n\nIn case you have really understood the above you may be wondering - isnt this a major security risk? If users are able to run applications as root, then it must be definitely posing as a threat to the security of the system. Actually the SUID is used to increase the security in a way. Let me explain this with my own example I use on my machine.\nSGID (Set Group ID) bit\n\nJust like SUID, setting the SGID bit for a file sets your group ID to the file\'s group while the file is executing. IT is really useful in case you have a real multi-user setup where users access each others files. As a single homeuser I haven\'t really found a lot of use for SGID. But the basic concept is the same as the SUID, the files whose SGID bit are set would be used as if they belong to that group rather than to that user alone.\n\nNote : Making SUID and SGID programs completely safe is very difficult (or maybe impossible) thus in case you are a system administrator it is best to consult some professionals before giving access rights to root owned applications by setting the SUID bit. As a home user (where you are both the normal user and the superuser) the SUID bit helps you do a lot of things easily without having to log in as the superuser every now and then.\nSticky Bit\nSticky bit was used on executables in linux (which was used more often)so that they would remain in the memory more time after the initial execution, hoping they would be needed in the near future. But since today we have more sophisticated memory accessing techniques and the bottleneck related to primary memory is diminishing, the sticky bit is not used today for this. Instead, it is used on folders, to imply that a file or folder created inside a stickybit-enabled folder could only be deleted by the creator itself. A nice implementation of sticky bit is the /tmp folder,where every user has write permission but only users who own a file can delete them. Remember files inside a folder which has write permission can be deleted even if the file doesn\'t have write permission. The sticky bit comes useful here.\n\n\n', 20, 69, 85, '1352180688', '1352180809'),
(1060, 1, 211, '752', 20, 70, 87, '1352272552', '1352272627'),
(1061, 2, 194, '797', 20, 70, 87, '1352272627', '1352272758'),
(1062, 3, 217, '670', 20, 70, 87, '1352272758', '1352272768'),
(1063, 4, 196, '789', 20, 70, 87, '1352272768', '1352272944'),
(1064, 5, 204, '742', 20, 70, 87, '1352272945', '1352272976'),
(1065, 6, 189, '834', 20, 70, 87, '1352272976', '1352272990'),
(1066, 7, 210, '712', 20, 70, 87, '1352272990', '1352273004'),
(1067, 8, 186, '840', 20, 70, 87, '1352273004', '1352273173'),
(1068, 9, 209, '717', 20, 70, 87, '1352273173', '1352273234'),
(1069, 10, 187, '854', 20, 70, 87, '1352273234', '1352273243'),
(1070, 11, 74, 'Find command can search for a file in the whole of the system and give a particular output specified by the user whereas locate command can be used to search for a file in a database in the system rather than in a whole system. Both commands can be used with different parameters.', 20, 70, 87, '1352273244', '1352273781'),
(1071, 12, 94, 'OEM-Original equipment manufacturer\nHere the product is purchased by another company from the original manufacturer and the purchasing company sells this product in the purchasing comapany\'s brand name. An example is of PC manufacturers where they buy the softwares and semiconductors from Microsoft, Intel and AMD, sell them in retail in their PC products and label them as OEM', 20, 70, 87, '1352273781', '1352274266'),
(1072, 13, 88, 'In RHEL and some linux distributions the path and name for main system log is /var/log, the log messages are saved in the location /var/log/messages. ', 20, 70, 87, '1352274265', '1352274471'),
(1073, 14, 101, 'The dmesg command can be used to display the system messages generated at boot time. This command can used be used right after boot up. Further boot messages can also be found by running cat /var/log/messages.', 20, 70, 87, '1352274471', '1352274745'),
(1074, 15, 68, '0  Halt  power offs the system \n1  Single user mode, system runs in bare essentials mainly used for maintenance.\n2  Mainly user defined\n3  Multi user with console option only, here all the services are running except the GUI.\n4 Mainly user defined \n5 Multi-user with all services running also running GUI.\n6 Reboots- Reboots the machine\n\nthe run levels can be specified following the init command. ', 20, 70, 87, '1352274745', '1352275360'),
(1075, 16, 69, 'The main boot loader in LINUX is Grub or the Grand Unified boot loader, before it was LILO. This didn\'t support Multi boot. GRUB is capable of Mutiboot. When the PC is turned ON, the POST is completed after that, GRUB is stored in the first sector of the HDD. GRUB stores the necessary information for boot up like location of the boot files in the HHD. Grub points to the boot files, these files in that of linux are normally saved in /boot.The configuration files select the default run level. The OS is now loaded into the RAM, finally the GUI is shown with the log-in option.', 20, 70, 87, '1352275359', '1352275703'),
(1076, 17, 92, 'Splitter which can be connected to a RJ45 jack connector', 20, 70, 87, '1352275703', '1352275782'),
(1077, 18, 84, 'pwconv creates shadow from passwd and an optionally existing shadow.', 20, 70, 87, '1352275782', '1352275842'),
(1078, 19, 80, 'IANA and the ICANN are responsible for the DNS registrartrion', 20, 70, 87, '1352275842', '1352276056'),
(1079, 20, 104, 'iptables  L\niptables F', 20, 70, 87, '1352276056', '1352276090'),
(1080, 21, 86, '', 20, 70, 87, '1352276090', '1352276147'),
(1081, 22, 184, NULL, 20, 70, 87, '1352276148', ''),
(1082, 23, 70, NULL, 20, 70, 87, '', ''),
(1083, 24, 77, NULL, 20, 70, 87, '', ''),
(1084, 25, 90, NULL, 20, 70, 87, '', ''),
(1085, 26, 85, NULL, 20, 70, 87, '', ''),
(1086, 27, 173, NULL, 20, 70, 87, '', ''),
(1087, 28, 45, NULL, 20, 70, 87, '', ''),
(1088, 29, 67, NULL, 20, 70, 87, '', ''),
(1089, 30, 93, NULL, 20, 70, 87, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_exam_templates`
--

CREATE TABLE `assigned_exam_templates` (
  `assign_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `exam_template_id` int(11) NOT NULL,
  `progress` int(11) NOT NULL COMMENT ' 0=Not Started,1=Started,2=incompleted,3=complete',
  `verdict` varchar(50) NOT NULL,
  `verdict_note` blob,
  `resumed_on` varchar(100) DEFAULT NULL,
  `time_left` varchar(50) NOT NULL,
  `date_attempt` varchar(110) DEFAULT NULL,
  `assigned_by` int(11) DEFAULT NULL,
  `assigned_on` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigned_exam_templates`
--

INSERT INTO `assigned_exam_templates` (`assign_id`, `user_id`, `exam_template_id`, `progress`, `verdict`, `verdict_note`, `resumed_on`, `time_left`, `date_attempt`, `assigned_by`, `assigned_on`) VALUES
(28, 27, 17, 3, 'Average', NULL, '1348809596', '73', NULL, 1, ''),
(29, 29, 17, 3, 'Average', NULL, NULL, '40', NULL, 1, ''),
(32, 30, 18, 3, 'Poor', NULL, '1349068794', '29', '30-09-2012, 23:34:48', 1, ''),
(35, 31, 17, 3, 'Average', NULL, NULL, '34', '01-10-2012, 09:12:04', 1, ''),
(36, 32, 17, 0, '', NULL, NULL, '', NULL, 1, ''),
(38, 41, 17, 3, 'Good', NULL, NULL, '48', '05-10-2012, 04:28:07', 1, '1349428062'),
(39, 40, 17, 3, 'Average', NULL, '1349457200', '38', '05-10-2012, 11:58:02', 1, '1349428078'),
(40, 39, 17, 3, 'Good', NULL, '1349435985', '0', '05-10-2012, 04:48:20', 1, '1349428094'),
(41, 42, 17, 3, 'Good', NULL, NULL, '59', '06-10-2012, 04:13:34', 1, '1349504596'),
(42, 41, 18, 0, '', NULL, NULL, '', NULL, 1, '1349687727'),
(43, 42, 18, 2, '', NULL, '1349851717', '22', '10-10-2012, 00:08:50', 1, '1349687923'),
(44, 39, 18, 3, 'Average', NULL, '1349781402', '29', '09-10-2012, 05:47:22', 1, '1349688157'),
(45, 45, 17, 0, '', NULL, NULL, '', NULL, 1, '1349688373'),
(46, 44, 17, 0, '', NULL, NULL, '', NULL, 1, '1349688405'),
(47, 43, 17, 3, 'Good', NULL, NULL, '52', '10-10-2012, 01:34:25', 1, '1349688492'),
(48, 40, 18, 3, 'Poor', NULL, '1349886747', '17', '10-10-2012, 11:14:04', 1, '1349846790'),
(49, 46, 17, 3, 'Poor', NULL, '1349853222', '81', '10-10-2012, 01:55:09', 1, '1349851984'),
(52, 42, 20, 3, 'Average', NULL, NULL, '10', '10-10-2012, 04:01:08', 1, '1349857439'),
(53, 48, 17, 3, 'Poor', NULL, '1349861802', '64', '10-10-2012, 04:08:34', 1, '1349859843'),
(54, 47, 17, 3, 'Poor', NULL, NULL, '43', '10-10-2012, 04:06:20', 1, '1349859860'),
(59, 53, 17, 2, '', NULL, '1350487918', '53', '17-10-2012, 09:20:53', 1, '1350472297'),
(60, 52, 17, 3, 'Poor', NULL, '1350498424', '65', '17-10-2012, 08:08:19', 1, '1350472333'),
(61, 50, 17, 3, 'Good', NULL, NULL, '7', '19-10-2012, 10:26:46', 1, '1350472352'),
(62, 56, 17, 0, '', NULL, NULL, '', NULL, 1, '1350544236'),
(63, 58, 17, 3, 'Average', NULL, NULL, '57', '23-10-2012, 04:17:08', 1, '1350640813'),
(67, 59, 17, 0, '', NULL, NULL, '', NULL, 1, '1350721641'),
(69, 60, 17, 0, '', NULL, NULL, '', NULL, 1, '1350896947'),
(70, 63, 17, 3, 'Good', NULL, '1351272580', '0', '26-10-2012, 11:06:26', 1, '1351233894'),
(71, 62, 17, 3, 'Good', NULL, NULL, '19', '27-10-2012, 06:07:35', 1, '1351233912'),
(72, 61, 17, 3, 'Average', NULL, NULL, '66', '29-10-2012, 06:50:30', 1, '1351233935'),
(73, 62, 20, 3, 'Good', NULL, '1351530901', '11', '29-10-2012, 11:48:00', 1, '1351495362'),
(74, 63, 20, 3, 'Good', NULL, NULL, '1', '30-10-2012, 06:42:59', 1, '1351495520'),
(75, 50, 20, 3, 'Poor', NULL, NULL, '11', '31-10-2012, 01:44:53', 1, '1351588681'),
(76, 68, 17, 0, '', NULL, NULL, '', NULL, 1, '1351660483'),
(78, 57, 17, 0, '', NULL, NULL, '', NULL, 1, '1351667692'),
(80, 31, 20, 0, '', NULL, NULL, '', NULL, 1, '1351668305'),
(81, 29, 20, 0, '', NULL, NULL, '', NULL, 1, '1351668434'),
(82, 27, 20, 0, '', NULL, NULL, '', NULL, 1, '1351668453'),
(83, 61, 20, 0, '', NULL, NULL, '', NULL, 1, '1351920507'),
(84, 69, 17, 3, 'Poor', NULL, NULL, '47', '05-11-2012, 02:24:14', 1, '1352092510'),
(85, 69, 20, 3, 'Average', NULL, NULL, '11', '05-11-2012, 22:57:39', 1, '1352173387'),
(86, 70, 17, 3, 'Good', NULL, NULL, '7', '05-11-2012, 22:33:12', 1, '1352173493'),
(87, 70, 20, 3, 'Good', 0x436f6e736964657220666f7220696e74657276696577, NULL, '0', '07-11-2012, 01:06:55', 1, '1352213463'),
(88, 71, 17, 0, '', NULL, NULL, '', NULL, 1, '1352348516');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_education`
--

CREATE TABLE `candidate_education` (
  `rec_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `institute` varchar(200) NOT NULL,
  `year` varchar(10) NOT NULL,
  `score` varchar(15) NOT NULL,
  `type` varchar(150) NOT NULL COMMENT 'School, +2,degree,pg,other '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_education`
--

INSERT INTO `candidate_education` (`rec_id`, `user_id`, `institute`, `year`, `score`, `type`) VALUES
(23, 25, 'MMRHS (CBSE)', '1997', '90', 'School'),
(24, 25, 'Govt Arts College', '1999', '80', 'Plustwo'),
(25, 25, 'CUSAT', '2003', '68', 'Graduadtion'),
(29, 27, 'Matha Senior Secondary School (CBSE)', '2006', '82', 'School'),
(30, 27, 'Matha Senior Secondary School', '2008', '68', 'Plustwo'),
(31, 27, 'Nss College of Engg,Palakkad', '2012', '63', 'Graduadtion'),
(32, 27, 'RHCE', '2012', '00', 'Other'),
(36, 29, 'Jawahar Navodaya Vidyalaya, Kottayam (CBSE)', '2002', '73', 'School'),
(37, 29, 'St. Mary\'s H.S.S., Kuravilangadu', '2004', '65', 'Plustwo'),
(38, 29, 'M.G. University College of Engineering, Thodupuzha', '2009', '59', 'Graduadtion'),
(39, 29, 'RHCE', '2011', '94', 'Other'),
(40, 30, 'GVHSS REC (State Syllabus)', '2003', '75', 'School'),
(41, 30, 'GHSS KUTTIKKATTOOR', '2005', '75', 'Plustwo'),
(42, 30, 'KMCT COLLEGE OF ENGINEERING', '2010', '58', 'Graduadtion'),
(43, 31, 'KV NEWSPRINT NAGAR (State Syllabus)', '2003', '69', 'School'),
(44, 31, 'Bhavans Newsprint Nagar', '2005', '61', 'Plustwo'),
(45, 31, 'CEP', '2009', '60', 'Graduadtion'),
(46, 31, 'RHCE', '2010', '', 'Other'),
(47, 32, 'St. Aloysious.h.s (State Syllabus)', '2004', '67', 'School'),
(48, 32, 'G.H.S.S.Chendamangalam', '2006', '68', 'Plustwo'),
(49, 32, 'Calicut university', '2010', '55', 'Graduadtion'),
(50, 32, 'RHCSA', '2012', '', 'Other'),
(69, 39, 'Sree Niketan Central School (CBSE)', '1998', '68', 'School'),
(70, 39, 'Amirtha Sanskrit Higher Secondary school , Paripally', '2000', '74', 'Plustwo'),
(71, 39, ' Bsc Physics SN College ,Varkala ', '2004', '70', 'Graduation'),
(72, 39, 'MCA', '2007', '72', 'Post Graduation'),
(73, 39, 'RHCE', '2012', '586', 'Other'),
(74, 40, 'mount tabor achool (ICSE)', '2001', '63', 'School'),
(75, 40, '+2/cochin public school/CBSE', '2003', '58', 'Plustwo'),
(76, 40, 'Bsc physics/St alberts college/ MG university', '2006', '64', 'Graduation'),
(77, 40, 'Msc Applied electronics / School of technology and applied sciences', '2009', '68', 'Post Graduation'),
(78, 40, 'CCNA', '2009', '89', 'Other'),
(79, 40, 'Perl scripting', '2012', '', 'Other'),
(80, 40, 'Bash scripting', '2012', '', 'Other'),
(81, 40, 'RHCE', '2010', '100', 'Other'),
(82, 41, 'MTSHSS Kottayam (State Syllabus)', '2003', '81', 'School'),
(83, 41, 'MDSHSS Kottayam', '2005', '72', 'Plustwo'),
(84, 41, 'MBCCET Peermade', '2009', '55', 'Graduation'),
(85, 41, 'RHCE,MCP', '2009,2010', '', 'Other'),
(86, 42, 'F.M.E.M.H.S , Tirur (State Syllabus)', '1997', '75', 'School'),
(87, 42, 'D.G.H.S.S, Tanur', '1999', '61', 'Plustwo'),
(88, 42, 'B-Tech (CSE)', '2006', '59', 'Graduation'),
(89, 42, 'Diploma in Computer Engg', '2002', '73', 'Other'),
(90, 42, 'RHCE', '2012', '', 'Other'),
(91, 43, 'Carmel H.S.S. Chalakudy (State Syllabus)', '2005', '85', 'School'),
(92, 43, 'St.Antonys , Mala', '2007', '75', 'Plustwo'),
(93, 43, 'Mets School Of Engg. , Mala', '2011', '65', 'Graduation'),
(94, 43, 'RHCE , PGDIMS', '2012', '85', 'Other'),
(95, 44, 'lady of hope anglo-indian high school (State Syllabus)', '2004', '79', 'School'),
(96, 44, 'St.Albert\'s H.S.S', '2006', '73', 'Plustwo'),
(97, 44, 'University College Of Applied Sciences', '2009', '64', 'Graduation'),
(98, 44, 'University College Of Applied Sciences', '2012', '68', 'Post Graduation'),
(99, 44, 'Red Hat Certified Engineer', '2012', '79', 'Other'),
(100, 45, 'kv nad aluva (State Syllabus)', '2005', '76', 'School'),
(101, 45, 'kv nad aluva', '2007', '69', 'Plustwo'),
(102, 45, 'm g university', '2011', '64', 'Graduation'),
(103, 45, 'redhat certified (RHCSA & RHCE)', '2012', '', 'Other'),
(104, 46, 'ST THOMAS H S (State Syllabus)', '2005', '66', 'School'),
(105, 46, 'NSSHSS', '2007', '67', 'Plustwo'),
(106, 46, 'MCT', '2011', '60', 'Graduation'),
(107, 46, 'RHCE', '2011', '', 'Other'),
(108, 47, 'lourde matha hss chavara (State Syllabus)', '2005', '65', 'School'),
(109, 47, 'lourde matha hss chavara', '2007', '69', 'Plustwo'),
(110, 47, 'younus college of engg,kollam - kerala university', '2011', '50', 'Graduation'),
(111, 47, 'CCNA', '2011', '', 'Other'),
(112, 47, 'RHCE', '2012', '', 'Other'),
(113, 48, 'st.Aloysius H.S.S (State Syllabus)', '2005', '83', 'School'),
(114, 48, 'LOURDE MATHA H.S.S', '2007', '79', 'Plustwo'),
(115, 48, 'Younus college of engg and tech', '2011', '62', 'Graduation'),
(116, 48, 'CCNA', '2011', '', 'Other'),
(117, 48, 'RHCE', '2012', '', 'Other'),
(122, 50, 'SAHSS Kalloorkad (State Syllabus)', '2006', '78', 'School'),
(123, 50, 'SAHSS Kalloorkad', '2008', '76', 'Plustwo'),
(124, 50, 'VJCET Vazhakulam', '2012', '62', 'Graduation'),
(129, 52, 'Pope Pius XI H S S Kayamkulam (State Syllabus)', '2005', '81', 'School'),
(130, 52, 'Govt Boys H S S Kayamkulam', '2007', '81', 'Plustwo'),
(131, 52, 'KNSK College of Engineering Nagercoil', '2011', '74', 'Graduation'),
(132, 52, 'RHCE', '2012', '95', 'Other'),
(133, 53, 'St.Antony\'s H S S,EKM (State Syllabus)', '2004', '78', 'School'),
(134, 53, 'St.Mary\'s C G H S S,EKM', '2006', '73', 'Plustwo'),
(135, 53, 'St.Teresa\'s College,EKM', '2009', '78', 'Graduation'),
(144, 56, 'st marays (State Syllabus)', '2006', '87', 'School'),
(145, 56, 'ghss konny', '2008', '79', 'Plustwo'),
(146, 56, 'anna university', '2012', '77', 'Graduation'),
(147, 56, 'software testing', '2012', '90', 'Other'),
(148, 57, 'St joseph convent school (State Syllabus)', '2006', '66', 'School'),
(149, 57, 'NSS HSS', '2008', '77', 'Plustwo'),
(150, 57, 'Mangalam College of Engineering', '2012', '59', 'Graduation'),
(151, 57, 'RHCE', '2012', '', 'Other'),
(152, 57, 'RHCSA', '2012', '', 'Other'),
(153, 58, 'AKMVHSS,THADICADU (State Syllabus)', '2006', '80', 'School'),
(154, 58, 'THADICADU HSS', '2008', '84', 'Plustwo'),
(155, 58, 'MUSALIAR COLLEGE OF ENGINEERING AND TECHNOLOGY ,PATHANAMTHITTA', '2012', '70', 'Graduation'),
(156, 58, 'RHCE', '2012', '', 'Other'),
(157, 59, 'Emmanuels H.S.S, Kothanalloor (State Syllabus)', '2005', '78', 'School'),
(158, 59, 'ST Michels H.S.S Kaduthuruthy,', '2007', '64', 'Plustwo'),
(159, 59, 'Visveswaraya Institute of Engineering & Technology', '2012', '65', 'Graduation'),
(160, 59, 'Computer Science And Engineering', '2012', '65', 'Other'),
(161, 60, 'AKMVHSS,THADICADU (State Syllabus)', '2006', '80', 'School'),
(162, 60, 'THADICADU HSS', '2008', '84', 'Plustwo'),
(163, 60, 'MUSALIAR COLLEGE OF ENGINEERING AND TECHNOLOGY,PATHANAMTHITA', '2012', '70', 'Graduation'),
(164, 61, 'BEM-PALAKKAD (State Syllabus)', '2003', '54', 'School'),
(165, 61, 'MHSS-PALAKKAD', '2005', '58', 'Plustwo'),
(166, 61, 'BSc', '2008', '60', 'Graduation'),
(167, 61, 'MCA', '2013', '68', 'Post Graduation'),
(168, 62, 'Seventh Day Higher Secondary School (ICSE)', '2004', '64', 'School'),
(169, 62, 'Seventh Day Higher Secondary School', '2006', '54', 'Plustwo'),
(170, 62, 'Sree Narayana Guru College', '2009', '72', 'Graduation'),
(171, 62, 'SCMS School of Technology and Management', '2012', '62', 'Post Graduation'),
(172, 63, 'N.S.S.H.S.S. KIDANGOOR (State Syllabus)', '2005', '84', 'School'),
(173, 63, 'N.S.S.H.S.S. KIDANGOOR', '2007', '77', 'Plustwo'),
(174, 63, 'COLLEGE OF ENGINEERING KIDANGOOR', '2012', '65', 'Graduation'),
(175, 63, 'RHCE', '2012', '90', 'Other'),
(191, 68, 'KPMHSS Poothotta (State Syllabus)', '2003', '58', 'School'),
(192, 68, 'KPMHSS Poothotta', '2005', '63', 'Plustwo'),
(193, 68, 'KMCT College Of Engineering', '2009', '58', 'Graduation'),
(194, 69, 'Queen Marry Public School,kottayam (CBSE)', '2004', '78', 'School'),
(195, 69, 'Girideepam Bethany Central School', '2006', '64', 'Plustwo'),
(196, 69, 'MG University', '2009', '69', 'Graduation'),
(197, 69, 'MG University', '2011', '75', 'Post Graduation'),
(198, 69, 'RHCE', '2012', '90', 'Other'),
(199, 70, 'M.D.S.H.S.S (State Syllabus)', '2004', '76', 'School'),
(200, 70, 'M.D.S.H.S.S', '2006', '57', 'Plustwo'),
(201, 70, 'College of Applied Science/M.G University', '2009', '50', 'Graduation'),
(202, 70, 'Red Hat Certified Engineer ', '2012', '78', 'Other'),
(203, 71, 'ST JUDE H S S, MUKHATHALA, KOLLAM (State Syllabus)', '2005', '92', 'School'),
(204, 71, 'ST ANTONY\'S H S S, MALA', '2007', '87', 'Plustwo'),
(205, 71, 'FEDERAL INSTITUTE OF SCIENCE AND TECHNOLOGY, ANGAMALY / MG UNIVERSITY', '2011', '71', 'Graduation'),
(206, 71, 'MCTS', '2012', '82', 'Other'),
(207, 71, 'RHCE 6', '2012', '80', 'Other'),
(208, 72, 'G.N.B.H.S ,Kodakara (State Syllabus)', '2002', '72', 'School'),
(209, 72, 'G.H.S.S ,Kodakara', '2004', '71', 'Plustwo'),
(210, 72, 'FISAT ,Angamaly MG University', '2011', '59', 'Graduation'),
(211, 72, 'RHCE', '2011', '83', 'Other'),
(212, 73, 'cochin public school (CBSE)', '2005', '83', 'School'),
(213, 73, 'cochin public school', '2007', '75', 'Plustwo'),
(214, 73, 'CUSAT', '2011', '61', 'Graduation'),
(215, 73, 'rhcsa & rhce certified', '2011', '', 'Other'),
(220, 75, 'SSLC', '2003', '83', 'Other'),
(221, 75, 'Plus Two', '2005', '76', 'Other'),
(222, 75, 'B.A Functional English', '2008', '75', 'Other'),
(223, 75, 'GNIIT', '2009', '89', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_experience`
--

CREATE TABLE `candidate_experience` (
  `exp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `role` varchar(150) NOT NULL,
  `months` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_experience`
--

INSERT INTO `candidate_experience` (`exp_id`, `user_id`, `company_name`, `role`, `months`) VALUES
(10, 29, 'IPSR Solutions Ltd., Kottayam', 'Network Trainee', '6'),
(11, 31, 'INDUS TOWERS', 'SURVEILLANCE ENGINEER', '6'),
(12, 32, 'Zyphyr computers', 'Sales&Service', '8'),
(13, 39, 'Gurude Institute Of Management Studies , Kollam', 'System Administrator', '24'),
(14, 39, 'Sutherland Global Services , Cochin', 'Senior Technical Support', '40'),
(15, 40, 'aditya birla minacs', 'Tech support executive', '3'),
(16, 40, 'Vipoint solutions', 'Linux server admin', '13'),
(17, 40, 'sutherland globack services', 'tech support executive', '13'),
(18, 41, 'Hashroot Technolgies Pvt Ltd', 'Linux Server Administrator', '15'),
(19, 42, 'Global Infonet, Cochin', 'Internship Trainee', '6'),
(20, 42, 'Scholar Information Technology, Tirur', 'Faculty cum Project Guide', '38'),
(21, 43, 'Freasher', '', ''),
(22, 46, 'ANALYTIX CORPORATE SOLUTION', 'DATA PROCSSOR', '3'),
(26, 61, 'cutesys technology', 'system admin', ''),
(27, 61, 'cutesys technologies', 'system admin', '24'),
(28, 68, 'Nortech Infonet', 'SAP Basis Consultant', ' 12 Months'),
(29, 71, 'HCL INFOSYSTEM LTD', 'ASSOCIATE TRANIEE', '6'),
(30, 72, 'Rambus', 'Network admin trianee', '10'),
(31, 75, 'eGlueWeb', 'Web Designer & Developer', '48'),
(32, 75, 'Sesaf', 'PHP Developer', '8'),
(33, 75, 'Designova', 'WordPress Developer & Designer', '68'),
(34, 75, 'Quadnotion', 'Director', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_profile`
--

CREATE TABLE `candidate_profile` (
  `user_id` int(11) NOT NULL,
  `user_slug` varchar(110) NOT NULL,
  `login_id` varchar(110) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `landline` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pin` int(11) NOT NULL,
  `expectations` varchar(300) NOT NULL,
  `resumefile` varchar(300) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `applied_for` int(11) DEFAULT NULL COMMENT 'job_id will be added',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=Active,1=hired,2=Rejectlist'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_profile`
--

INSERT INTO `candidate_profile` (`user_id`, `user_slug`, `login_id`, `first_name`, `last_name`, `landline`, `address`, `city`, `email`, `pin`, `expectations`, `resumefile`, `mobile`, `applied_for`, `status`) VALUES
(25, '79195', '91', 'Abhilash', 'P', '', 'USHUS<br/>', 'Cochin', 'hiabhilash@gmail.com', 682024, 'No expectations', '1348740548.docx', '9995446123', 0, 2),
(27, '87010', '93', 'Rahul', 'Raj', '0477-2258120', 'Akshaya<br/>Pathirappally P.O', 'Alappuzha', 'rahulrajvn@gmail.com', 688521, 'To work in a good and developing Company,through which i can get more knowledge about the industry and be  a part of the developing process of the company', '1348808869.pdf', '+91-9496466982', 1704, 0),
(29, '72455', '95', 'FIBIN', 'JOY', '04822-252718', 'KALLAMPILLIL (H)<br/>PALACKATTUMALA P.O.', 'MARANGATTUPILLY, KOTTAYAM Dt.', 'fibinjoy@gmail.com', 686635, 'To work in company which will help me to utilize my skills and abilities in Linux system administration field and also improve my skills', '1348811569.docx', '+919446859846', 1704, 0),
(30, '21487', '96', 'NITHEESH', 'KN', '04952492622', 'KOTTADATH (H)<br/>CHERUKULATHOOR (PO)', 'CALICUT', 'kn.nitheeshkn@gmail.com', 673008, '8000', '1349065663.pdf', '9400492622', 0, 2),
(31, '43810', '97', 'Abhijith', 'S', '04829-256091', 'D-15 , HNL COLONY, NEWSPRINT NAGAR<br/>KOTTAYAM', 'KOTTAYAM', 'abhi1103@gmail.com', 686616, '20,000', '1349100614.docx', '8089612524', 1704, 0),
(32, '07283', '98', 'Anwar ', 'sadath', '0484-2447257', 'Kunnumel(h), Mavinchode, Manjaly<br/>Mannam.p.o,N.paravur', 'Ernakulam', 'anwarsa.sadath@gmail.com', 683520, '25,000', '1349111764.doc', '9947899193', 0, 0),
(39, '96237', '108', 'Deelip', 'Kumar', '', 'Swarnasobha<br/>kalluvathukkal', 'kollam', 'deelip.aa@gmail.com', 691578, '  I would like to be considered for the post of Linux System Administrator\nin your firm . I have a first class Degree in MCA from Mar Athanasius\nCollege of Engineering,Kothamangalam . I  worked as a Senior\nTechnical support for Symantec Antivirus process at Sutherland Global\nServices, Cochin for a p', '1349348858.doc', '9847847165', 1704, 2),
(40, '79979', '109', 'vivek', 'cv', '8590526950', 'nedumpillil (sowparnika), vattekunnam, edappally north p.o, cochin - 24<br/>', 'cochin', 'vivekcv1@gmail.com', 682024, 'Linux server admin, 13 months experience, CCNA, RHCE certified.', '1349367259.doc', '8590526950', 1704, 2),
(41, '99935', '110', 'Sujith', 'Mathew', '04812563952', 'Champappallil House<br/>Near Railway station road', 'Kottayam', 'sujithmathw@gmail.com', 686001, 'Expecting more exposure in Linux platform', '1349412198.doc', '9995076245', 1704, 0),
(42, '54169', '111', 'Sarathkumar', 'Paikkali Parambil', '0494-2420333', 'Paikkali Parambil<br/>P.O.Trikkandiyur', 'Tirur', 'sarathkumarpp@gmail.com', 676104, '\n\nFrom\n\nSARATHKUMAR P P\n\nPaikkali Parambil\nTirur\nMalappuram\nKerala\nPin – 676104\n\n+91-9995296222\nsarathkumarpp@gmail.com\n\n\nDear Sir/Madam, \nI have recently come across your posting seeking a Junior System Administrator for your company, and would like to enthusiastically submit my resume for consider', '1349441990.doc', '9995296222', 1704, 2),
(43, '62937', '112', 'Ajo', 'Joy', '', 'Arikkadan(h),p.o.vellanchira,karoor<br/>', 'Thrissur', 'ajospot@gmail.com', 680697, 'Sir,\nI am Ajo Joy,  B.Tech in Computer Science Engineer  with an  aggregate  of  65%.  Also  RHCE and Oracle Sun Solaris  certified Engineer. I will be much pleased to work in your company as a Linux administrator . Here by i do  attach a copy of my resume for your kind reference.\n\nExpecting a Favor', '1349528061.doc', '9633443718', 1704, 1),
(44, '20142', '113', 'Jefson', 'Oliver', '0484-2433520', 'vadakke thazhuppi parambil<br/>cheranellore p.o', 'kochi', 'jeffsonoliver@gmail.com', 682034, ' A Computer Science graduate with good communication and interpersonal skills and also a team player with demonstrated ability to work well with others to achieve a common goal.', '1349589690.docx', '9895336915', 1704, 2),
(45, '72232', '114', 'neljo', 'joseph', '04842550210', '33/409 kidengaeth house opp. adoration convent <br/>s.kalamssery', 'kochi', 'njneljojoseph@gmail.com', 683104, 'i wish to join as a junior linux administrator.', '1349609612.doc', '9048228929', 0, 2),
(46, '36075', '115', 'ELSON', 'ALIAS', '', 'THELAPPILLIL<br/>PULIYANAM P O', 'ANGAMALY', 'elsonalias@ymail.com', 683572, 'LINUX ADMINISTRATION', '1349851878.docx', '9605602038', 0, 2),
(47, '77689', '116', 'prajith18', 'b', '04762680016', 'pradeep nivas ,kulangarabhagom<br/>chavara p.o , kollam', 'kollam', 'prajith18@gmail.com', 691583, 'After done my graduation i like to joining in the network field.So i take the certification. Now i want to get good opening in a good company So i am here.I have 100% sure i am good employ to your company.', '1349859458.doc', '9895386343', 0, 2),
(48, '56568', '117', 'sanu', 'satheesan', '0476-2683624', 'satheesh mandiram<br/>puthenthura p.o ', 'neendakara,kollam', 'sanusadheesan@gmail.com', 691588, 'i would like to work in networking field.If i got a gob here , i think this is a good platform for to me to build my carrier.From here i can improve my knowledge in networking.', '1349859762.doc', '9744647379', 0, 2),
(50, '96235', '119', 'JITHIN', 'K JOSE', '0485 2289116', 'Karamkunnel H,Thazhuvankunnu PO,Kalloorkad<br/>', 'Kochi', 'jithinkjose1991@gmail.com', 686668, '7000', '1350365773.docx', '9946334477', 1704, 2),
(52, '41743', '121', 'Jayaram', 'Radhakrishnan', '', 'Sundar vihar, Puthiyidom , Kayamkulam<br/>', 'Aleppey', 'jayaram.professional2011@gmail.com', 690502, 'To,\nThe Manager,\nSub:Application for the Post of _Linux System Administrator\nDear Sir,\nBeing given to understand that there is a vacancy of above mentioned post in your reputed organization I would like to apply my candidature for the same.\nI request your good self to give me an opportunity to prove', '1350385559.doc', '9895178890', 1704, 2),
(53, '43585', '122', 'sony', 'antony', '', 'kochuthottathil house<br/>thuthiyoor', 'kakkanad', '12589sony@gmail.com', 682037, 'Respected sir,\n             Iam currently waiting for my MCA examination\'s result. Iam doing  my project in Asp.net with C#. So Iam expert on that language .So I expect the job\'s of software development on the language asp or vb .net.', '1350405693.doc', '9895477751', 0, 0),
(56, '66364', '125', 'SARAN', 'SATHYAN', '', 'SATHYAGIRI<br/>mallassery(po)', 'pathanamthitta', 'SARANSATHYAN@YAHOO.COM', 689646, 'Repected Sir/Mam,\n\n          I would like to bring the following to your kind consideration and early action.I believe I could make a valuable contribution to company.\n\n         I am BE graduate in electronics and communication from A.M.S engineering college . Enclosed is my resume with further back', '1350542150.doc', '9846589705', 1704, 2),
(57, '70798', '126', 'Arun', 'Kurian', '', 'Ezhakunneal (H)<br/>Kalpetta P.O,Emily', 'Wayanad', 'mailforark@gmail.com', 673121, 'I am delighted to send you a copy of my resume for your consideration.\nI am seeking a salary of 9000/month.I enthusiastically look forward to putting my knowledge and experience into practice in SupportSage.\nThank you for considering me.', '1350557308.doc', '+919447767761', 0, 2),
(58, '56657', '127', 'AFSAL', 'K R', '04752207361', 'MARUTHIMOOTTIL HOUSE<br/>THADICADU P.O,ANCHAL', 'KOLLAM', 'afsalkr894@gmail.com', 691306, 'Looking For a Job in networking Field(System / Network Admin)\n', '1350558345.pdf', '9447700894', 0, 0),
(59, '69039', '128', 'Sreekanth', 'Mohan', '0481-2711840', 'Sreenilayam<br/>Moozhikulangara P.O', 'Kottayam', 'sreekanthmohan22@gmail.com', 686601, 'Dear Sir,\n \n\n I am Sreekanth,Iam a Computer Engineer(Fresher) I hereby submit my resume as attchment  for the above specified post.\n \n\nI look forward with great interest for having an opportunity of an interview, which I shall be glad to attend.\n \n\n\nAwaiting your reply.\nWith Regards,\n\n\n \n\n\n\nSreekant', '1350644163.doc', '8281103846', 1704, 0),
(60, '73105', '129', 'AFSAL', 'KR', '04752207361', 'MARUTHIMOOTTIL VEEDU <br/>THADICADU P.O,ANCHAL', 'KOLLAM', 'afsalkr.login@gmail.com', 691306, 'No Expectations', '1350667229.pdf', '94447700894', 0, 0),
(61, '97078', '130', 'anoop', 'ps', '', 'perumplully<br/>manali', 'palakkad', 'thepsanoop@gmail.com', 678001, 'To,\nThe Hiring Manager,\neglueweb.com\nCochin\n\nSub:Application for the Post of Junior System Administrator\n\nDear Sir,\n\nBeing given to understand that there is a vacancy of above mentioned post in your reputed organization I would like to apply my candidature for the same.\n\nI request your good self to ', '1350906329.doc', '9809884846', 1704, 0),
(62, '16486', '131', 'Dhanesh', 'C', '04884282026', 'Om Sadan<br/>Pattiparambu(PO), Thiruvilwamala', 'Thrissur', 'dhanspyker@gmail.com', 680588, 'As a fresher I am only looking for an opportunity to excel and to get work experience. I expect a salary above Rs.10,000 since I need to do certification course in Networking along with my job.', '1350973167.doc', '9447369316', 0, 0),
(63, '37246', '132', 'SARATH', 'RAJAN', '04812541780', 'AMBADY (H)<br/>PUNNATHURA (E) P.O. , KIDANGOOR (S)', 'KOTTAYAM', 'sarathrjn89@gmail.com', 686583, 'I expect there should be space for best utilisation of my skill & knowledge. I also expect my growth with respect to growth of company.', '1351169589.doc', '9446762802', 1704, 0),
(68, '83178', '137', 'Jyothish', 'VU', '04829-272011', 'Vadakkechaniyil house, Kulashekharamangalam (P.O), Vaikom, Kottayam(dis), Kerala<br/>Vadakkechaniyil house, Kulashekharamangalam (P.O), Vaikom, Kottayam(dis), Kerala', 'KOTTAYAM', 'jyothish.v.u@gmail.com', 686608, '\nExpectations:\nsalary: As per company standards\nRole: Linux administrator', '1351581154.doc', '+91-8867602773', 0, 0),
(69, '10255', '138', 'Rahul', 'Ramachandran', '0481 2581987', 'Kadothvayal(H)<br/>Thiruvathukkal', 'Kottayam', 'rahulrc212@gmail.com', 686003, 'I am RHCE certified from IPSR,Kottayam.I am looking for a linux admin job.', '1351933880.doc', '08893705624', 1704, 2),
(70, '20441', '139', 'Abraham', 'Emmanuel', '', 'Kottayam <br/>', 'Kottayam', 'abraham007@ymail.com', 686002, 'I wish for an environment where i can develop my skill in Linux based networking.', '1352109835.doc', '9496801269', 0, 2),
(71, '54400', '140', 'CATHRON', 'THOMAS', '04802706506', 'KAVALAKKAT THOTTATHIL HOUSE<br/>KOTTAT P O', 'WEST CHALAKUDY , THRISSUR (DIST)', 'jottythomas@gmail.com', 680307, 'I am Cathron Thomas , completed B.tech in 2011, computer science and engineering from FISAT ,Angamaly. I have done a Hardware and Networking course for a duration of six months at CMS Kochi. I have certifications in RHCE , MCTS. I have knowledege in  Networking, PC troubleshooting, Linux.. Currently', '1352292599.doc', '9746011818', 1704, 2),
(72, '35825', '141', 'Harikrishnan', 'k k', '04802725220', 'Kuttinikkatt illam<br/>Kodakara', 'Thrissur', 'harikrkk87@gmail.com', 680684, '\n                 I am Harikrishnan k k, a fresh Engineering graduate in Computer Science and Engineering from Federal Institute of Science&Technology;(FISAT),Angamaly affiliated to MG University,Kottayam with an aggregate of 59.6% . I am a Red Hat certified Engineer.I also completed CCNA course.I a', '1352357863.doc', '9496826416', 0, 2),
(73, '95352', '142', 'denny', 'george', '0484-6524346', 'Koramangalath house, rainbow garden,unichira,thaikavu<br/>', 'ernakulam', 'denny217@gmail.com', 682033, 'Am looking for a linux system admin job. i have taken global certification on redhat.', '1352358060.pdf', '9746073445', 1704, 2),
(75, '9995', '145', 'Rakesh', 'Reghu', '', '', '', '', 0, '', '', '', NULL, 0),
(76, '47710', '145', 'Rakesh', 'Reghu', '0487234567', 'df', 'df', 'rakeshthedesigner@gmail.com', 689908, '', '', '', 1704, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `et_id` int(11) NOT NULL,
  `template_title` varchar(50) NOT NULL,
  `mail_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`et_id`, `template_title`, `mail_body`) VALUES
(11, 'Interview Call Letter - SupportSages', '<p></p><p><br>\n<br>\n</p>\n<p style=\"text-align:center\"><strong style=\"text-align:center\"><span style=\"text-decoration:underline\">Interview call letter</span> </strong></p>\n<p><strong>Dear Candidate,</strong></p>\n<p>&nbsp;</p>\n<p>This is with reference to your\napplication &amp; the subsequent selection process held on 28<sup>th</sup>\nSeptember 2012. We are pleased to invite you for an <strong>Interview&nbsp;</strong>at our office.</p>\n<p>Please find the details below:</p>\n<p><strong>Date &amp; Time:&nbsp;</strong><strong>1<sup>st</sup> &nbsp;October 2012.&nbsp;\n10.00 AM</strong></p>\n<p><strong>Contact Person:&nbsp;&nbsp;Dali T A</strong><strong>, Administrative\nOfficer</strong></p>\n<p><strong>Venue: Kadavilan Building, Edappally Toll Jn,Edappally P O</strong></p>\n<p>&nbsp;</p>\n<p>&nbsp;Please visit&nbsp;<a href=\"http://www.supportsages.com/\">www.supportsages.com</a> &nbsp;to know more\nabout us.</p>\n<p>&nbsp;</p>\n<p><strong>Selection Process:</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Technical interview</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Lab Session (for those who clear technical round\ninterviews)</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>HR interview</strong></p>\n<p>&nbsp;</p>\n<p><strong>Documents to be carried :&nbsp;</strong></p>\n<p>·&nbsp; Latest Resume with\ncontact details</p>\n<p>·&nbsp; 1 Passport size\ncolor photograph (softcopy)</p>\n<p>·&nbsp; Softcopy of all the\nMarks Sheets / education certificates </p>\n<p>&nbsp;Thanks and regards,</p>\n<p>&nbsp;Dali T A</p>\n<p>&nbsp;</p>\n<p>Administrative Officer,</p>\n<p>SupportSages</p>\n<p>Kadavilan Building</p>\n<p>Edappally Toll Jn</p>\n<p>Edappally P O<br>\n<br>\nTelephone:&nbsp; 0484 4015918</p>\n<p><a href=\"http://www.supportsages.com/\">www.supportsages.com</a></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<table cellspacing=\"0\" cellpadding=\"0\" style=\"\" margin-left:3.75pt;border-collapse:collapse;border-width:1px;border-style:solid;padding:0in=\"\" 0in=\"\" 0in\"\"=\"\">\n <tbody><tr>\n  <td></td>\n  <td></td>\n </tr>\n</tbody></table>\n<p>&nbsp;</p>\n<p>&nbsp;</p>  <br><p></p>'),
(12, 'Offer Letter - SupportSages', '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>Dear &nbsp;&lt;NAME&gt;,</em></p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>&nbsp;&nbsp;&nbsp;Congratulations!\nFurther to your application for employment with us on 28<sup>th</sup> September\n2012 and the subsequent selection process, we are delighted to offer you the\nposition of &nbsp;<strong>Junior</strong> <strong>System Administrator Trainee </strong>with <strong>SupportSages.</strong></em></p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You are required to join us\nlatest by 1<sup>st</sup> October &nbsp;2012, beyond which this offer stands\ncancelled unless otherwise either party communicates the said delay beforehand.\nYou will be given an &nbsp;on the job training for two months . After\nsuccessful completion of training period you will be offered with a salary of\nRs.7000/-&nbsp;which will be revised periodically.</em></p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>On your joining, you are\nexpected to enter into an agreement, which details the scope, terms and\nconditions of your employment, the necessary training and the contractual\nobligation to be with SupportSages for the probation period. On successful\ncompletion of the probation, your employment with SupportSages will stand\nconfirmed. Your employment will be governed by the rules, regulations and\npolicies of the company.</em></p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>The terms of this offer\nletter shall remain confidential and are not to be disclosed to any third party.</em></p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\">&nbsp;</p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>Welcome to SupportSages.\nWe wish you a rewarding and fulfilling career and look forward to your joining\nwith us.</em></p><p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em></em><em>&nbsp;Best Regards,</em></p><p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em><strong>HR Manager,</strong></em></p><p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em><strong>SupportSages.</strong></em></p>');

-- --------------------------------------------------------

--
-- Table structure for table `exam_main`
--

CREATE TABLE `exam_main` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `total_time` int(11) NOT NULL COMMENT 'In minutes',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=Active, 1=Inactive',
  `added_by` int(11) DEFAULT NULL,
  `added_on` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_main`
--

INSERT INTO `exam_main` (`exam_id`, `exam_name`, `description`, `total_time`, `status`, `added_by`, `added_on`) VALUES
(17, 'English - JSA', '', 90, 0, NULL, NULL),
(18, 'Linux - JSA', 'Test for basic level knowledge in Linux OS', 60, 1, NULL, NULL),
(20, 'Linux - Junior System Administrator', 'Test for basic level knowledge in Linux OS', 60, 0, 1, '1349853187');

-- --------------------------------------------------------

--
-- Table structure for table `exam_segments`
--

CREATE TABLE `exam_segments` (
  `eseg_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `answer_mode` varchar(75) NOT NULL,
  `question_count` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_segments`
--

INSERT INTO `exam_segments` (`eseg_id`, `exam_id`, `category`, `level`, `answer_mode`, `question_count`) VALUES
(2, 2, 'Linux', 'Intermediate', 'radio', '2'),
(3, 3, 'Linux', 'Beginner', 'type', '2'),
(4, 3, 'Linux', 'Intermediate', 'radio', '1'),
(5, 4, 'Linux', 'Beginner', 'radio', '1'),
(6, 4, 'PHP', 'Beginner', 'radio', '1'),
(7, 4, 'Language', 'Beginner', 'radio', '5'),
(8, 5, 'Language', 'Beginner', 'type', '1'),
(9, 5, 'Language', 'Beginner', 'radio', '2'),
(10, 5, 'Language', 'Expert', 'radio', '1'),
(11, 6, 'General Awareness', 'Beginner', 'type', '8'),
(12, 7, 'Linux', 'Beginner', 'check', '1'),
(13, 8, 'General Awareness', 'Beginner', 'check', '5'),
(14, 9, 'Linux', 'Beginner', 'check', '4'),
(15, 10, 'Language', 'Beginner', 'type', '1'),
(16, 10, 'Language', 'Beginner', 'radio', '2'),
(17, 10, 'Language', 'Beginner', 'check', '1'),
(18, 11, 'Linux', 'Beginner', 'type', '1'),
(19, 11, 'PHP', 'Intermediate', 'radio', '2'),
(20, 12, 'Linux', 'Beginner', 'type', '1'),
(21, 12, 'Linux', 'Beginner', 'radio', '2'),
(22, 16, 'General Awareness', 'Beginner', 'type', '5'),
(23, 16, 'Quantitative Aptitude', 'Beginner', 'radio', '2'),
(24, 16, 'Verbal Ability', 'Beginner', 'radio', '8'),
(25, 16, 'English Language', 'Expert', 'type', '3'),
(33, 18, 'Linux', 'Beginner', 'type', '20'),
(34, 19, 'English Language', 'Beginner', 'type', '5'),
(36, 21, 'General Awareness', 'Beginner', 'type', '5'),
(37, 21, 'Quantitative Aptitude', 'Beginner', 'radio', '2'),
(38, 21, 'Verbal Ability', 'Beginner', 'radio', '8'),
(39, 21, 'Error Recognition in EN Language', 'Beginner', 'radio', '3'),
(40, 21, 'Malayalam - English Vocabulary', 'Beginner', 'type', '1'),
(41, 21, 'Short Essay', 'Beginner', 'type', '1'),
(43, 17, 'General Awareness', 'Beginner', 'type', '5'),
(44, 17, 'Quantitative Aptitude', 'Beginner', 'radio', '2'),
(45, 17, 'Verbal Ability', 'Beginner', 'radio', '8'),
(46, 17, 'Error Recognition in EN Language', 'Beginner', 'radio', '3'),
(47, 17, 'Malayalam - English Vocabulary', 'Beginner', 'type', '1'),
(48, 17, 'Short Essay', 'Beginner', 'type', '1'),
(51, 22, 'Linux Basics', 'Beginner', 'radio', '10'),
(52, 22, 'Linux', 'Beginner', 'type', '20'),
(57, 20, 'Linux Basics', 'Beginner', 'radio', '10'),
(58, 20, 'Linux', 'Beginner', 'type', '20');

-- --------------------------------------------------------

--
-- Table structure for table `interview_verdict`
--

CREATE TABLE `interview_verdict` (
  `interview_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `aptitude_rating` varchar(25) NOT NULL,
  `technical_rating` varchar(25) NOT NULL,
  `verbal_rating` varchar(25) NOT NULL,
  `expected_pay` varchar(50) DEFAULT NULL,
  `current_pay` varchar(50) DEFAULT NULL,
  `notice_period` varchar(25) DEFAULT NULL,
  `summary` text NOT NULL,
  `scheduled_on` varchar(150) NOT NULL,
  `interviewer` varchar(150) NOT NULL,
  `interview_status` int(11) NOT NULL DEFAULT '0',
  `venue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_verdict`
--

INSERT INTO `interview_verdict` (`interview_id`, `user_id`, `title`, `aptitude_rating`, `technical_rating`, `verbal_rating`, `expected_pay`, `current_pay`, `notice_period`, `summary`, `scheduled_on`, `interviewer`, `interview_status`, `venue`) VALUES
(1, 31, 'Junior System Administrator', '', '', '', NULL, NULL, NULL, '', '10/03/2012 11:00 am', 'George Kutty', 0, 'SupportSages Office'),
(3, 43, 'JSA', 'Good', 'Poor', 'Good', '', '', '', 'came for interview on 19/10/2012.shortlisted and informed to join on 29/10/2012. 2 months training after that &nbsp;Rs.7000/- salary.', '10/15/2012 11:30 am', 'Abhilash P', 1, 'SS,Edappally'),
(4, 42, 'JSA', 'Good', 'Poor', 'Good', '', '', '', 'Edusages training at Rs.15000/- .<div>Joining date 22/10/2012&nbsp;</div><div>If joining he had to call. Training period ends on nov .</div><div>December payment should be paid in January.</div><div>Rs.7000/-</div>', '10/13/2012 12:00 pm', 'Abhilash P', 1, 'SS,Edappally'),
(5, 40, 'JSA', 'Poor', 'Poor', 'Poor', '', '', '', 'Technical not upto the standard of a 13 month experienced admin.<div>Verdict : Rejected on 15/10/2012</div>', '10/15/2012 10:00 am', 'Abhilash P', 1, 'SS,Edappally'),
(6, 41, 'JSA', '', '', '', NULL, NULL, NULL, '', '10/15/2012 02:00 pm', 'Abhilash P', 0, 'SS,Edappally'),
(7, 39, 'JSA', '', '', '', NULL, NULL, NULL, '', '10/13/2012 12:00 pm', 'Abhilash P', 0, 'SS,Edappally'),
(8, 69, 'Interview Scheduled', '', '', '', NULL, NULL, NULL, '', '11/06/2012 02:00 pm', 'George Kuriakose', 0, 'Door #27/305 D,\n1st Floor,\nKadavilan Buildings\nPookattupady Road\nEdapally Toll\n\nLandMark : Above Sho'),
(9, 70, 'Interview', '', '', '', NULL, NULL, NULL, '', '11/08/2012 11:00 pm', 'George', 0, 'Office');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(150) NOT NULL,
  `introduction` text NOT NULL,
  `responsibilities` text NOT NULL,
  `skillset` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `introduction`, `responsibilities`, `skillset`, `status`) VALUES
(2, 'Senior Technical Support Engineer', 'We are seeking a Senior Technical Support Engineer to join our fast growing company. You will be responsible for providing  in-depth technical support to our customers, end users, and support partners. ', 'We   are seeking a Senior Technical Support Engineer to join our fast   \ngrowing company. You will be responsible for providing&nbsp; in-depth   \ntechnical support to our customers, end users, and support partners.  <br><br>Troubleshooting,   diagnosing and resolving technical issues raised by \nthe end users over   our client\'s ticketing system or chat.<br>\nWrite technical articles for   the knowledge base.<br>\nAct as mentor for Level I staff.<br>\nIf you prove yourself to have the   managerial abilities, you will be act as supervisor / team leader for a   shift/team.<br>\nWork directly with customers via phone and trouble   tickets to resolve hosting service related issues.<br>\nParticipate in the planning of future network services and development  \n of internal applications to accomplish requirements and improve overall\n   efficiency.', 'Windows/Linux/Unix   system administration skills <br>\n          Excellent customer management and communication skills. <br>\n          Min 2 years   experience as a technical support engineer.<br>\n          Good understanding of   netfilter/iptables.<br>\n          Good knowledge in web servers, NFS, DNS, NIS,   MTAs<br>\n          Nice to have experience with Apache, Litespeed, CentOS, \nNagios,   Cacti, DNS, hosted services, MySQL, R1soft, Wordpress, cPanel <br>\n          Good knowledge of network design - Working with Firewalls, DNS, Load   Balancers<br>\n          Prefer some programming experience (particularly Perl, PHP,   HTML, MySQL)<br>\n          Knowledge of relational databases including a database   query language<br>\n          Strong written communications skills in English language.<br>\n          B.Tech /   B.E in Computer Science / IT / ECE.<br>\n          Good knowledge on shell   scripting.<br>\n          Certifications like RHCE, CCNA, MCSE, MCP, RHCT etc are   preferable.<br>\n          Hands on experience with control panels like cPanel,   Plesk, Ensim, H-Sphere, Direct Admin, dotNetPanel etc.', 0),
(1702, 'Linux System Administrator - Level III / Guru Level', 'You will be responsible for setting up (over KVM), maintenance and management of Linux based servers and its applications.', 'Monitoring   the load, diagnosis and isolation of the reasons.<br>\n          Server   Optimization and Security Fixes<br>\n          Maintaining backups - including twice   in a week check to make sure that the backups are running.<br>\n          Developing and maintaining scripts for monitoring and \nreporting various   aspects of system performance, resource utilization,\n and application   usage<br>\n          Implementing intruder detections <br>\n          Implementing hardware and   software alarm system <br>\n          Installing, optimizing, monitoring web servers, file servers, Database   servers, Mail Servers etc<br>\n          Shell/Perl/PHP/Python programming<br>\n          Installation   / patching and configuration of Kernel and Software packages.<br>\n          Documentation   of each process / tasks done.', 'Minimum 4 years Linux   administration experience<br>\n          System architecture, topology design and   implementation experience.<br>\n          Excellent written communication skills in   the English language.<br>\n          Dependable to be at work during assigned shifts and to complete work as   expected.<br>\n          Advanced knowledge of Linux OS and must have worked on all   major distros.<br>\n          Knowledge of bash and Perl shell scripting.<br>\n          TCP/IP   networking &amp; troubleshooting <br>\n          Advance knowledge on Apache, PHP, Sendmail, Exim and MySQL<br>\n          Experience   in building out MySQL clusters and high availability clusters<br>\n          Attention   to detail and dependability<br>\n          Firewall experience - iptables, ipfw   etc.<br>\n          Able to work in a high pressure 24x7x365 environment<br>\n          Willingness to   learn, teach and be challenged.<br>\n          Ability to work independently, think   creatively in order to \nsolve problems, and effectively prioritize and   complete tasks with \nminimal supervision.<br>\n          Certifications like RHCE, CCNA, MCSE, CEH etc are preferable.', 0),
(1703, 'Web Designer & Coder', 'We are looking for creative people who can do graphic designing as well as hand coding HTML and CSS of that design. When applying, please specifically mention if you are able to design but not code. If you are a graphic designer, creativity gets counted more than experience!!', 'Create graphics and   layouts, including email templates, website \ntemplates, web content,   logos, postcards, marketing brochures, fliers,\n and invitations.<br>\n          Ability   to handle multiple projects within tight deadlines', 'Web development skills -- Ability to hand   code and produce production ready CSS, HTML and Javascript.<br>\n          Experience   with an open-source CMS such as Joomla or Wordpress or Drupal is   appreciable.<br>\n          Carnal knowlege of cross-browser issues - Position is Everything -   Clicked ?<br>\n          Graphic design skills -- Demonstrated proficiency with   Photoshop, Illustrator, and InDesign<br>\n          Ability to create simple,   effective and elegant web designs.<br>\n          An exceptional portfolio of past work - Freshers with creativity may   apply.<br>\n          Passionate about interactive design and all things Internet<br>\n          Knowledge   of Javascript a plus. Ability to understand \nmodern, DOM-friendly   Javascript, specifically the \nPrototype/Scriptaculous or jQuery   libraries. <br>\n          Attention to detail and a positive attitude.<br>\n          A degree in Arts/Design   is desirable.', 0),
(1704, 'Junior System Administrator', 'We are inviting fresh Engineering and MCA graduates with passion for Linux  to build their career with our fast growing company', 'The responsibilities include but not limited to the following&nbsp;<div>Provide live chat support</div><div>Monitor severs and networks and escalate to the corresponding department</div><div>Provide basic customer support through ticketing system</div><div>Carry out tasks under the&nbsp;supervision&nbsp;of mentor</div><div>Identification of various server issues and act according to the guidelines&nbsp;</div><div><div>Documentation of issues</div></div>', 'Excellent written and verbal communication skills&nbsp;<br>Ability to handle English language as if it is your first language.<div>General knowledge of Networking, Hardware, software&nbsp;</div><div>  Proficient in &nbsp;Linux&nbsp;</div><div> Good Knowledge on&nbsp;&nbsp;Web&nbsp;server,&nbsp;Mail server, DNS,&nbsp;FTP, SSH ( Thorough knowledge on Apache and DNS will fetch you the job)</div><div>Good understanding about&nbsp;usage and purpose of Firewalls</div><div>Good Team player - Able to work independently and well on a team.<br>Caring and no bossy attitude.<br>Willingness to share your knowledge with your colleagues.<br>Passion to excel in whatever you do.<br>Creative thinking and ability to \'think outside the box\' are ESSENTIAL.<br>Honesty and Integrity  <br></div><div>The ability to respond effectively under pressure  <br></div>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '192.168.0.5', 'admins', '2017-06-26 06:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `to_user` varchar(150) NOT NULL,
  `to_email` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `timestamp` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `to_user`, `to_email`, `subject`, `message`, `status`, `timestamp`) VALUES
(1, '24', 'sreevidhya.kumar@gmail.com', 'Cool Yeah', '<br><p><br>\n<br>\n</p>\n<p style=\"text-align:center\"><strong style=\"text-align:center\"><span style=\"text-decoration:underline\">Interview call letter</span> </strong></p>\n<p><strong>Dear Candidate,</strong></p>\n<p>&nbsp;</p>\n<p>This is with reference to your\napplication &amp; the subsequent selection process held on 28<sup>th</sup>\nSeptember 2012. We are pleased to invite you for an <strong>Interview&nbsp;</strong>at our office.</p>\n<p>Please find the details below:</p>\n<p><strong>Date &amp; Time:&nbsp;</strong><strong>1<sup>st</sup> &nbsp;October 2012.&nbsp;\n10.00 AM</strong></p>\n<p><strong>Contact Person:&nbsp;&nbsp;Dali T A</strong><strong>, Administrative\nOfficer</strong></p>\n<p><strong>Venue: Kadavilan Building, Edappally Toll Jn,Edappally P O</strong></p>\n<p>&nbsp;</p>\n<p>&nbsp;Please visit&nbsp;<a href=\"http://www.supportsages.com/\">www.supportsages.com</a> &nbsp;to know more\nabout us.</p>\n<p>&nbsp;</p>\n<p><strong>Selection Process:</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Technical interview</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Lab Session (for those who clear technical round\ninterviews)</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>HR interview</strong></p>\n<p>&nbsp;</p>\n<p><strong>Documents to be carried :&nbsp;</strong></p>\n<p>·&nbsp; Latest Resume with\ncontact details</p>\n<p>·&nbsp; 1 Passport size\ncolor photograph (softcopy)</p>\n<p>·&nbsp; Softcopy of all the\nMarks Sheets / education certificates </p>\n<p>&nbsp;Thanks and regards,</p>\n<p>&nbsp;Dali T A</p>\n<p>&nbsp;</p>\n<p>Administrative Officer,</p>\n<p>SupportSages</p>\n<p>Kadavilan Building</p>\n<p>Edappally Toll Jn</p>\n<p>Edappally P O<br>\n<br>\nTelephone:&nbsp; 0484 4015918</p>\n<p><a href=\"http://www.supportsages.com/\">www.supportsages.com</a></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<table style=\"\" margin-left:3.75pt;border-collapse:collapse;border-width:1px;border-style:solid;padding:0in=\"\" 0in=\"\" 0in\"\"=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody><tr>\n  <td></td>\n  <td></td>\n </tr>\n</tbody></table>\n<p>&nbsp;</p>\n<p>&nbsp;</p>', 0, '1349097985'),
(10, '38', 'eglueweb@gmail.com', 'Send Your CD', '<br><p><br>\n<br>\n</p>\n<p style=\"text-align:center\"><strong style=\"text-align:center\"><span style=\"text-decoration:underline\">Interview call letter</span> </strong></p>\n<p><strong>Dear Candidate,</strong></p>\n<p>&nbsp;</p>\n<p>This is with reference to your\napplication &amp; the subsequent selection process held on 28<sup>th</sup>\nSeptember 2012. We are pleased to invite you for an <strong>Interview&nbsp;</strong>at our office.</p>\n<p>Please find the details below:</p>\n<p><strong>Date &amp; Time:&nbsp;</strong><strong>1<sup>st</sup> &nbsp;October 2012.&nbsp;\n10.00 AM</strong></p>\n<p><strong>Contact Person:&nbsp;&nbsp;Dali T A</strong><strong>, Administrative\nOfficer</strong></p>\n<p><strong>Venue: Kadavilan Building, Edappally Toll Jn,Edappally P O</strong></p>\n<p>&nbsp;</p>\n<p>&nbsp;Please visit&nbsp;<a href=\"http://www.supportsages.com/\">www.supportsages.com</a> &nbsp;to know more\nabout us.</p>\n<p>&nbsp;</p>\n<p><strong>Selection Process:</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Technical interview</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Lab Session (for those who clear technical round\ninterviews)</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>HR interview</strong></p>\n<p>&nbsp;</p>\n<p><strong>Documents to be carried :&nbsp;</strong></p>\n<p>·&nbsp; Latest Resume with\ncontact details</p>\n<p>·&nbsp; 1 Passport size\ncolor photograph (softcopy)</p>\n<p>·&nbsp; Softcopy of all the\nMarks Sheets / education certificates </p>\n<p>&nbsp;Thanks and regards,</p>\n<p>&nbsp;Dali T A</p>\n<p>&nbsp;</p>\n<p>Administrative Officer,</p>\n<p>SupportSages</p>\n<p>Kadavilan Building</p>\n<p>Edappally Toll Jn</p>\n<p>Edappally P O<br>\n<br>\nTelephone:&nbsp; 0484 4015918</p>\n<p><a href=\"http://www.supportsages.com/\">www.supportsages.com</a></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<table style=\"\" margin-left:3.75pt;border-collapse:collapse;border-width:1px;border-style:solid;padding:0in=\"\" 0in=\"\" 0in\"\"=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody><tr>\n  <td></td>\n  <td></td>\n </tr>\n</tbody></table>\n<p>&nbsp;</p>\n<p>&nbsp;</p>', 0, '1349184463'),
(11, '43', 'ajospot@gmail.com', 'Offer letter - SupportSages', '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>Dear &nbsp;Ajo,</em></p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>&nbsp;&nbsp;&nbsp;Congratulations!\nFurther to your application for employment with us on 19<sup>th</sup>&nbsp;October\n2012 and the subsequent selection process, we are delighted to offer you the\nposition of &nbsp;<strong>Junior</strong> <strong>System Administrator Trainee </strong>with <strong>SupportSages.</strong></em></p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You are required to join us\nlatest by <span style=\"font-size:small\">29th&nbsp;</span>October &nbsp;2012, beyond which this offer stands\ncancelled unless otherwise either party communicates the said delay beforehand.\nYou will be given an &nbsp;on the job training for two months for which you won\'t be paid. After\nsuccessful completion of training period you will be offered &nbsp;a salary of\nRs.7000/-&nbsp;which will be revised periodically.</em></p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>On your joining, you are\nexpected to enter into an agreement, which details the scope, terms and\nconditions of your employment, the necessary training and the contractual\nobligation to be with SupportSages for the&nbsp;6 months&nbsp;probation period. On successful\ncompletion of the probation, your employment with SupportSages will stand\nconfirmed. Your employment will be governed by the rules, regulations and\npolicies of the company.</em></p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>The terms of this offer\nletter shall remain confidential and are not to be disclosed to any third party.</em></p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\">&nbsp;</p>\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>Welcome to SupportSages.\nWe wish you a rewarding and fulfilling career and look forward to your joining\nwith us.</em></p><p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em></em><em>&nbsp;Best Regards,</em></p><p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em><strong>HR Manager,</strong></em></p><p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em><strong>SupportSages.</strong></em></p>', 1, '1350643486'),
(12, '62', 'dhanspyker@gmail.com', 'Interview Call Letter', '<br><p><br>\n<br>\n</p>\n<p style=\"text-align:center\"><strong style=\"text-align:center\"><span style=\"text-decoration:underline\">Interview call letter</span> </strong></p>\n<p><strong>Dear Candidate,</strong></p>\n<p>&nbsp;</p>\n<p>This is with reference to your\napplication &amp; the subsequent selection process held on 30<sup>th</sup>\nOctober&nbsp;2012. We are pleased to invite you for an <strong>Interview&nbsp;</strong>at our office.</p>\n<p>Please find the details below:</p>\n<p><strong>Date &amp; Time:&nbsp;</strong><strong>5<sup>st</sup> &nbsp;November 2012.&nbsp;\n10.00 AM</strong></p>\n<p><strong>Contact Person:&nbsp;&nbsp;Dali T A</strong><strong>, Administrative\nOfficer</strong></p>\n<p><strong>Venue: Kadavilan Building, Edappally Toll Jn,Edappally P O</strong></p>\n<p>&nbsp;</p>\n<p>&nbsp;Please visit&nbsp;<a href=\"http://www.supportsages.com/\">www.supportsages.com</a> &nbsp;to know more\nabout us.</p>\n<p>&nbsp;</p>\n<p><strong>Selection Process:</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Technical interview</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Lab Session (for those who clear technical round\ninterviews)</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>HR interview</strong></p>\n<p>&nbsp;</p>\n<p><strong>Documents to be carried :&nbsp;</strong></p>\n<p>·&nbsp; Latest Resume with\ncontact details</p>\n<p>·&nbsp; 1 Passport size\ncolor photograph (softcopy)</p>\n<p>·&nbsp; Softcopy of all the\nMarks Sheets / education certificates </p>\n<p>&nbsp;Thanks and regards,</p>\n<p>&nbsp;Dali T A</p>\n<p>&nbsp;</p>\n<p>Administrative Officer,</p>\n<p>SupportSages</p>\n<p>Kadavilan Building</p>\n<p>Edappally Toll Jn</p>\n<p>Edappally P O<br>\n<br>\nTelephone:&nbsp; 0484 4015918</p>\n<p><a href=\"http://www.supportsages.com/\">www.supportsages.com</a></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<table cellspacing=\"0\" cellpadding=\"0\" style=\"\" margin-left:3.75pt;border-collapse:collapse;border-width:1px;border-style:solid;padding:0in=\"\" 0in=\"\" 0in\"\"=\"\">\n <tbody><tr>\n  <td></td>\n  <td></td>\n </tr>\n</tbody></table>\n<p>&nbsp;</p>\n<p>&nbsp;</p>', 1, '1351835975'),
(13, '63', 'sarathrjn89@gmail.com', 'Interview Call Letter', '<br><p><br>\n<br>\n</p>\n<p style=\"text-align:center\"><strong style=\"text-align:center\"><span style=\"text-decoration:underline\">Interview call letter</span> </strong></p>\n<p><strong>Dear Candidate,</strong></p>\n<p>&nbsp;</p>\n<p>This is with reference to your\napplication &amp; the subsequent selection process held on 30th October&nbsp;2012. We are pleased to invite you for an <strong>Interview&nbsp;</strong>at our office.</p>\n<p>Please find the details below:</p>\n<p><strong>Date &amp; Time: 5th November</strong><strong>&nbsp;2012.&nbsp;\n10.30 AM</strong></p>\n<p><strong>Contact Person:&nbsp;&nbsp;Dali T A</strong><strong>, Administrative\nOfficer</strong></p>\n<p><strong>Venue: Kadavilan Building, Edappally Toll Jn,Edappally P O</strong></p>\n<p>&nbsp;</p>\n<p>&nbsp;Please visit&nbsp;<a href=\"http://www.supportsages.com/\">www.supportsages.com</a> &nbsp;to know more\nabout us.</p>\n<p>&nbsp;</p>\n<p><strong>Selection Process:</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Technical interview</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Lab Session (for those who clear technical round\ninterviews)</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>HR interview</strong></p>\n<p>&nbsp;</p>\n<p><strong>Documents to be carried :&nbsp;</strong></p>\n<p>·&nbsp; Latest Resume with\ncontact details</p>\n<p>·&nbsp; 1 Passport size\ncolor photograph (softcopy)</p>\n<p>·&nbsp; Softcopy of all the\nMarks Sheets / education certificates </p>\n<p>&nbsp;Thanks and regards,</p>\n<p>&nbsp;Dali T A</p>\n<p>&nbsp;</p>\n<p>Administrative Officer,</p>\n<p>SupportSages</p>\n<p>Kadavilan Building</p>\n<p>Edappally Toll Jn</p>\n<p>Edappally P O<br>\n<br>\nTelephone:&nbsp; 0484 4015918</p>\n<p><a href=\"http://www.supportsages.com/\">www.supportsages.com</a></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<table cellspacing=\"0\" cellpadding=\"0\" style=\"\" margin-left:3.75pt;border-collapse:collapse;border-width:1px;border-style:solid;padding:0in=\"\" 0in=\"\" 0in\"\"=\"\">\n <tbody><tr>\n  <td></td>\n  <td></td>\n </tr>\n</tbody></table>\n<p>&nbsp;</p>\n<p>&nbsp;</p>', 0, '1351836154'),
(14, '50', 'jithinkjose1991@gmail.com', 'Interview Call Letter', '<br><p><br>\n<br>\n</p>\n<p style=\"text-align:center\"><strong style=\"text-align:center\"><span style=\"text-decoration:underline\">Interview call letter</span> </strong></p>\n<p><strong>Dear Candidate,</strong></p>\n<p>&nbsp;</p>\n<p>This is with reference to your\napplication &amp; the subsequent selection process held on 31st October&nbsp;2012. We are pleased to invite you for an <strong>Interview&nbsp;</strong>at our office.</p>\n<p>Please find the details below:</p>\n<p><strong>Date &amp; Time: 5th November</strong><strong>&nbsp;2012.&nbsp;\n11.00 AM</strong></p>\n<p><strong>Contact Person:&nbsp;&nbsp;Dali T A</strong><strong>, Administrative\nOfficer</strong></p>\n<p><strong>Venue: Kadavilan Building, Edappally Toll Jn,Edappally P O</strong></p>\n<p>&nbsp;</p>\n<p>&nbsp;Please visit&nbsp;<a href=\"http://www.supportsages.com/\">www.supportsages.com</a> &nbsp;to know more\nabout us.</p>\n<p>&nbsp;</p>\n<p><strong>Selection Process:</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Technical interview</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>Lab Session (for those who clear technical round\ninterviews)</strong></p>\n<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n<strong>HR interview</strong></p>\n<p>&nbsp;</p>\n<p><strong>Documents to be carried :&nbsp;</strong></p>\n<p>·&nbsp; Latest Resume with\ncontact details</p>\n<p>·&nbsp; 1 Passport size\ncolor photograph (softcopy)</p>\n<p>·&nbsp; Softcopy of all the\nMarks Sheets / education certificates </p>\n<p>&nbsp;Thanks and regards,</p>\n<p>&nbsp;Dali T A</p>\n<p>&nbsp;</p>\n<p>Administrative Officer,</p>\n<p>SupportSages</p>\n<p>Kadavilan Building</p>\n<p>Edappally Toll Jn</p>\n<p>Edappally P O<br>\n<br>\nTelephone:&nbsp; 0484 4015918</p>\n<p><a href=\"http://www.supportsages.com/\">www.supportsages.com</a></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<table cellspacing=\"0\" cellpadding=\"0\" style=\"\" margin-left:3.75pt;border-collapse:collapse;border-width:1px;border-style:solid;padding:0in=\"\" 0in=\"\" 0in\"\"=\"\">\n <tbody><tr>\n  <td></td>\n  <td></td>\n </tr>\n</tbody></table>\n<p>&nbsp;</p>\n<p>&nbsp;</p>', 0, '1351836318'),
(40, '68', 'jyothish.v.u@gmail.com', 'Offer letter from Supportsages', '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>Dear &nbsp;Jyothish VU,</em></p>\r\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>&nbsp;&nbsp;&nbsp;Congratulations!\r\nFurther to your application for employment with us on 28<sup>th</sup> September\r\n2012 and the subsequent selection process, we are delighted to offer you the\r\nposition of &nbsp;<strong>Junior</strong> <strong>System Administrator Trainee </strong>with <strong>SupportSages.</strong></em></p>\r\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You are required to join us\r\nlatest by 1<sup>st</sup> October &nbsp;2012, beyond which this offer stands\r\ncancelled unless otherwise either party communicates the said delay beforehand.\r\nYou will be given an &nbsp;on the job training for two months . After\r\nsuccessful completion of training period you will be offered with a salary of\r\nRs.7000/-&nbsp;which will be revised periodically.</em></p>\r\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>On your joining, you are\r\nexpected to enter into an agreement, which details the scope, terms and\r\nconditions of your employment, the necessary training and the contractual\r\nobligation to be with SupportSages for the probation period. On successful\r\ncompletion of the probation, your employment with SupportSages will stand\r\nconfirmed. Your employment will be governed by the rules, regulations and\r\npolicies of the company.</em></p>\r\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>The terms of this offer\r\nletter shall remain confidential and are not to be disclosed to any third party.</em></p>\r\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\">&nbsp;</p>\r\n<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em>Welcome to SupportSages.\r\nWe wish you a rewarding and fulfilling career and look forward to your joining\r\nwith us.</em></p><p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em></em><em>&nbsp;Best Regards,</em></p><p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em><strong>HR Manager,</strong></em></p><p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"\"=\"\"><em><strong>SupportSages.</strong></em></p>', 0, '1498390920');

-- --------------------------------------------------------

--
-- Table structure for table `messages_attachments`
--

CREATE TABLE `messages_attachments` (
  `at_id` int(11) NOT NULL,
  `msg_id` varchar(25) NOT NULL,
  `attachment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages_attachments`
--

INSERT INTO `messages_attachments` (`at_id`, `msg_id`, `attachment`) VALUES
(1, '22', 'Hydrangeas.jpg'),
(2, '30', 'Desert.jpg'),
(3, '31', 'rex.png'),
(4, '33', 'mascot.png'),
(5, '34', 'pat_bg.png'),
(6, '35', 'pat_bg1.png'),
(7, '36', 'pat_bg2.png'),
(8, '37', 'pat_bg21.png'),
(9, '38', 'pat_bg3.png'),
(10, '39', 'pat_bg4.png'),
(11, '39', 'pat_bg22.png');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `perm_id` int(11) NOT NULL,
  `keyname` varchar(100) NOT NULL COMMENT 'module.controller.function',
  `description` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0-Active, 1-Decativated'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`perm_id`, `keyname`, `description`, `status`) VALUES
(1, 'secure.candidates.newcandidate', 'Adding new candidate on admin area', 0),
(2, 'secure.secure', 'Secure area dash', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `answer_type` varchar(100) NOT NULL,
  `elapse_time` varchar(150) NOT NULL,
  `exhibit` varchar(300) NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `question`, `category`, `level`, `answer_type`, `elapse_time`, `exhibit`, `added_by`, `added_on`) VALUES
(3, 'What is a firewall?', 'General Awareness', 'Beginner', 'type', '60', '', NULL, ''),
(5, 'Data in the form of continuous flow is known as?', 'General Awareness', 'Beginner', 'type', '60', '', NULL, ''),
(6, 'HTML Tags are case sensitive. True or false?', 'General Awareness', 'Beginner', 'type', '60', '', NULL, ''),
(7, 'What is phishing?', 'General Awareness', 'Beginner', 'type', '60', '', NULL, ''),
(8, 'A DNS translates a domain name into what?', 'General Awareness', 'Beginner', 'type', '60', '', NULL, ''),
(9, 'In how many different ways can the letters of the word POSTMASTER be arranged?', 'Quantitative Aptitude', 'Beginner', 'radio', '0', '', NULL, ''),
(10, 'In  a certain language BANKER is written as ‘LFSCBO’, how will CONFER  be written in that code?', 'Quantitative Aptitude', 'Beginner', 'radio', '0', '', NULL, ''),
(11, 'Books are an irreplaceable _________ of knowledge and of cultural ________.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(12, 'Man’s joy knows no bounds when he _______something ______his hopes.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(13, 'When private firms __________ in corrupt practices, their competitors or the government  are there to _________ the whistle. ', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(14, ' If she ___________ about his financial situation, she would have helped him out.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(15, 'I would buy a new house', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(17, '<p>I would accept the offer <em>if I were you.</em></p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(18, 'Because\nthe project had been a team effort, <em>we\nhad</em> <em>divided</em> the bonus equally\namong the five of us.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(23, 'What\nis SSL short for?', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(24, '<p>Which\nnetwork protocol is used to send e-mail?</p>', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(25, 'Where\nis the BIOS stored?', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(26, '<p>What is XML\nshort for?</p>', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(27, '<p>What is\nApache?</p>', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(28, 'Which of the following will come fourth in the\nEnglish Dictionary?', 'Quantitative Aptitude', 'Beginner', 'radio', '0', '', NULL, ''),
(29, 'INTELLIGENCE is written as 3 4 2 1 5 5 3 6 1 4 7\n1.Write “TELLING CENT ”.', 'Quantitative Aptitude', 'Beginner', 'radio', '0', '', NULL, ''),
(30, '<p style=\"\" margin-left:.25in;text-align:justify;text-indent:-.25in;line-height:150%\"=\"\">&nbsp;We&nbsp; live in an age of\nglobalization,&nbsp; where all barriers are\n____to_______ disappear.&nbsp;</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(31, 'Learning to do is _____ to become a productive\ncitizen, _____the quality of human life.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(32, 'The old values and practices that ___ in the\nway&nbsp; of progress should be ____ with.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(33, 'Every\nperson must learn___________.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(34, 'To\nsucceed in a difficult task _______________.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(35, '<p style=\"\" margin-left:.25in;text-indent:-.25in;line-height:115%\"=\"\">One&nbsp;\nshould never trust a person who <em>blows\nhis own trumpet.</em></p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(36, '<p>Because of his influence in the area, his\nsuggestions <em>are largely accepted</em>.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(37, 'General\nMotors is <em>set all for bringing</em> in its\nvolume-seller and other new models to Indian market.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(41, '<p>What is BIOS\nshort for?</p>', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(42, '<p>What is the\n.tbz file extension?</p>', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(43, 'HTML\ntag for inserting an image?', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(44, '<p>How many\nkeys does the standard Windows US keyboard with number pad have?</p>', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(45, '<p>What is the\nmaximum characters Linux supports in its filenames?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(47, 'I am facing East. Turning to the right I go 20 m\n, then turning to the left I go 20m&nbsp; and\nthen turning to the right I go 20 m, then again turning to the right I go 40m\nand then again 40m to the right. In which direction am I from my original\nposition?', 'Quantitative Aptitude', 'Beginner', 'radio', '60', '', NULL, ''),
(48, 'Think of a single letter which when removed from\nthe following words, form a new word   <div><p>HATE&nbsp;&nbsp;\nHIDE&nbsp;&nbsp;&nbsp; BEAR&nbsp;&nbsp;&nbsp; MANE&nbsp;&nbsp;&nbsp;\nBORNE&nbsp;&nbsp;</p>  </div>', 'Quantitative Aptitude', 'Beginner', 'radio', '60', '', NULL, ''),
(49, '<p>WTO ____ a specific&nbsp;&nbsp;\ntype of mechanism for the trading nations to ______.</p>', 'General Awareness', 'Beginner', 'radio', '0', '', NULL, ''),
(50, '<p>Trade unions in our country&nbsp;&nbsp;\nbecame powerful because politicians were ___ to ___ their large vote\nbanks.</p>', 'General Awareness', 'Beginner', 'radio', '0', '', NULL, ''),
(51, 'Children’s literature is being examined\neverywhere for its _____ and ____ value.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(52, '<p style=\"\" margin-left:.25in;text-align:justify;text-indent:-.25in;line-height:115%\"\"=\"\">The first robot that can sense\nand show emotions <em>is developed</em> as the\nultimate interactive toy.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(53, 'When\na policy is not working, we normally assume that the policy is right <em>on form and wrong</em> on content.', 'Verbal Ability', 'Beginner', 'radio', '60', '', NULL, ''),
(54, 'When\nI saw him through the window,__________.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(55, '<p>The income tax raid was too sudden,________.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(56, '<p>Many people have law degrees,________.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(60, 'In\nhow many ways can the letters of the word \'LEADER\' be arranged?', 'Quantitative Aptitude', 'Beginner', 'radio', '0', '', NULL, ''),
(61, '<p>&nbsp;In a certain code,\nRHYME is written as MEYRH. How will CAMEL be written as?</p>', 'Quantitative Aptitude', 'Beginner', 'radio', '0', '', NULL, ''),
(62, '<p style=\"\" margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:13.5pt;text-indent:-13.5pt;line-height:200%\"\"=\"\">A program that can copy itself and\ninfect a computer without the permission or knowledge of&nbsp;&nbsp; the owner is called what?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(63, 'Name\nthe first web browser?', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(64, 'Piece\nof text stored on a user’s computer by a web browser for maintaining the state?', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(65, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">HTTP stands for?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(66, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">What is JVM?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(67, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">You have a executable\nbinary called name a.out in /home/user1 and your present working directory is\n/home/user1 itself. If so how do you run the binary program a.out?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(68, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">What are the various\nrunlevels in Linux, and detail the machine status in each run level?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(69, 'Briefly\nexplain the booting process of Linux?&nbsp;', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(70, 'Mention\ndefault directories in Linux?&nbsp;', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(71, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">Give the port numbers of\nFTP, SMTP, SSH, HTTP, HTTPS, Telnet and DNS?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(72, '<p>What\nis an INODE?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(74, '<p>Difference\nbetween locate and find command?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(76, 'How\ndo you list compiled-in Apache modules?', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(77, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">Machine language is also known as?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(78, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">What does BCC means in Email?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(79, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">Name the mascot of Linux OS.</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(80, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">Name the body / consortium responsible for\nthe domain name registration?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(81, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">BIOS stands for?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(82, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">The command(s) used to view the partitions\nand size of them?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(83, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">Can we change the port number of apache? If\nso what is the directive related to it?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(84, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">What does the command pwconv do?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(85, 'Explain\nSUID bit, SGID bit and sticky bit with examples.', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(86, '<p style=\"\" margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:22.5pt;text-indent:-22.5pt;line-height:200%\"\"=\"\">You want to create a “compressed” backup of a\ndirectory&nbsp; /home/user1 preserving all the\nownership and permissions. Give the command you would be using for the&nbsp; purpose.</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(87, '<p style=\"\" margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:22.5pt;text-indent:-22.5pt;line-height:200%\"\"=\"\">Give the command to extract only one file\n(/home/user1/.bash_history) from the backup of /home/user1 you created, namely backup_user1.tar.bz2</p>', 'Linux', 'Beginner', 'type', '60', '', NULL, ''),
(88, 'What\nis the name and path of the main system log?<br>\n<br>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(89, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"=\"\">What does the below key\ncombination do on a bash shell?</p>\n<p style=\"\" margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:22.5pt;text-align:justify;line-height:200%\"\"=\"\"><strong>a.</strong>Ctrl+A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>b.</strong>Ctrl+W&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>c.</strong>Ctrl+E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>d.</strong>Ctrl+U</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(90, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">Winchester drive is also called?<a></a></p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(91, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">SMPS stands for?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(92, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">What type of connector is used to plug a\ntelephone line into a modem?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(93, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">What is the default subnet mask of the IP\naddress 192.168.1.10?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(94, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">What does OEM mean?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(95, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">How do you list a user’s cronjob (user name\nis user1)?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(96, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">What is a CNAME record? Give an example where\nyou would use it.</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(97, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">&nbsp;Name\nall the 7 OSI layers in order?</p><p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\"><br></p>', 'Linux', 'Beginner', 'type', '60', '', NULL, ''),
(98, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">How do you change the login shell of a\nsystem user?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(99, 'In\norder to improve your system’s security you decide to implement shadow\npasswords.<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">What command should you use?</p>', 'Linux', 'Beginner', 'type', '60', '', NULL, ''),
(100, 'What\naccount is created when you install Linux?', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(101, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">What command can you use to review boot\nmessages?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(102, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">What is the name and path of the main system\nlog?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(103, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;line-height:200%\"\"=\"\">How DNS resolution works?</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(104, 'How\ndo you list and flush all IPtables?', 'Linux', 'Beginner', 'type', '60', '', NULL, ''),
(105, '<p>The film had to be shot where the great Saint Meera lived and invented her immortal songs.</p>', 'Error Recognition in EN Language', 'Beginner', 'radio', '60', '', NULL, ''),
(106, 'Translate this Malayalam passage to English. Please note that this is not a comprehension. This is meant to test your vocabulary and English grammar.', 'Malayalam - English Vocabulary', 'Beginner', 'type', '0', '1348743282.png', NULL, ''),
(107, 'Translate this Malayalam passage to English. Please note that this is \nnot a comprehension and instead a line by line translation. This is meant to test your vocabulary and English \ngrammar.', 'Malayalam - English Vocabulary', 'Beginner', 'type', '0', '1348743458.png', NULL, ''),
(108, 'Translate this Malayalam passage to English. Please note that this is \nnot a comprehension and instead a line by line translation. This is meant to test your vocabulary and English \ngrammar.', 'Malayalam - English Vocabulary', 'Beginner', 'type', '0', '1348743487.png', NULL, ''),
(109, 'Translate this Malayalam passage to English. Please note that this is \nnot a comprehension and instead a line by line translation. This is meant to test your vocabulary and English \ngrammar.', 'Malayalam - English Vocabulary', 'Beginner', 'type', '0', '1348743513.png', NULL, ''),
(110, 'Translate this Malayalam passage to English. Please note that this is \nnot a comprehension and instead a line by line translation. This is meant to test your vocabulary and English \ngrammar.', 'Malayalam - English Vocabulary', 'Beginner', 'type', '0', '1348743531.png', NULL, ''),
(111, 'Translate this Malayalam passage to English. Please note that this is \nnot a comprehension and instead a line by line translation. This is meant to test your vocabulary and English \ngrammar.', 'Malayalam - English Vocabulary', 'Beginner', 'type', '0', '1348743553.png', NULL, ''),
(112, 'Translate this Malayalam passage to English. Please note that this is \nnot a comprehension and instead a line by line translation. This is meant to test your vocabulary and English \ngrammar.', 'Malayalam - English Vocabulary', 'Beginner', 'type', '0', '1348743591.png', NULL, ''),
(113, 'Translate this Malayalam passage to English. Please note that this is \nnot a comprehension and instead a line by line translation. This is meant to test your vocabulary and English \ngrammar.', 'Malayalam - English Vocabulary', 'Beginner', 'type', '0', '1348743640.png', NULL, ''),
(114, 'Briefly explain about your College Days.(Use less than 1000 words)', 'Short Essay', 'Beginner', 'type', '0', '', NULL, ''),
(115, 'Briefly explain about your \" Childhood  Days \". (Use less than 1000 words)', 'Short Essay', 'Beginner', 'type', '0', '', NULL, ''),
(116, 'Briefly explain about your \" Happiest moment in life \". (Use less than 1000 words)', 'Short Essay', 'Beginner', 'type', '0', '', NULL, ''),
(117, 'Arun\'s parents died &nbsp;when he was young and he looked after his aunt who had no children', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(118, 'The tussle is nothing but a clash of egos&nbsp;against&nbsp;the two brothers', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(119, 'Had security concerns been cited as the reason behind&nbsp;&nbsp;the decision , it had carried some weight.', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(120, '<div style=\"text-align:left\">Consumer groups are not opposed to genetic engineering but believe that caution must be applied until its impact is known and safeguards are in place.</div>', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(121, 'From\nthat data a neurologist is able to determine whether or not the never has been\naffected by injury, a motor disease or any problems.', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(122, 'Over\nthe centuries the courses of history have led&nbsp; to steady expansion in the use of\nsome languages', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(123, '<p>It’s a colossal waste of the public’s money which could have\nbeen put to much better use</p>', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(124, 'Last\nmonth we celebrated the wedding &nbsp;of sister\nfor whom we have been looking for a our suitable alliance for three years', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(125, '<p>&nbsp;There is one word in the English language that\nis always pronounced incorrectly. What is it?</p>', 'Quantitative Aptitude', 'Beginner', 'type', '0', '', NULL, ''),
(126, '<p>A light flashes every 10 seconds, how many times\nwill it flash in 3/4 of an hour ?</p>', 'Quantitative Aptitude', 'Beginner', 'type', '0', '', NULL, ''),
(127, '<p>&nbsp;How many squares are there in a &nbsp;Standard Chess board ?</p>', 'Quantitative Aptitude', 'Beginner', 'type', '0', '', NULL, ''),
(128, 'At\na party, everyone shook hands with everybody else. There were 66 handshakes. How\nmany people&nbsp; were at the party?', 'Quantitative Aptitude', 'Beginner', 'type', '0', '', NULL, ''),
(129, '<p style=\"\" text-indent:-.25in\"=\"\">A\nbus runs at a speed of 100 km/hr top speed. it can carry a maximum of 6\npersons. if the speed of the bus decreases in fixed proportion to the increase\nin the number of persons, find the speed when three persons are travelling in\nthe bus?&nbsp;</p>', 'Quantitative Aptitude', 'Beginner', 'type', '0', '', NULL, ''),
(130, 'In how many different ways\ncan the letters of the word \'OPTICAL\' be arranged so that the vowels always\ncome together?', 'Quantitative Aptitude', 'Beginner', 'type', '60', '', NULL, ''),
(131, '<p>&nbsp;No&nbsp; matter which government is in power, the\ncommon man’s security is of _______ , _____ to the authorities.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(132, '<p>&nbsp;&nbsp;The state and civil society\ncan enter into new arrangements&nbsp;\nwith&nbsp; more ________where earlier\nsystems failed to ________.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(133, '<p>Civilization is like a plant\nthat ________ its ____ to the land on which it grows.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(134, '<p>&nbsp;Human beings are _____ to\nfear , cruelty and envy just as they are to _______.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(135, 'Autonomy will mainly\n________ that the television is not subjected to government pressure in &nbsp;&nbsp;&nbsp;&nbsp;the\n_________ of its programmes.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(136, '<p>Corruption refers to the acts of\n__________ and commission committed under a ________ influence.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(137, '<p>Poverty is the principal and\nparent cause for the _________ and _________ of child labour.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(138, 'Relief cannot be and ought\nnot to be ______________ solely in monetary __________.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(139, 'Global society needs to\nemploy education as a powerful weapon in its ______ for overcoming the&nbsp; _____ tensions of 21<sup>st</sup> century.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(140, 'He\nhas no money now, __________.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(141, 'Because\nhe believes in democratic principles, he always......', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(142, 'His\nbehavior is so unpredictable that he __________.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(143, 'The\nofficer who had neglected to files his income tax returns had to _______.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(144, 'In\norder to raise company\'s profit, the employees ________.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(145, 'It\nwas an extremely pleasant surprise for the hutment-dweller when the Government\nofficials told him that________.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(146, 'Even\nthough it is very large house, ________.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(147, '<p style=\"\" margin-bottom:0in;margin-bottom:.0001pt;text-align:justify;line-height:150%\"=\"\">The explorer <em>had frozen to death</em> due to extremely low\ntemperature.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(148, '<p style=\"\" margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.25in;text-align:justify;line-height:150%\"=\"\"><em>I was touching with pity</em> when I heard that he had\ndied.</p><p style=\"\" margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.25in;text-align:justify;line-height:150%\"=\"\"><br></p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(149, '<p>He <em>had accused of</em> various offences by his colleagues.</p>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(150, 'She never visits any zoo because she is strong opponent of the idea of _______.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(151, '\" You are thinking very highly about Ravi but he is not so\" means ......', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(152, 'Although, he is reputed for making very candid statements ________.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(153, '<div><p>Owing to the acute power shortage, the people of\nour locality have decided to ......</p>  <br></div>', 'Verbal Ability', 'Beginner', 'radio', '60', '', NULL, ''),
(154, '<p>Sobhraj could be easily\narrested because the police were&nbsp;<em>tipped off</em>&nbsp;in a advance.</p>  <div></div>', 'Verbal Ability', 'Beginner', 'radio', '60', '', NULL, ''),
(155, 'I met him after a long time, but he<em> gave me</em>&nbsp;<em>the cold shoulder</em>.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(156, 'He&nbsp;<em>passed himself off</em>&nbsp;as a noble man.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(157, 'He was undecided. He&nbsp;<em>let the grass grow under his feet</em>.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(158, 'Although he has failed in the written examination, he is using&nbsp;<em>backstairs influence</em>&nbsp;to get the job.', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(159, 'The autographed bat from the famous cricketer Sunil Gavaskar is&nbsp;<em>worth a jew\'s eye</em>', 'Verbal Ability', 'Beginner', 'radio', '0', '', NULL, ''),
(160, 'Do the roses in your garden smell more sweetly than those in ours?', 'Error Recognition in EN Language', 'Beginner', 'radio', '60', '', NULL, ''),
(161, 'Having received your letter&nbsp;this morning, we are writing&nbsp;to thank you for the same.', 'Error Recognition in EN Language', 'Beginner', 'radio', '60', '', NULL, ''),
(162, 'Locke\'s treatises on government toleration and education&nbsp;show a mind fully awake in&nbsp;the possibilities of social reconstruction.', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(163, 'None of the students attending your class&nbsp;answered your questions  &nbsp;did they?', 'Error Recognition in EN Language', 'Beginner', 'radio', '60', '', NULL, ''),
(164, 'A large scale exchange of nuclear weapons&nbsp;will produce unprecedented amounts of radiation&nbsp;that can penetrate into the biological tissue.', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(165, 'The person which was&nbsp;recommended for the position&nbsp;did not fulfil the prescribed qualifications.', 'Error Recognition in EN Language', 'Beginner', 'radio', '60', '', NULL, ''),
(166, 'The presumption that the average investor does not understand&nbsp;or take interest in the affairs of the company&nbsp;is not correct.', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(167, 'Sheela has scored a first class in her final exams, isn\'t it?', 'Error Recognition in EN Language', 'Beginner', 'radio', '60', '', NULL, ''),
(168, 'There was very heavy rain last night,and the rivers have overflown their banks', 'Error Recognition in EN Language', 'Beginner', 'radio', '0', '', NULL, ''),
(169, 'What does FSF stand\nfor?', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(170, 'How many primary\npartitions can exist on one drive?', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(171, 'What service is used\nto translate domain names to IP addresses?', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(173, 'What command is used\nwith vi editor to delete a single character?', 'Linux', 'Beginner', 'type', '60', '', NULL, ''),
(176, '<p>What is&nbsp;&nbsp;<em>Software Piracy</em>?</p>', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(177, '<p>What is&nbsp;&nbsp;<em>backing up</em>&nbsp;and why is it so\nimportant?</p>', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(178, '<p>What is&nbsp;&nbsp;<em>pseudocode</em>?</p>', 'General Awareness', 'Beginner', 'type', '60', '', NULL, ''),
(179, 'What is&nbsp;&nbsp;<em>beta testing</em>?', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(180, '<p>What is CGI?</p>', 'General Awareness', 'Beginner', 'type', '60', '', NULL, ''),
(181, '<p>Which Component of PC&nbsp;maintains data and time?</p>', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(182, '<p>The term Pentium is related to?</p>', 'General Awareness', 'Beginner', 'type', '0', '', NULL, ''),
(184, '<p>What\nare the different RAID levels? Explain each level</p>', 'Linux', 'Beginner', 'type', '0', '', NULL, ''),
(186, 'How do you copy an entire directory to another one E.g.\nfrom Project to Project.backup', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350370234'),
(187, 'What is the command to rename a file?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350370305'),
(188, 'What command is used to remove files?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350370804'),
(189, 'What command is used to remove the directory?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350370887'),
(190, '<p>What command is used with vi editor to\ndelete a single character?</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350370938'),
(191, 'What hardware architectures are not supported by Red Hat?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350371034'),
(192, 'What TCP/IP\nprotocol is used for remote terminal connection service?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350371405'),
(193, 'What service is used to translate domain names to IP\naddresses?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350371471'),
(194, 'What file specifies the order in which to use specified\nname services?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350371542'),
(195, 'How many primary partitions can exist on one drive?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350375328'),
(196, 'In which directory can you store system user default\nfiles used for creating user directories?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350375470'),
(197, 'How could you install the file iptables-1.3.9-5.i386.rpm?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350375570'),
(198, 'What does FSF stand for?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350375669'),
(200, 'What command do you use to create Linux file systems?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350375919'),
(201, 'Which of the following command can you execute to count\nthe number of lines in a file?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350377644'),
(202, 'What command is used to display the characteristics of a\nprocess?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350377714'),
(203, 'What command is used to sort the lines of data in a file\nin alphabetical order?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350377913'),
(204, 'What command is used with vi editor to save file and\nremain in the editing mode?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350377982'),
(205, 'What command is used with vi editor to move back to the\nbeginning of a word?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350378247'),
(206, 'What command is used with vi editor to search a pattern\nin the forward direction?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350378306'),
(207, 'What command is used to add printing jobs to the queue?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350378440'),
(208, 'What protocol(s) is(are) allowed a user to retrieve\nher/his mail from the mail server to her/his mail reader?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350378548'),
(209, 'Which of the following server is used with the BIND\npackage?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350378634'),
(210, 'Which of the following is the main Apache configuration\nfile?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350378696'),
(211, 'Which of the following command is used to access an SMB\nshare on a Linux system?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350378752'),
(212, 'Which of the following command is used to see the\nservices running in NFS server?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '0', '', 1, '1350378811'),
(213, '<p>In which tcp_wrappers file can you specify\nto allow all connections from all hosts?</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350378868'),
(214, 'What command is used to list contents of directories?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350378928'),
(215, 'What layer of OSI determines the interface of the\nsystem with the user?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350378989'),
(216, 'What command is used to remove jobs from the print queue?', 'English Language', 'Beginner', 'radio', '60', '', 1, '1350379050'),
(217, 'How do you create a crontab entry?', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350379101'),
(218, 'How do you display your current crontab entry?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350379146'),
(221, 'How do you find out information about your identity,\nincluding the names of the groups you are in?\n<p>&nbsp;</p>', 'Linux Basics', 'Beginner', 'radio', '60', '', 1, '1350384308');

-- --------------------------------------------------------

--
-- Table structure for table `question_categories`
--

CREATE TABLE `question_categories` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(75) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_categories`
--

INSERT INTO `question_categories` (`cat_id`, `category`, `description`) VALUES
(1, 'English Language', ''),
(2, 'General Awareness', 'Questions 1-5 :&nbsp;Intended to test General Awareness'),
(3, 'Linux', 'Intended to test&nbsp;Technical Awareness'),
(4, 'Quantitative Aptitude', 'Intended to test Aptitude skills'),
(5, 'Verbal Ability', 'Intended to test your Verbal ability'),
(6, 'Error Recognition in EN Language', 'Identify the erred section in the sentence.'),
(7, 'Malayalam - English Vocabulary', 'This question requires you to translate the following passage in Malayalam to English line by line.'),
(8, 'Short Essay', 'This section is meant to check your proficiency  in English grammar'),
(9, 'Linux  Basics', 'Intended to test basic knowledge in Linux');

-- --------------------------------------------------------

--
-- Table structure for table `question_levels`
--

CREATE TABLE `question_levels` (
  `lev_id` int(11) NOT NULL,
  `level` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_levels`
--

INSERT INTO `question_levels` (`lev_id`, `level`) VALUES
(1, 'Beginner'),
(2, 'Intermediate'),
(3, 'Expert'),
(4, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `opt_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `answer_option` varchar(300) NOT NULL,
  `is_answer` int(11) NOT NULL COMMENT '0=Normal,1=Answer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`opt_id`, `q_id`, `answer_option`, `is_answer`) VALUES
(1, 9, '902700', 0),
(2, 9, '90720  ', 0),
(3, 9, '900720 ', 0),
(4, 9, '453600', 0),
(5, 9, 'None of these             ', 1),
(6, 10, 'GFSDPO ', 1),
(7, 10, 'FGSDOP  ', 0),
(8, 10, 'GFSEPO   ', 0),
(9, 10, 'FHSDPO ', 0),
(10, 10, 'None of these     ', 0),
(11, 11, 'World, diversity       ', 0),
(12, 11, 'vision, contours         ', 0),
(13, 11, 'storehouse, values          ', 1),
(14, 11, 'gem, ethos                      ', 0),
(15, 12, 'Seeks, against        ', 0),
(16, 12, 'gain, encompassing       ', 0),
(17, 12, 'earns, ahead             ', 0),
(18, 12, 'obtains, beyond     ', 1),
(19, 13, 'Manipulate, warn      ', 0),
(20, 13, ' flourish, target        ', 0),
(21, 13, 'deal, raise                 ', 0),
(22, 13, 'engage, blow    ', 1),
(23, 14, 'Knew', 0),
(24, 14, 'Had known  ', 1),
(25, 14, 'Had been knowing', 0),
(26, 14, 'Have known', 0),
(27, 15, 'If I have a lot of money', 0),
(28, 15, 'If I win the lottery', 0),
(29, 15, 'If I inherited a million dollars ', 1),
(35, 17, 'Even if I were you', 0),
(36, 17, 'If I had in your place', 0),
(37, 17, 'Had I being you', 0),
(38, 17, 'had been I in your place', 0),
(39, 17, 'No correction required', 1),
(40, 18, 'Have had divided', 0),
(41, 18, 'Decided on a division of ', 0),
(42, 18, 'Divided', 1),
(43, 18, 'Were divided', 0),
(44, 18, 'No correction required', 0),
(49, 23, 'Answer in one or two sentences.', 1),
(50, 28, 'FALSE  ', 0),
(51, 28, 'FOLLOW    ', 1),
(52, 28, 'FAITHFULLY', 0),
(53, 28, 'FOOL ', 0),
(54, 28, 'FALLIBLE  ', 0),
(55, 29, '342155306147', 0),
(56, 29, '21553467142   ', 1),
(57, 29, '21534671425   ', 0),
(58, 29, '23456781234  ', 0),
(59, 29, '21557143462  ', 0),
(60, 30, 'Meant, disappear     ', 1),
(61, 30, 'raised, halt     ', 0),
(62, 30, 'supposed, soften      ', 0),
(63, 30, 'geared, smoothen ', 0),
(64, 31, 'Important, curtailing     ', 0),
(65, 31, 'vital, enhancing  ', 1),
(66, 31, 'Effective, changing     ', 0),
(67, 31, 'essential, altering     ', 0),
(68, 32, 'Obstruct, rejected        ', 0),
(69, 32, 'hamper, decried ', 0),
(70, 32, 'Figure, dispersed           ', 0),
(71, 32, 'stand, dispensed             ', 1),
(72, 33, 'That his time needs a wise use', 0),
(73, 33, 'Wise ways in his time’s use', 0),
(74, 33, 'To  make wise use of his time ', 1),
(75, 33, 'That how wisely his time can be used', 0),
(76, 34, 'You  need a person of persistent', 0),
(77, 34, 'One needs to be persistent ', 1),
(78, 34, 'Persistent is one needed', 0),
(79, 34, 'Persistent is what one needs', 0),
(80, 35, 'Thinks for himself', 0),
(81, 35, 'Praises himself', 1),
(82, 35, 'Acts as a dictator', 0),
(83, 35, 'Remains self-centered', 0),
(84, 35, 'None of these', 0),
(85, 36, 'Are without question accepted', 0),
(86, 36, 'Are widely accepted', 1),
(87, 36, 'Are in favour accepted', 0),
(88, 36, 'Are accepted in large quantity.', 0),
(89, 36, 'No correction required', 0),
(90, 37, 'All the set for bringing', 0),
(91, 37, 'Set for bringing', 0),
(92, 37, 'Set to bringing', 0),
(93, 37, 'All set to bring', 1),
(94, 37, 'No correction required', 0),
(108, 49, 'Prescribes, observe       ', 1),
(109, 49, 'regulates, compete  ', 0),
(110, 49, 'Divulges, forward        ', 0),
(111, 49, 'caters, monitor                ', 0),
(112, 50, 'Ready, increase          ', 0),
(113, 50, 'reluctant, displease ', 1),
(114, 50, 'Supposed, generate                ', 0),
(115, 50, 'eager, assemble                ', 0),
(116, 51, 'Appropriateness, educational  ', 1),
(117, 51, 'merit, simplicity  ', 0),
(118, 51, 'Minuteness, cross     ', 0),
(119, 51, 'softness, mystical             ', 0),
(120, 52, 'Was developed', 0),
(121, 52, 'Is now developed ', 0),
(122, 52, 'Is being developed ', 1),
(123, 52, 'Were being developed', 0),
(124, 52, 'No correction required', 0),
(130, 54, 'I ran out to open the door', 1),
(131, 54, 'I have run out to open the door', 0),
(132, 54, 'I should run out to open the door', 0),
(133, 54, 'I am running  out to open the door', 0),
(134, 54, 'None of these', 0),
(135, 55, 'So that the man escaped', 0),
(136, 55, 'For the man escaping', 0),
(137, 55, 'Then the man escaped', 0),
(138, 55, 'For the man to escape', 1),
(139, 55, 'None of these', 0),
(140, 56, 'But not all of them practice law', 1),
(141, 56, 'However it isn’t practiced by all', 0),
(142, 56, 'And  some of them do have practice also', 0),
(143, 56, 'But some of them do not practice it', 0),
(144, 56, 'Yet some are not undergoing practice', 0),
(148, 60, '72 ', 1),
(149, 60, '144    ', 0),
(150, 60, '360  ', 0),
(151, 60, '720           ', 0),
(152, 61, 'ELMCA  ', 1),
(153, 61, 'ACMLE          ', 0),
(154, 61, 'ACMEL', 0),
(155, 61, 'LEMAC', 0),
(156, 97, 'osi Model', 1),
(162, 117, 'Arun\'s parents died', 0),
(163, 117, 'when he was young', 0),
(164, 117, 'and he looked after his aunt', 1),
(165, 117, 'who had no children', 0),
(166, 117, 'no error', 0),
(167, 118, 'The tussle is nothing', 0),
(168, 118, 'but a clash ', 0),
(169, 118, 'of egos against', 1),
(170, 118, 'the two brothers ', 0),
(171, 118, 'no error', 0),
(172, 119, 'Had security concerns been cited ', 0),
(173, 119, 'as the reason behind ', 0),
(174, 119, 'the decision , it had', 1),
(175, 119, 'carried some weight.', 0),
(176, 119, 'No error', 0),
(177, 120, 'Consumer groups are not opposed to', 0),
(178, 120, ' genetic engineering but believe that caution', 0),
(179, 120, 'must be applied until its impact is', 0),
(180, 120, 'known and safeguards are in place.', 0),
(181, 120, 'No error', 1),
(182, 121, 'From that data a neurologist', 0),
(183, 121, 'is able to determine whether or not', 1),
(184, 121, 'the never has been affected by', 0),
(185, 121, 'injury, a motor disease or any problems.', 0),
(186, 121, 'No error', 0),
(187, 122, 'Over the centuries', 0),
(188, 122, 'the courses of history have ', 1),
(189, 122, 'led  to steady expansion ', 0),
(190, 122, 'in the use of some languages ', 0),
(191, 122, 'No error', 0),
(192, 123, 'It’s a colossal waste', 0),
(193, 123, 'of the public’s money ', 1),
(194, 123, 'which could have been', 0),
(195, 123, 'put to much better use', 0),
(196, 123, 'No error', 0),
(197, 124, 'Last month we celebrated ', 0),
(198, 124, 'the wedding  of sister for whom', 1),
(199, 124, 'we have been looking', 0),
(200, 124, 'we have been looking for a our suitable', 0),
(201, 124, 'No Error', 0),
(202, 48, 'A', 1),
(203, 48, 'I', 0),
(204, 48, 'E', 0),
(205, 48, 'N', 0),
(206, 48, 'C', 0),
(207, 47, 'North', 1),
(208, 47, 'West', 0),
(209, 47, 'East', 0),
(210, 47, 'South', 0),
(211, 47, 'Cannot Say', 0),
(212, 53, 'About its form and wrong about its', 1),
(213, 53, 'Formally and wrong about', 0),
(214, 53, 'In form and wrong in', 0),
(215, 53, 'For form but wrong in', 0),
(216, 53, 'None of these', 0),
(222, 105, 'The film had to be', 1),
(223, 105, 'shot where the ', 0),
(224, 105, 'the great Saint Meera lived', 0),
(225, 105, 'and invented her immortal songs.', 0),
(226, 105, 'No error', 0),
(227, 125, 'Incorrectly', 1),
(228, 126, '271 times ', 1),
(229, 127, '204', 1),
(230, 128, '12  ', 1),
(231, 129, '100 Km/hr ', 1),
(233, 130, '720', 1),
(234, 131, 'Prime, stake', 0),
(235, 131, 'Basic, contemplation', 0),
(236, 131, 'Due, deliberation', 0),
(237, 131, 'Least, concern', 1),
(238, 131, 'Much, curiosity', 0),
(239, 132, 'Credibility, initiate', 0),
(240, 132, 'Accountability, deliver', 1),
(241, 132, 'Transparency, respond', 0),
(242, 132, 'Preparation, proceed', 0),
(243, 132, 'Ease, result', 0),
(244, 133, 'Spreads, wings', 0),
(245, 133, 'Raises, roots', 0),
(246, 133, 'Owes, existence', 1),
(247, 133, 'Bears, fruits', 0),
(248, 133, 'Utilizes, potential', 0),
(249, 134, 'Susceptible, devotion', 0),
(250, 134, 'Subjected, positivism', 0),
(251, 134, 'Succumbed, generosity', 0),
(252, 134, 'Taught, friendship', 0),
(253, 134, 'Prone, love  ', 1),
(254, 135, 'Imply, shooting    ', 0),
(255, 135, 'focus, screening    ', 0),
(256, 135, 'state, objectivity     ', 0),
(257, 135, 'ensure, telecast ', 1),
(258, 135, 'enforce, making', 0),
(259, 136, 'treason, noble ', 1),
(260, 136, 'treachery, surreptitious  ', 0),
(261, 136, 'violence, ostensible', 0),
(262, 136, 'omission, vitiating            ', 0),
(263, 136, 'irregularity, perverse', 0),
(264, 137, 'beginning, end     ', 0),
(265, 137, 'utilization, continuating  ', 0),
(266, 137, 'prevalence, persistence    ', 1),
(267, 137, 'abuse, use          ', 0),
(268, 137, 'existence, ban', 0),
(269, 138, 'distributed, transactions   ', 0),
(270, 138, 'measured, terms    ', 1),
(271, 138, 'delivered, donations  ', 0),
(272, 138, 'directed, aspects ', 0),
(273, 138, 'managed, measures', 0),
(274, 139, 'Initiative, different', 0),
(275, 139, 'Operation, difficult', 0),
(276, 139, 'Front, various', 0),
(277, 139, 'Decision, international', 0),
(278, 139, 'Strategy, diverse', 1),
(279, 140, 'although he was very poor once', 0),
(280, 140, 'as he has given up all his wealth', 1),
(281, 140, 'because he was very rich once', 0),
(282, 140, 'because he has received huge donation', 0),
(283, 140, 'because he was very greedy about wealth', 0),
(284, 141, 'decides all the matters himself', 0),
(285, 141, 'listen to others views and enforces his own', 0),
(286, 141, 'shown respect to others opinions if they match his own', 0),
(287, 141, 'reconciles with the majority views and gives us his own  ', 1),
(288, 141, 'imposes his own views on others', 0),
(289, 142, 'never depends upon others for getting his work done', 0),
(290, 142, 'is seldom trusted by others ', 1),
(291, 142, 'always finds it difficult to keep his word', 0),
(292, 142, 'always insists on getting the work completed on time', 0),
(293, 142, 'seldom trusts others as far as the work schedule is concerned', 0),
(294, 143, 'return the files', 0),
(295, 143, 'pay a fine ', 1),
(296, 143, 'be rewarded', 0),
(297, 143, 'play mischief', 0),
(298, 143, 'give warning', 0),
(299, 144, 'demanded two additional increments', 0),
(300, 144, 'decided to go on paid holidays', 0),
(301, 144, 'requested the management to implement new welfare schemes', 0),
(302, 144, 'offered to work overtime without any compensation', 0),
(303, 144, 'decided to raise the cost of raw material  ', 1),
(304, 145, 'he had to vacate hutment which he had been unauthorisedly occupying', 0),
(305, 145, 'he had been gifted with a furnished apartment in a multi-storeyed building ', 1),
(306, 145, 'he would be arrested for wrongfully encroaching on the pavement outside his dwelling', 0),
(307, 145, 'they would not accede to his request', 0),
(308, 145, 'they had received the orders from the court to take possession of all his belongings', 0),
(309, 146, 'there is a lot of space available in it for children', 0),
(310, 146, 'there is hardly any space available for children  ', 1),
(311, 146, 'there is no dearth of space for children', 0),
(312, 146, 'the servants take a long time to clean it', 0),
(313, 146, 'the municipal taxes on it are very happy', 0),
(314, 147, 'Had become freezed to death', 0),
(315, 147, 'Had been frozen for death', 0),
(316, 147, 'Had frozen and died', 0),
(317, 147, 'Had been frozen to death', 0),
(318, 147, 'No correction', 1),
(319, 148, 'I was touched by', 0),
(320, 148, 'I was touched with', 1),
(321, 148, 'I had been touching with', 0),
(322, 148, 'I had been touching by', 0),
(323, 148, 'No correction required', 0),
(324, 149, 'Was being accused for', 0),
(325, 149, 'Accused of ', 0),
(326, 149, 'Accused for', 0),
(327, 149, 'Was accused of ', 1),
(328, 149, 'No correction', 0),
(329, 150, 'setting the animals free into forest', 0),
(330, 150, 'feeding the animals while others are watching', 0),
(331, 150, 'watching the animals in their natural abode', 0),
(332, 150, 'going out of the house on a holiday', 0),
(333, 150, 'holding the animals in captivity for our joy', 1),
(334, 151, 'Ravi is as good as you think about him', 0),
(335, 151, 'You have a good opinion about Ravi but he is not as good as you think', 1),
(336, 151, 'Your view about Ravi is philosophical, keep it up', 0),
(337, 151, 'Ravi is much better, than what you think of him', 0),
(338, 151, 'You have a good opinion about Ravi but he does not have a good opinion about you', 0),
(339, 152, 'his today speech was not fairly audible', 0),
(340, 152, 'his promises had always been realistic', 0),
(341, 152, 'his speech was very interesting', 0),
(342, 152, 'people follow whatever he instructs to them', 0),
(343, 152, 'his today\'s statements were very ambiguous', 1),
(353, 155, 'scolded me', 0),
(354, 155, 'insulted me', 0),
(355, 155, 'abused me', 0),
(356, 155, 'ignored me', 1),
(357, 156, 'Was regarded as', 0),
(358, 156, 'Pretended to be', 1),
(359, 156, 'Was thought to be', 0),
(360, 156, 'Was looked upon', 0),
(361, 157, 'loitered around', 1),
(362, 157, 'stayed out', 0),
(363, 157, 'sat unmoving', 0),
(364, 157, 'moved away', 0),
(365, 158, 'Political influence', 0),
(366, 158, 'Backing influence', 0),
(367, 158, 'Deserving and proper influence', 0),
(368, 158, 'Secret and unfair influence', 1),
(369, 159, 'Not a worthy possession', 1),
(370, 159, 'unnecessary', 0),
(371, 159, 'A costly items', 0),
(372, 159, 'A possession of high value', 0),
(373, 154, 'Toppled over', 1),
(374, 154, 'Bribed', 0),
(375, 154, 'Given advance information', 0),
(376, 154, 'Threatened', 0),
(377, 153, 'dispense with other non-conventional energy sources', 1),
(378, 153, 'resort to abundant use of electricity for illumination', 0),
(379, 153, 'off-switch the electrical appliance while not in use', 0),
(380, 153, 'explore other avenues for utilising the excess power', 0),
(381, 153, 'resort to use of electricity only when it is inevitable', 0),
(394, 161, 'Having received your letter', 1),
(395, 161, 'this morning, we are writing', 0),
(396, 161, 'to thank you for the same.', 0),
(397, 161, 'No error.', 0),
(398, 160, 'Do the roses in your garden smell', 1),
(399, 160, 'more sweetly', 0),
(400, 160, 'than those in ours?', 0),
(401, 160, 'No error.', 0),
(402, 162, 'Locke\'s treatises on government toleration and education', 0),
(403, 162, 'show a mind fully awake in', 1),
(404, 162, 'the possibilities of social reconstruction.', 0),
(405, 162, 'No error.', 0),
(410, 164, 'A large scale exchange of nuclear weapons', 0),
(411, 164, 'will produce unprecedented amounts of radiation', 0),
(412, 164, 'that can penetrate into the biological tissue.', 1),
(413, 164, 'No error.', 0),
(418, 166, 'The presumption that the average investor does not understand', 0),
(419, 166, 'or take interest in the affairs of the company', 0),
(420, 166, 'is not correct.', 0),
(421, 166, 'No error.', 1),
(426, 163, 'None of the students attending your class', 1),
(427, 163, 'answered your questions', 0),
(428, 163, 'did they?', 0),
(429, 163, 'No error.', 0),
(430, 165, 'The person which was', 1),
(431, 165, 'recommended for the position', 0),
(432, 165, 'did not fulfil the prescribed qualifications.', 0),
(433, 165, 'No error.', 0),
(442, 168, 'There was very heavy rain last night,', 0),
(443, 168, 'and the rivers have overflown their banks', 1),
(444, 168, 'causing severe hardship to the people living by them.', 0),
(445, 168, 'No error.', 0),
(446, 169, 'Free Software Foundation', 1),
(447, 170, '4', 1),
(448, 171, 'DNS', 1),
(453, 176, 'A type of computer crime that is engaged in by many people who would not ordinarily consider themselves to be criminals is the theft of computer software. This all-to-common activity is known by the overly colorful name of  software piracy. ', 1),
(455, 178, 'When writing a new computer program, in the planning stages a programmer may express the program\'s logic in  pseudocode, a set of statements in English that map out the program plan just as the flowchart does. ', 1),
(456, 179, 'most complex programs go through a period of  beta testing during which knowledgeable users try out the program before it is released for general use. Because programmers know how the program is supposed to work, they may never use the program in ways real users will. The beta testing period often r', 1),
(458, 181, 'CMOS Chip', 1),
(459, 182, 'Pentium is a brand used for a series of x86-compatible microprocessors produced by Intel.', 1),
(461, 180, 'Common gateway interface', 1),
(462, 173, 'x', 1),
(463, 184, 'RAIS', 1),
(464, 1, 'gh', 1),
(469, 167, 'Sheela has scored a first class', 1),
(470, 167, 'in her final exams,', 0),
(471, 167, 'isn\'t it?', 0),
(472, 167, 'No error.', 0),
(473, 12, 'cp -r Project Project.backup', 1),
(474, 12, 'cp -e Project Project.backup', 0),
(475, 12, 'cp -d Project Project.backup', 0),
(476, 12, 'cp -s Project Project.backup', 0),
(477, 13, 'rn  file1 file2', 0),
(478, 13, 'Mv file1 file2', 1),
(479, 13, 'Replace file1 file2', 0),
(480, 13, 'rm file1 file 2', 0),
(481, 14, 'dm ', 0),
(482, 14, 'rm', 1),
(483, 14, 'delete', 0),
(484, 14, 'erase', 0),
(485, 14, 'None of the above', 0),
(486, 15, 'rdir', 0),
(487, 15, 'remove ', 0),
(488, 15, 'rd ', 0),
(489, 15, 'rmdir ', 1),
(490, 15, 'None of the above', 0),
(491, 16, 'x', 1),
(492, 16, 'y', 0),
(493, 16, 'a', 0),
(494, 16, 'z', 0),
(495, 16, 'None of the above', 0),
(496, 17, 'SPARC ', 0),
(497, 17, 'IBM-compatible', 0),
(498, 17, 'Alpha ', 0),
(499, 17, 'Macintosh ', 1),
(500, 17, 'None of the above ', 0),
(501, 18, 'UDP', 0),
(502, 18, 'RARP ', 0),
(503, 18, 'FTP ', 0),
(504, 18, 'TELNET ', 1),
(505, 18, 'None of the above', 0),
(506, 19, 'NFS ', 0),
(507, 19, 'SMB ', 0),
(508, 19, 'NIS ', 0),
(509, 19, 'DNS ', 1),
(510, 19, 'None of the above', 0),
(511, 20, '/etc/services', 0),
(512, 20, '/etc/nsorder ', 0),
(513, 20, '/etc/nsswitch.conf ', 1),
(514, 20, '/etc/hosts ', 0),
(515, 20, 'None of the above', 0),
(516, 21, '16', 0),
(517, 21, '4', 1),
(518, 21, '2', 0),
(519, 21, '1', 0),
(520, 21, 'None of the above', 0),
(521, 22, '/usr/tmp', 0),
(522, 22, '/etc/default', 0),
(523, 22, '/etc/skel ', 1),
(524, 22, '/etc/users ', 0),
(525, 22, 'None of the above', 0),
(526, 23, 'rpm -qip iptables ', 0),
(527, 23, 'rpm -Uvh iptables ', 0),
(528, 23, 'rpm -i iptables* .i386.rpm', 1),
(529, 23, 'rpm -e iptables-1.3.9-5.i386.rpm ', 0),
(530, 23, 'None of the above', 0),
(531, 24, 'Free Software File ', 0),
(532, 24, 'File Server First ', 0),
(533, 24, 'First Serve First ', 0),
(534, 24, 'Free Software Foundation ', 1),
(535, 24, 'None of the above', 0),
(536, 25, 'fdisk', 0),
(537, 25, 'mkfs ', 1),
(538, 25, 'fsck', 0),
(539, 25, 'mount ', 0),
(540, 25, 'None of the above', 0),
(541, 26, 'fdisk', 0),
(542, 26, 'mkfs ', 1),
(543, 26, 'fsck', 0),
(544, 26, 'mount ', 0),
(545, 26, 'None of the above', 0),
(546, 28, 'lc ', 0),
(547, 28, 'wc - 1', 1),
(548, 28, 'cl', 0),
(549, 28, 'count', 0),
(550, 28, 'None of the above', 0),
(551, 29, 'au ', 0),
(552, 29, 'ps ', 1),
(553, 29, 'du', 0),
(554, 29, 'pid ', 0),
(555, 29, 'None of the above', 0),
(556, 30, 'sort - r ', 0),
(557, 30, 'st', 0),
(558, 30, 'sh ', 0),
(559, 30, 'sort', 1),
(560, 30, 'None of the above', 0),
(561, 31, 'x ', 0),
(562, 31, 'q! ', 0),
(563, 31, ':w ', 1),
(564, 31, ':q ', 0),
(565, 31, 'None of the above', 0),
(566, 32, 'w ', 0),
(567, 32, 'e', 0),
(568, 32, 'a', 0),
(569, 32, 'b', 1),
(570, 32, 'None of the above', 0),
(571, 33, '?? ', 0),
(572, 33, '// ', 0),
(573, 33, '? ', 0),
(574, 33, '/ ', 1),
(575, 33, 'None of the above', 0),
(576, 34, 'lpd ', 0),
(577, 34, 'lpr', 1),
(578, 34, 'lpq', 0),
(579, 34, 'lpc', 0),
(580, 34, 'None of the above', 0),
(581, 35, 'POP3', 1),
(582, 35, 'FTP', 0),
(583, 35, 'MAP ', 0),
(584, 35, 'All of the above ', 0),
(585, 35, 'None of the above', 0),
(586, 36, 'httpd ', 0),
(587, 36, 'shttp', 0),
(588, 36, 'dns ', 0),
(589, 36, 'named ', 1),
(590, 36, 'None of the above', 0),
(591, 37, '/etc/apache.conf ', 0),
(592, 37, '/etc/httpd/config.ini', 0),
(593, 37, '/etc/httpd/conf/httpd.conf', 1),
(594, 37, '/etc/srm.conf', 0),
(595, 37, 'None of the above', 0),
(596, 38, 'NFS ', 0),
(597, 38, 'SMD ', 0),
(598, 38, 'smbclient ', 1),
(599, 38, 'smbserver ', 0),
(600, 38, 'None of the above', 0),
(601, 39, 'rcpinfo ', 1),
(602, 39, 'serverinfo ', 0),
(603, 39, 'NFSinfo ', 0),
(604, 39, 'infserv ', 0),
(605, 39, 'None of the above', 0),
(606, 40, '/etc/hosts.allow ', 1),
(607, 40, '/etc/hosts.deny', 0),
(608, 40, '/etc/hosts ', 0),
(609, 40, '/etc/tcp.conf ', 0),
(610, 40, 'None of the above', 0),
(611, 41, 'tar ', 0),
(612, 41, 'dir ', 0),
(613, 41, 'lp ', 0),
(614, 41, 'ls', 1),
(615, 42, 'Session ', 0),
(616, 42, 'Data-link ', 0),
(617, 42, 'Application ', 1),
(618, 42, 'Network ', 0),
(619, 42, 'None of the above', 0),
(620, 43, 'lpq ', 1),
(621, 43, 'lpr ', 0),
(622, 43, 'lprm', 0),
(623, 43, 'lpc ', 0),
(624, 43, 'None of the above', 0),
(625, 44, 'crontab -c ', 0),
(626, 44, 'crontab -e ', 1),
(627, 44, 'crontab -make ', 0),
(628, 44, 'crontab –create ', 0),
(629, 45, 'crontab -display ', 0),
(630, 45, 'crontab -d ', 0),
(631, 45, 'list --crontab ', 0),
(632, 45, 'crontab -l', 1),
(633, 46, 'echo $UID ', 0),
(634, 46, 'id ', 1),
(635, 46, 'cat /etc/passwd ', 0),
(636, 46, 'cat /etc/groups ', 0),
(645, 57, 'Ignore 1', 0),
(646, 57, 'Ignore 2', 0),
(647, 57, 'Ignore 3', 1),
(648, 57, 'Ignore 4', 0),
(657, 221, 'echo $UID ', 0),
(658, 221, 'id', 1),
(659, 221, 'cat /etc/passwd ', 0),
(660, 221, 'cat /etc/groups', 0),
(669, 217, 'crontab -c ', 0),
(670, 217, 'crontab -e ', 1),
(671, 217, 'crontab -make', 0),
(672, 217, 'crontab –create ', 0),
(673, 218, 'crontab -display', 0),
(674, 218, 'crontab -d ', 0),
(675, 218, 'list --crontab ', 0),
(676, 218, 'crontab -l', 1),
(682, 215, 'Session', 0),
(683, 215, 'Data-link', 0),
(684, 215, 'Application', 1),
(685, 215, 'Network ', 0),
(686, 215, 'None of the above', 0),
(691, 214, 'tar ', 0),
(692, 214, 'dir ', 0),
(693, 214, 'lp ', 0),
(694, 214, 'ls', 1),
(695, 213, '/etc/hosts.allow ', 1),
(696, 213, '/etc/hosts.deny ', 0),
(697, 213, '/etc/hosts ', 0),
(698, 213, '/etc/tcp.conf ', 0),
(699, 213, 'None of the above', 0),
(710, 210, '/etc/apache.conf ', 0),
(711, 210, '/etc/httpd/config.ini ', 0),
(712, 210, '/etc/httpd/conf/httpd.conf ', 1),
(713, 210, '/etc/srm.conf ', 0),
(714, 210, 'None of the above', 0),
(715, 209, 'httpd ', 0),
(716, 209, 'shttp ', 0),
(717, 209, 'dns ', 0),
(718, 209, 'named ', 1),
(719, 209, 'None of the above', 0),
(720, 208, 'POP3 ', 1),
(721, 208, 'FTP', 0),
(722, 208, 'MAP ', 0),
(723, 208, 'All of the above ', 0),
(724, 208, 'None of the above', 0),
(725, 207, 'lpd', 0),
(726, 207, 'lpr ', 1),
(727, 207, 'lpq', 0),
(728, 207, 'lpc', 0),
(729, 207, 'None of the above', 0),
(730, 206, '?? ', 0),
(731, 206, '// ', 0),
(732, 206, '? ', 0),
(733, 206, '/ ', 1),
(734, 206, 'None of the above', 0),
(735, 205, 'w', 0),
(736, 205, 'e', 0),
(737, 205, 'a', 0),
(738, 205, 'b', 1),
(739, 205, 'None of the above', 0),
(740, 204, 'x', 0),
(741, 204, 'q! ', 0),
(742, 204, ':w ', 1),
(743, 204, ':q ', 0),
(744, 204, 'None of the above', 0),
(750, 211, 'NFS ', 0),
(751, 211, 'SMD', 0),
(752, 211, 'smbclient ', 1),
(753, 211, 'smbserver ', 0),
(754, 211, 'None of the above', 0),
(760, 202, 'au ', 0),
(761, 202, 'ps ', 1),
(762, 202, 'du ', 0),
(763, 202, 'pid ', 0),
(764, 202, 'None of the above', 0),
(765, 201, 'lc ', 0),
(766, 201, 'wc - 1 ', 1),
(767, 201, 'cl ', 0),
(768, 201, 'count ', 0),
(769, 201, 'None of the above', 0),
(770, 200, 'fdisk ', 0),
(771, 200, 'mkfs ', 1),
(772, 200, 'fsck ', 0),
(773, 200, 'mount ', 0),
(774, 200, 'None of the above', 0),
(775, 198, 'Free Software File', 0),
(776, 198, 'File Server First ', 0),
(777, 198, 'First Serve First ', 0),
(778, 198, 'Free Software Foundation ', 1),
(779, 198, 'None of the above', 0),
(780, 197, 'rpm -qip iptables ', 0),
(781, 197, 'rpm -Uvh iptables ', 0),
(782, 197, 'rpm -i iptables* .i386.rpm ', 1),
(783, 197, 'rpm -e iptables-1.3.9-5.i386.rpm ', 0),
(784, 197, 'None of the above', 0),
(785, 196, '/usr/tmp ', 0),
(786, 196, '/etc/default ', 0),
(787, 196, '/etc/skel ', 1),
(788, 196, '/etc/users ', 0),
(789, 196, 'None of the above', 0),
(790, 195, '16', 0),
(791, 195, '4', 1),
(792, 195, '2', 0),
(793, 195, '1', 0),
(794, 195, 'None of the above', 0),
(795, 194, '/etc/services ', 0),
(796, 194, '/etc/nsorder ', 0),
(797, 194, '/etc/nsswitch.conf ', 1),
(798, 194, '/etc/hosts ', 0),
(799, 194, 'None of the above', 0),
(800, 193, 'NFS ', 0),
(801, 193, 'SMB ', 0),
(802, 193, 'NIS ', 0),
(803, 193, 'DNS ', 1),
(804, 193, 'None of the above', 0),
(810, 192, 'UDP ', 0),
(811, 192, 'RARP ', 0),
(812, 192, 'FTP', 0),
(813, 192, 'TELNET ', 1),
(814, 192, 'None of the above', 0),
(820, 191, 'SPARC ', 0),
(821, 191, 'IBM-compatible', 0),
(822, 191, 'Alpha ', 0),
(823, 191, 'Macintosh', 1),
(824, 191, 'None of the above ', 0),
(825, 190, 'x', 1),
(826, 190, 'y', 0),
(827, 190, 'a', 0),
(828, 190, 'z', 0),
(829, 190, 'None of the above', 0),
(830, 189, 'rdir ', 0),
(831, 189, 'remove ', 0),
(832, 189, 'rd', 0),
(833, 189, 'rmdir ', 1),
(834, 189, 'None of the above', 0),
(835, 188, 'dm', 0),
(836, 188, 'rm', 1),
(837, 188, 'delete', 0),
(838, 188, 'erase ', 0),
(839, 188, 'None of the above', 0),
(840, 186, 'cp -r Project Project.backup', 1),
(841, 186, 'cp -e Project Project.backup', 0),
(842, 186, 'cp -d Project Project.backup', 0),
(843, 186, 'cp -s Project Project.backup', 0),
(844, 216, 'lpq ', 0),
(845, 216, 'lpr ', 1),
(846, 216, 'lprm', 0),
(847, 216, 'lpc ', 0),
(848, 216, 'None of the above', 0),
(849, 203, 'sort - r ', 0),
(850, 203, 'st ', 0),
(851, 203, 'sh', 0),
(852, 203, 'sort', 1),
(853, 203, 'None of the above', 0),
(854, 187, 'mv', 1),
(855, 187, 'rm', 0),
(856, 187, 'rename', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `parent_id`, `role`) VALUES
(1, 0, 'admin'),
(2, 0, 'candidate');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `role_id` int(11) NOT NULL,
  `perm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`role_id`, `perm_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `role_route`
--

CREATE TABLE `role_route` (
  `role_id` int(11) NOT NULL,
  `role_route` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_route`
--

INSERT INTO `role_route` (`role_id`, `role_route`) VALUES
(2, '/candidate/profile'),
(1, '/secure/index');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 1, 'admin', '$P$BFzk4RrrpKOmDAVi8LQ68QKWtqN7jn1', 'hello@gmail.com', 1, 0, NULL, 'b368c8ce08360068044284d1894bb5ca', '2017-06-20 19:05:23', NULL, NULL, '122.174.202.158', '2012-11-08 03:01:23', '2012-06-05 08:06:30', '2017-06-20 17:05:23'),
(91, 2, '', '$P$BvGLBaZ.qN/rnfIPpW8MXEtAWWmWdh1', 'hiabhilash@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '122.174.204.23', '2012-09-27 05:10:25', '2012-09-27 05:09:09', '2012-09-27 10:10:25'),
(93, 2, '', '$P$BLyjjjKYWo/6Yg2nEJFEr.G1Lrv.Ej1', 'rahulrajvn@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '117.253.170.79', '2012-09-28 00:53:17', '2012-09-28 00:07:49', '2012-09-28 05:53:17'),
(95, 2, '', '$P$BDh4yniA46TQToiz1yUUADJiPlgXcR0', 'fibinjoy@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '122.174.204.23', '2012-09-28 00:55:06', '2012-09-28 00:52:49', '2012-09-28 05:55:06'),
(96, 2, '', '$P$BNuyAtd4R5jXKk4rr5bIVU/ea9jtKb.', 'kn.nitheeshkn@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '122.174.204.23', '2012-10-01 00:03:34', '2012-09-30 23:27:43', '2012-10-01 05:03:34'),
(97, 2, '', '$P$BQnlS6M9eI1P6rlvfJASul6iQmAT/41', 'abhi1103@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '111.92.64.16', '2012-10-01 09:11:02', '2012-10-01 09:10:14', '2012-10-01 14:11:02'),
(98, 2, '', '$P$BoMDWpJGLHRpLlG0tBdqLfGi1C4TMd/', 'anwarsa.sadath@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '101.63.194.216', '2012-10-01 12:19:47', '2012-10-01 12:16:04', '2012-10-01 17:19:47'),
(106, 1, 'dali', '$P$B9/Vj2bChdGBVQORNrGwGexB27WhX9/', 'dali@eglueweb.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '111.92.64.16', '2012-10-04 00:33:32', '2012-10-04 00:26:04', '2012-10-04 05:33:32'),
(107, 1, 'vidya', '$P$BujJjFPGkH9jC4LH6ONYSB4JCfUxfU1', 'sreevidhya.kumar@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '111.92.64.16', '0000-00-00 00:00:00', '2012-10-04 00:34:42', '2012-10-04 05:34:42'),
(108, 2, '', '$P$BH8EYlKqbVn30l27l4lhQPiqQOuJAE1', 'deelip.aa@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '117.206.57.56', '2012-10-09 06:16:32', '2012-10-04 06:07:38', '2012-10-09 11:16:32'),
(109, 2, '', '$P$BYsIWQ/m39dIsale4kN6Taj/IwCNAa0', 'vivekcv1@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '180.215.29.172', '2012-10-10 11:32:10', '2012-10-04 11:14:19', '2012-10-10 16:32:10'),
(110, 2, '', '$P$BkxnZbQRkDQK7Pem4nLpLjQBUzp/.s.', 'sujithmathw@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '180.215.92.140', '2012-10-04 23:43:44', '2012-10-04 23:43:18', '2012-10-05 04:43:44'),
(111, 2, '', '$P$B8LpaDW90JmZXNjRR0uNjWvk8RaXMH/', 'sarathkumarpp@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '49.200.242.10', '2012-10-10 12:06:15', '2012-10-05 07:59:50', '2012-10-10 17:06:15'),
(112, 2, '', '$P$BbRTE5ojxEnNnu9BXsCfUalGH4pDR./', 'ajospot@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '122.174.219.117', '2012-10-28 23:21:22', '2012-10-06 07:54:21', '2012-10-29 04:21:22'),
(113, 2, '', '$P$Bjj0cvsIxZ7ZuHpjf.MPIlGCKKE8Uc0', 'jeffsonoliver@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '117.196.146.234', '2012-10-07 01:01:51', '2012-10-07 01:01:30', '2012-10-07 06:01:51'),
(114, 2, '', '$P$BXhvgz7b5v/XnF1H8QE8g7RsJ.h5Vg.', 'njneljojoseph@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '117.196.129.179', '2012-10-07 06:33:53', '2012-10-07 06:33:32', '2012-10-07 11:33:53'),
(115, 2, '', '$P$Bh0w/tTVjYLdN2io92zeTpM/Qrw92b.', 'elsonalias@ymail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '111.92.64.16', '2012-10-10 02:13:28', '2012-10-10 01:51:18', '2012-10-10 07:13:28'),
(116, 2, '', '$P$BozQE3YHaxmmHP/Pe8VH6AnOuAlgDe1', 'prajith18@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '122.174.204.23', '2012-10-10 04:05:15', '2012-10-10 03:57:38', '2012-10-10 09:05:15'),
(117, 2, '', '$P$Bu9I8NyOoAgfbV5mrEQ9ym3IkJWjX81', 'sanusadheesan@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '122.174.204.23', '2012-10-10 04:33:41', '2012-10-10 04:02:42', '2012-10-10 09:33:41'),
(119, 2, '', '$P$BkqBGKtDXmaIbP0YNwW5/vwnzVSZGE.', 'jithinkjose1991@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '117.213.61.27', '2012-10-31 01:44:11', '2012-10-16 00:36:13', '2012-10-31 06:44:11'),
(121, 2, '', '$P$BI7PLWWDe8NXWELU2YsoHnILMiJyiz.', 'jayaram.professional2011@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '223.236.234.150', '2012-10-19 11:49:48', '2012-10-16 06:05:59', '2012-10-19 16:49:48'),
(122, 2, '', '$P$BzP1jc1RSJYZZMTFF8keAgV.8uEKU5/', '12589sony@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '180.215.87.127', '2012-10-17 10:25:31', '2012-10-16 11:41:33', '2012-10-17 15:25:31'),
(125, 2, '', '$P$BK0hARjscEsh6LC6AJMEPybb1djjcu1', 'SARANSATHYAN@YAHOO.COM', 1, 0, NULL, NULL, NULL, NULL, NULL, '117.205.242.133', '2012-10-18 01:36:53', '2012-10-18 01:35:50', '2012-10-18 06:36:53'),
(126, 2, '', '$P$BuWuPqFJGlLMRJZ84Q870OKlCtAhUs.', 'mailforark@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '117.196.141.178', '2012-10-30 20:31:55', '2012-10-18 05:48:28', '2012-10-31 01:31:55'),
(127, 2, '', '$P$Bq6V6aHaj16k20ZT/szo4AbRmQFjTP1', 'afsalkr894@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '27.251.157.142', '2012-11-07 23:14:16', '2012-10-18 06:05:45', '2012-11-08 05:14:16'),
(128, 2, '', '$P$BgxdTCAbIQUDD3njGXgXo2tUIFS8r6/', 'sreekanthmohan22@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '123.236.65.255', '2012-10-19 05:56:43', '2012-10-19 05:56:03', '2012-10-19 10:56:43'),
(129, 2, '', '$P$BHUcnUlLRIXvlec4SbygxF4AOaLn0w1', 'afsalkr.login@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '117.206.55.17', '0000-00-00 00:00:00', '2012-10-19 12:20:29', '2012-10-19 17:20:29'),
(130, 2, '', '$P$B0jKrwh5HCTKWTi5re1YRGif.nex/P.', 'thepsanoop@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '27.251.161.44', '2012-10-29 06:49:13', '2012-10-22 06:45:30', '2012-10-29 11:49:13'),
(131, 2, '', '$P$B0cE.VLQe4AtL/AIh9L/6QGfBURZgQ/', 'dhanspyker@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '117.235.243.2', '2012-11-07 06:03:57', '2012-10-23 01:19:27', '2012-11-07 12:03:57'),
(132, 2, '', '$P$BAGbmqvv6oG6u61.pA7HvrQSyOEkrp0', 'sarathrjn89@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '122.179.79.236', '2012-11-01 06:30:39', '2012-10-25 07:53:09', '2012-11-01 11:30:39'),
(137, 2, '', '$P$BVKyMhb/qX7ytDL2a..o2IpssXfD1t1', 'jyothish.v.u@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '111.93.159.50', '2012-10-30 02:15:13', '2012-10-30 02:12:35', '2012-10-30 07:15:13'),
(138, 2, '', '$P$Bvj.zIr51.Pp/2NkpexFJCMMWmMPMN.', 'rahulrc212@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '122.179.77.170', '2012-11-05 22:57:16', '2012-11-03 04:11:20', '2012-11-06 04:57:16'),
(139, 2, '', '$P$BObpgtrmZLbkYjX/YLZ.l7uLO20zjp0', 'abraham007@ymail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '117.201.192.196', '2012-11-07 23:42:42', '2012-11-05 04:03:55', '2012-11-08 05:42:42'),
(140, 2, '', '$P$Ba5Di4guclZxpf/tODOyQmTEfhWChg/', 'jottythomas@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '116.68.109.94', '2012-11-07 06:50:28', '2012-11-07 06:49:59', '2012-11-07 12:50:28'),
(141, 2, '', '$P$BHeHFbFTEnXNvo92k6xZVDsa2Qb4lB.', 'harikrkk87@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '117.216.87.64', '2012-11-08 01:00:32', '2012-11-08 00:57:43', '2012-11-08 07:00:32'),
(142, 2, '', '$P$Bm7QEXwnB5wHrI95w73pI61otKtB.6/', 'denny217@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '202.164.140.73', '2012-11-08 01:02:02', '2012-11-08 01:01:00', '2012-11-08 07:02:02'),
(144, 1, 'adminis', '$P$BI3aqp8BzwCfiAVyo27L297XtbEV8f.', 'adminr@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '192.168.0.7', '2017-06-26 11:29:51', '2017-06-20 19:14:09', '2017-06-26 09:29:51'),
(145, 2, 'rakeshtest', '$P$BQtTpQ/GsMstju683cHEbBIsLVjw2k0', 'rakeshthedesigner@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2017-06-25 13:45:59', '2017-06-25 13:45:10', '2017-06-25 11:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logger`
--
ALTER TABLE `activity_logger`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `assigned_exam_templates`
--
ALTER TABLE `assigned_exam_templates`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `candidate_education`
--
ALTER TABLE `candidate_education`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `candidate_experience`
--
ALTER TABLE `candidate_experience`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `candidate_profile`
--
ALTER TABLE `candidate_profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`et_id`);

--
-- Indexes for table `exam_main`
--
ALTER TABLE `exam_main`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exam_segments`
--
ALTER TABLE `exam_segments`
  ADD PRIMARY KEY (`eseg_id`);

--
-- Indexes for table `interview_verdict`
--
ALTER TABLE `interview_verdict`
  ADD PRIMARY KEY (`interview_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `messages_attachments`
--
ALTER TABLE `messages_attachments`
  ADD PRIMARY KEY (`at_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`perm_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`);
ALTER TABLE `question` ADD FULLTEXT KEY `question` (`question`);

--
-- Indexes for table `question_categories`
--
ALTER TABLE `question_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `question_levels`
--
ALTER TABLE `question_levels`
  ADD PRIMARY KEY (`lev_id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`opt_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logger`
--
ALTER TABLE `activity_logger`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1090;
--
-- AUTO_INCREMENT for table `assigned_exam_templates`
--
ALTER TABLE `assigned_exam_templates`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `candidate_education`
--
ALTER TABLE `candidate_education`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
--
-- AUTO_INCREMENT for table `candidate_experience`
--
ALTER TABLE `candidate_experience`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `candidate_profile`
--
ALTER TABLE `candidate_profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `et_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `exam_main`
--
ALTER TABLE `exam_main`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `exam_segments`
--
ALTER TABLE `exam_segments`
  MODIFY `eseg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `interview_verdict`
--
ALTER TABLE `interview_verdict`
  MODIFY `interview_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1705;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `messages_attachments`
--
ALTER TABLE `messages_attachments`
  MODIFY `at_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `perm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
--
-- AUTO_INCREMENT for table `question_categories`
--
ALTER TABLE `question_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `question_levels`
--
ALTER TABLE `question_levels`
  MODIFY `lev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `opt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=857;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
