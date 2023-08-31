-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 13, 2023 at 06:01 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soccerclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(226) NOT NULL,
  `admin_email` varchar(226) NOT NULL,
  `admin_password` varchar(226) NOT NULL,
  `admin_img` varchar(226) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_img`) VALUES
(1, 'imran', 'imran@gmail.com', '123', 'images/64d31e2241d9c_logo_upscaled_by_dgb_lol (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_image_player` varchar(226) NOT NULL,
  `banner_image_front` varchar(226) NOT NULL,
  `banner_image_back` varchar(226) NOT NULL,
  `banner_image_ball` varchar(226) NOT NULL,
  `banner_image_background` varchar(226) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_image_player`, `banner_image_front`, `banner_image_back`, `banner_image_ball`, `banner_image_background`) VALUES
(16, 'images/player.png', 'images/front_particles.png', 'images/back_particles.png', 'images/ball.png', 'images/background01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(226) NOT NULL,
  `email` varchar(226) NOT NULL,
  `subject` varchar(226) NOT NULL,
  `phone` varchar(226) NOT NULL,
  `messege` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

DROP TABLE IF EXISTS `latest_news`;
CREATE TABLE IF NOT EXISTS `latest_news` (
  `LN_id` int(11) NOT NULL AUTO_INCREMENT,
  `LN_image` varchar(226) NOT NULL,
  `LN_img_tittle` varchar(226) NOT NULL,
  `LN_img_tittle_description` varchar(500) NOT NULL,
  `LN_description` varchar(500) NOT NULL,
  `LN_date` varchar(226) NOT NULL,
  `LN_likes` varchar(226) NOT NULL,
  PRIMARY KEY (`LN_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`LN_id`, `LN_image`, `LN_img_tittle`, `LN_img_tittle_description`, `LN_description`, `LN_date`, `LN_likes`) VALUES
(7, 'images/c_news_01.jpg', 'Luis SuÃ¡rez', 'Raheem Sterling', 'Sergio Ramos Leaving Real Madrid: Sergio Ramos, a longtime captain of Real Madrid, left the club after his contract expired.', '2023-08-11', '50'),
(8, 'images/c_news_02.jpg', 'Bruno Fernandes', 'Erling Haaland', 'hampions League and Europa League Resumption: The UEFA Champions League and Europa League were temporarily halted due to the pandemic but resumed in August 2020 with a condensed format,', '2023-08-06', '60'),
(9, 'images/c_news_03.jpg', 'Luka ModriÄ‡', 'Virgil van Dijk', 'Black Lives Matter Movement: Football players and teams worldwide expressed support for the Black Lives Matter movement, ', '2023-08-15', '40'),
(10, 'images/c_news_04.jpg', 'Sadio ManÃ©', 'Manuel Neuer', 'Lionel Messi Transfer Saga: There were speculations about Lionel Messi leaving FC Barcelona after spending his entire career ', '2023-08-17', '65'),
(11, 'images/c_news_05.jpg', 'Erling Haaland', 'Gianluigi Buffon', 'played without spectators. The UEFA Euro 2020 tournament was postponed to 2021, and the Copa America was also rescheduled.', '2023-08-10', '60'),
(12, 'images/w_news_01.jpg', 'Mario GÃ¶tze', 'Diego GodÃ­n', 'Italian Serie A Dominance: Juventus continued their Serie A dominance, winning their ninth consecutive league title.', '2023-08-05', '70'),
(13, 'images/w_news-03.jpg', 'James RodrÃ­guez', 'Paulo Dybala', 'Sergio Ramos Leaving Real Madrid: Sergio Ramos, a longtime captain of Real Madrid, left the club after his contract expired.', '2023-08-04', '50'),
(14, 'images/w-news-04.jpg', 'Luis SuÃ¡rez', 'Raheem Sterling', 'Sergio Ramos Leaving Real Madrid: Sergio Ramos, a longtime captain of Real Madrid, left the club after his contract expired.', '2023-08-16', '60');

-- --------------------------------------------------------

--
-- Table structure for table `latest_result`
--

