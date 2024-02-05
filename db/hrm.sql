-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 06:51 AM
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
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `date` varchar(100) NOT NULL DEFAULT '',
  `attendance` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `emp_code`, `date`, `attendance`) VALUES
(127, 'RS02', '2023-11-25', 'P'),
(129, 'RS02', '2023-11-27', 'P'),
(130, 'RS03', '2023-11-27', 'P'),
(131, 'RS02', '2023-11-28', 'P'),
(132, 'RS03', '2023-11-28', 'P'),
(133, 'RS02', '2023-11-29', 'P'),
(134, 'RS03', '2023-11-29', 'P'),
(135, 'RS02', '2023-11-30', 'P'),
(136, 'RS03', '2023-11-30', 'P'),
(137, 'RS02', '2023-12-01', 'P'),
(138, 'RS03', '2023-12-01', 'A'),
(139, 'RS02', '2023-12-02', 'P'),
(140, 'RS03', '2023-12-02', 'P'),
(141, 'RS02', '2023-12-04', 'P'),
(142, 'RS03', '2023-12-04', 'P'),
(143, 'RS02', '2023-12-05', 'P'),
(144, 'RS03', '2023-12-05', 'P'),
(145, 'RS02', '2023-12-06', 'P'),
(146, 'RS03', '2023-12-06', 'P'),
(147, 'RS02', '2023-12-07', 'P'),
(148, 'RS03', '2023-12-07', 'P'),
(149, 'RS02', '2023-12-08', 'P'),
(150, 'RS03', '2023-12-08', 'P'),
(151, 'RS02', '2023-12-09', 'P'),
(152, 'RS03', '2023-12-09', 'P'),
(153, 'RS02', '2023-12-11', 'P'),
(154, 'RS03', '2023-12-11', 'P'),
(155, 'RS02', '2023-12-12', 'P'),
(156, 'RS03', '2023-12-12', 'P'),
(157, 'RS02', '2023-12-13', 'P'),
(159, 'RS02', '2023-12-14', 'P'),
(160, 'RS03', '2023-12-14', 'P'),
(161, 'RS02', '2023-12-15', 'P'),
(162, 'RS03', '2023-12-15', 'P'),
(163, 'RS02', '2023-12-16', 'P'),
(164, 'RS03', '2023-12-16', 'P'),
(165, 'RS02', '2023-12-18', 'P'),
(166, 'RS03', '2023-12-18', 'P'),
(167, 'RS02', '2023-12-19', 'P'),
(168, 'RS03', '2023-12-19', 'P'),
(169, 'RS02', '2023-12-20', 'P'),
(170, 'RS03', '2023-12-20', 'P'),
(171, 'RS02', '2023-12-21', 'P'),
(172, 'RS03', '2023-12-21', 'P'),
(173, 'RS02', '2023-12-22', 'P'),
(174, 'RS03', '2023-12-22', 'Holiday'),
(175, 'RS02', '2023-12-23', 'P'),
(176, 'RS03', '2023-12-23', 'P'),
(177, 'RS02', '2023-12-24', 'P'),
(178, 'RS03', '2023-12-24', 'P'),
(179, 'RS02', '2023-12-25', 'P'),
(180, 'RS03', '2023-12-25', 'P'),
(184, 'RS03', '2023-11-06', 'P'),
(185, 'RS02', '2023-11-06', 'P'),
(186, 'RS03', '2023-11-07', 'P'),
(187, 'RS02', '2023-11-07', 'P'),
(189, 'RS03', '2023-11-09', 'P'),
(193, 'RS04', '2023-12-15', 'P'),
(194, 'RS02', '2024-01-01', 'P'),
(195, 'RS03', '2024-01-01', 'P'),
(196, 'RS04', '2024-01-01', 'P'),
(197, 'RS02', '2023-12-26', 'P'),
(198, 'RS03', '2023-12-26', 'P'),
(199, 'RS04', '2023-12-26', 'P'),
(200, 'RS02', '2024-01-05', 'P'),
(201, 'RS03', '2024-01-05', 'P'),
(202, 'RS04', '2024-01-05', 'P'),
(204, 'RS02', '2024-01-04', 'P'),
(205, 'RS04', '2024-01-04', 'P'),
(223, 'RS02', '2023-10-25', 'P'),
(224, 'RS03', '2023-10-25', 'P'),
(225, 'RS04', '2023-10-25', 'P'),
(227, 'RS02', '2023-10-26', 'P'),
(228, 'RS03', '2023-10-26', 'P'),
(229, 'RS04', '2023-10-26', 'P'),
(231, 'RS02', '2023-10-27', 'P'),
(232, 'RS03', '2023-10-27', 'P'),
(233, 'RS04', '2023-10-27', 'P'),
(235, 'RS02', '2023-10-28', 'P'),
(236, 'RS03', '2023-10-28', 'P'),
(237, 'RS04', '2023-10-28', 'P'),
(239, 'RS02', '2023-10-30', 'P'),
(240, 'RS03', '2023-10-30', 'P'),
(241, 'RS04', '2023-10-30', 'P'),
(243, 'RS02', '2023-10-31', 'P'),
(244, 'RS03', '2023-10-31', 'P'),
(245, 'RS04', '2023-10-31', 'P'),
(247, 'RS02', '2023-11-01', 'P'),
(248, 'RS03', '2023-11-01', 'P'),
(249, 'RS04', '2023-11-01', 'P'),
(251, 'RS02', '2023-11-02', 'P'),
(252, 'RS03', '2023-11-02', 'P'),
(253, 'RS04', '2023-11-02', 'P'),
(255, 'RS02', '2023-11-04', 'P'),
(256, 'RS03', '2023-11-04', 'P'),
(257, 'RS04', '2023-11-04', 'P'),
(259, 'RS04', '2023-11-06', 'P'),
(261, 'RS02', '2023-11-07', 'P'),
(262, 'RS03', '2023-11-07', 'P'),
(263, 'RS04', '2023-11-07', 'P'),
(265, 'RS02', '2023-11-10', 'P'),
(266, 'RS03', '2023-11-10', 'P'),
(267, 'RS04', '2023-11-10', 'P'),
(268, 'RS05', '2023-11-10', 'P'),
(269, 'RS02', '2023-11-11', 'P'),
(271, 'RS04', '2023-11-11', 'P'),
(272, 'RS05', '2023-11-11', 'P'),
(273, 'RS02', '2023-11-13', 'P'),
(275, 'RS04', '2023-11-13', 'P'),
(276, 'RS05', '2023-11-13', 'P'),
(277, 'RS02', '2023-11-14', 'P'),
(279, 'RS04', '2023-11-14', 'P'),
(280, 'RS05', '2023-11-14', 'P'),
(281, 'RS02', '2023-11-15', 'P'),
(283, 'RS04', '2023-11-15', 'P'),
(284, 'RS05', '2023-11-15', 'P'),
(285, 'RS02', '2023-11-16', 'P'),
(287, 'RS04', '2023-11-16', 'P'),
(288, 'RS05', '2023-11-16', 'P'),
(289, 'RS02', '2023-11-17', 'P'),
(291, 'RS04', '2023-11-17', 'P'),
(292, 'RS05', '2023-11-17', 'P'),
(293, 'RS02', '2023-11-18', 'P'),
(295, 'RS04', '2023-11-18', 'P'),
(296, 'RS05', '2023-11-18', 'P'),
(297, 'RS02', '2023-11-20', 'P'),
(299, 'RS04', '2023-11-20', 'P'),
(300, 'RS05', '2023-11-20', 'P'),
(301, 'RS02', '2023-11-21', 'P'),
(303, 'RS04', '2023-11-21', 'P'),
(304, 'RS05', '2023-11-21', 'P'),
(305, 'RS02', '2023-11-22', 'P'),
(307, 'RS04', '2023-11-22', 'P'),
(308, 'RS05', '2023-11-22', 'P'),
(309, 'RS02', '2023-11-23', 'P'),
(311, 'RS04', '2023-11-23', 'P'),
(312, 'RS05', '2023-11-23', 'P'),
(313, 'RS02', '2023-11-24', 'P'),
(315, 'RS04', '2023-11-24', 'P'),
(316, 'RS05', '2023-11-24', 'P'),
(317, 'RS04', '2023-11-25', 'P'),
(318, 'RS05', '2023-11-25', 'P'),
(319, 'RS02', '2024-01-12', 'A'),
(320, 'RS03', '2024-01-12', 'P'),
(321, 'RS04', '2024-01-12', 'P'),
(322, 'RS05', '2024-01-12', 'P'),
(331, 'RS02', '2024-01-15', 'P'),
(332, 'RS03', '2024-01-15', 'P'),
(333, 'RS04', '2024-01-15', 'P'),
(334, 'RS05', '2024-01-15', 'P'),
(335, 'RS02', '2024-01-16', 'P'),
(336, 'RS03', '2024-01-16', 'P'),
(337, 'RS04', '2024-01-16', 'P'),
(338, 'RS05', '2024-01-16', 'P'),
(339, 'RS02', '2024-01-18', 'P'),
(341, 'RS04', '2024-01-18', 'P'),
(342, 'RS05', '2024-01-18', 'P'),
(343, 'RS010', '2024-01-19', 'P'),
(344, 'RS011', '2024-01-19', 'P'),
(345, 'RS012', '2024-01-19', 'P'),
(346, 'RS013', '2024-01-19', 'P'),
(347, 'RS014', '2024-01-19', 'P'),
(348, 'RS015', '2024-01-19', 'P'),
(349, 'RS016', '2024-01-19', 'P'),
(350, 'RS017', '2024-01-19', 'P'),
(351, 'RS018', '2024-01-19', 'P'),
(352, 'RS019', '2024-01-19', 'P'),
(353, 'RS02', '2024-01-19', 'P'),
(354, 'RS020', '2024-01-19', 'P'),
(355, 'RS021', '2024-01-19', 'P'),
(356, 'RS03', '2024-01-19', 'P'),
(357, 'RS04', '2024-01-19', 'P'),
(358, 'RS05', '2024-01-19', 'P'),
(359, 'RS06', '2024-01-19', 'P'),
(360, 'RS07', '2024-01-19', 'P'),
(361, 'RS08', '2024-01-19', 'P'),
(362, 'RS09', '2024-01-19', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL DEFAULT '',
  `upload_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `upload_on`) VALUES
(2, 'REDOT Solutions', '2024-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `upload_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `upload_on`) VALUES
(1, 'HR', '2023-12-21'),
(5, 'Management', '2023-12-21'),
(6, 'DM & Sales', '2023-12-21'),
(7, 'Web Development', '2023-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL DEFAULT '',
  `designation` varchar(255) NOT NULL DEFAULT '',
  `upload_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `department_name`, `designation`, `upload_on`) VALUES
(3, 'Management', 'CEO', '2023-12-21'),
(4, 'HR', 'HR Team Lead', '2023-12-21'),
(5, 'HR', 'HR Executve', '2023-12-21'),
(6, 'HR', 'Junior HR Executive', '2023-12-21'),
(7, 'DM & Sales', 'Digital Marketing Manager', '2023-12-21'),
(8, 'DM & Sales', 'Junior Digital Marketing Executive', '2023-12-21'),
(9, 'DM & Sales', 'Business Development Executive', '2023-12-21'),
(10, 'Web Development', 'Senior Web Developer', '2023-12-21'),
(11, 'Web Development', 'Software Developer', '2023-12-21'),
(12, 'Web Development', 'Junior Full stack Developer', '2023-12-21'),
(13, 'Web Development', 'Junior Software Developer', '2023-12-21'),
(14, 'Web Development', 'Devops Engineer', '2023-12-21'),
(15, 'Web Development', 'Junior UI/UX Designer', '2023-12-21'),
(16, 'DM & Sales', 'Junior Business Development Executive', '2023-12-21'),
(17, 'HR', 'Senior HR Executive', '2024-01-18'),
(18, 'Management', 'Assistant Manager', '2024-01-18'),
(19, 'Web Development', 'Full stack Developer', '2024-01-18'),
(20, 'DM & Sales', 'Chief Marketing Officer', '2024-01-18'),
(21, 'Web Development', 'UI/UX Designer', '2024-01-18'),
(22, 'Web Development', 'Technical Lead', '2024-01-18'),
(23, 'Web Development', 'Project Lead', '2024-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `emp_leaves`
--

CREATE TABLE `emp_leaves` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `emp_name` varchar(100) NOT NULL DEFAULT '',
  `lead_emp_code` varchar(255) NOT NULL DEFAULT '',
  `leave_type` varchar(100) NOT NULL DEFAULT '',
  `leave_from` varchar(100) NOT NULL DEFAULT '',
  `leave_to` varchar(100) NOT NULL DEFAULT '',
  `days` varchar(50) NOT NULL DEFAULT '',
  `remaining_days` varchar(50) NOT NULL DEFAULT '',
  `reason` varchar(1000) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `apply_on` date NOT NULL DEFAULT current_timestamp(),
  `approve_by` varchar(255) NOT NULL DEFAULT '',
  `admin_notify` int(11) NOT NULL DEFAULT 0,
  `lead_notify` int(11) NOT NULL DEFAULT 0,
  `hr_notify` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_leaves`
--

INSERT INTO `emp_leaves` (`id`, `emp_code`, `emp_name`, `lead_emp_code`, `leave_type`, `leave_from`, `leave_to`, `days`, `remaining_days`, `reason`, `status`, `apply_on`, `approve_by`, `admin_notify`, `lead_notify`, `hr_notify`) VALUES
(1, 'RS02', 'Nis se', '', 'Casual Leave', '12-12-2023', '13-12-2023', '2', '', 'Right Hand Finger Injury Checkup', 'Approved', '2023-12-05', 'Admin', 1, 0, '0'),
(4, 'RS03', 'testing ku', 'RS04', 'LOP', '12-01-2024', '13-01-2024', '2', '', 'test', 'Pending', '2023-12-09', '', 1, 1, '0'),
(5, 'RS04', 'M k', '', 'Casual Leave', '20-12-2023', '22-12-2023', '3', '', 'Testing', 'Approved', '2023-12-14', 'Admin', 1, 0, '0'),
(6, 'RS03', 'testing ku', 'RS04', 'Medical Leave', '05-01-2024', '06-01-2024', '2', '', '', 'Approved', '2024-01-03', 'Admin', 1, 1, '0'),
(7, 'RS04', 'Manoj kumar T', '', 'Compentary Off', '08-01-2024', '08-01-2024', '1', '', 'testing', 'Declined', '2024-01-05', 'Admin', 1, 0, '0'),
(8, 'RS03', ' Vetri  Surya B', 'RS04', 'Casual Leave', '13-01-2024', '13-01-2024', '1', '', 'Leave Test', 'Approved', '2024-01-08', 'RS05', 1, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave_status`
--

CREATE TABLE `emp_leave_status` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `emp_name` varchar(255) NOT NULL DEFAULT '',
  `casual_leave` varchar(100) NOT NULL DEFAULT '',
  `casual_leave_taken` varchar(100) NOT NULL DEFAULT '',
  `casual_leave_balance` varchar(100) NOT NULL DEFAULT '',
  `medical_leave` varchar(100) NOT NULL DEFAULT '',
  `medical_leave_taken` varchar(100) NOT NULL DEFAULT '',
  `medical_leave_balance` varchar(100) NOT NULL DEFAULT '',
  `WFH` varchar(100) NOT NULL DEFAULT '',
  `lop` varchar(255) NOT NULL DEFAULT '',
  `compentary_off` varchar(255) NOT NULL DEFAULT '',
  `pandemic_leave` varchar(255) NOT NULL DEFAULT '',
  `paternity_leave` varchar(255) NOT NULL DEFAULT '',
  `no_of_days` varchar(255) NOT NULL DEFAULT '',
  `upload_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_leave_status`
--

INSERT INTO `emp_leave_status` (`id`, `emp_code`, `emp_name`, `casual_leave`, `casual_leave_taken`, `casual_leave_balance`, `medical_leave`, `medical_leave_taken`, `medical_leave_balance`, `WFH`, `lop`, `compentary_off`, `pandemic_leave`, `paternity_leave`, `no_of_days`, `upload_on`) VALUES
(1, 'RS02', 'Nis se', '2', '2', '0', '5', '', '', '', '', '', '', '', '', '2024-01-02'),
(2, 'RS03', 'testing ku', '-4', '1', '-5', '5', '', '', '1', '1', '', '', '', '', '2024-01-02'),
(14, 'RS05', 'y t', '4', '', '', '5', '', '', '', '', '', '', '', '', '2024-01-02'),
(15, 'RS04', 'M K', '5', '', '', '2', '', '', '', '', '1', '', '', '', '2024-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `emp_salary`
--

CREATE TABLE `emp_salary` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `salary_basis` varchar(255) NOT NULL DEFAULT '',
  `salary_amount` varchar(255) NOT NULL DEFAULT '',
  `payment_type` varchar(200) NOT NULL DEFAULT '',
  `basic_salary` varchar(255) NOT NULL DEFAULT '',
  `dearance_allowance` varchar(255) NOT NULL DEFAULT '',
  `medical_allowance` varchar(255) NOT NULL DEFAULT '',
  `hra` varchar(255) NOT NULL DEFAULT '',
  `gross_salary` decimal(10,2) NOT NULL DEFAULT 0.00,
  `LOP` varchar(255) NOT NULL DEFAULT '0',
  `net_salary` decimal(10,2) NOT NULL DEFAULT 0.00,
  `PF_contribution` varchar(50) NOT NULL DEFAULT '',
  `PF_no` varchar(255) NOT NULL DEFAULT '',
  `emp_PF_rate1` varchar(100) NOT NULL DEFAULT '',
  `PF_additional_rate1` varchar(100) NOT NULL DEFAULT '',
  `PF_total_rate1` varchar(100) NOT NULL DEFAULT '',
  `emp_PF_rate2` varchar(100) NOT NULL DEFAULT '',
  `PF_additional_rate2` varchar(100) NOT NULL DEFAULT '',
  `PF_total_rate2` varchar(100) NOT NULL DEFAULT '',
  `ESI_contribution` varchar(100) NOT NULL DEFAULT '',
  `ESI_no` varchar(100) NOT NULL DEFAULT '',
  `emp_ESI_rate` varchar(100) NOT NULL DEFAULT '',
  `ESI_additional_rate` varchar(100) NOT NULL DEFAULT '',
  `ESI_total_rate` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_salary`
--

INSERT INTO `emp_salary` (`id`, `emp_code`, `salary_basis`, `salary_amount`, `payment_type`, `basic_salary`, `dearance_allowance`, `medical_allowance`, `hra`, `gross_salary`, `LOP`, `net_salary`, `PF_contribution`, `PF_no`, `emp_PF_rate1`, `PF_additional_rate1`, `PF_total_rate1`, `emp_PF_rate2`, `PF_additional_rate2`, `PF_total_rate2`, `ESI_contribution`, `ESI_no`, `emp_ESI_rate`, `ESI_additional_rate`, `ESI_total_rate`, `status`) VALUES
(6, 'RS02', 'Monthly', '15000', 'Bank transfer', '8000', '4160', '2560', '800', 15520.00, '', 15520.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(7, 'RS03', 'Monthly', '15000', 'Bank transfer', '8000', '4160', '2480', '800', 15440.00, '', 15440.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(8, 'RS04', 'Monthly', '15000', '', '8000', '4160', '2560', '800', 15520.00, '', 15520.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(9, 'RS05', 'Monthly', '15000', 'Bank transfer', '8000', '4160', '2480', '800', 15440.00, '', 15440.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `emp_salary_payroll`
--

CREATE TABLE `emp_salary_payroll` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `emp_name` varchar(255) NOT NULL DEFAULT '',
  `salary_month` varchar(255) NOT NULL DEFAULT '',
  `from_date` varchar(100) NOT NULL DEFAULT '',
  `to_date` varchar(100) NOT NULL DEFAULT '',
  `salary_year` varchar(100) NOT NULL DEFAULT '',
  `salary_amount` varchar(255) NOT NULL DEFAULT '',
  `payment_type` varchar(200) NOT NULL DEFAULT '',
  `no_of_days` varchar(100) NOT NULL DEFAULT '',
  `basic_salary` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dearance_allowance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `medical_allowance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `hra` decimal(10,2) NOT NULL DEFAULT 0.00,
  `gross_salary` decimal(10,2) NOT NULL DEFAULT 0.00,
  `LOP` varchar(255) NOT NULL DEFAULT '',
  `net_salary` decimal(10,2) NOT NULL DEFAULT 0.00,
  `PF_contribution` varchar(50) NOT NULL DEFAULT '',
  `PF_no` varchar(255) NOT NULL DEFAULT '',
  `emp_PF_rate1` varchar(100) NOT NULL DEFAULT '',
  `PF_additional_rate1` varchar(100) NOT NULL DEFAULT '',
  `PF_total_rate1` varchar(100) NOT NULL DEFAULT '',
  `emp_PF_rate2` varchar(100) NOT NULL DEFAULT '',
  `PF_additional_rate2` varchar(100) NOT NULL DEFAULT '',
  `PF_total_rate2` varchar(100) NOT NULL DEFAULT '',
  `ESI_contribution` varchar(100) NOT NULL DEFAULT '',
  `ESI_no` varchar(100) NOT NULL DEFAULT '',
  `emp_ESI_rate` varchar(100) NOT NULL DEFAULT '',
  `ESI_additional_rate` varchar(100) NOT NULL DEFAULT '',
  `ESI_total_rate` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_salary_payroll`
--

INSERT INTO `emp_salary_payroll` (`id`, `emp_code`, `emp_name`, `salary_month`, `from_date`, `to_date`, `salary_year`, `salary_amount`, `payment_type`, `no_of_days`, `basic_salary`, `dearance_allowance`, `medical_allowance`, `hra`, `gross_salary`, `LOP`, `net_salary`, `PF_contribution`, `PF_no`, `emp_PF_rate1`, `PF_additional_rate1`, `PF_total_rate1`, `emp_PF_rate2`, `PF_additional_rate2`, `PF_total_rate2`, `ESI_contribution`, `ESI_no`, `emp_ESI_rate`, `ESI_additional_rate`, `ESI_total_rate`, `status`) VALUES
(100, 'RS02', 'Nishanthini S', 'Nov', '2023-10-25', '2023-11-25', '2023', '15000', '', '26', 8000.00, 4160.00, 2560.00, 800.00, 15520.00, '0', 13450.67, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, 'RS03', 'Vetri  Surya B', 'Nov', '2023-10-25', '2023-11-25', '2023', '15000', '', '14', 8000.00, 4160.00, 2480.00, 800.00, 15440.00, '0', 7205.33, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(102, 'RS04', 'Manoj kumar T', 'Nov', '2023-10-25', '2023-11-25', '2023', '15000', '', '25', 8000.00, 4160.00, 2560.00, 800.00, 15520.00, '0', 12933.33, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, 'RS05', 'Divya  B', 'Nov', '2023-10-25', '2023-11-25', '2023', '15000', '', '14', 8000.00, 4160.00, 2480.00, 800.00, 15440.00, '0', 7205.33, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emp_tasks`
--

CREATE TABLE `emp_tasks` (
  `id` int(11) NOT NULL,
  `to_emp` varchar(255) NOT NULL DEFAULT '',
  `client` varchar(250) NOT NULL DEFAULT '',
  `project_name` varchar(255) NOT NULL DEFAULT '',
  `team_name` varchar(255) NOT NULL DEFAULT '',
  `lead_emp_code` varchar(255) NOT NULL DEFAULT '',
  `lead_name` varchar(255) NOT NULL DEFAULT '',
  `priority` varchar(100) NOT NULL DEFAULT '',
  `task_name` varchar(255) NOT NULL DEFAULT '',
  `due_date` varchar(100) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL DEFAULT '',
  `task_points` varchar(100) NOT NULL DEFAULT '',
  `task_points_approval` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `lead_notify` int(11) NOT NULL DEFAULT 0,
  `report_phase` varchar(255) NOT NULL DEFAULT '',
  `report_progress_status` varchar(100) NOT NULL DEFAULT '',
  `report_status` varchar(255) NOT NULL DEFAULT '',
  `report_description` mediumtext NOT NULL DEFAULT '',
  `report_on` datetime DEFAULT NULL,
  `emp_notify` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_tasks`
--

INSERT INTO `emp_tasks` (`id`, `to_emp`, `client`, `project_name`, `team_name`, `lead_emp_code`, `lead_name`, `priority`, `task_name`, `due_date`, `description`, `task_points`, `task_points_approval`, `status`, `created_on`, `lead_notify`, `report_phase`, `report_progress_status`, `report_status`, `report_description`, `report_on`, `emp_notify`) VALUES
(2, 'RS03', 'D Infotech', 'testers', 'Testing 1', 'RS04', 'M k', 'Low', 'Tessters', '28-12-2023', 'Task Testing Task Testing Task Testing Task Testing ', '20', '10', 'Begin', '2023-12-28 11:26:01', 1, 'Phase 1', '50', 'Completed', 'Testing Testing', '2023-12-28 15:33:57', 1),
(3, 'RS03', 'D Infotech', 'testers', 'Testing 1', 'RS04', 'M k', 'Medium', 'Test 1', '29-12-2023', '', '10', '', 'Begin', '2023-12-29 10:36:44', 1, '', '', '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `emp_task_points`
--

CREATE TABLE `emp_task_points` (
  `id` int(11) NOT NULL,
  `task_id` varchar(100) NOT NULL DEFAULT '',
  `client` varchar(250) NOT NULL DEFAULT '',
  `project_name` varchar(255) NOT NULL DEFAULT '',
  `team_name` varchar(255) NOT NULL DEFAULT '',
  `lead_emp_code` varchar(255) NOT NULL DEFAULT '',
  `lead_name` varchar(255) NOT NULL DEFAULT '',
  `priority` varchar(100) NOT NULL DEFAULT '',
  `task_name` varchar(255) NOT NULL DEFAULT '',
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `task_points` varchar(100) NOT NULL DEFAULT '',
  `task_points_approval` varchar(100) NOT NULL DEFAULT '',
  `report_status` varchar(155) NOT NULL DEFAULT '',
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `admin_notify` int(11) NOT NULL DEFAULT 0,
  `lead_notify` int(11) NOT NULL DEFAULT 0,
  `emp_notify` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_task_points`
--

INSERT INTO `emp_task_points` (`id`, `task_id`, `client`, `project_name`, `team_name`, `lead_emp_code`, `lead_name`, `priority`, `task_name`, `emp_code`, `task_points`, `task_points_approval`, `report_status`, `updated_on`, `admin_notify`, `lead_notify`, `emp_notify`) VALUES
(1, '2', 'D Infotech', 'testers', 'Testing 1', 'RS04', 'M k', 'Low', 'Tessters', 'RS03', '20', '10', 'Completed', '2024-01-12 15:11:45', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_date`, `end_date`) VALUES
(1, 'Event Testing 1', '2023-12-29', '2024-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(11) NOT NULL,
  `holiday_name` varchar(255) NOT NULL DEFAULT '',
  `holiday_date` varchar(255) NOT NULL DEFAULT '',
  `upload_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `holiday_name`, `holiday_date`, `upload_on`) VALUES
(8, 'Pongal', '2024-01-15', '2024-01-17'),
(9, 'M Pongal', '2024-01-16', '2024-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` int(11) NOT NULL,
  `leave_type` varchar(255) NOT NULL DEFAULT '',
  `based_on` varchar(255) NOT NULL DEFAULT '',
  `no_of_days` varchar(255) NOT NULL DEFAULT '',
  `upload_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `leave_type`, `based_on`, `no_of_days`, `upload_on`) VALUES
(2, 'Casual Leave', 'Monthly', '2', '2024-01-03'),
(4, 'Medical Leave', 'Yearly', '5', '2024-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `login_attendance`
--

CREATE TABLE `login_attendance` (
  `id` int(11) NOT NULL,
  `role_id` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `emp_id` varchar(255) NOT NULL DEFAULT '',
  `month` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_attendance`
--

INSERT INTO `login_attendance` (`id`, `role_id`, `username`, `emp_id`, `month`, `date`) VALUES
(1, '2', 'mk', 'mk', '12', '2023-12-02'),
(2, '2', 'mk', 'mk', '12', '2023-12-02'),
(3, '2', '002', '002', '12', '2023-12-02'),
(4, '2', '002', '002', '12', '2023-12-02'),
(5, '2', '002', '002', '12', '2023-12-02'),
(6, '2', '002', '002', '12', '2023-12-04'),
(7, '2', '003', '003', '12', '2023-12-04'),
(8, '2', '003', '003', '12', '2023-12-04'),
(9, '2', '003', '003', '12', '2023-12-05'),
(10, '2', '003', '003', '12', '2023-12-06'),
(11, '2', '003', '003', '12', '2023-12-07'),
(12, '2', '003', '003', '12', '2023-12-08'),
(13, '2', 'RS03', 'RS03', '12', '2023-12-09'),
(14, '2', 'RS03', 'RS03', '12', '2023-12-11'),
(15, '2', 'RS02', 'RS02', '12', '2023-12-11'),
(16, '2', 'RS03', 'RS03', '12', '2023-12-11'),
(17, '2', 'RS02', 'RS02', '12', '2023-12-11'),
(18, '2', 'RS03', 'RS03', '12', '2023-12-12'),
(19, '2', 'RS02', 'RS02', '12', '2023-12-13'),
(20, '2', 'RS02', 'RS02', '12', '2023-12-14'),
(21, '2', 'RS04', 'RS04', '12', '2023-12-14'),
(22, '2', 'RS04', 'RS04', '12', '2023-12-15'),
(23, '2', 'RS03', 'RS03', '12', '2023-12-15'),
(24, '2', 'RS02', 'RS02', '12', '2023-12-15'),
(25, '2', 'RS02', 'RS02', '12', '2023-12-18'),
(26, '2', 'RS02', 'RS02', '12', '2023-12-19'),
(27, '2', 'RS02', 'RS02', '12', '2023-12-20'),
(28, '2', 'RS02', 'RS02', '12', '2023-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `manage_emp`
--

CREATE TABLE `manage_emp` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `emp_code` varchar(200) NOT NULL,
  `department` varchar(255) NOT NULL DEFAULT '',
  `company` varchar(100) NOT NULL DEFAULT '',
  `designation` varchar(100) NOT NULL DEFAULT '',
  `role` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `hr_leave_approver` varchar(255) NOT NULL DEFAULT '',
  `report_to` varchar(255) NOT NULL DEFAULT '',
  `dob` varchar(50) NOT NULL DEFAULT '',
  `gender` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT '',
  `state` varchar(100) NOT NULL DEFAULT '',
  `country` varchar(100) NOT NULL DEFAULT '',
  `pincode` varchar(100) NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `web_url` varchar(255) NOT NULL DEFAULT '',
  `joining_date` varchar(255) NOT NULL DEFAULT '',
  `exit_date` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `lead_emp_code` varchar(100) NOT NULL DEFAULT '',
  `admin_notfiy` int(11) NOT NULL DEFAULT 0,
  `lead_notfiy` int(11) NOT NULL DEFAULT 0,
  `hr_notfiy` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manage_emp`
--

INSERT INTO `manage_emp` (`id`, `name`, `last_name`, `emp_code`, `department`, `company`, `designation`, `role`, `image`, `hr_leave_approver`, `report_to`, `dob`, `gender`, `address`, `state`, `country`, `pincode`, `mobile`, `email`, `web_url`, `joining_date`, `exit_date`, `status`, `lead_emp_code`, `admin_notfiy`, `lead_notfiy`, `hr_notfiy`) VALUES
(1, 'Seenivasan ', 'C', 'RS01', '', '', 'Admin', '1', '', '', '', '1990-12-15', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0),
(2, 'Nishanthini', 'S', 'RS02', 'HR', 'Redot Solutions', 'HR Team Lead', '3', '', '', 'RS01', '1993-07-15', 'Female', '#43,Mdu', 'Tamil nadu', 'India', '625015', '9597493131', 'Test@gmail.com', '', '', '', '1', 'RS01', 1, 0, 0),
(3, 'Vetri ', 'Surya B', 'RS03', 'Web Development', 'Redot Solutions', 'Full stack Developer', '2', '', '', 'RS04', '1987-09-15', 'Male', '', '', '', '', '9597493131', 'Test@gmail.com', '', '2022-11-09', '2023-11-10', '1', 'RS04', 1, 1, 0),
(4, 'Manoj', 'kumar T', 'RS04', 'Web Development', 'Redot Solutions', 'Senior Web Developer', '3', 'mk.jpg', '', '', '1991-02-28', 'Male', '', 'Tamil nadu', 'India', '625015', '9083432112', 'mk@gmail.com', '', '2022-12-14', '', '1', 'RS01', 1, 1, 0),
(5, 'Divya ', 'B', 'RS05', 'HR', 'Redot Solutions', 'HR Team Lead', '3', '', '1', 'RS01', '2020-01-20', 'Female', '', '', '', '', '5555555555', 'yt@gmail.com', '', '2023-11-10', '', '1', 'RS01', 1, 1, 0),
(16, 'Subithra', 'M', 'RS06', 'DM & Sales', 'Redot Solutions', 'Junior Digital Marketing Executive', '2', '', '', '', '2001-06-06', 'Female', '', 'Tamil nadu', 'India', '625015', '9087654311', 'subithra@gmail.com', '', '01-09-2023', '', '1', 'RS011', 1, 1, 0),
(17, 'Aadhithyan', 'P', 'RS07', 'Web Development', 'Redot Solutions', 'Software Developer', '2', '', '', '', '1998-04-07', '', '', '', '', '', '8795644442', 'aadhithyan@gmail.com', '', '02-10-2023', '', '1', 'RS04', 1, 0, 0),
(18, 'Sasikumar', 'J', 'RS08', 'HR', 'Redot Solutions', 'HR Executve', '2', '', '', '', '', '', '', '', '', '', '7890654321', 'sasikumar@gmail.com', '', '01-08-2023', '', '1', '', 1, 0, 0),
(19, 'Mohankumar', 'R', 'RS09', 'Web Development', 'Redot Solutions', 'Devops Engineer', '2', '', '', '', '', '', '', '', '', '', '8795644532', 'mohankumar@gmail.com', '', '01-09-2023', '', '1', 'RS04', 1, 0, 0),
(20, 'Jeya Gowri', 'R', 'RS010', 'Management', 'Redot Solutions', 'Assistant Manager', '3', '', '', '', '', '', '', '', '', '', '8795698077', 'Jeyagowri@gmail.com', '', '01-08-2023', '', '1', '', 1, 0, 0),
(21, 'Sundar Raj', 'S', 'RS011', 'DM & Sales', 'Redot Solutions', 'Chief Marketing Officer', '3', '', '', '', '', '', '', '', '', '', '8795647655', 'sundar@gmail.com', '', '03-10-2023', '', '1', 'RS01', 1, 0, 0),
(22, 'Shobika', 'P', 'RS012', 'Web Development', 'Redot Solutions', 'UI/UX Designer', '2', '', '', '', '', '', '', '', '', '', '9087432112', 'shobika@gmail.com', '', '03-10-2023', '', '1', '', 1, 0, 0),
(23, 'Surya Kumar', 'J', 'RS013', 'DM & Sales', 'Redot Solutions', 'Junior Digital Marketing Executive', '2', '', '', '', '', '', '', '', '', '', '8795987665', 'suryakumar@gmail.com', '', '01-11-2023', '', '1', 'RS011', 1, 1, 0),
(24, 'Mohan Kumar', 'M', 'RS014', 'Web Development', 'Redot Solutions', 'Junior Software Developer', '2', '', '', '', '', '', '', '', '', '', '8795212233', 'mohankumarm@gmail.com', '', '01-12-2023', '', '1', 'RS04', 1, 0, 0),
(25, 'Swetha', 'M', 'RS015', 'HR', 'Redot Solutions', 'Junior HR Executive', '2', '', '', '', '', '', '', '', '', '', '7893212456', 'swetha@gmail.com', '', '15-11-2023', '', '1', '', 1, 0, 0),
(26, 'Venkatesh', 'A', 'RS016', 'Web Development', 'Redot Solutions', 'Technical Lead', '3', '', '', '', '', '', '', '', '', '', '8795643321', 'venkatesh@gmail.com', '', '10-11-2023', '', '1', '', 1, 0, 0),
(27, 'KeerthiPriya', 'K R ', 'RS017', 'Web Development', 'Redot Solutions', 'Junior UI/UX Designer', '2', '', '', '', '', '', '', '', '', '', '7893098776', 'keerthipriya@gmail.com', '', '13-12-2023', '', '1', '', 1, 0, 0),
(28, 'Ramagopalakrishnan', 'K', 'RS018', 'Web Development', 'Redot Solutions', 'Software Developer', '2', '', '', '', '', '', '', '', '', '', '7893394522', 'ramagopalakrishnan@gmail.com', '', '03-01-2024', '', '1', 'RS04', 1, 0, 0),
(29, 'Siva Sankari', 'P', 'RS019', 'DM & Sales', 'Redot Solutions', 'Junior Business Development Executive', '2', '', '', '', '', '', '', '', '', '', '9084322643', 'sivasankari@gmail.com', '', '01-12-2023', '', '1', 'RS011', 1, 1, 0),
(30, 'Sowmiya', 'S', 'RS020', 'DM & Sales', 'Redot Solutions', 'Business Development Executive', '2', '', '', '', '2024-01-18', '', '', '', '', '', '7890098777', 'sowmiya@gmail.com', '', '20-12-2023', '', '1', 'RS011', 1, 1, 0),
(31, 'Gowtham', 'N S', 'RS021', 'Web Development', 'Redot Solutions', 'Project Lead', '3', '', '', '', '', '', '', '', '', '', '9080654432', 'gowtham@gmail.com', '', '05-08-2021', '', '1', 'RS01', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manage_emp_bank`
--

CREATE TABLE `manage_emp_bank` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `bank_name` varchar(255) NOT NULL DEFAULT '',
  `bank_account_no` varchar(255) NOT NULL DEFAULT '',
  `IFSC_code` varchar(255) NOT NULL DEFAULT '',
  `pan_no` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_emp_bank`
--

INSERT INTO `manage_emp_bank` (`id`, `emp_code`, `bank_name`, `bank_account_no`, `IFSC_code`, `pan_no`) VALUES
(1, 'RS02', 'Sbi', '223044553', 'SBI234212', 'E34455DY332'),
(2, 'RS03', '', '', '', ''),
(3, 'RS04', '', '', '', ''),
(11, 'RS05', 'Sbi', '22304490999', 'SBI234266', 'E34455DY789'),
(12, 'RS06', '', '', '', ''),
(13, 'RS07', '', '', '', ''),
(14, 'RS08', '', '', '', ''),
(15, 'RS09', '', '', '', ''),
(16, 'RS010', '', '', '', ''),
(17, 'RS011', '', '', '', ''),
(18, 'RS012', '', '', '', ''),
(19, 'RS013', '', '', '', ''),
(20, 'RS014', '', '', '', ''),
(21, 'RS015', '', '', '', ''),
(22, 'RS016', '', '', '', ''),
(23, 'RS017', '', '', '', ''),
(24, 'RS018', '', '', '', ''),
(25, 'RS019', '', '', '', ''),
(26, 'RS020', '', '', '', ''),
(27, 'RS021', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `manage_emp_education`
--

CREATE TABLE `manage_emp_education` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `ug_graduate` varchar(255) NOT NULL DEFAULT '',
  `ug_subject` varchar(255) NOT NULL DEFAULT '',
  `ug_class` varchar(255) NOT NULL DEFAULT '',
  `ug_institution` varchar(255) NOT NULL DEFAULT '',
  `ug_starting_date` varchar(255) NOT NULL DEFAULT '',
  `ug_complete_date` varchar(255) NOT NULL DEFAULT '',
  `pg_graduate` varchar(255) NOT NULL DEFAULT '',
  `pg_subject` varchar(255) NOT NULL DEFAULT '',
  `pg_class` varchar(255) NOT NULL DEFAULT '',
  `pg_institution` varchar(255) NOT NULL DEFAULT '',
  `pg_starting_date` varchar(255) NOT NULL DEFAULT '',
  `pg_complete_date` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_emp_education`
--

INSERT INTO `manage_emp_education` (`id`, `emp_code`, `ug_graduate`, `ug_subject`, `ug_class`, `ug_institution`, `ug_starting_date`, `ug_complete_date`, `pg_graduate`, `pg_subject`, `pg_class`, `pg_institution`, `pg_starting_date`, `pg_complete_date`) VALUES
(1, 'RS02', 'B.Sc Computer Science', 'computer science', 'II', 'AMC', '03-06-2009', '12-04-2012', 'MCA', 'Computer science', 'I', 'MKU', '09-12-2023', '10-04-2015'),
(2, 'RS03', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'RS04', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'RS05', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'RS06', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'RS07', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'RS08', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'RS09', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'RS010', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'RS011', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'RS012', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'RS013', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'RS014', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'RS015', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'RS016', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'RS017', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'RS018', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'RS019', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'RS020', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'RS021', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `manage_emp_emergency`
--

CREATE TABLE `manage_emp_emergency` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `relationship` varchar(100) NOT NULL DEFAULT '',
  `phone1` varchar(255) NOT NULL DEFAULT '',
  `phone2` varchar(255) NOT NULL DEFAULT '',
  `sec_name` varchar(255) NOT NULL DEFAULT '',
  `sec_relationship` varchar(255) NOT NULL DEFAULT '',
  `sec_phone1` varchar(100) NOT NULL DEFAULT '',
  `sec_phone2` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_emp_emergency`
--

INSERT INTO `manage_emp_emergency` (`id`, `emp_code`, `name`, `relationship`, `phone1`, `phone2`, `sec_name`, `sec_relationship`, `sec_phone1`, `sec_phone2`) VALUES
(1, 'RS02', 'TM', 'Father', '9086433344', '5664323445', 'SV', 'Hus', '78553445566', '5664333333'),
(2, 'RS03', '', '', '', '', '', '', '', ''),
(3, 'RS04', '', '', '', '', '', '', '', ''),
(11, 'RS05', '', '', '', '', '', '', '', ''),
(12, 'RS06', '', '', '', '', '', '', '', ''),
(13, 'RS07', '', '', '', '', '', '', '', ''),
(14, 'RS08', '', '', '', '', '', '', '', ''),
(15, 'RS09', '', '', '', '', '', '', '', ''),
(16, 'RS010', '', '', '', '', '', '', '', ''),
(17, 'RS011', '', '', '', '', '', '', '', ''),
(18, 'RS012', '', '', '', '', '', '', '', ''),
(19, 'RS013', '', '', '', '', '', '', '', ''),
(20, 'RS014', '', '', '', '', '', '', '', ''),
(21, 'RS015', '', '', '', '', '', '', '', ''),
(22, 'RS016', '', '', '', '', '', '', '', ''),
(23, 'RS017', '', '', '', '', '', '', '', ''),
(24, 'RS018', '', '', '', '', '', '', '', ''),
(25, 'RS019', '', '', '', '', '', '', '', ''),
(26, 'RS020', '', '', '', '', '', '', '', ''),
(27, 'RS021', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `manage_emp_experince`
--

CREATE TABLE `manage_emp_experince` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `company_name1` varchar(255) NOT NULL DEFAULT '',
  `location1` varchar(100) NOT NULL DEFAULT '',
  `job_position1` varchar(255) NOT NULL DEFAULT '',
  `periodfrom1` varchar(255) NOT NULL DEFAULT '',
  `periodto1` varchar(255) NOT NULL DEFAULT '',
  `company_name2` varchar(255) NOT NULL DEFAULT '',
  `location2` varchar(100) NOT NULL DEFAULT '',
  `job_position2` varchar(255) NOT NULL DEFAULT '',
  `periodfrom2` varchar(255) NOT NULL DEFAULT '',
  `periodto2` varchar(255) NOT NULL DEFAULT '',
  `company_name3` varchar(255) NOT NULL DEFAULT '',
  `location3` varchar(100) NOT NULL DEFAULT '',
  `job_position3` varchar(255) NOT NULL DEFAULT '',
  `periodfrom3` varchar(255) NOT NULL DEFAULT '',
  `periodto3` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_emp_experince`
--

INSERT INTO `manage_emp_experince` (`id`, `emp_code`, `company_name1`, `location1`, `job_position1`, `periodfrom1`, `periodto1`, `company_name2`, `location2`, `job_position2`, `periodfrom2`, `periodto2`, `company_name3`, `location3`, `job_position3`, `periodfrom3`, `periodto3`) VALUES
(1, 'RS02', 'WT', 'Mdu', 'developer', '01-10-2023', '31-10-2023', 'CTI', 'Chennai', 'S developer', '26-11-2023', '30-11-2023', 'TT', 'Md', 'S developer', '14-12-2023', '19-12-2023'),
(2, 'RS03', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'RS04', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'RS05', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'RS06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'RS07', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'RS08', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'RS09', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'RS010', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'RS011', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'RS012', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'RS013', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'RS014', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'RS015', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'RS016', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'RS017', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'RS018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'RS019', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'RS020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'RS021', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `manage_emp_pass`
--

CREATE TABLE `manage_emp_pass` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `passport_no` varchar(255) NOT NULL DEFAULT '',
  `passport_expiry_date` varchar(100) NOT NULL DEFAULT '',
  `tel` varchar(100) NOT NULL DEFAULT '',
  `nationality` varchar(100) NOT NULL DEFAULT '',
  `religion` varchar(255) NOT NULL DEFAULT '',
  `marital_status` varchar(50) NOT NULL DEFAULT '',
  `employment_of_spouse` varchar(255) NOT NULL DEFAULT '',
  `no_of_children` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_emp_pass`
--

INSERT INTO `manage_emp_pass` (`id`, `emp_code`, `passport_no`, `passport_expiry_date`, `tel`, `nationality`, `religion`, `marital_status`, `employment_of_spouse`, `no_of_children`) VALUES
(1, 'RS02', '08494TY332', '23-07-2031', '9088866756', 'Indian', 'Hindu', 'Married', 'IT', '2'),
(2, 'RS03', '', '', '', '', '', '', '', ''),
(3, 'RS04', '', '', '', '', '', '', '', ''),
(11, 'RS05', '', '', '', '', '', '', '', ''),
(12, 'RS06', '', '', '', '', '', '', '', ''),
(13, 'RS07', '', '', '', '', '', '', '', ''),
(14, 'RS08', '', '', '', '', '', '', '', ''),
(15, 'RS09', '', '', '', '', '', '', '', ''),
(16, 'RS010', '', '', '', '', '', '', '', ''),
(17, 'RS011', '', '', '', '', '', '', '', ''),
(18, 'RS012', '', '', '', '', '', '', '', ''),
(19, 'RS013', '', '', '', '', '', '', '', ''),
(20, 'RS014', '', '', '', '', '', '', '', ''),
(21, 'RS015', '', '', '', '', '', '', '', ''),
(22, 'RS016', '', '', '', '', '', '', '', ''),
(23, 'RS017', '', '', '', '', '', '', '', ''),
(24, 'RS018', '', '', '', '', '', '', '', ''),
(25, 'RS019', '', '', '', '', '', '', '', ''),
(26, 'RS020', '', '', '', '', '', '', '', ''),
(27, 'RS021', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `overtime_date` varchar(255) NOT NULL DEFAULT '',
  `overtime_hours` varchar(100) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `approved_by` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`id`, `emp_code`, `overtime_date`, `overtime_hours`, `description`, `status`, `approved_by`) VALUES
(1, 'RS03', '04-12-2023', '2', 'Testing', 'Approved', ''),
(3, 'RS02', '18-12-2023', '1', 'test', 'New', '');

-- --------------------------------------------------------

--
-- Table structure for table `shift_scheduling`
--

CREATE TABLE `shift_scheduling` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `department` varchar(255) NOT NULL DEFAULT '',
  `date` varchar(100) NOT NULL DEFAULT '',
  `shift_type` varchar(255) NOT NULL DEFAULT '',
  `min_start_time` varchar(100) NOT NULL DEFAULT '',
  `start_time` varchar(100) NOT NULL DEFAULT '',
  `max_start_time` varchar(100) NOT NULL DEFAULT '',
  `min_end_time` varchar(100) NOT NULL DEFAULT '',
  `end_time` varchar(100) NOT NULL DEFAULT '',
  `max_end_time` varchar(100) NOT NULL DEFAULT '',
  `break_time` varchar(100) NOT NULL DEFAULT '',
  `extra_hours` varchar(100) NOT NULL DEFAULT '',
  `publish` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shift_scheduling`
--

INSERT INTO `shift_scheduling` (`id`, `emp_code`, `department`, `date`, `shift_type`, `min_start_time`, `start_time`, `max_start_time`, `min_end_time`, `end_time`, `max_end_time`, `break_time`, `extra_hours`, `publish`) VALUES
(1, 'RS03', 'Web', '07-12-2023', '10:30 shift', '11:28:05', '11:28:06', '11:28:07', '11:28:08', '11:28:08', '11:28:09', '01:28:10', '', ''),
(2, 'RS02', 'Web', '07-12-2023', '10\'o clock Shift', '11:28:05', '11:28:06', '11:28:07', '11:28:08', '11:28:08', '11:28:09', '01:28:10', '', ''),
(3, 'RS02', 'Web', '07-12-2023', 'New Shift', '11:28:05', '11:28:06', '11:28:07', '11:28:08', '11:28:08', '11:28:09', '01:28:10', '', ''),
(4, 'RS02', 'Web', '07-12-2023', '10:30 shift', '11:28:05', '11:28:06', '11:28:07', '11:28:08', '11:28:08', '11:28:09', '01:28:10', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teams_lead`
--

CREATE TABLE `teams_lead` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL DEFAULT '',
  `project_name` varchar(255) NOT NULL DEFAULT '',
  `client` varchar(255) NOT NULL DEFAULT '',
  `team_name` varchar(255) NOT NULL DEFAULT '',
  `lead_emp_code1` varchar(255) NOT NULL DEFAULT '',
  `lead_name1` varchar(255) NOT NULL DEFAULT '',
  `lead_emp_code2` varchar(255) NOT NULL DEFAULT '',
  `lead_name2` varchar(255) NOT NULL DEFAULT '',
  `team_members` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams_lead`
--

INSERT INTO `teams_lead` (`id`, `department`, `project_name`, `client`, `team_name`, `lead_emp_code1`, `lead_name1`, `lead_emp_code2`, `lead_name2`, `team_members`, `description`, `status`, `created_on`) VALUES
(2, 'Web Development', 'Testing', '', 'Head Team', 'RS01', '', '', '', 'RS02', 'Head Testing  contents', 'Active', '2023-12-20 17:03:36'),
(4, 'Web Development', 'Testing', '', 'Head Team', 'RS01', '', '', '', 'RS04', 'Head Testing  contents', 'Active', '2023-12-20 17:03:36'),
(5, 'Web Development', 'testers', 'REDOT Solutions', 'Testing 1', 'RS04', '', '', '', 'RS03', 'TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 ', 'Active', '2023-12-21 12:45:19'),
(6, 'DM & Sales', 'BS', '', 'BS 1', 'RS011', '', '', '', 'RS06', '', 'Active', '2024-01-19 10:31:28'),
(7, 'DM & Sales', 'BS', '', 'BS 1', 'RS011', '', '', '', 'RS013', '', 'Active', '2024-01-19 10:31:28'),
(8, 'DM & Sales', 'BSA', '', 'BS 2', 'RS011', '', '', '', 'RS019', '', 'Active', '2024-01-19 10:32:38'),
(9, 'DM & Sales', 'BSA', '', 'BS 2', 'RS011', '', '', '', 'RS020', '', 'Active', '2024-01-19 10:32:38'),
(15854, 'Web Development', 'testers', 'REDOT Solutions', 'Testing 1', 'RS04', '', '', '', 'RS07', 'TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 ', 'Active', '2024-01-19 17:11:22'),
(15855, 'Web Development', 'testers', 'REDOT Solutions', 'Testing 1', 'RS04', '', '', '', 'RS09', 'TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 ', 'Active', '2024-01-19 17:11:22'),
(15856, 'Web Development', 'testers', 'REDOT Solutions', 'Testing 1', 'RS04', '', '', '', 'RS014', 'TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 ', 'Active', '2024-01-19 17:11:22'),
(15857, 'Web Development', 'testers', 'REDOT Solutions', 'Testing 1', 'RS04', '', '', '', 'RS018', 'TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 TESTING 1 ', 'Active', '2024-01-19 17:11:22'),
(15860, 'Web Development', 'Testing', '', 'Head Team', 'RS01', '', '', '', 'RS05', 'Head Testing  contents', 'Active', '2024-01-19 17:27:54'),
(15861, 'Web Development', 'Testing', '', 'Head Team', 'RS01', '', '', '', 'RS011', 'Head Testing  contents', 'Active', '2024-01-19 17:27:54'),
(15862, 'Web Development', 'Testing', '', 'Head Team', 'RS01', '', '', '', 'RS021', 'Head Testing  contents', 'Active', '2024-01-19 17:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `timesheet`
--

CREATE TABLE `timesheet` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(255) NOT NULL DEFAULT '',
  `project` varchar(500) NOT NULL DEFAULT '',
  `deadline` varchar(100) NOT NULL DEFAULT '',
  `total_hours` varchar(100) NOT NULL DEFAULT '',
  `remaining_hours` varchar(100) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `hours` varchar(50) NOT NULL DEFAULT '',
  `description` longtext NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timesheet`
--

INSERT INTO `timesheet` (`id`, `emp_code`, `project`, `deadline`, `total_hours`, `remaining_hours`, `date`, `hours`, `description`) VALUES
(1, 'RS03', 'Project Management', '22-12-2023', '100', '80', '2023-12-06', '6', 'Testing 1'),
(3, 'RS02', 'Project Management', '18-12-2023', '100', '80', '2023-12-18', '6', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `user_role` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`, `user_role`, `status`) VALUES
(1, 'RS01', 'test@123', '1', 1),
(2, 'RS02', 'emp@123', '3', 1),
(6, 'RS03', 'emp@123', '2', 1),
(7, 'RS04', 'mk@123', '3', 1),
(8, 'RS05', 'emp@123', '2', 1),
(16, 'RS06', 'rs06', '2', 1),
(17, 'RS07', 'rs07', '2', 1),
(18, 'RS08', 'rs08', '2', 1),
(19, 'RS09', 'rs09', '2', 1),
(20, 'RS010', 'rs010', '3', 1),
(21, 'RS011', 'rs011', '3', 1),
(22, 'RS012', 'rs012', '2', 1),
(23, 'RS013', 'rs013', '2', 1),
(24, 'RS014', 'rs014', '2', 1),
(25, 'RS015', 'rs015', '2', 1),
(26, 'RS016', 'rs016', '3', 1),
(27, 'RS017', 'rs017', '2', 1),
(28, 'RS018', 'rs018', '2', 1),
(29, 'RS019', 'rs019', '2', 1),
(30, 'RS020', 'rs020', '2', 1),
(31, 'RS021', 'rs021', '3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_leaves`
--
ALTER TABLE `emp_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_leave_status`
--
ALTER TABLE `emp_leave_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_salary`
--
ALTER TABLE `emp_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_salary_payroll`
--
ALTER TABLE `emp_salary_payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_tasks`
--
ALTER TABLE `emp_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_task_points`
--
ALTER TABLE `emp_task_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attendance`
--
ALTER TABLE `login_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_emp`
--
ALTER TABLE `manage_emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_emp_bank`
--
ALTER TABLE `manage_emp_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_emp_education`
--
ALTER TABLE `manage_emp_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_emp_emergency`
--
ALTER TABLE `manage_emp_emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_emp_experince`
--
ALTER TABLE `manage_emp_experince`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_emp_pass`
--
ALTER TABLE `manage_emp_pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift_scheduling`
--
ALTER TABLE `shift_scheduling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams_lead`
--
ALTER TABLE `teams_lead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=363;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `emp_leaves`
--
ALTER TABLE `emp_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `emp_leave_status`
--
ALTER TABLE `emp_leave_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `emp_salary`
--
ALTER TABLE `emp_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `emp_salary_payroll`
--
ALTER TABLE `emp_salary_payroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `emp_tasks`
--
ALTER TABLE `emp_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emp_task_points`
--
ALTER TABLE `emp_task_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_attendance`
--
ALTER TABLE `login_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `manage_emp`
--
ALTER TABLE `manage_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `manage_emp_bank`
--
ALTER TABLE `manage_emp_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `manage_emp_education`
--
ALTER TABLE `manage_emp_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `manage_emp_emergency`
--
ALTER TABLE `manage_emp_emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `manage_emp_experince`
--
ALTER TABLE `manage_emp_experince`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `manage_emp_pass`
--
ALTER TABLE `manage_emp_pass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shift_scheduling`
--
ALTER TABLE `shift_scheduling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams_lead`
--
ALTER TABLE `teams_lead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15863;

--
-- AUTO_INCREMENT for table `timesheet`
--
ALTER TABLE `timesheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
