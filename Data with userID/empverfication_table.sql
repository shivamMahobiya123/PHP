-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2020 at 11:14 PM
-- Server version: 10.3.25-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roadseye_empverification`
--

-- --------------------------------------------------------

--
-- Table structure for table `empverfication_table`
--

CREATE TABLE `empverfication_table` (
  `emp_id` varchar(20) NOT NULL COMMENT 'Emplyee_ID for user',
  `emp_name` varchar(30) NOT NULL,
  `emp_email` varchar(40) NOT NULL,
  `emp_phone` text NOT NULL,
  `emp_department` text NOT NULL,
  `emp_designation` text NOT NULL,
  `emp_team` text NOT NULL,
  `emp_bloodgroup` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empverfication_table`
--

INSERT INTO `empverfication_table` (`emp_id`, `emp_name`, `emp_email`, `emp_phone`, `emp_department`, `emp_designation`, `emp_team`, `emp_bloodgroup`) VALUES
('emp01', 'Shivam', 'xyz@gmail.com', '7777777171', 'CSE', 'Student', 'Developer', 'A+'),
;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empverfication_table`
--
ALTER TABLE `empverfication_table`
  ADD PRIMARY KEY (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