DROP TABLE IF EXISTS `latest_result`;
CREATE TABLE IF NOT EXISTS `latest_result` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `result_title` varchar(226) NOT NULL,
  `result_description` varchar(500) NOT NULL,
  `result_team1name` varchar(226) NOT NULL,
  `result_team2name` varchar(226) NOT NULL,
  `result_team1_image` varchar(226) NOT NULL,
  `result_team2_image` varchar(226) NOT NULL,
  `result_status` varchar(226) NOT NULL,
  `result_team1_performence` varchar(226) NOT NULL,
  `result_team2_performence` varchar(226) NOT NULL,
  `result_team1_score` varchar(226) NOT NULL,
  `result_team2_score` varchar(226) NOT NULL,
  `result_datetime` varchar(226) NOT NULL,
  `result_stadium` varchar(226) NOT NULL,
  `result_country` varchar(226) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_result`
--

INSERT INTO `latest_result` (`result_id`, `result_title`, `result_description`, `result_team1name`, `result_team2name`, `result_team1_image`, `result_team2_image`, `result_status`, `result_team1_performence`, `result_team2_performence`, `result_team1_score`, `result_team2_score`, `result_datetime`, `result_stadium`, `result_country`) VALUES
(5, 'UEFA CHAMPIONS LEAGUE', ' The UEFA Champions League is an annual club football competition organized by the Union of European Football Associations (UEFA). It is widely regarded as one of the most prestigious tournaments in the world and showcases the best club teams from across Europe. The tournament typically runs from late summer to late spring, culminating in the final match, which determines the champion of Europe for that particular season.', 'FC DRAGONS', 'FC ZULU NINJAS', 'images/sads.png', 'images/saa.png', '1-3', 'Shannon Skelly(23)', ' Leland Lagos(29)', 'LOSE', '   WIN', '2023-08-12', 'WBEYSLEY STADIUM', '(LONDON)');

-- --------------------------------------------------------

--
-- Table structure for table `latest_video`
--

DROP TABLE IF EXISTS `latest_video`;
CREATE TABLE IF NOT EXISTS `latest_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_date` varchar(226) NOT NULL,
  `video_title` varchar(226) NOT NULL,
  `video_link` varchar(226) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_video`
--

