-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 06:13 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hogwarts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `token`) VALUES
(1, 'Principal Dumbledore', 'dumbledoore@gmail.com', '3ed6bf074c921ec20503b3ea37602e9e');

-- --------------------------------------------------------

--
-- Table structure for table `offenses`
--

CREATE TABLE `offenses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `offense` varchar(50) NOT NULL,
  `details` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offenses`
--

INSERT INTO `offenses` (`id`, `student_id`, `offense`, `details`) VALUES
(1, 1, 'Breaking and Entering', ' Hufflepuff student in Harry Potter\'s year, prefect of Hufflepuff house in fifth year, member of Dumbledore\'s Army'),
(2, 2, 'Being a student', 'Gryffindor student one year above Harry Potter; '),
(3, 3, 'student', 'Gryffindor student one year above Harry Potter'),
(4, 5, 'Death Eating', 'Death Eater who tortured Frank and Alice Longbottom into insanity.'),
(5, 9, 'Death Eating', 'Death Eater, brother of Rabastan Lestrange, husband of Bellatrix Lestrange'),
(6, 10, 'Death Eating', 'Fraudulent celebrity author, Defence Against the Dark Arts teacher.');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `token`) VALUES
(1, 'Hannah Abbott ', 'hannahabbott@gmail.com', '6a07803a68b9360ad08f42508c15e234'),
(2, 'Ludo Bagman ', 'ludobagman@gmail.com', '578df308dfd9f248439b12fb24063dda'),
(3, 'Katie Bell', 'katiebell@gmail.com', 'b9e61daf14c58348b9bb97bc2a0861f0'),
(4, 'Cuthbert Binns', 'cuthbertbinns@gmail.com', '0ea5b793ab2f830a0991c1ce312dfba5'),
(5, 'Phineas Nigellus Black', 'nigellusblack@gmail.com', 'f72dcc86c22dfe7750a75d1e22d2a9c0'),
(6, 'Sirius Black', 'siriusblack@gmail.com', 'a3875d643f7c9157a2a323ca267e0ed9'),
(7, 'Amelia Bones ', 'ameliabones@gmail.com', '989c24177324bf4d493822021c0ef634'),
(8, 'Susan Bones', 'susanbones@gmail.com', '9f0b2e9c07bd2ebf2daaef28a6bace92'),
(9, 'Bellatrix Lestrange', 'Lestrange@hogwarts.com', 'b3acd27a6d67aa289a3e8bf75aad3050'),
(10, 'Alice Longbottom', 'longbottom@hogwarts.com', '1b8904b6a92daee5d36d51375e664f69'),
(11, 'Alice Longbom', 'alicelongbom@gmail.com', '97965d313276f6eef79886b16dd57588'),
(16, 'new name', 'newname@gmail.com', '96704c6e6d422933503bdc9586e164bf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offenses`
--
ALTER TABLE `offenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `offenses`
--
ALTER TABLE `offenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
