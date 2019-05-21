-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 02:43 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_salary` varchar(255) NOT NULL,
  `job_description` varchar(1000) NOT NULL,
  `job_qualification` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_title`, `user_id`, `job_salary`, `job_description`, `job_qualification`) VALUES
(1, 'UI/UX Specialist', 1, '30,000.00 - 40,000.00', 'UI-UX Designer job description should contain the following duties and responsibilities:\r\n\r\nplan and implement new designs \r\nOptimize existing user interface designs\r\nTest for intuitivity and experience\r\nCommunicate with clients to understand their business goals and objectives\r\nDevelop technical and business requirements and always strive to deliver intuitive and user-centered solutions\r\nCombine creativity with an awareness of the design elements\r\nCreate prototypes for new product ideas\r\nTest new ideas before implementing \r\nConduct an ongoing user research', 'UI-UX Designer job description should contain the following requirements and qualifications:\r\n\r\n X years of experience as an UI-UX Designer or similar role\r\n UI design portfolio\r\n Bachelorâ€™s degree in relevant field\r\nExcellent interpersonal and communication skills\r\nAbility to discuss and explain design options\r\nDetail oriented\r\nCritical thinker\r\nProblem solver and customer-centered\r\nKnowledge of Adobe range of products including Photoshop, Illustrator, InDesign, Acrobat and Dreamweaver\r\nX years of experience with HTML5 & CSS3\r\nSome knowledge of Usability Factors in Human Computer Interaction.'),
(2, 'PHP', 1, '30,000.00 - 40,000.00', 'UI-UX Designer job description should contain the following duties and responsibilities:\r\n\r\nplan and implement new designs \r\nOptimize existing user interface designs\r\nTest for intuitivity and experience\r\nCommunicate with clients to understand their business goals and objectives\r\nDevelop technical and business requirements and always strive to deliver intuitive and user-centered solutions\r\nCombine creativity with an awareness of the design elements\r\nCreate prototypes for new product ideas\r\nTest new ideas before implementing \r\nConduct an ongoing user research', 'UI-UX Designer job description should contain the following requirements and qualifications:\r\n\r\n X years of experience as an UI-UX Designer or similar role\r\n UI design portfolio\r\n Bachelorâ€™s degree in relevant field\r\nExcellent interpersonal and communication skills\r\nAbility to discuss and explain design options\r\nDetail oriented\r\nCritical thinker\r\nProblem solver and customer-centered\r\nKnowledge of Adobe range of products including Photoshop, Illustrator, InDesign, Acrobat and Dreamweaver\r\nX years of experience with HTML5 & CSS3\r\nSome knowledge of Usability Factors in Human Computer Interaction.'),
(3, 'Web Developer', 1, '30,000.00 - 40,000.00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'PHP Expert', 2, '10,000.00 - 20,000.00', 'PHP Expert Descriptions. PHP Expert Descriptions. PHP Expert Descriptions. PHP Expert Descriptions. PHP Expert Descriptions. PHP Expert Descriptions. \r\n\r\nPHP Expert Descriptions. PHP Expert Descriptions. PHP Expert Descriptions. ', 'Job Qualification! Job Qualification! Job Qualification! Job Qualification! Job Qualification! Job Qualification! Job Qualification! Job Qualification! Job Qualification! \r\n\r\nJob Qualification! Job Qualification! Job Qualification! Job Qualification! '),
(5, 'UI/UX Specialist', 2, '30,000.00 - 40,000.00', 'UI-UX Designer job description should contain the following duties and responsibilities:\r\n\r\nplan and implement new designs \r\nOptimize existing user interface designs\r\nTest for intuitivity and experience\r\nCommunicate with clients to understand their business goals and objectives\r\nDevelop technical and business requirements and always strive to deliver intuitive and user-centered solutions\r\nCombine creativity with an awareness of the design elements\r\nCreate prototypes for new product ideas\r\nTest new ideas before implementing \r\nConduct an ongoing user research', 'UI-UX Designer job description should contain the following requirements and qualifications:\r\n\r\n X years of experience as an UI-UX Designer or similar role\r\n UI design portfolio\r\n Bachelorâ€™s degree in relevant field\r\nExcellent interpersonal and communication skills\r\nAbility to discuss and explain design options\r\nDetail oriented\r\nCritical thinker\r\nProblem solver and customer-centered\r\nKnowledge of Adobe range of products including Photoshop, Illustrator, InDesign, Acrobat and Dreamweaver\r\nX years of experience with HTML5 & CSS3\r\nSome knowledge of Usability Factors in Human Computer Interaction.'),
(6, 'UI/UX Specialist', 2, '30,000.00 - 40,000.00', 'UI-UX Designer job description should contain the following duties and responsibilities:\r\n\r\nplan and implement new designs \r\nOptimize existing user interface designs\r\nTest for intuitivity and experience\r\nCommunicate with clients to understand their business goals and objectives\r\nDevelop technical and business requirements and always strive to deliver intuitive and user-centered solutions\r\nCombine creativity with an awareness of the design elements\r\nCreate prototypes for new product ideas\r\nTest new ideas before implementing \r\nConduct an ongoing user research', 'UI-UX Designer job description should contain the following requirements and qualifications:\r\n\r\n X years of experience as an UI-UX Designer or similar role\r\n UI design portfolio\r\n Bachelorâ€™s degree in relevant field\r\nExcellent interpersonal and communication skills\r\nAbility to discuss and explain design options\r\nDetail oriented\r\nCritical thinker\r\nProblem solver and customer-centered\r\nKnowledge of Adobe range of products including Photoshop, Illustrator, InDesign, Acrobat and Dreamweaver\r\nX years of experience with HTML5 & CSS3\r\nSome knowledge of Usability Factors in Human Computer Interaction.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_role` varchar(25) NOT NULL,
  `user_company` varchar(255) NOT NULL,
  `user_loc` varchar(255) NOT NULL,
  `user_lastName` varchar(255) NOT NULL,
  `user_firstName` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_contact` varchar(13) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_role`, `user_company`, `user_loc`, `user_lastName`, `user_firstName`, `user_gender`, `user_email`, `user_contact`, `user_password`) VALUES
(1, 'Employer', 'Dunder-Mifflin Inc.', 'NCR (National Capital Region)', 'test', 'test', 'Male', 'test@test.com', '09394543232', '$2y$10$Pl.OHUANfFTj3D/StaMlRO5aSVA1neHIhTtgT5PMSaRzV/l95e2bi'),
(2, 'Employer', 'KAL Skills Akademie', 'NCR (National Capital Region)', 'Khal-el', 'Bangcola', 'Male', 'khalelogram@kal.com', '09231452637', '$2y$10$cZMJ/IxrVlyN0MY8cj9b8Ov6fSa/zTcVUhZiZJ2wUX3G8npQt7Lwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
