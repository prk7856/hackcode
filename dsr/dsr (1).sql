-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 11:43 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `passwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `mobileNumber` varchar(200) NOT NULL,
  `Contact` varchar(200) NOT NULL,
  `emailId` varchar(200) NOT NULL,
  `longitude` int(11) NOT NULL,
  `latitude` int(11) NOT NULL,
  `registedBy` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_timeline`
--

CREATE TABLE `employee_timeline` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `date` date NOT NULL,
  `activities` text NOT NULL,
  `productiveCall` varchar(200) NOT NULL,
  `nonProductiveCall` varchar(200) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `passwd` varchar(200) NOT NULL,
  `userType` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `post` varchar(200) NOT NULL,
  `mobileNumber` varchar(200) NOT NULL,
  `emailId` varchar(200) NOT NULL,
  `profilePicture` varchar(200) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `passwd`, `userType`, `status`, `address`, `post`, `mobileNumber`, `emailId`, `profilePicture`, `createdOn`, `updatedOn`) VALUES
(1, 'Nick Vijucic', 'admin', 'admin', 'admin', 'ACTIVE', 'national highway 6 , jalgaon', 'Asst. manager', '7218596091', 'aaa@gmail.com', '', '2017-10-30 16:11:14', '2018-02-10 16:06:09'),
(2, 'kiran gajbhiye', 'emp_kiran', 'Kiran', 'employee', 'ACTIVE', 'amravati', '', '7218596091', 'kiran@gmail.com', '', '2017-11-01 09:39:09', '2017-11-01 09:39:09'),
(3, 'priyanka kale', 'admin_priyanka', 'priyanka', 'admin', 'ACTIVE', 'jalgaon', '', '7589461236', 'p@gmail.com', '', '2017-11-02 06:29:07', '2018-01-12 10:31:25'),
(4, 'shagufta', 'emp_shagufta', 'shagufta', 'employee', 'INACTIVE', 'chandrapur', '', '12345678909', 's@gmail.com', '', '2017-11-02 16:19:07', '2017-11-02 16:19:07'),
(5, 'akshata shah', 'emp_akshata', 'akshata', 'employee', 'ACTIVE', '', '', '', '', '', '2017-11-02 05:29:00', '2017-11-02 05:29:00'),
(6, 'Ankita Raipure', 'anki', 'anki', 'employee', '', '', 'manager', '7896541230', 'z@gmail.com', '', '0000-00-00 00:00:00', '2017-11-04 23:52:57'),
(7, 'kiran gajbe', '', '', 'employee', '', '', 'developer', '07218596091', 'kirangajabhiye11@gmail.com', '', '0000-00-00 00:00:00', '2018-02-07 17:41:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_timeline`
--
ALTER TABLE `employee_timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee_timeline`
--
ALTER TABLE `employee_timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
