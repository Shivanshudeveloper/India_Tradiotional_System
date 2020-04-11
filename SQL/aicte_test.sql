-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 05:31 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aicte_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `indian_system`
--

CREATE TABLE `indian_system` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `worked_as` text NOT NULL,
  `work_location` text NOT NULL,
  `past_research_field_interest` text NOT NULL,
  `past_publication_title` text NOT NULL,
  `past_description` text NOT NULL,
  `past_publication_url` text NOT NULL,
  `past_video_url` text NOT NULL,
  `past_expert_name` text NOT NULL,
  `past_expert_email` text NOT NULL,
  `past_expert_phone` text NOT NULL,
  `past_expert_role` text NOT NULL,
  `past_expert2_name` text NOT NULL,
  `past_expert2_email` text NOT NULL,
  `past_expert2_phone` text NOT NULL,
  `past_expert2_role` text NOT NULL,
  `present_research_field_interest` text NOT NULL,
  `present_publication_title` text NOT NULL,
  `present_description` text NOT NULL,
  `present_publication_url` text NOT NULL,
  `present_video_url` text NOT NULL,
  `present_expert_name` text NOT NULL,
  `present_expert_email` text NOT NULL,
  `present_expert_phone` text NOT NULL,
  `present_expert_role` text NOT NULL,
  `present_expert2_name` text NOT NULL,
  `present_expert2_email` text NOT NULL,
  `present_expert2_phone` text NOT NULL,
  `present_expert2_role` text NOT NULL,
  `future_research_field_interest` text NOT NULL,
  `future_any_other` text NOT NULL,
  `description_future` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indian_system`
--

INSERT INTO `indian_system` (`id`, `name`, `email`, `phone`, `worked_as`, `work_location`, `past_research_field_interest`, `past_publication_title`, `past_description`, `past_publication_url`, `past_video_url`, `past_expert_name`, `past_expert_email`, `past_expert_phone`, `past_expert_role`, `past_expert2_name`, `past_expert2_email`, `past_expert2_phone`, `past_expert2_role`, `present_research_field_interest`, `present_publication_title`, `present_description`, `present_publication_url`, `present_video_url`, `present_expert_name`, `present_expert_email`, `present_expert_phone`, `present_expert_role`, `present_expert2_name`, `present_expert2_email`, `present_expert2_phone`, `present_expert2_role`, `future_research_field_interest`, `future_any_other`, `description_future`) VALUES
(1, 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'Organization', 'work', 'Music', 'ti', '<p>dsa</p>\r\n', 'dsa', 'ddsa', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'Zoology', 'das', '<p>das</p>\r\n', 'dsa', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'Music', 'Investigate the cliams and certify authenticity', '<p>asd</p>\r\n'),
(2, 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'Individual', 'Not Selected', 'Dance', 'ti', '<p>dsadsad</p>\r\n', 'dsa', 'ddsa', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'Drama', 'dsadas', '<p>dasd</p>\r\n', 'dsa', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'Arts', 'Investigate the cliams and certify authenticity', '<p>dasdas</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indian_system`
--
ALTER TABLE `indian_system`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indian_system`
--
ALTER TABLE `indian_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
