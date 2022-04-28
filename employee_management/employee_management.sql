-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 02:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `hd_users`
--

CREATE TABLE `hd_users` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `picture` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `user_type` enum('admin','user') NOT NULL,
  `status` int(11) NOT NULL,
  `authtoken` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hd_users`
--

INSERT INTO `hd_users` (`id`, `emp_name`, `email`, `password`, `gender`, `mobile`, `address`, `dob`, `picture`, `department`, `user_type`, `status`, `authtoken`) VALUES
(14, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'male', '', '', '0000-00-00', '', '2022-04-28 15:23:48', 'admin', 0, ''),
(15, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'male', '', '', '0000-00-00', '', '2022-04-28 15:29:05', 'admin', 0, ''),
(16, '', 'chauhan@gmail.com', '9d0353f06ae5bc746d9bd572bb3ef241', 'male', '', '', '0000-00-00', 'rta3.PNG', '2022-04-28 15:30:19', 'admin', 0, ''),
(23, 'kuch b', 'kuchb@gmail.com', '186bca7826f8aeb9aa3eb12928329389', '', '6203098525', 'job', '2022-04-08', 'rta3.PNG', '2022-04-28 16:17:07', 'admin', 0, ''),
(24, 'hello', 'chauhan@gmail.com', '186bca7826f8aeb9aa3eb12928329389', '', '6203098525', 'kuch b', '2022-04-21', 'Change of name RTA.pdf', '2022-04-28 16:17:48', 'admin', 0, ''),
(25, 'hello', 'namaste@gmail.com', '186bca7826f8aeb9aa3eb12928329389', '', '6203098525', 'kuchb', '2022-04-06', 'rta3.PNG', '2022-04-28 16:18:02', 'admin', 0, ''),
(26, 'hello', 'namaste@gmail.com', '186bca7826f8aeb9aa3eb12928329389', '', '6203098525', 'kuchb', '2022-04-06', 'rta3.PNG', '2022-04-28 16:18:51', 'admin', 0, ''),
(27, 'hello', 'namaste@gmail.com', '40be4e59b9a2a2b5dffb918c0e86b3d7', '', '6203098525', 'kuchb', '2022-04-06', 'rta3.PNG', '2022-04-28 16:23:45', 'admin', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hd_users`
--
ALTER TABLE `hd_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hd_users`
--
ALTER TABLE `hd_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
