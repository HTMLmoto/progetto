-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 16, 2019 alle 16:13
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
(1, 'Ultimo terremoto', 'Ultimo terremoto registrato in Peru di Magnitudo 6.9', '0000-00-00 00:00:00', 1, 0, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nickname`, `password`) VALUES
(2, '404', '189bbbb00c5f1fb7fba9ad9285f193d1'),
(3, 'Eyren', '4fd68417f607626bcfe4bb9a0eedc2a9'),
(4, 'Angelo', '4d13a053ad2208574a5d50797be4bd2c'),
(5, 'Antonio', 'bcb7e9e73ce1771a23777b05bd8d3ea9'),
(6, 'manuz', '27e74a7187d63ee3fd2d4788efc98561'),
(7, 'chaper', 'ccd8659a8b6a1b93d5ac6043d5ba9c19'),
(8, 'Andrea 9', 'cf4fe3bb576c98af8f4f7127d18c6833'),
(9, 'aurora', '99c8ef576f385bc322564d5694df6fc2');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
