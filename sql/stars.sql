-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 11:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `star-tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `color` varchar(32) NOT NULL,
  `details` varchar(140) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `subject`, `color`, `details`, `timestamp`) VALUES
(4, 'math', 'yellow', 'Solved 6 Prime Factorization Problems and answered them in Exponential Form', '2020-08-07 21:20:37'),
(5, 'math', 'yellow', 'Solved 6 Prime Factorization Problems and answered them in Exponential Form', '2020-08-07 21:20:37'),
(6, 'math', 'yellow', 'Solved 6 Prime Factorization Problems and answered them in Exponential Form', '2020-08-07 21:20:37'),
(7, 'english', 'orange', 'Used a much better verb in place of \"got\" (hurried) in descriptive writing essay', '2020-08-07 21:20:37'),
(8, 'math', 'indigo', 'Answered a difficult long division problem on the first try (6 digit divided by 2 digit)', '2020-08-07 21:20:37'),
(9, 'math', 'orange', 'Solved a simple division problem with a remainder very quickly', '2020-08-07 21:20:37'),
(10, 'math', 'blue', 'Answered 2 division problems with multiples of 10, 100, and 1000', '2020-08-07 21:20:37'),
(11, 'math', 'blue', 'Answered 2 division problems with multiples of 10, 100, and 1000', '2020-08-07 21:20:37'),
(12, 'math', 'green', 'Estimated a quotient between a 4 digit and a 1 digit number', '2020-08-07 21:20:37'),
(13, 'math', 'red', 'Answered a difficult long division problem (5 digit by 2 digit number)', '2020-08-07 21:20:37'),
(14, 'math', 'yellow', 'Recalled divisibility rules from 1 through 5 without help', '2020-08-07 21:20:37'),
(15, 'math', 'red', 'Recalled divisibility rules from 6 through 12 without help                        ', '2020-08-07 21:20:37'),
(16, 'math', 'indigo', 'Understood basic substitution with one-variable equations', '2020-08-07 21:20:37'),
(17, 'math', 'indigo', 'Answered a set of word problems, and started grasping the concept of \"isolating the variable\"', '2020-08-07 21:20:37'),
(18, 'math', 'red', 'Jaanvi completed all multiplication/division word problems without looking at the answers', '2020-08-07 21:20:37'),
(19, 'math', 'red', 'Jaanvi completed all multiplication/division word problems without looking at the answers', '2020-08-07 21:20:37'),
(22, 'english', 'pink', 'Janvi removed instances of the word \"then\" and used better transition words to improve her essay!', '2020-08-07 21:20:37'),
(23, 'english', 'pink', 'Janvi removed instances of the word \"then\" and used better transition words to improve her essay!', '2020-08-07 21:20:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stars`
--
ALTER TABLE `stars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
