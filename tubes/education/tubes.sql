-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 06:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `name`) VALUES
(1, 'admin', '12345678', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `title` text NOT NULL,
  `jam` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `modules` int(11) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `id_teacher`, `judul`, `harga`, `title`, `jam`, `bulan`, `modules`, `images`) VALUES
(1, 1, 'Learn Front End Development', 50000, 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Dolorem, Beatae. Modi Quos Excepturi Id Quibusdam? Molestiae Quis Nihil Non Debitis!', 2, 5, 11, 'images/4884785.jpg'),
(2, 3, 'Learn Back End Development', 100000, 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Dolorem, Beatae. Modi Quos Excepturi Id Quibusdam? Molestiae Quis Nihil Non Debitis!', 3, 8, 25, 'images/19362653.jpg'),
(3, 3, 'Learn Shofware Enginner', 30000, 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Dolorem, Beatae. Modi Quos Excepturi Id Quibusdam? Molestiae Quis Nihil Non Debitis!', 1, 3, 10, 'images/6463748.jpg'),
(4, 4, 'Learn Business Analisys', 50000, 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Dolorem, Beatae. Modi Quos Excepturi Id Quibusdam? Molestiae Quis Nihil Non Debitis!', 1, 3, 15, 'images/4654454.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id_teacher` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id_teacher`, `teacher`) VALUES
(1, 'bu retno'),
(3, 'Pak ferdinan'),
(4, 'Pak yogi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teacher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
