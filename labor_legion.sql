-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 10:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labor_legion`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'Construction'),
(2, 'Manufacturing'),
(3, 'Healthcare'),
(4, 'Financial Services'),
(5, 'IT Services'),
(6, 'Management'),
(7, 'Security'),
(8, 'Fitness & Wellness'),
(9, 'Industrial Processing'),
(10, 'Distribution & Logistics'),
(11, 'Performance Arts'),
(12, 'Communications & Media'),
(13, 'Maintenance'),
(14, 'Agriculture'),
(15, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `job_listing`
--

CREATE TABLE `job_listing` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(32) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `offer_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `skill` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `category_id`, `skill`) VALUES
(3, 1, 'Masonry'),
(4, 1, 'Electrical'),
(5, 1, 'Welding'),
(6, 1, 'HVAC'),
(7, 1, 'Painting'),
(8, 1, 'Carpentry'),
(9, 1, 'Drywall'),
(10, 1, 'Flooring'),
(11, 1, 'Steel Working'),
(12, 1, 'Plumbing'),
(13, 1, 'Window Installation'),
(14, 1, 'Door Installation'),
(15, 1, 'Lighting Specialist'),
(17, 4, 'Risk Analysis'),
(18, 4, 'Banking'),
(19, 4, 'Financial Planning '),
(20, 4, 'Financial Advising'),
(23, 3, 'Nursing'),
(24, 3, 'Eye Surgery'),
(25, 3, 'Heart Surgery'),
(26, 3, 'Brain Surgery'),
(27, 3, 'Gastrointestinal Surgery'),
(28, 3, 'Joint Surgery'),
(29, 3, 'Medical Consulting'),
(30, 3, 'Pharmacology'),
(31, 3, 'Pharmaceutical Development'),
(32, 3, 'Dentistry'),
(33, 3, 'Prosthetics'),
(34, 3, 'Screening'),
(35, 3, 'Trauma Care'),
(36, 3, 'Phlebotomy'),
(37, 3, 'Immunology'),
(38, 3, 'Anesthesiology'),
(39, 3, 'Cardiology'),
(40, 3, 'Dermatology');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `job_listing`
--
ALTER TABLE `job_listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `categories_fk` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job_listing`
--
ALTER TABLE `job_listing`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `categories_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
