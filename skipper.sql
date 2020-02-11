-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Lut 2020, 23:16
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `skipper`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classes`
--

CREATE TABLE `classes` (
  `classIndex` int(11) NOT NULL,
  `className` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `classes`
--

INSERT INTO `classes` (`classIndex`, `className`) VALUES
(0, 'Podstawowe słówka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `class_0`
--

CREATE TABLE `class_0` (
  `wordID` int(11) NOT NULL,
  `wordPL` text COLLATE utf8mb4_polish_ci NOT NULL,
  `wordEN` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `class_0`
--

INSERT INTO `class_0` (`wordID`, `wordPL`, `wordEN`) VALUES
(0, 'baza danych', 'database'),
(1, 'czujnik', 'sensor');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `level`
--

CREATE TABLE `level` (
  `value` int(11) NOT NULL,
  `text` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `level`
--

INSERT INTO `level` (`value`, `text`) VALUES
(0, 'Uczeń'),
(1, 'Nauczyciel'),
(2, 'Administrator');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `progress`
--

CREATE TABLE `progress` (
  `UID` int(11) NOT NULL,
  `currentClassID` int(11) NOT NULL,
  `currentWordID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `status`
--

CREATE TABLE `status` (
  `value` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `status`
--

INSERT INTO `status` (`value`, `text`) VALUES
(0, 'aktywny'),
(1, 'nieaktywny'),
(2, 'zablokowany'),
(3, 'usunięty');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_polish_ci NOT NULL,
  `surname` text COLLATE utf8mb4_polish_ci NOT NULL,
  `mail` text COLLATE utf8mb4_polish_ci NOT NULL,
  `password` text COLLATE utf8mb4_polish_ci NOT NULL,
  `status` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`UID`, `name`, `surname`, `mail`, `password`, `status`, `level`) VALUES
(1, 'Stud', 'Uczniowski', 'student@example.com', '$argon2id$v=19$m=65536,t=4,p=1$ZFlTb3JCYUYwOXVKbWxwQg$UbLTuBFGs9h+W1KENVUpzkT6UOlLBxHJIBNW2NULr+8', 0, 0),
(2, 'Krystyna', 'Pawłowicz', 'teacher@example.com', '$argon2id$v=19$m=65536,t=4,p=1$ZFlTb3JCYUYwOXVKbWxwQg$UbLTuBFGs9h+W1KENVUpzkT6UOlLBxHJIBNW2NULr+8', 0, 1),
(3, 'Tomek', 'Administracyjny', 'admin@example.com', '$argon2id$v=19$m=65536,t=4,p=1$ZFlTb3JCYUYwOXVKbWxwQg$UbLTuBFGs9h+W1KENVUpzkT6UOlLBxHJIBNW2NULr+8', 0, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classIndex`);

--
-- Indeksy dla tabeli `class_0`
--
ALTER TABLE `class_0`
  ADD PRIMARY KEY (`wordID`);

--
-- Indeksy dla tabeli `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`value`);

--
-- Indeksy dla tabeli `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`UID`);

--
-- Indeksy dla tabeli `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`value`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `UID` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
