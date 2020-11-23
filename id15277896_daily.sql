-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2020 at 07:36 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15277896_daily`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `usernames` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `firstname`, `lastname`, `usernames`, `email`, `password`) VALUES
(1, 'Clare ', 'Daniel', 'clare.daniel', 'cdan@car.com', 'e6d96502596d7e7887b76646c5f615d9'),
(3, 'Emma', 'Sinclaur', 'emma.sinclair', 'car@dasd.com', 'e6d96502596d7e7887b76646c5f615d9'),
(4, 'Emma', 'Silky', 'emma.silky', 'car@silk.com', 'e6d96502596d7e7887b76646c5f615d9'),
(5, 'SImba', 'John', 'simba.john', 'simba@car.com', 'e6d96502596d7e7887b76646c5f615d9'),
(6, 'Silk', 'Mary', 'silk.mary', 'silk@silk.com', 'e6d96502596d7e7887b76646c5f615d9'),
(7, 'Emily', 'Johnson', 'emily21', 'emily@emily.com', 'e6d96502596d7e7887b76646c5f615d9'),
(8, 'Emily', 'Cordoba', 'emily.cordoba', 'sike@sike.com', 'e6d96502596d7e7887b76646c5f615d9'),
(9, 'Clare', 'Single', 'clare.single', 'sike@gmail.com', 'e6d96502596d7e7887b76646c5f615d9'),
(10, 'Tristan', 'Fox', 'tristan.fox', 'tristan@tristan.com', 'e6d96502596d7e7887b76646c5f615d9'),
(11, 'Charli', 'Pescador', 'charli.pescador', 'charles@bmw.com.au', 'e6d96502596d7e7887b76646c5f615d9'),
(12, 'Sam', 'Smith', 'sam.smith', 'sam@sam.com', 'e6d96502596d7e7887b76646c5f615d9'),
(13, 'Sam', 'Carvolth', 'sam.carvolth', 'sam@sam.com', 'e6d96502596d7e7887b76646c5f615d9'),
(14, 'Luke', 'Wilson', 'luke.wilson', 'sam@sam.com', 'e6d96502596d7e7887b76646c5f615d9'),
(15, 'Jay', 'Horan', 'jay.horan', 'jay.horan@gmail.com', 'e6d96502596d7e7887b76646c5f615d9'),
(16, 'Jaymus', 'Horan', 'jay.horan', 'jay@honda.com.au', 'baba327d241746ee0829e7e88117d4d5');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `date` varchar(100) NOT NULL,
  `topic1` varchar(100) NOT NULL,
  `subinfo1` varchar(800) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`date`, `topic1`, `subinfo1`, `id`) VALUES
('6/11/2020', 'Senior Exams', ' Senior Exams begin on the 16th of November. Please stay quiet during these times.  adsfdsf', 1),
('31/10/2020', 'Seniors:', 'Please do not go through the yellow building’s driveway to Uppa Level, unfortunately residents do NOT appreciate our boys trespassing through. PLEASE walk around the building from now on.', 2),
('31/10/2020', 'Out of Bounds:', ' No students should be playing games on the Ovals before school. You are not to remain at the McMillan Cr crossing, the synthetic grass area outside the ERC, near the LOTE rooms or in the driveway down the middle of the school. Once you arrive, you are to make your way to the Quad and wait there until the bell rings for tutor group.  ', 3),
('31/10/2020', 'Year 12:', '2 Parents are allowed for graduation event this Friday', 4),
('31/10/2020', 'Recyclying Bins', 'The quad has 6 bins that are clearly labelled to recycle bottles. The quad has 6 bins that are clearly labelled to recycle bottles. The quad has 6 bins that are clearly labelled to recycle bottles. ', 5),
('5/11/2020', 'QCity - Boarding Pass', 'A reminder to any student needing a Priority Boarding Pass for QCity buses please see reception today.', 6),
('9/11/2020', 'Library', 'Margie Maher is the winner of the library quiz.', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
