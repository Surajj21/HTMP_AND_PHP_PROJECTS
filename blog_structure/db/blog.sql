-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 02:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`post_id`, `title`, `description`, `post_date`, `user_id`) VALUES
(21, 'The Importance of Reading for Personal Growth', 'Reading is a fundamental activity that has the power to transform our lives. Whether we are reading a classic novel, a self-help book, or a scientific article, reading has the ability to expand our knowledge, boost our creativity, and improve our emotional intelligence. In fact, studies have shown that reading can improve cognitive function, reduce stress, and increase empathy.', '2023-02-19', 18),
(22, 'One of the most significant benefits of reading is its ability to promote personal growth. By exposi', 'One of the most significant benefits of reading is its ability to promote personal growth. By exposing ourselves to new ideas and perspectives, we can gain a better understanding of ourselves and the world around us. Reading can challenge our beliefs, broaden our horizons, and encourage us to think critically about our lives and the issues that matter to us.', '2023-02-19', 18),
(23, 'Reading about the struggles and triumphs.', 'Iam in a world that is constantly evolving and changing, reading is more important than ever. By making reading a regular part of our lives, we can continue to learn and grow, and become better equipped to navigate the challenges and opportunities that lie ahead. So, pick up a book, and start your journey to personal growth today!', '2023-02-19', 18),
(24, 'The Benefits of Meditation for Mental Health', 'Meditation has been shown to have numerous benefits for mental health. Regular meditation practice can help reduce symptoms of anxiety and depression, improve focus and concentration, and increase feelings of calm and well-being. Studies have also found that meditation can lower levels of the stress hormone cortisol and improve sleep quality. With just a few minutes of meditation each day, you can start reaping the benefits for your mental health.\r\n', '2023-02-19', 15),
(25, 'The Importance of Self-Care for Your Well-Being ', 'Self-care is essential for maintaining your overall well-being. It involves taking intentional steps to care for your physical, emotional, and mental health. This can include activities like exercise, eating well, getting enough sleep, and engaging in activities that bring you joy. By prioritizing self-care, you can boost your mood, reduce stress and anxiety, and improve your overall quality of life.', '2023-02-19', 15),
(26, 'Simple Ways to Boost Your Productivity', 'Productivity can often feel like an elusive goal, but there are several simple ways you can boost your productivity. One effective strategy is to break tasks down into smaller, manageable steps. You can also try setting specific goals and using time-blocking to help you stay focused. Other tips include minimizing distractions and taking regular breaks to avoid burnout.', '2023-02-19', 15),
(27, 'The Benefits of Gratitude for Mental Health', 'Practicing gratitude has been shown to have numerous benefits for mental health. When we focus on the things we are thankful for, we can cultivate feelings of joy, contentment, and peace. Gratitude has also been linked to increased resilience and better coping skills during times of stress or adversity. By making a habit of gratitude, you can improve your mental health and overall well-being.', '2023-02-19', 15);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `password` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `token` int(255) DEFAULT NULL,
  `del-tokem` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `username`, `email`, `date`, `password`, `token`, `del-tokem`) VALUES
(15, 'suraj', 'Suraj@123', '1999-08-21', 'suraj', NULL, NULL),
(18, 'krishna', 'krishna@123', '2001-02-19', 'krishna', NULL, NULL),
(20, 'suraj@123', 'zipgridwork@gmail.com', '1909-06-21', 'suraj@123', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
