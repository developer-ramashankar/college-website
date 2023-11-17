-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 03:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snsy_inter_college`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_blog`
--

CREATE TABLE `add_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `writer` varchar(200) NOT NULL,
  `detail` varchar(10000) NOT NULL,
  `date` varchar(200) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_blog`
--

INSERT INTO `add_blog` (`id`, `title`, `writer`, `detail`, `date`, `photo`) VALUES
(31, '10th result\r\n', 'SNSY Inter College', 'As the publishing world has evolved, and more of it has moved online, blogs have come to occupy a central position in this digital content world. Blogs are a source of knowledge, opinion and concrete advice. While not yet posed to replace journalism as an art form, people increasingly look to trusted blogs to find answers to their questions, or to learn how to do something. \r\n\r\n\r\nBlogs are always evolving both in terms of how they\'re created and what they are used for. They can be a vehicle for creativity and for marketing. They\'re also increasingly created and read on mobile apps, as mobile blogging also comes into its own. ', '2023-08-09', 'content/blogs/download (6)1691551639apexza.jpeg'),
(33, 'Faculty of Science', 'SNSY Inter College', 'Faculty of Science is the scientific training ground for all graduate students at University. The Faculty of Science is also dedicated to the pursuit of high quality research, fostering economic development through cooperative research and technology transfer with the private sector. The Faculty of Science encompasses five academic departments.The Facultys ambitions are visible in both its teaching and research. The Faculty offers a challenging study environment in which research and education are closely intertwined. The Faculty of Humanities encompasses eight academic departments', '10-08-23', 'content/blogs/images1691676429apexza.png'),
(36, 'SNSY Inter College Cricket Tropy', 'SNSY Inter College', 'A blog consists of a series of articles or posts. While the appearance of your blog can vary depending on the platform and design choices made by you as the blogger, here are some common elements you may find in a typical blog and include in your own, keeping in mind the importanc\r\n\r\n', '2023-08-10', 'content/blogs/62132600_485504945540843_4174270618969047040_n1691649676apexza.jpg'),
(38, '12th result', 'SNSY Inter College', 'As the publishing world has evolved, and more of it has moved online, blogs have come to occupy a central position in this digital content world. Blogs are a source of knowledge, opinion and concrete advice. While not yet posed to replace journalism as an art form, people increasingly look to trusted blogs to find answers to their questions, or to learn how to do something. \r\n\r\n\r\nBlogs are always evolving both in terms of how they\'re created and what they are used for. They can be a vehicle for creativity and for marketing. They\'re also increasingly created and read on mobile apps, as mobile blogging also comes into its own. ', '2023-08-09', 'content/blogs/download (6)1691551639apexza.jpeg'),
(39, '10th result\r\n', 'SNSY Inter College', 'As the publishing world has evolved, and more of it has moved online, blogs have come to occupy a central position in this digital content world. Blogs are a source of knowledge, opinion and concrete advice. While not yet posed to replace journalism as an art form, people increasingly look to trusted blogs to find answers to their questions, or to learn how to do something. \r\n\r\n\r\nBlogs are always evolving both in terms of how they\'re created and what they are used for. They can be a vehicle for creativity and for marketing. They\'re also increasingly created and read on mobile apps, as mobile blogging also comes into its own. ', '2023-08-09', 'content/blogs/download (6)1691551639apexza.jpeg'),
(40, 'What does a blog look like', 'SNSY Inter College', 'A blog consists of a series of articles or posts. While the appearance of your blog can vary depending on the platform and design choices made by you as the blogger, here are some common elements you may find in a typical blog and include in your own, keeping in mind the importanc\r\n\r\n', '2023-08-10', 'content/blogs/62132600_485504945540843_4174270618969047040_n1691649676apexza.jpg'),
(41, 'Faculty of Science', 'SNSY Inter College', 'Faculty of Science is the scientific training ground for all graduate students at University. The Faculty of Science is also dedicated to the pursuit of high quality research, fostering economic development through cooperative research and technology transfer with the private sector. The Faculty of Science encompasses five academic departments.The Facultys ambitions are visible in both its teaching and research. The Faculty offers a challenging study environment in which research and education are closely intertwined. The Faculty of Humanities encompasses eight academic departments', '10-08-23', 'content/blogs/images1691676429apexza.png'),
(45, 'Faculty of Science', 'SNSY Inter College', 'Faculty of Science is the scientific training ground for all graduate students at University. The Faculty of Science is also dedicated to the pursuit of high quality research, fostering economic development through cooperative research and technology transfer with the private sector. The Faculty of Science encompasses five academic departments.The Facultys ambitions are visible in both its teaching and research. The Faculty offers a challenging study environment in which research and education are closely intertwined. The Faculty of Humanities encompasses eight academic departments', '10-08-23', 'content/blogs/images1691676429apexza.png'),
(47, 'Check-ins from Summer and Semester Internships', 'SNSY Inter College', 'We all know going to college is about more than going to class. Talk to your career services office to get a few recommendations on students with interesting internship placements, and then ask them to write about those periodically throughout the summer or after the internships finish and they’ve had a chance to reflect. This could also be a chance to build relationships with those companies that provide internships to start a pipeline between your college and companies from all industries.\r\nPrinceton University has perfected this idea. Work-study jobs are a necessary part of campus life for many students. I love the concept of taking something that isn’t traditionally a selling point and making it one. Well done, Princeton.', '15-08-23', 'content/blogs/Medlibrary1692116805apexza.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_teacher`
--

CREATE TABLE `add_teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `post` varchar(200) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_teacher`
--

INSERT INTO `add_teacher` (`id`, `name`, `post`, `photo`) VALUES
(2, 'Kumar Ramashankar', 'Computer Fundamental', 'content/teacher/Ukraine1691228655apexza.jpg'),
(4, 'Amit Mehta ', 'Maths Professer', 'content/teacher/photo-1633332755192-727a05c4013d1691229311apexza.jpg'),
(5, 'Uttam Kumar Ghose', 'BCA Sem', 'content/teacher/photo-1535713875002-d1d0cf377fde1691229483apexza.jpg'),
(6, 'Rohit Jha ', 'Hindi Hons', 'content/teacher/kartik_aaryan-omg1691229502apexza.jpg'),
(7, 'Sohan Raj', 'Physic Hons', 'content/teacher/pexels-lukas-rodriguez-36802191691229629apexza.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `college_details`
--

CREATE TABLE `college_details` (
  `id` int(11) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_details`
--

INSERT INTO `college_details` (`id`, `mobile`, `address`, `email`) VALUES
(1, '+918409096810', 'SNSY Inter College, Rambagh, Purnia, Bihar 854301', 'support@snsyintercollege.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `date` varchar(200) NOT NULL,
  `datetime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `mobile`, `msg`, `date`, `datetime`) VALUES
(1, 'dzfs', 'sakshi@gmil.com', '546531', 'aadsmKFD', '23-08-06', '1691325486'),
(2, 'dzfs', 'sakshi@gmil.com', '546531', 'aadsmKFD', '23-08-06', '1691325686'),
(5, 'Rohit', 'rohit@gmail.com', '648453468', 'I have  a problem in site\r\n', '06-08-23', '1691325779'),
(6, 'Rohit', 'rohit@gmail.com', '648453468', 'I have  a problem in site\r\n', '06-08-23', '1691325812'),
(7, 'Rohit', 'rohit@gmail.com', '648453468', 'I have  a problem in site\r\n', '06-08-23', '1691325956');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`) VALUES
(2, 'content/gallery/63542071_485504385540899_3612364669018177536_n1691227258apexza.jpg'),
(3, 'content/gallery/62132600_485504945540843_4174270618969047040_n1691227262apexza.jpg'),
(4, 'content/gallery/74880653_593585354732801_4402437659897626624_n1691227265apexza.jpg'),
(5, 'content/gallery/306135707_434364448789724_1944329870042643131_n1691227268apexza.jpg'),
(6, 'content/gallery/302694210_434364445456391_6801507662502473435_n1691227271apexza.jpg'),
(7, 'content/gallery/download (7)1691227275apexza.jpeg'),
(9, 'content/gallery/wallpaperflare.com_wallpaper (7)1691227793apexza.jpg'),
(10, 'content/gallery/s21691513852apexza.jpg'),
(11, 'content/gallery/63542071_485504385540899_3612364669018177536_n1691513857apexza.jpg'),
(12, 'content/gallery/wallpaperflare.com_wallpaper (8)1691513861apexza.jpg'),
(13, 'content/gallery/302694210_434364445456391_6801507662502473435_n1691513868apexza.jpg'),
(14, 'content/gallery/62132600_485504945540843_4174270618969047040_n1691513873apexza.jpg'),
(15, 'content/gallery/Ukraine1691513893apexza.jpg'),
(16, 'content/gallery/school-social-media-post-template-design-9d0c888c26b6e16460625280512357c6_screen1691513907apexza.jpg'),
(17, 'content/gallery/download1691513917apexza.jpeg'),
(18, 'content/gallery/63542071_485504385540899_3612364669018177536_n1691227258apexza.jpg'),
(19, 'content/gallery/62132600_485504945540843_4174270618969047040_n1691227262apexza.jpg'),
(20, 'content/gallery/74880653_593585354732801_4402437659897626624_n1691227265apexza.jpg'),
(21, 'content/gallery/306135707_434364448789724_1944329870042643131_n1691227268apexza.jpg'),
(22, 'content/gallery/302694210_434364445456391_6801507662502473435_n1691227271apexza.jpg'),
(23, 'content/gallery/download (7)1691227275apexza.jpeg'),
(24, 'content/gallery/wallpaperflare.com_wallpaper (7)1691227793apexza.jpg'),
(25, 'content/gallery/s21691513852apexza.jpg'),
(26, 'content/gallery/63542071_485504385540899_3612364669018177536_n1691513857apexza.jpg'),
(27, 'content/gallery/wallpaperflare.com_wallpaper (8)1691513861apexza.jpg'),
(28, 'content/gallery/302694210_434364445456391_6801507662502473435_n1691513868apexza.jpg'),
(29, 'content/gallery/62132600_485504945540843_4174270618969047040_n1691513873apexza.jpg'),
(30, 'content/gallery/Ukraine1691513893apexza.jpg'),
(31, 'content/gallery/school-social-media-post-template-design-9d0c888c26b6e16460625280512357c6_screen1691513907apexza.jpg'),
(32, 'content/gallery/download1691513917apexza.jpeg'),
(33, 'content/gallery/wallpaperflare.com_wallpaper1691647163apexza.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `photo`) VALUES
(9, 'content/slider/306135707_434364448789724_1944329870042643131_n1692118294apexza.jpg'),
(11, 'content/slider/63542071_485504385540899_3612364669018177536_n1692118308apexza.jpg'),
(12, 'content/slider/s21692118314apexza.jpg'),
(13, 'content/slider/62132600_485504945540843_4174270618969047040_n1692118383apexza.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `pdf` varchar(1000) NOT NULL,
  `date` varchar(200) NOT NULL,
  `datetime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`, `pdf`, `date`, `datetime`) VALUES
(1, '12th Result', 'content/notification/141691327999apexza.jpg', '06-08-23', '1691327999'),
(2, '10th result', 'content/notification/s011691328351apexza.jpeg', '06-08-23', '1691328351'),
(3, '10th Admit card', 'content/notification/141691328657apexza.jpg', '06-08-23', '1691328657'),
(6, 'dfsdf', '../content/notification/generated.pdf', '07-08-23', '1691388986'),
(7, 'Marksheet ', '../content/notification/Profile (1).pdf', '07-08-23', '1691425065'),
(8, 'Latest News', '../content/notification/Profile.pdf', '09-08-23', '1691551135'),
(9, '10 th Admission Start on', '../content/notification/Rama Shankar Resume.pdf', '09-08-23', '1691551161'),
(10, '12th Result 2022-2023', '../content/notification/Report.pdf', '09-08-23', '1691551182'),
(11, '12th Result', 'content/notification/141691327999apexza.jpg', '06-08-23', '1691327999'),
(12, '10th result', 'content/notification/s011691328351apexza.jpeg', '06-08-23', '1691328351'),
(13, '10th Admit card', 'content/notification/141691328657apexza.jpg', '06-08-23', '1691328657'),
(14, 'dfsdf', '../content/notification/generated.pdf', '07-08-23', '1691388986'),
(15, 'Marksheet ', '../content/notification/Profile (1).pdf', '07-08-23', '1691425065'),
(16, 'Latest News', '../content/notification/Profile.pdf', '09-08-23', '1691551135'),
(17, '10 th Admission Start on', '../content/notification/Rama Shankar Resume.pdf', '09-08-23', '1691551161'),
(18, '12th Result 2022-2023', '../content/notification/Report.pdf', '09-08-23', '1691551182');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `name` varchar(200) NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `photo`, `name`, `detail`) VALUES
(1, 'content/review/Snapchat-20850636501691231827apexza.jpg', 'Ramesh Jha', 'My experience at SNSY Inter College is great and memorable. The mentors at SNSY Inter College helped us enhance my academic and interpersonal skills. I am thankful to Training & Placement cell for providing a platform to enhance my skills and an opportunity to showcase them. In the last I am saying that The World is here at SNSY Inter College.'),
(2, 'content/review/s031691232038apexza.jpg', 'Mohit Singh', 'SNSY Inter College provided me with an opportunity to enhance my skill and enriched my knowledge. The College has very interactive teachers who made everyone excited about the classes. I cherish each moment spent in College extra-curricular activities and will remember these moments forever.'),
(3, 'content/review/s041691232103apexza.jpg', 'Amit Jha', 'There are 2 major fests conducted in DAIICT. The annual fest in DAIICT is Synapse. It is conducted in the month of March. Some of the famous celebrities come here during this fest. There are coding competitions here as well during the fest. The tech fest here is i. Fest. This fest also conducts different coding competitions. Any type of book you want is available in the RC i.e. Resource Center here in DAIICT. There is a football ground, TT room, Badminton court, Basketball ground and other sports facilities in DAIICT.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `mobile`, `pass`, `name`) VALUES
(2, '6202346955', 'admin', 'Ramesh Jha'),
(3, '123', 'admin', 'Rohit Jha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_blog`
--
ALTER TABLE `add_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_teacher`
--
ALTER TABLE `add_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_details`
--
ALTER TABLE `college_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_blog`
--
ALTER TABLE `add_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `add_teacher`
--
ALTER TABLE `add_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `college_details`
--
ALTER TABLE `college_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
