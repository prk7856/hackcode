--
-- Database: `dsr`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `shopname` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `mobileNumber` varchar(200) NOT NULL,
  `Contact` varchar(200) NOT NULL,
  `emailId` varchar(200) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `registedBy` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `eid`, `shopname`, `fullname`, `Address`, `mobileNumber`, `Contact`, `emailId`, `longitude`, `latitude`, `registedBy`, `status`, `createdOn`, `updatedOn`) VALUES
(1, 2, 'as', 'zx', 'wg', '456', '', '', 0, 0, '', '', '2018-02-11 09:20:02', '2018-02-11 09:20:02'),
(2, 2, 'kjf', 'kjfdkls', 'kkf', '789', '', '', 21, 76, '', '', '2018-02-11 09:21:06', '2018-03-14 22:46:43'),
(3, 5, 'as', 'zx', 'wg', '456', '', '', 0, 0, '', '', '2018-02-11 09:26:28', '2018-02-11 09:26:28'),
(4, 4, 'chai tapari', 'balu bhau', 'kfjgk gj', '958469', '', '', 0, 0, '', '', '2018-02-11 09:27:50', '2018-02-11 09:27:50'),
(5, 0, 'ghj', 'kiran gajbe', 'gcoej jalgaon', '07218596091', '', '', 0, 0, '', '', '2018-02-11 22:13:29', '2018-02-11 22:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `employee_timeline`
--

CREATE TABLE `employee_timeline` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `activitylist` text NOT NULL,
  `productiveCall` varchar(200) NOT NULL,
  `nonProductiveCall` varchar(200) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_timeline`
--

INSERT INTO `employee_timeline` (`id`, `eid`, `date`, `activitylist`, `productiveCall`, `nonProductiveCall`, `createdOn`, `updatedOn`) VALUES
(1, 2, '2018-03-14 05:27:44', '', '', '', '2018-03-15 11:16:50', '2018-03-15 08:44:34');

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
(1, 'Nick Vijucic', 'admin', 'admin', 'admin', 'ACTIVE', 'national highway 6 , jalgaon', 'Asst. manager', '7218596091', 'aaa@gmail.com', '', '2017-10-30 16:11:14', '2018-03-14 22:47:20'),
(2, 'kiran gajbhiye', 'emp_kiran', 'Kiran', 'employee', 'ACTIVE', 'amravati', '', '7218596091', 'kiran@gmail.com', '', '2017-11-01 09:39:09', '2017-11-01 09:39:09'),
(3, 'priyanka kale', 'admin_priyanka', 'priyanka', 'admin', 'ACTIVE', 'jalgaon', '', '7589461236', 'p@gmail.com', '', '2017-11-02 06:29:07', '2018-01-12 10:31:25'),
(4, 'shagufta', 'emp_shagufta', 'shagufta', 'employee', 'INACTIVE', 'chandrapur', '', '12345678909', 's@gmail.com', '', '2017-11-02 16:19:07', '2017-11-02 16:19:07'),
(5, 'akshata shah', 'emp_akshata', 'akshata', 'employee', 'ACTIVE', '', '', '', '', '', '2017-11-02 05:29:00', '2017-11-02 05:29:00'),
(6, 'Ankita Raipure', 'anki', 'anki', 'employee', '', '', 'manager', '7896541230', 'z@gmail.com', '', '0000-00-00 00:00:00', '2017-11-04 23:52:57'),
(7, 'kiran gajbe', '', '', 'employee', '', '', 'developer', '07218596091', 'kirangajabhiye11@gmail.com', '', '0000-00-00 00:00:00', '2018-02-07 17:41:27'),
(8, 'laxmi khedkar', '', '', 'employee', '', '', 'student', '9766075602', 'laxmikhedkar286@gmail.com', '', '0000-00-00 00:00:00', '2018-03-13 22:08:33');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee_timeline`
--
ALTER TABLE `employee_timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
