-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Nov 25, 2019 alle 16:25
-- Versione del server: 10.4.8-MariaDB
-- Versione PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitoterremoti`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titolo` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenuto` text COLLATE utf8_bin NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `pubblico` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 0,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `posts`
--

INSERT INTO `posts` (`id`, `titolo`, `contenuto`, `data`, `pubblico`, `deleted`, `idUser`) VALUES
(1, 'Ultimo terremoto', 'Ultimo terremoto registrato in Peru di Magnitudo 6.9', '0000-00-00 00:00:00', 1, 0, 1),
(2, 'titolo', 'contenuto', '0000-00-00 00:00:00', 1, 0, 0),
(8, 'Il terremoto', 'contenuto terremoto', '0000-00-00 00:00:00', 1, 0, 2),
(9, 'Primo post', 'L\'ultimo terremoto è stato registrato! accadràil 24/11/2019', '0000-00-00 00:00:00', 1, 0, 3),
(10, 'Prova', 'Prova post', '0000-00-00 00:00:00', 1, 0, 2),
(11, 'Prova', 'Prova post', '0000-00-00 00:00:00', 1, 0, 2),
(12, 'Prova', 'Prova post', '0000-00-00 00:00:00', 1, 0, 2),
(13, 'Prova', 'Prova post', '0000-00-00 00:00:00', 1, 0, 2),
(14, 'prova data', 'contenuto\r\n', '2019-11-15 15:56:17', 1, 0, 2),
(15, 'prova data', 'contenuto\r\n', '2019-11-15 15:56:37', 1, 0, 2),
(16, 'prova data', 'contenuto\r\n', '2019-11-15 15:56:42', 1, 0, 2),
(17, 'prova data', 'contenuto\r\n', '2019-11-15 15:56:48', 1, 0, 2),
(18, 'prova data', 'contenuto\r\n', '2019-11-15 15:57:26', 1, 0, 2),
(19, 'prova', 'prova', '2019-11-22 16:22:46', 1, 0, 2),
(20, 'prova', 'prova', '2019-11-22 16:25:37', 1, 0, 2),
(21, 'titolo prova', 'contenuto post prova\r\n', '2019-11-22 16:26:23', 1, 0, 2),
(22, 'Prova', 'Prova', '2019-11-25 16:11:18', 1, 0, 2),
(23, '1', '1', '2019-11-25 16:23:35', 1, 0, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nickname`, `email`, `password`) VALUES
(2, '404', 'emiliotulli03@gmail.com', '189bbbb00c5f1fb7fba9ad9285f193d1'),
(3, 'Eyren', 'retyma24@gmail.com', '2e90147a656f003651de46c7a26b0aa7');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
