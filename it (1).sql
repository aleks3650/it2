-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Gru 2021, 01:24
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `it`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `it_users`
--

CREATE TABLE `it_users` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `it_users`
--

INSERT INTO `it_users` (`id`, `user`, `pass`, `email`) VALUES
(1, 'Michal', 'qwerty', 'michalpadlo@gmail.com'),
(2, 'Olek', 'asdfgh', 'aleks3650@interia.pl'),
(11, 'Roman', 'zxcvbn', 'roman@gmail.com'),
(12, 'Stara', '$2y$10$p6f0AeQA/pmbymX.x7fMO.EPr.rMox4xgZIg0jDl1IbokEfPrIqua', 'stara@gmail.com'),
(13, 'Stary', '$2y$10$pAIXfaO/4/s/8xyhmnb.KubImnbLW2XTS6ezhqg4w.yf0pgIT6bIK', 'stary@gmail.com'),
(14, 'zww', '$2y$10$2EsSzauZrCqim.zB.2YHtOwLyTConEIfWUYDxffgfEpIbdTvHkPUK', 'aleks650@interia.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `it_users`
--
ALTER TABLE `it_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `it_users`
--
ALTER TABLE `it_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
