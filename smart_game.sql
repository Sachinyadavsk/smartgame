-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2025 at 06:10 PM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nwoowcom_smart_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`) VALUES
(1, 'Admin@example.com', '$2y$10$8sA2N5Sx/1zMQv2yrTDAaOFlbGWECrrgB68axL.hBb78NhQdyAqWm', 'admin'),
(6, 'userzettaquiz@', '$2y$10$8sA2N5Sx/1zMQv2yrTDAaOFlbGWECrrgB68axL.hBb78NhQdyAqWm', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `datee` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `keywords` varchar(3000) NOT NULL,
  `descriptions` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `added_by` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `datee`, `title`, `image1`, `description`, `keywords`, `descriptions`, `url`, `added_by`, `status`) VALUES
(2, '2025-02-27', 'Free HTML5 Games', '9149071729239252707.6.Blog1.png', '<p>Why Jambo Games Are the Best Place to Play 100% Free HTML5 Games</p>\r\n', 's', 's', 's', 's', 1);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `short_desc` text NOT NULL,
  `keywords` varchar(10000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `title` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `score` varchar(100) DEFAULT NULL,
  `game_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `type`, `name`, `short_desc`, `keywords`, `description`, `image`, `title`, `status`, `score`, `game_url`) VALUES
(1, 'action', 'Bubble Shooter', '<p>Shoot Bubble is a classic bubble shooter game where you pop all the bubbles in each level 🎈.</p>\r\n\r\n<p>How does it work?<br />\r\nJust spot the bubbles of the same color, aim, and shoot! You can clear the board this way. It&rsquo;s super simple to pick up and you don&rsquo;t even need internet to play. Plus, it&rsquo;s addictive! You can enjoy shooting bubbles anytime, anywhere perfect for players of all ages 🎯.</p>\r\n\r\n<p>Are you ready to dive into the Bubble Shooter paradise?<br />\r\nShoot Bubble takes the classic game and adds tons of new twists. Discover innovative gameplay, rich elimination tactics, and fun crushing rules 🌟. There are exciting surprise events to make your adventure colorful!</p>\r\n\r\n<p>GAMEPLAY<br />\r\n- Classic Bubble Elimination: Aim and launch bubbles. Line up 3 or more of the same color to smash them 💥.<br />\r\n- Innovative Gameplay: Use cool, powerful props to breeze through levels 🔮.<br />\r\n- Exciting Activities: Complete levels, top the leaderboard, and snag the best rewards 🏆.</p>', '', '', '1740567572_1729166492318.2.Bubble Shooter.jpg', '', 1, NULL, 'BubblePop_zetta'),
(2, 'action', 'Knife Fruit', '<p>Shoot Bubble is a classic bubble shooter game where you pop all the bubbles in each level 🎈.</p>\r\n\r\n<p>How does it work?<br />\r\nJust spot the bubbles of the same color, aim, and shoot! You can clear the board this way. It&rsquo;s super simple to pick up and you don&rsquo;t even need internet to play. Plus, it&rsquo;s addictive! You can enjoy shooting bubbles anytime, anywhere perfect for players of all ages 🎯.</p>\r\n\r\n<p>Are you ready to dive into the Bubble Shooter paradise?<br />\r\nShoot Bubble takes the classic game and adds tons of new twists. Discover innovative gameplay, rich elimination tactics, and fun crushing rules 🌟. There are exciting surprise events to make your adventure colorful!</p>\r\n\r\n<p>GAMEPLAY<br />\r\n- Classic Bubble Elimination: Aim and launch bubbles. Line up 3 or more of the same color to smash them 💥.<br />\r\n- Innovative Gameplay: Use cool, powerful props to breeze through levels 🔮.<br />\r\n- Exciting Activities: Complete levels, top the leaderboard, and snag the best rewards 🏆.</p>', '', '', '1740567621_1729167147806.7.Knife vs Fruit.jpg', '', 1, NULL, 'KnifeFruit_zetta'),
(4, 'action', 'Orbit Rush', '<p>Shoot Bubble is a classic bubble shooter game where you pop all the bubbles in each level 🎈.</p>\r\n\r\n<p>How does it work?<br />\r\nJust spot the bubbles of the same color, aim, and shoot! You can clear the board this way. It&rsquo;s super simple to pick up and you don&rsquo;t even need internet to play. Plus, it&rsquo;s addictive! You can enjoy shooting bubbles anytime, anywhere perfect for players of all ages 🎯.</p>\r\n\r\n<p>Are you ready to dive into the Bubble Shooter paradise?<br />\r\nShoot Bubble takes the classic game and adds tons of new twists. Discover innovative gameplay, rich elimination tactics, and fun crushing rules 🌟. There are exciting surprise events to make your adventure colorful!</p>\r\n\r\n<p>GAMEPLAY<br />\r\n- Classic Bubble Elimination: Aim and launch bubbles. Line up 3 or more of the same color to smash them 💥.<br />\r\n- Innovative Gameplay: Use cool, powerful props to breeze through levels 🔮.<br />\r\n- Exciting Activities: Complete levels, top the leaderboard, and snag the best rewards 🏆.</p>', '', '', '1740567696_1729236319333.3.Orbit Rush.jpg', '', 1, NULL, 'OrbitRush_zetta'),
(5, 'action', 'American Football', '<p>Shoot Bubble is a classic bubble shooter game where you pop all the bubbles in each level 🎈.</p>\r\n\r\n<p>How does it work?<br />\r\nJust spot the bubbles of the same color, aim, and shoot! You can clear the board this way. It&rsquo;s super simple to pick up and you don&rsquo;t even need internet to play. Plus, it&rsquo;s addictive! You can enjoy shooting bubbles anytime, anywhere perfect for players of all ages 🎯.</p>\r\n\r\n<p>Are you ready to dive into the Bubble Shooter paradise?<br />\r\nShoot Bubble takes the classic game and adds tons of new twists. Discover innovative gameplay, rich elimination tactics, and fun crushing rules 🌟. There are exciting surprise events to make your adventure colorful!</p>\r\n\r\n<p>GAMEPLAY<br />\r\n- Classic Bubble Elimination: Aim and launch bubbles. Line up 3 or more of the same color to smash them 💥.<br />\r\n- Innovative Gameplay: Use cool, powerful props to breeze through levels 🔮.<br />\r\n- Exciting Activities: Complete levels, top the leaderboard, and snag the best rewards 🏆.</p>', '', '', '1740567723_1733460915440.6.American Football-720 x 540.jpg', '', 1, NULL, 'AmericanFootball_zetta'),
(8, 'arcade', 'Ball Up', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740633944_1729165651182.8.Ball Up.jpg', '', 1, NULL, 'BallUp_zetta'),
(12, 'arcade', 'Pick Pick', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740634102_1734408273735.9.Pick Pick-720 x 540.jpg', '', 1, NULL, 'PickPick_zetta'),
(13, 'arcade', 'Zip Zap', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740634158_1734416564995.8.ZipZap_720X540.jpg', '', 1, NULL, 'ZipZap_zetta'),
(14, 'arcade', 'Unstack Tower', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740634204_1734417083037.1.Unstack Tower-720 x 540.jpg', '', 1, NULL, 'UnstackTower_zetta'),
(15, 'arcade', 'Mr Cactus', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740634242_1734417865122.2.Mr Cactus-720 x 540.jpg', '', 1, NULL, 'MrCactus_zetta'),
(17, 'arcade', 'Ball Hop', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740634336_1734426579857.9.Ball-Hop.jpg', '', 1, NULL, 'BallHop_zetta'),
(19, 'casual', 'Egg Drive', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740634783_1733467287419.Egg Drive.jpg', '', 1, NULL, 'EggDrive_zetta'),
(20, 'casual', 'Bubble Pop', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740634821_1734419785568.Bubble Pop-appicon-254.jpg', '', 1, NULL, 'BubblePops_zetta'),
(21, 'casual', 'Snake Ball', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740634854_1734426379366.1.Snake Ball.jpg', '', 1, NULL, 'SnakeBall_zetta'),
(22, 'casual', 'Fall Lovers', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740634891_1734428657431.9.Fall-The-Lovers.jpg', '', 1, NULL, 'FallLovers_zetta'),
(23, 'casual', 'Pinata Smash', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740634924_1734694356091.2.Pinata Smash-720 x 540.jpg', '', 1, NULL, 'PinataSmash_zetta'),
(24, 'casual', 'Pop It', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740634959_1734695115718.5.Pop-It.jpg', '', 1, NULL, 'PopIt_zetta'),
(25, 'puzzle', 'Screw Puzzle', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740635437_1733465408541.Screw Jam Puzzle.jpg', '', 1, NULL, 'ScrewPuzzle_zetta'),
(26, 'puzzle', 'Block Blast', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740635477_1733469021389.8.Block Blast-720 x 540.jpg', '', 1, NULL, 'BlockBlast_zetta'),
(27, 'puzzle', 'Sort Out', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740635520_1733722856919.9.Sort Out-720 x 540.jpg', '', 1, NULL, 'SortOut_zetta'),
(28, 'puzzle', 'Jewel Deluxe', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740635564_1734420386922.Jewel-Deluxe.jpg', '', 1, NULL, 'JewelDeluxe_zetta'),
(29, 'puzzle', 'Sticker Book', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740635604_1734695398423.3.sticker book-720 x 540.jpg', '', 1, NULL, 'StickerBook_zetta'),
(30, 'puzzle', 'Word Search', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740635644_1734695678942.7.Word Search Hidden Words-720 x 540.jpg', '', 1, NULL, 'WordSearch_zetta'),
(31, 'imaging', 'Spider Solitaire', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740636844_1729228372359.6.Spider Solitaire.jpg', '', 1, NULL, 'SpiderSolitaire_zetta'),
(32, 'imaging', 'Sudoku', '<p>Fight for the Top Spot: Paddle, score, and rise to the top of the global leaderboard in this high-energy arcade game!</p>\r\n\r\n<p>Inspired by the classic arcade spirit, Tilt &#39;n&#39; Tumble challenges players to master fast-paced action without needing extensive tutorials. Control the game using joystick or accelerometer to guide the paddle with precision, keeping the ball in play and scoring points. Enjoy dynamic music, unlock various paddles, and compete on the global leaderboard. Tilt &#39;n&#39; Tumble delivers an exhilarating gaming experience that keeps you coming back for more.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<p>* Intuitive Controls: Choose between joystick or accelerometer to move the bat/paddle left and right with precision.</p>\r\n\r\n<p>* Unlockable 30+ Bats/Paddles: Discover multiple designs.</p>\r\n\r\n<p>* Music: Enjoy tunes that match the gameplay&#39;s intensity.</p>\r\n\r\n<p>* In-Game Achievements: Unlock over 60+ achievements by completing various challenges.</p>\r\n\r\n<p>* Global Leaderboard: Compete worldwide and aim for the top spot.</p>\r\n\r\n<p>* Language-Free Experience: Seamlessly enjoy gameplay across languages.</p>\r\n\r\n<p>Thank you for playing.</p>', NULL, NULL, '1740636876_1729228746758.3.Sudoku.jpg', '', 1, NULL, 'Sudoku_zetta');

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE `meta_data` (
  `id` int(11) NOT NULL,
  `page` varchar(100) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`id`, `page`, `data`) VALUES
(1, 'head', '<!-- Google tag (gtag.js) -->\r\n<meta name=\"google-site-verification\" content=\"8uqCb-kgEAL_3fPtSejDAZGGX9sB59lIV3IEnxaKxy4\" />'),
(2, 'contact', '<meta name=\"keywords\" content=\"\" />\r\n<meta name=\"description\" content=\"Need help or have a question? Contact ZettaQuiz for support, feedback, or business inquiries. We\'re here to assist you!\" />\r\n<title>Contact ZettaQuiz | Get in Touch for Support & Inquiries</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(3, 'disclaimer', '<meta name=\"keywords\" content=\"disclaimer\"/>\r\n<meta name=\"description\" content=\"Read the ZettaQuiz Disclaimer to understand our terms of use, liability limitations, and user responsibilities. Stay informed before using our quiz platform.\" />\r\n<title>ZettaQuiz Disclaimer - Terms of Use & Liability Info</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n\r\n'),
(4, 'about', '<meta name=\"keywords\" content=\"About Us\"/>\r\n<meta name=\"description\" content=\"Discover ZettaQuiz\'s mission & vision. Learn how we create engaging quizzes for knowledge & fun. Join us in making learning interactive & entertaining!\" />\r\n<title>About ZettaQuiz - Our Mission, Vision & Quiz Platform</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(5, 'team_of_conditions', '<meta name=\"keywords\" content=\"Terms Conditions\" />\r\n<meta name=\"description\" content=\"Read the Terms & Conditions of ZettaQuiz to understand the rules, policies, and guidelines for using our platform. Stay informed and play responsibly!\" />\r\n<title>ZettaQuiz Terms & Conditions - User Guidelines & Rules </title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(6, 'privacy_policy', '<meta name=\"keywords\" content=\"Privacy Policy\" />\r\n<meta name=\"description\" content=\" Learn how ZettaQuiz collects, stores & protects your personal data. Read our Privacy Policy for details on security, cookies, user rights. Stay safe online!\" />\r\n<title>ZettaQuiz Privacy Policy - How We Protect Your Data</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n'),
(7, 'home', '<meta name=\"keywords\" content=\"Quiz Game Lite zettaquiz\" />\r\n<meta name=\"description\" content=\"Explore ZettaQuiz for exciting quizzes on various topics! Test your knowledge, challenge friends & learn with fun. Play now & become a quiz master!\"/>\r\n<title>ZettaQuiz - Play, Learn & Master Fun Quizzes Online</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n'),
(8, 'faq', '<meta name=\"keywords\" content=\"Faq\"/>\r\n<meta name=\"description\" content=\"Have questions about ZettaQuiz? Check our FAQs for answers on quiz rules, account issues, scoring system & more. Get quick help & start playing today!\" />\r\n<title>ZettaQuiz FAQs - Get Answers to Common Quiz Queries</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(10, 'blog', '<meta name=\"keywords\" content=\"blog\"/>\r\n<meta name=\"description\" content=\"Have questions about ZettaQuiz? Check our FAQs for answers on quiz rules, account issues, scoring system & more. Get quick help & start playing today!\" />\r\n<title>ZettaQuiz Blog- Get Answers to Common Quiz Queries</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(11, 'trending', '<meta name=\"keywords\" content=\"trending\"/>\r\n<meta name=\"description\" content=\"Have questions about ZettaQuiz? Check our FAQs for answers on quiz rules, account issues, scoring system & more. Get quick help & start playing today!\" />\r\n<title>ZettaQuiz Trending- Get Answers to Common Quiz Queries</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(12, 'sports', '<meta name=\"keywords\" content=\"sports\"/>\r\n<meta name=\"description\" content=\"Have questions about ZettaQuiz? Check our FAQs for answers on quiz rules, account issues, scoring system & more. Get quick help & start playing today!\" />\r\n<title>ZettaQuiz Sports- Get Answers to Common Quiz Queries</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(13, 'general_knowledge', '<meta name=\"keywords\" content=\"General Knowledge\"/>\r\n<meta name=\"description\" content=\"Have questions about ZettaQuiz? Check our FAQs for answers on quiz rules, account issues, scoring system & more. Get quick help & start playing today!\" />\r\n<title>ZettaQuiz General Knowlegdge - Get Answers to Common Quiz Queries</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(14, 'Entertainment', '<meta name=\"keywords\" content=\"Entertainment\"/>\r\n<meta name=\"description\" content=\"Have questions about ZettaQuiz? Check our FAQs for answers on quiz rules, account issues, scoring system & more. Get quick help & start playing today!\" />\r\n<title>ZettaQuiz Entertainment- Get Answers to Common Quiz Queries</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(15, 'funny', '<meta name=\"keywords\" content=\"funny\"/>\r\n<meta name=\"description\" content=\"Have questions about ZettaQuiz? Check our FAQs for answers on quiz rules, account issues, scoring system & more. Get quick help & start playing today!\" />\r\n<title>ZettaQuiz Funny- Get Answers to Common Quiz Queries</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(16, 'details', '<meta name=\"keywords\" content=\"details game\"/>\r\n<meta name=\"description\" content=\"Have questions about ZettaQuiz? Check our FAQs for answers on quiz rules, account issues, scoring system & more. Get quick help & start playing today!\" />\r\n<title>ZettaQuiz Details Game- Get Answers to Common Quiz Queries</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(17, 'playgame', '<meta name=\"keywords\" content=\"play Game\"/>\r\n<meta name=\"description\" content=\"Have questions about ZettaQuiz? Check our FAQs for answers on quiz rules, account issues, scoring system & more. Get quick help & start playing today!\" />\r\n<title>ZettaQuiz Play Game- Get Answers to Common Quiz Queries</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n'),
(18, 'result', '<meta name=\"keywords\" content=\"Result Game\"/>\r\n<meta name=\"description\" content=\"Have questions about ZettaQuiz? Check our FAQs for answers on quiz rules, account issues, scoring system & more. Get quick help & start playing today!\" />\r\n<title>ZettaQuiz Result Game- Get Answers to Common Quiz Queries</title>\r\n<meta property=\"og:title\" content=\"play and learn with zettaquiz – top trivia and brain games\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettaquiz.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettaquiz\">\r\n<meta name=\"twitter:title\" content=\"Play and Learn with ZettaQuiz – Top Trivia and Brain Games\">\r\n<meta name=\"twitter:description\" content=\"ZettaQuiz brings you fun, interactive quizzes on topics you love. Test your skills, boost your knowledge, and enjoy endless trivia fun today.\">\r\n<meta name=\"twitter:image\" content=\"https://zettaquiz.com/assets/images/logo.png\">\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `icon_url` varchar(1000) DEFAULT NULL,
  `action_url` varchar(1000) DEFAULT NULL,
  `shoot_count` int(11) DEFAULT NULL,
  `created_on` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `description`, `icon_url`, `action_url`, `shoot_count`, `created_on`) VALUES
(3, 'Play Free Online Games | Free Games - Your Gateway', 'Explore a world of free online gaming fun at Free Games.', NULL, 'https://game.reapbucks.com/smartgame/about-us.php', NULL, '2025-03-03 17:10:25'),
(4, 'Play Free Online Games | Free Games - Your Gateway', 'Explore a world of free online gaming fun at Free Games.', NULL, 'https://game.reapbucks.com/smartgame/blogs.php', NULL, '2025-03-03 17:11:20'),
(5, 'Play Free Online Games | Free Games - Your Gateway', 'Explore a world of free online gaming fun at Free Games.', NULL, 'https://game.reapbucks.com/smartgame/blogs.php', NULL, '2025-03-03 17:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(10000) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `device` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `loc` varchar(20) NOT NULL,
  `isp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `device` varchar(100) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `ip`, `device`, `reset_token`, `created_at`) VALUES
(1, 'suraj raj', 'sachinsk4832499@gmail.com', '$2y$10$wXrGOEVBPCBhGpTKRvUFyu.bCN87RRJzHrABq/Li5svT2wfumoMca', '9876543210', '106.219.166.253', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Sa', '906548033870bc8a2bc40aee914b604e', '2024-12-18 07:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_scores`
--

CREATE TABLE `user_scores` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `score` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_data`
--
ALTER TABLE `meta_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_scores`
--
ALTER TABLE `user_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_id` (`game_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `meta_data`
--
ALTER TABLE `meta_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_scores`
--
ALTER TABLE `user_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_scores`
--
ALTER TABLE `user_scores`
  ADD CONSTRAINT `user_scores_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
