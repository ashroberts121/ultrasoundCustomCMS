-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2018 at 07:08 AM
-- Server version: 5.7.22
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms-wbd5100`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(20) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `body` varchar(8000) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `author`, `preview`, `body`, `date`) VALUES
(5, 'Camping mats: The best roll mats for festivals - a buyers guide!', 'Ashley', 'A decent roll mat is a festival essential for me. You lose most of your heat through the floor so a good camping mat will make loads of difference. We’ve found some of the best roll mats at the best prices for the 2018 festival season.', 'Air beds suck…\r\nI’ve always preferred roll mats, or camping mats, to air beds, mostly because they’re way less hassle. They’re much easier to carry around, and a lot lighter too.\r\n\r\nAir beds also need inflating. It’s unlikely you’ll have access to electricity for a pump, so that’ll take some effort. You’ll then have to re-inflate your air bed each night of the festival, as it’ll lose enough air to get sinky each day.\r\n\r\nThat’s if it doesn’t pop. They always pop. They can make you pretty seasick too when you’ve been getting messy all day. Plus if you haven’t got a brilliant tent, an air bed can take up the entire tent, pushing at the sides of the tent and letting water in!\r\n\r\nSo yeah, roll mats are the way to go.\r\n\r\nEven the most basic, cheapest roll mat will make a big difference to your body temperature as it insulates you from the ground. It’ll be slightly softer to sleep on too.\r\n\r\nSelf-inflating roll mats are awesome\r\nThat said, if you spend a little more you can get a self-inflating roll mat. These are pretty awesome. They roll up small like any other roll mat, but are filled with a type of foam.\r\n\r\nOpen the valve and the foam causes them to inflate in seconds. Close the valve back up, and you’ve got a nice inch or two of air cushioning you from the ground below.', 'Mon-06-Aug-18@03:53:43'),
(6, 'Sock wrestling? Trapeze? The weirdest things you can do at festivals this summer!', 'Alex', 'In case you hadn’t heard, festivals aren’t just about music anymore. Over the last few years, there’s been a huge rise in extra activities from the serious to the bizarre. Here’s the weirdest things you can still do at this summer’s remaining festivals.', 'Flying trapeze school\r\nWhat: The theme for this year’s Bestival is the circus and you can learn some skills worthy of a Big Top. Join the Gorilla Circus and Flying Trapeze School and learn how to fling yourself from one aerial bar to another. It might not be the most useful skill for everyday life, but it does sound quite impressive.\r\nWhere: Bestival, Lulworth Estate, Dorset, August 2-5.\r\n\r\nMass musical benches\r\nWhat: Unless you’re a literal child or have attended a child’s birthday party in recent years, you probably haven’t even thought about musical chairs in years. For some reason, the people behind Wilderness have and they’re inviting you to relive your youth with a super-sized version of the party game. Test your reaction time and battle it out against your fellow festival-goers to be the last one sitting.\r\nWhere: Wilderness Festival, Cornbury Park, Oxfordshire, August 2-5.\r\n\r\nAerial yoga\r\nWhat: Most festivals these days seem to have some sort of wellbeing programme where yoga is a key fixture, but Boardmasters goes beyond the norm with a slightly different take on things. Aerial yoga involves pulling all your usual yoga moves but uses a silk hammock to elevate your body off the ground. Be warned, if you have no arm muscles, you will not get off the ground.\r\nWhere: Boardmasters, Newquay, Cornwall, August 8-12.', 'Mon-06-Aug-18@04:01:10'),
(7, 'The best new artists to catch during festival season 2018', 'AshleyR', 'Festivals – they’re not just great for watching some of the best and biggest bands in the world, but for discovering your new favourite artist too. Here’s my tips for the best new artists to check out this festival season!', 'Bodega.\r\nWho: New York’s most exciting new band who make tongue-in-cheek post-punk for the digitally-reliant generation.\r\nKey track: ‘Jack In Titanic’\r\nWhere to see them: Latitude, July 13.\r\n\r\nBlack Honey\r\nWho: Brightoners who look and sound like they’ve stepped out of a Tarantino film. Recent single ‘Bad Friends’ hints they’re aiming for gigantic things this year.\r\nKey track: ‘Bad Friends’\r\nWhere to see them: 2000 Trees (July 12), Latitude (July 15), Truck Festival (July 21), Tramlines (July 22), Kendal Calling (July 26-29), Rize Festival (August 18), Bingley Music Live (August 31-September 1), Electric Fields (September 1).\r\n\r\n\r\nJust Banco\r\nWho: Matty Healy-approved Manchester rapper who calls his slick mix of R&B, grime and hip-hop “Trapanese”.\r\nKey track: ‘Ashleigh’\r\nWhere to see them: Wireless Festival (July 6)\r\n\r\nIdles\r\nWho: Bristol punks who are politically-minded and brilliantly fun, and can turn any room (or tent) into complete carnage in seconds.\r\nKey track: ‘Colossus’\r\nWhere to see them: Kosmonaut Festival, Germany (June 29), Down The Rabbit Hole, Netherlands (June 30), Rock Werchter, Belgium (July 8), EXIT Festival, Serbia (July 13), Latitude (July 15), Electric Castle, Romania (July 22), Paléo, Switzerland (July 18), Leopallooza XII (July 27-29), No Borders No Nations, Switzerland (July 27-29), Bestival (August 2-6), FILF @ Rebellion Blackpool (August 2), Visions Festival (August 4), Boomtown Fair (August 9), Cabaret Vert, France (August 25), Electric Fields (September 1), End Of The Road (August 30-September 2).\r\n\r\nWhenyoung\r\nWho: London-based Irish trio who make sugary sweet indie-pop and have already been given the seal of approval by The Maccabees’ Felix White and, erm, Bono? NBD.\r\nKey track: ‘Pretty Pure’\r\nWhere to see them: Deer Shed Festival (July 20), Truck Festival (July 21), Kendal Calling (July 26-30), Y Not Festival (July 28), Neverworld (August 2-5), Bestival (August 2-5), All Together Now (August 3-5).', 'Mon-06-Aug-18@04:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(68, 'muddy.jpg'),
(69, 'large_stage.jpg'),
(70, 'fair.jpg'),
(71, 'rock_stage.jpg'),
(75, 'fest2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `token`) VALUES
(32, 'Ashley', 'Roberts', 'ash.roberts121@gmail.com', '$2y$10$UWyigjlO3xiqiMxtbTAMa.M/mlFe.omAdx33O0ehbEVuHeTa79xq6', 'twjsn9alhm'),
(37, 'Tom', 'Bennett', 'tom@gmail.com', '$2y$10$TCVUe8sgeKCoieCqXhRkNecUolTjJi5OEq4qzv4iOMLX2QvGsAU/O', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
