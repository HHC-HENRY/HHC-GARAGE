-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 04:05 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `onsell`
--

CREATE TABLE `onsell` (
  `id` int(11) NOT NULL,
  `onsell_name` varchar(128) NOT NULL,
  `onsell_description` varchar(500) NOT NULL,
  `onsell_price` int(11) NOT NULL,
  `onsell_pic` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onsell`
--

INSERT INTO `onsell` (`id`, `onsell_name`, `onsell_description`, `onsell_price`, `onsell_pic`) VALUES
(2, 'Rolls Royce Silver Cloud', 'The Rolls-Royce Silver Cloud is an automobile produced by Rolls-Royce Limited from April 1955 to March 1966.', 1000, 'car1.jpg'),
(3, 'Porsche 911', 'The original Porsche 911 was a luxury sports car made by Porsche AG of Stuttgart, Germany. The famous, distinctive, and durable design was introduced in autumn 1963 and built through 1989.', 900, 'car2.jpg'),
(4, 'Ford Mustang', 'The Ford Mustang is an American car manufactured by Ford. It was originally based on the platform of the second generation North American Ford Falcon, a compact car.', 3000, 'car3.jpg'),
(5, 'Fiat Gamine Vinagle', 'The Vignale Gamine is a small rear-engined car produced by Carrozzeria Vignale from 1967 to 1971, based on the Fiat 500, also known as Nuova 500.', 1000, 'car4.jpg'),
(6, 'Porsche 356', 'The 356 has always been popular with the motor press. It remains a highly regarded collector car. The limited production Carrera Speedster.', 1200, 'car5.jpg'),
(7, 'Porche 911', 'The original Porsche 911 was a luxury sports car made by Porsche AG of Stuttgart, Germany. The famous, distinctive, and durable design was introduced in autumn 1963 and built through 1989.', 4000, 'car6.jpg'),
(8, 'Jaguar F-TYPE', 'The Jaguar F-Type is a two-door, two-seater sports car (S-segment in Continental Europe), based on a shortened platform of the XK convertible, manufactured by the British car manufacturer Jaguar from 2013.', 3000, 'car7.jpg'),
(9, 'Mecedes-Benz 300sl Roadster', 'The Mercedes-Benz 300 SL (W198) was the first iteration of the SL-Class grand tourer and fastest production car of its day. Introduced in 1954 as a two-seat coupé with distinctive gull-wing doors, it was later offered as an open roadster.', 2500, 'car8.jpg'),
(15, 'testing1', 'tesing1', 500, '1cb909f0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `confirmpassword`, `role`) VALUES
(15, 'aaa@hotmail.com', '123', '123', 'admin'),
(24, 'ccc@hotmail.com', '123', '123', ''),
(25, 'bbb@gmail.com', '123', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `onsell`
--
ALTER TABLE `onsell`
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
-- AUTO_INCREMENT for table `onsell`
--
ALTER TABLE `onsell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
