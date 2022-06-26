-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2022 at 04:46 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arrow-dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `alamat` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `telp` varchar(128) DEFAULT NULL,
  `maps` varchar(128) DEFAULT NULL,
  `gambar` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `alamat`, `email`, `telp`, `maps`, `gambar`) VALUES
(1, 'xxxx', 'xxxx', 'xxxx', 'xxxx', 'xxxx');

-- --------------------------------------------------------

--
-- Table structure for table `detail_project`
--

CREATE TABLE `detail_project` (
  `id` int(3) NOT NULL,
  `id_project` varchar(3) NOT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_project`
--

INSERT INTO `detail_project` (`id`, `id_project`, `foto`, `date_create`, `date_update`) VALUES
(1, '1', 'DP-6tFty4O5XmBU1od9SE9wvCsSB1OTXb', '2022-06-18 12:18:47', NULL),
(2, '1', 'DP-JwafhKRj4mW4YkJsgi4FFd6en5jOX5', '2022-06-19 20:31:13', NULL),
(3, '1', 'DP-QnYNpp81Z8q9OejAbyQP0Rl8y3ldWX', '2022-06-19 20:31:20', NULL),
(4, '1', 'DP-La4PRJpnU8wn5QJBarjDG8Q9PqX22e', '2022-06-19 20:31:26', NULL),
(5, '2', 'DP-uRTmpNwIBXAiDiM9sQMVkb59etpy5Y', '2022-06-23 22:55:42', NULL),
(6, '2', 'DP-eBVuwwQ6heFIXQW9qACmUEU2TPgmhS', '2022-06-23 22:55:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(3) NOT NULL,
  `nama_project` varchar(128) DEFAULT NULL,
  `location` varchar(128) DEFAULT NULL,
  `gambar` varchar(128) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `nama_project`, `location`, `gambar`, `date_create`, `date_update`) VALUES
(1, 'Test 12', 'dsgdsgdggrtn ', 'P-9tLrumV1qwI0A084d4Z6HCAcE4CT2t', '2022-06-18 11:49:44', '2022-06-18 12:19:07'),
(2, 'Test', 'Yogya', 'P-RraoXUpgzTxc25HLybI1TUfF1Rk2RS', '2022-06-19 19:45:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'test', 'test@nb.com', '$2y$10$CMwL.AQrYxWztl/cFHO.Pu91Ug.FyngDZm1Q.qfW0WesJmTDDIelq');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `id_project` varchar(3) DEFAULT NULL,
  `nama_video` varchar(128) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_project`
--
ALTER TABLE `detail_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_project`
--
ALTER TABLE `detail_project`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
