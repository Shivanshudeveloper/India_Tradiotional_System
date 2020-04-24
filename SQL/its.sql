-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 08:54 AM
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
-- Database: `its`
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
  `description_future` text NOT NULL,
  `past_sub` text NOT NULL,
  `present_sub` text NOT NULL,
  `future_sub` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indian_system`
--

INSERT INTO `indian_system` (`id`, `name`, `email`, `phone`, `worked_as`, `work_location`, `past_research_field_interest`, `past_publication_title`, `past_description`, `past_publication_url`, `past_video_url`, `past_expert_name`, `past_expert_email`, `past_expert_phone`, `past_expert_role`, `past_expert2_name`, `past_expert2_email`, `past_expert2_phone`, `past_expert2_role`, `present_research_field_interest`, `present_publication_title`, `present_description`, `present_publication_url`, `present_video_url`, `present_expert_name`, `present_expert_email`, `present_expert_phone`, `present_expert_role`, `present_expert2_name`, `present_expert2_email`, `present_expert2_phone`, `present_expert2_role`, `future_research_field_interest`, `future_any_other`, `description_future`, `past_sub`, `present_sub`, `future_sub`) VALUES
(1, 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'Organization', 'work', 'Music', 'ti', '<p>dsa</p>\r\n', 'dsa', 'ddsa', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'Zoology', 'das', '<p>das</p>\r\n', 'dsa', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'Music', 'Investigate the cliams and certify authenticity', '<p>asd</p>\r\n', '', '', ''),
(2, 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'Individual', 'Not Selected', 'Dance', 'ti', '<p>dsadsad</p>\r\n', 'dsa', 'ddsa', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'Drama', 'dsadas', '<p>dasd</p>\r\n', 'dsa', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'Arts', 'Investigate the cliams and certify authenticity', '<p>dasdas</p>\r\n', '', '', ''),
(3, 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'Organization', 'New Delhi', 'Health, Wellness', 'dsa', '<p>das</p>\r\n', 'dsa', 'ddsa', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'dasdsa', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'Health, Wellness', 'dasd', '<p>dasd</p>\r\n', 'dsa', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'das', 'baljeet singh', 'bssinwar@icloud.com', '08764107035', 'dasda', 'Health, Wellness', 'Investigate the cliams and certify authenticity', '<p>dasdsad</p>\r\n', 'Anatomy, Physiology', 'Medicine', 'Child care, Geriatry');

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `worked_as` text NOT NULL,
  `work_location` text NOT NULL,
  `expert` text NOT NULL,
  `problem1` text NOT NULL,
  `problem2` text NOT NULL,
  `problem3` text NOT NULL,
  `problem4` text NOT NULL,
  `problem5` text NOT NULL,
  `problem6` text NOT NULL,
  `problem7` text NOT NULL,
  `problem8` text NOT NULL,
  `problem9` text NOT NULL,
  `problem10` text NOT NULL,
  `problem11` text NOT NULL,
  `problem12` text NOT NULL,
  `problem13` text NOT NULL,
  `problem14` text NOT NULL,
  `problem15` text NOT NULL,
  `problem16` text NOT NULL,
  `problem17` text NOT NULL,
  `problem18` text NOT NULL,
  `problem19` text NOT NULL,
  `problem20` text NOT NULL,
  `expert_sub` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `name`, `email`, `phone`, `worked_as`, `work_location`, `expert`, `problem1`, `problem2`, `problem3`, `problem4`, `problem5`, `problem6`, `problem7`, `problem8`, `problem9`, `problem10`, `problem11`, `problem12`, `problem13`, `problem14`, `problem15`, `problem16`, `problem17`, `problem18`, `problem19`, `problem20`, `expert_sub`) VALUES
(2, 0, 0, 2147483647, '', '', 'baljeet singh', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', ''),
(3, 0, 0, 2147483647, '', '', 'Psychology, Cognition, linguistics, Phoenetics,  Epistomology', '<p>dsa</p>\r\n', '<p>das</p>\r\n', '<p>das</p>\r\n', '<p>das</p>\r\n', '<p>dsa</p>\r\n', '<p>asdas</p>\r\n', '<p>dsada</p>\r\n', '<p>das</p>\r\n', '<p>ads</p>\r\n', '<p>das</p>\r\n', '<p>das</p>\r\n', '<p>das</p>\r\n', '<p>dsa</p>\r\n', '<p>ads</p>\r\n', '<p>sad</p>\r\n', '<p>das</p>\r\n', '<p>ad</p>\r\n', '<p>das</p>\r\n', '<p>asd</p>\r\n', '<p>das</p>\r\n', 'Cognition'),
(4, 0, 0, 2147483647, '', '', 'Psychology, Cognition, linguistics, Phoenetics,  Epistomology', '<p>dsad</p>\r\n', '<p>hkljh</p>\r\n', '<p>kjhkjh</p>\r\n', '<p>kjh</p>\r\n', '<p>kjh</p>\r\n', '<p>kjh</p>\r\n', '<p>kjh</p>\r\n', '<p>kjh</p>\r\n', '<p>kjh</p>\r\n', '<p>kjh</p>\r\n', '<p>kjhk</p>\r\n', '<p>hkj</p>\r\n', '<p>hkj</p>\r\n', '<p>hkjh</p>\r\n', '<p>h</p>\r\n', '<p>kjh</p>\r\n', '<p>kj</p>\r\n', '<p>hkj</p>\r\n', '<p>hkjh</p>\r\n', '<p>dsadsa</p>\r\n', 'Cognition'),
(5, 0, 0, 2147483647, 'Organization', 'New Delhi', 'Management, Administration, Law, Governance', '<p>dsadsa</p>\r\n', '<p>kj</p>\r\n', '<p>jlkj</p>\r\n', '<p>lkj</p>\r\n', '<p>lkjl</p>\r\n', '<p>kjl</p>\r\n', '<p>kjl</p>\r\n', '<p>jl</p>\r\n', '<p>kjlk</p>\r\n', '<p>jlk</p>\r\n', '<p>jlk</p>\r\n', '<p>jl</p>\r\n', '<p>jl</p>\r\n', '<p>kjl</p>\r\n', '<p>kjl</p>\r\n', '<p>kjl</p>\r\n', '<p>kjl</p>\r\n', '<p>jlk</p>\r\n', '<p>jlk</p>\r\n', '<p>jldas</p>\r\n', 'Law, Jurispudence');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indian_system`
--
ALTER TABLE `indian_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indian_system`
--
ALTER TABLE `indian_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
