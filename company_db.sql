-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2022 at 09:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `dob` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `join_date` date NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=>''deactive'',1=>''active''',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `middle_name`, `last_name`, `department`, `gender`, `dob`, `email`, `mobile_no`, `designation`, `join_date`, `is_active`, `created`, `modified`) VALUES
(1, 'Prashant', NULL, 'Narute', 'IT', 'male', '1995-04-19', 'prashant@gmail.com', 9098877665, 'Senior Software Developer', '2020-04-16', 1, '2022-04-13 21:23:31', '2022-04-14 00:44:13'),
(2, 'Sagar', NULL, 'Pawar', 'IT', 'male', '1993-02-16', 'sagar@gmail.com', 9786567766, 'Product Manager', '2021-08-19', 1, '2022-04-13 21:23:31', '2022-04-14 00:44:02'),
(3, 'Rahul', NULL, 'Kale', 'IT', 'male', '1993-02-16', 'rahul@gmail.com', 9089567766, 'Junior Software Developer', '2022-06-15', 1, '2022-04-13 21:23:31', '2022-04-14 00:43:53'),
(4, 'Ganesh', NULL, 'Koli', 'IT', 'male', '1999-05-19', 'ganesh@gmail.com', 9890567866, 'Senior Tester', '2021-03-16', 1, '2022-04-13 21:23:31', '2022-04-14 00:44:26'),
(5, 'Himani', NULL, 'Govali', 'Admin', 'female', '1998-03-02', 'himani@gmail.com', 8767567866, 'HR', '2021-03-16', 1, '2022-04-13 21:23:31', '2022-04-13 21:43:57'),
(6, 'Krishna', NULL, 'Waghmare', 'IT', 'male', '1998-03-02', 'krishna@gmail.com', 8767567866, 'Senior Software Developer', '2020-08-20', 1, '2022-04-13 21:23:31', '2022-04-14 00:44:51'),
(7, 'Vishal', NULL, 'Waghmode', 'IT', 'male', '1995-04-19', 'vishal@gmail.com', 9098877665, 'Senior Software Developer', '2020-04-16', 1, '2022-04-13 21:23:31', '2022-04-14 00:44:47'),
(8, 'Nana', NULL, 'Jagtap', 'IT', 'male', '1993-02-16', 'nana@gmail.com', 9786567766, 'Product Manager', '2021-08-19', 1, '2022-04-13 21:23:31', '2022-04-14 00:44:55'),
(9, 'Pravin', NULL, 'Jadhav', 'IT', 'male', '1993-02-16', 'pravin@gmail.com', 9089567766, 'Junior Software Developer', '2022-06-15', 1, '2022-04-13 21:23:31', '2022-04-14 00:43:57'),
(10, 'Swapnil', NULL, 'Patil', 'IT', 'male', '1999-05-19', 'swapnil@gmail.com', 9890567866, 'Senior Tester', '2021-03-16', 1, '2022-04-13 21:23:31', '2022-04-14 00:44:21'),
(11, 'Pooja', NULL, 'Shinde', 'Admin', 'female', '1998-03-02', 'pooja@gmail.com', 8767567866, 'HR', '2021-03-16', 1, '2022-04-13 21:23:31', '2022-04-13 21:43:57'),
(12, 'ishwar', NULL, 'Patil', 'IT', 'male', '1998-03-02', 'ishwar@gmail.com', 8767567866, 'Senior Software Developer', '2020-08-20', 1, '2022-04-13 21:23:31', '2022-04-14 00:44:37'),
(13, 'Shekar', NULL, 'Dhake', 'Marketing', 'male', '1998-03-02', 'shekar@gmail.com', 8767567866, 'Senior Software Developer', '2020-08-20', 1, '2022-04-13 21:23:31', '2022-04-13 21:46:51'),
(14, 'Kiran', NULL, 'Suneja', 'Sales', 'female', '1995-04-19', 'Kiran@gmail.com', 9098877665, 'Senior Software Developer', '2020-04-16', 1, '2022-04-13 21:23:31', '2022-04-13 21:23:31'),
(15, 'Samadhan', NULL, 'Kumbhar', 'QA', 'male', '1993-02-16', 'samadhan@gmail.com', 9786567766, 'Product Manager', '2021-08-19', 1, '2022-04-13 21:23:31', '2022-04-13 21:23:31'),
(16, 'Amol', NULL, 'Rathod', 'Admin', 'male', '1993-02-16', 'amol@gmail.com', 9089567766, 'Junior Software Developer', '2022-06-15', 1, '2022-04-13 21:23:31', '2022-04-13 21:23:31'),
(17, 'Someshwar', NULL, 'terkar', 'Sales', 'male', '1999-05-19', 'Someshwar@gmail.com', 9890567866, 'Senior Tester', '2021-03-16', 1, '2022-04-13 21:23:31', '2022-04-13 21:23:31'),
(18, 'Tanuja', NULL, 'Waghmode', 'QA', 'female', '1998-03-02', 'tanuja@gmail.com', 8767567866, 'Junior Software Developer', '2021-03-16', 1, '2022-04-13 21:23:31', '2022-04-13 21:43:57'),
(19, 'Anuja', NULL, 'Kumbhar', 'IT', 'female', '1998-03-02', 'anuja@gmail.com', 8767567866, 'Senior Software Developer', '2020-08-20', 1, '2022-04-13 21:23:31', '2022-04-14 00:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `from_leave_date` date DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0=>''disapprove'',1=>''approve'',2=>''pending'',3=>''absent'',4=>''late'',5=>''leave'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `employee_id`, `from_leave_date`, `remark`, `status`) VALUES
(1, 16, '2022-04-14', 'sick leave', 5),
(2, 1, '2022-04-14', '', 4),
(3, 2, '2022-04-14', '', 3),
(4, 3, '2022-04-14', '', 4),
(5, 3, '2022-04-14', 'sick leave', 5),
(6, 5, '2022-04-14', '', 5),
(7, 2, '2022-04-14', '', 4),
(8, 15, '2022-04-14', '', 3),
(9, 4, '2022-04-14', 'sick leave', 5),
(10, 12, '2022-04-27', '', 1),
(11, 6, '2022-04-14', '', 5),
(12, 8, '2022-04-20', '', 1),
(13, 11, '2022-04-14', 'sick leave', 3),
(14, 9, '2022-04-20', '', 1),
(15, 13, '2022-04-14', '', 3),
(16, 16, '2022-04-19', '', 1),
(17, 10, '2022-04-15', '', 3),
(18, 10, '2022-04-15', '', 1),
(19, 14, '2022-04-15', '', 4),
(20, 11, '2022-04-15', '', 2),
(21, 18, '2022-04-15', '', 4),
(22, 7, '2022-04-15', '', 4),
(23, 9, '2022-04-15', '', 5),
(24, 4, '2022-04-15', '', 3),
(25, 4, '2022-04-14', 'sick leave', 5),
(26, 12, '2022-04-14', '', 2),
(27, 6, '2022-04-18', '', 1),
(28, 8, '2022-04-14', '', 5),
(29, 11, '2022-04-14', 'sick leave', 3),
(30, 9, '2022-04-14', '', 4),
(31, 13, '2022-04-14', '', 3),
(32, 16, '2022-04-14', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `leaves_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
