-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2023 at 12:48 PM
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
-- Database: `eirl`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_name` varchar(50) DEFAULT NULL,
  `blog_image` varchar(20) DEFAULT NULL,
  `blog_description` text,
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_name`, `blog_image`, `blog_description`, `created_on`) VALUES
(3, 'Party People', 'New1699527594439.png', 'Are you ready to paint the town red and dance the night away? Look no further than Party People, your ultimate destination for all things fun and fabulous! At Party People, we\'re the heartbeat of the city\'s nightlife, connecting vibrant and adventurous souls with the most exciting parties and events in town. Whether you\'re a seasoned partygoer or someone looking to spice up your social calendar, we\'ve got you covered. Our platform is the go-to hub for the hip and young crowd, bringing together a community of like-minded individuals who share a passion for music, dancing, and unforgettable experiences. With our user-friendly app, you can effortlessly discover the latest happenings, from trendy clubs and music festivals to exclusive rooftop', '2023-11-09 16:29:54'),
(4, 'Autofind', 'New1699527624120.png', 'MCG Autofind is your one-stop destination for all your automotive needs. Whether you\'re in search of expert consultations for your vehicle or looking to explore a wide range of automotive products and services, MCG Autofind has you covered. This platform seamlessly combines automobile consultation booking with an extensive e-commerce marketplace, making it easier than ever to take care of your automotive needs. Looking to schedule a consultation with a trusted mechanic or automotive expert? MCG Autofind provides a user-friendly booking system that connects you with experienced professionals who can answer your questions, diagnose issues, and provide guidance on vehicle maintenance and repairs.', '2023-11-09 16:30:24'),
(5, 'Taskhive', 'New1699527650612.png', 'Taskhive is a forward-thinking and adaptable company that excels in offering a comprehensive range of services in three crucial domains: Human Resources (HR), Business Process Outsourcing (BPO), and Web Development. Our core mission revolves around assisting businesses of all sizes and industries in achieving their goals and reaching their full potential. In the realm of HR, Taskhive takes pride in being your strategic partner in talent acquisition and management. We possess the expertise to source, assess, and onboard top-tier talent, ensuring that your organization is staffed with the right individuals to drive growth and innovation. Our HR consulting services go beyond recruitment, focusing on creating a thriving workplace', '2023-11-09 16:30:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
