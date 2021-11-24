-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2021 at 01:15 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeins_michigan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `ses_id` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `ses_id`, `created_at`, `updated_at`) VALUES
(1, 'michigan', '$2y$10$z9H/QvZRoVapR3xe0HPHgOa4zruaebja3l8tauhLNpfqDMbAypmxG', 'davidk@homeinspectorsamerica.com', NULL, '2021-03-15 10:52:19', '2021-05-04 10:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usermessage` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `usermessage`, `created_at`, `updated_at`) VALUES
(15, 'testname', 'admin@admin.com', '9876543210', 'hello', 'test', '2021-03-22 10:10:08', '2021-03-22 11:02:33'),
(16, 'test', 'admin@admin.com', '9876543210', 'hello', 'test', '2021-05-04 21:26:00', '2021-05-04 21:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `cpages`
--

CREATE TABLE `cpages` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `areaname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cpages`
--

INSERT INTO `cpages` (`id`, `name`, `areaname`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(68, 'Johnny Wallace', 'Southwestern Michigan', 'Buchanan, MI', '269-883-0002', '2021-06-04 00:44:38', '2021-06-04 00:44:38'),
(69, 'Crystal Swift', 'Battle Creek Area', 'Battle Creek, MI', '69-578-3875', '2021-06-04 00:44:38', '2021-06-04 00:44:38'),
(70, 'Brandon Jacox', NULL, 'Battle Creek, MI', '69-578-3875', '2021-06-04 00:44:38', '2021-06-04 00:44:38'),
(71, 'James Kisstler', 'Ann Arbor', 'Ann Arbor, Ypsilanti', '734-328-4038', '2021-06-04 00:44:38', '2021-06-04 00:44:38'),
(72, 'Clement Ramos', 'Detroit Area', 'Sterling Heights, MI', '586-525-8040', '2021-06-04 00:44:38', '2021-06-04 00:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(250) NOT NULL,
  `section_title` varchar(250) NOT NULL,
  `data` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `section_title`, `data`, `created_at`, `updated_at`) VALUES
(7, 'home', 'bannerhead', 'inspections', '2021-03-16 03:29:19', '2021-04-22 01:05:20'),
(8, 'home', 'bannersub', '7 days a week - free consultations', '2021-03-16 03:29:19', '2021-04-22 01:05:20'),
(9, 'home', 'bannerlink', 'contact', '2021-03-16 03:29:19', '2021-04-22 01:05:20'),
(10, 'home', 'cheading', 'Our Professional Inspectors Are Available 7 Days A Week', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(11, 'home', 'clink', 'contact', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(12, 'home', 'serviceone', 'Buyers Inspection', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(13, 'home', 'sonecontent', 'In both new and older homes, the best way to ensure that you are well informed about the strengths and weaknesses of a property is to have a profession home inspection performed. Contact an inspector today.', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(14, 'home', 'servicetwo', 'Sellers Inspection', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(15, 'home', 'stwocontent', 'Whether you are selling your home on your own or using a Realtor, it’s always a wise idea to have a professional home inspection, so that you can prepare your house for sale and get top dollar for it.', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(16, 'home', 'servicethree', 'Additional Services', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(17, 'home', 'sthreecontent', 'In addition to our core inspections many of our inspectors are able to perform additional inspection services. Radon, Septic, Asbestos, Lead, Mold, and Termite to name a few.', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(18, 'home', 'homeabout', 'Home Inspectors of Michigan', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(19, 'home', 'homeaboutcontent', '<p>Home Inspectors of Michigan can help you buy or sell your home with confidence. As trained professionals our home inspectors have seen it all, and we&rsquo;ll provide invaluable help in turning you into a knowledgeable home owner. Home owners can identify problems early and take preventive measures to avoid costly repairs.sellers can understand conditions the buyer&rsquo;s inspector may point out and put the property in better selling condition by making repairs.</p>', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(20, 'home', 'gheading', 'Our Guarantee', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(21, 'home', 'gcontent', '<p>We guarantee the highest quality home inspections by sourcing only the best home inspectors in Michigan. Not only do we put you in touch with the most qualified individual for the job but we do it in unprecedented time frames &ndash; with potential for same-day service &ndash; to give you the most accurate and comprehensive estimate in the shortest time frame possible..<br />\r\n<br />\r\nSome benefits of choosing Home Inspectors of Michigan:</p>\r\n\r\n<ul>\r\n	<li>Obtain access to a electronic copy of your complete home inspection report.</li>\r\n	<li>Receive free consultations regarding any questions or concerns related to your home inspection for the duration of your mortgage.</li>\r\n	<li>Be guaranteed the best quality home inspection in the shortest time frame. Our checklists meet and exceeds the national standards.</li>\r\n</ul>', '2021-03-16 03:29:20', '2021-04-22 01:05:20'),
(22, 'home', 'feedbackone', 'These guys were the best! I was new to the area, and they educated my family on buying an older home and how to maintain it. He didn\'t just end his job after I paid him we continued to talk and actually helped me more than my Realtor did. You won\'t make a mistake with hiring him! I am never going to lose my inspectors number!', '2021-03-16 05:11:16', '2021-04-22 01:05:20'),
(23, 'home', 'authone', 'Dustin', '2021-03-16 05:11:16', '2021-04-22 01:05:20'),
(24, 'home', 'feedbacktwo', 'They responded on short notice, completing the inspection as well as the corresponding report on a very tight deadline. The report was complete and he provided a thoughtful tutorial on the issues that needed to be addressed and the approximate cost of the repairs. Highly recommended.', '2021-03-16 05:11:16', '2021-04-22 01:05:20'),
(25, 'home', 'authtwo', 'Louie', '2021-03-16 05:11:16', '2021-04-22 01:05:20'),
(26, 'home', 'banner_image', '17032021161600321190.webm', '2021-03-16 06:20:18', '2021-03-17 12:16:53'),
(27, 'home', 'service_image_one', '16032021161589752691.jpg', '2021-03-16 06:42:44', '2021-03-16 06:55:28'),
(28, 'home', 'service_image_two', '16032021161589752698.jpg', '2021-03-16 06:42:44', '2021-03-16 06:55:28'),
(29, 'home', 'service_image_three', '16032021161589752659.jpg', '2021-03-16 06:42:44', '2021-03-16 06:55:28'),
(30, 'home', 'home_about_image', '16032021161589752696.jpg', '2021-03-16 06:55:28', '2021-03-16 06:55:28'),
(31, 'home', 'g_section_image', '16032021161589752633.jpg', '2021-03-16 06:55:28', '2021-03-16 06:55:28'),
(32, 'home', 'testimonial1', '16032021161589752645.jpg', '2021-03-16 06:55:28', '2021-03-16 06:55:28'),
(33, 'home', 'testimonial2', '16032021161589752689.jpg', '2021-03-16 06:55:28', '2021-03-16 06:55:28'),
(34, 'service', 'bannerhead', 'SERVICES', '2021-03-16 07:15:49', '2021-04-21 17:09:45'),
(35, 'service', 'bannersub', 'contact', '2021-03-16 07:15:49', '2021-04-21 17:09:45'),
(36, 'service', 'buyer', 'Buyers Inspection', '2021-03-16 09:18:46', '2021-04-21 17:09:45'),
(37, 'service', 'buyercontent', '<p>In both new and older homes, the best way to ensure that you are well informed about the strengths and weaknesses of a property is to have a profession home inspection performed. We are trained to identify all problem areas both small and large that may have been unknown to the previous owners and to identify which require immediate attention. See the Inspection Overview for more details.</p>', '2021-03-16 09:18:46', '2021-04-21 17:09:45'),
(38, 'service', 'seller', 'Sellers Inspection', '2021-03-16 09:18:46', '2021-04-21 17:09:45'),
(39, 'service', 'sellercontent', '<p>Whether you are selling your home on your own or using a Realtor, it&rsquo;s always a wise idea to have a professional home inspection. Knowledge is power and all homes have strengths and weaknesses. We help you answer how serious the problems are and which must be immediately addressed and which can wait. The more you know about your home, the more prepared you will be for negotiation. See the Inspection Overview for more details.</p>', '2021-03-16 09:18:46', '2021-04-21 17:09:45'),
(40, 'service', 'construction', 'Construction Inspection', '2021-03-16 09:18:46', '2021-04-21 17:09:45'),
(41, 'service', 'conscontent', '<p>In a new home, the quality of construction can vary from job site to job site, therefore many buyers have independent reviews of their construction during various stages of the process, including slab, frame, and final inspection. This relatively inexpensive inspection protects your purchase, prevents unpleasant surprises, and ensures the quality home before a final purchase.</p>', '2021-03-16 09:18:47', '2021-04-21 17:09:45'),
(42, 'service', 'service_banner', '16032021161590760739.jpg', '2021-03-16 09:35:23', '2021-03-16 09:43:28'),
(43, 'service', 'buyer_image', '16032021161590760736.jpg', '2021-03-16 09:43:28', '2021-03-16 09:43:28'),
(44, 'service', 'seller_image', '16032021161590760797.jpg', '2021-03-16 09:43:28', '2021-03-16 09:43:28'),
(45, 'service', 'construction_image', '16032021161590760767.jpg', '2021-03-16 09:43:28', '2021-03-16 09:43:28'),
(46, 'inspection', 'ins_head', 'INSPECTIONS', '2021-03-16 10:13:27', '2021-03-16 10:27:45'),
(47, 'inspection', 'ins_link', 'contact', '2021-03-16 10:13:28', '2021-03-16 10:27:45'),
(48, 'inspection', 'inso_heading', 'Inspection Overview', '2021-03-16 10:13:28', '2021-03-16 10:27:45'),
(49, 'inspection', 'inso_content', 'A home cannot fail an inspection. A professional home inspection gives you an independent, unbiased view of any problems and possible solutions, so that you will have all the facts you need to make an informed decision.\r\n\r\nDepending on the size and condition of the home, a thorough home inspection will take usually between two and three hours. Ideally, you will accompany your inspector during the consultation, so that you will have visual reinforcement of your written report.\r\n\r\nWe take our inspection reports seriously. Every inspection is a complete and thorough analysis of all the major systems and components in the home. The report includes a clear description of what we’ve found with any problem areas noted, so you can easily identify them. Our inspectors also provide a free telephone consultation after your inspection.', '2021-03-16 10:13:28', '2021-03-16 10:27:45'),
(50, 'inspection', 'elec_heading', 'Electronic Reports', '2021-03-16 10:13:28', '2021-03-16 10:27:45'),
(51, 'inspection', 'elec_content', 'After we complete your home inspection, you can easily access your Inspection Report. All of our Inspection Reports will be issued to you in an electronic version. That way you can store it easily in your email account or on your personal computer.', '2021-03-16 10:13:28', '2021-03-16 10:27:45'),
(52, 'inspection', 'inspection_banner', '16032021161591026569.jpg', '2021-03-16 10:13:28', '2021-03-16 10:27:45'),
(53, 'inspection', 'inspection_oimage', '16032021161591026545.jpg', '2021-03-16 10:13:28', '2021-03-16 10:27:45'),
(54, 'inspection', 'elec_image', '16032021161591026521.jpg', '2021-03-16 10:13:28', '2021-03-16 10:27:45'),
(55, 'affiliation', 'affi_heading', 'AFFILIATIONS', '2021-03-16 11:05:00', '2021-03-26 00:56:52'),
(56, 'affiliation', 'affi_link', 'contact', '2021-03-16 11:05:00', '2021-03-26 00:56:52'),
(57, 'affiliation', 'affi_paragraph', '<p>We give preference to inspectors who are members of national home inspector associations. To find out more about these highly regarded, nationally recognized associations and their standards of practice please follow the links below.</p>', '2021-03-16 11:05:00', '2021-03-26 00:56:52'),
(58, 'affiliation', 'affi_ashi', 'American Society of Home Inspectors', '2021-03-16 11:05:00', '2021-03-26 00:56:52'),
(59, 'affiliation', 'affi_ASHI_content', '<p>The American Society of Home Inspectors (ASHI), founded in 1976, is North America&rsquo;s oldest and most respected professional society of home inspectors. ASHI&rsquo;s goals have always been to build customer awareness of the importance of a quality home inspection and enhance the professionalism of home inspectors.</p>', '2021-03-16 11:05:00', '2021-03-26 00:56:52'),
(60, 'affiliation', 'affi_nahi', 'National Association of Home Inspectors', '2021-03-16 11:05:01', '2021-03-26 00:56:52'),
(61, 'affiliation', 'affi_nahi_content', '<p>The National Association of Home Inspectors, Inc. (NAHI) was established in 1987 as a nonprofit association to promote and develop certified and licensed home inspectors in the professional home inspection industry.</p>', '2021-03-16 11:05:01', '2021-03-26 00:56:52'),
(62, 'affiliation', 'affi_inter', 'American Society of Home Inspectors', '2021-03-16 11:05:01', '2021-03-26 00:56:52'),
(63, 'affiliation', 'affi_inter_content', '<p>The International Association of Certified Home Inspectors (InterNACHI) is the world&rsquo;s most elite, non-profit inspection association. Our home buying clients enjoy the professionalism only InterNACHI Certified Inspectors can provide. Our inspectors have all successfully passed InterNACHI&rsquo;s Inspector Examination, taken a Standards of Practice Quiz, completed a Code of Ethics Course, adhere to Standards of Practice, abide by a Code of Ethics, attend required continuing education courses, and are InterNACHI Certified.</p>', '2021-03-16 11:05:01', '2021-03-26 00:56:52'),
(64, 'affiliation', 'affi_banner', '16032021161591458486.jpg', '2021-03-16 11:05:01', '2021-03-16 11:39:44'),
(65, 'affiliation', 'ashi_image', '16032021161591458421.jpg', '2021-03-16 11:05:01', '2021-03-16 11:39:45'),
(66, 'affiliation', 'nahi_image', '16032021161591458448.jpg', '2021-03-16 11:05:01', '2021-03-16 11:39:45'),
(67, 'affiliation', 'inter_image', '16032021161591458419.jpg', '2021-03-16 11:05:01', '2021-03-16 11:39:45'),
(68, 'about-page', 'bannerhead', 'About', '2021-03-16 13:44:20', '2021-04-21 17:08:41'),
(69, 'about-page', 'bannerlink', 'contact', '2021-03-16 13:44:21', '2021-04-21 17:08:41'),
(70, 'about-page', 'whyhead', 'Why Home Inspectors of Michigan?', '2021-03-16 13:44:21', '2021-04-21 17:08:41'),
(71, 'about-page', 'whycontent', '<p>It is critical to choose the right inspector for one of the most important emotional decisions and financial investments that you will ever make. When you work with Home Inspectors of Michigan you can rest assured that your home has received the attention that only a well regarded, professional home inspector brings to the home inspection process. Furthermore, you&rsquo;ll benefit from our constant evaluation of our inspectors which makes sure we our providing you with the best available inspectors. All home inspectors are not created equal, contact Home I nspectors of Michigan today.</p>', '2021-03-16 13:44:21', '2021-04-21 17:08:41'),
(72, 'about-page', 'help_heading', 'How We Help You', '2021-03-16 13:44:21', '2021-04-21 17:08:41'),
(73, 'about-page', 'help_content', '<p>Home Inspectors of Michigan can help you take control of your real estate transaction by:</p>\r\n\r\n<ul>\r\n	<li>Identifying potential problems</li>\r\n	<li>Surveying the home&rsquo;s condition</li>\r\n	<li>Considering possible repairs and upgrades</li>\r\n	<li>Taking measure of your investment decision</li>\r\n	<li>Assuring your confidence and peace of mind about your investment</li>\r\n	<li>Providing you with the cost information you need for any negotiations</li>\r\n</ul>', '2021-03-16 13:44:21', '2021-04-21 17:08:41'),
(74, 'about-page', 'about_banner', '16032021161592216541.jpg', '2021-03-16 13:44:21', '2021-03-16 13:46:05'),
(75, 'contact-page', 'bannerhead', 'Contact Us', '2021-03-16 23:18:23', '2021-11-25 01:54:37'),
(76, 'contact-page', 'bannerlink', 'contact', '2021-03-16 23:18:23', '2021-11-25 01:54:37'),
(77, 'contact-page', 'contact_head', 'Contact Us', '2021-03-16 23:18:23', '2021-11-25 01:54:37'),
(78, 'contact-page', 'contact_content', '<p>Area Representative: David Knudson</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Home Inspectors of Michigan Contact A Local Inspector 2851 S Parker Road Suite 988 Denver,</p>\r\n\r\n<p>CO 80014</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Telephone: +1 (888) 899-0411</p>\r\n\r\n<p>Fax: +1 (303) 684-8001</p>', '2021-03-16 23:18:23', '2021-11-25 01:54:37'),
(79, 'contact-page', 'contact_email', 'info@homeinspectorsamerica.com', '2021-03-16 23:18:23', '2021-11-25 01:54:37'),
(80, 'contact-page', 'local_head', 'Contact A Local Inspector', '2021-03-16 23:18:24', '2021-03-26 11:21:43'),
(81, 'contact-page', 'local_content', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Daytona Beach Area</h4></span>', '2021-03-16 23:18:24', '2021-03-26 11:21:43'),
(82, 'contact-page', 'contact_banner', '17032021161596100156.jpg', '2021-03-16 23:18:24', '2021-03-17 00:33:22'),
(83, 'contact-page', 'contact_img', '17032021161595773368.jpg', '2021-03-16 23:38:53', '2021-03-16 23:38:53'),
(84, 'widget', 'head_call', 'CALL US TODAY! (888) 899-0411', '2021-03-17 11:01:01', '2021-04-21 17:08:16'),
(85, 'widget', 'side_content', '<p>Call today to find out how Home Inspectors of Michigan can align you with the most qualified home inspector for your home assessment needs.</p>', '2021-03-17 11:01:01', '2021-04-21 17:08:16'),
(86, 'widget', 'side_content_head', 'CONTACT US', '2021-03-17 11:01:02', '2021-04-21 17:08:16'),
(87, 'widget', 'side_image', '17032021161599873248.jpg', '2021-03-17 11:01:02', '2021-03-17 18:11:15'),
(88, 'settings', 'header_phone', '(888) 899-0411', '2021-03-18 00:07:00', '2021-06-04 02:00:58'),
(89, 'settings', 'footer_copyright', '<p>Home Inspectors of Michigan &copy; 2015 &bull; Phone 888-899-0411 &bull; Fax 303-684-8001 &bull; Email: info@homeinspectorsofmichigan.com</p>', '2021-03-18 00:07:01', '2021-06-04 02:00:58'),
(90, 'settings', 'sitemap_url', '#', '2021-03-18 00:07:01', '2021-06-04 02:00:58'),
(91, 'settings', 'logo', '21042021161899967833.png', '2021-03-18 00:07:01', '2021-04-21 17:07:58'),
(102, 'contact-page', 'local_content_two', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Tampa Area</h4></span><p class = \"text-center pt-4\"><strong>Aleksander Natsev</strong><br/>St. Petersburg/Tampa Area<br/>727-331-5144</p>', '2021-03-18 05:17:02', '2021-03-26 11:21:43'),
(103, 'contact-page', 'local_content_three', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Ft. Myers/SW Florida</h4></span>', '2021-03-18 05:23:30', '2021-03-26 11:21:43'),
(104, 'contact-page', 'local_content_four', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Gainesville Area</h4></span>', '2021-03-18 05:43:32', '2021-03-26 11:21:43'),
(105, 'contact-page', 'local_content_five', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Heartland Florida Area</h4></span>', '2021-03-18 05:43:32', '2021-03-26 11:21:43'),
(106, 'contact-page', 'local_content_six', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Jacksonville Area</h4></span>', '2021-03-18 05:43:32', '2021-03-26 11:21:43'),
(107, 'contact-page', 'local_content_seven', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Lakeland Area</h4></span>\r\n<p class = \"text-center pt-4\"><strong></strong><br/> East Bay Home Inspections<br/>Apollo, Florida<br/>813-830-8361</p>', '2021-03-18 05:43:32', '2021-03-26 11:21:43'),
(108, 'contact-page', 'local_content_eight', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">North Central Florida</h4></span>', '2021-03-18 05:43:33', '2021-03-26 11:21:43'),
(109, 'contact-page', 'local_content_nine', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Ocala Area</h4></span>', '2021-03-18 05:43:33', '2021-03-26 11:21:43'),
(110, 'contact-page', 'local_content_ten', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Okaloosa/Walton Area</h4></span>\r\n<p class = \"text-center pt-4\"><strong></strong><br/>Kristy Cooper<br/>Milton, FL<br/>850-712-6798</p>', '2021-03-18 05:43:33', '2021-03-26 11:21:43'),
(111, 'contact-page', 'local_content_11', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Orlando Area</h4></span>\r\n<p class = \"text-center pt-4\"><strong></strong><br/>Christian Rios<br/>Tampa, FL<br/></p>', '2021-03-18 05:43:33', '2021-03-26 11:21:43'),
(112, 'contact-page', 'local_content_12', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Panama City Area</h4></span>', '2021-03-18 05:43:33', '2021-03-26 11:21:43'),
(113, 'contact-page', 'local_content_13', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Pensacola Area</h4></span>\r\n<p class = \"text-center pt-4\"><strong></strong><br/> Kristy Cooper<br/>Milton, FL<br/>850-712-6798</p>', '2021-03-18 05:43:33', '2021-03-26 11:21:43'),
(114, 'contact-page', 'local_content_14', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Sarasota/Bradenton Area</h4></span>\r\n<p class = \"text-center pt-4\"><strong></strong><br/> East Bay Home Inspections<br/>Apollo, Florida<br/>813-830-8361</p>', '2021-03-18 05:43:33', '2021-03-26 11:21:43'),
(115, 'contact-page', 'local_content_15', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">South (Miami Dade, Broward, Palm Beach Counties)</h4></span>', '2021-03-18 05:43:33', '2021-03-26 11:21:43'),
(116, 'contact-page', 'local_content_16', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Space Coast</h4></span>\r\n<p class = \"text-center pt-4\"><strong></strong><br/> Stephen Quinn<br/>Satellite Beach, FL<br/></p>', '2021-03-18 05:43:33', '2021-03-26 11:21:43'),
(117, 'contact-page', 'local_content_17', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">St. Augustine Area</h4></span>', '2021-03-18 05:43:33', '2021-03-26 11:21:43'),
(118, 'contact-page', 'local_content_18', '<span class = \"left-bar\"><h4 class = \"local-inspector-details\">Tallahassee Area</h4></span>', '2021-03-18 05:43:33', '2021-03-26 11:21:43'),
(119, 'settings', 'admin_email', 'davidk@homeinspectorsamerica.com', '2021-05-05 19:54:18', '2021-06-04 02:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpages`
--
ALTER TABLE `cpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cpages`
--
ALTER TABLE `cpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
