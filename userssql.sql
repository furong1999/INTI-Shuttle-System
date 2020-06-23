-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 02:33 PM
-- Server version: 10.1.40-MariaDB
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
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'admin', 'intisakuraadmin@hotmail.com', '$2y$10$rad4zvKmJdSYPE5BGviihOgLQwvEqv.y9Th92IGPqQL59nnDjF9ZS'),
(2, 'kelvin', 'kelvin@hotmail.com', '$2y$10$s5e7hPAmzCVnmtnzRqf76OR52lxA9bBb0luTS24BRU4wdyu7OHtrK'),
(3, 'tudio', 'tudio@gmail.com', '$2y$10$zy9TxuVsEzRNBOu.FJQD9OVvGVHyG.kta4qc0dCQsbnLx40yGqhre'),
(4, 'wakanda', 'lexusyeah1999@gmail.com', '$2y$10$CkoTZLzZ/PFp1pFt1LK3Vu6yQeU70rlQicfTMXGVeVMCqSDMxfrZu'),
(5, 'test1', 'lexusyeah1999@gmail.com', '$2y$10$CkoTZLzZ/PFp1pFt1LK3Vu6yQeU70rlQicfTMXGVeVMCqSDMxfrZu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
