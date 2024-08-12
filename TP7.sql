-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 09:31 PM
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
-- Database: `preventscancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `anamnese`
--

CREATE TABLE `anamnese` (
  `Nome` text NOT NULL,
  `CC` int(50) NOT NULL,
  `NUtente` int(50) NOT NULL,
  `DataNascimento` date NOT NULL DEFAULT current_timestamp(),
  `Email` text NOT NULL,
  `Telefone` int(50) NOT NULL,
  `Altura` decimal(50,0) NOT NULL,
  `Peso` decimal(50,0) NOT NULL,
  `Pergunta1` text NOT NULL,
  `Pergunta1_1` text DEFAULT NULL,
  `Pergunta1_2` text DEFAULT NULL,
  `Pergunta2` text NOT NULL,
  `Pergunta2_1` text DEFAULT NULL,
  `Pergunta3` text NOT NULL,
  `Pergunta3_1` text DEFAULT NULL,
  `Pergunta4` text NOT NULL,
  `Pergunta4_1` text DEFAULT NULL,
  `Pergunta5` text NOT NULL,
  `Pergunta6` text NOT NULL,
  `Pergunta7` text NOT NULL,
  `Pergunta8` text NOT NULL,
  `Pergunta9` text NOT NULL,
  `Pergunta10` text NOT NULL,
  `Pergunta11` text NOT NULL,
  `Respondido a` datetime(6) DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(15, 'utente', '$2y$10$SsgGzFO3MICl7ZFYBysdZesMVpod47n2AmhOSroEtVN141V1cIHkm', '2023-05-15 23:46:53'),
(17, 'medico', '$2y$10$0FIIPm.1wb91lB95fGpCiu1IBJaux1qW3JCNHOOC0GkCXqjd86osq', '2023-05-15 23:47:18'),
(18, 'admin', '$2y$10$oeom0NbB3wib8OHIiCghGuUHnx/3/4nw8/nepb5mwW0jgk5u3IkLG', '2023-05-15 23:47:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
