-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 10:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reciver_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `ammount` float NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `reciver_id`, `name`, `customer_id`, `account_no`, `ammount`, `added_on`) VALUES
(1, 0, 0, '', '', 0, 1000, '2021-01-08 03:03:12'),
(2, 0, 2, 'Pruthvik', '9825563585@spark', 0, 1000, '2021-01-08 03:05:39'),
(3, 0, 1, 'Karnik', '9455255621@spark', 0, 1000, '2021-01-08 03:10:07'),
(4, 0, 2, 'Pruthvik', '9825563585@spark', 0, 1000, '2021-01-08 03:11:58'),
(5, 0, 2, 'Pruthvik', '9825563585@spark', 21474836, 1000, '2021-01-08 03:16:02'),
(6, 1, 2, 'Pruthvik', '9825563585@spark', 21474836, 1000, '2021-01-08 03:16:37'),
(7, 1, 2, 'Pruthvik', '9825563585@spark', 21474836, 1000, '2021-01-08 03:17:06'),
(8, 1, 8, 'Jash', '9455254221@spark', 71127100, 111, '2021-01-17 20:06:11'),
(9, 1, 7, 'Jay', '9425255511@spark', 34001811, 889, '2021-01-17 20:18:18'),
(10, 9, 2, 'Pruthvik', '9825563585@spark', 21474836, 20000, '2021-02-05 15:53:52'),
(11, 1, 2, 'Pruthvik', '9825563585@spark', 21474836, 6000, '2021-02-08 20:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `account_number` int(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `number` varchar(20) NOT NULL,
  `balance` float NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `upi_pin` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `account_number`, `email`, `number`, `balance`, `customer_id`, `upi_pin`) VALUES
(1, 'Karnik', 10010321, 'karnik@gmail.com', '9455255621', 490000, '9455255621@spark', 121200),
(2, 'Pruthvik', 21474836, 'pruthvik@gmail.com', '9825563585', 135000, '9825563585@spark', 213012),
(3, 'Moiz', 45646879, 'moiz@gmail.com', '9234568979', 94995, '9234568979@spark', 412127),
(4, 'Dhyey', 10032118, 'dhyey@gmail.com', '9456555772', 231310, '9456555772@spark', 121212),
(5, 'Ishan ', 31919311, 'ishan@gmail.com', '9526174711', 32210, '9526174711@spark', 231412),
(6, 'Keshav', 10102101, 'keshav@gmail.com', '9889292944', 211100, '9889292944@spark', 556644),
(7, 'Jay', 34001811, 'jay@gmail.com', '9425255511', 400889, '9425255511@spark', 123123),
(8, 'Jash', 71127100, 'jash@gmail.com', '9455254221', 22111, '9455254221@spark', 441011),
(9, 'Shrey', 21100302, 'shrey@gmail.com', '9001201531', 300000, '9001201531@spark', 310002),
(10, 'Rohansh', 10022010, 'rohansh@gmail.com', '9898981100', 89000, '9898981100@spark', 123412);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
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
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
