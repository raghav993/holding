-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2026 at 01:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_nile-flow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('super_admin','editor') DEFAULT 'editor',
  `status` tinyint(1) DEFAULT 1,
  `last_login` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `role`, `status`, `last_login`, `created_at`) VALUES
(1, 'Rajesh Sharma', 'rajesh.sharma@company.in', 'hashed_password_1', 'super_admin', 1, '2026-02-10 10:15:00', '2026-02-13 07:15:08'),
(2, 'Priya Verma', 'priya.verma@company.in', 'hashed_password_2', 'editor', 1, '2026-02-09 14:20:00', '2026-02-13 07:15:08'),
(3, 'Amit Patel', 'amit.patel@company.in', 'hashed_password_3', 'editor', 1, '2026-02-08 09:45:00', '2026-02-13 07:15:08'),
(4, 'Sneha Iyer', 'sneha.iyer@company.in', 'hashed_password_4', 'editor', 1, NULL, '2026-02-13 07:15:08'),
(5, 'Vikram Singh', 'vikram.singh@company.in', 'hashed_password_5', 'editor', 0, NULL, '2026-02-13 07:15:08'),
(6, 'Neha Kapoor', 'neha.kapoor@company.in', 'hashed_password_6', 'editor', 1, '2026-02-07 16:30:00', '2026-02-13 07:15:08'),
(7, 'Arjun Reddy', 'arjun.reddy@company.in', 'hashed_password_7', 'editor', 1, NULL, '2026-02-13 07:15:08'),
(8, 'Pooja Mehta', 'pooja.mehta@company.in', 'hashed_password_8', 'editor', 1, '2026-02-05 11:00:00', '2026-02-13 07:15:08'),
(9, 'Karan Malhotra', 'karan.malhotra@company.in', 'hashed_password_9', 'editor', 1, NULL, '2026-02-13 07:15:08'),
(10, 'Anjali Desai', 'anjali.desai@company.in', 'hashed_password_10', 'editor', 1, '2026-02-01 13:15:00', '2026-02-13 07:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `job_title` varchar(150) NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `employment_type` enum('Full-time','Part-time','Contract','Internship') DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `job_title`, `department`, `location`, `description`, `employment_type`, `status`, `created_at`) VALUES
(1, 'Senior Investment Analyst', 'Finance', 'Mumbai', 'Analyze investment opportunities.', 'Full-time', 1, '2026-02-13 07:15:09'),
(2, 'HR Manager', 'Human Resources', 'Delhi', 'Manage HR operations.', 'Full-time', 1, '2026-02-13 07:15:09'),
(3, 'Marketing Executive', 'Marketing', 'Bengaluru', 'Digital marketing campaigns.', 'Full-time', 1, '2026-02-13 07:15:09'),
(4, 'Site Engineer', 'Infrastructure', 'Pune', 'Manage project sites.', 'Full-time', 1, '2026-02-13 07:15:09'),
(5, 'Business Development Manager', 'Sales', 'Ahmedabad', 'Client acquisition role.', 'Full-time', 1, '2026-02-13 07:15:09'),
(6, 'Content Writer', 'Corporate Communications', 'Chennai', 'Write corporate content.', 'Contract', 1, '2026-02-13 07:15:09'),
(7, 'Data Analyst Intern', 'IT', 'Hyderabad', 'Assist data analytics team.', 'Internship', 1, '2026-02-13 07:15:09'),
(8, 'Operations Executive', 'Logistics', 'Kolkata', 'Oversee daily operations.', 'Full-time', 1, '2026-02-13 07:15:09'),
(9, 'Legal Advisor', 'Legal', 'Mumbai', 'Handle corporate legal matters.', 'Part-time', 1, '2026-02-13 07:15:09'),
(10, 'Accounts Executive', 'Finance', 'Jaipur', 'Manage accounting records.', 'Full-time', 1, '2026-02-13 07:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `category` enum('Investor Inquiries','Business Proposals','Media Relations','General') DEFAULT NULL,
  `message` text DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `category`, `message`, `ip_address`, `created_at`) VALUES
(1, 'Rohit Agarwal', 'rohit@gmail.com', 'Investor Inquiries', 'Interested in investment details.', '103.21.45.10', '2026-02-13 07:15:09'),
(2, 'Meena Joshi', 'meena@yahoo.in', 'Business Proposals', 'Proposal for joint venture.', '49.36.112.55', '2026-02-13 07:15:09'),
(3, 'Suresh Nair', 'suresh@outlook.com', 'Media Relations', 'Request for interview.', '122.160.88.12', '2026-02-13 07:15:09'),
(4, 'Kavita Shah', 'kavita@gmail.com', 'General', 'General information request.', '157.48.99.100', '2026-02-13 07:15:09'),
(5, 'Imran Khan', 'imran@yahoo.in', 'Investor Inquiries', 'Shareholding pattern details.', '45.120.11.5', '2026-02-13 07:15:09'),
(6, 'Deepika Rao', 'deepika@gmail.com', 'Media Relations', 'Press coverage request.', '103.55.22.90', '2026-02-13 07:15:09'),
(7, 'Manoj Tiwari', 'manoj@gmail.com', 'Business Proposals', 'New project collaboration.', '182.70.45.66', '2026-02-13 07:15:09'),
(8, 'Ritika Sen', 'ritika@gmail.com', 'General', 'Feedback on website.', '150.129.88.45', '2026-02-13 07:15:09'),
(9, 'Alok Mishra', 'alok@yahoo.in', 'Investor Inquiries', 'Annual report copy request.', '27.60.11.200', '2026-02-13 07:15:09'),
(10, 'Farhan Ali', 'farhan@gmail.com', 'General', 'Looking for office address.', '106.51.77.88', '2026-02-13 07:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `holdings`
--

CREATE TABLE `holdings` (
  `id` int(11) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `sector` varchar(100) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holdings`
--

INSERT INTO `holdings` (`id`, `company_name`, `sector`, `short_description`, `logo`, `website_url`, `status`, `created_at`) VALUES
(1, 'Shakti Renewable Energy Pvt Ltd', 'Energy', 'Solar and wind power solutions across India.', 'shakti.png', 'https://shaktirenewable.in', 1, '2026-02-13 07:15:08'),
(2, 'Bharat Agro Industries Ltd', 'Agriculture', 'Agri-tech and organic farming solutions.', 'bharatagro.png', 'https://bharatagro.in', 1, '2026-02-13 07:15:08'),
(3, 'Triveni Healthcare Pvt Ltd', 'Healthcare', 'Multi-specialty hospital chain.', 'triveni.png', 'https://trivenihealth.in', 1, '2026-02-13 07:15:08'),
(4, 'Ganga Infrastructure Ltd', 'Infrastructure', 'Highway and metro infrastructure projects.', 'ganga.png', 'https://gangainfra.in', 1, '2026-02-13 07:15:08'),
(5, 'Vedant Finserv Pvt Ltd', 'Financial Services', 'NBFC providing MSME loans.', 'vedant.png', 'https://vedantfinserv.in', 1, '2026-02-13 07:15:08'),
(6, 'Suryodaya Textiles Ltd', 'Textile', 'Export quality textile manufacturing.', 'suryodaya.png', 'https://suryodayatextiles.in', 1, '2026-02-13 07:15:08'),
(7, 'Indus Edutech Pvt Ltd', 'Education', 'Digital learning platforms for schools.', 'indus.png', 'https://indusedutech.in', 1, '2026-02-13 07:15:08'),
(8, 'Pratham Logistics Ltd', 'Logistics', 'Pan-India logistics and warehousing.', 'pratham.png', 'https://prathamlogistics.in', 1, '2026-02-13 07:15:08'),
(9, 'Narmada Foods Pvt Ltd', 'FMCG', 'Packaged food and dairy products.', 'narmada.png', 'https://narmadafoods.in', 1, '2026-02-13 07:15:08'),
(10, 'Udaan Mobility Solutions', 'Automobile', 'Electric vehicle manufacturing startup.', 'udaan.png', 'https://udaanmobility.in', 1, '2026-02-13 07:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `metrics`
--

CREATE TABLE `metrics` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `value` varchar(50) NOT NULL,
  `display_order` int(11) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metrics`
--

INSERT INTO `metrics` (`id`, `title`, `value`, `display_order`, `status`, `created_at`) VALUES
(1, 'Assets Under Management', '₹5,200 Cr+', 1, 1, '2026-02-13 07:15:08'),
(2, 'Portfolio Companies', '28+', 2, 1, '2026-02-13 07:15:08'),
(3, 'Years of Experience', '15+', 3, 1, '2026-02-13 07:15:08'),
(4, 'Employees', '450+', 4, 1, '2026-02-13 07:15:08'),
(5, 'Global Partners', '12+', 5, 1, '2026-02-13 07:15:08'),
(6, 'Successful Exits', '18+', 6, 1, '2026-02-13 07:15:08'),
(7, 'Annual Revenue', '₹1,100 Cr+', 7, 1, '2026-02-13 07:15:08'),
(8, 'Offices in India', '6', 8, 1, '2026-02-13 07:15:08'),
(9, 'CSR Projects', '22+', 9, 1, '2026-02-13 07:15:08'),
(10, 'Awards Won', '14+', 10, 1, '2026-02-13 07:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` enum('News','Insight','Report','Letter') NOT NULL,
  `short_description` text DEFAULT NULL,
  `full_content` longtext DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `featured` tinyint(1) DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `category`, `short_description`, `full_content`, `publish_date`, `featured`, `image`, `status`, `created_at`) VALUES
(1, 'Shakti Renewable Secures ₹500 Cr Funding', 'News', 'Major investment announced.', 'Full article content here...', '2026-01-15', 1, 'news1.jpg', 1, '2026-02-13 07:15:09'),
(2, 'Quarterly Growth Report Q3 FY26', 'Report', 'Strong financial performance recorded.', 'Detailed quarterly report...', '2026-01-10', 0, 'news2.jpg', 1, '2026-02-13 07:15:09'),
(3, 'Chairman’s Annual Letter to Investors', 'Letter', 'Vision for upcoming year.', 'Full chairman letter content...', '2026-01-05', 1, 'news3.jpg', 1, '2026-02-13 07:15:09'),
(4, 'Healthcare Expansion in Tier-2 Cities', 'Insight', 'New hospitals launched.', 'Insight content...', '2026-01-01', 0, 'news4.jpg', 1, '2026-02-13 07:15:09'),
(5, 'Indus Edutech Launches AI Platform', 'News', 'AI-powered learning solution.', 'Full article...', '2025-12-20', 0, 'news5.jpg', 1, '2026-02-13 07:15:09'),
(6, 'Infrastructure Projects Update 2025', 'Report', 'Project milestone update.', 'Full report...', '2025-12-15', 0, 'news6.jpg', 1, '2026-02-13 07:15:09'),
(7, 'CEO Interview with Business Today', 'Insight', 'Leadership insights shared.', 'Interview content...', '2025-12-10', 0, 'news7.jpg', 1, '2026-02-13 07:15:09'),
(8, 'CSR Initiative in Rural Maharashtra', 'News', 'Community upliftment program.', 'CSR details...', '2025-12-05', 0, 'news8.jpg', 1, '2026-02-13 07:15:09'),
(9, 'EV Manufacturing Plant Announcement', 'News', 'New EV facility in गुजरात.', 'Plant details...', '2025-12-01', 1, 'news9.jpg', 1, '2026-02-13 07:15:09'),
(10, 'FY25 Annual Performance Summary', 'Report', 'Year-end highlights.', 'Annual summary...', '2025-11-30', 0, 'news10.jpg', 1, '2026-02-13 07:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_key` varchar(100) DEFAULT NULL,
  `page_title` varchar(150) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `meta_title` varchar(150) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_key`, `page_title`, `content`, `meta_title`, `meta_description`, `updated_at`) VALUES
(1, 'about-us', 'About Us', 'About company content...', 'About Us - Company', 'Learn about our company.', '2026-02-13 07:15:09'),
(2, 'vision-mission', 'Vision & Mission', 'Vision and mission details...', 'Vision & Mission', 'Our core values and mission.', '2026-02-13 07:15:09'),
(3, 'leadership', 'Leadership Team', 'Leadership profiles...', 'Leadership Team', 'Meet our leadership.', '2026-02-13 07:15:09'),
(4, 'csr', 'CSR Activities', 'CSR initiatives...', 'CSR - Company', 'Corporate social responsibility initiatives.', '2026-02-13 07:15:09'),
(5, 'investors', 'Investor Relations', 'Investor information...', 'Investor Relations', 'Investor resources and reports.', '2026-02-13 07:15:09'),
(6, 'privacy-policy', 'Privacy Policy', 'Privacy policy content...', 'Privacy Policy', 'Read our privacy policy.', '2026-02-13 07:15:09'),
(7, 'terms-conditions', 'Terms & Conditions', 'Terms content...', 'Terms & Conditions', 'Website terms and conditions.', '2026-02-13 07:15:09'),
(8, 'careers', 'Careers', 'Join our team...', 'Careers - Company', 'Explore job opportunities.', '2026-02-13 07:15:09'),
(9, 'contact-us', 'Contact Us', 'Contact information...', 'Contact Us', 'Get in touch with us.', '2026-02-13 07:15:09'),
(10, 'media', 'Media & Press', 'Press releases...', 'Media & Press', 'Latest media updates.', '2026-02-13 07:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `subscribed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `status`, `subscribed_at`) VALUES
(1, 'anita@gmail.com', 1, '2026-02-13 07:15:09'),
(2, 'rahul@yahoo.in', 1, '2026-02-13 07:15:09'),
(3, 'vikas@gmail.com', 1, '2026-02-13 07:15:09'),
(4, 'pooja@yahoo.in', 1, '2026-02-13 07:15:09'),
(5, 'manish@gmail.com', 1, '2026-02-13 07:15:09'),
(6, 'sonal@yahoo.in', 1, '2026-02-13 07:15:09'),
(7, 'tarun@gmail.com', 1, '2026-02-13 07:15:09'),
(8, 'neetu@yahoo.in', 1, '2026-02-13 07:15:09'),
(9, 'ajay@gmail.com', 1, '2026-02-13 07:15:09'),
(10, 'bhavna@yahoo.in', 1, '2026-02-13 07:15:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holdings`
--
ALTER TABLE `holdings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metrics`
--
ALTER TABLE `metrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_key` (`page_key`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `holdings`
--
ALTER TABLE `holdings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `metrics`
--
ALTER TABLE `metrics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