INSERT INTO `latest_video` (`video_id`, `video_date`, `video_title`, `video_link`) VALUES
(1, '2023', 'football', 'z08ujli-kP4'),
(2, '2022', 'football', '8aObYjTZMEc'),
(3, '2023', 'football', 'MoxVbWw-iVM'),
(4, '2023', 'football', 'F4v54Be4N7s'),
(5, '2023', 'football', 'v4Z6WGIoRI4');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE IF NOT EXISTS `matches` (
  `match_id` int(11) NOT NULL AUTO_INCREMENT,
  `match_team1_name` varchar(226) NOT NULL,
  `match_team2_name` varchar(226) NOT NULL,
  `match_date` varchar(226) NOT NULL,
  `match_time` varchar(226) NOT NULL,
  PRIMARY KEY (`match_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `match_team1_name`, `match_team2_name`, `match_date`, `match_time`) VALUES
(2, 'FC Barcelona (Spain)', 'Real Madrid CF (Spain)', '14-AUGUST-2023', '12:00'),
(3, 'Manchester United FC (England)', 'Liverpool FC (England)', '15-AUGUST-2023', '1:00'),
(4, 'Juventus FC (Italy)', 'AC Milan (Italy)', '16-AUGUST-2023', '1:00'),
(5, 'Paris Saint-Germain (France)', 'Bayern Munich (Germany)', '15-AUGUST-2023', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `match_schedule`
--

DROP TABLE IF EXISTS `match_schedule`;
CREATE TABLE IF NOT EXISTS `match_schedule` (
  `ms_id` int(11) NOT NULL AUTO_INCREMENT,
  `ms_description` varchar(10000) NOT NULL,
  `ms_team1_image` varchar(226) NOT NULL,
  `ms_team2_image` varchar(226) NOT NULL,
  `ms_date` varchar(226) NOT NULL,
  `ms_day` varchar(226) NOT NULL,
  `ms_stadium` varchar(226) NOT NULL,
  `ms_city` varchar(226) NOT NULL,
  PRIMARY KEY (`ms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match_schedule`
--

INSERT INTO `match_schedule` (`ms_id`, `ms_description`, `ms_team1_image`, `ms_team2_image`, `ms_date`, `ms_day`, `ms_stadium`, `ms_city`) VALUES
(6, 'n a highly anticipated clash of titans, FC Barcelona squared off against Paris Saint-Germain (PSG) in the quarter-finals of the UEFA Champions League. The electric atmosphere at Camp Nou was palpable as fans from both sides filled the stadium with their chants and cheers.', 'images/logo01.png', 'images/logo02.png', 'OCTOBER 31, 2023 | 18:25PM', 'MONDAY', 'WEMSDDLEY STADIUM ', '(LONDON)');

-- --------------------------------------------------------

--
-- Table structure for table `players_gallery`
--

DROP TABLE IF EXISTS `players_gallery`;
CREATE TABLE IF NOT EXISTS `players_gallery` (
  `players_id` int(11) NOT NULL AUTO_INCREMENT,
  `players_description` varchar(500) NOT NULL,
  `players_image` varchar(226) NOT NULL,
  `players_name` varchar(226) NOT NULL,
  `players_age` varchar(226) NOT NULL,
  `players_date` varchar(226) NOT NULL,
  `players_role` varchar(226) NOT NULL,
  `players_like` varchar(226) NOT NULL,
  PRIMARY KEY (`players_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players_gallery`
--

INSERT INTO `players_gallery` (`players_id`, `players_description`, `players_image`, `players_name`, `players_age`, `players_date`, `players_role`, `players_like`) VALUES
(4, 'Lionel Messi: An Argentine forward widely regarded as one of the greatest footballers of all time. Known for his incredible dribbling, close control, and prolific goal-scoring ability. Spent the majority of his career with FC Barcelona before transferring to Paris Saint-Germain in 2021.', 'images/player02.jpg', 'Lionel Messi', '25', '15 ', 'gool_keeper', '50'),
(5, ' A Portuguese forward renowned for his athleticism, speed, and goal-scoring prowess. Played for several top clubs, including Sporting CP, Manchester United, ', 'images/player03.jpg', 'ronaldo', '50', '15', 'defender', '50'),
(7, 'Lionel Messi: An Argentine forward widely regarded as one of the greatest footballers of all time. Known for his incredible dribbling, close control, and prolific goal-scoring ability. Spent the majority of his career with FC Barcelona before transferring to Paris Saint-Germain in 2021.', 'images/player04.jpg', 'Neymar Jr.', '50', '15 ', 'gool_keeper', '50');

-- --------------------------------------------------------

--
-- Table structure for table `point_table`
--

DROP TABLE IF EXISTS `point_table`;
CREATE TABLE IF NOT EXISTS `point_table` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_teamname` varchar(226) NOT NULL,
  `p_points` varchar(226) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `point_table`
--

INSERT INTO `point_table` (`p_id`, `p_teamname`, `p_points`) VALUES
(2, 'Chelsea FC (England)', '10'),
(3, 'Arsenal FC (England)', '9'),
(4, 'Manchester City FC (England)', '9'),
(5, 'Borussia Dortmund (Germany)', '10'),
(6, 'Inter Milan (Italy)', '5'),
(7, 'AtlÃ©tico Madrid (Spain)', '8'),
(8, 'Tottenham Hotspur FC (England)', '7'),
(9, 'FC Porto (Portugal)', '8'),
(10, 'AS Roma (Italy)', '10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_name` varchar(226) NOT NULL,
  `products_price` varchar(226) NOT NULL,
  `products_image1` varchar(226) NOT NULL,
  `products_image2` varchar(226) NOT NULL,
  `products_image3` varchar(226) NOT NULL,
  `products_image4` varchar(226) NOT NULL,
  `products_image5` varchar(226) NOT NULL,
  `products_image6` varchar(226) NOT NULL,
  PRIMARY KEY (`products_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_name`, `products_price`, `products_image1`, `products_image2`, `products_image3`, `products_image4`, `products_image5`, `products_image6`) VALUES
(3, 'shoe', '200', 'images/product01.jpg', 'images/product02.jpg', 'images/product03.jpg', 'images/product04.jpg', 'images/backgroundd.jpg', 'images/backgroundd.jpg'),
(4, 'shirt', '215', 'images/product02.jpg', 'images/', 'images/', 'images/', 'images/', 'images/'),
(5, 'shirt', '200', 'images/shoesBig01.png', 'images/shoe01.jpg', 'images/shoe04.jpg', 'images/shoes05.png', 'images/shoe02.jpg', 'images/shoe02.jpg'),
(6, 'glasses', '200', 'images/product04.jpg', 'images/', 'images/', 'images/', 'images/', 'images/');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

DROP TABLE IF EXISTS `team_members`;
CREATE TABLE IF NOT EXISTS `team_members` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_member_name` varchar(226) NOT NULL,
  `team_member_email` varchar(500) NOT NULL,
  `team_member_description` varchar(226) NOT NULL,
  `team_member_images` varchar(226) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `top_score`
--

DROP TABLE IF EXISTS `top_score`;
CREATE TABLE IF NOT EXISTS `top_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(226) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_score`
--

INSERT INTO `top_score` (`id`, `team_name`, `score`) VALUES
(1, 'sadasd', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(226) NOT NULL,
  `user_email` varchar(226) NOT NULL,
  `user_password` varchar(226) NOT NULL,
  `user_image` varchar(226) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
