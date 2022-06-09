-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 05:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `cid` varchar(50) NOT NULL,
  `mid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `bdate` datetime NOT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `seat` int(11) NOT NULL,
  `seatnums` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `cid`, `mid`, `tid`, `sid`, `bdate`, `cname`, `seat`, `seatnums`, `amount`) VALUES
(14, 'test@test.com', 102, 1, 2, '2022-06-08 00:00:00', NULL, 3, ',A2,C4,F8', 300),
(15, 'test@test.com', 102, 1, 1, '2022-06-08 00:00:00', NULL, 2, ',A7,C6', 200);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `uname`, `email`, `phone`, `gender`) VALUES
(1, 'test', 'test@test.com', '9860915755', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `query` varchar(1000) NOT NULL,
  `edate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `price`) VALUES
(1, 'Burger', 5),
(2, 'Nachos', 6),
(3, 'Popcorn', 3),
(4, 'Fish n\' Chips', 7);

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `id` int(11) NOT NULL,
  `fid` int(11) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `mid` int(11) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `reldate` date NOT NULL,
  `director` varchar(100) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `actress` varchar(100) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `theatre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mid`, `mname`, `reldate`, `director`, `actor`, `actress`, `trailer`, `poster`, `descr`, `banner`, `theatre`) VALUES
(102, 'Stuart Little 2', '2020-09-04', 'Rob Minkof', 'A Rat', 'A Sparrow', '<iframe width=\"956\" height=\"538\" src=\"https://www.youtube.com/embed/IDbsJeOgItw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/102.jpg', 'Funny and full of comedy of a rat named Stuart adopted by a family and a sparrow.', 'banners/102.jpg', '1,2,3,4,5'),
(103, 'Iron Man 3', '2020-03-09', 'Shane Black', 'Robert Downey Jr.,  Don Cheadle', 'Gwyneth Paltrow', '<iframe width=\"956\" height=\"538\" src=\"https://www.youtube.com/embed/oYSD2VQagc4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/103.jpg', 'Very nice movie of Iron Man', 'banners/103.jpg', '1,2,3'),
(104, 'Terminator Dark fate', '2015-05-14', 'Alen Tailer', 'Arnold Schwarzenegger, ', ' Linda Hamilton', '<iframe width=\"861\" height=\"538\" src=\"https://www.youtube.com/embed/k64P4l2Wmeg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/104.jpg', 'Thriller and action movie based on Machines. Very good performance of Arnold', 'banners/104.jpg', '3,4'),
(105, 'X Men', '2020-09-21', 'Bryan Singer', 'Hugh Jackman, Patrick Stewart', 'Ian Mckellen', '<iframe width=\"956\" height=\"538\" src=\"https://www.youtube.com/embed/VNxwlx6etXI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/105.jpg', 'Mutant movie with special power people', 'banners/105.jpg', '4,5'),
(106, 'Jumanji The next level', '2020-06-12', 'Jake Kasdan', 'Serdarius Blain, Alex Wolff, Karen Gillan', 'Serdarius Blain', '<iframe width=\"956\" height=\"538\" src=\"https://www.youtube.com/embed/rBxcF-r9Ibs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/106.jpg', 'Best comedy movie', 'banners/106.jpg', '4,5'),
(110, 'Super man - Man of Steel', '2019-11-29', 'Jake Kasdan', 'Henry Cavill, Amy Adams, Michael Shannon', 'Not Know', '<iframe width=\"871\" height=\"490\" src=\"https://www.youtube.com/embed/T6DJcgm3wNY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/110.jpg', 'Very nice action movie of Super man', 'banners/110.jpg', '1,3,5'),
(111, 'Ghost Rider', '2020-09-18', 'Mark Steven Johnson', 'Nicolas Cage', 'Eva Mendes', '<iframe width=\"1045\" height=\"496\" src=\"https://www.youtube.com/embed/tp12CD2A4NA\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/111.jpg', 'Ghost Rider.\" Long ago, superstar motorcycle stunt rider Johnny Blaze made a deal with the devil to protect the ones he loved most: his father and his childhood sweetheart, Roxanne (Eva Mendes). Now, the devil has come for his due. By day, Johnny is a die', 'banners/111.jpg', '2,4,5');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `showname` varchar(50) NOT NULL,
  `showtime` varchar(10) NOT NULL,
  `endtime` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `showname`, `showtime`, `endtime`, `amount`) VALUES
(1, 'First Show', '09:00', '11:00', 10),
(2, 'Matinee Show', '12:00', '1:00', 12),
(4, 'Noon Show', '14:00', '16:00', 5),
(5, 'Night Show', '21:00', '23:00', 12),
(6, 'My Show', '10:00', '12:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `tid` int(11) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`tid`, `tname`, `location`, `seats`) VALUES
(1, 'Theatre 1', 'Ealing', 90),
(2, 'Theatre 2', 'Ealing', 200),
(3, 'Theatre 3', 'Ealing', 60);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(30) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `uname`, `pwd`, `role`) VALUES
('admin', 'Administrator', 'admin', 'admin'),
('test@test.com', 'test', 'abc123', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
