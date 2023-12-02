-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2021 at 02:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `number`, `email`, `password`) VALUES
(1, 'admin', 987463000, 'ghgnj948', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'hdis', 'nchdi', 'nckskwo'),
(2, 'hsiok', 'ncjk', 'hdie4957'),
(4, 'ghyu', 'fgghj', 'hi'),
(5, 'hnko', 'jcn3900', 'jidoszj rhfuio znxkk'),
(6, 'yoo2628', 'djmdhdu', 'fjfido\r\ndmxmm');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` int(20) NOT NULL,
  `a_date` varchar(10) NOT NULL,
  `d_date` varchar(10) NOT NULL,
  `people` int(15) NOT NULL,
  `room` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `email`, `phone`, `a_date`, `d_date`, `people`, `room`) VALUES
(4, 'jisooo', '98guill', 987654321, '4th', '6th', 5, 'Bungalow');

-- --------------------------------------------------------

--
-- Table structure for table `table_reservation`
--

CREATE TABLE `table_reservation` (
  `id` int(10) NOT NULL,
  `SelectDay` text NOT NULL,
  `SelectHour` varchar(10) NOT NULL,
  `FullName` varchar(20) NOT NULL,
  `PhoneNumber` int(20) NOT NULL,
  `HowManyPersons` int(10) NOT NULL,
  `BOOKTABLE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_reservation`
--

INSERT INTO `table_reservation` (`id`, `SelectDay`, `SelectHour`, `FullName`, `PhoneNumber`, `HowManyPersons`, `BOOKTABLE`) VALUES
(2, 'thursday', '14:00', 'njio', 98765432, 2, 'BOOK TABLE'),
(3, 'monday', '14:00', 'ehsjdi', 8374649, 3, 'BOOK TABLE');

-- --------------------------------------------------------

--
-- Table structure for table `us`
--

CREATE TABLE `us` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `us`
--

INSERT INTO `us` (`id`, `username`, `email`, `password`) VALUES
(3, 'eheh', 'ugf567cff', '6057f13c496ecf7fd777ceb9e79ae285'),
(7, 'jghuy', 'u6t', 'ahh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'hi', '8373nhgch', 'f057f5ccb87a310534b9dda3a69a72c4'),
(2, 'hi', 'hr678', 'f057f5ccb87a310534b9dda3a69a72c4'),
(4, 'HU', 'gh67o9', '6057f13c496ecf7fd777ceb9e79ae285'),
(5, 'admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'vvv', 'vvv@gmaijmuh', '567');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `delete_us` AFTER DELETE ON `users` FOR EACH ROW insert into us 
(id,username,email,password)
values(old.id, old.username, old.email, old.password)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_us` AFTER INSERT ON `users` FOR EACH ROW BEGIN
INSERT INTO us(id,username,email,password)VALUES
(NEW.id,NEW.username,NEW.email,NEW.password);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_reservation`
--
ALTER TABLE `table_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `us`
--
ALTER TABLE `us`
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
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_reservation`
--
ALTER TABLE `table_reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `us`
--
ALTER TABLE `us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
